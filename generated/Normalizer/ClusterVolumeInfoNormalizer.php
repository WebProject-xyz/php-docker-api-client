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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('CapacityBytes', $data)) {
            $object->setCapacityBytes($data['CapacityBytes']);
            unset($data['CapacityBytes']);
        }
        if (array_key_exists('VolumeContext', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['VolumeContext'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setVolumeContext($values);
            unset($data['VolumeContext']);
        }
        if (array_key_exists('VolumeID', $data)) {
            $object->setVolumeID($data['VolumeID']);
            unset($data['VolumeID']);
        }
        if (array_key_exists('AccessibleTopology', $data)) {
            $values_1 = [];
            foreach ($data['AccessibleTopology'] as $value_1) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setAccessibleTopology($values_1);
            unset($data['AccessibleTopology']);
        }
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('capacityBytes') && null !== $data->getCapacityBytes()) {
            $dataArray['CapacityBytes'] = $data->getCapacityBytes();
        }
        if ($data->isInitialized('volumeContext') && null !== $data->getVolumeContext()) {
            $values = [];
            foreach ($data->getVolumeContext() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['VolumeContext'] = $values;
        }
        if ($data->isInitialized('volumeID') && null !== $data->getVolumeID()) {
            $dataArray['VolumeID'] = $data->getVolumeID();
        }
        if ($data->isInitialized('accessibleTopology') && null !== $data->getAccessibleTopology()) {
            $values_1 = [];
            foreach ($data->getAccessibleTopology() as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $dataArray['AccessibleTopology'] = $values_1;
        }
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_3;
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
