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
            $object->propagation = $value;
            unset($data['Propagation']);
        } elseif (array_key_exists('Propagation', $data)) {
            $object->propagation = null;
            unset($data['Propagation']);
        }
        if (array_key_exists('NonRecursive', $data) && null !== $data['NonRecursive']) {
            $value_1 = $data['NonRecursive'];
            if (is_bool($data['NonRecursive'])) {
                $value_1 = $data['NonRecursive'];
            } elseif (null === $data['NonRecursive']) {
                $value_1 = $data['NonRecursive'];
            }
            $object->nonRecursive = $value_1;
            unset($data['NonRecursive']);
        } elseif (array_key_exists('NonRecursive', $data)) {
            $object->nonRecursive = null;
            unset($data['NonRecursive']);
        }
        if (array_key_exists('CreateMountpoint', $data) && null !== $data['CreateMountpoint']) {
            $value_2 = $data['CreateMountpoint'];
            if (is_bool($data['CreateMountpoint'])) {
                $value_2 = $data['CreateMountpoint'];
            } elseif (null === $data['CreateMountpoint']) {
                $value_2 = $data['CreateMountpoint'];
            }
            $object->createMountpoint = $value_2;
            unset($data['CreateMountpoint']);
        } elseif (array_key_exists('CreateMountpoint', $data)) {
            $object->createMountpoint = null;
            unset($data['CreateMountpoint']);
        }
        if (array_key_exists('ReadOnlyNonRecursive', $data) && null !== $data['ReadOnlyNonRecursive']) {
            $value_3 = $data['ReadOnlyNonRecursive'];
            if (is_bool($data['ReadOnlyNonRecursive'])) {
                $value_3 = $data['ReadOnlyNonRecursive'];
            } elseif (null === $data['ReadOnlyNonRecursive']) {
                $value_3 = $data['ReadOnlyNonRecursive'];
            }
            $object->readOnlyNonRecursive = $value_3;
            unset($data['ReadOnlyNonRecursive']);
        } elseif (array_key_exists('ReadOnlyNonRecursive', $data)) {
            $object->readOnlyNonRecursive = null;
            unset($data['ReadOnlyNonRecursive']);
        }
        if (array_key_exists('ReadOnlyForceRecursive', $data) && null !== $data['ReadOnlyForceRecursive']) {
            $value_4 = $data['ReadOnlyForceRecursive'];
            if (is_bool($data['ReadOnlyForceRecursive'])) {
                $value_4 = $data['ReadOnlyForceRecursive'];
            } elseif (null === $data['ReadOnlyForceRecursive']) {
                $value_4 = $data['ReadOnlyForceRecursive'];
            }
            $object->readOnlyForceRecursive = $value_4;
            unset($data['ReadOnlyForceRecursive']);
        } elseif (array_key_exists('ReadOnlyForceRecursive', $data)) {
            $object->readOnlyForceRecursive = null;
            unset($data['ReadOnlyForceRecursive']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('propagation', get_object_vars($data)) && null !== ($data->propagation ?? null)) {
            $value = $data->propagation;
            if (is_string($data->propagation)) {
                $value = $data->propagation;
            } elseif (null === $data->propagation) {
                $value = $data->propagation;
            }
            $dataArray['Propagation'] = $value;
        }
        if (array_key_exists('nonRecursive', get_object_vars($data)) && null !== ($data->nonRecursive ?? null)) {
            $value_1 = $data->nonRecursive;
            if (is_bool($data->nonRecursive)) {
                $value_1 = $data->nonRecursive;
            } elseif (null === $data->nonRecursive) {
                $value_1 = $data->nonRecursive;
            }
            $dataArray['NonRecursive'] = $value_1;
        }
        if (array_key_exists('createMountpoint', get_object_vars($data)) && null !== ($data->createMountpoint ?? null)) {
            $value_2 = $data->createMountpoint;
            if (is_bool($data->createMountpoint)) {
                $value_2 = $data->createMountpoint;
            } elseif (null === $data->createMountpoint) {
                $value_2 = $data->createMountpoint;
            }
            $dataArray['CreateMountpoint'] = $value_2;
        }
        if (array_key_exists('readOnlyNonRecursive', get_object_vars($data)) && null !== ($data->readOnlyNonRecursive ?? null)) {
            $value_3 = $data->readOnlyNonRecursive;
            if (is_bool($data->readOnlyNonRecursive)) {
                $value_3 = $data->readOnlyNonRecursive;
            } elseif (null === $data->readOnlyNonRecursive) {
                $value_3 = $data->readOnlyNonRecursive;
            }
            $dataArray['ReadOnlyNonRecursive'] = $value_3;
        }
        if (array_key_exists('readOnlyForceRecursive', get_object_vars($data)) && null !== ($data->readOnlyForceRecursive ?? null)) {
            $value_4 = $data->readOnlyForceRecursive;
            if (is_bool($data->readOnlyForceRecursive)) {
                $value_4 = $data->readOnlyForceRecursive;
            } elseif (null === $data->readOnlyForceRecursive) {
                $value_4 = $data->readOnlyForceRecursive;
            }
            $dataArray['ReadOnlyForceRecursive'] = $value_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
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
