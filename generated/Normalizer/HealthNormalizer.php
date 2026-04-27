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

class HealthNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Health::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Health::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Health();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Status', $data) && null !== $data['Status']) {
            $value = $data['Status'];
            if (is_string($data['Status'])) {
                $value = $data['Status'];
            } elseif (null === $data['Status']) {
                $value = $data['Status'];
            }
            $object->setStatus($value);
        } elseif (array_key_exists('Status', $data) && null === $data['Status']) {
            $object->setStatus(null);
        }
        if (array_key_exists('FailingStreak', $data) && null !== $data['FailingStreak']) {
            $value_1 = $data['FailingStreak'];
            if (is_int($data['FailingStreak'])) {
                $value_1 = $data['FailingStreak'];
            } elseif (null === $data['FailingStreak']) {
                $value_1 = $data['FailingStreak'];
            }
            $object->setFailingStreak($value_1);
        } elseif (array_key_exists('FailingStreak', $data) && null === $data['FailingStreak']) {
            $object->setFailingStreak(null);
        }
        if (array_key_exists('Log', $data) && null !== $data['Log']) {
            $value_2 = $data['Log'];
            if (is_array($data['Log']) && $this->isOnlyNumericKeys($data['Log'])) {
                $values = [];
                foreach ($data['Log'] as $value_3) {
                    $values[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class, 'json', $context);
                }
                $value_2 = $values;
            } elseif (null === $data['Log']) {
                $value_2 = $data['Log'];
            }
            $object->setLog($value_2);
        } elseif (array_key_exists('Log', $data) && null === $data['Log']) {
            $object->setLog(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('status')) {
            $value = $data->getStatus();
            if (is_string($data->getStatus())) {
                $value = $data->getStatus();
            } elseif (null === $data->getStatus()) {
                $value = $data->getStatus();
            }
            $dataArray['Status'] = $value;
        }
        if ($data->isInitialized('failingStreak')) {
            $value_1 = $data->getFailingStreak();
            if (is_int($data->getFailingStreak())) {
                $value_1 = $data->getFailingStreak();
            } elseif (null === $data->getFailingStreak()) {
                $value_1 = $data->getFailingStreak();
            }
            $dataArray['FailingStreak'] = $value_1;
        }
        if ($data->isInitialized('log')) {
            $value_2 = $data->getLog();
            if (is_array($data->getLog())) {
                $values = [];
                foreach ($data->getLog() as $value_3) {
                    $values[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $value_2 = $values;
            } elseif (null === $data->getLog()) {
                $value_2 = $data->getLog();
            }
            $dataArray['Log'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Health::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
