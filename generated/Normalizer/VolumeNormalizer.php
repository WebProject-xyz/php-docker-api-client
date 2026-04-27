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

class VolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Volume::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Volume::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Volume();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->setDriver($data['Driver']);
        }
        if (array_key_exists('Mountpoint', $data)) {
            $object->setMountpoint($data['Mountpoint']);
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $value = $data['CreatedAt'];
            if (is_string($data['CreatedAt'])) {
                $value = $data['CreatedAt'];
            } elseif (null === $data['CreatedAt']) {
                $value = $data['CreatedAt'];
            }
            $object->setCreatedAt($value);
        } elseif (array_key_exists('CreatedAt', $data) && null === $data['CreatedAt']) {
            $object->setCreatedAt(null);
        }
        if (array_key_exists('Status', $data) && null !== $data['Status']) {
            $value_1 = $data['Status'];
            if (is_array($data['Status']) && $this->isOnlyNumericKeys($data['Status'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Status'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Status']) {
                $value_1 = $data['Status'];
            }
            $object->setStatus($value_1);
        } elseif (array_key_exists('Status', $data) && null === $data['Status']) {
            $object->setStatus(null);
        }
        if (array_key_exists('Labels', $data)) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_1 => $value_3) {
                $values_1[$key_1] = $value_3;
            }
            $object->setLabels($values_1);
        }
        if (array_key_exists('Scope', $data)) {
            $object->setScope($data['Scope']);
        }
        if (array_key_exists('ClusterVolume', $data)) {
            $object->setClusterVolume($this->denormalizer->denormalize($data['ClusterVolume'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class, 'json', $context));
        }
        if (array_key_exists('Options', $data)) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key_2 => $value_4) {
                $values_2[$key_2] = $value_4;
            }
            $object->setOptions($values_2);
        }
        if (array_key_exists('UsageData', $data) && null !== $data['UsageData']) {
            $object->setUsageData($this->denormalizer->denormalize($data['UsageData'], \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class, 'json', $context));
        } elseif (array_key_exists('UsageData', $data) && null === $data['UsageData']) {
            $object->setUsageData(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray               = [];
        $dataArray['Name']       = $data->getName();
        $dataArray['Driver']     = $data->getDriver();
        $dataArray['Mountpoint'] = $data->getMountpoint();
        if ($data->isInitialized('createdAt')) {
            $value = $data->getCreatedAt();
            if (is_string($data->getCreatedAt())) {
                $value = $data->getCreatedAt();
            } elseif (null === $data->getCreatedAt()) {
                $value = $data->getCreatedAt();
            }
            $dataArray['CreatedAt'] = $value;
        }
        if ($data->isInitialized('status')) {
            $value_1 = $data->getStatus();
            if (is_object($data->getStatus())) {
                $values = [];
                foreach ($data->getStatus() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getStatus()) {
                $value_1 = $data->getStatus();
            }
            $dataArray['Status'] = $value_1;
        }
        $values_1 = [];
        foreach ($data->getLabels() as $key_1 => $value_3) {
            $values_1[$key_1] = $value_3;
        }
        $dataArray['Labels'] = $values_1;
        $dataArray['Scope']  = $data->getScope();
        if ($data->isInitialized('clusterVolume') && null !== $data->getClusterVolume()) {
            $dataArray['ClusterVolume'] = $this->normalizer->normalize($data->getClusterVolume(), 'json', $context);
        }
        $values_2 = [];
        foreach ($data->getOptions() as $key_2 => $value_4) {
            $values_2[$key_2] = $value_4;
        }
        $dataArray['Options'] = $values_2;
        if ($data->isInitialized('usageData')) {
            $dataArray['UsageData'] = $this->normalizer->normalize($data->getUsageData(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Volume::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
