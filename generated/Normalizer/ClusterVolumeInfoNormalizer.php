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
            $object->capacityBytes = $value;
            unset($data['CapacityBytes']);
        } elseif (array_key_exists('CapacityBytes', $data)) {
            $object->capacityBytes = null;
            unset($data['CapacityBytes']);
        }
        if (array_key_exists('VolumeContext', $data) && null !== $data['VolumeContext']) {
            $value_1 = $data['VolumeContext'];
            if (is_array($data['VolumeContext']) && $this->isOnlyNumericKeys($data['VolumeContext'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['VolumeContext'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['VolumeContext']) {
                $value_1 = $data['VolumeContext'];
            }
            $object->volumeContext = $value_1;
            unset($data['VolumeContext']);
        } elseif (array_key_exists('VolumeContext', $data)) {
            $object->volumeContext = null;
            unset($data['VolumeContext']);
        }
        if (array_key_exists('VolumeID', $data) && null !== $data['VolumeID']) {
            $value_3 = $data['VolumeID'];
            if (is_string($data['VolumeID'])) {
                $value_3 = $data['VolumeID'];
            } elseif (null === $data['VolumeID']) {
                $value_3 = $data['VolumeID'];
            }
            $object->volumeID = $value_3;
            unset($data['VolumeID']);
        } elseif (array_key_exists('VolumeID', $data)) {
            $object->volumeID = null;
            unset($data['VolumeID']);
        }
        if (array_key_exists('AccessibleTopology', $data) && null !== $data['AccessibleTopology']) {
            $values_1 = [];
            foreach ($data['AccessibleTopology'] as $value_4) {
                $values_1[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\Topology::class, 'json', $context);
            }
            $object->accessibleTopology = $values_1;
            unset($data['AccessibleTopology']);
        } elseif (array_key_exists('AccessibleTopology', $data)) {
            $object->accessibleTopology = null;
            unset($data['AccessibleTopology']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('capacityBytes', get_object_vars($data)) && null !== ($data->capacityBytes ?? null)) {
            $value = $data->capacityBytes;
            if (is_int($data->capacityBytes)) {
                $value = $data->capacityBytes;
            } elseif (null === $data->capacityBytes) {
                $value = $data->capacityBytes;
            }
            $dataArray['CapacityBytes'] = $value;
        }
        if (array_key_exists('volumeContext', get_object_vars($data)) && null !== ($data->volumeContext ?? null)) {
            $value_1 = $data->volumeContext;
            if (is_iterable($data->volumeContext)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->volumeContext as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->volumeContext) {
                $value_1 = $data->volumeContext;
            }
            $dataArray['VolumeContext'] = $value_1;
        }
        if (array_key_exists('volumeID', get_object_vars($data)) && null !== ($data->volumeID ?? null)) {
            $value_3 = $data->volumeID;
            if (is_string($data->volumeID)) {
                $value_3 = $data->volumeID;
            } elseif (null === $data->volumeID) {
                $value_3 = $data->volumeID;
            }
            $dataArray['VolumeID'] = $value_3;
        }
        if (array_key_exists('accessibleTopology', get_object_vars($data)) && null !== ($data->accessibleTopology ?? null)) {
            $values_1 = [];
            foreach ($data->accessibleTopology as $value_4) {
                $normalized = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_1[] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['AccessibleTopology'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
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
