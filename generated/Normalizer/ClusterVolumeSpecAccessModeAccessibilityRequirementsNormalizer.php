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

class ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Requisite', $data) && null !== $data['Requisite']) {
            $value = $data['Requisite'];
            if (is_array($data['Requisite']) && $this->isOnlyNumericKeys($data['Requisite'])) {
                $values = [];
                foreach ($data['Requisite'] as $value_1) {
                    $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_1 as $key => $value_2) {
                        $values_1[$key] = $value_2;
                    }
                    $values[] = $values_1;
                }
                $value = $values;
            } elseif (null === $data['Requisite']) {
                $value = $data['Requisite'];
            }
            $object->setRequisite($value);
        } elseif (array_key_exists('Requisite', $data) && null === $data['Requisite']) {
            $object->setRequisite(null);
        }
        if (array_key_exists('Preferred', $data) && null !== $data['Preferred']) {
            $value_3 = $data['Preferred'];
            if (is_array($data['Preferred']) && $this->isOnlyNumericKeys($data['Preferred'])) {
                $values_2 = [];
                foreach ($data['Preferred'] as $value_4) {
                    $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_4 as $key_1 => $value_5) {
                        $values_3[$key_1] = $value_5;
                    }
                    $values_2[] = $values_3;
                }
                $value_3 = $values_2;
            } elseif (null === $data['Preferred']) {
                $value_3 = $data['Preferred'];
            }
            $object->setPreferred($value_3);
        } elseif (array_key_exists('Preferred', $data) && null === $data['Preferred']) {
            $object->setPreferred(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('requisite')) {
            $value = $data->getRequisite();
            if (is_array($data->getRequisite())) {
                $values = [];
                foreach ($data->getRequisite() as $value_1) {
                    $values_1 = [];
                    foreach ($value_1 as $key => $value_2) {
                        $values_1[$key] = $value_2;
                    }
                    $values[] = $values_1;
                }
                $value = $values;
            } elseif (null === $data->getRequisite()) {
                $value = $data->getRequisite();
            }
            $dataArray['Requisite'] = $value;
        }
        if ($data->isInitialized('preferred')) {
            $value_3 = $data->getPreferred();
            if (is_array($data->getPreferred())) {
                $values_2 = [];
                foreach ($data->getPreferred() as $value_4) {
                    $values_3 = [];
                    foreach ($value_4 as $key_1 => $value_5) {
                        $values_3[$key_1] = $value_5;
                    }
                    $values_2[] = $values_3;
                }
                $value_3 = $values_2;
            } elseif (null === $data->getPreferred()) {
                $value_3 = $data->getPreferred();
            }
            $dataArray['Preferred'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
