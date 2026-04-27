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

class VolumesDiskUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\VolumesDiskUsage::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\VolumesDiskUsage::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\VolumesDiskUsage();
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
            $object->setActiveCount($value);
        } elseif (array_key_exists('ActiveCount', $data) && null === $data['ActiveCount']) {
            $object->setActiveCount(null);
        }
        if (array_key_exists('TotalCount', $data) && null !== $data['TotalCount']) {
            $value_1 = $data['TotalCount'];
            if (is_int($data['TotalCount'])) {
                $value_1 = $data['TotalCount'];
            } elseif (null === $data['TotalCount']) {
                $value_1 = $data['TotalCount'];
            }
            $object->setTotalCount($value_1);
        } elseif (array_key_exists('TotalCount', $data) && null === $data['TotalCount']) {
            $object->setTotalCount(null);
        }
        if (array_key_exists('Reclaimable', $data) && null !== $data['Reclaimable']) {
            $value_2 = $data['Reclaimable'];
            if (is_int($data['Reclaimable'])) {
                $value_2 = $data['Reclaimable'];
            } elseif (null === $data['Reclaimable']) {
                $value_2 = $data['Reclaimable'];
            }
            $object->setReclaimable($value_2);
        } elseif (array_key_exists('Reclaimable', $data) && null === $data['Reclaimable']) {
            $object->setReclaimable(null);
        }
        if (array_key_exists('TotalSize', $data) && null !== $data['TotalSize']) {
            $value_3 = $data['TotalSize'];
            if (is_int($data['TotalSize'])) {
                $value_3 = $data['TotalSize'];
            } elseif (null === $data['TotalSize']) {
                $value_3 = $data['TotalSize'];
            }
            $object->setTotalSize($value_3);
        } elseif (array_key_exists('TotalSize', $data) && null === $data['TotalSize']) {
            $object->setTotalSize(null);
        }
        if (array_key_exists('Items', $data) && null !== $data['Items']) {
            $value_4 = $data['Items'];
            if (is_array($data['Items']) && $this->isOnlyNumericKeys($data['Items'])) {
                $values = [];
                foreach ($data['Items'] as $value_5) {
                    $values[] = $value_5;
                }
                $value_4 = $values;
            } elseif (null === $data['Items']) {
                $value_4 = $data['Items'];
            }
            $object->setItems($value_4);
        } elseif (array_key_exists('Items', $data) && null === $data['Items']) {
            $object->setItems(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('activeCount')) {
            $value = $data->getActiveCount();
            if (is_int($data->getActiveCount())) {
                $value = $data->getActiveCount();
            } elseif (null === $data->getActiveCount()) {
                $value = $data->getActiveCount();
            }
            $dataArray['ActiveCount'] = $value;
        }
        if ($data->isInitialized('totalCount')) {
            $value_1 = $data->getTotalCount();
            if (is_int($data->getTotalCount())) {
                $value_1 = $data->getTotalCount();
            } elseif (null === $data->getTotalCount()) {
                $value_1 = $data->getTotalCount();
            }
            $dataArray['TotalCount'] = $value_1;
        }
        if ($data->isInitialized('reclaimable')) {
            $value_2 = $data->getReclaimable();
            if (is_int($data->getReclaimable())) {
                $value_2 = $data->getReclaimable();
            } elseif (null === $data->getReclaimable()) {
                $value_2 = $data->getReclaimable();
            }
            $dataArray['Reclaimable'] = $value_2;
        }
        if ($data->isInitialized('totalSize')) {
            $value_3 = $data->getTotalSize();
            if (is_int($data->getTotalSize())) {
                $value_3 = $data->getTotalSize();
            } elseif (null === $data->getTotalSize()) {
                $value_3 = $data->getTotalSize();
            }
            $dataArray['TotalSize'] = $value_3;
        }
        if ($data->isInitialized('items')) {
            $value_4 = $data->getItems();
            if (is_array($data->getItems())) {
                $values = [];
                foreach ($data->getItems() as $value_5) {
                    $values[] = $value_5;
                }
                $value_4 = $values;
            } elseif (null === $data->getItems()) {
                $value_4 = $data->getItems();
            }
            $dataArray['Items'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\VolumesDiskUsage::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
