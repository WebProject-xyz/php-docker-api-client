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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\VolumeConstraint());
        }
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
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $values[$key] = $values_1;
            }
            $object->setStatus($values);
            unset($data['Status']);
        }
        if (array_key_exists('Labels', $data)) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setLabels($values_2);
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
            $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key_3 => $value_3) {
                $values_3[$key_3] = $value_3;
            }
            $object->setOptions($values_3);
            unset($data['Options']);
        }
        if (array_key_exists('UsageData', $data) && null !== $data['UsageData']) {
            $object->setUsageData($this->denormalizer->denormalize($data['UsageData'], \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class, 'json', $context));
            unset($data['UsageData']);
        } elseif (array_key_exists('UsageData', $data) && null === $data['UsageData']) {
            $object->setUsageData(null);
        }
        foreach ($data as $key_4 => $value_4) {
            if (preg_match('/.*/', (string) $key_4)) {
                $object[$key_4] = $value_4;
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
                $values_1 = [];
                foreach ($value as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $values[$key] = $values_1;
            }
            $dataArray['Status'] = $values;
        }
        $values_2 = [];
        foreach ($data->getLabels() as $key_2 => $value_2) {
            $values_2[$key_2] = $value_2;
        }
        $dataArray['Labels'] = $values_2;
        $dataArray['Scope']  = $data->getScope();
        if ($data->isInitialized('clusterVolume') && null !== $data->getClusterVolume()) {
            $dataArray['ClusterVolume'] = $this->normalizer->normalize($data->getClusterVolume(), 'json', $context);
        }
        $values_3 = [];
        foreach ($data->getOptions() as $key_3 => $value_3) {
            $values_3[$key_3] = $value_3;
        }
        $dataArray['Options'] = $values_3;
        if ($data->isInitialized('usageData') && null !== $data->getUsageData()) {
            $dataArray['UsageData'] = $this->normalizer->normalize($data->getUsageData(), 'json', $context);
        }
        foreach ($data as $key_4 => $value_4) {
            if (preg_match('/.*/', (string) $key_4)) {
                $dataArray[$key_4] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\VolumeConstraint());
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
