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

class ImageManifestSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Available', $data) && is_int($data['Available'])) {
            $data['Available'] = (bool) $data['Available'];
        }
        if (array_key_exists('ID', $data)) {
            $object->iD = $data['ID'];
            unset($data['ID']);
        }
        if (array_key_exists('Descriptor', $data)) {
            $object->descriptor = $this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context);
            unset($data['Descriptor']);
        }
        if (array_key_exists('Available', $data)) {
            $object->available = $data['Available'];
            unset($data['Available']);
        }
        if (array_key_exists('Size', $data)) {
            $object->size = $this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class, 'json', $context);
            unset($data['Size']);
        }
        if (array_key_exists('Kind', $data)) {
            $object->kind = \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryKind::from($data['Kind']);
            unset($data['Kind']);
        }
        if (array_key_exists('ImageData', $data) && null !== $data['ImageData']) {
            $object->imageData = $this->denormalizer->denormalize($data['ImageData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class, 'json', $context);
            unset($data['ImageData']);
        } elseif (array_key_exists('ImageData', $data)) {
            $object->imageData = null;
            unset($data['ImageData']);
        }
        if (array_key_exists('AttestationData', $data) && null !== $data['AttestationData']) {
            $object->attestationData = $this->denormalizer->denormalize($data['AttestationData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class, 'json', $context);
            unset($data['AttestationData']);
        } elseif (array_key_exists('AttestationData', $data)) {
            $object->attestationData = null;
            unset($data['AttestationData']);
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
        $dataArray               = [];
        $dataArray['ID']         = $data->iD;
        $normalized              = null === $data->descriptor ? null : $this->normalizer->normalize($data->descriptor, 'json', $context);
        $dataArray['Descriptor'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        $dataArray['Available']  = $data->available;
        $normalized_1            = null === $data->size ? null : $this->normalizer->normalize($data->size, 'json', $context);
        $dataArray['Size']       = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        $dataArray['Kind']       = $data->kind->value;
        if (array_key_exists('imageData', get_object_vars($data)) && null !== ($data->imageData ?? null)) {
            $normalized_2           = $this->normalizer->normalize($data->imageData, 'json', $context);
            $dataArray['ImageData'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('attestationData', get_object_vars($data)) && null !== ($data->attestationData ?? null)) {
            $normalized_3                 = $this->normalizer->normalize($data->attestationData, 'json', $context);
            $dataArray['AttestationData'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
