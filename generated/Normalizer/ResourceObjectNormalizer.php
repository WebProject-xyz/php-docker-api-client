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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ResourceObject();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ResourceObjectConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('NanoCPUs', $data)) {
            $object->setNanoCPUs($data['NanoCPUs']);
            unset($data['NanoCPUs']);
        }
        if (array_key_exists('MemoryBytes', $data)) {
            $object->setMemoryBytes($data['MemoryBytes']);
            unset($data['MemoryBytes']);
        }
        if (array_key_exists('GenericResources', $data)) {
            $values = [];
            foreach ($data['GenericResources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->setGenericResources($values);
            unset($data['GenericResources']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('nanoCPUs') && null !== $data->getNanoCPUs()) {
            $dataArray['NanoCPUs'] = $data->getNanoCPUs();
        }
        if ($data->isInitialized('memoryBytes') && null !== $data->getMemoryBytes()) {
            $dataArray['MemoryBytes'] = $data->getMemoryBytes();
        }
        if ($data->isInitialized('genericResources') && null !== $data->getGenericResources()) {
            $values = [];
            foreach ($data->getGenericResources() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['GenericResources'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ResourceObjectConstraint());
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
