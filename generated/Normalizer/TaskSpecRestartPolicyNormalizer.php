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
            $object->setCondition($value);
        } elseif (array_key_exists('Condition', $data) && null === $data['Condition']) {
            $object->setCondition(null);
        }
        if (array_key_exists('Delay', $data) && null !== $data['Delay']) {
            $value_1 = $data['Delay'];
            if (is_int($data['Delay'])) {
                $value_1 = $data['Delay'];
            } elseif (null === $data['Delay']) {
                $value_1 = $data['Delay'];
            }
            $object->setDelay($value_1);
        } elseif (array_key_exists('Delay', $data) && null === $data['Delay']) {
            $object->setDelay(null);
        }
        if (array_key_exists('MaxAttempts', $data) && null !== $data['MaxAttempts']) {
            $value_2 = $data['MaxAttempts'];
            if (is_int($data['MaxAttempts'])) {
                $value_2 = $data['MaxAttempts'];
            } elseif (null === $data['MaxAttempts']) {
                $value_2 = $data['MaxAttempts'];
            }
            $object->setMaxAttempts($value_2);
        } elseif (array_key_exists('MaxAttempts', $data) && null === $data['MaxAttempts']) {
            $object->setMaxAttempts(null);
        }
        if (array_key_exists('Window', $data) && null !== $data['Window']) {
            $value_3 = $data['Window'];
            if (is_int($data['Window'])) {
                $value_3 = $data['Window'];
            } elseif (null === $data['Window']) {
                $value_3 = $data['Window'];
            }
            $object->setWindow($value_3);
        } elseif (array_key_exists('Window', $data) && null === $data['Window']) {
            $object->setWindow(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('condition')) {
            $value = $data->getCondition();
            if (is_string($data->getCondition())) {
                $value = $data->getCondition();
            } elseif (null === $data->getCondition()) {
                $value = $data->getCondition();
            }
            $dataArray['Condition'] = $value;
        }
        if ($data->isInitialized('delay')) {
            $value_1 = $data->getDelay();
            if (is_int($data->getDelay())) {
                $value_1 = $data->getDelay();
            } elseif (null === $data->getDelay()) {
                $value_1 = $data->getDelay();
            }
            $dataArray['Delay'] = $value_1;
        }
        if ($data->isInitialized('maxAttempts')) {
            $value_2 = $data->getMaxAttempts();
            if (is_int($data->getMaxAttempts())) {
                $value_2 = $data->getMaxAttempts();
            } elseif (null === $data->getMaxAttempts()) {
                $value_2 = $data->getMaxAttempts();
            }
            $dataArray['MaxAttempts'] = $value_2;
        }
        if ($data->isInitialized('window')) {
            $value_3 = $data->getWindow();
            if (is_int($data->getWindow())) {
                $value_3 = $data->getWindow();
            } elseif (null === $data->getWindow()) {
                $value_3 = $data->getWindow();
            }
            $dataArray['Window'] = $value_3;
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
