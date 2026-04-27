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
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Timestamp', $data) && null !== $data['Timestamp']) {
            $value = $data['Timestamp'];
            if (is_string($data['Timestamp'])) {
                $value = $data['Timestamp'];
            } elseif (null === $data['Timestamp']) {
                $value = $data['Timestamp'];
            }
            $object->setTimestamp($value);
        } elseif (array_key_exists('Timestamp', $data) && null === $data['Timestamp']) {
            $object->setTimestamp(null);
        }
        if (array_key_exists('State', $data)) {
            $object->setState($data['State']);
        }
        if (array_key_exists('Message', $data) && null !== $data['Message']) {
            $value_1 = $data['Message'];
            if (is_string($data['Message'])) {
                $value_1 = $data['Message'];
            } elseif (null === $data['Message']) {
                $value_1 = $data['Message'];
            }
            $object->setMessage($value_1);
        } elseif (array_key_exists('Message', $data) && null === $data['Message']) {
            $object->setMessage(null);
        }
        if (array_key_exists('Err', $data) && null !== $data['Err']) {
            $value_2 = $data['Err'];
            if (is_string($data['Err'])) {
                $value_2 = $data['Err'];
            } elseif (null === $data['Err']) {
                $value_2 = $data['Err'];
            }
            $object->setErr($value_2);
        } elseif (array_key_exists('Err', $data) && null === $data['Err']) {
            $object->setErr(null);
        }
        if (array_key_exists('ContainerStatus', $data)) {
            $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class, 'json', $context));
        }
        if (array_key_exists('PortStatus', $data)) {
            $object->setPortStatus($this->denormalizer->denormalize($data['PortStatus'], \WebProject\DockerApi\Library\Generated\Model\PortStatus::class, 'json', $context));
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('timestamp')) {
            $value = $data->getTimestamp();
            if (is_string($data->getTimestamp())) {
                $value = $data->getTimestamp();
            } elseif (null === $data->getTimestamp()) {
                $value = $data->getTimestamp();
            }
            $dataArray['Timestamp'] = $value;
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['State'] = $data->getState();
        }
        if ($data->isInitialized('message')) {
            $value_1 = $data->getMessage();
            if (is_string($data->getMessage())) {
                $value_1 = $data->getMessage();
            } elseif (null === $data->getMessage()) {
                $value_1 = $data->getMessage();
            }
            $dataArray['Message'] = $value_1;
        }
        if ($data->isInitialized('err')) {
            $value_2 = $data->getErr();
            if (is_string($data->getErr())) {
                $value_2 = $data->getErr();
            } elseif (null === $data->getErr()) {
                $value_2 = $data->getErr();
            }
            $dataArray['Err'] = $value_2;
        }
        if ($data->isInitialized('containerStatus') && null !== $data->getContainerStatus()) {
            $dataArray['ContainerStatus'] = $this->normalizer->normalize($data->getContainerStatus(), 'json', $context);
        }
        if ($data->isInitialized('portStatus') && null !== $data->getPortStatus()) {
            $dataArray['PortStatus'] = $this->normalizer->normalize($data->getPortStatus(), 'json', $context);
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
