<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WebProject\DockerApi\Library\Generated\Runtime\Normalizer\CheckArray;
use WebProject\DockerApi\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function get_class;
use function is_array;
use function is_object;
use function is_string;

class ContainerdInfoNamespacesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Containers', $data) && null !== $data['Containers']) {
            $value = $data['Containers'];
            if (is_string($data['Containers'])) {
                $value = $data['Containers'];
            } elseif (null === $data['Containers']) {
                $value = $data['Containers'];
            }
            $object->setContainers($value);
        } elseif (array_key_exists('Containers', $data) && null === $data['Containers']) {
            $object->setContainers(null);
        }
        if (array_key_exists('Plugins', $data) && null !== $data['Plugins']) {
            $value_1 = $data['Plugins'];
            if (is_string($data['Plugins'])) {
                $value_1 = $data['Plugins'];
            } elseif (null === $data['Plugins']) {
                $value_1 = $data['Plugins'];
            }
            $object->setPlugins($value_1);
        } elseif (array_key_exists('Plugins', $data) && null === $data['Plugins']) {
            $object->setPlugins(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('containers')) {
            $value = $data->getContainers();
            if (is_string($data->getContainers())) {
                $value = $data->getContainers();
            } elseif (null === $data->getContainers()) {
                $value = $data->getContainers();
            }
            $dataArray['Containers'] = $value;
        }
        if ($data->isInitialized('plugins')) {
            $value_1 = $data->getPlugins();
            if (is_string($data->getPlugins())) {
                $value_1 = $data->getPlugins();
            } elseif (null === $data->getPlugins()) {
                $value_1 = $data->getPlugins();
            }
            $dataArray['Plugins'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
