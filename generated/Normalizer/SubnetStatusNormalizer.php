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

class SubnetStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SubnetStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SubnetStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SubnetStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('IPsInUse', $data) && null !== $data['IPsInUse']) {
            $value = $data['IPsInUse'];
            if (is_int($data['IPsInUse'])) {
                $value = $data['IPsInUse'];
            } elseif (null === $data['IPsInUse']) {
                $value = $data['IPsInUse'];
            }
            $object->iPsInUse = $value;
            unset($data['IPsInUse']);
        } elseif (array_key_exists('IPsInUse', $data)) {
            $object->iPsInUse = null;
            unset($data['IPsInUse']);
        }
        if (array_key_exists('DynamicIPsAvailable', $data) && null !== $data['DynamicIPsAvailable']) {
            $value_1 = $data['DynamicIPsAvailable'];
            if (is_int($data['DynamicIPsAvailable'])) {
                $value_1 = $data['DynamicIPsAvailable'];
            } elseif (null === $data['DynamicIPsAvailable']) {
                $value_1 = $data['DynamicIPsAvailable'];
            }
            $object->dynamicIPsAvailable = $value_1;
            unset($data['DynamicIPsAvailable']);
        } elseif (array_key_exists('DynamicIPsAvailable', $data)) {
            $object->dynamicIPsAvailable = null;
            unset($data['DynamicIPsAvailable']);
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
        if (array_key_exists('iPsInUse', get_object_vars($data)) && null !== ($data->iPsInUse ?? null)) {
            $value = $data->iPsInUse;
            if (is_int($data->iPsInUse)) {
                $value = $data->iPsInUse;
            } elseif (null === $data->iPsInUse) {
                $value = $data->iPsInUse;
            }
            $dataArray['IPsInUse'] = $value;
        }
        if (array_key_exists('dynamicIPsAvailable', get_object_vars($data)) && null !== ($data->dynamicIPsAvailable ?? null)) {
            $value_1 = $data->dynamicIPsAvailable;
            if (is_int($data->dynamicIPsAvailable)) {
                $value_1 = $data->dynamicIPsAvailable;
            } elseif (null === $data->dynamicIPsAvailable) {
                $value_1 = $data->dynamicIPsAvailable;
            }
            $dataArray['DynamicIPsAvailable'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\SubnetStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
