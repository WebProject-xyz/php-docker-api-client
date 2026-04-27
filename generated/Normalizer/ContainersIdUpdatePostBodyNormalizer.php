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

class ContainersIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody();
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
        if (array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class, 'json', $context));
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
        if ($data->isInitialized('restartPolicy') && null !== $data->getRestartPolicy()) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
