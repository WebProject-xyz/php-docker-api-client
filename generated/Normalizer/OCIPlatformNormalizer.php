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
            $object->architecture = $value;
            unset($data['architecture']);
        } elseif (array_key_exists('architecture', $data)) {
            $object->architecture = null;
            unset($data['architecture']);
        }
        if (array_key_exists('os', $data) && null !== $data['os']) {
            $value_1 = $data['os'];
            if (is_string($data['os'])) {
                $value_1 = $data['os'];
            } elseif (null === $data['os']) {
                $value_1 = $data['os'];
            }
            $object->os = $value_1;
            unset($data['os']);
        } elseif (array_key_exists('os', $data)) {
            $object->os = null;
            unset($data['os']);
        }
        if (array_key_exists('os.version', $data) && null !== $data['os.version']) {
            $value_2 = $data['os.version'];
            if (is_string($data['os.version'])) {
                $value_2 = $data['os.version'];
            } elseif (null === $data['os.version']) {
                $value_2 = $data['os.version'];
            }
            $object->osVersion = $value_2;
            unset($data['os.version']);
        } elseif (array_key_exists('os.version', $data)) {
            $object->osVersion = null;
            unset($data['os.version']);
        }
        if (array_key_exists('os.features', $data) && null !== $data['os.features']) {
            $values = [];
            foreach ($data['os.features'] as $value_3) {
                $values[] = $value_3;
            }
            $object->osFeatures = $values;
            unset($data['os.features']);
        } elseif (array_key_exists('os.features', $data)) {
            $object->osFeatures = null;
            unset($data['os.features']);
        }
        if (array_key_exists('variant', $data) && null !== $data['variant']) {
            $value_4 = $data['variant'];
            if (is_string($data['variant'])) {
                $value_4 = $data['variant'];
            } elseif (null === $data['variant']) {
                $value_4 = $data['variant'];
            }
            $object->variant = $value_4;
            unset($data['variant']);
        } elseif (array_key_exists('variant', $data)) {
            $object->variant = null;
            unset($data['variant']);
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
        if (array_key_exists('architecture', get_object_vars($data)) && null !== ($data->architecture ?? null)) {
            $value = $data->architecture;
            if (is_string($data->architecture)) {
                $value = $data->architecture;
            } elseif (null === $data->architecture) {
                $value = $data->architecture;
            }
            $dataArray['architecture'] = $value;
        }
        if (array_key_exists('os', get_object_vars($data)) && null !== ($data->os ?? null)) {
            $value_1 = $data->os;
            if (is_string($data->os)) {
                $value_1 = $data->os;
            } elseif (null === $data->os) {
                $value_1 = $data->os;
            }
            $dataArray['os'] = $value_1;
        }
        if (array_key_exists('osVersion', get_object_vars($data)) && null !== ($data->osVersion ?? null)) {
            $value_2 = $data->osVersion;
            if (is_string($data->osVersion)) {
                $value_2 = $data->osVersion;
            } elseif (null === $data->osVersion) {
                $value_2 = $data->osVersion;
            }
            $dataArray['os.version'] = $value_2;
        }
        if (array_key_exists('osFeatures', get_object_vars($data)) && null !== ($data->osFeatures ?? null)) {
            $values = [];
            foreach ($data->osFeatures as $value_3) {
                $values[] = $value_3;
            }
            $dataArray['os.features'] = $values;
        }
        if (array_key_exists('variant', get_object_vars($data)) && null !== ($data->variant ?? null)) {
            $value_4 = $data->variant;
            if (is_string($data->variant)) {
                $value_4 = $data->variant;
            } elseif (null === $data->variant) {
                $value_4 = $data->variant;
            }
            $dataArray['variant'] = $value_4;
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
        return [\WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
