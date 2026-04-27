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
            $object->setScope($data['Scope']);
        }
        if (array_key_exists('Sharing', $data)) {
            $object->setSharing($data['Sharing']);
        }
        if (array_key_exists('MountVolume', $data) && null !== $data['MountVolume']) {
            $value = $data['MountVolume'];
            if (null === $data['MountVolume']) {
                $value = $data['MountVolume'];
            } elseif (isset($data['MountVolume'])) {
                $value = $data['MountVolume'];
            }
            $object->setMountVolume($value);
        } elseif (array_key_exists('MountVolume', $data) && null === $data['MountVolume']) {
            $object->setMountVolume(null);
        }
        if (array_key_exists('Secrets', $data) && null !== $data['Secrets']) {
            $value_1 = $data['Secrets'];
            if (is_array($data['Secrets']) && $this->isOnlyNumericKeys($data['Secrets'])) {
                $values = [];
                foreach ($data['Secrets'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data['Secrets']) {
                $value_1 = $data['Secrets'];
            }
            $object->setSecrets($value_1);
        } elseif (array_key_exists('Secrets', $data) && null === $data['Secrets']) {
            $object->setSecrets(null);
        }
        if (array_key_exists('AccessibilityRequirements', $data) && null !== $data['AccessibilityRequirements']) {
            $object->setAccessibilityRequirements($this->denormalizer->denormalize($data['AccessibilityRequirements'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class, 'json', $context));
        } elseif (array_key_exists('AccessibilityRequirements', $data) && null === $data['AccessibilityRequirements']) {
            $object->setAccessibilityRequirements(null);
        }
        if (array_key_exists('CapacityRange', $data) && null !== $data['CapacityRange']) {
            $object->setCapacityRange($this->denormalizer->denormalize($data['CapacityRange'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class, 'json', $context));
        } elseif (array_key_exists('CapacityRange', $data) && null === $data['CapacityRange']) {
            $object->setCapacityRange(null);
        }
        if (array_key_exists('Availability', $data)) {
            $object->setAvailability($data['Availability']);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('scope') && null !== $data->getScope()) {
            $dataArray['Scope'] = $data->getScope();
        }
        if ($data->isInitialized('sharing') && null !== $data->getSharing()) {
            $dataArray['Sharing'] = $data->getSharing();
        }
        if ($data->isInitialized('mountVolume')) {
            $value = $data->getMountVolume();
            if (null === $data->getMountVolume()) {
                $value = $data->getMountVolume();
            } elseif (null !== $data->getMountVolume()) {
                $value = $data->getMountVolume();
            }
            $dataArray['MountVolume'] = $value;
        }
        if ($data->isInitialized('secrets')) {
            $value_1 = $data->getSecrets();
            if (is_array($data->getSecrets())) {
                $values = [];
                foreach ($data->getSecrets() as $value_2) {
                    $values[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data->getSecrets()) {
                $value_1 = $data->getSecrets();
            }
            $dataArray['Secrets'] = $value_1;
        }
        if ($data->isInitialized('accessibilityRequirements')) {
            $dataArray['AccessibilityRequirements'] = $this->normalizer->normalize($data->getAccessibilityRequirements(), 'json', $context);
        }
        if ($data->isInitialized('capacityRange')) {
            $dataArray['CapacityRange'] = $this->normalizer->normalize($data->getCapacityRange(), 'json', $context);
        }
        if ($data->isInitialized('availability') && null !== $data->getAvailability()) {
            $dataArray['Availability'] = $data->getAvailability();
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
