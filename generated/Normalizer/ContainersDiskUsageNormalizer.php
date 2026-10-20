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

class ContainersDiskUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainersDiskUsage::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainersDiskUsage::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersDiskUsage();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ActiveCount', $data) && null !== $data['ActiveCount']) {
            $value = $data['ActiveCount'];
            if (is_int($data['ActiveCount'])) {
                $value = $data['ActiveCount'];
            } elseif (null === $data['ActiveCount']) {
                $value = $data['ActiveCount'];
            }
            $object->activeCount = $value;
            unset($data['ActiveCount']);
        } elseif (array_key_exists('ActiveCount', $data)) {
            $object->activeCount = null;
            unset($data['ActiveCount']);
        }
        if (array_key_exists('TotalCount', $data) && null !== $data['TotalCount']) {
            $value_1 = $data['TotalCount'];
            if (is_int($data['TotalCount'])) {
                $value_1 = $data['TotalCount'];
            } elseif (null === $data['TotalCount']) {
                $value_1 = $data['TotalCount'];
            }
            $object->totalCount = $value_1;
            unset($data['TotalCount']);
        } elseif (array_key_exists('TotalCount', $data)) {
            $object->totalCount = null;
            unset($data['TotalCount']);
        }
        if (array_key_exists('Reclaimable', $data) && null !== $data['Reclaimable']) {
            $value_2 = $data['Reclaimable'];
            if (is_int($data['Reclaimable'])) {
                $value_2 = $data['Reclaimable'];
            } elseif (null === $data['Reclaimable']) {
                $value_2 = $data['Reclaimable'];
            }
            $object->reclaimable = $value_2;
            unset($data['Reclaimable']);
        } elseif (array_key_exists('Reclaimable', $data)) {
            $object->reclaimable = null;
            unset($data['Reclaimable']);
        }
        if (array_key_exists('TotalSize', $data) && null !== $data['TotalSize']) {
            $value_3 = $data['TotalSize'];
            if (is_int($data['TotalSize'])) {
                $value_3 = $data['TotalSize'];
            } elseif (null === $data['TotalSize']) {
                $value_3 = $data['TotalSize'];
            }
            $object->totalSize = $value_3;
            unset($data['TotalSize']);
        } elseif (array_key_exists('TotalSize', $data)) {
            $object->totalSize = null;
            unset($data['TotalSize']);
        }
        if (array_key_exists('Items', $data) && null !== $data['Items']) {
            $values = [];
            foreach ($data['Items'] as $value_4) {
                $values[] = $value_4;
            }
            $object->items = $values;
            unset($data['Items']);
        } elseif (array_key_exists('Items', $data)) {
            $object->items = null;
            unset($data['Items']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('activeCount', get_object_vars($data)) && null !== ($data->activeCount ?? null)) {
            $value = $data->activeCount;
            if (is_int($data->activeCount)) {
                $value = $data->activeCount;
            } elseif (null === $data->activeCount) {
                $value = $data->activeCount;
            }
            $dataArray['ActiveCount'] = $value;
        }
        if (array_key_exists('totalCount', get_object_vars($data)) && null !== ($data->totalCount ?? null)) {
            $value_1 = $data->totalCount;
            if (is_int($data->totalCount)) {
                $value_1 = $data->totalCount;
            } elseif (null === $data->totalCount) {
                $value_1 = $data->totalCount;
            }
            $dataArray['TotalCount'] = $value_1;
        }
        if (array_key_exists('reclaimable', get_object_vars($data)) && null !== ($data->reclaimable ?? null)) {
            $value_2 = $data->reclaimable;
            if (is_int($data->reclaimable)) {
                $value_2 = $data->reclaimable;
            } elseif (null === $data->reclaimable) {
                $value_2 = $data->reclaimable;
            }
            $dataArray['Reclaimable'] = $value_2;
        }
        if (array_key_exists('totalSize', get_object_vars($data)) && null !== ($data->totalSize ?? null)) {
            $value_3 = $data->totalSize;
            if (is_int($data->totalSize)) {
                $value_3 = $data->totalSize;
            } elseif (null === $data->totalSize) {
                $value_3 = $data->totalSize;
            }
            $dataArray['TotalSize'] = $value_3;
        }
        if (array_key_exists('items', get_object_vars($data)) && null !== ($data->items ?? null)) {
            $values = [];
            foreach ($data->items as $value_4) {
                $values[] = $value_4;
            }
            $dataArray['Items'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainersDiskUsage::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
