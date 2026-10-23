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

class VolumeCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\VolumeCreateRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\VolumeCreateRequest::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\VolumeCreateRequest();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
            unset($data['Name']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
            unset($data['Driver']);
        }
        if (array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
            $value = $data['DriverOpts'];
            if (is_array($data['DriverOpts']) && $this->isOnlyNumericKeys($data['DriverOpts'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['DriverOpts'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['DriverOpts']) {
                $value = $data['DriverOpts'];
            }
            $object->driverOpts = $value;
            unset($data['DriverOpts']);
        } elseif (array_key_exists('DriverOpts', $data)) {
            $object->driverOpts = null;
            unset($data['DriverOpts']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_2 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data['Labels']) {
                $value_2 = $data['Labels'];
            }
            $object->labels = $value_2;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('ClusterVolumeSpec', $data)) {
            $object->clusterVolumeSpec = $this->denormalizer->denormalize($data['ClusterVolumeSpec'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpec::class, 'json', $context);
            unset($data['ClusterVolumeSpec']);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver;
        }
        if (array_key_exists('driverOpts', get_object_vars($data)) && null !== ($data->driverOpts ?? null)) {
            $value = $data->driverOpts;
            if (is_iterable($data->driverOpts)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->driverOpts as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->driverOpts) {
                $value = $data->driverOpts;
            }
            $dataArray['DriverOpts'] = $value;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_2 = $data->labels;
            if (is_iterable($data->labels)) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data->labels) {
                $value_2 = $data->labels;
            }
            $dataArray['Labels'] = $value_2;
        }
        if (array_key_exists('clusterVolumeSpec', get_object_vars($data)) && null !== ($data->clusterVolumeSpec ?? null)) {
            $normalized                     = $this->normalizer->normalize($data->clusterVolumeSpec, 'json', $context);
            $dataArray['ClusterVolumeSpec'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\VolumeCreateRequest::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
