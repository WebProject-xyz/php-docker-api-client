# PHP Docker API Client

[![CI](https://github.com/WebProject-xyz/php-docker-api-client/actions/workflows/ci.yml/badge.svg)](https://github.com/WebProject-xyz/php-docker-api-client/actions/workflows/ci.yml)
[![Release](https://github.com/WebProject-xyz/php-docker-api-client/actions/workflows/release.yml/badge.svg)](https://github.com/WebProject-xyz/php-docker-api-client/actions/workflows/release.yml)
[![PHP Version](https://img.shields.io/packagist/php-v/webproject-xyz/docker-api-client)](https://packagist.org/packages/webproject-xyz/docker-api-client)
[![Latest Stable Version](https://img.shields.io/packagist/v/webproject-xyz/docker-api-client)](https://packagist.org/packages/webproject-xyz/docker-api-client)
[![Total Downloads](https://img.shields.io/packagist/dt/webproject-xyz/docker-api-client)](https://packagist.org/packages/webproject-xyz/docker-api-client)
[![License](https://img.shields.io/packagist/l/webproject-xyz/docker-api-client)](https://packagist.org/packages/webproject-xyz/docker-api-client)

A modern PHP client for the Docker Engine API (v1.51+), built with [JanePHP](https://github.com/janephp/janephp).

---

## 💻 Usage

### Initialize Service
```php
use WebProject\DockerApiClient\Client\DockerApiClientWrapper;
use WebProject\DockerApiClient\Service\DockerService;

$service = new DockerService(
    DockerApiClientWrapper::create('http://localhost', '/var/run/docker.sock')
);
```

### Manage Containers
```php
// List and inspect containers
foreach ($service->findAllContainer() as $container) {
    echo "{$container->getName()}: " . ($container->running ? 'Running' : 'Stopped') . "
";
    
    // Extract env-based URLs
    $urls = $container->extractUrlsFromEnvVars(['VIRTUAL_HOST']);
}
```

### CLI Support
```bash
bin/docker-api docker:list-containers
```

---

## 🤝 Contributing
Pull Requests are welcome.

## 📄 License
MIT License.
