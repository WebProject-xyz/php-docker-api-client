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

class ProgressDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ProgressDetail();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('current', $data) && null !== $data['current']) {
            $value = $data['current'];
            if (is_int($data['current'])) {
                $value = $data['current'];
            } elseif (null === $data['current']) {
                $value = $data['current'];
            }
            $object->setCurrent($value);
        } elseif (array_key_exists('current', $data) && null === $data['current']) {
            $object->setCurrent(null);
        }
        if (array_key_exists('total', $data) && null !== $data['total']) {
            $value_1 = $data['total'];
            if (is_int($data['total'])) {
                $value_1 = $data['total'];
            } elseif (null === $data['total']) {
                $value_1 = $data['total'];
            }
            $object->setTotal($value_1);
        } elseif (array_key_exists('total', $data) && null === $data['total']) {
            $object->setTotal(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('current')) {
            $value = $data->getCurrent();
            if (is_int($data->getCurrent())) {
                $value = $data->getCurrent();
            } elseif (null === $data->getCurrent()) {
                $value = $data->getCurrent();
            }
            $dataArray['current'] = $value;
        }
        if ($data->isInitialized('total')) {
            $value_1 = $data->getTotal();
            if (is_int($data->getTotal())) {
                $value_1 = $data->getTotal();
            } elseif (null === $data->getTotal()) {
                $value_1 = $data->getTotal();
            }
            $dataArray['total'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
