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
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('SnapshotInterval', $data) && null !== $data['SnapshotInterval']) {
            $value = $data['SnapshotInterval'];
            if (is_int($data['SnapshotInterval'])) {
                $value = $data['SnapshotInterval'];
            } elseif (null === $data['SnapshotInterval']) {
                $value = $data['SnapshotInterval'];
            }
            $object->setSnapshotInterval($value);
        } elseif (array_key_exists('SnapshotInterval', $data) && null === $data['SnapshotInterval']) {
            $object->setSnapshotInterval(null);
        }
        if (array_key_exists('KeepOldSnapshots', $data) && null !== $data['KeepOldSnapshots']) {
            $value_1 = $data['KeepOldSnapshots'];
            if (is_int($data['KeepOldSnapshots'])) {
                $value_1 = $data['KeepOldSnapshots'];
            } elseif (null === $data['KeepOldSnapshots']) {
                $value_1 = $data['KeepOldSnapshots'];
            }
            $object->setKeepOldSnapshots($value_1);
        } elseif (array_key_exists('KeepOldSnapshots', $data) && null === $data['KeepOldSnapshots']) {
            $object->setKeepOldSnapshots(null);
        }
        if (array_key_exists('LogEntriesForSlowFollowers', $data) && null !== $data['LogEntriesForSlowFollowers']) {
            $value_2 = $data['LogEntriesForSlowFollowers'];
            if (is_int($data['LogEntriesForSlowFollowers'])) {
                $value_2 = $data['LogEntriesForSlowFollowers'];
            } elseif (null === $data['LogEntriesForSlowFollowers']) {
                $value_2 = $data['LogEntriesForSlowFollowers'];
            }
            $object->setLogEntriesForSlowFollowers($value_2);
        } elseif (array_key_exists('LogEntriesForSlowFollowers', $data) && null === $data['LogEntriesForSlowFollowers']) {
            $object->setLogEntriesForSlowFollowers(null);
        }
        if (array_key_exists('ElectionTick', $data) && null !== $data['ElectionTick']) {
            $value_3 = $data['ElectionTick'];
            if (is_int($data['ElectionTick'])) {
                $value_3 = $data['ElectionTick'];
            } elseif (null === $data['ElectionTick']) {
                $value_3 = $data['ElectionTick'];
            }
            $object->setElectionTick($value_3);
        } elseif (array_key_exists('ElectionTick', $data) && null === $data['ElectionTick']) {
            $object->setElectionTick(null);
        }
        if (array_key_exists('HeartbeatTick', $data) && null !== $data['HeartbeatTick']) {
            $value_4 = $data['HeartbeatTick'];
            if (is_int($data['HeartbeatTick'])) {
                $value_4 = $data['HeartbeatTick'];
            } elseif (null === $data['HeartbeatTick']) {
                $value_4 = $data['HeartbeatTick'];
            }
            $object->setHeartbeatTick($value_4);
        } elseif (array_key_exists('HeartbeatTick', $data) && null === $data['HeartbeatTick']) {
            $object->setHeartbeatTick(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('snapshotInterval')) {
            $value = $data->getSnapshotInterval();
            if (is_int($data->getSnapshotInterval())) {
                $value = $data->getSnapshotInterval();
            } elseif (null === $data->getSnapshotInterval()) {
                $value = $data->getSnapshotInterval();
            }
            $dataArray['SnapshotInterval'] = $value;
        }
        if ($data->isInitialized('keepOldSnapshots')) {
            $value_1 = $data->getKeepOldSnapshots();
            if (is_int($data->getKeepOldSnapshots())) {
                $value_1 = $data->getKeepOldSnapshots();
            } elseif (null === $data->getKeepOldSnapshots()) {
                $value_1 = $data->getKeepOldSnapshots();
            }
            $dataArray['KeepOldSnapshots'] = $value_1;
        }
        if ($data->isInitialized('logEntriesForSlowFollowers')) {
            $value_2 = $data->getLogEntriesForSlowFollowers();
            if (is_int($data->getLogEntriesForSlowFollowers())) {
                $value_2 = $data->getLogEntriesForSlowFollowers();
            } elseif (null === $data->getLogEntriesForSlowFollowers()) {
                $value_2 = $data->getLogEntriesForSlowFollowers();
            }
            $dataArray['LogEntriesForSlowFollowers'] = $value_2;
        }
        if ($data->isInitialized('electionTick')) {
            $value_3 = $data->getElectionTick();
            if (is_int($data->getElectionTick())) {
                $value_3 = $data->getElectionTick();
            } elseif (null === $data->getElectionTick()) {
                $value_3 = $data->getElectionTick();
            }
            $dataArray['ElectionTick'] = $value_3;
        }
        if ($data->isInitialized('heartbeatTick')) {
            $value_4 = $data->getHeartbeatTick();
            if (is_int($data->getHeartbeatTick())) {
                $value_4 = $data->getHeartbeatTick();
            } elseif (null === $data->getHeartbeatTick()) {
                $value_4 = $data->getHeartbeatTick();
            }
            $dataArray['HeartbeatTick'] = $value_4;
        }

        return $dataArray;
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
