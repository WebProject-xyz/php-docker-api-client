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
            $value = $data['Test'];
            if (is_array($data['Test']) && $this->isOnlyNumericKeys($data['Test'])) {
                $values = [];
                foreach ($data['Test'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['Test']) {
                $value = $data['Test'];
            }
            $object->setTest($value);
        } elseif (array_key_exists('Test', $data) && null === $data['Test']) {
            $object->setTest(null);
        }
        if (array_key_exists('Interval', $data) && null !== $data['Interval']) {
            $value_2 = $data['Interval'];
            if (is_int($data['Interval'])) {
                $value_2 = $data['Interval'];
            } elseif (null === $data['Interval']) {
                $value_2 = $data['Interval'];
            }
            $object->setInterval($value_2);
        } elseif (array_key_exists('Interval', $data) && null === $data['Interval']) {
            $object->setInterval(null);
        }
        if (array_key_exists('Timeout', $data) && null !== $data['Timeout']) {
            $value_3 = $data['Timeout'];
            if (is_int($data['Timeout'])) {
                $value_3 = $data['Timeout'];
            } elseif (null === $data['Timeout']) {
                $value_3 = $data['Timeout'];
            }
            $object->setTimeout($value_3);
        } elseif (array_key_exists('Timeout', $data) && null === $data['Timeout']) {
            $object->setTimeout(null);
        }
        if (array_key_exists('Retries', $data) && null !== $data['Retries']) {
            $value_4 = $data['Retries'];
            if (is_int($data['Retries'])) {
                $value_4 = $data['Retries'];
            } elseif (null === $data['Retries']) {
                $value_4 = $data['Retries'];
            }
            $object->setRetries($value_4);
        } elseif (array_key_exists('Retries', $data) && null === $data['Retries']) {
            $object->setRetries(null);
        }
        if (array_key_exists('StartPeriod', $data) && null !== $data['StartPeriod']) {
            $value_5 = $data['StartPeriod'];
            if (is_int($data['StartPeriod'])) {
                $value_5 = $data['StartPeriod'];
            } elseif (null === $data['StartPeriod']) {
                $value_5 = $data['StartPeriod'];
            }
            $object->setStartPeriod($value_5);
        } elseif (array_key_exists('StartPeriod', $data) && null === $data['StartPeriod']) {
            $object->setStartPeriod(null);
        }
        if (array_key_exists('StartInterval', $data) && null !== $data['StartInterval']) {
            $value_6 = $data['StartInterval'];
            if (is_int($data['StartInterval'])) {
                $value_6 = $data['StartInterval'];
            } elseif (null === $data['StartInterval']) {
                $value_6 = $data['StartInterval'];
            }
            $object->setStartInterval($value_6);
        } elseif (array_key_exists('StartInterval', $data) && null === $data['StartInterval']) {
            $object->setStartInterval(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('test')) {
            $value = $data->getTest();
            if (is_array($data->getTest())) {
                $values = [];
                foreach ($data->getTest() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->getTest()) {
                $value = $data->getTest();
            }
            $dataArray['Test'] = $value;
        }
        if ($data->isInitialized('interval')) {
            $value_2 = $data->getInterval();
            if (is_int($data->getInterval())) {
                $value_2 = $data->getInterval();
            } elseif (null === $data->getInterval()) {
                $value_2 = $data->getInterval();
            }
            $dataArray['Interval'] = $value_2;
        }
        if ($data->isInitialized('timeout')) {
            $value_3 = $data->getTimeout();
            if (is_int($data->getTimeout())) {
                $value_3 = $data->getTimeout();
            } elseif (null === $data->getTimeout()) {
                $value_3 = $data->getTimeout();
            }
            $dataArray['Timeout'] = $value_3;
        }
        if ($data->isInitialized('retries')) {
            $value_4 = $data->getRetries();
            if (is_int($data->getRetries())) {
                $value_4 = $data->getRetries();
            } elseif (null === $data->getRetries()) {
                $value_4 = $data->getRetries();
            }
            $dataArray['Retries'] = $value_4;
        }
        if ($data->isInitialized('startPeriod')) {
            $value_5 = $data->getStartPeriod();
            if (is_int($data->getStartPeriod())) {
                $value_5 = $data->getStartPeriod();
            } elseif (null === $data->getStartPeriod()) {
                $value_5 = $data->getStartPeriod();
            }
            $dataArray['StartPeriod'] = $value_5;
        }
        if ($data->isInitialized('startInterval')) {
            $value_6 = $data->getStartInterval();
            if (is_int($data->getStartInterval())) {
                $value_6 = $data->getStartInterval();
            } elseif (null === $data->getStartInterval()) {
                $value_6 = $data->getStartInterval();
            }
            $dataArray['StartInterval'] = $value_6;
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
