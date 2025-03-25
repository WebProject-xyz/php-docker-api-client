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
    class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\PluginsInfo();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Volume', $data)) {
                $values = [];
                foreach ($data['Volume'] as $value) {
                    $values[] = $value;
                }
                $object->setVolume($values);
                unset($data['Volume']);
            }
            if (array_key_exists('Network', $data)) {
                $values_1 = [];
                foreach ($data['Network'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setNetwork($values_1);
                unset($data['Network']);
            }
            if (array_key_exists('Authorization', $data)) {
                $values_2 = [];
                foreach ($data['Authorization'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setAuthorization($values_2);
                unset($data['Authorization']);
            }
            if (array_key_exists('Log', $data)) {
                $values_3 = [];
                foreach ($data['Log'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLog($values_3);
                unset($data['Log']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $values = [];
                foreach ($object->getVolume() as $value) {
                    $values[] = $value;
                }
                $data['Volume'] = $values;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $values_1 = [];
                foreach ($object->getNetwork() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Network'] = $values_1;
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $values_2 = [];
                foreach ($object->getAuthorization() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Authorization'] = $values_2;
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values_3 = [];
                foreach ($object->getLog() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Log'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class => true];
        }
    }
} else {
    class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\PluginsInfo();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Volume', $data)) {
                $values = [];
                foreach ($data['Volume'] as $value) {
                    $values[] = $value;
                }
                $object->setVolume($values);
                unset($data['Volume']);
            }
            if (array_key_exists('Network', $data)) {
                $values_1 = [];
                foreach ($data['Network'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setNetwork($values_1);
                unset($data['Network']);
            }
            if (array_key_exists('Authorization', $data)) {
                $values_2 = [];
                foreach ($data['Authorization'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setAuthorization($values_2);
                unset($data['Authorization']);
            }
            if (array_key_exists('Log', $data)) {
                $values_3 = [];
                foreach ($data['Log'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setLog($values_3);
                unset($data['Log']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $values = [];
                foreach ($object->getVolume() as $value) {
                    $values[] = $value;
                }
                $data['Volume'] = $values;
            }
            if ($object->isInitialized('network') && null !== $object->getNetwork()) {
                $values_1 = [];
                foreach ($object->getNetwork() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Network'] = $values_1;
            }
            if ($object->isInitialized('authorization') && null !== $object->getAuthorization()) {
                $values_2 = [];
                foreach ($object->getAuthorization() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Authorization'] = $values_2;
            }
            if ($object->isInitialized('log') && null !== $object->getLog()) {
                $values_3 = [];
                foreach ($object->getLog() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['Log'] = $values_3;
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
