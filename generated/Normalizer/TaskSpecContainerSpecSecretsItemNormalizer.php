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
            $object->file = $this->denormalizer->denormalize($data['File'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class, 'json', $context);
            unset($data['File']);
        } elseif (array_key_exists('File', $data)) {
            $object->file = null;
            unset($data['File']);
        }
        if (array_key_exists('SecretID', $data) && null !== $data['SecretID']) {
            $value = $data['SecretID'];
            if (is_string($data['SecretID'])) {
                $value = $data['SecretID'];
            } elseif (null === $data['SecretID']) {
                $value = $data['SecretID'];
            }
            $object->secretID = $value;
            unset($data['SecretID']);
        } elseif (array_key_exists('SecretID', $data)) {
            $object->secretID = null;
            unset($data['SecretID']);
        }
        if (array_key_exists('SecretName', $data) && null !== $data['SecretName']) {
            $value_1 = $data['SecretName'];
            if (is_string($data['SecretName'])) {
                $value_1 = $data['SecretName'];
            } elseif (null === $data['SecretName']) {
                $value_1 = $data['SecretName'];
            }
            $object->secretName = $value_1;
            unset($data['SecretName']);
        } elseif (array_key_exists('SecretName', $data)) {
            $object->secretName = null;
            unset($data['SecretName']);
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
        if (array_key_exists('file', get_object_vars($data)) && null !== ($data->file ?? null)) {
            $normalized        = $this->normalizer->normalize($data->file, 'json', $context);
            $dataArray['File'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('secretID', get_object_vars($data)) && null !== ($data->secretID ?? null)) {
            $value = $data->secretID;
            if (is_string($data->secretID)) {
                $value = $data->secretID;
            } elseif (null === $data->secretID) {
                $value = $data->secretID;
            }
            $dataArray['SecretID'] = $value;
        }
        if (array_key_exists('secretName', get_object_vars($data)) && null !== ($data->secretName ?? null)) {
            $value_1 = $data->secretName;
            if (is_string($data->secretName)) {
                $value_1 = $data->secretName;
            } elseif (null === $data->secretName) {
                $value_1 = $data->secretName;
            }
            $dataArray['SecretName'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
