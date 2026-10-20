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
            $object->rxBytes = $value;
            unset($data['rx_bytes']);
        } elseif (array_key_exists('rx_bytes', $data)) {
            $object->rxBytes = null;
            unset($data['rx_bytes']);
        }
        if (array_key_exists('rx_packets', $data) && null !== $data['rx_packets']) {
            $value_1 = $data['rx_packets'];
            if (is_int($data['rx_packets'])) {
                $value_1 = $data['rx_packets'];
            } elseif (null === $data['rx_packets']) {
                $value_1 = $data['rx_packets'];
            }
            $object->rxPackets = $value_1;
            unset($data['rx_packets']);
        } elseif (array_key_exists('rx_packets', $data)) {
            $object->rxPackets = null;
            unset($data['rx_packets']);
        }
        if (array_key_exists('rx_errors', $data) && null !== $data['rx_errors']) {
            $value_2 = $data['rx_errors'];
            if (is_int($data['rx_errors'])) {
                $value_2 = $data['rx_errors'];
            } elseif (null === $data['rx_errors']) {
                $value_2 = $data['rx_errors'];
            }
            $object->rxErrors = $value_2;
            unset($data['rx_errors']);
        } elseif (array_key_exists('rx_errors', $data)) {
            $object->rxErrors = null;
            unset($data['rx_errors']);
        }
        if (array_key_exists('rx_dropped', $data) && null !== $data['rx_dropped']) {
            $value_3 = $data['rx_dropped'];
            if (is_int($data['rx_dropped'])) {
                $value_3 = $data['rx_dropped'];
            } elseif (null === $data['rx_dropped']) {
                $value_3 = $data['rx_dropped'];
            }
            $object->rxDropped = $value_3;
            unset($data['rx_dropped']);
        } elseif (array_key_exists('rx_dropped', $data)) {
            $object->rxDropped = null;
            unset($data['rx_dropped']);
        }
        if (array_key_exists('tx_bytes', $data) && null !== $data['tx_bytes']) {
            $value_4 = $data['tx_bytes'];
            if (is_int($data['tx_bytes'])) {
                $value_4 = $data['tx_bytes'];
            } elseif (null === $data['tx_bytes']) {
                $value_4 = $data['tx_bytes'];
            }
            $object->txBytes = $value_4;
            unset($data['tx_bytes']);
        } elseif (array_key_exists('tx_bytes', $data)) {
            $object->txBytes = null;
            unset($data['tx_bytes']);
        }
        if (array_key_exists('tx_packets', $data) && null !== $data['tx_packets']) {
            $value_5 = $data['tx_packets'];
            if (is_int($data['tx_packets'])) {
                $value_5 = $data['tx_packets'];
            } elseif (null === $data['tx_packets']) {
                $value_5 = $data['tx_packets'];
            }
            $object->txPackets = $value_5;
            unset($data['tx_packets']);
        } elseif (array_key_exists('tx_packets', $data)) {
            $object->txPackets = null;
            unset($data['tx_packets']);
        }
        if (array_key_exists('tx_errors', $data) && null !== $data['tx_errors']) {
            $value_6 = $data['tx_errors'];
            if (is_int($data['tx_errors'])) {
                $value_6 = $data['tx_errors'];
            } elseif (null === $data['tx_errors']) {
                $value_6 = $data['tx_errors'];
            }
            $object->txErrors = $value_6;
            unset($data['tx_errors']);
        } elseif (array_key_exists('tx_errors', $data)) {
            $object->txErrors = null;
            unset($data['tx_errors']);
        }
        if (array_key_exists('tx_dropped', $data) && null !== $data['tx_dropped']) {
            $value_7 = $data['tx_dropped'];
            if (is_int($data['tx_dropped'])) {
                $value_7 = $data['tx_dropped'];
            } elseif (null === $data['tx_dropped']) {
                $value_7 = $data['tx_dropped'];
            }
            $object->txDropped = $value_7;
            unset($data['tx_dropped']);
        } elseif (array_key_exists('tx_dropped', $data)) {
            $object->txDropped = null;
            unset($data['tx_dropped']);
        }
        if (array_key_exists('endpoint_id', $data) && null !== $data['endpoint_id']) {
            $value_8 = $data['endpoint_id'];
            if (is_string($data['endpoint_id'])) {
                $value_8 = $data['endpoint_id'];
            } elseif (null === $data['endpoint_id']) {
                $value_8 = $data['endpoint_id'];
            }
            $object->endpointId = $value_8;
            unset($data['endpoint_id']);
        } elseif (array_key_exists('endpoint_id', $data)) {
            $object->endpointId = null;
            unset($data['endpoint_id']);
        }
        if (array_key_exists('instance_id', $data) && null !== $data['instance_id']) {
            $value_9 = $data['instance_id'];
            if (is_string($data['instance_id'])) {
                $value_9 = $data['instance_id'];
            } elseif (null === $data['instance_id']) {
                $value_9 = $data['instance_id'];
            }
            $object->instanceId = $value_9;
            unset($data['instance_id']);
        } elseif (array_key_exists('instance_id', $data)) {
            $object->instanceId = null;
            unset($data['instance_id']);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_10;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('rxBytes', get_object_vars($data)) && null !== ($data->rxBytes ?? null)) {
            $value = $data->rxBytes;
            if (is_int($data->rxBytes)) {
                $value = $data->rxBytes;
            } elseif (null === $data->rxBytes) {
                $value = $data->rxBytes;
            }
            $dataArray['rx_bytes'] = $value;
        }
        if (array_key_exists('rxPackets', get_object_vars($data)) && null !== ($data->rxPackets ?? null)) {
            $value_1 = $data->rxPackets;
            if (is_int($data->rxPackets)) {
                $value_1 = $data->rxPackets;
            } elseif (null === $data->rxPackets) {
                $value_1 = $data->rxPackets;
            }
            $dataArray['rx_packets'] = $value_1;
        }
        if (array_key_exists('rxErrors', get_object_vars($data)) && null !== ($data->rxErrors ?? null)) {
            $value_2 = $data->rxErrors;
            if (is_int($data->rxErrors)) {
                $value_2 = $data->rxErrors;
            } elseif (null === $data->rxErrors) {
                $value_2 = $data->rxErrors;
            }
            $dataArray['rx_errors'] = $value_2;
        }
        if (array_key_exists('rxDropped', get_object_vars($data)) && null !== ($data->rxDropped ?? null)) {
            $value_3 = $data->rxDropped;
            if (is_int($data->rxDropped)) {
                $value_3 = $data->rxDropped;
            } elseif (null === $data->rxDropped) {
                $value_3 = $data->rxDropped;
            }
            $dataArray['rx_dropped'] = $value_3;
        }
        if (array_key_exists('txBytes', get_object_vars($data)) && null !== ($data->txBytes ?? null)) {
            $value_4 = $data->txBytes;
            if (is_int($data->txBytes)) {
                $value_4 = $data->txBytes;
            } elseif (null === $data->txBytes) {
                $value_4 = $data->txBytes;
            }
            $dataArray['tx_bytes'] = $value_4;
        }
        if (array_key_exists('txPackets', get_object_vars($data)) && null !== ($data->txPackets ?? null)) {
            $value_5 = $data->txPackets;
            if (is_int($data->txPackets)) {
                $value_5 = $data->txPackets;
            } elseif (null === $data->txPackets) {
                $value_5 = $data->txPackets;
            }
            $dataArray['tx_packets'] = $value_5;
        }
        if (array_key_exists('txErrors', get_object_vars($data)) && null !== ($data->txErrors ?? null)) {
            $value_6 = $data->txErrors;
            if (is_int($data->txErrors)) {
                $value_6 = $data->txErrors;
            } elseif (null === $data->txErrors) {
                $value_6 = $data->txErrors;
            }
            $dataArray['tx_errors'] = $value_6;
        }
        if (array_key_exists('txDropped', get_object_vars($data)) && null !== ($data->txDropped ?? null)) {
            $value_7 = $data->txDropped;
            if (is_int($data->txDropped)) {
                $value_7 = $data->txDropped;
            } elseif (null === $data->txDropped) {
                $value_7 = $data->txDropped;
            }
            $dataArray['tx_dropped'] = $value_7;
        }
        if (array_key_exists('endpointId', get_object_vars($data)) && null !== ($data->endpointId ?? null)) {
            $value_8 = $data->endpointId;
            if (is_string($data->endpointId)) {
                $value_8 = $data->endpointId;
            } elseif (null === $data->endpointId) {
                $value_8 = $data->endpointId;
            }
            $dataArray['endpoint_id'] = $value_8;
        }
        if (array_key_exists('instanceId', get_object_vars($data)) && null !== ($data->instanceId ?? null)) {
            $value_9 = $data->instanceId;
            if (is_string($data->instanceId)) {
                $value_9 = $data->instanceId;
            } elseif (null === $data->instanceId) {
                $value_9 = $data->instanceId;
            }
            $dataArray['instance_id'] = $value_9;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_10;
            }
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
