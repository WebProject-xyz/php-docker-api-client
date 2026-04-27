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
            $object->setSubnet($value);
        } elseif (array_key_exists('Subnet', $data) && null === $data['Subnet']) {
            $object->setSubnet(null);
        }
        if (array_key_exists('IPRange', $data) && null !== $data['IPRange']) {
            $value_1 = $data['IPRange'];
            if (is_string($data['IPRange'])) {
                $value_1 = $data['IPRange'];
            } elseif (null === $data['IPRange']) {
                $value_1 = $data['IPRange'];
            }
            $object->setIPRange($value_1);
        } elseif (array_key_exists('IPRange', $data) && null === $data['IPRange']) {
            $object->setIPRange(null);
        }
        if (array_key_exists('Gateway', $data) && null !== $data['Gateway']) {
            $value_2 = $data['Gateway'];
            if (is_string($data['Gateway'])) {
                $value_2 = $data['Gateway'];
            } elseif (null === $data['Gateway']) {
                $value_2 = $data['Gateway'];
            }
            $object->setGateway($value_2);
        } elseif (array_key_exists('Gateway', $data) && null === $data['Gateway']) {
            $object->setGateway(null);
        }
        if (array_key_exists('AuxiliaryAddresses', $data) && null !== $data['AuxiliaryAddresses']) {
            $value_3 = $data['AuxiliaryAddresses'];
            if (is_array($data['AuxiliaryAddresses']) && $this->isOnlyNumericKeys($data['AuxiliaryAddresses'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['AuxiliaryAddresses'] as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data['AuxiliaryAddresses']) {
                $value_3 = $data['AuxiliaryAddresses'];
            }
            $object->setAuxiliaryAddresses($value_3);
        } elseif (array_key_exists('AuxiliaryAddresses', $data) && null === $data['AuxiliaryAddresses']) {
            $object->setAuxiliaryAddresses(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('subnet')) {
            $value = $data->getSubnet();
            if (is_string($data->getSubnet())) {
                $value = $data->getSubnet();
            } elseif (null === $data->getSubnet()) {
                $value = $data->getSubnet();
            }
            $dataArray['Subnet'] = $value;
        }
        if ($data->isInitialized('iPRange')) {
            $value_1 = $data->getIPRange();
            if (is_string($data->getIPRange())) {
                $value_1 = $data->getIPRange();
            } elseif (null === $data->getIPRange()) {
                $value_1 = $data->getIPRange();
            }
            $dataArray['IPRange'] = $value_1;
        }
        if ($data->isInitialized('gateway')) {
            $value_2 = $data->getGateway();
            if (is_string($data->getGateway())) {
                $value_2 = $data->getGateway();
            } elseif (null === $data->getGateway()) {
                $value_2 = $data->getGateway();
            }
            $dataArray['Gateway'] = $value_2;
        }
        if ($data->isInitialized('auxiliaryAddresses')) {
            $value_3 = $data->getAuxiliaryAddresses();
            if (is_object($data->getAuxiliaryAddresses())) {
                $values = [];
                foreach ($data->getAuxiliaryAddresses() as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data->getAuxiliaryAddresses()) {
                $value_3 = $data->getAuxiliaryAddresses();
            }
            $dataArray['AuxiliaryAddresses'] = $value_3;
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
