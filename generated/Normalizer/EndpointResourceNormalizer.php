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

class EndpointResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EndpointResource::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointResource::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointResource();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $value_1 = $data['EndpointID'];
            if (is_string($data['EndpointID'])) {
                $value_1 = $data['EndpointID'];
            } elseif (null === $data['EndpointID']) {
                $value_1 = $data['EndpointID'];
            }
            $object->setEndpointID($value_1);
        } elseif (array_key_exists('EndpointID', $data) && null === $data['EndpointID']) {
            $object->setEndpointID(null);
        }
        if (array_key_exists('MacAddress', $data) && null !== $data['MacAddress']) {
            $value_2 = $data['MacAddress'];
            if (is_string($data['MacAddress'])) {
                $value_2 = $data['MacAddress'];
            } elseif (null === $data['MacAddress']) {
                $value_2 = $data['MacAddress'];
            }
            $object->setMacAddress($value_2);
        } elseif (array_key_exists('MacAddress', $data) && null === $data['MacAddress']) {
            $object->setMacAddress(null);
        }
        if (array_key_exists('IPv4Address', $data) && null !== $data['IPv4Address']) {
            $value_3 = $data['IPv4Address'];
            if (is_string($data['IPv4Address'])) {
                $value_3 = $data['IPv4Address'];
            } elseif (null === $data['IPv4Address']) {
                $value_3 = $data['IPv4Address'];
            }
            $object->setIPv4Address($value_3);
        } elseif (array_key_exists('IPv4Address', $data) && null === $data['IPv4Address']) {
            $object->setIPv4Address(null);
        }
        if (array_key_exists('IPv6Address', $data) && null !== $data['IPv6Address']) {
            $value_4 = $data['IPv6Address'];
            if (is_string($data['IPv6Address'])) {
                $value_4 = $data['IPv6Address'];
            } elseif (null === $data['IPv6Address']) {
                $value_4 = $data['IPv6Address'];
            }
            $object->setIPv6Address($value_4);
        } elseif (array_key_exists('IPv6Address', $data) && null === $data['IPv6Address']) {
            $object->setIPv6Address(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name')) {
            $value = $data->getName();
            if (is_string($data->getName())) {
                $value = $data->getName();
            } elseif (null === $data->getName()) {
                $value = $data->getName();
            }
            $dataArray['Name'] = $value;
        }
        if ($data->isInitialized('endpointID')) {
            $value_1 = $data->getEndpointID();
            if (is_string($data->getEndpointID())) {
                $value_1 = $data->getEndpointID();
            } elseif (null === $data->getEndpointID()) {
                $value_1 = $data->getEndpointID();
            }
            $dataArray['EndpointID'] = $value_1;
        }
        if ($data->isInitialized('macAddress')) {
            $value_2 = $data->getMacAddress();
            if (is_string($data->getMacAddress())) {
                $value_2 = $data->getMacAddress();
            } elseif (null === $data->getMacAddress()) {
                $value_2 = $data->getMacAddress();
            }
            $dataArray['MacAddress'] = $value_2;
        }
        if ($data->isInitialized('iPv4Address')) {
            $value_3 = $data->getIPv4Address();
            if (is_string($data->getIPv4Address())) {
                $value_3 = $data->getIPv4Address();
            } elseif (null === $data->getIPv4Address()) {
                $value_3 = $data->getIPv4Address();
            }
            $dataArray['IPv4Address'] = $value_3;
        }
        if ($data->isInitialized('iPv6Address')) {
            $value_4 = $data->getIPv6Address();
            if (is_string($data->getIPv6Address())) {
                $value_4 = $data->getIPv6Address();
            } elseif (null === $data->getIPv6Address()) {
                $value_4 = $data->getIPv6Address();
            }
            $dataArray['IPv6Address'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\EndpointResource::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
