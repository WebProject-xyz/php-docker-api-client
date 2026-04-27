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

class ClusterVolumeSpecAccessModeCapacityRangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('RequiredBytes', $data) && null !== $data['RequiredBytes']) {
            $value = $data['RequiredBytes'];
            if (is_int($data['RequiredBytes'])) {
                $value = $data['RequiredBytes'];
            } elseif (null === $data['RequiredBytes']) {
                $value = $data['RequiredBytes'];
            }
            $object->setRequiredBytes($value);
        } elseif (array_key_exists('RequiredBytes', $data) && null === $data['RequiredBytes']) {
            $object->setRequiredBytes(null);
        }
        if (array_key_exists('LimitBytes', $data) && null !== $data['LimitBytes']) {
            $value_1 = $data['LimitBytes'];
            if (is_int($data['LimitBytes'])) {
                $value_1 = $data['LimitBytes'];
            } elseif (null === $data['LimitBytes']) {
                $value_1 = $data['LimitBytes'];
            }
            $object->setLimitBytes($value_1);
        } elseif (array_key_exists('LimitBytes', $data) && null === $data['LimitBytes']) {
            $object->setLimitBytes(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('requiredBytes')) {
            $value = $data->getRequiredBytes();
            if (is_int($data->getRequiredBytes())) {
                $value = $data->getRequiredBytes();
            } elseif (null === $data->getRequiredBytes()) {
                $value = $data->getRequiredBytes();
            }
            $dataArray['RequiredBytes'] = $value;
        }
        if ($data->isInitialized('limitBytes')) {
            $value_1 = $data->getLimitBytes();
            if (is_int($data->getLimitBytes())) {
                $value_1 = $data->getLimitBytes();
            } elseif (null === $data->getLimitBytes()) {
                $value_1 = $data->getLimitBytes();
            }
            $dataArray['LimitBytes'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
