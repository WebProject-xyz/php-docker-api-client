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

class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\MountBindOptions();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Propagation', $data) && null !== $data['Propagation']) {
            $value = $data['Propagation'];
            if (is_string($data['Propagation'])) {
                $value = $data['Propagation'];
            } elseif (null === $data['Propagation']) {
                $value = $data['Propagation'];
            }
            $object->setPropagation($value);
        } elseif (array_key_exists('Propagation', $data) && null === $data['Propagation']) {
            $object->setPropagation(null);
        }
        if (array_key_exists('NonRecursive', $data) && null !== $data['NonRecursive']) {
            $value_1 = $data['NonRecursive'];
            if (is_bool($data['NonRecursive'])) {
                $value_1 = $data['NonRecursive'];
            } elseif (null === $data['NonRecursive']) {
                $value_1 = $data['NonRecursive'];
            }
            $object->setNonRecursive($value_1);
        } elseif (array_key_exists('NonRecursive', $data) && null === $data['NonRecursive']) {
            $object->setNonRecursive(null);
        }
        if (array_key_exists('CreateMountpoint', $data) && null !== $data['CreateMountpoint']) {
            $value_2 = $data['CreateMountpoint'];
            if (is_bool($data['CreateMountpoint'])) {
                $value_2 = $data['CreateMountpoint'];
            } elseif (null === $data['CreateMountpoint']) {
                $value_2 = $data['CreateMountpoint'];
            }
            $object->setCreateMountpoint($value_2);
        } elseif (array_key_exists('CreateMountpoint', $data) && null === $data['CreateMountpoint']) {
            $object->setCreateMountpoint(null);
        }
        if (array_key_exists('ReadOnlyNonRecursive', $data) && null !== $data['ReadOnlyNonRecursive']) {
            $value_3 = $data['ReadOnlyNonRecursive'];
            if (is_bool($data['ReadOnlyNonRecursive'])) {
                $value_3 = $data['ReadOnlyNonRecursive'];
            } elseif (null === $data['ReadOnlyNonRecursive']) {
                $value_3 = $data['ReadOnlyNonRecursive'];
            }
            $object->setReadOnlyNonRecursive($value_3);
        } elseif (array_key_exists('ReadOnlyNonRecursive', $data) && null === $data['ReadOnlyNonRecursive']) {
            $object->setReadOnlyNonRecursive(null);
        }
        if (array_key_exists('ReadOnlyForceRecursive', $data) && null !== $data['ReadOnlyForceRecursive']) {
            $value_4 = $data['ReadOnlyForceRecursive'];
            if (is_bool($data['ReadOnlyForceRecursive'])) {
                $value_4 = $data['ReadOnlyForceRecursive'];
            } elseif (null === $data['ReadOnlyForceRecursive']) {
                $value_4 = $data['ReadOnlyForceRecursive'];
            }
            $object->setReadOnlyForceRecursive($value_4);
        } elseif (array_key_exists('ReadOnlyForceRecursive', $data) && null === $data['ReadOnlyForceRecursive']) {
            $object->setReadOnlyForceRecursive(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('propagation')) {
            $value = $data->getPropagation();
            if (is_string($data->getPropagation())) {
                $value = $data->getPropagation();
            } elseif (null === $data->getPropagation()) {
                $value = $data->getPropagation();
            }
            $dataArray['Propagation'] = $value;
        }
        if ($data->isInitialized('nonRecursive')) {
            $value_1 = $data->getNonRecursive();
            if (is_bool($data->getNonRecursive())) {
                $value_1 = $data->getNonRecursive();
            } elseif (null === $data->getNonRecursive()) {
                $value_1 = $data->getNonRecursive();
            }
            $dataArray['NonRecursive'] = $value_1;
        }
        if ($data->isInitialized('createMountpoint')) {
            $value_2 = $data->getCreateMountpoint();
            if (is_bool($data->getCreateMountpoint())) {
                $value_2 = $data->getCreateMountpoint();
            } elseif (null === $data->getCreateMountpoint()) {
                $value_2 = $data->getCreateMountpoint();
            }
            $dataArray['CreateMountpoint'] = $value_2;
        }
        if ($data->isInitialized('readOnlyNonRecursive')) {
            $value_3 = $data->getReadOnlyNonRecursive();
            if (is_bool($data->getReadOnlyNonRecursive())) {
                $value_3 = $data->getReadOnlyNonRecursive();
            } elseif (null === $data->getReadOnlyNonRecursive()) {
                $value_3 = $data->getReadOnlyNonRecursive();
            }
            $dataArray['ReadOnlyNonRecursive'] = $value_3;
        }
        if ($data->isInitialized('readOnlyForceRecursive')) {
            $value_4 = $data->getReadOnlyForceRecursive();
            if (is_bool($data->getReadOnlyForceRecursive())) {
                $value_4 = $data->getReadOnlyForceRecursive();
            } elseif (null === $data->getReadOnlyForceRecursive()) {
                $value_4 = $data->getReadOnlyForceRecursive();
            }
            $dataArray['ReadOnlyForceRecursive'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
