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
            $values = [];
            foreach ($data['io_service_bytes_recursive'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->ioServiceBytesRecursive = $values;
            unset($data['io_service_bytes_recursive']);
        } elseif (array_key_exists('io_service_bytes_recursive', $data)) {
            $object->ioServiceBytesRecursive = null;
            unset($data['io_service_bytes_recursive']);
        }
        if (array_key_exists('io_serviced_recursive', $data) && null !== $data['io_serviced_recursive']) {
            $values_1 = [];
            foreach ($data['io_serviced_recursive'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->ioServicedRecursive = $values_1;
            unset($data['io_serviced_recursive']);
        } elseif (array_key_exists('io_serviced_recursive', $data)) {
            $object->ioServicedRecursive = null;
            unset($data['io_serviced_recursive']);
        }
        if (array_key_exists('io_queue_recursive', $data) && null !== $data['io_queue_recursive']) {
            $values_2 = [];
            foreach ($data['io_queue_recursive'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->ioQueueRecursive = $values_2;
            unset($data['io_queue_recursive']);
        } elseif (array_key_exists('io_queue_recursive', $data)) {
            $object->ioQueueRecursive = null;
            unset($data['io_queue_recursive']);
        }
        if (array_key_exists('io_service_time_recursive', $data) && null !== $data['io_service_time_recursive']) {
            $values_3 = [];
            foreach ($data['io_service_time_recursive'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->ioServiceTimeRecursive = $values_3;
            unset($data['io_service_time_recursive']);
        } elseif (array_key_exists('io_service_time_recursive', $data)) {
            $object->ioServiceTimeRecursive = null;
            unset($data['io_service_time_recursive']);
        }
        if (array_key_exists('io_wait_time_recursive', $data) && null !== $data['io_wait_time_recursive']) {
            $values_4 = [];
            foreach ($data['io_wait_time_recursive'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->ioWaitTimeRecursive = $values_4;
            unset($data['io_wait_time_recursive']);
        } elseif (array_key_exists('io_wait_time_recursive', $data)) {
            $object->ioWaitTimeRecursive = null;
            unset($data['io_wait_time_recursive']);
        }
        if (array_key_exists('io_merged_recursive', $data) && null !== $data['io_merged_recursive']) {
            $values_5 = [];
            foreach ($data['io_merged_recursive'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->ioMergedRecursive = $values_5;
            unset($data['io_merged_recursive']);
        } elseif (array_key_exists('io_merged_recursive', $data)) {
            $object->ioMergedRecursive = null;
            unset($data['io_merged_recursive']);
        }
        if (array_key_exists('io_time_recursive', $data) && null !== $data['io_time_recursive']) {
            $values_6 = [];
            foreach ($data['io_time_recursive'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->ioTimeRecursive = $values_6;
            unset($data['io_time_recursive']);
        } elseif (array_key_exists('io_time_recursive', $data)) {
            $object->ioTimeRecursive = null;
            unset($data['io_time_recursive']);
        }
        if (array_key_exists('sectors_recursive', $data) && null !== $data['sectors_recursive']) {
            $values_7 = [];
            foreach ($data['sectors_recursive'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->sectorsRecursive = $values_7;
            unset($data['sectors_recursive']);
        } elseif (array_key_exists('sectors_recursive', $data)) {
            $object->sectorsRecursive = null;
            unset($data['sectors_recursive']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('ioServiceBytesRecursive', get_object_vars($data)) && null !== ($data->ioServiceBytesRecursive ?? null)) {
            $values = [];
            foreach ($data->ioServiceBytesRecursive as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['io_service_bytes_recursive'] = $values;
        }
        if (array_key_exists('ioServicedRecursive', get_object_vars($data)) && null !== ($data->ioServicedRecursive ?? null)) {
            $values_1 = [];
            foreach ($data->ioServicedRecursive as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[]   = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['io_serviced_recursive'] = $values_1;
        }
        if (array_key_exists('ioQueueRecursive', get_object_vars($data)) && null !== ($data->ioQueueRecursive ?? null)) {
            $values_2 = [];
            foreach ($data->ioQueueRecursive as $value_2) {
                $normalized_2 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[]   = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['io_queue_recursive'] = $values_2;
        }
        if (array_key_exists('ioServiceTimeRecursive', get_object_vars($data)) && null !== ($data->ioServiceTimeRecursive ?? null)) {
            $values_3 = [];
            foreach ($data->ioServiceTimeRecursive as $value_3) {
                $normalized_3 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[]   = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['io_service_time_recursive'] = $values_3;
        }
        if (array_key_exists('ioWaitTimeRecursive', get_object_vars($data)) && null !== ($data->ioWaitTimeRecursive ?? null)) {
            $values_4 = [];
            foreach ($data->ioWaitTimeRecursive as $value_4) {
                $normalized_4 = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[]   = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['io_wait_time_recursive'] = $values_4;
        }
        if (array_key_exists('ioMergedRecursive', get_object_vars($data)) && null !== ($data->ioMergedRecursive ?? null)) {
            $values_5 = [];
            foreach ($data->ioMergedRecursive as $value_5) {
                $normalized_5 = null === $value_5 ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_5[]   = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['io_merged_recursive'] = $values_5;
        }
        if (array_key_exists('ioTimeRecursive', get_object_vars($data)) && null !== ($data->ioTimeRecursive ?? null)) {
            $values_6 = [];
            foreach ($data->ioTimeRecursive as $value_6) {
                $normalized_6 = null === $value_6 ? null : $this->normalizer->normalize($value_6, 'json', $context);
                $values_6[]   = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['io_time_recursive'] = $values_6;
        }
        if (array_key_exists('sectorsRecursive', get_object_vars($data)) && null !== ($data->sectorsRecursive ?? null)) {
            $values_7 = [];
            foreach ($data->sectorsRecursive as $value_7) {
                $normalized_7 = null === $value_7 ? null : $this->normalizer->normalize($value_7, 'json', $context);
                $values_7[]   = is_iterable($normalized_7) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_7) : $normalized_7;
            }
            $dataArray['sectors_recursive'] = $values_7;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
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
