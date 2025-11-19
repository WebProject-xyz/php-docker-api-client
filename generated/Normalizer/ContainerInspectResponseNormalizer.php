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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
            unset($data['Id']);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $object->setCreated($data['Created']);
            unset($data['Created']);
        } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (array_key_exists('Path', $data)) {
            $object->setPath($data['Path']);
            unset($data['Path']);
        }
        if (array_key_exists('Args', $data)) {
            $values = [];
            foreach ($data['Args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
            unset($data['Args']);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $object->setState($this->denormalizer->denormalize($data['State'], \WebProject\DockerApi\Library\Generated\Model\ContainerState::class, 'json', $context));
            unset($data['State']);
        } elseif (array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
            unset($data['Image']);
        }
        if (array_key_exists('ResolvConfPath', $data)) {
            $object->setResolvConfPath($data['ResolvConfPath']);
            unset($data['ResolvConfPath']);
        }
        if (array_key_exists('HostnamePath', $data)) {
            $object->setHostnamePath($data['HostnamePath']);
            unset($data['HostnamePath']);
        }
        if (array_key_exists('HostsPath', $data)) {
            $object->setHostsPath($data['HostsPath']);
            unset($data['HostsPath']);
        }
        if (array_key_exists('LogPath', $data) && null !== $data['LogPath']) {
            $object->setLogPath($data['LogPath']);
            unset($data['LogPath']);
        } elseif (array_key_exists('LogPath', $data) && null === $data['LogPath']) {
            $object->setLogPath(null);
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (array_key_exists('RestartCount', $data)) {
            $object->setRestartCount($data['RestartCount']);
            unset($data['RestartCount']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->setDriver($data['Driver']);
            unset($data['Driver']);
        }
        if (array_key_exists('Platform', $data)) {
            $object->setPlatform($data['Platform']);
            unset($data['Platform']);
        }
        if (array_key_exists('ImageManifestDescriptor', $data)) {
            $object->setImageManifestDescriptor($this->denormalizer->denormalize($data['ImageManifestDescriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            unset($data['ImageManifestDescriptor']);
        }
        if (array_key_exists('MountLabel', $data)) {
            $object->setMountLabel($data['MountLabel']);
            unset($data['MountLabel']);
        }
        if (array_key_exists('ProcessLabel', $data)) {
            $object->setProcessLabel($data['ProcessLabel']);
            unset($data['ProcessLabel']);
        }
        if (array_key_exists('AppArmorProfile', $data)) {
            $object->setAppArmorProfile($data['AppArmorProfile']);
            unset($data['AppArmorProfile']);
        }
        if (array_key_exists('ExecIDs', $data) && null !== $data['ExecIDs']) {
            $values_1 = [];
            foreach ($data['ExecIDs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExecIDs($values_1);
            unset($data['ExecIDs']);
        } elseif (array_key_exists('ExecIDs', $data) && null === $data['ExecIDs']) {
            $object->setExecIDs(null);
        }
        if (array_key_exists('HostConfig', $data) && null !== $data['HostConfig']) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfig::class, 'json', $context));
            unset($data['HostConfig']);
        } elseif (array_key_exists('HostConfig', $data) && null === $data['HostConfig']) {
            $object->setHostConfig(null);
        }
        if (array_key_exists('GraphDriver', $data)) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \WebProject\DockerApi\Library\Generated\Model\DriverData::class, 'json', $context));
            unset($data['GraphDriver']);
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
        if (array_key_exists('Mounts', $data)) {
            $values_2 = [];
            foreach ($data['Mounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\MountPoint::class, 'json', $context);
            }
            $object->setMounts($values_2);
            unset($data['Mounts']);
        }
        if (array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class, 'json', $context));
            unset($data['Config']);
        }
        if (array_key_exists('NetworkSettings', $data)) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class, 'json', $context));
            unset($data['NetworkSettings']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['Created'] = $data->getCreated();
        }
        if ($data->isInitialized('path') && null !== $data->getPath()) {
            $dataArray['Path'] = $data->getPath();
        }
        if ($data->isInitialized('args') && null !== $data->getArgs()) {
            $values = [];
            foreach ($data->getArgs() as $value) {
                $values[] = $value;
            }
            $dataArray['Args'] = $values;
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['State'] = $this->normalizer->normalize($data->getState(), 'json', $context);
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $data->getImage();
        }
        if ($data->isInitialized('resolvConfPath') && null !== $data->getResolvConfPath()) {
            $dataArray['ResolvConfPath'] = $data->getResolvConfPath();
        }
        if ($data->isInitialized('hostnamePath') && null !== $data->getHostnamePath()) {
            $dataArray['HostnamePath'] = $data->getHostnamePath();
        }
        if ($data->isInitialized('hostsPath') && null !== $data->getHostsPath()) {
            $dataArray['HostsPath'] = $data->getHostsPath();
        }
        if ($data->isInitialized('logPath') && null !== $data->getLogPath()) {
            $dataArray['LogPath'] = $data->getLogPath();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('restartCount') && null !== $data->getRestartCount()) {
            $dataArray['RestartCount'] = $data->getRestartCount();
        }
        if ($data->isInitialized('driver') && null !== $data->getDriver()) {
            $dataArray['Driver'] = $data->getDriver();
        }
        if ($data->isInitialized('platform') && null !== $data->getPlatform()) {
            $dataArray['Platform'] = $data->getPlatform();
        }
        if ($data->isInitialized('imageManifestDescriptor') && null !== $data->getImageManifestDescriptor()) {
            $dataArray['ImageManifestDescriptor'] = $this->normalizer->normalize($data->getImageManifestDescriptor(), 'json', $context);
        }
        if ($data->isInitialized('mountLabel') && null !== $data->getMountLabel()) {
            $dataArray['MountLabel'] = $data->getMountLabel();
        }
        if ($data->isInitialized('processLabel') && null !== $data->getProcessLabel()) {
            $dataArray['ProcessLabel'] = $data->getProcessLabel();
        }
        if ($data->isInitialized('appArmorProfile') && null !== $data->getAppArmorProfile()) {
            $dataArray['AppArmorProfile'] = $data->getAppArmorProfile();
        }
        if ($data->isInitialized('execIDs') && null !== $data->getExecIDs()) {
            $values_1 = [];
            foreach ($data->getExecIDs() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['ExecIDs'] = $values_1;
        }
        if ($data->isInitialized('hostConfig') && null !== $data->getHostConfig()) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('graphDriver') && null !== $data->getGraphDriver()) {
            $dataArray['GraphDriver'] = $this->normalizer->normalize($data->getGraphDriver(), 'json', $context);
        }
        if ($data->isInitialized('sizeRw') && null !== $data->getSizeRw()) {
            $dataArray['SizeRw'] = $data->getSizeRw();
        }
        if ($data->isInitialized('sizeRootFs') && null !== $data->getSizeRootFs()) {
            $dataArray['SizeRootFs'] = $data->getSizeRootFs();
        }
        if ($data->isInitialized('mounts') && null !== $data->getMounts()) {
            $values_2 = [];
            foreach ($data->getMounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['Mounts'] = $values_2;
        }
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $dataArray['Config'] = $this->normalizer->normalize($data->getConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkSettings') && null !== $data->getNetworkSettings()) {
            $dataArray['NetworkSettings'] = $this->normalizer->normalize($data->getNetworkSettings(), 'json', $context);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
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
