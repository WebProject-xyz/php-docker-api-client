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
            $object->setUID($value);
        } elseif (array_key_exists('UID', $data) && null === $data['UID']) {
            $object->setUID(null);
        }
        if (array_key_exists('GID', $data) && null !== $data['GID']) {
            $value_1 = $data['GID'];
            if (is_int($data['GID'])) {
                $value_1 = $data['GID'];
            } elseif (null === $data['GID']) {
                $value_1 = $data['GID'];
            }
            $object->setGID($value_1);
        } elseif (array_key_exists('GID', $data) && null === $data['GID']) {
            $object->setGID(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('uID')) {
            $value = $data->getUID();
            if (is_int($data->getUID())) {
                $value = $data->getUID();
            } elseif (null === $data->getUID()) {
                $value = $data->getUID();
            }
            $dataArray['UID'] = $value;
        }
        if ($data->isInitialized('gID')) {
            $value_1 = $data->getGID();
            if (is_int($data->getGID())) {
                $value_1 = $data->getGID();
            } elseif (null === $data->getGID()) {
                $value_1 = $data->getGID();
            }
            $dataArray['GID'] = $value_1;
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
