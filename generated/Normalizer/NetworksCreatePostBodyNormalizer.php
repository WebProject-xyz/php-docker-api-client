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

class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Internal', $data) && is_int($data['Internal'])) {
            $data['Internal'] = (bool) $data['Internal'];
        }
        if (array_key_exists('Attachable', $data) && is_int($data['Attachable'])) {
            $data['Attachable'] = (bool) $data['Attachable'];
        }
        if (array_key_exists('Ingress', $data) && is_int($data['Ingress'])) {
            $data['Ingress'] = (bool) $data['Ingress'];
        }
        if (array_key_exists('ConfigOnly', $data) && is_int($data['ConfigOnly'])) {
            $data['ConfigOnly'] = (bool) $data['ConfigOnly'];
        }
        if (array_key_exists('EnableIPv4', $data) && is_int($data['EnableIPv4'])) {
            $data['EnableIPv4'] = (bool) $data['EnableIPv4'];
        }
        if (array_key_exists('EnableIPv6', $data) && is_int($data['EnableIPv6'])) {
            $data['EnableIPv6'] = (bool) $data['EnableIPv6'];
        }
        if (array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
            unset($data['Name']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
            unset($data['Driver']);
        }
        if (array_key_exists('Scope', $data)) {
            $object->scope = $data['Scope'];
            unset($data['Scope']);
        }
        if (array_key_exists('Internal', $data)) {
            $object->internal = $data['Internal'];
            unset($data['Internal']);
        }
        if (array_key_exists('Attachable', $data)) {
            $object->attachable = $data['Attachable'];
            unset($data['Attachable']);
        }
        if (array_key_exists('Ingress', $data)) {
            $object->ingress = $data['Ingress'];
            unset($data['Ingress']);
        }
        if (array_key_exists('ConfigOnly', $data)) {
            $object->configOnly = $data['ConfigOnly'];
            unset($data['ConfigOnly']);
        }
        if (array_key_exists('ConfigFrom', $data)) {
            $object->configFrom = $this->denormalizer->denormalize($data['ConfigFrom'], \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class, 'json', $context);
            unset($data['ConfigFrom']);
        }
        if (array_key_exists('IPAM', $data)) {
            $object->iPAM = $this->denormalizer->denormalize($data['IPAM'], \WebProject\DockerApi\Library\Generated\Model\IPAM::class, 'json', $context);
            unset($data['IPAM']);
        }
        if (array_key_exists('EnableIPv4', $data)) {
            $object->enableIPv4 = $data['EnableIPv4'];
            unset($data['EnableIPv4']);
        }
        if (array_key_exists('EnableIPv6', $data)) {
            $object->enableIPv6 = $data['EnableIPv6'];
            unset($data['EnableIPv6']);
        }
        if (array_key_exists('Options', $data)) {
            $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data['Options'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->options = $values;
            unset($data['Options']);
        }
        if (array_key_exists('Labels', $data)) {
            $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->labels = $values_1;
            unset($data['Labels']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray         = [];
        $dataArray['Name'] = $data->name;
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver;
        }
        if (array_key_exists('scope', get_object_vars($data)) && null !== ($data->scope ?? null)) {
            $dataArray['Scope'] = $data->scope;
        }
        if (array_key_exists('internal', get_object_vars($data)) && null !== ($data->internal ?? null)) {
            $dataArray['Internal'] = $data->internal;
        }
        if (array_key_exists('attachable', get_object_vars($data)) && null !== ($data->attachable ?? null)) {
            $dataArray['Attachable'] = $data->attachable;
        }
        if (array_key_exists('ingress', get_object_vars($data)) && null !== ($data->ingress ?? null)) {
            $dataArray['Ingress'] = $data->ingress;
        }
        if (array_key_exists('configOnly', get_object_vars($data)) && null !== ($data->configOnly ?? null)) {
            $dataArray['ConfigOnly'] = $data->configOnly;
        }
        if (array_key_exists('configFrom', get_object_vars($data)) && null !== ($data->configFrom ?? null)) {
            $normalized              = $this->normalizer->normalize($data->configFrom, 'json', $context);
            $dataArray['ConfigFrom'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('iPAM', get_object_vars($data)) && null !== ($data->iPAM ?? null)) {
            $normalized_1      = $this->normalizer->normalize($data->iPAM, 'json', $context);
            $dataArray['IPAM'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('enableIPv4', get_object_vars($data)) && null !== ($data->enableIPv4 ?? null)) {
            $dataArray['EnableIPv4'] = $data->enableIPv4;
        }
        if (array_key_exists('enableIPv6', get_object_vars($data)) && null !== ($data->enableIPv6 ?? null)) {
            $dataArray['EnableIPv6'] = $data->enableIPv6;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data->options as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Options'] = $values;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data->labels as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['Labels'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
