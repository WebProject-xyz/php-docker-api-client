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
            $object->disable = $value;
            unset($data['Disable']);
        } elseif (array_key_exists('Disable', $data)) {
            $object->disable = null;
            unset($data['Disable']);
        }
        if (array_key_exists('User', $data) && null !== $data['User']) {
            $value_1 = $data['User'];
            if (is_string($data['User'])) {
                $value_1 = $data['User'];
            } elseif (null === $data['User']) {
                $value_1 = $data['User'];
            }
            $object->user = $value_1;
            unset($data['User']);
        } elseif (array_key_exists('User', $data)) {
            $object->user = null;
            unset($data['User']);
        }
        if (array_key_exists('Role', $data) && null !== $data['Role']) {
            $value_2 = $data['Role'];
            if (is_string($data['Role'])) {
                $value_2 = $data['Role'];
            } elseif (null === $data['Role']) {
                $value_2 = $data['Role'];
            }
            $object->role = $value_2;
            unset($data['Role']);
        } elseif (array_key_exists('Role', $data)) {
            $object->role = null;
            unset($data['Role']);
        }
        if (array_key_exists('Type', $data) && null !== $data['Type']) {
            $value_3 = $data['Type'];
            if (is_string($data['Type'])) {
                $value_3 = $data['Type'];
            } elseif (null === $data['Type']) {
                $value_3 = $data['Type'];
            }
            $object->type = $value_3;
            unset($data['Type']);
        } elseif (array_key_exists('Type', $data)) {
            $object->type = null;
            unset($data['Type']);
        }
        if (array_key_exists('Level', $data) && null !== $data['Level']) {
            $value_4 = $data['Level'];
            if (is_string($data['Level'])) {
                $value_4 = $data['Level'];
            } elseif (null === $data['Level']) {
                $value_4 = $data['Level'];
            }
            $object->level = $value_4;
            unset($data['Level']);
        } elseif (array_key_exists('Level', $data)) {
            $object->level = null;
            unset($data['Level']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('disable', get_object_vars($data)) && null !== ($data->disable ?? null)) {
            $value = $data->disable;
            if (is_bool($data->disable)) {
                $value = $data->disable;
            } elseif (null === $data->disable) {
                $value = $data->disable;
            }
            $dataArray['Disable'] = $value;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $value_1 = $data->user;
            if (is_string($data->user)) {
                $value_1 = $data->user;
            } elseif (null === $data->user) {
                $value_1 = $data->user;
            }
            $dataArray['User'] = $value_1;
        }
        if (array_key_exists('role', get_object_vars($data)) && null !== ($data->role ?? null)) {
            $value_2 = $data->role;
            if (is_string($data->role)) {
                $value_2 = $data->role;
            } elseif (null === $data->role) {
                $value_2 = $data->role;
            }
            $dataArray['Role'] = $value_2;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $value_3 = $data->type;
            if (is_string($data->type)) {
                $value_3 = $data->type;
            } elseif (null === $data->type) {
                $value_3 = $data->type;
            }
            $dataArray['Type'] = $value_3;
        }
        if (array_key_exists('level', get_object_vars($data)) && null !== ($data->level ?? null)) {
            $value_4 = $data->level;
            if (is_string($data->level)) {
                $value_4 = $data->level;
            } elseif (null === $data->level) {
                $value_4 = $data->level;
            }
            $dataArray['Level'] = $value_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
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
