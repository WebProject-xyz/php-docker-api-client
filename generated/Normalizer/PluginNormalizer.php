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

class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Plugin::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Plugin::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Plugin();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Enabled', $data) && is_int($data['Enabled'])) {
            $data['Enabled'] = (bool) $data['Enabled'];
        }
        if (array_key_exists('Id', $data) && null !== $data['Id']) {
            $value = $data['Id'];
            if (is_string($data['Id'])) {
                $value = $data['Id'];
            } elseif (null === $data['Id']) {
                $value = $data['Id'];
            }
            $object->id = $value;
            unset($data['Id']);
        } elseif (array_key_exists('Id', $data)) {
            $object->id = null;
            unset($data['Id']);
        }
        if (array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
            unset($data['Name']);
        }
        if (array_key_exists('Enabled', $data)) {
            $object->enabled = $data['Enabled'];
            unset($data['Enabled']);
        }
        if (array_key_exists('Settings', $data)) {
            $object->settings = $this->denormalizer->denormalize($data['Settings'], \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class, 'json', $context);
            unset($data['Settings']);
        }
        if (array_key_exists('PluginReference', $data)) {
            $object->pluginReference = $data['PluginReference'];
            unset($data['PluginReference']);
        }
        if (array_key_exists('Config', $data)) {
            $object->config = $this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class, 'json', $context);
            unset($data['Config']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $value = $data->id;
            if (is_string($data->id)) {
                $value = $data->id;
            } elseif (null === $data->id) {
                $value = $data->id;
            }
            $dataArray['Id'] = $value;
        }
        $dataArray['Name']     = $data->name;
        $dataArray['Enabled']  = $data->enabled;
        $normalized            = null === $data->settings ? null : $this->normalizer->normalize($data->settings, 'json', $context);
        $dataArray['Settings'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        if (array_key_exists('pluginReference', get_object_vars($data)) && null !== ($data->pluginReference ?? null)) {
            $dataArray['PluginReference'] = $data->pluginReference;
        }
        $normalized_1        = null === $data->config ? null : $this->normalizer->normalize($data->config, 'json', $context);
        $dataArray['Config'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Plugin::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
