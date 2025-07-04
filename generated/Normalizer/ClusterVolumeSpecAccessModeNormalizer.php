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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Scope', $data)) {
            $object->setScope($data['Scope']);
            unset($data['Scope']);
        }
        if (array_key_exists('Sharing', $data)) {
            $object->setSharing($data['Sharing']);
            unset($data['Sharing']);
        }
        if (array_key_exists('MountVolume', $data)) {
            $object->setMountVolume($this->denormalizer->denormalize($data['MountVolume'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeMountVolume::class, 'json', $context));
            unset($data['MountVolume']);
        }
        if (array_key_exists('Secrets', $data)) {
            $values = [];
            foreach ($data['Secrets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class, 'json', $context);
            }
            $object->setSecrets($values);
            unset($data['Secrets']);
        }
        if (array_key_exists('AccessibilityRequirements', $data)) {
            $object->setAccessibilityRequirements($this->denormalizer->denormalize($data['AccessibilityRequirements'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class, 'json', $context));
            unset($data['AccessibilityRequirements']);
        }
        if (array_key_exists('CapacityRange', $data)) {
            $object->setCapacityRange($this->denormalizer->denormalize($data['CapacityRange'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class, 'json', $context));
            unset($data['CapacityRange']);
        }
        if (array_key_exists('Availability', $data)) {
            $object->setAvailability($data['Availability']);
            unset($data['Availability']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
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
        if ($data->isInitialized('mountVolume') && null !== $data->getMountVolume()) {
            $dataArray['MountVolume'] = $this->normalizer->normalize($data->getMountVolume(), 'json', $context);
        }
        if ($data->isInitialized('secrets') && null !== $data->getSecrets()) {
            $values = [];
            foreach ($data->getSecrets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Secrets'] = $values;
        }
        if ($data->isInitialized('accessibilityRequirements') && null !== $data->getAccessibilityRequirements()) {
            $dataArray['AccessibilityRequirements'] = $this->normalizer->normalize($data->getAccessibilityRequirements(), 'json', $context);
        }
        if ($data->isInitialized('capacityRange') && null !== $data->getCapacityRange()) {
            $dataArray['CapacityRange'] = $this->normalizer->normalize($data->getCapacityRange(), 'json', $context);
        }
        if ($data->isInitialized('availability') && null !== $data->getAvailability()) {
            $dataArray['Availability'] = $data->getAvailability();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
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
