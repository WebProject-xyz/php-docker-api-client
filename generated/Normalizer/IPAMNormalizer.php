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

class IPAMNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\IPAM::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\IPAM::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\IPAM();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value = $data['Driver'];
            }
            $object->setDriver($value);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('Config', $data) && null !== $data['Config']) {
            $value_1 = $data['Config'];
            if (is_array($data['Config']) && $this->isOnlyNumericKeys($data['Config'])) {
                $values = [];
                foreach ($data['Config'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data['Config']) {
                $value_1 = $data['Config'];
            }
            $object->setConfig($value_1);
        } elseif (array_key_exists('Config', $data) && null === $data['Config']) {
            $object->setConfig(null);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_3 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_4) {
                    $values_1[$key] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data['Options']) {
                $value_3 = $data['Options'];
            }
            $object->setOptions($value_3);
        } elseif (array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('driver')) {
            $value = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value = $data->getDriver();
            }
            $dataArray['Driver'] = $value;
        }
        if ($data->isInitialized('config')) {
            $value_1 = $data->getConfig();
            if (is_array($data->getConfig())) {
                $values = [];
                foreach ($data->getConfig() as $value_2) {
                    $values[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data->getConfig()) {
                $value_1 = $data->getConfig();
            }
            $dataArray['Config'] = $value_1;
        }
        if ($data->isInitialized('options')) {
            $value_3 = $data->getOptions();
            if (is_object($data->getOptions())) {
                $values_1 = [];
                foreach ($data->getOptions() as $key => $value_4) {
                    $values_1[$key] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data->getOptions()) {
                $value_3 = $data->getOptions();
            }
            $dataArray['Options'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\IPAM::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
