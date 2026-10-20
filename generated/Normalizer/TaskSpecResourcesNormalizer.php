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

class TaskSpecResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Limits', $data)) {
            $object->limits = $this->denormalizer->denormalize($data['Limits'], \WebProject\DockerApi\Library\Generated\Model\Limit::class, 'json', $context);
            unset($data['Limits']);
        }
        if (array_key_exists('Reservations', $data)) {
            $object->reservations = $this->denormalizer->denormalize($data['Reservations'], \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class, 'json', $context);
            unset($data['Reservations']);
        }
        if (array_key_exists('SwapBytes', $data) && null !== $data['SwapBytes']) {
            $value = $data['SwapBytes'];
            if (is_int($data['SwapBytes'])) {
                $value = $data['SwapBytes'];
            } elseif (null === $data['SwapBytes']) {
                $value = $data['SwapBytes'];
            }
            $object->swapBytes = $value;
            unset($data['SwapBytes']);
        } elseif (array_key_exists('SwapBytes', $data)) {
            $object->swapBytes = null;
            unset($data['SwapBytes']);
        }
        if (array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
            $value_1 = $data['MemorySwappiness'];
            if (is_int($data['MemorySwappiness'])) {
                $value_1 = $data['MemorySwappiness'];
            } elseif (null === $data['MemorySwappiness']) {
                $value_1 = $data['MemorySwappiness'];
            }
            $object->memorySwappiness = $value_1;
            unset($data['MemorySwappiness']);
        } elseif (array_key_exists('MemorySwappiness', $data)) {
            $object->memorySwappiness = null;
            unset($data['MemorySwappiness']);
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
        if (array_key_exists('limits', get_object_vars($data)) && null !== ($data->limits ?? null)) {
            $normalized          = $this->normalizer->normalize($data->limits, 'json', $context);
            $dataArray['Limits'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('reservations', get_object_vars($data)) && null !== ($data->reservations ?? null)) {
            $normalized_1              = $this->normalizer->normalize($data->reservations, 'json', $context);
            $dataArray['Reservations'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('swapBytes', get_object_vars($data)) && null !== ($data->swapBytes ?? null)) {
            $value = $data->swapBytes;
            if (is_int($data->swapBytes)) {
                $value = $data->swapBytes;
            } elseif (null === $data->swapBytes) {
                $value = $data->swapBytes;
            }
            $dataArray['SwapBytes'] = $value;
        }
        if (array_key_exists('memorySwappiness', get_object_vars($data)) && null !== ($data->memorySwappiness ?? null)) {
            $value_1 = $data->memorySwappiness;
            if (is_int($data->memorySwappiness)) {
                $value_1 = $data->memorySwappiness;
            } elseif (null === $data->memorySwappiness) {
                $value_1 = $data->memorySwappiness;
            }
            $dataArray['MemorySwappiness'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
