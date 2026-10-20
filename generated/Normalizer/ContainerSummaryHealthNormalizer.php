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

class ContainerSummaryHealthNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHealth::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHealth::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHealth();
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
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHealth::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
