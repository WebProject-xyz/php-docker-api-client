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
use function is_string;

class ThrottleDeviceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Path', $data) && null !== $data['Path']) {
            $value = $data['Path'];
            if (is_string($data['Path'])) {
                $value = $data['Path'];
            } elseif (null === $data['Path']) {
                $value = $data['Path'];
            }
            $object->path = $value;
            unset($data['Path']);
        } elseif (array_key_exists('Path', $data)) {
            $object->path = null;
            unset($data['Path']);
        }
        if (array_key_exists('Rate', $data) && null !== $data['Rate']) {
            $value_1 = $data['Rate'];
            if (is_int($data['Rate'])) {
                $value_1 = $data['Rate'];
            } elseif (null === $data['Rate']) {
                $value_1 = $data['Rate'];
            }
            $object->rate = $value_1;
            unset($data['Rate']);
        } elseif (array_key_exists('Rate', $data)) {
            $object->rate = null;
            unset($data['Rate']);
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
        if (array_key_exists('path', get_object_vars($data)) && null !== ($data->path ?? null)) {
            $value = $data->path;
            if (is_string($data->path)) {
                $value = $data->path;
            } elseif (null === $data->path) {
                $value = $data->path;
            }
            $dataArray['Path'] = $value;
        }
        if (array_key_exists('rate', get_object_vars($data)) && null !== ($data->rate ?? null)) {
            $value_1 = $data->rate;
            if (is_int($data->rate)) {
                $value_1 = $data->rate;
            } elseif (null === $data->rate) {
                $value_1 = $data->rate;
            }
            $dataArray['Rate'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
