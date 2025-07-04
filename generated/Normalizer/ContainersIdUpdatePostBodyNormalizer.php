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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody();
        if (array_key_exists('OomKillDisable', $data) && is_int($data['OomKillDisable'])) {
            $data['OomKillDisable'] = (bool) $data['OomKillDisable'];
        }
        if (array_key_exists('Init', $data) && is_int($data['Init'])) {
            $data['Init'] = (bool) $data['Init'];
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
        if (array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class, 'json', $context));
            unset($data['RestartPolicy']);
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_9;
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
        if ($data->isInitialized('restartPolicy') && null !== $data->getRestartPolicy()) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_9;
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
