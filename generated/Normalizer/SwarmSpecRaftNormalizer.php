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
            $object->snapshotInterval = $value;
            unset($data['SnapshotInterval']);
        } elseif (array_key_exists('SnapshotInterval', $data)) {
            $object->snapshotInterval = null;
            unset($data['SnapshotInterval']);
        }
        if (array_key_exists('KeepOldSnapshots', $data) && null !== $data['KeepOldSnapshots']) {
            $value_1 = $data['KeepOldSnapshots'];
            if (is_int($data['KeepOldSnapshots'])) {
                $value_1 = $data['KeepOldSnapshots'];
            } elseif (null === $data['KeepOldSnapshots']) {
                $value_1 = $data['KeepOldSnapshots'];
            }
            $object->keepOldSnapshots = $value_1;
            unset($data['KeepOldSnapshots']);
        } elseif (array_key_exists('KeepOldSnapshots', $data)) {
            $object->keepOldSnapshots = null;
            unset($data['KeepOldSnapshots']);
        }
        if (array_key_exists('LogEntriesForSlowFollowers', $data) && null !== $data['LogEntriesForSlowFollowers']) {
            $value_2 = $data['LogEntriesForSlowFollowers'];
            if (is_int($data['LogEntriesForSlowFollowers'])) {
                $value_2 = $data['LogEntriesForSlowFollowers'];
            } elseif (null === $data['LogEntriesForSlowFollowers']) {
                $value_2 = $data['LogEntriesForSlowFollowers'];
            }
            $object->logEntriesForSlowFollowers = $value_2;
            unset($data['LogEntriesForSlowFollowers']);
        } elseif (array_key_exists('LogEntriesForSlowFollowers', $data)) {
            $object->logEntriesForSlowFollowers = null;
            unset($data['LogEntriesForSlowFollowers']);
        }
        if (array_key_exists('ElectionTick', $data) && null !== $data['ElectionTick']) {
            $value_3 = $data['ElectionTick'];
            if (is_int($data['ElectionTick'])) {
                $value_3 = $data['ElectionTick'];
            } elseif (null === $data['ElectionTick']) {
                $value_3 = $data['ElectionTick'];
            }
            $object->electionTick = $value_3;
            unset($data['ElectionTick']);
        } elseif (array_key_exists('ElectionTick', $data)) {
            $object->electionTick = null;
            unset($data['ElectionTick']);
        }
        if (array_key_exists('HeartbeatTick', $data) && null !== $data['HeartbeatTick']) {
            $value_4 = $data['HeartbeatTick'];
            if (is_int($data['HeartbeatTick'])) {
                $value_4 = $data['HeartbeatTick'];
            } elseif (null === $data['HeartbeatTick']) {
                $value_4 = $data['HeartbeatTick'];
            }
            $object->heartbeatTick = $value_4;
            unset($data['HeartbeatTick']);
        } elseif (array_key_exists('HeartbeatTick', $data)) {
            $object->heartbeatTick = null;
            unset($data['HeartbeatTick']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('snapshotInterval', get_object_vars($data)) && null !== ($data->snapshotInterval ?? null)) {
            $value = $data->snapshotInterval;
            if (is_int($data->snapshotInterval)) {
                $value = $data->snapshotInterval;
            } elseif (null === $data->snapshotInterval) {
                $value = $data->snapshotInterval;
            }
            $dataArray['SnapshotInterval'] = $value;
        }
        if (array_key_exists('keepOldSnapshots', get_object_vars($data)) && null !== ($data->keepOldSnapshots ?? null)) {
            $value_1 = $data->keepOldSnapshots;
            if (is_int($data->keepOldSnapshots)) {
                $value_1 = $data->keepOldSnapshots;
            } elseif (null === $data->keepOldSnapshots) {
                $value_1 = $data->keepOldSnapshots;
            }
            $dataArray['KeepOldSnapshots'] = $value_1;
        }
        if (array_key_exists('logEntriesForSlowFollowers', get_object_vars($data)) && null !== ($data->logEntriesForSlowFollowers ?? null)) {
            $value_2 = $data->logEntriesForSlowFollowers;
            if (is_int($data->logEntriesForSlowFollowers)) {
                $value_2 = $data->logEntriesForSlowFollowers;
            } elseif (null === $data->logEntriesForSlowFollowers) {
                $value_2 = $data->logEntriesForSlowFollowers;
            }
            $dataArray['LogEntriesForSlowFollowers'] = $value_2;
        }
        if (array_key_exists('electionTick', get_object_vars($data)) && null !== ($data->electionTick ?? null)) {
            $value_3 = $data->electionTick;
            if (is_int($data->electionTick)) {
                $value_3 = $data->electionTick;
            } elseif (null === $data->electionTick) {
                $value_3 = $data->electionTick;
            }
            $dataArray['ElectionTick'] = $value_3;
        }
        if (array_key_exists('heartbeatTick', get_object_vars($data)) && null !== ($data->heartbeatTick ?? null)) {
            $value_4 = $data->heartbeatTick;
            if (is_int($data->heartbeatTick)) {
                $value_4 = $data->heartbeatTick;
            } elseif (null === $data->heartbeatTick) {
                $value_4 = $data->heartbeatTick;
            }
            $dataArray['HeartbeatTick'] = $value_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
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
