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

class ContainerStorageStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('read_count_normalized', $data) && null !== $data['read_count_normalized']) {
            $value = $data['read_count_normalized'];
            if (is_int($data['read_count_normalized'])) {
                $value = $data['read_count_normalized'];
            } elseif (null === $data['read_count_normalized']) {
                $value = $data['read_count_normalized'];
            }
            $object->setReadCountNormalized($value);
        } elseif (array_key_exists('read_count_normalized', $data) && null === $data['read_count_normalized']) {
            $object->setReadCountNormalized(null);
        }
        if (array_key_exists('read_size_bytes', $data) && null !== $data['read_size_bytes']) {
            $value_1 = $data['read_size_bytes'];
            if (is_int($data['read_size_bytes'])) {
                $value_1 = $data['read_size_bytes'];
            } elseif (null === $data['read_size_bytes']) {
                $value_1 = $data['read_size_bytes'];
            }
            $object->setReadSizeBytes($value_1);
        } elseif (array_key_exists('read_size_bytes', $data) && null === $data['read_size_bytes']) {
            $object->setReadSizeBytes(null);
        }
        if (array_key_exists('write_count_normalized', $data) && null !== $data['write_count_normalized']) {
            $value_2 = $data['write_count_normalized'];
            if (is_int($data['write_count_normalized'])) {
                $value_2 = $data['write_count_normalized'];
            } elseif (null === $data['write_count_normalized']) {
                $value_2 = $data['write_count_normalized'];
            }
            $object->setWriteCountNormalized($value_2);
        } elseif (array_key_exists('write_count_normalized', $data) && null === $data['write_count_normalized']) {
            $object->setWriteCountNormalized(null);
        }
        if (array_key_exists('write_size_bytes', $data) && null !== $data['write_size_bytes']) {
            $value_3 = $data['write_size_bytes'];
            if (is_int($data['write_size_bytes'])) {
                $value_3 = $data['write_size_bytes'];
            } elseif (null === $data['write_size_bytes']) {
                $value_3 = $data['write_size_bytes'];
            }
            $object->setWriteSizeBytes($value_3);
        } elseif (array_key_exists('write_size_bytes', $data) && null === $data['write_size_bytes']) {
            $object->setWriteSizeBytes(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('readCountNormalized')) {
            $value = $data->getReadCountNormalized();
            if (is_int($data->getReadCountNormalized())) {
                $value = $data->getReadCountNormalized();
            } elseif (null === $data->getReadCountNormalized()) {
                $value = $data->getReadCountNormalized();
            }
            $dataArray['read_count_normalized'] = $value;
        }
        if ($data->isInitialized('readSizeBytes')) {
            $value_1 = $data->getReadSizeBytes();
            if (is_int($data->getReadSizeBytes())) {
                $value_1 = $data->getReadSizeBytes();
            } elseif (null === $data->getReadSizeBytes()) {
                $value_1 = $data->getReadSizeBytes();
            }
            $dataArray['read_size_bytes'] = $value_1;
        }
        if ($data->isInitialized('writeCountNormalized')) {
            $value_2 = $data->getWriteCountNormalized();
            if (is_int($data->getWriteCountNormalized())) {
                $value_2 = $data->getWriteCountNormalized();
            } elseif (null === $data->getWriteCountNormalized()) {
                $value_2 = $data->getWriteCountNormalized();
            }
            $dataArray['write_count_normalized'] = $value_2;
        }
        if ($data->isInitialized('writeSizeBytes')) {
            $value_3 = $data->getWriteSizeBytes();
            if (is_int($data->getWriteSizeBytes())) {
                $value_3 = $data->getWriteSizeBytes();
            } elseif (null === $data->getWriteSizeBytes()) {
                $value_3 = $data->getWriteSizeBytes();
            }
            $dataArray['write_size_bytes'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
