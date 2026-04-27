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
use function is_string;

class PeerNodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PeerNode::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PeerNode::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PeerNode();
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
        if (array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $value_1 = $data['Addr'];
            if (is_string($data['Addr'])) {
                $value_1 = $data['Addr'];
            } elseif (null === $data['Addr']) {
                $value_1 = $data['Addr'];
            }
            $object->setAddr($value_1);
        } elseif (array_key_exists('Addr', $data) && null === $data['Addr']) {
            $object->setAddr(null);
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
        if ($data->isInitialized('addr')) {
            $value_1 = $data->getAddr();
            if (is_string($data->getAddr())) {
                $value_1 = $data->getAddr();
            } elseif (null === $data->getAddr()) {
                $value_1 = $data->getAddr();
            }
            $dataArray['Addr'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PeerNode::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
