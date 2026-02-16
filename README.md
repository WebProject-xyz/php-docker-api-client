# PHP Docker API Client

[![QA](https://github.com/WebProject-xyz/php-docker-api-client/actions/workflows/tests.yml/badge.svg)](https://github.com/WebProject-xyz/php-docker-api-client/actions/workflows/tests.yml)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/86f56d0d268d41e78c56658970e5b721)](https://www.codacy.com/gh/WebProject-xyz/php-docker-api-client/dashboard)
[![Latest Stable Version](https://poser.pugx.org/webproject/php-docker-api-client/v/stable)](https://packagist.org/packages/webproject/php-docker-api-client)
[![License](https://poser.pugx.org/webproject/php-docker-api-client/license)](https://packagist.org/packages/webproject/php-docker-api-client)

A modern, high-level PHP client for the Docker Engine API, built on top of [JanePHP](https://github.com/janephp/janephp) and supporting the latest Docker API specs (v1.51+).

---

## 🚀 Features

- **High-level Service Layer**: Easy access to container information through the `DockerService`.
- **Modern PHP**: Fully typed, leveraging PHP 8.3+ features.
- **Auto-generated Models**: Powered by JanePHP based on official Docker OpenAPI specs.
- **DTO Support**: Includes `DockerContainerDto` for easy data handling and URL extraction from environment variables.
- **CLI Tool**: Built-in `bin/docker-api` for quick interactions.

---

## 📦 Installation

```bash
composer require webproject/php-docker-api-client
```

---

## 💻 Usage

### Initialize the Client

```php
use WebProject\DockerApiClient\Client\DockerApiClientWrapper;
use WebProject\DockerApiClient\Service\DockerService;

// Create a client pointing to your local Docker socket
$wrapper = DockerApiClientWrapper::create(
    uri: 'http://localhost',
    socketPath: '/var/run/docker.sock'
);

$dockerService = new DockerService($wrapper);
```

### List and Inspect Containers

```php
// Get all containers (includes inspection data)
$containers = $dockerService->findAllContainer();

foreach ($containers as $id => $container) {
    echo "Container ID: {$container->id}
";
    echo "Name: {$container->getName()}
";
    echo "Image: {$container->image}
";
    echo "Running: " . ($container->running ? 'Yes' : 'No') . "
";
    
    // Extract virtual hosts from env vars (e.g. for reverse proxies)
    $urls = $container->extractUrlsFromEnvVars(['VIRTUAL_HOST', 'DOMAIN_NAME']);
    print_r($urls);
}
```

### Direct API Access

For low-level access to all Docker API endpoints, use the generated JanePHP client:

```php
$client = $wrapper->getDockerClient();
$info = $client->systemInfo();
echo "Docker Server Version: " . $info->getServerVersion() . "
";
```

---

## 🛠 CLI Usage

The package includes a command-line interface for common tasks:

```bash
# List all containers
bin/docker-api docker:list-containers

# Listen for Docker socket events
bin/docker-api docker:events:listen
```

---

## 📖 Development

The underlying client is generated from the Docker API spec. See [UPDATE.md](spec/UPDATE.md) for details on how to update the generated classes when new Docker API versions are released.

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📄 License

This project is licensed under the MIT License.
