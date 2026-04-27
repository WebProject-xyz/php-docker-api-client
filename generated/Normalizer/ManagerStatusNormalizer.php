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
            $object->setLeader($value);
        } elseif (array_key_exists('Leader', $data) && null === $data['Leader']) {
            $object->setLeader(null);
        }
        if (array_key_exists('Reachability', $data)) {
            $object->setReachability($data['Reachability']);
        }
        if (array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $value_1 = $data['Addr'];
            if (is_string($data['Addr'])) {
                $value_1 = $data['Addr'];
            } elseif (null === $data['Addr']) {
                $value_1 = $data['Addr'];
            }
            $object->setAddr($value_1);
        } elseif (array_key_exists('Addr', $data) && null === $data['Addr']) {
            $object->setAddr(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('leader')) {
            $value = $data->getLeader();
            if (is_bool($data->getLeader())) {
                $value = $data->getLeader();
            } elseif (null === $data->getLeader()) {
                $value = $data->getLeader();
            }
            $dataArray['Leader'] = $value;
        }
        if ($data->isInitialized('reachability') && null !== $data->getReachability()) {
            $dataArray['Reachability'] = $data->getReachability();
        }
        if ($data->isInitialized('addr')) {
            $value_1 = $data->getAddr();
            if (is_string($data->getAddr())) {
                $value_1 = $data->getAddr();
            } elseif (null === $data->getAddr()) {
                $value_1 = $data->getAddr();
            }
            $dataArray['Addr'] = $value_1;
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
