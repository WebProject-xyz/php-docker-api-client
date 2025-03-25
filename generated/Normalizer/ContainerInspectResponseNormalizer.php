<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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
            if (array_key_exists('HostConfig', $data)) {
                $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfig::class, 'json', $context));
                unset($data['HostConfig']);
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['Path'] = $object->getPath();
            }
            if ($object->isInitialized('args') && null !== $object->getArgs()) {
                $values = [];
                foreach ($object->getArgs() as $value) {
                    $values[] = $value;
                }
                $data['Args'] = $values;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('resolvConfPath') && null !== $object->getResolvConfPath()) {
                $data['ResolvConfPath'] = $object->getResolvConfPath();
            }
            if ($object->isInitialized('hostnamePath') && null !== $object->getHostnamePath()) {
                $data['HostnamePath'] = $object->getHostnamePath();
            }
            if ($object->isInitialized('hostsPath') && null !== $object->getHostsPath()) {
                $data['HostsPath'] = $object->getHostsPath();
            }
            if ($object->isInitialized('logPath') && null !== $object->getLogPath()) {
                $data['LogPath'] = $object->getLogPath();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('restartCount') && null !== $object->getRestartCount()) {
                $data['RestartCount'] = $object->getRestartCount();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $object->getPlatform();
            }
            if ($object->isInitialized('imageManifestDescriptor') && null !== $object->getImageManifestDescriptor()) {
                $data['ImageManifestDescriptor'] = $this->normalizer->normalize($object->getImageManifestDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('mountLabel') && null !== $object->getMountLabel()) {
                $data['MountLabel'] = $object->getMountLabel();
            }
            if ($object->isInitialized('processLabel') && null !== $object->getProcessLabel()) {
                $data['ProcessLabel'] = $object->getProcessLabel();
            }
            if ($object->isInitialized('appArmorProfile') && null !== $object->getAppArmorProfile()) {
                $data['AppArmorProfile'] = $object->getAppArmorProfile();
            }
            if ($object->isInitialized('execIDs') && null !== $object->getExecIDs()) {
                $values_1 = [];
                foreach ($object->getExecIDs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['ExecIDs'] = $values_1;
            }
            if ($object->isInitialized('hostConfig') && null !== $object->getHostConfig()) {
                $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('sizeRw') && null !== $object->getSizeRw()) {
                $data['SizeRw'] = $object->getSizeRw();
            }
            if ($object->isInitialized('sizeRootFs') && null !== $object->getSizeRootFs()) {
                $data['SizeRootFs'] = $object->getSizeRootFs();
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_2 = [];
                foreach ($object->getMounts() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Mounts'] = $values_2;
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkSettings') && null !== $object->getNetworkSettings()) {
                $data['NetworkSettings'] = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class => true];
        }
    }
} else {
    class ContainerInspectResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class === get_class($data);
        }

        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (array_key_exists('HostConfig', $data)) {
                $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfig::class, 'json', $context));
                unset($data['HostConfig']);
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

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['Path'] = $object->getPath();
            }
            if ($object->isInitialized('args') && null !== $object->getArgs()) {
                $values = [];
                foreach ($object->getArgs() as $value) {
                    $values[] = $value;
                }
                $data['Args'] = $values;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('resolvConfPath') && null !== $object->getResolvConfPath()) {
                $data['ResolvConfPath'] = $object->getResolvConfPath();
            }
            if ($object->isInitialized('hostnamePath') && null !== $object->getHostnamePath()) {
                $data['HostnamePath'] = $object->getHostnamePath();
            }
            if ($object->isInitialized('hostsPath') && null !== $object->getHostsPath()) {
                $data['HostsPath'] = $object->getHostsPath();
            }
            if ($object->isInitialized('logPath') && null !== $object->getLogPath()) {
                $data['LogPath'] = $object->getLogPath();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('restartCount') && null !== $object->getRestartCount()) {
                $data['RestartCount'] = $object->getRestartCount();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $object->getPlatform();
            }
            if ($object->isInitialized('imageManifestDescriptor') && null !== $object->getImageManifestDescriptor()) {
                $data['ImageManifestDescriptor'] = $this->normalizer->normalize($object->getImageManifestDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('mountLabel') && null !== $object->getMountLabel()) {
                $data['MountLabel'] = $object->getMountLabel();
            }
            if ($object->isInitialized('processLabel') && null !== $object->getProcessLabel()) {
                $data['ProcessLabel'] = $object->getProcessLabel();
            }
            if ($object->isInitialized('appArmorProfile') && null !== $object->getAppArmorProfile()) {
                $data['AppArmorProfile'] = $object->getAppArmorProfile();
            }
            if ($object->isInitialized('execIDs') && null !== $object->getExecIDs()) {
                $values_1 = [];
                foreach ($object->getExecIDs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['ExecIDs'] = $values_1;
            }
            if ($object->isInitialized('hostConfig') && null !== $object->getHostConfig()) {
                $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('sizeRw') && null !== $object->getSizeRw()) {
                $data['SizeRw'] = $object->getSizeRw();
            }
            if ($object->isInitialized('sizeRootFs') && null !== $object->getSizeRootFs()) {
                $data['SizeRootFs'] = $object->getSizeRootFs();
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_2 = [];
                foreach ($object->getMounts() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Mounts'] = $values_2;
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkSettings') && null !== $object->getNetworkSettings()) {
                $data['NetworkSettings'] = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
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
}
