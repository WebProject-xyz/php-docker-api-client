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

class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Timestamp', $data)) {
            $object->setTimestamp($data['Timestamp']);
            unset($data['Timestamp']);
        }
        if (array_key_exists('State', $data)) {
            $object->setState($data['State']);
            unset($data['State']);
        }
        if (array_key_exists('Message', $data)) {
            $object->setMessage($data['Message']);
            unset($data['Message']);
        }
        if (array_key_exists('Err', $data)) {
            $object->setErr($data['Err']);
            unset($data['Err']);
        }
        if (array_key_exists('ContainerStatus', $data)) {
            $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class, 'json', $context));
            unset($data['ContainerStatus']);
        }
        if (array_key_exists('PortStatus', $data)) {
            $object->setPortStatus($this->denormalizer->denormalize($data['PortStatus'], \WebProject\DockerApi\Library\Generated\Model\PortStatus::class, 'json', $context));
            unset($data['PortStatus']);
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
        if ($data->isInitialized('timestamp') && null !== $data->getTimestamp()) {
            $dataArray['Timestamp'] = $data->getTimestamp();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['State'] = $data->getState();
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['Message'] = $data->getMessage();
        }
        if ($data->isInitialized('err') && null !== $data->getErr()) {
            $dataArray['Err'] = $data->getErr();
        }
        if ($data->isInitialized('containerStatus') && null !== $data->getContainerStatus()) {
            $dataArray['ContainerStatus'] = $this->normalizer->normalize($data->getContainerStatus(), 'json', $context);
        }
        if ($data->isInitialized('portStatus') && null !== $data->getPortStatus()) {
            $dataArray['PortStatus'] = $this->normalizer->normalize($data->getPortStatus(), 'json', $context);
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
        return [\WebProject\DockerApi\Library\Generated\Model\TaskStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
