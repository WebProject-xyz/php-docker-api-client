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
            $object->setBase($value);
        } elseif (array_key_exists('Base', $data) && null === $data['Base']) {
            $object->setBase(null);
        }
        if (array_key_exists('Size', $data) && null !== $data['Size']) {
            $value_1 = $data['Size'];
            if (is_int($data['Size'])) {
                $value_1 = $data['Size'];
            } elseif (null === $data['Size']) {
                $value_1 = $data['Size'];
            }
            $object->setSize($value_1);
        } elseif (array_key_exists('Size', $data) && null === $data['Size']) {
            $object->setSize(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('base')) {
            $value = $data->getBase();
            if (is_string($data->getBase())) {
                $value = $data->getBase();
            } elseif (null === $data->getBase()) {
                $value = $data->getBase();
            }
            $dataArray['Base'] = $value;
        }
        if ($data->isInitialized('size')) {
            $value_1 = $data->getSize();
            if (is_int($data->getSize())) {
                $value_1 = $data->getSize();
            } elseif (null === $data->getSize()) {
                $value_1 = $data->getSize();
            }
            $dataArray['Size'] = $value_1;
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
