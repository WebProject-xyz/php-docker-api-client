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
            $object->untagged = $value;
            unset($data['Untagged']);
        } elseif (array_key_exists('Untagged', $data)) {
            $object->untagged = null;
            unset($data['Untagged']);
        }
        if (array_key_exists('Deleted', $data) && null !== $data['Deleted']) {
            $value_1 = $data['Deleted'];
            if (is_string($data['Deleted'])) {
                $value_1 = $data['Deleted'];
            } elseif (null === $data['Deleted']) {
                $value_1 = $data['Deleted'];
            }
            $object->deleted = $value_1;
            unset($data['Deleted']);
        } elseif (array_key_exists('Deleted', $data)) {
            $object->deleted = null;
            unset($data['Deleted']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('untagged', get_object_vars($data)) && null !== ($data->untagged ?? null)) {
            $value = $data->untagged;
            if (is_string($data->untagged)) {
                $value = $data->untagged;
            } elseif (null === $data->untagged) {
                $value = $data->untagged;
            }
            $dataArray['Untagged'] = $value;
        }
        if (array_key_exists('deleted', get_object_vars($data)) && null !== ($data->deleted ?? null)) {
            $value_1 = $data->deleted;
            if (is_string($data->deleted)) {
                $value_1 = $data->deleted;
            } elseif (null === $data->deleted) {
                $value_1 = $data->deleted;
            }
            $dataArray['Deleted'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
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
