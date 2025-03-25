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
    class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageInspect();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
                unset($data['Descriptor']);
            }
            if (array_key_exists('Manifests', $data) && null !== $data['Manifests']) {
                $values = [];
                foreach ($data['Manifests'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values);
                unset($data['Manifests']);
            } elseif (array_key_exists('Manifests', $data) && null === $data['Manifests']) {
                $object->setManifests(null);
            }
            if (array_key_exists('RepoTags', $data)) {
                $values_1 = [];
                foreach ($data['RepoTags'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoTags($values_1);
                unset($data['RepoTags']);
            }
            if (array_key_exists('RepoDigests', $data)) {
                $values_2 = [];
                foreach ($data['RepoDigests'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRepoDigests($values_2);
                unset($data['RepoDigests']);
            }
            if (array_key_exists('Parent', $data)) {
                $object->setParent($data['Parent']);
                unset($data['Parent']);
            }
            if (array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
                unset($data['Comment']);
            }
            if (array_key_exists('Created', $data) && null !== $data['Created']) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
                $object->setCreated(null);
            }
            if (array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
                unset($data['DockerVersion']);
            }
            if (array_key_exists('Author', $data)) {
                $object->setAuthor($data['Author']);
                unset($data['Author']);
            }
            if (array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class, 'json', $context));
                unset($data['Config']);
            }
            if (array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
                unset($data['Architecture']);
            }
            if (array_key_exists('Variant', $data) && null !== $data['Variant']) {
                $object->setVariant($data['Variant']);
                unset($data['Variant']);
            } elseif (array_key_exists('Variant', $data) && null === $data['Variant']) {
                $object->setVariant(null);
            }
            if (array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
                unset($data['Os']);
            }
            if (array_key_exists('OsVersion', $data) && null !== $data['OsVersion']) {
                $object->setOsVersion($data['OsVersion']);
                unset($data['OsVersion']);
            } elseif (array_key_exists('OsVersion', $data) && null === $data['OsVersion']) {
                $object->setOsVersion(null);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            if (array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
                unset($data['VirtualSize']);
            }
            if (array_key_exists('GraphDriver', $data)) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \WebProject\DockerApi\Library\Generated\Model\DriverData::class, 'json', $context));
                unset($data['GraphDriver']);
            }
            if (array_key_exists('RootFS', $data)) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class, 'json', $context));
                unset($data['RootFS']);
            }
            if (array_key_exists('Metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class, 'json', $context));
                unset($data['Metadata']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values = [];
                foreach ($object->getManifests() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Manifests'] = $values;
            }
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values_1 = [];
                foreach ($object->getRepoTags() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoTags'] = $values_1;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_2 = [];
                foreach ($object->getRepoDigests() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['RepoDigests'] = $values_2;
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['Author'] = $object->getAuthor();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['Variant'] = $object->getVariant();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('rootFS') && null !== $object->getRootFS()) {
                $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ImageInspect::class => true];
        }
    }
} else {
    class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageInspect();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
                unset($data['Descriptor']);
            }
            if (array_key_exists('Manifests', $data) && null !== $data['Manifests']) {
                $values = [];
                foreach ($data['Manifests'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values);
                unset($data['Manifests']);
            } elseif (array_key_exists('Manifests', $data) && null === $data['Manifests']) {
                $object->setManifests(null);
            }
            if (array_key_exists('RepoTags', $data)) {
                $values_1 = [];
                foreach ($data['RepoTags'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoTags($values_1);
                unset($data['RepoTags']);
            }
            if (array_key_exists('RepoDigests', $data)) {
                $values_2 = [];
                foreach ($data['RepoDigests'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRepoDigests($values_2);
                unset($data['RepoDigests']);
            }
            if (array_key_exists('Parent', $data)) {
                $object->setParent($data['Parent']);
                unset($data['Parent']);
            }
            if (array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
                unset($data['Comment']);
            }
            if (array_key_exists('Created', $data) && null !== $data['Created']) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
                $object->setCreated(null);
            }
            if (array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
                unset($data['DockerVersion']);
            }
            if (array_key_exists('Author', $data)) {
                $object->setAuthor($data['Author']);
                unset($data['Author']);
            }
            if (array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class, 'json', $context));
                unset($data['Config']);
            }
            if (array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
                unset($data['Architecture']);
            }
            if (array_key_exists('Variant', $data) && null !== $data['Variant']) {
                $object->setVariant($data['Variant']);
                unset($data['Variant']);
            } elseif (array_key_exists('Variant', $data) && null === $data['Variant']) {
                $object->setVariant(null);
            }
            if (array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
                unset($data['Os']);
            }
            if (array_key_exists('OsVersion', $data) && null !== $data['OsVersion']) {
                $object->setOsVersion($data['OsVersion']);
                unset($data['OsVersion']);
            } elseif (array_key_exists('OsVersion', $data) && null === $data['OsVersion']) {
                $object->setOsVersion(null);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            if (array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
                unset($data['VirtualSize']);
            }
            if (array_key_exists('GraphDriver', $data)) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \WebProject\DockerApi\Library\Generated\Model\DriverData::class, 'json', $context));
                unset($data['GraphDriver']);
            }
            if (array_key_exists('RootFS', $data)) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class, 'json', $context));
                unset($data['RootFS']);
            }
            if (array_key_exists('Metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class, 'json', $context));
                unset($data['Metadata']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values = [];
                foreach ($object->getManifests() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Manifests'] = $values;
            }
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values_1 = [];
                foreach ($object->getRepoTags() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoTags'] = $values_1;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_2 = [];
                foreach ($object->getRepoDigests() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['RepoDigests'] = $values_2;
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['Author'] = $object->getAuthor();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['Variant'] = $object->getVariant();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('rootFS') && null !== $object->getRootFS()) {
                $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ImageInspect::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
