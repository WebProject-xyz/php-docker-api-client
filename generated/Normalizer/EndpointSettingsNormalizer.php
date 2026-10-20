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
use function is_string;

class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointSettings();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('IPAMConfig', $data) && null !== $data['IPAMConfig']) {
            $object->iPAMConfig = $this->denormalizer->denormalize($data['IPAMConfig'], \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class, 'json', $context);
            unset($data['IPAMConfig']);
        } elseif (array_key_exists('IPAMConfig', $data)) {
            $object->iPAMConfig = null;
            unset($data['IPAMConfig']);
        }
        if (array_key_exists('Links', $data) && null !== $data['Links']) {
            $values = [];
            foreach ($data['Links'] as $value) {
                $values[] = $value;
            }
            $object->links = $values;
            unset($data['Links']);
        } elseif (array_key_exists('Links', $data)) {
            $object->links = null;
            unset($data['Links']);
        }
        if (array_key_exists('MacAddress', $data) && null !== $data['MacAddress']) {
            $value_1 = $data['MacAddress'];
            if (is_string($data['MacAddress'])) {
                $value_1 = $data['MacAddress'];
            } elseif (null === $data['MacAddress']) {
                $value_1 = $data['MacAddress'];
            }
            $object->macAddress = $value_1;
            unset($data['MacAddress']);
        } elseif (array_key_exists('MacAddress', $data)) {
            $object->macAddress = null;
            unset($data['MacAddress']);
        }
        if (array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
            $values_1 = [];
            foreach ($data['Aliases'] as $value_2) {
                $values_1[] = $value_2;
            }
            $object->aliases = $values_1;
            unset($data['Aliases']);
        } elseif (array_key_exists('Aliases', $data)) {
            $object->aliases = null;
            unset($data['Aliases']);
        }
        if (array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
            $value_3 = $data['DriverOpts'];
            if (is_array($data['DriverOpts']) && $this->isOnlyNumericKeys($data['DriverOpts'])) {
                $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['DriverOpts'] as $key => $value_4) {
                    $values_2[$key] = $value_4;
                }
                $value_3 = $values_2;
            } elseif (null === $data['DriverOpts']) {
                $value_3 = $data['DriverOpts'];
            }
            $object->driverOpts = $value_3;
            unset($data['DriverOpts']);
        } elseif (array_key_exists('DriverOpts', $data)) {
            $object->driverOpts = null;
            unset($data['DriverOpts']);
        }
        if (array_key_exists('GwPriority', $data) && null !== $data['GwPriority']) {
            $value_5 = $data['GwPriority'];
            if (is_int($data['GwPriority'])) {
                $value_5 = $data['GwPriority'];
            } elseif (null === $data['GwPriority']) {
                $value_5 = $data['GwPriority'];
            }
            $object->gwPriority = $value_5;
            unset($data['GwPriority']);
        } elseif (array_key_exists('GwPriority', $data)) {
            $object->gwPriority = null;
            unset($data['GwPriority']);
        }
        if (array_key_exists('NetworkID', $data) && null !== $data['NetworkID']) {
            $value_6 = $data['NetworkID'];
            if (is_string($data['NetworkID'])) {
                $value_6 = $data['NetworkID'];
            } elseif (null === $data['NetworkID']) {
                $value_6 = $data['NetworkID'];
            }
            $object->networkID = $value_6;
            unset($data['NetworkID']);
        } elseif (array_key_exists('NetworkID', $data)) {
            $object->networkID = null;
            unset($data['NetworkID']);
        }
        if (array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $value_7 = $data['EndpointID'];
            if (is_string($data['EndpointID'])) {
                $value_7 = $data['EndpointID'];
            } elseif (null === $data['EndpointID']) {
                $value_7 = $data['EndpointID'];
            }
            $object->endpointID = $value_7;
            unset($data['EndpointID']);
        } elseif (array_key_exists('EndpointID', $data)) {
            $object->endpointID = null;
            unset($data['EndpointID']);
        }
        if (array_key_exists('Gateway', $data) && null !== $data['Gateway']) {
            $value_8 = $data['Gateway'];
            if (is_string($data['Gateway'])) {
                $value_8 = $data['Gateway'];
            } elseif (null === $data['Gateway']) {
                $value_8 = $data['Gateway'];
            }
            $object->gateway = $value_8;
            unset($data['Gateway']);
        } elseif (array_key_exists('Gateway', $data)) {
            $object->gateway = null;
            unset($data['Gateway']);
        }
        if (array_key_exists('IPAddress', $data) && null !== $data['IPAddress']) {
            $value_9 = $data['IPAddress'];
            if (is_string($data['IPAddress'])) {
                $value_9 = $data['IPAddress'];
            } elseif (null === $data['IPAddress']) {
                $value_9 = $data['IPAddress'];
            }
            $object->iPAddress = $value_9;
            unset($data['IPAddress']);
        } elseif (array_key_exists('IPAddress', $data)) {
            $object->iPAddress = null;
            unset($data['IPAddress']);
        }
        if (array_key_exists('IPPrefixLen', $data) && null !== $data['IPPrefixLen']) {
            $value_10 = $data['IPPrefixLen'];
            if (is_int($data['IPPrefixLen'])) {
                $value_10 = $data['IPPrefixLen'];
            } elseif (null === $data['IPPrefixLen']) {
                $value_10 = $data['IPPrefixLen'];
            }
            $object->iPPrefixLen = $value_10;
            unset($data['IPPrefixLen']);
        } elseif (array_key_exists('IPPrefixLen', $data)) {
            $object->iPPrefixLen = null;
            unset($data['IPPrefixLen']);
        }
        if (array_key_exists('IPv6Gateway', $data) && null !== $data['IPv6Gateway']) {
            $value_11 = $data['IPv6Gateway'];
            if (is_string($data['IPv6Gateway'])) {
                $value_11 = $data['IPv6Gateway'];
            } elseif (null === $data['IPv6Gateway']) {
                $value_11 = $data['IPv6Gateway'];
            }
            $object->iPv6Gateway = $value_11;
            unset($data['IPv6Gateway']);
        } elseif (array_key_exists('IPv6Gateway', $data)) {
            $object->iPv6Gateway = null;
            unset($data['IPv6Gateway']);
        }
        if (array_key_exists('GlobalIPv6Address', $data) && null !== $data['GlobalIPv6Address']) {
            $value_12 = $data['GlobalIPv6Address'];
            if (is_string($data['GlobalIPv6Address'])) {
                $value_12 = $data['GlobalIPv6Address'];
            } elseif (null === $data['GlobalIPv6Address']) {
                $value_12 = $data['GlobalIPv6Address'];
            }
            $object->globalIPv6Address = $value_12;
            unset($data['GlobalIPv6Address']);
        } elseif (array_key_exists('GlobalIPv6Address', $data)) {
            $object->globalIPv6Address = null;
            unset($data['GlobalIPv6Address']);
        }
        if (array_key_exists('GlobalIPv6PrefixLen', $data) && null !== $data['GlobalIPv6PrefixLen']) {
            $value_13 = $data['GlobalIPv6PrefixLen'];
            if (is_int($data['GlobalIPv6PrefixLen'])) {
                $value_13 = $data['GlobalIPv6PrefixLen'];
            } elseif (null === $data['GlobalIPv6PrefixLen']) {
                $value_13 = $data['GlobalIPv6PrefixLen'];
            }
            $object->globalIPv6PrefixLen = $value_13;
            unset($data['GlobalIPv6PrefixLen']);
        } elseif (array_key_exists('GlobalIPv6PrefixLen', $data)) {
            $object->globalIPv6PrefixLen = null;
            unset($data['GlobalIPv6PrefixLen']);
        }
        if (array_key_exists('DNSNames', $data) && null !== $data['DNSNames']) {
            $values_3 = [];
            foreach ($data['DNSNames'] as $value_14) {
                $values_3[] = $value_14;
            }
            $object->dNSNames = $values_3;
            unset($data['DNSNames']);
        } elseif (array_key_exists('DNSNames', $data)) {
            $object->dNSNames = null;
            unset($data['DNSNames']);
        }
        foreach ($data as $key_1 => $value_15) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_15;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('iPAMConfig', get_object_vars($data)) && null !== ($data->iPAMConfig ?? null)) {
            $normalized              = $this->normalizer->normalize($data->iPAMConfig, 'json', $context);
            $dataArray['IPAMConfig'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('links', get_object_vars($data)) && null !== ($data->links ?? null)) {
            $values = [];
            foreach ($data->links as $value) {
                $values[] = $value;
            }
            $dataArray['Links'] = $values;
        }
        if (array_key_exists('macAddress', get_object_vars($data)) && null !== ($data->macAddress ?? null)) {
            $value_1 = $data->macAddress;
            if (is_string($data->macAddress)) {
                $value_1 = $data->macAddress;
            } elseif (null === $data->macAddress) {
                $value_1 = $data->macAddress;
            }
            $dataArray['MacAddress'] = $value_1;
        }
        if (array_key_exists('aliases', get_object_vars($data)) && null !== ($data->aliases ?? null)) {
            $values_1 = [];
            foreach ($data->aliases as $value_2) {
                $values_1[] = $value_2;
            }
            $dataArray['Aliases'] = $values_1;
        }
        if (array_key_exists('driverOpts', get_object_vars($data)) && null !== ($data->driverOpts ?? null)) {
            $value_3 = $data->driverOpts;
            if (is_iterable($data->driverOpts)) {
                $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->driverOpts as $key => $value_4) {
                    $values_2[$key] = $value_4;
                }
                $value_3 = $values_2;
            } elseif (null === $data->driverOpts) {
                $value_3 = $data->driverOpts;
            }
            $dataArray['DriverOpts'] = $value_3;
        }
        if (array_key_exists('gwPriority', get_object_vars($data)) && null !== ($data->gwPriority ?? null)) {
            $value_5 = $data->gwPriority;
            if (is_int($data->gwPriority)) {
                $value_5 = $data->gwPriority;
            } elseif (null === $data->gwPriority) {
                $value_5 = $data->gwPriority;
            }
            $dataArray['GwPriority'] = $value_5;
        }
        if (array_key_exists('networkID', get_object_vars($data)) && null !== ($data->networkID ?? null)) {
            $value_6 = $data->networkID;
            if (is_string($data->networkID)) {
                $value_6 = $data->networkID;
            } elseif (null === $data->networkID) {
                $value_6 = $data->networkID;
            }
            $dataArray['NetworkID'] = $value_6;
        }
        if (array_key_exists('endpointID', get_object_vars($data)) && null !== ($data->endpointID ?? null)) {
            $value_7 = $data->endpointID;
            if (is_string($data->endpointID)) {
                $value_7 = $data->endpointID;
            } elseif (null === $data->endpointID) {
                $value_7 = $data->endpointID;
            }
            $dataArray['EndpointID'] = $value_7;
        }
        if (array_key_exists('gateway', get_object_vars($data)) && null !== ($data->gateway ?? null)) {
            $value_8 = $data->gateway;
            if (is_string($data->gateway)) {
                $value_8 = $data->gateway;
            } elseif (null === $data->gateway) {
                $value_8 = $data->gateway;
            }
            $dataArray['Gateway'] = $value_8;
        }
        if (array_key_exists('iPAddress', get_object_vars($data)) && null !== ($data->iPAddress ?? null)) {
            $value_9 = $data->iPAddress;
            if (is_string($data->iPAddress)) {
                $value_9 = $data->iPAddress;
            } elseif (null === $data->iPAddress) {
                $value_9 = $data->iPAddress;
            }
            $dataArray['IPAddress'] = $value_9;
        }
        if (array_key_exists('iPPrefixLen', get_object_vars($data)) && null !== ($data->iPPrefixLen ?? null)) {
            $value_10 = $data->iPPrefixLen;
            if (is_int($data->iPPrefixLen)) {
                $value_10 = $data->iPPrefixLen;
            } elseif (null === $data->iPPrefixLen) {
                $value_10 = $data->iPPrefixLen;
            }
            $dataArray['IPPrefixLen'] = $value_10;
        }
        if (array_key_exists('iPv6Gateway', get_object_vars($data)) && null !== ($data->iPv6Gateway ?? null)) {
            $value_11 = $data->iPv6Gateway;
            if (is_string($data->iPv6Gateway)) {
                $value_11 = $data->iPv6Gateway;
            } elseif (null === $data->iPv6Gateway) {
                $value_11 = $data->iPv6Gateway;
            }
            $dataArray['IPv6Gateway'] = $value_11;
        }
        if (array_key_exists('globalIPv6Address', get_object_vars($data)) && null !== ($data->globalIPv6Address ?? null)) {
            $value_12 = $data->globalIPv6Address;
            if (is_string($data->globalIPv6Address)) {
                $value_12 = $data->globalIPv6Address;
            } elseif (null === $data->globalIPv6Address) {
                $value_12 = $data->globalIPv6Address;
            }
            $dataArray['GlobalIPv6Address'] = $value_12;
        }
        if (array_key_exists('globalIPv6PrefixLen', get_object_vars($data)) && null !== ($data->globalIPv6PrefixLen ?? null)) {
            $value_13 = $data->globalIPv6PrefixLen;
            if (is_int($data->globalIPv6PrefixLen)) {
                $value_13 = $data->globalIPv6PrefixLen;
            } elseif (null === $data->globalIPv6PrefixLen) {
                $value_13 = $data->globalIPv6PrefixLen;
            }
            $dataArray['GlobalIPv6PrefixLen'] = $value_13;
        }
        if (array_key_exists('dNSNames', get_object_vars($data)) && null !== ($data->dNSNames ?? null)) {
            $values_3 = [];
            foreach ($data->dNSNames as $value_14) {
                $values_3[] = $value_14;
            }
            $dataArray['DNSNames'] = $values_3;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_15) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_15;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
