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

class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\HealthConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Test', $data) && null !== $data['Test']) {
            $values = [];
            foreach ($data['Test'] as $value) {
                $values[] = $value;
            }
            $object->test = $values;
            unset($data['Test']);
        } elseif (array_key_exists('Test', $data)) {
            $object->test = null;
            unset($data['Test']);
        }
        if (array_key_exists('Interval', $data) && null !== $data['Interval']) {
            $value_1 = $data['Interval'];
            if (is_int($data['Interval'])) {
                $value_1 = $data['Interval'];
            } elseif (null === $data['Interval']) {
                $value_1 = $data['Interval'];
            }
            $object->interval = $value_1;
            unset($data['Interval']);
        } elseif (array_key_exists('Interval', $data)) {
            $object->interval = null;
            unset($data['Interval']);
        }
        if (array_key_exists('Timeout', $data) && null !== $data['Timeout']) {
            $value_2 = $data['Timeout'];
            if (is_int($data['Timeout'])) {
                $value_2 = $data['Timeout'];
            } elseif (null === $data['Timeout']) {
                $value_2 = $data['Timeout'];
            }
            $object->timeout = $value_2;
            unset($data['Timeout']);
        } elseif (array_key_exists('Timeout', $data)) {
            $object->timeout = null;
            unset($data['Timeout']);
        }
        if (array_key_exists('Retries', $data) && null !== $data['Retries']) {
            $value_3 = $data['Retries'];
            if (is_int($data['Retries'])) {
                $value_3 = $data['Retries'];
            } elseif (null === $data['Retries']) {
                $value_3 = $data['Retries'];
            }
            $object->retries = $value_3;
            unset($data['Retries']);
        } elseif (array_key_exists('Retries', $data)) {
            $object->retries = null;
            unset($data['Retries']);
        }
        if (array_key_exists('StartPeriod', $data) && null !== $data['StartPeriod']) {
            $value_4 = $data['StartPeriod'];
            if (is_int($data['StartPeriod'])) {
                $value_4 = $data['StartPeriod'];
            } elseif (null === $data['StartPeriod']) {
                $value_4 = $data['StartPeriod'];
            }
            $object->startPeriod = $value_4;
            unset($data['StartPeriod']);
        } elseif (array_key_exists('StartPeriod', $data)) {
            $object->startPeriod = null;
            unset($data['StartPeriod']);
        }
        if (array_key_exists('StartInterval', $data) && null !== $data['StartInterval']) {
            $value_5 = $data['StartInterval'];
            if (is_int($data['StartInterval'])) {
                $value_5 = $data['StartInterval'];
            } elseif (null === $data['StartInterval']) {
                $value_5 = $data['StartInterval'];
            }
            $object->startInterval = $value_5;
            unset($data['StartInterval']);
        } elseif (array_key_exists('StartInterval', $data)) {
            $object->startInterval = null;
            unset($data['StartInterval']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('test', get_object_vars($data)) && null !== ($data->test ?? null)) {
            $values = [];
            foreach ($data->test as $value) {
                $values[] = $value;
            }
            $dataArray['Test'] = $values;
        }
        if (array_key_exists('interval', get_object_vars($data)) && null !== ($data->interval ?? null)) {
            $value_1 = $data->interval;
            if (is_int($data->interval)) {
                $value_1 = $data->interval;
            } elseif (null === $data->interval) {
                $value_1 = $data->interval;
            }
            $dataArray['Interval'] = $value_1;
        }
        if (array_key_exists('timeout', get_object_vars($data)) && null !== ($data->timeout ?? null)) {
            $value_2 = $data->timeout;
            if (is_int($data->timeout)) {
                $value_2 = $data->timeout;
            } elseif (null === $data->timeout) {
                $value_2 = $data->timeout;
            }
            $dataArray['Timeout'] = $value_2;
        }
        if (array_key_exists('retries', get_object_vars($data)) && null !== ($data->retries ?? null)) {
            $value_3 = $data->retries;
            if (is_int($data->retries)) {
                $value_3 = $data->retries;
            } elseif (null === $data->retries) {
                $value_3 = $data->retries;
            }
            $dataArray['Retries'] = $value_3;
        }
        if (array_key_exists('startPeriod', get_object_vars($data)) && null !== ($data->startPeriod ?? null)) {
            $value_4 = $data->startPeriod;
            if (is_int($data->startPeriod)) {
                $value_4 = $data->startPeriod;
            } elseif (null === $data->startPeriod) {
                $value_4 = $data->startPeriod;
            }
            $dataArray['StartPeriod'] = $value_4;
        }
        if (array_key_exists('startInterval', get_object_vars($data)) && null !== ($data->startInterval ?? null)) {
            $value_5 = $data->startInterval;
            if (is_int($data->startInterval)) {
                $value_5 = $data->startInterval;
            } elseif (null === $data->startInterval) {
                $value_5 = $data->startInterval;
            }
            $dataArray['StartInterval'] = $value_5;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\HealthConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
