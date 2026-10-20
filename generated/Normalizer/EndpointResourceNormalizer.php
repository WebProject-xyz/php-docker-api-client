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
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $value_1 = $data['EndpointID'];
            if (is_string($data['EndpointID'])) {
                $value_1 = $data['EndpointID'];
            } elseif (null === $data['EndpointID']) {
                $value_1 = $data['EndpointID'];
            }
            $object->endpointID = $value_1;
            unset($data['EndpointID']);
        } elseif (array_key_exists('EndpointID', $data)) {
            $object->endpointID = null;
            unset($data['EndpointID']);
        }
        if (array_key_exists('MacAddress', $data) && null !== $data['MacAddress']) {
            $value_2 = $data['MacAddress'];
            if (is_string($data['MacAddress'])) {
                $value_2 = $data['MacAddress'];
            } elseif (null === $data['MacAddress']) {
                $value_2 = $data['MacAddress'];
            }
            $object->macAddress = $value_2;
            unset($data['MacAddress']);
        } elseif (array_key_exists('MacAddress', $data)) {
            $object->macAddress = null;
            unset($data['MacAddress']);
        }
        if (array_key_exists('IPv4Address', $data) && null !== $data['IPv4Address']) {
            $value_3 = $data['IPv4Address'];
            if (is_string($data['IPv4Address'])) {
                $value_3 = $data['IPv4Address'];
            } elseif (null === $data['IPv4Address']) {
                $value_3 = $data['IPv4Address'];
            }
            $object->iPv4Address = $value_3;
            unset($data['IPv4Address']);
        } elseif (array_key_exists('IPv4Address', $data)) {
            $object->iPv4Address = null;
            unset($data['IPv4Address']);
        }
        if (array_key_exists('IPv6Address', $data) && null !== $data['IPv6Address']) {
            $value_4 = $data['IPv6Address'];
            if (is_string($data['IPv6Address'])) {
                $value_4 = $data['IPv6Address'];
            } elseif (null === $data['IPv6Address']) {
                $value_4 = $data['IPv6Address'];
            }
            $object->iPv6Address = $value_4;
            unset($data['IPv6Address']);
        } elseif (array_key_exists('IPv6Address', $data)) {
            $object->iPv6Address = null;
            unset($data['IPv6Address']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('endpointID', get_object_vars($data)) && null !== ($data->endpointID ?? null)) {
            $value_1 = $data->endpointID;
            if (is_string($data->endpointID)) {
                $value_1 = $data->endpointID;
            } elseif (null === $data->endpointID) {
                $value_1 = $data->endpointID;
            }
            $dataArray['EndpointID'] = $value_1;
        }
        if (array_key_exists('macAddress', get_object_vars($data)) && null !== ($data->macAddress ?? null)) {
            $value_2 = $data->macAddress;
            if (is_string($data->macAddress)) {
                $value_2 = $data->macAddress;
            } elseif (null === $data->macAddress) {
                $value_2 = $data->macAddress;
            }
            $dataArray['MacAddress'] = $value_2;
        }
        if (array_key_exists('iPv4Address', get_object_vars($data)) && null !== ($data->iPv4Address ?? null)) {
            $value_3 = $data->iPv4Address;
            if (is_string($data->iPv4Address)) {
                $value_3 = $data->iPv4Address;
            } elseif (null === $data->iPv4Address) {
                $value_3 = $data->iPv4Address;
            }
            $dataArray['IPv4Address'] = $value_3;
        }
        if (array_key_exists('iPv6Address', get_object_vars($data)) && null !== ($data->iPv6Address ?? null)) {
            $value_4 = $data->iPv6Address;
            if (is_string($data->iPv6Address)) {
                $value_4 = $data->iPv6Address;
            } elseif (null === $data->iPv6Address) {
                $value_4 = $data->iPv6Address;
            }
            $dataArray['IPv6Address'] = $value_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
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
