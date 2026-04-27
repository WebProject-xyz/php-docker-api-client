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

class ClusterVolumeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('CapacityBytes', $data) && null !== $data['CapacityBytes']) {
            $value = $data['CapacityBytes'];
            if (is_int($data['CapacityBytes'])) {
                $value = $data['CapacityBytes'];
            } elseif (null === $data['CapacityBytes']) {
                $value = $data['CapacityBytes'];
            }
            $object->setCapacityBytes($value);
        } elseif (array_key_exists('CapacityBytes', $data) && null === $data['CapacityBytes']) {
            $object->setCapacityBytes(null);
        }
        if (array_key_exists('VolumeContext', $data) && null !== $data['VolumeContext']) {
            $value_1 = $data['VolumeContext'];
            if (is_array($data['VolumeContext']) && $this->isOnlyNumericKeys($data['VolumeContext'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['VolumeContext'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['VolumeContext']) {
                $value_1 = $data['VolumeContext'];
            }
            $object->setVolumeContext($value_1);
        } elseif (array_key_exists('VolumeContext', $data) && null === $data['VolumeContext']) {
            $object->setVolumeContext(null);
        }
        if (array_key_exists('VolumeID', $data) && null !== $data['VolumeID']) {
            $value_3 = $data['VolumeID'];
            if (is_string($data['VolumeID'])) {
                $value_3 = $data['VolumeID'];
            } elseif (null === $data['VolumeID']) {
                $value_3 = $data['VolumeID'];
            }
            $object->setVolumeID($value_3);
        } elseif (array_key_exists('VolumeID', $data) && null === $data['VolumeID']) {
            $object->setVolumeID(null);
        }
        if (array_key_exists('AccessibleTopology', $data) && null !== $data['AccessibleTopology']) {
            $value_4 = $data['AccessibleTopology'];
            if (is_array($data['AccessibleTopology']) && $this->isOnlyNumericKeys($data['AccessibleTopology'])) {
                $values_1 = [];
                foreach ($data['AccessibleTopology'] as $value_5) {
                    $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_5 as $key_1 => $value_6) {
                        $values_2[$key_1] = $value_6;
                    }
                    $values_1[] = $values_2;
                }
                $value_4 = $values_1;
            } elseif (null === $data['AccessibleTopology']) {
                $value_4 = $data['AccessibleTopology'];
            }
            $object->setAccessibleTopology($value_4);
        } elseif (array_key_exists('AccessibleTopology', $data) && null === $data['AccessibleTopology']) {
            $object->setAccessibleTopology(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('capacityBytes')) {
            $value = $data->getCapacityBytes();
            if (is_int($data->getCapacityBytes())) {
                $value = $data->getCapacityBytes();
            } elseif (null === $data->getCapacityBytes()) {
                $value = $data->getCapacityBytes();
            }
            $dataArray['CapacityBytes'] = $value;
        }
        if ($data->isInitialized('volumeContext')) {
            $value_1 = $data->getVolumeContext();
            if (is_object($data->getVolumeContext())) {
                $values = [];
                foreach ($data->getVolumeContext() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getVolumeContext()) {
                $value_1 = $data->getVolumeContext();
            }
            $dataArray['VolumeContext'] = $value_1;
        }
        if ($data->isInitialized('volumeID')) {
            $value_3 = $data->getVolumeID();
            if (is_string($data->getVolumeID())) {
                $value_3 = $data->getVolumeID();
            } elseif (null === $data->getVolumeID()) {
                $value_3 = $data->getVolumeID();
            }
            $dataArray['VolumeID'] = $value_3;
        }
        if ($data->isInitialized('accessibleTopology')) {
            $value_4 = $data->getAccessibleTopology();
            if (is_array($data->getAccessibleTopology())) {
                $values_1 = [];
                foreach ($data->getAccessibleTopology() as $value_5) {
                    $values_2 = [];
                    foreach ($value_5 as $key_1 => $value_6) {
                        $values_2[$key_1] = $value_6;
                    }
                    $values_1[] = $values_2;
                }
                $value_4 = $values_1;
            } elseif (null === $data->getAccessibleTopology()) {
                $value_4 = $data->getAccessibleTopology();
            }
            $dataArray['AccessibleTopology'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
