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

class ServiceSpecRollbackConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig();
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
            $object->setParallelism($value);
        } elseif (array_key_exists('Parallelism', $data) && null === $data['Parallelism']) {
            $object->setParallelism(null);
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
        if (array_key_exists('FailureAction', $data) && null !== $data['FailureAction']) {
            $value_2 = $data['FailureAction'];
            if (is_string($data['FailureAction'])) {
                $value_2 = $data['FailureAction'];
            } elseif (null === $data['FailureAction']) {
                $value_2 = $data['FailureAction'];
            }
            $object->setFailureAction($value_2);
        } elseif (array_key_exists('FailureAction', $data) && null === $data['FailureAction']) {
            $object->setFailureAction(null);
        }
        if (array_key_exists('Monitor', $data) && null !== $data['Monitor']) {
            $value_3 = $data['Monitor'];
            if (is_int($data['Monitor'])) {
                $value_3 = $data['Monitor'];
            } elseif (null === $data['Monitor']) {
                $value_3 = $data['Monitor'];
            }
            $object->setMonitor($value_3);
        } elseif (array_key_exists('Monitor', $data) && null === $data['Monitor']) {
            $object->setMonitor(null);
        }
        if (array_key_exists('MaxFailureRatio', $data) && null !== $data['MaxFailureRatio']) {
            $value_4 = $data['MaxFailureRatio'];
            if (is_float($data['MaxFailureRatio'])) {
                $value_4 = $data['MaxFailureRatio'];
            } elseif (null === $data['MaxFailureRatio']) {
                $value_4 = $data['MaxFailureRatio'];
            }
            $object->setMaxFailureRatio($value_4);
        } elseif (array_key_exists('MaxFailureRatio', $data) && null === $data['MaxFailureRatio']) {
            $object->setMaxFailureRatio(null);
        }
        if (array_key_exists('Order', $data) && null !== $data['Order']) {
            $value_5 = $data['Order'];
            if (is_string($data['Order'])) {
                $value_5 = $data['Order'];
            } elseif (null === $data['Order']) {
                $value_5 = $data['Order'];
            }
            $object->setOrder($value_5);
        } elseif (array_key_exists('Order', $data) && null === $data['Order']) {
            $object->setOrder(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('parallelism')) {
            $value = $data->getParallelism();
            if (is_int($data->getParallelism())) {
                $value = $data->getParallelism();
            } elseif (null === $data->getParallelism()) {
                $value = $data->getParallelism();
            }
            $dataArray['Parallelism'] = $value;
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
        if ($data->isInitialized('failureAction')) {
            $value_2 = $data->getFailureAction();
            if (is_string($data->getFailureAction())) {
                $value_2 = $data->getFailureAction();
            } elseif (null === $data->getFailureAction()) {
                $value_2 = $data->getFailureAction();
            }
            $dataArray['FailureAction'] = $value_2;
        }
        if ($data->isInitialized('monitor')) {
            $value_3 = $data->getMonitor();
            if (is_int($data->getMonitor())) {
                $value_3 = $data->getMonitor();
            } elseif (null === $data->getMonitor()) {
                $value_3 = $data->getMonitor();
            }
            $dataArray['Monitor'] = $value_3;
        }
        if ($data->isInitialized('maxFailureRatio')) {
            $value_4 = $data->getMaxFailureRatio();
            if (is_float($data->getMaxFailureRatio())) {
                $value_4 = $data->getMaxFailureRatio();
            } elseif (null === $data->getMaxFailureRatio()) {
                $value_4 = $data->getMaxFailureRatio();
            }
            $dataArray['MaxFailureRatio'] = $value_4;
        }
        if ($data->isInitialized('order')) {
            $value_5 = $data->getOrder();
            if (is_string($data->getOrder())) {
                $value_5 = $data->getOrder();
            } elseif (null === $data->getOrder()) {
                $value_5 = $data->getOrder();
            }
            $dataArray['Order'] = $value_5;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
