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
            $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class, 'json', $context));
        } elseif (array_key_exists('IPAMConfig', $data) && null === $data['IPAMConfig']) {
            $object->setIPAMConfig(null);
        }
        if (array_key_exists('Links', $data) && null !== $data['Links']) {
            $value = $data['Links'];
            if (is_array($data['Links']) && $this->isOnlyNumericKeys($data['Links'])) {
                $values = [];
                foreach ($data['Links'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['Links']) {
                $value = $data['Links'];
            }
            $object->setLinks($value);
        } elseif (array_key_exists('Links', $data) && null === $data['Links']) {
            $object->setLinks(null);
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
        if (array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
            $value_3 = $data['Aliases'];
            if (is_array($data['Aliases']) && $this->isOnlyNumericKeys($data['Aliases'])) {
                $values_1 = [];
                foreach ($data['Aliases'] as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data['Aliases']) {
                $value_3 = $data['Aliases'];
            }
            $object->setAliases($value_3);
        } elseif (array_key_exists('Aliases', $data) && null === $data['Aliases']) {
            $object->setAliases(null);
        }
        if (array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
            $value_5 = $data['DriverOpts'];
            if (is_array($data['DriverOpts']) && $this->isOnlyNumericKeys($data['DriverOpts'])) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_6) {
                    $values_2[$key] = $value_6;
                }
                $value_5 = $values_2;
            } elseif (null === $data['DriverOpts']) {
                $value_5 = $data['DriverOpts'];
            }
            $object->setDriverOpts($value_5);
        } elseif (array_key_exists('DriverOpts', $data) && null === $data['DriverOpts']) {
            $object->setDriverOpts(null);
        }
        if (array_key_exists('GwPriority', $data) && null !== $data['GwPriority']) {
            $value_7 = $data['GwPriority'];
            if (is_int($data['GwPriority'])) {
                $value_7 = $data['GwPriority'];
            } elseif (null === $data['GwPriority']) {
                $value_7 = $data['GwPriority'];
            }
            $object->setGwPriority($value_7);
        } elseif (array_key_exists('GwPriority', $data) && null === $data['GwPriority']) {
            $object->setGwPriority(null);
        }
        if (array_key_exists('NetworkID', $data) && null !== $data['NetworkID']) {
            $value_8 = $data['NetworkID'];
            if (is_string($data['NetworkID'])) {
                $value_8 = $data['NetworkID'];
            } elseif (null === $data['NetworkID']) {
                $value_8 = $data['NetworkID'];
            }
            $object->setNetworkID($value_8);
        } elseif (array_key_exists('NetworkID', $data) && null === $data['NetworkID']) {
            $object->setNetworkID(null);
        }
        if (array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $value_9 = $data['EndpointID'];
            if (is_string($data['EndpointID'])) {
                $value_9 = $data['EndpointID'];
            } elseif (null === $data['EndpointID']) {
                $value_9 = $data['EndpointID'];
            }
            $object->setEndpointID($value_9);
        } elseif (array_key_exists('EndpointID', $data) && null === $data['EndpointID']) {
            $object->setEndpointID(null);
        }
        if (array_key_exists('Gateway', $data) && null !== $data['Gateway']) {
            $value_10 = $data['Gateway'];
            if (is_string($data['Gateway'])) {
                $value_10 = $data['Gateway'];
            } elseif (null === $data['Gateway']) {
                $value_10 = $data['Gateway'];
            }
            $object->setGateway($value_10);
        } elseif (array_key_exists('Gateway', $data) && null === $data['Gateway']) {
            $object->setGateway(null);
        }
        if (array_key_exists('IPAddress', $data) && null !== $data['IPAddress']) {
            $value_11 = $data['IPAddress'];
            if (is_string($data['IPAddress'])) {
                $value_11 = $data['IPAddress'];
            } elseif (null === $data['IPAddress']) {
                $value_11 = $data['IPAddress'];
            }
            $object->setIPAddress($value_11);
        } elseif (array_key_exists('IPAddress', $data) && null === $data['IPAddress']) {
            $object->setIPAddress(null);
        }
        if (array_key_exists('IPPrefixLen', $data) && null !== $data['IPPrefixLen']) {
            $value_12 = $data['IPPrefixLen'];
            if (is_int($data['IPPrefixLen'])) {
                $value_12 = $data['IPPrefixLen'];
            } elseif (null === $data['IPPrefixLen']) {
                $value_12 = $data['IPPrefixLen'];
            }
            $object->setIPPrefixLen($value_12);
        } elseif (array_key_exists('IPPrefixLen', $data) && null === $data['IPPrefixLen']) {
            $object->setIPPrefixLen(null);
        }
        if (array_key_exists('IPv6Gateway', $data) && null !== $data['IPv6Gateway']) {
            $value_13 = $data['IPv6Gateway'];
            if (is_string($data['IPv6Gateway'])) {
                $value_13 = $data['IPv6Gateway'];
            } elseif (null === $data['IPv6Gateway']) {
                $value_13 = $data['IPv6Gateway'];
            }
            $object->setIPv6Gateway($value_13);
        } elseif (array_key_exists('IPv6Gateway', $data) && null === $data['IPv6Gateway']) {
            $object->setIPv6Gateway(null);
        }
        if (array_key_exists('GlobalIPv6Address', $data) && null !== $data['GlobalIPv6Address']) {
            $value_14 = $data['GlobalIPv6Address'];
            if (is_string($data['GlobalIPv6Address'])) {
                $value_14 = $data['GlobalIPv6Address'];
            } elseif (null === $data['GlobalIPv6Address']) {
                $value_14 = $data['GlobalIPv6Address'];
            }
            $object->setGlobalIPv6Address($value_14);
        } elseif (array_key_exists('GlobalIPv6Address', $data) && null === $data['GlobalIPv6Address']) {
            $object->setGlobalIPv6Address(null);
        }
        if (array_key_exists('GlobalIPv6PrefixLen', $data) && null !== $data['GlobalIPv6PrefixLen']) {
            $value_15 = $data['GlobalIPv6PrefixLen'];
            if (is_int($data['GlobalIPv6PrefixLen'])) {
                $value_15 = $data['GlobalIPv6PrefixLen'];
            } elseif (null === $data['GlobalIPv6PrefixLen']) {
                $value_15 = $data['GlobalIPv6PrefixLen'];
            }
            $object->setGlobalIPv6PrefixLen($value_15);
        } elseif (array_key_exists('GlobalIPv6PrefixLen', $data) && null === $data['GlobalIPv6PrefixLen']) {
            $object->setGlobalIPv6PrefixLen(null);
        }
        if (array_key_exists('DNSNames', $data) && null !== $data['DNSNames']) {
            $value_16 = $data['DNSNames'];
            if (is_array($data['DNSNames']) && $this->isOnlyNumericKeys($data['DNSNames'])) {
                $values_3 = [];
                foreach ($data['DNSNames'] as $value_17) {
                    $values_3[] = $value_17;
                }
                $value_16 = $values_3;
            } elseif (null === $data['DNSNames']) {
                $value_16 = $data['DNSNames'];
            }
            $object->setDNSNames($value_16);
        } elseif (array_key_exists('DNSNames', $data) && null === $data['DNSNames']) {
            $object->setDNSNames(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iPAMConfig')) {
            $dataArray['IPAMConfig'] = $this->normalizer->normalize($data->getIPAMConfig(), 'json', $context);
        }
        if ($data->isInitialized('links')) {
            $value = $data->getLinks();
            if (is_array($data->getLinks())) {
                $values = [];
                foreach ($data->getLinks() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->getLinks()) {
                $value = $data->getLinks();
            }
            $dataArray['Links'] = $value;
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
        if ($data->isInitialized('aliases')) {
            $value_3 = $data->getAliases();
            if (is_array($data->getAliases())) {
                $values_1 = [];
                foreach ($data->getAliases() as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data->getAliases()) {
                $value_3 = $data->getAliases();
            }
            $dataArray['Aliases'] = $value_3;
        }
        if ($data->isInitialized('driverOpts')) {
            $value_5 = $data->getDriverOpts();
            if (is_object($data->getDriverOpts())) {
                $values_2 = [];
                foreach ($data->getDriverOpts() as $key => $value_6) {
                    $values_2[$key] = $value_6;
                }
                $value_5 = $values_2;
            } elseif (null === $data->getDriverOpts()) {
                $value_5 = $data->getDriverOpts();
            }
            $dataArray['DriverOpts'] = $value_5;
        }
        if ($data->isInitialized('gwPriority')) {
            $value_7 = $data->getGwPriority();
            if (is_int($data->getGwPriority())) {
                $value_7 = $data->getGwPriority();
            } elseif (null === $data->getGwPriority()) {
                $value_7 = $data->getGwPriority();
            }
            $dataArray['GwPriority'] = $value_7;
        }
        if ($data->isInitialized('networkID')) {
            $value_8 = $data->getNetworkID();
            if (is_string($data->getNetworkID())) {
                $value_8 = $data->getNetworkID();
            } elseif (null === $data->getNetworkID()) {
                $value_8 = $data->getNetworkID();
            }
            $dataArray['NetworkID'] = $value_8;
        }
        if ($data->isInitialized('endpointID')) {
            $value_9 = $data->getEndpointID();
            if (is_string($data->getEndpointID())) {
                $value_9 = $data->getEndpointID();
            } elseif (null === $data->getEndpointID()) {
                $value_9 = $data->getEndpointID();
            }
            $dataArray['EndpointID'] = $value_9;
        }
        if ($data->isInitialized('gateway')) {
            $value_10 = $data->getGateway();
            if (is_string($data->getGateway())) {
                $value_10 = $data->getGateway();
            } elseif (null === $data->getGateway()) {
                $value_10 = $data->getGateway();
            }
            $dataArray['Gateway'] = $value_10;
        }
        if ($data->isInitialized('iPAddress')) {
            $value_11 = $data->getIPAddress();
            if (is_string($data->getIPAddress())) {
                $value_11 = $data->getIPAddress();
            } elseif (null === $data->getIPAddress()) {
                $value_11 = $data->getIPAddress();
            }
            $dataArray['IPAddress'] = $value_11;
        }
        if ($data->isInitialized('iPPrefixLen')) {
            $value_12 = $data->getIPPrefixLen();
            if (is_int($data->getIPPrefixLen())) {
                $value_12 = $data->getIPPrefixLen();
            } elseif (null === $data->getIPPrefixLen()) {
                $value_12 = $data->getIPPrefixLen();
            }
            $dataArray['IPPrefixLen'] = $value_12;
        }
        if ($data->isInitialized('iPv6Gateway')) {
            $value_13 = $data->getIPv6Gateway();
            if (is_string($data->getIPv6Gateway())) {
                $value_13 = $data->getIPv6Gateway();
            } elseif (null === $data->getIPv6Gateway()) {
                $value_13 = $data->getIPv6Gateway();
            }
            $dataArray['IPv6Gateway'] = $value_13;
        }
        if ($data->isInitialized('globalIPv6Address')) {
            $value_14 = $data->getGlobalIPv6Address();
            if (is_string($data->getGlobalIPv6Address())) {
                $value_14 = $data->getGlobalIPv6Address();
            } elseif (null === $data->getGlobalIPv6Address()) {
                $value_14 = $data->getGlobalIPv6Address();
            }
            $dataArray['GlobalIPv6Address'] = $value_14;
        }
        if ($data->isInitialized('globalIPv6PrefixLen')) {
            $value_15 = $data->getGlobalIPv6PrefixLen();
            if (is_int($data->getGlobalIPv6PrefixLen())) {
                $value_15 = $data->getGlobalIPv6PrefixLen();
            } elseif (null === $data->getGlobalIPv6PrefixLen()) {
                $value_15 = $data->getGlobalIPv6PrefixLen();
            }
            $dataArray['GlobalIPv6PrefixLen'] = $value_15;
        }
        if ($data->isInitialized('dNSNames')) {
            $value_16 = $data->getDNSNames();
            if (is_array($data->getDNSNames())) {
                $values_3 = [];
                foreach ($data->getDNSNames() as $value_17) {
                    $values_3[] = $value_17;
                }
                $value_16 = $values_3;
            } elseif (null === $data->getDNSNames()) {
                $value_16 = $data->getDNSNames();
            }
            $dataArray['DNSNames'] = $value_16;
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
