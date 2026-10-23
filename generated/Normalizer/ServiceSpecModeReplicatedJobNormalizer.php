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

class ServiceSpecModeReplicatedJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('MaxConcurrent', $data) && null !== $data['MaxConcurrent']) {
            $value = $data['MaxConcurrent'];
            if (is_int($data['MaxConcurrent'])) {
                $value = $data['MaxConcurrent'];
            } elseif (null === $data['MaxConcurrent']) {
                $value = $data['MaxConcurrent'];
            }
            $object->maxConcurrent = $value;
            unset($data['MaxConcurrent']);
        } elseif (array_key_exists('MaxConcurrent', $data)) {
            $object->maxConcurrent = null;
            unset($data['MaxConcurrent']);
        }
        if (array_key_exists('TotalCompletions', $data) && null !== $data['TotalCompletions']) {
            $value_1 = $data['TotalCompletions'];
            if (is_int($data['TotalCompletions'])) {
                $value_1 = $data['TotalCompletions'];
            } elseif (null === $data['TotalCompletions']) {
                $value_1 = $data['TotalCompletions'];
            }
            $object->totalCompletions = $value_1;
            unset($data['TotalCompletions']);
        } elseif (array_key_exists('TotalCompletions', $data)) {
            $object->totalCompletions = null;
            unset($data['TotalCompletions']);
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
        if (array_key_exists('maxConcurrent', get_object_vars($data)) && null !== ($data->maxConcurrent ?? null)) {
            $value = $data->maxConcurrent;
            if (is_int($data->maxConcurrent)) {
                $value = $data->maxConcurrent;
            } elseif (null === $data->maxConcurrent) {
                $value = $data->maxConcurrent;
            }
            $dataArray['MaxConcurrent'] = $value;
        }
        if (array_key_exists('totalCompletions', get_object_vars($data)) && null !== ($data->totalCompletions ?? null)) {
            $value_1 = $data->totalCompletions;
            if (is_int($data->totalCompletions)) {
                $value_1 = $data->totalCompletions;
            } elseif (null === $data->totalCompletions) {
                $value_1 = $data->totalCompletions;
            }
            $dataArray['TotalCompletions'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
