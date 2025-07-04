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

class OCIDescriptorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('mediaType', $data)) {
            $object->setMediaType($data['mediaType']);
            unset($data['mediaType']);
        }
        if (array_key_exists('digest', $data)) {
            $object->setDigest($data['digest']);
            unset($data['digest']);
        }
        if (array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (array_key_exists('urls', $data) && null !== $data['urls']) {
            $values = [];
            foreach ($data['urls'] as $value) {
                $values[] = $value;
            }
            $object->setUrls($values);
            unset($data['urls']);
        } elseif (array_key_exists('urls', $data) && null === $data['urls']) {
            $object->setUrls(null);
        }
        if (array_key_exists('annotations', $data) && null !== $data['annotations']) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['annotations'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setAnnotations($values_1);
            unset($data['annotations']);
        } elseif (array_key_exists('annotations', $data) && null === $data['annotations']) {
            $object->setAnnotations(null);
        }
        if (array_key_exists('data', $data) && null !== $data['data']) {
            $object->setData($data['data']);
            unset($data['data']);
        } elseif (array_key_exists('data', $data) && null === $data['data']) {
            $object->setData(null);
        }
        if (array_key_exists('platform', $data) && null !== $data['platform']) {
            $object->setPlatform($this->denormalizer->denormalize($data['platform'], \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class, 'json', $context));
            unset($data['platform']);
        } elseif (array_key_exists('platform', $data) && null === $data['platform']) {
            $object->setPlatform(null);
        }
        if (array_key_exists('artifactType', $data) && null !== $data['artifactType']) {
            $object->setArtifactType($data['artifactType']);
            unset($data['artifactType']);
        } elseif (array_key_exists('artifactType', $data) && null === $data['artifactType']) {
            $object->setArtifactType(null);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('mediaType') && null !== $data->getMediaType()) {
            $dataArray['mediaType'] = $data->getMediaType();
        }
        if ($data->isInitialized('digest') && null !== $data->getDigest()) {
            $dataArray['digest'] = $data->getDigest();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('urls') && null !== $data->getUrls()) {
            $values = [];
            foreach ($data->getUrls() as $value) {
                $values[] = $value;
            }
            $dataArray['urls'] = $values;
        }
        if ($data->isInitialized('annotations') && null !== $data->getAnnotations()) {
            $values_1 = [];
            foreach ($data->getAnnotations() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['annotations'] = $values_1;
        }
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $dataArray['data'] = $data->getData();
        }
        if ($data->isInitialized('platform') && null !== $data->getPlatform()) {
            $dataArray['platform'] = $this->normalizer->normalize($data->getPlatform(), 'json', $context);
        }
        if ($data->isInitialized('artifactType') && null !== $data->getArtifactType()) {
            $dataArray['artifactType'] = $data->getArtifactType();
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
