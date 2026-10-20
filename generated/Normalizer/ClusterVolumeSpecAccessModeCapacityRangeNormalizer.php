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
            $object->requiredBytes = $value;
            unset($data['RequiredBytes']);
        } elseif (array_key_exists('RequiredBytes', $data)) {
            $object->requiredBytes = null;
            unset($data['RequiredBytes']);
        }
        if (array_key_exists('LimitBytes', $data) && null !== $data['LimitBytes']) {
            $value_1 = $data['LimitBytes'];
            if (is_int($data['LimitBytes'])) {
                $value_1 = $data['LimitBytes'];
            } elseif (null === $data['LimitBytes']) {
                $value_1 = $data['LimitBytes'];
            }
            $object->limitBytes = $value_1;
            unset($data['LimitBytes']);
        } elseif (array_key_exists('LimitBytes', $data)) {
            $object->limitBytes = null;
            unset($data['LimitBytes']);
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
        if (array_key_exists('requiredBytes', get_object_vars($data)) && null !== ($data->requiredBytes ?? null)) {
            $value = $data->requiredBytes;
            if (is_int($data->requiredBytes)) {
                $value = $data->requiredBytes;
            } elseif (null === $data->requiredBytes) {
                $value = $data->requiredBytes;
            }
            $dataArray['RequiredBytes'] = $value;
        }
        if (array_key_exists('limitBytes', get_object_vars($data)) && null !== ($data->limitBytes ?? null)) {
            $value_1 = $data->limitBytes;
            if (is_int($data->limitBytes)) {
                $value_1 = $data->limitBytes;
            } elseif (null === $data->limitBytes) {
                $value_1 = $data->limitBytes;
            }
            $dataArray['LimitBytes'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
