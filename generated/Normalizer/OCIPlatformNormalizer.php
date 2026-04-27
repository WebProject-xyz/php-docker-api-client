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

class OCIPlatformNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\OCIPlatform();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('architecture', $data) && null !== $data['architecture']) {
            $value = $data['architecture'];
            if (is_string($data['architecture'])) {
                $value = $data['architecture'];
            } elseif (null === $data['architecture']) {
                $value = $data['architecture'];
            }
            $object->setArchitecture($value);
        } elseif (array_key_exists('architecture', $data) && null === $data['architecture']) {
            $object->setArchitecture(null);
        }
        if (array_key_exists('os', $data) && null !== $data['os']) {
            $value_1 = $data['os'];
            if (is_string($data['os'])) {
                $value_1 = $data['os'];
            } elseif (null === $data['os']) {
                $value_1 = $data['os'];
            }
            $object->setOs($value_1);
        } elseif (array_key_exists('os', $data) && null === $data['os']) {
            $object->setOs(null);
        }
        if (array_key_exists('os.version', $data) && null !== $data['os.version']) {
            $value_2 = $data['os.version'];
            if (is_string($data['os.version'])) {
                $value_2 = $data['os.version'];
            } elseif (null === $data['os.version']) {
                $value_2 = $data['os.version'];
            }
            $object->setOsVersion($value_2);
        } elseif (array_key_exists('os.version', $data) && null === $data['os.version']) {
            $object->setOsVersion(null);
        }
        if (array_key_exists('os.features', $data) && null !== $data['os.features']) {
            $value_3 = $data['os.features'];
            if (is_array($data['os.features']) && $this->isOnlyNumericKeys($data['os.features'])) {
                $values = [];
                foreach ($data['os.features'] as $value_4) {
                    $values[] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data['os.features']) {
                $value_3 = $data['os.features'];
            }
            $object->setOsFeatures($value_3);
        } elseif (array_key_exists('os.features', $data) && null === $data['os.features']) {
            $object->setOsFeatures(null);
        }
        if (array_key_exists('variant', $data) && null !== $data['variant']) {
            $value_5 = $data['variant'];
            if (is_string($data['variant'])) {
                $value_5 = $data['variant'];
            } elseif (null === $data['variant']) {
                $value_5 = $data['variant'];
            }
            $object->setVariant($value_5);
        } elseif (array_key_exists('variant', $data) && null === $data['variant']) {
            $object->setVariant(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('architecture')) {
            $value = $data->getArchitecture();
            if (is_string($data->getArchitecture())) {
                $value = $data->getArchitecture();
            } elseif (null === $data->getArchitecture()) {
                $value = $data->getArchitecture();
            }
            $dataArray['architecture'] = $value;
        }
        if ($data->isInitialized('os')) {
            $value_1 = $data->getOs();
            if (is_string($data->getOs())) {
                $value_1 = $data->getOs();
            } elseif (null === $data->getOs()) {
                $value_1 = $data->getOs();
            }
            $dataArray['os'] = $value_1;
        }
        if ($data->isInitialized('osVersion')) {
            $value_2 = $data->getOsVersion();
            if (is_string($data->getOsVersion())) {
                $value_2 = $data->getOsVersion();
            } elseif (null === $data->getOsVersion()) {
                $value_2 = $data->getOsVersion();
            }
            $dataArray['os.version'] = $value_2;
        }
        if ($data->isInitialized('osFeatures')) {
            $value_3 = $data->getOsFeatures();
            if (is_array($data->getOsFeatures())) {
                $values = [];
                foreach ($data->getOsFeatures() as $value_4) {
                    $values[] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data->getOsFeatures()) {
                $value_3 = $data->getOsFeatures();
            }
            $dataArray['os.features'] = $value_3;
        }
        if ($data->isInitialized('variant')) {
            $value_5 = $data->getVariant();
            if (is_string($data->getVariant())) {
                $value_5 = $data->getVariant();
            } elseif (null === $data->getVariant()) {
                $value_5 = $data->getVariant();
            }
            $dataArray['variant'] = $value_5;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
