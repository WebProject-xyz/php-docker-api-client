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
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmInfo();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('NodeID', $data)) {
                $object->setNodeID($data['NodeID']);
                unset($data['NodeID']);
            }
            if (array_key_exists('NodeAddr', $data)) {
                $object->setNodeAddr($data['NodeAddr']);
                unset($data['NodeAddr']);
            }
            if (array_key_exists('LocalNodeState', $data)) {
                $object->setLocalNodeState($data['LocalNodeState']);
                unset($data['LocalNodeState']);
            }
            if (array_key_exists('ControlAvailable', $data)) {
                $object->setControlAvailable($data['ControlAvailable']);
                unset($data['ControlAvailable']);
            }
            if (array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
                unset($data['Error']);
            }
            if (array_key_exists('RemoteManagers', $data) && null !== $data['RemoteManagers']) {
                $values = [];
                foreach ($data['RemoteManagers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\PeerNode::class, 'json', $context);
                }
                $object->setRemoteManagers($values);
                unset($data['RemoteManagers']);
            } elseif (array_key_exists('RemoteManagers', $data) && null === $data['RemoteManagers']) {
                $object->setRemoteManagers(null);
            }
            if (array_key_exists('Nodes', $data) && null !== $data['Nodes']) {
                $object->setNodes($data['Nodes']);
                unset($data['Nodes']);
            } elseif (array_key_exists('Nodes', $data) && null === $data['Nodes']) {
                $object->setNodes(null);
            }
            if (array_key_exists('Managers', $data) && null !== $data['Managers']) {
                $object->setManagers($data['Managers']);
                unset($data['Managers']);
            } elseif (array_key_exists('Managers', $data) && null === $data['Managers']) {
                $object->setManagers(null);
            }
            if (array_key_exists('Cluster', $data) && null !== $data['Cluster']) {
                $object->setCluster($this->denormalizer->denormalize($data['Cluster'], \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class, 'json', $context));
                unset($data['Cluster']);
            } elseif (array_key_exists('Cluster', $data) && null === $data['Cluster']) {
                $object->setCluster(null);
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
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('nodeAddr') && null !== $object->getNodeAddr()) {
                $data['NodeAddr'] = $object->getNodeAddr();
            }
            if ($object->isInitialized('localNodeState') && null !== $object->getLocalNodeState()) {
                $data['LocalNodeState'] = $object->getLocalNodeState();
            }
            if ($object->isInitialized('controlAvailable') && null !== $object->getControlAvailable()) {
                $data['ControlAvailable'] = $object->getControlAvailable();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('remoteManagers') && null !== $object->getRemoteManagers()) {
                $values = [];
                foreach ($object->getRemoteManagers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['RemoteManagers'] = $values;
            }
            if ($object->isInitialized('nodes') && null !== $object->getNodes()) {
                $data['Nodes'] = $object->getNodes();
            }
            if ($object->isInitialized('managers') && null !== $object->getManagers()) {
                $data['Managers'] = $object->getManagers();
            }
            if ($object->isInitialized('cluster') && null !== $object->getCluster()) {
                $data['Cluster'] = $this->normalizer->normalize($object->getCluster(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class => true];
        }
    }
} else {
    class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmInfo();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('NodeID', $data)) {
                $object->setNodeID($data['NodeID']);
                unset($data['NodeID']);
            }
            if (array_key_exists('NodeAddr', $data)) {
                $object->setNodeAddr($data['NodeAddr']);
                unset($data['NodeAddr']);
            }
            if (array_key_exists('LocalNodeState', $data)) {
                $object->setLocalNodeState($data['LocalNodeState']);
                unset($data['LocalNodeState']);
            }
            if (array_key_exists('ControlAvailable', $data)) {
                $object->setControlAvailable($data['ControlAvailable']);
                unset($data['ControlAvailable']);
            }
            if (array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
                unset($data['Error']);
            }
            if (array_key_exists('RemoteManagers', $data) && null !== $data['RemoteManagers']) {
                $values = [];
                foreach ($data['RemoteManagers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\PeerNode::class, 'json', $context);
                }
                $object->setRemoteManagers($values);
                unset($data['RemoteManagers']);
            } elseif (array_key_exists('RemoteManagers', $data) && null === $data['RemoteManagers']) {
                $object->setRemoteManagers(null);
            }
            if (array_key_exists('Nodes', $data) && null !== $data['Nodes']) {
                $object->setNodes($data['Nodes']);
                unset($data['Nodes']);
            } elseif (array_key_exists('Nodes', $data) && null === $data['Nodes']) {
                $object->setNodes(null);
            }
            if (array_key_exists('Managers', $data) && null !== $data['Managers']) {
                $object->setManagers($data['Managers']);
                unset($data['Managers']);
            } elseif (array_key_exists('Managers', $data) && null === $data['Managers']) {
                $object->setManagers(null);
            }
            if (array_key_exists('Cluster', $data) && null !== $data['Cluster']) {
                $object->setCluster($this->denormalizer->denormalize($data['Cluster'], \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class, 'json', $context));
                unset($data['Cluster']);
            } elseif (array_key_exists('Cluster', $data) && null === $data['Cluster']) {
                $object->setCluster(null);
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
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('nodeAddr') && null !== $object->getNodeAddr()) {
                $data['NodeAddr'] = $object->getNodeAddr();
            }
            if ($object->isInitialized('localNodeState') && null !== $object->getLocalNodeState()) {
                $data['LocalNodeState'] = $object->getLocalNodeState();
            }
            if ($object->isInitialized('controlAvailable') && null !== $object->getControlAvailable()) {
                $data['ControlAvailable'] = $object->getControlAvailable();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('remoteManagers') && null !== $object->getRemoteManagers()) {
                $values = [];
                foreach ($object->getRemoteManagers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['RemoteManagers'] = $values;
            }
            if ($object->isInitialized('nodes') && null !== $object->getNodes()) {
                $data['Nodes'] = $object->getNodes();
            }
            if ($object->isInitialized('managers') && null !== $object->getManagers()) {
                $data['Managers'] = $object->getManagers();
            }
            if ($object->isInitialized('cluster') && null !== $object->getCluster()) {
                $data['Cluster'] = $this->normalizer->normalize($object->getCluster(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
