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

class RuntimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Runtime::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Runtime::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Runtime();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('path', $data) && null !== $data['path']) {
            $value = $data['path'];
            if (is_string($data['path'])) {
                $value = $data['path'];
            } elseif (null === $data['path']) {
                $value = $data['path'];
            }
            $object->path = $value;
            unset($data['path']);
        } elseif (array_key_exists('path', $data)) {
            $object->path = null;
            unset($data['path']);
        }
        if (array_key_exists('runtimeArgs', $data) && null !== $data['runtimeArgs']) {
            $values = [];
            foreach ($data['runtimeArgs'] as $value_1) {
                $values[] = $value_1;
            }
            $object->runtimeArgs = $values;
            unset($data['runtimeArgs']);
        } elseif (array_key_exists('runtimeArgs', $data)) {
            $object->runtimeArgs = null;
            unset($data['runtimeArgs']);
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $value_2 = $data['status'];
            if (is_array($data['status']) && $this->isOnlyNumericKeys($data['status'])) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['status'] as $key => $value_3) {
                    $values_1[$key] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data['status']) {
                $value_2 = $data['status'];
            }
            $object->status = $value_2;
            unset($data['status']);
        } elseif (array_key_exists('status', $data)) {
            $object->status = null;
            unset($data['status']);
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
        if (array_key_exists('path', get_object_vars($data)) && null !== ($data->path ?? null)) {
            $value = $data->path;
            if (is_string($data->path)) {
                $value = $data->path;
            } elseif (null === $data->path) {
                $value = $data->path;
            }
            $dataArray['path'] = $value;
        }
        if (array_key_exists('runtimeArgs', get_object_vars($data)) && null !== ($data->runtimeArgs ?? null)) {
            $values = [];
            foreach ($data->runtimeArgs as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['runtimeArgs'] = $values;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $value_2 = $data->status;
            if (is_iterable($data->status)) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->status as $key => $value_3) {
                    $values_1[$key] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data->status) {
                $value_2 = $data->status;
            }
            $dataArray['status'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Runtime::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
