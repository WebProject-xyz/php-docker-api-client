<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use DateTime;
use Exception;
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

class VolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Volume::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Volume::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Volume();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
            unset($data['Name']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
            unset($data['Driver']);
        }
        if (array_key_exists('Mountpoint', $data)) {
            $object->mountpoint = $data['Mountpoint'];
            unset($data['Mountpoint']);
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['CreatedAt']);
            if (false === $date) {
                if (is_string($data['CreatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['CreatedAt'])) {
                    try {
                        $date = new DateTime($data['CreatedAt']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CreatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CreatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->createdAt = $date;
            unset($data['CreatedAt']);
        } elseif (array_key_exists('CreatedAt', $data)) {
            $object->createdAt = null;
            unset($data['CreatedAt']);
        }
        if (array_key_exists('Status', $data) && null !== $data['Status']) {
            $value = $data['Status'];
            if (is_array($data['Status']) && $this->isOnlyNumericKeys($data['Status'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Status'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['Status']) {
                $value = $data['Status'];
            }
            $object->status = $value;
            unset($data['Status']);
        } elseif (array_key_exists('Status', $data)) {
            $object->status = null;
            unset($data['Status']);
        }
        if (array_key_exists('Labels', $data)) {
            $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data['Labels'] as $key_1 => $value_2) {
                $values_1[$key_1] = $value_2;
            }
            $object->labels = $values_1;
            unset($data['Labels']);
        }
        if (array_key_exists('Scope', $data)) {
            $object->scope = \WebProject\DockerApi\Library\Generated\Model\VolumeScope::from($data['Scope']);
            unset($data['Scope']);
        }
        if (array_key_exists('ClusterVolume', $data)) {
            $object->clusterVolume = $this->denormalizer->denormalize($data['ClusterVolume'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class, 'json', $context);
            unset($data['ClusterVolume']);
        }
        if (array_key_exists('Options', $data)) {
            $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data['Options'] as $key_2 => $value_3) {
                $values_2[$key_2] = $value_3;
            }
            $object->options = $values_2;
            unset($data['Options']);
        }
        if (array_key_exists('UsageData', $data) && null !== $data['UsageData']) {
            $object->usageData = $this->denormalizer->denormalize($data['UsageData'], \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class, 'json', $context);
            unset($data['UsageData']);
        } elseif (array_key_exists('UsageData', $data)) {
            $object->usageData = null;
            unset($data['UsageData']);
        }
        foreach ($data as $key_3 => $value_4) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray               = [];
        $dataArray['Name']       = $data->name;
        $dataArray['Driver']     = $data->driver;
        $dataArray['Mountpoint'] = $data->mountpoint;
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $value = $data->status;
            if (is_iterable($data->status)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->status as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->status) {
                $value = $data->status;
            }
            $dataArray['Status'] = $value;
        }
        $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
        foreach ($data->labels as $key_1 => $value_2) {
            $values_1[$key_1] = $value_2;
        }
        $dataArray['Labels'] = $values_1;
        $dataArray['Scope']  = $data->scope->value;
        if (array_key_exists('clusterVolume', get_object_vars($data)) && null !== ($data->clusterVolume ?? null)) {
            $normalized                 = $this->normalizer->normalize($data->clusterVolume, 'json', $context);
            $dataArray['ClusterVolume'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
        foreach ($data->options as $key_2 => $value_3) {
            $values_2[$key_2] = $value_3;
        }
        $dataArray['Options'] = $values_2;
        if (array_key_exists('usageData', get_object_vars($data)) && null !== ($data->usageData ?? null)) {
            $normalized_1           = $this->normalizer->normalize($data->usageData, 'json', $context);
            $dataArray['UsageData'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        foreach ($data->additionalPropertyEntries() as $key_3 => $value_4) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Volume::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
