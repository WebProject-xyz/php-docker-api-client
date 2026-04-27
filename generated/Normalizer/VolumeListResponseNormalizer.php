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

class VolumeListResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Volumes', $data) && null !== $data['Volumes']) {
            $value = $data['Volumes'];
            if (is_array($data['Volumes']) && $this->isOnlyNumericKeys($data['Volumes'])) {
                $values = [];
                foreach ($data['Volumes'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\Volume::class, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data['Volumes']) {
                $value = $data['Volumes'];
            }
            $object->setVolumes($value);
        } elseif (array_key_exists('Volumes', $data) && null === $data['Volumes']) {
            $object->setVolumes(null);
        }
        if (array_key_exists('Warnings', $data) && null !== $data['Warnings']) {
            $value_2 = $data['Warnings'];
            if (is_array($data['Warnings']) && $this->isOnlyNumericKeys($data['Warnings'])) {
                $values_1 = [];
                foreach ($data['Warnings'] as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data['Warnings']) {
                $value_2 = $data['Warnings'];
            }
            $object->setWarnings($value_2);
        } elseif (array_key_exists('Warnings', $data) && null === $data['Warnings']) {
            $object->setWarnings(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('volumes')) {
            $value = $data->getVolumes();
            if (is_array($data->getVolumes())) {
                $values = [];
                foreach ($data->getVolumes() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data->getVolumes()) {
                $value = $data->getVolumes();
            }
            $dataArray['Volumes'] = $value;
        }
        if ($data->isInitialized('warnings')) {
            $value_2 = $data->getWarnings();
            if (is_array($data->getWarnings())) {
                $values_1 = [];
                foreach ($data->getWarnings() as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data->getWarnings()) {
                $value_2 = $data->getWarnings();
            }
            $dataArray['Warnings'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
