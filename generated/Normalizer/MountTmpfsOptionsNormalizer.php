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
            $object->setSizeBytes($value);
        } elseif (array_key_exists('SizeBytes', $data) && null === $data['SizeBytes']) {
            $object->setSizeBytes(null);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value_1 = $data['Mode'];
            if (is_int($data['Mode'])) {
                $value_1 = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value_1 = $data['Mode'];
            }
            $object->setMode($value_1);
        } elseif (array_key_exists('Mode', $data) && null === $data['Mode']) {
            $object->setMode(null);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_2 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values = [];
                foreach ($data['Options'] as $value_3) {
                    $values_1 = [];
                    foreach ($value_3 as $value_4) {
                        $values_1[] = $value_4;
                    }
                    $values[] = $values_1;
                }
                $value_2 = $values;
            } elseif (null === $data['Options']) {
                $value_2 = $data['Options'];
            }
            $object->setOptions($value_2);
        } elseif (array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('sizeBytes')) {
            $value = $data->getSizeBytes();
            if (is_int($data->getSizeBytes())) {
                $value = $data->getSizeBytes();
            } elseif (null === $data->getSizeBytes()) {
                $value = $data->getSizeBytes();
            }
            $dataArray['SizeBytes'] = $value;
        }
        if ($data->isInitialized('mode')) {
            $value_1 = $data->getMode();
            if (is_int($data->getMode())) {
                $value_1 = $data->getMode();
            } elseif (null === $data->getMode()) {
                $value_1 = $data->getMode();
            }
            $dataArray['Mode'] = $value_1;
        }
        if ($data->isInitialized('options')) {
            $value_2 = $data->getOptions();
            if (is_array($data->getOptions())) {
                $values = [];
                foreach ($data->getOptions() as $value_3) {
                    $values_1 = [];
                    foreach ($value_3 as $value_4) {
                        $values_1[] = $value_4;
                    }
                    $values[] = $values_1;
                }
                $value_2 = $values;
            } elseif (null === $data->getOptions()) {
                $value_2 = $data->getOptions();
            }
            $dataArray['Options'] = $value_2;
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
