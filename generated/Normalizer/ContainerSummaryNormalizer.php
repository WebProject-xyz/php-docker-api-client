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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerSummary();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Id', $data) && null !== $data['Id']) {
            $value = $data['Id'];
            if (is_string($data['Id'])) {
                $value = $data['Id'];
            } elseif (null === $data['Id']) {
                $value = $data['Id'];
            }
            $object->setId($value);
        } elseif (array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (array_key_exists('Names', $data) && null !== $data['Names']) {
            $value_1 = $data['Names'];
            if (is_array($data['Names']) && $this->isOnlyNumericKeys($data['Names'])) {
                $values = [];
                foreach ($data['Names'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Names']) {
                $value_1 = $data['Names'];
            }
            $object->setNames($value_1);
        } elseif (array_key_exists('Names', $data) && null === $data['Names']) {
            $object->setNames(null);
        }
        if (array_key_exists('Image', $data) && null !== $data['Image']) {
            $value_3 = $data['Image'];
            if (is_string($data['Image'])) {
                $value_3 = $data['Image'];
            } elseif (null === $data['Image']) {
                $value_3 = $data['Image'];
            }
            $object->setImage($value_3);
        } elseif (array_key_exists('Image', $data) && null === $data['Image']) {
            $object->setImage(null);
        }
        if (array_key_exists('ImageID', $data) && null !== $data['ImageID']) {
            $value_4 = $data['ImageID'];
            if (is_string($data['ImageID'])) {
                $value_4 = $data['ImageID'];
            } elseif (null === $data['ImageID']) {
                $value_4 = $data['ImageID'];
            }
            $object->setImageID($value_4);
        } elseif (array_key_exists('ImageID', $data) && null === $data['ImageID']) {
            $object->setImageID(null);
        }
        if (array_key_exists('ImageManifestDescriptor', $data)) {
            $object->setImageManifestDescriptor($this->denormalizer->denormalize($data['ImageManifestDescriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
        }
        if (array_key_exists('Command', $data) && null !== $data['Command']) {
            $value_5 = $data['Command'];
            if (is_string($data['Command'])) {
                $value_5 = $data['Command'];
            } elseif (null === $data['Command']) {
                $value_5 = $data['Command'];
            }
            $object->setCommand($value_5);
        } elseif (array_key_exists('Command', $data) && null === $data['Command']) {
            $object->setCommand(null);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $value_6 = $data['Created'];
            if (is_int($data['Created'])) {
                $value_6 = $data['Created'];
            } elseif (null === $data['Created']) {
                $value_6 = $data['Created'];
            }
            $object->setCreated($value_6);
        } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $value_7 = $data['Ports'];
            if (is_array($data['Ports']) && $this->isOnlyNumericKeys($data['Ports'])) {
                $values_1 = [];
                foreach ($data['Ports'] as $value_8) {
                    $values_1[] = $this->denormalizer->denormalize($value_8, \WebProject\DockerApi\Library\Generated\Model\PortSummary::class, 'json', $context);
                }
                $value_7 = $values_1;
            } elseif (null === $data['Ports']) {
                $value_7 = $data['Ports'];
            }
            $object->setPorts($value_7);
        } elseif (array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }
        if (array_key_exists('SizeRw', $data) && null !== $data['SizeRw']) {
            $value_9 = $data['SizeRw'];
            if (is_int($data['SizeRw'])) {
                $value_9 = $data['SizeRw'];
            } elseif (null === $data['SizeRw']) {
                $value_9 = $data['SizeRw'];
            }
            $object->setSizeRw($value_9);
        } elseif (array_key_exists('SizeRw', $data) && null === $data['SizeRw']) {
            $object->setSizeRw(null);
        }
        if (array_key_exists('SizeRootFs', $data) && null !== $data['SizeRootFs']) {
            $value_10 = $data['SizeRootFs'];
            if (is_int($data['SizeRootFs'])) {
                $value_10 = $data['SizeRootFs'];
            } elseif (null === $data['SizeRootFs']) {
                $value_10 = $data['SizeRootFs'];
            }
            $object->setSizeRootFs($value_10);
        } elseif (array_key_exists('SizeRootFs', $data) && null === $data['SizeRootFs']) {
            $object->setSizeRootFs(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_11 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_12) {
                    $values_2[$key] = $value_12;
                }
                $value_11 = $values_2;
            } elseif (null === $data['Labels']) {
                $value_11 = $data['Labels'];
            }
            $object->setLabels($value_11);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $value_13 = $data['State'];
            if (is_string($data['State'])) {
                $value_13 = $data['State'];
            } elseif (null === $data['State']) {
                $value_13 = $data['State'];
            }
            $object->setState($value_13);
        } elseif (array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (array_key_exists('Status', $data) && null !== $data['Status']) {
            $value_14 = $data['Status'];
            if (is_string($data['Status'])) {
                $value_14 = $data['Status'];
            } elseif (null === $data['Status']) {
                $value_14 = $data['Status'];
            }
            $object->setStatus($value_14);
        } elseif (array_key_exists('Status', $data) && null === $data['Status']) {
            $object->setStatus(null);
        }
        if (array_key_exists('HostConfig', $data) && null !== $data['HostConfig']) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class, 'json', $context));
        } elseif (array_key_exists('HostConfig', $data) && null === $data['HostConfig']) {
            $object->setHostConfig(null);
        }
        if (array_key_exists('NetworkSettings', $data) && null !== $data['NetworkSettings']) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryNetworkSettings::class, 'json', $context));
        } elseif (array_key_exists('NetworkSettings', $data) && null === $data['NetworkSettings']) {
            $object->setNetworkSettings(null);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $value_15 = $data['Mounts'];
            if (is_array($data['Mounts']) && $this->isOnlyNumericKeys($data['Mounts'])) {
                $values_3 = [];
                foreach ($data['Mounts'] as $value_16) {
                    $values_3[] = $this->denormalizer->denormalize($value_16, \WebProject\DockerApi\Library\Generated\Model\MountPoint::class, 'json', $context);
                }
                $value_15 = $values_3;
            } elseif (null === $data['Mounts']) {
                $value_15 = $data['Mounts'];
            }
            $object->setMounts($value_15);
        } elseif (array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (array_key_exists('Health', $data) && null !== $data['Health']) {
            $object->setHealth($this->denormalizer->denormalize($data['Health'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHealth::class, 'json', $context));
        } elseif (array_key_exists('Health', $data) && null === $data['Health']) {
            $object->setHealth(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $value = $data->getId();
            if (is_string($data->getId())) {
                $value = $data->getId();
            } elseif (null === $data->getId()) {
                $value = $data->getId();
            }
            $dataArray['Id'] = $value;
        }
        if ($data->isInitialized('names')) {
            $value_1 = $data->getNames();
            if (is_array($data->getNames())) {
                $values = [];
                foreach ($data->getNames() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getNames()) {
                $value_1 = $data->getNames();
            }
            $dataArray['Names'] = $value_1;
        }
        if ($data->isInitialized('image')) {
            $value_3 = $data->getImage();
            if (is_string($data->getImage())) {
                $value_3 = $data->getImage();
            } elseif (null === $data->getImage()) {
                $value_3 = $data->getImage();
            }
            $dataArray['Image'] = $value_3;
        }
        if ($data->isInitialized('imageID')) {
            $value_4 = $data->getImageID();
            if (is_string($data->getImageID())) {
                $value_4 = $data->getImageID();
            } elseif (null === $data->getImageID()) {
                $value_4 = $data->getImageID();
            }
            $dataArray['ImageID'] = $value_4;
        }
        if ($data->isInitialized('imageManifestDescriptor') && null !== $data->getImageManifestDescriptor()) {
            $dataArray['ImageManifestDescriptor'] = $this->normalizer->normalize($data->getImageManifestDescriptor(), 'json', $context);
        }
        if ($data->isInitialized('command')) {
            $value_5 = $data->getCommand();
            if (is_string($data->getCommand())) {
                $value_5 = $data->getCommand();
            } elseif (null === $data->getCommand()) {
                $value_5 = $data->getCommand();
            }
            $dataArray['Command'] = $value_5;
        }
        if ($data->isInitialized('created')) {
            $value_6 = $data->getCreated();
            if (is_int($data->getCreated())) {
                $value_6 = $data->getCreated();
            } elseif (null === $data->getCreated()) {
                $value_6 = $data->getCreated();
            }
            $dataArray['Created'] = $value_6;
        }
        if ($data->isInitialized('ports')) {
            $value_7 = $data->getPorts();
            if (is_array($data->getPorts())) {
                $values_1 = [];
                foreach ($data->getPorts() as $value_8) {
                    $values_1[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $value_7 = $values_1;
            } elseif (null === $data->getPorts()) {
                $value_7 = $data->getPorts();
            }
            $dataArray['Ports'] = $value_7;
        }
        if ($data->isInitialized('sizeRw')) {
            $value_9 = $data->getSizeRw();
            if (is_int($data->getSizeRw())) {
                $value_9 = $data->getSizeRw();
            } elseif (null === $data->getSizeRw()) {
                $value_9 = $data->getSizeRw();
            }
            $dataArray['SizeRw'] = $value_9;
        }
        if ($data->isInitialized('sizeRootFs')) {
            $value_10 = $data->getSizeRootFs();
            if (is_int($data->getSizeRootFs())) {
                $value_10 = $data->getSizeRootFs();
            } elseif (null === $data->getSizeRootFs()) {
                $value_10 = $data->getSizeRootFs();
            }
            $dataArray['SizeRootFs'] = $value_10;
        }
        if ($data->isInitialized('labels')) {
            $value_11 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values_2 = [];
                foreach ($data->getLabels() as $key => $value_12) {
                    $values_2[$key] = $value_12;
                }
                $value_11 = $values_2;
            } elseif (null === $data->getLabels()) {
                $value_11 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_11;
        }
        if ($data->isInitialized('state')) {
            $value_13 = $data->getState();
            if (is_string($data->getState())) {
                $value_13 = $data->getState();
            } elseif (null === $data->getState()) {
                $value_13 = $data->getState();
            }
            $dataArray['State'] = $value_13;
        }
        if ($data->isInitialized('status')) {
            $value_14 = $data->getStatus();
            if (is_string($data->getStatus())) {
                $value_14 = $data->getStatus();
            } elseif (null === $data->getStatus()) {
                $value_14 = $data->getStatus();
            }
            $dataArray['Status'] = $value_14;
        }
        if ($data->isInitialized('hostConfig')) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkSettings')) {
            $dataArray['NetworkSettings'] = $this->normalizer->normalize($data->getNetworkSettings(), 'json', $context);
        }
        if ($data->isInitialized('mounts')) {
            $value_15 = $data->getMounts();
            if (is_array($data->getMounts())) {
                $values_3 = [];
                foreach ($data->getMounts() as $value_16) {
                    $values_3[] = $this->normalizer->normalize($value_16, 'json', $context);
                }
                $value_15 = $values_3;
            } elseif (null === $data->getMounts()) {
                $value_15 = $data->getMounts();
            }
            $dataArray['Mounts'] = $value_15;
        }
        if ($data->isInitialized('health')) {
            $dataArray['Health'] = $this->normalizer->normalize($data->getHealth(), 'json', $context);
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
