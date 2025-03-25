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
    class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\HostConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\HostConfig::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\HostConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('CpuShares', $data)) {
                $object->setCpuShares($data['CpuShares']);
                unset($data['CpuShares']);
            }
            if (array_key_exists('Memory', $data)) {
                $object->setMemory($data['Memory']);
                unset($data['Memory']);
            }
            if (array_key_exists('CgroupParent', $data)) {
                $object->setCgroupParent($data['CgroupParent']);
                unset($data['CgroupParent']);
            }
            if (array_key_exists('BlkioWeight', $data)) {
                $object->setBlkioWeight($data['BlkioWeight']);
                unset($data['BlkioWeight']);
            }
            if (array_key_exists('BlkioWeightDevice', $data) && null !== $data['BlkioWeightDevice']) {
                $values = [];
                foreach ($data['BlkioWeightDevice'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
                }
                $object->setBlkioWeightDevice($values);
                unset($data['BlkioWeightDevice']);
            } elseif (array_key_exists('BlkioWeightDevice', $data) && null === $data['BlkioWeightDevice']) {
                $object->setBlkioWeightDevice(null);
            }
            if (array_key_exists('BlkioDeviceReadBps', $data) && null !== $data['BlkioDeviceReadBps']) {
                $values_1 = [];
                foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadBps($values_1);
                unset($data['BlkioDeviceReadBps']);
            } elseif (array_key_exists('BlkioDeviceReadBps', $data) && null === $data['BlkioDeviceReadBps']) {
                $object->setBlkioDeviceReadBps(null);
            }
            if (array_key_exists('BlkioDeviceWriteBps', $data) && null !== $data['BlkioDeviceWriteBps']) {
                $values_2 = [];
                foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteBps($values_2);
                unset($data['BlkioDeviceWriteBps']);
            } elseif (array_key_exists('BlkioDeviceWriteBps', $data) && null === $data['BlkioDeviceWriteBps']) {
                $object->setBlkioDeviceWriteBps(null);
            }
            if (array_key_exists('BlkioDeviceReadIOps', $data) && null !== $data['BlkioDeviceReadIOps']) {
                $values_3 = [];
                foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadIOps($values_3);
                unset($data['BlkioDeviceReadIOps']);
            } elseif (array_key_exists('BlkioDeviceReadIOps', $data) && null === $data['BlkioDeviceReadIOps']) {
                $object->setBlkioDeviceReadIOps(null);
            }
            if (array_key_exists('BlkioDeviceWriteIOps', $data) && null !== $data['BlkioDeviceWriteIOps']) {
                $values_4 = [];
                foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteIOps($values_4);
                unset($data['BlkioDeviceWriteIOps']);
            } elseif (array_key_exists('BlkioDeviceWriteIOps', $data) && null === $data['BlkioDeviceWriteIOps']) {
                $object->setBlkioDeviceWriteIOps(null);
            }
            if (array_key_exists('CpuPeriod', $data)) {
                $object->setCpuPeriod($data['CpuPeriod']);
                unset($data['CpuPeriod']);
            }
            if (array_key_exists('CpuQuota', $data) && null !== $data['CpuQuota']) {
                $object->setCpuQuota($data['CpuQuota']);
                unset($data['CpuQuota']);
            } elseif (array_key_exists('CpuQuota', $data) && null === $data['CpuQuota']) {
                $object->setCpuQuota(null);
            }
            if (array_key_exists('CpuRealtimePeriod', $data) && null !== $data['CpuRealtimePeriod']) {
                $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
                unset($data['CpuRealtimePeriod']);
            } elseif (array_key_exists('CpuRealtimePeriod', $data) && null === $data['CpuRealtimePeriod']) {
                $object->setCpuRealtimePeriod(null);
            }
            if (array_key_exists('CpuRealtimeRuntime', $data) && null !== $data['CpuRealtimeRuntime']) {
                $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
                unset($data['CpuRealtimeRuntime']);
            } elseif (array_key_exists('CpuRealtimeRuntime', $data) && null === $data['CpuRealtimeRuntime']) {
                $object->setCpuRealtimeRuntime(null);
            }
            if (array_key_exists('CpusetCpus', $data) && null !== $data['CpusetCpus']) {
                $object->setCpusetCpus($data['CpusetCpus']);
                unset($data['CpusetCpus']);
            } elseif (array_key_exists('CpusetCpus', $data) && null === $data['CpusetCpus']) {
                $object->setCpusetCpus(null);
            }
            if (array_key_exists('CpusetMems', $data)) {
                $object->setCpusetMems($data['CpusetMems']);
                unset($data['CpusetMems']);
            }
            if (array_key_exists('Devices', $data) && null !== $data['Devices']) {
                $values_5 = [];
                foreach ($data['Devices'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class, 'json', $context);
                }
                $object->setDevices($values_5);
                unset($data['Devices']);
            } elseif (array_key_exists('Devices', $data) && null === $data['Devices']) {
                $object->setDevices(null);
            }
            if (array_key_exists('DeviceCgroupRules', $data) && null !== $data['DeviceCgroupRules']) {
                $values_6 = [];
                foreach ($data['DeviceCgroupRules'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setDeviceCgroupRules($values_6);
                unset($data['DeviceCgroupRules']);
            } elseif (array_key_exists('DeviceCgroupRules', $data) && null === $data['DeviceCgroupRules']) {
                $object->setDeviceCgroupRules(null);
            }
            if (array_key_exists('DeviceRequests', $data) && null !== $data['DeviceRequests']) {
                $values_7 = [];
                foreach ($data['DeviceRequests'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class, 'json', $context);
                }
                $object->setDeviceRequests($values_7);
                unset($data['DeviceRequests']);
            } elseif (array_key_exists('DeviceRequests', $data) && null === $data['DeviceRequests']) {
                $object->setDeviceRequests(null);
            }
            if (array_key_exists('KernelMemoryTCP', $data)) {
                $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
                unset($data['KernelMemoryTCP']);
            }
            if (array_key_exists('MemoryReservation', $data)) {
                $object->setMemoryReservation($data['MemoryReservation']);
                unset($data['MemoryReservation']);
            }
            if (array_key_exists('MemorySwap', $data)) {
                $object->setMemorySwap($data['MemorySwap']);
                unset($data['MemorySwap']);
            }
            if (array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
                $object->setMemorySwappiness($data['MemorySwappiness']);
                unset($data['MemorySwappiness']);
            } elseif (array_key_exists('MemorySwappiness', $data) && null === $data['MemorySwappiness']) {
                $object->setMemorySwappiness(null);
            }
            if (array_key_exists('NanoCpus', $data)) {
                $object->setNanoCpus($data['NanoCpus']);
                unset($data['NanoCpus']);
            }
            if (array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
                $object->setOomKillDisable($data['OomKillDisable']);
                unset($data['OomKillDisable']);
            } elseif (array_key_exists('OomKillDisable', $data) && null === $data['OomKillDisable']) {
                $object->setOomKillDisable(null);
            }
            if (array_key_exists('Init', $data) && null !== $data['Init']) {
                $object->setInit($data['Init']);
                unset($data['Init']);
            } elseif (array_key_exists('Init', $data) && null === $data['Init']) {
                $object->setInit(null);
            }
            if (array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
                $object->setPidsLimit($data['PidsLimit']);
                unset($data['PidsLimit']);
            } elseif (array_key_exists('PidsLimit', $data) && null === $data['PidsLimit']) {
                $object->setPidsLimit(null);
            }
            if (array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
                $values_8 = [];
                foreach ($data['Ulimits'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, \WebProject\DockerApi\Library\Generated\Model\ResourcesUlimitsItem::class, 'json', $context);
                }
                $object->setUlimits($values_8);
                unset($data['Ulimits']);
            } elseif (array_key_exists('Ulimits', $data) && null === $data['Ulimits']) {
                $object->setUlimits(null);
            }
            if (array_key_exists('CpuCount', $data)) {
                $object->setCpuCount($data['CpuCount']);
                unset($data['CpuCount']);
            }
            if (array_key_exists('CpuPercent', $data)) {
                $object->setCpuPercent($data['CpuPercent']);
                unset($data['CpuPercent']);
            }
            if (array_key_exists('IOMaximumIOps', $data)) {
                $object->setIOMaximumIOps($data['IOMaximumIOps']);
                unset($data['IOMaximumIOps']);
            }
            if (array_key_exists('IOMaximumBandwidth', $data)) {
                $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
                unset($data['IOMaximumBandwidth']);
            }
            if (array_key_exists('Binds', $data) && null !== $data['Binds']) {
                $values_9 = [];
                foreach ($data['Binds'] as $value_9) {
                    $values_9[] = $value_9;
                }
                $object->setBinds($values_9);
                unset($data['Binds']);
            } elseif (array_key_exists('Binds', $data) && null === $data['Binds']) {
                $object->setBinds(null);
            }
            if (array_key_exists('ContainerIDFile', $data)) {
                $object->setContainerIDFile($data['ContainerIDFile']);
                unset($data['ContainerIDFile']);
            }
            if (array_key_exists('LogConfig', $data)) {
                $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfigLogConfig::class, 'json', $context));
                unset($data['LogConfig']);
            }
            if (array_key_exists('NetworkMode', $data)) {
                $object->setNetworkMode($data['NetworkMode']);
                unset($data['NetworkMode']);
            }
            if (array_key_exists('PortBindings', $data) && null !== $data['PortBindings']) {
                $values_10 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PortBindings'] as $key => $value_10) {
                    $values_10[$key] = $value_10;
                }
                $object->setPortBindings($values_10);
                unset($data['PortBindings']);
            } elseif (array_key_exists('PortBindings', $data) && null === $data['PortBindings']) {
                $object->setPortBindings(null);
            }
            if (array_key_exists('RestartPolicy', $data)) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class, 'json', $context));
                unset($data['RestartPolicy']);
            }
            if (array_key_exists('AutoRemove', $data)) {
                $object->setAutoRemove($data['AutoRemove']);
                unset($data['AutoRemove']);
            }
            if (array_key_exists('VolumeDriver', $data)) {
                $object->setVolumeDriver($data['VolumeDriver']);
                unset($data['VolumeDriver']);
            }
            if (array_key_exists('VolumesFrom', $data) && null !== $data['VolumesFrom']) {
                $values_11 = [];
                foreach ($data['VolumesFrom'] as $value_11) {
                    $values_11[] = $value_11;
                }
                $object->setVolumesFrom($values_11);
                unset($data['VolumesFrom']);
            } elseif (array_key_exists('VolumesFrom', $data) && null === $data['VolumesFrom']) {
                $object->setVolumesFrom(null);
            }
            if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
                $values_12 = [];
                foreach ($data['Mounts'] as $value_12) {
                    $values_12[] = $this->denormalizer->denormalize($value_12, \WebProject\DockerApi\Library\Generated\Model\Mount::class, 'json', $context);
                }
                $object->setMounts($values_12);
                unset($data['Mounts']);
            } elseif (array_key_exists('Mounts', $data) && null === $data['Mounts']) {
                $object->setMounts(null);
            }
            if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
                $values_13 = [];
                foreach ($data['ConsoleSize'] as $value_13) {
                    $values_13[] = $value_13;
                }
                $object->setConsoleSize($values_13);
                unset($data['ConsoleSize']);
            } elseif (array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
                $object->setConsoleSize(null);
            }
            if (array_key_exists('Annotations', $data)) {
                $values_14 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Annotations'] as $key_1 => $value_14) {
                    $values_14[$key_1] = $value_14;
                }
                $object->setAnnotations($values_14);
                unset($data['Annotations']);
            }
            if (array_key_exists('CapAdd', $data) && null !== $data['CapAdd']) {
                $values_15 = [];
                foreach ($data['CapAdd'] as $value_15) {
                    $values_15[] = $value_15;
                }
                $object->setCapAdd($values_15);
                unset($data['CapAdd']);
            } elseif (array_key_exists('CapAdd', $data) && null === $data['CapAdd']) {
                $object->setCapAdd(null);
            }
            if (array_key_exists('CapDrop', $data) && null !== $data['CapDrop']) {
                $values_16 = [];
                foreach ($data['CapDrop'] as $value_16) {
                    $values_16[] = $value_16;
                }
                $object->setCapDrop($values_16);
                unset($data['CapDrop']);
            } elseif (array_key_exists('CapDrop', $data) && null === $data['CapDrop']) {
                $object->setCapDrop(null);
            }
            if (array_key_exists('CgroupnsMode', $data) && null !== $data['CgroupnsMode']) {
                $object->setCgroupnsMode($data['CgroupnsMode']);
                unset($data['CgroupnsMode']);
            } elseif (array_key_exists('CgroupnsMode', $data) && null === $data['CgroupnsMode']) {
                $object->setCgroupnsMode(null);
            }
            if (array_key_exists('Dns', $data) && null !== $data['Dns']) {
                $values_17 = [];
                foreach ($data['Dns'] as $value_17) {
                    $values_17[] = $value_17;
                }
                $object->setDns($values_17);
                unset($data['Dns']);
            } elseif (array_key_exists('Dns', $data) && null === $data['Dns']) {
                $object->setDns(null);
            }
            if (array_key_exists('DnsOptions', $data) && null !== $data['DnsOptions']) {
                $values_18 = [];
                foreach ($data['DnsOptions'] as $value_18) {
                    $values_18[] = $value_18;
                }
                $object->setDnsOptions($values_18);
                unset($data['DnsOptions']);
            } elseif (array_key_exists('DnsOptions', $data) && null === $data['DnsOptions']) {
                $object->setDnsOptions(null);
            }
            if (array_key_exists('DnsSearch', $data) && null !== $data['DnsSearch']) {
                $values_19 = [];
                foreach ($data['DnsSearch'] as $value_19) {
                    $values_19[] = $value_19;
                }
                $object->setDnsSearch($values_19);
                unset($data['DnsSearch']);
            } elseif (array_key_exists('DnsSearch', $data) && null === $data['DnsSearch']) {
                $object->setDnsSearch(null);
            }
            if (array_key_exists('ExtraHosts', $data) && null !== $data['ExtraHosts']) {
                $values_20 = [];
                foreach ($data['ExtraHosts'] as $value_20) {
                    $values_20[] = $value_20;
                }
                $object->setExtraHosts($values_20);
                unset($data['ExtraHosts']);
            } elseif (array_key_exists('ExtraHosts', $data) && null === $data['ExtraHosts']) {
                $object->setExtraHosts(null);
            }
            if (array_key_exists('GroupAdd', $data) && null !== $data['GroupAdd']) {
                $values_21 = [];
                foreach ($data['GroupAdd'] as $value_21) {
                    $values_21[] = $value_21;
                }
                $object->setGroupAdd($values_21);
                unset($data['GroupAdd']);
            } elseif (array_key_exists('GroupAdd', $data) && null === $data['GroupAdd']) {
                $object->setGroupAdd(null);
            }
            if (array_key_exists('IpcMode', $data) && null !== $data['IpcMode']) {
                $object->setIpcMode($data['IpcMode']);
                unset($data['IpcMode']);
            } elseif (array_key_exists('IpcMode', $data) && null === $data['IpcMode']) {
                $object->setIpcMode(null);
            }
            if (array_key_exists('Cgroup', $data)) {
                $object->setCgroup($data['Cgroup']);
                unset($data['Cgroup']);
            }
            if (array_key_exists('Links', $data) && null !== $data['Links']) {
                $values_22 = [];
                foreach ($data['Links'] as $value_22) {
                    $values_22[] = $value_22;
                }
                $object->setLinks($values_22);
                unset($data['Links']);
            } elseif (array_key_exists('Links', $data) && null === $data['Links']) {
                $object->setLinks(null);
            }
            if (array_key_exists('OomScoreAdj', $data)) {
                $object->setOomScoreAdj($data['OomScoreAdj']);
                unset($data['OomScoreAdj']);
            }
            if (array_key_exists('PidMode', $data)) {
                $object->setPidMode($data['PidMode']);
                unset($data['PidMode']);
            }
            if (array_key_exists('Privileged', $data)) {
                $object->setPrivileged($data['Privileged']);
                unset($data['Privileged']);
            }
            if (array_key_exists('PublishAllPorts', $data)) {
                $object->setPublishAllPorts($data['PublishAllPorts']);
                unset($data['PublishAllPorts']);
            }
            if (array_key_exists('ReadonlyRootfs', $data)) {
                $object->setReadonlyRootfs($data['ReadonlyRootfs']);
                unset($data['ReadonlyRootfs']);
            }
            if (array_key_exists('SecurityOpt', $data) && null !== $data['SecurityOpt']) {
                $values_23 = [];
                foreach ($data['SecurityOpt'] as $value_23) {
                    $values_23[] = $value_23;
                }
                $object->setSecurityOpt($values_23);
                unset($data['SecurityOpt']);
            } elseif (array_key_exists('SecurityOpt', $data) && null === $data['SecurityOpt']) {
                $object->setSecurityOpt(null);
            }
            if (array_key_exists('StorageOpt', $data)) {
                $values_24 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['StorageOpt'] as $key_2 => $value_24) {
                    $values_24[$key_2] = $value_24;
                }
                $object->setStorageOpt($values_24);
                unset($data['StorageOpt']);
            }
            if (array_key_exists('Tmpfs', $data)) {
                $values_25 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Tmpfs'] as $key_3 => $value_25) {
                    $values_25[$key_3] = $value_25;
                }
                $object->setTmpfs($values_25);
                unset($data['Tmpfs']);
            }
            if (array_key_exists('UTSMode', $data)) {
                $object->setUTSMode($data['UTSMode']);
                unset($data['UTSMode']);
            }
            if (array_key_exists('UsernsMode', $data)) {
                $object->setUsernsMode($data['UsernsMode']);
                unset($data['UsernsMode']);
            }
            if (array_key_exists('ShmSize', $data)) {
                $object->setShmSize($data['ShmSize']);
                unset($data['ShmSize']);
            }
            if (array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
                $values_26 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Sysctls'] as $key_4 => $value_26) {
                    $values_26[$key_4] = $value_26;
                }
                $object->setSysctls($values_26);
                unset($data['Sysctls']);
            } elseif (array_key_exists('Sysctls', $data) && null === $data['Sysctls']) {
                $object->setSysctls(null);
            }
            if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
                $object->setRuntime($data['Runtime']);
                unset($data['Runtime']);
            } elseif (array_key_exists('Runtime', $data) && null === $data['Runtime']) {
                $object->setRuntime(null);
            }
            if (array_key_exists('Isolation', $data)) {
                $object->setIsolation($data['Isolation']);
                unset($data['Isolation']);
            }
            if (array_key_exists('MaskedPaths', $data)) {
                $values_27 = [];
                foreach ($data['MaskedPaths'] ?? [] as $value_27) {
                    $values_27[] = $value_27;
                }
                $object->setMaskedPaths($values_27);
                unset($data['MaskedPaths']);
            }
            if (array_key_exists('ReadonlyPaths', $data)) {
                $values_28 = [];
                foreach ($data['ReadonlyPaths'] ?? [] as $value_28) {
                    $values_28[] = $value_28;
                }
                $object->setReadonlyPaths($values_28);
                unset($data['ReadonlyPaths']);
            }
            foreach ($data as $key_5 => $value_29) {
                if (preg_match('/.*/', (string) $key_5)) {
                    $object[$key_5] = $value_29;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('cpuShares') && null !== $object->getCpuShares()) {
                $data['CpuShares'] = $object->getCpuShares();
            }
            if ($object->isInitialized('memory') && null !== $object->getMemory()) {
                $data['Memory'] = $object->getMemory();
            }
            if ($object->isInitialized('cgroupParent') && null !== $object->getCgroupParent()) {
                $data['CgroupParent'] = $object->getCgroupParent();
            }
            if ($object->isInitialized('blkioWeight') && null !== $object->getBlkioWeight()) {
                $data['BlkioWeight'] = $object->getBlkioWeight();
            }
            if ($object->isInitialized('blkioWeightDevice') && null !== $object->getBlkioWeightDevice()) {
                $values = [];
                foreach ($object->getBlkioWeightDevice() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['BlkioWeightDevice'] = $values;
            }
            if ($object->isInitialized('blkioDeviceReadBps') && null !== $object->getBlkioDeviceReadBps()) {
                $values_1 = [];
                foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['BlkioDeviceReadBps'] = $values_1;
            }
            if ($object->isInitialized('blkioDeviceWriteBps') && null !== $object->getBlkioDeviceWriteBps()) {
                $values_2 = [];
                foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['BlkioDeviceWriteBps'] = $values_2;
            }
            if ($object->isInitialized('blkioDeviceReadIOps') && null !== $object->getBlkioDeviceReadIOps()) {
                $values_3 = [];
                foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BlkioDeviceReadIOps'] = $values_3;
            }
            if ($object->isInitialized('blkioDeviceWriteIOps') && null !== $object->getBlkioDeviceWriteIOps()) {
                $values_4 = [];
                foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['BlkioDeviceWriteIOps'] = $values_4;
            }
            if ($object->isInitialized('cpuPeriod') && null !== $object->getCpuPeriod()) {
                $data['CpuPeriod'] = $object->getCpuPeriod();
            }
            if ($object->isInitialized('cpuQuota') && null !== $object->getCpuQuota()) {
                $data['CpuQuota'] = $object->getCpuQuota();
            }
            if ($object->isInitialized('cpuRealtimePeriod') && null !== $object->getCpuRealtimePeriod()) {
                $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
            }
            if ($object->isInitialized('cpuRealtimeRuntime') && null !== $object->getCpuRealtimeRuntime()) {
                $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
            }
            if ($object->isInitialized('cpusetCpus') && null !== $object->getCpusetCpus()) {
                $data['CpusetCpus'] = $object->getCpusetCpus();
            }
            if ($object->isInitialized('cpusetMems') && null !== $object->getCpusetMems()) {
                $data['CpusetMems'] = $object->getCpusetMems();
            }
            if ($object->isInitialized('devices') && null !== $object->getDevices()) {
                $values_5 = [];
                foreach ($object->getDevices() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['Devices'] = $values_5;
            }
            if ($object->isInitialized('deviceCgroupRules') && null !== $object->getDeviceCgroupRules()) {
                $values_6 = [];
                foreach ($object->getDeviceCgroupRules() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['DeviceCgroupRules'] = $values_6;
            }
            if ($object->isInitialized('deviceRequests') && null !== $object->getDeviceRequests()) {
                $values_7 = [];
                foreach ($object->getDeviceRequests() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['DeviceRequests'] = $values_7;
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('memoryReservation') && null !== $object->getMemoryReservation()) {
                $data['MemoryReservation'] = $object->getMemoryReservation();
            }
            if ($object->isInitialized('memorySwap') && null !== $object->getMemorySwap()) {
                $data['MemorySwap'] = $object->getMemorySwap();
            }
            if ($object->isInitialized('memorySwappiness') && null !== $object->getMemorySwappiness()) {
                $data['MemorySwappiness'] = $object->getMemorySwappiness();
            }
            if ($object->isInitialized('nanoCpus') && null !== $object->getNanoCpus()) {
                $data['NanoCpus'] = $object->getNanoCpus();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('init') && null !== $object->getInit()) {
                $data['Init'] = $object->getInit();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('ulimits') && null !== $object->getUlimits()) {
                $values_8 = [];
                foreach ($object->getUlimits() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['Ulimits'] = $values_8;
            }
            if ($object->isInitialized('cpuCount') && null !== $object->getCpuCount()) {
                $data['CpuCount'] = $object->getCpuCount();
            }
            if ($object->isInitialized('cpuPercent') && null !== $object->getCpuPercent()) {
                $data['CpuPercent'] = $object->getCpuPercent();
            }
            if ($object->isInitialized('iOMaximumIOps') && null !== $object->getIOMaximumIOps()) {
                $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
            }
            if ($object->isInitialized('iOMaximumBandwidth') && null !== $object->getIOMaximumBandwidth()) {
                $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
            }
            if ($object->isInitialized('binds') && null !== $object->getBinds()) {
                $values_9 = [];
                foreach ($object->getBinds() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['Binds'] = $values_9;
            }
            if ($object->isInitialized('containerIDFile') && null !== $object->getContainerIDFile()) {
                $data['ContainerIDFile'] = $object->getContainerIDFile();
            }
            if ($object->isInitialized('logConfig') && null !== $object->getLogConfig()) {
                $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkMode') && null !== $object->getNetworkMode()) {
                $data['NetworkMode'] = $object->getNetworkMode();
            }
            if ($object->isInitialized('portBindings') && null !== $object->getPortBindings()) {
                $values_10 = [];
                foreach ($object->getPortBindings() as $key => $value_10) {
                    $values_10[$key] = $value_10;
                }
                $data['PortBindings'] = $values_10;
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('autoRemove') && null !== $object->getAutoRemove()) {
                $data['AutoRemove'] = $object->getAutoRemove();
            }
            if ($object->isInitialized('volumeDriver') && null !== $object->getVolumeDriver()) {
                $data['VolumeDriver'] = $object->getVolumeDriver();
            }
            if ($object->isInitialized('volumesFrom') && null !== $object->getVolumesFrom()) {
                $values_11 = [];
                foreach ($object->getVolumesFrom() as $value_11) {
                    $values_11[] = $value_11;
                }
                $data['VolumesFrom'] = $values_11;
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_12 = [];
                foreach ($object->getMounts() as $value_12) {
                    $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
                }
                $data['Mounts'] = $values_12;
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values_13 = [];
                foreach ($object->getConsoleSize() as $value_13) {
                    $values_13[] = $value_13;
                }
                $data['ConsoleSize'] = $values_13;
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_14 = [];
                foreach ($object->getAnnotations() as $key_1 => $value_14) {
                    $values_14[$key_1] = $value_14;
                }
                $data['Annotations'] = $values_14;
            }
            if ($object->isInitialized('capAdd') && null !== $object->getCapAdd()) {
                $values_15 = [];
                foreach ($object->getCapAdd() as $value_15) {
                    $values_15[] = $value_15;
                }
                $data['CapAdd'] = $values_15;
            }
            if ($object->isInitialized('capDrop') && null !== $object->getCapDrop()) {
                $values_16 = [];
                foreach ($object->getCapDrop() as $value_16) {
                    $values_16[] = $value_16;
                }
                $data['CapDrop'] = $values_16;
            }
            if ($object->isInitialized('cgroupnsMode') && null !== $object->getCgroupnsMode()) {
                $data['CgroupnsMode'] = $object->getCgroupnsMode();
            }
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $values_17 = [];
                foreach ($object->getDns() as $value_17) {
                    $values_17[] = $value_17;
                }
                $data['Dns'] = $values_17;
            }
            if ($object->isInitialized('dnsOptions') && null !== $object->getDnsOptions()) {
                $values_18 = [];
                foreach ($object->getDnsOptions() as $value_18) {
                    $values_18[] = $value_18;
                }
                $data['DnsOptions'] = $values_18;
            }
            if ($object->isInitialized('dnsSearch') && null !== $object->getDnsSearch()) {
                $values_19 = [];
                foreach ($object->getDnsSearch() as $value_19) {
                    $values_19[] = $value_19;
                }
                $data['DnsSearch'] = $values_19;
            }
            if ($object->isInitialized('extraHosts') && null !== $object->getExtraHosts()) {
                $values_20 = [];
                foreach ($object->getExtraHosts() as $value_20) {
                    $values_20[] = $value_20;
                }
                $data['ExtraHosts'] = $values_20;
            }
            if ($object->isInitialized('groupAdd') && null !== $object->getGroupAdd()) {
                $values_21 = [];
                foreach ($object->getGroupAdd() as $value_21) {
                    $values_21[] = $value_21;
                }
                $data['GroupAdd'] = $values_21;
            }
            if ($object->isInitialized('ipcMode') && null !== $object->getIpcMode()) {
                $data['IpcMode'] = $object->getIpcMode();
            }
            if ($object->isInitialized('cgroup') && null !== $object->getCgroup()) {
                $data['Cgroup'] = $object->getCgroup();
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values_22 = [];
                foreach ($object->getLinks() as $value_22) {
                    $values_22[] = $value_22;
                }
                $data['Links'] = $values_22;
            }
            if ($object->isInitialized('oomScoreAdj') && null !== $object->getOomScoreAdj()) {
                $data['OomScoreAdj'] = $object->getOomScoreAdj();
            }
            if ($object->isInitialized('pidMode') && null !== $object->getPidMode()) {
                $data['PidMode'] = $object->getPidMode();
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('publishAllPorts') && null !== $object->getPublishAllPorts()) {
                $data['PublishAllPorts'] = $object->getPublishAllPorts();
            }
            if ($object->isInitialized('readonlyRootfs') && null !== $object->getReadonlyRootfs()) {
                $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
            }
            if ($object->isInitialized('securityOpt') && null !== $object->getSecurityOpt()) {
                $values_23 = [];
                foreach ($object->getSecurityOpt() as $value_23) {
                    $values_23[] = $value_23;
                }
                $data['SecurityOpt'] = $values_23;
            }
            if ($object->isInitialized('storageOpt') && null !== $object->getStorageOpt()) {
                $values_24 = [];
                foreach ($object->getStorageOpt() as $key_2 => $value_24) {
                    $values_24[$key_2] = $value_24;
                }
                $data['StorageOpt'] = $values_24;
            }
            if ($object->isInitialized('tmpfs') && null !== $object->getTmpfs()) {
                $values_25 = [];
                foreach ($object->getTmpfs() as $key_3 => $value_25) {
                    $values_25[$key_3] = $value_25;
                }
                $data['Tmpfs'] = $values_25;
            }
            if ($object->isInitialized('uTSMode') && null !== $object->getUTSMode()) {
                $data['UTSMode'] = $object->getUTSMode();
            }
            if ($object->isInitialized('usernsMode') && null !== $object->getUsernsMode()) {
                $data['UsernsMode'] = $object->getUsernsMode();
            }
            if ($object->isInitialized('shmSize') && null !== $object->getShmSize()) {
                $data['ShmSize'] = $object->getShmSize();
            }
            if ($object->isInitialized('sysctls') && null !== $object->getSysctls()) {
                $values_26 = [];
                foreach ($object->getSysctls() as $key_4 => $value_26) {
                    $values_26[$key_4] = $value_26;
                }
                $data['Sysctls'] = $values_26;
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
                $data['Isolation'] = $object->getIsolation();
            }
            if ($object->isInitialized('maskedPaths') && null !== $object->getMaskedPaths()) {
                $values_27 = [];
                foreach ($object->getMaskedPaths() as $value_27) {
                    $values_27[] = $value_27;
                }
                $data['MaskedPaths'] = $values_27;
            }
            if ($object->isInitialized('readonlyPaths') && null !== $object->getReadonlyPaths()) {
                $values_28 = [];
                foreach ($object->getReadonlyPaths() as $value_28) {
                    $values_28[] = $value_28;
                }
                $data['ReadonlyPaths'] = $values_28;
            }
            foreach ($object as $key_5 => $value_29) {
                if (preg_match('/.*/', (string) $key_5)) {
                    $data[$key_5] = $value_29;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\HostConfig::class => true];
        }
    }
} else {
    class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\HostConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\HostConfig::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\HostConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('CpuShares', $data)) {
                $object->setCpuShares($data['CpuShares']);
                unset($data['CpuShares']);
            }
            if (array_key_exists('Memory', $data)) {
                $object->setMemory($data['Memory']);
                unset($data['Memory']);
            }
            if (array_key_exists('CgroupParent', $data)) {
                $object->setCgroupParent($data['CgroupParent']);
                unset($data['CgroupParent']);
            }
            if (array_key_exists('BlkioWeight', $data)) {
                $object->setBlkioWeight($data['BlkioWeight']);
                unset($data['BlkioWeight']);
            }
            if (array_key_exists('BlkioWeightDevice', $data) && null !== $data['BlkioWeightDevice']) {
                $values = [];
                foreach ($data['BlkioWeightDevice'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
                }
                $object->setBlkioWeightDevice($values);
                unset($data['BlkioWeightDevice']);
            } elseif (array_key_exists('BlkioWeightDevice', $data) && null === $data['BlkioWeightDevice']) {
                $object->setBlkioWeightDevice(null);
            }
            if (array_key_exists('BlkioDeviceReadBps', $data) && null !== $data['BlkioDeviceReadBps']) {
                $values_1 = [];
                foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadBps($values_1);
                unset($data['BlkioDeviceReadBps']);
            } elseif (array_key_exists('BlkioDeviceReadBps', $data) && null === $data['BlkioDeviceReadBps']) {
                $object->setBlkioDeviceReadBps(null);
            }
            if (array_key_exists('BlkioDeviceWriteBps', $data) && null !== $data['BlkioDeviceWriteBps']) {
                $values_2 = [];
                foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteBps($values_2);
                unset($data['BlkioDeviceWriteBps']);
            } elseif (array_key_exists('BlkioDeviceWriteBps', $data) && null === $data['BlkioDeviceWriteBps']) {
                $object->setBlkioDeviceWriteBps(null);
            }
            if (array_key_exists('BlkioDeviceReadIOps', $data) && null !== $data['BlkioDeviceReadIOps']) {
                $values_3 = [];
                foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadIOps($values_3);
                unset($data['BlkioDeviceReadIOps']);
            } elseif (array_key_exists('BlkioDeviceReadIOps', $data) && null === $data['BlkioDeviceReadIOps']) {
                $object->setBlkioDeviceReadIOps(null);
            }
            if (array_key_exists('BlkioDeviceWriteIOps', $data) && null !== $data['BlkioDeviceWriteIOps']) {
                $values_4 = [];
                foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteIOps($values_4);
                unset($data['BlkioDeviceWriteIOps']);
            } elseif (array_key_exists('BlkioDeviceWriteIOps', $data) && null === $data['BlkioDeviceWriteIOps']) {
                $object->setBlkioDeviceWriteIOps(null);
            }
            if (array_key_exists('CpuPeriod', $data)) {
                $object->setCpuPeriod($data['CpuPeriod']);
                unset($data['CpuPeriod']);
            }
            if (array_key_exists('CpuQuota', $data) && null !== $data['CpuQuota']) {
                $object->setCpuQuota($data['CpuQuota']);
                unset($data['CpuQuota']);
            } elseif (array_key_exists('CpuQuota', $data) && null === $data['CpuQuota']) {
                $object->setCpuQuota(null);
            }
            if (array_key_exists('CpuRealtimePeriod', $data) && null !== $data['CpuRealtimePeriod']) {
                $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
                unset($data['CpuRealtimePeriod']);
            } elseif (array_key_exists('CpuRealtimePeriod', $data) && null === $data['CpuRealtimePeriod']) {
                $object->setCpuRealtimePeriod(null);
            }
            if (array_key_exists('CpuRealtimeRuntime', $data) && null !== $data['CpuRealtimeRuntime']) {
                $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
                unset($data['CpuRealtimeRuntime']);
            } elseif (array_key_exists('CpuRealtimeRuntime', $data) && null === $data['CpuRealtimeRuntime']) {
                $object->setCpuRealtimeRuntime(null);
            }
            if (array_key_exists('CpusetCpus', $data) && null !== $data['CpusetCpus']) {
                $object->setCpusetCpus($data['CpusetCpus']);
                unset($data['CpusetCpus']);
            } elseif (array_key_exists('CpusetCpus', $data) && null === $data['CpusetCpus']) {
                $object->setCpusetCpus(null);
            }
            if (array_key_exists('CpusetMems', $data)) {
                $object->setCpusetMems($data['CpusetMems']);
                unset($data['CpusetMems']);
            }
            if (array_key_exists('Devices', $data) && null !== $data['Devices']) {
                $values_5 = [];
                foreach ($data['Devices'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class, 'json', $context);
                }
                $object->setDevices($values_5);
                unset($data['Devices']);
            } elseif (array_key_exists('Devices', $data) && null === $data['Devices']) {
                $object->setDevices(null);
            }
            if (array_key_exists('DeviceCgroupRules', $data) && null !== $data['DeviceCgroupRules']) {
                $values_6 = [];
                foreach ($data['DeviceCgroupRules'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setDeviceCgroupRules($values_6);
                unset($data['DeviceCgroupRules']);
            } elseif (array_key_exists('DeviceCgroupRules', $data) && null === $data['DeviceCgroupRules']) {
                $object->setDeviceCgroupRules(null);
            }
            if (array_key_exists('DeviceRequests', $data) && null !== $data['DeviceRequests']) {
                $values_7 = [];
                foreach ($data['DeviceRequests'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class, 'json', $context);
                }
                $object->setDeviceRequests($values_7);
                unset($data['DeviceRequests']);
            } elseif (array_key_exists('DeviceRequests', $data) && null === $data['DeviceRequests']) {
                $object->setDeviceRequests(null);
            }
            if (array_key_exists('KernelMemoryTCP', $data)) {
                $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
                unset($data['KernelMemoryTCP']);
            }
            if (array_key_exists('MemoryReservation', $data)) {
                $object->setMemoryReservation($data['MemoryReservation']);
                unset($data['MemoryReservation']);
            }
            if (array_key_exists('MemorySwap', $data)) {
                $object->setMemorySwap($data['MemorySwap']);
                unset($data['MemorySwap']);
            }
            if (array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
                $object->setMemorySwappiness($data['MemorySwappiness']);
                unset($data['MemorySwappiness']);
            } elseif (array_key_exists('MemorySwappiness', $data) && null === $data['MemorySwappiness']) {
                $object->setMemorySwappiness(null);
            }
            if (array_key_exists('NanoCpus', $data)) {
                $object->setNanoCpus($data['NanoCpus']);
                unset($data['NanoCpus']);
            }
            if (array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
                $object->setOomKillDisable($data['OomKillDisable']);
                unset($data['OomKillDisable']);
            } elseif (array_key_exists('OomKillDisable', $data) && null === $data['OomKillDisable']) {
                $object->setOomKillDisable(null);
            }
            if (array_key_exists('Init', $data) && null !== $data['Init']) {
                $object->setInit($data['Init']);
                unset($data['Init']);
            } elseif (array_key_exists('Init', $data) && null === $data['Init']) {
                $object->setInit(null);
            }
            if (array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
                $object->setPidsLimit($data['PidsLimit']);
                unset($data['PidsLimit']);
            } elseif (array_key_exists('PidsLimit', $data) && null === $data['PidsLimit']) {
                $object->setPidsLimit(null);
            }
            if (array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
                $values_8 = [];
                foreach ($data['Ulimits'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, \WebProject\DockerApi\Library\Generated\Model\ResourcesUlimitsItem::class, 'json', $context);
                }
                $object->setUlimits($values_8);
                unset($data['Ulimits']);
            } elseif (array_key_exists('Ulimits', $data) && null === $data['Ulimits']) {
                $object->setUlimits(null);
            }
            if (array_key_exists('CpuCount', $data)) {
                $object->setCpuCount($data['CpuCount']);
                unset($data['CpuCount']);
            }
            if (array_key_exists('CpuPercent', $data)) {
                $object->setCpuPercent($data['CpuPercent']);
                unset($data['CpuPercent']);
            }
            if (array_key_exists('IOMaximumIOps', $data)) {
                $object->setIOMaximumIOps($data['IOMaximumIOps']);
                unset($data['IOMaximumIOps']);
            }
            if (array_key_exists('IOMaximumBandwidth', $data)) {
                $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
                unset($data['IOMaximumBandwidth']);
            }
            if (array_key_exists('Binds', $data) && null !== $data['Binds']) {
                $values_9 = [];
                foreach ($data['Binds'] as $value_9) {
                    $values_9[] = $value_9;
                }
                $object->setBinds($values_9);
                unset($data['Binds']);
            } elseif (array_key_exists('Binds', $data) && null === $data['Binds']) {
                $object->setBinds(null);
            }
            if (array_key_exists('ContainerIDFile', $data)) {
                $object->setContainerIDFile($data['ContainerIDFile']);
                unset($data['ContainerIDFile']);
            }
            if (array_key_exists('LogConfig', $data)) {
                $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfigLogConfig::class, 'json', $context));
                unset($data['LogConfig']);
            }
            if (array_key_exists('NetworkMode', $data)) {
                $object->setNetworkMode($data['NetworkMode']);
                unset($data['NetworkMode']);
            }
            if (array_key_exists('PortBindings', $data) && null !== $data['PortBindings']) {
                $values_10 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PortBindings'] as $key => $value_10) {
                    $values_10[$key] = $value_10;
                }
                $object->setPortBindings($values_10);
                unset($data['PortBindings']);
            } elseif (array_key_exists('PortBindings', $data) && null === $data['PortBindings']) {
                $object->setPortBindings(null);
            }
            if (array_key_exists('RestartPolicy', $data)) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class, 'json', $context));
                unset($data['RestartPolicy']);
            }
            if (array_key_exists('AutoRemove', $data)) {
                $object->setAutoRemove($data['AutoRemove']);
                unset($data['AutoRemove']);
            }
            if (array_key_exists('VolumeDriver', $data)) {
                $object->setVolumeDriver($data['VolumeDriver']);
                unset($data['VolumeDriver']);
            }
            if (array_key_exists('VolumesFrom', $data) && null !== $data['VolumesFrom']) {
                $values_11 = [];
                foreach ($data['VolumesFrom'] as $value_11) {
                    $values_11[] = $value_11;
                }
                $object->setVolumesFrom($values_11);
                unset($data['VolumesFrom']);
            } elseif (array_key_exists('VolumesFrom', $data) && null === $data['VolumesFrom']) {
                $object->setVolumesFrom(null);
            }
            if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
                $values_12 = [];
                foreach ($data['Mounts'] as $value_12) {
                    $values_12[] = $this->denormalizer->denormalize($value_12, \WebProject\DockerApi\Library\Generated\Model\Mount::class, 'json', $context);
                }
                $object->setMounts($values_12);
                unset($data['Mounts']);
            } elseif (array_key_exists('Mounts', $data) && null === $data['Mounts']) {
                $object->setMounts(null);
            }
            if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
                $values_13 = [];
                foreach ($data['ConsoleSize'] as $value_13) {
                    $values_13[] = $value_13;
                }
                $object->setConsoleSize($values_13);
                unset($data['ConsoleSize']);
            } elseif (array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
                $object->setConsoleSize(null);
            }
            if (array_key_exists('Annotations', $data)) {
                $values_14 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Annotations'] as $key_1 => $value_14) {
                    $values_14[$key_1] = $value_14;
                }
                $object->setAnnotations($values_14);
                unset($data['Annotations']);
            }
            if (array_key_exists('CapAdd', $data) && null !== $data['CapAdd']) {
                $values_15 = [];
                foreach ($data['CapAdd'] as $value_15) {
                    $values_15[] = $value_15;
                }
                $object->setCapAdd($values_15);
                unset($data['CapAdd']);
            } elseif (array_key_exists('CapAdd', $data) && null === $data['CapAdd']) {
                $object->setCapAdd(null);
            }
            if (array_key_exists('CapDrop', $data) && null !== $data['CapDrop']) {
                $values_16 = [];
                foreach ($data['CapDrop'] as $value_16) {
                    $values_16[] = $value_16;
                }
                $object->setCapDrop($values_16);
                unset($data['CapDrop']);
            } elseif (array_key_exists('CapDrop', $data) && null === $data['CapDrop']) {
                $object->setCapDrop(null);
            }
            if (array_key_exists('CgroupnsMode', $data) && null !== $data['CgroupnsMode']) {
                $object->setCgroupnsMode($data['CgroupnsMode']);
                unset($data['CgroupnsMode']);
            } elseif (array_key_exists('CgroupnsMode', $data) && null === $data['CgroupnsMode']) {
                $object->setCgroupnsMode(null);
            }
            if (array_key_exists('Dns', $data) && null !== $data['Dns']) {
                $values_17 = [];
                foreach ($data['Dns'] as $value_17) {
                    $values_17[] = $value_17;
                }
                $object->setDns($values_17);
                unset($data['Dns']);
            } elseif (array_key_exists('Dns', $data) && null === $data['Dns']) {
                $object->setDns(null);
            }
            if (array_key_exists('DnsOptions', $data) && null !== $data['DnsOptions']) {
                $values_18 = [];
                foreach ($data['DnsOptions'] as $value_18) {
                    $values_18[] = $value_18;
                }
                $object->setDnsOptions($values_18);
                unset($data['DnsOptions']);
            } elseif (array_key_exists('DnsOptions', $data) && null === $data['DnsOptions']) {
                $object->setDnsOptions(null);
            }
            if (array_key_exists('DnsSearch', $data) && null !== $data['DnsSearch']) {
                $values_19 = [];
                foreach ($data['DnsSearch'] as $value_19) {
                    $values_19[] = $value_19;
                }
                $object->setDnsSearch($values_19);
                unset($data['DnsSearch']);
            } elseif (array_key_exists('DnsSearch', $data) && null === $data['DnsSearch']) {
                $object->setDnsSearch(null);
            }
            if (array_key_exists('ExtraHosts', $data) && null !== $data['ExtraHosts']) {
                $values_20 = [];
                foreach ($data['ExtraHosts'] as $value_20) {
                    $values_20[] = $value_20;
                }
                $object->setExtraHosts($values_20);
                unset($data['ExtraHosts']);
            } elseif (array_key_exists('ExtraHosts', $data) && null === $data['ExtraHosts']) {
                $object->setExtraHosts(null);
            }
            if (array_key_exists('GroupAdd', $data) && null !== $data['GroupAdd']) {
                $values_21 = [];
                foreach ($data['GroupAdd'] as $value_21) {
                    $values_21[] = $value_21;
                }
                $object->setGroupAdd($values_21);
                unset($data['GroupAdd']);
            } elseif (array_key_exists('GroupAdd', $data) && null === $data['GroupAdd']) {
                $object->setGroupAdd(null);
            }
            if (array_key_exists('IpcMode', $data) && null !== $data['IpcMode']) {
                $object->setIpcMode($data['IpcMode']);
                unset($data['IpcMode']);
            } elseif (array_key_exists('IpcMode', $data) && null === $data['IpcMode']) {
                $object->setIpcMode(null);
            }
            if (array_key_exists('Cgroup', $data)) {
                $object->setCgroup($data['Cgroup']);
                unset($data['Cgroup']);
            }
            if (array_key_exists('Links', $data) && null !== $data['Links']) {
                $values_22 = [];
                foreach ($data['Links'] as $value_22) {
                    $values_22[] = $value_22;
                }
                $object->setLinks($values_22);
                unset($data['Links']);
            } elseif (array_key_exists('Links', $data) && null === $data['Links']) {
                $object->setLinks(null);
            }
            if (array_key_exists('OomScoreAdj', $data)) {
                $object->setOomScoreAdj($data['OomScoreAdj']);
                unset($data['OomScoreAdj']);
            }
            if (array_key_exists('PidMode', $data)) {
                $object->setPidMode($data['PidMode']);
                unset($data['PidMode']);
            }
            if (array_key_exists('Privileged', $data)) {
                $object->setPrivileged($data['Privileged']);
                unset($data['Privileged']);
            }
            if (array_key_exists('PublishAllPorts', $data)) {
                $object->setPublishAllPorts($data['PublishAllPorts']);
                unset($data['PublishAllPorts']);
            }
            if (array_key_exists('ReadonlyRootfs', $data)) {
                $object->setReadonlyRootfs($data['ReadonlyRootfs']);
                unset($data['ReadonlyRootfs']);
            }
            if (array_key_exists('SecurityOpt', $data) && null !== $data['SecurityOpt']) {
                $values_23 = [];
                foreach ($data['SecurityOpt'] as $value_23) {
                    $values_23[] = $value_23;
                }
                $object->setSecurityOpt($values_23);
                unset($data['SecurityOpt']);
            } elseif (array_key_exists('SecurityOpt', $data) && null === $data['SecurityOpt']) {
                $object->setSecurityOpt(null);
            }
            if (array_key_exists('StorageOpt', $data)) {
                $values_24 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['StorageOpt'] as $key_2 => $value_24) {
                    $values_24[$key_2] = $value_24;
                }
                $object->setStorageOpt($values_24);
                unset($data['StorageOpt']);
            }
            if (array_key_exists('Tmpfs', $data)) {
                $values_25 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Tmpfs'] as $key_3 => $value_25) {
                    $values_25[$key_3] = $value_25;
                }
                $object->setTmpfs($values_25);
                unset($data['Tmpfs']);
            }
            if (array_key_exists('UTSMode', $data)) {
                $object->setUTSMode($data['UTSMode']);
                unset($data['UTSMode']);
            }
            if (array_key_exists('UsernsMode', $data)) {
                $object->setUsernsMode($data['UsernsMode']);
                unset($data['UsernsMode']);
            }
            if (array_key_exists('ShmSize', $data)) {
                $object->setShmSize($data['ShmSize']);
                unset($data['ShmSize']);
            }
            if (array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
                $values_26 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Sysctls'] as $key_4 => $value_26) {
                    $values_26[$key_4] = $value_26;
                }
                $object->setSysctls($values_26);
                unset($data['Sysctls']);
            } elseif (array_key_exists('Sysctls', $data) && null === $data['Sysctls']) {
                $object->setSysctls(null);
            }
            if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
                $object->setRuntime($data['Runtime']);
                unset($data['Runtime']);
            } elseif (array_key_exists('Runtime', $data) && null === $data['Runtime']) {
                $object->setRuntime(null);
            }
            if (array_key_exists('Isolation', $data)) {
                $object->setIsolation($data['Isolation']);
                unset($data['Isolation']);
            }
            if (array_key_exists('MaskedPaths', $data)) {
                $values_27 = [];
                foreach ($data['MaskedPaths'] as $value_27) {
                    $values_27[] = $value_27;
                }
                $object->setMaskedPaths($values_27);
                unset($data['MaskedPaths']);
            }
            if (array_key_exists('ReadonlyPaths', $data)) {
                $values_28 = [];
                foreach ($data['ReadonlyPaths'] as $value_28) {
                    $values_28[] = $value_28;
                }
                $object->setReadonlyPaths($values_28);
                unset($data['ReadonlyPaths']);
            }
            foreach ($data as $key_5 => $value_29) {
                if (preg_match('/.*/', (string) $key_5)) {
                    $object[$key_5] = $value_29;
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
            if ($object->isInitialized('cpuShares') && null !== $object->getCpuShares()) {
                $data['CpuShares'] = $object->getCpuShares();
            }
            if ($object->isInitialized('memory') && null !== $object->getMemory()) {
                $data['Memory'] = $object->getMemory();
            }
            if ($object->isInitialized('cgroupParent') && null !== $object->getCgroupParent()) {
                $data['CgroupParent'] = $object->getCgroupParent();
            }
            if ($object->isInitialized('blkioWeight') && null !== $object->getBlkioWeight()) {
                $data['BlkioWeight'] = $object->getBlkioWeight();
            }
            if ($object->isInitialized('blkioWeightDevice') && null !== $object->getBlkioWeightDevice()) {
                $values = [];
                foreach ($object->getBlkioWeightDevice() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['BlkioWeightDevice'] = $values;
            }
            if ($object->isInitialized('blkioDeviceReadBps') && null !== $object->getBlkioDeviceReadBps()) {
                $values_1 = [];
                foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['BlkioDeviceReadBps'] = $values_1;
            }
            if ($object->isInitialized('blkioDeviceWriteBps') && null !== $object->getBlkioDeviceWriteBps()) {
                $values_2 = [];
                foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['BlkioDeviceWriteBps'] = $values_2;
            }
            if ($object->isInitialized('blkioDeviceReadIOps') && null !== $object->getBlkioDeviceReadIOps()) {
                $values_3 = [];
                foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BlkioDeviceReadIOps'] = $values_3;
            }
            if ($object->isInitialized('blkioDeviceWriteIOps') && null !== $object->getBlkioDeviceWriteIOps()) {
                $values_4 = [];
                foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['BlkioDeviceWriteIOps'] = $values_4;
            }
            if ($object->isInitialized('cpuPeriod') && null !== $object->getCpuPeriod()) {
                $data['CpuPeriod'] = $object->getCpuPeriod();
            }
            if ($object->isInitialized('cpuQuota') && null !== $object->getCpuQuota()) {
                $data['CpuQuota'] = $object->getCpuQuota();
            }
            if ($object->isInitialized('cpuRealtimePeriod') && null !== $object->getCpuRealtimePeriod()) {
                $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
            }
            if ($object->isInitialized('cpuRealtimeRuntime') && null !== $object->getCpuRealtimeRuntime()) {
                $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
            }
            if ($object->isInitialized('cpusetCpus') && null !== $object->getCpusetCpus()) {
                $data['CpusetCpus'] = $object->getCpusetCpus();
            }
            if ($object->isInitialized('cpusetMems') && null !== $object->getCpusetMems()) {
                $data['CpusetMems'] = $object->getCpusetMems();
            }
            if ($object->isInitialized('devices') && null !== $object->getDevices()) {
                $values_5 = [];
                foreach ($object->getDevices() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['Devices'] = $values_5;
            }
            if ($object->isInitialized('deviceCgroupRules') && null !== $object->getDeviceCgroupRules()) {
                $values_6 = [];
                foreach ($object->getDeviceCgroupRules() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['DeviceCgroupRules'] = $values_6;
            }
            if ($object->isInitialized('deviceRequests') && null !== $object->getDeviceRequests()) {
                $values_7 = [];
                foreach ($object->getDeviceRequests() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['DeviceRequests'] = $values_7;
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('memoryReservation') && null !== $object->getMemoryReservation()) {
                $data['MemoryReservation'] = $object->getMemoryReservation();
            }
            if ($object->isInitialized('memorySwap') && null !== $object->getMemorySwap()) {
                $data['MemorySwap'] = $object->getMemorySwap();
            }
            if ($object->isInitialized('memorySwappiness') && null !== $object->getMemorySwappiness()) {
                $data['MemorySwappiness'] = $object->getMemorySwappiness();
            }
            if ($object->isInitialized('nanoCpus') && null !== $object->getNanoCpus()) {
                $data['NanoCpus'] = $object->getNanoCpus();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('init') && null !== $object->getInit()) {
                $data['Init'] = $object->getInit();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('ulimits') && null !== $object->getUlimits()) {
                $values_8 = [];
                foreach ($object->getUlimits() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['Ulimits'] = $values_8;
            }
            if ($object->isInitialized('cpuCount') && null !== $object->getCpuCount()) {
                $data['CpuCount'] = $object->getCpuCount();
            }
            if ($object->isInitialized('cpuPercent') && null !== $object->getCpuPercent()) {
                $data['CpuPercent'] = $object->getCpuPercent();
            }
            if ($object->isInitialized('iOMaximumIOps') && null !== $object->getIOMaximumIOps()) {
                $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
            }
            if ($object->isInitialized('iOMaximumBandwidth') && null !== $object->getIOMaximumBandwidth()) {
                $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
            }
            if ($object->isInitialized('binds') && null !== $object->getBinds()) {
                $values_9 = [];
                foreach ($object->getBinds() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['Binds'] = $values_9;
            }
            if ($object->isInitialized('containerIDFile') && null !== $object->getContainerIDFile()) {
                $data['ContainerIDFile'] = $object->getContainerIDFile();
            }
            if ($object->isInitialized('logConfig') && null !== $object->getLogConfig()) {
                $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkMode') && null !== $object->getNetworkMode()) {
                $data['NetworkMode'] = $object->getNetworkMode();
            }
            if ($object->isInitialized('portBindings') && null !== $object->getPortBindings()) {
                $values_10 = [];
                foreach ($object->getPortBindings() as $key => $value_10) {
                    $values_10[$key] = $value_10;
                }
                $data['PortBindings'] = $values_10;
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('autoRemove') && null !== $object->getAutoRemove()) {
                $data['AutoRemove'] = $object->getAutoRemove();
            }
            if ($object->isInitialized('volumeDriver') && null !== $object->getVolumeDriver()) {
                $data['VolumeDriver'] = $object->getVolumeDriver();
            }
            if ($object->isInitialized('volumesFrom') && null !== $object->getVolumesFrom()) {
                $values_11 = [];
                foreach ($object->getVolumesFrom() as $value_11) {
                    $values_11[] = $value_11;
                }
                $data['VolumesFrom'] = $values_11;
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_12 = [];
                foreach ($object->getMounts() as $value_12) {
                    $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
                }
                $data['Mounts'] = $values_12;
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values_13 = [];
                foreach ($object->getConsoleSize() as $value_13) {
                    $values_13[] = $value_13;
                }
                $data['ConsoleSize'] = $values_13;
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_14 = [];
                foreach ($object->getAnnotations() as $key_1 => $value_14) {
                    $values_14[$key_1] = $value_14;
                }
                $data['Annotations'] = $values_14;
            }
            if ($object->isInitialized('capAdd') && null !== $object->getCapAdd()) {
                $values_15 = [];
                foreach ($object->getCapAdd() as $value_15) {
                    $values_15[] = $value_15;
                }
                $data['CapAdd'] = $values_15;
            }
            if ($object->isInitialized('capDrop') && null !== $object->getCapDrop()) {
                $values_16 = [];
                foreach ($object->getCapDrop() as $value_16) {
                    $values_16[] = $value_16;
                }
                $data['CapDrop'] = $values_16;
            }
            if ($object->isInitialized('cgroupnsMode') && null !== $object->getCgroupnsMode()) {
                $data['CgroupnsMode'] = $object->getCgroupnsMode();
            }
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $values_17 = [];
                foreach ($object->getDns() as $value_17) {
                    $values_17[] = $value_17;
                }
                $data['Dns'] = $values_17;
            }
            if ($object->isInitialized('dnsOptions') && null !== $object->getDnsOptions()) {
                $values_18 = [];
                foreach ($object->getDnsOptions() as $value_18) {
                    $values_18[] = $value_18;
                }
                $data['DnsOptions'] = $values_18;
            }
            if ($object->isInitialized('dnsSearch') && null !== $object->getDnsSearch()) {
                $values_19 = [];
                foreach ($object->getDnsSearch() as $value_19) {
                    $values_19[] = $value_19;
                }
                $data['DnsSearch'] = $values_19;
            }
            if ($object->isInitialized('extraHosts') && null !== $object->getExtraHosts()) {
                $values_20 = [];
                foreach ($object->getExtraHosts() as $value_20) {
                    $values_20[] = $value_20;
                }
                $data['ExtraHosts'] = $values_20;
            }
            if ($object->isInitialized('groupAdd') && null !== $object->getGroupAdd()) {
                $values_21 = [];
                foreach ($object->getGroupAdd() as $value_21) {
                    $values_21[] = $value_21;
                }
                $data['GroupAdd'] = $values_21;
            }
            if ($object->isInitialized('ipcMode') && null !== $object->getIpcMode()) {
                $data['IpcMode'] = $object->getIpcMode();
            }
            if ($object->isInitialized('cgroup') && null !== $object->getCgroup()) {
                $data['Cgroup'] = $object->getCgroup();
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values_22 = [];
                foreach ($object->getLinks() as $value_22) {
                    $values_22[] = $value_22;
                }
                $data['Links'] = $values_22;
            }
            if ($object->isInitialized('oomScoreAdj') && null !== $object->getOomScoreAdj()) {
                $data['OomScoreAdj'] = $object->getOomScoreAdj();
            }
            if ($object->isInitialized('pidMode') && null !== $object->getPidMode()) {
                $data['PidMode'] = $object->getPidMode();
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('publishAllPorts') && null !== $object->getPublishAllPorts()) {
                $data['PublishAllPorts'] = $object->getPublishAllPorts();
            }
            if ($object->isInitialized('readonlyRootfs') && null !== $object->getReadonlyRootfs()) {
                $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
            }
            if ($object->isInitialized('securityOpt') && null !== $object->getSecurityOpt()) {
                $values_23 = [];
                foreach ($object->getSecurityOpt() as $value_23) {
                    $values_23[] = $value_23;
                }
                $data['SecurityOpt'] = $values_23;
            }
            if ($object->isInitialized('storageOpt') && null !== $object->getStorageOpt()) {
                $values_24 = [];
                foreach ($object->getStorageOpt() as $key_2 => $value_24) {
                    $values_24[$key_2] = $value_24;
                }
                $data['StorageOpt'] = $values_24;
            }
            if ($object->isInitialized('tmpfs') && null !== $object->getTmpfs()) {
                $values_25 = [];
                foreach ($object->getTmpfs() as $key_3 => $value_25) {
                    $values_25[$key_3] = $value_25;
                }
                $data['Tmpfs'] = $values_25;
            }
            if ($object->isInitialized('uTSMode') && null !== $object->getUTSMode()) {
                $data['UTSMode'] = $object->getUTSMode();
            }
            if ($object->isInitialized('usernsMode') && null !== $object->getUsernsMode()) {
                $data['UsernsMode'] = $object->getUsernsMode();
            }
            if ($object->isInitialized('shmSize') && null !== $object->getShmSize()) {
                $data['ShmSize'] = $object->getShmSize();
            }
            if ($object->isInitialized('sysctls') && null !== $object->getSysctls()) {
                $values_26 = [];
                foreach ($object->getSysctls() as $key_4 => $value_26) {
                    $values_26[$key_4] = $value_26;
                }
                $data['Sysctls'] = $values_26;
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
                $data['Isolation'] = $object->getIsolation();
            }
            if ($object->isInitialized('maskedPaths') && null !== $object->getMaskedPaths()) {
                $values_27 = [];
                foreach ($object->getMaskedPaths() as $value_27) {
                    $values_27[] = $value_27;
                }
                $data['MaskedPaths'] = $values_27;
            }
            if ($object->isInitialized('readonlyPaths') && null !== $object->getReadonlyPaths()) {
                $values_28 = [];
                foreach ($object->getReadonlyPaths() as $value_28) {
                    $values_28[] = $value_28;
                }
                $data['ReadonlyPaths'] = $values_28;
            }
            foreach ($object as $key_5 => $value_29) {
                if (preg_match('/.*/', (string) $key_5)) {
                    $data[$key_5] = $value_29;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\HostConfig::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
