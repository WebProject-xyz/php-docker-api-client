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
            $object->iP = $value;
            unset($data['IP']);
        } elseif (array_key_exists('IP', $data)) {
            $object->iP = null;
            unset($data['IP']);
        }
        if (array_key_exists('PrivatePort', $data)) {
            $object->privatePort = $data['PrivatePort'];
            unset($data['PrivatePort']);
        }
        if (array_key_exists('PublicPort', $data) && null !== $data['PublicPort']) {
            $value_1 = $data['PublicPort'];
            if (is_int($data['PublicPort'])) {
                $value_1 = $data['PublicPort'];
            } elseif (null === $data['PublicPort']) {
                $value_1 = $data['PublicPort'];
            }
            $object->publicPort = $value_1;
            unset($data['PublicPort']);
        } elseif (array_key_exists('PublicPort', $data)) {
            $object->publicPort = null;
            unset($data['PublicPort']);
        }
        if (array_key_exists('Type', $data)) {
            $object->type = \WebProject\DockerApi\Library\Generated\Model\PortSummaryType::from($data['Type']);
            unset($data['Type']);
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
        if (array_key_exists('iP', get_object_vars($data)) && null !== ($data->iP ?? null)) {
            $value = $data->iP;
            if (is_string($data->iP)) {
                $value = $data->iP;
            } elseif (null === $data->iP) {
                $value = $data->iP;
            }
            $dataArray['IP'] = $value;
        }
        $dataArray['PrivatePort'] = $data->privatePort;
        if (array_key_exists('publicPort', get_object_vars($data)) && null !== ($data->publicPort ?? null)) {
            $value_1 = $data->publicPort;
            if (is_int($data->publicPort)) {
                $value_1 = $data->publicPort;
            } elseif (null === $data->publicPort) {
                $value_1 = $data->publicPort;
            }
            $dataArray['PublicPort'] = $value_1;
        }
        $dataArray['Type'] = $data->type->value;
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

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
