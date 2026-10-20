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
            $object->nodeID = $value;
            unset($data['NodeID']);
        } elseif (array_key_exists('NodeID', $data)) {
            $object->nodeID = null;
            unset($data['NodeID']);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $value_1 = $data['State'];
            if (is_string($data['State'])) {
                $value_1 = $data['State'];
            } elseif (null === $data['State']) {
                $value_1 = $data['State'];
            }
            $object->state = $value_1;
            unset($data['State']);
        } elseif (array_key_exists('State', $data)) {
            $object->state = null;
            unset($data['State']);
        }
        if (array_key_exists('PublishContext', $data) && null !== $data['PublishContext']) {
            $value_2 = $data['PublishContext'];
            if (is_array($data['PublishContext']) && $this->isOnlyNumericKeys($data['PublishContext'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['PublishContext'] as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data['PublishContext']) {
                $value_2 = $data['PublishContext'];
            }
            $object->publishContext = $value_2;
            unset($data['PublishContext']);
        } elseif (array_key_exists('PublishContext', $data)) {
            $object->publishContext = null;
            unset($data['PublishContext']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
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
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $value_1 = $data->state;
            if (is_string($data->state)) {
                $value_1 = $data->state;
            } elseif (null === $data->state) {
                $value_1 = $data->state;
            }
            $dataArray['State'] = $value_1;
        }
        if (array_key_exists('publishContext', get_object_vars($data)) && null !== ($data->publishContext ?? null)) {
            $value_2 = $data->publishContext;
            if (is_iterable($data->publishContext)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->publishContext as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data->publishContext) {
                $value_2 = $data->publishContext;
            }
            $dataArray['PublishContext'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
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
