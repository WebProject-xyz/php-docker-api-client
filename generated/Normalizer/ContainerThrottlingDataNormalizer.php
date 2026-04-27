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
            $object->setPeriods($value);
        } elseif (array_key_exists('periods', $data) && null === $data['periods']) {
            $object->setPeriods(null);
        }
        if (array_key_exists('throttled_periods', $data) && null !== $data['throttled_periods']) {
            $value_1 = $data['throttled_periods'];
            if (is_int($data['throttled_periods'])) {
                $value_1 = $data['throttled_periods'];
            } elseif (null === $data['throttled_periods']) {
                $value_1 = $data['throttled_periods'];
            }
            $object->setThrottledPeriods($value_1);
        } elseif (array_key_exists('throttled_periods', $data) && null === $data['throttled_periods']) {
            $object->setThrottledPeriods(null);
        }
        if (array_key_exists('throttled_time', $data) && null !== $data['throttled_time']) {
            $value_2 = $data['throttled_time'];
            if (is_int($data['throttled_time'])) {
                $value_2 = $data['throttled_time'];
            } elseif (null === $data['throttled_time']) {
                $value_2 = $data['throttled_time'];
            }
            $object->setThrottledTime($value_2);
        } elseif (array_key_exists('throttled_time', $data) && null === $data['throttled_time']) {
            $object->setThrottledTime(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('periods')) {
            $value = $data->getPeriods();
            if (is_int($data->getPeriods())) {
                $value = $data->getPeriods();
            } elseif (null === $data->getPeriods()) {
                $value = $data->getPeriods();
            }
            $dataArray['periods'] = $value;
        }
        if ($data->isInitialized('throttledPeriods')) {
            $value_1 = $data->getThrottledPeriods();
            if (is_int($data->getThrottledPeriods())) {
                $value_1 = $data->getThrottledPeriods();
            } elseif (null === $data->getThrottledPeriods()) {
                $value_1 = $data->getThrottledPeriods();
            }
            $dataArray['throttled_periods'] = $value_1;
        }
        if ($data->isInitialized('throttledTime')) {
            $value_2 = $data->getThrottledTime();
            if (is_int($data->getThrottledTime())) {
                $value_2 = $data->getThrottledTime();
            } elseif (null === $data->getThrottledTime()) {
                $value_2 = $data->getThrottledTime();
            }
            $dataArray['throttled_time'] = $value_2;
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
