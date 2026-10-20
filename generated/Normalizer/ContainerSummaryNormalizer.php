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
use function is_string;

class ContainerSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerSummary();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Id', $data) && null !== $data['Id']) {
            $value = $data['Id'];
            if (is_string($data['Id'])) {
                $value = $data['Id'];
            } elseif (null === $data['Id']) {
                $value = $data['Id'];
            }
            $object->id = $value;
            unset($data['Id']);
        } elseif (array_key_exists('Id', $data)) {
            $object->id = null;
            unset($data['Id']);
        }
        if (array_key_exists('Names', $data) && null !== $data['Names']) {
            $values = [];
            foreach ($data['Names'] as $value_1) {
                $values[] = $value_1;
            }
            $object->names = $values;
            unset($data['Names']);
        } elseif (array_key_exists('Names', $data)) {
            $object->names = null;
            unset($data['Names']);
        }
        if (array_key_exists('Image', $data) && null !== $data['Image']) {
            $value_2 = $data['Image'];
            if (is_string($data['Image'])) {
                $value_2 = $data['Image'];
            } elseif (null === $data['Image']) {
                $value_2 = $data['Image'];
            }
            $object->image = $value_2;
            unset($data['Image']);
        } elseif (array_key_exists('Image', $data)) {
            $object->image = null;
            unset($data['Image']);
        }
        if (array_key_exists('ImageID', $data) && null !== $data['ImageID']) {
            $value_3 = $data['ImageID'];
            if (is_string($data['ImageID'])) {
                $value_3 = $data['ImageID'];
            } elseif (null === $data['ImageID']) {
                $value_3 = $data['ImageID'];
            }
            $object->imageID = $value_3;
            unset($data['ImageID']);
        } elseif (array_key_exists('ImageID', $data)) {
            $object->imageID = null;
            unset($data['ImageID']);
        }
        if (array_key_exists('ImageManifestDescriptor', $data)) {
            $object->imageManifestDescriptor = $this->denormalizer->denormalize($data['ImageManifestDescriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context);
            unset($data['ImageManifestDescriptor']);
        }
        if (array_key_exists('Command', $data) && null !== $data['Command']) {
            $value_4 = $data['Command'];
            if (is_string($data['Command'])) {
                $value_4 = $data['Command'];
            } elseif (null === $data['Command']) {
                $value_4 = $data['Command'];
            }
            $object->command = $value_4;
            unset($data['Command']);
        } elseif (array_key_exists('Command', $data)) {
            $object->command = null;
            unset($data['Command']);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $value_5 = $data['Created'];
            if (is_int($data['Created'])) {
                $value_5 = $data['Created'];
            } elseif (null === $data['Created']) {
                $value_5 = $data['Created'];
            }
            $object->created = $value_5;
            unset($data['Created']);
        } elseif (array_key_exists('Created', $data)) {
            $object->created = null;
            unset($data['Created']);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $values_1 = [];
            foreach ($data['Ports'] as $value_6) {
                $values_1[] = $this->denormalizer->denormalize($value_6, \WebProject\DockerApi\Library\Generated\Model\PortSummary::class, 'json', $context);
            }
            $object->ports = $values_1;
            unset($data['Ports']);
        } elseif (array_key_exists('Ports', $data)) {
            $object->ports = null;
            unset($data['Ports']);
        }
        if (array_key_exists('SizeRw', $data) && null !== $data['SizeRw']) {
            $value_7 = $data['SizeRw'];
            if (is_int($data['SizeRw'])) {
                $value_7 = $data['SizeRw'];
            } elseif (null === $data['SizeRw']) {
                $value_7 = $data['SizeRw'];
            }
            $object->sizeRw = $value_7;
            unset($data['SizeRw']);
        } elseif (array_key_exists('SizeRw', $data)) {
            $object->sizeRw = null;
            unset($data['SizeRw']);
        }
        if (array_key_exists('SizeRootFs', $data) && null !== $data['SizeRootFs']) {
            $value_8 = $data['SizeRootFs'];
            if (is_int($data['SizeRootFs'])) {
                $value_8 = $data['SizeRootFs'];
            } elseif (null === $data['SizeRootFs']) {
                $value_8 = $data['SizeRootFs'];
            }
            $object->sizeRootFs = $value_8;
            unset($data['SizeRootFs']);
        } elseif (array_key_exists('SizeRootFs', $data)) {
            $object->sizeRootFs = null;
            unset($data['SizeRootFs']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_9 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key => $value_10) {
                    $values_2[$key] = $value_10;
                }
                $value_9 = $values_2;
            } elseif (null === $data['Labels']) {
                $value_9 = $data['Labels'];
            }
            $object->labels = $value_9;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $value_11 = $data['State'];
            if (is_string($data['State'])) {
                $value_11 = $data['State'];
            } elseif (null === $data['State']) {
                $value_11 = $data['State'];
            }
            $object->state = $value_11;
            unset($data['State']);
        } elseif (array_key_exists('State', $data)) {
            $object->state = null;
            unset($data['State']);
        }
        if (array_key_exists('Status', $data) && null !== $data['Status']) {
            $value_12 = $data['Status'];
            if (is_string($data['Status'])) {
                $value_12 = $data['Status'];
            } elseif (null === $data['Status']) {
                $value_12 = $data['Status'];
            }
            $object->status = $value_12;
            unset($data['Status']);
        } elseif (array_key_exists('Status', $data)) {
            $object->status = null;
            unset($data['Status']);
        }
        if (array_key_exists('HostConfig', $data) && null !== $data['HostConfig']) {
            $object->hostConfig = $this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class, 'json', $context);
            unset($data['HostConfig']);
        } elseif (array_key_exists('HostConfig', $data)) {
            $object->hostConfig = null;
            unset($data['HostConfig']);
        }
        if (array_key_exists('NetworkSettings', $data) && null !== $data['NetworkSettings']) {
            $object->networkSettings = $this->denormalizer->denormalize($data['NetworkSettings'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryNetworkSettings::class, 'json', $context);
            unset($data['NetworkSettings']);
        } elseif (array_key_exists('NetworkSettings', $data)) {
            $object->networkSettings = null;
            unset($data['NetworkSettings']);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_3 = [];
            foreach ($data['Mounts'] as $value_13) {
                $values_3[] = $this->denormalizer->denormalize($value_13, \WebProject\DockerApi\Library\Generated\Model\MountPoint::class, 'json', $context);
            }
            $object->mounts = $values_3;
            unset($data['Mounts']);
        } elseif (array_key_exists('Mounts', $data)) {
            $object->mounts = null;
            unset($data['Mounts']);
        }
        if (array_key_exists('Health', $data) && null !== $data['Health']) {
            $object->health = $this->denormalizer->denormalize($data['Health'], \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHealth::class, 'json', $context);
            unset($data['Health']);
        } elseif (array_key_exists('Health', $data)) {
            $object->health = null;
            unset($data['Health']);
        }
        foreach ($data as $key_1 => $value_14) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_14;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $value = $data->id;
            if (is_string($data->id)) {
                $value = $data->id;
            } elseif (null === $data->id) {
                $value = $data->id;
            }
            $dataArray['Id'] = $value;
        }
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $values = [];
            foreach ($data->names as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['Names'] = $values;
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $value_2 = $data->image;
            if (is_string($data->image)) {
                $value_2 = $data->image;
            } elseif (null === $data->image) {
                $value_2 = $data->image;
            }
            $dataArray['Image'] = $value_2;
        }
        if (array_key_exists('imageID', get_object_vars($data)) && null !== ($data->imageID ?? null)) {
            $value_3 = $data->imageID;
            if (is_string($data->imageID)) {
                $value_3 = $data->imageID;
            } elseif (null === $data->imageID) {
                $value_3 = $data->imageID;
            }
            $dataArray['ImageID'] = $value_3;
        }
        if (array_key_exists('imageManifestDescriptor', get_object_vars($data)) && null !== ($data->imageManifestDescriptor ?? null)) {
            $normalized                           = $this->normalizer->normalize($data->imageManifestDescriptor, 'json', $context);
            $dataArray['ImageManifestDescriptor'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('command', get_object_vars($data)) && null !== ($data->command ?? null)) {
            $value_4 = $data->command;
            if (is_string($data->command)) {
                $value_4 = $data->command;
            } elseif (null === $data->command) {
                $value_4 = $data->command;
            }
            $dataArray['Command'] = $value_4;
        }
        if (array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $value_5 = $data->created;
            if (is_int($data->created)) {
                $value_5 = $data->created;
            } elseif (null === $data->created) {
                $value_5 = $data->created;
            }
            $dataArray['Created'] = $value_5;
        }
        if (array_key_exists('ports', get_object_vars($data)) && null !== ($data->ports ?? null)) {
            $values_1 = [];
            foreach ($data->ports as $value_6) {
                $normalized_1 = null === $value_6 ? null : $this->normalizer->normalize($value_6, 'json', $context);
                $values_1[]   = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['Ports'] = $values_1;
        }
        if (array_key_exists('sizeRw', get_object_vars($data)) && null !== ($data->sizeRw ?? null)) {
            $value_7 = $data->sizeRw;
            if (is_int($data->sizeRw)) {
                $value_7 = $data->sizeRw;
            } elseif (null === $data->sizeRw) {
                $value_7 = $data->sizeRw;
            }
            $dataArray['SizeRw'] = $value_7;
        }
        if (array_key_exists('sizeRootFs', get_object_vars($data)) && null !== ($data->sizeRootFs ?? null)) {
            $value_8 = $data->sizeRootFs;
            if (is_int($data->sizeRootFs)) {
                $value_8 = $data->sizeRootFs;
            } elseif (null === $data->sizeRootFs) {
                $value_8 = $data->sizeRootFs;
            }
            $dataArray['SizeRootFs'] = $value_8;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_9 = $data->labels;
            if (is_iterable($data->labels)) {
                $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key => $value_10) {
                    $values_2[$key] = $value_10;
                }
                $value_9 = $values_2;
            } elseif (null === $data->labels) {
                $value_9 = $data->labels;
            }
            $dataArray['Labels'] = $value_9;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $value_11 = $data->state;
            if (is_string($data->state)) {
                $value_11 = $data->state;
            } elseif (null === $data->state) {
                $value_11 = $data->state;
            }
            $dataArray['State'] = $value_11;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $value_12 = $data->status;
            if (is_string($data->status)) {
                $value_12 = $data->status;
            } elseif (null === $data->status) {
                $value_12 = $data->status;
            }
            $dataArray['Status'] = $value_12;
        }
        if (array_key_exists('hostConfig', get_object_vars($data)) && null !== ($data->hostConfig ?? null)) {
            $normalized_2            = $this->normalizer->normalize($data->hostConfig, 'json', $context);
            $dataArray['HostConfig'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('networkSettings', get_object_vars($data)) && null !== ($data->networkSettings ?? null)) {
            $normalized_3                 = $this->normalizer->normalize($data->networkSettings, 'json', $context);
            $dataArray['NetworkSettings'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_3 = [];
            foreach ($data->mounts as $value_13) {
                $normalized_4 = null === $value_13 ? null : $this->normalizer->normalize($value_13, 'json', $context);
                $values_3[]   = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['Mounts'] = $values_3;
        }
        if (array_key_exists('health', get_object_vars($data)) && null !== ($data->health ?? null)) {
            $normalized_5        = $this->normalizer->normalize($data->health, 'json', $context);
            $dataArray['Health'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_14) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_14;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
