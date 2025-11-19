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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Replicated', $data)) {
            $object->setReplicated($this->denormalizer->denormalize($data['Replicated'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicated::class, 'json', $context));
            unset($data['Replicated']);
        }
        if (array_key_exists('Global', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Global'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setGlobal($values);
            unset($data['Global']);
        }
        if (array_key_exists('ReplicatedJob', $data)) {
            $object->setReplicatedJob($this->denormalizer->denormalize($data['ReplicatedJob'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class, 'json', $context));
            unset($data['ReplicatedJob']);
        }
        if (array_key_exists('GlobalJob', $data)) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['GlobalJob'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setGlobalJob($values_1);
            unset($data['GlobalJob']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('replicated') && null !== $data->getReplicated()) {
            $dataArray['Replicated'] = $this->normalizer->normalize($data->getReplicated(), 'json', $context);
        }
        if ($data->isInitialized('global') && null !== $data->getGlobal()) {
            $values = [];
            foreach ($data->getGlobal() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Global'] = $values;
        }
        if ($data->isInitialized('replicatedJob') && null !== $data->getReplicatedJob()) {
            $dataArray['ReplicatedJob'] = $this->normalizer->normalize($data->getReplicatedJob(), 'json', $context);
        }
        if ($data->isInitialized('globalJob') && null !== $data->getGlobalJob()) {
            $values_1 = [];
            foreach ($data->getGlobalJob() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['GlobalJob'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
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
