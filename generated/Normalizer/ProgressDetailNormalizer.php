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

class ProgressDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ProgressDetail();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('current', $data) && null !== $data['current']) {
            $value = $data['current'];
            if (is_int($data['current'])) {
                $value = $data['current'];
            } elseif (null === $data['current']) {
                $value = $data['current'];
            }
            $object->current = $value;
            unset($data['current']);
        } elseif (array_key_exists('current', $data)) {
            $object->current = null;
            unset($data['current']);
        }
        if (array_key_exists('total', $data) && null !== $data['total']) {
            $value_1 = $data['total'];
            if (is_int($data['total'])) {
                $value_1 = $data['total'];
            } elseif (null === $data['total']) {
                $value_1 = $data['total'];
            }
            $object->total = $value_1;
            unset($data['total']);
        } elseif (array_key_exists('total', $data)) {
            $object->total = null;
            unset($data['total']);
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
        if (array_key_exists('current', get_object_vars($data)) && null !== ($data->current ?? null)) {
            $value = $data->current;
            if (is_int($data->current)) {
                $value = $data->current;
            } elseif (null === $data->current) {
                $value = $data->current;
            }
            $dataArray['current'] = $value;
        }
        if (array_key_exists('total', get_object_vars($data)) && null !== ($data->total ?? null)) {
            $value_1 = $data->total;
            if (is_int($data->total)) {
                $value_1 = $data->total;
            } elseif (null === $data->total) {
                $value_1 = $data->total;
            }
            $dataArray['total'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
