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

class ResourceObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ResourceObject();
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
        if (array_key_exists('GenericResources', $data)) {
            $values = [];
            foreach ($data['GenericResources'] as $value_2) {
                $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->setGenericResources($values);
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
        if ($data->isInitialized('genericResources') && null !== $data->getGenericResources()) {
            $values = [];
            foreach ($data->getGenericResources() as $value_2) {
                $values[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['GenericResources'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ResourceObject::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
