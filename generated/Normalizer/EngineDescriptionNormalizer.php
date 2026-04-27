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
            $object->setEngineVersion($value);
        } elseif (array_key_exists('EngineVersion', $data) && null === $data['EngineVersion']) {
            $object->setEngineVersion(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->setLabels($value_1);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('Plugins', $data) && null !== $data['Plugins']) {
            $value_3 = $data['Plugins'];
            if (is_array($data['Plugins']) && $this->isOnlyNumericKeys($data['Plugins'])) {
                $values_1 = [];
                foreach ($data['Plugins'] as $value_4) {
                    $values_1[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\EngineDescriptionPluginsItem::class, 'json', $context);
                }
                $value_3 = $values_1;
            } elseif (null === $data['Plugins']) {
                $value_3 = $data['Plugins'];
            }
            $object->setPlugins($value_3);
        } elseif (array_key_exists('Plugins', $data) && null === $data['Plugins']) {
            $object->setPlugins(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('engineVersion')) {
            $value = $data->getEngineVersion();
            if (is_string($data->getEngineVersion())) {
                $value = $data->getEngineVersion();
            } elseif (null === $data->getEngineVersion()) {
                $value = $data->getEngineVersion();
            }
            $dataArray['EngineVersion'] = $value;
        }
        if ($data->isInitialized('labels')) {
            $value_1 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values = [];
                foreach ($data->getLabels() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getLabels()) {
                $value_1 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_1;
        }
        if ($data->isInitialized('plugins')) {
            $value_3 = $data->getPlugins();
            if (is_array($data->getPlugins())) {
                $values_1 = [];
                foreach ($data->getPlugins() as $value_4) {
                    $values_1[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $value_3 = $values_1;
            } elseif (null === $data->getPlugins()) {
                $value_3 = $data->getPlugins();
            }
            $dataArray['Plugins'] = $value_3;
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
