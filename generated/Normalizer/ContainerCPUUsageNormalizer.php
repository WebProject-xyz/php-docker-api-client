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
            $object->totalUsage = $value;
            unset($data['total_usage']);
        } elseif (array_key_exists('total_usage', $data)) {
            $object->totalUsage = null;
            unset($data['total_usage']);
        }
        if (array_key_exists('percpu_usage', $data) && null !== $data['percpu_usage']) {
            $values = [];
            foreach ($data['percpu_usage'] as $value_1) {
                $values[] = $value_1;
            }
            $object->percpuUsage = $values;
            unset($data['percpu_usage']);
        } elseif (array_key_exists('percpu_usage', $data)) {
            $object->percpuUsage = null;
            unset($data['percpu_usage']);
        }
        if (array_key_exists('usage_in_kernelmode', $data) && null !== $data['usage_in_kernelmode']) {
            $value_2 = $data['usage_in_kernelmode'];
            if (is_int($data['usage_in_kernelmode'])) {
                $value_2 = $data['usage_in_kernelmode'];
            } elseif (null === $data['usage_in_kernelmode']) {
                $value_2 = $data['usage_in_kernelmode'];
            }
            $object->usageInKernelmode = $value_2;
            unset($data['usage_in_kernelmode']);
        } elseif (array_key_exists('usage_in_kernelmode', $data)) {
            $object->usageInKernelmode = null;
            unset($data['usage_in_kernelmode']);
        }
        if (array_key_exists('usage_in_usermode', $data) && null !== $data['usage_in_usermode']) {
            $value_3 = $data['usage_in_usermode'];
            if (is_int($data['usage_in_usermode'])) {
                $value_3 = $data['usage_in_usermode'];
            } elseif (null === $data['usage_in_usermode']) {
                $value_3 = $data['usage_in_usermode'];
            }
            $object->usageInUsermode = $value_3;
            unset($data['usage_in_usermode']);
        } elseif (array_key_exists('usage_in_usermode', $data)) {
            $object->usageInUsermode = null;
            unset($data['usage_in_usermode']);
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
        if (array_key_exists('totalUsage', get_object_vars($data)) && null !== ($data->totalUsage ?? null)) {
            $value = $data->totalUsage;
            if (is_int($data->totalUsage)) {
                $value = $data->totalUsage;
            } elseif (null === $data->totalUsage) {
                $value = $data->totalUsage;
            }
            $dataArray['total_usage'] = $value;
        }
        if (array_key_exists('percpuUsage', get_object_vars($data)) && null !== ($data->percpuUsage ?? null)) {
            $values = [];
            foreach ($data->percpuUsage as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['percpu_usage'] = $values;
        }
        if (array_key_exists('usageInKernelmode', get_object_vars($data)) && null !== ($data->usageInKernelmode ?? null)) {
            $value_2 = $data->usageInKernelmode;
            if (is_int($data->usageInKernelmode)) {
                $value_2 = $data->usageInKernelmode;
            } elseif (null === $data->usageInKernelmode) {
                $value_2 = $data->usageInKernelmode;
            }
            $dataArray['usage_in_kernelmode'] = $value_2;
        }
        if (array_key_exists('usageInUsermode', get_object_vars($data)) && null !== ($data->usageInUsermode ?? null)) {
            $value_3 = $data->usageInUsermode;
            if (is_int($data->usageInUsermode)) {
                $value_3 = $data->usageInUsermode;
            } elseif (null === $data->usageInUsermode) {
                $value_3 = $data->usageInUsermode;
            }
            $dataArray['usage_in_usermode'] = $value_3;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
