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

class ManagerStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ManagerStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ManagerStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ManagerStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Leader', $data) && null !== $data['Leader']) {
            $value = $data['Leader'];
            if (is_bool($data['Leader'])) {
                $value = $data['Leader'];
            } elseif (null === $data['Leader']) {
                $value = $data['Leader'];
            }
            $object->leader = $value;
            unset($data['Leader']);
        } elseif (array_key_exists('Leader', $data)) {
            $object->leader = null;
            unset($data['Leader']);
        }
        if (array_key_exists('Reachability', $data)) {
            $object->reachability = \WebProject\DockerApi\Library\Generated\Model\Reachability::from($data['Reachability']);
            unset($data['Reachability']);
        }
        if (array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $value_1 = $data['Addr'];
            if (is_string($data['Addr'])) {
                $value_1 = $data['Addr'];
            } elseif (null === $data['Addr']) {
                $value_1 = $data['Addr'];
            }
            $object->addr = $value_1;
            unset($data['Addr']);
        } elseif (array_key_exists('Addr', $data)) {
            $object->addr = null;
            unset($data['Addr']);
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
        if (array_key_exists('leader', get_object_vars($data)) && null !== ($data->leader ?? null)) {
            $value = $data->leader;
            if (is_bool($data->leader)) {
                $value = $data->leader;
            } elseif (null === $data->leader) {
                $value = $data->leader;
            }
            $dataArray['Leader'] = $value;
        }
        if (array_key_exists('reachability', get_object_vars($data)) && null !== ($data->reachability ?? null)) {
            $dataArray['Reachability'] = $data->reachability->value;
        }
        if (array_key_exists('addr', get_object_vars($data)) && null !== ($data->addr ?? null)) {
            $value_1 = $data->addr;
            if (is_string($data->addr)) {
                $value_1 = $data->addr;
            } elseif (null === $data->addr) {
                $value_1 = $data->addr;
            }
            $dataArray['Addr'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ManagerStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
