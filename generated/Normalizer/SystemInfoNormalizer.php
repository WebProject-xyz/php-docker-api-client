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
    class SystemInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\SystemInfo();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
                unset($data['Containers']);
            }
            if (array_key_exists('ContainersRunning', $data)) {
                $object->setContainersRunning($data['ContainersRunning']);
                unset($data['ContainersRunning']);
            }
            if (array_key_exists('ContainersPaused', $data)) {
                $object->setContainersPaused($data['ContainersPaused']);
                unset($data['ContainersPaused']);
            }
            if (array_key_exists('ContainersStopped', $data)) {
                $object->setContainersStopped($data['ContainersStopped']);
                unset($data['ContainersStopped']);
            }
            if (array_key_exists('Images', $data)) {
                $object->setImages($data['Images']);
                unset($data['Images']);
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('DriverStatus', $data)) {
                $values = [];
                foreach ($data['DriverStatus'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setDriverStatus($values);
                unset($data['DriverStatus']);
            }
            if (array_key_exists('DockerRootDir', $data)) {
                $object->setDockerRootDir($data['DockerRootDir']);
                unset($data['DockerRootDir']);
            }
            if (array_key_exists('Plugins', $data)) {
                $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class, 'json', $context));
                unset($data['Plugins']);
            }
            if (array_key_exists('MemoryLimit', $data)) {
                $object->setMemoryLimit($data['MemoryLimit']);
                unset($data['MemoryLimit']);
            }
            if (array_key_exists('SwapLimit', $data)) {
                $object->setSwapLimit($data['SwapLimit']);
                unset($data['SwapLimit']);
            }
            if (array_key_exists('KernelMemoryTCP', $data)) {
                $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
                unset($data['KernelMemoryTCP']);
            }
            if (array_key_exists('CpuCfsPeriod', $data)) {
                $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
                unset($data['CpuCfsPeriod']);
            }
            if (array_key_exists('CpuCfsQuota', $data)) {
                $object->setCpuCfsQuota($data['CpuCfsQuota']);
                unset($data['CpuCfsQuota']);
            }
            if (array_key_exists('CPUShares', $data)) {
                $object->setCPUShares($data['CPUShares']);
                unset($data['CPUShares']);
            }
            if (array_key_exists('CPUSet', $data)) {
                $object->setCPUSet($data['CPUSet']);
                unset($data['CPUSet']);
            }
            if (array_key_exists('PidsLimit', $data)) {
                $object->setPidsLimit($data['PidsLimit']);
                unset($data['PidsLimit']);
            }
            if (array_key_exists('OomKillDisable', $data)) {
                $object->setOomKillDisable($data['OomKillDisable']);
                unset($data['OomKillDisable']);
            }
            if (array_key_exists('IPv4Forwarding', $data)) {
                $object->setIPv4Forwarding($data['IPv4Forwarding']);
                unset($data['IPv4Forwarding']);
            }
            if (array_key_exists('BridgeNfIptables', $data)) {
                $object->setBridgeNfIptables($data['BridgeNfIptables']);
                unset($data['BridgeNfIptables']);
            }
            if (array_key_exists('BridgeNfIp6tables', $data)) {
                $object->setBridgeNfIp6tables($data['BridgeNfIp6tables']);
                unset($data['BridgeNfIp6tables']);
            }
            if (array_key_exists('Debug', $data)) {
                $object->setDebug($data['Debug']);
                unset($data['Debug']);
            }
            if (array_key_exists('NFd', $data)) {
                $object->setNFd($data['NFd']);
                unset($data['NFd']);
            }
            if (array_key_exists('NGoroutines', $data)) {
                $object->setNGoroutines($data['NGoroutines']);
                unset($data['NGoroutines']);
            }
            if (array_key_exists('SystemTime', $data)) {
                $object->setSystemTime($data['SystemTime']);
                unset($data['SystemTime']);
            }
            if (array_key_exists('LoggingDriver', $data)) {
                $object->setLoggingDriver($data['LoggingDriver']);
                unset($data['LoggingDriver']);
            }
            if (array_key_exists('CgroupDriver', $data)) {
                $object->setCgroupDriver($data['CgroupDriver']);
                unset($data['CgroupDriver']);
            }
            if (array_key_exists('CgroupVersion', $data)) {
                $object->setCgroupVersion($data['CgroupVersion']);
                unset($data['CgroupVersion']);
            }
            if (array_key_exists('NEventsListener', $data)) {
                $object->setNEventsListener($data['NEventsListener']);
                unset($data['NEventsListener']);
            }
            if (array_key_exists('KernelVersion', $data)) {
                $object->setKernelVersion($data['KernelVersion']);
                unset($data['KernelVersion']);
            }
            if (array_key_exists('OperatingSystem', $data)) {
                $object->setOperatingSystem($data['OperatingSystem']);
                unset($data['OperatingSystem']);
            }
            if (array_key_exists('OSVersion', $data)) {
                $object->setOSVersion($data['OSVersion']);
                unset($data['OSVersion']);
            }
            if (array_key_exists('OSType', $data)) {
                $object->setOSType($data['OSType']);
                unset($data['OSType']);
            }
            if (array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
                unset($data['Architecture']);
            }
            if (array_key_exists('NCPU', $data)) {
                $object->setNCPU($data['NCPU']);
                unset($data['NCPU']);
            }
            if (array_key_exists('MemTotal', $data)) {
                $object->setMemTotal($data['MemTotal']);
                unset($data['MemTotal']);
            }
            if (array_key_exists('IndexServerAddress', $data)) {
                $object->setIndexServerAddress($data['IndexServerAddress']);
                unset($data['IndexServerAddress']);
            }
            if (array_key_exists('RegistryConfig', $data) && null !== $data['RegistryConfig']) {
                $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class, 'json', $context));
                unset($data['RegistryConfig']);
            } elseif (array_key_exists('RegistryConfig', $data) && null === $data['RegistryConfig']) {
                $object->setRegistryConfig(null);
            }
            if (array_key_exists('GenericResources', $data)) {
                $values_2 = [];
                foreach ($data['GenericResources'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
                }
                $object->setGenericResources($values_2);
                unset($data['GenericResources']);
            }
            if (array_key_exists('HttpProxy', $data)) {
                $object->setHttpProxy($data['HttpProxy']);
                unset($data['HttpProxy']);
            }
            if (array_key_exists('HttpsProxy', $data)) {
                $object->setHttpsProxy($data['HttpsProxy']);
                unset($data['HttpsProxy']);
            }
            if (array_key_exists('NoProxy', $data)) {
                $object->setNoProxy($data['NoProxy']);
                unset($data['NoProxy']);
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_3 = [];
                foreach ($data['Labels'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLabels($values_3);
                unset($data['Labels']);
            }
            if (array_key_exists('ExperimentalBuild', $data)) {
                $object->setExperimentalBuild($data['ExperimentalBuild']);
                unset($data['ExperimentalBuild']);
            }
            if (array_key_exists('ServerVersion', $data)) {
                $object->setServerVersion($data['ServerVersion']);
                unset($data['ServerVersion']);
            }
            if (array_key_exists('Runtimes', $data)) {
                $values_4 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Runtimes'] as $key => $value_4) {
                    $values_4[$key] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\Runtime::class, 'json', $context);
                }
                $object->setRuntimes($values_4);
                unset($data['Runtimes']);
            }
            if (array_key_exists('DefaultRuntime', $data)) {
                $object->setDefaultRuntime($data['DefaultRuntime']);
                unset($data['DefaultRuntime']);
            }
            if (array_key_exists('Swarm', $data)) {
                $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class, 'json', $context));
                unset($data['Swarm']);
            }
            if (array_key_exists('LiveRestoreEnabled', $data)) {
                $object->setLiveRestoreEnabled($data['LiveRestoreEnabled']);
                unset($data['LiveRestoreEnabled']);
            }
            if (array_key_exists('Isolation', $data)) {
                $object->setIsolation($data['Isolation']);
                unset($data['Isolation']);
            }
            if (array_key_exists('InitBinary', $data)) {
                $object->setInitBinary($data['InitBinary']);
                unset($data['InitBinary']);
            }
            if (array_key_exists('ContainerdCommit', $data)) {
                $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
                unset($data['ContainerdCommit']);
            }
            if (array_key_exists('RuncCommit', $data)) {
                $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
                unset($data['RuncCommit']);
            }
            if (array_key_exists('InitCommit', $data)) {
                $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
                unset($data['InitCommit']);
            }
            if (array_key_exists('SecurityOptions', $data)) {
                $values_5 = [];
                foreach ($data['SecurityOptions'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setSecurityOptions($values_5);
                unset($data['SecurityOptions']);
            }
            if (array_key_exists('ProductLicense', $data)) {
                $object->setProductLicense($data['ProductLicense']);
                unset($data['ProductLicense']);
            }
            if (array_key_exists('DefaultAddressPools', $data)) {
                $values_6 = [];
                foreach ($data['DefaultAddressPools'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class, 'json', $context);
                }
                $object->setDefaultAddressPools($values_6);
                unset($data['DefaultAddressPools']);
            }
            if (array_key_exists('Warnings', $data)) {
                $values_7 = [];
                foreach ($data['Warnings'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setWarnings($values_7);
                unset($data['Warnings']);
            }
            if (array_key_exists('CDISpecDirs', $data)) {
                $values_8 = [];
                foreach ($data['CDISpecDirs'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setCDISpecDirs($values_8);
                unset($data['CDISpecDirs']);
            }
            if (array_key_exists('Containerd', $data) && null !== $data['Containerd']) {
                $object->setContainerd($this->denormalizer->denormalize($data['Containerd'], \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class, 'json', $context));
                unset($data['Containerd']);
            } elseif (array_key_exists('Containerd', $data) && null === $data['Containerd']) {
                $object->setContainerd(null);
            }
            foreach ($data as $key_1 => $value_9) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_9;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $data['Containers'] = $object->getContainers();
            }
            if ($object->isInitialized('containersRunning') && null !== $object->getContainersRunning()) {
                $data['ContainersRunning'] = $object->getContainersRunning();
            }
            if ($object->isInitialized('containersPaused') && null !== $object->getContainersPaused()) {
                $data['ContainersPaused'] = $object->getContainersPaused();
            }
            if ($object->isInitialized('containersStopped') && null !== $object->getContainersStopped()) {
                $data['ContainersStopped'] = $object->getContainersStopped();
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['Images'] = $object->getImages();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('driverStatus') && null !== $object->getDriverStatus()) {
                $values = [];
                foreach ($object->getDriverStatus() as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['DriverStatus'] = $values;
            }
            if ($object->isInitialized('dockerRootDir') && null !== $object->getDockerRootDir()) {
                $data['DockerRootDir'] = $object->getDockerRootDir();
            }
            if ($object->isInitialized('plugins') && null !== $object->getPlugins()) {
                $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
            }
            if ($object->isInitialized('memoryLimit') && null !== $object->getMemoryLimit()) {
                $data['MemoryLimit'] = $object->getMemoryLimit();
            }
            if ($object->isInitialized('swapLimit') && null !== $object->getSwapLimit()) {
                $data['SwapLimit'] = $object->getSwapLimit();
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('cpuCfsPeriod') && null !== $object->getCpuCfsPeriod()) {
                $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
            }
            if ($object->isInitialized('cpuCfsQuota') && null !== $object->getCpuCfsQuota()) {
                $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
            }
            if ($object->isInitialized('cPUShares') && null !== $object->getCPUShares()) {
                $data['CPUShares'] = $object->getCPUShares();
            }
            if ($object->isInitialized('cPUSet') && null !== $object->getCPUSet()) {
                $data['CPUSet'] = $object->getCPUSet();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('iPv4Forwarding') && null !== $object->getIPv4Forwarding()) {
                $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
            }
            if ($object->isInitialized('bridgeNfIptables') && null !== $object->getBridgeNfIptables()) {
                $data['BridgeNfIptables'] = $object->getBridgeNfIptables();
            }
            if ($object->isInitialized('bridgeNfIp6tables') && null !== $object->getBridgeNfIp6tables()) {
                $data['BridgeNfIp6tables'] = $object->getBridgeNfIp6tables();
            }
            if ($object->isInitialized('debug') && null !== $object->getDebug()) {
                $data['Debug'] = $object->getDebug();
            }
            if ($object->isInitialized('nFd') && null !== $object->getNFd()) {
                $data['NFd'] = $object->getNFd();
            }
            if ($object->isInitialized('nGoroutines') && null !== $object->getNGoroutines()) {
                $data['NGoroutines'] = $object->getNGoroutines();
            }
            if ($object->isInitialized('systemTime') && null !== $object->getSystemTime()) {
                $data['SystemTime'] = $object->getSystemTime();
            }
            if ($object->isInitialized('loggingDriver') && null !== $object->getLoggingDriver()) {
                $data['LoggingDriver'] = $object->getLoggingDriver();
            }
            if ($object->isInitialized('cgroupDriver') && null !== $object->getCgroupDriver()) {
                $data['CgroupDriver'] = $object->getCgroupDriver();
            }
            if ($object->isInitialized('cgroupVersion') && null !== $object->getCgroupVersion()) {
                $data['CgroupVersion'] = $object->getCgroupVersion();
            }
            if ($object->isInitialized('nEventsListener') && null !== $object->getNEventsListener()) {
                $data['NEventsListener'] = $object->getNEventsListener();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
                $data['OperatingSystem'] = $object->getOperatingSystem();
            }
            if ($object->isInitialized('oSVersion') && null !== $object->getOSVersion()) {
                $data['OSVersion'] = $object->getOSVersion();
            }
            if ($object->isInitialized('oSType') && null !== $object->getOSType()) {
                $data['OSType'] = $object->getOSType();
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('nCPU') && null !== $object->getNCPU()) {
                $data['NCPU'] = $object->getNCPU();
            }
            if ($object->isInitialized('memTotal') && null !== $object->getMemTotal()) {
                $data['MemTotal'] = $object->getMemTotal();
            }
            if ($object->isInitialized('indexServerAddress') && null !== $object->getIndexServerAddress()) {
                $data['IndexServerAddress'] = $object->getIndexServerAddress();
            }
            if ($object->isInitialized('registryConfig') && null !== $object->getRegistryConfig()) {
                $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
            }
            if ($object->isInitialized('genericResources') && null !== $object->getGenericResources()) {
                $values_2 = [];
                foreach ($object->getGenericResources() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['GenericResources'] = $values_2;
            }
            if ($object->isInitialized('httpProxy') && null !== $object->getHttpProxy()) {
                $data['HttpProxy'] = $object->getHttpProxy();
            }
            if ($object->isInitialized('httpsProxy') && null !== $object->getHttpsProxy()) {
                $data['HttpsProxy'] = $object->getHttpsProxy();
            }
            if ($object->isInitialized('noProxy') && null !== $object->getNoProxy()) {
                $data['NoProxy'] = $object->getNoProxy();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_3 = [];
                foreach ($object->getLabels() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Labels'] = $values_3;
            }
            if ($object->isInitialized('experimentalBuild') && null !== $object->getExperimentalBuild()) {
                $data['ExperimentalBuild'] = $object->getExperimentalBuild();
            }
            if ($object->isInitialized('serverVersion') && null !== $object->getServerVersion()) {
                $data['ServerVersion'] = $object->getServerVersion();
            }
            if ($object->isInitialized('runtimes') && null !== $object->getRuntimes()) {
                $values_4 = [];
                foreach ($object->getRuntimes() as $key => $value_4) {
                    $values_4[$key] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Runtimes'] = $values_4;
            }
            if ($object->isInitialized('defaultRuntime') && null !== $object->getDefaultRuntime()) {
                $data['DefaultRuntime'] = $object->getDefaultRuntime();
            }
            if ($object->isInitialized('swarm') && null !== $object->getSwarm()) {
                $data['Swarm'] = $this->normalizer->normalize($object->getSwarm(), 'json', $context);
            }
            if ($object->isInitialized('liveRestoreEnabled') && null !== $object->getLiveRestoreEnabled()) {
                $data['LiveRestoreEnabled'] = $object->getLiveRestoreEnabled();
            }
            if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
                $data['Isolation'] = $object->getIsolation();
            }
            if ($object->isInitialized('initBinary') && null !== $object->getInitBinary()) {
                $data['InitBinary'] = $object->getInitBinary();
            }
            if ($object->isInitialized('containerdCommit') && null !== $object->getContainerdCommit()) {
                $data['ContainerdCommit'] = $this->normalizer->normalize($object->getContainerdCommit(), 'json', $context);
            }
            if ($object->isInitialized('runcCommit') && null !== $object->getRuncCommit()) {
                $data['RuncCommit'] = $this->normalizer->normalize($object->getRuncCommit(), 'json', $context);
            }
            if ($object->isInitialized('initCommit') && null !== $object->getInitCommit()) {
                $data['InitCommit'] = $this->normalizer->normalize($object->getInitCommit(), 'json', $context);
            }
            if ($object->isInitialized('securityOptions') && null !== $object->getSecurityOptions()) {
                $values_5 = [];
                foreach ($object->getSecurityOptions() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['SecurityOptions'] = $values_5;
            }
            if ($object->isInitialized('productLicense') && null !== $object->getProductLicense()) {
                $data['ProductLicense'] = $object->getProductLicense();
            }
            if ($object->isInitialized('defaultAddressPools') && null !== $object->getDefaultAddressPools()) {
                $values_6 = [];
                foreach ($object->getDefaultAddressPools() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['DefaultAddressPools'] = $values_6;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_7 = [];
                foreach ($object->getWarnings() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['Warnings'] = $values_7;
            }
            if ($object->isInitialized('cDISpecDirs') && null !== $object->getCDISpecDirs()) {
                $values_8 = [];
                foreach ($object->getCDISpecDirs() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['CDISpecDirs'] = $values_8;
            }
            if ($object->isInitialized('containerd') && null !== $object->getContainerd()) {
                $data['Containerd'] = $this->normalizer->normalize($object->getContainerd(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_9) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_9;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\SystemInfo::class => true];
        }
    }
} else {
    class SystemInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\SystemInfo();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
                unset($data['Containers']);
            }
            if (array_key_exists('ContainersRunning', $data)) {
                $object->setContainersRunning($data['ContainersRunning']);
                unset($data['ContainersRunning']);
            }
            if (array_key_exists('ContainersPaused', $data)) {
                $object->setContainersPaused($data['ContainersPaused']);
                unset($data['ContainersPaused']);
            }
            if (array_key_exists('ContainersStopped', $data)) {
                $object->setContainersStopped($data['ContainersStopped']);
                unset($data['ContainersStopped']);
            }
            if (array_key_exists('Images', $data)) {
                $object->setImages($data['Images']);
                unset($data['Images']);
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('DriverStatus', $data)) {
                $values = [];
                foreach ($data['DriverStatus'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setDriverStatus($values);
                unset($data['DriverStatus']);
            }
            if (array_key_exists('DockerRootDir', $data)) {
                $object->setDockerRootDir($data['DockerRootDir']);
                unset($data['DockerRootDir']);
            }
            if (array_key_exists('Plugins', $data)) {
                $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class, 'json', $context));
                unset($data['Plugins']);
            }
            if (array_key_exists('MemoryLimit', $data)) {
                $object->setMemoryLimit($data['MemoryLimit']);
                unset($data['MemoryLimit']);
            }
            if (array_key_exists('SwapLimit', $data)) {
                $object->setSwapLimit($data['SwapLimit']);
                unset($data['SwapLimit']);
            }
            if (array_key_exists('KernelMemoryTCP', $data)) {
                $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
                unset($data['KernelMemoryTCP']);
            }
            if (array_key_exists('CpuCfsPeriod', $data)) {
                $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
                unset($data['CpuCfsPeriod']);
            }
            if (array_key_exists('CpuCfsQuota', $data)) {
                $object->setCpuCfsQuota($data['CpuCfsQuota']);
                unset($data['CpuCfsQuota']);
            }
            if (array_key_exists('CPUShares', $data)) {
                $object->setCPUShares($data['CPUShares']);
                unset($data['CPUShares']);
            }
            if (array_key_exists('CPUSet', $data)) {
                $object->setCPUSet($data['CPUSet']);
                unset($data['CPUSet']);
            }
            if (array_key_exists('PidsLimit', $data)) {
                $object->setPidsLimit($data['PidsLimit']);
                unset($data['PidsLimit']);
            }
            if (array_key_exists('OomKillDisable', $data)) {
                $object->setOomKillDisable($data['OomKillDisable']);
                unset($data['OomKillDisable']);
            }
            if (array_key_exists('IPv4Forwarding', $data)) {
                $object->setIPv4Forwarding($data['IPv4Forwarding']);
                unset($data['IPv4Forwarding']);
            }
            if (array_key_exists('BridgeNfIptables', $data)) {
                $object->setBridgeNfIptables($data['BridgeNfIptables']);
                unset($data['BridgeNfIptables']);
            }
            if (array_key_exists('BridgeNfIp6tables', $data)) {
                $object->setBridgeNfIp6tables($data['BridgeNfIp6tables']);
                unset($data['BridgeNfIp6tables']);
            }
            if (array_key_exists('Debug', $data)) {
                $object->setDebug($data['Debug']);
                unset($data['Debug']);
            }
            if (array_key_exists('NFd', $data)) {
                $object->setNFd($data['NFd']);
                unset($data['NFd']);
            }
            if (array_key_exists('NGoroutines', $data)) {
                $object->setNGoroutines($data['NGoroutines']);
                unset($data['NGoroutines']);
            }
            if (array_key_exists('SystemTime', $data)) {
                $object->setSystemTime($data['SystemTime']);
                unset($data['SystemTime']);
            }
            if (array_key_exists('LoggingDriver', $data)) {
                $object->setLoggingDriver($data['LoggingDriver']);
                unset($data['LoggingDriver']);
            }
            if (array_key_exists('CgroupDriver', $data)) {
                $object->setCgroupDriver($data['CgroupDriver']);
                unset($data['CgroupDriver']);
            }
            if (array_key_exists('CgroupVersion', $data)) {
                $object->setCgroupVersion($data['CgroupVersion']);
                unset($data['CgroupVersion']);
            }
            if (array_key_exists('NEventsListener', $data)) {
                $object->setNEventsListener($data['NEventsListener']);
                unset($data['NEventsListener']);
            }
            if (array_key_exists('KernelVersion', $data)) {
                $object->setKernelVersion($data['KernelVersion']);
                unset($data['KernelVersion']);
            }
            if (array_key_exists('OperatingSystem', $data)) {
                $object->setOperatingSystem($data['OperatingSystem']);
                unset($data['OperatingSystem']);
            }
            if (array_key_exists('OSVersion', $data)) {
                $object->setOSVersion($data['OSVersion']);
                unset($data['OSVersion']);
            }
            if (array_key_exists('OSType', $data)) {
                $object->setOSType($data['OSType']);
                unset($data['OSType']);
            }
            if (array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
                unset($data['Architecture']);
            }
            if (array_key_exists('NCPU', $data)) {
                $object->setNCPU($data['NCPU']);
                unset($data['NCPU']);
            }
            if (array_key_exists('MemTotal', $data)) {
                $object->setMemTotal($data['MemTotal']);
                unset($data['MemTotal']);
            }
            if (array_key_exists('IndexServerAddress', $data)) {
                $object->setIndexServerAddress($data['IndexServerAddress']);
                unset($data['IndexServerAddress']);
            }
            if (array_key_exists('RegistryConfig', $data) && null !== $data['RegistryConfig']) {
                $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class, 'json', $context));
                unset($data['RegistryConfig']);
            } elseif (array_key_exists('RegistryConfig', $data) && null === $data['RegistryConfig']) {
                $object->setRegistryConfig(null);
            }
            if (array_key_exists('GenericResources', $data)) {
                $values_2 = [];
                foreach ($data['GenericResources'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
                }
                $object->setGenericResources($values_2);
                unset($data['GenericResources']);
            }
            if (array_key_exists('HttpProxy', $data)) {
                $object->setHttpProxy($data['HttpProxy']);
                unset($data['HttpProxy']);
            }
            if (array_key_exists('HttpsProxy', $data)) {
                $object->setHttpsProxy($data['HttpsProxy']);
                unset($data['HttpsProxy']);
            }
            if (array_key_exists('NoProxy', $data)) {
                $object->setNoProxy($data['NoProxy']);
                unset($data['NoProxy']);
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_3 = [];
                foreach ($data['Labels'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLabels($values_3);
                unset($data['Labels']);
            }
            if (array_key_exists('ExperimentalBuild', $data)) {
                $object->setExperimentalBuild($data['ExperimentalBuild']);
                unset($data['ExperimentalBuild']);
            }
            if (array_key_exists('ServerVersion', $data)) {
                $object->setServerVersion($data['ServerVersion']);
                unset($data['ServerVersion']);
            }
            if (array_key_exists('Runtimes', $data)) {
                $values_4 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Runtimes'] as $key => $value_4) {
                    $values_4[$key] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\Runtime::class, 'json', $context);
                }
                $object->setRuntimes($values_4);
                unset($data['Runtimes']);
            }
            if (array_key_exists('DefaultRuntime', $data)) {
                $object->setDefaultRuntime($data['DefaultRuntime']);
                unset($data['DefaultRuntime']);
            }
            if (array_key_exists('Swarm', $data)) {
                $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class, 'json', $context));
                unset($data['Swarm']);
            }
            if (array_key_exists('LiveRestoreEnabled', $data)) {
                $object->setLiveRestoreEnabled($data['LiveRestoreEnabled']);
                unset($data['LiveRestoreEnabled']);
            }
            if (array_key_exists('Isolation', $data)) {
                $object->setIsolation($data['Isolation']);
                unset($data['Isolation']);
            }
            if (array_key_exists('InitBinary', $data)) {
                $object->setInitBinary($data['InitBinary']);
                unset($data['InitBinary']);
            }
            if (array_key_exists('ContainerdCommit', $data)) {
                $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
                unset($data['ContainerdCommit']);
            }
            if (array_key_exists('RuncCommit', $data)) {
                $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
                unset($data['RuncCommit']);
            }
            if (array_key_exists('InitCommit', $data)) {
                $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
                unset($data['InitCommit']);
            }
            if (array_key_exists('SecurityOptions', $data)) {
                $values_5 = [];
                foreach ($data['SecurityOptions'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setSecurityOptions($values_5);
                unset($data['SecurityOptions']);
            }
            if (array_key_exists('ProductLicense', $data)) {
                $object->setProductLicense($data['ProductLicense']);
                unset($data['ProductLicense']);
            }
            if (array_key_exists('DefaultAddressPools', $data)) {
                $values_6 = [];
                foreach ($data['DefaultAddressPools'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class, 'json', $context);
                }
                $object->setDefaultAddressPools($values_6);
                unset($data['DefaultAddressPools']);
            }
            if (array_key_exists('Warnings', $data)) {
                $values_7 = [];
                foreach ($data['Warnings'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setWarnings($values_7);
                unset($data['Warnings']);
            }
            if (array_key_exists('CDISpecDirs', $data)) {
                $values_8 = [];
                foreach ($data['CDISpecDirs'] as $value_8) {
                    $values_8[] = $value_8;
                }
                $object->setCDISpecDirs($values_8);
                unset($data['CDISpecDirs']);
            }
            if (array_key_exists('Containerd', $data) && null !== $data['Containerd']) {
                $object->setContainerd($this->denormalizer->denormalize($data['Containerd'], \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class, 'json', $context));
                unset($data['Containerd']);
            } elseif (array_key_exists('Containerd', $data) && null === $data['Containerd']) {
                $object->setContainerd(null);
            }
            foreach ($data as $key_1 => $value_9) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_9;
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
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $data['Containers'] = $object->getContainers();
            }
            if ($object->isInitialized('containersRunning') && null !== $object->getContainersRunning()) {
                $data['ContainersRunning'] = $object->getContainersRunning();
            }
            if ($object->isInitialized('containersPaused') && null !== $object->getContainersPaused()) {
                $data['ContainersPaused'] = $object->getContainersPaused();
            }
            if ($object->isInitialized('containersStopped') && null !== $object->getContainersStopped()) {
                $data['ContainersStopped'] = $object->getContainersStopped();
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['Images'] = $object->getImages();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('driverStatus') && null !== $object->getDriverStatus()) {
                $values = [];
                foreach ($object->getDriverStatus() as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['DriverStatus'] = $values;
            }
            if ($object->isInitialized('dockerRootDir') && null !== $object->getDockerRootDir()) {
                $data['DockerRootDir'] = $object->getDockerRootDir();
            }
            if ($object->isInitialized('plugins') && null !== $object->getPlugins()) {
                $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
            }
            if ($object->isInitialized('memoryLimit') && null !== $object->getMemoryLimit()) {
                $data['MemoryLimit'] = $object->getMemoryLimit();
            }
            if ($object->isInitialized('swapLimit') && null !== $object->getSwapLimit()) {
                $data['SwapLimit'] = $object->getSwapLimit();
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('cpuCfsPeriod') && null !== $object->getCpuCfsPeriod()) {
                $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
            }
            if ($object->isInitialized('cpuCfsQuota') && null !== $object->getCpuCfsQuota()) {
                $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
            }
            if ($object->isInitialized('cPUShares') && null !== $object->getCPUShares()) {
                $data['CPUShares'] = $object->getCPUShares();
            }
            if ($object->isInitialized('cPUSet') && null !== $object->getCPUSet()) {
                $data['CPUSet'] = $object->getCPUSet();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('iPv4Forwarding') && null !== $object->getIPv4Forwarding()) {
                $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
            }
            if ($object->isInitialized('bridgeNfIptables') && null !== $object->getBridgeNfIptables()) {
                $data['BridgeNfIptables'] = $object->getBridgeNfIptables();
            }
            if ($object->isInitialized('bridgeNfIp6tables') && null !== $object->getBridgeNfIp6tables()) {
                $data['BridgeNfIp6tables'] = $object->getBridgeNfIp6tables();
            }
            if ($object->isInitialized('debug') && null !== $object->getDebug()) {
                $data['Debug'] = $object->getDebug();
            }
            if ($object->isInitialized('nFd') && null !== $object->getNFd()) {
                $data['NFd'] = $object->getNFd();
            }
            if ($object->isInitialized('nGoroutines') && null !== $object->getNGoroutines()) {
                $data['NGoroutines'] = $object->getNGoroutines();
            }
            if ($object->isInitialized('systemTime') && null !== $object->getSystemTime()) {
                $data['SystemTime'] = $object->getSystemTime();
            }
            if ($object->isInitialized('loggingDriver') && null !== $object->getLoggingDriver()) {
                $data['LoggingDriver'] = $object->getLoggingDriver();
            }
            if ($object->isInitialized('cgroupDriver') && null !== $object->getCgroupDriver()) {
                $data['CgroupDriver'] = $object->getCgroupDriver();
            }
            if ($object->isInitialized('cgroupVersion') && null !== $object->getCgroupVersion()) {
                $data['CgroupVersion'] = $object->getCgroupVersion();
            }
            if ($object->isInitialized('nEventsListener') && null !== $object->getNEventsListener()) {
                $data['NEventsListener'] = $object->getNEventsListener();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
                $data['OperatingSystem'] = $object->getOperatingSystem();
            }
            if ($object->isInitialized('oSVersion') && null !== $object->getOSVersion()) {
                $data['OSVersion'] = $object->getOSVersion();
            }
            if ($object->isInitialized('oSType') && null !== $object->getOSType()) {
                $data['OSType'] = $object->getOSType();
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('nCPU') && null !== $object->getNCPU()) {
                $data['NCPU'] = $object->getNCPU();
            }
            if ($object->isInitialized('memTotal') && null !== $object->getMemTotal()) {
                $data['MemTotal'] = $object->getMemTotal();
            }
            if ($object->isInitialized('indexServerAddress') && null !== $object->getIndexServerAddress()) {
                $data['IndexServerAddress'] = $object->getIndexServerAddress();
            }
            if ($object->isInitialized('registryConfig') && null !== $object->getRegistryConfig()) {
                $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
            }
            if ($object->isInitialized('genericResources') && null !== $object->getGenericResources()) {
                $values_2 = [];
                foreach ($object->getGenericResources() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['GenericResources'] = $values_2;
            }
            if ($object->isInitialized('httpProxy') && null !== $object->getHttpProxy()) {
                $data['HttpProxy'] = $object->getHttpProxy();
            }
            if ($object->isInitialized('httpsProxy') && null !== $object->getHttpsProxy()) {
                $data['HttpsProxy'] = $object->getHttpsProxy();
            }
            if ($object->isInitialized('noProxy') && null !== $object->getNoProxy()) {
                $data['NoProxy'] = $object->getNoProxy();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_3 = [];
                foreach ($object->getLabels() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Labels'] = $values_3;
            }
            if ($object->isInitialized('experimentalBuild') && null !== $object->getExperimentalBuild()) {
                $data['ExperimentalBuild'] = $object->getExperimentalBuild();
            }
            if ($object->isInitialized('serverVersion') && null !== $object->getServerVersion()) {
                $data['ServerVersion'] = $object->getServerVersion();
            }
            if ($object->isInitialized('runtimes') && null !== $object->getRuntimes()) {
                $values_4 = [];
                foreach ($object->getRuntimes() as $key => $value_4) {
                    $values_4[$key] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Runtimes'] = $values_4;
            }
            if ($object->isInitialized('defaultRuntime') && null !== $object->getDefaultRuntime()) {
                $data['DefaultRuntime'] = $object->getDefaultRuntime();
            }
            if ($object->isInitialized('swarm') && null !== $object->getSwarm()) {
                $data['Swarm'] = $this->normalizer->normalize($object->getSwarm(), 'json', $context);
            }
            if ($object->isInitialized('liveRestoreEnabled') && null !== $object->getLiveRestoreEnabled()) {
                $data['LiveRestoreEnabled'] = $object->getLiveRestoreEnabled();
            }
            if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
                $data['Isolation'] = $object->getIsolation();
            }
            if ($object->isInitialized('initBinary') && null !== $object->getInitBinary()) {
                $data['InitBinary'] = $object->getInitBinary();
            }
            if ($object->isInitialized('containerdCommit') && null !== $object->getContainerdCommit()) {
                $data['ContainerdCommit'] = $this->normalizer->normalize($object->getContainerdCommit(), 'json', $context);
            }
            if ($object->isInitialized('runcCommit') && null !== $object->getRuncCommit()) {
                $data['RuncCommit'] = $this->normalizer->normalize($object->getRuncCommit(), 'json', $context);
            }
            if ($object->isInitialized('initCommit') && null !== $object->getInitCommit()) {
                $data['InitCommit'] = $this->normalizer->normalize($object->getInitCommit(), 'json', $context);
            }
            if ($object->isInitialized('securityOptions') && null !== $object->getSecurityOptions()) {
                $values_5 = [];
                foreach ($object->getSecurityOptions() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['SecurityOptions'] = $values_5;
            }
            if ($object->isInitialized('productLicense') && null !== $object->getProductLicense()) {
                $data['ProductLicense'] = $object->getProductLicense();
            }
            if ($object->isInitialized('defaultAddressPools') && null !== $object->getDefaultAddressPools()) {
                $values_6 = [];
                foreach ($object->getDefaultAddressPools() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['DefaultAddressPools'] = $values_6;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_7 = [];
                foreach ($object->getWarnings() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['Warnings'] = $values_7;
            }
            if ($object->isInitialized('cDISpecDirs') && null !== $object->getCDISpecDirs()) {
                $values_8 = [];
                foreach ($object->getCDISpecDirs() as $value_8) {
                    $values_8[] = $value_8;
                }
                $data['CDISpecDirs'] = $values_8;
            }
            if ($object->isInitialized('containerd') && null !== $object->getContainerd()) {
                $data['Containerd'] = $this->normalizer->normalize($object->getContainerd(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_9) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_9;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\SystemInfo::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
