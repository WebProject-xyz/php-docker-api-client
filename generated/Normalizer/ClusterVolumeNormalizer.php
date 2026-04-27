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

class ClusterVolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterVolume();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ID', $data) && null !== $data['ID']) {
            $value = $data['ID'];
            if (is_string($data['ID'])) {
                $value = $data['ID'];
            } elseif (null === $data['ID']) {
                $value = $data['ID'];
            }
            $object->setID($value);
        } elseif (array_key_exists('ID', $data) && null === $data['ID']) {
            $object->setID(null);
        }
        if (array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class, 'json', $context));
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $value_1 = $data['CreatedAt'];
            if (is_string($data['CreatedAt'])) {
                $value_1 = $data['CreatedAt'];
            } elseif (null === $data['CreatedAt']) {
                $value_1 = $data['CreatedAt'];
            }
            $object->setCreatedAt($value_1);
        } elseif (array_key_exists('CreatedAt', $data) && null === $data['CreatedAt']) {
            $object->setCreatedAt(null);
        }
        if (array_key_exists('UpdatedAt', $data) && null !== $data['UpdatedAt']) {
            $value_2 = $data['UpdatedAt'];
            if (is_string($data['UpdatedAt'])) {
                $value_2 = $data['UpdatedAt'];
            } elseif (null === $data['UpdatedAt']) {
                $value_2 = $data['UpdatedAt'];
            }
            $object->setUpdatedAt($value_2);
        } elseif (array_key_exists('UpdatedAt', $data) && null === $data['UpdatedAt']) {
            $object->setUpdatedAt(null);
        }
        if (array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpec::class, 'json', $context));
        }
        if (array_key_exists('Info', $data) && null !== $data['Info']) {
            $object->setInfo($this->denormalizer->denormalize($data['Info'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo::class, 'json', $context));
        } elseif (array_key_exists('Info', $data) && null === $data['Info']) {
            $object->setInfo(null);
        }
        if (array_key_exists('PublishStatus', $data) && null !== $data['PublishStatus']) {
            $value_3 = $data['PublishStatus'];
            if (is_array($data['PublishStatus']) && $this->isOnlyNumericKeys($data['PublishStatus'])) {
                $values = [];
                foreach ($data['PublishStatus'] as $value_4) {
                    $values[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem::class, 'json', $context);
                }
                $value_3 = $values;
            } elseif (null === $data['PublishStatus']) {
                $value_3 = $data['PublishStatus'];
            }
            $object->setPublishStatus($value_3);
        } elseif (array_key_exists('PublishStatus', $data) && null === $data['PublishStatus']) {
            $object->setPublishStatus(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iD')) {
            $value = $data->getID();
            if (is_string($data->getID())) {
                $value = $data->getID();
            } elseif (null === $data->getID()) {
                $value = $data->getID();
            }
            $dataArray['ID'] = $value;
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['Version'] = $this->normalizer->normalize($data->getVersion(), 'json', $context);
        }
        if ($data->isInitialized('createdAt')) {
            $value_1 = $data->getCreatedAt();
            if (is_string($data->getCreatedAt())) {
                $value_1 = $data->getCreatedAt();
            } elseif (null === $data->getCreatedAt()) {
                $value_1 = $data->getCreatedAt();
            }
            $dataArray['CreatedAt'] = $value_1;
        }
        if ($data->isInitialized('updatedAt')) {
            $value_2 = $data->getUpdatedAt();
            if (is_string($data->getUpdatedAt())) {
                $value_2 = $data->getUpdatedAt();
            } elseif (null === $data->getUpdatedAt()) {
                $value_2 = $data->getUpdatedAt();
            }
            $dataArray['UpdatedAt'] = $value_2;
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['Spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('info')) {
            $dataArray['Info'] = $this->normalizer->normalize($data->getInfo(), 'json', $context);
        }
        if ($data->isInitialized('publishStatus')) {
            $value_3 = $data->getPublishStatus();
            if (is_array($data->getPublishStatus())) {
                $values = [];
                foreach ($data->getPublishStatus() as $value_4) {
                    $values[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $value_3 = $values;
            } elseif (null === $data->getPublishStatus()) {
                $value_3 = $data->getPublishStatus();
            }
            $dataArray['PublishStatus'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
