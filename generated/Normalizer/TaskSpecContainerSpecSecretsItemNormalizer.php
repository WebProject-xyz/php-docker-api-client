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

class TaskSpecContainerSpecSecretsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('File', $data) && null !== $data['File']) {
            $object->setFile($this->denormalizer->denormalize($data['File'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class, 'json', $context));
        } elseif (array_key_exists('File', $data) && null === $data['File']) {
            $object->setFile(null);
        }
        if (array_key_exists('SecretID', $data) && null !== $data['SecretID']) {
            $value = $data['SecretID'];
            if (is_string($data['SecretID'])) {
                $value = $data['SecretID'];
            } elseif (null === $data['SecretID']) {
                $value = $data['SecretID'];
            }
            $object->setSecretID($value);
        } elseif (array_key_exists('SecretID', $data) && null === $data['SecretID']) {
            $object->setSecretID(null);
        }
        if (array_key_exists('SecretName', $data) && null !== $data['SecretName']) {
            $value_1 = $data['SecretName'];
            if (is_string($data['SecretName'])) {
                $value_1 = $data['SecretName'];
            } elseif (null === $data['SecretName']) {
                $value_1 = $data['SecretName'];
            }
            $object->setSecretName($value_1);
        } elseif (array_key_exists('SecretName', $data) && null === $data['SecretName']) {
            $object->setSecretName(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('file')) {
            $dataArray['File'] = $this->normalizer->normalize($data->getFile(), 'json', $context);
        }
        if ($data->isInitialized('secretID')) {
            $value = $data->getSecretID();
            if (is_string($data->getSecretID())) {
                $value = $data->getSecretID();
            } elseif (null === $data->getSecretID()) {
                $value = $data->getSecretID();
            }
            $dataArray['SecretID'] = $value;
        }
        if ($data->isInitialized('secretName')) {
            $value_1 = $data->getSecretName();
            if (is_string($data->getSecretName())) {
                $value_1 = $data->getSecretName();
            } elseif (null === $data->getSecretName()) {
                $value_1 = $data->getSecretName();
            }
            $dataArray['SecretName'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
