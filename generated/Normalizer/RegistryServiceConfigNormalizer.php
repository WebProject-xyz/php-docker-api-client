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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\RegistryServiceConfigConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('InsecureRegistryCIDRs', $data)) {
            $values = [];
            foreach ($data['InsecureRegistryCIDRs'] as $value) {
                $values[] = $value;
            }
            $object->setInsecureRegistryCIDRs($values);
            unset($data['InsecureRegistryCIDRs']);
        }
        if (array_key_exists('IndexConfigs', $data)) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['IndexConfigs'] as $key => $value_1) {
                $values_1[$key] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class, 'json', $context);
            }
            $object->setIndexConfigs($values_1);
            unset($data['IndexConfigs']);
        }
        if (array_key_exists('Mirrors', $data)) {
            $values_2 = [];
            foreach ($data['Mirrors'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMirrors($values_2);
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
        if ($data->isInitialized('insecureRegistryCIDRs') && null !== $data->getInsecureRegistryCIDRs()) {
            $values = [];
            foreach ($data->getInsecureRegistryCIDRs() as $value) {
                $values[] = $value;
            }
            $dataArray['InsecureRegistryCIDRs'] = $values;
        }
        if ($data->isInitialized('indexConfigs') && null !== $data->getIndexConfigs()) {
            $values_1 = [];
            foreach ($data->getIndexConfigs() as $key => $value_1) {
                $values_1[$key] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['IndexConfigs'] = $values_1;
        }
        if ($data->isInitialized('mirrors') && null !== $data->getMirrors()) {
            $values_2 = [];
            foreach ($data->getMirrors() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Mirrors'] = $values_2;
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\RegistryServiceConfigConstraint());
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
