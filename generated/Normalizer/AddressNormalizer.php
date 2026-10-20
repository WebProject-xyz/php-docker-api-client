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

class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Address::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Address::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Address();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $value = $data['Addr'];
            if (is_string($data['Addr'])) {
                $value = $data['Addr'];
            } elseif (null === $data['Addr']) {
                $value = $data['Addr'];
            }
            $object->addr = $value;
            unset($data['Addr']);
        } elseif (array_key_exists('Addr', $data)) {
            $object->addr = null;
            unset($data['Addr']);
        }
        if (array_key_exists('PrefixLen', $data) && null !== $data['PrefixLen']) {
            $value_1 = $data['PrefixLen'];
            if (is_int($data['PrefixLen'])) {
                $value_1 = $data['PrefixLen'];
            } elseif (null === $data['PrefixLen']) {
                $value_1 = $data['PrefixLen'];
            }
            $object->prefixLen = $value_1;
            unset($data['PrefixLen']);
        } elseif (array_key_exists('PrefixLen', $data)) {
            $object->prefixLen = null;
            unset($data['PrefixLen']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('addr', get_object_vars($data)) && null !== ($data->addr ?? null)) {
            $value = $data->addr;
            if (is_string($data->addr)) {
                $value = $data->addr;
            } elseif (null === $data->addr) {
                $value = $data->addr;
            }
            $dataArray['Addr'] = $value;
        }
        if (array_key_exists('prefixLen', get_object_vars($data)) && null !== ($data->prefixLen ?? null)) {
            $value_1 = $data->prefixLen;
            if (is_int($data->prefixLen)) {
                $value_1 = $data->prefixLen;
            } elseif (null === $data->prefixLen) {
                $value_1 = $data->prefixLen;
            }
            $dataArray['PrefixLen'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Address::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
