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

class SystemInfoDefaultAddressPoolsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Base', $data) && null !== $data['Base']) {
            $value = $data['Base'];
            if (is_string($data['Base'])) {
                $value = $data['Base'];
            } elseif (null === $data['Base']) {
                $value = $data['Base'];
            }
            $object->base = $value;
            unset($data['Base']);
        } elseif (array_key_exists('Base', $data)) {
            $object->base = null;
            unset($data['Base']);
        }
        if (array_key_exists('Size', $data) && null !== $data['Size']) {
            $value_1 = $data['Size'];
            if (is_int($data['Size'])) {
                $value_1 = $data['Size'];
            } elseif (null === $data['Size']) {
                $value_1 = $data['Size'];
            }
            $object->size = $value_1;
            unset($data['Size']);
        } elseif (array_key_exists('Size', $data)) {
            $object->size = null;
            unset($data['Size']);
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
        if (array_key_exists('base', get_object_vars($data)) && null !== ($data->base ?? null)) {
            $value = $data->base;
            if (is_string($data->base)) {
                $value = $data->base;
            } elseif (null === $data->base) {
                $value = $data->base;
            }
            $dataArray['Base'] = $value;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $value_1 = $data->size;
            if (is_int($data->size)) {
                $value_1 = $data->size;
            } elseif (null === $data->size) {
                $value_1 = $data->size;
            }
            $dataArray['Size'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
