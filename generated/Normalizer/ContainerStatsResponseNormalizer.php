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
use function is_int;
use function is_object;
use function is_string;

class ContainerStatsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('id', $data) && null !== $data['id']) {
            $value = $data['id'];
            if (is_string($data['id'])) {
                $value = $data['id'];
            } elseif (null === $data['id']) {
                $value = $data['id'];
            }
            $object->id = $value;
            unset($data['id']);
        } elseif (array_key_exists('id', $data)) {
            $object->id = null;
            unset($data['id']);
        }
        if (array_key_exists('name', $data) && null !== $data['name']) {
            $value_1 = $data['name'];
            if (is_string($data['name'])) {
                $value_1 = $data['name'];
            } elseif (null === $data['name']) {
                $value_1 = $data['name'];
            }
            $object->name = $value_1;
            unset($data['name']);
        } elseif (array_key_exists('name', $data)) {
            $object->name = null;
            unset($data['name']);
        }
        if (array_key_exists('os_type', $data) && null !== $data['os_type']) {
            $value_2 = $data['os_type'];
            if (is_string($data['os_type'])) {
                $value_2 = $data['os_type'];
            } elseif (null === $data['os_type']) {
                $value_2 = $data['os_type'];
            }
            $object->osType = $value_2;
            unset($data['os_type']);
        } elseif (array_key_exists('os_type', $data)) {
            $object->osType = null;
            unset($data['os_type']);
        }
        if (array_key_exists('read', $data) && null !== $data['read']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['read']);
            if (false === $date) {
                if (is_string($data['read']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['read'])) {
                    try {
                        $date = new DateTime($data['read']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['read'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['read'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->read = $date;
            unset($data['read']);
        } elseif (array_key_exists('read', $data)) {
            $object->read = null;
            unset($data['read']);
        }
        if (array_key_exists('cpu_stats', $data) && null !== $data['cpu_stats']) {
            $object->cpuStats = $this->denormalizer->denormalize($data['cpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context);
            unset($data['cpu_stats']);
        } elseif (array_key_exists('cpu_stats', $data)) {
            $object->cpuStats = null;
            unset($data['cpu_stats']);
        }
        if (array_key_exists('memory_stats', $data)) {
            $object->memoryStats = $this->denormalizer->denormalize($data['memory_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class, 'json', $context);
            unset($data['memory_stats']);
        }
        if (array_key_exists('networks', $data)) {
            $object->networks = $data['networks'];
            unset($data['networks']);
        }
        if (array_key_exists('pids_stats', $data) && null !== $data['pids_stats']) {
            $object->pidsStats = $this->denormalizer->denormalize($data['pids_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerPidsStats::class, 'json', $context);
            unset($data['pids_stats']);
        } elseif (array_key_exists('pids_stats', $data)) {
            $object->pidsStats = null;
            unset($data['pids_stats']);
        }
        if (array_key_exists('blkio_stats', $data) && null !== $data['blkio_stats']) {
            $object->blkioStats = $this->denormalizer->denormalize($data['blkio_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class, 'json', $context);
            unset($data['blkio_stats']);
        } elseif (array_key_exists('blkio_stats', $data)) {
            $object->blkioStats = null;
            unset($data['blkio_stats']);
        }
        if (array_key_exists('num_procs', $data) && null !== $data['num_procs']) {
            $value_3 = $data['num_procs'];
            if (is_int($data['num_procs'])) {
                $value_3 = $data['num_procs'];
            } elseif (null === $data['num_procs']) {
                $value_3 = $data['num_procs'];
            }
            $object->numProcs = $value_3;
            unset($data['num_procs']);
        } elseif (array_key_exists('num_procs', $data)) {
            $object->numProcs = null;
            unset($data['num_procs']);
        }
        if (array_key_exists('storage_stats', $data) && null !== $data['storage_stats']) {
            $object->storageStats = $this->denormalizer->denormalize($data['storage_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class, 'json', $context);
            unset($data['storage_stats']);
        } elseif (array_key_exists('storage_stats', $data)) {
            $object->storageStats = null;
            unset($data['storage_stats']);
        }
        if (array_key_exists('preread', $data) && null !== $data['preread']) {
            $date_1 = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['preread']);
            if (false === $date_1) {
                if (is_string($data['preread']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['preread'])) {
                    try {
                        $date_1 = new DateTime($data['preread']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['preread'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['preread'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->preread = $date_1;
            unset($data['preread']);
        } elseif (array_key_exists('preread', $data)) {
            $object->preread = null;
            unset($data['preread']);
        }
        if (array_key_exists('precpu_stats', $data) && null !== $data['precpu_stats']) {
            $object->precpuStats = $this->denormalizer->denormalize($data['precpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context);
            unset($data['precpu_stats']);
        } elseif (array_key_exists('precpu_stats', $data)) {
            $object->precpuStats = null;
            unset($data['precpu_stats']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $value = $data->id;
            if (is_string($data->id)) {
                $value = $data->id;
            } elseif (null === $data->id) {
                $value = $data->id;
            }
            $dataArray['id'] = $value;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value_1 = $data->name;
            if (is_string($data->name)) {
                $value_1 = $data->name;
            } elseif (null === $data->name) {
                $value_1 = $data->name;
            }
            $dataArray['name'] = $value_1;
        }
        if (array_key_exists('osType', get_object_vars($data)) && null !== ($data->osType ?? null)) {
            $value_2 = $data->osType;
            if (is_string($data->osType)) {
                $value_2 = $data->osType;
            } elseif (null === $data->osType) {
                $value_2 = $data->osType;
            }
            $dataArray['os_type'] = $value_2;
        }
        if (array_key_exists('read', get_object_vars($data)) && null !== ($data->read ?? null)) {
            $dataArray['read'] = $data->read?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('cpuStats', get_object_vars($data)) && null !== ($data->cpuStats ?? null)) {
            $normalized             = $this->normalizer->normalize($data->cpuStats, 'json', $context);
            $dataArray['cpu_stats'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('memoryStats', get_object_vars($data)) && null !== ($data->memoryStats ?? null)) {
            $normalized_1              = $this->normalizer->normalize($data->memoryStats, 'json', $context);
            $dataArray['memory_stats'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('networks', get_object_vars($data)) && null !== ($data->networks ?? null)) {
            $dataArray['networks'] = $data->networks;
        }
        if (array_key_exists('pidsStats', get_object_vars($data)) && null !== ($data->pidsStats ?? null)) {
            $normalized_2            = $this->normalizer->normalize($data->pidsStats, 'json', $context);
            $dataArray['pids_stats'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('blkioStats', get_object_vars($data)) && null !== ($data->blkioStats ?? null)) {
            $normalized_3             = $this->normalizer->normalize($data->blkioStats, 'json', $context);
            $dataArray['blkio_stats'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('numProcs', get_object_vars($data)) && null !== ($data->numProcs ?? null)) {
            $value_3 = $data->numProcs;
            if (is_int($data->numProcs)) {
                $value_3 = $data->numProcs;
            } elseif (null === $data->numProcs) {
                $value_3 = $data->numProcs;
            }
            $dataArray['num_procs'] = $value_3;
        }
        if (array_key_exists('storageStats', get_object_vars($data)) && null !== ($data->storageStats ?? null)) {
            $normalized_4               = $this->normalizer->normalize($data->storageStats, 'json', $context);
            $dataArray['storage_stats'] = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('preread', get_object_vars($data)) && null !== ($data->preread ?? null)) {
            $dataArray['preread'] = $data->preread?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('precpuStats', get_object_vars($data)) && null !== ($data->precpuStats ?? null)) {
            $normalized_5              = $this->normalizer->normalize($data->precpuStats, 'json', $context);
            $dataArray['precpu_stats'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
