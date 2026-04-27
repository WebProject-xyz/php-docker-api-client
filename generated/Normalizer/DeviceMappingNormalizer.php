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
            $object->setPathOnHost($value);
        } elseif (array_key_exists('PathOnHost', $data) && null === $data['PathOnHost']) {
            $object->setPathOnHost(null);
        }
        if (array_key_exists('PathInContainer', $data) && null !== $data['PathInContainer']) {
            $value_1 = $data['PathInContainer'];
            if (is_string($data['PathInContainer'])) {
                $value_1 = $data['PathInContainer'];
            } elseif (null === $data['PathInContainer']) {
                $value_1 = $data['PathInContainer'];
            }
            $object->setPathInContainer($value_1);
        } elseif (array_key_exists('PathInContainer', $data) && null === $data['PathInContainer']) {
            $object->setPathInContainer(null);
        }
        if (array_key_exists('CgroupPermissions', $data) && null !== $data['CgroupPermissions']) {
            $value_2 = $data['CgroupPermissions'];
            if (is_string($data['CgroupPermissions'])) {
                $value_2 = $data['CgroupPermissions'];
            } elseif (null === $data['CgroupPermissions']) {
                $value_2 = $data['CgroupPermissions'];
            }
            $object->setCgroupPermissions($value_2);
        } elseif (array_key_exists('CgroupPermissions', $data) && null === $data['CgroupPermissions']) {
            $object->setCgroupPermissions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('pathOnHost')) {
            $value = $data->getPathOnHost();
            if (is_string($data->getPathOnHost())) {
                $value = $data->getPathOnHost();
            } elseif (null === $data->getPathOnHost()) {
                $value = $data->getPathOnHost();
            }
            $dataArray['PathOnHost'] = $value;
        }
        if ($data->isInitialized('pathInContainer')) {
            $value_1 = $data->getPathInContainer();
            if (is_string($data->getPathInContainer())) {
                $value_1 = $data->getPathInContainer();
            } elseif (null === $data->getPathInContainer()) {
                $value_1 = $data->getPathInContainer();
            }
            $dataArray['PathInContainer'] = $value_1;
        }
        if ($data->isInitialized('cgroupPermissions')) {
            $value_2 = $data->getCgroupPermissions();
            if (is_string($data->getCgroupPermissions())) {
                $value_2 = $data->getCgroupPermissions();
            } elseif (null === $data->getCgroupPermissions()) {
                $value_2 = $data->getCgroupPermissions();
            }
            $dataArray['CgroupPermissions'] = $value_2;
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
