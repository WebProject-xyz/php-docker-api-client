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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Runtime();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (array_key_exists('runtimeArgs', $data) && null !== $data['runtimeArgs']) {
            $values = [];
            foreach ($data['runtimeArgs'] as $value) {
                $values[] = $value;
            }
            $object->setRuntimeArgs($values);
            unset($data['runtimeArgs']);
        } elseif (array_key_exists('runtimeArgs', $data) && null === $data['runtimeArgs']) {
            $object->setRuntimeArgs(null);
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['status'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setStatus($values_1);
            unset($data['status']);
        } elseif (array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('path') && null !== $data->getPath()) {
            $dataArray['path'] = $data->getPath();
        }
        if ($data->isInitialized('runtimeArgs') && null !== $data->getRuntimeArgs()) {
            $values = [];
            foreach ($data->getRuntimeArgs() as $value) {
                $values[] = $value;
            }
            $dataArray['runtimeArgs'] = $values;
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $values_1 = [];
            foreach ($data->getStatus() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['status'] = $values_1;
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
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
