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

class TaskSpecContainerSpecSecretsItemFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('UID', $data) && null !== $data['UID']) {
            $value_1 = $data['UID'];
            if (is_string($data['UID'])) {
                $value_1 = $data['UID'];
            } elseif (null === $data['UID']) {
                $value_1 = $data['UID'];
            }
            $object->uID = $value_1;
            unset($data['UID']);
        } elseif (array_key_exists('UID', $data)) {
            $object->uID = null;
            unset($data['UID']);
        }
        if (array_key_exists('GID', $data) && null !== $data['GID']) {
            $value_2 = $data['GID'];
            if (is_string($data['GID'])) {
                $value_2 = $data['GID'];
            } elseif (null === $data['GID']) {
                $value_2 = $data['GID'];
            }
            $object->gID = $value_2;
            unset($data['GID']);
        } elseif (array_key_exists('GID', $data)) {
            $object->gID = null;
            unset($data['GID']);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value_3 = $data['Mode'];
            if (is_int($data['Mode'])) {
                $value_3 = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value_3 = $data['Mode'];
            }
            $object->mode = $value_3;
            unset($data['Mode']);
        } elseif (array_key_exists('Mode', $data)) {
            $object->mode = null;
            unset($data['Mode']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('uID', get_object_vars($data)) && null !== ($data->uID ?? null)) {
            $value_1 = $data->uID;
            if (is_string($data->uID)) {
                $value_1 = $data->uID;
            } elseif (null === $data->uID) {
                $value_1 = $data->uID;
            }
            $dataArray['UID'] = $value_1;
        }
        if (array_key_exists('gID', get_object_vars($data)) && null !== ($data->gID ?? null)) {
            $value_2 = $data->gID;
            if (is_string($data->gID)) {
                $value_2 = $data->gID;
            } elseif (null === $data->gID) {
                $value_2 = $data->gID;
            }
            $dataArray['GID'] = $value_2;
        }
        if (array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $value_3 = $data->mode;
            if (is_int($data->mode)) {
                $value_3 = $data->mode;
            } elseif (null === $data->mode) {
                $value_3 = $data->mode;
            }
            $dataArray['Mode'] = $value_3;
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
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
