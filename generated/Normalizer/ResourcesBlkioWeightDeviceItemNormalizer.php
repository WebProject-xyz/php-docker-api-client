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

class ResourcesBlkioWeightDeviceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Path', $data) && null !== $data['Path']) {
            $value = $data['Path'];
            if (is_string($data['Path'])) {
                $value = $data['Path'];
            } elseif (null === $data['Path']) {
                $value = $data['Path'];
            }
            $object->setPath($value);
        } elseif (array_key_exists('Path', $data) && null === $data['Path']) {
            $object->setPath(null);
        }
        if (array_key_exists('Weight', $data) && null !== $data['Weight']) {
            $value_1 = $data['Weight'];
            if (is_int($data['Weight'])) {
                $value_1 = $data['Weight'];
            } elseif (null === $data['Weight']) {
                $value_1 = $data['Weight'];
            }
            $object->setWeight($value_1);
        } elseif (array_key_exists('Weight', $data) && null === $data['Weight']) {
            $object->setWeight(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('path')) {
            $value = $data->getPath();
            if (is_string($data->getPath())) {
                $value = $data->getPath();
            } elseif (null === $data->getPath()) {
                $value = $data->getPath();
            }
            $dataArray['Path'] = $value;
        }
        if ($data->isInitialized('weight')) {
            $value_1 = $data->getWeight();
            if (is_int($data->getWeight())) {
                $value_1 = $data->getWeight();
            } elseif (null === $data->getWeight()) {
                $value_1 = $data->getWeight();
            }
            $dataArray['Weight'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
