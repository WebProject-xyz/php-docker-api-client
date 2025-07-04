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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary();
        if (array_key_exists('Available', $data) && is_int($data['Available'])) {
            $data['Available'] = (bool) $data['Available'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
            unset($data['ID']);
        }
        if (array_key_exists('Descriptor', $data)) {
            $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            unset($data['Descriptor']);
        }
        if (array_key_exists('Available', $data)) {
            $object->setAvailable($data['Available']);
            unset($data['Available']);
        }
        if (array_key_exists('Size', $data)) {
            $object->setSize($this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class, 'json', $context));
            unset($data['Size']);
        }
        if (array_key_exists('Kind', $data)) {
            $object->setKind($data['Kind']);
            unset($data['Kind']);
        }
        if (array_key_exists('ImageData', $data) && null !== $data['ImageData']) {
            $object->setImageData($this->denormalizer->denormalize($data['ImageData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class, 'json', $context));
            unset($data['ImageData']);
        } elseif (array_key_exists('ImageData', $data) && null === $data['ImageData']) {
            $object->setImageData(null);
        }
        if (array_key_exists('AttestationData', $data) && null !== $data['AttestationData']) {
            $object->setAttestationData($this->denormalizer->denormalize($data['AttestationData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class, 'json', $context));
            unset($data['AttestationData']);
        } elseif (array_key_exists('AttestationData', $data) && null === $data['AttestationData']) {
            $object->setAttestationData(null);
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
        $dataArray['ID']         = $data->getID();
        $dataArray['Descriptor'] = $this->normalizer->normalize($data->getDescriptor(), 'json', $context);
        $dataArray['Available']  = $data->getAvailable();
        $dataArray['Size']       = $this->normalizer->normalize($data->getSize(), 'json', $context);
        $dataArray['Kind']       = $data->getKind();
        if ($data->isInitialized('imageData') && null !== $data->getImageData()) {
            $dataArray['ImageData'] = $this->normalizer->normalize($data->getImageData(), 'json', $context);
        }
        if ($data->isInitialized('attestationData') && null !== $data->getAttestationData()) {
            $dataArray['AttestationData'] = $this->normalizer->normalize($data->getAttestationData(), 'json', $context);
        }
        foreach ($data as $key => $value) {
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
