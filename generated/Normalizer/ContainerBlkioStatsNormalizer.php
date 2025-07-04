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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('io_service_bytes_recursive', $data)) {
            $values = [];
            foreach ($data['io_service_bytes_recursive'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setIoServiceBytesRecursive($values);
            unset($data['io_service_bytes_recursive']);
        }
        if (array_key_exists('io_serviced_recursive', $data) && null !== $data['io_serviced_recursive']) {
            $values_1 = [];
            foreach ($data['io_serviced_recursive'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setIoServicedRecursive($values_1);
            unset($data['io_serviced_recursive']);
        } elseif (array_key_exists('io_serviced_recursive', $data) && null === $data['io_serviced_recursive']) {
            $object->setIoServicedRecursive(null);
        }
        if (array_key_exists('io_queue_recursive', $data) && null !== $data['io_queue_recursive']) {
            $values_2 = [];
            foreach ($data['io_queue_recursive'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setIoQueueRecursive($values_2);
            unset($data['io_queue_recursive']);
        } elseif (array_key_exists('io_queue_recursive', $data) && null === $data['io_queue_recursive']) {
            $object->setIoQueueRecursive(null);
        }
        if (array_key_exists('io_service_time_recursive', $data) && null !== $data['io_service_time_recursive']) {
            $values_3 = [];
            foreach ($data['io_service_time_recursive'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setIoServiceTimeRecursive($values_3);
            unset($data['io_service_time_recursive']);
        } elseif (array_key_exists('io_service_time_recursive', $data) && null === $data['io_service_time_recursive']) {
            $object->setIoServiceTimeRecursive(null);
        }
        if (array_key_exists('io_wait_time_recursive', $data) && null !== $data['io_wait_time_recursive']) {
            $values_4 = [];
            foreach ($data['io_wait_time_recursive'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setIoWaitTimeRecursive($values_4);
            unset($data['io_wait_time_recursive']);
        } elseif (array_key_exists('io_wait_time_recursive', $data) && null === $data['io_wait_time_recursive']) {
            $object->setIoWaitTimeRecursive(null);
        }
        if (array_key_exists('io_merged_recursive', $data) && null !== $data['io_merged_recursive']) {
            $values_5 = [];
            foreach ($data['io_merged_recursive'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setIoMergedRecursive($values_5);
            unset($data['io_merged_recursive']);
        } elseif (array_key_exists('io_merged_recursive', $data) && null === $data['io_merged_recursive']) {
            $object->setIoMergedRecursive(null);
        }
        if (array_key_exists('io_time_recursive', $data) && null !== $data['io_time_recursive']) {
            $values_6 = [];
            foreach ($data['io_time_recursive'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setIoTimeRecursive($values_6);
            unset($data['io_time_recursive']);
        } elseif (array_key_exists('io_time_recursive', $data) && null === $data['io_time_recursive']) {
            $object->setIoTimeRecursive(null);
        }
        if (array_key_exists('sectors_recursive', $data) && null !== $data['sectors_recursive']) {
            $values_7 = [];
            foreach ($data['sectors_recursive'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class, 'json', $context);
            }
            $object->setSectorsRecursive($values_7);
            unset($data['sectors_recursive']);
        } elseif (array_key_exists('sectors_recursive', $data) && null === $data['sectors_recursive']) {
            $object->setSectorsRecursive(null);
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
        if ($data->isInitialized('ioServiceBytesRecursive') && null !== $data->getIoServiceBytesRecursive()) {
            $values = [];
            foreach ($data->getIoServiceBytesRecursive() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['io_service_bytes_recursive'] = $values;
        }
        if ($data->isInitialized('ioServicedRecursive') && null !== $data->getIoServicedRecursive()) {
            $values_1 = [];
            foreach ($data->getIoServicedRecursive() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['io_serviced_recursive'] = $values_1;
        }
        if ($data->isInitialized('ioQueueRecursive') && null !== $data->getIoQueueRecursive()) {
            $values_2 = [];
            foreach ($data->getIoQueueRecursive() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['io_queue_recursive'] = $values_2;
        }
        if ($data->isInitialized('ioServiceTimeRecursive') && null !== $data->getIoServiceTimeRecursive()) {
            $values_3 = [];
            foreach ($data->getIoServiceTimeRecursive() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['io_service_time_recursive'] = $values_3;
        }
        if ($data->isInitialized('ioWaitTimeRecursive') && null !== $data->getIoWaitTimeRecursive()) {
            $values_4 = [];
            foreach ($data->getIoWaitTimeRecursive() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['io_wait_time_recursive'] = $values_4;
        }
        if ($data->isInitialized('ioMergedRecursive') && null !== $data->getIoMergedRecursive()) {
            $values_5 = [];
            foreach ($data->getIoMergedRecursive() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['io_merged_recursive'] = $values_5;
        }
        if ($data->isInitialized('ioTimeRecursive') && null !== $data->getIoTimeRecursive()) {
            $values_6 = [];
            foreach ($data->getIoTimeRecursive() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['io_time_recursive'] = $values_6;
        }
        if ($data->isInitialized('sectorsRecursive') && null !== $data->getSectorsRecursive()) {
            $values_7 = [];
            foreach ($data->getSectorsRecursive() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['sectors_recursive'] = $values_7;
        }
        foreach ($data as $key => $value_8) {
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
