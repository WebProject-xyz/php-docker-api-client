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

class ImageManifestSummaryImageDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Platform', $data) && null !== $data['Platform']) {
            $object->platform = $this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class, 'json', $context);
            unset($data['Platform']);
        } elseif (array_key_exists('Platform', $data)) {
            $object->platform = null;
            unset($data['Platform']);
        }
        if (array_key_exists('Identity', $data)) {
            $object->identity = $this->denormalizer->denormalize($data['Identity'], \WebProject\DockerApi\Library\Generated\Model\Identity::class, 'json', $context);
            unset($data['Identity']);
        }
        if (array_key_exists('Containers', $data)) {
            $values = [];
            foreach ($data['Containers'] as $value) {
                $values[] = $value;
            }
            $object->containers = $values;
            unset($data['Containers']);
        }
        if (array_key_exists('Size', $data)) {
            $object->size = $this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class, 'json', $context);
            unset($data['Size']);
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
        $dataArray             = [];
        $normalized            = null === $data->platform ? null : $this->normalizer->normalize($data->platform, 'json', $context);
        $dataArray['Platform'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        if (array_key_exists('identity', get_object_vars($data)) && null !== ($data->identity ?? null)) {
            $normalized_1          = $this->normalizer->normalize($data->identity, 'json', $context);
            $dataArray['Identity'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $values = [];
        foreach ($data->containers as $value) {
            $values[] = $value;
        }
        $dataArray['Containers'] = $values;
        $normalized_2            = null === $data->size ? null : $this->normalizer->normalize($data->size, 'json', $context);
        $dataArray['Size']       = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
