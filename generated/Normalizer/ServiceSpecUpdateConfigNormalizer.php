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
use function is_float;
use function is_int;
use function is_object;
use function is_string;

class ServiceSpecUpdateConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Parallelism', $data) && null !== $data['Parallelism']) {
            $value = $data['Parallelism'];
            if (is_int($data['Parallelism'])) {
                $value = $data['Parallelism'];
            } elseif (null === $data['Parallelism']) {
                $value = $data['Parallelism'];
            }
            $object->parallelism = $value;
            unset($data['Parallelism']);
        } elseif (array_key_exists('Parallelism', $data)) {
            $object->parallelism = null;
            unset($data['Parallelism']);
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
        if (array_key_exists('FailureAction', $data) && null !== $data['FailureAction']) {
            $value_2 = $data['FailureAction'];
            if (is_string($data['FailureAction'])) {
                $value_2 = $data['FailureAction'];
            } elseif (null === $data['FailureAction']) {
                $value_2 = $data['FailureAction'];
            }
            $object->failureAction = $value_2;
            unset($data['FailureAction']);
        } elseif (array_key_exists('FailureAction', $data)) {
            $object->failureAction = null;
            unset($data['FailureAction']);
        }
        if (array_key_exists('Monitor', $data) && null !== $data['Monitor']) {
            $value_3 = $data['Monitor'];
            if (is_int($data['Monitor'])) {
                $value_3 = $data['Monitor'];
            } elseif (null === $data['Monitor']) {
                $value_3 = $data['Monitor'];
            }
            $object->monitor = $value_3;
            unset($data['Monitor']);
        } elseif (array_key_exists('Monitor', $data)) {
            $object->monitor = null;
            unset($data['Monitor']);
        }
        if (array_key_exists('MaxFailureRatio', $data) && null !== $data['MaxFailureRatio']) {
            $value_4 = $data['MaxFailureRatio'];
            if (is_float($data['MaxFailureRatio'])) {
                $value_4 = $data['MaxFailureRatio'];
            } elseif (null === $data['MaxFailureRatio']) {
                $value_4 = $data['MaxFailureRatio'];
            }
            $object->maxFailureRatio = $value_4;
            unset($data['MaxFailureRatio']);
        } elseif (array_key_exists('MaxFailureRatio', $data)) {
            $object->maxFailureRatio = null;
            unset($data['MaxFailureRatio']);
        }
        if (array_key_exists('Order', $data) && null !== $data['Order']) {
            $value_5 = $data['Order'];
            if (is_string($data['Order'])) {
                $value_5 = $data['Order'];
            } elseif (null === $data['Order']) {
                $value_5 = $data['Order'];
            }
            $object->order = $value_5;
            unset($data['Order']);
        } elseif (array_key_exists('Order', $data)) {
            $object->order = null;
            unset($data['Order']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('parallelism', get_object_vars($data)) && null !== ($data->parallelism ?? null)) {
            $value = $data->parallelism;
            if (is_int($data->parallelism)) {
                $value = $data->parallelism;
            } elseif (null === $data->parallelism) {
                $value = $data->parallelism;
            }
            $dataArray['Parallelism'] = $value;
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
        if (array_key_exists('failureAction', get_object_vars($data)) && null !== ($data->failureAction ?? null)) {
            $value_2 = $data->failureAction;
            if (is_string($data->failureAction)) {
                $value_2 = $data->failureAction;
            } elseif (null === $data->failureAction) {
                $value_2 = $data->failureAction;
            }
            $dataArray['FailureAction'] = $value_2;
        }
        if (array_key_exists('monitor', get_object_vars($data)) && null !== ($data->monitor ?? null)) {
            $value_3 = $data->monitor;
            if (is_int($data->monitor)) {
                $value_3 = $data->monitor;
            } elseif (null === $data->monitor) {
                $value_3 = $data->monitor;
            }
            $dataArray['Monitor'] = $value_3;
        }
        if (array_key_exists('maxFailureRatio', get_object_vars($data)) && null !== ($data->maxFailureRatio ?? null)) {
            $value_4 = $data->maxFailureRatio;
            if (is_float($data->maxFailureRatio)) {
                $value_4 = $data->maxFailureRatio;
            } elseif (null === $data->maxFailureRatio) {
                $value_4 = $data->maxFailureRatio;
            }
            $dataArray['MaxFailureRatio'] = $value_4;
        }
        if (array_key_exists('order', get_object_vars($data)) && null !== ($data->order ?? null)) {
            $value_5 = $data->order;
            if (is_string($data->order)) {
                $value_5 = $data->order;
            } elseif (null === $data->order) {
                $value_5 = $data->order;
            }
            $dataArray['Order'] = $value_5;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
