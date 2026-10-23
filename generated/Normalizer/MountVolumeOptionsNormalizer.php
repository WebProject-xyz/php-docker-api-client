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
            $object->noCopy = $value;
            unset($data['NoCopy']);
        } elseif (array_key_exists('NoCopy', $data)) {
            $object->noCopy = null;
            unset($data['NoCopy']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->labels = $value_1;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('DriverConfig', $data) && null !== $data['DriverConfig']) {
            $object->driverConfig = $this->denormalizer->denormalize($data['DriverConfig'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptionsDriverConfig::class, 'json', $context);
            unset($data['DriverConfig']);
        } elseif (array_key_exists('DriverConfig', $data)) {
            $object->driverConfig = null;
            unset($data['DriverConfig']);
        }
        if (array_key_exists('Subpath', $data) && null !== $data['Subpath']) {
            $value_3 = $data['Subpath'];
            if (is_string($data['Subpath'])) {
                $value_3 = $data['Subpath'];
            } elseif (null === $data['Subpath']) {
                $value_3 = $data['Subpath'];
            }
            $object->subpath = $value_3;
            unset($data['Subpath']);
        } elseif (array_key_exists('Subpath', $data)) {
            $object->subpath = null;
            unset($data['Subpath']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('noCopy', get_object_vars($data)) && null !== ($data->noCopy ?? null)) {
            $value = $data->noCopy;
            if (is_bool($data->noCopy)) {
                $value = $data->noCopy;
            } elseif (null === $data->noCopy) {
                $value = $data->noCopy;
            }
            $dataArray['NoCopy'] = $value;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_1 = $data->labels;
            if (is_iterable($data->labels)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->labels) {
                $value_1 = $data->labels;
            }
            $dataArray['Labels'] = $value_1;
        }
        if (array_key_exists('driverConfig', get_object_vars($data)) && null !== ($data->driverConfig ?? null)) {
            $normalized                = $this->normalizer->normalize($data->driverConfig, 'json', $context);
            $dataArray['DriverConfig'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('subpath', get_object_vars($data)) && null !== ($data->subpath ?? null)) {
            $value_3 = $data->subpath;
            if (is_string($data->subpath)) {
                $value_3 = $data->subpath;
            } elseif (null === $data->subpath) {
                $value_3 = $data->subpath;
            }
            $dataArray['Subpath'] = $value_3;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
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
