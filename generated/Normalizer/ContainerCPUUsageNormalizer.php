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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('total_usage', $data)) {
            $object->setTotalUsage($data['total_usage']);
            unset($data['total_usage']);
        }
        if (array_key_exists('percpu_usage', $data) && null !== $data['percpu_usage']) {
            $values = [];
            foreach ($data['percpu_usage'] as $value) {
                $values[] = $value;
            }
            $object->setPercpuUsage($values);
            unset($data['percpu_usage']);
        } elseif (array_key_exists('percpu_usage', $data) && null === $data['percpu_usage']) {
            $object->setPercpuUsage(null);
        }
        if (array_key_exists('usage_in_kernelmode', $data)) {
            $object->setUsageInKernelmode($data['usage_in_kernelmode']);
            unset($data['usage_in_kernelmode']);
        }
        if (array_key_exists('usage_in_usermode', $data)) {
            $object->setUsageInUsermode($data['usage_in_usermode']);
            unset($data['usage_in_usermode']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('totalUsage') && null !== $data->getTotalUsage()) {
            $dataArray['total_usage'] = $data->getTotalUsage();
        }
        if ($data->isInitialized('percpuUsage') && null !== $data->getPercpuUsage()) {
            $values = [];
            foreach ($data->getPercpuUsage() as $value) {
                $values[] = $value;
            }
            $dataArray['percpu_usage'] = $values;
        }
        if ($data->isInitialized('usageInKernelmode') && null !== $data->getUsageInKernelmode()) {
            $dataArray['usage_in_kernelmode'] = $data->getUsageInKernelmode();
        }
        if ($data->isInitialized('usageInUsermode') && null !== $data->getUsageInUsermode()) {
            $dataArray['usage_in_usermode'] = $data->getUsageInUsermode();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
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
