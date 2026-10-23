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
            $object->readCountNormalized = $value;
            unset($data['read_count_normalized']);
        } elseif (array_key_exists('read_count_normalized', $data)) {
            $object->readCountNormalized = null;
            unset($data['read_count_normalized']);
        }
        if (array_key_exists('read_size_bytes', $data) && null !== $data['read_size_bytes']) {
            $value_1 = $data['read_size_bytes'];
            if (is_int($data['read_size_bytes'])) {
                $value_1 = $data['read_size_bytes'];
            } elseif (null === $data['read_size_bytes']) {
                $value_1 = $data['read_size_bytes'];
            }
            $object->readSizeBytes = $value_1;
            unset($data['read_size_bytes']);
        } elseif (array_key_exists('read_size_bytes', $data)) {
            $object->readSizeBytes = null;
            unset($data['read_size_bytes']);
        }
        if (array_key_exists('write_count_normalized', $data) && null !== $data['write_count_normalized']) {
            $value_2 = $data['write_count_normalized'];
            if (is_int($data['write_count_normalized'])) {
                $value_2 = $data['write_count_normalized'];
            } elseif (null === $data['write_count_normalized']) {
                $value_2 = $data['write_count_normalized'];
            }
            $object->writeCountNormalized = $value_2;
            unset($data['write_count_normalized']);
        } elseif (array_key_exists('write_count_normalized', $data)) {
            $object->writeCountNormalized = null;
            unset($data['write_count_normalized']);
        }
        if (array_key_exists('write_size_bytes', $data) && null !== $data['write_size_bytes']) {
            $value_3 = $data['write_size_bytes'];
            if (is_int($data['write_size_bytes'])) {
                $value_3 = $data['write_size_bytes'];
            } elseif (null === $data['write_size_bytes']) {
                $value_3 = $data['write_size_bytes'];
            }
            $object->writeSizeBytes = $value_3;
            unset($data['write_size_bytes']);
        } elseif (array_key_exists('write_size_bytes', $data)) {
            $object->writeSizeBytes = null;
            unset($data['write_size_bytes']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('readCountNormalized', get_object_vars($data)) && null !== ($data->readCountNormalized ?? null)) {
            $value = $data->readCountNormalized;
            if (is_int($data->readCountNormalized)) {
                $value = $data->readCountNormalized;
            } elseif (null === $data->readCountNormalized) {
                $value = $data->readCountNormalized;
            }
            $dataArray['read_count_normalized'] = $value;
        }
        if (array_key_exists('readSizeBytes', get_object_vars($data)) && null !== ($data->readSizeBytes ?? null)) {
            $value_1 = $data->readSizeBytes;
            if (is_int($data->readSizeBytes)) {
                $value_1 = $data->readSizeBytes;
            } elseif (null === $data->readSizeBytes) {
                $value_1 = $data->readSizeBytes;
            }
            $dataArray['read_size_bytes'] = $value_1;
        }
        if (array_key_exists('writeCountNormalized', get_object_vars($data)) && null !== ($data->writeCountNormalized ?? null)) {
            $value_2 = $data->writeCountNormalized;
            if (is_int($data->writeCountNormalized)) {
                $value_2 = $data->writeCountNormalized;
            } elseif (null === $data->writeCountNormalized) {
                $value_2 = $data->writeCountNormalized;
            }
            $dataArray['write_count_normalized'] = $value_2;
        }
        if (array_key_exists('writeSizeBytes', get_object_vars($data)) && null !== ($data->writeSizeBytes ?? null)) {
            $value_3 = $data->writeSizeBytes;
            if (is_int($data->writeSizeBytes)) {
                $value_3 = $data->writeSizeBytes;
            } elseif (null === $data->writeSizeBytes) {
                $value_3 = $data->writeSizeBytes;
            }
            $dataArray['write_size_bytes'] = $value_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
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
