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
            $value = $data['Constraints'];
            if (is_array($data['Constraints']) && $this->isOnlyNumericKeys($data['Constraints'])) {
                $values = [];
                foreach ($data['Constraints'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['Constraints']) {
                $value = $data['Constraints'];
            }
            $object->setConstraints($value);
        } elseif (array_key_exists('Constraints', $data) && null === $data['Constraints']) {
            $object->setConstraints(null);
        }
        if (array_key_exists('Preferences', $data) && null !== $data['Preferences']) {
            $value_2 = $data['Preferences'];
            if (is_array($data['Preferences']) && $this->isOnlyNumericKeys($data['Preferences'])) {
                $values_1 = [];
                foreach ($data['Preferences'] as $value_3) {
                    $values_1[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data['Preferences']) {
                $value_2 = $data['Preferences'];
            }
            $object->setPreferences($value_2);
        } elseif (array_key_exists('Preferences', $data) && null === $data['Preferences']) {
            $object->setPreferences(null);
        }
        if (array_key_exists('MaxReplicas', $data) && null !== $data['MaxReplicas']) {
            $value_4 = $data['MaxReplicas'];
            if (is_int($data['MaxReplicas'])) {
                $value_4 = $data['MaxReplicas'];
            } elseif (null === $data['MaxReplicas']) {
                $value_4 = $data['MaxReplicas'];
            }
            $object->setMaxReplicas($value_4);
        } elseif (array_key_exists('MaxReplicas', $data) && null === $data['MaxReplicas']) {
            $object->setMaxReplicas(null);
        }
        if (array_key_exists('Platforms', $data) && null !== $data['Platforms']) {
            $value_5 = $data['Platforms'];
            if (is_array($data['Platforms']) && $this->isOnlyNumericKeys($data['Platforms'])) {
                $values_2 = [];
                foreach ($data['Platforms'] as $value_6) {
                    $values_2[] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\Platform::class, 'json', $context);
                }
                $value_5 = $values_2;
            } elseif (null === $data['Platforms']) {
                $value_5 = $data['Platforms'];
            }
            $object->setPlatforms($value_5);
        } elseif (array_key_exists('Platforms', $data) && null === $data['Platforms']) {
            $object->setPlatforms(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('constraints')) {
            $value = $data->getConstraints();
            if (is_array($data->getConstraints())) {
                $values = [];
                foreach ($data->getConstraints() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->getConstraints()) {
                $value = $data->getConstraints();
            }
            $dataArray['Constraints'] = $value;
        }
        if ($data->isInitialized('preferences')) {
            $value_2 = $data->getPreferences();
            if (is_array($data->getPreferences())) {
                $values_1 = [];
                foreach ($data->getPreferences() as $value_3) {
                    $values_1[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data->getPreferences()) {
                $value_2 = $data->getPreferences();
            }
            $dataArray['Preferences'] = $value_2;
        }
        if ($data->isInitialized('maxReplicas')) {
            $value_4 = $data->getMaxReplicas();
            if (is_int($data->getMaxReplicas())) {
                $value_4 = $data->getMaxReplicas();
            } elseif (null === $data->getMaxReplicas()) {
                $value_4 = $data->getMaxReplicas();
            }
            $dataArray['MaxReplicas'] = $value_4;
        }
        if ($data->isInitialized('platforms')) {
            $value_5 = $data->getPlatforms();
            if (is_array($data->getPlatforms())) {
                $values_2 = [];
                foreach ($data->getPlatforms() as $value_6) {
                    $values_2[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $value_5 = $values_2;
            } elseif (null === $data->getPlatforms()) {
                $value_5 = $data->getPlatforms();
            }
            $dataArray['Platforms'] = $value_5;
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
