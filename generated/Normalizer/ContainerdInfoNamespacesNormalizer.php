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
            $object->containers = $value;
            unset($data['Containers']);
        } elseif (array_key_exists('Containers', $data)) {
            $object->containers = null;
            unset($data['Containers']);
        }
        if (array_key_exists('Plugins', $data) && null !== $data['Plugins']) {
            $value_1 = $data['Plugins'];
            if (is_string($data['Plugins'])) {
                $value_1 = $data['Plugins'];
            } elseif (null === $data['Plugins']) {
                $value_1 = $data['Plugins'];
            }
            $object->plugins = $value_1;
            unset($data['Plugins']);
        } elseif (array_key_exists('Plugins', $data)) {
            $object->plugins = null;
            unset($data['Plugins']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('containers', get_object_vars($data)) && null !== ($data->containers ?? null)) {
            $value = $data->containers;
            if (is_string($data->containers)) {
                $value = $data->containers;
            } elseif (null === $data->containers) {
                $value = $data->containers;
            }
            $dataArray['Containers'] = $value;
        }
        if (array_key_exists('plugins', get_object_vars($data)) && null !== ($data->plugins ?? null)) {
            $value_1 = $data->plugins;
            if (is_string($data->plugins)) {
                $value_1 = $data->plugins;
            } elseif (null === $data->plugins) {
                $value_1 = $data->plugins;
            }
            $dataArray['Plugins'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
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
