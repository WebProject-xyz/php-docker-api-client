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

class MountVolumeOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions();
        if (array_key_exists('NoCopy', $data) && is_int($data['NoCopy'])) {
            $data['NoCopy'] = (bool) $data['NoCopy'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('NoCopy', $data)) {
            $object->setNoCopy($data['NoCopy']);
            unset($data['NoCopy']);
        }
        if (array_key_exists('Labels', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
            unset($data['Labels']);
        }
        if (array_key_exists('DriverConfig', $data)) {
            $object->setDriverConfig($this->denormalizer->denormalize($data['DriverConfig'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptionsDriverConfig::class, 'json', $context));
            unset($data['DriverConfig']);
        }
        if (array_key_exists('Subpath', $data)) {
            $object->setSubpath($data['Subpath']);
            unset($data['Subpath']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('noCopy') && null !== $data->getNoCopy()) {
            $dataArray['NoCopy'] = $data->getNoCopy();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values = [];
            foreach ($data->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if ($data->isInitialized('driverConfig') && null !== $data->getDriverConfig()) {
            $dataArray['DriverConfig'] = $this->normalizer->normalize($data->getDriverConfig(), 'json', $context);
        }
        if ($data->isInitialized('subpath') && null !== $data->getSubpath()) {
            $dataArray['Subpath'] = $data->getSubpath();
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
