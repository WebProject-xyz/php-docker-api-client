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

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['Id'] = $data->getId();
        }
        if ($data->isInitialized('descriptor') && null !== $data->getDescriptor()) {
            $dataArray['Descriptor'] = $this->normalizer->normalize($data->getDescriptor(), 'json', $context);
        }
        if ($data->isInitialized('manifests') && null !== $data->getManifests()) {
            $values = [];
            foreach ($data->getManifests() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Manifests'] = $values;
        }
        if ($data->isInitialized('repoTags') && null !== $data->getRepoTags()) {
            $values_1 = [];
            foreach ($data->getRepoTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['RepoTags'] = $values_1;
        }
        if ($data->isInitialized('repoDigests') && null !== $data->getRepoDigests()) {
            $values_2 = [];
            foreach ($data->getRepoDigests() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['RepoDigests'] = $values_2;
        }
        if ($data->isInitialized('parent') && null !== $data->getParent()) {
            $dataArray['Parent'] = $data->getParent();
        }
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['Comment'] = $data->getComment();
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['Created'] = $data->getCreated();
        }
        if ($data->isInitialized('dockerVersion') && null !== $data->getDockerVersion()) {
            $dataArray['DockerVersion'] = $data->getDockerVersion();
        }
        if ($data->isInitialized('author') && null !== $data->getAuthor()) {
            $dataArray['Author'] = $data->getAuthor();
        }
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $dataArray['Config'] = $this->normalizer->normalize($data->getConfig(), 'json', $context);
        }
        if ($data->isInitialized('architecture') && null !== $data->getArchitecture()) {
            $dataArray['Architecture'] = $data->getArchitecture();
        }
        if ($data->isInitialized('variant') && null !== $data->getVariant()) {
            $dataArray['Variant'] = $data->getVariant();
        }
        if ($data->isInitialized('os') && null !== $data->getOs()) {
            $dataArray['Os'] = $data->getOs();
        }
        if ($data->isInitialized('osVersion') && null !== $data->getOsVersion()) {
            $dataArray['OsVersion'] = $data->getOsVersion();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['Size'] = $data->getSize();
        }
        if ($data->isInitialized('virtualSize') && null !== $data->getVirtualSize()) {
            $dataArray['VirtualSize'] = $data->getVirtualSize();
        }
        if ($data->isInitialized('graphDriver') && null !== $data->getGraphDriver()) {
            $dataArray['GraphDriver'] = $this->normalizer->normalize($data->getGraphDriver(), 'json', $context);
        }
        if ($data->isInitialized('rootFS') && null !== $data->getRootFS()) {
            $dataArray['RootFS'] = $this->normalizer->normalize($data->getRootFS(), 'json', $context);
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $dataArray['Metadata'] = $this->normalizer->normalize($data->getMetadata(), 'json', $context);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
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
