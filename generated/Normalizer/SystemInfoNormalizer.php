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
            $object->setID($value);
        } elseif (array_key_exists('ID', $data) && null === $data['ID']) {
            $object->setID(null);
        }
        if (array_key_exists('Containers', $data) && null !== $data['Containers']) {
            $value_1 = $data['Containers'];
            if (is_int($data['Containers'])) {
                $value_1 = $data['Containers'];
            } elseif (null === $data['Containers']) {
                $value_1 = $data['Containers'];
            }
            $object->setContainers($value_1);
        } elseif (array_key_exists('Containers', $data) && null === $data['Containers']) {
            $object->setContainers(null);
        }
        if (array_key_exists('ContainersRunning', $data) && null !== $data['ContainersRunning']) {
            $value_2 = $data['ContainersRunning'];
            if (is_int($data['ContainersRunning'])) {
                $value_2 = $data['ContainersRunning'];
            } elseif (null === $data['ContainersRunning']) {
                $value_2 = $data['ContainersRunning'];
            }
            $object->setContainersRunning($value_2);
        } elseif (array_key_exists('ContainersRunning', $data) && null === $data['ContainersRunning']) {
            $object->setContainersRunning(null);
        }
        if (array_key_exists('ContainersPaused', $data) && null !== $data['ContainersPaused']) {
            $value_3 = $data['ContainersPaused'];
            if (is_int($data['ContainersPaused'])) {
                $value_3 = $data['ContainersPaused'];
            } elseif (null === $data['ContainersPaused']) {
                $value_3 = $data['ContainersPaused'];
            }
            $object->setContainersPaused($value_3);
        } elseif (array_key_exists('ContainersPaused', $data) && null === $data['ContainersPaused']) {
            $object->setContainersPaused(null);
        }
        if (array_key_exists('ContainersStopped', $data) && null !== $data['ContainersStopped']) {
            $value_4 = $data['ContainersStopped'];
            if (is_int($data['ContainersStopped'])) {
                $value_4 = $data['ContainersStopped'];
            } elseif (null === $data['ContainersStopped']) {
                $value_4 = $data['ContainersStopped'];
            }
            $object->setContainersStopped($value_4);
        } elseif (array_key_exists('ContainersStopped', $data) && null === $data['ContainersStopped']) {
            $object->setContainersStopped(null);
        }
        if (array_key_exists('Images', $data) && null !== $data['Images']) {
            $value_5 = $data['Images'];
            if (is_int($data['Images'])) {
                $value_5 = $data['Images'];
            } elseif (null === $data['Images']) {
                $value_5 = $data['Images'];
            }
            $object->setImages($value_5);
        } elseif (array_key_exists('Images', $data) && null === $data['Images']) {
            $object->setImages(null);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_6 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_6 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_6 = $data['Driver'];
            }
            $object->setDriver($value_6);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('DriverStatus', $data) && null !== $data['DriverStatus']) {
            $value_7 = $data['DriverStatus'];
            if (is_array($data['DriverStatus']) && $this->isOnlyNumericKeys($data['DriverStatus'])) {
                $values = [];
                foreach ($data['DriverStatus'] as $value_8) {
                    $values_1 = [];
                    foreach ($value_8 as $value_9) {
                        $values_1[] = $value_9;
                    }
                    $values[] = $values_1;
                }
                $value_7 = $values;
            } elseif (null === $data['DriverStatus']) {
                $value_7 = $data['DriverStatus'];
            }
            $object->setDriverStatus($value_7);
        } elseif (array_key_exists('DriverStatus', $data) && null === $data['DriverStatus']) {
            $object->setDriverStatus(null);
        }
        if (array_key_exists('DockerRootDir', $data) && null !== $data['DockerRootDir']) {
            $value_10 = $data['DockerRootDir'];
            if (is_string($data['DockerRootDir'])) {
                $value_10 = $data['DockerRootDir'];
            } elseif (null === $data['DockerRootDir']) {
                $value_10 = $data['DockerRootDir'];
            }
            $object->setDockerRootDir($value_10);
        } elseif (array_key_exists('DockerRootDir', $data) && null === $data['DockerRootDir']) {
            $object->setDockerRootDir(null);
        }
        if (array_key_exists('Plugins', $data)) {
            $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class, 'json', $context));
        }
        if (array_key_exists('MemoryLimit', $data) && null !== $data['MemoryLimit']) {
            $value_11 = $data['MemoryLimit'];
            if (is_bool($data['MemoryLimit'])) {
                $value_11 = $data['MemoryLimit'];
            } elseif (null === $data['MemoryLimit']) {
                $value_11 = $data['MemoryLimit'];
            }
            $object->setMemoryLimit($value_11);
        } elseif (array_key_exists('MemoryLimit', $data) && null === $data['MemoryLimit']) {
            $object->setMemoryLimit(null);
        }
        if (array_key_exists('SwapLimit', $data) && null !== $data['SwapLimit']) {
            $value_12 = $data['SwapLimit'];
            if (is_bool($data['SwapLimit'])) {
                $value_12 = $data['SwapLimit'];
            } elseif (null === $data['SwapLimit']) {
                $value_12 = $data['SwapLimit'];
            }
            $object->setSwapLimit($value_12);
        } elseif (array_key_exists('SwapLimit', $data) && null === $data['SwapLimit']) {
            $object->setSwapLimit(null);
        }
        if (array_key_exists('CpuCfsPeriod', $data) && null !== $data['CpuCfsPeriod']) {
            $value_13 = $data['CpuCfsPeriod'];
            if (is_bool($data['CpuCfsPeriod'])) {
                $value_13 = $data['CpuCfsPeriod'];
            } elseif (null === $data['CpuCfsPeriod']) {
                $value_13 = $data['CpuCfsPeriod'];
            }
            $object->setCpuCfsPeriod($value_13);
        } elseif (array_key_exists('CpuCfsPeriod', $data) && null === $data['CpuCfsPeriod']) {
            $object->setCpuCfsPeriod(null);
        }
        if (array_key_exists('CpuCfsQuota', $data) && null !== $data['CpuCfsQuota']) {
            $value_14 = $data['CpuCfsQuota'];
            if (is_bool($data['CpuCfsQuota'])) {
                $value_14 = $data['CpuCfsQuota'];
            } elseif (null === $data['CpuCfsQuota']) {
                $value_14 = $data['CpuCfsQuota'];
            }
            $object->setCpuCfsQuota($value_14);
        } elseif (array_key_exists('CpuCfsQuota', $data) && null === $data['CpuCfsQuota']) {
            $object->setCpuCfsQuota(null);
        }
        if (array_key_exists('CPUShares', $data) && null !== $data['CPUShares']) {
            $value_15 = $data['CPUShares'];
            if (is_bool($data['CPUShares'])) {
                $value_15 = $data['CPUShares'];
            } elseif (null === $data['CPUShares']) {
                $value_15 = $data['CPUShares'];
            }
            $object->setCPUShares($value_15);
        } elseif (array_key_exists('CPUShares', $data) && null === $data['CPUShares']) {
            $object->setCPUShares(null);
        }
        if (array_key_exists('CPUSet', $data) && null !== $data['CPUSet']) {
            $value_16 = $data['CPUSet'];
            if (is_bool($data['CPUSet'])) {
                $value_16 = $data['CPUSet'];
            } elseif (null === $data['CPUSet']) {
                $value_16 = $data['CPUSet'];
            }
            $object->setCPUSet($value_16);
        } elseif (array_key_exists('CPUSet', $data) && null === $data['CPUSet']) {
            $object->setCPUSet(null);
        }
        if (array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
            $value_17 = $data['PidsLimit'];
            if (is_bool($data['PidsLimit'])) {
                $value_17 = $data['PidsLimit'];
            } elseif (null === $data['PidsLimit']) {
                $value_17 = $data['PidsLimit'];
            }
            $object->setPidsLimit($value_17);
        } elseif (array_key_exists('PidsLimit', $data) && null === $data['PidsLimit']) {
            $object->setPidsLimit(null);
        }
        if (array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
            $value_18 = $data['OomKillDisable'];
            if (is_bool($data['OomKillDisable'])) {
                $value_18 = $data['OomKillDisable'];
            } elseif (null === $data['OomKillDisable']) {
                $value_18 = $data['OomKillDisable'];
            }
            $object->setOomKillDisable($value_18);
        } elseif (array_key_exists('OomKillDisable', $data) && null === $data['OomKillDisable']) {
            $object->setOomKillDisable(null);
        }
        if (array_key_exists('IPv4Forwarding', $data) && null !== $data['IPv4Forwarding']) {
            $value_19 = $data['IPv4Forwarding'];
            if (is_bool($data['IPv4Forwarding'])) {
                $value_19 = $data['IPv4Forwarding'];
            } elseif (null === $data['IPv4Forwarding']) {
                $value_19 = $data['IPv4Forwarding'];
            }
            $object->setIPv4Forwarding($value_19);
        } elseif (array_key_exists('IPv4Forwarding', $data) && null === $data['IPv4Forwarding']) {
            $object->setIPv4Forwarding(null);
        }
        if (array_key_exists('Debug', $data) && null !== $data['Debug']) {
            $value_20 = $data['Debug'];
            if (is_bool($data['Debug'])) {
                $value_20 = $data['Debug'];
            } elseif (null === $data['Debug']) {
                $value_20 = $data['Debug'];
            }
            $object->setDebug($value_20);
        } elseif (array_key_exists('Debug', $data) && null === $data['Debug']) {
            $object->setDebug(null);
        }
        if (array_key_exists('NFd', $data) && null !== $data['NFd']) {
            $value_21 = $data['NFd'];
            if (is_int($data['NFd'])) {
                $value_21 = $data['NFd'];
            } elseif (null === $data['NFd']) {
                $value_21 = $data['NFd'];
            }
            $object->setNFd($value_21);
        } elseif (array_key_exists('NFd', $data) && null === $data['NFd']) {
            $object->setNFd(null);
        }
        if (array_key_exists('NGoroutines', $data) && null !== $data['NGoroutines']) {
            $value_22 = $data['NGoroutines'];
            if (is_int($data['NGoroutines'])) {
                $value_22 = $data['NGoroutines'];
            } elseif (null === $data['NGoroutines']) {
                $value_22 = $data['NGoroutines'];
            }
            $object->setNGoroutines($value_22);
        } elseif (array_key_exists('NGoroutines', $data) && null === $data['NGoroutines']) {
            $object->setNGoroutines(null);
        }
        if (array_key_exists('SystemTime', $data) && null !== $data['SystemTime']) {
            $value_23 = $data['SystemTime'];
            if (is_string($data['SystemTime'])) {
                $value_23 = $data['SystemTime'];
            } elseif (null === $data['SystemTime']) {
                $value_23 = $data['SystemTime'];
            }
            $object->setSystemTime($value_23);
        } elseif (array_key_exists('SystemTime', $data) && null === $data['SystemTime']) {
            $object->setSystemTime(null);
        }
        if (array_key_exists('LoggingDriver', $data) && null !== $data['LoggingDriver']) {
            $value_24 = $data['LoggingDriver'];
            if (is_string($data['LoggingDriver'])) {
                $value_24 = $data['LoggingDriver'];
            } elseif (null === $data['LoggingDriver']) {
                $value_24 = $data['LoggingDriver'];
            }
            $object->setLoggingDriver($value_24);
        } elseif (array_key_exists('LoggingDriver', $data) && null === $data['LoggingDriver']) {
            $object->setLoggingDriver(null);
        }
        if (array_key_exists('CgroupDriver', $data) && null !== $data['CgroupDriver']) {
            $value_25 = $data['CgroupDriver'];
            if (is_string($data['CgroupDriver'])) {
                $value_25 = $data['CgroupDriver'];
            } elseif (null === $data['CgroupDriver']) {
                $value_25 = $data['CgroupDriver'];
            }
            $object->setCgroupDriver($value_25);
        } elseif (array_key_exists('CgroupDriver', $data) && null === $data['CgroupDriver']) {
            $object->setCgroupDriver(null);
        }
        if (array_key_exists('CgroupVersion', $data) && null !== $data['CgroupVersion']) {
            $value_26 = $data['CgroupVersion'];
            if (is_string($data['CgroupVersion'])) {
                $value_26 = $data['CgroupVersion'];
            } elseif (null === $data['CgroupVersion']) {
                $value_26 = $data['CgroupVersion'];
            }
            $object->setCgroupVersion($value_26);
        } elseif (array_key_exists('CgroupVersion', $data) && null === $data['CgroupVersion']) {
            $object->setCgroupVersion(null);
        }
        if (array_key_exists('NEventsListener', $data) && null !== $data['NEventsListener']) {
            $value_27 = $data['NEventsListener'];
            if (is_int($data['NEventsListener'])) {
                $value_27 = $data['NEventsListener'];
            } elseif (null === $data['NEventsListener']) {
                $value_27 = $data['NEventsListener'];
            }
            $object->setNEventsListener($value_27);
        } elseif (array_key_exists('NEventsListener', $data) && null === $data['NEventsListener']) {
            $object->setNEventsListener(null);
        }
        if (array_key_exists('KernelVersion', $data) && null !== $data['KernelVersion']) {
            $value_28 = $data['KernelVersion'];
            if (is_string($data['KernelVersion'])) {
                $value_28 = $data['KernelVersion'];
            } elseif (null === $data['KernelVersion']) {
                $value_28 = $data['KernelVersion'];
            }
            $object->setKernelVersion($value_28);
        } elseif (array_key_exists('KernelVersion', $data) && null === $data['KernelVersion']) {
            $object->setKernelVersion(null);
        }
        if (array_key_exists('OperatingSystem', $data) && null !== $data['OperatingSystem']) {
            $value_29 = $data['OperatingSystem'];
            if (is_string($data['OperatingSystem'])) {
                $value_29 = $data['OperatingSystem'];
            } elseif (null === $data['OperatingSystem']) {
                $value_29 = $data['OperatingSystem'];
            }
            $object->setOperatingSystem($value_29);
        } elseif (array_key_exists('OperatingSystem', $data) && null === $data['OperatingSystem']) {
            $object->setOperatingSystem(null);
        }
        if (array_key_exists('OSVersion', $data) && null !== $data['OSVersion']) {
            $value_30 = $data['OSVersion'];
            if (is_string($data['OSVersion'])) {
                $value_30 = $data['OSVersion'];
            } elseif (null === $data['OSVersion']) {
                $value_30 = $data['OSVersion'];
            }
            $object->setOSVersion($value_30);
        } elseif (array_key_exists('OSVersion', $data) && null === $data['OSVersion']) {
            $object->setOSVersion(null);
        }
        if (array_key_exists('OSType', $data) && null !== $data['OSType']) {
            $value_31 = $data['OSType'];
            if (is_string($data['OSType'])) {
                $value_31 = $data['OSType'];
            } elseif (null === $data['OSType']) {
                $value_31 = $data['OSType'];
            }
            $object->setOSType($value_31);
        } elseif (array_key_exists('OSType', $data) && null === $data['OSType']) {
            $object->setOSType(null);
        }
        if (array_key_exists('Architecture', $data) && null !== $data['Architecture']) {
            $value_32 = $data['Architecture'];
            if (is_string($data['Architecture'])) {
                $value_32 = $data['Architecture'];
            } elseif (null === $data['Architecture']) {
                $value_32 = $data['Architecture'];
            }
            $object->setArchitecture($value_32);
        } elseif (array_key_exists('Architecture', $data) && null === $data['Architecture']) {
            $object->setArchitecture(null);
        }
        if (array_key_exists('NCPU', $data) && null !== $data['NCPU']) {
            $value_33 = $data['NCPU'];
            if (is_int($data['NCPU'])) {
                $value_33 = $data['NCPU'];
            } elseif (null === $data['NCPU']) {
                $value_33 = $data['NCPU'];
            }
            $object->setNCPU($value_33);
        } elseif (array_key_exists('NCPU', $data) && null === $data['NCPU']) {
            $object->setNCPU(null);
        }
        if (array_key_exists('MemTotal', $data) && null !== $data['MemTotal']) {
            $value_34 = $data['MemTotal'];
            if (is_int($data['MemTotal'])) {
                $value_34 = $data['MemTotal'];
            } elseif (null === $data['MemTotal']) {
                $value_34 = $data['MemTotal'];
            }
            $object->setMemTotal($value_34);
        } elseif (array_key_exists('MemTotal', $data) && null === $data['MemTotal']) {
            $object->setMemTotal(null);
        }
        if (array_key_exists('IndexServerAddress', $data) && null !== $data['IndexServerAddress']) {
            $value_35 = $data['IndexServerAddress'];
            if (is_string($data['IndexServerAddress'])) {
                $value_35 = $data['IndexServerAddress'];
            } elseif (null === $data['IndexServerAddress']) {
                $value_35 = $data['IndexServerAddress'];
            }
            $object->setIndexServerAddress($value_35);
        } elseif (array_key_exists('IndexServerAddress', $data) && null === $data['IndexServerAddress']) {
            $object->setIndexServerAddress(null);
        }
        if (array_key_exists('RegistryConfig', $data) && null !== $data['RegistryConfig']) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class, 'json', $context));
        } elseif (array_key_exists('RegistryConfig', $data) && null === $data['RegistryConfig']) {
            $object->setRegistryConfig(null);
        }
        if (array_key_exists('GenericResources', $data)) {
            $values_2 = [];
            foreach ($data['GenericResources'] as $value_36) {
                $values_2[] = $this->denormalizer->denormalize($value_36, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->setGenericResources($values_2);
        }
        if (array_key_exists('HttpProxy', $data) && null !== $data['HttpProxy']) {
            $value_37 = $data['HttpProxy'];
            if (is_string($data['HttpProxy'])) {
                $value_37 = $data['HttpProxy'];
            } elseif (null === $data['HttpProxy']) {
                $value_37 = $data['HttpProxy'];
            }
            $object->setHttpProxy($value_37);
        } elseif (array_key_exists('HttpProxy', $data) && null === $data['HttpProxy']) {
            $object->setHttpProxy(null);
        }
        if (array_key_exists('HttpsProxy', $data) && null !== $data['HttpsProxy']) {
            $value_38 = $data['HttpsProxy'];
            if (is_string($data['HttpsProxy'])) {
                $value_38 = $data['HttpsProxy'];
            } elseif (null === $data['HttpsProxy']) {
                $value_38 = $data['HttpsProxy'];
            }
            $object->setHttpsProxy($value_38);
        } elseif (array_key_exists('HttpsProxy', $data) && null === $data['HttpsProxy']) {
            $object->setHttpsProxy(null);
        }
        if (array_key_exists('NoProxy', $data) && null !== $data['NoProxy']) {
            $value_39 = $data['NoProxy'];
            if (is_string($data['NoProxy'])) {
                $value_39 = $data['NoProxy'];
            } elseif (null === $data['NoProxy']) {
                $value_39 = $data['NoProxy'];
            }
            $object->setNoProxy($value_39);
        } elseif (array_key_exists('NoProxy', $data) && null === $data['NoProxy']) {
            $object->setNoProxy(null);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value_40 = $data['Name'];
            if (is_string($data['Name'])) {
                $value_40 = $data['Name'];
            } elseif (null === $data['Name']) {
                $value_40 = $data['Name'];
            }
            $object->setName($value_40);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_41 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_3 = [];
                foreach ($data['Labels'] as $value_42) {
                    $values_3[] = $value_42;
                }
                $value_41 = $values_3;
            } elseif (null === $data['Labels']) {
                $value_41 = $data['Labels'];
            }
            $object->setLabels($value_41);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('ExperimentalBuild', $data) && null !== $data['ExperimentalBuild']) {
            $value_43 = $data['ExperimentalBuild'];
            if (is_bool($data['ExperimentalBuild'])) {
                $value_43 = $data['ExperimentalBuild'];
            } elseif (null === $data['ExperimentalBuild']) {
                $value_43 = $data['ExperimentalBuild'];
            }
            $object->setExperimentalBuild($value_43);
        } elseif (array_key_exists('ExperimentalBuild', $data) && null === $data['ExperimentalBuild']) {
            $object->setExperimentalBuild(null);
        }
        if (array_key_exists('ServerVersion', $data) && null !== $data['ServerVersion']) {
            $value_44 = $data['ServerVersion'];
            if (is_string($data['ServerVersion'])) {
                $value_44 = $data['ServerVersion'];
            } elseif (null === $data['ServerVersion']) {
                $value_44 = $data['ServerVersion'];
            }
            $object->setServerVersion($value_44);
        } elseif (array_key_exists('ServerVersion', $data) && null === $data['ServerVersion']) {
            $object->setServerVersion(null);
        }
        if (array_key_exists('Runtimes', $data)) {
            $values_4 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Runtimes'] as $key => $value_45) {
                $values_4[$key] = $this->denormalizer->denormalize($value_45, \WebProject\DockerApi\Library\Generated\Model\Runtime::class, 'json', $context);
            }
            $object->setRuntimes($values_4);
        }
        if (array_key_exists('DefaultRuntime', $data) && null !== $data['DefaultRuntime']) {
            $value_46 = $data['DefaultRuntime'];
            if (is_string($data['DefaultRuntime'])) {
                $value_46 = $data['DefaultRuntime'];
            } elseif (null === $data['DefaultRuntime']) {
                $value_46 = $data['DefaultRuntime'];
            }
            $object->setDefaultRuntime($value_46);
        } elseif (array_key_exists('DefaultRuntime', $data) && null === $data['DefaultRuntime']) {
            $object->setDefaultRuntime(null);
        }
        if (array_key_exists('Swarm', $data)) {
            $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class, 'json', $context));
        }
        if (array_key_exists('LiveRestoreEnabled', $data) && null !== $data['LiveRestoreEnabled']) {
            $value_47 = $data['LiveRestoreEnabled'];
            if (is_bool($data['LiveRestoreEnabled'])) {
                $value_47 = $data['LiveRestoreEnabled'];
            } elseif (null === $data['LiveRestoreEnabled']) {
                $value_47 = $data['LiveRestoreEnabled'];
            }
            $object->setLiveRestoreEnabled($value_47);
        } elseif (array_key_exists('LiveRestoreEnabled', $data) && null === $data['LiveRestoreEnabled']) {
            $object->setLiveRestoreEnabled(null);
        }
        if (array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $value_48 = $data['Isolation'];
            if (is_string($data['Isolation'])) {
                $value_48 = $data['Isolation'];
            } elseif (null === $data['Isolation']) {
                $value_48 = $data['Isolation'];
            }
            $object->setIsolation($value_48);
        } elseif (array_key_exists('Isolation', $data) && null === $data['Isolation']) {
            $object->setIsolation(null);
        }
        if (array_key_exists('InitBinary', $data) && null !== $data['InitBinary']) {
            $value_49 = $data['InitBinary'];
            if (is_string($data['InitBinary'])) {
                $value_49 = $data['InitBinary'];
            } elseif (null === $data['InitBinary']) {
                $value_49 = $data['InitBinary'];
            }
            $object->setInitBinary($value_49);
        } elseif (array_key_exists('InitBinary', $data) && null === $data['InitBinary']) {
            $object->setInitBinary(null);
        }
        if (array_key_exists('ContainerdCommit', $data)) {
            $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
        }
        if (array_key_exists('RuncCommit', $data)) {
            $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
        }
        if (array_key_exists('InitCommit', $data)) {
            $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], \WebProject\DockerApi\Library\Generated\Model\Commit::class, 'json', $context));
        }
        if (array_key_exists('SecurityOptions', $data) && null !== $data['SecurityOptions']) {
            $value_50 = $data['SecurityOptions'];
            if (is_array($data['SecurityOptions']) && $this->isOnlyNumericKeys($data['SecurityOptions'])) {
                $values_5 = [];
                foreach ($data['SecurityOptions'] as $value_51) {
                    $values_5[] = $value_51;
                }
                $value_50 = $values_5;
            } elseif (null === $data['SecurityOptions']) {
                $value_50 = $data['SecurityOptions'];
            }
            $object->setSecurityOptions($value_50);
        } elseif (array_key_exists('SecurityOptions', $data) && null === $data['SecurityOptions']) {
            $object->setSecurityOptions(null);
        }
        if (array_key_exists('ProductLicense', $data) && null !== $data['ProductLicense']) {
            $value_52 = $data['ProductLicense'];
            if (is_string($data['ProductLicense'])) {
                $value_52 = $data['ProductLicense'];
            } elseif (null === $data['ProductLicense']) {
                $value_52 = $data['ProductLicense'];
            }
            $object->setProductLicense($value_52);
        } elseif (array_key_exists('ProductLicense', $data) && null === $data['ProductLicense']) {
            $object->setProductLicense(null);
        }
        if (array_key_exists('DefaultAddressPools', $data) && null !== $data['DefaultAddressPools']) {
            $value_53 = $data['DefaultAddressPools'];
            if (is_array($data['DefaultAddressPools']) && $this->isOnlyNumericKeys($data['DefaultAddressPools'])) {
                $values_6 = [];
                foreach ($data['DefaultAddressPools'] as $value_54) {
                    $values_6[] = $this->denormalizer->denormalize($value_54, \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class, 'json', $context);
                }
                $value_53 = $values_6;
            } elseif (null === $data['DefaultAddressPools']) {
                $value_53 = $data['DefaultAddressPools'];
            }
            $object->setDefaultAddressPools($value_53);
        } elseif (array_key_exists('DefaultAddressPools', $data) && null === $data['DefaultAddressPools']) {
            $object->setDefaultAddressPools(null);
        }
        if (array_key_exists('FirewallBackend', $data) && null !== $data['FirewallBackend']) {
            $object->setFirewallBackend($this->denormalizer->denormalize($data['FirewallBackend'], \WebProject\DockerApi\Library\Generated\Model\FirewallInfo::class, 'json', $context));
        } elseif (array_key_exists('FirewallBackend', $data) && null === $data['FirewallBackend']) {
            $object->setFirewallBackend(null);
        }
        if (array_key_exists('DiscoveredDevices', $data) && null !== $data['DiscoveredDevices']) {
            $value_55 = $data['DiscoveredDevices'];
            if (is_array($data['DiscoveredDevices']) && $this->isOnlyNumericKeys($data['DiscoveredDevices'])) {
                $values_7 = [];
                foreach ($data['DiscoveredDevices'] as $value_56) {
                    $values_7[] = $this->denormalizer->denormalize($value_56, \WebProject\DockerApi\Library\Generated\Model\DeviceInfo::class, 'json', $context);
                }
                $value_55 = $values_7;
            } elseif (null === $data['DiscoveredDevices']) {
                $value_55 = $data['DiscoveredDevices'];
            }
            $object->setDiscoveredDevices($value_55);
        } elseif (array_key_exists('DiscoveredDevices', $data) && null === $data['DiscoveredDevices']) {
            $object->setDiscoveredDevices(null);
        }
        if (array_key_exists('NRI', $data) && null !== $data['NRI']) {
            $object->setNRI($this->denormalizer->denormalize($data['NRI'], \WebProject\DockerApi\Library\Generated\Model\NRIInfo::class, 'json', $context));
        } elseif (array_key_exists('NRI', $data) && null === $data['NRI']) {
            $object->setNRI(null);
        }
        if (array_key_exists('Warnings', $data) && null !== $data['Warnings']) {
            $value_57 = $data['Warnings'];
            if (is_array($data['Warnings']) && $this->isOnlyNumericKeys($data['Warnings'])) {
                $values_8 = [];
                foreach ($data['Warnings'] as $value_58) {
                    $values_8[] = $value_58;
                }
                $value_57 = $values_8;
            } elseif (null === $data['Warnings']) {
                $value_57 = $data['Warnings'];
            }
            $object->setWarnings($value_57);
        } elseif (array_key_exists('Warnings', $data) && null === $data['Warnings']) {
            $object->setWarnings(null);
        }
        if (array_key_exists('CDISpecDirs', $data) && null !== $data['CDISpecDirs']) {
            $value_59 = $data['CDISpecDirs'];
            if (is_array($data['CDISpecDirs']) && $this->isOnlyNumericKeys($data['CDISpecDirs'])) {
                $values_9 = [];
                foreach ($data['CDISpecDirs'] as $value_60) {
                    $values_9[] = $value_60;
                }
                $value_59 = $values_9;
            } elseif (null === $data['CDISpecDirs']) {
                $value_59 = $data['CDISpecDirs'];
            }
            $object->setCDISpecDirs($value_59);
        } elseif (array_key_exists('CDISpecDirs', $data) && null === $data['CDISpecDirs']) {
            $object->setCDISpecDirs(null);
        }
        if (array_key_exists('Containerd', $data) && null !== $data['Containerd']) {
            $object->setContainerd($this->denormalizer->denormalize($data['Containerd'], \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class, 'json', $context));
        } elseif (array_key_exists('Containerd', $data) && null === $data['Containerd']) {
            $object->setContainerd(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iD')) {
            $value = $data->getID();
            if (is_string($data->getID())) {
                $value = $data->getID();
            } elseif (null === $data->getID()) {
                $value = $data->getID();
            }
            $dataArray['ID'] = $value;
        }
        if ($data->isInitialized('containers')) {
            $value_1 = $data->getContainers();
            if (is_int($data->getContainers())) {
                $value_1 = $data->getContainers();
            } elseif (null === $data->getContainers()) {
                $value_1 = $data->getContainers();
            }
            $dataArray['Containers'] = $value_1;
        }
        if ($data->isInitialized('containersRunning')) {
            $value_2 = $data->getContainersRunning();
            if (is_int($data->getContainersRunning())) {
                $value_2 = $data->getContainersRunning();
            } elseif (null === $data->getContainersRunning()) {
                $value_2 = $data->getContainersRunning();
            }
            $dataArray['ContainersRunning'] = $value_2;
        }
        if ($data->isInitialized('containersPaused')) {
            $value_3 = $data->getContainersPaused();
            if (is_int($data->getContainersPaused())) {
                $value_3 = $data->getContainersPaused();
            } elseif (null === $data->getContainersPaused()) {
                $value_3 = $data->getContainersPaused();
            }
            $dataArray['ContainersPaused'] = $value_3;
        }
        if ($data->isInitialized('containersStopped')) {
            $value_4 = $data->getContainersStopped();
            if (is_int($data->getContainersStopped())) {
                $value_4 = $data->getContainersStopped();
            } elseif (null === $data->getContainersStopped()) {
                $value_4 = $data->getContainersStopped();
            }
            $dataArray['ContainersStopped'] = $value_4;
        }
        if ($data->isInitialized('images')) {
            $value_5 = $data->getImages();
            if (is_int($data->getImages())) {
                $value_5 = $data->getImages();
            } elseif (null === $data->getImages()) {
                $value_5 = $data->getImages();
            }
            $dataArray['Images'] = $value_5;
        }
        if ($data->isInitialized('driver')) {
            $value_6 = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value_6 = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value_6 = $data->getDriver();
            }
            $dataArray['Driver'] = $value_6;
        }
        if ($data->isInitialized('driverStatus')) {
            $value_7 = $data->getDriverStatus();
            if (is_array($data->getDriverStatus())) {
                $values = [];
                foreach ($data->getDriverStatus() as $value_8) {
                    $values_1 = [];
                    foreach ($value_8 as $value_9) {
                        $values_1[] = $value_9;
                    }
                    $values[] = $values_1;
                }
                $value_7 = $values;
            } elseif (null === $data->getDriverStatus()) {
                $value_7 = $data->getDriverStatus();
            }
            $dataArray['DriverStatus'] = $value_7;
        }
        if ($data->isInitialized('dockerRootDir')) {
            $value_10 = $data->getDockerRootDir();
            if (is_string($data->getDockerRootDir())) {
                $value_10 = $data->getDockerRootDir();
            } elseif (null === $data->getDockerRootDir()) {
                $value_10 = $data->getDockerRootDir();
            }
            $dataArray['DockerRootDir'] = $value_10;
        }
        if ($data->isInitialized('plugins') && null !== $data->getPlugins()) {
            $dataArray['Plugins'] = $this->normalizer->normalize($data->getPlugins(), 'json', $context);
        }
        if ($data->isInitialized('memoryLimit')) {
            $value_11 = $data->getMemoryLimit();
            if (is_bool($data->getMemoryLimit())) {
                $value_11 = $data->getMemoryLimit();
            } elseif (null === $data->getMemoryLimit()) {
                $value_11 = $data->getMemoryLimit();
            }
            $dataArray['MemoryLimit'] = $value_11;
        }
        if ($data->isInitialized('swapLimit')) {
            $value_12 = $data->getSwapLimit();
            if (is_bool($data->getSwapLimit())) {
                $value_12 = $data->getSwapLimit();
            } elseif (null === $data->getSwapLimit()) {
                $value_12 = $data->getSwapLimit();
            }
            $dataArray['SwapLimit'] = $value_12;
        }
        if ($data->isInitialized('cpuCfsPeriod')) {
            $value_13 = $data->getCpuCfsPeriod();
            if (is_bool($data->getCpuCfsPeriod())) {
                $value_13 = $data->getCpuCfsPeriod();
            } elseif (null === $data->getCpuCfsPeriod()) {
                $value_13 = $data->getCpuCfsPeriod();
            }
            $dataArray['CpuCfsPeriod'] = $value_13;
        }
        if ($data->isInitialized('cpuCfsQuota')) {
            $value_14 = $data->getCpuCfsQuota();
            if (is_bool($data->getCpuCfsQuota())) {
                $value_14 = $data->getCpuCfsQuota();
            } elseif (null === $data->getCpuCfsQuota()) {
                $value_14 = $data->getCpuCfsQuota();
            }
            $dataArray['CpuCfsQuota'] = $value_14;
        }
        if ($data->isInitialized('cPUShares')) {
            $value_15 = $data->getCPUShares();
            if (is_bool($data->getCPUShares())) {
                $value_15 = $data->getCPUShares();
            } elseif (null === $data->getCPUShares()) {
                $value_15 = $data->getCPUShares();
            }
            $dataArray['CPUShares'] = $value_15;
        }
        if ($data->isInitialized('cPUSet')) {
            $value_16 = $data->getCPUSet();
            if (is_bool($data->getCPUSet())) {
                $value_16 = $data->getCPUSet();
            } elseif (null === $data->getCPUSet()) {
                $value_16 = $data->getCPUSet();
            }
            $dataArray['CPUSet'] = $value_16;
        }
        if ($data->isInitialized('pidsLimit')) {
            $value_17 = $data->getPidsLimit();
            if (is_bool($data->getPidsLimit())) {
                $value_17 = $data->getPidsLimit();
            } elseif (null === $data->getPidsLimit()) {
                $value_17 = $data->getPidsLimit();
            }
            $dataArray['PidsLimit'] = $value_17;
        }
        if ($data->isInitialized('oomKillDisable')) {
            $value_18 = $data->getOomKillDisable();
            if (is_bool($data->getOomKillDisable())) {
                $value_18 = $data->getOomKillDisable();
            } elseif (null === $data->getOomKillDisable()) {
                $value_18 = $data->getOomKillDisable();
            }
            $dataArray['OomKillDisable'] = $value_18;
        }
        if ($data->isInitialized('iPv4Forwarding')) {
            $value_19 = $data->getIPv4Forwarding();
            if (is_bool($data->getIPv4Forwarding())) {
                $value_19 = $data->getIPv4Forwarding();
            } elseif (null === $data->getIPv4Forwarding()) {
                $value_19 = $data->getIPv4Forwarding();
            }
            $dataArray['IPv4Forwarding'] = $value_19;
        }
        if ($data->isInitialized('debug')) {
            $value_20 = $data->getDebug();
            if (is_bool($data->getDebug())) {
                $value_20 = $data->getDebug();
            } elseif (null === $data->getDebug()) {
                $value_20 = $data->getDebug();
            }
            $dataArray['Debug'] = $value_20;
        }
        if ($data->isInitialized('nFd')) {
            $value_21 = $data->getNFd();
            if (is_int($data->getNFd())) {
                $value_21 = $data->getNFd();
            } elseif (null === $data->getNFd()) {
                $value_21 = $data->getNFd();
            }
            $dataArray['NFd'] = $value_21;
        }
        if ($data->isInitialized('nGoroutines')) {
            $value_22 = $data->getNGoroutines();
            if (is_int($data->getNGoroutines())) {
                $value_22 = $data->getNGoroutines();
            } elseif (null === $data->getNGoroutines()) {
                $value_22 = $data->getNGoroutines();
            }
            $dataArray['NGoroutines'] = $value_22;
        }
        if ($data->isInitialized('systemTime')) {
            $value_23 = $data->getSystemTime();
            if (is_string($data->getSystemTime())) {
                $value_23 = $data->getSystemTime();
            } elseif (null === $data->getSystemTime()) {
                $value_23 = $data->getSystemTime();
            }
            $dataArray['SystemTime'] = $value_23;
        }
        if ($data->isInitialized('loggingDriver')) {
            $value_24 = $data->getLoggingDriver();
            if (is_string($data->getLoggingDriver())) {
                $value_24 = $data->getLoggingDriver();
            } elseif (null === $data->getLoggingDriver()) {
                $value_24 = $data->getLoggingDriver();
            }
            $dataArray['LoggingDriver'] = $value_24;
        }
        if ($data->isInitialized('cgroupDriver')) {
            $value_25 = $data->getCgroupDriver();
            if (is_string($data->getCgroupDriver())) {
                $value_25 = $data->getCgroupDriver();
            } elseif (null === $data->getCgroupDriver()) {
                $value_25 = $data->getCgroupDriver();
            }
            $dataArray['CgroupDriver'] = $value_25;
        }
        if ($data->isInitialized('cgroupVersion')) {
            $value_26 = $data->getCgroupVersion();
            if (is_string($data->getCgroupVersion())) {
                $value_26 = $data->getCgroupVersion();
            } elseif (null === $data->getCgroupVersion()) {
                $value_26 = $data->getCgroupVersion();
            }
            $dataArray['CgroupVersion'] = $value_26;
        }
        if ($data->isInitialized('nEventsListener')) {
            $value_27 = $data->getNEventsListener();
            if (is_int($data->getNEventsListener())) {
                $value_27 = $data->getNEventsListener();
            } elseif (null === $data->getNEventsListener()) {
                $value_27 = $data->getNEventsListener();
            }
            $dataArray['NEventsListener'] = $value_27;
        }
        if ($data->isInitialized('kernelVersion')) {
            $value_28 = $data->getKernelVersion();
            if (is_string($data->getKernelVersion())) {
                $value_28 = $data->getKernelVersion();
            } elseif (null === $data->getKernelVersion()) {
                $value_28 = $data->getKernelVersion();
            }
            $dataArray['KernelVersion'] = $value_28;
        }
        if ($data->isInitialized('operatingSystem')) {
            $value_29 = $data->getOperatingSystem();
            if (is_string($data->getOperatingSystem())) {
                $value_29 = $data->getOperatingSystem();
            } elseif (null === $data->getOperatingSystem()) {
                $value_29 = $data->getOperatingSystem();
            }
            $dataArray['OperatingSystem'] = $value_29;
        }
        if ($data->isInitialized('oSVersion')) {
            $value_30 = $data->getOSVersion();
            if (is_string($data->getOSVersion())) {
                $value_30 = $data->getOSVersion();
            } elseif (null === $data->getOSVersion()) {
                $value_30 = $data->getOSVersion();
            }
            $dataArray['OSVersion'] = $value_30;
        }
        if ($data->isInitialized('oSType')) {
            $value_31 = $data->getOSType();
            if (is_string($data->getOSType())) {
                $value_31 = $data->getOSType();
            } elseif (null === $data->getOSType()) {
                $value_31 = $data->getOSType();
            }
            $dataArray['OSType'] = $value_31;
        }
        if ($data->isInitialized('architecture')) {
            $value_32 = $data->getArchitecture();
            if (is_string($data->getArchitecture())) {
                $value_32 = $data->getArchitecture();
            } elseif (null === $data->getArchitecture()) {
                $value_32 = $data->getArchitecture();
            }
            $dataArray['Architecture'] = $value_32;
        }
        if ($data->isInitialized('nCPU')) {
            $value_33 = $data->getNCPU();
            if (is_int($data->getNCPU())) {
                $value_33 = $data->getNCPU();
            } elseif (null === $data->getNCPU()) {
                $value_33 = $data->getNCPU();
            }
            $dataArray['NCPU'] = $value_33;
        }
        if ($data->isInitialized('memTotal')) {
            $value_34 = $data->getMemTotal();
            if (is_int($data->getMemTotal())) {
                $value_34 = $data->getMemTotal();
            } elseif (null === $data->getMemTotal()) {
                $value_34 = $data->getMemTotal();
            }
            $dataArray['MemTotal'] = $value_34;
        }
        if ($data->isInitialized('indexServerAddress')) {
            $value_35 = $data->getIndexServerAddress();
            if (is_string($data->getIndexServerAddress())) {
                $value_35 = $data->getIndexServerAddress();
            } elseif (null === $data->getIndexServerAddress()) {
                $value_35 = $data->getIndexServerAddress();
            }
            $dataArray['IndexServerAddress'] = $value_35;
        }
        if ($data->isInitialized('registryConfig')) {
            $dataArray['RegistryConfig'] = $this->normalizer->normalize($data->getRegistryConfig(), 'json', $context);
        }
        if ($data->isInitialized('genericResources') && null !== $data->getGenericResources()) {
            $values_2 = [];
            foreach ($data->getGenericResources() as $value_36) {
                $values_2[] = $this->normalizer->normalize($value_36, 'json', $context);
            }
            $dataArray['GenericResources'] = $values_2;
        }
        if ($data->isInitialized('httpProxy')) {
            $value_37 = $data->getHttpProxy();
            if (is_string($data->getHttpProxy())) {
                $value_37 = $data->getHttpProxy();
            } elseif (null === $data->getHttpProxy()) {
                $value_37 = $data->getHttpProxy();
            }
            $dataArray['HttpProxy'] = $value_37;
        }
        if ($data->isInitialized('httpsProxy')) {
            $value_38 = $data->getHttpsProxy();
            if (is_string($data->getHttpsProxy())) {
                $value_38 = $data->getHttpsProxy();
            } elseif (null === $data->getHttpsProxy()) {
                $value_38 = $data->getHttpsProxy();
            }
            $dataArray['HttpsProxy'] = $value_38;
        }
        if ($data->isInitialized('noProxy')) {
            $value_39 = $data->getNoProxy();
            if (is_string($data->getNoProxy())) {
                $value_39 = $data->getNoProxy();
            } elseif (null === $data->getNoProxy()) {
                $value_39 = $data->getNoProxy();
            }
            $dataArray['NoProxy'] = $value_39;
        }
        if ($data->isInitialized('name')) {
            $value_40 = $data->getName();
            if (is_string($data->getName())) {
                $value_40 = $data->getName();
            } elseif (null === $data->getName()) {
                $value_40 = $data->getName();
            }
            $dataArray['Name'] = $value_40;
        }
        if ($data->isInitialized('labels')) {
            $value_41 = $data->getLabels();
            if (is_array($data->getLabels())) {
                $values_3 = [];
                foreach ($data->getLabels() as $value_42) {
                    $values_3[] = $value_42;
                }
                $value_41 = $values_3;
            } elseif (null === $data->getLabels()) {
                $value_41 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_41;
        }
        if ($data->isInitialized('experimentalBuild')) {
            $value_43 = $data->getExperimentalBuild();
            if (is_bool($data->getExperimentalBuild())) {
                $value_43 = $data->getExperimentalBuild();
            } elseif (null === $data->getExperimentalBuild()) {
                $value_43 = $data->getExperimentalBuild();
            }
            $dataArray['ExperimentalBuild'] = $value_43;
        }
        if ($data->isInitialized('serverVersion')) {
            $value_44 = $data->getServerVersion();
            if (is_string($data->getServerVersion())) {
                $value_44 = $data->getServerVersion();
            } elseif (null === $data->getServerVersion()) {
                $value_44 = $data->getServerVersion();
            }
            $dataArray['ServerVersion'] = $value_44;
        }
        if ($data->isInitialized('runtimes') && null !== $data->getRuntimes()) {
            $values_4 = [];
            foreach ($data->getRuntimes() as $key => $value_45) {
                $values_4[$key] = $this->normalizer->normalize($value_45, 'json', $context);
            }
            $dataArray['Runtimes'] = $values_4;
        }
        if ($data->isInitialized('defaultRuntime')) {
            $value_46 = $data->getDefaultRuntime();
            if (is_string($data->getDefaultRuntime())) {
                $value_46 = $data->getDefaultRuntime();
            } elseif (null === $data->getDefaultRuntime()) {
                $value_46 = $data->getDefaultRuntime();
            }
            $dataArray['DefaultRuntime'] = $value_46;
        }
        if ($data->isInitialized('swarm') && null !== $data->getSwarm()) {
            $dataArray['Swarm'] = $this->normalizer->normalize($data->getSwarm(), 'json', $context);
        }
        if ($data->isInitialized('liveRestoreEnabled')) {
            $value_47 = $data->getLiveRestoreEnabled();
            if (is_bool($data->getLiveRestoreEnabled())) {
                $value_47 = $data->getLiveRestoreEnabled();
            } elseif (null === $data->getLiveRestoreEnabled()) {
                $value_47 = $data->getLiveRestoreEnabled();
            }
            $dataArray['LiveRestoreEnabled'] = $value_47;
        }
        if ($data->isInitialized('isolation')) {
            $value_48 = $data->getIsolation();
            if (is_string($data->getIsolation())) {
                $value_48 = $data->getIsolation();
            } elseif (null === $data->getIsolation()) {
                $value_48 = $data->getIsolation();
            }
            $dataArray['Isolation'] = $value_48;
        }
        if ($data->isInitialized('initBinary')) {
            $value_49 = $data->getInitBinary();
            if (is_string($data->getInitBinary())) {
                $value_49 = $data->getInitBinary();
            } elseif (null === $data->getInitBinary()) {
                $value_49 = $data->getInitBinary();
            }
            $dataArray['InitBinary'] = $value_49;
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
        if ($data->isInitialized('securityOptions')) {
            $value_50 = $data->getSecurityOptions();
            if (is_array($data->getSecurityOptions())) {
                $values_5 = [];
                foreach ($data->getSecurityOptions() as $value_51) {
                    $values_5[] = $value_51;
                }
                $value_50 = $values_5;
            } elseif (null === $data->getSecurityOptions()) {
                $value_50 = $data->getSecurityOptions();
            }
            $dataArray['SecurityOptions'] = $value_50;
        }
        if ($data->isInitialized('productLicense')) {
            $value_52 = $data->getProductLicense();
            if (is_string($data->getProductLicense())) {
                $value_52 = $data->getProductLicense();
            } elseif (null === $data->getProductLicense()) {
                $value_52 = $data->getProductLicense();
            }
            $dataArray['ProductLicense'] = $value_52;
        }
        if ($data->isInitialized('defaultAddressPools')) {
            $value_53 = $data->getDefaultAddressPools();
            if (is_array($data->getDefaultAddressPools())) {
                $values_6 = [];
                foreach ($data->getDefaultAddressPools() as $value_54) {
                    $values_6[] = $this->normalizer->normalize($value_54, 'json', $context);
                }
                $value_53 = $values_6;
            } elseif (null === $data->getDefaultAddressPools()) {
                $value_53 = $data->getDefaultAddressPools();
            }
            $dataArray['DefaultAddressPools'] = $value_53;
        }
        if ($data->isInitialized('firewallBackend')) {
            $dataArray['FirewallBackend'] = $this->normalizer->normalize($data->getFirewallBackend(), 'json', $context);
        }
        if ($data->isInitialized('discoveredDevices')) {
            $value_55 = $data->getDiscoveredDevices();
            if (is_array($data->getDiscoveredDevices())) {
                $values_7 = [];
                foreach ($data->getDiscoveredDevices() as $value_56) {
                    $values_7[] = $this->normalizer->normalize($value_56, 'json', $context);
                }
                $value_55 = $values_7;
            } elseif (null === $data->getDiscoveredDevices()) {
                $value_55 = $data->getDiscoveredDevices();
            }
            $dataArray['DiscoveredDevices'] = $value_55;
        }
        if ($data->isInitialized('nRI')) {
            $dataArray['NRI'] = $this->normalizer->normalize($data->getNRI(), 'json', $context);
        }
        if ($data->isInitialized('warnings')) {
            $value_57 = $data->getWarnings();
            if (is_array($data->getWarnings())) {
                $values_8 = [];
                foreach ($data->getWarnings() as $value_58) {
                    $values_8[] = $value_58;
                }
                $value_57 = $values_8;
            } elseif (null === $data->getWarnings()) {
                $value_57 = $data->getWarnings();
            }
            $dataArray['Warnings'] = $value_57;
        }
        if ($data->isInitialized('cDISpecDirs')) {
            $value_59 = $data->getCDISpecDirs();
            if (is_array($data->getCDISpecDirs())) {
                $values_9 = [];
                foreach ($data->getCDISpecDirs() as $value_60) {
                    $values_9[] = $value_60;
                }
                $value_59 = $values_9;
            } elseif (null === $data->getCDISpecDirs()) {
                $value_59 = $data->getCDISpecDirs();
            }
            $dataArray['CDISpecDirs'] = $value_59;
        }
        if ($data->isInitialized('containerd')) {
            $dataArray['Containerd'] = $this->normalizer->normalize($data->getContainerd(), 'json', $context);
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
