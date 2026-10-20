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
use function is_bool;
use function is_int;
use function is_object;
use function is_string;

class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('NodeID', $data) && null !== $data['NodeID']) {
            $value = $data['NodeID'];
            if (is_string($data['NodeID'])) {
                $value = $data['NodeID'];
            } elseif (null === $data['NodeID']) {
                $value = $data['NodeID'];
            }
            $object->nodeID = $value;
            unset($data['NodeID']);
        } elseif (array_key_exists('NodeID', $data)) {
            $object->nodeID = null;
            unset($data['NodeID']);
        }
        if (array_key_exists('NodeAddr', $data) && null !== $data['NodeAddr']) {
            $value_1 = $data['NodeAddr'];
            if (is_string($data['NodeAddr'])) {
                $value_1 = $data['NodeAddr'];
            } elseif (null === $data['NodeAddr']) {
                $value_1 = $data['NodeAddr'];
            }
            $object->nodeAddr = $value_1;
            unset($data['NodeAddr']);
        } elseif (array_key_exists('NodeAddr', $data)) {
            $object->nodeAddr = null;
            unset($data['NodeAddr']);
        }
        if (array_key_exists('LocalNodeState', $data)) {
            $object->localNodeState = \WebProject\DockerApi\Library\Generated\Model\LocalNodeState::from($data['LocalNodeState']);
            unset($data['LocalNodeState']);
        }
        if (array_key_exists('ControlAvailable', $data) && null !== $data['ControlAvailable']) {
            $value_2 = $data['ControlAvailable'];
            if (is_bool($data['ControlAvailable'])) {
                $value_2 = $data['ControlAvailable'];
            } elseif (null === $data['ControlAvailable']) {
                $value_2 = $data['ControlAvailable'];
            }
            $object->controlAvailable = $value_2;
            unset($data['ControlAvailable']);
        } elseif (array_key_exists('ControlAvailable', $data)) {
            $object->controlAvailable = null;
            unset($data['ControlAvailable']);
        }
        if (array_key_exists('Error', $data) && null !== $data['Error']) {
            $value_3 = $data['Error'];
            if (is_string($data['Error'])) {
                $value_3 = $data['Error'];
            } elseif (null === $data['Error']) {
                $value_3 = $data['Error'];
            }
            $object->error = $value_3;
            unset($data['Error']);
        } elseif (array_key_exists('Error', $data)) {
            $object->error = null;
            unset($data['Error']);
        }
        if (array_key_exists('RemoteManagers', $data) && null !== $data['RemoteManagers']) {
            $values = [];
            foreach ($data['RemoteManagers'] as $value_4) {
                $values[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\PeerNode::class, 'json', $context);
            }
            $object->remoteManagers = $values;
            unset($data['RemoteManagers']);
        } elseif (array_key_exists('RemoteManagers', $data)) {
            $object->remoteManagers = null;
            unset($data['RemoteManagers']);
        }
        if (array_key_exists('Nodes', $data) && null !== $data['Nodes']) {
            $value_5 = $data['Nodes'];
            if (is_int($data['Nodes'])) {
                $value_5 = $data['Nodes'];
            } elseif (null === $data['Nodes']) {
                $value_5 = $data['Nodes'];
            }
            $object->nodes = $value_5;
            unset($data['Nodes']);
        } elseif (array_key_exists('Nodes', $data)) {
            $object->nodes = null;
            unset($data['Nodes']);
        }
        if (array_key_exists('Managers', $data) && null !== $data['Managers']) {
            $value_6 = $data['Managers'];
            if (is_int($data['Managers'])) {
                $value_6 = $data['Managers'];
            } elseif (null === $data['Managers']) {
                $value_6 = $data['Managers'];
            }
            $object->managers = $value_6;
            unset($data['Managers']);
        } elseif (array_key_exists('Managers', $data)) {
            $object->managers = null;
            unset($data['Managers']);
        }
        if (array_key_exists('Cluster', $data) && null !== $data['Cluster']) {
            $object->cluster = $this->denormalizer->denormalize($data['Cluster'], \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class, 'json', $context);
            unset($data['Cluster']);
        } elseif (array_key_exists('Cluster', $data)) {
            $object->cluster = null;
            unset($data['Cluster']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('nodeID', get_object_vars($data)) && null !== ($data->nodeID ?? null)) {
            $value = $data->nodeID;
            if (is_string($data->nodeID)) {
                $value = $data->nodeID;
            } elseif (null === $data->nodeID) {
                $value = $data->nodeID;
            }
            $dataArray['NodeID'] = $value;
        }
        if (array_key_exists('nodeAddr', get_object_vars($data)) && null !== ($data->nodeAddr ?? null)) {
            $value_1 = $data->nodeAddr;
            if (is_string($data->nodeAddr)) {
                $value_1 = $data->nodeAddr;
            } elseif (null === $data->nodeAddr) {
                $value_1 = $data->nodeAddr;
            }
            $dataArray['NodeAddr'] = $value_1;
        }
        if (array_key_exists('localNodeState', get_object_vars($data)) && null !== ($data->localNodeState ?? null)) {
            $dataArray['LocalNodeState'] = $data->localNodeState->value;
        }
        if (array_key_exists('controlAvailable', get_object_vars($data)) && null !== ($data->controlAvailable ?? null)) {
            $value_2 = $data->controlAvailable;
            if (is_bool($data->controlAvailable)) {
                $value_2 = $data->controlAvailable;
            } elseif (null === $data->controlAvailable) {
                $value_2 = $data->controlAvailable;
            }
            $dataArray['ControlAvailable'] = $value_2;
        }
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $value_3 = $data->error;
            if (is_string($data->error)) {
                $value_3 = $data->error;
            } elseif (null === $data->error) {
                $value_3 = $data->error;
            }
            $dataArray['Error'] = $value_3;
        }
        if (array_key_exists('remoteManagers', get_object_vars($data)) && null !== ($data->remoteManagers ?? null)) {
            $values = [];
            foreach ($data->remoteManagers as $value_4) {
                $normalized = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['RemoteManagers'] = $values;
        }
        if (array_key_exists('nodes', get_object_vars($data)) && null !== ($data->nodes ?? null)) {
            $value_5 = $data->nodes;
            if (is_int($data->nodes)) {
                $value_5 = $data->nodes;
            } elseif (null === $data->nodes) {
                $value_5 = $data->nodes;
            }
            $dataArray['Nodes'] = $value_5;
        }
        if (array_key_exists('managers', get_object_vars($data)) && null !== ($data->managers ?? null)) {
            $value_6 = $data->managers;
            if (is_int($data->managers)) {
                $value_6 = $data->managers;
            } elseif (null === $data->managers) {
                $value_6 = $data->managers;
            }
            $dataArray['Managers'] = $value_6;
        }
        if (array_key_exists('cluster', get_object_vars($data)) && null !== ($data->cluster ?? null)) {
            $normalized_1         = $this->normalizer->normalize($data->cluster, 'json', $context);
            $dataArray['Cluster'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
