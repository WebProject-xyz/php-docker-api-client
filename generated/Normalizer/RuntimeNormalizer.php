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

class RuntimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Runtime::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Runtime::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Runtime();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('path', $data) && null !== $data['path']) {
            $value = $data['path'];
            if (is_string($data['path'])) {
                $value = $data['path'];
            } elseif (null === $data['path']) {
                $value = $data['path'];
            }
            $object->setPath($value);
        } elseif (array_key_exists('path', $data) && null === $data['path']) {
            $object->setPath(null);
        }
        if (array_key_exists('runtimeArgs', $data) && null !== $data['runtimeArgs']) {
            $value_1 = $data['runtimeArgs'];
            if (is_array($data['runtimeArgs']) && $this->isOnlyNumericKeys($data['runtimeArgs'])) {
                $values = [];
                foreach ($data['runtimeArgs'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['runtimeArgs']) {
                $value_1 = $data['runtimeArgs'];
            }
            $object->setRuntimeArgs($value_1);
        } elseif (array_key_exists('runtimeArgs', $data) && null === $data['runtimeArgs']) {
            $object->setRuntimeArgs(null);
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $value_3 = $data['status'];
            if (is_array($data['status']) && $this->isOnlyNumericKeys($data['status'])) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['status'] as $key => $value_4) {
                    $values_1[$key] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data['status']) {
                $value_3 = $data['status'];
            }
            $object->setStatus($value_3);
        } elseif (array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('path')) {
            $value = $data->getPath();
            if (is_string($data->getPath())) {
                $value = $data->getPath();
            } elseif (null === $data->getPath()) {
                $value = $data->getPath();
            }
            $dataArray['path'] = $value;
        }
        if ($data->isInitialized('runtimeArgs')) {
            $value_1 = $data->getRuntimeArgs();
            if (is_array($data->getRuntimeArgs())) {
                $values = [];
                foreach ($data->getRuntimeArgs() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getRuntimeArgs()) {
                $value_1 = $data->getRuntimeArgs();
            }
            $dataArray['runtimeArgs'] = $value_1;
        }
        if ($data->isInitialized('status')) {
            $value_3 = $data->getStatus();
            if (is_object($data->getStatus())) {
                $values_1 = [];
                foreach ($data->getStatus() as $key => $value_4) {
                    $values_1[$key] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data->getStatus()) {
                $value_3 = $data->getStatus();
            }
            $dataArray['status'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Runtime::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
