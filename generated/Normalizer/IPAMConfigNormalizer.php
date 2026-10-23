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

class IPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\IPAMConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Subnet', $data) && null !== $data['Subnet']) {
            $value = $data['Subnet'];
            if (is_string($data['Subnet'])) {
                $value = $data['Subnet'];
            } elseif (null === $data['Subnet']) {
                $value = $data['Subnet'];
            }
            $object->subnet = $value;
            unset($data['Subnet']);
        } elseif (array_key_exists('Subnet', $data)) {
            $object->subnet = null;
            unset($data['Subnet']);
        }
        if (array_key_exists('IPRange', $data) && null !== $data['IPRange']) {
            $value_1 = $data['IPRange'];
            if (is_string($data['IPRange'])) {
                $value_1 = $data['IPRange'];
            } elseif (null === $data['IPRange']) {
                $value_1 = $data['IPRange'];
            }
            $object->iPRange = $value_1;
            unset($data['IPRange']);
        } elseif (array_key_exists('IPRange', $data)) {
            $object->iPRange = null;
            unset($data['IPRange']);
        }
        if (array_key_exists('Gateway', $data) && null !== $data['Gateway']) {
            $value_2 = $data['Gateway'];
            if (is_string($data['Gateway'])) {
                $value_2 = $data['Gateway'];
            } elseif (null === $data['Gateway']) {
                $value_2 = $data['Gateway'];
            }
            $object->gateway = $value_2;
            unset($data['Gateway']);
        } elseif (array_key_exists('Gateway', $data)) {
            $object->gateway = null;
            unset($data['Gateway']);
        }
        if (array_key_exists('AuxiliaryAddresses', $data) && null !== $data['AuxiliaryAddresses']) {
            $value_3 = $data['AuxiliaryAddresses'];
            if (is_array($data['AuxiliaryAddresses']) && $this->isOnlyNumericKeys($data['AuxiliaryAddresses'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['AuxiliaryAddresses'] as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data['AuxiliaryAddresses']) {
                $value_3 = $data['AuxiliaryAddresses'];
            }
            $object->auxiliaryAddresses = $value_3;
            unset($data['AuxiliaryAddresses']);
        } elseif (array_key_exists('AuxiliaryAddresses', $data)) {
            $object->auxiliaryAddresses = null;
            unset($data['AuxiliaryAddresses']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('subnet', get_object_vars($data)) && null !== ($data->subnet ?? null)) {
            $value = $data->subnet;
            if (is_string($data->subnet)) {
                $value = $data->subnet;
            } elseif (null === $data->subnet) {
                $value = $data->subnet;
            }
            $dataArray['Subnet'] = $value;
        }
        if (array_key_exists('iPRange', get_object_vars($data)) && null !== ($data->iPRange ?? null)) {
            $value_1 = $data->iPRange;
            if (is_string($data->iPRange)) {
                $value_1 = $data->iPRange;
            } elseif (null === $data->iPRange) {
                $value_1 = $data->iPRange;
            }
            $dataArray['IPRange'] = $value_1;
        }
        if (array_key_exists('gateway', get_object_vars($data)) && null !== ($data->gateway ?? null)) {
            $value_2 = $data->gateway;
            if (is_string($data->gateway)) {
                $value_2 = $data->gateway;
            } elseif (null === $data->gateway) {
                $value_2 = $data->gateway;
            }
            $dataArray['Gateway'] = $value_2;
        }
        if (array_key_exists('auxiliaryAddresses', get_object_vars($data)) && null !== ($data->auxiliaryAddresses ?? null)) {
            $value_3 = $data->auxiliaryAddresses;
            if (is_iterable($data->auxiliaryAddresses)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->auxiliaryAddresses as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data->auxiliaryAddresses) {
                $value_3 = $data->auxiliaryAddresses;
            }
            $dataArray['AuxiliaryAddresses'] = $value_3;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
