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

class AuthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\AuthConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\AuthConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\AuthConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('username', $data) && null !== $data['username']) {
            $value = $data['username'];
            if (is_string($data['username'])) {
                $value = $data['username'];
            } elseif (null === $data['username']) {
                $value = $data['username'];
            }
            $object->username = $value;
            unset($data['username']);
        } elseif (array_key_exists('username', $data)) {
            $object->username = null;
            unset($data['username']);
        }
        if (array_key_exists('password', $data) && null !== $data['password']) {
            $value_1 = $data['password'];
            if (is_string($data['password'])) {
                $value_1 = $data['password'];
            } elseif (null === $data['password']) {
                $value_1 = $data['password'];
            }
            $object->password = $value_1;
            unset($data['password']);
        } elseif (array_key_exists('password', $data)) {
            $object->password = null;
            unset($data['password']);
        }
        if (array_key_exists('serveraddress', $data) && null !== $data['serveraddress']) {
            $value_2 = $data['serveraddress'];
            if (is_string($data['serveraddress'])) {
                $value_2 = $data['serveraddress'];
            } elseif (null === $data['serveraddress']) {
                $value_2 = $data['serveraddress'];
            }
            $object->serveraddress = $value_2;
            unset($data['serveraddress']);
        } elseif (array_key_exists('serveraddress', $data)) {
            $object->serveraddress = null;
            unset($data['serveraddress']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('username', get_object_vars($data)) && null !== ($data->username ?? null)) {
            $value = $data->username;
            if (is_string($data->username)) {
                $value = $data->username;
            } elseif (null === $data->username) {
                $value = $data->username;
            }
            $dataArray['username'] = $value;
        }
        if (array_key_exists('password', get_object_vars($data)) && null !== ($data->password ?? null)) {
            $value_1 = $data->password;
            if (is_string($data->password)) {
                $value_1 = $data->password;
            } elseif (null === $data->password) {
                $value_1 = $data->password;
            }
            $dataArray['password'] = $value_1;
        }
        if (array_key_exists('serveraddress', get_object_vars($data)) && null !== ($data->serveraddress ?? null)) {
            $value_2 = $data->serveraddress;
            if (is_string($data->serveraddress)) {
                $value_2 = $data->serveraddress;
            } elseif (null === $data->serveraddress) {
                $value_2 = $data->serveraddress;
            }
            $dataArray['serveraddress'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\AuthConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
