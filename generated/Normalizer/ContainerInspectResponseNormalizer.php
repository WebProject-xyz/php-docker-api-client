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

class ContainerInspectResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
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
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $value_1 = $data['Created'];
            if (is_string($data['Created'])) {
                $value_1 = $data['Created'];
            } elseif (null === $data['Created']) {
                $value_1 = $data['Created'];
            }
            $object->setCreated($value_1);
        } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (array_key_exists('Path', $data) && null !== $data['Path']) {
            $value_2 = $data['Path'];
            if (is_string($data['Path'])) {
                $value_2 = $data['Path'];
            } elseif (null === $data['Path']) {
                $value_2 = $data['Path'];
            }
            $object->setPath($value_2);
        } elseif (array_key_exists('Path', $data) && null === $data['Path']) {
            $object->setPath(null);
        }
        if (array_key_exists('Args', $data) && null !== $data['Args']) {
            $value_3 = $data['Args'];
            if (is_array($data['Args']) && $this->isOnlyNumericKeys($data['Args'])) {
                $values = [];
                foreach ($data['Args'] as $value_4) {
                    $values[] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data['Args']) {
                $value_3 = $data['Args'];
            }
            $object->setArgs($value_3);
        } elseif (array_key_exists('Args', $data) && null === $data['Args']) {
            $object->setArgs(null);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $object->setState($this->denormalizer->denormalize($data['State'], \WebProject\DockerApi\Library\Generated\Model\ContainerState::class, 'json', $context));
        } elseif (array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (array_key_exists('Image', $data) && null !== $data['Image']) {
            $value_5 = $data['Image'];
            if (is_string($data['Image'])) {
                $value_5 = $data['Image'];
            } elseif (null === $data['Image']) {
                $value_5 = $data['Image'];
            }
            $object->setImage($value_5);
        } elseif (array_key_exists('Image', $data) && null === $data['Image']) {
            $object->setImage(null);
        }
        if (array_key_exists('ResolvConfPath', $data) && null !== $data['ResolvConfPath']) {
            $value_6 = $data['ResolvConfPath'];
            if (is_string($data['ResolvConfPath'])) {
                $value_6 = $data['ResolvConfPath'];
            } elseif (null === $data['ResolvConfPath']) {
                $value_6 = $data['ResolvConfPath'];
            }
            $object->setResolvConfPath($value_6);
        } elseif (array_key_exists('ResolvConfPath', $data) && null === $data['ResolvConfPath']) {
            $object->setResolvConfPath(null);
        }
        if (array_key_exists('HostnamePath', $data) && null !== $data['HostnamePath']) {
            $value_7 = $data['HostnamePath'];
            if (is_string($data['HostnamePath'])) {
                $value_7 = $data['HostnamePath'];
            } elseif (null === $data['HostnamePath']) {
                $value_7 = $data['HostnamePath'];
            }
            $object->setHostnamePath($value_7);
        } elseif (array_key_exists('HostnamePath', $data) && null === $data['HostnamePath']) {
            $object->setHostnamePath(null);
        }
        if (array_key_exists('HostsPath', $data) && null !== $data['HostsPath']) {
            $value_8 = $data['HostsPath'];
            if (is_string($data['HostsPath'])) {
                $value_8 = $data['HostsPath'];
            } elseif (null === $data['HostsPath']) {
                $value_8 = $data['HostsPath'];
            }
            $object->setHostsPath($value_8);
        } elseif (array_key_exists('HostsPath', $data) && null === $data['HostsPath']) {
            $object->setHostsPath(null);
        }
        if (array_key_exists('LogPath', $data) && null !== $data['LogPath']) {
            $value_9 = $data['LogPath'];
            if (is_string($data['LogPath'])) {
                $value_9 = $data['LogPath'];
            } elseif (null === $data['LogPath']) {
                $value_9 = $data['LogPath'];
            }
            $object->setLogPath($value_9);
        } elseif (array_key_exists('LogPath', $data) && null === $data['LogPath']) {
            $object->setLogPath(null);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value_10 = $data['Name'];
            if (is_string($data['Name'])) {
                $value_10 = $data['Name'];
            } elseif (null === $data['Name']) {
                $value_10 = $data['Name'];
            }
            $object->setName($value_10);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('RestartCount', $data) && null !== $data['RestartCount']) {
            $value_11 = $data['RestartCount'];
            if (is_int($data['RestartCount'])) {
                $value_11 = $data['RestartCount'];
            } elseif (null === $data['RestartCount']) {
                $value_11 = $data['RestartCount'];
            }
            $object->setRestartCount($value_11);
        } elseif (array_key_exists('RestartCount', $data) && null === $data['RestartCount']) {
            $object->setRestartCount(null);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_12 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_12 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_12 = $data['Driver'];
            }
            $object->setDriver($value_12);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('Platform', $data) && null !== $data['Platform']) {
            $value_13 = $data['Platform'];
            if (is_string($data['Platform'])) {
                $value_13 = $data['Platform'];
            } elseif (null === $data['Platform']) {
                $value_13 = $data['Platform'];
            }
            $object->setPlatform($value_13);
        } elseif (array_key_exists('Platform', $data) && null === $data['Platform']) {
            $object->setPlatform(null);
        }
        if (array_key_exists('ImageManifestDescriptor', $data)) {
            $object->setImageManifestDescriptor($this->denormalizer->denormalize($data['ImageManifestDescriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
        }
        if (array_key_exists('MountLabel', $data) && null !== $data['MountLabel']) {
            $value_14 = $data['MountLabel'];
            if (is_string($data['MountLabel'])) {
                $value_14 = $data['MountLabel'];
            } elseif (null === $data['MountLabel']) {
                $value_14 = $data['MountLabel'];
            }
            $object->setMountLabel($value_14);
        } elseif (array_key_exists('MountLabel', $data) && null === $data['MountLabel']) {
            $object->setMountLabel(null);
        }
        if (array_key_exists('ProcessLabel', $data) && null !== $data['ProcessLabel']) {
            $value_15 = $data['ProcessLabel'];
            if (is_string($data['ProcessLabel'])) {
                $value_15 = $data['ProcessLabel'];
            } elseif (null === $data['ProcessLabel']) {
                $value_15 = $data['ProcessLabel'];
            }
            $object->setProcessLabel($value_15);
        } elseif (array_key_exists('ProcessLabel', $data) && null === $data['ProcessLabel']) {
            $object->setProcessLabel(null);
        }
        if (array_key_exists('AppArmorProfile', $data) && null !== $data['AppArmorProfile']) {
            $value_16 = $data['AppArmorProfile'];
            if (is_string($data['AppArmorProfile'])) {
                $value_16 = $data['AppArmorProfile'];
            } elseif (null === $data['AppArmorProfile']) {
                $value_16 = $data['AppArmorProfile'];
            }
            $object->setAppArmorProfile($value_16);
        } elseif (array_key_exists('AppArmorProfile', $data) && null === $data['AppArmorProfile']) {
            $object->setAppArmorProfile(null);
        }
        if (array_key_exists('ExecIDs', $data) && null !== $data['ExecIDs']) {
            $value_17 = $data['ExecIDs'];
            if (is_array($data['ExecIDs']) && $this->isOnlyNumericKeys($data['ExecIDs'])) {
                $values_1 = [];
                foreach ($data['ExecIDs'] as $value_18) {
                    $values_1[] = $value_18;
                }
                $value_17 = $values_1;
            } elseif (null === $data['ExecIDs']) {
                $value_17 = $data['ExecIDs'];
            }
            $object->setExecIDs($value_17);
        } elseif (array_key_exists('ExecIDs', $data) && null === $data['ExecIDs']) {
            $object->setExecIDs(null);
        }
        if (array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfig::class, 'json', $context));
        }
        if (array_key_exists('GraphDriver', $data)) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \WebProject\DockerApi\Library\Generated\Model\DriverData::class, 'json', $context));
        }
        if (array_key_exists('Storage', $data)) {
            $object->setStorage($this->denormalizer->denormalize($data['Storage'], \WebProject\DockerApi\Library\Generated\Model\Storage::class, 'json', $context));
        }
        if (array_key_exists('SizeRw', $data) && null !== $data['SizeRw']) {
            $value_19 = $data['SizeRw'];
            if (is_int($data['SizeRw'])) {
                $value_19 = $data['SizeRw'];
            } elseif (null === $data['SizeRw']) {
                $value_19 = $data['SizeRw'];
            }
            $object->setSizeRw($value_19);
        } elseif (array_key_exists('SizeRw', $data) && null === $data['SizeRw']) {
            $object->setSizeRw(null);
        }
        if (array_key_exists('SizeRootFs', $data) && null !== $data['SizeRootFs']) {
            $value_20 = $data['SizeRootFs'];
            if (is_int($data['SizeRootFs'])) {
                $value_20 = $data['SizeRootFs'];
            } elseif (null === $data['SizeRootFs']) {
                $value_20 = $data['SizeRootFs'];
            }
            $object->setSizeRootFs($value_20);
        } elseif (array_key_exists('SizeRootFs', $data) && null === $data['SizeRootFs']) {
            $object->setSizeRootFs(null);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $value_21 = $data['Mounts'];
            if (is_array($data['Mounts']) && $this->isOnlyNumericKeys($data['Mounts'])) {
                $values_2 = [];
                foreach ($data['Mounts'] as $value_22) {
                    $values_2[] = $this->denormalizer->denormalize($value_22, \WebProject\DockerApi\Library\Generated\Model\MountPoint::class, 'json', $context);
                }
                $value_21 = $values_2;
            } elseif (null === $data['Mounts']) {
                $value_21 = $data['Mounts'];
            }
            $object->setMounts($value_21);
        } elseif (array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class, 'json', $context));
        }
        if (array_key_exists('NetworkSettings', $data)) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class, 'json', $context));
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
        if ($data->isInitialized('created')) {
            $value_1 = $data->getCreated();
            if (is_string($data->getCreated())) {
                $value_1 = $data->getCreated();
            } elseif (null === $data->getCreated()) {
                $value_1 = $data->getCreated();
            }
            $dataArray['Created'] = $value_1;
        }
        if ($data->isInitialized('path')) {
            $value_2 = $data->getPath();
            if (is_string($data->getPath())) {
                $value_2 = $data->getPath();
            } elseif (null === $data->getPath()) {
                $value_2 = $data->getPath();
            }
            $dataArray['Path'] = $value_2;
        }
        if ($data->isInitialized('args')) {
            $value_3 = $data->getArgs();
            if (is_array($data->getArgs())) {
                $values = [];
                foreach ($data->getArgs() as $value_4) {
                    $values[] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data->getArgs()) {
                $value_3 = $data->getArgs();
            }
            $dataArray['Args'] = $value_3;
        }
        if ($data->isInitialized('state')) {
            $dataArray['State'] = $this->normalizer->normalize($data->getState(), 'json', $context);
        }
        if ($data->isInitialized('image')) {
            $value_5 = $data->getImage();
            if (is_string($data->getImage())) {
                $value_5 = $data->getImage();
            } elseif (null === $data->getImage()) {
                $value_5 = $data->getImage();
            }
            $dataArray['Image'] = $value_5;
        }
        if ($data->isInitialized('resolvConfPath')) {
            $value_6 = $data->getResolvConfPath();
            if (is_string($data->getResolvConfPath())) {
                $value_6 = $data->getResolvConfPath();
            } elseif (null === $data->getResolvConfPath()) {
                $value_6 = $data->getResolvConfPath();
            }
            $dataArray['ResolvConfPath'] = $value_6;
        }
        if ($data->isInitialized('hostnamePath')) {
            $value_7 = $data->getHostnamePath();
            if (is_string($data->getHostnamePath())) {
                $value_7 = $data->getHostnamePath();
            } elseif (null === $data->getHostnamePath()) {
                $value_7 = $data->getHostnamePath();
            }
            $dataArray['HostnamePath'] = $value_7;
        }
        if ($data->isInitialized('hostsPath')) {
            $value_8 = $data->getHostsPath();
            if (is_string($data->getHostsPath())) {
                $value_8 = $data->getHostsPath();
            } elseif (null === $data->getHostsPath()) {
                $value_8 = $data->getHostsPath();
            }
            $dataArray['HostsPath'] = $value_8;
        }
        if ($data->isInitialized('logPath')) {
            $value_9 = $data->getLogPath();
            if (is_string($data->getLogPath())) {
                $value_9 = $data->getLogPath();
            } elseif (null === $data->getLogPath()) {
                $value_9 = $data->getLogPath();
            }
            $dataArray['LogPath'] = $value_9;
        }
        if ($data->isInitialized('name')) {
            $value_10 = $data->getName();
            if (is_string($data->getName())) {
                $value_10 = $data->getName();
            } elseif (null === $data->getName()) {
                $value_10 = $data->getName();
            }
            $dataArray['Name'] = $value_10;
        }
        if ($data->isInitialized('restartCount')) {
            $value_11 = $data->getRestartCount();
            if (is_int($data->getRestartCount())) {
                $value_11 = $data->getRestartCount();
            } elseif (null === $data->getRestartCount()) {
                $value_11 = $data->getRestartCount();
            }
            $dataArray['RestartCount'] = $value_11;
        }
        if ($data->isInitialized('driver')) {
            $value_12 = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value_12 = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value_12 = $data->getDriver();
            }
            $dataArray['Driver'] = $value_12;
        }
        if ($data->isInitialized('platform')) {
            $value_13 = $data->getPlatform();
            if (is_string($data->getPlatform())) {
                $value_13 = $data->getPlatform();
            } elseif (null === $data->getPlatform()) {
                $value_13 = $data->getPlatform();
            }
            $dataArray['Platform'] = $value_13;
        }
        if ($data->isInitialized('imageManifestDescriptor') && null !== $data->getImageManifestDescriptor()) {
            $dataArray['ImageManifestDescriptor'] = $this->normalizer->normalize($data->getImageManifestDescriptor(), 'json', $context);
        }
        if ($data->isInitialized('mountLabel')) {
            $value_14 = $data->getMountLabel();
            if (is_string($data->getMountLabel())) {
                $value_14 = $data->getMountLabel();
            } elseif (null === $data->getMountLabel()) {
                $value_14 = $data->getMountLabel();
            }
            $dataArray['MountLabel'] = $value_14;
        }
        if ($data->isInitialized('processLabel')) {
            $value_15 = $data->getProcessLabel();
            if (is_string($data->getProcessLabel())) {
                $value_15 = $data->getProcessLabel();
            } elseif (null === $data->getProcessLabel()) {
                $value_15 = $data->getProcessLabel();
            }
            $dataArray['ProcessLabel'] = $value_15;
        }
        if ($data->isInitialized('appArmorProfile')) {
            $value_16 = $data->getAppArmorProfile();
            if (is_string($data->getAppArmorProfile())) {
                $value_16 = $data->getAppArmorProfile();
            } elseif (null === $data->getAppArmorProfile()) {
                $value_16 = $data->getAppArmorProfile();
            }
            $dataArray['AppArmorProfile'] = $value_16;
        }
        if ($data->isInitialized('execIDs')) {
            $value_17 = $data->getExecIDs();
            if (is_array($data->getExecIDs())) {
                $values_1 = [];
                foreach ($data->getExecIDs() as $value_18) {
                    $values_1[] = $value_18;
                }
                $value_17 = $values_1;
            } elseif (null === $data->getExecIDs()) {
                $value_17 = $data->getExecIDs();
            }
            $dataArray['ExecIDs'] = $value_17;
        }
        if ($data->isInitialized('hostConfig') && null !== $data->getHostConfig()) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('graphDriver') && null !== $data->getGraphDriver()) {
            $dataArray['GraphDriver'] = $this->normalizer->normalize($data->getGraphDriver(), 'json', $context);
        }
        if ($data->isInitialized('storage') && null !== $data->getStorage()) {
            $dataArray['Storage'] = $this->normalizer->normalize($data->getStorage(), 'json', $context);
        }
        if ($data->isInitialized('sizeRw')) {
            $value_19 = $data->getSizeRw();
            if (is_int($data->getSizeRw())) {
                $value_19 = $data->getSizeRw();
            } elseif (null === $data->getSizeRw()) {
                $value_19 = $data->getSizeRw();
            }
            $dataArray['SizeRw'] = $value_19;
        }
        if ($data->isInitialized('sizeRootFs')) {
            $value_20 = $data->getSizeRootFs();
            if (is_int($data->getSizeRootFs())) {
                $value_20 = $data->getSizeRootFs();
            } elseif (null === $data->getSizeRootFs()) {
                $value_20 = $data->getSizeRootFs();
            }
            $dataArray['SizeRootFs'] = $value_20;
        }
        if ($data->isInitialized('mounts')) {
            $value_21 = $data->getMounts();
            if (is_array($data->getMounts())) {
                $values_2 = [];
                foreach ($data->getMounts() as $value_22) {
                    $values_2[] = $this->normalizer->normalize($value_22, 'json', $context);
                }
                $value_21 = $values_2;
            } elseif (null === $data->getMounts()) {
                $value_21 = $data->getMounts();
            }
            $dataArray['Mounts'] = $value_21;
        }
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $dataArray['Config'] = $this->normalizer->normalize($data->getConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkSettings') && null !== $data->getNetworkSettings()) {
            $dataArray['NetworkSettings'] = $this->normalizer->normalize($data->getNetworkSettings(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
