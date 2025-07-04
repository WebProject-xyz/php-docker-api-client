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
        if (array_key_exists('MemoryLimit', $data) && is_int($data['MemoryLimit'])) {
            $data['MemoryLimit'] = (bool) $data['MemoryLimit'];
        }
        if (array_key_exists('SwapLimit', $data) && is_int($data['SwapLimit'])) {
            $data['SwapLimit'] = (bool) $data['SwapLimit'];
        }
        if (array_key_exists('KernelMemoryTCP', $data) && is_int($data['KernelMemoryTCP'])) {
            $data['KernelMemoryTCP'] = (bool) $data['KernelMemoryTCP'];
        }
        if (array_key_exists('CpuCfsPeriod', $data) && is_int($data['CpuCfsPeriod'])) {
            $data['CpuCfsPeriod'] = (bool) $data['CpuCfsPeriod'];
        }
        if (array_key_exists('CpuCfsQuota', $data) && is_int($data['CpuCfsQuota'])) {
            $data['CpuCfsQuota'] = (bool) $data['CpuCfsQuota'];
        }
        if (array_key_exists('CPUShares', $data) && is_int($data['CPUShares'])) {
            $data['CPUShares'] = (bool) $data['CPUShares'];
        }
        if (array_key_exists('CPUSet', $data) && is_int($data['CPUSet'])) {
            $data['CPUSet'] = (bool) $data['CPUSet'];
        }
        if (array_key_exists('PidsLimit', $data) && is_int($data['PidsLimit'])) {
            $data['PidsLimit'] = (bool) $data['PidsLimit'];
        }
        if (array_key_exists('OomKillDisable', $data) && is_int($data['OomKillDisable'])) {
            $data['OomKillDisable'] = (bool) $data['OomKillDisable'];
        }
        if (array_key_exists('IPv4Forwarding', $data) && is_int($data['IPv4Forwarding'])) {
            $data['IPv4Forwarding'] = (bool) $data['IPv4Forwarding'];
        }
        if (array_key_exists('BridgeNfIptables', $data) && is_int($data['BridgeNfIptables'])) {
            $data['BridgeNfIptables'] = (bool) $data['BridgeNfIptables'];
        }
        if (array_key_exists('BridgeNfIp6tables', $data) && is_int($data['BridgeNfIp6tables'])) {
            $data['BridgeNfIp6tables'] = (bool) $data['BridgeNfIp6tables'];
        }
        if (array_key_exists('Debug', $data) && is_int($data['Debug'])) {
            $data['Debug'] = (bool) $data['Debug'];
        }
        if (array_key_exists('ExperimentalBuild', $data) && is_int($data['ExperimentalBuild'])) {
            $data['ExperimentalBuild'] = (bool) $data['ExperimentalBuild'];
        }
        if (array_key_exists('LiveRestoreEnabled', $data) && is_int($data['LiveRestoreEnabled'])) {
            $data['LiveRestoreEnabled'] = (bool) $data['LiveRestoreEnabled'];
        }
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iD') && null !== $data->getID()) {
            $dataArray['ID'] = $data->getID();
        }
        if ($data->isInitialized('containers') && null !== $data->getContainers()) {
            $dataArray['Containers'] = $data->getContainers();
        }
        if ($data->isInitialized('containersRunning') && null !== $data->getContainersRunning()) {
            $dataArray['ContainersRunning'] = $data->getContainersRunning();
        }
        if ($data->isInitialized('containersPaused') && null !== $data->getContainersPaused()) {
            $dataArray['ContainersPaused'] = $data->getContainersPaused();
        }
        if ($data->isInitialized('containersStopped') && null !== $data->getContainersStopped()) {
            $dataArray['ContainersStopped'] = $data->getContainersStopped();
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $dataArray['Images'] = $data->getImages();
        }
        if ($data->isInitialized('driver') && null !== $data->getDriver()) {
            $dataArray['Driver'] = $data->getDriver();
        }
        if ($data->isInitialized('driverStatus') && null !== $data->getDriverStatus()) {
            $values = [];
            foreach ($data->getDriverStatus() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $dataArray['DriverStatus'] = $values;
        }
        if ($data->isInitialized('dockerRootDir') && null !== $data->getDockerRootDir()) {
            $dataArray['DockerRootDir'] = $data->getDockerRootDir();
        }
        if ($data->isInitialized('plugins') && null !== $data->getPlugins()) {
            $dataArray['Plugins'] = $this->normalizer->normalize($data->getPlugins(), 'json', $context);
        }
        if ($data->isInitialized('memoryLimit') && null !== $data->getMemoryLimit()) {
            $dataArray['MemoryLimit'] = $data->getMemoryLimit();
        }
        if ($data->isInitialized('swapLimit') && null !== $data->getSwapLimit()) {
            $dataArray['SwapLimit'] = $data->getSwapLimit();
        }
        if ($data->isInitialized('kernelMemoryTCP') && null !== $data->getKernelMemoryTCP()) {
            $dataArray['KernelMemoryTCP'] = $data->getKernelMemoryTCP();
        }
        if ($data->isInitialized('cpuCfsPeriod') && null !== $data->getCpuCfsPeriod()) {
            $dataArray['CpuCfsPeriod'] = $data->getCpuCfsPeriod();
        }
        if ($data->isInitialized('cpuCfsQuota') && null !== $data->getCpuCfsQuota()) {
            $dataArray['CpuCfsQuota'] = $data->getCpuCfsQuota();
        }
        if ($data->isInitialized('cPUShares') && null !== $data->getCPUShares()) {
            $dataArray['CPUShares'] = $data->getCPUShares();
        }
        if ($data->isInitialized('cPUSet') && null !== $data->getCPUSet()) {
            $dataArray['CPUSet'] = $data->getCPUSet();
        }
        if ($data->isInitialized('pidsLimit') && null !== $data->getPidsLimit()) {
            $dataArray['PidsLimit'] = $data->getPidsLimit();
        }
        if ($data->isInitialized('oomKillDisable') && null !== $data->getOomKillDisable()) {
            $dataArray['OomKillDisable'] = $data->getOomKillDisable();
        }
        if ($data->isInitialized('iPv4Forwarding') && null !== $data->getIPv4Forwarding()) {
            $dataArray['IPv4Forwarding'] = $data->getIPv4Forwarding();
        }
        if ($data->isInitialized('bridgeNfIptables') && null !== $data->getBridgeNfIptables()) {
            $dataArray['BridgeNfIptables'] = $data->getBridgeNfIptables();
        }
        if ($data->isInitialized('bridgeNfIp6tables') && null !== $data->getBridgeNfIp6tables()) {
            $dataArray['BridgeNfIp6tables'] = $data->getBridgeNfIp6tables();
        }
        if ($data->isInitialized('debug') && null !== $data->getDebug()) {
            $dataArray['Debug'] = $data->getDebug();
        }
        if ($data->isInitialized('nFd') && null !== $data->getNFd()) {
            $dataArray['NFd'] = $data->getNFd();
        }
        if ($data->isInitialized('nGoroutines') && null !== $data->getNGoroutines()) {
            $dataArray['NGoroutines'] = $data->getNGoroutines();
        }
        if ($data->isInitialized('systemTime') && null !== $data->getSystemTime()) {
            $dataArray['SystemTime'] = $data->getSystemTime();
        }
        if ($data->isInitialized('loggingDriver') && null !== $data->getLoggingDriver()) {
            $dataArray['LoggingDriver'] = $data->getLoggingDriver();
        }
        if ($data->isInitialized('cgroupDriver') && null !== $data->getCgroupDriver()) {
            $dataArray['CgroupDriver'] = $data->getCgroupDriver();
        }
        if ($data->isInitialized('cgroupVersion') && null !== $data->getCgroupVersion()) {
            $dataArray['CgroupVersion'] = $data->getCgroupVersion();
        }
        if ($data->isInitialized('nEventsListener') && null !== $data->getNEventsListener()) {
            $dataArray['NEventsListener'] = $data->getNEventsListener();
        }
        if ($data->isInitialized('kernelVersion') && null !== $data->getKernelVersion()) {
            $dataArray['KernelVersion'] = $data->getKernelVersion();
        }
        if ($data->isInitialized('operatingSystem') && null !== $data->getOperatingSystem()) {
            $dataArray['OperatingSystem'] = $data->getOperatingSystem();
        }
        if ($data->isInitialized('oSVersion') && null !== $data->getOSVersion()) {
            $dataArray['OSVersion'] = $data->getOSVersion();
        }
        if ($data->isInitialized('oSType') && null !== $data->getOSType()) {
            $dataArray['OSType'] = $data->getOSType();
        }
        if ($data->isInitialized('architecture') && null !== $data->getArchitecture()) {
            $dataArray['Architecture'] = $data->getArchitecture();
        }
        if ($data->isInitialized('nCPU') && null !== $data->getNCPU()) {
            $dataArray['NCPU'] = $data->getNCPU();
        }
        if ($data->isInitialized('memTotal') && null !== $data->getMemTotal()) {
            $dataArray['MemTotal'] = $data->getMemTotal();
        }
        if ($data->isInitialized('indexServerAddress') && null !== $data->getIndexServerAddress()) {
            $dataArray['IndexServerAddress'] = $data->getIndexServerAddress();
        }
        if ($data->isInitialized('registryConfig') && null !== $data->getRegistryConfig()) {
            $dataArray['RegistryConfig'] = $this->normalizer->normalize($data->getRegistryConfig(), 'json', $context);
        }
        if ($data->isInitialized('genericResources') && null !== $data->getGenericResources()) {
            $values_2 = [];
            foreach ($data->getGenericResources() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['GenericResources'] = $values_2;
        }
        if ($data->isInitialized('httpProxy') && null !== $data->getHttpProxy()) {
            $dataArray['HttpProxy'] = $data->getHttpProxy();
        }
        if ($data->isInitialized('httpsProxy') && null !== $data->getHttpsProxy()) {
            $dataArray['HttpsProxy'] = $data->getHttpsProxy();
        }
        if ($data->isInitialized('noProxy') && null !== $data->getNoProxy()) {
            $dataArray['NoProxy'] = $data->getNoProxy();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_3 = [];
            foreach ($data->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['Labels'] = $values_3;
        }
        if ($data->isInitialized('experimentalBuild') && null !== $data->getExperimentalBuild()) {
            $dataArray['ExperimentalBuild'] = $data->getExperimentalBuild();
        }
        if ($data->isInitialized('serverVersion') && null !== $data->getServerVersion()) {
            $dataArray['ServerVersion'] = $data->getServerVersion();
        }
        if ($data->isInitialized('runtimes') && null !== $data->getRuntimes()) {
            $values_4 = [];
            foreach ($data->getRuntimes() as $key => $value_4) {
                $values_4[$key] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['Runtimes'] = $values_4;
        }
        if ($data->isInitialized('defaultRuntime') && null !== $data->getDefaultRuntime()) {
            $dataArray['DefaultRuntime'] = $data->getDefaultRuntime();
        }
        if ($data->isInitialized('swarm') && null !== $data->getSwarm()) {
            $dataArray['Swarm'] = $this->normalizer->normalize($data->getSwarm(), 'json', $context);
        }
        if ($data->isInitialized('liveRestoreEnabled') && null !== $data->getLiveRestoreEnabled()) {
            $dataArray['LiveRestoreEnabled'] = $data->getLiveRestoreEnabled();
        }
        if ($data->isInitialized('isolation') && null !== $data->getIsolation()) {
            $dataArray['Isolation'] = $data->getIsolation();
        }
        if ($data->isInitialized('initBinary') && null !== $data->getInitBinary()) {
            $dataArray['InitBinary'] = $data->getInitBinary();
        }
        if ($data->isInitialized('containerdCommit') && null !== $data->getContainerdCommit()) {
            $dataArray['ContainerdCommit'] = $this->normalizer->normalize($data->getContainerdCommit(), 'json', $context);
        }
        if ($data->isInitialized('runcCommit') && null !== $data->getRuncCommit()) {
            $dataArray['RuncCommit'] = $this->normalizer->normalize($data->getRuncCommit(), 'json', $context);
        }
        if ($data->isInitialized('initCommit') && null !== $data->getInitCommit()) {
            $dataArray['InitCommit'] = $this->normalizer->normalize($data->getInitCommit(), 'json', $context);
        }
        if ($data->isInitialized('securityOptions') && null !== $data->getSecurityOptions()) {
            $values_5 = [];
            foreach ($data->getSecurityOptions() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['SecurityOptions'] = $values_5;
        }
        if ($data->isInitialized('productLicense') && null !== $data->getProductLicense()) {
            $dataArray['ProductLicense'] = $data->getProductLicense();
        }
        if ($data->isInitialized('defaultAddressPools') && null !== $data->getDefaultAddressPools()) {
            $values_6 = [];
            foreach ($data->getDefaultAddressPools() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['DefaultAddressPools'] = $values_6;
        }
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values_7 = [];
            foreach ($data->getWarnings() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['Warnings'] = $values_7;
        }
        if ($data->isInitialized('cDISpecDirs') && null !== $data->getCDISpecDirs()) {
            $values_8 = [];
            foreach ($data->getCDISpecDirs() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['CDISpecDirs'] = $values_8;
        }
        if ($data->isInitialized('containerd') && null !== $data->getContainerd()) {
            $dataArray['Containerd'] = $this->normalizer->normalize($data->getContainerd(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_9) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_9;
            }
        }

        return $dataArray;
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
