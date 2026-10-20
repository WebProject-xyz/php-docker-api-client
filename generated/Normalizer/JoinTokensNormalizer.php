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

class JoinTokensNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\JoinTokens::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\JoinTokens::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\JoinTokens();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Worker', $data) && null !== $data['Worker']) {
            $value = $data['Worker'];
            if (is_string($data['Worker'])) {
                $value = $data['Worker'];
            } elseif (null === $data['Worker']) {
                $value = $data['Worker'];
            }
            $object->worker = $value;
            unset($data['Worker']);
        } elseif (array_key_exists('Worker', $data)) {
            $object->worker = null;
            unset($data['Worker']);
        }
        if (array_key_exists('Manager', $data) && null !== $data['Manager']) {
            $value_1 = $data['Manager'];
            if (is_string($data['Manager'])) {
                $value_1 = $data['Manager'];
            } elseif (null === $data['Manager']) {
                $value_1 = $data['Manager'];
            }
            $object->manager = $value_1;
            unset($data['Manager']);
        } elseif (array_key_exists('Manager', $data)) {
            $object->manager = null;
            unset($data['Manager']);
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
        if (array_key_exists('worker', get_object_vars($data)) && null !== ($data->worker ?? null)) {
            $value = $data->worker;
            if (is_string($data->worker)) {
                $value = $data->worker;
            } elseif (null === $data->worker) {
                $value = $data->worker;
            }
            $dataArray['Worker'] = $value;
        }
        if (array_key_exists('manager', get_object_vars($data)) && null !== ($data->manager ?? null)) {
            $value_1 = $data->manager;
            if (is_string($data->manager)) {
                $value_1 = $data->manager;
            } elseif (null === $data->manager) {
                $value_1 = $data->manager;
            }
            $dataArray['Manager'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\JoinTokens::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
