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
            $object->setDriver($value);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('Count', $data) && null !== $data['Count']) {
            $value_1 = $data['Count'];
            if (is_int($data['Count'])) {
                $value_1 = $data['Count'];
            } elseif (null === $data['Count']) {
                $value_1 = $data['Count'];
            }
            $object->setCount($value_1);
        } elseif (array_key_exists('Count', $data) && null === $data['Count']) {
            $object->setCount(null);
        }
        if (array_key_exists('DeviceIDs', $data) && null !== $data['DeviceIDs']) {
            $value_2 = $data['DeviceIDs'];
            if (is_array($data['DeviceIDs']) && $this->isOnlyNumericKeys($data['DeviceIDs'])) {
                $values = [];
                foreach ($data['DeviceIDs'] as $value_3) {
                    $values[] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data['DeviceIDs']) {
                $value_2 = $data['DeviceIDs'];
            }
            $object->setDeviceIDs($value_2);
        } elseif (array_key_exists('DeviceIDs', $data) && null === $data['DeviceIDs']) {
            $object->setDeviceIDs(null);
        }
        if (array_key_exists('Capabilities', $data) && null !== $data['Capabilities']) {
            $value_4 = $data['Capabilities'];
            if (is_array($data['Capabilities']) && $this->isOnlyNumericKeys($data['Capabilities'])) {
                $values_1 = [];
                foreach ($data['Capabilities'] as $value_5) {
                    $values_2 = [];
                    foreach ($value_5 as $value_6) {
                        $values_2[] = $value_6;
                    }
                    $values_1[] = $values_2;
                }
                $value_4 = $values_1;
            } elseif (null === $data['Capabilities']) {
                $value_4 = $data['Capabilities'];
            }
            $object->setCapabilities($value_4);
        } elseif (array_key_exists('Capabilities', $data) && null === $data['Capabilities']) {
            $object->setCapabilities(null);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_7 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_8) {
                    $values_3[$key] = $value_8;
                }
                $value_7 = $values_3;
            } elseif (null === $data['Options']) {
                $value_7 = $data['Options'];
            }
            $object->setOptions($value_7);
        } elseif (array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('driver')) {
            $value = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value = $data->getDriver();
            }
            $dataArray['Driver'] = $value;
        }
        if ($data->isInitialized('count')) {
            $value_1 = $data->getCount();
            if (is_int($data->getCount())) {
                $value_1 = $data->getCount();
            } elseif (null === $data->getCount()) {
                $value_1 = $data->getCount();
            }
            $dataArray['Count'] = $value_1;
        }
        if ($data->isInitialized('deviceIDs')) {
            $value_2 = $data->getDeviceIDs();
            if (is_array($data->getDeviceIDs())) {
                $values = [];
                foreach ($data->getDeviceIDs() as $value_3) {
                    $values[] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data->getDeviceIDs()) {
                $value_2 = $data->getDeviceIDs();
            }
            $dataArray['DeviceIDs'] = $value_2;
        }
        if ($data->isInitialized('capabilities')) {
            $value_4 = $data->getCapabilities();
            if (is_array($data->getCapabilities())) {
                $values_1 = [];
                foreach ($data->getCapabilities() as $value_5) {
                    $values_2 = [];
                    foreach ($value_5 as $value_6) {
                        $values_2[] = $value_6;
                    }
                    $values_1[] = $values_2;
                }
                $value_4 = $values_1;
            } elseif (null === $data->getCapabilities()) {
                $value_4 = $data->getCapabilities();
            }
            $dataArray['Capabilities'] = $value_4;
        }
        if ($data->isInitialized('options')) {
            $value_7 = $data->getOptions();
            if (is_object($data->getOptions())) {
                $values_3 = [];
                foreach ($data->getOptions() as $key => $value_8) {
                    $values_3[$key] = $value_8;
                }
                $value_7 = $values_3;
            } elseif (null === $data->getOptions()) {
                $value_7 = $data->getOptions();
            }
            $dataArray['Options'] = $value_7;
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
