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
use function is_bool;
use function is_object;
use function is_string;

class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('Remote', $data) && null !== $data['Remote']) {
            $value_1 = $data['Remote'];
            if (is_string($data['Remote'])) {
                $value_1 = $data['Remote'];
            } elseif (null === $data['Remote']) {
                $value_1 = $data['Remote'];
            }
            $object->remote = $value_1;
            unset($data['Remote']);
        } elseif (array_key_exists('Remote', $data)) {
            $object->remote = null;
            unset($data['Remote']);
        }
        if (array_key_exists('Disabled', $data) && null !== $data['Disabled']) {
            $value_2 = $data['Disabled'];
            if (is_bool($data['Disabled'])) {
                $value_2 = $data['Disabled'];
            } elseif (null === $data['Disabled']) {
                $value_2 = $data['Disabled'];
            }
            $object->disabled = $value_2;
            unset($data['Disabled']);
        } elseif (array_key_exists('Disabled', $data)) {
            $object->disabled = null;
            unset($data['Disabled']);
        }
        if (array_key_exists('PluginPrivilege', $data) && null !== $data['PluginPrivilege']) {
            $values = [];
            foreach ($data['PluginPrivilege'] as $value_3) {
                $values[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class, 'json', $context);
            }
            $object->pluginPrivilege = $values;
            unset($data['PluginPrivilege']);
        } elseif (array_key_exists('PluginPrivilege', $data)) {
            $object->pluginPrivilege = null;
            unset($data['PluginPrivilege']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('remote', get_object_vars($data)) && null !== ($data->remote ?? null)) {
            $value_1 = $data->remote;
            if (is_string($data->remote)) {
                $value_1 = $data->remote;
            } elseif (null === $data->remote) {
                $value_1 = $data->remote;
            }
            $dataArray['Remote'] = $value_1;
        }
        if (array_key_exists('disabled', get_object_vars($data)) && null !== ($data->disabled ?? null)) {
            $value_2 = $data->disabled;
            if (is_bool($data->disabled)) {
                $value_2 = $data->disabled;
            } elseif (null === $data->disabled) {
                $value_2 = $data->disabled;
            }
            $dataArray['Disabled'] = $value_2;
        }
        if (array_key_exists('pluginPrivilege', get_object_vars($data)) && null !== ($data->pluginPrivilege ?? null)) {
            $values = [];
            foreach ($data->pluginPrivilege as $value_3) {
                $normalized = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['PluginPrivilege'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
