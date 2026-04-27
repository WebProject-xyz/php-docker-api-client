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

class PortBindingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PortBinding::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PortBinding::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PortBinding();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('HostIp', $data) && null !== $data['HostIp']) {
            $value = $data['HostIp'];
            if (is_string($data['HostIp'])) {
                $value = $data['HostIp'];
            } elseif (null === $data['HostIp']) {
                $value = $data['HostIp'];
            }
            $object->setHostIp($value);
        } elseif (array_key_exists('HostIp', $data) && null === $data['HostIp']) {
            $object->setHostIp(null);
        }
        if (array_key_exists('HostPort', $data) && null !== $data['HostPort']) {
            $value_1 = $data['HostPort'];
            if (is_string($data['HostPort'])) {
                $value_1 = $data['HostPort'];
            } elseif (null === $data['HostPort']) {
                $value_1 = $data['HostPort'];
            }
            $object->setHostPort($value_1);
        } elseif (array_key_exists('HostPort', $data) && null === $data['HostPort']) {
            $object->setHostPort(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('hostIp')) {
            $value = $data->getHostIp();
            if (is_string($data->getHostIp())) {
                $value = $data->getHostIp();
            } elseif (null === $data->getHostIp()) {
                $value = $data->getHostIp();
            }
            $dataArray['HostIp'] = $value;
        }
        if ($data->isInitialized('hostPort')) {
            $value_1 = $data->getHostPort();
            if (is_string($data->getHostPort())) {
                $value_1 = $data->getHostPort();
            } elseif (null === $data->getHostPort()) {
                $value_1 = $data->getHostPort();
            }
            $dataArray['HostPort'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PortBinding::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
