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

class SystemDfGetTextplainResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ImageUsage', $data)) {
            $object->imageUsage = $this->denormalizer->denormalize($data['ImageUsage'], \WebProject\DockerApi\Library\Generated\Model\ImagesDiskUsage::class, 'json', $context);
            unset($data['ImageUsage']);
        }
        if (array_key_exists('ContainerUsage', $data)) {
            $object->containerUsage = $this->denormalizer->denormalize($data['ContainerUsage'], \WebProject\DockerApi\Library\Generated\Model\ContainersDiskUsage::class, 'json', $context);
            unset($data['ContainerUsage']);
        }
        if (array_key_exists('VolumeUsage', $data)) {
            $object->volumeUsage = $this->denormalizer->denormalize($data['VolumeUsage'], \WebProject\DockerApi\Library\Generated\Model\VolumesDiskUsage::class, 'json', $context);
            unset($data['VolumeUsage']);
        }
        if (array_key_exists('BuildCacheUsage', $data)) {
            $object->buildCacheUsage = $this->denormalizer->denormalize($data['BuildCacheUsage'], \WebProject\DockerApi\Library\Generated\Model\BuildCacheDiskUsage::class, 'json', $context);
            unset($data['BuildCacheUsage']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('imageUsage', get_object_vars($data)) && null !== ($data->imageUsage ?? null)) {
            $normalized              = $this->normalizer->normalize($data->imageUsage, 'json', $context);
            $dataArray['ImageUsage'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('containerUsage', get_object_vars($data)) && null !== ($data->containerUsage ?? null)) {
            $normalized_1                = $this->normalizer->normalize($data->containerUsage, 'json', $context);
            $dataArray['ContainerUsage'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('volumeUsage', get_object_vars($data)) && null !== ($data->volumeUsage ?? null)) {
            $normalized_2             = $this->normalizer->normalize($data->volumeUsage, 'json', $context);
            $dataArray['VolumeUsage'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('buildCacheUsage', get_object_vars($data)) && null !== ($data->buildCacheUsage ?? null)) {
            $normalized_3                 = $this->normalizer->normalize($data->buildCacheUsage, 'json', $context);
            $dataArray['BuildCacheUsage'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
