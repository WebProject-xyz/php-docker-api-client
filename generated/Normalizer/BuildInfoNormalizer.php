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
use function is_string;

class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\BuildInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('id', $data) && null !== $data['id']) {
            $value = $data['id'];
            if (is_string($data['id'])) {
                $value = $data['id'];
            } elseif (null === $data['id']) {
                $value = $data['id'];
            }
            $object->id = $value;
            unset($data['id']);
        } elseif (array_key_exists('id', $data)) {
            $object->id = null;
            unset($data['id']);
        }
        if (array_key_exists('stream', $data) && null !== $data['stream']) {
            $value_1 = $data['stream'];
            if (is_string($data['stream'])) {
                $value_1 = $data['stream'];
            } elseif (null === $data['stream']) {
                $value_1 = $data['stream'];
            }
            $object->stream = $value_1;
            unset($data['stream']);
        } elseif (array_key_exists('stream', $data)) {
            $object->stream = null;
            unset($data['stream']);
        }
        if (array_key_exists('errorDetail', $data)) {
            $object->errorDetail = $this->denormalizer->denormalize($data['errorDetail'], \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class, 'json', $context);
            unset($data['errorDetail']);
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $value_2 = $data['status'];
            if (is_string($data['status'])) {
                $value_2 = $data['status'];
            } elseif (null === $data['status']) {
                $value_2 = $data['status'];
            }
            $object->status = $value_2;
            unset($data['status']);
        } elseif (array_key_exists('status', $data)) {
            $object->status = null;
            unset($data['status']);
        }
        if (array_key_exists('progressDetail', $data)) {
            $object->progressDetail = $this->denormalizer->denormalize($data['progressDetail'], \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class, 'json', $context);
            unset($data['progressDetail']);
        }
        if (array_key_exists('aux', $data)) {
            $object->aux = $this->denormalizer->denormalize($data['aux'], \WebProject\DockerApi\Library\Generated\Model\ImageID::class, 'json', $context);
            unset($data['aux']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $value = $data->id;
            if (is_string($data->id)) {
                $value = $data->id;
            } elseif (null === $data->id) {
                $value = $data->id;
            }
            $dataArray['id'] = $value;
        }
        if (array_key_exists('stream', get_object_vars($data)) && null !== ($data->stream ?? null)) {
            $value_1 = $data->stream;
            if (is_string($data->stream)) {
                $value_1 = $data->stream;
            } elseif (null === $data->stream) {
                $value_1 = $data->stream;
            }
            $dataArray['stream'] = $value_1;
        }
        if (array_key_exists('errorDetail', get_object_vars($data)) && null !== ($data->errorDetail ?? null)) {
            $normalized               = $this->normalizer->normalize($data->errorDetail, 'json', $context);
            $dataArray['errorDetail'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $value_2 = $data->status;
            if (is_string($data->status)) {
                $value_2 = $data->status;
            } elseif (null === $data->status) {
                $value_2 = $data->status;
            }
            $dataArray['status'] = $value_2;
        }
        if (array_key_exists('progressDetail', get_object_vars($data)) && null !== ($data->progressDetail ?? null)) {
            $normalized_1                = $this->normalizer->normalize($data->progressDetail, 'json', $context);
            $dataArray['progressDetail'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('aux', get_object_vars($data)) && null !== ($data->aux ?? null)) {
            $normalized_2     = $this->normalizer->normalize($data->aux, 'json', $context);
            $dataArray['aux'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
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
        return [\WebProject\DockerApi\Library\Generated\Model\BuildInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
