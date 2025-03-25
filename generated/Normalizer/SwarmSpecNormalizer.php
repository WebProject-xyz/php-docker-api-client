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
    class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpec();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Labels', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
                unset($data['Labels']);
            }
            if (array_key_exists('Orchestration', $data) && null !== $data['Orchestration']) {
                $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class, 'json', $context));
                unset($data['Orchestration']);
            } elseif (array_key_exists('Orchestration', $data) && null === $data['Orchestration']) {
                $object->setOrchestration(null);
            }
            if (array_key_exists('Raft', $data)) {
                $object->setRaft($this->denormalizer->denormalize($data['Raft'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class, 'json', $context));
                unset($data['Raft']);
            }
            if (array_key_exists('Dispatcher', $data) && null !== $data['Dispatcher']) {
                $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class, 'json', $context));
                unset($data['Dispatcher']);
            } elseif (array_key_exists('Dispatcher', $data) && null === $data['Dispatcher']) {
                $object->setDispatcher(null);
            }
            if (array_key_exists('CAConfig', $data) && null !== $data['CAConfig']) {
                $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class, 'json', $context));
                unset($data['CAConfig']);
            } elseif (array_key_exists('CAConfig', $data) && null === $data['CAConfig']) {
                $object->setCAConfig(null);
            }
            if (array_key_exists('EncryptionConfig', $data)) {
                $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
                unset($data['EncryptionConfig']);
            }
            if (array_key_exists('TaskDefaults', $data)) {
                $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class, 'json', $context));
                unset($data['TaskDefaults']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('orchestration') && null !== $object->getOrchestration()) {
                $data['Orchestration'] = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
            }
            if ($object->isInitialized('raft') && null !== $object->getRaft()) {
                $data['Raft'] = $this->normalizer->normalize($object->getRaft(), 'json', $context);
            }
            if ($object->isInitialized('dispatcher') && null !== $object->getDispatcher()) {
                $data['Dispatcher'] = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
            }
            if ($object->isInitialized('cAConfig') && null !== $object->getCAConfig()) {
                $data['CAConfig'] = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
            }
            if ($object->isInitialized('encryptionConfig') && null !== $object->getEncryptionConfig()) {
                $data['EncryptionConfig'] = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
            }
            if ($object->isInitialized('taskDefaults') && null !== $object->getTaskDefaults()) {
                $data['TaskDefaults'] = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class => true];
        }
    }
} else {
    class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpec();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Labels', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
                unset($data['Labels']);
            }
            if (array_key_exists('Orchestration', $data) && null !== $data['Orchestration']) {
                $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class, 'json', $context));
                unset($data['Orchestration']);
            } elseif (array_key_exists('Orchestration', $data) && null === $data['Orchestration']) {
                $object->setOrchestration(null);
            }
            if (array_key_exists('Raft', $data)) {
                $object->setRaft($this->denormalizer->denormalize($data['Raft'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class, 'json', $context));
                unset($data['Raft']);
            }
            if (array_key_exists('Dispatcher', $data) && null !== $data['Dispatcher']) {
                $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class, 'json', $context));
                unset($data['Dispatcher']);
            } elseif (array_key_exists('Dispatcher', $data) && null === $data['Dispatcher']) {
                $object->setDispatcher(null);
            }
            if (array_key_exists('CAConfig', $data) && null !== $data['CAConfig']) {
                $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class, 'json', $context));
                unset($data['CAConfig']);
            } elseif (array_key_exists('CAConfig', $data) && null === $data['CAConfig']) {
                $object->setCAConfig(null);
            }
            if (array_key_exists('EncryptionConfig', $data)) {
                $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
                unset($data['EncryptionConfig']);
            }
            if (array_key_exists('TaskDefaults', $data)) {
                $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class, 'json', $context));
                unset($data['TaskDefaults']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('orchestration') && null !== $object->getOrchestration()) {
                $data['Orchestration'] = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
            }
            if ($object->isInitialized('raft') && null !== $object->getRaft()) {
                $data['Raft'] = $this->normalizer->normalize($object->getRaft(), 'json', $context);
            }
            if ($object->isInitialized('dispatcher') && null !== $object->getDispatcher()) {
                $data['Dispatcher'] = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
            }
            if ($object->isInitialized('cAConfig') && null !== $object->getCAConfig()) {
                $data['CAConfig'] = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
            }
            if ($object->isInitialized('encryptionConfig') && null !== $object->getEncryptionConfig()) {
                $data['EncryptionConfig'] = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
            }
            if ($object->isInitialized('taskDefaults') && null !== $object->getTaskDefaults()) {
                $data['TaskDefaults'] = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
