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

class ClusterVolumeSpecAccessModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Scope', $data)) {
            $object->scope = \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeScope::from($data['Scope']);
            unset($data['Scope']);
        }
        if (array_key_exists('Sharing', $data)) {
            $object->sharing = \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSharing::from($data['Sharing']);
            unset($data['Sharing']);
        }
        if (array_key_exists('MountVolume', $data) && null !== $data['MountVolume']) {
            $value = $data['MountVolume'];
            if (null === $data['MountVolume']) {
                $value = $data['MountVolume'];
            } elseif (isset($data['MountVolume'])) {
                $value = $data['MountVolume'];
            }
            $object->mountVolume = $value;
            unset($data['MountVolume']);
        } elseif (array_key_exists('MountVolume', $data)) {
            $object->mountVolume = null;
            unset($data['MountVolume']);
        }
        if (array_key_exists('Secrets', $data) && null !== $data['Secrets']) {
            $values = [];
            foreach ($data['Secrets'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class, 'json', $context);
            }
            $object->secrets = $values;
            unset($data['Secrets']);
        } elseif (array_key_exists('Secrets', $data)) {
            $object->secrets = null;
            unset($data['Secrets']);
        }
        if (array_key_exists('AccessibilityRequirements', $data) && null !== $data['AccessibilityRequirements']) {
            $object->accessibilityRequirements = $this->denormalizer->denormalize($data['AccessibilityRequirements'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class, 'json', $context);
            unset($data['AccessibilityRequirements']);
        } elseif (array_key_exists('AccessibilityRequirements', $data)) {
            $object->accessibilityRequirements = null;
            unset($data['AccessibilityRequirements']);
        }
        if (array_key_exists('CapacityRange', $data) && null !== $data['CapacityRange']) {
            $object->capacityRange = $this->denormalizer->denormalize($data['CapacityRange'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class, 'json', $context);
            unset($data['CapacityRange']);
        } elseif (array_key_exists('CapacityRange', $data)) {
            $object->capacityRange = null;
            unset($data['CapacityRange']);
        }
        if (array_key_exists('Availability', $data)) {
            $object->availability = \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAvailability::from($data['Availability']);
            unset($data['Availability']);
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
        if (array_key_exists('scope', get_object_vars($data)) && null !== ($data->scope ?? null)) {
            $dataArray['Scope'] = $data->scope->value;
        }
        if (array_key_exists('sharing', get_object_vars($data)) && null !== ($data->sharing ?? null)) {
            $dataArray['Sharing'] = $data->sharing->value;
        }
        if (array_key_exists('mountVolume', get_object_vars($data)) && null !== ($data->mountVolume ?? null)) {
            $value = $data->mountVolume;
            if (null === $data->mountVolume) {
                $value = $data->mountVolume;
            } elseif (null !== $data->mountVolume) {
                $value = $data->mountVolume;
            }
            $dataArray['MountVolume'] = $value;
        }
        if (array_key_exists('secrets', get_object_vars($data)) && null !== ($data->secrets ?? null)) {
            $values = [];
            foreach ($data->secrets as $value_1) {
                $normalized = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['Secrets'] = $values;
        }
        if (array_key_exists('accessibilityRequirements', get_object_vars($data)) && null !== ($data->accessibilityRequirements ?? null)) {
            $normalized_1                           = $this->normalizer->normalize($data->accessibilityRequirements, 'json', $context);
            $dataArray['AccessibilityRequirements'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('capacityRange', get_object_vars($data)) && null !== ($data->capacityRange ?? null)) {
            $normalized_2               = $this->normalizer->normalize($data->capacityRange, 'json', $context);
            $dataArray['CapacityRange'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('availability', get_object_vars($data)) && null !== ($data->availability ?? null)) {
            $dataArray['Availability'] = $data->availability->value;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
