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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\EndpointSettingsConstraint());
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
        if (array_key_exists('Aliases', $data)) {
            $values_1 = [];
            foreach ($data['Aliases'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAliases($values_1);
            unset($data['Aliases']);
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
        if (array_key_exists('DNSNames', $data)) {
            $values_3 = [];
            foreach ($data['DNSNames'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setDNSNames($values_3);
            unset($data['DNSNames']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iPAMConfig') && null !== $data->getIPAMConfig()) {
            $dataArray['IPAMConfig'] = $this->normalizer->normalize($data->getIPAMConfig(), 'json', $context);
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values = [];
            foreach ($data->getLinks() as $value) {
                $values[] = $value;
            }
            $dataArray['Links'] = $values;
        }
        if ($data->isInitialized('macAddress') && null !== $data->getMacAddress()) {
            $dataArray['MacAddress'] = $data->getMacAddress();
        }
        if ($data->isInitialized('aliases') && null !== $data->getAliases()) {
            $values_1 = [];
            foreach ($data->getAliases() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Aliases'] = $values_1;
        }
        if ($data->isInitialized('driverOpts') && null !== $data->getDriverOpts()) {
            $values_2 = [];
            foreach ($data->getDriverOpts() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['DriverOpts'] = $values_2;
        }
        if ($data->isInitialized('gwPriority') && null !== $data->getGwPriority()) {
            $dataArray['GwPriority'] = $data->getGwPriority();
        }
        if ($data->isInitialized('networkID') && null !== $data->getNetworkID()) {
            $dataArray['NetworkID'] = $data->getNetworkID();
        }
        if ($data->isInitialized('endpointID') && null !== $data->getEndpointID()) {
            $dataArray['EndpointID'] = $data->getEndpointID();
        }
        if ($data->isInitialized('gateway') && null !== $data->getGateway()) {
            $dataArray['Gateway'] = $data->getGateway();
        }
        if ($data->isInitialized('iPAddress') && null !== $data->getIPAddress()) {
            $dataArray['IPAddress'] = $data->getIPAddress();
        }
        if ($data->isInitialized('iPPrefixLen') && null !== $data->getIPPrefixLen()) {
            $dataArray['IPPrefixLen'] = $data->getIPPrefixLen();
        }
        if ($data->isInitialized('iPv6Gateway') && null !== $data->getIPv6Gateway()) {
            $dataArray['IPv6Gateway'] = $data->getIPv6Gateway();
        }
        if ($data->isInitialized('globalIPv6Address') && null !== $data->getGlobalIPv6Address()) {
            $dataArray['GlobalIPv6Address'] = $data->getGlobalIPv6Address();
        }
        if ($data->isInitialized('globalIPv6PrefixLen') && null !== $data->getGlobalIPv6PrefixLen()) {
            $dataArray['GlobalIPv6PrefixLen'] = $data->getGlobalIPv6PrefixLen();
        }
        if ($data->isInitialized('dNSNames') && null !== $data->getDNSNames()) {
            $values_3 = [];
            foreach ($data->getDNSNames() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['DNSNames'] = $values_3;
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\EndpointSettingsConstraint());
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
