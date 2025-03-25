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
    class ProcessConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ProcessConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('privileged', $data)) {
                $object->setPrivileged($data['privileged']);
                unset($data['privileged']);
            }
            if (array_key_exists('user', $data)) {
                $object->setUser($data['user']);
                unset($data['user']);
            }
            if (array_key_exists('tty', $data)) {
                $object->setTty($data['tty']);
                unset($data['tty']);
            }
            if (array_key_exists('entrypoint', $data)) {
                $object->setEntrypoint($data['entrypoint']);
                unset($data['entrypoint']);
            }
            if (array_key_exists('arguments', $data)) {
                $values = [];
                foreach ($data['arguments'] as $value) {
                    $values[] = $value;
                }
                $object->setArguments($values);
                unset($data['arguments']);
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
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $object->getUser();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['tty'] = $object->getTty();
            }
            if ($object->isInitialized('entrypoint') && null !== $object->getEntrypoint()) {
                $data['entrypoint'] = $object->getEntrypoint();
            }
            if ($object->isInitialized('arguments') && null !== $object->getArguments()) {
                $values = [];
                foreach ($object->getArguments() as $value) {
                    $values[] = $value;
                }
                $data['arguments'] = $values;
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
            return [\WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class => true];
        }
    }
} else {
    class ProcessConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ProcessConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('privileged', $data)) {
                $object->setPrivileged($data['privileged']);
                unset($data['privileged']);
            }
            if (array_key_exists('user', $data)) {
                $object->setUser($data['user']);
                unset($data['user']);
            }
            if (array_key_exists('tty', $data)) {
                $object->setTty($data['tty']);
                unset($data['tty']);
            }
            if (array_key_exists('entrypoint', $data)) {
                $object->setEntrypoint($data['entrypoint']);
                unset($data['entrypoint']);
            }
            if (array_key_exists('arguments', $data)) {
                $values = [];
                foreach ($data['arguments'] as $value) {
                    $values[] = $value;
                }
                $object->setArguments($values);
                unset($data['arguments']);
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
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $object->getUser();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['tty'] = $object->getTty();
            }
            if ($object->isInitialized('entrypoint') && null !== $object->getEntrypoint()) {
                $data['entrypoint'] = $object->getEntrypoint();
            }
            if ($object->isInitialized('arguments') && null !== $object->getArguments()) {
                $values = [];
                foreach ($object->getArguments() as $value) {
                    $values[] = $value;
                }
                $data['arguments'] = $values;
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
            return [\WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
