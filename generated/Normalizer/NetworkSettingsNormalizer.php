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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        if (array_key_exists('HairpinMode', $data) && is_int($data['HairpinMode'])) {
            $data['HairpinMode'] = (bool) $data['HairpinMode'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Bridge', $data) && null !== $data['Bridge']) {
            $object->setBridge($data['Bridge']);
            unset($data['Bridge']);
        } elseif (array_key_exists('Bridge', $data) && null === $data['Bridge']) {
            $object->setBridge(null);
        }
        if (array_key_exists('SandboxID', $data)) {
            $object->setSandboxID($data['SandboxID']);
            unset($data['SandboxID']);
        }
        if (array_key_exists('HairpinMode', $data)) {
            $object->setHairpinMode($data['HairpinMode']);
            unset($data['HairpinMode']);
        }
        if (array_key_exists('LinkLocalIPv6Address', $data)) {
            $object->setLinkLocalIPv6Address($data['LinkLocalIPv6Address']);
            unset($data['LinkLocalIPv6Address']);
        }
        if (array_key_exists('LinkLocalIPv6PrefixLen', $data) && null !== $data['LinkLocalIPv6PrefixLen']) {
            $object->setLinkLocalIPv6PrefixLen($data['LinkLocalIPv6PrefixLen']);
            unset($data['LinkLocalIPv6PrefixLen']);
        } elseif (array_key_exists('LinkLocalIPv6PrefixLen', $data) && null === $data['LinkLocalIPv6PrefixLen']) {
            $object->setLinkLocalIPv6PrefixLen(null);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Ports'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPorts($values);
            unset($data['Ports']);
        } elseif (array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }
        if (array_key_exists('SandboxKey', $data)) {
            $object->setSandboxKey($data['SandboxKey']);
            unset($data['SandboxKey']);
        }
        if (array_key_exists('SecondaryIPAddresses', $data) && null !== $data['SecondaryIPAddresses']) {
            $values_1 = [];
            foreach ($data['SecondaryIPAddresses'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\Address::class, 'json', $context);
            }
            $object->setSecondaryIPAddresses($values_1);
            unset($data['SecondaryIPAddresses']);
        } elseif (array_key_exists('SecondaryIPAddresses', $data) && null === $data['SecondaryIPAddresses']) {
            $object->setSecondaryIPAddresses(null);
        }
        if (array_key_exists('SecondaryIPv6Addresses', $data) && null !== $data['SecondaryIPv6Addresses']) {
            $values_2 = [];
            foreach ($data['SecondaryIPv6Addresses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\Address::class, 'json', $context);
            }
            $object->setSecondaryIPv6Addresses($values_2);
            unset($data['SecondaryIPv6Addresses']);
        } elseif (array_key_exists('SecondaryIPv6Addresses', $data) && null === $data['SecondaryIPv6Addresses']) {
            $object->setSecondaryIPv6Addresses(null);
        }
        if (array_key_exists('EndpointID', $data)) {
            $object->setEndpointID($data['EndpointID']);
            unset($data['EndpointID']);
        }
        if (array_key_exists('Gateway', $data)) {
            $object->setGateway($data['Gateway']);
            unset($data['Gateway']);
        }
        if (array_key_exists('GlobalIPv6Address', $data)) {
            $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
            unset($data['GlobalIPv6Address']);
        }
        if (array_key_exists('GlobalIPv6PrefixLen', $data)) {
            $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
            unset($data['GlobalIPv6PrefixLen']);
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
        if (array_key_exists('MacAddress', $data)) {
            $object->setMacAddress($data['MacAddress']);
            unset($data['MacAddress']);
        }
        if (array_key_exists('Networks', $data)) {
            $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Networks'] as $key_1 => $value_3) {
                $values_3[$key_1] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class, 'json', $context);
            }
            $object->setNetworks($values_3);
            unset($data['Networks']);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('bridge') && null !== $data->getBridge()) {
            $dataArray['Bridge'] = $data->getBridge();
        }
        if ($data->isInitialized('sandboxID') && null !== $data->getSandboxID()) {
            $dataArray['SandboxID'] = $data->getSandboxID();
        }
        if ($data->isInitialized('hairpinMode') && null !== $data->getHairpinMode()) {
            $dataArray['HairpinMode'] = $data->getHairpinMode();
        }
        if ($data->isInitialized('linkLocalIPv6Address') && null !== $data->getLinkLocalIPv6Address()) {
            $dataArray['LinkLocalIPv6Address'] = $data->getLinkLocalIPv6Address();
        }
        if ($data->isInitialized('linkLocalIPv6PrefixLen') && null !== $data->getLinkLocalIPv6PrefixLen()) {
            $dataArray['LinkLocalIPv6PrefixLen'] = $data->getLinkLocalIPv6PrefixLen();
        }
        if ($data->isInitialized('ports') && null !== $data->getPorts()) {
            $values = [];
            foreach ($data->getPorts() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Ports'] = $values;
        }
        if ($data->isInitialized('sandboxKey') && null !== $data->getSandboxKey()) {
            $dataArray['SandboxKey'] = $data->getSandboxKey();
        }
        if ($data->isInitialized('secondaryIPAddresses') && null !== $data->getSecondaryIPAddresses()) {
            $values_1 = [];
            foreach ($data->getSecondaryIPAddresses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['SecondaryIPAddresses'] = $values_1;
        }
        if ($data->isInitialized('secondaryIPv6Addresses') && null !== $data->getSecondaryIPv6Addresses()) {
            $values_2 = [];
            foreach ($data->getSecondaryIPv6Addresses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['SecondaryIPv6Addresses'] = $values_2;
        }
        if ($data->isInitialized('endpointID') && null !== $data->getEndpointID()) {
            $dataArray['EndpointID'] = $data->getEndpointID();
        }
        if ($data->isInitialized('gateway') && null !== $data->getGateway()) {
            $dataArray['Gateway'] = $data->getGateway();
        }
        if ($data->isInitialized('globalIPv6Address') && null !== $data->getGlobalIPv6Address()) {
            $dataArray['GlobalIPv6Address'] = $data->getGlobalIPv6Address();
        }
        if ($data->isInitialized('globalIPv6PrefixLen') && null !== $data->getGlobalIPv6PrefixLen()) {
            $dataArray['GlobalIPv6PrefixLen'] = $data->getGlobalIPv6PrefixLen();
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
        if ($data->isInitialized('macAddress') && null !== $data->getMacAddress()) {
            $dataArray['MacAddress'] = $data->getMacAddress();
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $values_3 = [];
            foreach ($data->getNetworks() as $key_1 => $value_3) {
                $values_3[$key_1] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['Networks'] = $values_3;
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
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
