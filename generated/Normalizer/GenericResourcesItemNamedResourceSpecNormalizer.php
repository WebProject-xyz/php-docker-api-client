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

class GenericResourcesItemNamedResourceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Kind', $data) && null !== $data['Kind']) {
            $value = $data['Kind'];
            if (is_string($data['Kind'])) {
                $value = $data['Kind'];
            } elseif (null === $data['Kind']) {
                $value = $data['Kind'];
            }
            $object->setKind($value);
        } elseif (array_key_exists('Kind', $data) && null === $data['Kind']) {
            $object->setKind(null);
        }
        if (array_key_exists('Value', $data) && null !== $data['Value']) {
            $value_1 = $data['Value'];
            if (is_string($data['Value'])) {
                $value_1 = $data['Value'];
            } elseif (null === $data['Value']) {
                $value_1 = $data['Value'];
            }
            $object->setValue($value_1);
        } elseif (array_key_exists('Value', $data) && null === $data['Value']) {
            $object->setValue(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('kind')) {
            $value = $data->getKind();
            if (is_string($data->getKind())) {
                $value = $data->getKind();
            } elseif (null === $data->getKind()) {
                $value = $data->getKind();
            }
            $dataArray['Kind'] = $value;
        }
        if ($data->isInitialized('value')) {
            $value_1 = $data->getValue();
            if (is_string($data->getValue())) {
                $value_1 = $data->getValue();
            } elseif (null === $data->getValue()) {
                $value_1 = $data->getValue();
            }
            $dataArray['Value'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
