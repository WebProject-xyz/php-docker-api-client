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
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('mediaType', $data) && null !== $data['mediaType']) {
            $value = $data['mediaType'];
            if (is_string($data['mediaType'])) {
                $value = $data['mediaType'];
            } elseif (null === $data['mediaType']) {
                $value = $data['mediaType'];
            }
            $object->setMediaType($value);
        } elseif (array_key_exists('mediaType', $data) && null === $data['mediaType']) {
            $object->setMediaType(null);
        }
        if (array_key_exists('digest', $data) && null !== $data['digest']) {
            $value_1 = $data['digest'];
            if (is_string($data['digest'])) {
                $value_1 = $data['digest'];
            } elseif (null === $data['digest']) {
                $value_1 = $data['digest'];
            }
            $object->setDigest($value_1);
        } elseif (array_key_exists('digest', $data) && null === $data['digest']) {
            $object->setDigest(null);
        }
        if (array_key_exists('size', $data) && null !== $data['size']) {
            $value_2 = $data['size'];
            if (is_int($data['size'])) {
                $value_2 = $data['size'];
            } elseif (null === $data['size']) {
                $value_2 = $data['size'];
            }
            $object->setSize($value_2);
        } elseif (array_key_exists('size', $data) && null === $data['size']) {
            $object->setSize(null);
        }
        if (array_key_exists('urls', $data) && null !== $data['urls']) {
            $value_3 = $data['urls'];
            if (is_array($data['urls']) && $this->isOnlyNumericKeys($data['urls'])) {
                $values = [];
                foreach ($data['urls'] as $value_4) {
                    $values[] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data['urls']) {
                $value_3 = $data['urls'];
            }
            $object->setUrls($value_3);
        } elseif (array_key_exists('urls', $data) && null === $data['urls']) {
            $object->setUrls(null);
        }
        if (array_key_exists('annotations', $data) && null !== $data['annotations']) {
            $value_5 = $data['annotations'];
            if (is_array($data['annotations']) && $this->isOnlyNumericKeys($data['annotations'])) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['annotations'] as $key => $value_6) {
                    $values_1[$key] = $value_6;
                }
                $value_5 = $values_1;
            } elseif (null === $data['annotations']) {
                $value_5 = $data['annotations'];
            }
            $object->setAnnotations($value_5);
        } elseif (array_key_exists('annotations', $data) && null === $data['annotations']) {
            $object->setAnnotations(null);
        }
        if (array_key_exists('data', $data) && null !== $data['data']) {
            $value_7 = $data['data'];
            if (is_string($data['data'])) {
                $value_7 = $data['data'];
            } elseif (null === $data['data']) {
                $value_7 = $data['data'];
            }
            $object->setData($value_7);
        } elseif (array_key_exists('data', $data) && null === $data['data']) {
            $object->setData(null);
        }
        if (array_key_exists('platform', $data) && null !== $data['platform']) {
            $object->setPlatform($this->denormalizer->denormalize($data['platform'], \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class, 'json', $context));
        } elseif (array_key_exists('platform', $data) && null === $data['platform']) {
            $object->setPlatform(null);
        }
        if (array_key_exists('artifactType', $data) && null !== $data['artifactType']) {
            $value_8 = $data['artifactType'];
            if (is_string($data['artifactType'])) {
                $value_8 = $data['artifactType'];
            } elseif (null === $data['artifactType']) {
                $value_8 = $data['artifactType'];
            }
            $object->setArtifactType($value_8);
        } elseif (array_key_exists('artifactType', $data) && null === $data['artifactType']) {
            $object->setArtifactType(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('mediaType')) {
            $value = $data->getMediaType();
            if (is_string($data->getMediaType())) {
                $value = $data->getMediaType();
            } elseif (null === $data->getMediaType()) {
                $value = $data->getMediaType();
            }
            $dataArray['mediaType'] = $value;
        }
        if ($data->isInitialized('digest')) {
            $value_1 = $data->getDigest();
            if (is_string($data->getDigest())) {
                $value_1 = $data->getDigest();
            } elseif (null === $data->getDigest()) {
                $value_1 = $data->getDigest();
            }
            $dataArray['digest'] = $value_1;
        }
        if ($data->isInitialized('size')) {
            $value_2 = $data->getSize();
            if (is_int($data->getSize())) {
                $value_2 = $data->getSize();
            } elseif (null === $data->getSize()) {
                $value_2 = $data->getSize();
            }
            $dataArray['size'] = $value_2;
        }
        if ($data->isInitialized('urls')) {
            $value_3 = $data->getUrls();
            if (is_array($data->getUrls())) {
                $values = [];
                foreach ($data->getUrls() as $value_4) {
                    $values[] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data->getUrls()) {
                $value_3 = $data->getUrls();
            }
            $dataArray['urls'] = $value_3;
        }
        if ($data->isInitialized('annotations')) {
            $value_5 = $data->getAnnotations();
            if (is_object($data->getAnnotations())) {
                $values_1 = [];
                foreach ($data->getAnnotations() as $key => $value_6) {
                    $values_1[$key] = $value_6;
                }
                $value_5 = $values_1;
            } elseif (null === $data->getAnnotations()) {
                $value_5 = $data->getAnnotations();
            }
            $dataArray['annotations'] = $value_5;
        }
        if ($data->isInitialized('data')) {
            $value_7 = $data->getData();
            if (is_string($data->getData())) {
                $value_7 = $data->getData();
            } elseif (null === $data->getData()) {
                $value_7 = $data->getData();
            }
            $dataArray['data'] = $value_7;
        }
        if ($data->isInitialized('platform')) {
            $dataArray['platform'] = $this->normalizer->normalize($data->getPlatform(), 'json', $context);
        }
        if ($data->isInitialized('artifactType')) {
            $value_8 = $data->getArtifactType();
            if (is_string($data->getArtifactType())) {
                $value_8 = $data->getArtifactType();
            } elseif (null === $data->getArtifactType()) {
                $value_8 = $data->getArtifactType();
            }
            $dataArray['artifactType'] = $value_8;
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
