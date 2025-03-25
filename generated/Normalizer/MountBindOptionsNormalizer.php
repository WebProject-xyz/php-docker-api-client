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
    class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\MountBindOptions();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Propagation', $data)) {
                $object->setPropagation($data['Propagation']);
                unset($data['Propagation']);
            }
            if (array_key_exists('NonRecursive', $data)) {
                $object->setNonRecursive($data['NonRecursive']);
                unset($data['NonRecursive']);
            }
            if (array_key_exists('CreateMountpoint', $data)) {
                $object->setCreateMountpoint($data['CreateMountpoint']);
                unset($data['CreateMountpoint']);
            }
            if (array_key_exists('ReadOnlyNonRecursive', $data)) {
                $object->setReadOnlyNonRecursive($data['ReadOnlyNonRecursive']);
                unset($data['ReadOnlyNonRecursive']);
            }
            if (array_key_exists('ReadOnlyForceRecursive', $data)) {
                $object->setReadOnlyForceRecursive($data['ReadOnlyForceRecursive']);
                unset($data['ReadOnlyForceRecursive']);
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
            if ($object->isInitialized('propagation') && null !== $object->getPropagation()) {
                $data['Propagation'] = $object->getPropagation();
            }
            if ($object->isInitialized('nonRecursive') && null !== $object->getNonRecursive()) {
                $data['NonRecursive'] = $object->getNonRecursive();
            }
            if ($object->isInitialized('createMountpoint') && null !== $object->getCreateMountpoint()) {
                $data['CreateMountpoint'] = $object->getCreateMountpoint();
            }
            if ($object->isInitialized('readOnlyNonRecursive') && null !== $object->getReadOnlyNonRecursive()) {
                $data['ReadOnlyNonRecursive'] = $object->getReadOnlyNonRecursive();
            }
            if ($object->isInitialized('readOnlyForceRecursive') && null !== $object->getReadOnlyForceRecursive()) {
                $data['ReadOnlyForceRecursive'] = $object->getReadOnlyForceRecursive();
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
            return [\WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class => true];
        }
    }
} else {
    class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\MountBindOptions();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Propagation', $data)) {
                $object->setPropagation($data['Propagation']);
                unset($data['Propagation']);
            }
            if (array_key_exists('NonRecursive', $data)) {
                $object->setNonRecursive($data['NonRecursive']);
                unset($data['NonRecursive']);
            }
            if (array_key_exists('CreateMountpoint', $data)) {
                $object->setCreateMountpoint($data['CreateMountpoint']);
                unset($data['CreateMountpoint']);
            }
            if (array_key_exists('ReadOnlyNonRecursive', $data)) {
                $object->setReadOnlyNonRecursive($data['ReadOnlyNonRecursive']);
                unset($data['ReadOnlyNonRecursive']);
            }
            if (array_key_exists('ReadOnlyForceRecursive', $data)) {
                $object->setReadOnlyForceRecursive($data['ReadOnlyForceRecursive']);
                unset($data['ReadOnlyForceRecursive']);
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
            if ($object->isInitialized('propagation') && null !== $object->getPropagation()) {
                $data['Propagation'] = $object->getPropagation();
            }
            if ($object->isInitialized('nonRecursive') && null !== $object->getNonRecursive()) {
                $data['NonRecursive'] = $object->getNonRecursive();
            }
            if ($object->isInitialized('createMountpoint') && null !== $object->getCreateMountpoint()) {
                $data['CreateMountpoint'] = $object->getCreateMountpoint();
            }
            if ($object->isInitialized('readOnlyNonRecursive') && null !== $object->getReadOnlyNonRecursive()) {
                $data['ReadOnlyNonRecursive'] = $object->getReadOnlyNonRecursive();
            }
            if ($object->isInitialized('readOnlyForceRecursive') && null !== $object->getReadOnlyForceRecursive()) {
                $data['ReadOnlyForceRecursive'] = $object->getReadOnlyForceRecursive();
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
            return [\WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
