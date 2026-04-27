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
use function is_bool;
use function is_object;
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\Mount();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Target', $data) && null !== $data['Target']) {
            $value = $data['Target'];
            if (is_string($data['Target'])) {
                $value = $data['Target'];
            } elseif (null === $data['Target']) {
                $value = $data['Target'];
            }
            $object->setTarget($value);
        } elseif (array_key_exists('Target', $data) && null === $data['Target']) {
            $object->setTarget(null);
        }
        if (array_key_exists('Source', $data) && null !== $data['Source']) {
            $value_1 = $data['Source'];
            if (is_string($data['Source'])) {
                $value_1 = $data['Source'];
            } elseif (null === $data['Source']) {
                $value_1 = $data['Source'];
            }
            $object->setSource($value_1);
        } elseif (array_key_exists('Source', $data) && null === $data['Source']) {
            $object->setSource(null);
        }
        if (array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (array_key_exists('ReadOnly', $data) && null !== $data['ReadOnly']) {
            $value_2 = $data['ReadOnly'];
            if (is_bool($data['ReadOnly'])) {
                $value_2 = $data['ReadOnly'];
            } elseif (null === $data['ReadOnly']) {
                $value_2 = $data['ReadOnly'];
            }
            $object->setReadOnly($value_2);
        } elseif (array_key_exists('ReadOnly', $data) && null === $data['ReadOnly']) {
            $object->setReadOnly(null);
        }
        if (array_key_exists('Consistency', $data) && null !== $data['Consistency']) {
            $value_3 = $data['Consistency'];
            if (is_string($data['Consistency'])) {
                $value_3 = $data['Consistency'];
            } elseif (null === $data['Consistency']) {
                $value_3 = $data['Consistency'];
            }
            $object->setConsistency($value_3);
        } elseif (array_key_exists('Consistency', $data) && null === $data['Consistency']) {
            $object->setConsistency(null);
        }
        if (array_key_exists('BindOptions', $data) && null !== $data['BindOptions']) {
            $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class, 'json', $context));
        } elseif (array_key_exists('BindOptions', $data) && null === $data['BindOptions']) {
            $object->setBindOptions(null);
        }
        if (array_key_exists('VolumeOptions', $data) && null !== $data['VolumeOptions']) {
            $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class, 'json', $context));
        } elseif (array_key_exists('VolumeOptions', $data) && null === $data['VolumeOptions']) {
            $object->setVolumeOptions(null);
        }
        if (array_key_exists('ImageOptions', $data) && null !== $data['ImageOptions']) {
            $object->setImageOptions($this->denormalizer->denormalize($data['ImageOptions'], \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class, 'json', $context));
        } elseif (array_key_exists('ImageOptions', $data) && null === $data['ImageOptions']) {
            $object->setImageOptions(null);
        }
        if (array_key_exists('TmpfsOptions', $data) && null !== $data['TmpfsOptions']) {
            $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class, 'json', $context));
        } elseif (array_key_exists('TmpfsOptions', $data) && null === $data['TmpfsOptions']) {
            $object->setTmpfsOptions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('target')) {
            $value = $data->getTarget();
            if (is_string($data->getTarget())) {
                $value = $data->getTarget();
            } elseif (null === $data->getTarget()) {
                $value = $data->getTarget();
            }
            $dataArray['Target'] = $value;
        }
        if ($data->isInitialized('source')) {
            $value_1 = $data->getSource();
            if (is_string($data->getSource())) {
                $value_1 = $data->getSource();
            } elseif (null === $data->getSource()) {
                $value_1 = $data->getSource();
            }
            $dataArray['Source'] = $value_1;
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['Type'] = $data->getType();
        }
        if ($data->isInitialized('readOnly')) {
            $value_2 = $data->getReadOnly();
            if (is_bool($data->getReadOnly())) {
                $value_2 = $data->getReadOnly();
            } elseif (null === $data->getReadOnly()) {
                $value_2 = $data->getReadOnly();
            }
            $dataArray['ReadOnly'] = $value_2;
        }
        if ($data->isInitialized('consistency')) {
            $value_3 = $data->getConsistency();
            if (is_string($data->getConsistency())) {
                $value_3 = $data->getConsistency();
            } elseif (null === $data->getConsistency()) {
                $value_3 = $data->getConsistency();
            }
            $dataArray['Consistency'] = $value_3;
        }
        if ($data->isInitialized('bindOptions')) {
            $dataArray['BindOptions'] = $this->normalizer->normalize($data->getBindOptions(), 'json', $context);
        }
        if ($data->isInitialized('volumeOptions')) {
            $dataArray['VolumeOptions'] = $this->normalizer->normalize($data->getVolumeOptions(), 'json', $context);
        }
        if ($data->isInitialized('imageOptions')) {
            $dataArray['ImageOptions'] = $this->normalizer->normalize($data->getImageOptions(), 'json', $context);
        }
        if ($data->isInitialized('tmpfsOptions')) {
            $dataArray['TmpfsOptions'] = $this->normalizer->normalize($data->getTmpfsOptions(), 'json', $context);
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
