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
            $object->setMaxConcurrent($value);
        } elseif (array_key_exists('MaxConcurrent', $data) && null === $data['MaxConcurrent']) {
            $object->setMaxConcurrent(null);
        }
        if (array_key_exists('TotalCompletions', $data) && null !== $data['TotalCompletions']) {
            $value_1 = $data['TotalCompletions'];
            if (is_int($data['TotalCompletions'])) {
                $value_1 = $data['TotalCompletions'];
            } elseif (null === $data['TotalCompletions']) {
                $value_1 = $data['TotalCompletions'];
            }
            $object->setTotalCompletions($value_1);
        } elseif (array_key_exists('TotalCompletions', $data) && null === $data['TotalCompletions']) {
            $object->setTotalCompletions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('maxConcurrent')) {
            $value = $data->getMaxConcurrent();
            if (is_int($data->getMaxConcurrent())) {
                $value = $data->getMaxConcurrent();
            } elseif (null === $data->getMaxConcurrent()) {
                $value = $data->getMaxConcurrent();
            }
            $dataArray['MaxConcurrent'] = $value;
        }
        if ($data->isInitialized('totalCompletions')) {
            $value_1 = $data->getTotalCompletions();
            if (is_int($data->getTotalCompletions())) {
                $value_1 = $data->getTotalCompletions();
            } elseif (null === $data->getTotalCompletions()) {
                $value_1 = $data->getTotalCompletions();
            }
            $dataArray['TotalCompletions'] = $value_1;
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
