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

class ContainerThrottlingDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('periods', $data) && null !== $data['periods']) {
            $value = $data['periods'];
            if (is_int($data['periods'])) {
                $value = $data['periods'];
            } elseif (null === $data['periods']) {
                $value = $data['periods'];
            }
            $object->periods = $value;
            unset($data['periods']);
        } elseif (array_key_exists('periods', $data)) {
            $object->periods = null;
            unset($data['periods']);
        }
        if (array_key_exists('throttled_periods', $data) && null !== $data['throttled_periods']) {
            $value_1 = $data['throttled_periods'];
            if (is_int($data['throttled_periods'])) {
                $value_1 = $data['throttled_periods'];
            } elseif (null === $data['throttled_periods']) {
                $value_1 = $data['throttled_periods'];
            }
            $object->throttledPeriods = $value_1;
            unset($data['throttled_periods']);
        } elseif (array_key_exists('throttled_periods', $data)) {
            $object->throttledPeriods = null;
            unset($data['throttled_periods']);
        }
        if (array_key_exists('throttled_time', $data) && null !== $data['throttled_time']) {
            $value_2 = $data['throttled_time'];
            if (is_int($data['throttled_time'])) {
                $value_2 = $data['throttled_time'];
            } elseif (null === $data['throttled_time']) {
                $value_2 = $data['throttled_time'];
            }
            $object->throttledTime = $value_2;
            unset($data['throttled_time']);
        } elseif (array_key_exists('throttled_time', $data)) {
            $object->throttledTime = null;
            unset($data['throttled_time']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('periods', get_object_vars($data)) && null !== ($data->periods ?? null)) {
            $value = $data->periods;
            if (is_int($data->periods)) {
                $value = $data->periods;
            } elseif (null === $data->periods) {
                $value = $data->periods;
            }
            $dataArray['periods'] = $value;
        }
        if (array_key_exists('throttledPeriods', get_object_vars($data)) && null !== ($data->throttledPeriods ?? null)) {
            $value_1 = $data->throttledPeriods;
            if (is_int($data->throttledPeriods)) {
                $value_1 = $data->throttledPeriods;
            } elseif (null === $data->throttledPeriods) {
                $value_1 = $data->throttledPeriods;
            }
            $dataArray['throttled_periods'] = $value_1;
        }
        if (array_key_exists('throttledTime', get_object_vars($data)) && null !== ($data->throttledTime ?? null)) {
            $value_2 = $data->throttledTime;
            if (is_int($data->throttledTime)) {
                $value_2 = $data->throttledTime;
            } elseif (null === $data->throttledTime) {
                $value_2 = $data->throttledTime;
            }
            $dataArray['throttled_time'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
