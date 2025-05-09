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
    class ServiceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpec();
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
            if (array_key_exists('TaskTemplate', $data)) {
                $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class, 'json', $context));
                unset($data['TaskTemplate']);
            }
            if (array_key_exists('Mode', $data)) {
                $object->setMode($this->denormalizer->denormalize($data['Mode'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class, 'json', $context));
                unset($data['Mode']);
            }
            if (array_key_exists('UpdateConfig', $data)) {
                $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class, 'json', $context));
                unset($data['UpdateConfig']);
            }
            if (array_key_exists('RollbackConfig', $data)) {
                $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class, 'json', $context));
                unset($data['RollbackConfig']);
            }
            if (array_key_exists('Networks', $data)) {
                $values_1 = [];
                foreach ($data['Networks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $object->setNetworks($values_1);
                unset($data['Networks']);
            }
            if (array_key_exists('EndpointSpec', $data)) {
                $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class, 'json', $context));
                unset($data['EndpointSpec']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            if ($object->isInitialized('taskTemplate') && null !== $object->getTaskTemplate()) {
                $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
            }
            if ($object->isInitialized('updateConfig') && null !== $object->getUpdateConfig()) {
                $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
            }
            if ($object->isInitialized('rollbackConfig') && null !== $object->getRollbackConfig()) {
                $data['RollbackConfig'] = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_1 = [];
                foreach ($object->getNetworks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Networks'] = $values_1;
            }
            if ($object->isInitialized('endpointSpec') && null !== $object->getEndpointSpec()) {
                $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class => true];
        }
    }
} else {
    class ServiceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceSpec();
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
            if (array_key_exists('TaskTemplate', $data)) {
                $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class, 'json', $context));
                unset($data['TaskTemplate']);
            }
            if (array_key_exists('Mode', $data)) {
                $object->setMode($this->denormalizer->denormalize($data['Mode'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class, 'json', $context));
                unset($data['Mode']);
            }
            if (array_key_exists('UpdateConfig', $data)) {
                $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class, 'json', $context));
                unset($data['UpdateConfig']);
            }
            if (array_key_exists('RollbackConfig', $data)) {
                $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class, 'json', $context));
                unset($data['RollbackConfig']);
            }
            if (array_key_exists('Networks', $data)) {
                $values_1 = [];
                foreach ($data['Networks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $object->setNetworks($values_1);
                unset($data['Networks']);
            }
            if (array_key_exists('EndpointSpec', $data)) {
                $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class, 'json', $context));
                unset($data['EndpointSpec']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            if ($object->isInitialized('taskTemplate') && null !== $object->getTaskTemplate()) {
                $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
            }
            if ($object->isInitialized('updateConfig') && null !== $object->getUpdateConfig()) {
                $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
            }
            if ($object->isInitialized('rollbackConfig') && null !== $object->getRollbackConfig()) {
                $data['RollbackConfig'] = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_1 = [];
                foreach ($object->getNetworks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Networks'] = $values_1;
            }
            if ($object->isInitialized('endpointSpec') && null !== $object->getEndpointSpec()) {
                $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
