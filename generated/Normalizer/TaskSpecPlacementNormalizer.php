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

class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Constraints', $data) && null !== $data['Constraints']) {
            $values = [];
            foreach ($data['Constraints'] as $value) {
                $values[] = $value;
            }
            $object->constraints = $values;
            unset($data['Constraints']);
        } elseif (array_key_exists('Constraints', $data)) {
            $object->constraints = null;
            unset($data['Constraints']);
        }
        if (array_key_exists('Preferences', $data) && null !== $data['Preferences']) {
            $values_1 = [];
            foreach ($data['Preferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class, 'json', $context);
            }
            $object->preferences = $values_1;
            unset($data['Preferences']);
        } elseif (array_key_exists('Preferences', $data)) {
            $object->preferences = null;
            unset($data['Preferences']);
        }
        if (array_key_exists('MaxReplicas', $data) && null !== $data['MaxReplicas']) {
            $value_2 = $data['MaxReplicas'];
            if (is_int($data['MaxReplicas'])) {
                $value_2 = $data['MaxReplicas'];
            } elseif (null === $data['MaxReplicas']) {
                $value_2 = $data['MaxReplicas'];
            }
            $object->maxReplicas = $value_2;
            unset($data['MaxReplicas']);
        } elseif (array_key_exists('MaxReplicas', $data)) {
            $object->maxReplicas = null;
            unset($data['MaxReplicas']);
        }
        if (array_key_exists('Platforms', $data) && null !== $data['Platforms']) {
            $values_2 = [];
            foreach ($data['Platforms'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\Platform::class, 'json', $context);
            }
            $object->platforms = $values_2;
            unset($data['Platforms']);
        } elseif (array_key_exists('Platforms', $data)) {
            $object->platforms = null;
            unset($data['Platforms']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('constraints', get_object_vars($data)) && null !== ($data->constraints ?? null)) {
            $values = [];
            foreach ($data->constraints as $value) {
                $values[] = $value;
            }
            $dataArray['Constraints'] = $values;
        }
        if (array_key_exists('preferences', get_object_vars($data)) && null !== ($data->preferences ?? null)) {
            $values_1 = [];
            foreach ($data->preferences as $value_1) {
                $normalized = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['Preferences'] = $values_1;
        }
        if (array_key_exists('maxReplicas', get_object_vars($data)) && null !== ($data->maxReplicas ?? null)) {
            $value_2 = $data->maxReplicas;
            if (is_int($data->maxReplicas)) {
                $value_2 = $data->maxReplicas;
            } elseif (null === $data->maxReplicas) {
                $value_2 = $data->maxReplicas;
            }
            $dataArray['MaxReplicas'] = $value_2;
        }
        if (array_key_exists('platforms', get_object_vars($data)) && null !== ($data->platforms ?? null)) {
            $values_2 = [];
            foreach ($data->platforms as $value_3) {
                $normalized_1 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_2[]   = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['Platforms'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
