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

class GenericResourcesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('NamedResourceSpec', $data) && null !== $data['NamedResourceSpec']) {
            $object->namedResourceSpec = $this->denormalizer->denormalize($data['NamedResourceSpec'], \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class, 'json', $context);
            unset($data['NamedResourceSpec']);
        } elseif (array_key_exists('NamedResourceSpec', $data)) {
            $object->namedResourceSpec = null;
            unset($data['NamedResourceSpec']);
        }
        if (array_key_exists('DiscreteResourceSpec', $data) && null !== $data['DiscreteResourceSpec']) {
            $object->discreteResourceSpec = $this->denormalizer->denormalize($data['DiscreteResourceSpec'], \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class, 'json', $context);
            unset($data['DiscreteResourceSpec']);
        } elseif (array_key_exists('DiscreteResourceSpec', $data)) {
            $object->discreteResourceSpec = null;
            unset($data['DiscreteResourceSpec']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('namedResourceSpec', get_object_vars($data)) && null !== ($data->namedResourceSpec ?? null)) {
            $normalized                     = $this->normalizer->normalize($data->namedResourceSpec, 'json', $context);
            $dataArray['NamedResourceSpec'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('discreteResourceSpec', get_object_vars($data)) && null !== ($data->discreteResourceSpec ?? null)) {
            $normalized_1                      = $this->normalizer->normalize($data->discreteResourceSpec, 'json', $context);
            $dataArray['DiscreteResourceSpec'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
