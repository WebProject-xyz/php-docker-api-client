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

class TaskSpecRestartPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Condition', $data) && null !== $data['Condition']) {
            $value = $data['Condition'];
            if (is_string($data['Condition'])) {
                $value = $data['Condition'];
            } elseif (null === $data['Condition']) {
                $value = $data['Condition'];
            }
            $object->condition = $value;
            unset($data['Condition']);
        } elseif (array_key_exists('Condition', $data)) {
            $object->condition = null;
            unset($data['Condition']);
        }
        if (array_key_exists('Delay', $data) && null !== $data['Delay']) {
            $value_1 = $data['Delay'];
            if (is_int($data['Delay'])) {
                $value_1 = $data['Delay'];
            } elseif (null === $data['Delay']) {
                $value_1 = $data['Delay'];
            }
            $object->delay = $value_1;
            unset($data['Delay']);
        } elseif (array_key_exists('Delay', $data)) {
            $object->delay = null;
            unset($data['Delay']);
        }
        if (array_key_exists('MaxAttempts', $data) && null !== $data['MaxAttempts']) {
            $value_2 = $data['MaxAttempts'];
            if (is_int($data['MaxAttempts'])) {
                $value_2 = $data['MaxAttempts'];
            } elseif (null === $data['MaxAttempts']) {
                $value_2 = $data['MaxAttempts'];
            }
            $object->maxAttempts = $value_2;
            unset($data['MaxAttempts']);
        } elseif (array_key_exists('MaxAttempts', $data)) {
            $object->maxAttempts = null;
            unset($data['MaxAttempts']);
        }
        if (array_key_exists('Window', $data) && null !== $data['Window']) {
            $value_3 = $data['Window'];
            if (is_int($data['Window'])) {
                $value_3 = $data['Window'];
            } elseif (null === $data['Window']) {
                $value_3 = $data['Window'];
            }
            $object->window = $value_3;
            unset($data['Window']);
        } elseif (array_key_exists('Window', $data)) {
            $object->window = null;
            unset($data['Window']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('condition', get_object_vars($data)) && null !== ($data->condition ?? null)) {
            $value = $data->condition;
            if (is_string($data->condition)) {
                $value = $data->condition;
            } elseif (null === $data->condition) {
                $value = $data->condition;
            }
            $dataArray['Condition'] = $value;
        }
        if (array_key_exists('delay', get_object_vars($data)) && null !== ($data->delay ?? null)) {
            $value_1 = $data->delay;
            if (is_int($data->delay)) {
                $value_1 = $data->delay;
            } elseif (null === $data->delay) {
                $value_1 = $data->delay;
            }
            $dataArray['Delay'] = $value_1;
        }
        if (array_key_exists('maxAttempts', get_object_vars($data)) && null !== ($data->maxAttempts ?? null)) {
            $value_2 = $data->maxAttempts;
            if (is_int($data->maxAttempts)) {
                $value_2 = $data->maxAttempts;
            } elseif (null === $data->maxAttempts) {
                $value_2 = $data->maxAttempts;
            }
            $dataArray['MaxAttempts'] = $value_2;
        }
        if (array_key_exists('window', get_object_vars($data)) && null !== ($data->window ?? null)) {
            $value_3 = $data->window;
            if (is_int($data->window)) {
                $value_3 = $data->window;
            } elseif (null === $data->window) {
                $value_3 = $data->window;
            }
            $dataArray['Window'] = $value_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
