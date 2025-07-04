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

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray             = [];
        $dataArray['Id']       = $data->getId();
        $dataArray['ParentId'] = $data->getParentId();
        $values                = [];
        foreach ($data->getRepoTags() as $value) {
            $values[] = $value;
        }
        $dataArray['RepoTags'] = $values;
        $values_1              = [];
        foreach ($data->getRepoDigests() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['RepoDigests'] = $values_1;
        $dataArray['Created']     = $data->getCreated();
        $dataArray['Size']        = $data->getSize();
        $dataArray['SharedSize']  = $data->getSharedSize();
        if ($data->isInitialized('virtualSize') && null !== $data->getVirtualSize()) {
            $dataArray['VirtualSize'] = $data->getVirtualSize();
        }
        $values_2 = [];
        foreach ($data->getLabels() as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $dataArray['Labels']     = $values_2;
        $dataArray['Containers'] = $data->getContainers();
        if ($data->isInitialized('manifests') && null !== $data->getManifests()) {
            $values_3 = [];
            foreach ($data->getManifests() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['Manifests'] = $values_3;
        }
        if ($data->isInitialized('descriptor') && null !== $data->getDescriptor()) {
            $dataArray['Descriptor'] = $this->normalizer->normalize($data->getDescriptor(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }

        return $dataArray;
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
