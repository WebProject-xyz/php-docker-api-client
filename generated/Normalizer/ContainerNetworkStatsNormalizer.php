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
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('rx_bytes', $data) && null !== $data['rx_bytes']) {
            $value = $data['rx_bytes'];
            if (is_int($data['rx_bytes'])) {
                $value = $data['rx_bytes'];
            } elseif (null === $data['rx_bytes']) {
                $value = $data['rx_bytes'];
            }
            $object->setRxBytes($value);
        } elseif (array_key_exists('rx_bytes', $data) && null === $data['rx_bytes']) {
            $object->setRxBytes(null);
        }
        if (array_key_exists('rx_packets', $data) && null !== $data['rx_packets']) {
            $value_1 = $data['rx_packets'];
            if (is_int($data['rx_packets'])) {
                $value_1 = $data['rx_packets'];
            } elseif (null === $data['rx_packets']) {
                $value_1 = $data['rx_packets'];
            }
            $object->setRxPackets($value_1);
        } elseif (array_key_exists('rx_packets', $data) && null === $data['rx_packets']) {
            $object->setRxPackets(null);
        }
        if (array_key_exists('rx_errors', $data) && null !== $data['rx_errors']) {
            $value_2 = $data['rx_errors'];
            if (is_int($data['rx_errors'])) {
                $value_2 = $data['rx_errors'];
            } elseif (null === $data['rx_errors']) {
                $value_2 = $data['rx_errors'];
            }
            $object->setRxErrors($value_2);
        } elseif (array_key_exists('rx_errors', $data) && null === $data['rx_errors']) {
            $object->setRxErrors(null);
        }
        if (array_key_exists('rx_dropped', $data) && null !== $data['rx_dropped']) {
            $value_3 = $data['rx_dropped'];
            if (is_int($data['rx_dropped'])) {
                $value_3 = $data['rx_dropped'];
            } elseif (null === $data['rx_dropped']) {
                $value_3 = $data['rx_dropped'];
            }
            $object->setRxDropped($value_3);
        } elseif (array_key_exists('rx_dropped', $data) && null === $data['rx_dropped']) {
            $object->setRxDropped(null);
        }
        if (array_key_exists('tx_bytes', $data) && null !== $data['tx_bytes']) {
            $value_4 = $data['tx_bytes'];
            if (is_int($data['tx_bytes'])) {
                $value_4 = $data['tx_bytes'];
            } elseif (null === $data['tx_bytes']) {
                $value_4 = $data['tx_bytes'];
            }
            $object->setTxBytes($value_4);
        } elseif (array_key_exists('tx_bytes', $data) && null === $data['tx_bytes']) {
            $object->setTxBytes(null);
        }
        if (array_key_exists('tx_packets', $data) && null !== $data['tx_packets']) {
            $value_5 = $data['tx_packets'];
            if (is_int($data['tx_packets'])) {
                $value_5 = $data['tx_packets'];
            } elseif (null === $data['tx_packets']) {
                $value_5 = $data['tx_packets'];
            }
            $object->setTxPackets($value_5);
        } elseif (array_key_exists('tx_packets', $data) && null === $data['tx_packets']) {
            $object->setTxPackets(null);
        }
        if (array_key_exists('tx_errors', $data) && null !== $data['tx_errors']) {
            $value_6 = $data['tx_errors'];
            if (is_int($data['tx_errors'])) {
                $value_6 = $data['tx_errors'];
            } elseif (null === $data['tx_errors']) {
                $value_6 = $data['tx_errors'];
            }
            $object->setTxErrors($value_6);
        } elseif (array_key_exists('tx_errors', $data) && null === $data['tx_errors']) {
            $object->setTxErrors(null);
        }
        if (array_key_exists('tx_dropped', $data) && null !== $data['tx_dropped']) {
            $value_7 = $data['tx_dropped'];
            if (is_int($data['tx_dropped'])) {
                $value_7 = $data['tx_dropped'];
            } elseif (null === $data['tx_dropped']) {
                $value_7 = $data['tx_dropped'];
            }
            $object->setTxDropped($value_7);
        } elseif (array_key_exists('tx_dropped', $data) && null === $data['tx_dropped']) {
            $object->setTxDropped(null);
        }
        if (array_key_exists('endpoint_id', $data) && null !== $data['endpoint_id']) {
            $value_8 = $data['endpoint_id'];
            if (is_string($data['endpoint_id'])) {
                $value_8 = $data['endpoint_id'];
            } elseif (null === $data['endpoint_id']) {
                $value_8 = $data['endpoint_id'];
            }
            $object->setEndpointId($value_8);
        } elseif (array_key_exists('endpoint_id', $data) && null === $data['endpoint_id']) {
            $object->setEndpointId(null);
        }
        if (array_key_exists('instance_id', $data) && null !== $data['instance_id']) {
            $value_9 = $data['instance_id'];
            if (is_string($data['instance_id'])) {
                $value_9 = $data['instance_id'];
            } elseif (null === $data['instance_id']) {
                $value_9 = $data['instance_id'];
            }
            $object->setInstanceId($value_9);
        } elseif (array_key_exists('instance_id', $data) && null === $data['instance_id']) {
            $object->setInstanceId(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('rxBytes')) {
            $value = $data->getRxBytes();
            if (is_int($data->getRxBytes())) {
                $value = $data->getRxBytes();
            } elseif (null === $data->getRxBytes()) {
                $value = $data->getRxBytes();
            }
            $dataArray['rx_bytes'] = $value;
        }
        if ($data->isInitialized('rxPackets')) {
            $value_1 = $data->getRxPackets();
            if (is_int($data->getRxPackets())) {
                $value_1 = $data->getRxPackets();
            } elseif (null === $data->getRxPackets()) {
                $value_1 = $data->getRxPackets();
            }
            $dataArray['rx_packets'] = $value_1;
        }
        if ($data->isInitialized('rxErrors')) {
            $value_2 = $data->getRxErrors();
            if (is_int($data->getRxErrors())) {
                $value_2 = $data->getRxErrors();
            } elseif (null === $data->getRxErrors()) {
                $value_2 = $data->getRxErrors();
            }
            $dataArray['rx_errors'] = $value_2;
        }
        if ($data->isInitialized('rxDropped')) {
            $value_3 = $data->getRxDropped();
            if (is_int($data->getRxDropped())) {
                $value_3 = $data->getRxDropped();
            } elseif (null === $data->getRxDropped()) {
                $value_3 = $data->getRxDropped();
            }
            $dataArray['rx_dropped'] = $value_3;
        }
        if ($data->isInitialized('txBytes')) {
            $value_4 = $data->getTxBytes();
            if (is_int($data->getTxBytes())) {
                $value_4 = $data->getTxBytes();
            } elseif (null === $data->getTxBytes()) {
                $value_4 = $data->getTxBytes();
            }
            $dataArray['tx_bytes'] = $value_4;
        }
        if ($data->isInitialized('txPackets')) {
            $value_5 = $data->getTxPackets();
            if (is_int($data->getTxPackets())) {
                $value_5 = $data->getTxPackets();
            } elseif (null === $data->getTxPackets()) {
                $value_5 = $data->getTxPackets();
            }
            $dataArray['tx_packets'] = $value_5;
        }
        if ($data->isInitialized('txErrors')) {
            $value_6 = $data->getTxErrors();
            if (is_int($data->getTxErrors())) {
                $value_6 = $data->getTxErrors();
            } elseif (null === $data->getTxErrors()) {
                $value_6 = $data->getTxErrors();
            }
            $dataArray['tx_errors'] = $value_6;
        }
        if ($data->isInitialized('txDropped')) {
            $value_7 = $data->getTxDropped();
            if (is_int($data->getTxDropped())) {
                $value_7 = $data->getTxDropped();
            } elseif (null === $data->getTxDropped()) {
                $value_7 = $data->getTxDropped();
            }
            $dataArray['tx_dropped'] = $value_7;
        }
        if ($data->isInitialized('endpointId')) {
            $value_8 = $data->getEndpointId();
            if (is_string($data->getEndpointId())) {
                $value_8 = $data->getEndpointId();
            } elseif (null === $data->getEndpointId()) {
                $value_8 = $data->getEndpointId();
            }
            $dataArray['endpoint_id'] = $value_8;
        }
        if ($data->isInitialized('instanceId')) {
            $value_9 = $data->getInstanceId();
            if (is_string($data->getInstanceId())) {
                $value_9 = $data->getInstanceId();
            } elseif (null === $data->getInstanceId()) {
                $value_9 = $data->getInstanceId();
            }
            $dataArray['instance_id'] = $value_9;
        }

        return $dataArray;
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
