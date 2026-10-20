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

class PushImageInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PushImageInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('errorDetail', $data)) {
            $object->errorDetail = $this->denormalizer->denormalize($data['errorDetail'], \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class, 'json', $context);
            unset($data['errorDetail']);
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $value = $data['status'];
            if (is_string($data['status'])) {
                $value = $data['status'];
            } elseif (null === $data['status']) {
                $value = $data['status'];
            }
            $object->status = $value;
            unset($data['status']);
        } elseif (array_key_exists('status', $data)) {
            $object->status = null;
            unset($data['status']);
        }
        if (array_key_exists('progressDetail', $data)) {
            $object->progressDetail = $this->denormalizer->denormalize($data['progressDetail'], \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class, 'json', $context);
            unset($data['progressDetail']);
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
        if (array_key_exists('errorDetail', get_object_vars($data)) && null !== ($data->errorDetail ?? null)) {
            $normalized               = $this->normalizer->normalize($data->errorDetail, 'json', $context);
            $dataArray['errorDetail'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $value = $data->status;
            if (is_string($data->status)) {
                $value = $data->status;
            } elseif (null === $data->status) {
                $value = $data->status;
            }
            $dataArray['status'] = $value;
        }
        if (array_key_exists('progressDetail', get_object_vars($data)) && null !== ($data->progressDetail ?? null)) {
            $normalized_1                = $this->normalizer->normalize($data->progressDetail, 'json', $context);
            $dataArray['progressDetail'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
