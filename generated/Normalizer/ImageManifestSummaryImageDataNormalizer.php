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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ImageManifestSummaryImageDataConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Platform', $data) && null !== $data['Platform']) {
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class, 'json', $context));
            unset($data['Platform']);
        } elseif (array_key_exists('Platform', $data) && null === $data['Platform']) {
            $object->setPlatform(null);
        }
        if (array_key_exists('Containers', $data)) {
            $values = [];
            foreach ($data['Containers'] as $value) {
                $values[] = $value;
            }
            $object->setContainers($values);
            unset($data['Containers']);
        }
        if (array_key_exists('Size', $data)) {
            $object->setSize($this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class, 'json', $context));
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
        $dataArray['Platform'] = $this->normalizer->normalize($data->getPlatform(), 'json', $context);
        $values                = [];
        foreach ($data->getContainers() as $value) {
            $values[] = $value;
        }
        $dataArray['Containers'] = $values;
        $dataArray['Size']       = $this->normalizer->normalize($data->getSize(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ImageManifestSummaryImageDataConstraint());
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
