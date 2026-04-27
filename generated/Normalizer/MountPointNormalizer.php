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
            $object->setType($data['Type']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Source', $data) && null !== $data['Source']) {
            $value_1 = $data['Source'];
            if (is_string($data['Source'])) {
                $value_1 = $data['Source'];
            } elseif (null === $data['Source']) {
                $value_1 = $data['Source'];
            }
            $object->setSource($value_1);
        } elseif (array_key_exists('Source', $data) && null === $data['Source']) {
            $object->setSource(null);
        }
        if (array_key_exists('Destination', $data) && null !== $data['Destination']) {
            $value_2 = $data['Destination'];
            if (is_string($data['Destination'])) {
                $value_2 = $data['Destination'];
            } elseif (null === $data['Destination']) {
                $value_2 = $data['Destination'];
            }
            $object->setDestination($value_2);
        } elseif (array_key_exists('Destination', $data) && null === $data['Destination']) {
            $object->setDestination(null);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_3 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_3 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_3 = $data['Driver'];
            }
            $object->setDriver($value_3);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value_4 = $data['Mode'];
            if (is_string($data['Mode'])) {
                $value_4 = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value_4 = $data['Mode'];
            }
            $object->setMode($value_4);
        } elseif (array_key_exists('Mode', $data) && null === $data['Mode']) {
            $object->setMode(null);
        }
        if (array_key_exists('RW', $data) && null !== $data['RW']) {
            $value_5 = $data['RW'];
            if (is_bool($data['RW'])) {
                $value_5 = $data['RW'];
            } elseif (null === $data['RW']) {
                $value_5 = $data['RW'];
            }
            $object->setRW($value_5);
        } elseif (array_key_exists('RW', $data) && null === $data['RW']) {
            $object->setRW(null);
        }
        if (array_key_exists('Propagation', $data) && null !== $data['Propagation']) {
            $value_6 = $data['Propagation'];
            if (is_string($data['Propagation'])) {
                $value_6 = $data['Propagation'];
            } elseif (null === $data['Propagation']) {
                $value_6 = $data['Propagation'];
            }
            $object->setPropagation($value_6);
        } elseif (array_key_exists('Propagation', $data) && null === $data['Propagation']) {
            $object->setPropagation(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['Type'] = $data->getType();
        }
        if ($data->isInitialized('name')) {
            $value = $data->getName();
            if (is_string($data->getName())) {
                $value = $data->getName();
            } elseif (null === $data->getName()) {
                $value = $data->getName();
            }
            $dataArray['Name'] = $value;
        }
        if ($data->isInitialized('source')) {
            $value_1 = $data->getSource();
            if (is_string($data->getSource())) {
                $value_1 = $data->getSource();
            } elseif (null === $data->getSource()) {
                $value_1 = $data->getSource();
            }
            $dataArray['Source'] = $value_1;
        }
        if ($data->isInitialized('destination')) {
            $value_2 = $data->getDestination();
            if (is_string($data->getDestination())) {
                $value_2 = $data->getDestination();
            } elseif (null === $data->getDestination()) {
                $value_2 = $data->getDestination();
            }
            $dataArray['Destination'] = $value_2;
        }
        if ($data->isInitialized('driver')) {
            $value_3 = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value_3 = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value_3 = $data->getDriver();
            }
            $dataArray['Driver'] = $value_3;
        }
        if ($data->isInitialized('mode')) {
            $value_4 = $data->getMode();
            if (is_string($data->getMode())) {
                $value_4 = $data->getMode();
            } elseif (null === $data->getMode()) {
                $value_4 = $data->getMode();
            }
            $dataArray['Mode'] = $value_4;
        }
        if ($data->isInitialized('rW')) {
            $value_5 = $data->getRW();
            if (is_bool($data->getRW())) {
                $value_5 = $data->getRW();
            } elseif (null === $data->getRW()) {
                $value_5 = $data->getRW();
            }
            $dataArray['RW'] = $value_5;
        }
        if ($data->isInitialized('propagation')) {
            $value_6 = $data->getPropagation();
            if (is_string($data->getPropagation())) {
                $value_6 = $data->getPropagation();
            } elseif (null === $data->getPropagation()) {
                $value_6 = $data->getPropagation();
            }
            $dataArray['Propagation'] = $value_6;
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
