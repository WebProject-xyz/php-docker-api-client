<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
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
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageInspect();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
        }
        if (array_key_exists('Descriptor', $data)) {
            $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
        }
        if (array_key_exists('Identity', $data)) {
            $object->setIdentity($this->denormalizer->denormalize($data['Identity'], \WebProject\DockerApi\Library\Generated\Model\Identity::class, 'json', $context));
        }
        if (array_key_exists('Manifests', $data) && null !== $data['Manifests']) {
            $value = $data['Manifests'];
            if (is_array($data['Manifests']) && $this->isOnlyNumericKeys($data['Manifests'])) {
                $values = [];
                foreach ($data['Manifests'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data['Manifests']) {
                $value = $data['Manifests'];
            }
            $object->setManifests($value);
        } elseif (array_key_exists('Manifests', $data) && null === $data['Manifests']) {
            $object->setManifests(null);
        }
        if (array_key_exists('RepoTags', $data) && null !== $data['RepoTags']) {
            $value_2 = $data['RepoTags'];
            if (is_array($data['RepoTags']) && $this->isOnlyNumericKeys($data['RepoTags'])) {
                $values_1 = [];
                foreach ($data['RepoTags'] as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data['RepoTags']) {
                $value_2 = $data['RepoTags'];
            }
            $object->setRepoTags($value_2);
        } elseif (array_key_exists('RepoTags', $data) && null === $data['RepoTags']) {
            $object->setRepoTags(null);
        }
        if (array_key_exists('RepoDigests', $data) && null !== $data['RepoDigests']) {
            $value_4 = $data['RepoDigests'];
            if (is_array($data['RepoDigests']) && $this->isOnlyNumericKeys($data['RepoDigests'])) {
                $values_2 = [];
                foreach ($data['RepoDigests'] as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            } elseif (null === $data['RepoDigests']) {
                $value_4 = $data['RepoDigests'];
            }
            $object->setRepoDigests($value_4);
        } elseif (array_key_exists('RepoDigests', $data) && null === $data['RepoDigests']) {
            $object->setRepoDigests(null);
        }
        if (array_key_exists('Comment', $data) && null !== $data['Comment']) {
            $value_6 = $data['Comment'];
            if (is_string($data['Comment'])) {
                $value_6 = $data['Comment'];
            } elseif (null === $data['Comment']) {
                $value_6 = $data['Comment'];
            }
            $object->setComment($value_6);
        } elseif (array_key_exists('Comment', $data) && null === $data['Comment']) {
            $object->setComment(null);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $value_7 = $data['Created'];
            if (is_string($data['Created'])) {
                $value_7 = $data['Created'];
            } elseif (null === $data['Created']) {
                $value_7 = $data['Created'];
            }
            $object->setCreated($value_7);
        } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (array_key_exists('Author', $data) && null !== $data['Author']) {
            $value_8 = $data['Author'];
            if (is_string($data['Author'])) {
                $value_8 = $data['Author'];
            } elseif (null === $data['Author']) {
                $value_8 = $data['Author'];
            }
            $object->setAuthor($value_8);
        } elseif (array_key_exists('Author', $data) && null === $data['Author']) {
            $object->setAuthor(null);
        }
        if (array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class, 'json', $context));
        }
        if (array_key_exists('Architecture', $data)) {
            $object->setArchitecture($data['Architecture']);
        }
        if (array_key_exists('Variant', $data) && null !== $data['Variant']) {
            $value_9 = $data['Variant'];
            if (is_string($data['Variant'])) {
                $value_9 = $data['Variant'];
            } elseif (null === $data['Variant']) {
                $value_9 = $data['Variant'];
            }
            $object->setVariant($value_9);
        } elseif (array_key_exists('Variant', $data) && null === $data['Variant']) {
            $object->setVariant(null);
        }
        if (array_key_exists('Os', $data)) {
            $object->setOs($data['Os']);
        }
        if (array_key_exists('OsVersion', $data) && null !== $data['OsVersion']) {
            $value_10 = $data['OsVersion'];
            if (is_string($data['OsVersion'])) {
                $value_10 = $data['OsVersion'];
            } elseif (null === $data['OsVersion']) {
                $value_10 = $data['OsVersion'];
            }
            $object->setOsVersion($value_10);
        } elseif (array_key_exists('OsVersion', $data) && null === $data['OsVersion']) {
            $object->setOsVersion(null);
        }
        if (array_key_exists('Size', $data)) {
            $object->setSize($data['Size']);
        }
        if (array_key_exists('GraphDriver', $data)) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \WebProject\DockerApi\Library\Generated\Model\DriverData::class, 'json', $context));
        }
        if (array_key_exists('RootFS', $data) && null !== $data['RootFS']) {
            $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class, 'json', $context));
        } elseif (array_key_exists('RootFS', $data) && null === $data['RootFS']) {
            $object->setRootFS(null);
        }
        if (array_key_exists('Metadata', $data) && null !== $data['Metadata']) {
            $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class, 'json', $context));
        } elseif (array_key_exists('Metadata', $data) && null === $data['Metadata']) {
            $object->setMetadata(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['Id'] = $data->getId();
        }
        if ($data->isInitialized('descriptor') && null !== $data->getDescriptor()) {
            $dataArray['Descriptor'] = $this->normalizer->normalize($data->getDescriptor(), 'json', $context);
        }
        if ($data->isInitialized('identity') && null !== $data->getIdentity()) {
            $dataArray['Identity'] = $this->normalizer->normalize($data->getIdentity(), 'json', $context);
        }
        if ($data->isInitialized('manifests')) {
            $value = $data->getManifests();
            if (is_array($data->getManifests())) {
                $values = [];
                foreach ($data->getManifests() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data->getManifests()) {
                $value = $data->getManifests();
            }
            $dataArray['Manifests'] = $value;
        }
        if ($data->isInitialized('repoTags')) {
            $value_2 = $data->getRepoTags();
            if (is_array($data->getRepoTags())) {
                $values_1 = [];
                foreach ($data->getRepoTags() as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data->getRepoTags()) {
                $value_2 = $data->getRepoTags();
            }
            $dataArray['RepoTags'] = $value_2;
        }
        if ($data->isInitialized('repoDigests')) {
            $value_4 = $data->getRepoDigests();
            if (is_array($data->getRepoDigests())) {
                $values_2 = [];
                foreach ($data->getRepoDigests() as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            } elseif (null === $data->getRepoDigests()) {
                $value_4 = $data->getRepoDigests();
            }
            $dataArray['RepoDigests'] = $value_4;
        }
        if ($data->isInitialized('comment')) {
            $value_6 = $data->getComment();
            if (is_string($data->getComment())) {
                $value_6 = $data->getComment();
            } elseif (null === $data->getComment()) {
                $value_6 = $data->getComment();
            }
            $dataArray['Comment'] = $value_6;
        }
        if ($data->isInitialized('created')) {
            $value_7 = $data->getCreated();
            if (is_string($data->getCreated())) {
                $value_7 = $data->getCreated();
            } elseif (null === $data->getCreated()) {
                $value_7 = $data->getCreated();
            }
            $dataArray['Created'] = $value_7;
        }
        if ($data->isInitialized('author')) {
            $value_8 = $data->getAuthor();
            if (is_string($data->getAuthor())) {
                $value_8 = $data->getAuthor();
            } elseif (null === $data->getAuthor()) {
                $value_8 = $data->getAuthor();
            }
            $dataArray['Author'] = $value_8;
        }
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $dataArray['Config'] = $this->normalizer->normalize($data->getConfig(), 'json', $context);
        }
        if ($data->isInitialized('architecture') && null !== $data->getArchitecture()) {
            $dataArray['Architecture'] = $data->getArchitecture();
        }
        if ($data->isInitialized('variant')) {
            $value_9 = $data->getVariant();
            if (is_string($data->getVariant())) {
                $value_9 = $data->getVariant();
            } elseif (null === $data->getVariant()) {
                $value_9 = $data->getVariant();
            }
            $dataArray['Variant'] = $value_9;
        }
        if ($data->isInitialized('os') && null !== $data->getOs()) {
            $dataArray['Os'] = $data->getOs();
        }
        if ($data->isInitialized('osVersion')) {
            $value_10 = $data->getOsVersion();
            if (is_string($data->getOsVersion())) {
                $value_10 = $data->getOsVersion();
            } elseif (null === $data->getOsVersion()) {
                $value_10 = $data->getOsVersion();
            }
            $dataArray['OsVersion'] = $value_10;
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['Size'] = $data->getSize();
        }
        if ($data->isInitialized('graphDriver') && null !== $data->getGraphDriver()) {
            $dataArray['GraphDriver'] = $this->normalizer->normalize($data->getGraphDriver(), 'json', $context);
        }
        if ($data->isInitialized('rootFS')) {
            $dataArray['RootFS'] = $this->normalizer->normalize($data->getRootFS(), 'json', $context);
        }
        if ($data->isInitialized('metadata')) {
            $dataArray['Metadata'] = $this->normalizer->normalize($data->getMetadata(), 'json', $context);
        }

        return $dataArray;
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
