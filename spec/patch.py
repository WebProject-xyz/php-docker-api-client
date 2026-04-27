#!/usr/bin/env python3
"""Patch the swagger2openapi-converted Docker spec for jane-php/open-api-3-1.

Idempotent. Run after swagger2openapi conversion, before composer generate.

Reads the spec path from .jane-openapi if invoked from the repo root, else
defaults to spec/docker-v1.54-patched.yaml.

Requires: ruamel.yaml (pip install ruamel.yaml)
"""
from __future__ import annotations

import re
import sys
from pathlib import Path

from ruamel.yaml import YAML
from ruamel.yaml.comments import CommentedSeq


def find_spec_path() -> Path:
    repo_root = Path(__file__).resolve().parent.parent
    jane_cfg = repo_root / ".jane-openapi"
    if jane_cfg.exists():
        m = re.search(r"openapi-file'\s*=>.*?'(spec/[^']+)'", jane_cfg.read_text())
        if m:
            return repo_root / m.group(1)
        m = re.search(r"openapi-file'\s*=>.*?/spec/([^']+)'", jane_cfg.read_text())
        if m:
            return repo_root / "spec" / m.group(1)
    return repo_root / "spec" / "docker-v1.54-patched.yaml"


def make_nullable(node) -> bool:
    if not isinstance(node, dict):
        return False
    if "nullable" in node:
        if node["nullable"] is True:
            del node["nullable"]
        else:
            return False
    if "$ref" in node:
        return False
    t = node.get("type")
    if t is None:
        return False
    if isinstance(t, str):
        if t == "null":
            return False
        seq = CommentedSeq([t, "null"])
        seq.fa.set_flow_style()
        node["type"] = seq
        return True
    if isinstance(t, list):
        if "null" not in t:
            t.append("null")
            return True
    return False


def is_object_with_ref_addprops(node) -> bool:
    """type:object with additionalProperties: $ref → keep non-nullable."""
    if not isinstance(node, dict):
        return False
    t = node.get("type")
    is_object = t == "object" or (isinstance(t, list) and "object" in t)
    if not is_object:
        return False
    ap = node.get("additionalProperties")
    return isinstance(ap, dict) and "$ref" in ap


NULLABLE_SCALAR_OR_ARRAY = {"array", "integer", "number", "string", "boolean"}


def walk_schema(node) -> None:
    if not isinstance(node, dict):
        return
    own_required = set(node.get("required") or [])
    if "properties" in node and isinstance(node["properties"], dict):
        for pname, pnode in node["properties"].items():
            if isinstance(pnode, dict) and pname not in own_required:
                t = pnode.get("type")
                if is_object_with_ref_addprops(pnode):
                    pass
                elif isinstance(t, str) and t in NULLABLE_SCALAR_OR_ARRAY:
                    make_nullable(pnode)
                elif t == "object":
                    make_nullable(pnode)
                elif isinstance(t, list):
                    if "null" not in t and any(
                        x in NULLABLE_SCALAR_OR_ARRAY | {"object"} for x in t
                    ):
                        t.append("null")
            walk_schema(pnode)
    for k in ("allOf", "oneOf", "anyOf"):
        if k in node and isinstance(node[k], list):
            for sub in node[k]:
                walk_schema(sub)
    if "items" in node and isinstance(node["items"], dict):
        walk_schema(node["items"])
    if "additionalProperties" in node and isinstance(node["additionalProperties"], dict):
        walk_schema(node["additionalProperties"])


def convert_existing_nullable(node) -> None:
    if isinstance(node, dict):
        if node.get("nullable") is True:
            make_nullable(node)
        for v in list(node.values()):
            convert_existing_nullable(v)
    elif isinstance(node, list):
        for v in node:
            convert_existing_nullable(v)


def main() -> int:
    spec_path = Path(sys.argv[1]) if len(sys.argv) > 1 else find_spec_path()
    if not spec_path.exists():
        print(f"spec not found: {spec_path}", file=sys.stderr)
        return 1

    text = spec_path.read_text()
    text = text.replace("format: date-time", "format: dateTime")
    spec_path.write_text(text)

    yaml = YAML()
    yaml.preserve_quotes = True
    yaml.width = 4096
    yaml.indent(mapping=2, sequence=4, offset=2)

    with spec_path.open() as f:
        doc = yaml.load(f)

    schemas = doc["components"]["schemas"]
    for sch in schemas.values():
        walk_schema(sch)

    convert_existing_nullable(doc)

    for s in ("HostConfig", "PortMap"):
        if s in schemas:
            make_nullable(schemas[s])

    with spec_path.open("w") as f:
        yaml.dump(doc, f)

    print(f"patched {spec_path}")
    return 0


if __name__ == "__main__":
    sys.exit(main())
