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

class ContainerCPUUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('total_usage', $data) && null !== $data['total_usage']) {
            $value = $data['total_usage'];
            if (is_int($data['total_usage'])) {
                $value = $data['total_usage'];
            } elseif (null === $data['total_usage']) {
                $value = $data['total_usage'];
            }
            $object->setTotalUsage($value);
        } elseif (array_key_exists('total_usage', $data) && null === $data['total_usage']) {
            $object->setTotalUsage(null);
        }
        if (array_key_exists('percpu_usage', $data) && null !== $data['percpu_usage']) {
            $value_1 = $data['percpu_usage'];
            if (is_array($data['percpu_usage']) && $this->isOnlyNumericKeys($data['percpu_usage'])) {
                $values = [];
                foreach ($data['percpu_usage'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['percpu_usage']) {
                $value_1 = $data['percpu_usage'];
            }
            $object->setPercpuUsage($value_1);
        } elseif (array_key_exists('percpu_usage', $data) && null === $data['percpu_usage']) {
            $object->setPercpuUsage(null);
        }
        if (array_key_exists('usage_in_kernelmode', $data) && null !== $data['usage_in_kernelmode']) {
            $value_3 = $data['usage_in_kernelmode'];
            if (is_int($data['usage_in_kernelmode'])) {
                $value_3 = $data['usage_in_kernelmode'];
            } elseif (null === $data['usage_in_kernelmode']) {
                $value_3 = $data['usage_in_kernelmode'];
            }
            $object->setUsageInKernelmode($value_3);
        } elseif (array_key_exists('usage_in_kernelmode', $data) && null === $data['usage_in_kernelmode']) {
            $object->setUsageInKernelmode(null);
        }
        if (array_key_exists('usage_in_usermode', $data) && null !== $data['usage_in_usermode']) {
            $value_4 = $data['usage_in_usermode'];
            if (is_int($data['usage_in_usermode'])) {
                $value_4 = $data['usage_in_usermode'];
            } elseif (null === $data['usage_in_usermode']) {
                $value_4 = $data['usage_in_usermode'];
            }
            $object->setUsageInUsermode($value_4);
        } elseif (array_key_exists('usage_in_usermode', $data) && null === $data['usage_in_usermode']) {
            $object->setUsageInUsermode(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('totalUsage')) {
            $value = $data->getTotalUsage();
            if (is_int($data->getTotalUsage())) {
                $value = $data->getTotalUsage();
            } elseif (null === $data->getTotalUsage()) {
                $value = $data->getTotalUsage();
            }
            $dataArray['total_usage'] = $value;
        }
        if ($data->isInitialized('percpuUsage')) {
            $value_1 = $data->getPercpuUsage();
            if (is_array($data->getPercpuUsage())) {
                $values = [];
                foreach ($data->getPercpuUsage() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getPercpuUsage()) {
                $value_1 = $data->getPercpuUsage();
            }
            $dataArray['percpu_usage'] = $value_1;
        }
        if ($data->isInitialized('usageInKernelmode')) {
            $value_3 = $data->getUsageInKernelmode();
            if (is_int($data->getUsageInKernelmode())) {
                $value_3 = $data->getUsageInKernelmode();
            } elseif (null === $data->getUsageInKernelmode()) {
                $value_3 = $data->getUsageInKernelmode();
            }
            $dataArray['usage_in_kernelmode'] = $value_3;
        }
        if ($data->isInitialized('usageInUsermode')) {
            $value_4 = $data->getUsageInUsermode();
            if (is_int($data->getUsageInUsermode())) {
                $value_4 = $data->getUsageInUsermode();
            } elseif (null === $data->getUsageInUsermode()) {
                $value_4 = $data->getUsageInUsermode();
            }
            $dataArray['usage_in_usermode'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
