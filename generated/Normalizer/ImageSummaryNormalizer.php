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
    class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageSummary();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('ParentId', $data)) {
                $object->setParentId($data['ParentId']);
                unset($data['ParentId']);
            }
            if (array_key_exists('RepoTags', $data)) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
                unset($data['RepoTags']);
            }
            if (array_key_exists('RepoDigests', $data)) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
                unset($data['RepoDigests']);
            }
            if (array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            if (array_key_exists('SharedSize', $data)) {
                $object->setSharedSize($data['SharedSize']);
                unset($data['SharedSize']);
            }
            if (array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
                unset($data['VirtualSize']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
                unset($data['Labels']);
            }
            if (array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
                unset($data['Containers']);
            }
            if (array_key_exists('Manifests', $data)) {
                $values_3 = [];
                foreach ($data['Manifests'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values_3);
                unset($data['Manifests']);
            }
            if (array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
                unset($data['Descriptor']);
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
            $data             = [];
            $data['Id']       = $object->getId();
            $data['ParentId'] = $object->getParentId();
            $values           = [];
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
            $values_1         = [];
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
            $data['Created']     = $object->getCreated();
            $data['Size']        = $object->getSize();
            $data['SharedSize']  = $object->getSharedSize();
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            $values_2 = [];
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels']     = $values_2;
            $data['Containers'] = $object->getContainers();
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values_3 = [];
                foreach ($object->getManifests() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Manifests'] = $values_3;
            }
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ImageSummary::class => true];
        }
    }
} else {
    class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageSummary();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('ParentId', $data)) {
                $object->setParentId($data['ParentId']);
                unset($data['ParentId']);
            }
            if (array_key_exists('RepoTags', $data)) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
                unset($data['RepoTags']);
            }
            if (array_key_exists('RepoDigests', $data)) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
                unset($data['RepoDigests']);
            }
            if (array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            if (array_key_exists('SharedSize', $data)) {
                $object->setSharedSize($data['SharedSize']);
                unset($data['SharedSize']);
            }
            if (array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
                unset($data['VirtualSize']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
                unset($data['Labels']);
            }
            if (array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
                unset($data['Containers']);
            }
            if (array_key_exists('Manifests', $data)) {
                $values_3 = [];
                foreach ($data['Manifests'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values_3);
                unset($data['Manifests']);
            }
            if (array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
                unset($data['Descriptor']);
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
            $data             = [];
            $data['Id']       = $object->getId();
            $data['ParentId'] = $object->getParentId();
            $values           = [];
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
            $values_1         = [];
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
            $data['Created']     = $object->getCreated();
            $data['Size']        = $object->getSize();
            $data['SharedSize']  = $object->getSharedSize();
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            $values_2 = [];
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels']     = $values_2;
            $data['Containers'] = $object->getContainers();
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values_3 = [];
                foreach ($object->getManifests() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Manifests'] = $values_3;
            }
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ImageSummary::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
