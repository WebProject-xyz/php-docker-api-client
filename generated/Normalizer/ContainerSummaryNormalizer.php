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

class ContainerSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerSummary();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ContainerSummaryConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
            unset($data['Id']);
        }
        if (array_key_exists('Names', $data)) {
            $values = [];
            foreach ($data['Names'] as $value) {
                $values[] = $value;
            }
            $object->setNames($values);
            unset($data['Names']);
        }
        if (array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
            unset($data['Image']);
        }
        if (array_key_exists('ImageID', $data)) {
            $object->setImageID($data['ImageID']);
            unset($data['ImageID']);
        }
        if (array_key_exists('ImageManifestDescriptor', $data)) {
            $object->setImageManifestDescriptor($this->denormalizer->denormalize($data['ImageManifestDescriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            unset($data['ImageManifestDescriptor']);
        }
        if (array_key_exists('Command', $data)) {
            $object->setCommand($data['Command']);
            unset($data['Command']);
        }
        if (array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
            unset($data['Created']);
        }
        if (array_key_exists('Ports', $data)) {
            $values_1 = [];
            foreach ($data['Ports'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\Port::class, 'json', $context);
            }
            $object->setPorts($values_1);
            unset($data['Ports']);
        }
        if (array_key_exists('SizeRw', $data) && null !== $data['SizeRw']) {
            $object->setSizeRw($data['SizeRw']);
            unset($data['SizeRw']);
        } elseif (array_key_exists('SizeRw', $data) && null === $data['SizeRw']) {
            $object->setSizeRw(null);
        }
        if (array_key_exists('SizeRootFs', $data) && null !== $data['SizeRootFs']) {
            $object->setSizeRootFs($data['SizeRootFs']);
            unset($data['SizeRootFs']);
        } elseif (array_key_exists('SizeRootFs', $data) && null === $data['SizeRootFs']) {
            $object->setSizeRootFs(null);
        }
        if (array_key_exists('Labels', $data)) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLabels($values_2);
            unset($data['Labels']);
        }
        if (array_key_exists('State', $data)) {
            $object->setState($data['State']);
            unset($data['State']);
        }
        if (array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
            unset($data['Status']);
        }
        if (array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class, 'json', $context));
            unset($data['HostConfig']);
        }
        if (array_key_exists('NetworkSettings', $data)) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryNetworkSettings::class, 'json', $context));
            unset($data['NetworkSettings']);
        }
        if (array_key_exists('Mounts', $data)) {
            $values_3 = [];
            foreach ($data['Mounts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\MountPoint::class, 'json', $context);
            }
            $object->setMounts($values_3);
            unset($data['Mounts']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['Id'] = $data->getId();
        }
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $values = [];
            foreach ($data->getNames() as $value) {
                $values[] = $value;
            }
            $dataArray['Names'] = $values;
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $data->getImage();
        }
        if ($data->isInitialized('imageID') && null !== $data->getImageID()) {
            $dataArray['ImageID'] = $data->getImageID();
        }
        if ($data->isInitialized('imageManifestDescriptor') && null !== $data->getImageManifestDescriptor()) {
            $dataArray['ImageManifestDescriptor'] = $this->normalizer->normalize($data->getImageManifestDescriptor(), 'json', $context);
        }
        if ($data->isInitialized('command') && null !== $data->getCommand()) {
            $dataArray['Command'] = $data->getCommand();
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['Created'] = $data->getCreated();
        }
        if ($data->isInitialized('ports') && null !== $data->getPorts()) {
            $values_1 = [];
            foreach ($data->getPorts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Ports'] = $values_1;
        }
        if ($data->isInitialized('sizeRw') && null !== $data->getSizeRw()) {
            $dataArray['SizeRw'] = $data->getSizeRw();
        }
        if ($data->isInitialized('sizeRootFs') && null !== $data->getSizeRootFs()) {
            $dataArray['SizeRootFs'] = $data->getSizeRootFs();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_2 = [];
            foreach ($data->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['Labels'] = $values_2;
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['State'] = $data->getState();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['Status'] = $data->getStatus();
        }
        if ($data->isInitialized('hostConfig') && null !== $data->getHostConfig()) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkSettings') && null !== $data->getNetworkSettings()) {
            $dataArray['NetworkSettings'] = $this->normalizer->normalize($data->getNetworkSettings(), 'json', $context);
        }
        if ($data->isInitialized('mounts') && null !== $data->getMounts()) {
            $values_3 = [];
            foreach ($data->getMounts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['Mounts'] = $values_3;
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ContainerSummaryConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
