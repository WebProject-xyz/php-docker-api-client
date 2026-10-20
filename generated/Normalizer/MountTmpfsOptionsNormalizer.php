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

class MountTmpfsOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('SizeBytes', $data) && null !== $data['SizeBytes']) {
            $value = $data['SizeBytes'];
            if (is_int($data['SizeBytes'])) {
                $value = $data['SizeBytes'];
            } elseif (null === $data['SizeBytes']) {
                $value = $data['SizeBytes'];
            }
            $object->sizeBytes = $value;
            unset($data['SizeBytes']);
        } elseif (array_key_exists('SizeBytes', $data)) {
            $object->sizeBytes = null;
            unset($data['SizeBytes']);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value_1 = $data['Mode'];
            if (is_int($data['Mode'])) {
                $value_1 = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value_1 = $data['Mode'];
            }
            $object->mode = $value_1;
            unset($data['Mode']);
        } elseif (array_key_exists('Mode', $data)) {
            $object->mode = null;
            unset($data['Mode']);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $values = [];
            foreach ($data['Options'] as $value_2) {
                $values_1 = [];
                foreach ($value_2 as $value_3) {
                    $values_1[] = $value_3;
                }
                $values[] = $values_1;
            }
            $object->options = $values;
            unset($data['Options']);
        } elseif (array_key_exists('Options', $data)) {
            $object->options = null;
            unset($data['Options']);
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
        if (array_key_exists('sizeBytes', get_object_vars($data)) && null !== ($data->sizeBytes ?? null)) {
            $value = $data->sizeBytes;
            if (is_int($data->sizeBytes)) {
                $value = $data->sizeBytes;
            } elseif (null === $data->sizeBytes) {
                $value = $data->sizeBytes;
            }
            $dataArray['SizeBytes'] = $value;
        }
        if (array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $value_1 = $data->mode;
            if (is_int($data->mode)) {
                $value_1 = $data->mode;
            } elseif (null === $data->mode) {
                $value_1 = $data->mode;
            }
            $dataArray['Mode'] = $value_1;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $values = [];
            foreach ($data->options as $value_2) {
                $values_1 = [];
                foreach ($value_2 as $value_3) {
                    $values_1[] = $value_3;
                }
                $values[] = $values_1;
            }
            $dataArray['Options'] = $values;
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
        return [\WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
