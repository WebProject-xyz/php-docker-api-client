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
            $object->mediaType = $value;
            unset($data['mediaType']);
        } elseif (array_key_exists('mediaType', $data)) {
            $object->mediaType = null;
            unset($data['mediaType']);
        }
        if (array_key_exists('digest', $data) && null !== $data['digest']) {
            $value_1 = $data['digest'];
            if (is_string($data['digest'])) {
                $value_1 = $data['digest'];
            } elseif (null === $data['digest']) {
                $value_1 = $data['digest'];
            }
            $object->digest = $value_1;
            unset($data['digest']);
        } elseif (array_key_exists('digest', $data)) {
            $object->digest = null;
            unset($data['digest']);
        }
        if (array_key_exists('size', $data) && null !== $data['size']) {
            $value_2 = $data['size'];
            if (is_int($data['size'])) {
                $value_2 = $data['size'];
            } elseif (null === $data['size']) {
                $value_2 = $data['size'];
            }
            $object->size = $value_2;
            unset($data['size']);
        } elseif (array_key_exists('size', $data)) {
            $object->size = null;
            unset($data['size']);
        }
        if (array_key_exists('urls', $data) && null !== $data['urls']) {
            $values = [];
            foreach ($data['urls'] as $value_3) {
                $values[] = $value_3;
            }
            $object->urls = $values;
            unset($data['urls']);
        } elseif (array_key_exists('urls', $data)) {
            $object->urls = null;
            unset($data['urls']);
        }
        if (array_key_exists('annotations', $data) && null !== $data['annotations']) {
            $value_4 = $data['annotations'];
            if (is_array($data['annotations']) && $this->isOnlyNumericKeys($data['annotations'])) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['annotations'] as $key => $value_5) {
                    $values_1[$key] = $value_5;
                }
                $value_4 = $values_1;
            } elseif (null === $data['annotations']) {
                $value_4 = $data['annotations'];
            }
            $object->annotations = $value_4;
            unset($data['annotations']);
        } elseif (array_key_exists('annotations', $data)) {
            $object->annotations = null;
            unset($data['annotations']);
        }
        if (array_key_exists('data', $data) && null !== $data['data']) {
            $value_6 = $data['data'];
            if (is_string($data['data'])) {
                $value_6 = $data['data'];
            } elseif (null === $data['data']) {
                $value_6 = $data['data'];
            }
            $object->data = $value_6;
            unset($data['data']);
        } elseif (array_key_exists('data', $data)) {
            $object->data = null;
            unset($data['data']);
        }
        if (array_key_exists('platform', $data) && null !== $data['platform']) {
            $object->platform = $this->denormalizer->denormalize($data['platform'], \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class, 'json', $context);
            unset($data['platform']);
        } elseif (array_key_exists('platform', $data)) {
            $object->platform = null;
            unset($data['platform']);
        }
        if (array_key_exists('artifactType', $data) && null !== $data['artifactType']) {
            $value_7 = $data['artifactType'];
            if (is_string($data['artifactType'])) {
                $value_7 = $data['artifactType'];
            } elseif (null === $data['artifactType']) {
                $value_7 = $data['artifactType'];
            }
            $object->artifactType = $value_7;
            unset($data['artifactType']);
        } elseif (array_key_exists('artifactType', $data)) {
            $object->artifactType = null;
            unset($data['artifactType']);
        }
        foreach ($data as $key_1 => $value_8) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_8;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('mediaType', get_object_vars($data)) && null !== ($data->mediaType ?? null)) {
            $value = $data->mediaType;
            if (is_string($data->mediaType)) {
                $value = $data->mediaType;
            } elseif (null === $data->mediaType) {
                $value = $data->mediaType;
            }
            $dataArray['mediaType'] = $value;
        }
        if (array_key_exists('digest', get_object_vars($data)) && null !== ($data->digest ?? null)) {
            $value_1 = $data->digest;
            if (is_string($data->digest)) {
                $value_1 = $data->digest;
            } elseif (null === $data->digest) {
                $value_1 = $data->digest;
            }
            $dataArray['digest'] = $value_1;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $value_2 = $data->size;
            if (is_int($data->size)) {
                $value_2 = $data->size;
            } elseif (null === $data->size) {
                $value_2 = $data->size;
            }
            $dataArray['size'] = $value_2;
        }
        if (array_key_exists('urls', get_object_vars($data)) && null !== ($data->urls ?? null)) {
            $values = [];
            foreach ($data->urls as $value_3) {
                $values[] = $value_3;
            }
            $dataArray['urls'] = $values;
        }
        if (array_key_exists('annotations', get_object_vars($data)) && null !== ($data->annotations ?? null)) {
            $value_4 = $data->annotations;
            if (is_iterable($data->annotations)) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->annotations as $key => $value_5) {
                    $values_1[$key] = $value_5;
                }
                $value_4 = $values_1;
            } elseif (null === $data->annotations) {
                $value_4 = $data->annotations;
            }
            $dataArray['annotations'] = $value_4;
        }
        if (array_key_exists('data', get_object_vars($data)) && null !== ($data->data ?? null)) {
            $value_6 = $data->data;
            if (is_string($data->data)) {
                $value_6 = $data->data;
            } elseif (null === $data->data) {
                $value_6 = $data->data;
            }
            $dataArray['data'] = $value_6;
        }
        if (array_key_exists('platform', get_object_vars($data)) && null !== ($data->platform ?? null)) {
            $normalized            = $this->normalizer->normalize($data->platform, 'json', $context);
            $dataArray['platform'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('artifactType', get_object_vars($data)) && null !== ($data->artifactType ?? null)) {
            $value_7 = $data->artifactType;
            if (is_string($data->artifactType)) {
                $value_7 = $data->artifactType;
            } elseif (null === $data->artifactType) {
                $value_7 = $data->artifactType;
            }
            $dataArray['artifactType'] = $value_7;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_8) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_8;
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
