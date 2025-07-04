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
use function is_int;
use function is_object;

class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Mount::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Mount::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Mount();
        if (array_key_exists('ReadOnly', $data) && is_int($data['ReadOnly'])) {
            $data['ReadOnly'] = (bool) $data['ReadOnly'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Target', $data)) {
            $object->setTarget($data['Target']);
            unset($data['Target']);
        }
        if (array_key_exists('Source', $data)) {
            $object->setSource($data['Source']);
            unset($data['Source']);
        }
        if (array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
            unset($data['Type']);
        }
        if (array_key_exists('ReadOnly', $data)) {
            $object->setReadOnly($data['ReadOnly']);
            unset($data['ReadOnly']);
        }
        if (array_key_exists('Consistency', $data)) {
            $object->setConsistency($data['Consistency']);
            unset($data['Consistency']);
        }
        if (array_key_exists('BindOptions', $data)) {
            $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class, 'json', $context));
            unset($data['BindOptions']);
        }
        if (array_key_exists('VolumeOptions', $data)) {
            $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class, 'json', $context));
            unset($data['VolumeOptions']);
        }
        if (array_key_exists('ImageOptions', $data)) {
            $object->setImageOptions($this->denormalizer->denormalize($data['ImageOptions'], \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class, 'json', $context));
            unset($data['ImageOptions']);
        }
        if (array_key_exists('TmpfsOptions', $data)) {
            $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class, 'json', $context));
            unset($data['TmpfsOptions']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('target') && null !== $data->getTarget()) {
            $dataArray['Target'] = $data->getTarget();
        }
        if ($data->isInitialized('source') && null !== $data->getSource()) {
            $dataArray['Source'] = $data->getSource();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['Type'] = $data->getType();
        }
        if ($data->isInitialized('readOnly') && null !== $data->getReadOnly()) {
            $dataArray['ReadOnly'] = $data->getReadOnly();
        }
        if ($data->isInitialized('consistency') && null !== $data->getConsistency()) {
            $dataArray['Consistency'] = $data->getConsistency();
        }
        if ($data->isInitialized('bindOptions') && null !== $data->getBindOptions()) {
            $dataArray['BindOptions'] = $this->normalizer->normalize($data->getBindOptions(), 'json', $context);
        }
        if ($data->isInitialized('volumeOptions') && null !== $data->getVolumeOptions()) {
            $dataArray['VolumeOptions'] = $this->normalizer->normalize($data->getVolumeOptions(), 'json', $context);
        }
        if ($data->isInitialized('imageOptions') && null !== $data->getImageOptions()) {
            $dataArray['ImageOptions'] = $this->normalizer->normalize($data->getImageOptions(), 'json', $context);
        }
        if ($data->isInitialized('tmpfsOptions') && null !== $data->getTmpfsOptions()) {
            $dataArray['TmpfsOptions'] = $this->normalizer->normalize($data->getTmpfsOptions(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Mount::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
