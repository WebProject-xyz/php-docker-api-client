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
            $object->iPv4Address = $value;
            unset($data['IPv4Address']);
        } elseif (array_key_exists('IPv4Address', $data)) {
            $object->iPv4Address = null;
            unset($data['IPv4Address']);
        }
        if (array_key_exists('IPv6Address', $data) && null !== $data['IPv6Address']) {
            $value_1 = $data['IPv6Address'];
            if (is_string($data['IPv6Address'])) {
                $value_1 = $data['IPv6Address'];
            } elseif (null === $data['IPv6Address']) {
                $value_1 = $data['IPv6Address'];
            }
            $object->iPv6Address = $value_1;
            unset($data['IPv6Address']);
        } elseif (array_key_exists('IPv6Address', $data)) {
            $object->iPv6Address = null;
            unset($data['IPv6Address']);
        }
        if (array_key_exists('LinkLocalIPs', $data) && null !== $data['LinkLocalIPs']) {
            $values = [];
            foreach ($data['LinkLocalIPs'] as $value_2) {
                $values[] = $value_2;
            }
            $object->linkLocalIPs = $values;
            unset($data['LinkLocalIPs']);
        } elseif (array_key_exists('LinkLocalIPs', $data)) {
            $object->linkLocalIPs = null;
            unset($data['LinkLocalIPs']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('iPv4Address', get_object_vars($data)) && null !== ($data->iPv4Address ?? null)) {
            $value = $data->iPv4Address;
            if (is_string($data->iPv4Address)) {
                $value = $data->iPv4Address;
            } elseif (null === $data->iPv4Address) {
                $value = $data->iPv4Address;
            }
            $dataArray['IPv4Address'] = $value;
        }
        if (array_key_exists('iPv6Address', get_object_vars($data)) && null !== ($data->iPv6Address ?? null)) {
            $value_1 = $data->iPv6Address;
            if (is_string($data->iPv6Address)) {
                $value_1 = $data->iPv6Address;
            } elseif (null === $data->iPv6Address) {
                $value_1 = $data->iPv6Address;
            }
            $dataArray['IPv6Address'] = $value_1;
        }
        if (array_key_exists('linkLocalIPs', get_object_vars($data)) && null !== ($data->linkLocalIPs ?? null)) {
            $values = [];
            foreach ($data->linkLocalIPs as $value_2) {
                $values[] = $value_2;
            }
            $dataArray['LinkLocalIPs'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
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
