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

class ServiceInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('VIP', $data) && null !== $data['VIP']) {
            $value = $data['VIP'];
            if (is_string($data['VIP'])) {
                $value = $data['VIP'];
            } elseif (null === $data['VIP']) {
                $value = $data['VIP'];
            }
            $object->vIP = $value;
            unset($data['VIP']);
        } elseif (array_key_exists('VIP', $data)) {
            $object->vIP = null;
            unset($data['VIP']);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $values = [];
            foreach ($data['Ports'] as $value_1) {
                $values[] = $value_1;
            }
            $object->ports = $values;
            unset($data['Ports']);
        } elseif (array_key_exists('Ports', $data)) {
            $object->ports = null;
            unset($data['Ports']);
        }
        if (array_key_exists('LocalLBIndex', $data) && null !== $data['LocalLBIndex']) {
            $value_2 = $data['LocalLBIndex'];
            if (is_int($data['LocalLBIndex'])) {
                $value_2 = $data['LocalLBIndex'];
            } elseif (null === $data['LocalLBIndex']) {
                $value_2 = $data['LocalLBIndex'];
            }
            $object->localLBIndex = $value_2;
            unset($data['LocalLBIndex']);
        } elseif (array_key_exists('LocalLBIndex', $data)) {
            $object->localLBIndex = null;
            unset($data['LocalLBIndex']);
        }
        if (array_key_exists('Tasks', $data) && null !== $data['Tasks']) {
            $values_1 = [];
            foreach ($data['Tasks'] as $value_3) {
                $values_1[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\NetworkTaskInfo::class, 'json', $context);
            }
            $object->tasks = $values_1;
            unset($data['Tasks']);
        } elseif (array_key_exists('Tasks', $data)) {
            $object->tasks = null;
            unset($data['Tasks']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('vIP', get_object_vars($data)) && null !== ($data->vIP ?? null)) {
            $value = $data->vIP;
            if (is_string($data->vIP)) {
                $value = $data->vIP;
            } elseif (null === $data->vIP) {
                $value = $data->vIP;
            }
            $dataArray['VIP'] = $value;
        }
        if (array_key_exists('ports', get_object_vars($data)) && null !== ($data->ports ?? null)) {
            $values = [];
            foreach ($data->ports as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['Ports'] = $values;
        }
        if (array_key_exists('localLBIndex', get_object_vars($data)) && null !== ($data->localLBIndex ?? null)) {
            $value_2 = $data->localLBIndex;
            if (is_int($data->localLBIndex)) {
                $value_2 = $data->localLBIndex;
            } elseif (null === $data->localLBIndex) {
                $value_2 = $data->localLBIndex;
            }
            $dataArray['LocalLBIndex'] = $value_2;
        }
        if (array_key_exists('tasks', get_object_vars($data)) && null !== ($data->tasks ?? null)) {
            $values_1 = [];
            foreach ($data->tasks as $value_3) {
                $normalized = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_1[] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['Tasks'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
