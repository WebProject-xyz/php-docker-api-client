<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('totalUsage') && null !== $object->getTotalUsage()) {
                $data['total_usage'] = $object->getTotalUsage();
            }
            if ($object->isInitialized('percpuUsage') && null !== $object->getPercpuUsage()) {
                $values = [];
                foreach ($object->getPercpuUsage() as $value) {
                    $values[] = $value;
                }
                $data['percpu_usage'] = $values;
            }
            if ($object->isInitialized('usageInKernelmode') && null !== $object->getUsageInKernelmode()) {
                $data['usage_in_kernelmode'] = $object->getUsageInKernelmode();
            }
            if ($object->isInitialized('usageInUsermode') && null !== $object->getUsageInUsermode()) {
                $data['usage_in_usermode'] = $object->getUsageInUsermode();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class => true];
        }
    }
} else {
    class ContainerCPUUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class === get_class($data);
        }

        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('totalUsage') && null !== $object->getTotalUsage()) {
                $data['total_usage'] = $object->getTotalUsage();
            }
            if ($object->isInitialized('percpuUsage') && null !== $object->getPercpuUsage()) {
                $values = [];
                foreach ($object->getPercpuUsage() as $value) {
                    $values[] = $value;
                }
                $data['percpu_usage'] = $values;
            }
            if ($object->isInitialized('usageInKernelmode') && null !== $object->getUsageInKernelmode()) {
                $data['usage_in_kernelmode'] = $object->getUsageInKernelmode();
            }
            if ($object->isInitialized('usageInUsermode') && null !== $object->getUsageInUsermode()) {
                $data['usage_in_usermode'] = $object->getUsageInUsermode();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
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
}
