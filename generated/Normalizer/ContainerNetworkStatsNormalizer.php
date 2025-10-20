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
use function is_object;

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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ContainerNetworkStatsConstraint());
        }
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('rxBytes') && null !== $data->getRxBytes()) {
            $dataArray['rx_bytes'] = $data->getRxBytes();
        }
        if ($data->isInitialized('rxPackets') && null !== $data->getRxPackets()) {
            $dataArray['rx_packets'] = $data->getRxPackets();
        }
        if ($data->isInitialized('rxErrors') && null !== $data->getRxErrors()) {
            $dataArray['rx_errors'] = $data->getRxErrors();
        }
        if ($data->isInitialized('rxDropped') && null !== $data->getRxDropped()) {
            $dataArray['rx_dropped'] = $data->getRxDropped();
        }
        if ($data->isInitialized('txBytes') && null !== $data->getTxBytes()) {
            $dataArray['tx_bytes'] = $data->getTxBytes();
        }
        if ($data->isInitialized('txPackets') && null !== $data->getTxPackets()) {
            $dataArray['tx_packets'] = $data->getTxPackets();
        }
        if ($data->isInitialized('txErrors') && null !== $data->getTxErrors()) {
            $dataArray['tx_errors'] = $data->getTxErrors();
        }
        if ($data->isInitialized('txDropped') && null !== $data->getTxDropped()) {
            $dataArray['tx_dropped'] = $data->getTxDropped();
        }
        if ($data->isInitialized('endpointId') && null !== $data->getEndpointId()) {
            $dataArray['endpoint_id'] = $data->getEndpointId();
        }
        if ($data->isInitialized('instanceId') && null !== $data->getInstanceId()) {
            $dataArray['instance_id'] = $data->getInstanceId();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ContainerNetworkStatsConstraint());
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
