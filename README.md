# php-docker-api-client - A PHP docker API client


## Based on Docker API Version spec [docker-v1.51.yaml](spec/docker-v1.51.yaml)
> converted to openapi v3.1.0 [docker-v1.51-patched.yaml](spec/docker-v1.51-patched.yaml) see  [UPDATE.md](spec/UPDATE.md) how to upgrade client

## Example

> list running all containers 
```shell
bin/docker-api docker:list-containers
```

> listen for socket events 
```shell
bin/docker-api docker:events:listen
```

#### Generated with [janephp/janephp](https://github.com/janephp/janephp)
