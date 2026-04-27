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
            $object->setNodeID($value);
        } elseif (array_key_exists('NodeID', $data) && null === $data['NodeID']) {
            $object->setNodeID(null);
        }
        if (array_key_exists('NodeAddr', $data) && null !== $data['NodeAddr']) {
            $value_1 = $data['NodeAddr'];
            if (is_string($data['NodeAddr'])) {
                $value_1 = $data['NodeAddr'];
            } elseif (null === $data['NodeAddr']) {
                $value_1 = $data['NodeAddr'];
            }
            $object->setNodeAddr($value_1);
        } elseif (array_key_exists('NodeAddr', $data) && null === $data['NodeAddr']) {
            $object->setNodeAddr(null);
        }
        if (array_key_exists('LocalNodeState', $data)) {
            $object->setLocalNodeState($data['LocalNodeState']);
        }
        if (array_key_exists('ControlAvailable', $data) && null !== $data['ControlAvailable']) {
            $value_2 = $data['ControlAvailable'];
            if (is_bool($data['ControlAvailable'])) {
                $value_2 = $data['ControlAvailable'];
            } elseif (null === $data['ControlAvailable']) {
                $value_2 = $data['ControlAvailable'];
            }
            $object->setControlAvailable($value_2);
        } elseif (array_key_exists('ControlAvailable', $data) && null === $data['ControlAvailable']) {
            $object->setControlAvailable(null);
        }
        if (array_key_exists('Error', $data) && null !== $data['Error']) {
            $value_3 = $data['Error'];
            if (is_string($data['Error'])) {
                $value_3 = $data['Error'];
            } elseif (null === $data['Error']) {
                $value_3 = $data['Error'];
            }
            $object->setError($value_3);
        } elseif (array_key_exists('Error', $data) && null === $data['Error']) {
            $object->setError(null);
        }
        if (array_key_exists('RemoteManagers', $data) && null !== $data['RemoteManagers']) {
            $value_4 = $data['RemoteManagers'];
            if (is_array($data['RemoteManagers']) && $this->isOnlyNumericKeys($data['RemoteManagers'])) {
                $values = [];
                foreach ($data['RemoteManagers'] as $value_5) {
                    $values[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\PeerNode::class, 'json', $context);
                }
                $value_4 = $values;
            } elseif (null === $data['RemoteManagers']) {
                $value_4 = $data['RemoteManagers'];
            }
            $object->setRemoteManagers($value_4);
        } elseif (array_key_exists('RemoteManagers', $data) && null === $data['RemoteManagers']) {
            $object->setRemoteManagers(null);
        }
        if (array_key_exists('Nodes', $data) && null !== $data['Nodes']) {
            $value_6 = $data['Nodes'];
            if (is_int($data['Nodes'])) {
                $value_6 = $data['Nodes'];
            } elseif (null === $data['Nodes']) {
                $value_6 = $data['Nodes'];
            }
            $object->setNodes($value_6);
        } elseif (array_key_exists('Nodes', $data) && null === $data['Nodes']) {
            $object->setNodes(null);
        }
        if (array_key_exists('Managers', $data) && null !== $data['Managers']) {
            $value_7 = $data['Managers'];
            if (is_int($data['Managers'])) {
                $value_7 = $data['Managers'];
            } elseif (null === $data['Managers']) {
                $value_7 = $data['Managers'];
            }
            $object->setManagers($value_7);
        } elseif (array_key_exists('Managers', $data) && null === $data['Managers']) {
            $object->setManagers(null);
        }
        if (array_key_exists('Cluster', $data) && null !== $data['Cluster']) {
            $object->setCluster($this->denormalizer->denormalize($data['Cluster'], \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class, 'json', $context));
        } elseif (array_key_exists('Cluster', $data) && null === $data['Cluster']) {
            $object->setCluster(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('nodeID')) {
            $value = $data->getNodeID();
            if (is_string($data->getNodeID())) {
                $value = $data->getNodeID();
            } elseif (null === $data->getNodeID()) {
                $value = $data->getNodeID();
            }
            $dataArray['NodeID'] = $value;
        }
        if ($data->isInitialized('nodeAddr')) {
            $value_1 = $data->getNodeAddr();
            if (is_string($data->getNodeAddr())) {
                $value_1 = $data->getNodeAddr();
            } elseif (null === $data->getNodeAddr()) {
                $value_1 = $data->getNodeAddr();
            }
            $dataArray['NodeAddr'] = $value_1;
        }
        if ($data->isInitialized('localNodeState') && null !== $data->getLocalNodeState()) {
            $dataArray['LocalNodeState'] = $data->getLocalNodeState();
        }
        if ($data->isInitialized('controlAvailable')) {
            $value_2 = $data->getControlAvailable();
            if (is_bool($data->getControlAvailable())) {
                $value_2 = $data->getControlAvailable();
            } elseif (null === $data->getControlAvailable()) {
                $value_2 = $data->getControlAvailable();
            }
            $dataArray['ControlAvailable'] = $value_2;
        }
        if ($data->isInitialized('error')) {
            $value_3 = $data->getError();
            if (is_string($data->getError())) {
                $value_3 = $data->getError();
            } elseif (null === $data->getError()) {
                $value_3 = $data->getError();
            }
            $dataArray['Error'] = $value_3;
        }
        if ($data->isInitialized('remoteManagers')) {
            $value_4 = $data->getRemoteManagers();
            if (is_array($data->getRemoteManagers())) {
                $values = [];
                foreach ($data->getRemoteManagers() as $value_5) {
                    $values[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $value_4 = $values;
            } elseif (null === $data->getRemoteManagers()) {
                $value_4 = $data->getRemoteManagers();
            }
            $dataArray['RemoteManagers'] = $value_4;
        }
        if ($data->isInitialized('nodes')) {
            $value_6 = $data->getNodes();
            if (is_int($data->getNodes())) {
                $value_6 = $data->getNodes();
            } elseif (null === $data->getNodes()) {
                $value_6 = $data->getNodes();
            }
            $dataArray['Nodes'] = $value_6;
        }
        if ($data->isInitialized('managers')) {
            $value_7 = $data->getManagers();
            if (is_int($data->getManagers())) {
                $value_7 = $data->getManagers();
            } elseif (null === $data->getManagers()) {
                $value_7 = $data->getManagers();
            }
            $dataArray['Managers'] = $value_7;
        }
        if ($data->isInitialized('cluster')) {
            $dataArray['Cluster'] = $this->normalizer->normalize($data->getCluster(), 'json', $context);
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
