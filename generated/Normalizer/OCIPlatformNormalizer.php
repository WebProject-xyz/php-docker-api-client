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

class OCIPlatformNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\OCIPlatform();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('architecture', $data)) {
            $object->setArchitecture($data['architecture']);
            unset($data['architecture']);
        }
        if (array_key_exists('os', $data)) {
            $object->setOs($data['os']);
            unset($data['os']);
        }
        if (array_key_exists('os.version', $data)) {
            $object->setOsVersion($data['os.version']);
            unset($data['os.version']);
        }
        if (array_key_exists('os.features', $data)) {
            $values = [];
            foreach ($data['os.features'] as $value) {
                $values[] = $value;
            }
            $object->setOsFeatures($values);
            unset($data['os.features']);
        }
        if (array_key_exists('variant', $data)) {
            $object->setVariant($data['variant']);
            unset($data['variant']);
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
        if ($data->isInitialized('architecture') && null !== $data->getArchitecture()) {
            $dataArray['architecture'] = $data->getArchitecture();
        }
        if ($data->isInitialized('os') && null !== $data->getOs()) {
            $dataArray['os'] = $data->getOs();
        }
        if ($data->isInitialized('osVersion') && null !== $data->getOsVersion()) {
            $dataArray['os.version'] = $data->getOsVersion();
        }
        if ($data->isInitialized('osFeatures') && null !== $data->getOsFeatures()) {
            $values = [];
            foreach ($data->getOsFeatures() as $value) {
                $values[] = $value;
            }
            $dataArray['os.features'] = $values;
        }
        if ($data->isInitialized('variant') && null !== $data->getVariant()) {
            $dataArray['variant'] = $data->getVariant();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
