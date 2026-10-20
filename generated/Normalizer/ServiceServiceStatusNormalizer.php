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
            $object->runningTasks = $value;
            unset($data['RunningTasks']);
        } elseif (array_key_exists('RunningTasks', $data)) {
            $object->runningTasks = null;
            unset($data['RunningTasks']);
        }
        if (array_key_exists('DesiredTasks', $data) && null !== $data['DesiredTasks']) {
            $value_1 = $data['DesiredTasks'];
            if (is_int($data['DesiredTasks'])) {
                $value_1 = $data['DesiredTasks'];
            } elseif (null === $data['DesiredTasks']) {
                $value_1 = $data['DesiredTasks'];
            }
            $object->desiredTasks = $value_1;
            unset($data['DesiredTasks']);
        } elseif (array_key_exists('DesiredTasks', $data)) {
            $object->desiredTasks = null;
            unset($data['DesiredTasks']);
        }
        if (array_key_exists('CompletedTasks', $data) && null !== $data['CompletedTasks']) {
            $value_2 = $data['CompletedTasks'];
            if (is_int($data['CompletedTasks'])) {
                $value_2 = $data['CompletedTasks'];
            } elseif (null === $data['CompletedTasks']) {
                $value_2 = $data['CompletedTasks'];
            }
            $object->completedTasks = $value_2;
            unset($data['CompletedTasks']);
        } elseif (array_key_exists('CompletedTasks', $data)) {
            $object->completedTasks = null;
            unset($data['CompletedTasks']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('runningTasks', get_object_vars($data)) && null !== ($data->runningTasks ?? null)) {
            $value = $data->runningTasks;
            if (is_int($data->runningTasks)) {
                $value = $data->runningTasks;
            } elseif (null === $data->runningTasks) {
                $value = $data->runningTasks;
            }
            $dataArray['RunningTasks'] = $value;
        }
        if (array_key_exists('desiredTasks', get_object_vars($data)) && null !== ($data->desiredTasks ?? null)) {
            $value_1 = $data->desiredTasks;
            if (is_int($data->desiredTasks)) {
                $value_1 = $data->desiredTasks;
            } elseif (null === $data->desiredTasks) {
                $value_1 = $data->desiredTasks;
            }
            $dataArray['DesiredTasks'] = $value_1;
        }
        if (array_key_exists('completedTasks', get_object_vars($data)) && null !== ($data->completedTasks ?? null)) {
            $value_2 = $data->completedTasks;
            if (is_int($data->completedTasks)) {
                $value_2 = $data->completedTasks;
            } elseif (null === $data->completedTasks) {
                $value_2 = $data->completedTasks;
            }
            $dataArray['CompletedTasks'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
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
