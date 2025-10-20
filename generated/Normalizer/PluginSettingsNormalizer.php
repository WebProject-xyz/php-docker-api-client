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

class PluginSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginSettings();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\PluginSettingsConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Mounts', $data)) {
            $values = [];
            foreach ($data['Mounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\PluginMount::class, 'json', $context);
            }
            $object->setMounts($values);
            unset($data['Mounts']);
        }
        if (array_key_exists('Env', $data)) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
            unset($data['Env']);
        }
        if (array_key_exists('Args', $data)) {
            $values_2 = [];
            foreach ($data['Args'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
            unset($data['Args']);
        }
        if (array_key_exists('Devices', $data)) {
            $values_3 = [];
            foreach ($data['Devices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\PluginDevice::class, 'json', $context);
            }
            $object->setDevices($values_3);
            unset($data['Devices']);
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
        $values    = [];
        foreach ($data->getMounts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['Mounts'] = $values;
        $values_1            = [];
        foreach ($data->getEnv() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['Env'] = $values_1;
        $values_2         = [];
        foreach ($data->getArgs() as $value_2) {
            $values_2[] = $value_2;
        }
        $dataArray['Args'] = $values_2;
        $values_3          = [];
        foreach ($data->getDevices() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $dataArray['Devices'] = $values_3;
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\PluginSettingsConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PluginSettings::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
