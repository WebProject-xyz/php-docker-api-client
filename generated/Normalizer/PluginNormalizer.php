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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Plugin();
        if (array_key_exists('Enabled', $data) && is_int($data['Enabled'])) {
            $data['Enabled'] = (bool) $data['Enabled'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
            unset($data['Id']);
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (array_key_exists('Enabled', $data)) {
            $object->setEnabled($data['Enabled']);
            unset($data['Enabled']);
        }
        if (array_key_exists('Settings', $data)) {
            $object->setSettings($this->denormalizer->denormalize($data['Settings'], \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class, 'json', $context));
            unset($data['Settings']);
        }
        if (array_key_exists('PluginReference', $data)) {
            $object->setPluginReference($data['PluginReference']);
            unset($data['PluginReference']);
        }
        if (array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class, 'json', $context));
            unset($data['Config']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['Id'] = $data->getId();
        }
        $dataArray['Name']     = $data->getName();
        $dataArray['Enabled']  = $data->getEnabled();
        $dataArray['Settings'] = $this->normalizer->normalize($data->getSettings(), 'json', $context);
        if ($data->isInitialized('pluginReference') && null !== $data->getPluginReference()) {
            $dataArray['PluginReference'] = $data->getPluginReference();
        }
        $dataArray['Config'] = $this->normalizer->normalize($data->getConfig(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
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
