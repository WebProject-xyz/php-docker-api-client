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

class EndpointIPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('IPv4Address', $data) && null !== $data['IPv4Address']) {
            $value = $data['IPv4Address'];
            if (is_string($data['IPv4Address'])) {
                $value = $data['IPv4Address'];
            } elseif (null === $data['IPv4Address']) {
                $value = $data['IPv4Address'];
            }
            $object->setIPv4Address($value);
        } elseif (array_key_exists('IPv4Address', $data) && null === $data['IPv4Address']) {
            $object->setIPv4Address(null);
        }
        if (array_key_exists('IPv6Address', $data) && null !== $data['IPv6Address']) {
            $value_1 = $data['IPv6Address'];
            if (is_string($data['IPv6Address'])) {
                $value_1 = $data['IPv6Address'];
            } elseif (null === $data['IPv6Address']) {
                $value_1 = $data['IPv6Address'];
            }
            $object->setIPv6Address($value_1);
        } elseif (array_key_exists('IPv6Address', $data) && null === $data['IPv6Address']) {
            $object->setIPv6Address(null);
        }
        if (array_key_exists('LinkLocalIPs', $data) && null !== $data['LinkLocalIPs']) {
            $value_2 = $data['LinkLocalIPs'];
            if (is_array($data['LinkLocalIPs']) && $this->isOnlyNumericKeys($data['LinkLocalIPs'])) {
                $values = [];
                foreach ($data['LinkLocalIPs'] as $value_3) {
                    $values[] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data['LinkLocalIPs']) {
                $value_2 = $data['LinkLocalIPs'];
            }
            $object->setLinkLocalIPs($value_2);
        } elseif (array_key_exists('LinkLocalIPs', $data) && null === $data['LinkLocalIPs']) {
            $object->setLinkLocalIPs(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iPv4Address')) {
            $value = $data->getIPv4Address();
            if (is_string($data->getIPv4Address())) {
                $value = $data->getIPv4Address();
            } elseif (null === $data->getIPv4Address()) {
                $value = $data->getIPv4Address();
            }
            $dataArray['IPv4Address'] = $value;
        }
        if ($data->isInitialized('iPv6Address')) {
            $value_1 = $data->getIPv6Address();
            if (is_string($data->getIPv6Address())) {
                $value_1 = $data->getIPv6Address();
            } elseif (null === $data->getIPv6Address()) {
                $value_1 = $data->getIPv6Address();
            }
            $dataArray['IPv6Address'] = $value_1;
        }
        if ($data->isInitialized('linkLocalIPs')) {
            $value_2 = $data->getLinkLocalIPs();
            if (is_array($data->getLinkLocalIPs())) {
                $values = [];
                foreach ($data->getLinkLocalIPs() as $value_3) {
                    $values[] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data->getLinkLocalIPs()) {
                $value_2 = $data->getLinkLocalIPs();
            }
            $dataArray['LinkLocalIPs'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
