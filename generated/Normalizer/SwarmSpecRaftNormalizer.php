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
    class SwarmSpecRaftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('SnapshotInterval', $data)) {
                $object->setSnapshotInterval($data['SnapshotInterval']);
                unset($data['SnapshotInterval']);
            }
            if (array_key_exists('KeepOldSnapshots', $data)) {
                $object->setKeepOldSnapshots($data['KeepOldSnapshots']);
                unset($data['KeepOldSnapshots']);
            }
            if (array_key_exists('LogEntriesForSlowFollowers', $data)) {
                $object->setLogEntriesForSlowFollowers($data['LogEntriesForSlowFollowers']);
                unset($data['LogEntriesForSlowFollowers']);
            }
            if (array_key_exists('ElectionTick', $data)) {
                $object->setElectionTick($data['ElectionTick']);
                unset($data['ElectionTick']);
            }
            if (array_key_exists('HeartbeatTick', $data)) {
                $object->setHeartbeatTick($data['HeartbeatTick']);
                unset($data['HeartbeatTick']);
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
            if ($object->isInitialized('snapshotInterval') && null !== $object->getSnapshotInterval()) {
                $data['SnapshotInterval'] = $object->getSnapshotInterval();
            }
            if ($object->isInitialized('keepOldSnapshots') && null !== $object->getKeepOldSnapshots()) {
                $data['KeepOldSnapshots'] = $object->getKeepOldSnapshots();
            }
            if ($object->isInitialized('logEntriesForSlowFollowers') && null !== $object->getLogEntriesForSlowFollowers()) {
                $data['LogEntriesForSlowFollowers'] = $object->getLogEntriesForSlowFollowers();
            }
            if ($object->isInitialized('electionTick') && null !== $object->getElectionTick()) {
                $data['ElectionTick'] = $object->getElectionTick();
            }
            if ($object->isInitialized('heartbeatTick') && null !== $object->getHeartbeatTick()) {
                $data['HeartbeatTick'] = $object->getHeartbeatTick();
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
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class => true];
        }
    }
} else {
    class SwarmSpecRaftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('SnapshotInterval', $data)) {
                $object->setSnapshotInterval($data['SnapshotInterval']);
                unset($data['SnapshotInterval']);
            }
            if (array_key_exists('KeepOldSnapshots', $data)) {
                $object->setKeepOldSnapshots($data['KeepOldSnapshots']);
                unset($data['KeepOldSnapshots']);
            }
            if (array_key_exists('LogEntriesForSlowFollowers', $data)) {
                $object->setLogEntriesForSlowFollowers($data['LogEntriesForSlowFollowers']);
                unset($data['LogEntriesForSlowFollowers']);
            }
            if (array_key_exists('ElectionTick', $data)) {
                $object->setElectionTick($data['ElectionTick']);
                unset($data['ElectionTick']);
            }
            if (array_key_exists('HeartbeatTick', $data)) {
                $object->setHeartbeatTick($data['HeartbeatTick']);
                unset($data['HeartbeatTick']);
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
            if ($object->isInitialized('snapshotInterval') && null !== $object->getSnapshotInterval()) {
                $data['SnapshotInterval'] = $object->getSnapshotInterval();
            }
            if ($object->isInitialized('keepOldSnapshots') && null !== $object->getKeepOldSnapshots()) {
                $data['KeepOldSnapshots'] = $object->getKeepOldSnapshots();
            }
            if ($object->isInitialized('logEntriesForSlowFollowers') && null !== $object->getLogEntriesForSlowFollowers()) {
                $data['LogEntriesForSlowFollowers'] = $object->getLogEntriesForSlowFollowers();
            }
            if ($object->isInitialized('electionTick') && null !== $object->getElectionTick()) {
                $data['ElectionTick'] = $object->getElectionTick();
            }
            if ($object->isInitialized('heartbeatTick') && null !== $object->getHeartbeatTick()) {
                $data['HeartbeatTick'] = $object->getHeartbeatTick();
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
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
