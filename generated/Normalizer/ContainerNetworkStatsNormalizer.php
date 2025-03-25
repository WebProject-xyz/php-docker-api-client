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
    class ContainerNetworkStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('rx_bytes', $data)) {
                $object->setRxBytes($data['rx_bytes']);
                unset($data['rx_bytes']);
            }
            if (array_key_exists('rx_packets', $data)) {
                $object->setRxPackets($data['rx_packets']);
                unset($data['rx_packets']);
            }
            if (array_key_exists('rx_errors', $data)) {
                $object->setRxErrors($data['rx_errors']);
                unset($data['rx_errors']);
            }
            if (array_key_exists('rx_dropped', $data)) {
                $object->setRxDropped($data['rx_dropped']);
                unset($data['rx_dropped']);
            }
            if (array_key_exists('tx_bytes', $data)) {
                $object->setTxBytes($data['tx_bytes']);
                unset($data['tx_bytes']);
            }
            if (array_key_exists('tx_packets', $data)) {
                $object->setTxPackets($data['tx_packets']);
                unset($data['tx_packets']);
            }
            if (array_key_exists('tx_errors', $data)) {
                $object->setTxErrors($data['tx_errors']);
                unset($data['tx_errors']);
            }
            if (array_key_exists('tx_dropped', $data)) {
                $object->setTxDropped($data['tx_dropped']);
                unset($data['tx_dropped']);
            }
            if (array_key_exists('endpoint_id', $data) && null !== $data['endpoint_id']) {
                $object->setEndpointId($data['endpoint_id']);
                unset($data['endpoint_id']);
            } elseif (array_key_exists('endpoint_id', $data) && null === $data['endpoint_id']) {
                $object->setEndpointId(null);
            }
            if (array_key_exists('instance_id', $data) && null !== $data['instance_id']) {
                $object->setInstanceId($data['instance_id']);
                unset($data['instance_id']);
            } elseif (array_key_exists('instance_id', $data) && null === $data['instance_id']) {
                $object->setInstanceId(null);
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
            if ($object->isInitialized('rxBytes') && null !== $object->getRxBytes()) {
                $data['rx_bytes'] = $object->getRxBytes();
            }
            if ($object->isInitialized('rxPackets') && null !== $object->getRxPackets()) {
                $data['rx_packets'] = $object->getRxPackets();
            }
            if ($object->isInitialized('rxErrors') && null !== $object->getRxErrors()) {
                $data['rx_errors'] = $object->getRxErrors();
            }
            if ($object->isInitialized('rxDropped') && null !== $object->getRxDropped()) {
                $data['rx_dropped'] = $object->getRxDropped();
            }
            if ($object->isInitialized('txBytes') && null !== $object->getTxBytes()) {
                $data['tx_bytes'] = $object->getTxBytes();
            }
            if ($object->isInitialized('txPackets') && null !== $object->getTxPackets()) {
                $data['tx_packets'] = $object->getTxPackets();
            }
            if ($object->isInitialized('txErrors') && null !== $object->getTxErrors()) {
                $data['tx_errors'] = $object->getTxErrors();
            }
            if ($object->isInitialized('txDropped') && null !== $object->getTxDropped()) {
                $data['tx_dropped'] = $object->getTxDropped();
            }
            if ($object->isInitialized('endpointId') && null !== $object->getEndpointId()) {
                $data['endpoint_id'] = $object->getEndpointId();
            }
            if ($object->isInitialized('instanceId') && null !== $object->getInstanceId()) {
                $data['instance_id'] = $object->getInstanceId();
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
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class => true];
        }
    }
} else {
    class ContainerNetworkStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('rx_bytes', $data)) {
                $object->setRxBytes($data['rx_bytes']);
                unset($data['rx_bytes']);
            }
            if (array_key_exists('rx_packets', $data)) {
                $object->setRxPackets($data['rx_packets']);
                unset($data['rx_packets']);
            }
            if (array_key_exists('rx_errors', $data)) {
                $object->setRxErrors($data['rx_errors']);
                unset($data['rx_errors']);
            }
            if (array_key_exists('rx_dropped', $data)) {
                $object->setRxDropped($data['rx_dropped']);
                unset($data['rx_dropped']);
            }
            if (array_key_exists('tx_bytes', $data)) {
                $object->setTxBytes($data['tx_bytes']);
                unset($data['tx_bytes']);
            }
            if (array_key_exists('tx_packets', $data)) {
                $object->setTxPackets($data['tx_packets']);
                unset($data['tx_packets']);
            }
            if (array_key_exists('tx_errors', $data)) {
                $object->setTxErrors($data['tx_errors']);
                unset($data['tx_errors']);
            }
            if (array_key_exists('tx_dropped', $data)) {
                $object->setTxDropped($data['tx_dropped']);
                unset($data['tx_dropped']);
            }
            if (array_key_exists('endpoint_id', $data) && null !== $data['endpoint_id']) {
                $object->setEndpointId($data['endpoint_id']);
                unset($data['endpoint_id']);
            } elseif (array_key_exists('endpoint_id', $data) && null === $data['endpoint_id']) {
                $object->setEndpointId(null);
            }
            if (array_key_exists('instance_id', $data) && null !== $data['instance_id']) {
                $object->setInstanceId($data['instance_id']);
                unset($data['instance_id']);
            } elseif (array_key_exists('instance_id', $data) && null === $data['instance_id']) {
                $object->setInstanceId(null);
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
            if ($object->isInitialized('rxBytes') && null !== $object->getRxBytes()) {
                $data['rx_bytes'] = $object->getRxBytes();
            }
            if ($object->isInitialized('rxPackets') && null !== $object->getRxPackets()) {
                $data['rx_packets'] = $object->getRxPackets();
            }
            if ($object->isInitialized('rxErrors') && null !== $object->getRxErrors()) {
                $data['rx_errors'] = $object->getRxErrors();
            }
            if ($object->isInitialized('rxDropped') && null !== $object->getRxDropped()) {
                $data['rx_dropped'] = $object->getRxDropped();
            }
            if ($object->isInitialized('txBytes') && null !== $object->getTxBytes()) {
                $data['tx_bytes'] = $object->getTxBytes();
            }
            if ($object->isInitialized('txPackets') && null !== $object->getTxPackets()) {
                $data['tx_packets'] = $object->getTxPackets();
            }
            if ($object->isInitialized('txErrors') && null !== $object->getTxErrors()) {
                $data['tx_errors'] = $object->getTxErrors();
            }
            if ($object->isInitialized('txDropped') && null !== $object->getTxDropped()) {
                $data['tx_dropped'] = $object->getTxDropped();
            }
            if ($object->isInitialized('endpointId') && null !== $object->getEndpointId()) {
                $data['endpoint_id'] = $object->getEndpointId();
            }
            if ($object->isInitialized('instanceId') && null !== $object->getInstanceId()) {
                $data['instance_id'] = $object->getInstanceId();
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
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
