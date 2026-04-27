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

class NetworkSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('SandboxID', $data) && null !== $data['SandboxID']) {
            $value = $data['SandboxID'];
            if (is_string($data['SandboxID'])) {
                $value = $data['SandboxID'];
            } elseif (null === $data['SandboxID']) {
                $value = $data['SandboxID'];
            }
            $object->setSandboxID($value);
        } elseif (array_key_exists('SandboxID', $data) && null === $data['SandboxID']) {
            $object->setSandboxID(null);
        }
        if (array_key_exists('SandboxKey', $data) && null !== $data['SandboxKey']) {
            $value_1 = $data['SandboxKey'];
            if (is_string($data['SandboxKey'])) {
                $value_1 = $data['SandboxKey'];
            } elseif (null === $data['SandboxKey']) {
                $value_1 = $data['SandboxKey'];
            }
            $object->setSandboxKey($value_1);
        } elseif (array_key_exists('SandboxKey', $data) && null === $data['SandboxKey']) {
            $object->setSandboxKey(null);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $value_2 = $data['Ports'];
            if (is_array($data['Ports']) && $this->isOnlyNumericKeys($data['Ports'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Ports'] as $key => $value_3) {
                    $value_4 = $value_3;
                    if (is_array($value_3) && $this->isOnlyNumericKeys($value_3)) {
                        $values_1 = [];
                        foreach ($value_3 as $value_5) {
                            $values_1[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\PortBinding::class, 'json', $context);
                        }
                        $value_4 = $values_1;
                    } elseif (null === $value_3) {
                        $value_4 = $value_3;
                    }
                    $values[$key] = $value_4;
                }
                $value_2 = $values;
            } elseif (null === $data['Ports']) {
                $value_2 = $data['Ports'];
            }
            $object->setPorts($value_2);
        } elseif (array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }
        if (array_key_exists('Networks', $data)) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Networks'] as $key_1 => $value_6) {
                $values_2[$key_1] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class, 'json', $context);
            }
            $object->setNetworks($values_2);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('sandboxID')) {
            $value = $data->getSandboxID();
            if (is_string($data->getSandboxID())) {
                $value = $data->getSandboxID();
            } elseif (null === $data->getSandboxID()) {
                $value = $data->getSandboxID();
            }
            $dataArray['SandboxID'] = $value;
        }
        if ($data->isInitialized('sandboxKey')) {
            $value_1 = $data->getSandboxKey();
            if (is_string($data->getSandboxKey())) {
                $value_1 = $data->getSandboxKey();
            } elseif (null === $data->getSandboxKey()) {
                $value_1 = $data->getSandboxKey();
            }
            $dataArray['SandboxKey'] = $value_1;
        }
        if ($data->isInitialized('ports')) {
            $value_2 = $data->getPorts();
            if (is_object($data->getPorts())) {
                $values = [];
                foreach ($data->getPorts() as $key => $value_3) {
                    $value_4 = $value_3;
                    if (is_array($value_3)) {
                        $values_1 = [];
                        foreach ($value_3 as $value_5) {
                            $values_1[] = $this->normalizer->normalize($value_5, 'json', $context);
                        }
                        $value_4 = $values_1;
                    } elseif (null === $value_3) {
                        $value_4 = $value_3;
                    }
                    $values[$key] = $value_4;
                }
                $value_2 = $values;
            } elseif (null === $data->getPorts()) {
                $value_2 = $data->getPorts();
            }
            $dataArray['Ports'] = $value_2;
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $values_2 = [];
            foreach ($data->getNetworks() as $key_1 => $value_6) {
                $values_2[$key_1] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['Networks'] = $values_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
