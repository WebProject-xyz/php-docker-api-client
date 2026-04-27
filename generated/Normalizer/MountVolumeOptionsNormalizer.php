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
use function is_bool;
use function is_object;
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('NoCopy', $data) && null !== $data['NoCopy']) {
            $value = $data['NoCopy'];
            if (is_bool($data['NoCopy'])) {
                $value = $data['NoCopy'];
            } elseif (null === $data['NoCopy']) {
                $value = $data['NoCopy'];
            }
            $object->setNoCopy($value);
        } elseif (array_key_exists('NoCopy', $data) && null === $data['NoCopy']) {
            $object->setNoCopy(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->setLabels($value_1);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('DriverConfig', $data) && null !== $data['DriverConfig']) {
            $object->setDriverConfig($this->denormalizer->denormalize($data['DriverConfig'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptionsDriverConfig::class, 'json', $context));
        } elseif (array_key_exists('DriverConfig', $data) && null === $data['DriverConfig']) {
            $object->setDriverConfig(null);
        }
        if (array_key_exists('Subpath', $data) && null !== $data['Subpath']) {
            $value_3 = $data['Subpath'];
            if (is_string($data['Subpath'])) {
                $value_3 = $data['Subpath'];
            } elseif (null === $data['Subpath']) {
                $value_3 = $data['Subpath'];
            }
            $object->setSubpath($value_3);
        } elseif (array_key_exists('Subpath', $data) && null === $data['Subpath']) {
            $object->setSubpath(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('noCopy')) {
            $value = $data->getNoCopy();
            if (is_bool($data->getNoCopy())) {
                $value = $data->getNoCopy();
            } elseif (null === $data->getNoCopy()) {
                $value = $data->getNoCopy();
            }
            $dataArray['NoCopy'] = $value;
        }
        if ($data->isInitialized('labels')) {
            $value_1 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values = [];
                foreach ($data->getLabels() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getLabels()) {
                $value_1 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_1;
        }
        if ($data->isInitialized('driverConfig')) {
            $dataArray['DriverConfig'] = $this->normalizer->normalize($data->getDriverConfig(), 'json', $context);
        }
        if ($data->isInitialized('subpath')) {
            $value_3 = $data->getSubpath();
            if (is_string($data->getSubpath())) {
                $value_3 = $data->getSubpath();
            } elseif (null === $data->getSubpath()) {
                $value_3 = $data->getSubpath();
            }
            $dataArray['Subpath'] = $value_3;
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
