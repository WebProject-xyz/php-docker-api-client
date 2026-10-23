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

class MountPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\MountPoint::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\MountPoint::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\MountPoint();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Type', $data)) {
            $object->type = \WebProject\DockerApi\Library\Generated\Model\MountType::from($data['Type']);
            unset($data['Type']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('Source', $data) && null !== $data['Source']) {
            $value_1 = $data['Source'];
            if (is_string($data['Source'])) {
                $value_1 = $data['Source'];
            } elseif (null === $data['Source']) {
                $value_1 = $data['Source'];
            }
            $object->source = $value_1;
            unset($data['Source']);
        } elseif (array_key_exists('Source', $data)) {
            $object->source = null;
            unset($data['Source']);
        }
        if (array_key_exists('Destination', $data) && null !== $data['Destination']) {
            $value_2 = $data['Destination'];
            if (is_string($data['Destination'])) {
                $value_2 = $data['Destination'];
            } elseif (null === $data['Destination']) {
                $value_2 = $data['Destination'];
            }
            $object->destination = $value_2;
            unset($data['Destination']);
        } elseif (array_key_exists('Destination', $data)) {
            $object->destination = null;
            unset($data['Destination']);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_3 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_3 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_3 = $data['Driver'];
            }
            $object->driver = $value_3;
            unset($data['Driver']);
        } elseif (array_key_exists('Driver', $data)) {
            $object->driver = null;
            unset($data['Driver']);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value_4 = $data['Mode'];
            if (is_string($data['Mode'])) {
                $value_4 = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value_4 = $data['Mode'];
            }
            $object->mode = $value_4;
            unset($data['Mode']);
        } elseif (array_key_exists('Mode', $data)) {
            $object->mode = null;
            unset($data['Mode']);
        }
        if (array_key_exists('RW', $data) && null !== $data['RW']) {
            $value_5 = $data['RW'];
            if (is_bool($data['RW'])) {
                $value_5 = $data['RW'];
            } elseif (null === $data['RW']) {
                $value_5 = $data['RW'];
            }
            $object->rW = $value_5;
            unset($data['RW']);
        } elseif (array_key_exists('RW', $data)) {
            $object->rW = null;
            unset($data['RW']);
        }
        if (array_key_exists('Propagation', $data) && null !== $data['Propagation']) {
            $value_6 = $data['Propagation'];
            if (is_string($data['Propagation'])) {
                $value_6 = $data['Propagation'];
            } elseif (null === $data['Propagation']) {
                $value_6 = $data['Propagation'];
            }
            $object->propagation = $value_6;
            unset($data['Propagation']);
        } elseif (array_key_exists('Propagation', $data)) {
            $object->propagation = null;
            unset($data['Propagation']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type->value;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $value_1 = $data->source;
            if (is_string($data->source)) {
                $value_1 = $data->source;
            } elseif (null === $data->source) {
                $value_1 = $data->source;
            }
            $dataArray['Source'] = $value_1;
        }
        if (array_key_exists('destination', get_object_vars($data)) && null !== ($data->destination ?? null)) {
            $value_2 = $data->destination;
            if (is_string($data->destination)) {
                $value_2 = $data->destination;
            } elseif (null === $data->destination) {
                $value_2 = $data->destination;
            }
            $dataArray['Destination'] = $value_2;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $value_3 = $data->driver;
            if (is_string($data->driver)) {
                $value_3 = $data->driver;
            } elseif (null === $data->driver) {
                $value_3 = $data->driver;
            }
            $dataArray['Driver'] = $value_3;
        }
        if (array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $value_4 = $data->mode;
            if (is_string($data->mode)) {
                $value_4 = $data->mode;
            } elseif (null === $data->mode) {
                $value_4 = $data->mode;
            }
            $dataArray['Mode'] = $value_4;
        }
        if (array_key_exists('rW', get_object_vars($data)) && null !== ($data->rW ?? null)) {
            $value_5 = $data->rW;
            if (is_bool($data->rW)) {
                $value_5 = $data->rW;
            } elseif (null === $data->rW) {
                $value_5 = $data->rW;
            }
            $dataArray['RW'] = $value_5;
        }
        if (array_key_exists('propagation', get_object_vars($data)) && null !== ($data->propagation ?? null)) {
            $value_6 = $data->propagation;
            if (is_string($data->propagation)) {
                $value_6 = $data->propagation;
            } elseif (null === $data->propagation) {
                $value_6 = $data->propagation;
            }
            $dataArray['Propagation'] = $value_6;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\MountPoint::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
