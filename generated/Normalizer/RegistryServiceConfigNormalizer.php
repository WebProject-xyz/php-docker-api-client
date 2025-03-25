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
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('AllowNondistributableArtifactsCIDRs', $data)) {
                $values = [];
                foreach ($data['AllowNondistributableArtifactsCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowNondistributableArtifactsCIDRs($values);
                unset($data['AllowNondistributableArtifactsCIDRs']);
            }
            if (array_key_exists('AllowNondistributableArtifactsHostnames', $data)) {
                $values_1 = [];
                foreach ($data['AllowNondistributableArtifactsHostnames'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAllowNondistributableArtifactsHostnames($values_1);
                unset($data['AllowNondistributableArtifactsHostnames']);
            }
            if (array_key_exists('InsecureRegistryCIDRs', $data)) {
                $values_2 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setInsecureRegistryCIDRs($values_2);
                unset($data['InsecureRegistryCIDRs']);
            }
            if (array_key_exists('IndexConfigs', $data)) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_3) {
                    $values_3[$key] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class, 'json', $context);
                }
                $object->setIndexConfigs($values_3);
                unset($data['IndexConfigs']);
            }
            if (array_key_exists('Mirrors', $data)) {
                $values_4 = [];
                foreach ($data['Mirrors'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMirrors($values_4);
                unset($data['Mirrors']);
            }
            foreach ($data as $key_1 => $value_5) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_5;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('allowNondistributableArtifactsCIDRs') && null !== $object->getAllowNondistributableArtifactsCIDRs()) {
                $values = [];
                foreach ($object->getAllowNondistributableArtifactsCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['AllowNondistributableArtifactsCIDRs'] = $values;
            }
            if ($object->isInitialized('allowNondistributableArtifactsHostnames') && null !== $object->getAllowNondistributableArtifactsHostnames()) {
                $values_1 = [];
                foreach ($object->getAllowNondistributableArtifactsHostnames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['AllowNondistributableArtifactsHostnames'] = $values_1;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_2 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['InsecureRegistryCIDRs'] = $values_2;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_3 = [];
                foreach ($object->getIndexConfigs() as $key => $value_3) {
                    $values_3[$key] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['IndexConfigs'] = $values_3;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_4 = [];
                foreach ($object->getMirrors() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Mirrors'] = $values_4;
            }
            foreach ($object as $key_1 => $value_5) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_5;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class => true];
        }
    }
} else {
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('AllowNondistributableArtifactsCIDRs', $data)) {
                $values = [];
                foreach ($data['AllowNondistributableArtifactsCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowNondistributableArtifactsCIDRs($values);
                unset($data['AllowNondistributableArtifactsCIDRs']);
            }
            if (array_key_exists('AllowNondistributableArtifactsHostnames', $data)) {
                $values_1 = [];
                foreach ($data['AllowNondistributableArtifactsHostnames'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAllowNondistributableArtifactsHostnames($values_1);
                unset($data['AllowNondistributableArtifactsHostnames']);
            }
            if (array_key_exists('InsecureRegistryCIDRs', $data)) {
                $values_2 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setInsecureRegistryCIDRs($values_2);
                unset($data['InsecureRegistryCIDRs']);
            }
            if (array_key_exists('IndexConfigs', $data)) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_3) {
                    $values_3[$key] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class, 'json', $context);
                }
                $object->setIndexConfigs($values_3);
                unset($data['IndexConfigs']);
            }
            if (array_key_exists('Mirrors', $data)) {
                $values_4 = [];
                foreach ($data['Mirrors'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMirrors($values_4);
                unset($data['Mirrors']);
            }
            foreach ($data as $key_1 => $value_5) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_5;
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
            if ($object->isInitialized('allowNondistributableArtifactsCIDRs') && null !== $object->getAllowNondistributableArtifactsCIDRs()) {
                $values = [];
                foreach ($object->getAllowNondistributableArtifactsCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['AllowNondistributableArtifactsCIDRs'] = $values;
            }
            if ($object->isInitialized('allowNondistributableArtifactsHostnames') && null !== $object->getAllowNondistributableArtifactsHostnames()) {
                $values_1 = [];
                foreach ($object->getAllowNondistributableArtifactsHostnames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['AllowNondistributableArtifactsHostnames'] = $values_1;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_2 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['InsecureRegistryCIDRs'] = $values_2;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_3 = [];
                foreach ($object->getIndexConfigs() as $key => $value_3) {
                    $values_3[$key] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['IndexConfigs'] = $values_3;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_4 = [];
                foreach ($object->getMirrors() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Mirrors'] = $values_4;
            }
            foreach ($object as $key_1 => $value_5) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_5;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
