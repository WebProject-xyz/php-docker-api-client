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
            $object->setUsername($value);
        } elseif (array_key_exists('username', $data) && null === $data['username']) {
            $object->setUsername(null);
        }
        if (array_key_exists('password', $data) && null !== $data['password']) {
            $value_1 = $data['password'];
            if (is_string($data['password'])) {
                $value_1 = $data['password'];
            } elseif (null === $data['password']) {
                $value_1 = $data['password'];
            }
            $object->setPassword($value_1);
        } elseif (array_key_exists('password', $data) && null === $data['password']) {
            $object->setPassword(null);
        }
        if (array_key_exists('serveraddress', $data) && null !== $data['serveraddress']) {
            $value_2 = $data['serveraddress'];
            if (is_string($data['serveraddress'])) {
                $value_2 = $data['serveraddress'];
            } elseif (null === $data['serveraddress']) {
                $value_2 = $data['serveraddress'];
            }
            $object->setServeraddress($value_2);
        } elseif (array_key_exists('serveraddress', $data) && null === $data['serveraddress']) {
            $object->setServeraddress(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('username')) {
            $value = $data->getUsername();
            if (is_string($data->getUsername())) {
                $value = $data->getUsername();
            } elseif (null === $data->getUsername()) {
                $value = $data->getUsername();
            }
            $dataArray['username'] = $value;
        }
        if ($data->isInitialized('password')) {
            $value_1 = $data->getPassword();
            if (is_string($data->getPassword())) {
                $value_1 = $data->getPassword();
            } elseif (null === $data->getPassword()) {
                $value_1 = $data->getPassword();
            }
            $dataArray['password'] = $value_1;
        }
        if ($data->isInitialized('serveraddress')) {
            $value_2 = $data->getServeraddress();
            if (is_string($data->getServeraddress())) {
                $value_2 = $data->getServeraddress();
            } elseif (null === $data->getServeraddress()) {
                $value_2 = $data->getServeraddress();
            }
            $dataArray['serveraddress'] = $value_2;
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
