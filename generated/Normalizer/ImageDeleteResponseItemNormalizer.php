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

class ImageDeleteResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Untagged', $data) && null !== $data['Untagged']) {
            $value = $data['Untagged'];
            if (is_string($data['Untagged'])) {
                $value = $data['Untagged'];
            } elseif (null === $data['Untagged']) {
                $value = $data['Untagged'];
            }
            $object->setUntagged($value);
        } elseif (array_key_exists('Untagged', $data) && null === $data['Untagged']) {
            $object->setUntagged(null);
        }
        if (array_key_exists('Deleted', $data) && null !== $data['Deleted']) {
            $value_1 = $data['Deleted'];
            if (is_string($data['Deleted'])) {
                $value_1 = $data['Deleted'];
            } elseif (null === $data['Deleted']) {
                $value_1 = $data['Deleted'];
            }
            $object->setDeleted($value_1);
        } elseif (array_key_exists('Deleted', $data) && null === $data['Deleted']) {
            $object->setDeleted(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('untagged')) {
            $value = $data->getUntagged();
            if (is_string($data->getUntagged())) {
                $value = $data->getUntagged();
            } elseif (null === $data->getUntagged()) {
                $value = $data->getUntagged();
            }
            $dataArray['Untagged'] = $value;
        }
        if ($data->isInitialized('deleted')) {
            $value_1 = $data->getDeleted();
            if (is_string($data->getDeleted())) {
                $value_1 = $data->getDeleted();
            } elseif (null === $data->getDeleted()) {
                $value_1 = $data->getDeleted();
            }
            $dataArray['Deleted'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
