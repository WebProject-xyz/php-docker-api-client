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
            $object->setCpuShares($value);
        } elseif (array_key_exists('CpuShares', $data) && null === $data['CpuShares']) {
            $object->setCpuShares(null);
        }
        if (array_key_exists('Memory', $data) && null !== $data['Memory']) {
            $value_1 = $data['Memory'];
            if (is_int($data['Memory'])) {
                $value_1 = $data['Memory'];
            } elseif (null === $data['Memory']) {
                $value_1 = $data['Memory'];
            }
            $object->setMemory($value_1);
        } elseif (array_key_exists('Memory', $data) && null === $data['Memory']) {
            $object->setMemory(null);
        }
        if (array_key_exists('CgroupParent', $data) && null !== $data['CgroupParent']) {
            $value_2 = $data['CgroupParent'];
            if (is_string($data['CgroupParent'])) {
                $value_2 = $data['CgroupParent'];
            } elseif (null === $data['CgroupParent']) {
                $value_2 = $data['CgroupParent'];
            }
            $object->setCgroupParent($value_2);
        } elseif (array_key_exists('CgroupParent', $data) && null === $data['CgroupParent']) {
            $object->setCgroupParent(null);
        }
        if (array_key_exists('BlkioWeight', $data) && null !== $data['BlkioWeight']) {
            $value_3 = $data['BlkioWeight'];
            if (is_int($data['BlkioWeight'])) {
                $value_3 = $data['BlkioWeight'];
            } elseif (null === $data['BlkioWeight']) {
                $value_3 = $data['BlkioWeight'];
            }
            $object->setBlkioWeight($value_3);
        } elseif (array_key_exists('BlkioWeight', $data) && null === $data['BlkioWeight']) {
            $object->setBlkioWeight(null);
        }
        if (array_key_exists('BlkioWeightDevice', $data) && null !== $data['BlkioWeightDevice']) {
            $value_4 = $data['BlkioWeightDevice'];
            if (is_array($data['BlkioWeightDevice']) && $this->isOnlyNumericKeys($data['BlkioWeightDevice'])) {
                $values = [];
                foreach ($data['BlkioWeightDevice'] as $value_5) {
                    $values[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
                }
                $value_4 = $values;
            } elseif (null === $data['BlkioWeightDevice']) {
                $value_4 = $data['BlkioWeightDevice'];
            }
            $object->setBlkioWeightDevice($value_4);
        } elseif (array_key_exists('BlkioWeightDevice', $data) && null === $data['BlkioWeightDevice']) {
            $object->setBlkioWeightDevice(null);
        }
        if (array_key_exists('BlkioDeviceReadBps', $data) && null !== $data['BlkioDeviceReadBps']) {
            $value_6 = $data['BlkioDeviceReadBps'];
            if (is_array($data['BlkioDeviceReadBps']) && $this->isOnlyNumericKeys($data['BlkioDeviceReadBps'])) {
                $values_1 = [];
                foreach ($data['BlkioDeviceReadBps'] as $value_7) {
                    $values_1[] = $this->denormalizer->denormalize($value_7, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $value_6 = $values_1;
            } elseif (null === $data['BlkioDeviceReadBps']) {
                $value_6 = $data['BlkioDeviceReadBps'];
            }
            $object->setBlkioDeviceReadBps($value_6);
        } elseif (array_key_exists('BlkioDeviceReadBps', $data) && null === $data['BlkioDeviceReadBps']) {
            $object->setBlkioDeviceReadBps(null);
        }
        if (array_key_exists('BlkioDeviceWriteBps', $data) && null !== $data['BlkioDeviceWriteBps']) {
            $value_8 = $data['BlkioDeviceWriteBps'];
            if (is_array($data['BlkioDeviceWriteBps']) && $this->isOnlyNumericKeys($data['BlkioDeviceWriteBps'])) {
                $values_2 = [];
                foreach ($data['BlkioDeviceWriteBps'] as $value_9) {
                    $values_2[] = $this->denormalizer->denormalize($value_9, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $value_8 = $values_2;
            } elseif (null === $data['BlkioDeviceWriteBps']) {
                $value_8 = $data['BlkioDeviceWriteBps'];
            }
            $object->setBlkioDeviceWriteBps($value_8);
        } elseif (array_key_exists('BlkioDeviceWriteBps', $data) && null === $data['BlkioDeviceWriteBps']) {
            $object->setBlkioDeviceWriteBps(null);
        }
        if (array_key_exists('BlkioDeviceReadIOps', $data) && null !== $data['BlkioDeviceReadIOps']) {
            $value_10 = $data['BlkioDeviceReadIOps'];
            if (is_array($data['BlkioDeviceReadIOps']) && $this->isOnlyNumericKeys($data['BlkioDeviceReadIOps'])) {
                $values_3 = [];
                foreach ($data['BlkioDeviceReadIOps'] as $value_11) {
                    $values_3[] = $this->denormalizer->denormalize($value_11, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $value_10 = $values_3;
            } elseif (null === $data['BlkioDeviceReadIOps']) {
                $value_10 = $data['BlkioDeviceReadIOps'];
            }
            $object->setBlkioDeviceReadIOps($value_10);
        } elseif (array_key_exists('BlkioDeviceReadIOps', $data) && null === $data['BlkioDeviceReadIOps']) {
            $object->setBlkioDeviceReadIOps(null);
        }
        if (array_key_exists('BlkioDeviceWriteIOps', $data) && null !== $data['BlkioDeviceWriteIOps']) {
            $value_12 = $data['BlkioDeviceWriteIOps'];
            if (is_array($data['BlkioDeviceWriteIOps']) && $this->isOnlyNumericKeys($data['BlkioDeviceWriteIOps'])) {
                $values_4 = [];
                foreach ($data['BlkioDeviceWriteIOps'] as $value_13) {
                    $values_4[] = $this->denormalizer->denormalize($value_13, \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class, 'json', $context);
                }
                $value_12 = $values_4;
            } elseif (null === $data['BlkioDeviceWriteIOps']) {
                $value_12 = $data['BlkioDeviceWriteIOps'];
            }
            $object->setBlkioDeviceWriteIOps($value_12);
        } elseif (array_key_exists('BlkioDeviceWriteIOps', $data) && null === $data['BlkioDeviceWriteIOps']) {
            $object->setBlkioDeviceWriteIOps(null);
        }
        if (array_key_exists('CpuPeriod', $data) && null !== $data['CpuPeriod']) {
            $value_14 = $data['CpuPeriod'];
            if (is_int($data['CpuPeriod'])) {
                $value_14 = $data['CpuPeriod'];
            } elseif (null === $data['CpuPeriod']) {
                $value_14 = $data['CpuPeriod'];
            }
            $object->setCpuPeriod($value_14);
        } elseif (array_key_exists('CpuPeriod', $data) && null === $data['CpuPeriod']) {
            $object->setCpuPeriod(null);
        }
        if (array_key_exists('CpuQuota', $data) && null !== $data['CpuQuota']) {
            $value_15 = $data['CpuQuota'];
            if (is_int($data['CpuQuota'])) {
                $value_15 = $data['CpuQuota'];
            } elseif (null === $data['CpuQuota']) {
                $value_15 = $data['CpuQuota'];
            }
            $object->setCpuQuota($value_15);
        } elseif (array_key_exists('CpuQuota', $data) && null === $data['CpuQuota']) {
            $object->setCpuQuota(null);
        }
        if (array_key_exists('CpuRealtimePeriod', $data) && null !== $data['CpuRealtimePeriod']) {
            $value_16 = $data['CpuRealtimePeriod'];
            if (is_int($data['CpuRealtimePeriod'])) {
                $value_16 = $data['CpuRealtimePeriod'];
            } elseif (null === $data['CpuRealtimePeriod']) {
                $value_16 = $data['CpuRealtimePeriod'];
            }
            $object->setCpuRealtimePeriod($value_16);
        } elseif (array_key_exists('CpuRealtimePeriod', $data) && null === $data['CpuRealtimePeriod']) {
            $object->setCpuRealtimePeriod(null);
        }
        if (array_key_exists('CpuRealtimeRuntime', $data) && null !== $data['CpuRealtimeRuntime']) {
            $value_17 = $data['CpuRealtimeRuntime'];
            if (is_int($data['CpuRealtimeRuntime'])) {
                $value_17 = $data['CpuRealtimeRuntime'];
            } elseif (null === $data['CpuRealtimeRuntime']) {
                $value_17 = $data['CpuRealtimeRuntime'];
            }
            $object->setCpuRealtimeRuntime($value_17);
        } elseif (array_key_exists('CpuRealtimeRuntime', $data) && null === $data['CpuRealtimeRuntime']) {
            $object->setCpuRealtimeRuntime(null);
        }
        if (array_key_exists('CpusetCpus', $data) && null !== $data['CpusetCpus']) {
            $value_18 = $data['CpusetCpus'];
            if (is_string($data['CpusetCpus'])) {
                $value_18 = $data['CpusetCpus'];
            } elseif (null === $data['CpusetCpus']) {
                $value_18 = $data['CpusetCpus'];
            }
            $object->setCpusetCpus($value_18);
        } elseif (array_key_exists('CpusetCpus', $data) && null === $data['CpusetCpus']) {
            $object->setCpusetCpus(null);
        }
        if (array_key_exists('CpusetMems', $data) && null !== $data['CpusetMems']) {
            $value_19 = $data['CpusetMems'];
            if (is_string($data['CpusetMems'])) {
                $value_19 = $data['CpusetMems'];
            } elseif (null === $data['CpusetMems']) {
                $value_19 = $data['CpusetMems'];
            }
            $object->setCpusetMems($value_19);
        } elseif (array_key_exists('CpusetMems', $data) && null === $data['CpusetMems']) {
            $object->setCpusetMems(null);
        }
        if (array_key_exists('Devices', $data) && null !== $data['Devices']) {
            $value_20 = $data['Devices'];
            if (is_array($data['Devices']) && $this->isOnlyNumericKeys($data['Devices'])) {
                $values_5 = [];
                foreach ($data['Devices'] as $value_21) {
                    $values_5[] = $this->denormalizer->denormalize($value_21, \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class, 'json', $context);
                }
                $value_20 = $values_5;
            } elseif (null === $data['Devices']) {
                $value_20 = $data['Devices'];
            }
            $object->setDevices($value_20);
        } elseif (array_key_exists('Devices', $data) && null === $data['Devices']) {
            $object->setDevices(null);
        }
        if (array_key_exists('DeviceCgroupRules', $data) && null !== $data['DeviceCgroupRules']) {
            $value_22 = $data['DeviceCgroupRules'];
            if (is_array($data['DeviceCgroupRules']) && $this->isOnlyNumericKeys($data['DeviceCgroupRules'])) {
                $values_6 = [];
                foreach ($data['DeviceCgroupRules'] as $value_23) {
                    $values_6[] = $value_23;
                }
                $value_22 = $values_6;
            } elseif (null === $data['DeviceCgroupRules']) {
                $value_22 = $data['DeviceCgroupRules'];
            }
            $object->setDeviceCgroupRules($value_22);
        } elseif (array_key_exists('DeviceCgroupRules', $data) && null === $data['DeviceCgroupRules']) {
            $object->setDeviceCgroupRules(null);
        }
        if (array_key_exists('DeviceRequests', $data) && null !== $data['DeviceRequests']) {
            $value_24 = $data['DeviceRequests'];
            if (is_array($data['DeviceRequests']) && $this->isOnlyNumericKeys($data['DeviceRequests'])) {
                $values_7 = [];
                foreach ($data['DeviceRequests'] as $value_25) {
                    $values_7[] = $this->denormalizer->denormalize($value_25, \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class, 'json', $context);
                }
                $value_24 = $values_7;
            } elseif (null === $data['DeviceRequests']) {
                $value_24 = $data['DeviceRequests'];
            }
            $object->setDeviceRequests($value_24);
        } elseif (array_key_exists('DeviceRequests', $data) && null === $data['DeviceRequests']) {
            $object->setDeviceRequests(null);
        }
        if (array_key_exists('MemoryReservation', $data) && null !== $data['MemoryReservation']) {
            $value_26 = $data['MemoryReservation'];
            if (is_int($data['MemoryReservation'])) {
                $value_26 = $data['MemoryReservation'];
            } elseif (null === $data['MemoryReservation']) {
                $value_26 = $data['MemoryReservation'];
            }
            $object->setMemoryReservation($value_26);
        } elseif (array_key_exists('MemoryReservation', $data) && null === $data['MemoryReservation']) {
            $object->setMemoryReservation(null);
        }
        if (array_key_exists('MemorySwap', $data) && null !== $data['MemorySwap']) {
            $value_27 = $data['MemorySwap'];
            if (is_int($data['MemorySwap'])) {
                $value_27 = $data['MemorySwap'];
            } elseif (null === $data['MemorySwap']) {
                $value_27 = $data['MemorySwap'];
            }
            $object->setMemorySwap($value_27);
        } elseif (array_key_exists('MemorySwap', $data) && null === $data['MemorySwap']) {
            $object->setMemorySwap(null);
        }
        if (array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
            $value_28 = $data['MemorySwappiness'];
            if (is_int($data['MemorySwappiness'])) {
                $value_28 = $data['MemorySwappiness'];
            } elseif (null === $data['MemorySwappiness']) {
                $value_28 = $data['MemorySwappiness'];
            }
            $object->setMemorySwappiness($value_28);
        } elseif (array_key_exists('MemorySwappiness', $data) && null === $data['MemorySwappiness']) {
            $object->setMemorySwappiness(null);
        }
        if (array_key_exists('NanoCpus', $data) && null !== $data['NanoCpus']) {
            $value_29 = $data['NanoCpus'];
            if (is_int($data['NanoCpus'])) {
                $value_29 = $data['NanoCpus'];
            } elseif (null === $data['NanoCpus']) {
                $value_29 = $data['NanoCpus'];
            }
            $object->setNanoCpus($value_29);
        } elseif (array_key_exists('NanoCpus', $data) && null === $data['NanoCpus']) {
            $object->setNanoCpus(null);
        }
        if (array_key_exists('OomKillDisable', $data) && null !== $data['OomKillDisable']) {
            $value_30 = $data['OomKillDisable'];
            if (is_bool($data['OomKillDisable'])) {
                $value_30 = $data['OomKillDisable'];
            } elseif (null === $data['OomKillDisable']) {
                $value_30 = $data['OomKillDisable'];
            }
            $object->setOomKillDisable($value_30);
        } elseif (array_key_exists('OomKillDisable', $data) && null === $data['OomKillDisable']) {
            $object->setOomKillDisable(null);
        }
        if (array_key_exists('Init', $data) && null !== $data['Init']) {
            $value_31 = $data['Init'];
            if (is_bool($data['Init'])) {
                $value_31 = $data['Init'];
            } elseif (null === $data['Init']) {
                $value_31 = $data['Init'];
            }
            $object->setInit($value_31);
        } elseif (array_key_exists('Init', $data) && null === $data['Init']) {
            $object->setInit(null);
        }
        if (array_key_exists('PidsLimit', $data) && null !== $data['PidsLimit']) {
            $value_32 = $data['PidsLimit'];
            if (is_int($data['PidsLimit'])) {
                $value_32 = $data['PidsLimit'];
            } elseif (null === $data['PidsLimit']) {
                $value_32 = $data['PidsLimit'];
            }
            $object->setPidsLimit($value_32);
        } elseif (array_key_exists('PidsLimit', $data) && null === $data['PidsLimit']) {
            $object->setPidsLimit(null);
        }
        if (array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
            $value_33 = $data['Ulimits'];
            if (is_array($data['Ulimits']) && $this->isOnlyNumericKeys($data['Ulimits'])) {
                $values_8 = [];
                foreach ($data['Ulimits'] as $value_34) {
                    $values_8[] = $this->denormalizer->denormalize($value_34, \WebProject\DockerApi\Library\Generated\Model\ResourcesUlimitsItem::class, 'json', $context);
                }
                $value_33 = $values_8;
            } elseif (null === $data['Ulimits']) {
                $value_33 = $data['Ulimits'];
            }
            $object->setUlimits($value_33);
        } elseif (array_key_exists('Ulimits', $data) && null === $data['Ulimits']) {
            $object->setUlimits(null);
        }
        if (array_key_exists('CpuCount', $data) && null !== $data['CpuCount']) {
            $value_35 = $data['CpuCount'];
            if (is_int($data['CpuCount'])) {
                $value_35 = $data['CpuCount'];
            } elseif (null === $data['CpuCount']) {
                $value_35 = $data['CpuCount'];
            }
            $object->setCpuCount($value_35);
        } elseif (array_key_exists('CpuCount', $data) && null === $data['CpuCount']) {
            $object->setCpuCount(null);
        }
        if (array_key_exists('CpuPercent', $data) && null !== $data['CpuPercent']) {
            $value_36 = $data['CpuPercent'];
            if (is_int($data['CpuPercent'])) {
                $value_36 = $data['CpuPercent'];
            } elseif (null === $data['CpuPercent']) {
                $value_36 = $data['CpuPercent'];
            }
            $object->setCpuPercent($value_36);
        } elseif (array_key_exists('CpuPercent', $data) && null === $data['CpuPercent']) {
            $object->setCpuPercent(null);
        }
        if (array_key_exists('IOMaximumIOps', $data) && null !== $data['IOMaximumIOps']) {
            $value_37 = $data['IOMaximumIOps'];
            if (is_int($data['IOMaximumIOps'])) {
                $value_37 = $data['IOMaximumIOps'];
            } elseif (null === $data['IOMaximumIOps']) {
                $value_37 = $data['IOMaximumIOps'];
            }
            $object->setIOMaximumIOps($value_37);
        } elseif (array_key_exists('IOMaximumIOps', $data) && null === $data['IOMaximumIOps']) {
            $object->setIOMaximumIOps(null);
        }
        if (array_key_exists('IOMaximumBandwidth', $data) && null !== $data['IOMaximumBandwidth']) {
            $value_38 = $data['IOMaximumBandwidth'];
            if (is_int($data['IOMaximumBandwidth'])) {
                $value_38 = $data['IOMaximumBandwidth'];
            } elseif (null === $data['IOMaximumBandwidth']) {
                $value_38 = $data['IOMaximumBandwidth'];
            }
            $object->setIOMaximumBandwidth($value_38);
        } elseif (array_key_exists('IOMaximumBandwidth', $data) && null === $data['IOMaximumBandwidth']) {
            $object->setIOMaximumBandwidth(null);
        }
        if (array_key_exists('Binds', $data) && null !== $data['Binds']) {
            $value_39 = $data['Binds'];
            if (is_array($data['Binds']) && $this->isOnlyNumericKeys($data['Binds'])) {
                $values_9 = [];
                foreach ($data['Binds'] as $value_40) {
                    $values_9[] = $value_40;
                }
                $value_39 = $values_9;
            } elseif (null === $data['Binds']) {
                $value_39 = $data['Binds'];
            }
            $object->setBinds($value_39);
        } elseif (array_key_exists('Binds', $data) && null === $data['Binds']) {
            $object->setBinds(null);
        }
        if (array_key_exists('ContainerIDFile', $data) && null !== $data['ContainerIDFile']) {
            $value_41 = $data['ContainerIDFile'];
            if (is_string($data['ContainerIDFile'])) {
                $value_41 = $data['ContainerIDFile'];
            } elseif (null === $data['ContainerIDFile']) {
                $value_41 = $data['ContainerIDFile'];
            }
            $object->setContainerIDFile($value_41);
        } elseif (array_key_exists('ContainerIDFile', $data) && null === $data['ContainerIDFile']) {
            $object->setContainerIDFile(null);
        }
        if (array_key_exists('LogConfig', $data) && null !== $data['LogConfig']) {
            $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfigLogConfig::class, 'json', $context));
        } elseif (array_key_exists('LogConfig', $data) && null === $data['LogConfig']) {
            $object->setLogConfig(null);
        }
        if (array_key_exists('NetworkMode', $data) && null !== $data['NetworkMode']) {
            $value_42 = $data['NetworkMode'];
            if (is_string($data['NetworkMode'])) {
                $value_42 = $data['NetworkMode'];
            } elseif (null === $data['NetworkMode']) {
                $value_42 = $data['NetworkMode'];
            }
            $object->setNetworkMode($value_42);
        } elseif (array_key_exists('NetworkMode', $data) && null === $data['NetworkMode']) {
            $object->setNetworkMode(null);
        }
        if (array_key_exists('PortBindings', $data) && null !== $data['PortBindings']) {
            $value_43 = $data['PortBindings'];
            if (is_array($data['PortBindings']) && $this->isOnlyNumericKeys($data['PortBindings'])) {
                $values_10 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PortBindings'] as $key => $value_44) {
                    $value_45 = $value_44;
                    if (is_array($value_44) && $this->isOnlyNumericKeys($value_44)) {
                        $values_11 = [];
                        foreach ($value_44 as $value_46) {
                            $values_11[] = $this->denormalizer->denormalize($value_46, \WebProject\DockerApi\Library\Generated\Model\PortBinding::class, 'json', $context);
                        }
                        $value_45 = $values_11;
                    } elseif (null === $value_44) {
                        $value_45 = $value_44;
                    }
                    $values_10[$key] = $value_45;
                }
                $value_43 = $values_10;
            } elseif (null === $data['PortBindings']) {
                $value_43 = $data['PortBindings'];
            }
            $object->setPortBindings($value_43);
        } elseif (array_key_exists('PortBindings', $data) && null === $data['PortBindings']) {
            $object->setPortBindings(null);
        }
        if (array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class, 'json', $context));
        }
        if (array_key_exists('AutoRemove', $data) && null !== $data['AutoRemove']) {
            $value_47 = $data['AutoRemove'];
            if (is_bool($data['AutoRemove'])) {
                $value_47 = $data['AutoRemove'];
            } elseif (null === $data['AutoRemove']) {
                $value_47 = $data['AutoRemove'];
            }
            $object->setAutoRemove($value_47);
        } elseif (array_key_exists('AutoRemove', $data) && null === $data['AutoRemove']) {
            $object->setAutoRemove(null);
        }
        if (array_key_exists('VolumeDriver', $data) && null !== $data['VolumeDriver']) {
            $value_48 = $data['VolumeDriver'];
            if (is_string($data['VolumeDriver'])) {
                $value_48 = $data['VolumeDriver'];
            } elseif (null === $data['VolumeDriver']) {
                $value_48 = $data['VolumeDriver'];
            }
            $object->setVolumeDriver($value_48);
        } elseif (array_key_exists('VolumeDriver', $data) && null === $data['VolumeDriver']) {
            $object->setVolumeDriver(null);
        }
        if (array_key_exists('VolumesFrom', $data) && null !== $data['VolumesFrom']) {
            $value_49 = $data['VolumesFrom'];
            if (is_array($data['VolumesFrom']) && $this->isOnlyNumericKeys($data['VolumesFrom'])) {
                $values_12 = [];
                foreach ($data['VolumesFrom'] as $value_50) {
                    $values_12[] = $value_50;
                }
                $value_49 = $values_12;
            } elseif (null === $data['VolumesFrom']) {
                $value_49 = $data['VolumesFrom'];
            }
            $object->setVolumesFrom($value_49);
        } elseif (array_key_exists('VolumesFrom', $data) && null === $data['VolumesFrom']) {
            $object->setVolumesFrom(null);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $value_51 = $data['Mounts'];
            if (is_array($data['Mounts']) && $this->isOnlyNumericKeys($data['Mounts'])) {
                $values_13 = [];
                foreach ($data['Mounts'] as $value_52) {
                    $values_13[] = $this->denormalizer->denormalize($value_52, \WebProject\DockerApi\Library\Generated\Model\Mount::class, 'json', $context);
                }
                $value_51 = $values_13;
            } elseif (null === $data['Mounts']) {
                $value_51 = $data['Mounts'];
            }
            $object->setMounts($value_51);
        } elseif (array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
            $value_53 = $data['ConsoleSize'];
            if (is_array($data['ConsoleSize']) && $this->isOnlyNumericKeys($data['ConsoleSize'])) {
                $values_14 = [];
                foreach ($data['ConsoleSize'] as $value_54) {
                    $values_14[] = $value_54;
                }
                $value_53 = $values_14;
            } elseif (null === $data['ConsoleSize']) {
                $value_53 = $data['ConsoleSize'];
            }
            $object->setConsoleSize($value_53);
        } elseif (array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
            $object->setConsoleSize(null);
        }
        if (array_key_exists('Annotations', $data) && null !== $data['Annotations']) {
            $value_55 = $data['Annotations'];
            if (is_array($data['Annotations']) && $this->isOnlyNumericKeys($data['Annotations'])) {
                $values_15 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Annotations'] as $key_1 => $value_56) {
                    $values_15[$key_1] = $value_56;
                }
                $value_55 = $values_15;
            } elseif (null === $data['Annotations']) {
                $value_55 = $data['Annotations'];
            }
            $object->setAnnotations($value_55);
        } elseif (array_key_exists('Annotations', $data) && null === $data['Annotations']) {
            $object->setAnnotations(null);
        }
        if (array_key_exists('CapAdd', $data) && null !== $data['CapAdd']) {
            $value_57 = $data['CapAdd'];
            if (is_array($data['CapAdd']) && $this->isOnlyNumericKeys($data['CapAdd'])) {
                $values_16 = [];
                foreach ($data['CapAdd'] as $value_58) {
                    $values_16[] = $value_58;
                }
                $value_57 = $values_16;
            } elseif (null === $data['CapAdd']) {
                $value_57 = $data['CapAdd'];
            }
            $object->setCapAdd($value_57);
        } elseif (array_key_exists('CapAdd', $data) && null === $data['CapAdd']) {
            $object->setCapAdd(null);
        }
        if (array_key_exists('CapDrop', $data) && null !== $data['CapDrop']) {
            $value_59 = $data['CapDrop'];
            if (is_array($data['CapDrop']) && $this->isOnlyNumericKeys($data['CapDrop'])) {
                $values_17 = [];
                foreach ($data['CapDrop'] as $value_60) {
                    $values_17[] = $value_60;
                }
                $value_59 = $values_17;
            } elseif (null === $data['CapDrop']) {
                $value_59 = $data['CapDrop'];
            }
            $object->setCapDrop($value_59);
        } elseif (array_key_exists('CapDrop', $data) && null === $data['CapDrop']) {
            $object->setCapDrop(null);
        }
        if (array_key_exists('CgroupnsMode', $data) && null !== $data['CgroupnsMode']) {
            $value_61 = $data['CgroupnsMode'];
            if (is_string($data['CgroupnsMode'])) {
                $value_61 = $data['CgroupnsMode'];
            } elseif (null === $data['CgroupnsMode']) {
                $value_61 = $data['CgroupnsMode'];
            }
            $object->setCgroupnsMode($value_61);
        } elseif (array_key_exists('CgroupnsMode', $data) && null === $data['CgroupnsMode']) {
            $object->setCgroupnsMode(null);
        }
        if (array_key_exists('Dns', $data) && null !== $data['Dns']) {
            $value_62 = $data['Dns'];
            if (is_array($data['Dns']) && $this->isOnlyNumericKeys($data['Dns'])) {
                $values_18 = [];
                foreach ($data['Dns'] as $value_63) {
                    $values_18[] = $value_63;
                }
                $value_62 = $values_18;
            } elseif (null === $data['Dns']) {
                $value_62 = $data['Dns'];
            }
            $object->setDns($value_62);
        } elseif (array_key_exists('Dns', $data) && null === $data['Dns']) {
            $object->setDns(null);
        }
        if (array_key_exists('DnsOptions', $data) && null !== $data['DnsOptions']) {
            $value_64 = $data['DnsOptions'];
            if (is_array($data['DnsOptions']) && $this->isOnlyNumericKeys($data['DnsOptions'])) {
                $values_19 = [];
                foreach ($data['DnsOptions'] as $value_65) {
                    $values_19[] = $value_65;
                }
                $value_64 = $values_19;
            } elseif (null === $data['DnsOptions']) {
                $value_64 = $data['DnsOptions'];
            }
            $object->setDnsOptions($value_64);
        } elseif (array_key_exists('DnsOptions', $data) && null === $data['DnsOptions']) {
            $object->setDnsOptions(null);
        }
        if (array_key_exists('DnsSearch', $data) && null !== $data['DnsSearch']) {
            $value_66 = $data['DnsSearch'];
            if (is_array($data['DnsSearch']) && $this->isOnlyNumericKeys($data['DnsSearch'])) {
                $values_20 = [];
                foreach ($data['DnsSearch'] as $value_67) {
                    $values_20[] = $value_67;
                }
                $value_66 = $values_20;
            } elseif (null === $data['DnsSearch']) {
                $value_66 = $data['DnsSearch'];
            }
            $object->setDnsSearch($value_66);
        } elseif (array_key_exists('DnsSearch', $data) && null === $data['DnsSearch']) {
            $object->setDnsSearch(null);
        }
        if (array_key_exists('ExtraHosts', $data) && null !== $data['ExtraHosts']) {
            $value_68 = $data['ExtraHosts'];
            if (is_array($data['ExtraHosts']) && $this->isOnlyNumericKeys($data['ExtraHosts'])) {
                $values_21 = [];
                foreach ($data['ExtraHosts'] as $value_69) {
                    $values_21[] = $value_69;
                }
                $value_68 = $values_21;
            } elseif (null === $data['ExtraHosts']) {
                $value_68 = $data['ExtraHosts'];
            }
            $object->setExtraHosts($value_68);
        } elseif (array_key_exists('ExtraHosts', $data) && null === $data['ExtraHosts']) {
            $object->setExtraHosts(null);
        }
        if (array_key_exists('GroupAdd', $data) && null !== $data['GroupAdd']) {
            $value_70 = $data['GroupAdd'];
            if (is_array($data['GroupAdd']) && $this->isOnlyNumericKeys($data['GroupAdd'])) {
                $values_22 = [];
                foreach ($data['GroupAdd'] as $value_71) {
                    $values_22[] = $value_71;
                }
                $value_70 = $values_22;
            } elseif (null === $data['GroupAdd']) {
                $value_70 = $data['GroupAdd'];
            }
            $object->setGroupAdd($value_70);
        } elseif (array_key_exists('GroupAdd', $data) && null === $data['GroupAdd']) {
            $object->setGroupAdd(null);
        }
        if (array_key_exists('IpcMode', $data) && null !== $data['IpcMode']) {
            $value_72 = $data['IpcMode'];
            if (is_string($data['IpcMode'])) {
                $value_72 = $data['IpcMode'];
            } elseif (null === $data['IpcMode']) {
                $value_72 = $data['IpcMode'];
            }
            $object->setIpcMode($value_72);
        } elseif (array_key_exists('IpcMode', $data) && null === $data['IpcMode']) {
            $object->setIpcMode(null);
        }
        if (array_key_exists('Cgroup', $data) && null !== $data['Cgroup']) {
            $value_73 = $data['Cgroup'];
            if (is_string($data['Cgroup'])) {
                $value_73 = $data['Cgroup'];
            } elseif (null === $data['Cgroup']) {
                $value_73 = $data['Cgroup'];
            }
            $object->setCgroup($value_73);
        } elseif (array_key_exists('Cgroup', $data) && null === $data['Cgroup']) {
            $object->setCgroup(null);
        }
        if (array_key_exists('Links', $data) && null !== $data['Links']) {
            $value_74 = $data['Links'];
            if (is_array($data['Links']) && $this->isOnlyNumericKeys($data['Links'])) {
                $values_23 = [];
                foreach ($data['Links'] as $value_75) {
                    $values_23[] = $value_75;
                }
                $value_74 = $values_23;
            } elseif (null === $data['Links']) {
                $value_74 = $data['Links'];
            }
            $object->setLinks($value_74);
        } elseif (array_key_exists('Links', $data) && null === $data['Links']) {
            $object->setLinks(null);
        }
        if (array_key_exists('OomScoreAdj', $data) && null !== $data['OomScoreAdj']) {
            $value_76 = $data['OomScoreAdj'];
            if (is_int($data['OomScoreAdj'])) {
                $value_76 = $data['OomScoreAdj'];
            } elseif (null === $data['OomScoreAdj']) {
                $value_76 = $data['OomScoreAdj'];
            }
            $object->setOomScoreAdj($value_76);
        } elseif (array_key_exists('OomScoreAdj', $data) && null === $data['OomScoreAdj']) {
            $object->setOomScoreAdj(null);
        }
        if (array_key_exists('PidMode', $data) && null !== $data['PidMode']) {
            $value_77 = $data['PidMode'];
            if (is_string($data['PidMode'])) {
                $value_77 = $data['PidMode'];
            } elseif (null === $data['PidMode']) {
                $value_77 = $data['PidMode'];
            }
            $object->setPidMode($value_77);
        } elseif (array_key_exists('PidMode', $data) && null === $data['PidMode']) {
            $object->setPidMode(null);
        }
        if (array_key_exists('Privileged', $data) && null !== $data['Privileged']) {
            $value_78 = $data['Privileged'];
            if (is_bool($data['Privileged'])) {
                $value_78 = $data['Privileged'];
            } elseif (null === $data['Privileged']) {
                $value_78 = $data['Privileged'];
            }
            $object->setPrivileged($value_78);
        } elseif (array_key_exists('Privileged', $data) && null === $data['Privileged']) {
            $object->setPrivileged(null);
        }
        if (array_key_exists('PublishAllPorts', $data) && null !== $data['PublishAllPorts']) {
            $value_79 = $data['PublishAllPorts'];
            if (is_bool($data['PublishAllPorts'])) {
                $value_79 = $data['PublishAllPorts'];
            } elseif (null === $data['PublishAllPorts']) {
                $value_79 = $data['PublishAllPorts'];
            }
            $object->setPublishAllPorts($value_79);
        } elseif (array_key_exists('PublishAllPorts', $data) && null === $data['PublishAllPorts']) {
            $object->setPublishAllPorts(null);
        }
        if (array_key_exists('ReadonlyRootfs', $data) && null !== $data['ReadonlyRootfs']) {
            $value_80 = $data['ReadonlyRootfs'];
            if (is_bool($data['ReadonlyRootfs'])) {
                $value_80 = $data['ReadonlyRootfs'];
            } elseif (null === $data['ReadonlyRootfs']) {
                $value_80 = $data['ReadonlyRootfs'];
            }
            $object->setReadonlyRootfs($value_80);
        } elseif (array_key_exists('ReadonlyRootfs', $data) && null === $data['ReadonlyRootfs']) {
            $object->setReadonlyRootfs(null);
        }
        if (array_key_exists('SecurityOpt', $data) && null !== $data['SecurityOpt']) {
            $value_81 = $data['SecurityOpt'];
            if (is_array($data['SecurityOpt']) && $this->isOnlyNumericKeys($data['SecurityOpt'])) {
                $values_24 = [];
                foreach ($data['SecurityOpt'] as $value_82) {
                    $values_24[] = $value_82;
                }
                $value_81 = $values_24;
            } elseif (null === $data['SecurityOpt']) {
                $value_81 = $data['SecurityOpt'];
            }
            $object->setSecurityOpt($value_81);
        } elseif (array_key_exists('SecurityOpt', $data) && null === $data['SecurityOpt']) {
            $object->setSecurityOpt(null);
        }
        if (array_key_exists('StorageOpt', $data) && null !== $data['StorageOpt']) {
            $value_83 = $data['StorageOpt'];
            if (is_array($data['StorageOpt']) && $this->isOnlyNumericKeys($data['StorageOpt'])) {
                $values_25 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['StorageOpt'] as $key_2 => $value_84) {
                    $values_25[$key_2] = $value_84;
                }
                $value_83 = $values_25;
            } elseif (null === $data['StorageOpt']) {
                $value_83 = $data['StorageOpt'];
            }
            $object->setStorageOpt($value_83);
        } elseif (array_key_exists('StorageOpt', $data) && null === $data['StorageOpt']) {
            $object->setStorageOpt(null);
        }
        if (array_key_exists('Tmpfs', $data) && null !== $data['Tmpfs']) {
            $value_85 = $data['Tmpfs'];
            if (is_array($data['Tmpfs']) && $this->isOnlyNumericKeys($data['Tmpfs'])) {
                $values_26 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Tmpfs'] as $key_3 => $value_86) {
                    $values_26[$key_3] = $value_86;
                }
                $value_85 = $values_26;
            } elseif (null === $data['Tmpfs']) {
                $value_85 = $data['Tmpfs'];
            }
            $object->setTmpfs($value_85);
        } elseif (array_key_exists('Tmpfs', $data) && null === $data['Tmpfs']) {
            $object->setTmpfs(null);
        }
        if (array_key_exists('UTSMode', $data) && null !== $data['UTSMode']) {
            $value_87 = $data['UTSMode'];
            if (is_string($data['UTSMode'])) {
                $value_87 = $data['UTSMode'];
            } elseif (null === $data['UTSMode']) {
                $value_87 = $data['UTSMode'];
            }
            $object->setUTSMode($value_87);
        } elseif (array_key_exists('UTSMode', $data) && null === $data['UTSMode']) {
            $object->setUTSMode(null);
        }
        if (array_key_exists('UsernsMode', $data) && null !== $data['UsernsMode']) {
            $value_88 = $data['UsernsMode'];
            if (is_string($data['UsernsMode'])) {
                $value_88 = $data['UsernsMode'];
            } elseif (null === $data['UsernsMode']) {
                $value_88 = $data['UsernsMode'];
            }
            $object->setUsernsMode($value_88);
        } elseif (array_key_exists('UsernsMode', $data) && null === $data['UsernsMode']) {
            $object->setUsernsMode(null);
        }
        if (array_key_exists('ShmSize', $data) && null !== $data['ShmSize']) {
            $value_89 = $data['ShmSize'];
            if (is_int($data['ShmSize'])) {
                $value_89 = $data['ShmSize'];
            } elseif (null === $data['ShmSize']) {
                $value_89 = $data['ShmSize'];
            }
            $object->setShmSize($value_89);
        } elseif (array_key_exists('ShmSize', $data) && null === $data['ShmSize']) {
            $object->setShmSize(null);
        }
        if (array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
            $value_90 = $data['Sysctls'];
            if (is_array($data['Sysctls']) && $this->isOnlyNumericKeys($data['Sysctls'])) {
                $values_27 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Sysctls'] as $key_4 => $value_91) {
                    $values_27[$key_4] = $value_91;
                }
                $value_90 = $values_27;
            } elseif (null === $data['Sysctls']) {
                $value_90 = $data['Sysctls'];
            }
            $object->setSysctls($value_90);
        } elseif (array_key_exists('Sysctls', $data) && null === $data['Sysctls']) {
            $object->setSysctls(null);
        }
        if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $value_92 = $data['Runtime'];
            if (is_string($data['Runtime'])) {
                $value_92 = $data['Runtime'];
            } elseif (null === $data['Runtime']) {
                $value_92 = $data['Runtime'];
            }
            $object->setRuntime($value_92);
        } elseif (array_key_exists('Runtime', $data) && null === $data['Runtime']) {
            $object->setRuntime(null);
        }
        if (array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $value_93 = $data['Isolation'];
            if (is_string($data['Isolation'])) {
                $value_93 = $data['Isolation'];
            } elseif (null === $data['Isolation']) {
                $value_93 = $data['Isolation'];
            }
            $object->setIsolation($value_93);
        } elseif (array_key_exists('Isolation', $data) && null === $data['Isolation']) {
            $object->setIsolation(null);
        }
        if (array_key_exists('MaskedPaths', $data) && null !== $data['MaskedPaths']) {
            $value_94 = $data['MaskedPaths'];
            if (is_array($data['MaskedPaths']) && $this->isOnlyNumericKeys($data['MaskedPaths'])) {
                $values_28 = [];
                foreach ($data['MaskedPaths'] as $value_95) {
                    $values_28[] = $value_95;
                }
                $value_94 = $values_28;
            } elseif (null === $data['MaskedPaths']) {
                $value_94 = $data['MaskedPaths'];
            }
            $object->setMaskedPaths($value_94);
        } elseif (array_key_exists('MaskedPaths', $data) && null === $data['MaskedPaths']) {
            $object->setMaskedPaths(null);
        }
        if (array_key_exists('ReadonlyPaths', $data) && null !== $data['ReadonlyPaths']) {
            $value_96 = $data['ReadonlyPaths'];
            if (is_array($data['ReadonlyPaths']) && $this->isOnlyNumericKeys($data['ReadonlyPaths'])) {
                $values_29 = [];
                foreach ($data['ReadonlyPaths'] as $value_97) {
                    $values_29[] = $value_97;
                }
                $value_96 = $values_29;
            } elseif (null === $data['ReadonlyPaths']) {
                $value_96 = $data['ReadonlyPaths'];
            }
            $object->setReadonlyPaths($value_96);
        } elseif (array_key_exists('ReadonlyPaths', $data) && null === $data['ReadonlyPaths']) {
            $object->setReadonlyPaths(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('cpuShares')) {
            $value = $data->getCpuShares();
            if (is_int($data->getCpuShares())) {
                $value = $data->getCpuShares();
            } elseif (null === $data->getCpuShares()) {
                $value = $data->getCpuShares();
            }
            $dataArray['CpuShares'] = $value;
        }
        if ($data->isInitialized('memory')) {
            $value_1 = $data->getMemory();
            if (is_int($data->getMemory())) {
                $value_1 = $data->getMemory();
            } elseif (null === $data->getMemory()) {
                $value_1 = $data->getMemory();
            }
            $dataArray['Memory'] = $value_1;
        }
        if ($data->isInitialized('cgroupParent')) {
            $value_2 = $data->getCgroupParent();
            if (is_string($data->getCgroupParent())) {
                $value_2 = $data->getCgroupParent();
            } elseif (null === $data->getCgroupParent()) {
                $value_2 = $data->getCgroupParent();
            }
            $dataArray['CgroupParent'] = $value_2;
        }
        if ($data->isInitialized('blkioWeight')) {
            $value_3 = $data->getBlkioWeight();
            if (is_int($data->getBlkioWeight())) {
                $value_3 = $data->getBlkioWeight();
            } elseif (null === $data->getBlkioWeight()) {
                $value_3 = $data->getBlkioWeight();
            }
            $dataArray['BlkioWeight'] = $value_3;
        }
        if ($data->isInitialized('blkioWeightDevice')) {
            $value_4 = $data->getBlkioWeightDevice();
            if (is_array($data->getBlkioWeightDevice())) {
                $values = [];
                foreach ($data->getBlkioWeightDevice() as $value_5) {
                    $values[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $value_4 = $values;
            } elseif (null === $data->getBlkioWeightDevice()) {
                $value_4 = $data->getBlkioWeightDevice();
            }
            $dataArray['BlkioWeightDevice'] = $value_4;
        }
        if ($data->isInitialized('blkioDeviceReadBps')) {
            $value_6 = $data->getBlkioDeviceReadBps();
            if (is_array($data->getBlkioDeviceReadBps())) {
                $values_1 = [];
                foreach ($data->getBlkioDeviceReadBps() as $value_7) {
                    $values_1[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $value_6 = $values_1;
            } elseif (null === $data->getBlkioDeviceReadBps()) {
                $value_6 = $data->getBlkioDeviceReadBps();
            }
            $dataArray['BlkioDeviceReadBps'] = $value_6;
        }
        if ($data->isInitialized('blkioDeviceWriteBps')) {
            $value_8 = $data->getBlkioDeviceWriteBps();
            if (is_array($data->getBlkioDeviceWriteBps())) {
                $values_2 = [];
                foreach ($data->getBlkioDeviceWriteBps() as $value_9) {
                    $values_2[] = $this->normalizer->normalize($value_9, 'json', $context);
                }
                $value_8 = $values_2;
            } elseif (null === $data->getBlkioDeviceWriteBps()) {
                $value_8 = $data->getBlkioDeviceWriteBps();
            }
            $dataArray['BlkioDeviceWriteBps'] = $value_8;
        }
        if ($data->isInitialized('blkioDeviceReadIOps')) {
            $value_10 = $data->getBlkioDeviceReadIOps();
            if (is_array($data->getBlkioDeviceReadIOps())) {
                $values_3 = [];
                foreach ($data->getBlkioDeviceReadIOps() as $value_11) {
                    $values_3[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $value_10 = $values_3;
            } elseif (null === $data->getBlkioDeviceReadIOps()) {
                $value_10 = $data->getBlkioDeviceReadIOps();
            }
            $dataArray['BlkioDeviceReadIOps'] = $value_10;
        }
        if ($data->isInitialized('blkioDeviceWriteIOps')) {
            $value_12 = $data->getBlkioDeviceWriteIOps();
            if (is_array($data->getBlkioDeviceWriteIOps())) {
                $values_4 = [];
                foreach ($data->getBlkioDeviceWriteIOps() as $value_13) {
                    $values_4[] = $this->normalizer->normalize($value_13, 'json', $context);
                }
                $value_12 = $values_4;
            } elseif (null === $data->getBlkioDeviceWriteIOps()) {
                $value_12 = $data->getBlkioDeviceWriteIOps();
            }
            $dataArray['BlkioDeviceWriteIOps'] = $value_12;
        }
        if ($data->isInitialized('cpuPeriod')) {
            $value_14 = $data->getCpuPeriod();
            if (is_int($data->getCpuPeriod())) {
                $value_14 = $data->getCpuPeriod();
            } elseif (null === $data->getCpuPeriod()) {
                $value_14 = $data->getCpuPeriod();
            }
            $dataArray['CpuPeriod'] = $value_14;
        }
        if ($data->isInitialized('cpuQuota')) {
            $value_15 = $data->getCpuQuota();
            if (is_int($data->getCpuQuota())) {
                $value_15 = $data->getCpuQuota();
            } elseif (null === $data->getCpuQuota()) {
                $value_15 = $data->getCpuQuota();
            }
            $dataArray['CpuQuota'] = $value_15;
        }
        if ($data->isInitialized('cpuRealtimePeriod')) {
            $value_16 = $data->getCpuRealtimePeriod();
            if (is_int($data->getCpuRealtimePeriod())) {
                $value_16 = $data->getCpuRealtimePeriod();
            } elseif (null === $data->getCpuRealtimePeriod()) {
                $value_16 = $data->getCpuRealtimePeriod();
            }
            $dataArray['CpuRealtimePeriod'] = $value_16;
        }
        if ($data->isInitialized('cpuRealtimeRuntime')) {
            $value_17 = $data->getCpuRealtimeRuntime();
            if (is_int($data->getCpuRealtimeRuntime())) {
                $value_17 = $data->getCpuRealtimeRuntime();
            } elseif (null === $data->getCpuRealtimeRuntime()) {
                $value_17 = $data->getCpuRealtimeRuntime();
            }
            $dataArray['CpuRealtimeRuntime'] = $value_17;
        }
        if ($data->isInitialized('cpusetCpus')) {
            $value_18 = $data->getCpusetCpus();
            if (is_string($data->getCpusetCpus())) {
                $value_18 = $data->getCpusetCpus();
            } elseif (null === $data->getCpusetCpus()) {
                $value_18 = $data->getCpusetCpus();
            }
            $dataArray['CpusetCpus'] = $value_18;
        }
        if ($data->isInitialized('cpusetMems')) {
            $value_19 = $data->getCpusetMems();
            if (is_string($data->getCpusetMems())) {
                $value_19 = $data->getCpusetMems();
            } elseif (null === $data->getCpusetMems()) {
                $value_19 = $data->getCpusetMems();
            }
            $dataArray['CpusetMems'] = $value_19;
        }
        if ($data->isInitialized('devices')) {
            $value_20 = $data->getDevices();
            if (is_array($data->getDevices())) {
                $values_5 = [];
                foreach ($data->getDevices() as $value_21) {
                    $values_5[] = $this->normalizer->normalize($value_21, 'json', $context);
                }
                $value_20 = $values_5;
            } elseif (null === $data->getDevices()) {
                $value_20 = $data->getDevices();
            }
            $dataArray['Devices'] = $value_20;
        }
        if ($data->isInitialized('deviceCgroupRules')) {
            $value_22 = $data->getDeviceCgroupRules();
            if (is_array($data->getDeviceCgroupRules())) {
                $values_6 = [];
                foreach ($data->getDeviceCgroupRules() as $value_23) {
                    $values_6[] = $value_23;
                }
                $value_22 = $values_6;
            } elseif (null === $data->getDeviceCgroupRules()) {
                $value_22 = $data->getDeviceCgroupRules();
            }
            $dataArray['DeviceCgroupRules'] = $value_22;
        }
        if ($data->isInitialized('deviceRequests')) {
            $value_24 = $data->getDeviceRequests();
            if (is_array($data->getDeviceRequests())) {
                $values_7 = [];
                foreach ($data->getDeviceRequests() as $value_25) {
                    $values_7[] = $this->normalizer->normalize($value_25, 'json', $context);
                }
                $value_24 = $values_7;
            } elseif (null === $data->getDeviceRequests()) {
                $value_24 = $data->getDeviceRequests();
            }
            $dataArray['DeviceRequests'] = $value_24;
        }
        if ($data->isInitialized('memoryReservation')) {
            $value_26 = $data->getMemoryReservation();
            if (is_int($data->getMemoryReservation())) {
                $value_26 = $data->getMemoryReservation();
            } elseif (null === $data->getMemoryReservation()) {
                $value_26 = $data->getMemoryReservation();
            }
            $dataArray['MemoryReservation'] = $value_26;
        }
        if ($data->isInitialized('memorySwap')) {
            $value_27 = $data->getMemorySwap();
            if (is_int($data->getMemorySwap())) {
                $value_27 = $data->getMemorySwap();
            } elseif (null === $data->getMemorySwap()) {
                $value_27 = $data->getMemorySwap();
            }
            $dataArray['MemorySwap'] = $value_27;
        }
        if ($data->isInitialized('memorySwappiness')) {
            $value_28 = $data->getMemorySwappiness();
            if (is_int($data->getMemorySwappiness())) {
                $value_28 = $data->getMemorySwappiness();
            } elseif (null === $data->getMemorySwappiness()) {
                $value_28 = $data->getMemorySwappiness();
            }
            $dataArray['MemorySwappiness'] = $value_28;
        }
        if ($data->isInitialized('nanoCpus')) {
            $value_29 = $data->getNanoCpus();
            if (is_int($data->getNanoCpus())) {
                $value_29 = $data->getNanoCpus();
            } elseif (null === $data->getNanoCpus()) {
                $value_29 = $data->getNanoCpus();
            }
            $dataArray['NanoCpus'] = $value_29;
        }
        if ($data->isInitialized('oomKillDisable')) {
            $value_30 = $data->getOomKillDisable();
            if (is_bool($data->getOomKillDisable())) {
                $value_30 = $data->getOomKillDisable();
            } elseif (null === $data->getOomKillDisable()) {
                $value_30 = $data->getOomKillDisable();
            }
            $dataArray['OomKillDisable'] = $value_30;
        }
        if ($data->isInitialized('init')) {
            $value_31 = $data->getInit();
            if (is_bool($data->getInit())) {
                $value_31 = $data->getInit();
            } elseif (null === $data->getInit()) {
                $value_31 = $data->getInit();
            }
            $dataArray['Init'] = $value_31;
        }
        if ($data->isInitialized('pidsLimit')) {
            $value_32 = $data->getPidsLimit();
            if (is_int($data->getPidsLimit())) {
                $value_32 = $data->getPidsLimit();
            } elseif (null === $data->getPidsLimit()) {
                $value_32 = $data->getPidsLimit();
            }
            $dataArray['PidsLimit'] = $value_32;
        }
        if ($data->isInitialized('ulimits')) {
            $value_33 = $data->getUlimits();
            if (is_array($data->getUlimits())) {
                $values_8 = [];
                foreach ($data->getUlimits() as $value_34) {
                    $values_8[] = $this->normalizer->normalize($value_34, 'json', $context);
                }
                $value_33 = $values_8;
            } elseif (null === $data->getUlimits()) {
                $value_33 = $data->getUlimits();
            }
            $dataArray['Ulimits'] = $value_33;
        }
        if ($data->isInitialized('cpuCount')) {
            $value_35 = $data->getCpuCount();
            if (is_int($data->getCpuCount())) {
                $value_35 = $data->getCpuCount();
            } elseif (null === $data->getCpuCount()) {
                $value_35 = $data->getCpuCount();
            }
            $dataArray['CpuCount'] = $value_35;
        }
        if ($data->isInitialized('cpuPercent')) {
            $value_36 = $data->getCpuPercent();
            if (is_int($data->getCpuPercent())) {
                $value_36 = $data->getCpuPercent();
            } elseif (null === $data->getCpuPercent()) {
                $value_36 = $data->getCpuPercent();
            }
            $dataArray['CpuPercent'] = $value_36;
        }
        if ($data->isInitialized('iOMaximumIOps')) {
            $value_37 = $data->getIOMaximumIOps();
            if (is_int($data->getIOMaximumIOps())) {
                $value_37 = $data->getIOMaximumIOps();
            } elseif (null === $data->getIOMaximumIOps()) {
                $value_37 = $data->getIOMaximumIOps();
            }
            $dataArray['IOMaximumIOps'] = $value_37;
        }
        if ($data->isInitialized('iOMaximumBandwidth')) {
            $value_38 = $data->getIOMaximumBandwidth();
            if (is_int($data->getIOMaximumBandwidth())) {
                $value_38 = $data->getIOMaximumBandwidth();
            } elseif (null === $data->getIOMaximumBandwidth()) {
                $value_38 = $data->getIOMaximumBandwidth();
            }
            $dataArray['IOMaximumBandwidth'] = $value_38;
        }
        if ($data->isInitialized('binds')) {
            $value_39 = $data->getBinds();
            if (is_array($data->getBinds())) {
                $values_9 = [];
                foreach ($data->getBinds() as $value_40) {
                    $values_9[] = $value_40;
                }
                $value_39 = $values_9;
            } elseif (null === $data->getBinds()) {
                $value_39 = $data->getBinds();
            }
            $dataArray['Binds'] = $value_39;
        }
        if ($data->isInitialized('containerIDFile')) {
            $value_41 = $data->getContainerIDFile();
            if (is_string($data->getContainerIDFile())) {
                $value_41 = $data->getContainerIDFile();
            } elseif (null === $data->getContainerIDFile()) {
                $value_41 = $data->getContainerIDFile();
            }
            $dataArray['ContainerIDFile'] = $value_41;
        }
        if ($data->isInitialized('logConfig')) {
            $dataArray['LogConfig'] = $this->normalizer->normalize($data->getLogConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkMode')) {
            $value_42 = $data->getNetworkMode();
            if (is_string($data->getNetworkMode())) {
                $value_42 = $data->getNetworkMode();
            } elseif (null === $data->getNetworkMode()) {
                $value_42 = $data->getNetworkMode();
            }
            $dataArray['NetworkMode'] = $value_42;
        }
        if ($data->isInitialized('portBindings')) {
            $value_43 = $data->getPortBindings();
            if (is_object($data->getPortBindings())) {
                $values_10 = [];
                foreach ($data->getPortBindings() as $key => $value_44) {
                    $value_45 = $value_44;
                    if (is_array($value_44)) {
                        $values_11 = [];
                        foreach ($value_44 as $value_46) {
                            $values_11[] = $this->normalizer->normalize($value_46, 'json', $context);
                        }
                        $value_45 = $values_11;
                    } elseif (null === $value_44) {
                        $value_45 = $value_44;
                    }
                    $values_10[$key] = $value_45;
                }
                $value_43 = $values_10;
            } elseif (null === $data->getPortBindings()) {
                $value_43 = $data->getPortBindings();
            }
            $dataArray['PortBindings'] = $value_43;
        }
        if ($data->isInitialized('restartPolicy') && null !== $data->getRestartPolicy()) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }
        if ($data->isInitialized('autoRemove')) {
            $value_47 = $data->getAutoRemove();
            if (is_bool($data->getAutoRemove())) {
                $value_47 = $data->getAutoRemove();
            } elseif (null === $data->getAutoRemove()) {
                $value_47 = $data->getAutoRemove();
            }
            $dataArray['AutoRemove'] = $value_47;
        }
        if ($data->isInitialized('volumeDriver')) {
            $value_48 = $data->getVolumeDriver();
            if (is_string($data->getVolumeDriver())) {
                $value_48 = $data->getVolumeDriver();
            } elseif (null === $data->getVolumeDriver()) {
                $value_48 = $data->getVolumeDriver();
            }
            $dataArray['VolumeDriver'] = $value_48;
        }
        if ($data->isInitialized('volumesFrom')) {
            $value_49 = $data->getVolumesFrom();
            if (is_array($data->getVolumesFrom())) {
                $values_12 = [];
                foreach ($data->getVolumesFrom() as $value_50) {
                    $values_12[] = $value_50;
                }
                $value_49 = $values_12;
            } elseif (null === $data->getVolumesFrom()) {
                $value_49 = $data->getVolumesFrom();
            }
            $dataArray['VolumesFrom'] = $value_49;
        }
        if ($data->isInitialized('mounts')) {
            $value_51 = $data->getMounts();
            if (is_array($data->getMounts())) {
                $values_13 = [];
                foreach ($data->getMounts() as $value_52) {
                    $values_13[] = $this->normalizer->normalize($value_52, 'json', $context);
                }
                $value_51 = $values_13;
            } elseif (null === $data->getMounts()) {
                $value_51 = $data->getMounts();
            }
            $dataArray['Mounts'] = $value_51;
        }
        if ($data->isInitialized('consoleSize')) {
            $value_53 = $data->getConsoleSize();
            if (is_array($data->getConsoleSize())) {
                $values_14 = [];
                foreach ($data->getConsoleSize() as $value_54) {
                    $values_14[] = $value_54;
                }
                $value_53 = $values_14;
            } elseif (null === $data->getConsoleSize()) {
                $value_53 = $data->getConsoleSize();
            }
            $dataArray['ConsoleSize'] = $value_53;
        }
        if ($data->isInitialized('annotations')) {
            $value_55 = $data->getAnnotations();
            if (is_object($data->getAnnotations())) {
                $values_15 = [];
                foreach ($data->getAnnotations() as $key_1 => $value_56) {
                    $values_15[$key_1] = $value_56;
                }
                $value_55 = $values_15;
            } elseif (null === $data->getAnnotations()) {
                $value_55 = $data->getAnnotations();
            }
            $dataArray['Annotations'] = $value_55;
        }
        if ($data->isInitialized('capAdd')) {
            $value_57 = $data->getCapAdd();
            if (is_array($data->getCapAdd())) {
                $values_16 = [];
                foreach ($data->getCapAdd() as $value_58) {
                    $values_16[] = $value_58;
                }
                $value_57 = $values_16;
            } elseif (null === $data->getCapAdd()) {
                $value_57 = $data->getCapAdd();
            }
            $dataArray['CapAdd'] = $value_57;
        }
        if ($data->isInitialized('capDrop')) {
            $value_59 = $data->getCapDrop();
            if (is_array($data->getCapDrop())) {
                $values_17 = [];
                foreach ($data->getCapDrop() as $value_60) {
                    $values_17[] = $value_60;
                }
                $value_59 = $values_17;
            } elseif (null === $data->getCapDrop()) {
                $value_59 = $data->getCapDrop();
            }
            $dataArray['CapDrop'] = $value_59;
        }
        if ($data->isInitialized('cgroupnsMode')) {
            $value_61 = $data->getCgroupnsMode();
            if (is_string($data->getCgroupnsMode())) {
                $value_61 = $data->getCgroupnsMode();
            } elseif (null === $data->getCgroupnsMode()) {
                $value_61 = $data->getCgroupnsMode();
            }
            $dataArray['CgroupnsMode'] = $value_61;
        }
        if ($data->isInitialized('dns')) {
            $value_62 = $data->getDns();
            if (is_array($data->getDns())) {
                $values_18 = [];
                foreach ($data->getDns() as $value_63) {
                    $values_18[] = $value_63;
                }
                $value_62 = $values_18;
            } elseif (null === $data->getDns()) {
                $value_62 = $data->getDns();
            }
            $dataArray['Dns'] = $value_62;
        }
        if ($data->isInitialized('dnsOptions')) {
            $value_64 = $data->getDnsOptions();
            if (is_array($data->getDnsOptions())) {
                $values_19 = [];
                foreach ($data->getDnsOptions() as $value_65) {
                    $values_19[] = $value_65;
                }
                $value_64 = $values_19;
            } elseif (null === $data->getDnsOptions()) {
                $value_64 = $data->getDnsOptions();
            }
            $dataArray['DnsOptions'] = $value_64;
        }
        if ($data->isInitialized('dnsSearch')) {
            $value_66 = $data->getDnsSearch();
            if (is_array($data->getDnsSearch())) {
                $values_20 = [];
                foreach ($data->getDnsSearch() as $value_67) {
                    $values_20[] = $value_67;
                }
                $value_66 = $values_20;
            } elseif (null === $data->getDnsSearch()) {
                $value_66 = $data->getDnsSearch();
            }
            $dataArray['DnsSearch'] = $value_66;
        }
        if ($data->isInitialized('extraHosts')) {
            $value_68 = $data->getExtraHosts();
            if (is_array($data->getExtraHosts())) {
                $values_21 = [];
                foreach ($data->getExtraHosts() as $value_69) {
                    $values_21[] = $value_69;
                }
                $value_68 = $values_21;
            } elseif (null === $data->getExtraHosts()) {
                $value_68 = $data->getExtraHosts();
            }
            $dataArray['ExtraHosts'] = $value_68;
        }
        if ($data->isInitialized('groupAdd')) {
            $value_70 = $data->getGroupAdd();
            if (is_array($data->getGroupAdd())) {
                $values_22 = [];
                foreach ($data->getGroupAdd() as $value_71) {
                    $values_22[] = $value_71;
                }
                $value_70 = $values_22;
            } elseif (null === $data->getGroupAdd()) {
                $value_70 = $data->getGroupAdd();
            }
            $dataArray['GroupAdd'] = $value_70;
        }
        if ($data->isInitialized('ipcMode')) {
            $value_72 = $data->getIpcMode();
            if (is_string($data->getIpcMode())) {
                $value_72 = $data->getIpcMode();
            } elseif (null === $data->getIpcMode()) {
                $value_72 = $data->getIpcMode();
            }
            $dataArray['IpcMode'] = $value_72;
        }
        if ($data->isInitialized('cgroup')) {
            $value_73 = $data->getCgroup();
            if (is_string($data->getCgroup())) {
                $value_73 = $data->getCgroup();
            } elseif (null === $data->getCgroup()) {
                $value_73 = $data->getCgroup();
            }
            $dataArray['Cgroup'] = $value_73;
        }
        if ($data->isInitialized('links')) {
            $value_74 = $data->getLinks();
            if (is_array($data->getLinks())) {
                $values_23 = [];
                foreach ($data->getLinks() as $value_75) {
                    $values_23[] = $value_75;
                }
                $value_74 = $values_23;
            } elseif (null === $data->getLinks()) {
                $value_74 = $data->getLinks();
            }
            $dataArray['Links'] = $value_74;
        }
        if ($data->isInitialized('oomScoreAdj')) {
            $value_76 = $data->getOomScoreAdj();
            if (is_int($data->getOomScoreAdj())) {
                $value_76 = $data->getOomScoreAdj();
            } elseif (null === $data->getOomScoreAdj()) {
                $value_76 = $data->getOomScoreAdj();
            }
            $dataArray['OomScoreAdj'] = $value_76;
        }
        if ($data->isInitialized('pidMode')) {
            $value_77 = $data->getPidMode();
            if (is_string($data->getPidMode())) {
                $value_77 = $data->getPidMode();
            } elseif (null === $data->getPidMode()) {
                $value_77 = $data->getPidMode();
            }
            $dataArray['PidMode'] = $value_77;
        }
        if ($data->isInitialized('privileged')) {
            $value_78 = $data->getPrivileged();
            if (is_bool($data->getPrivileged())) {
                $value_78 = $data->getPrivileged();
            } elseif (null === $data->getPrivileged()) {
                $value_78 = $data->getPrivileged();
            }
            $dataArray['Privileged'] = $value_78;
        }
        if ($data->isInitialized('publishAllPorts')) {
            $value_79 = $data->getPublishAllPorts();
            if (is_bool($data->getPublishAllPorts())) {
                $value_79 = $data->getPublishAllPorts();
            } elseif (null === $data->getPublishAllPorts()) {
                $value_79 = $data->getPublishAllPorts();
            }
            $dataArray['PublishAllPorts'] = $value_79;
        }
        if ($data->isInitialized('readonlyRootfs')) {
            $value_80 = $data->getReadonlyRootfs();
            if (is_bool($data->getReadonlyRootfs())) {
                $value_80 = $data->getReadonlyRootfs();
            } elseif (null === $data->getReadonlyRootfs()) {
                $value_80 = $data->getReadonlyRootfs();
            }
            $dataArray['ReadonlyRootfs'] = $value_80;
        }
        if ($data->isInitialized('securityOpt')) {
            $value_81 = $data->getSecurityOpt();
            if (is_array($data->getSecurityOpt())) {
                $values_24 = [];
                foreach ($data->getSecurityOpt() as $value_82) {
                    $values_24[] = $value_82;
                }
                $value_81 = $values_24;
            } elseif (null === $data->getSecurityOpt()) {
                $value_81 = $data->getSecurityOpt();
            }
            $dataArray['SecurityOpt'] = $value_81;
        }
        if ($data->isInitialized('storageOpt')) {
            $value_83 = $data->getStorageOpt();
            if (is_object($data->getStorageOpt())) {
                $values_25 = [];
                foreach ($data->getStorageOpt() as $key_2 => $value_84) {
                    $values_25[$key_2] = $value_84;
                }
                $value_83 = $values_25;
            } elseif (null === $data->getStorageOpt()) {
                $value_83 = $data->getStorageOpt();
            }
            $dataArray['StorageOpt'] = $value_83;
        }
        if ($data->isInitialized('tmpfs')) {
            $value_85 = $data->getTmpfs();
            if (is_object($data->getTmpfs())) {
                $values_26 = [];
                foreach ($data->getTmpfs() as $key_3 => $value_86) {
                    $values_26[$key_3] = $value_86;
                }
                $value_85 = $values_26;
            } elseif (null === $data->getTmpfs()) {
                $value_85 = $data->getTmpfs();
            }
            $dataArray['Tmpfs'] = $value_85;
        }
        if ($data->isInitialized('uTSMode')) {
            $value_87 = $data->getUTSMode();
            if (is_string($data->getUTSMode())) {
                $value_87 = $data->getUTSMode();
            } elseif (null === $data->getUTSMode()) {
                $value_87 = $data->getUTSMode();
            }
            $dataArray['UTSMode'] = $value_87;
        }
        if ($data->isInitialized('usernsMode')) {
            $value_88 = $data->getUsernsMode();
            if (is_string($data->getUsernsMode())) {
                $value_88 = $data->getUsernsMode();
            } elseif (null === $data->getUsernsMode()) {
                $value_88 = $data->getUsernsMode();
            }
            $dataArray['UsernsMode'] = $value_88;
        }
        if ($data->isInitialized('shmSize')) {
            $value_89 = $data->getShmSize();
            if (is_int($data->getShmSize())) {
                $value_89 = $data->getShmSize();
            } elseif (null === $data->getShmSize()) {
                $value_89 = $data->getShmSize();
            }
            $dataArray['ShmSize'] = $value_89;
        }
        if ($data->isInitialized('sysctls')) {
            $value_90 = $data->getSysctls();
            if (is_object($data->getSysctls())) {
                $values_27 = [];
                foreach ($data->getSysctls() as $key_4 => $value_91) {
                    $values_27[$key_4] = $value_91;
                }
                $value_90 = $values_27;
            } elseif (null === $data->getSysctls()) {
                $value_90 = $data->getSysctls();
            }
            $dataArray['Sysctls'] = $value_90;
        }
        if ($data->isInitialized('runtime')) {
            $value_92 = $data->getRuntime();
            if (is_string($data->getRuntime())) {
                $value_92 = $data->getRuntime();
            } elseif (null === $data->getRuntime()) {
                $value_92 = $data->getRuntime();
            }
            $dataArray['Runtime'] = $value_92;
        }
        if ($data->isInitialized('isolation')) {
            $value_93 = $data->getIsolation();
            if (is_string($data->getIsolation())) {
                $value_93 = $data->getIsolation();
            } elseif (null === $data->getIsolation()) {
                $value_93 = $data->getIsolation();
            }
            $dataArray['Isolation'] = $value_93;
        }
        if ($data->isInitialized('maskedPaths')) {
            $value_94 = $data->getMaskedPaths();
            if (is_array($data->getMaskedPaths())) {
                $values_28 = [];
                foreach ($data->getMaskedPaths() as $value_95) {
                    $values_28[] = $value_95;
                }
                $value_94 = $values_28;
            } elseif (null === $data->getMaskedPaths()) {
                $value_94 = $data->getMaskedPaths();
            }
            $dataArray['MaskedPaths'] = $value_94;
        }
        if ($data->isInitialized('readonlyPaths')) {
            $value_96 = $data->getReadonlyPaths();
            if (is_array($data->getReadonlyPaths())) {
                $values_29 = [];
                foreach ($data->getReadonlyPaths() as $value_97) {
                    $values_29[] = $value_97;
                }
                $value_96 = $values_29;
            } elseif (null === $data->getReadonlyPaths()) {
                $value_96 = $data->getReadonlyPaths();
            }
            $dataArray['ReadonlyPaths'] = $value_96;
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
