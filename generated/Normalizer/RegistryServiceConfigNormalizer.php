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

class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('InsecureRegistryCIDRs', $data) && null !== $data['InsecureRegistryCIDRs']) {
            $values = [];
            foreach ($data['InsecureRegistryCIDRs'] as $value) {
                $values[] = $value;
            }
            $object->insecureRegistryCIDRs = $values;
            unset($data['InsecureRegistryCIDRs']);
        } elseif (array_key_exists('InsecureRegistryCIDRs', $data)) {
            $object->insecureRegistryCIDRs = null;
            unset($data['InsecureRegistryCIDRs']);
        }
        if (array_key_exists('IndexConfigs', $data)) {
            $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data['IndexConfigs'] as $key => $value_1) {
                $values_1[$key] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class, 'json', $context);
            }
            $object->indexConfigs = $values_1;
            unset($data['IndexConfigs']);
        }
        if (array_key_exists('Mirrors', $data) && null !== $data['Mirrors']) {
            $values_2 = [];
            foreach ($data['Mirrors'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->mirrors = $values_2;
            unset($data['Mirrors']);
        } elseif (array_key_exists('Mirrors', $data)) {
            $object->mirrors = null;
            unset($data['Mirrors']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('insecureRegistryCIDRs', get_object_vars($data)) && null !== ($data->insecureRegistryCIDRs ?? null)) {
            $values = [];
            foreach ($data->insecureRegistryCIDRs as $value) {
                $values[] = $value;
            }
            $dataArray['InsecureRegistryCIDRs'] = $values;
        }
        if (array_key_exists('indexConfigs', get_object_vars($data)) && null !== ($data->indexConfigs ?? null)) {
            $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data->indexConfigs as $key => $value_1) {
                $normalized     = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[$key] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['IndexConfigs'] = $values_1;
        }
        if (array_key_exists('mirrors', get_object_vars($data)) && null !== ($data->mirrors ?? null)) {
            $values_2 = [];
            foreach ($data->mirrors as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Mirrors'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
