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
        if (array_key_exists('RestartPolicy', $data)) {
            $object->restartPolicy = $this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class, 'json', $context);
            unset($data['RestartPolicy']);
        }
        foreach ($data as $key => $value_30) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_30;
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
        if (array_key_exists('restartPolicy', get_object_vars($data)) && null !== ($data->restartPolicy ?? null)) {
            $normalized_8               = $this->normalizer->normalize($data->restartPolicy, 'json', $context);
            $dataArray['RestartPolicy'] = is_iterable($normalized_8) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_8) : $normalized_8;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_30) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_30;
            }
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
