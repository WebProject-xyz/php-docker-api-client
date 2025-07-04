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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Volume();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->setDriver($data['Driver']);
            unset($data['Driver']);
        }
        if (array_key_exists('Mountpoint', $data)) {
            $object->setMountpoint($data['Mountpoint']);
            unset($data['Mountpoint']);
        }
        if (array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
            unset($data['CreatedAt']);
        }
        if (array_key_exists('Status', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Status'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\VolumeStatusItem::class, 'json', $context);
            }
            $object->setStatus($values);
            unset($data['Status']);
        }
        if (array_key_exists('Labels', $data)) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setLabels($values_1);
            unset($data['Labels']);
        }
        if (array_key_exists('Scope', $data)) {
            $object->setScope($data['Scope']);
            unset($data['Scope']);
        }
        if (array_key_exists('ClusterVolume', $data)) {
            $object->setClusterVolume($this->denormalizer->denormalize($data['ClusterVolume'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class, 'json', $context));
            unset($data['ClusterVolume']);
        }
        if (array_key_exists('Options', $data)) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setOptions($values_2);
            unset($data['Options']);
        }
        if (array_key_exists('UsageData', $data) && null !== $data['UsageData']) {
            $object->setUsageData($this->denormalizer->denormalize($data['UsageData'], \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class, 'json', $context));
            unset($data['UsageData']);
        } elseif (array_key_exists('UsageData', $data) && null === $data['UsageData']) {
            $object->setUsageData(null);
        }
        foreach ($data as $key_3 => $value_3) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray               = [];
        $dataArray['Name']       = $data->getName();
        $dataArray['Driver']     = $data->getDriver();
        $dataArray['Mountpoint'] = $data->getMountpoint();
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['CreatedAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $values = [];
            foreach ($data->getStatus() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Status'] = $values;
        }
        $values_1 = [];
        foreach ($data->getLabels() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['Labels'] = $values_1;
        $dataArray['Scope']  = $data->getScope();
        if ($data->isInitialized('clusterVolume') && null !== $data->getClusterVolume()) {
            $dataArray['ClusterVolume'] = $this->normalizer->normalize($data->getClusterVolume(), 'json', $context);
        }
        $values_2 = [];
        foreach ($data->getOptions() as $key_2 => $value_2) {
            $values_2[$key_2] = $value_2;
        }
        $dataArray['Options'] = $values_2;
        if ($data->isInitialized('usageData') && null !== $data->getUsageData()) {
            $dataArray['UsageData'] = $this->normalizer->normalize($data->getUsageData(), 'json', $context);
        }
        foreach ($data as $key_3 => $value_3) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_3;
            }
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
