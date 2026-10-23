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
use function is_bool;
use function is_int;
use function is_object;
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\SystemInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ID', $data) && null !== $data['ID']) {
            $value = $data['ID'];
            if (is_string($data['ID'])) {
                $value = $data['ID'];
            } elseif (null === $data['ID']) {
                $value = $data['ID'];
            }
            $object->iD = $value;
            unset($data['ID']);
        } elseif (array_key_exists('ID', $data)) {
            $object->iD = null;
            unset($data['ID']);
        }
        if (array_key_exists('Containers', $data) && null !== $data['Containers']) {
            $value_1 = $data['Containers'];
            if (is_int($data['Containers'])) {
                $value_1 = $data['Containers'];
            } elseif (null === $data['Containers']) {
                $value_1 = $data['Containers'];
            }
            $object->containers = $value_1;
            unset($data['Containers']);
        } elseif (array_key_exists('Containers', $data)) {
            $object->containers = null;
            unset($data['Containers']);
        }
        if (array_key_exists('ContainersRunning', $data) && null !== $data['ContainersRunning']) {
            $value_2 = $data['ContainersRunning'];
            if (is_int($data['ContainersRunning'])) {
                $value_2 = $data['ContainersRunning'];
            } elseif (null === $data['ContainersRunning']) {
                $value_2 = $data['ContainersRunning'];
            }
            $object->containersRunning = $value_2;
            unset($data['ContainersRunning']);
        } elseif (array_key_exists('ContainersRunning', $data)) {
            $object->containersRunning = null;
            unset($data['ContainersRunning']);
        }
        if (array_key_exists('ContainersPaused', $data) && null !== $data['ContainersPaused']) {
            $value_3 = $data['ContainersPaused'];
            if (is_int($data['ContainersPaused'])) {
                $value_3 = $data['ContainersPaused'];
            } elseif (null === $data['ContainersPaused']) {
                $value_3 = $data['ContainersPaused'];
            }
            $object->containersPaused = $value_3;
            unset($data['ContainersPaused']);
        } elseif (array_key_exists('ContainersPaused', $data)) {
            $object->containersPaused = null;
            unset($data['ContainersPaused']);
        }
        if (array_key_exists('ContainersStopped', $data) && null !== $data['ContainersStopped']) {
            $value_4 = $data['ContainersStopped'];
            if (is_int($data['ContainersStopped'])) {
                $value_4 = $data['ContainersStopped'];
            } elseif (null === $data['ContainersStopped']) {
                $value_4 = $data['ContainersStopped'];
            }
            $object->containersStopped = $value_4;
            unset($data['ContainersStopped']);
        } elseif (array_key_exists('ContainersStopped', $data)) {
            $object->containersStopped = null;
            unset($data['ContainersStopped']);
        }
        if (array_key_exists('Images', $data) && null !== $data['Images']) {
            $value_5 = $data['Images'];
            if (is_int($data['Images'])) {
                $value_5 = $data['Images'];
            } elseif (null === $data['Images']) {
                $value_5 = $data['Images'];
            }
            $object->images = $value_5;
            unset($data['Images']);
        } elseif (array_key_exists('Images', $data)) {
            $object->images = null;
            unset($data['Images']);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_6 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_6 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_6 = $data['Driver'];
            }
            $object->driver = $value_6;
            unset($data['Driver']);
        } elseif (array_key_exists('Driver', $data)) {
            $object->driver = null;
            unset($data['Driver']);
        }
        if (array_key_exists('DriverStatus', $data) && null !== $data['DriverStatus']) {
            $values = [];
            foreach ($data['DriverStatus'] as $value_7) {
                $values_1 = [];
                foreach ($value_7 as $value_8) {
                    $values_1[] = $value_8;
                }
                $values[] = $values_1;
            }
            $object->driverStatus = $values;
            unset($data['DriverStatus']);
        } elseif (array_key_exists('DriverStatus', $data)) {
            $object->driverStatus = null;
            unset($data['DriverStatus']);
        }
        if (array_key_exists('DockerRootDir', $data) && null !== $data['DockerRootDir']) {
            $value_9 = $data['DockerRootDir'];
            if (is_string($data['DockerRootDir'])) {
                $value_9 = $data['DockerRootDir'];
            } elseif (null === $data['DockerRootDir']) {
                $value_9 = $data['DockerRootDir'];
            }
            $object->dockerRootDir = $value_9;
            unset($data['DockerRootDir']);
        } elseif (array_key_exists('DockerRootDir', $data)) {
            $object->dockerRootDir = null;
            unset($data['DockerRootDir']);
        }
        if (array_key_exists('Plugins', $data)) {
            $object->plugins = $this->denormalizer->denormalize($data['Plugins'], \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class, 'json', $context);
            unset($data['Plugins']);
        }
        if (array_key_exists('MemoryLimit', $data) && null !== $data['MemoryLimit']) {
            $value_10 = $data['MemoryLimit'];
            if (is_bool($data['MemoryLimit'])) {
                $value_10 = $data['MemoryLimit'];
            } elseif (null === $data['MemoryLimit']) {
                $value_10 = $data['MemoryLimit'];
            }
            $object->memoryLimit = $value_10;
            unset($data['MemoryLimit']);
        } elseif (array_key_exists('MemoryLimit', $data)) {
            $object->memoryLimit = null;
            unset($data['MemoryLimit']);
        }
        if (array_key_exists('SwapLimit', $data) && null !== $data['SwapLimit']) {
            $value_11 = $data['SwapLimit'];
            if (is_bool($data['SwapLimit'])) {
                $value_11 = $data['SwapLimit'];
            } elseif (null === $data['SwapLimit']) {
                $value_11 = $data['SwapLimit'];
            }
            $object->swapLimit = $value_11;
            unset($data['SwapLimit']);
        } elseif (array_key_exists('SwapLimit', $data)) {
            $object->swapLimit = null;
            unset($data['SwapLimit']);
        }
        if (array_key_exists('CpuCfsPeriod', $data) && null !== $data['CpuCfsPeriod']) {
            $value_12 = $data['CpuCfsPeriod'];
            if (is_bool($data['CpuCfsPeriod'])) {
                $value_12 = $data['CpuCfsPeriod'];
            } elseif (null === $data['CpuCfsPeriod']) {
                $value_12 = $data['CpuCfsPeriod'];
            }
            $object->cpuCfsPeriod = $value_12;
            unset($data['CpuCfsPeriod']);
        } elseif (array_key_exists('CpuCfsPeriod', $data)) {
            $object->cpuCfsPeriod = null;
            unset($data['CpuCfsPeriod']);
        }
        if (array_key_exists('CpuCfsQuota', $data) && null !== $data['CpuCfsQuota']) {
            $value_13 = $data['CpuCfsQuota'];
            if (is_bool($data['CpuCfsQuota'])) {
                $value_13 = $data['CpuCfsQuota'];
            } elseif (null === $data['CpuCfsQuota']) {
                $value_13 = $data['CpuCfsQuota'];
            }
            $object->cpuCfsQuota = $value_13;
            unset($data['CpuCfsQuota']);
        } elseif (array_key_exists('CpuCfsQuota', $data)) {
            $object->cpuCfsQuota = null;
            unset($data['CpuCfsQuota']);
        }
        if (array_key_exists('CPUShares', $data) && null !== $data['CPUShares']) {
            $value_14 = $data['CPUShares'];
            if (is_bool($data['CPUShares'])) {
                $value_14 = $data['CPUShares'];
            } elseif (null === $data['CPUShares']) {
                $value_14 = $data['CPUShares'];
            }
            $object->cPUShares = $value_14;
            unset($data['CPUShares']);
        } elseif (array_key_exists('CPUShares', $data)) {
            $object->cPUShares = null;
            unset($data['CPUShares']);
        }
        if (array_key_exists('CPUSet', $data) && null !== $data['CPUSet']) {
            $value_15 = $data['CPUSet'];
            if (is_bool($data['CPUSet'])) {
                $value_15 = $data['CPUSet'];
            } elseif (null === $data['CPUSet']) {
                $value_15 = $data['CPUSet'];
            }
            $object->cPUSet = $value_15;
            unset($data['CPUSet']);
        } elseif (array_key_exists('CPUSet', $data)) {
            $object->cPUSet = null;
            unset($data['CPUSet']);
        }
        if (array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
            $value_16 = $data['PidsLimit'];
            if (is_bool($data['PidsLimit'])) {
                $value_16 = $data['PidsLimit'];
            } elseif (null === $data['PidsLimit']) {
                $value_16 = $data['PidsLimit'];
            }
            $object->pidsLimit = $value_16;
            unset($data['PidsLimit']);
        } elseif (array_key_exists('PidsLimit', $data)) {
            $object->pidsLimit = null;
            unset($data['PidsLimit']);
        }
        if (array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
            $value_17 = $data['OomKillDisable'];
            if (is_bool($data['OomKillDisable'])) {
                $value_17 = $data['OomKillDisable'];
            } elseif (null === $data['OomKillDisable']) {
                $value_17 = $data['OomKillDisable'];
            }
            $object->oomKillDisable = $value_17;
            unset($data['OomKillDisable']);
        } elseif (array_key_exists('OomKillDisable', $data)) {
            $object->oomKillDisable = null;
            unset($data['OomKillDisable']);
        }
        if (array_key_exists('IPv4Forwarding', $data) && null !== $data['IPv4Forwarding']) {
            $value_18 = $data['IPv4Forwarding'];
            if (is_bool($data['IPv4Forwarding'])) {
                $value_18 = $data['IPv4Forwarding'];
            } elseif (null === $data['IPv4Forwarding']) {
                $value_18 = $data['IPv4Forwarding'];
            }
            $object->iPv4Forwarding = $value_18;
            unset($data['IPv4Forwarding']);
        } elseif (array_key_exists('IPv4Forwarding', $data)) {
            $object->iPv4Forwarding = null;
            unset($data['IPv4Forwarding']);
        }
        if (array_key_exists('Debug', $data) && null !== $data['Debug']) {
            $value_19 = $data['Debug'];
            if (is_bool($data['Debug'])) {
                $value_19 = $data['Debug'];
            } elseif (null === $data['Debug']) {
                $value_19 = $data['Debug'];
            }
            $object->debug = $value_19;
            unset($data['Debug']);
        } elseif (array_key_exists('Debug', $data)) {
            $object->debug = null;
            unset($data['Debug']);
        }
        if (array_key_exists('NFd', $data) && null !== $data['NFd']) {
            $value_20 = $data['NFd'];
            if (is_int($data['NFd'])) {
                $value_20 = $data['NFd'];
            } elseif (null === $data['NFd']) {
                $value_20 = $data['NFd'];
            }
            $object->nFd = $value_20;
            unset($data['NFd']);
        } elseif (array_key_exists('NFd', $data)) {
            $object->nFd = null;
            unset($data['NFd']);
        }
        if (array_key_exists('NGoroutines', $data) && null !== $data['NGoroutines']) {
            $value_21 = $data['NGoroutines'];
            if (is_int($data['NGoroutines'])) {
                $value_21 = $data['NGoroutines'];
            } elseif (null === $data['NGoroutines']) {
                $value_21 = $data['NGoroutines'];
            }
            $object->nGoroutines = $value_21;
            unset($data['NGoroutines']);
        } elseif (array_key_exists('NGoroutines', $data)) {
            $object->nGoroutines = null;
            unset($data['NGoroutines']);
        }
        if (array_key_exists('SystemTime', $data) && null !== $data['SystemTime']) {
            $value_22 = $data['SystemTime'];
            if (is_string($data['SystemTime'])) {
                $value_22 = $data['SystemTime'];
            } elseif (null === $data['SystemTime']) {
                $value_22 = $data['SystemTime'];
            }
            $object->systemTime = $value_22;
            unset($data['SystemTime']);
        } elseif (array_key_exists('SystemTime', $data)) {
            $object->systemTime = null;
            unset($data['SystemTime']);
        }
        if (array_key_exists('LoggingDriver', $data) && null !== $data['LoggingDriver']) {
            $value_23 = $data['LoggingDriver'];
            if (is_string($data['LoggingDriver'])) {
                $value_23 = $data['LoggingDriver'];
            } elseif (null === $data['LoggingDriver']) {
                $value_23 = $data['LoggingDriver'];
            }
            $object->loggingDriver = $value_23;
            unset($data['LoggingDriver']);
        } elseif (array_key_exists('LoggingDriver', $data)) {
            $object->loggingDriver = null;
            unset($data['LoggingDriver']);
        }
        if (array_key_exists('CgroupDriver', $data) && null !== $data['CgroupDriver']) {
            $value_24 = $data['CgroupDriver'];
            if (is_string($data['CgroupDriver'])) {
                $value_24 = $data['CgroupDriver'];
            } elseif (null === $data['CgroupDriver']) {
                $value_24 = $data['CgroupDriver'];
            }
            $object->cgroupDriver = $value_24;
            unset($data['CgroupDriver']);
        } elseif (array_key_exists('CgroupDriver', $data)) {
            $object->cgroupDriver = null;
            unset($data['CgroupDriver']);
        }
        if (array_key_exists('CgroupVersion', $data) && null !== $data['CgroupVersion']) {
            $value_25 = $data['CgroupVersion'];
            if (is_string($data['CgroupVersion'])) {
                $value_25 = $data['CgroupVersion'];
            } elseif (null === $data['CgroupVersion']) {
                $value_25 = $data['CgroupVersion'];
            }
            $object->cgroupVersion = $value_25;
            unset($data['CgroupVersion']);
        } elseif (array_key_exists('CgroupVersion', $data)) {
            $object->cgroupVersion = null;
            unset($data['CgroupVersion']);
        }
        if (array_key_exists('NEventsListener', $data) && null !== $data['NEventsListener']) {
            $value_26 = $data['NEventsListener'];
            if (is_int($data['NEventsListener'])) {
                $value_26 = $data['NEventsListener'];
            } elseif (null === $data['NEventsListener']) {
                $value_26 = $data['NEventsListener'];
            }
            $object->nEventsListener = $value_26;
            unset($data['NEventsListener']);
        } elseif (array_key_exists('NEventsListener', $data)) {
            $object->nEventsListener = null;
            unset($data['NEventsListener']);
        }
        if (array_key_exists('KernelVersion', $data) && null !== $data['KernelVersion']) {
            $value_27 = $data['KernelVersion'];
            if (is_string($data['KernelVersion'])) {
                $value_27 = $data['KernelVersion'];
            } elseif (null === $data['KernelVersion']) {
                $value_27 = $data['KernelVersion'];
            }
            $object->kernelVersion = $value_27;
            unset($data['KernelVersion']);
        } elseif (array_key_exists('KernelVersion', $data)) {
            $object->kernelVersion = null;
            unset($data['KernelVersion']);
        }
        if (array_key_exists('OperatingSystem', $data) && null !== $data['OperatingSystem']) {
            $value_28 = $data['OperatingSystem'];
            if (is_string($data['OperatingSystem'])) {
                $value_28 = $data['OperatingSystem'];
            } elseif (null === $data['OperatingSystem']) {
                $value_28 = $data['OperatingSystem'];
            }
            $object->operatingSystem = $value_28;
            unset($data['OperatingSystem']);
        } elseif (array_key_exists('OperatingSystem', $data)) {
            $object->operatingSystem = null;
            unset($data['OperatingSystem']);
        }
        if (array_key_exists('OSVersion', $data) && null !== $data['OSVersion']) {
            $value_29 = $data['OSVersion'];
            if (is_string($data['OSVersion'])) {
                $value_29 = $data['OSVersion'];
            } elseif (null === $data['OSVersion']) {
                $value_29 = $data['OSVersion'];
            }
            $object->oSVersion = $value_29;
            unset($data['OSVersion']);
        } elseif (array_key_exists('OSVersion', $data)) {
            $object->oSVersion = null;
            unset($data['OSVersion']);
        }
        if (array_key_exists('OSType', $data) && null !== $data['OSType']) {
            $value_30 = $data['OSType'];
            if (is_string($data['OSType'])) {
                $value_30 = $data['OSType'];
            } elseif (null === $data['OSType']) {
                $value_30 = $data['OSType'];
            }
            $object->oSType = $value_30;
            unset($data['OSType']);
        } elseif (array_key_exists('OSType', $data)) {
            $object->oSType = null;
            unset($data['OSType']);
        }
        if (array_key_exists('Architecture', $data) && null !== $data['Architecture']) {
            $value_31 = $data['Architecture'];
            if (is_string($data['Architecture'])) {
                $value_31 = $data['Architecture'];
            } elseif (null === $data['Architecture']) {
                $value_31 = $data['Architecture'];
            }
            $object->architecture = $value_31;
            unset($data['Architecture']);
        } elseif (array_key_exists('Architecture', $data)) {
            $object->architecture = null;
            unset($data['Architecture']);
        }
        if (array_key_exists('NCPU', $data) && null !== $data['NCPU']) {
            $value_32 = $data['NCPU'];
            if (is_int($data['NCPU'])) {
                $value_32 = $data['NCPU'];
            } elseif (null === $data['NCPU']) {
                $value_32 = $data['NCPU'];
            }
            $object->nCPU = $value_32;
            unset($data['NCPU']);
        } elseif (array_key_exists('NCPU', $data)) {
            $object->nCPU = null;
            unset($data['NCPU']);
        }
        if (array_key_exists('MemTotal', $data) && null !== $data['MemTotal']) {
            $value_33 = $data['MemTotal'];
            if (is_int($data['MemTotal'])) {
                $value_33 = $data['MemTotal'];
            } elseif (null === $data['MemTotal']) {
                $value_33 = $data['MemTotal'];
            }
            $object->memTotal = $value_33;
            unset($data['MemTotal']);
        } elseif (array_key_exists('MemTotal', $data)) {
            $object->memTotal = null;
            unset($data['MemTotal']);
        }
        if (array_key_exists('IndexServerAddress', $data) && null !== $data['IndexServerAddress']) {
            $value_34 = $data['IndexServerAddress'];
            if (is_string($data['IndexServerAddress'])) {
                $value_34 = $data['IndexServerAddress'];
            } elseif (null === $data['IndexServerAddress']) {
                $value_34 = $data['IndexServerAddress'];
            }
            $object->indexServerAddress = $value_34;
            unset($data['IndexServerAddress']);
        } elseif (array_key_exists('IndexServerAddress', $data)) {
            $object->indexServerAddress = null;
            unset($data['IndexServerAddress']);
        }
        if (array_key_exists('RegistryConfig', $data) && null !== $data['RegistryConfig']) {
            $object->registryConfig = $this->denormalizer->denormalize($data['RegistryConfig'], \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class, 'json', $context);
            unset($data['RegistryConfig']);
        } elseif (array_key_exists('RegistryConfig', $data)) {
            $object->registryConfig = null;
            unset($data['RegistryConfig']);
        }
        if (array_key_exists('GenericResources', $data)) {
            $values_2 = [];
            foreach ($data['GenericResources'] as $value_35) {
                $values_2[] = $this->denormalizer->denormalize($value_35, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->genericResources = $values_2;
            unset($data['GenericResources']);
        }
        if (array_key_exists('HttpProxy', $data) && null !== $data['HttpProxy']) {
            $value_36 = $data['HttpProxy'];
            if (is_string($data['HttpProxy'])) {
                $value_36 = $data['HttpProxy'];
            } elseif (null === $data['HttpProxy']) {
                $value_36 = $data['HttpProxy'];
            }
            $object->httpProxy = $value_36;
            unset($data['HttpProxy']);
        } elseif (array_key_exists('HttpProxy', $data)) {
            $object->httpProxy = null;
            unset($data['HttpProxy']);
        }
        if (array_key_exists('HttpsProxy', $data) && null !== $data['HttpsProxy']) {
            $value_37 = $data['HttpsProxy'];
            if (is_string($data['HttpsProxy'])) {
                $value_37 = $data['HttpsProxy'];
            } elseif (null === $data['HttpsProxy']) {
                $value_37 = $data['HttpsProxy'];
            }
            $object->httpsProxy = $value_37;
            unset($data['HttpsProxy']);
        } elseif (array_key_exists('HttpsProxy', $data)) {
            $object->httpsProxy = null;
            unset($data['HttpsProxy']);
        }
        if (array_key_exists('NoProxy', $data) && null !== $data['NoProxy']) {
            $value_38 = $data['NoProxy'];
            if (is_string($data['NoProxy'])) {
                $value_38 = $data['NoProxy'];
            } elseif (null === $data['NoProxy']) {
                $value_38 = $data['NoProxy'];
            }
            $object->noProxy = $value_38;
            unset($data['NoProxy']);
        } elseif (array_key_exists('NoProxy', $data)) {
            $object->noProxy = null;
            unset($data['NoProxy']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value_39 = $data['Name'];
            if (is_string($data['Name'])) {
                $value_39 = $data['Name'];
            } elseif (null === $data['Name']) {
                $value_39 = $data['Name'];
            }
            $object->name = $value_39;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $values_3 = [];
            foreach ($data['Labels'] as $value_40) {
                $values_3[] = $value_40;
            }
            $object->labels = $values_3;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('ExperimentalBuild', $data) && null !== $data['ExperimentalBuild']) {
            $value_41 = $data['ExperimentalBuild'];
            if (is_bool($data['ExperimentalBuild'])) {
                $value_41 = $data['ExperimentalBuild'];
            } elseif (null === $data['ExperimentalBuild']) {
                $value_41 = $data['ExperimentalBuild'];
            }
            $object->experimentalBuild = $value_41;
            unset($data['ExperimentalBuild']);
        } elseif (array_key_exists('ExperimentalBuild', $data)) {
            $object->experimentalBuild = null;
            unset($data['ExperimentalBuild']);
        }
        if (array_key_exists('ServerVersion', $data) && null !== $data['ServerVersion']) {
            $value_42 = $data['ServerVersion'];
            if (is_string($data['ServerVersion'])) {
                $value_42 = $data['ServerVersion'];
            } elseif (null === $data['ServerVersion']) {
                $value_42 = $data['ServerVersion'];
            }
            $object->serverVersion = $value_42;
            unset($data['ServerVersion']);
        } elseif (array_key_exists('ServerVersion', $data)) {
            $object->serverVersion = null;
            unset($data['ServerVersion']);
        }
        if (array_key_exists('Runtimes', $data)) {
            $values_4 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data['Runtimes'] as $key => $value_43) {
                $values_4[$key] = $this->denormalizer->denormalize($value_43, \WebProject\DockerApi\Library\Generated\Model\Runtime::class, 'json', $context);
            }
            $object->runtimes = $values_4;
            unset($data['Runtimes']);
        }
        if (array_key_exists('DefaultRuntime', $data) && null !== $data['DefaultRuntime']) {
            $value_44 = $data['DefaultRuntime'];
            if (is_string($data['DefaultRuntime'])) {
                $value_44 = $data['DefaultRuntime'];
            } elseif (null === $data['DefaultRuntime']) {
                $value_44 = $data['DefaultRuntime'];
            }
            $object->defaultRuntime = $value_44;
            unset($data['DefaultRuntime']);
        } elseif (array_key_exists('DefaultRuntime', $data)) {
            $object->defaultRuntime = null;
            unset($data['DefaultRuntime']);
        }
        if (array_key_exists('Swarm', $data)) {
            $object->swarm = $this->denormalizer->denormalize($data['Swarm'], \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class, 'json', $context);
            unset($data['Swarm']);
        }
        if (array_key_exists('LiveRestoreEnabled', $data) && null !== $data['LiveRestoreEnabled']) {
            $value_45 = $data['LiveRestoreEnabled'];
            if (is_bool($data['LiveRestoreEnabled'])) {
                $value_45 = $data['LiveRestoreEnabled'];
            } elseif (null === $data['LiveRestoreEnabled']) {
                $value_45 = $data['LiveRestoreEnabled'];
            }
            $object->liveRestoreEnabled = $value_45;
            unset($data['LiveRestoreEnabled']);
        } elseif (array_key_exists('LiveRestoreEnabled', $data)) {
            $object->liveRestoreEnabled = null;
            unset($data['LiveRestoreEnabled']);
        }
        if (array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $value_46 = $data['Isolation'];
            if (is_string($data['Isolation'])) {
                $value_46 = $data['Isolation'];
            } elseif (null === $data['Isolation']) {
                $value_46 = $data['Isolation'];
            }
            $object->isolation = $value_46;
            unset($data['Isolation']);
        } elseif (array_key_exists('Isolation', $data)) {
            $object->isolation = null;
            unset($data['Isolation']);
        }
        if (array_key_exists('InitBinary', $data) && null !== $data['InitBinary']) {
            $value_47 = $data['InitBinary'];
            if (is_string($data['InitBinary'])) {
                $value_47 = $data['InitBinary'];
            } elseif (null === $data['InitBinary']) {
                $value_47 = $data['InitBinary'];
            }
            $object->initBinary = $value_47;
            unset($data['InitBinary']);
        } elseif (array_key_exists('InitBinary', $data)) {
            $object->initBinary = null;
            unset($data['InitBinary']);
        }
        if (array_key_exists('ContainerdCommit', $data)) {
            $object->containerdCommit = $this->denormalizer->denormalize($data['ContainerdCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context);
            unset($data['ContainerdCommit']);
        }
        if (array_key_exists('RuncCommit', $data)) {
            $object->runcCommit = $this->denormalizer->denormalize($data['RuncCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context);
            unset($data['RuncCommit']);
        }
        if (array_key_exists('InitCommit', $data)) {
            $object->initCommit = $this->denormalizer->denormalize($data['InitCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context);
            unset($data['InitCommit']);
        }
        if (array_key_exists('SecurityOptions', $data) && null !== $data['SecurityOptions']) {
            $values_5 = [];
            foreach ($data['SecurityOptions'] as $value_48) {
                $values_5[] = $value_48;
            }
            $object->securityOptions = $values_5;
            unset($data['SecurityOptions']);
        } elseif (array_key_exists('SecurityOptions', $data)) {
            $object->securityOptions = null;
            unset($data['SecurityOptions']);
        }
        if (array_key_exists('ProductLicense', $data) && null !== $data['ProductLicense']) {
            $value_49 = $data['ProductLicense'];
            if (is_string($data['ProductLicense'])) {
                $value_49 = $data['ProductLicense'];
            } elseif (null === $data['ProductLicense']) {
                $value_49 = $data['ProductLicense'];
            }
            $object->productLicense = $value_49;
            unset($data['ProductLicense']);
        } elseif (array_key_exists('ProductLicense', $data)) {
            $object->productLicense = null;
            unset($data['ProductLicense']);
        }
        if (array_key_exists('DefaultAddressPools', $data) && null !== $data['DefaultAddressPools']) {
            $values_6 = [];
            foreach ($data['DefaultAddressPools'] as $value_50) {
                $values_6[] = $this->denormalizer->denormalize($value_50, \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class, 'json', $context);
            }
            $object->defaultAddressPools = $values_6;
            unset($data['DefaultAddressPools']);
        } elseif (array_key_exists('DefaultAddressPools', $data)) {
            $object->defaultAddressPools = null;
            unset($data['DefaultAddressPools']);
        }
        if (array_key_exists('FirewallBackend', $data) && null !== $data['FirewallBackend']) {
            $object->firewallBackend = $this->denormalizer->denormalize($data['FirewallBackend'], \WebProject\DockerApi\Library\Generated\Model\FirewallInfo::class, 'json', $context);
            unset($data['FirewallBackend']);
        } elseif (array_key_exists('FirewallBackend', $data)) {
            $object->firewallBackend = null;
            unset($data['FirewallBackend']);
        }
        if (array_key_exists('DiscoveredDevices', $data) && null !== $data['DiscoveredDevices']) {
            $values_7 = [];
            foreach ($data['DiscoveredDevices'] as $value_51) {
                $values_7[] = $this->denormalizer->denormalize($value_51, \WebProject\DockerApi\Library\Generated\Model\DeviceInfo::class, 'json', $context);
            }
            $object->discoveredDevices = $values_7;
            unset($data['DiscoveredDevices']);
        } elseif (array_key_exists('DiscoveredDevices', $data)) {
            $object->discoveredDevices = null;
            unset($data['DiscoveredDevices']);
        }
        if (array_key_exists('NRI', $data) && null !== $data['NRI']) {
            $object->nRI = $this->denormalizer->denormalize($data['NRI'], \WebProject\DockerApi\Library\Generated\Model\NRIInfo::class, 'json', $context);
            unset($data['NRI']);
        } elseif (array_key_exists('NRI', $data)) {
            $object->nRI = null;
            unset($data['NRI']);
        }
        if (array_key_exists('Warnings', $data) && null !== $data['Warnings']) {
            $values_8 = [];
            foreach ($data['Warnings'] as $value_52) {
                $values_8[] = $value_52;
            }
            $object->warnings = $values_8;
            unset($data['Warnings']);
        } elseif (array_key_exists('Warnings', $data)) {
            $object->warnings = null;
            unset($data['Warnings']);
        }
        if (array_key_exists('CDISpecDirs', $data) && null !== $data['CDISpecDirs']) {
            $values_9 = [];
            foreach ($data['CDISpecDirs'] as $value_53) {
                $values_9[] = $value_53;
            }
            $object->cDISpecDirs = $values_9;
            unset($data['CDISpecDirs']);
        } elseif (array_key_exists('CDISpecDirs', $data)) {
            $object->cDISpecDirs = null;
            unset($data['CDISpecDirs']);
        }
        if (array_key_exists('Containerd', $data) && null !== $data['Containerd']) {
            $object->containerd = $this->denormalizer->denormalize($data['Containerd'], \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class, 'json', $context);
            unset($data['Containerd']);
        } elseif (array_key_exists('Containerd', $data)) {
            $object->containerd = null;
            unset($data['Containerd']);
        }
        foreach ($data as $key_1 => $value_54) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_54;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $value = $data->iD;
            if (is_string($data->iD)) {
                $value = $data->iD;
            } elseif (null === $data->iD) {
                $value = $data->iD;
            }
            $dataArray['ID'] = $value;
        }
        if (array_key_exists('containers', get_object_vars($data)) && null !== ($data->containers ?? null)) {
            $value_1 = $data->containers;
            if (is_int($data->containers)) {
                $value_1 = $data->containers;
            } elseif (null === $data->containers) {
                $value_1 = $data->containers;
            }
            $dataArray['Containers'] = $value_1;
        }
        if (array_key_exists('containersRunning', get_object_vars($data)) && null !== ($data->containersRunning ?? null)) {
            $value_2 = $data->containersRunning;
            if (is_int($data->containersRunning)) {
                $value_2 = $data->containersRunning;
            } elseif (null === $data->containersRunning) {
                $value_2 = $data->containersRunning;
            }
            $dataArray['ContainersRunning'] = $value_2;
        }
        if (array_key_exists('containersPaused', get_object_vars($data)) && null !== ($data->containersPaused ?? null)) {
            $value_3 = $data->containersPaused;
            if (is_int($data->containersPaused)) {
                $value_3 = $data->containersPaused;
            } elseif (null === $data->containersPaused) {
                $value_3 = $data->containersPaused;
            }
            $dataArray['ContainersPaused'] = $value_3;
        }
        if (array_key_exists('containersStopped', get_object_vars($data)) && null !== ($data->containersStopped ?? null)) {
            $value_4 = $data->containersStopped;
            if (is_int($data->containersStopped)) {
                $value_4 = $data->containersStopped;
            } elseif (null === $data->containersStopped) {
                $value_4 = $data->containersStopped;
            }
            $dataArray['ContainersStopped'] = $value_4;
        }
        if (array_key_exists('images', get_object_vars($data)) && null !== ($data->images ?? null)) {
            $value_5 = $data->images;
            if (is_int($data->images)) {
                $value_5 = $data->images;
            } elseif (null === $data->images) {
                $value_5 = $data->images;
            }
            $dataArray['Images'] = $value_5;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $value_6 = $data->driver;
            if (is_string($data->driver)) {
                $value_6 = $data->driver;
            } elseif (null === $data->driver) {
                $value_6 = $data->driver;
            }
            $dataArray['Driver'] = $value_6;
        }
        if (array_key_exists('driverStatus', get_object_vars($data)) && null !== ($data->driverStatus ?? null)) {
            $values = [];
            foreach ($data->driverStatus as $value_7) {
                $values_1 = [];
                foreach ($value_7 as $value_8) {
                    $values_1[] = $value_8;
                }
                $values[] = $values_1;
            }
            $dataArray['DriverStatus'] = $values;
        }
        if (array_key_exists('dockerRootDir', get_object_vars($data)) && null !== ($data->dockerRootDir ?? null)) {
            $value_9 = $data->dockerRootDir;
            if (is_string($data->dockerRootDir)) {
                $value_9 = $data->dockerRootDir;
            } elseif (null === $data->dockerRootDir) {
                $value_9 = $data->dockerRootDir;
            }
            $dataArray['DockerRootDir'] = $value_9;
        }
        if (array_key_exists('plugins', get_object_vars($data)) && null !== ($data->plugins ?? null)) {
            $normalized           = $this->normalizer->normalize($data->plugins, 'json', $context);
            $dataArray['Plugins'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('memoryLimit', get_object_vars($data)) && null !== ($data->memoryLimit ?? null)) {
            $value_10 = $data->memoryLimit;
            if (is_bool($data->memoryLimit)) {
                $value_10 = $data->memoryLimit;
            } elseif (null === $data->memoryLimit) {
                $value_10 = $data->memoryLimit;
            }
            $dataArray['MemoryLimit'] = $value_10;
        }
        if (array_key_exists('swapLimit', get_object_vars($data)) && null !== ($data->swapLimit ?? null)) {
            $value_11 = $data->swapLimit;
            if (is_bool($data->swapLimit)) {
                $value_11 = $data->swapLimit;
            } elseif (null === $data->swapLimit) {
                $value_11 = $data->swapLimit;
            }
            $dataArray['SwapLimit'] = $value_11;
        }
        if (array_key_exists('cpuCfsPeriod', get_object_vars($data)) && null !== ($data->cpuCfsPeriod ?? null)) {
            $value_12 = $data->cpuCfsPeriod;
            if (is_bool($data->cpuCfsPeriod)) {
                $value_12 = $data->cpuCfsPeriod;
            } elseif (null === $data->cpuCfsPeriod) {
                $value_12 = $data->cpuCfsPeriod;
            }
            $dataArray['CpuCfsPeriod'] = $value_12;
        }
        if (array_key_exists('cpuCfsQuota', get_object_vars($data)) && null !== ($data->cpuCfsQuota ?? null)) {
            $value_13 = $data->cpuCfsQuota;
            if (is_bool($data->cpuCfsQuota)) {
                $value_13 = $data->cpuCfsQuota;
            } elseif (null === $data->cpuCfsQuota) {
                $value_13 = $data->cpuCfsQuota;
            }
            $dataArray['CpuCfsQuota'] = $value_13;
        }
        if (array_key_exists('cPUShares', get_object_vars($data)) && null !== ($data->cPUShares ?? null)) {
            $value_14 = $data->cPUShares;
            if (is_bool($data->cPUShares)) {
                $value_14 = $data->cPUShares;
            } elseif (null === $data->cPUShares) {
                $value_14 = $data->cPUShares;
            }
            $dataArray['CPUShares'] = $value_14;
        }
        if (array_key_exists('cPUSet', get_object_vars($data)) && null !== ($data->cPUSet ?? null)) {
            $value_15 = $data->cPUSet;
            if (is_bool($data->cPUSet)) {
                $value_15 = $data->cPUSet;
            } elseif (null === $data->cPUSet) {
                $value_15 = $data->cPUSet;
            }
            $dataArray['CPUSet'] = $value_15;
        }
        if (array_key_exists('pidsLimit', get_object_vars($data)) && null !== ($data->pidsLimit ?? null)) {
            $value_16 = $data->pidsLimit;
            if (is_bool($data->pidsLimit)) {
                $value_16 = $data->pidsLimit;
            } elseif (null === $data->pidsLimit) {
                $value_16 = $data->pidsLimit;
            }
            $dataArray['PidsLimit'] = $value_16;
        }
        if (array_key_exists('oomKillDisable', get_object_vars($data)) && null !== ($data->oomKillDisable ?? null)) {
            $value_17 = $data->oomKillDisable;
            if (is_bool($data->oomKillDisable)) {
                $value_17 = $data->oomKillDisable;
            } elseif (null === $data->oomKillDisable) {
                $value_17 = $data->oomKillDisable;
            }
            $dataArray['OomKillDisable'] = $value_17;
        }
        if (array_key_exists('iPv4Forwarding', get_object_vars($data)) && null !== ($data->iPv4Forwarding ?? null)) {
            $value_18 = $data->iPv4Forwarding;
            if (is_bool($data->iPv4Forwarding)) {
                $value_18 = $data->iPv4Forwarding;
            } elseif (null === $data->iPv4Forwarding) {
                $value_18 = $data->iPv4Forwarding;
            }
            $dataArray['IPv4Forwarding'] = $value_18;
        }
        if (array_key_exists('debug', get_object_vars($data)) && null !== ($data->debug ?? null)) {
            $value_19 = $data->debug;
            if (is_bool($data->debug)) {
                $value_19 = $data->debug;
            } elseif (null === $data->debug) {
                $value_19 = $data->debug;
            }
            $dataArray['Debug'] = $value_19;
        }
        if (array_key_exists('nFd', get_object_vars($data)) && null !== ($data->nFd ?? null)) {
            $value_20 = $data->nFd;
            if (is_int($data->nFd)) {
                $value_20 = $data->nFd;
            } elseif (null === $data->nFd) {
                $value_20 = $data->nFd;
            }
            $dataArray['NFd'] = $value_20;
        }
        if (array_key_exists('nGoroutines', get_object_vars($data)) && null !== ($data->nGoroutines ?? null)) {
            $value_21 = $data->nGoroutines;
            if (is_int($data->nGoroutines)) {
                $value_21 = $data->nGoroutines;
            } elseif (null === $data->nGoroutines) {
                $value_21 = $data->nGoroutines;
            }
            $dataArray['NGoroutines'] = $value_21;
        }
        if (array_key_exists('systemTime', get_object_vars($data)) && null !== ($data->systemTime ?? null)) {
            $value_22 = $data->systemTime;
            if (is_string($data->systemTime)) {
                $value_22 = $data->systemTime;
            } elseif (null === $data->systemTime) {
                $value_22 = $data->systemTime;
            }
            $dataArray['SystemTime'] = $value_22;
        }
        if (array_key_exists('loggingDriver', get_object_vars($data)) && null !== ($data->loggingDriver ?? null)) {
            $value_23 = $data->loggingDriver;
            if (is_string($data->loggingDriver)) {
                $value_23 = $data->loggingDriver;
            } elseif (null === $data->loggingDriver) {
                $value_23 = $data->loggingDriver;
            }
            $dataArray['LoggingDriver'] = $value_23;
        }
        if (array_key_exists('cgroupDriver', get_object_vars($data)) && null !== ($data->cgroupDriver ?? null)) {
            $value_24 = $data->cgroupDriver;
            if (is_string($data->cgroupDriver)) {
                $value_24 = $data->cgroupDriver;
            } elseif (null === $data->cgroupDriver) {
                $value_24 = $data->cgroupDriver;
            }
            $dataArray['CgroupDriver'] = $value_24;
        }
        if (array_key_exists('cgroupVersion', get_object_vars($data)) && null !== ($data->cgroupVersion ?? null)) {
            $value_25 = $data->cgroupVersion;
            if (is_string($data->cgroupVersion)) {
                $value_25 = $data->cgroupVersion;
            } elseif (null === $data->cgroupVersion) {
                $value_25 = $data->cgroupVersion;
            }
            $dataArray['CgroupVersion'] = $value_25;
        }
        if (array_key_exists('nEventsListener', get_object_vars($data)) && null !== ($data->nEventsListener ?? null)) {
            $value_26 = $data->nEventsListener;
            if (is_int($data->nEventsListener)) {
                $value_26 = $data->nEventsListener;
            } elseif (null === $data->nEventsListener) {
                $value_26 = $data->nEventsListener;
            }
            $dataArray['NEventsListener'] = $value_26;
        }
        if (array_key_exists('kernelVersion', get_object_vars($data)) && null !== ($data->kernelVersion ?? null)) {
            $value_27 = $data->kernelVersion;
            if (is_string($data->kernelVersion)) {
                $value_27 = $data->kernelVersion;
            } elseif (null === $data->kernelVersion) {
                $value_27 = $data->kernelVersion;
            }
            $dataArray['KernelVersion'] = $value_27;
        }
        if (array_key_exists('operatingSystem', get_object_vars($data)) && null !== ($data->operatingSystem ?? null)) {
            $value_28 = $data->operatingSystem;
            if (is_string($data->operatingSystem)) {
                $value_28 = $data->operatingSystem;
            } elseif (null === $data->operatingSystem) {
                $value_28 = $data->operatingSystem;
            }
            $dataArray['OperatingSystem'] = $value_28;
        }
        if (array_key_exists('oSVersion', get_object_vars($data)) && null !== ($data->oSVersion ?? null)) {
            $value_29 = $data->oSVersion;
            if (is_string($data->oSVersion)) {
                $value_29 = $data->oSVersion;
            } elseif (null === $data->oSVersion) {
                $value_29 = $data->oSVersion;
            }
            $dataArray['OSVersion'] = $value_29;
        }
        if (array_key_exists('oSType', get_object_vars($data)) && null !== ($data->oSType ?? null)) {
            $value_30 = $data->oSType;
            if (is_string($data->oSType)) {
                $value_30 = $data->oSType;
            } elseif (null === $data->oSType) {
                $value_30 = $data->oSType;
            }
            $dataArray['OSType'] = $value_30;
        }
        if (array_key_exists('architecture', get_object_vars($data)) && null !== ($data->architecture ?? null)) {
            $value_31 = $data->architecture;
            if (is_string($data->architecture)) {
                $value_31 = $data->architecture;
            } elseif (null === $data->architecture) {
                $value_31 = $data->architecture;
            }
            $dataArray['Architecture'] = $value_31;
        }
        if (array_key_exists('nCPU', get_object_vars($data)) && null !== ($data->nCPU ?? null)) {
            $value_32 = $data->nCPU;
            if (is_int($data->nCPU)) {
                $value_32 = $data->nCPU;
            } elseif (null === $data->nCPU) {
                $value_32 = $data->nCPU;
            }
            $dataArray['NCPU'] = $value_32;
        }
        if (array_key_exists('memTotal', get_object_vars($data)) && null !== ($data->memTotal ?? null)) {
            $value_33 = $data->memTotal;
            if (is_int($data->memTotal)) {
                $value_33 = $data->memTotal;
            } elseif (null === $data->memTotal) {
                $value_33 = $data->memTotal;
            }
            $dataArray['MemTotal'] = $value_33;
        }
        if (array_key_exists('indexServerAddress', get_object_vars($data)) && null !== ($data->indexServerAddress ?? null)) {
            $value_34 = $data->indexServerAddress;
            if (is_string($data->indexServerAddress)) {
                $value_34 = $data->indexServerAddress;
            } elseif (null === $data->indexServerAddress) {
                $value_34 = $data->indexServerAddress;
            }
            $dataArray['IndexServerAddress'] = $value_34;
        }
        if (array_key_exists('registryConfig', get_object_vars($data)) && null !== ($data->registryConfig ?? null)) {
            $normalized_1                = $this->normalizer->normalize($data->registryConfig, 'json', $context);
            $dataArray['RegistryConfig'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('genericResources', get_object_vars($data)) && null !== ($data->genericResources ?? null)) {
            $values_2 = [];
            foreach ($data->genericResources as $value_35) {
                $normalized_2 = null === $value_35 ? null : $this->normalizer->normalize($value_35, 'json', $context);
                $values_2[]   = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['GenericResources'] = $values_2;
        }
        if (array_key_exists('httpProxy', get_object_vars($data)) && null !== ($data->httpProxy ?? null)) {
            $value_36 = $data->httpProxy;
            if (is_string($data->httpProxy)) {
                $value_36 = $data->httpProxy;
            } elseif (null === $data->httpProxy) {
                $value_36 = $data->httpProxy;
            }
            $dataArray['HttpProxy'] = $value_36;
        }
        if (array_key_exists('httpsProxy', get_object_vars($data)) && null !== ($data->httpsProxy ?? null)) {
            $value_37 = $data->httpsProxy;
            if (is_string($data->httpsProxy)) {
                $value_37 = $data->httpsProxy;
            } elseif (null === $data->httpsProxy) {
                $value_37 = $data->httpsProxy;
            }
            $dataArray['HttpsProxy'] = $value_37;
        }
        if (array_key_exists('noProxy', get_object_vars($data)) && null !== ($data->noProxy ?? null)) {
            $value_38 = $data->noProxy;
            if (is_string($data->noProxy)) {
                $value_38 = $data->noProxy;
            } elseif (null === $data->noProxy) {
                $value_38 = $data->noProxy;
            }
            $dataArray['NoProxy'] = $value_38;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value_39 = $data->name;
            if (is_string($data->name)) {
                $value_39 = $data->name;
            } elseif (null === $data->name) {
                $value_39 = $data->name;
            }
            $dataArray['Name'] = $value_39;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_3 = [];
            foreach ($data->labels as $value_40) {
                $values_3[] = $value_40;
            }
            $dataArray['Labels'] = $values_3;
        }
        if (array_key_exists('experimentalBuild', get_object_vars($data)) && null !== ($data->experimentalBuild ?? null)) {
            $value_41 = $data->experimentalBuild;
            if (is_bool($data->experimentalBuild)) {
                $value_41 = $data->experimentalBuild;
            } elseif (null === $data->experimentalBuild) {
                $value_41 = $data->experimentalBuild;
            }
            $dataArray['ExperimentalBuild'] = $value_41;
        }
        if (array_key_exists('serverVersion', get_object_vars($data)) && null !== ($data->serverVersion ?? null)) {
            $value_42 = $data->serverVersion;
            if (is_string($data->serverVersion)) {
                $value_42 = $data->serverVersion;
            } elseif (null === $data->serverVersion) {
                $value_42 = $data->serverVersion;
            }
            $dataArray['ServerVersion'] = $value_42;
        }
        if (array_key_exists('runtimes', get_object_vars($data)) && null !== ($data->runtimes ?? null)) {
            $values_4 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data->runtimes as $key => $value_43) {
                $normalized_3   = null === $value_43 ? null : $this->normalizer->normalize($value_43, 'json', $context);
                $values_4[$key] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['Runtimes'] = $values_4;
        }
        if (array_key_exists('defaultRuntime', get_object_vars($data)) && null !== ($data->defaultRuntime ?? null)) {
            $value_44 = $data->defaultRuntime;
            if (is_string($data->defaultRuntime)) {
                $value_44 = $data->defaultRuntime;
            } elseif (null === $data->defaultRuntime) {
                $value_44 = $data->defaultRuntime;
            }
            $dataArray['DefaultRuntime'] = $value_44;
        }
        if (array_key_exists('swarm', get_object_vars($data)) && null !== ($data->swarm ?? null)) {
            $normalized_4       = $this->normalizer->normalize($data->swarm, 'json', $context);
            $dataArray['Swarm'] = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('liveRestoreEnabled', get_object_vars($data)) && null !== ($data->liveRestoreEnabled ?? null)) {
            $value_45 = $data->liveRestoreEnabled;
            if (is_bool($data->liveRestoreEnabled)) {
                $value_45 = $data->liveRestoreEnabled;
            } elseif (null === $data->liveRestoreEnabled) {
                $value_45 = $data->liveRestoreEnabled;
            }
            $dataArray['LiveRestoreEnabled'] = $value_45;
        }
        if (array_key_exists('isolation', get_object_vars($data)) && null !== ($data->isolation ?? null)) {
            $value_46 = $data->isolation;
            if (is_string($data->isolation)) {
                $value_46 = $data->isolation;
            } elseif (null === $data->isolation) {
                $value_46 = $data->isolation;
            }
            $dataArray['Isolation'] = $value_46;
        }
        if (array_key_exists('initBinary', get_object_vars($data)) && null !== ($data->initBinary ?? null)) {
            $value_47 = $data->initBinary;
            if (is_string($data->initBinary)) {
                $value_47 = $data->initBinary;
            } elseif (null === $data->initBinary) {
                $value_47 = $data->initBinary;
            }
            $dataArray['InitBinary'] = $value_47;
        }
        if (array_key_exists('containerdCommit', get_object_vars($data)) && null !== ($data->containerdCommit ?? null)) {
            $normalized_5                  = $this->normalizer->normalize($data->containerdCommit, 'json', $context);
            $dataArray['ContainerdCommit'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('runcCommit', get_object_vars($data)) && null !== ($data->runcCommit ?? null)) {
            $normalized_6            = $this->normalizer->normalize($data->runcCommit, 'json', $context);
            $dataArray['RuncCommit'] = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('initCommit', get_object_vars($data)) && null !== ($data->initCommit ?? null)) {
            $normalized_7            = $this->normalizer->normalize($data->initCommit, 'json', $context);
            $dataArray['InitCommit'] = is_iterable($normalized_7) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (array_key_exists('securityOptions', get_object_vars($data)) && null !== ($data->securityOptions ?? null)) {
            $values_5 = [];
            foreach ($data->securityOptions as $value_48) {
                $values_5[] = $value_48;
            }
            $dataArray['SecurityOptions'] = $values_5;
        }
        if (array_key_exists('productLicense', get_object_vars($data)) && null !== ($data->productLicense ?? null)) {
            $value_49 = $data->productLicense;
            if (is_string($data->productLicense)) {
                $value_49 = $data->productLicense;
            } elseif (null === $data->productLicense) {
                $value_49 = $data->productLicense;
            }
            $dataArray['ProductLicense'] = $value_49;
        }
        if (array_key_exists('defaultAddressPools', get_object_vars($data)) && null !== ($data->defaultAddressPools ?? null)) {
            $values_6 = [];
            foreach ($data->defaultAddressPools as $value_50) {
                $normalized_8 = null === $value_50 ? null : $this->normalizer->normalize($value_50, 'json', $context);
                $values_6[]   = is_iterable($normalized_8) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_8) : $normalized_8;
            }
            $dataArray['DefaultAddressPools'] = $values_6;
        }
        if (array_key_exists('firewallBackend', get_object_vars($data)) && null !== ($data->firewallBackend ?? null)) {
            $normalized_9                 = $this->normalizer->normalize($data->firewallBackend, 'json', $context);
            $dataArray['FirewallBackend'] = is_iterable($normalized_9) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_9) : $normalized_9;
        }
        if (array_key_exists('discoveredDevices', get_object_vars($data)) && null !== ($data->discoveredDevices ?? null)) {
            $values_7 = [];
            foreach ($data->discoveredDevices as $value_51) {
                $normalized_10 = null === $value_51 ? null : $this->normalizer->normalize($value_51, 'json', $context);
                $values_7[]    = is_iterable($normalized_10) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_10) : $normalized_10;
            }
            $dataArray['DiscoveredDevices'] = $values_7;
        }
        if (array_key_exists('nRI', get_object_vars($data)) && null !== ($data->nRI ?? null)) {
            $normalized_11    = $this->normalizer->normalize($data->nRI, 'json', $context);
            $dataArray['NRI'] = is_iterable($normalized_11) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_11) : $normalized_11;
        }
        if (array_key_exists('warnings', get_object_vars($data)) && null !== ($data->warnings ?? null)) {
            $values_8 = [];
            foreach ($data->warnings as $value_52) {
                $values_8[] = $value_52;
            }
            $dataArray['Warnings'] = $values_8;
        }
        if (array_key_exists('cDISpecDirs', get_object_vars($data)) && null !== ($data->cDISpecDirs ?? null)) {
            $values_9 = [];
            foreach ($data->cDISpecDirs as $value_53) {
                $values_9[] = $value_53;
            }
            $dataArray['CDISpecDirs'] = $values_9;
        }
        if (array_key_exists('containerd', get_object_vars($data)) && null !== ($data->containerd ?? null)) {
            $normalized_12           = $this->normalizer->normalize($data->containerd, 'json', $context);
            $dataArray['Containerd'] = is_iterable($normalized_12) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_12) : $normalized_12;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_54) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_54;
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
