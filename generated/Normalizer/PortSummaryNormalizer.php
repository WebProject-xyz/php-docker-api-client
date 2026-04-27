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

class PortSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PortSummary::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PortSummary::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PortSummary();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('IP', $data) && null !== $data['IP']) {
            $value = $data['IP'];
            if (is_string($data['IP'])) {
                $value = $data['IP'];
            } elseif (null === $data['IP']) {
                $value = $data['IP'];
            }
            $object->setIP($value);
        } elseif (array_key_exists('IP', $data) && null === $data['IP']) {
            $object->setIP(null);
        }
        if (array_key_exists('PrivatePort', $data)) {
            $object->setPrivatePort($data['PrivatePort']);
        }
        if (array_key_exists('PublicPort', $data) && null !== $data['PublicPort']) {
            $value_1 = $data['PublicPort'];
            if (is_int($data['PublicPort'])) {
                $value_1 = $data['PublicPort'];
            } elseif (null === $data['PublicPort']) {
                $value_1 = $data['PublicPort'];
            }
            $object->setPublicPort($value_1);
        } elseif (array_key_exists('PublicPort', $data) && null === $data['PublicPort']) {
            $object->setPublicPort(null);
        }
        if (array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iP')) {
            $value = $data->getIP();
            if (is_string($data->getIP())) {
                $value = $data->getIP();
            } elseif (null === $data->getIP()) {
                $value = $data->getIP();
            }
            $dataArray['IP'] = $value;
        }
        $dataArray['PrivatePort'] = $data->getPrivatePort();
        if ($data->isInitialized('publicPort')) {
            $value_1 = $data->getPublicPort();
            if (is_int($data->getPublicPort())) {
                $value_1 = $data->getPublicPort();
            } elseif (null === $data->getPublicPort()) {
                $value_1 = $data->getPublicPort();
            }
            $dataArray['PublicPort'] = $value_1;
        }
        $dataArray['Type'] = $data->getType();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PortSummary::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
