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
use function is_int;
use function is_object;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig();
            if (array_key_exists('MaxFailureRatio', $data) && is_int($data['MaxFailureRatio'])) {
                $data['MaxFailureRatio'] = (float) $data['MaxFailureRatio'];
            }
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Parallelism', $data)) {
                $object->setParallelism($data['Parallelism']);
                unset($data['Parallelism']);
            }
            if (array_key_exists('Delay', $data)) {
                $object->setDelay($data['Delay']);
                unset($data['Delay']);
            }
            if (array_key_exists('FailureAction', $data)) {
                $object->setFailureAction($data['FailureAction']);
                unset($data['FailureAction']);
            }
            if (array_key_exists('Monitor', $data)) {
                $object->setMonitor($data['Monitor']);
                unset($data['Monitor']);
            }
            if (array_key_exists('MaxFailureRatio', $data)) {
                $object->setMaxFailureRatio($data['MaxFailureRatio']);
                unset($data['MaxFailureRatio']);
            }
            if (array_key_exists('Order', $data)) {
                $object->setOrder($data['Order']);
                unset($data['Order']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('parallelism') && null !== $object->getParallelism()) {
                $data['Parallelism'] = $object->getParallelism();
            }
            if ($object->isInitialized('delay') && null !== $object->getDelay()) {
                $data['Delay'] = $object->getDelay();
            }
            if ($object->isInitialized('failureAction') && null !== $object->getFailureAction()) {
                $data['FailureAction'] = $object->getFailureAction();
            }
            if ($object->isInitialized('monitor') && null !== $object->getMonitor()) {
                $data['Monitor'] = $object->getMonitor();
            }
            if ($object->isInitialized('maxFailureRatio') && null !== $object->getMaxFailureRatio()) {
                $data['MaxFailureRatio'] = $object->getMaxFailureRatio();
            }
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['Order'] = $object->getOrder();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class => true];
        }
    }
} else {
    class ServiceSpecUpdateConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig();
            if (array_key_exists('MaxFailureRatio', $data) && is_int($data['MaxFailureRatio'])) {
                $data['MaxFailureRatio'] = (float) $data['MaxFailureRatio'];
            }
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Parallelism', $data)) {
                $object->setParallelism($data['Parallelism']);
                unset($data['Parallelism']);
            }
            if (array_key_exists('Delay', $data)) {
                $object->setDelay($data['Delay']);
                unset($data['Delay']);
            }
            if (array_key_exists('FailureAction', $data)) {
                $object->setFailureAction($data['FailureAction']);
                unset($data['FailureAction']);
            }
            if (array_key_exists('Monitor', $data)) {
                $object->setMonitor($data['Monitor']);
                unset($data['Monitor']);
            }
            if (array_key_exists('MaxFailureRatio', $data)) {
                $object->setMaxFailureRatio($data['MaxFailureRatio']);
                unset($data['MaxFailureRatio']);
            }
            if (array_key_exists('Order', $data)) {
                $object->setOrder($data['Order']);
                unset($data['Order']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('parallelism') && null !== $object->getParallelism()) {
                $data['Parallelism'] = $object->getParallelism();
            }
            if ($object->isInitialized('delay') && null !== $object->getDelay()) {
                $data['Delay'] = $object->getDelay();
            }
            if ($object->isInitialized('failureAction') && null !== $object->getFailureAction()) {
                $data['FailureAction'] = $object->getFailureAction();
            }
            if ($object->isInitialized('monitor') && null !== $object->getMonitor()) {
                $data['Monitor'] = $object->getMonitor();
            }
            if ($object->isInitialized('maxFailureRatio') && null !== $object->getMaxFailureRatio()) {
                $data['MaxFailureRatio'] = $object->getMaxFailureRatio();
            }
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['Order'] = $object->getOrder();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
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
}
