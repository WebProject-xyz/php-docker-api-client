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

class ClusterVolumeSpecAccessModeSecretsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Key', $data) && null !== $data['Key']) {
            $value = $data['Key'];
            if (is_string($data['Key'])) {
                $value = $data['Key'];
            } elseif (null === $data['Key']) {
                $value = $data['Key'];
            }
            $object->setKey($value);
        } elseif (array_key_exists('Key', $data) && null === $data['Key']) {
            $object->setKey(null);
        }
        if (array_key_exists('Secret', $data) && null !== $data['Secret']) {
            $value_1 = $data['Secret'];
            if (is_string($data['Secret'])) {
                $value_1 = $data['Secret'];
            } elseif (null === $data['Secret']) {
                $value_1 = $data['Secret'];
            }
            $object->setSecret($value_1);
        } elseif (array_key_exists('Secret', $data) && null === $data['Secret']) {
            $object->setSecret(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('key')) {
            $value = $data->getKey();
            if (is_string($data->getKey())) {
                $value = $data->getKey();
            } elseif (null === $data->getKey()) {
                $value = $data->getKey();
            }
            $dataArray['Key'] = $value;
        }
        if ($data->isInitialized('secret')) {
            $value_1 = $data->getSecret();
            if (is_string($data->getSecret())) {
                $value_1 = $data->getSecret();
            } elseif (null === $data->getSecret()) {
                $value_1 = $data->getSecret();
            }
            $dataArray['Secret'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
