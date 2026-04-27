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

class ErrorDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ErrorDetail();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('code', $data) && null !== $data['code']) {
            $value = $data['code'];
            if (is_int($data['code'])) {
                $value = $data['code'];
            } elseif (null === $data['code']) {
                $value = $data['code'];
            }
            $object->setCode($value);
        } elseif (array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (array_key_exists('message', $data) && null !== $data['message']) {
            $value_1 = $data['message'];
            if (is_string($data['message'])) {
                $value_1 = $data['message'];
            } elseif (null === $data['message']) {
                $value_1 = $data['message'];
            }
            $object->setMessage($value_1);
        } elseif (array_key_exists('message', $data) && null === $data['message']) {
            $object->setMessage(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('code')) {
            $value = $data->getCode();
            if (is_int($data->getCode())) {
                $value = $data->getCode();
            } elseif (null === $data->getCode()) {
                $value = $data->getCode();
            }
            $dataArray['code'] = $value;
        }
        if ($data->isInitialized('message')) {
            $value_1 = $data->getMessage();
            if (is_string($data->getMessage())) {
                $value_1 = $data->getMessage();
            } elseif (null === $data->getMessage()) {
                $value_1 = $data->getMessage();
            }
            $dataArray['message'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
