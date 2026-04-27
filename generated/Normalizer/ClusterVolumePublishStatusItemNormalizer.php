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

class ClusterVolumePublishStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem();
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
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $value_1 = $data['State'];
            if (is_string($data['State'])) {
                $value_1 = $data['State'];
            } elseif (null === $data['State']) {
                $value_1 = $data['State'];
            }
            $object->setState($value_1);
        } elseif (array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (array_key_exists('PublishContext', $data) && null !== $data['PublishContext']) {
            $value_2 = $data['PublishContext'];
            if (is_array($data['PublishContext']) && $this->isOnlyNumericKeys($data['PublishContext'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PublishContext'] as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data['PublishContext']) {
                $value_2 = $data['PublishContext'];
            }
            $object->setPublishContext($value_2);
        } elseif (array_key_exists('PublishContext', $data) && null === $data['PublishContext']) {
            $object->setPublishContext(null);
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
        if ($data->isInitialized('state')) {
            $value_1 = $data->getState();
            if (is_string($data->getState())) {
                $value_1 = $data->getState();
            } elseif (null === $data->getState()) {
                $value_1 = $data->getState();
            }
            $dataArray['State'] = $value_1;
        }
        if ($data->isInitialized('publishContext')) {
            $value_2 = $data->getPublishContext();
            if (is_object($data->getPublishContext())) {
                $values = [];
                foreach ($data->getPublishContext() as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data->getPublishContext()) {
                $value_2 = $data->getPublishContext();
            }
            $dataArray['PublishContext'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
