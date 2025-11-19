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
        if (array_key_exists('OomKillDisable', $data) && is_int($data['OomKillDisable'])) {
            $data['OomKillDisable'] = (bool) $data['OomKillDisable'];
        }
        if (array_key_exists('Init', $data) && is_int($data['Init'])) {
            $data['Init'] = (bool) $data['Init'];
        }
        if (array_key_exists('AutoRemove', $data) && is_int($data['AutoRemove'])) {
            $data['AutoRemove'] = (bool) $data['AutoRemove'];
        }
        if (array_key_exists('Privileged', $data) && is_int($data['Privileged'])) {
            $data['Privileged'] = (bool) $data['Privileged'];
        }
        if (array_key_exists('PublishAllPorts', $data) && is_int($data['PublishAllPorts'])) {
            $data['PublishAllPorts'] = (bool) $data['PublishAllPorts'];
        }
        if (array_key_exists('ReadonlyRootfs', $data) && is_int($data['ReadonlyRootfs'])) {
            $data['ReadonlyRootfs'] = (bool) $data['ReadonlyRootfs'];
        }
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
        if (array_key_exists('CpuQuota', $data)) {
            $object->setCpuQuota($data['CpuQuota']);
            unset($data['CpuQuota']);
        }
        if (array_key_exists('CpuRealtimePeriod', $data)) {
            $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
            unset($data['CpuRealtimePeriod']);
        }
        if (array_key_exists('CpuRealtimeRuntime', $data)) {
            $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
            unset($data['CpuRealtimeRuntime']);
        }
        if (array_key_exists('CpusetCpus', $data)) {
            $object->setCpusetCpus($data['CpusetCpus']);
            unset($data['CpusetCpus']);
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
        if (array_key_exists('NanoCpus', $data) && null !== $data['NanoCpus']) {
            $object->setNanoCpus($data['NanoCpus']);
            unset($data['NanoCpus']);
        } elseif (array_key_exists('NanoCpus', $data) && null === $data['NanoCpus']) {
            $object->setNanoCpus(null);
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
        if (array_key_exists('CpuCount', $data) && null !== $data['CpuCount']) {
            $object->setCpuCount($data['CpuCount']);
            unset($data['CpuCount']);
        } elseif (array_key_exists('CpuCount', $data) && null === $data['CpuCount']) {
            $object->setCpuCount(null);
        }
        if (array_key_exists('CpuPercent', $data) && null !== $data['CpuPercent']) {
            $object->setCpuPercent($data['CpuPercent']);
            unset($data['CpuPercent']);
        } elseif (array_key_exists('CpuPercent', $data) && null === $data['CpuPercent']) {
            $object->setCpuPercent(null);
        }
        if (array_key_exists('IOMaximumIOps', $data) && null !== $data['IOMaximumIOps']) {
            $object->setIOMaximumIOps($data['IOMaximumIOps']);
            unset($data['IOMaximumIOps']);
        } elseif (array_key_exists('IOMaximumIOps', $data) && null === $data['IOMaximumIOps']) {
            $object->setIOMaximumIOps(null);
        }
        if (array_key_exists('IOMaximumBandwidth', $data) && null !== $data['IOMaximumBandwidth']) {
            $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
            unset($data['IOMaximumBandwidth']);
        } elseif (array_key_exists('IOMaximumBandwidth', $data) && null === $data['IOMaximumBandwidth']) {
            $object->setIOMaximumBandwidth(null);
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
                $value_11 = $value_10;
                if (is_array($value_10)) {
                    $value_11 = $this->denormalizer->denormalize($value_10, \WebProject\DockerApi\Library\Generated\Model\PortBinding::class, 'json', $context);
                }
                $values_10[$key] = $value_11;
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
            foreach ($data['VolumesFrom'] as $value_12) {
                $values_11[] = $value_12;
            }
            $object->setVolumesFrom($values_11);
            unset($data['VolumesFrom']);
        } elseif (array_key_exists('VolumesFrom', $data) && null === $data['VolumesFrom']) {
            $object->setVolumesFrom(null);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_12 = [];
            foreach ($data['Mounts'] as $value_13) {
                $values_12[] = $this->denormalizer->denormalize($value_13, \WebProject\DockerApi\Library\Generated\Model\Mount::class, 'json', $context);
            }
            $object->setMounts($values_12);
            unset($data['Mounts']);
        } elseif (array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
            $values_13 = [];
            foreach ($data['ConsoleSize'] as $value_14) {
                $values_13[] = $value_14;
            }
            $object->setConsoleSize($values_13);
            unset($data['ConsoleSize']);
        } elseif (array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
            $object->setConsoleSize(null);
        }
        if (array_key_exists('Annotations', $data) && null !== $data['Annotations']) {
            $values_14 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Annotations'] as $key_1 => $value_15) {
                $values_14[$key_1] = $value_15;
            }
            $object->setAnnotations($values_14);
            unset($data['Annotations']);
        } elseif (array_key_exists('Annotations', $data) && null === $data['Annotations']) {
            $object->setAnnotations(null);
        }
        if (array_key_exists('CapAdd', $data) && null !== $data['CapAdd']) {
            $values_15 = [];
            foreach ($data['CapAdd'] as $value_16) {
                $values_15[] = $value_16;
            }
            $object->setCapAdd($values_15);
            unset($data['CapAdd']);
        } elseif (array_key_exists('CapAdd', $data) && null === $data['CapAdd']) {
            $object->setCapAdd(null);
        }
        if (array_key_exists('CapDrop', $data) && null !== $data['CapDrop']) {
            $values_16 = [];
            foreach ($data['CapDrop'] as $value_17) {
                $values_16[] = $value_17;
            }
            $object->setCapDrop($values_16);
            unset($data['CapDrop']);
        } elseif (array_key_exists('CapDrop', $data) && null === $data['CapDrop']) {
            $object->setCapDrop(null);
        }
        if (array_key_exists('CgroupnsMode', $data)) {
            $object->setCgroupnsMode($data['CgroupnsMode']);
            unset($data['CgroupnsMode']);
        }
        if (array_key_exists('Dns', $data) && null !== $data['Dns']) {
            $values_17 = [];
            foreach ($data['Dns'] as $value_18) {
                $values_17[] = $value_18;
            }
            $object->setDns($values_17);
            unset($data['Dns']);
        } elseif (array_key_exists('Dns', $data) && null === $data['Dns']) {
            $object->setDns(null);
        }
        if (array_key_exists('DnsOptions', $data) && null !== $data['DnsOptions']) {
            $values_18 = [];
            foreach ($data['DnsOptions'] as $value_19) {
                $values_18[] = $value_19;
            }
            $object->setDnsOptions($values_18);
            unset($data['DnsOptions']);
        } elseif (array_key_exists('DnsOptions', $data) && null === $data['DnsOptions']) {
            $object->setDnsOptions(null);
        }
        if (array_key_exists('DnsSearch', $data) && null !== $data['DnsSearch']) {
            $values_19 = [];
            foreach ($data['DnsSearch'] as $value_20) {
                $values_19[] = $value_20;
            }
            $object->setDnsSearch($values_19);
            unset($data['DnsSearch']);
        } elseif (array_key_exists('DnsSearch', $data) && null === $data['DnsSearch']) {
            $object->setDnsSearch(null);
        }
        if (array_key_exists('ExtraHosts', $data) && null !== $data['ExtraHosts']) {
            $values_20 = [];
            foreach ($data['ExtraHosts'] as $value_21) {
                $values_20[] = $value_21;
            }
            $object->setExtraHosts($values_20);
            unset($data['ExtraHosts']);
        } elseif (array_key_exists('ExtraHosts', $data) && null === $data['ExtraHosts']) {
            $object->setExtraHosts(null);
        }
        if (array_key_exists('GroupAdd', $data) && null !== $data['GroupAdd']) {
            $values_21 = [];
            foreach ($data['GroupAdd'] as $value_22) {
                $values_21[] = $value_22;
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
        if (array_key_exists('Cgroup', $data) && null !== $data['Cgroup']) {
            $object->setCgroup($data['Cgroup']);
            unset($data['Cgroup']);
        } elseif (array_key_exists('Cgroup', $data) && null === $data['Cgroup']) {
            $object->setCgroup(null);
        }
        if (array_key_exists('Links', $data) && null !== $data['Links']) {
            $values_22 = [];
            foreach ($data['Links'] as $value_23) {
                $values_22[] = $value_23;
            }
            $object->setLinks($values_22);
            unset($data['Links']);
        } elseif (array_key_exists('Links', $data) && null === $data['Links']) {
            $object->setLinks(null);
        }
        if (array_key_exists('OomScoreAdj', $data) && null !== $data['OomScoreAdj']) {
            $object->setOomScoreAdj($data['OomScoreAdj']);
            unset($data['OomScoreAdj']);
        } elseif (array_key_exists('OomScoreAdj', $data) && null === $data['OomScoreAdj']) {
            $object->setOomScoreAdj(null);
        }
        if (array_key_exists('PidMode', $data) && null !== $data['PidMode']) {
            $object->setPidMode($data['PidMode']);
            unset($data['PidMode']);
        } elseif (array_key_exists('PidMode', $data) && null === $data['PidMode']) {
            $object->setPidMode(null);
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
            foreach ($data['SecurityOpt'] as $value_24) {
                $values_23[] = $value_24;
            }
            $object->setSecurityOpt($values_23);
            unset($data['SecurityOpt']);
        } elseif (array_key_exists('SecurityOpt', $data) && null === $data['SecurityOpt']) {
            $object->setSecurityOpt(null);
        }
        if (array_key_exists('StorageOpt', $data)) {
            $values_24 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['StorageOpt'] as $key_2 => $value_25) {
                $values_24[$key_2] = $value_25;
            }
            $object->setStorageOpt($values_24);
            unset($data['StorageOpt']);
        }
        if (array_key_exists('Tmpfs', $data)) {
            $values_25 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Tmpfs'] as $key_3 => $value_26) {
                $values_25[$key_3] = $value_26;
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
            foreach ($data['Sysctls'] as $key_4 => $value_27) {
                $values_26[$key_4] = $value_27;
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
        if (array_key_exists('MaskedPaths', $data) && null !== $data['MaskedPaths']) {
            $values_27 = [];
            foreach ($data['MaskedPaths'] as $value_28) {
                $values_27[] = $value_28;
            }
            $object->setMaskedPaths($values_27);
            unset($data['MaskedPaths']);
        } elseif (array_key_exists('MaskedPaths', $data) && null === $data['MaskedPaths']) {
            $object->setMaskedPaths(null);
        }
        if (array_key_exists('ReadonlyPaths', $data)) {
            $values_28 = [];
            foreach ($data['ReadonlyPaths'] as $value_29) {
                $values_28[] = $value_29;
            }
            $object->setReadonlyPaths($values_28);
            unset($data['ReadonlyPaths']);
        }
        foreach ($data as $key_5 => $value_30) {
            if (preg_match('/.*/', (string) $key_5)) {
                $object[$key_5] = $value_30;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('cpuShares') && null !== $data->getCpuShares()) {
            $dataArray['CpuShares'] = $data->getCpuShares();
        }
        if ($data->isInitialized('memory') && null !== $data->getMemory()) {
            $dataArray['Memory'] = $data->getMemory();
        }
        if ($data->isInitialized('cgroupParent') && null !== $data->getCgroupParent()) {
            $dataArray['CgroupParent'] = $data->getCgroupParent();
        }
        if ($data->isInitialized('blkioWeight') && null !== $data->getBlkioWeight()) {
            $dataArray['BlkioWeight'] = $data->getBlkioWeight();
        }
        if ($data->isInitialized('blkioWeightDevice') && null !== $data->getBlkioWeightDevice()) {
            $values = [];
            foreach ($data->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['BlkioWeightDevice'] = $values;
        }
        if ($data->isInitialized('blkioDeviceReadBps') && null !== $data->getBlkioDeviceReadBps()) {
            $values_1 = [];
            foreach ($data->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['BlkioDeviceReadBps'] = $values_1;
        }
        if ($data->isInitialized('blkioDeviceWriteBps') && null !== $data->getBlkioDeviceWriteBps()) {
            $values_2 = [];
            foreach ($data->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['BlkioDeviceWriteBps'] = $values_2;
        }
        if ($data->isInitialized('blkioDeviceReadIOps') && null !== $data->getBlkioDeviceReadIOps()) {
            $values_3 = [];
            foreach ($data->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['BlkioDeviceReadIOps'] = $values_3;
        }
        if ($data->isInitialized('blkioDeviceWriteIOps') && null !== $data->getBlkioDeviceWriteIOps()) {
            $values_4 = [];
            foreach ($data->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['BlkioDeviceWriteIOps'] = $values_4;
        }
        if ($data->isInitialized('cpuPeriod') && null !== $data->getCpuPeriod()) {
            $dataArray['CpuPeriod'] = $data->getCpuPeriod();
        }
        if ($data->isInitialized('cpuQuota') && null !== $data->getCpuQuota()) {
            $dataArray['CpuQuota'] = $data->getCpuQuota();
        }
        if ($data->isInitialized('cpuRealtimePeriod') && null !== $data->getCpuRealtimePeriod()) {
            $dataArray['CpuRealtimePeriod'] = $data->getCpuRealtimePeriod();
        }
        if ($data->isInitialized('cpuRealtimeRuntime') && null !== $data->getCpuRealtimeRuntime()) {
            $dataArray['CpuRealtimeRuntime'] = $data->getCpuRealtimeRuntime();
        }
        if ($data->isInitialized('cpusetCpus') && null !== $data->getCpusetCpus()) {
            $dataArray['CpusetCpus'] = $data->getCpusetCpus();
        }
        if ($data->isInitialized('cpusetMems') && null !== $data->getCpusetMems()) {
            $dataArray['CpusetMems'] = $data->getCpusetMems();
        }
        if ($data->isInitialized('devices') && null !== $data->getDevices()) {
            $values_5 = [];
            foreach ($data->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['Devices'] = $values_5;
        }
        if ($data->isInitialized('deviceCgroupRules') && null !== $data->getDeviceCgroupRules()) {
            $values_6 = [];
            foreach ($data->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['DeviceCgroupRules'] = $values_6;
        }
        if ($data->isInitialized('deviceRequests') && null !== $data->getDeviceRequests()) {
            $values_7 = [];
            foreach ($data->getDeviceRequests() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['DeviceRequests'] = $values_7;
        }
        if ($data->isInitialized('kernelMemoryTCP') && null !== $data->getKernelMemoryTCP()) {
            $dataArray['KernelMemoryTCP'] = $data->getKernelMemoryTCP();
        }
        if ($data->isInitialized('memoryReservation') && null !== $data->getMemoryReservation()) {
            $dataArray['MemoryReservation'] = $data->getMemoryReservation();
        }
        if ($data->isInitialized('memorySwap') && null !== $data->getMemorySwap()) {
            $dataArray['MemorySwap'] = $data->getMemorySwap();
        }
        if ($data->isInitialized('memorySwappiness') && null !== $data->getMemorySwappiness()) {
            $dataArray['MemorySwappiness'] = $data->getMemorySwappiness();
        }
        if ($data->isInitialized('nanoCpus') && null !== $data->getNanoCpus()) {
            $dataArray['NanoCpus'] = $data->getNanoCpus();
        }
        if ($data->isInitialized('oomKillDisable') && null !== $data->getOomKillDisable()) {
            $dataArray['OomKillDisable'] = $data->getOomKillDisable();
        }
        if ($data->isInitialized('init') && null !== $data->getInit()) {
            $dataArray['Init'] = $data->getInit();
        }
        if ($data->isInitialized('pidsLimit') && null !== $data->getPidsLimit()) {
            $dataArray['PidsLimit'] = $data->getPidsLimit();
        }
        if ($data->isInitialized('ulimits') && null !== $data->getUlimits()) {
            $values_8 = [];
            foreach ($data->getUlimits() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['Ulimits'] = $values_8;
        }
        if ($data->isInitialized('cpuCount') && null !== $data->getCpuCount()) {
            $dataArray['CpuCount'] = $data->getCpuCount();
        }
        if ($data->isInitialized('cpuPercent') && null !== $data->getCpuPercent()) {
            $dataArray['CpuPercent'] = $data->getCpuPercent();
        }
        if ($data->isInitialized('iOMaximumIOps') && null !== $data->getIOMaximumIOps()) {
            $dataArray['IOMaximumIOps'] = $data->getIOMaximumIOps();
        }
        if ($data->isInitialized('iOMaximumBandwidth') && null !== $data->getIOMaximumBandwidth()) {
            $dataArray['IOMaximumBandwidth'] = $data->getIOMaximumBandwidth();
        }
        if ($data->isInitialized('binds') && null !== $data->getBinds()) {
            $values_9 = [];
            foreach ($data->getBinds() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['Binds'] = $values_9;
        }
        if ($data->isInitialized('containerIDFile') && null !== $data->getContainerIDFile()) {
            $dataArray['ContainerIDFile'] = $data->getContainerIDFile();
        }
        if ($data->isInitialized('logConfig') && null !== $data->getLogConfig()) {
            $dataArray['LogConfig'] = $this->normalizer->normalize($data->getLogConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkMode') && null !== $data->getNetworkMode()) {
            $dataArray['NetworkMode'] = $data->getNetworkMode();
        }
        if ($data->isInitialized('portBindings') && null !== $data->getPortBindings()) {
            $values_10 = [];
            foreach ($data->getPortBindings() as $key => $value_10) {
                $value_11 = $value_10;
                if (is_object($value_10)) {
                    $value_11 = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $values_10[$key] = $value_11;
            }
            $dataArray['PortBindings'] = $values_10;
        }
        if ($data->isInitialized('restartPolicy') && null !== $data->getRestartPolicy()) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }
        if ($data->isInitialized('autoRemove') && null !== $data->getAutoRemove()) {
            $dataArray['AutoRemove'] = $data->getAutoRemove();
        }
        if ($data->isInitialized('volumeDriver') && null !== $data->getVolumeDriver()) {
            $dataArray['VolumeDriver'] = $data->getVolumeDriver();
        }
        if ($data->isInitialized('volumesFrom') && null !== $data->getVolumesFrom()) {
            $values_11 = [];
            foreach ($data->getVolumesFrom() as $value_12) {
                $values_11[] = $value_12;
            }
            $dataArray['VolumesFrom'] = $values_11;
        }
        if ($data->isInitialized('mounts') && null !== $data->getMounts()) {
            $values_12 = [];
            foreach ($data->getMounts() as $value_13) {
                $values_12[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $dataArray['Mounts'] = $values_12;
        }
        if ($data->isInitialized('consoleSize') && null !== $data->getConsoleSize()) {
            $values_13 = [];
            foreach ($data->getConsoleSize() as $value_14) {
                $values_13[] = $value_14;
            }
            $dataArray['ConsoleSize'] = $values_13;
        }
        if ($data->isInitialized('annotations') && null !== $data->getAnnotations()) {
            $values_14 = [];
            foreach ($data->getAnnotations() as $key_1 => $value_15) {
                $values_14[$key_1] = $value_15;
            }
            $dataArray['Annotations'] = $values_14;
        }
        if ($data->isInitialized('capAdd') && null !== $data->getCapAdd()) {
            $values_15 = [];
            foreach ($data->getCapAdd() as $value_16) {
                $values_15[] = $value_16;
            }
            $dataArray['CapAdd'] = $values_15;
        }
        if ($data->isInitialized('capDrop') && null !== $data->getCapDrop()) {
            $values_16 = [];
            foreach ($data->getCapDrop() as $value_17) {
                $values_16[] = $value_17;
            }
            $dataArray['CapDrop'] = $values_16;
        }
        if ($data->isInitialized('cgroupnsMode') && null !== $data->getCgroupnsMode()) {
            $dataArray['CgroupnsMode'] = $data->getCgroupnsMode();
        }
        if ($data->isInitialized('dns') && null !== $data->getDns()) {
            $values_17 = [];
            foreach ($data->getDns() as $value_18) {
                $values_17[] = $value_18;
            }
            $dataArray['Dns'] = $values_17;
        }
        if ($data->isInitialized('dnsOptions') && null !== $data->getDnsOptions()) {
            $values_18 = [];
            foreach ($data->getDnsOptions() as $value_19) {
                $values_18[] = $value_19;
            }
            $dataArray['DnsOptions'] = $values_18;
        }
        if ($data->isInitialized('dnsSearch') && null !== $data->getDnsSearch()) {
            $values_19 = [];
            foreach ($data->getDnsSearch() as $value_20) {
                $values_19[] = $value_20;
            }
            $dataArray['DnsSearch'] = $values_19;
        }
        if ($data->isInitialized('extraHosts') && null !== $data->getExtraHosts()) {
            $values_20 = [];
            foreach ($data->getExtraHosts() as $value_21) {
                $values_20[] = $value_21;
            }
            $dataArray['ExtraHosts'] = $values_20;
        }
        if ($data->isInitialized('groupAdd') && null !== $data->getGroupAdd()) {
            $values_21 = [];
            foreach ($data->getGroupAdd() as $value_22) {
                $values_21[] = $value_22;
            }
            $dataArray['GroupAdd'] = $values_21;
        }
        if ($data->isInitialized('ipcMode') && null !== $data->getIpcMode()) {
            $dataArray['IpcMode'] = $data->getIpcMode();
        }
        if ($data->isInitialized('cgroup') && null !== $data->getCgroup()) {
            $dataArray['Cgroup'] = $data->getCgroup();
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values_22 = [];
            foreach ($data->getLinks() as $value_23) {
                $values_22[] = $value_23;
            }
            $dataArray['Links'] = $values_22;
        }
        if ($data->isInitialized('oomScoreAdj') && null !== $data->getOomScoreAdj()) {
            $dataArray['OomScoreAdj'] = $data->getOomScoreAdj();
        }
        if ($data->isInitialized('pidMode') && null !== $data->getPidMode()) {
            $dataArray['PidMode'] = $data->getPidMode();
        }
        if ($data->isInitialized('privileged') && null !== $data->getPrivileged()) {
            $dataArray['Privileged'] = $data->getPrivileged();
        }
        if ($data->isInitialized('publishAllPorts') && null !== $data->getPublishAllPorts()) {
            $dataArray['PublishAllPorts'] = $data->getPublishAllPorts();
        }
        if ($data->isInitialized('readonlyRootfs') && null !== $data->getReadonlyRootfs()) {
            $dataArray['ReadonlyRootfs'] = $data->getReadonlyRootfs();
        }
        if ($data->isInitialized('securityOpt') && null !== $data->getSecurityOpt()) {
            $values_23 = [];
            foreach ($data->getSecurityOpt() as $value_24) {
                $values_23[] = $value_24;
            }
            $dataArray['SecurityOpt'] = $values_23;
        }
        if ($data->isInitialized('storageOpt') && null !== $data->getStorageOpt()) {
            $values_24 = [];
            foreach ($data->getStorageOpt() as $key_2 => $value_25) {
                $values_24[$key_2] = $value_25;
            }
            $dataArray['StorageOpt'] = $values_24;
        }
        if ($data->isInitialized('tmpfs') && null !== $data->getTmpfs()) {
            $values_25 = [];
            foreach ($data->getTmpfs() as $key_3 => $value_26) {
                $values_25[$key_3] = $value_26;
            }
            $dataArray['Tmpfs'] = $values_25;
        }
        if ($data->isInitialized('uTSMode') && null !== $data->getUTSMode()) {
            $dataArray['UTSMode'] = $data->getUTSMode();
        }
        if ($data->isInitialized('usernsMode') && null !== $data->getUsernsMode()) {
            $dataArray['UsernsMode'] = $data->getUsernsMode();
        }
        if ($data->isInitialized('shmSize') && null !== $data->getShmSize()) {
            $dataArray['ShmSize'] = $data->getShmSize();
        }
        if ($data->isInitialized('sysctls') && null !== $data->getSysctls()) {
            $values_26 = [];
            foreach ($data->getSysctls() as $key_4 => $value_27) {
                $values_26[$key_4] = $value_27;
            }
            $dataArray['Sysctls'] = $values_26;
        }
        if ($data->isInitialized('runtime') && null !== $data->getRuntime()) {
            $dataArray['Runtime'] = $data->getRuntime();
        }
        if ($data->isInitialized('isolation') && null !== $data->getIsolation()) {
            $dataArray['Isolation'] = $data->getIsolation();
        }
        if ($data->isInitialized('maskedPaths') && null !== $data->getMaskedPaths()) {
            $values_27 = [];
            foreach ($data->getMaskedPaths() as $value_28) {
                $values_27[] = $value_28;
            }
            $dataArray['MaskedPaths'] = $values_27;
        }
        if ($data->isInitialized('readonlyPaths') && null !== $data->getReadonlyPaths()) {
            $values_28 = [];
            foreach ($data->getReadonlyPaths() as $value_29) {
                $values_28[] = $value_29;
            }
            $dataArray['ReadonlyPaths'] = $values_28;
        }
        foreach ($data as $key_5 => $value_30) {
            if (preg_match('/.*/', (string) $key_5)) {
                $dataArray[$key_5] = $value_30;
            }
        }

        return $dataArray;
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
