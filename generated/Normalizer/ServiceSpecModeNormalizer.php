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
            $object->setReplicated($this->denormalizer->denormalize($data['Replicated'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicated::class, 'json', $context));
        } elseif (array_key_exists('Replicated', $data) && null === $data['Replicated']) {
            $object->setReplicated(null);
        }
        if (array_key_exists('Global', $data) && null !== $data['Global']) {
            $value = $data['Global'];
            if (null === $data['Global']) {
                $value = $data['Global'];
            } elseif (isset($data['Global'])) {
                $value = $data['Global'];
            }
            $object->setGlobal($value);
        } elseif (array_key_exists('Global', $data) && null === $data['Global']) {
            $object->setGlobal(null);
        }
        if (array_key_exists('ReplicatedJob', $data) && null !== $data['ReplicatedJob']) {
            $object->setReplicatedJob($this->denormalizer->denormalize($data['ReplicatedJob'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class, 'json', $context));
        } elseif (array_key_exists('ReplicatedJob', $data) && null === $data['ReplicatedJob']) {
            $object->setReplicatedJob(null);
        }
        if (array_key_exists('GlobalJob', $data) && null !== $data['GlobalJob']) {
            $value_1 = $data['GlobalJob'];
            if (null === $data['GlobalJob']) {
                $value_1 = $data['GlobalJob'];
            } elseif (isset($data['GlobalJob'])) {
                $value_1 = $data['GlobalJob'];
            }
            $object->setGlobalJob($value_1);
        } elseif (array_key_exists('GlobalJob', $data) && null === $data['GlobalJob']) {
            $object->setGlobalJob(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('replicated')) {
            $dataArray['Replicated'] = $this->normalizer->normalize($data->getReplicated(), 'json', $context);
        }
        if ($data->isInitialized('global')) {
            $value = $data->getGlobal();
            if (null === $data->getGlobal()) {
                $value = $data->getGlobal();
            } elseif (null !== $data->getGlobal()) {
                $value = $data->getGlobal();
            }
            $dataArray['Global'] = $value;
        }
        if ($data->isInitialized('replicatedJob')) {
            $dataArray['ReplicatedJob'] = $this->normalizer->normalize($data->getReplicatedJob(), 'json', $context);
        }
        if ($data->isInitialized('globalJob')) {
            $value_1 = $data->getGlobalJob();
            if (null === $data->getGlobalJob()) {
                $value_1 = $data->getGlobalJob();
            } elseif (null !== $data->getGlobalJob()) {
                $value_1 = $data->getGlobalJob();
            }
            $dataArray['GlobalJob'] = $value_1;
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
