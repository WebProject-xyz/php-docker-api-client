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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\HealthConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Test', $data)) {
            $values = [];
            foreach ($data['Test'] as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
            unset($data['Test']);
        }
        if (array_key_exists('Interval', $data)) {
            $object->setInterval($data['Interval']);
            unset($data['Interval']);
        }
        if (array_key_exists('Timeout', $data)) {
            $object->setTimeout($data['Timeout']);
            unset($data['Timeout']);
        }
        if (array_key_exists('Retries', $data)) {
            $object->setRetries($data['Retries']);
            unset($data['Retries']);
        }
        if (array_key_exists('StartPeriod', $data)) {
            $object->setStartPeriod($data['StartPeriod']);
            unset($data['StartPeriod']);
        }
        if (array_key_exists('StartInterval', $data)) {
            $object->setStartInterval($data['StartInterval']);
            unset($data['StartInterval']);
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
        if ($data->isInitialized('test') && null !== $data->getTest()) {
            $values = [];
            foreach ($data->getTest() as $value) {
                $values[] = $value;
            }
            $dataArray['Test'] = $values;
        }
        if ($data->isInitialized('interval') && null !== $data->getInterval()) {
            $dataArray['Interval'] = $data->getInterval();
        }
        if ($data->isInitialized('timeout') && null !== $data->getTimeout()) {
            $dataArray['Timeout'] = $data->getTimeout();
        }
        if ($data->isInitialized('retries') && null !== $data->getRetries()) {
            $dataArray['Retries'] = $data->getRetries();
        }
        if ($data->isInitialized('startPeriod') && null !== $data->getStartPeriod()) {
            $dataArray['StartPeriod'] = $data->getStartPeriod();
        }
        if ($data->isInitialized('startInterval') && null !== $data->getStartInterval()) {
            $dataArray['StartInterval'] = $data->getStartInterval();
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
        return [\WebProject\DockerApi\Library\Generated\Model\HealthConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
