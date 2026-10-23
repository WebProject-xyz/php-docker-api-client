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
        $object = new \WebProject\DockerApi\Library\Generated\Model\HostConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('CpuShares', $data) && null !== $data['CpuShares']) {
            $value = $data['CpuShares'];
            if (is_int($data['CpuShares'])) {
                $value = $data['CpuShares'];
            } elseif (null === $data['CpuShares']) {
                $value = $data['CpuShares'];
            }
            $object->cpuShares = $value;
            unset($data['CpuShares']);
        } elseif (array_key_exists('CpuShares', $data)) {
            $object->cpuShares = null;
            unset($data['CpuShares']);
        }
        if (array_key_exists('Memory', $data) && null !== $data['Memory']) {
            $value_1 = $data['Memory'];
            if (is_int($data['Memory'])) {
                $value_1 = $data['Memory'];
            } elseif (null === $data['Memory']) {
                $value_1 = $data['Memory'];
            }
            $object->memory = $value_1;
            unset($data['Memory']);
        } elseif (array_key_exists('Memory', $data)) {
            $object->memory = null;
            unset($data['Memory']);
        }
        if (array_key_exists('CgroupParent', $data) && null !== $data['CgroupParent']) {
            $value_2 = $data['CgroupParent'];
            if (is_string($data['CgroupParent'])) {
                $value_2 = $data['CgroupParent'];
            } elseif (null === $data['CgroupParent']) {
                $value_2 = $data['CgroupParent'];
            }
            $object->cgroupParent = $value_2;
            unset($data['CgroupParent']);
        } elseif (array_key_exists('CgroupParent', $data)) {
            $object->cgroupParent = null;
            unset($data['CgroupParent']);
        }
        if (array_key_exists('BlkioWeight', $data) && null !== $data['BlkioWeight']) {
            $value_3 = $data['BlkioWeight'];
            if (is_int($data['BlkioWeight'])) {
                $value_3 = $data['BlkioWeight'];
            } elseif (null === $data['BlkioWeight']) {
                $value_3 = $data['BlkioWeight'];
            }
            $object->blkioWeight = $value_3;
            unset($data['BlkioWeight']);
        } elseif (array_key_exists('BlkioWeight', $data)) {
            $object->blkioWeight = null;
            unset($data['BlkioWeight']);
        }
        if (array_key_exists('BlkioWeightDevice', $data) && null !== $data['BlkioWeightDevice']) {
            $values = [];
            foreach ($data['BlkioWeightDevice'] as $value_4) {
                $values[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
            }
            $object->blkioWeightDevice = $values;
            unset($data['BlkioWeightDevice']);
        } elseif (array_key_exists('BlkioWeightDevice', $data)) {
            $object->blkioWeightDevice = null;
            unset($data['BlkioWeightDevice']);
        }
        if (array_key_exists('BlkioDeviceReadBps', $data) && null !== $data['BlkioDeviceReadBps']) {
            $values_1 = [];
            foreach ($data['BlkioDeviceReadBps'] as $value_5) {
                $values_1[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceReadBps = $values_1;
            unset($data['BlkioDeviceReadBps']);
        } elseif (array_key_exists('BlkioDeviceReadBps', $data)) {
            $object->blkioDeviceReadBps = null;
            unset($data['BlkioDeviceReadBps']);
        }
        if (array_key_exists('BlkioDeviceWriteBps', $data) && null !== $data['BlkioDeviceWriteBps']) {
            $values_2 = [];
            foreach ($data['BlkioDeviceWriteBps'] as $value_6) {
                $values_2[] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceWriteBps = $values_2;
            unset($data['BlkioDeviceWriteBps']);
        } elseif (array_key_exists('BlkioDeviceWriteBps', $data)) {
            $object->blkioDeviceWriteBps = null;
            unset($data['BlkioDeviceWriteBps']);
        }
        if (array_key_exists('BlkioDeviceReadIOps', $data) && null !== $data['BlkioDeviceReadIOps']) {
            $values_3 = [];
            foreach ($data['BlkioDeviceReadIOps'] as $value_7) {
                $values_3[] = $this->denormalizer->denormalize($value_7, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceReadIOps = $values_3;
            unset($data['BlkioDeviceReadIOps']);
        } elseif (array_key_exists('BlkioDeviceReadIOps', $data)) {
            $object->blkioDeviceReadIOps = null;
            unset($data['BlkioDeviceReadIOps']);
        }
        if (array_key_exists('BlkioDeviceWriteIOps', $data) && null !== $data['BlkioDeviceWriteIOps']) {
            $values_4 = [];
            foreach ($data['BlkioDeviceWriteIOps'] as $value_8) {
                $values_4[] = $this->denormalizer->denormalize($value_8, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceWriteIOps = $values_4;
            unset($data['BlkioDeviceWriteIOps']);
        } elseif (array_key_exists('BlkioDeviceWriteIOps', $data)) {
            $object->blkioDeviceWriteIOps = null;
            unset($data['BlkioDeviceWriteIOps']);
        }
        if (array_key_exists('CpuPeriod', $data) && null !== $data['CpuPeriod']) {
            $value_9 = $data['CpuPeriod'];
            if (is_int($data['CpuPeriod'])) {
                $value_9 = $data['CpuPeriod'];
            } elseif (null === $data['CpuPeriod']) {
                $value_9 = $data['CpuPeriod'];
            }
            $object->cpuPeriod = $value_9;
            unset($data['CpuPeriod']);
        } elseif (array_key_exists('CpuPeriod', $data)) {
            $object->cpuPeriod = null;
            unset($data['CpuPeriod']);
        }
        if (array_key_exists('CpuQuota', $data) && null !== $data['CpuQuota']) {
            $value_10 = $data['CpuQuota'];
            if (is_int($data['CpuQuota'])) {
                $value_10 = $data['CpuQuota'];
            } elseif (null === $data['CpuQuota']) {
                $value_10 = $data['CpuQuota'];
            }
            $object->cpuQuota = $value_10;
            unset($data['CpuQuota']);
        } elseif (array_key_exists('CpuQuota', $data)) {
            $object->cpuQuota = null;
            unset($data['CpuQuota']);
        }
        if (array_key_exists('CpuRealtimePeriod', $data) && null !== $data['CpuRealtimePeriod']) {
            $value_11 = $data['CpuRealtimePeriod'];
            if (is_int($data['CpuRealtimePeriod'])) {
                $value_11 = $data['CpuRealtimePeriod'];
            } elseif (null === $data['CpuRealtimePeriod']) {
                $value_11 = $data['CpuRealtimePeriod'];
            }
            $object->cpuRealtimePeriod = $value_11;
            unset($data['CpuRealtimePeriod']);
        } elseif (array_key_exists('CpuRealtimePeriod', $data)) {
            $object->cpuRealtimePeriod = null;
            unset($data['CpuRealtimePeriod']);
        }
        if (array_key_exists('CpuRealtimeRuntime', $data) && null !== $data['CpuRealtimeRuntime']) {
            $value_12 = $data['CpuRealtimeRuntime'];
            if (is_int($data['CpuRealtimeRuntime'])) {
                $value_12 = $data['CpuRealtimeRuntime'];
            } elseif (null === $data['CpuRealtimeRuntime']) {
                $value_12 = $data['CpuRealtimeRuntime'];
            }
            $object->cpuRealtimeRuntime = $value_12;
            unset($data['CpuRealtimeRuntime']);
        } elseif (array_key_exists('CpuRealtimeRuntime', $data)) {
            $object->cpuRealtimeRuntime = null;
            unset($data['CpuRealtimeRuntime']);
        }
        if (array_key_exists('CpusetCpus', $data) && null !== $data['CpusetCpus']) {
            $value_13 = $data['CpusetCpus'];
            if (is_string($data['CpusetCpus'])) {
                $value_13 = $data['CpusetCpus'];
            } elseif (null === $data['CpusetCpus']) {
                $value_13 = $data['CpusetCpus'];
            }
            $object->cpusetCpus = $value_13;
            unset($data['CpusetCpus']);
        } elseif (array_key_exists('CpusetCpus', $data)) {
            $object->cpusetCpus = null;
            unset($data['CpusetCpus']);
        }
        if (array_key_exists('CpusetMems', $data) && null !== $data['CpusetMems']) {
            $value_14 = $data['CpusetMems'];
            if (is_string($data['CpusetMems'])) {
                $value_14 = $data['CpusetMems'];
            } elseif (null === $data['CpusetMems']) {
                $value_14 = $data['CpusetMems'];
            }
            $object->cpusetMems = $value_14;
            unset($data['CpusetMems']);
        } elseif (array_key_exists('CpusetMems', $data)) {
            $object->cpusetMems = null;
            unset($data['CpusetMems']);
        }
        if (array_key_exists('Devices', $data) && null !== $data['Devices']) {
            $values_5 = [];
            foreach ($data['Devices'] as $value_15) {
                $values_5[] = $this->denormalizer->denormalize($value_15, \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class, 'json', $context);
            }
            $object->devices = $values_5;
            unset($data['Devices']);
        } elseif (array_key_exists('Devices', $data)) {
            $object->devices = null;
            unset($data['Devices']);
        }
        if (array_key_exists('DeviceCgroupRules', $data) && null !== $data['DeviceCgroupRules']) {
            $values_6 = [];
            foreach ($data['DeviceCgroupRules'] as $value_16) {
                $values_6[] = $value_16;
            }
            $object->deviceCgroupRules = $values_6;
            unset($data['DeviceCgroupRules']);
        } elseif (array_key_exists('DeviceCgroupRules', $data)) {
            $object->deviceCgroupRules = null;
            unset($data['DeviceCgroupRules']);
        }
        if (array_key_exists('DeviceRequests', $data) && null !== $data['DeviceRequests']) {
            $values_7 = [];
            foreach ($data['DeviceRequests'] as $value_17) {
                $values_7[] = $this->denormalizer->denormalize($value_17, \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class, 'json', $context);
            }
            $object->deviceRequests = $values_7;
            unset($data['DeviceRequests']);
        } elseif (array_key_exists('DeviceRequests', $data)) {
            $object->deviceRequests = null;
            unset($data['DeviceRequests']);
        }
        if (array_key_exists('MemoryReservation', $data) && null !== $data['MemoryReservation']) {
            $value_18 = $data['MemoryReservation'];
            if (is_int($data['MemoryReservation'])) {
                $value_18 = $data['MemoryReservation'];
            } elseif (null === $data['MemoryReservation']) {
                $value_18 = $data['MemoryReservation'];
            }
            $object->memoryReservation = $value_18;
            unset($data['MemoryReservation']);
        } elseif (array_key_exists('MemoryReservation', $data)) {
            $object->memoryReservation = null;
            unset($data['MemoryReservation']);
        }
        if (array_key_exists('MemorySwap', $data) && null !== $data['MemorySwap']) {
            $value_19 = $data['MemorySwap'];
            if (is_int($data['MemorySwap'])) {
                $value_19 = $data['MemorySwap'];
            } elseif (null === $data['MemorySwap']) {
                $value_19 = $data['MemorySwap'];
            }
            $object->memorySwap = $value_19;
            unset($data['MemorySwap']);
        } elseif (array_key_exists('MemorySwap', $data)) {
            $object->memorySwap = null;
            unset($data['MemorySwap']);
        }
        if (array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
            $value_20 = $data['MemorySwappiness'];
            if (is_int($data['MemorySwappiness'])) {
                $value_20 = $data['MemorySwappiness'];
            } elseif (null === $data['MemorySwappiness']) {
                $value_20 = $data['MemorySwappiness'];
            }
            $object->memorySwappiness = $value_20;
            unset($data['MemorySwappiness']);
        } elseif (array_key_exists('MemorySwappiness', $data)) {
            $object->memorySwappiness = null;
            unset($data['MemorySwappiness']);
        }
        if (array_key_exists('NanoCpus', $data) && null !== $data['NanoCpus']) {
            $value_21 = $data['NanoCpus'];
            if (is_int($data['NanoCpus'])) {
                $value_21 = $data['NanoCpus'];
            } elseif (null === $data['NanoCpus']) {
                $value_21 = $data['NanoCpus'];
            }
            $object->nanoCpus = $value_21;
            unset($data['NanoCpus']);
        } elseif (array_key_exists('NanoCpus', $data)) {
            $object->nanoCpus = null;
            unset($data['NanoCpus']);
        }
        if (array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
            $value_22 = $data['OomKillDisable'];
            if (is_bool($data['OomKillDisable'])) {
                $value_22 = $data['OomKillDisable'];
            } elseif (null === $data['OomKillDisable']) {
                $value_22 = $data['OomKillDisable'];
            }
            $object->oomKillDisable = $value_22;
            unset($data['OomKillDisable']);
        } elseif (array_key_exists('OomKillDisable', $data)) {
            $object->oomKillDisable = null;
            unset($data['OomKillDisable']);
        }
        if (array_key_exists('Init', $data) && null !== $data['Init']) {
            $value_23 = $data['Init'];
            if (is_bool($data['Init'])) {
                $value_23 = $data['Init'];
            } elseif (null === $data['Init']) {
                $value_23 = $data['Init'];
            }
            $object->init = $value_23;
            unset($data['Init']);
        } elseif (array_key_exists('Init', $data)) {
            $object->init = null;
            unset($data['Init']);
        }
        if (array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
            $value_24 = $data['PidsLimit'];
            if (is_int($data['PidsLimit'])) {
                $value_24 = $data['PidsLimit'];
            } elseif (null === $data['PidsLimit']) {
                $value_24 = $data['PidsLimit'];
            }
            $object->pidsLimit = $value_24;
            unset($data['PidsLimit']);
        } elseif (array_key_exists('PidsLimit', $data)) {
            $object->pidsLimit = null;
            unset($data['PidsLimit']);
        }
        if (array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
            $values_8 = [];
            foreach ($data['Ulimits'] as $value_25) {
                $values_8[] = $this->denormalizer->denormalize($value_25, \WebProject\DockerApi\Library\Generated\Model\ResourcesUlimitsItem::class, 'json', $context);
            }
            $object->ulimits = $values_8;
            unset($data['Ulimits']);
        } elseif (array_key_exists('Ulimits', $data)) {
            $object->ulimits = null;
            unset($data['Ulimits']);
        }
        if (array_key_exists('CpuCount', $data) && null !== $data['CpuCount']) {
            $value_26 = $data['CpuCount'];
            if (is_int($data['CpuCount'])) {
                $value_26 = $data['CpuCount'];
            } elseif (null === $data['CpuCount']) {
                $value_26 = $data['CpuCount'];
            }
            $object->cpuCount = $value_26;
            unset($data['CpuCount']);
        } elseif (array_key_exists('CpuCount', $data)) {
            $object->cpuCount = null;
            unset($data['CpuCount']);
        }
        if (array_key_exists('CpuPercent', $data) && null !== $data['CpuPercent']) {
            $value_27 = $data['CpuPercent'];
            if (is_int($data['CpuPercent'])) {
                $value_27 = $data['CpuPercent'];
            } elseif (null === $data['CpuPercent']) {
                $value_27 = $data['CpuPercent'];
            }
            $object->cpuPercent = $value_27;
            unset($data['CpuPercent']);
        } elseif (array_key_exists('CpuPercent', $data)) {
            $object->cpuPercent = null;
            unset($data['CpuPercent']);
        }
        if (array_key_exists('IOMaximumIOps', $data) && null !== $data['IOMaximumIOps']) {
            $value_28 = $data['IOMaximumIOps'];
            if (is_int($data['IOMaximumIOps'])) {
                $value_28 = $data['IOMaximumIOps'];
            } elseif (null === $data['IOMaximumIOps']) {
                $value_28 = $data['IOMaximumIOps'];
            }
            $object->iOMaximumIOps = $value_28;
            unset($data['IOMaximumIOps']);
        } elseif (array_key_exists('IOMaximumIOps', $data)) {
            $object->iOMaximumIOps = null;
            unset($data['IOMaximumIOps']);
        }
        if (array_key_exists('IOMaximumBandwidth', $data) && null !== $data['IOMaximumBandwidth']) {
            $value_29 = $data['IOMaximumBandwidth'];
            if (is_int($data['IOMaximumBandwidth'])) {
                $value_29 = $data['IOMaximumBandwidth'];
            } elseif (null === $data['IOMaximumBandwidth']) {
                $value_29 = $data['IOMaximumBandwidth'];
            }
            $object->iOMaximumBandwidth = $value_29;
            unset($data['IOMaximumBandwidth']);
        } elseif (array_key_exists('IOMaximumBandwidth', $data)) {
            $object->iOMaximumBandwidth = null;
            unset($data['IOMaximumBandwidth']);
        }
        if (array_key_exists('Binds', $data) && null !== $data['Binds']) {
            $values_9 = [];
            foreach ($data['Binds'] as $value_30) {
                $values_9[] = $value_30;
            }
            $object->binds = $values_9;
            unset($data['Binds']);
        } elseif (array_key_exists('Binds', $data)) {
            $object->binds = null;
            unset($data['Binds']);
        }
        if (array_key_exists('ContainerIDFile', $data) && null !== $data['ContainerIDFile']) {
            $value_31 = $data['ContainerIDFile'];
            if (is_string($data['ContainerIDFile'])) {
                $value_31 = $data['ContainerIDFile'];
            } elseif (null === $data['ContainerIDFile']) {
                $value_31 = $data['ContainerIDFile'];
            }
            $object->containerIDFile = $value_31;
            unset($data['ContainerIDFile']);
        } elseif (array_key_exists('ContainerIDFile', $data)) {
            $object->containerIDFile = null;
            unset($data['ContainerIDFile']);
        }
        if (array_key_exists('LogConfig', $data) && null !== $data['LogConfig']) {
            $object->logConfig = $this->denormalizer->denormalize($data['LogConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfigLogConfig::class, 'json', $context);
            unset($data['LogConfig']);
        } elseif (array_key_exists('LogConfig', $data)) {
            $object->logConfig = null;
            unset($data['LogConfig']);
        }
        if (array_key_exists('NetworkMode', $data) && null !== $data['NetworkMode']) {
            $value_32 = $data['NetworkMode'];
            if (is_string($data['NetworkMode'])) {
                $value_32 = $data['NetworkMode'];
            } elseif (null === $data['NetworkMode']) {
                $value_32 = $data['NetworkMode'];
            }
            $object->networkMode = $value_32;
            unset($data['NetworkMode']);
        } elseif (array_key_exists('NetworkMode', $data)) {
            $object->networkMode = null;
            unset($data['NetworkMode']);
        }
        if (array_key_exists('PortBindings', $data) && null !== $data['PortBindings']) {
            $value_33 = $data['PortBindings'];
            if (is_array($data['PortBindings']) && $this->isOnlyNumericKeys($data['PortBindings'])) {
                $values_10 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['PortBindings'] as $key => $value_34) {
                    $values_11 = [];
                    foreach ($value_34 as $value_35) {
                        $values_11[] = $this->denormalizer->denormalize($value_35, \WebProject\DockerApi\Library\Generated\Model\PortBinding::class, 'json', $context);
                    }
                    $values_10[$key] = $values_11;
                }
                $value_33 = $values_10;
            } elseif (null === $data['PortBindings']) {
                $value_33 = $data['PortBindings'];
            }
            $object->portBindings = $value_33;
            unset($data['PortBindings']);
        } elseif (array_key_exists('PortBindings', $data)) {
            $object->portBindings = null;
            unset($data['PortBindings']);
        }
        if (array_key_exists('RestartPolicy', $data)) {
            $object->restartPolicy = $this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class, 'json', $context);
            unset($data['RestartPolicy']);
        }
        if (array_key_exists('AutoRemove', $data) && null !== $data['AutoRemove']) {
            $value_36 = $data['AutoRemove'];
            if (is_bool($data['AutoRemove'])) {
                $value_36 = $data['AutoRemove'];
            } elseif (null === $data['AutoRemove']) {
                $value_36 = $data['AutoRemove'];
            }
            $object->autoRemove = $value_36;
            unset($data['AutoRemove']);
        } elseif (array_key_exists('AutoRemove', $data)) {
            $object->autoRemove = null;
            unset($data['AutoRemove']);
        }
        if (array_key_exists('VolumeDriver', $data) && null !== $data['VolumeDriver']) {
            $value_37 = $data['VolumeDriver'];
            if (is_string($data['VolumeDriver'])) {
                $value_37 = $data['VolumeDriver'];
            } elseif (null === $data['VolumeDriver']) {
                $value_37 = $data['VolumeDriver'];
            }
            $object->volumeDriver = $value_37;
            unset($data['VolumeDriver']);
        } elseif (array_key_exists('VolumeDriver', $data)) {
            $object->volumeDriver = null;
            unset($data['VolumeDriver']);
        }
        if (array_key_exists('VolumesFrom', $data) && null !== $data['VolumesFrom']) {
            $values_12 = [];
            foreach ($data['VolumesFrom'] as $value_38) {
                $values_12[] = $value_38;
            }
            $object->volumesFrom = $values_12;
            unset($data['VolumesFrom']);
        } elseif (array_key_exists('VolumesFrom', $data)) {
            $object->volumesFrom = null;
            unset($data['VolumesFrom']);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_13 = [];
            foreach ($data['Mounts'] as $value_39) {
                $values_13[] = $this->denormalizer->denormalize($value_39, \WebProject\DockerApi\Library\Generated\Model\Mount::class, 'json', $context);
            }
            $object->mounts = $values_13;
            unset($data['Mounts']);
        } elseif (array_key_exists('Mounts', $data)) {
            $object->mounts = null;
            unset($data['Mounts']);
        }
        if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
            $values_14 = [];
            foreach ($data['ConsoleSize'] as $value_40) {
                $values_14[] = $value_40;
            }
            $object->consoleSize = $values_14;
            unset($data['ConsoleSize']);
        } elseif (array_key_exists('ConsoleSize', $data)) {
            $object->consoleSize = null;
            unset($data['ConsoleSize']);
        }
        if (array_key_exists('Annotations', $data) && null !== $data['Annotations']) {
            $value_41 = $data['Annotations'];
            if (is_array($data['Annotations']) && $this->isOnlyNumericKeys($data['Annotations'])) {
                $values_15 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Annotations'] as $key_1 => $value_42) {
                    $values_15[$key_1] = $value_42;
                }
                $value_41 = $values_15;
            } elseif (null === $data['Annotations']) {
                $value_41 = $data['Annotations'];
            }
            $object->annotations = $value_41;
            unset($data['Annotations']);
        } elseif (array_key_exists('Annotations', $data)) {
            $object->annotations = null;
            unset($data['Annotations']);
        }
        if (array_key_exists('CapAdd', $data) && null !== $data['CapAdd']) {
            $values_16 = [];
            foreach ($data['CapAdd'] as $value_43) {
                $values_16[] = $value_43;
            }
            $object->capAdd = $values_16;
            unset($data['CapAdd']);
        } elseif (array_key_exists('CapAdd', $data)) {
            $object->capAdd = null;
            unset($data['CapAdd']);
        }
        if (array_key_exists('CapDrop', $data) && null !== $data['CapDrop']) {
            $values_17 = [];
            foreach ($data['CapDrop'] as $value_44) {
                $values_17[] = $value_44;
            }
            $object->capDrop = $values_17;
            unset($data['CapDrop']);
        } elseif (array_key_exists('CapDrop', $data)) {
            $object->capDrop = null;
            unset($data['CapDrop']);
        }
        if (array_key_exists('CgroupnsMode', $data) && null !== $data['CgroupnsMode']) {
            $value_45 = $data['CgroupnsMode'];
            if (is_string($data['CgroupnsMode'])) {
                $value_45 = $data['CgroupnsMode'];
            } elseif (null === $data['CgroupnsMode']) {
                $value_45 = $data['CgroupnsMode'];
            }
            $object->cgroupnsMode = $value_45;
            unset($data['CgroupnsMode']);
        } elseif (array_key_exists('CgroupnsMode', $data)) {
            $object->cgroupnsMode = null;
            unset($data['CgroupnsMode']);
        }
        if (array_key_exists('Dns', $data) && null !== $data['Dns']) {
            $values_18 = [];
            foreach ($data['Dns'] as $value_46) {
                $values_18[] = $value_46;
            }
            $object->dns = $values_18;
            unset($data['Dns']);
        } elseif (array_key_exists('Dns', $data)) {
            $object->dns = null;
            unset($data['Dns']);
        }
        if (array_key_exists('DnsOptions', $data) && null !== $data['DnsOptions']) {
            $values_19 = [];
            foreach ($data['DnsOptions'] as $value_47) {
                $values_19[] = $value_47;
            }
            $object->dnsOptions = $values_19;
            unset($data['DnsOptions']);
        } elseif (array_key_exists('DnsOptions', $data)) {
            $object->dnsOptions = null;
            unset($data['DnsOptions']);
        }
        if (array_key_exists('DnsSearch', $data) && null !== $data['DnsSearch']) {
            $values_20 = [];
            foreach ($data['DnsSearch'] as $value_48) {
                $values_20[] = $value_48;
            }
            $object->dnsSearch = $values_20;
            unset($data['DnsSearch']);
        } elseif (array_key_exists('DnsSearch', $data)) {
            $object->dnsSearch = null;
            unset($data['DnsSearch']);
        }
        if (array_key_exists('ExtraHosts', $data) && null !== $data['ExtraHosts']) {
            $values_21 = [];
            foreach ($data['ExtraHosts'] as $value_49) {
                $values_21[] = $value_49;
            }
            $object->extraHosts = $values_21;
            unset($data['ExtraHosts']);
        } elseif (array_key_exists('ExtraHosts', $data)) {
            $object->extraHosts = null;
            unset($data['ExtraHosts']);
        }
        if (array_key_exists('GroupAdd', $data) && null !== $data['GroupAdd']) {
            $values_22 = [];
            foreach ($data['GroupAdd'] as $value_50) {
                $values_22[] = $value_50;
            }
            $object->groupAdd = $values_22;
            unset($data['GroupAdd']);
        } elseif (array_key_exists('GroupAdd', $data)) {
            $object->groupAdd = null;
            unset($data['GroupAdd']);
        }
        if (array_key_exists('IpcMode', $data) && null !== $data['IpcMode']) {
            $value_51 = $data['IpcMode'];
            if (is_string($data['IpcMode'])) {
                $value_51 = $data['IpcMode'];
            } elseif (null === $data['IpcMode']) {
                $value_51 = $data['IpcMode'];
            }
            $object->ipcMode = $value_51;
            unset($data['IpcMode']);
        } elseif (array_key_exists('IpcMode', $data)) {
            $object->ipcMode = null;
            unset($data['IpcMode']);
        }
        if (array_key_exists('Cgroup', $data) && null !== $data['Cgroup']) {
            $value_52 = $data['Cgroup'];
            if (is_string($data['Cgroup'])) {
                $value_52 = $data['Cgroup'];
            } elseif (null === $data['Cgroup']) {
                $value_52 = $data['Cgroup'];
            }
            $object->cgroup = $value_52;
            unset($data['Cgroup']);
        } elseif (array_key_exists('Cgroup', $data)) {
            $object->cgroup = null;
            unset($data['Cgroup']);
        }
        if (array_key_exists('Links', $data) && null !== $data['Links']) {
            $values_23 = [];
            foreach ($data['Links'] as $value_53) {
                $values_23[] = $value_53;
            }
            $object->links = $values_23;
            unset($data['Links']);
        } elseif (array_key_exists('Links', $data)) {
            $object->links = null;
            unset($data['Links']);
        }
        if (array_key_exists('OomScoreAdj', $data) && null !== $data['OomScoreAdj']) {
            $value_54 = $data['OomScoreAdj'];
            if (is_int($data['OomScoreAdj'])) {
                $value_54 = $data['OomScoreAdj'];
            } elseif (null === $data['OomScoreAdj']) {
                $value_54 = $data['OomScoreAdj'];
            }
            $object->oomScoreAdj = $value_54;
            unset($data['OomScoreAdj']);
        } elseif (array_key_exists('OomScoreAdj', $data)) {
            $object->oomScoreAdj = null;
            unset($data['OomScoreAdj']);
        }
        if (array_key_exists('PidMode', $data) && null !== $data['PidMode']) {
            $value_55 = $data['PidMode'];
            if (is_string($data['PidMode'])) {
                $value_55 = $data['PidMode'];
            } elseif (null === $data['PidMode']) {
                $value_55 = $data['PidMode'];
            }
            $object->pidMode = $value_55;
            unset($data['PidMode']);
        } elseif (array_key_exists('PidMode', $data)) {
            $object->pidMode = null;
            unset($data['PidMode']);
        }
        if (array_key_exists('Privileged', $data) && null !== $data['Privileged']) {
            $value_56 = $data['Privileged'];
            if (is_bool($data['Privileged'])) {
                $value_56 = $data['Privileged'];
            } elseif (null === $data['Privileged']) {
                $value_56 = $data['Privileged'];
            }
            $object->privileged = $value_56;
            unset($data['Privileged']);
        } elseif (array_key_exists('Privileged', $data)) {
            $object->privileged = null;
            unset($data['Privileged']);
        }
        if (array_key_exists('PublishAllPorts', $data) && null !== $data['PublishAllPorts']) {
            $value_57 = $data['PublishAllPorts'];
            if (is_bool($data['PublishAllPorts'])) {
                $value_57 = $data['PublishAllPorts'];
            } elseif (null === $data['PublishAllPorts']) {
                $value_57 = $data['PublishAllPorts'];
            }
            $object->publishAllPorts = $value_57;
            unset($data['PublishAllPorts']);
        } elseif (array_key_exists('PublishAllPorts', $data)) {
            $object->publishAllPorts = null;
            unset($data['PublishAllPorts']);
        }
        if (array_key_exists('ReadonlyRootfs', $data) && null !== $data['ReadonlyRootfs']) {
            $value_58 = $data['ReadonlyRootfs'];
            if (is_bool($data['ReadonlyRootfs'])) {
                $value_58 = $data['ReadonlyRootfs'];
            } elseif (null === $data['ReadonlyRootfs']) {
                $value_58 = $data['ReadonlyRootfs'];
            }
            $object->readonlyRootfs = $value_58;
            unset($data['ReadonlyRootfs']);
        } elseif (array_key_exists('ReadonlyRootfs', $data)) {
            $object->readonlyRootfs = null;
            unset($data['ReadonlyRootfs']);
        }
        if (array_key_exists('SecurityOpt', $data) && null !== $data['SecurityOpt']) {
            $values_24 = [];
            foreach ($data['SecurityOpt'] as $value_59) {
                $values_24[] = $value_59;
            }
            $object->securityOpt = $values_24;
            unset($data['SecurityOpt']);
        } elseif (array_key_exists('SecurityOpt', $data)) {
            $object->securityOpt = null;
            unset($data['SecurityOpt']);
        }
        if (array_key_exists('StorageOpt', $data) && null !== $data['StorageOpt']) {
            $value_60 = $data['StorageOpt'];
            if (is_array($data['StorageOpt']) && $this->isOnlyNumericKeys($data['StorageOpt'])) {
                $values_25 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['StorageOpt'] as $key_2 => $value_61) {
                    $values_25[$key_2] = $value_61;
                }
                $value_60 = $values_25;
            } elseif (null === $data['StorageOpt']) {
                $value_60 = $data['StorageOpt'];
            }
            $object->storageOpt = $value_60;
            unset($data['StorageOpt']);
        } elseif (array_key_exists('StorageOpt', $data)) {
            $object->storageOpt = null;
            unset($data['StorageOpt']);
        }
        if (array_key_exists('Tmpfs', $data) && null !== $data['Tmpfs']) {
            $value_62 = $data['Tmpfs'];
            if (is_array($data['Tmpfs']) && $this->isOnlyNumericKeys($data['Tmpfs'])) {
                $values_26 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Tmpfs'] as $key_3 => $value_63) {
                    $values_26[$key_3] = $value_63;
                }
                $value_62 = $values_26;
            } elseif (null === $data['Tmpfs']) {
                $value_62 = $data['Tmpfs'];
            }
            $object->tmpfs = $value_62;
            unset($data['Tmpfs']);
        } elseif (array_key_exists('Tmpfs', $data)) {
            $object->tmpfs = null;
            unset($data['Tmpfs']);
        }
        if (array_key_exists('UTSMode', $data) && null !== $data['UTSMode']) {
            $value_64 = $data['UTSMode'];
            if (is_string($data['UTSMode'])) {
                $value_64 = $data['UTSMode'];
            } elseif (null === $data['UTSMode']) {
                $value_64 = $data['UTSMode'];
            }
            $object->uTSMode = $value_64;
            unset($data['UTSMode']);
        } elseif (array_key_exists('UTSMode', $data)) {
            $object->uTSMode = null;
            unset($data['UTSMode']);
        }
        if (array_key_exists('UsernsMode', $data) && null !== $data['UsernsMode']) {
            $value_65 = $data['UsernsMode'];
            if (is_string($data['UsernsMode'])) {
                $value_65 = $data['UsernsMode'];
            } elseif (null === $data['UsernsMode']) {
                $value_65 = $data['UsernsMode'];
            }
            $object->usernsMode = $value_65;
            unset($data['UsernsMode']);
        } elseif (array_key_exists('UsernsMode', $data)) {
            $object->usernsMode = null;
            unset($data['UsernsMode']);
        }
        if (array_key_exists('ShmSize', $data) && null !== $data['ShmSize']) {
            $value_66 = $data['ShmSize'];
            if (is_int($data['ShmSize'])) {
                $value_66 = $data['ShmSize'];
            } elseif (null === $data['ShmSize']) {
                $value_66 = $data['ShmSize'];
            }
            $object->shmSize = $value_66;
            unset($data['ShmSize']);
        } elseif (array_key_exists('ShmSize', $data)) {
            $object->shmSize = null;
            unset($data['ShmSize']);
        }
        if (array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
            $value_67 = $data['Sysctls'];
            if (is_array($data['Sysctls']) && $this->isOnlyNumericKeys($data['Sysctls'])) {
                $values_27 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Sysctls'] as $key_4 => $value_68) {
                    $values_27[$key_4] = $value_68;
                }
                $value_67 = $values_27;
            } elseif (null === $data['Sysctls']) {
                $value_67 = $data['Sysctls'];
            }
            $object->sysctls = $value_67;
            unset($data['Sysctls']);
        } elseif (array_key_exists('Sysctls', $data)) {
            $object->sysctls = null;
            unset($data['Sysctls']);
        }
        if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $value_69 = $data['Runtime'];
            if (is_string($data['Runtime'])) {
                $value_69 = $data['Runtime'];
            } elseif (null === $data['Runtime']) {
                $value_69 = $data['Runtime'];
            }
            $object->runtime = $value_69;
            unset($data['Runtime']);
        } elseif (array_key_exists('Runtime', $data)) {
            $object->runtime = null;
            unset($data['Runtime']);
        }
        if (array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $value_70 = $data['Isolation'];
            if (is_string($data['Isolation'])) {
                $value_70 = $data['Isolation'];
            } elseif (null === $data['Isolation']) {
                $value_70 = $data['Isolation'];
            }
            $object->isolation = $value_70;
            unset($data['Isolation']);
        } elseif (array_key_exists('Isolation', $data)) {
            $object->isolation = null;
            unset($data['Isolation']);
        }
        if (array_key_exists('MaskedPaths', $data) && null !== $data['MaskedPaths']) {
            $values_28 = [];
            foreach ($data['MaskedPaths'] as $value_71) {
                $values_28[] = $value_71;
            }
            $object->maskedPaths = $values_28;
            unset($data['MaskedPaths']);
        } elseif (array_key_exists('MaskedPaths', $data)) {
            $object->maskedPaths = null;
            unset($data['MaskedPaths']);
        }
        if (array_key_exists('ReadonlyPaths', $data) && null !== $data['ReadonlyPaths']) {
            $values_29 = [];
            foreach ($data['ReadonlyPaths'] as $value_72) {
                $values_29[] = $value_72;
            }
            $object->readonlyPaths = $values_29;
            unset($data['ReadonlyPaths']);
        } elseif (array_key_exists('ReadonlyPaths', $data)) {
            $object->readonlyPaths = null;
            unset($data['ReadonlyPaths']);
        }
        foreach ($data as $key_5 => $value_73) {
            if (preg_match('/.*/', (string) $key_5)) {
                $object[$key_5] = $value_73;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('cpuShares', get_object_vars($data)) && null !== ($data->cpuShares ?? null)) {
            $value = $data->cpuShares;
            if (is_int($data->cpuShares)) {
                $value = $data->cpuShares;
            } elseif (null === $data->cpuShares) {
                $value = $data->cpuShares;
            }
            $dataArray['CpuShares'] = $value;
        }
        if (array_key_exists('memory', get_object_vars($data)) && null !== ($data->memory ?? null)) {
            $value_1 = $data->memory;
            if (is_int($data->memory)) {
                $value_1 = $data->memory;
            } elseif (null === $data->memory) {
                $value_1 = $data->memory;
            }
            $dataArray['Memory'] = $value_1;
        }
        if (array_key_exists('cgroupParent', get_object_vars($data)) && null !== ($data->cgroupParent ?? null)) {
            $value_2 = $data->cgroupParent;
            if (is_string($data->cgroupParent)) {
                $value_2 = $data->cgroupParent;
            } elseif (null === $data->cgroupParent) {
                $value_2 = $data->cgroupParent;
            }
            $dataArray['CgroupParent'] = $value_2;
        }
        if (array_key_exists('blkioWeight', get_object_vars($data)) && null !== ($data->blkioWeight ?? null)) {
            $value_3 = $data->blkioWeight;
            if (is_int($data->blkioWeight)) {
                $value_3 = $data->blkioWeight;
            } elseif (null === $data->blkioWeight) {
                $value_3 = $data->blkioWeight;
            }
            $dataArray['BlkioWeight'] = $value_3;
        }
        if (array_key_exists('blkioWeightDevice', get_object_vars($data)) && null !== ($data->blkioWeightDevice ?? null)) {
            $values = [];
            foreach ($data->blkioWeightDevice as $value_4) {
                $normalized = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['BlkioWeightDevice'] = $values;
        }
        if (array_key_exists('blkioDeviceReadBps', get_object_vars($data)) && null !== ($data->blkioDeviceReadBps ?? null)) {
            $values_1 = [];
            foreach ($data->blkioDeviceReadBps as $value_5) {
                $normalized_1 = null === $value_5 ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_1[]   = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['BlkioDeviceReadBps'] = $values_1;
        }
        if (array_key_exists('blkioDeviceWriteBps', get_object_vars($data)) && null !== ($data->blkioDeviceWriteBps ?? null)) {
            $values_2 = [];
            foreach ($data->blkioDeviceWriteBps as $value_6) {
                $normalized_2 = null === $value_6 ? null : $this->normalizer->normalize($value_6, 'json', $context);
                $values_2[]   = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['BlkioDeviceWriteBps'] = $values_2;
        }
        if (array_key_exists('blkioDeviceReadIOps', get_object_vars($data)) && null !== ($data->blkioDeviceReadIOps ?? null)) {
            $values_3 = [];
            foreach ($data->blkioDeviceReadIOps as $value_7) {
                $normalized_3 = null === $value_7 ? null : $this->normalizer->normalize($value_7, 'json', $context);
                $values_3[]   = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['BlkioDeviceReadIOps'] = $values_3;
        }
        if (array_key_exists('blkioDeviceWriteIOps', get_object_vars($data)) && null !== ($data->blkioDeviceWriteIOps ?? null)) {
            $values_4 = [];
            foreach ($data->blkioDeviceWriteIOps as $value_8) {
                $normalized_4 = null === $value_8 ? null : $this->normalizer->normalize($value_8, 'json', $context);
                $values_4[]   = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['BlkioDeviceWriteIOps'] = $values_4;
        }
        if (array_key_exists('cpuPeriod', get_object_vars($data)) && null !== ($data->cpuPeriod ?? null)) {
            $value_9 = $data->cpuPeriod;
            if (is_int($data->cpuPeriod)) {
                $value_9 = $data->cpuPeriod;
            } elseif (null === $data->cpuPeriod) {
                $value_9 = $data->cpuPeriod;
            }
            $dataArray['CpuPeriod'] = $value_9;
        }
        if (array_key_exists('cpuQuota', get_object_vars($data)) && null !== ($data->cpuQuota ?? null)) {
            $value_10 = $data->cpuQuota;
            if (is_int($data->cpuQuota)) {
                $value_10 = $data->cpuQuota;
            } elseif (null === $data->cpuQuota) {
                $value_10 = $data->cpuQuota;
            }
            $dataArray['CpuQuota'] = $value_10;
        }
        if (array_key_exists('cpuRealtimePeriod', get_object_vars($data)) && null !== ($data->cpuRealtimePeriod ?? null)) {
            $value_11 = $data->cpuRealtimePeriod;
            if (is_int($data->cpuRealtimePeriod)) {
                $value_11 = $data->cpuRealtimePeriod;
            } elseif (null === $data->cpuRealtimePeriod) {
                $value_11 = $data->cpuRealtimePeriod;
            }
            $dataArray['CpuRealtimePeriod'] = $value_11;
        }
        if (array_key_exists('cpuRealtimeRuntime', get_object_vars($data)) && null !== ($data->cpuRealtimeRuntime ?? null)) {
            $value_12 = $data->cpuRealtimeRuntime;
            if (is_int($data->cpuRealtimeRuntime)) {
                $value_12 = $data->cpuRealtimeRuntime;
            } elseif (null === $data->cpuRealtimeRuntime) {
                $value_12 = $data->cpuRealtimeRuntime;
            }
            $dataArray['CpuRealtimeRuntime'] = $value_12;
        }
        if (array_key_exists('cpusetCpus', get_object_vars($data)) && null !== ($data->cpusetCpus ?? null)) {
            $value_13 = $data->cpusetCpus;
            if (is_string($data->cpusetCpus)) {
                $value_13 = $data->cpusetCpus;
            } elseif (null === $data->cpusetCpus) {
                $value_13 = $data->cpusetCpus;
            }
            $dataArray['CpusetCpus'] = $value_13;
        }
        if (array_key_exists('cpusetMems', get_object_vars($data)) && null !== ($data->cpusetMems ?? null)) {
            $value_14 = $data->cpusetMems;
            if (is_string($data->cpusetMems)) {
                $value_14 = $data->cpusetMems;
            } elseif (null === $data->cpusetMems) {
                $value_14 = $data->cpusetMems;
            }
            $dataArray['CpusetMems'] = $value_14;
        }
        if (array_key_exists('devices', get_object_vars($data)) && null !== ($data->devices ?? null)) {
            $values_5 = [];
            foreach ($data->devices as $value_15) {
                $normalized_5 = null === $value_15 ? null : $this->normalizer->normalize($value_15, 'json', $context);
                $values_5[]   = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['Devices'] = $values_5;
        }
        if (array_key_exists('deviceCgroupRules', get_object_vars($data)) && null !== ($data->deviceCgroupRules ?? null)) {
            $values_6 = [];
            foreach ($data->deviceCgroupRules as $value_16) {
                $values_6[] = $value_16;
            }
            $dataArray['DeviceCgroupRules'] = $values_6;
        }
        if (array_key_exists('deviceRequests', get_object_vars($data)) && null !== ($data->deviceRequests ?? null)) {
            $values_7 = [];
            foreach ($data->deviceRequests as $value_17) {
                $normalized_6 = null === $value_17 ? null : $this->normalizer->normalize($value_17, 'json', $context);
                $values_7[]   = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['DeviceRequests'] = $values_7;
        }
        if (array_key_exists('memoryReservation', get_object_vars($data)) && null !== ($data->memoryReservation ?? null)) {
            $value_18 = $data->memoryReservation;
            if (is_int($data->memoryReservation)) {
                $value_18 = $data->memoryReservation;
            } elseif (null === $data->memoryReservation) {
                $value_18 = $data->memoryReservation;
            }
            $dataArray['MemoryReservation'] = $value_18;
        }
        if (array_key_exists('memorySwap', get_object_vars($data)) && null !== ($data->memorySwap ?? null)) {
            $value_19 = $data->memorySwap;
            if (is_int($data->memorySwap)) {
                $value_19 = $data->memorySwap;
            } elseif (null === $data->memorySwap) {
                $value_19 = $data->memorySwap;
            }
            $dataArray['MemorySwap'] = $value_19;
        }
        if (array_key_exists('memorySwappiness', get_object_vars($data)) && null !== ($data->memorySwappiness ?? null)) {
            $value_20 = $data->memorySwappiness;
            if (is_int($data->memorySwappiness)) {
                $value_20 = $data->memorySwappiness;
            } elseif (null === $data->memorySwappiness) {
                $value_20 = $data->memorySwappiness;
            }
            $dataArray['MemorySwappiness'] = $value_20;
        }
        if (array_key_exists('nanoCpus', get_object_vars($data)) && null !== ($data->nanoCpus ?? null)) {
            $value_21 = $data->nanoCpus;
            if (is_int($data->nanoCpus)) {
                $value_21 = $data->nanoCpus;
            } elseif (null === $data->nanoCpus) {
                $value_21 = $data->nanoCpus;
            }
            $dataArray['NanoCpus'] = $value_21;
        }
        if (array_key_exists('oomKillDisable', get_object_vars($data)) && null !== ($data->oomKillDisable ?? null)) {
            $value_22 = $data->oomKillDisable;
            if (is_bool($data->oomKillDisable)) {
                $value_22 = $data->oomKillDisable;
            } elseif (null === $data->oomKillDisable) {
                $value_22 = $data->oomKillDisable;
            }
            $dataArray['OomKillDisable'] = $value_22;
        }
        if (array_key_exists('init', get_object_vars($data)) && null !== ($data->init ?? null)) {
            $value_23 = $data->init;
            if (is_bool($data->init)) {
                $value_23 = $data->init;
            } elseif (null === $data->init) {
                $value_23 = $data->init;
            }
            $dataArray['Init'] = $value_23;
        }
        if (array_key_exists('pidsLimit', get_object_vars($data)) && null !== ($data->pidsLimit ?? null)) {
            $value_24 = $data->pidsLimit;
            if (is_int($data->pidsLimit)) {
                $value_24 = $data->pidsLimit;
            } elseif (null === $data->pidsLimit) {
                $value_24 = $data->pidsLimit;
            }
            $dataArray['PidsLimit'] = $value_24;
        }
        if (array_key_exists('ulimits', get_object_vars($data)) && null !== ($data->ulimits ?? null)) {
            $values_8 = [];
            foreach ($data->ulimits as $value_25) {
                $normalized_7 = null === $value_25 ? null : $this->normalizer->normalize($value_25, 'json', $context);
                $values_8[]   = is_iterable($normalized_7) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_7) : $normalized_7;
            }
            $dataArray['Ulimits'] = $values_8;
        }
        if (array_key_exists('cpuCount', get_object_vars($data)) && null !== ($data->cpuCount ?? null)) {
            $value_26 = $data->cpuCount;
            if (is_int($data->cpuCount)) {
                $value_26 = $data->cpuCount;
            } elseif (null === $data->cpuCount) {
                $value_26 = $data->cpuCount;
            }
            $dataArray['CpuCount'] = $value_26;
        }
        if (array_key_exists('cpuPercent', get_object_vars($data)) && null !== ($data->cpuPercent ?? null)) {
            $value_27 = $data->cpuPercent;
            if (is_int($data->cpuPercent)) {
                $value_27 = $data->cpuPercent;
            } elseif (null === $data->cpuPercent) {
                $value_27 = $data->cpuPercent;
            }
            $dataArray['CpuPercent'] = $value_27;
        }
        if (array_key_exists('iOMaximumIOps', get_object_vars($data)) && null !== ($data->iOMaximumIOps ?? null)) {
            $value_28 = $data->iOMaximumIOps;
            if (is_int($data->iOMaximumIOps)) {
                $value_28 = $data->iOMaximumIOps;
            } elseif (null === $data->iOMaximumIOps) {
                $value_28 = $data->iOMaximumIOps;
            }
            $dataArray['IOMaximumIOps'] = $value_28;
        }
        if (array_key_exists('iOMaximumBandwidth', get_object_vars($data)) && null !== ($data->iOMaximumBandwidth ?? null)) {
            $value_29 = $data->iOMaximumBandwidth;
            if (is_int($data->iOMaximumBandwidth)) {
                $value_29 = $data->iOMaximumBandwidth;
            } elseif (null === $data->iOMaximumBandwidth) {
                $value_29 = $data->iOMaximumBandwidth;
            }
            $dataArray['IOMaximumBandwidth'] = $value_29;
        }
        if (array_key_exists('binds', get_object_vars($data)) && null !== ($data->binds ?? null)) {
            $values_9 = [];
            foreach ($data->binds as $value_30) {
                $values_9[] = $value_30;
            }
            $dataArray['Binds'] = $values_9;
        }
        if (array_key_exists('containerIDFile', get_object_vars($data)) && null !== ($data->containerIDFile ?? null)) {
            $value_31 = $data->containerIDFile;
            if (is_string($data->containerIDFile)) {
                $value_31 = $data->containerIDFile;
            } elseif (null === $data->containerIDFile) {
                $value_31 = $data->containerIDFile;
            }
            $dataArray['ContainerIDFile'] = $value_31;
        }
        if (array_key_exists('logConfig', get_object_vars($data)) && null !== ($data->logConfig ?? null)) {
            $normalized_8           = $this->normalizer->normalize($data->logConfig, 'json', $context);
            $dataArray['LogConfig'] = is_iterable($normalized_8) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_8) : $normalized_8;
        }
        if (array_key_exists('networkMode', get_object_vars($data)) && null !== ($data->networkMode ?? null)) {
            $value_32 = $data->networkMode;
            if (is_string($data->networkMode)) {
                $value_32 = $data->networkMode;
            } elseif (null === $data->networkMode) {
                $value_32 = $data->networkMode;
            }
            $dataArray['NetworkMode'] = $value_32;
        }
        if (array_key_exists('portBindings', get_object_vars($data)) && null !== ($data->portBindings ?? null)) {
            $value_33 = $data->portBindings;
            if (is_iterable($data->portBindings)) {
                $values_10 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->portBindings as $key => $value_34) {
                    $values_11 = [];
                    foreach ($value_34 as $value_35) {
                        $normalized_9 = null === $value_35 ? null : $this->normalizer->normalize($value_35, 'json', $context);
                        $values_11[]  = is_iterable($normalized_9) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_9) : $normalized_9;
                    }
                    $values_10[$key] = $values_11;
                }
                $value_33 = $values_10;
            } elseif (null === $data->portBindings) {
                $value_33 = $data->portBindings;
            }
            $dataArray['PortBindings'] = $value_33;
        }
        if (array_key_exists('restartPolicy', get_object_vars($data)) && null !== ($data->restartPolicy ?? null)) {
            $normalized_10              = $this->normalizer->normalize($data->restartPolicy, 'json', $context);
            $dataArray['RestartPolicy'] = is_iterable($normalized_10) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_10) : $normalized_10;
        }
        if (array_key_exists('autoRemove', get_object_vars($data)) && null !== ($data->autoRemove ?? null)) {
            $value_36 = $data->autoRemove;
            if (is_bool($data->autoRemove)) {
                $value_36 = $data->autoRemove;
            } elseif (null === $data->autoRemove) {
                $value_36 = $data->autoRemove;
            }
            $dataArray['AutoRemove'] = $value_36;
        }
        if (array_key_exists('volumeDriver', get_object_vars($data)) && null !== ($data->volumeDriver ?? null)) {
            $value_37 = $data->volumeDriver;
            if (is_string($data->volumeDriver)) {
                $value_37 = $data->volumeDriver;
            } elseif (null === $data->volumeDriver) {
                $value_37 = $data->volumeDriver;
            }
            $dataArray['VolumeDriver'] = $value_37;
        }
        if (array_key_exists('volumesFrom', get_object_vars($data)) && null !== ($data->volumesFrom ?? null)) {
            $values_12 = [];
            foreach ($data->volumesFrom as $value_38) {
                $values_12[] = $value_38;
            }
            $dataArray['VolumesFrom'] = $values_12;
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_13 = [];
            foreach ($data->mounts as $value_39) {
                $normalized_11 = null === $value_39 ? null : $this->normalizer->normalize($value_39, 'json', $context);
                $values_13[]   = is_iterable($normalized_11) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_11) : $normalized_11;
            }
            $dataArray['Mounts'] = $values_13;
        }
        if (array_key_exists('consoleSize', get_object_vars($data)) && null !== ($data->consoleSize ?? null)) {
            $values_14 = [];
            foreach ($data->consoleSize as $value_40) {
                $values_14[] = $value_40;
            }
            $dataArray['ConsoleSize'] = $values_14;
        }
        if (array_key_exists('annotations', get_object_vars($data)) && null !== ($data->annotations ?? null)) {
            $value_41 = $data->annotations;
            if (is_iterable($data->annotations)) {
                $values_15 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->annotations as $key_1 => $value_42) {
                    $values_15[$key_1] = $value_42;
                }
                $value_41 = $values_15;
            } elseif (null === $data->annotations) {
                $value_41 = $data->annotations;
            }
            $dataArray['Annotations'] = $value_41;
        }
        if (array_key_exists('capAdd', get_object_vars($data)) && null !== ($data->capAdd ?? null)) {
            $values_16 = [];
            foreach ($data->capAdd as $value_43) {
                $values_16[] = $value_43;
            }
            $dataArray['CapAdd'] = $values_16;
        }
        if (array_key_exists('capDrop', get_object_vars($data)) && null !== ($data->capDrop ?? null)) {
            $values_17 = [];
            foreach ($data->capDrop as $value_44) {
                $values_17[] = $value_44;
            }
            $dataArray['CapDrop'] = $values_17;
        }
        if (array_key_exists('cgroupnsMode', get_object_vars($data)) && null !== ($data->cgroupnsMode ?? null)) {
            $value_45 = $data->cgroupnsMode;
            if (is_string($data->cgroupnsMode)) {
                $value_45 = $data->cgroupnsMode;
            } elseif (null === $data->cgroupnsMode) {
                $value_45 = $data->cgroupnsMode;
            }
            $dataArray['CgroupnsMode'] = $value_45;
        }
        if (array_key_exists('dns', get_object_vars($data)) && null !== ($data->dns ?? null)) {
            $values_18 = [];
            foreach ($data->dns as $value_46) {
                $values_18[] = $value_46;
            }
            $dataArray['Dns'] = $values_18;
        }
        if (array_key_exists('dnsOptions', get_object_vars($data)) && null !== ($data->dnsOptions ?? null)) {
            $values_19 = [];
            foreach ($data->dnsOptions as $value_47) {
                $values_19[] = $value_47;
            }
            $dataArray['DnsOptions'] = $values_19;
        }
        if (array_key_exists('dnsSearch', get_object_vars($data)) && null !== ($data->dnsSearch ?? null)) {
            $values_20 = [];
            foreach ($data->dnsSearch as $value_48) {
                $values_20[] = $value_48;
            }
            $dataArray['DnsSearch'] = $values_20;
        }
        if (array_key_exists('extraHosts', get_object_vars($data)) && null !== ($data->extraHosts ?? null)) {
            $values_21 = [];
            foreach ($data->extraHosts as $value_49) {
                $values_21[] = $value_49;
            }
            $dataArray['ExtraHosts'] = $values_21;
        }
        if (array_key_exists('groupAdd', get_object_vars($data)) && null !== ($data->groupAdd ?? null)) {
            $values_22 = [];
            foreach ($data->groupAdd as $value_50) {
                $values_22[] = $value_50;
            }
            $dataArray['GroupAdd'] = $values_22;
        }
        if (array_key_exists('ipcMode', get_object_vars($data)) && null !== ($data->ipcMode ?? null)) {
            $value_51 = $data->ipcMode;
            if (is_string($data->ipcMode)) {
                $value_51 = $data->ipcMode;
            } elseif (null === $data->ipcMode) {
                $value_51 = $data->ipcMode;
            }
            $dataArray['IpcMode'] = $value_51;
        }
        if (array_key_exists('cgroup', get_object_vars($data)) && null !== ($data->cgroup ?? null)) {
            $value_52 = $data->cgroup;
            if (is_string($data->cgroup)) {
                $value_52 = $data->cgroup;
            } elseif (null === $data->cgroup) {
                $value_52 = $data->cgroup;
            }
            $dataArray['Cgroup'] = $value_52;
        }
        if (array_key_exists('links', get_object_vars($data)) && null !== ($data->links ?? null)) {
            $values_23 = [];
            foreach ($data->links as $value_53) {
                $values_23[] = $value_53;
            }
            $dataArray['Links'] = $values_23;
        }
        if (array_key_exists('oomScoreAdj', get_object_vars($data)) && null !== ($data->oomScoreAdj ?? null)) {
            $value_54 = $data->oomScoreAdj;
            if (is_int($data->oomScoreAdj)) {
                $value_54 = $data->oomScoreAdj;
            } elseif (null === $data->oomScoreAdj) {
                $value_54 = $data->oomScoreAdj;
            }
            $dataArray['OomScoreAdj'] = $value_54;
        }
        if (array_key_exists('pidMode', get_object_vars($data)) && null !== ($data->pidMode ?? null)) {
            $value_55 = $data->pidMode;
            if (is_string($data->pidMode)) {
                $value_55 = $data->pidMode;
            } elseif (null === $data->pidMode) {
                $value_55 = $data->pidMode;
            }
            $dataArray['PidMode'] = $value_55;
        }
        if (array_key_exists('privileged', get_object_vars($data)) && null !== ($data->privileged ?? null)) {
            $value_56 = $data->privileged;
            if (is_bool($data->privileged)) {
                $value_56 = $data->privileged;
            } elseif (null === $data->privileged) {
                $value_56 = $data->privileged;
            }
            $dataArray['Privileged'] = $value_56;
        }
        if (array_key_exists('publishAllPorts', get_object_vars($data)) && null !== ($data->publishAllPorts ?? null)) {
            $value_57 = $data->publishAllPorts;
            if (is_bool($data->publishAllPorts)) {
                $value_57 = $data->publishAllPorts;
            } elseif (null === $data->publishAllPorts) {
                $value_57 = $data->publishAllPorts;
            }
            $dataArray['PublishAllPorts'] = $value_57;
        }
        if (array_key_exists('readonlyRootfs', get_object_vars($data)) && null !== ($data->readonlyRootfs ?? null)) {
            $value_58 = $data->readonlyRootfs;
            if (is_bool($data->readonlyRootfs)) {
                $value_58 = $data->readonlyRootfs;
            } elseif (null === $data->readonlyRootfs) {
                $value_58 = $data->readonlyRootfs;
            }
            $dataArray['ReadonlyRootfs'] = $value_58;
        }
        if (array_key_exists('securityOpt', get_object_vars($data)) && null !== ($data->securityOpt ?? null)) {
            $values_24 = [];
            foreach ($data->securityOpt as $value_59) {
                $values_24[] = $value_59;
            }
            $dataArray['SecurityOpt'] = $values_24;
        }
        if (array_key_exists('storageOpt', get_object_vars($data)) && null !== ($data->storageOpt ?? null)) {
            $value_60 = $data->storageOpt;
            if (is_iterable($data->storageOpt)) {
                $values_25 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->storageOpt as $key_2 => $value_61) {
                    $values_25[$key_2] = $value_61;
                }
                $value_60 = $values_25;
            } elseif (null === $data->storageOpt) {
                $value_60 = $data->storageOpt;
            }
            $dataArray['StorageOpt'] = $value_60;
        }
        if (array_key_exists('tmpfs', get_object_vars($data)) && null !== ($data->tmpfs ?? null)) {
            $value_62 = $data->tmpfs;
            if (is_iterable($data->tmpfs)) {
                $values_26 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->tmpfs as $key_3 => $value_63) {
                    $values_26[$key_3] = $value_63;
                }
                $value_62 = $values_26;
            } elseif (null === $data->tmpfs) {
                $value_62 = $data->tmpfs;
            }
            $dataArray['Tmpfs'] = $value_62;
        }
        if (array_key_exists('uTSMode', get_object_vars($data)) && null !== ($data->uTSMode ?? null)) {
            $value_64 = $data->uTSMode;
            if (is_string($data->uTSMode)) {
                $value_64 = $data->uTSMode;
            } elseif (null === $data->uTSMode) {
                $value_64 = $data->uTSMode;
            }
            $dataArray['UTSMode'] = $value_64;
        }
        if (array_key_exists('usernsMode', get_object_vars($data)) && null !== ($data->usernsMode ?? null)) {
            $value_65 = $data->usernsMode;
            if (is_string($data->usernsMode)) {
                $value_65 = $data->usernsMode;
            } elseif (null === $data->usernsMode) {
                $value_65 = $data->usernsMode;
            }
            $dataArray['UsernsMode'] = $value_65;
        }
        if (array_key_exists('shmSize', get_object_vars($data)) && null !== ($data->shmSize ?? null)) {
            $value_66 = $data->shmSize;
            if (is_int($data->shmSize)) {
                $value_66 = $data->shmSize;
            } elseif (null === $data->shmSize) {
                $value_66 = $data->shmSize;
            }
            $dataArray['ShmSize'] = $value_66;
        }
        if (array_key_exists('sysctls', get_object_vars($data)) && null !== ($data->sysctls ?? null)) {
            $value_67 = $data->sysctls;
            if (is_iterable($data->sysctls)) {
                $values_27 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->sysctls as $key_4 => $value_68) {
                    $values_27[$key_4] = $value_68;
                }
                $value_67 = $values_27;
            } elseif (null === $data->sysctls) {
                $value_67 = $data->sysctls;
            }
            $dataArray['Sysctls'] = $value_67;
        }
        if (array_key_exists('runtime', get_object_vars($data)) && null !== ($data->runtime ?? null)) {
            $value_69 = $data->runtime;
            if (is_string($data->runtime)) {
                $value_69 = $data->runtime;
            } elseif (null === $data->runtime) {
                $value_69 = $data->runtime;
            }
            $dataArray['Runtime'] = $value_69;
        }
        if (array_key_exists('isolation', get_object_vars($data)) && null !== ($data->isolation ?? null)) {
            $value_70 = $data->isolation;
            if (is_string($data->isolation)) {
                $value_70 = $data->isolation;
            } elseif (null === $data->isolation) {
                $value_70 = $data->isolation;
            }
            $dataArray['Isolation'] = $value_70;
        }
        if (array_key_exists('maskedPaths', get_object_vars($data)) && null !== ($data->maskedPaths ?? null)) {
            $values_28 = [];
            foreach ($data->maskedPaths as $value_71) {
                $values_28[] = $value_71;
            }
            $dataArray['MaskedPaths'] = $values_28;
        }
        if (array_key_exists('readonlyPaths', get_object_vars($data)) && null !== ($data->readonlyPaths ?? null)) {
            $values_29 = [];
            foreach ($data->readonlyPaths as $value_72) {
                $values_29[] = $value_72;
            }
            $dataArray['ReadonlyPaths'] = $values_29;
        }
        foreach ($data->additionalPropertyEntries() as $key_5 => $value_73) {
            if (preg_match('/.*/', (string) $key_5)) {
                $dataArray[$key_5] = $value_73;
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
