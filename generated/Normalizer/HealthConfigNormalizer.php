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
    class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\HealthConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Test', $data)) {
                $values = [];
                foreach ($data['Test'] as $value) {
                    $values[] = $value;
                }
                $object->setTest($values);
                unset($data['Test']);
            }
            if (array_key_exists('Interval', $data)) {
                $object->setInterval($data['Interval']);
                unset($data['Interval']);
            }
            if (array_key_exists('Timeout', $data)) {
                $object->setTimeout($data['Timeout']);
                unset($data['Timeout']);
            }
            if (array_key_exists('Retries', $data)) {
                $object->setRetries($data['Retries']);
                unset($data['Retries']);
            }
            if (array_key_exists('StartPeriod', $data)) {
                $object->setStartPeriod($data['StartPeriod']);
                unset($data['StartPeriod']);
            }
            if (array_key_exists('StartInterval', $data)) {
                $object->setStartInterval($data['StartInterval']);
                unset($data['StartInterval']);
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
            if ($object->isInitialized('test') && null !== $object->getTest()) {
                $values = [];
                foreach ($object->getTest() as $value) {
                    $values[] = $value;
                }
                $data['Test'] = $values;
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['Interval'] = $object->getInterval();
            }
            if ($object->isInitialized('timeout') && null !== $object->getTimeout()) {
                $data['Timeout'] = $object->getTimeout();
            }
            if ($object->isInitialized('retries') && null !== $object->getRetries()) {
                $data['Retries'] = $object->getRetries();
            }
            if ($object->isInitialized('startPeriod') && null !== $object->getStartPeriod()) {
                $data['StartPeriod'] = $object->getStartPeriod();
            }
            if ($object->isInitialized('startInterval') && null !== $object->getStartInterval()) {
                $data['StartInterval'] = $object->getStartInterval();
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
            return [\WebProject\DockerApi\Library\Generated\Model\HealthConfig::class => true];
        }
    }
} else {
    class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\HealthConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Test', $data)) {
                $values = [];
                foreach ($data['Test'] as $value) {
                    $values[] = $value;
                }
                $object->setTest($values);
                unset($data['Test']);
            }
            if (array_key_exists('Interval', $data)) {
                $object->setInterval($data['Interval']);
                unset($data['Interval']);
            }
            if (array_key_exists('Timeout', $data)) {
                $object->setTimeout($data['Timeout']);
                unset($data['Timeout']);
            }
            if (array_key_exists('Retries', $data)) {
                $object->setRetries($data['Retries']);
                unset($data['Retries']);
            }
            if (array_key_exists('StartPeriod', $data)) {
                $object->setStartPeriod($data['StartPeriod']);
                unset($data['StartPeriod']);
            }
            if (array_key_exists('StartInterval', $data)) {
                $object->setStartInterval($data['StartInterval']);
                unset($data['StartInterval']);
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
            if ($object->isInitialized('test') && null !== $object->getTest()) {
                $values = [];
                foreach ($object->getTest() as $value) {
                    $values[] = $value;
                }
                $data['Test'] = $values;
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['Interval'] = $object->getInterval();
            }
            if ($object->isInitialized('timeout') && null !== $object->getTimeout()) {
                $data['Timeout'] = $object->getTimeout();
            }
            if ($object->isInitialized('retries') && null !== $object->getRetries()) {
                $data['Retries'] = $object->getRetries();
            }
            if ($object->isInitialized('startPeriod') && null !== $object->getStartPeriod()) {
                $data['StartPeriod'] = $object->getStartPeriod();
            }
            if ($object->isInitialized('startInterval') && null !== $object->getStartInterval()) {
                $data['StartInterval'] = $object->getStartInterval();
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
            return [\WebProject\DockerApi\Library\Generated\Model\HealthConfig::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
