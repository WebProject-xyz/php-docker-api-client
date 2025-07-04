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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\DeviceMapping();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('PathOnHost', $data)) {
            $object->setPathOnHost($data['PathOnHost']);
            unset($data['PathOnHost']);
        }
        if (array_key_exists('PathInContainer', $data)) {
            $object->setPathInContainer($data['PathInContainer']);
            unset($data['PathInContainer']);
        }
        if (array_key_exists('CgroupPermissions', $data)) {
            $object->setCgroupPermissions($data['CgroupPermissions']);
            unset($data['CgroupPermissions']);
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
        $dataArray = [];
        if ($data->isInitialized('pathOnHost') && null !== $data->getPathOnHost()) {
            $dataArray['PathOnHost'] = $data->getPathOnHost();
        }
        if ($data->isInitialized('pathInContainer') && null !== $data->getPathInContainer()) {
            $dataArray['PathInContainer'] = $data->getPathInContainer();
        }
        if ($data->isInitialized('cgroupPermissions') && null !== $data->getCgroupPermissions()) {
            $dataArray['CgroupPermissions'] = $data->getCgroupPermissions();
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
        return [\WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
