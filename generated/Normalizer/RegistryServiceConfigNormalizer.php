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
            $value = $data['InsecureRegistryCIDRs'];
            if (is_array($data['InsecureRegistryCIDRs']) && $this->isOnlyNumericKeys($data['InsecureRegistryCIDRs'])) {
                $values = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['InsecureRegistryCIDRs']) {
                $value = $data['InsecureRegistryCIDRs'];
            }
            $object->setInsecureRegistryCIDRs($value);
        } elseif (array_key_exists('InsecureRegistryCIDRs', $data) && null === $data['InsecureRegistryCIDRs']) {
            $object->setInsecureRegistryCIDRs(null);
        }
        if (array_key_exists('IndexConfigs', $data)) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['IndexConfigs'] as $key => $value_2) {
                $values_1[$key] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class, 'json', $context);
            }
            $object->setIndexConfigs($values_1);
        }
        if (array_key_exists('Mirrors', $data) && null !== $data['Mirrors']) {
            $value_3 = $data['Mirrors'];
            if (is_array($data['Mirrors']) && $this->isOnlyNumericKeys($data['Mirrors'])) {
                $values_2 = [];
                foreach ($data['Mirrors'] as $value_4) {
                    $values_2[] = $value_4;
                }
                $value_3 = $values_2;
            } elseif (null === $data['Mirrors']) {
                $value_3 = $data['Mirrors'];
            }
            $object->setMirrors($value_3);
        } elseif (array_key_exists('Mirrors', $data) && null === $data['Mirrors']) {
            $object->setMirrors(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('insecureRegistryCIDRs')) {
            $value = $data->getInsecureRegistryCIDRs();
            if (is_array($data->getInsecureRegistryCIDRs())) {
                $values = [];
                foreach ($data->getInsecureRegistryCIDRs() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->getInsecureRegistryCIDRs()) {
                $value = $data->getInsecureRegistryCIDRs();
            }
            $dataArray['InsecureRegistryCIDRs'] = $value;
        }
        if ($data->isInitialized('indexConfigs') && null !== $data->getIndexConfigs()) {
            $values_1 = [];
            foreach ($data->getIndexConfigs() as $key => $value_2) {
                $values_1[$key] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['IndexConfigs'] = $values_1;
        }
        if ($data->isInitialized('mirrors')) {
            $value_3 = $data->getMirrors();
            if (is_array($data->getMirrors())) {
                $values_2 = [];
                foreach ($data->getMirrors() as $value_4) {
                    $values_2[] = $value_4;
                }
                $value_3 = $values_2;
            } elseif (null === $data->getMirrors()) {
                $value_3 = $data->getMirrors();
            }
            $dataArray['Mirrors'] = $value_3;
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
