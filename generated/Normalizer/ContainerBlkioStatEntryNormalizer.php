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
use function is_int;
use function is_object;
use function is_string;

class ContainerBlkioStatEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('major', $data) && null !== $data['major']) {
            $value = $data['major'];
            if (is_int($data['major'])) {
                $value = $data['major'];
            } elseif (null === $data['major']) {
                $value = $data['major'];
            }
            $object->setMajor($value);
        } elseif (array_key_exists('major', $data) && null === $data['major']) {
            $object->setMajor(null);
        }
        if (array_key_exists('minor', $data) && null !== $data['minor']) {
            $value_1 = $data['minor'];
            if (is_int($data['minor'])) {
                $value_1 = $data['minor'];
            } elseif (null === $data['minor']) {
                $value_1 = $data['minor'];
            }
            $object->setMinor($value_1);
        } elseif (array_key_exists('minor', $data) && null === $data['minor']) {
            $object->setMinor(null);
        }
        if (array_key_exists('op', $data) && null !== $data['op']) {
            $value_2 = $data['op'];
            if (is_string($data['op'])) {
                $value_2 = $data['op'];
            } elseif (null === $data['op']) {
                $value_2 = $data['op'];
            }
            $object->setOp($value_2);
        } elseif (array_key_exists('op', $data) && null === $data['op']) {
            $object->setOp(null);
        }
        if (array_key_exists('value', $data) && null !== $data['value']) {
            $value_3 = $data['value'];
            if (is_int($data['value'])) {
                $value_3 = $data['value'];
            } elseif (null === $data['value']) {
                $value_3 = $data['value'];
            }
            $object->setValue($value_3);
        } elseif (array_key_exists('value', $data) && null === $data['value']) {
            $object->setValue(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('major')) {
            $value = $data->getMajor();
            if (is_int($data->getMajor())) {
                $value = $data->getMajor();
            } elseif (null === $data->getMajor()) {
                $value = $data->getMajor();
            }
            $dataArray['major'] = $value;
        }
        if ($data->isInitialized('minor')) {
            $value_1 = $data->getMinor();
            if (is_int($data->getMinor())) {
                $value_1 = $data->getMinor();
            } elseif (null === $data->getMinor()) {
                $value_1 = $data->getMinor();
            }
            $dataArray['minor'] = $value_1;
        }
        if ($data->isInitialized('op')) {
            $value_2 = $data->getOp();
            if (is_string($data->getOp())) {
                $value_2 = $data->getOp();
            } elseif (null === $data->getOp()) {
                $value_2 = $data->getOp();
            }
            $dataArray['op'] = $value_2;
        }
        if ($data->isInitialized('value')) {
            $value_3 = $data->getValue();
            if (is_int($data->getValue())) {
                $value_3 = $data->getValue();
            } elseif (null === $data->getValue()) {
                $value_3 = $data->getValue();
            }
            $dataArray['value'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
