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
            $object->major = $value;
            unset($data['major']);
        } elseif (array_key_exists('major', $data)) {
            $object->major = null;
            unset($data['major']);
        }
        if (array_key_exists('minor', $data) && null !== $data['minor']) {
            $value_1 = $data['minor'];
            if (is_int($data['minor'])) {
                $value_1 = $data['minor'];
            } elseif (null === $data['minor']) {
                $value_1 = $data['minor'];
            }
            $object->minor = $value_1;
            unset($data['minor']);
        } elseif (array_key_exists('minor', $data)) {
            $object->minor = null;
            unset($data['minor']);
        }
        if (array_key_exists('op', $data) && null !== $data['op']) {
            $value_2 = $data['op'];
            if (is_string($data['op'])) {
                $value_2 = $data['op'];
            } elseif (null === $data['op']) {
                $value_2 = $data['op'];
            }
            $object->op = $value_2;
            unset($data['op']);
        } elseif (array_key_exists('op', $data)) {
            $object->op = null;
            unset($data['op']);
        }
        if (array_key_exists('value', $data) && null !== $data['value']) {
            $value_3 = $data['value'];
            if (is_int($data['value'])) {
                $value_3 = $data['value'];
            } elseif (null === $data['value']) {
                $value_3 = $data['value'];
            }
            $object->value = $value_3;
            unset($data['value']);
        } elseif (array_key_exists('value', $data)) {
            $object->value = null;
            unset($data['value']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('major', get_object_vars($data)) && null !== ($data->major ?? null)) {
            $value = $data->major;
            if (is_int($data->major)) {
                $value = $data->major;
            } elseif (null === $data->major) {
                $value = $data->major;
            }
            $dataArray['major'] = $value;
        }
        if (array_key_exists('minor', get_object_vars($data)) && null !== ($data->minor ?? null)) {
            $value_1 = $data->minor;
            if (is_int($data->minor)) {
                $value_1 = $data->minor;
            } elseif (null === $data->minor) {
                $value_1 = $data->minor;
            }
            $dataArray['minor'] = $value_1;
        }
        if (array_key_exists('op', get_object_vars($data)) && null !== ($data->op ?? null)) {
            $value_2 = $data->op;
            if (is_string($data->op)) {
                $value_2 = $data->op;
            } elseif (null === $data->op) {
                $value_2 = $data->op;
            }
            $dataArray['op'] = $value_2;
        }
        if (array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $value_3 = $data->value;
            if (is_int($data->value)) {
                $value_3 = $data->value;
            } elseif (null === $data->value) {
                $value_3 = $data->value;
            }
            $dataArray['value'] = $value_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
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
