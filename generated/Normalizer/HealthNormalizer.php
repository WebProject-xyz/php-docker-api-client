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
            $object->status = $value;
            unset($data['Status']);
        } elseif (array_key_exists('Status', $data)) {
            $object->status = null;
            unset($data['Status']);
        }
        if (array_key_exists('FailingStreak', $data) && null !== $data['FailingStreak']) {
            $value_1 = $data['FailingStreak'];
            if (is_int($data['FailingStreak'])) {
                $value_1 = $data['FailingStreak'];
            } elseif (null === $data['FailingStreak']) {
                $value_1 = $data['FailingStreak'];
            }
            $object->failingStreak = $value_1;
            unset($data['FailingStreak']);
        } elseif (array_key_exists('FailingStreak', $data)) {
            $object->failingStreak = null;
            unset($data['FailingStreak']);
        }
        if (array_key_exists('Log', $data) && null !== $data['Log']) {
            $values = [];
            foreach ($data['Log'] as $value_2) {
                $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class, 'json', $context);
            }
            $object->log = $values;
            unset($data['Log']);
        } elseif (array_key_exists('Log', $data)) {
            $object->log = null;
            unset($data['Log']);
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
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $value = $data->status;
            if (is_string($data->status)) {
                $value = $data->status;
            } elseif (null === $data->status) {
                $value = $data->status;
            }
            $dataArray['Status'] = $value;
        }
        if (array_key_exists('failingStreak', get_object_vars($data)) && null !== ($data->failingStreak ?? null)) {
            $value_1 = $data->failingStreak;
            if (is_int($data->failingStreak)) {
                $value_1 = $data->failingStreak;
            } elseif (null === $data->failingStreak) {
                $value_1 = $data->failingStreak;
            }
            $dataArray['FailingStreak'] = $value_1;
        }
        if (array_key_exists('log', get_object_vars($data)) && null !== ($data->log ?? null)) {
            $values = [];
            foreach ($data->log as $value_2) {
                $normalized = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['Log'] = $values;
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
        return [\WebProject\DockerApi\Library\Generated\Model\Health::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
