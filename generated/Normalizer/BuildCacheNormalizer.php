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
    class BuildCacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\BuildCache::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\BuildCache::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\BuildCache();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Parent', $data) && null !== $data['Parent']) {
                $object->setParent($data['Parent']);
                unset($data['Parent']);
            } elseif (array_key_exists('Parent', $data) && null === $data['Parent']) {
                $object->setParent(null);
            }
            if (array_key_exists('Parents', $data) && null !== $data['Parents']) {
                $values = [];
                foreach ($data['Parents'] as $value) {
                    $values[] = $value;
                }
                $object->setParents($values);
                unset($data['Parents']);
            } elseif (array_key_exists('Parents', $data) && null === $data['Parents']) {
                $object->setParents(null);
            }
            if (array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            if (array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (array_key_exists('InUse', $data)) {
                $object->setInUse($data['InUse']);
                unset($data['InUse']);
            }
            if (array_key_exists('Shared', $data)) {
                $object->setShared($data['Shared']);
                unset($data['Shared']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            if (array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
                unset($data['CreatedAt']);
            }
            if (array_key_exists('LastUsedAt', $data) && null !== $data['LastUsedAt']) {
                $object->setLastUsedAt($data['LastUsedAt']);
                unset($data['LastUsedAt']);
            } elseif (array_key_exists('LastUsedAt', $data) && null === $data['LastUsedAt']) {
                $object->setLastUsedAt(null);
            }
            if (array_key_exists('UsageCount', $data)) {
                $object->setUsageCount($data['UsageCount']);
                unset($data['UsageCount']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('parents') && null !== $object->getParents()) {
                $values = [];
                foreach ($object->getParents() as $value) {
                    $values[] = $value;
                }
                $data['Parents'] = $values;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('inUse') && null !== $object->getInUse()) {
                $data['InUse'] = $object->getInUse();
            }
            if ($object->isInitialized('shared') && null !== $object->getShared()) {
                $data['Shared'] = $object->getShared();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('lastUsedAt') && null !== $object->getLastUsedAt()) {
                $data['LastUsedAt'] = $object->getLastUsedAt();
            }
            if ($object->isInitialized('usageCount') && null !== $object->getUsageCount()) {
                $data['UsageCount'] = $object->getUsageCount();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\BuildCache::class => true];
        }
    }
} else {
    class BuildCacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\BuildCache::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\BuildCache::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\BuildCache();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Parent', $data) && null !== $data['Parent']) {
                $object->setParent($data['Parent']);
                unset($data['Parent']);
            } elseif (array_key_exists('Parent', $data) && null === $data['Parent']) {
                $object->setParent(null);
            }
            if (array_key_exists('Parents', $data) && null !== $data['Parents']) {
                $values = [];
                foreach ($data['Parents'] as $value) {
                    $values[] = $value;
                }
                $object->setParents($values);
                unset($data['Parents']);
            } elseif (array_key_exists('Parents', $data) && null === $data['Parents']) {
                $object->setParents(null);
            }
            if (array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            if (array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (array_key_exists('InUse', $data)) {
                $object->setInUse($data['InUse']);
                unset($data['InUse']);
            }
            if (array_key_exists('Shared', $data)) {
                $object->setShared($data['Shared']);
                unset($data['Shared']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            if (array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
                unset($data['CreatedAt']);
            }
            if (array_key_exists('LastUsedAt', $data) && null !== $data['LastUsedAt']) {
                $object->setLastUsedAt($data['LastUsedAt']);
                unset($data['LastUsedAt']);
            } elseif (array_key_exists('LastUsedAt', $data) && null === $data['LastUsedAt']) {
                $object->setLastUsedAt(null);
            }
            if (array_key_exists('UsageCount', $data)) {
                $object->setUsageCount($data['UsageCount']);
                unset($data['UsageCount']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('parents') && null !== $object->getParents()) {
                $values = [];
                foreach ($object->getParents() as $value) {
                    $values[] = $value;
                }
                $data['Parents'] = $values;
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('inUse') && null !== $object->getInUse()) {
                $data['InUse'] = $object->getInUse();
            }
            if ($object->isInitialized('shared') && null !== $object->getShared()) {
                $data['Shared'] = $object->getShared();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('lastUsedAt') && null !== $object->getLastUsedAt()) {
                $data['LastUsedAt'] = $object->getLastUsedAt();
            }
            if ($object->isInitialized('usageCount') && null !== $object->getUsageCount()) {
                $data['UsageCount'] = $object->getUsageCount();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\BuildCache::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
