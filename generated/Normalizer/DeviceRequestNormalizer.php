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
use function is_int;
use function is_object;
use function is_string;

class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\DeviceRequest();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value = $data['Driver'];
            }
            $object->driver = $value;
            unset($data['Driver']);
        } elseif (array_key_exists('Driver', $data)) {
            $object->driver = null;
            unset($data['Driver']);
        }
        if (array_key_exists('Count', $data) && null !== $data['Count']) {
            $value_1 = $data['Count'];
            if (is_int($data['Count'])) {
                $value_1 = $data['Count'];
            } elseif (null === $data['Count']) {
                $value_1 = $data['Count'];
            }
            $object->count = $value_1;
            unset($data['Count']);
        } elseif (array_key_exists('Count', $data)) {
            $object->count = null;
            unset($data['Count']);
        }
        if (array_key_exists('DeviceIDs', $data) && null !== $data['DeviceIDs']) {
            $values = [];
            foreach ($data['DeviceIDs'] as $value_2) {
                $values[] = $value_2;
            }
            $object->deviceIDs = $values;
            unset($data['DeviceIDs']);
        } elseif (array_key_exists('DeviceIDs', $data)) {
            $object->deviceIDs = null;
            unset($data['DeviceIDs']);
        }
        if (array_key_exists('Capabilities', $data) && null !== $data['Capabilities']) {
            $values_1 = [];
            foreach ($data['Capabilities'] as $value_3) {
                $values_2 = [];
                foreach ($value_3 as $value_4) {
                    $values_2[] = $value_4;
                }
                $values_1[] = $values_2;
            }
            $object->capabilities = $values_1;
            unset($data['Capabilities']);
        } elseif (array_key_exists('Capabilities', $data)) {
            $object->capabilities = null;
            unset($data['Capabilities']);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_5 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values_3 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Options'] as $key => $value_6) {
                    $values_3[$key] = $value_6;
                }
                $value_5 = $values_3;
            } elseif (null === $data['Options']) {
                $value_5 = $data['Options'];
            }
            $object->options = $value_5;
            unset($data['Options']);
        } elseif (array_key_exists('Options', $data)) {
            $object->options = null;
            unset($data['Options']);
        }
        foreach ($data as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_7;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $value = $data->driver;
            if (is_string($data->driver)) {
                $value = $data->driver;
            } elseif (null === $data->driver) {
                $value = $data->driver;
            }
            $dataArray['Driver'] = $value;
        }
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $value_1 = $data->count;
            if (is_int($data->count)) {
                $value_1 = $data->count;
            } elseif (null === $data->count) {
                $value_1 = $data->count;
            }
            $dataArray['Count'] = $value_1;
        }
        if (array_key_exists('deviceIDs', get_object_vars($data)) && null !== ($data->deviceIDs ?? null)) {
            $values = [];
            foreach ($data->deviceIDs as $value_2) {
                $values[] = $value_2;
            }
            $dataArray['DeviceIDs'] = $values;
        }
        if (array_key_exists('capabilities', get_object_vars($data)) && null !== ($data->capabilities ?? null)) {
            $values_1 = [];
            foreach ($data->capabilities as $value_3) {
                $values_2 = [];
                foreach ($value_3 as $value_4) {
                    $values_2[] = $value_4;
                }
                $values_1[] = $values_2;
            }
            $dataArray['Capabilities'] = $values_1;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $value_5 = $data->options;
            if (is_iterable($data->options)) {
                $values_3 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->options as $key => $value_6) {
                    $values_3[$key] = $value_6;
                }
                $value_5 = $values_3;
            } elseif (null === $data->options) {
                $value_5 = $data->options;
            }
            $dataArray['Options'] = $value_5;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_7;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
