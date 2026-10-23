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

class EngineDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EngineDescription::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EngineDescription::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EngineDescription();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('EngineVersion', $data) && null !== $data['EngineVersion']) {
            $value = $data['EngineVersion'];
            if (is_string($data['EngineVersion'])) {
                $value = $data['EngineVersion'];
            } elseif (null === $data['EngineVersion']) {
                $value = $data['EngineVersion'];
            }
            $object->engineVersion = $value;
            unset($data['EngineVersion']);
        } elseif (array_key_exists('EngineVersion', $data)) {
            $object->engineVersion = null;
            unset($data['EngineVersion']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->labels = $value_1;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('Plugins', $data) && null !== $data['Plugins']) {
            $values_1 = [];
            foreach ($data['Plugins'] as $value_3) {
                $values_1[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\EngineDescriptionPluginsItem::class, 'json', $context);
            }
            $object->plugins = $values_1;
            unset($data['Plugins']);
        } elseif (array_key_exists('Plugins', $data)) {
            $object->plugins = null;
            unset($data['Plugins']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('engineVersion', get_object_vars($data)) && null !== ($data->engineVersion ?? null)) {
            $value = $data->engineVersion;
            if (is_string($data->engineVersion)) {
                $value = $data->engineVersion;
            } elseif (null === $data->engineVersion) {
                $value = $data->engineVersion;
            }
            $dataArray['EngineVersion'] = $value;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_1 = $data->labels;
            if (is_iterable($data->labels)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->labels) {
                $value_1 = $data->labels;
            }
            $dataArray['Labels'] = $value_1;
        }
        if (array_key_exists('plugins', get_object_vars($data)) && null !== ($data->plugins ?? null)) {
            $values_1 = [];
            foreach ($data->plugins as $value_3) {
                $normalized = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_1[] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['Plugins'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\EngineDescription::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
