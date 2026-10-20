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
use function is_string;

class DeviceMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\DeviceMapping();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('PathOnHost', $data) && null !== $data['PathOnHost']) {
            $value = $data['PathOnHost'];
            if (is_string($data['PathOnHost'])) {
                $value = $data['PathOnHost'];
            } elseif (null === $data['PathOnHost']) {
                $value = $data['PathOnHost'];
            }
            $object->pathOnHost = $value;
            unset($data['PathOnHost']);
        } elseif (array_key_exists('PathOnHost', $data)) {
            $object->pathOnHost = null;
            unset($data['PathOnHost']);
        }
        if (array_key_exists('PathInContainer', $data) && null !== $data['PathInContainer']) {
            $value_1 = $data['PathInContainer'];
            if (is_string($data['PathInContainer'])) {
                $value_1 = $data['PathInContainer'];
            } elseif (null === $data['PathInContainer']) {
                $value_1 = $data['PathInContainer'];
            }
            $object->pathInContainer = $value_1;
            unset($data['PathInContainer']);
        } elseif (array_key_exists('PathInContainer', $data)) {
            $object->pathInContainer = null;
            unset($data['PathInContainer']);
        }
        if (array_key_exists('CgroupPermissions', $data) && null !== $data['CgroupPermissions']) {
            $value_2 = $data['CgroupPermissions'];
            if (is_string($data['CgroupPermissions'])) {
                $value_2 = $data['CgroupPermissions'];
            } elseif (null === $data['CgroupPermissions']) {
                $value_2 = $data['CgroupPermissions'];
            }
            $object->cgroupPermissions = $value_2;
            unset($data['CgroupPermissions']);
        } elseif (array_key_exists('CgroupPermissions', $data)) {
            $object->cgroupPermissions = null;
            unset($data['CgroupPermissions']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('pathOnHost', get_object_vars($data)) && null !== ($data->pathOnHost ?? null)) {
            $value = $data->pathOnHost;
            if (is_string($data->pathOnHost)) {
                $value = $data->pathOnHost;
            } elseif (null === $data->pathOnHost) {
                $value = $data->pathOnHost;
            }
            $dataArray['PathOnHost'] = $value;
        }
        if (array_key_exists('pathInContainer', get_object_vars($data)) && null !== ($data->pathInContainer ?? null)) {
            $value_1 = $data->pathInContainer;
            if (is_string($data->pathInContainer)) {
                $value_1 = $data->pathInContainer;
            } elseif (null === $data->pathInContainer) {
                $value_1 = $data->pathInContainer;
            }
            $dataArray['PathInContainer'] = $value_1;
        }
        if (array_key_exists('cgroupPermissions', get_object_vars($data)) && null !== ($data->cgroupPermissions ?? null)) {
            $value_2 = $data->cgroupPermissions;
            if (is_string($data->cgroupPermissions)) {
                $value_2 = $data->cgroupPermissions;
            } elseif (null === $data->cgroupPermissions) {
                $value_2 = $data->cgroupPermissions;
            }
            $dataArray['CgroupPermissions'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
