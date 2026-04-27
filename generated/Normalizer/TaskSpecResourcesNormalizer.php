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
            $object->setLimits($this->denormalizer->denormalize($data['Limits'], \WebProject\DockerApi\Library\Generated\Model\Limit::class, 'json', $context));
        }
        if (array_key_exists('Reservations', $data)) {
            $object->setReservations($this->denormalizer->denormalize($data['Reservations'], \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class, 'json', $context));
        }
        if (array_key_exists('SwapBytes', $data) && null !== $data['SwapBytes']) {
            $value = $data['SwapBytes'];
            if (is_int($data['SwapBytes'])) {
                $value = $data['SwapBytes'];
            } elseif (null === $data['SwapBytes']) {
                $value = $data['SwapBytes'];
            }
            $object->setSwapBytes($value);
        } elseif (array_key_exists('SwapBytes', $data) && null === $data['SwapBytes']) {
            $object->setSwapBytes(null);
        }
        if (array_key_exists('MemorySwappiness', $data) && null !== $data['MemorySwappiness']) {
            $value_1 = $data['MemorySwappiness'];
            if (is_int($data['MemorySwappiness'])) {
                $value_1 = $data['MemorySwappiness'];
            } elseif (null === $data['MemorySwappiness']) {
                $value_1 = $data['MemorySwappiness'];
            }
            $object->setMemorySwappiness($value_1);
        } elseif (array_key_exists('MemorySwappiness', $data) && null === $data['MemorySwappiness']) {
            $object->setMemorySwappiness(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('limits') && null !== $data->getLimits()) {
            $dataArray['Limits'] = $this->normalizer->normalize($data->getLimits(), 'json', $context);
        }
        if ($data->isInitialized('reservations') && null !== $data->getReservations()) {
            $dataArray['Reservations'] = $this->normalizer->normalize($data->getReservations(), 'json', $context);
        }
        if ($data->isInitialized('swapBytes')) {
            $value = $data->getSwapBytes();
            if (is_int($data->getSwapBytes())) {
                $value = $data->getSwapBytes();
            } elseif (null === $data->getSwapBytes()) {
                $value = $data->getSwapBytes();
            }
            $dataArray['SwapBytes'] = $value;
        }
        if ($data->isInitialized('memorySwappiness')) {
            $value_1 = $data->getMemorySwappiness();
            if (is_int($data->getMemorySwappiness())) {
                $value_1 = $data->getMemorySwappiness();
            } elseif (null === $data->getMemorySwappiness()) {
                $value_1 = $data->getMemorySwappiness();
            }
            $dataArray['MemorySwappiness'] = $value_1;
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
