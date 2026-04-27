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
use function is_object;

class ContainerBlkioStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('io_service_bytes_recursive', $data) && null !== $data['io_service_bytes_recursive']) {
            $value = $data['io_service_bytes_recursive'];
            if (is_array($data['io_service_bytes_recursive']) && $this->isOnlyNumericKeys($data['io_service_bytes_recursive'])) {
                $values = [];
                foreach ($data['io_service_bytes_recursive'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data['io_service_bytes_recursive']) {
                $value = $data['io_service_bytes_recursive'];
            }
            $object->setIoServiceBytesRecursive($value);
        } elseif (array_key_exists('io_service_bytes_recursive', $data) && null === $data['io_service_bytes_recursive']) {
            $object->setIoServiceBytesRecursive(null);
        }
        if (array_key_exists('io_serviced_recursive', $data) && null !== $data['io_serviced_recursive']) {
            $value_2 = $data['io_serviced_recursive'];
            if (is_array($data['io_serviced_recursive']) && $this->isOnlyNumericKeys($data['io_serviced_recursive'])) {
                $values_1 = [];
                foreach ($data['io_serviced_recursive'] as $value_3) {
                    $values_1[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data['io_serviced_recursive']) {
                $value_2 = $data['io_serviced_recursive'];
            }
            $object->setIoServicedRecursive($value_2);
        } elseif (array_key_exists('io_serviced_recursive', $data) && null === $data['io_serviced_recursive']) {
            $object->setIoServicedRecursive(null);
        }
        if (array_key_exists('io_queue_recursive', $data) && null !== $data['io_queue_recursive']) {
            $value_4 = $data['io_queue_recursive'];
            if (is_array($data['io_queue_recursive']) && $this->isOnlyNumericKeys($data['io_queue_recursive'])) {
                $values_2 = [];
                foreach ($data['io_queue_recursive'] as $value_5) {
                    $values_2[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value_4 = $values_2;
            } elseif (null === $data['io_queue_recursive']) {
                $value_4 = $data['io_queue_recursive'];
            }
            $object->setIoQueueRecursive($value_4);
        } elseif (array_key_exists('io_queue_recursive', $data) && null === $data['io_queue_recursive']) {
            $object->setIoQueueRecursive(null);
        }
        if (array_key_exists('io_service_time_recursive', $data) && null !== $data['io_service_time_recursive']) {
            $value_6 = $data['io_service_time_recursive'];
            if (is_array($data['io_service_time_recursive']) && $this->isOnlyNumericKeys($data['io_service_time_recursive'])) {
                $values_3 = [];
                foreach ($data['io_service_time_recursive'] as $value_7) {
                    $values_3[] = $this->denormalizer->denormalize($value_7, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value_6 = $values_3;
            } elseif (null === $data['io_service_time_recursive']) {
                $value_6 = $data['io_service_time_recursive'];
            }
            $object->setIoServiceTimeRecursive($value_6);
        } elseif (array_key_exists('io_service_time_recursive', $data) && null === $data['io_service_time_recursive']) {
            $object->setIoServiceTimeRecursive(null);
        }
        if (array_key_exists('io_wait_time_recursive', $data) && null !== $data['io_wait_time_recursive']) {
            $value_8 = $data['io_wait_time_recursive'];
            if (is_array($data['io_wait_time_recursive']) && $this->isOnlyNumericKeys($data['io_wait_time_recursive'])) {
                $values_4 = [];
                foreach ($data['io_wait_time_recursive'] as $value_9) {
                    $values_4[] = $this->denormalizer->denormalize($value_9, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value_8 = $values_4;
            } elseif (null === $data['io_wait_time_recursive']) {
                $value_8 = $data['io_wait_time_recursive'];
            }
            $object->setIoWaitTimeRecursive($value_8);
        } elseif (array_key_exists('io_wait_time_recursive', $data) && null === $data['io_wait_time_recursive']) {
            $object->setIoWaitTimeRecursive(null);
        }
        if (array_key_exists('io_merged_recursive', $data) && null !== $data['io_merged_recursive']) {
            $value_10 = $data['io_merged_recursive'];
            if (is_array($data['io_merged_recursive']) && $this->isOnlyNumericKeys($data['io_merged_recursive'])) {
                $values_5 = [];
                foreach ($data['io_merged_recursive'] as $value_11) {
                    $values_5[] = $this->denormalizer->denormalize($value_11, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value_10 = $values_5;
            } elseif (null === $data['io_merged_recursive']) {
                $value_10 = $data['io_merged_recursive'];
            }
            $object->setIoMergedRecursive($value_10);
        } elseif (array_key_exists('io_merged_recursive', $data) && null === $data['io_merged_recursive']) {
            $object->setIoMergedRecursive(null);
        }
        if (array_key_exists('io_time_recursive', $data) && null !== $data['io_time_recursive']) {
            $value_12 = $data['io_time_recursive'];
            if (is_array($data['io_time_recursive']) && $this->isOnlyNumericKeys($data['io_time_recursive'])) {
                $values_6 = [];
                foreach ($data['io_time_recursive'] as $value_13) {
                    $values_6[] = $this->denormalizer->denormalize($value_13, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value_12 = $values_6;
            } elseif (null === $data['io_time_recursive']) {
                $value_12 = $data['io_time_recursive'];
            }
            $object->setIoTimeRecursive($value_12);
        } elseif (array_key_exists('io_time_recursive', $data) && null === $data['io_time_recursive']) {
            $object->setIoTimeRecursive(null);
        }
        if (array_key_exists('sectors_recursive', $data) && null !== $data['sectors_recursive']) {
            $value_14 = $data['sectors_recursive'];
            if (is_array($data['sectors_recursive']) && $this->isOnlyNumericKeys($data['sectors_recursive'])) {
                $values_7 = [];
                foreach ($data['sectors_recursive'] as $value_15) {
                    $values_7[] = $this->denormalizer->denormalize($value_15, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
                }
                $value_14 = $values_7;
            } elseif (null === $data['sectors_recursive']) {
                $value_14 = $data['sectors_recursive'];
            }
            $object->setSectorsRecursive($value_14);
        } elseif (array_key_exists('sectors_recursive', $data) && null === $data['sectors_recursive']) {
            $object->setSectorsRecursive(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('ioServiceBytesRecursive')) {
            $value = $data->getIoServiceBytesRecursive();
            if (is_array($data->getIoServiceBytesRecursive())) {
                $values = [];
                foreach ($data->getIoServiceBytesRecursive() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data->getIoServiceBytesRecursive()) {
                $value = $data->getIoServiceBytesRecursive();
            }
            $dataArray['io_service_bytes_recursive'] = $value;
        }
        if ($data->isInitialized('ioServicedRecursive')) {
            $value_2 = $data->getIoServicedRecursive();
            if (is_array($data->getIoServicedRecursive())) {
                $values_1 = [];
                foreach ($data->getIoServicedRecursive() as $value_3) {
                    $values_1[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data->getIoServicedRecursive()) {
                $value_2 = $data->getIoServicedRecursive();
            }
            $dataArray['io_serviced_recursive'] = $value_2;
        }
        if ($data->isInitialized('ioQueueRecursive')) {
            $value_4 = $data->getIoQueueRecursive();
            if (is_array($data->getIoQueueRecursive())) {
                $values_2 = [];
                foreach ($data->getIoQueueRecursive() as $value_5) {
                    $values_2[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $value_4 = $values_2;
            } elseif (null === $data->getIoQueueRecursive()) {
                $value_4 = $data->getIoQueueRecursive();
            }
            $dataArray['io_queue_recursive'] = $value_4;
        }
        if ($data->isInitialized('ioServiceTimeRecursive')) {
            $value_6 = $data->getIoServiceTimeRecursive();
            if (is_array($data->getIoServiceTimeRecursive())) {
                $values_3 = [];
                foreach ($data->getIoServiceTimeRecursive() as $value_7) {
                    $values_3[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $value_6 = $values_3;
            } elseif (null === $data->getIoServiceTimeRecursive()) {
                $value_6 = $data->getIoServiceTimeRecursive();
            }
            $dataArray['io_service_time_recursive'] = $value_6;
        }
        if ($data->isInitialized('ioWaitTimeRecursive')) {
            $value_8 = $data->getIoWaitTimeRecursive();
            if (is_array($data->getIoWaitTimeRecursive())) {
                $values_4 = [];
                foreach ($data->getIoWaitTimeRecursive() as $value_9) {
                    $values_4[] = $this->normalizer->normalize($value_9, 'json', $context);
                }
                $value_8 = $values_4;
            } elseif (null === $data->getIoWaitTimeRecursive()) {
                $value_8 = $data->getIoWaitTimeRecursive();
            }
            $dataArray['io_wait_time_recursive'] = $value_8;
        }
        if ($data->isInitialized('ioMergedRecursive')) {
            $value_10 = $data->getIoMergedRecursive();
            if (is_array($data->getIoMergedRecursive())) {
                $values_5 = [];
                foreach ($data->getIoMergedRecursive() as $value_11) {
                    $values_5[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $value_10 = $values_5;
            } elseif (null === $data->getIoMergedRecursive()) {
                $value_10 = $data->getIoMergedRecursive();
            }
            $dataArray['io_merged_recursive'] = $value_10;
        }
        if ($data->isInitialized('ioTimeRecursive')) {
            $value_12 = $data->getIoTimeRecursive();
            if (is_array($data->getIoTimeRecursive())) {
                $values_6 = [];
                foreach ($data->getIoTimeRecursive() as $value_13) {
                    $values_6[] = $this->normalizer->normalize($value_13, 'json', $context);
                }
                $value_12 = $values_6;
            } elseif (null === $data->getIoTimeRecursive()) {
                $value_12 = $data->getIoTimeRecursive();
            }
            $dataArray['io_time_recursive'] = $value_12;
        }
        if ($data->isInitialized('sectorsRecursive')) {
            $value_14 = $data->getSectorsRecursive();
            if (is_array($data->getSectorsRecursive())) {
                $values_7 = [];
                foreach ($data->getSectorsRecursive() as $value_15) {
                    $values_7[] = $this->normalizer->normalize($value_15, 'json', $context);
                }
                $value_14 = $values_7;
            } elseif (null === $data->getSectorsRecursive()) {
                $value_14 = $data->getSectorsRecursive();
            }
            $dataArray['sectors_recursive'] = $value_14;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
