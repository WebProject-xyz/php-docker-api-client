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
            $object->kind = $value;
            unset($data['Kind']);
        } elseif (array_key_exists('Kind', $data)) {
            $object->kind = null;
            unset($data['Kind']);
        }
        if (array_key_exists('Value', $data) && null !== $data['Value']) {
            $value_1 = $data['Value'];
            if (is_string($data['Value'])) {
                $value_1 = $data['Value'];
            } elseif (null === $data['Value']) {
                $value_1 = $data['Value'];
            }
            $object->value = $value_1;
            unset($data['Value']);
        } elseif (array_key_exists('Value', $data)) {
            $object->value = null;
            unset($data['Value']);
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
        if (array_key_exists('kind', get_object_vars($data)) && null !== ($data->kind ?? null)) {
            $value = $data->kind;
            if (is_string($data->kind)) {
                $value = $data->kind;
            } elseif (null === $data->kind) {
                $value = $data->kind;
            }
            $dataArray['Kind'] = $value;
        }
        if (array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $value_1 = $data->value;
            if (is_string($data->value)) {
                $value_1 = $data->value;
            } elseif (null === $data->value) {
                $value_1 = $data->value;
            }
            $dataArray['Value'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
