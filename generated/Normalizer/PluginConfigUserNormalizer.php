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

class PluginConfigUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('UID', $data) && null !== $data['UID']) {
            $value = $data['UID'];
            if (is_int($data['UID'])) {
                $value = $data['UID'];
            } elseif (null === $data['UID']) {
                $value = $data['UID'];
            }
            $object->uID = $value;
            unset($data['UID']);
        } elseif (array_key_exists('UID', $data)) {
            $object->uID = null;
            unset($data['UID']);
        }
        if (array_key_exists('GID', $data) && null !== $data['GID']) {
            $value_1 = $data['GID'];
            if (is_int($data['GID'])) {
                $value_1 = $data['GID'];
            } elseif (null === $data['GID']) {
                $value_1 = $data['GID'];
            }
            $object->gID = $value_1;
            unset($data['GID']);
        } elseif (array_key_exists('GID', $data)) {
            $object->gID = null;
            unset($data['GID']);
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
        if (array_key_exists('uID', get_object_vars($data)) && null !== ($data->uID ?? null)) {
            $value = $data->uID;
            if (is_int($data->uID)) {
                $value = $data->uID;
            } elseif (null === $data->uID) {
                $value = $data->uID;
            }
            $dataArray['UID'] = $value;
        }
        if (array_key_exists('gID', get_object_vars($data)) && null !== ($data->gID ?? null)) {
            $value_1 = $data->gID;
            if (is_int($data->gID)) {
                $value_1 = $data->gID;
            } elseif (null === $data->gID) {
                $value_1 = $data->gID;
            }
            $dataArray['GID'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
