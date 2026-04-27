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
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('UID', $data) && null !== $data['UID']) {
            $value_1 = $data['UID'];
            if (is_string($data['UID'])) {
                $value_1 = $data['UID'];
            } elseif (null === $data['UID']) {
                $value_1 = $data['UID'];
            }
            $object->setUID($value_1);
        } elseif (array_key_exists('UID', $data) && null === $data['UID']) {
            $object->setUID(null);
        }
        if (array_key_exists('GID', $data) && null !== $data['GID']) {
            $value_2 = $data['GID'];
            if (is_string($data['GID'])) {
                $value_2 = $data['GID'];
            } elseif (null === $data['GID']) {
                $value_2 = $data['GID'];
            }
            $object->setGID($value_2);
        } elseif (array_key_exists('GID', $data) && null === $data['GID']) {
            $object->setGID(null);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value_3 = $data['Mode'];
            if (is_int($data['Mode'])) {
                $value_3 = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value_3 = $data['Mode'];
            }
            $object->setMode($value_3);
        } elseif (array_key_exists('Mode', $data) && null === $data['Mode']) {
            $object->setMode(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name')) {
            $value = $data->getName();
            if (is_string($data->getName())) {
                $value = $data->getName();
            } elseif (null === $data->getName()) {
                $value = $data->getName();
            }
            $dataArray['Name'] = $value;
        }
        if ($data->isInitialized('uID')) {
            $value_1 = $data->getUID();
            if (is_string($data->getUID())) {
                $value_1 = $data->getUID();
            } elseif (null === $data->getUID()) {
                $value_1 = $data->getUID();
            }
            $dataArray['UID'] = $value_1;
        }
        if ($data->isInitialized('gID')) {
            $value_2 = $data->getGID();
            if (is_string($data->getGID())) {
                $value_2 = $data->getGID();
            } elseif (null === $data->getGID()) {
                $value_2 = $data->getGID();
            }
            $dataArray['GID'] = $value_2;
        }
        if ($data->isInitialized('mode')) {
            $value_3 = $data->getMode();
            if (is_int($data->getMode())) {
                $value_3 = $data->getMode();
            } elseif (null === $data->getMode()) {
                $value_3 = $data->getMode();
            }
            $dataArray['Mode'] = $value_3;
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
