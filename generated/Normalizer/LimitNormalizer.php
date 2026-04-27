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

class LimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Limit::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Limit::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Limit();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('NanoCPUs', $data) && null !== $data['NanoCPUs']) {
            $value = $data['NanoCPUs'];
            if (is_int($data['NanoCPUs'])) {
                $value = $data['NanoCPUs'];
            } elseif (null === $data['NanoCPUs']) {
                $value = $data['NanoCPUs'];
            }
            $object->setNanoCPUs($value);
        } elseif (array_key_exists('NanoCPUs', $data) && null === $data['NanoCPUs']) {
            $object->setNanoCPUs(null);
        }
        if (array_key_exists('MemoryBytes', $data) && null !== $data['MemoryBytes']) {
            $value_1 = $data['MemoryBytes'];
            if (is_int($data['MemoryBytes'])) {
                $value_1 = $data['MemoryBytes'];
            } elseif (null === $data['MemoryBytes']) {
                $value_1 = $data['MemoryBytes'];
            }
            $object->setMemoryBytes($value_1);
        } elseif (array_key_exists('MemoryBytes', $data) && null === $data['MemoryBytes']) {
            $object->setMemoryBytes(null);
        }
        if (array_key_exists('Pids', $data) && null !== $data['Pids']) {
            $value_2 = $data['Pids'];
            if (is_int($data['Pids'])) {
                $value_2 = $data['Pids'];
            } elseif (null === $data['Pids']) {
                $value_2 = $data['Pids'];
            }
            $object->setPids($value_2);
        } elseif (array_key_exists('Pids', $data) && null === $data['Pids']) {
            $object->setPids(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('nanoCPUs')) {
            $value = $data->getNanoCPUs();
            if (is_int($data->getNanoCPUs())) {
                $value = $data->getNanoCPUs();
            } elseif (null === $data->getNanoCPUs()) {
                $value = $data->getNanoCPUs();
            }
            $dataArray['NanoCPUs'] = $value;
        }
        if ($data->isInitialized('memoryBytes')) {
            $value_1 = $data->getMemoryBytes();
            if (is_int($data->getMemoryBytes())) {
                $value_1 = $data->getMemoryBytes();
            } elseif (null === $data->getMemoryBytes()) {
                $value_1 = $data->getMemoryBytes();
            }
            $dataArray['MemoryBytes'] = $value_1;
        }
        if ($data->isInitialized('pids')) {
            $value_2 = $data->getPids();
            if (is_int($data->getPids())) {
                $value_2 = $data->getPids();
            } elseif (null === $data->getPids()) {
                $value_2 = $data->getPids();
            }
            $dataArray['Pids'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Limit::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
