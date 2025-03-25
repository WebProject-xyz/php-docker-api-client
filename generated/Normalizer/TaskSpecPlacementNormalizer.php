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
    class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Constraints', $data)) {
                $values = [];
                foreach ($data['Constraints'] as $value) {
                    $values[] = $value;
                }
                $object->setConstraints($values);
                unset($data['Constraints']);
            }
            if (array_key_exists('Preferences', $data)) {
                $values_1 = [];
                foreach ($data['Preferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class, 'json', $context);
                }
                $object->setPreferences($values_1);
                unset($data['Preferences']);
            }
            if (array_key_exists('MaxReplicas', $data)) {
                $object->setMaxReplicas($data['MaxReplicas']);
                unset($data['MaxReplicas']);
            }
            if (array_key_exists('Platforms', $data)) {
                $values_2 = [];
                foreach ($data['Platforms'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\Platform::class, 'json', $context);
                }
                $object->setPlatforms($values_2);
                unset($data['Platforms']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('constraints') && null !== $object->getConstraints()) {
                $values = [];
                foreach ($object->getConstraints() as $value) {
                    $values[] = $value;
                }
                $data['Constraints'] = $values;
            }
            if ($object->isInitialized('preferences') && null !== $object->getPreferences()) {
                $values_1 = [];
                foreach ($object->getPreferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Preferences'] = $values_1;
            }
            if ($object->isInitialized('maxReplicas') && null !== $object->getMaxReplicas()) {
                $data['MaxReplicas'] = $object->getMaxReplicas();
            }
            if ($object->isInitialized('platforms') && null !== $object->getPlatforms()) {
                $values_2 = [];
                foreach ($object->getPlatforms() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Platforms'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class => true];
        }
    }
} else {
    class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Constraints', $data)) {
                $values = [];
                foreach ($data['Constraints'] as $value) {
                    $values[] = $value;
                }
                $object->setConstraints($values);
                unset($data['Constraints']);
            }
            if (array_key_exists('Preferences', $data)) {
                $values_1 = [];
                foreach ($data['Preferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class, 'json', $context);
                }
                $object->setPreferences($values_1);
                unset($data['Preferences']);
            }
            if (array_key_exists('MaxReplicas', $data)) {
                $object->setMaxReplicas($data['MaxReplicas']);
                unset($data['MaxReplicas']);
            }
            if (array_key_exists('Platforms', $data)) {
                $values_2 = [];
                foreach ($data['Platforms'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\Platform::class, 'json', $context);
                }
                $object->setPlatforms($values_2);
                unset($data['Platforms']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('constraints') && null !== $object->getConstraints()) {
                $values = [];
                foreach ($object->getConstraints() as $value) {
                    $values[] = $value;
                }
                $data['Constraints'] = $values;
            }
            if ($object->isInitialized('preferences') && null !== $object->getPreferences()) {
                $values_1 = [];
                foreach ($object->getPreferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Preferences'] = $values_1;
            }
            if ($object->isInitialized('maxReplicas') && null !== $object->getMaxReplicas()) {
                $data['MaxReplicas'] = $object->getMaxReplicas();
            }
            if ($object->isInitialized('platforms') && null !== $object->getPlatforms()) {
                $values_2 = [];
                foreach ($object->getPlatforms() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Platforms'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
