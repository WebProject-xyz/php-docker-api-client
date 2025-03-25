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
    class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\DeviceRequest();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('Count', $data)) {
                $object->setCount($data['Count']);
                unset($data['Count']);
            }
            if (array_key_exists('DeviceIDs', $data)) {
                $values = [];
                foreach ($data['DeviceIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setDeviceIDs($values);
                unset($data['DeviceIDs']);
            }
            if (array_key_exists('Capabilities', $data)) {
                $values_1 = [];
                foreach ($data['Capabilities'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setCapabilities($values_1);
                unset($data['Capabilities']);
            }
            if (array_key_exists('Options', $data)) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setOptions($values_3);
                unset($data['Options']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $object->getCount();
            }
            if ($object->isInitialized('deviceIDs') && null !== $object->getDeviceIDs()) {
                $values = [];
                foreach ($object->getDeviceIDs() as $value) {
                    $values[] = $value;
                }
                $data['DeviceIDs'] = $values;
            }
            if ($object->isInitialized('capabilities') && null !== $object->getCapabilities()) {
                $values_1 = [];
                foreach ($object->getCapabilities() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Capabilities'] = $values_1;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_3 = [];
                foreach ($object->getOptions() as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $data['Options'] = $values_3;
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class => true];
        }
    }
} else {
    class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\DeviceRequest();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('Count', $data)) {
                $object->setCount($data['Count']);
                unset($data['Count']);
            }
            if (array_key_exists('DeviceIDs', $data)) {
                $values = [];
                foreach ($data['DeviceIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setDeviceIDs($values);
                unset($data['DeviceIDs']);
            }
            if (array_key_exists('Capabilities', $data)) {
                $values_1 = [];
                foreach ($data['Capabilities'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setCapabilities($values_1);
                unset($data['Capabilities']);
            }
            if (array_key_exists('Options', $data)) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setOptions($values_3);
                unset($data['Options']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
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
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $object->getCount();
            }
            if ($object->isInitialized('deviceIDs') && null !== $object->getDeviceIDs()) {
                $values = [];
                foreach ($object->getDeviceIDs() as $value) {
                    $values[] = $value;
                }
                $data['DeviceIDs'] = $values;
            }
            if ($object->isInitialized('capabilities') && null !== $object->getCapabilities()) {
                $values_1 = [];
                foreach ($object->getCapabilities() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Capabilities'] = $values_1;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_3 = [];
                foreach ($object->getOptions() as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $data['Options'] = $values_3;
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
