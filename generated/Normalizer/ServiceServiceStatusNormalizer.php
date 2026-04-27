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

class ServiceServiceStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('RunningTasks', $data) && null !== $data['RunningTasks']) {
            $value = $data['RunningTasks'];
            if (is_int($data['RunningTasks'])) {
                $value = $data['RunningTasks'];
            } elseif (null === $data['RunningTasks']) {
                $value = $data['RunningTasks'];
            }
            $object->setRunningTasks($value);
        } elseif (array_key_exists('RunningTasks', $data) && null === $data['RunningTasks']) {
            $object->setRunningTasks(null);
        }
        if (array_key_exists('DesiredTasks', $data) && null !== $data['DesiredTasks']) {
            $value_1 = $data['DesiredTasks'];
            if (is_int($data['DesiredTasks'])) {
                $value_1 = $data['DesiredTasks'];
            } elseif (null === $data['DesiredTasks']) {
                $value_1 = $data['DesiredTasks'];
            }
            $object->setDesiredTasks($value_1);
        } elseif (array_key_exists('DesiredTasks', $data) && null === $data['DesiredTasks']) {
            $object->setDesiredTasks(null);
        }
        if (array_key_exists('CompletedTasks', $data) && null !== $data['CompletedTasks']) {
            $value_2 = $data['CompletedTasks'];
            if (is_int($data['CompletedTasks'])) {
                $value_2 = $data['CompletedTasks'];
            } elseif (null === $data['CompletedTasks']) {
                $value_2 = $data['CompletedTasks'];
            }
            $object->setCompletedTasks($value_2);
        } elseif (array_key_exists('CompletedTasks', $data) && null === $data['CompletedTasks']) {
            $object->setCompletedTasks(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('runningTasks')) {
            $value = $data->getRunningTasks();
            if (is_int($data->getRunningTasks())) {
                $value = $data->getRunningTasks();
            } elseif (null === $data->getRunningTasks()) {
                $value = $data->getRunningTasks();
            }
            $dataArray['RunningTasks'] = $value;
        }
        if ($data->isInitialized('desiredTasks')) {
            $value_1 = $data->getDesiredTasks();
            if (is_int($data->getDesiredTasks())) {
                $value_1 = $data->getDesiredTasks();
            } elseif (null === $data->getDesiredTasks()) {
                $value_1 = $data->getDesiredTasks();
            }
            $dataArray['DesiredTasks'] = $value_1;
        }
        if ($data->isInitialized('completedTasks')) {
            $value_2 = $data->getCompletedTasks();
            if (is_int($data->getCompletedTasks())) {
                $value_2 = $data->getCompletedTasks();
            } elseif (null === $data->getCompletedTasks()) {
                $value_2 = $data->getCompletedTasks();
            }
            $dataArray['CompletedTasks'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
