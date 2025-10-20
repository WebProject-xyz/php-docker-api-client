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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ContainerStorageStatsConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('read_count_normalized', $data) && null !== $data['read_count_normalized']) {
            $object->setReadCountNormalized($data['read_count_normalized']);
            unset($data['read_count_normalized']);
        } elseif (array_key_exists('read_count_normalized', $data) && null === $data['read_count_normalized']) {
            $object->setReadCountNormalized(null);
        }
        if (array_key_exists('read_size_bytes', $data) && null !== $data['read_size_bytes']) {
            $object->setReadSizeBytes($data['read_size_bytes']);
            unset($data['read_size_bytes']);
        } elseif (array_key_exists('read_size_bytes', $data) && null === $data['read_size_bytes']) {
            $object->setReadSizeBytes(null);
        }
        if (array_key_exists('write_count_normalized', $data) && null !== $data['write_count_normalized']) {
            $object->setWriteCountNormalized($data['write_count_normalized']);
            unset($data['write_count_normalized']);
        } elseif (array_key_exists('write_count_normalized', $data) && null === $data['write_count_normalized']) {
            $object->setWriteCountNormalized(null);
        }
        if (array_key_exists('write_size_bytes', $data) && null !== $data['write_size_bytes']) {
            $object->setWriteSizeBytes($data['write_size_bytes']);
            unset($data['write_size_bytes']);
        } elseif (array_key_exists('write_size_bytes', $data) && null === $data['write_size_bytes']) {
            $object->setWriteSizeBytes(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('readCountNormalized') && null !== $data->getReadCountNormalized()) {
            $dataArray['read_count_normalized'] = $data->getReadCountNormalized();
        }
        if ($data->isInitialized('readSizeBytes') && null !== $data->getReadSizeBytes()) {
            $dataArray['read_size_bytes'] = $data->getReadSizeBytes();
        }
        if ($data->isInitialized('writeCountNormalized') && null !== $data->getWriteCountNormalized()) {
            $dataArray['write_count_normalized'] = $data->getWriteCountNormalized();
        }
        if ($data->isInitialized('writeSizeBytes') && null !== $data->getWriteSizeBytes()) {
            $dataArray['write_size_bytes'] = $data->getWriteSizeBytes();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ContainerStorageStatsConstraint());
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
