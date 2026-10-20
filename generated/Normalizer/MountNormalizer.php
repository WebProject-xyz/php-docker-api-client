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
            $object->target = $value;
            unset($data['Target']);
        } elseif (array_key_exists('Target', $data)) {
            $object->target = null;
            unset($data['Target']);
        }
        if (array_key_exists('Source', $data) && null !== $data['Source']) {
            $value_1 = $data['Source'];
            if (is_string($data['Source'])) {
                $value_1 = $data['Source'];
            } elseif (null === $data['Source']) {
                $value_1 = $data['Source'];
            }
            $object->source = $value_1;
            unset($data['Source']);
        } elseif (array_key_exists('Source', $data)) {
            $object->source = null;
            unset($data['Source']);
        }
        if (array_key_exists('Type', $data)) {
            $object->type = \WebProject\DockerApi\Library\Generated\Model\MountType::from($data['Type']);
            unset($data['Type']);
        }
        if (array_key_exists('ReadOnly', $data) && null !== $data['ReadOnly']) {
            $value_2 = $data['ReadOnly'];
            if (is_bool($data['ReadOnly'])) {
                $value_2 = $data['ReadOnly'];
            } elseif (null === $data['ReadOnly']) {
                $value_2 = $data['ReadOnly'];
            }
            $object->readOnly = $value_2;
            unset($data['ReadOnly']);
        } elseif (array_key_exists('ReadOnly', $data)) {
            $object->readOnly = null;
            unset($data['ReadOnly']);
        }
        if (array_key_exists('Consistency', $data) && null !== $data['Consistency']) {
            $value_3 = $data['Consistency'];
            if (is_string($data['Consistency'])) {
                $value_3 = $data['Consistency'];
            } elseif (null === $data['Consistency']) {
                $value_3 = $data['Consistency'];
            }
            $object->consistency = $value_3;
            unset($data['Consistency']);
        } elseif (array_key_exists('Consistency', $data)) {
            $object->consistency = null;
            unset($data['Consistency']);
        }
        if (array_key_exists('BindOptions', $data) && null !== $data['BindOptions']) {
            $object->bindOptions = $this->denormalizer->denormalize($data['BindOptions'], \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class, 'json', $context);
            unset($data['BindOptions']);
        } elseif (array_key_exists('BindOptions', $data)) {
            $object->bindOptions = null;
            unset($data['BindOptions']);
        }
        if (array_key_exists('VolumeOptions', $data) && null !== $data['VolumeOptions']) {
            $object->volumeOptions = $this->denormalizer->denormalize($data['VolumeOptions'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class, 'json', $context);
            unset($data['VolumeOptions']);
        } elseif (array_key_exists('VolumeOptions', $data)) {
            $object->volumeOptions = null;
            unset($data['VolumeOptions']);
        }
        if (array_key_exists('ImageOptions', $data) && null !== $data['ImageOptions']) {
            $object->imageOptions = $this->denormalizer->denormalize($data['ImageOptions'], \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class, 'json', $context);
            unset($data['ImageOptions']);
        } elseif (array_key_exists('ImageOptions', $data)) {
            $object->imageOptions = null;
            unset($data['ImageOptions']);
        }
        if (array_key_exists('TmpfsOptions', $data) && null !== $data['TmpfsOptions']) {
            $object->tmpfsOptions = $this->denormalizer->denormalize($data['TmpfsOptions'], \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class, 'json', $context);
            unset($data['TmpfsOptions']);
        } elseif (array_key_exists('TmpfsOptions', $data)) {
            $object->tmpfsOptions = null;
            unset($data['TmpfsOptions']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('target', get_object_vars($data)) && null !== ($data->target ?? null)) {
            $value = $data->target;
            if (is_string($data->target)) {
                $value = $data->target;
            } elseif (null === $data->target) {
                $value = $data->target;
            }
            $dataArray['Target'] = $value;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $value_1 = $data->source;
            if (is_string($data->source)) {
                $value_1 = $data->source;
            } elseif (null === $data->source) {
                $value_1 = $data->source;
            }
            $dataArray['Source'] = $value_1;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type->value;
        }
        if (array_key_exists('readOnly', get_object_vars($data)) && null !== ($data->readOnly ?? null)) {
            $value_2 = $data->readOnly;
            if (is_bool($data->readOnly)) {
                $value_2 = $data->readOnly;
            } elseif (null === $data->readOnly) {
                $value_2 = $data->readOnly;
            }
            $dataArray['ReadOnly'] = $value_2;
        }
        if (array_key_exists('consistency', get_object_vars($data)) && null !== ($data->consistency ?? null)) {
            $value_3 = $data->consistency;
            if (is_string($data->consistency)) {
                $value_3 = $data->consistency;
            } elseif (null === $data->consistency) {
                $value_3 = $data->consistency;
            }
            $dataArray['Consistency'] = $value_3;
        }
        if (array_key_exists('bindOptions', get_object_vars($data)) && null !== ($data->bindOptions ?? null)) {
            $normalized               = $this->normalizer->normalize($data->bindOptions, 'json', $context);
            $dataArray['BindOptions'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('volumeOptions', get_object_vars($data)) && null !== ($data->volumeOptions ?? null)) {
            $normalized_1               = $this->normalizer->normalize($data->volumeOptions, 'json', $context);
            $dataArray['VolumeOptions'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('imageOptions', get_object_vars($data)) && null !== ($data->imageOptions ?? null)) {
            $normalized_2              = $this->normalizer->normalize($data->imageOptions, 'json', $context);
            $dataArray['ImageOptions'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('tmpfsOptions', get_object_vars($data)) && null !== ($data->tmpfsOptions ?? null)) {
            $normalized_3              = $this->normalizer->normalize($data->tmpfsOptions, 'json', $context);
            $dataArray['TmpfsOptions'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
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
