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

class PluginConfigRootfsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('type', $data) && null !== $data['type']) {
            $value = $data['type'];
            if (is_string($data['type'])) {
                $value = $data['type'];
            } elseif (null === $data['type']) {
                $value = $data['type'];
            }
            $object->type = $value;
            unset($data['type']);
        } elseif (array_key_exists('type', $data)) {
            $object->type = null;
            unset($data['type']);
        }
        if (array_key_exists('diff_ids', $data) && null !== $data['diff_ids']) {
            $values = [];
            foreach ($data['diff_ids'] as $value_1) {
                $values[] = $value_1;
            }
            $object->diffIds = $values;
            unset($data['diff_ids']);
        } elseif (array_key_exists('diff_ids', $data)) {
            $object->diffIds = null;
            unset($data['diff_ids']);
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
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $value = $data->type;
            if (is_string($data->type)) {
                $value = $data->type;
            } elseif (null === $data->type) {
                $value = $data->type;
            }
            $dataArray['type'] = $value;
        }
        if (array_key_exists('diffIds', get_object_vars($data)) && null !== ($data->diffIds ?? null)) {
            $values = [];
            foreach ($data->diffIds as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['diff_ids'] = $values;
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
        return [\WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
