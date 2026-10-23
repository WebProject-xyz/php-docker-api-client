# Upgrade schema

1) goto: https://docs.docker.com/reference/api/engine/latest/
2) download schema to "specs/" folder
3) run command to convert schema to openapi v3.1.0
   ```shell
   npx -p swagger2openapi swagger2openapi --yaml -t 3.1.0 --outfile docker-v1.55-patched.yaml docker-v1.55.yaml
   ```
   Requires `jane-php/open-api-3-1` (require-dev). Jane auto-detects 3.1 once that package is installed.
4) **Patch the converted file.** swagger2openapi output is not directly usable — Docker returns null for many "optional" fields and uses nano-precision timestamps that jane misparses. Apply these in-place:

   ```shell
   # 4a) date format: Jane v8 handles RFC 3339 nano-precision timestamps
   #     using lenient parsing and date-prefer-interface => true.
   #     Standard format: date-time is preserved.

   # 4b) nullables. jane open-api-3-1 ignores `nullable: true` and only
   #     honors OpenAPI 3.1 type-arrays. Walk every schema and add 'null'
   #     to non-required scalar/array properties; leave object+$ref-
   #     additionalProperties alone (triggers a jane codegen bug).
   uv run --with ruamel.yaml python3 spec/patch.py spec/docker-v1.55-patched.yaml
   ```

   The Python script lives in `spec/patch.py` (idempotent — safe to re-run).
   Needs `ruamel.yaml`; without a system install use
   `uv run --with ruamel.yaml python3 spec/patch.py spec/docker-v1.55-patched.yaml`.
   It performs:
   - Convert every existing `nullable: true` → `type: [orig, 'null']` union.
   - Walk `components.schemas`: every property NOT in its parent's `required` list gets `null` added to its type, **except** `type: object` whose `additionalProperties` is a `$ref` (e.g. `NetworkSettings.Networks`) — making those nullable triggers jane's broken `isOnlyNumericKeys` short-circuit and breaks denormalization of map values into model instances.
   - Schema-level nullable on `HostConfig` and `PortMap` (matches v1.51 hand-fix).

5) update jane config [.jane-openapi](../.jane-openapi) "openapi-file" to the new patched file
6) run composer command to generate classes from schema
   ```shell
   composer generate
   ```
7) smoke test against a live socket:
   ```shell
   bin/docker-api docker:list -vv
   ```
8) run tests
   ```shell
   composer test
   ```

## Known traps

- **`format: date-time`** — In Jane v7, RFC3339Nano failed; Jane v8 parses RFC 3339 nano-precision timestamps leniently into `\DateTimeInterface`.
- **`nullable: true` (OpenAPI 3.0 form)** — `jane-php/open-api-3-1` does not honor it. Use `type: [orig, 'null']` instead.
- **`type: [object, 'null']` + `additionalProperties: { $ref: ... }`** — jane emits a broken `isOnlyNumericKeys` switch that skips `denormalize()` for string-keyed maps, leaving values as raw arrays. Keep these objects non-nullable.
