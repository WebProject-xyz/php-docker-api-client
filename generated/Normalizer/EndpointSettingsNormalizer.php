<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointSettings();
            if (array_key_exists('GwPriority', $data) && is_int($data['GwPriority'])) {
                $data['GwPriority'] = (float) $data['GwPriority'];
            }
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('IPAMConfig', $data) && null !== $data['IPAMConfig']) {
                $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class, 'json', $context));
                unset($data['IPAMConfig']);
            } elseif (array_key_exists('IPAMConfig', $data) && null === $data['IPAMConfig']) {
                $object->setIPAMConfig(null);
            }
            if (array_key_exists('Links', $data) && null !== $data['Links']) {
                $values = [];
                foreach ($data['Links'] as $value) {
                    $values[] = $value;
                }
                $object->setLinks($values);
                unset($data['Links']);
            } elseif (array_key_exists('Links', $data) && null === $data['Links']) {
                $object->setLinks(null);
            }
            if (array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
                unset($data['MacAddress']);
            }
            if (array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
                $values_1 = [];
                foreach ($data['Aliases'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAliases($values_1);
                unset($data['Aliases']);
            } elseif (array_key_exists('Aliases', $data) && null === $data['Aliases']) {
                $object->setAliases(null);
            }
            if (array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setDriverOpts($values_2);
                unset($data['DriverOpts']);
            } elseif (array_key_exists('DriverOpts', $data) && null === $data['DriverOpts']) {
                $object->setDriverOpts(null);
            }
            if (array_key_exists('GwPriority', $data)) {
                $object->setGwPriority($data['GwPriority']);
                unset($data['GwPriority']);
            }
            if (array_key_exists('NetworkID', $data)) {
                $object->setNetworkID($data['NetworkID']);
                unset($data['NetworkID']);
            }
            if (array_key_exists('EndpointID', $data)) {
                $object->setEndpointID($data['EndpointID']);
                unset($data['EndpointID']);
            }
            if (array_key_exists('Gateway', $data)) {
                $object->setGateway($data['Gateway']);
                unset($data['Gateway']);
            }
            if (array_key_exists('IPAddress', $data)) {
                $object->setIPAddress($data['IPAddress']);
                unset($data['IPAddress']);
            }
            if (array_key_exists('IPPrefixLen', $data)) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
                unset($data['IPPrefixLen']);
            }
            if (array_key_exists('IPv6Gateway', $data)) {
                $object->setIPv6Gateway($data['IPv6Gateway']);
                unset($data['IPv6Gateway']);
            }
            if (array_key_exists('GlobalIPv6Address', $data)) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
                unset($data['GlobalIPv6Address']);
            }
            if (array_key_exists('GlobalIPv6PrefixLen', $data)) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
                unset($data['GlobalIPv6PrefixLen']);
            }
            if (array_key_exists('DNSNames', $data) && null !== $data['DNSNames']) {
                $values_3 = [];
                foreach ($data['DNSNames'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setDNSNames($values_3);
                unset($data['DNSNames']);
            } elseif (array_key_exists('DNSNames', $data) && null === $data['DNSNames']) {
                $object->setDNSNames(null);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('iPAMConfig') && null !== $object->getIPAMConfig()) {
                $data['IPAMConfig'] = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values[] = $value;
                }
                $data['Links'] = $values;
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Aliases'] = $values_1;
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values_2 = [];
                foreach ($object->getDriverOpts() as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $data['DriverOpts'] = $values_2;
            }
            if ($object->isInitialized('gwPriority') && null !== $object->getGwPriority()) {
                $data['GwPriority'] = $object->getGwPriority();
            }
            if ($object->isInitialized('networkID') && null !== $object->getNetworkID()) {
                $data['NetworkID'] = $object->getNetworkID();
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('dNSNames') && null !== $object->getDNSNames()) {
                $values_3 = [];
                foreach ($object->getDNSNames() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['DNSNames'] = $values_3;
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class => true];
        }
    }
} else {
    class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class === get_class($data);
        }

        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointSettings();
            if (array_key_exists('GwPriority', $data) && is_int($data['GwPriority'])) {
                $data['GwPriority'] = (float) $data['GwPriority'];
            }
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('IPAMConfig', $data) && null !== $data['IPAMConfig']) {
                $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class, 'json', $context));
                unset($data['IPAMConfig']);
            } elseif (array_key_exists('IPAMConfig', $data) && null === $data['IPAMConfig']) {
                $object->setIPAMConfig(null);
            }
            if (array_key_exists('Links', $data) && null !== $data['Links']) {
                $values = [];
                foreach ($data['Links'] as $value) {
                    $values[] = $value;
                }
                $object->setLinks($values);
                unset($data['Links']);
            } elseif (array_key_exists('Links', $data) && null === $data['Links']) {
                $object->setLinks(null);
            }
            if (array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
                unset($data['MacAddress']);
            }
            if (array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
                $values_1 = [];
                foreach ($data['Aliases'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAliases($values_1);
                unset($data['Aliases']);
            } elseif (array_key_exists('Aliases', $data) && null === $data['Aliases']) {
                $object->setAliases(null);
            }
            if (array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setDriverOpts($values_2);
                unset($data['DriverOpts']);
            } elseif (array_key_exists('DriverOpts', $data) && null === $data['DriverOpts']) {
                $object->setDriverOpts(null);
            }
            if (array_key_exists('GwPriority', $data)) {
                $object->setGwPriority($data['GwPriority']);
                unset($data['GwPriority']);
            }
            if (array_key_exists('NetworkID', $data)) {
                $object->setNetworkID($data['NetworkID']);
                unset($data['NetworkID']);
            }
            if (array_key_exists('EndpointID', $data)) {
                $object->setEndpointID($data['EndpointID']);
                unset($data['EndpointID']);
            }
            if (array_key_exists('Gateway', $data)) {
                $object->setGateway($data['Gateway']);
                unset($data['Gateway']);
            }
            if (array_key_exists('IPAddress', $data)) {
                $object->setIPAddress($data['IPAddress']);
                unset($data['IPAddress']);
            }
            if (array_key_exists('IPPrefixLen', $data)) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
                unset($data['IPPrefixLen']);
            }
            if (array_key_exists('IPv6Gateway', $data)) {
                $object->setIPv6Gateway($data['IPv6Gateway']);
                unset($data['IPv6Gateway']);
            }
            if (array_key_exists('GlobalIPv6Address', $data)) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
                unset($data['GlobalIPv6Address']);
            }
            if (array_key_exists('GlobalIPv6PrefixLen', $data)) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
                unset($data['GlobalIPv6PrefixLen']);
            }
            if (array_key_exists('DNSNames', $data) && null !== $data['DNSNames']) {
                $values_3 = [];
                foreach ($data['DNSNames'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setDNSNames($values_3);
                unset($data['DNSNames']);
            } elseif (array_key_exists('DNSNames', $data) && null === $data['DNSNames']) {
                $object->setDNSNames(null);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iPAMConfig') && null !== $object->getIPAMConfig()) {
                $data['IPAMConfig'] = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values[] = $value;
                }
                $data['Links'] = $values;
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Aliases'] = $values_1;
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values_2 = [];
                foreach ($object->getDriverOpts() as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $data['DriverOpts'] = $values_2;
            }
            if ($object->isInitialized('gwPriority') && null !== $object->getGwPriority()) {
                $data['GwPriority'] = $object->getGwPriority();
            }
            if ($object->isInitialized('networkID') && null !== $object->getNetworkID()) {
                $data['NetworkID'] = $object->getNetworkID();
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('dNSNames') && null !== $object->getDNSNames()) {
                $values_3 = [];
                foreach ($object->getDNSNames() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['DNSNames'] = $values_3;
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }

            return $data;
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
}
