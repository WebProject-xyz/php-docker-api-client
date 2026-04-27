# Upgrade schema

1) goto: https://docs.docker.com/reference/api/engine/latest/
2) download schema to "specs/" folder
3) run command to convert schema to openapi v3.1.0 
   ```shell
   npx -p swagger2openapi swagger2openapi --yaml -t 3.1.0 --outfile docker-v1.54-patched.yaml docker-v1.54.yaml
   ```
   Requires `jane-php/open-api-3-1` (require-dev). Jane auto-detects 3.1 once that package is installed.
4) update jane config [.jane-openapi](../.jane-openapi) "openapi-file" to the new patched file
5) run composer command to generate classes from schema
   ```shell
   composer generate
   ```
6) run tests
   ```shell
   composer tests
   ```