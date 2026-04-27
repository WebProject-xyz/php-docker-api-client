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
use function is_bool;
use function is_object;
use function is_string;

class TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Disable', $data) && null !== $data['Disable']) {
            $value = $data['Disable'];
            if (is_bool($data['Disable'])) {
                $value = $data['Disable'];
            } elseif (null === $data['Disable']) {
                $value = $data['Disable'];
            }
            $object->setDisable($value);
        } elseif (array_key_exists('Disable', $data) && null === $data['Disable']) {
            $object->setDisable(null);
        }
        if (array_key_exists('User', $data) && null !== $data['User']) {
            $value_1 = $data['User'];
            if (is_string($data['User'])) {
                $value_1 = $data['User'];
            } elseif (null === $data['User']) {
                $value_1 = $data['User'];
            }
            $object->setUser($value_1);
        } elseif (array_key_exists('User', $data) && null === $data['User']) {
            $object->setUser(null);
        }
        if (array_key_exists('Role', $data) && null !== $data['Role']) {
            $value_2 = $data['Role'];
            if (is_string($data['Role'])) {
                $value_2 = $data['Role'];
            } elseif (null === $data['Role']) {
                $value_2 = $data['Role'];
            }
            $object->setRole($value_2);
        } elseif (array_key_exists('Role', $data) && null === $data['Role']) {
            $object->setRole(null);
        }
        if (array_key_exists('Type', $data) && null !== $data['Type']) {
            $value_3 = $data['Type'];
            if (is_string($data['Type'])) {
                $value_3 = $data['Type'];
            } elseif (null === $data['Type']) {
                $value_3 = $data['Type'];
            }
            $object->setType($value_3);
        } elseif (array_key_exists('Type', $data) && null === $data['Type']) {
            $object->setType(null);
        }
        if (array_key_exists('Level', $data) && null !== $data['Level']) {
            $value_4 = $data['Level'];
            if (is_string($data['Level'])) {
                $value_4 = $data['Level'];
            } elseif (null === $data['Level']) {
                $value_4 = $data['Level'];
            }
            $object->setLevel($value_4);
        } elseif (array_key_exists('Level', $data) && null === $data['Level']) {
            $object->setLevel(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('disable')) {
            $value = $data->getDisable();
            if (is_bool($data->getDisable())) {
                $value = $data->getDisable();
            } elseif (null === $data->getDisable()) {
                $value = $data->getDisable();
            }
            $dataArray['Disable'] = $value;
        }
        if ($data->isInitialized('user')) {
            $value_1 = $data->getUser();
            if (is_string($data->getUser())) {
                $value_1 = $data->getUser();
            } elseif (null === $data->getUser()) {
                $value_1 = $data->getUser();
            }
            $dataArray['User'] = $value_1;
        }
        if ($data->isInitialized('role')) {
            $value_2 = $data->getRole();
            if (is_string($data->getRole())) {
                $value_2 = $data->getRole();
            } elseif (null === $data->getRole()) {
                $value_2 = $data->getRole();
            }
            $dataArray['Role'] = $value_2;
        }
        if ($data->isInitialized('type')) {
            $value_3 = $data->getType();
            if (is_string($data->getType())) {
                $value_3 = $data->getType();
            } elseif (null === $data->getType()) {
                $value_3 = $data->getType();
            }
            $dataArray['Type'] = $value_3;
        }
        if ($data->isInitialized('level')) {
            $value_4 = $data->getLevel();
            if (is_string($data->getLevel())) {
                $value_4 = $data->getLevel();
            } elseif (null === $data->getLevel()) {
                $value_4 = $data->getLevel();
            }
            $dataArray['Level'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
