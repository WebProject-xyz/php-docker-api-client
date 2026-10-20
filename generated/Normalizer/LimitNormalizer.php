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
            $object->nanoCPUs = $value;
            unset($data['NanoCPUs']);
        } elseif (array_key_exists('NanoCPUs', $data)) {
            $object->nanoCPUs = null;
            unset($data['NanoCPUs']);
        }
        if (array_key_exists('MemoryBytes', $data) && null !== $data['MemoryBytes']) {
            $value_1 = $data['MemoryBytes'];
            if (is_int($data['MemoryBytes'])) {
                $value_1 = $data['MemoryBytes'];
            } elseif (null === $data['MemoryBytes']) {
                $value_1 = $data['MemoryBytes'];
            }
            $object->memoryBytes = $value_1;
            unset($data['MemoryBytes']);
        } elseif (array_key_exists('MemoryBytes', $data)) {
            $object->memoryBytes = null;
            unset($data['MemoryBytes']);
        }
        if (array_key_exists('Pids', $data) && null !== $data['Pids']) {
            $value_2 = $data['Pids'];
            if (is_int($data['Pids'])) {
                $value_2 = $data['Pids'];
            } elseif (null === $data['Pids']) {
                $value_2 = $data['Pids'];
            }
            $object->pids = $value_2;
            unset($data['Pids']);
        } elseif (array_key_exists('Pids', $data)) {
            $object->pids = null;
            unset($data['Pids']);
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
        if (array_key_exists('nanoCPUs', get_object_vars($data)) && null !== ($data->nanoCPUs ?? null)) {
            $value = $data->nanoCPUs;
            if (is_int($data->nanoCPUs)) {
                $value = $data->nanoCPUs;
            } elseif (null === $data->nanoCPUs) {
                $value = $data->nanoCPUs;
            }
            $dataArray['NanoCPUs'] = $value;
        }
        if (array_key_exists('memoryBytes', get_object_vars($data)) && null !== ($data->memoryBytes ?? null)) {
            $value_1 = $data->memoryBytes;
            if (is_int($data->memoryBytes)) {
                $value_1 = $data->memoryBytes;
            } elseif (null === $data->memoryBytes) {
                $value_1 = $data->memoryBytes;
            }
            $dataArray['MemoryBytes'] = $value_1;
        }
        if (array_key_exists('pids', get_object_vars($data)) && null !== ($data->pids ?? null)) {
            $value_2 = $data->pids;
            if (is_int($data->pids)) {
                $value_2 = $data->pids;
            } elseif (null === $data->pids) {
                $value_2 = $data->pids;
            }
            $dataArray['Pids'] = $value_2;
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
        return [\WebProject\DockerApi\Library\Generated\Model\Limit::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
