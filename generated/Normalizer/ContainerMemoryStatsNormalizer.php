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
    class ContainerMemoryStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('usage', $data) && null !== $data['usage']) {
                $object->setUsage($data['usage']);
                unset($data['usage']);
            } elseif (array_key_exists('usage', $data) && null === $data['usage']) {
                $object->setUsage(null);
            }
            if (array_key_exists('max_usage', $data) && null !== $data['max_usage']) {
                $object->setMaxUsage($data['max_usage']);
                unset($data['max_usage']);
            } elseif (array_key_exists('max_usage', $data) && null === $data['max_usage']) {
                $object->setMaxUsage(null);
            }
            if (array_key_exists('stats', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['stats'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setStats($values);
                unset($data['stats']);
            }
            if (array_key_exists('failcnt', $data) && null !== $data['failcnt']) {
                $object->setFailcnt($data['failcnt']);
                unset($data['failcnt']);
            } elseif (array_key_exists('failcnt', $data) && null === $data['failcnt']) {
                $object->setFailcnt(null);
            }
            if (array_key_exists('limit', $data) && null !== $data['limit']) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            } elseif (array_key_exists('limit', $data) && null === $data['limit']) {
                $object->setLimit(null);
            }
            if (array_key_exists('commitbytes', $data) && null !== $data['commitbytes']) {
                $object->setCommitbytes($data['commitbytes']);
                unset($data['commitbytes']);
            } elseif (array_key_exists('commitbytes', $data) && null === $data['commitbytes']) {
                $object->setCommitbytes(null);
            }
            if (array_key_exists('commitpeakbytes', $data) && null !== $data['commitpeakbytes']) {
                $object->setCommitpeakbytes($data['commitpeakbytes']);
                unset($data['commitpeakbytes']);
            } elseif (array_key_exists('commitpeakbytes', $data) && null === $data['commitpeakbytes']) {
                $object->setCommitpeakbytes(null);
            }
            if (array_key_exists('privateworkingset', $data) && null !== $data['privateworkingset']) {
                $object->setPrivateworkingset($data['privateworkingset']);
                unset($data['privateworkingset']);
            } elseif (array_key_exists('privateworkingset', $data) && null === $data['privateworkingset']) {
                $object->setPrivateworkingset(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('usage') && null !== $object->getUsage()) {
                $data['usage'] = $object->getUsage();
            }
            if ($object->isInitialized('maxUsage') && null !== $object->getMaxUsage()) {
                $data['max_usage'] = $object->getMaxUsage();
            }
            if ($object->isInitialized('stats') && null !== $object->getStats()) {
                $values = [];
                foreach ($object->getStats() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['stats'] = $values;
            }
            if ($object->isInitialized('failcnt') && null !== $object->getFailcnt()) {
                $data['failcnt'] = $object->getFailcnt();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('commitbytes') && null !== $object->getCommitbytes()) {
                $data['commitbytes'] = $object->getCommitbytes();
            }
            if ($object->isInitialized('commitpeakbytes') && null !== $object->getCommitpeakbytes()) {
                $data['commitpeakbytes'] = $object->getCommitpeakbytes();
            }
            if ($object->isInitialized('privateworkingset') && null !== $object->getPrivateworkingset()) {
                $data['privateworkingset'] = $object->getPrivateworkingset();
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class => true];
        }
    }
} else {
    class ContainerMemoryStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('usage', $data) && null !== $data['usage']) {
                $object->setUsage($data['usage']);
                unset($data['usage']);
            } elseif (array_key_exists('usage', $data) && null === $data['usage']) {
                $object->setUsage(null);
            }
            if (array_key_exists('max_usage', $data) && null !== $data['max_usage']) {
                $object->setMaxUsage($data['max_usage']);
                unset($data['max_usage']);
            } elseif (array_key_exists('max_usage', $data) && null === $data['max_usage']) {
                $object->setMaxUsage(null);
            }
            if (array_key_exists('stats', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['stats'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setStats($values);
                unset($data['stats']);
            }
            if (array_key_exists('failcnt', $data) && null !== $data['failcnt']) {
                $object->setFailcnt($data['failcnt']);
                unset($data['failcnt']);
            } elseif (array_key_exists('failcnt', $data) && null === $data['failcnt']) {
                $object->setFailcnt(null);
            }
            if (array_key_exists('limit', $data) && null !== $data['limit']) {
                $object->setLimit($data['limit']);
                unset($data['limit']);
            } elseif (array_key_exists('limit', $data) && null === $data['limit']) {
                $object->setLimit(null);
            }
            if (array_key_exists('commitbytes', $data) && null !== $data['commitbytes']) {
                $object->setCommitbytes($data['commitbytes']);
                unset($data['commitbytes']);
            } elseif (array_key_exists('commitbytes', $data) && null === $data['commitbytes']) {
                $object->setCommitbytes(null);
            }
            if (array_key_exists('commitpeakbytes', $data) && null !== $data['commitpeakbytes']) {
                $object->setCommitpeakbytes($data['commitpeakbytes']);
                unset($data['commitpeakbytes']);
            } elseif (array_key_exists('commitpeakbytes', $data) && null === $data['commitpeakbytes']) {
                $object->setCommitpeakbytes(null);
            }
            if (array_key_exists('privateworkingset', $data) && null !== $data['privateworkingset']) {
                $object->setPrivateworkingset($data['privateworkingset']);
                unset($data['privateworkingset']);
            } elseif (array_key_exists('privateworkingset', $data) && null === $data['privateworkingset']) {
                $object->setPrivateworkingset(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            if ($object->isInitialized('usage') && null !== $object->getUsage()) {
                $data['usage'] = $object->getUsage();
            }
            if ($object->isInitialized('maxUsage') && null !== $object->getMaxUsage()) {
                $data['max_usage'] = $object->getMaxUsage();
            }
            if ($object->isInitialized('stats') && null !== $object->getStats()) {
                $values = [];
                foreach ($object->getStats() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['stats'] = $values;
            }
            if ($object->isInitialized('failcnt') && null !== $object->getFailcnt()) {
                $data['failcnt'] = $object->getFailcnt();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('commitbytes') && null !== $object->getCommitbytes()) {
                $data['commitbytes'] = $object->getCommitbytes();
            }
            if ($object->isInitialized('commitpeakbytes') && null !== $object->getCommitpeakbytes()) {
                $data['commitpeakbytes'] = $object->getCommitpeakbytes();
            }
            if ($object->isInitialized('privateworkingset') && null !== $object->getPrivateworkingset()) {
                $data['privateworkingset'] = $object->getPrivateworkingset();
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
