# Upgrade schema

1) goto: https://docs.docker.com/reference/api/engine/latest/
2) download schema to "specs/" folder
3) run command to convert schema to openapi v3.1.0
   ```shell
   npx -p swagger2openapi swagger2openapi --yaml -t 3.1.0 --outfile docker-v1.54-patched.yaml docker-v1.54.yaml
   ```
   Requires `jane-php/open-api-3-1` (require-dev). Jane auto-detects 3.1 once that package is installed.
4) **Patch the converted file.** swagger2openapi output is not directly usable — Docker returns null for many "optional" fields and uses nano-precision timestamps that jane misparses. Apply these in-place:

   ```shell
   # 4a) date format: jane parses `format: date-time` as `Y-m-d\TH:i:sP`
   #     which fails on Docker's RFC3339Nano timestamps. Renaming to
   #     dateTime (camelCase) makes jane skip the field → keeps as plain string.
   sed -i 's/format: date-time/format: dateTime/g' spec/docker-v1.54-patched.yaml

   # 4b) nullables. jane open-api-3-1 ignores `nullable: true` and only
   #     honors OpenAPI 3.1 type-arrays. Walk every schema and add 'null'
   #     to non-required scalar/array properties; leave object+$ref-
   #     additionalProperties alone (triggers a jane codegen bug).
   python3 spec/patch.py
   ```

   The Python script lives in `spec/patch.py` (idempotent — safe to re-run).
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

- **`format: date-time`** — jane's `Y-m-d\TH:i:sP` format fails Docker's `2026-04-27T10:44:24.496525531Z`. Workaround: rename to `dateTime` so jane treats the field as a plain string.
- **`nullable: true` (OpenAPI 3.0 form)** — `jane-php/open-api-3-1` does not honor it. Use `type: [orig, 'null']` instead.
- **`type: [object, 'null']` + `additionalProperties: { $ref: ... }`** — jane emits a broken `isOnlyNumericKeys` switch that skips `denormalize()` for string-keyed maps, leaving values as raw arrays. Keep these objects non-nullable.
- **`format: dateTime` (camelCase typo)** — intentional. jane only recognizes `date-time`; the typo lets the field stay as a plain string.
