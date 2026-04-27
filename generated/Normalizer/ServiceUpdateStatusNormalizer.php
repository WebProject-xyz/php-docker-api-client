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

class ServiceUpdateStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $value = $data['State'];
            if (is_string($data['State'])) {
                $value = $data['State'];
            } elseif (null === $data['State']) {
                $value = $data['State'];
            }
            $object->setState($value);
        } elseif (array_key_exists('State', $data) && null === $data['State']) {
            $object->setState(null);
        }
        if (array_key_exists('StartedAt', $data) && null !== $data['StartedAt']) {
            $value_1 = $data['StartedAt'];
            if (is_string($data['StartedAt'])) {
                $value_1 = $data['StartedAt'];
            } elseif (null === $data['StartedAt']) {
                $value_1 = $data['StartedAt'];
            }
            $object->setStartedAt($value_1);
        } elseif (array_key_exists('StartedAt', $data) && null === $data['StartedAt']) {
            $object->setStartedAt(null);
        }
        if (array_key_exists('CompletedAt', $data) && null !== $data['CompletedAt']) {
            $value_2 = $data['CompletedAt'];
            if (is_string($data['CompletedAt'])) {
                $value_2 = $data['CompletedAt'];
            } elseif (null === $data['CompletedAt']) {
                $value_2 = $data['CompletedAt'];
            }
            $object->setCompletedAt($value_2);
        } elseif (array_key_exists('CompletedAt', $data) && null === $data['CompletedAt']) {
            $object->setCompletedAt(null);
        }
        if (array_key_exists('Message', $data) && null !== $data['Message']) {
            $value_3 = $data['Message'];
            if (is_string($data['Message'])) {
                $value_3 = $data['Message'];
            } elseif (null === $data['Message']) {
                $value_3 = $data['Message'];
            }
            $object->setMessage($value_3);
        } elseif (array_key_exists('Message', $data) && null === $data['Message']) {
            $object->setMessage(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('state')) {
            $value = $data->getState();
            if (is_string($data->getState())) {
                $value = $data->getState();
            } elseif (null === $data->getState()) {
                $value = $data->getState();
            }
            $dataArray['State'] = $value;
        }
        if ($data->isInitialized('startedAt')) {
            $value_1 = $data->getStartedAt();
            if (is_string($data->getStartedAt())) {
                $value_1 = $data->getStartedAt();
            } elseif (null === $data->getStartedAt()) {
                $value_1 = $data->getStartedAt();
            }
            $dataArray['StartedAt'] = $value_1;
        }
        if ($data->isInitialized('completedAt')) {
            $value_2 = $data->getCompletedAt();
            if (is_string($data->getCompletedAt())) {
                $value_2 = $data->getCompletedAt();
            } elseif (null === $data->getCompletedAt()) {
                $value_2 = $data->getCompletedAt();
            }
            $dataArray['CompletedAt'] = $value_2;
        }
        if ($data->isInitialized('message')) {
            $value_3 = $data->getMessage();
            if (is_string($data->getMessage())) {
                $value_3 = $data->getMessage();
            } elseif (null === $data->getMessage()) {
                $value_3 = $data->getMessage();
            }
            $dataArray['Message'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
