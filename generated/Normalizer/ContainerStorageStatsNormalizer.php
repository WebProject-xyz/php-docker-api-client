<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('readCountNormalized') && null !== $object->getReadCountNormalized()) {
                $data['read_count_normalized'] = $object->getReadCountNormalized();
            }
            if ($object->isInitialized('readSizeBytes') && null !== $object->getReadSizeBytes()) {
                $data['read_size_bytes'] = $object->getReadSizeBytes();
            }
            if ($object->isInitialized('writeCountNormalized') && null !== $object->getWriteCountNormalized()) {
                $data['write_count_normalized'] = $object->getWriteCountNormalized();
            }
            if ($object->isInitialized('writeSizeBytes') && null !== $object->getWriteSizeBytes()) {
                $data['write_size_bytes'] = $object->getWriteSizeBytes();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class => true];
        }
    }
} else {
    class ContainerStorageStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class === get_class($data);
        }

        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats();
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

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('readCountNormalized') && null !== $object->getReadCountNormalized()) {
                $data['read_count_normalized'] = $object->getReadCountNormalized();
            }
            if ($object->isInitialized('readSizeBytes') && null !== $object->getReadSizeBytes()) {
                $data['read_size_bytes'] = $object->getReadSizeBytes();
            }
            if ($object->isInitialized('writeCountNormalized') && null !== $object->getWriteCountNormalized()) {
                $data['write_count_normalized'] = $object->getWriteCountNormalized();
            }
            if ($object->isInitialized('writeSizeBytes') && null !== $object->getWriteSizeBytes()) {
                $data['write_size_bytes'] = $object->getWriteSizeBytes();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
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
}
