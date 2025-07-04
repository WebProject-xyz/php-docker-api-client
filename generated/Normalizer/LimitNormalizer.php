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

class LimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Limit::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Limit::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Limit();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('NanoCPUs', $data)) {
            $object->setNanoCPUs($data['NanoCPUs']);
            unset($data['NanoCPUs']);
        }
        if (array_key_exists('MemoryBytes', $data)) {
            $object->setMemoryBytes($data['MemoryBytes']);
            unset($data['MemoryBytes']);
        }
        if (array_key_exists('Pids', $data)) {
            $object->setPids($data['Pids']);
            unset($data['Pids']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('nanoCPUs') && null !== $data->getNanoCPUs()) {
            $dataArray['NanoCPUs'] = $data->getNanoCPUs();
        }
        if ($data->isInitialized('memoryBytes') && null !== $data->getMemoryBytes()) {
            $dataArray['MemoryBytes'] = $data->getMemoryBytes();
        }
        if ($data->isInitialized('pids') && null !== $data->getPids()) {
            $dataArray['Pids'] = $data->getPids();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Limit::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
