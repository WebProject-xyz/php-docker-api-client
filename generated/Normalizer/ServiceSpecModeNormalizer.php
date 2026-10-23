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

class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Replicated', $data) && null !== $data['Replicated']) {
            $object->replicated = $this->denormalizer->denormalize($data['Replicated'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicated::class, 'json', $context);
            unset($data['Replicated']);
        } elseif (array_key_exists('Replicated', $data)) {
            $object->replicated = null;
            unset($data['Replicated']);
        }
        if (array_key_exists('Global', $data) && null !== $data['Global']) {
            $value = $data['Global'];
            if (null === $data['Global']) {
                $value = $data['Global'];
            } elseif (isset($data['Global'])) {
                $value = $data['Global'];
            }
            $object->global = $value;
            unset($data['Global']);
        } elseif (array_key_exists('Global', $data)) {
            $object->global = null;
            unset($data['Global']);
        }
        if (array_key_exists('ReplicatedJob', $data) && null !== $data['ReplicatedJob']) {
            $object->replicatedJob = $this->denormalizer->denormalize($data['ReplicatedJob'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class, 'json', $context);
            unset($data['ReplicatedJob']);
        } elseif (array_key_exists('ReplicatedJob', $data)) {
            $object->replicatedJob = null;
            unset($data['ReplicatedJob']);
        }
        if (array_key_exists('GlobalJob', $data) && null !== $data['GlobalJob']) {
            $value_1 = $data['GlobalJob'];
            if (null === $data['GlobalJob']) {
                $value_1 = $data['GlobalJob'];
            } elseif (isset($data['GlobalJob'])) {
                $value_1 = $data['GlobalJob'];
            }
            $object->globalJob = $value_1;
            unset($data['GlobalJob']);
        } elseif (array_key_exists('GlobalJob', $data)) {
            $object->globalJob = null;
            unset($data['GlobalJob']);
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
        if (array_key_exists('replicated', get_object_vars($data)) && null !== ($data->replicated ?? null)) {
            $normalized              = $this->normalizer->normalize($data->replicated, 'json', $context);
            $dataArray['Replicated'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('global', get_object_vars($data)) && null !== ($data->global ?? null)) {
            $value = $data->global;
            if (null === $data->global) {
                $value = $data->global;
            } elseif (null !== $data->global) {
                $value = $data->global;
            }
            $dataArray['Global'] = $value;
        }
        if (array_key_exists('replicatedJob', get_object_vars($data)) && null !== ($data->replicatedJob ?? null)) {
            $normalized_1               = $this->normalizer->normalize($data->replicatedJob, 'json', $context);
            $dataArray['ReplicatedJob'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('globalJob', get_object_vars($data)) && null !== ($data->globalJob ?? null)) {
            $value_1 = $data->globalJob;
            if (null === $data->globalJob) {
                $value_1 = $data->globalJob;
            } elseif (null !== $data->globalJob) {
                $value_1 = $data->globalJob;
            }
            $dataArray['GlobalJob'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
