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
            $object->setId($value);
        } elseif (array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (array_key_exists('name', $data) && null !== $data['name']) {
            $value_1 = $data['name'];
            if (is_string($data['name'])) {
                $value_1 = $data['name'];
            } elseif (null === $data['name']) {
                $value_1 = $data['name'];
            }
            $object->setName($value_1);
        } elseif (array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (array_key_exists('os_type', $data) && null !== $data['os_type']) {
            $value_2 = $data['os_type'];
            if (is_string($data['os_type'])) {
                $value_2 = $data['os_type'];
            } elseif (null === $data['os_type']) {
                $value_2 = $data['os_type'];
            }
            $object->setOsType($value_2);
        } elseif (array_key_exists('os_type', $data) && null === $data['os_type']) {
            $object->setOsType(null);
        }
        if (array_key_exists('read', $data) && null !== $data['read']) {
            $value_3 = $data['read'];
            if (is_string($data['read'])) {
                $value_3 = $data['read'];
            } elseif (null === $data['read']) {
                $value_3 = $data['read'];
            }
            $object->setRead($value_3);
        } elseif (array_key_exists('read', $data) && null === $data['read']) {
            $object->setRead(null);
        }
        if (array_key_exists('cpu_stats', $data) && null !== $data['cpu_stats']) {
            $object->setCpuStats($this->denormalizer->denormalize($data['cpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
        } elseif (array_key_exists('cpu_stats', $data) && null === $data['cpu_stats']) {
            $object->setCpuStats(null);
        }
        if (array_key_exists('memory_stats', $data)) {
            $object->setMemoryStats($this->denormalizer->denormalize($data['memory_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class, 'json', $context));
        }
        if (array_key_exists('networks', $data)) {
            $object->setNetworks($data['networks']);
        }
        if (array_key_exists('pids_stats', $data) && null !== $data['pids_stats']) {
            $object->setPidsStats($this->denormalizer->denormalize($data['pids_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerPidsStats::class, 'json', $context));
        } elseif (array_key_exists('pids_stats', $data) && null === $data['pids_stats']) {
            $object->setPidsStats(null);
        }
        if (array_key_exists('blkio_stats', $data) && null !== $data['blkio_stats']) {
            $object->setBlkioStats($this->denormalizer->denormalize($data['blkio_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class, 'json', $context));
        } elseif (array_key_exists('blkio_stats', $data) && null === $data['blkio_stats']) {
            $object->setBlkioStats(null);
        }
        if (array_key_exists('num_procs', $data) && null !== $data['num_procs']) {
            $value_4 = $data['num_procs'];
            if (is_int($data['num_procs'])) {
                $value_4 = $data['num_procs'];
            } elseif (null === $data['num_procs']) {
                $value_4 = $data['num_procs'];
            }
            $object->setNumProcs($value_4);
        } elseif (array_key_exists('num_procs', $data) && null === $data['num_procs']) {
            $object->setNumProcs(null);
        }
        if (array_key_exists('storage_stats', $data) && null !== $data['storage_stats']) {
            $object->setStorageStats($this->denormalizer->denormalize($data['storage_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class, 'json', $context));
        } elseif (array_key_exists('storage_stats', $data) && null === $data['storage_stats']) {
            $object->setStorageStats(null);
        }
        if (array_key_exists('preread', $data) && null !== $data['preread']) {
            $value_5 = $data['preread'];
            if (is_string($data['preread'])) {
                $value_5 = $data['preread'];
            } elseif (null === $data['preread']) {
                $value_5 = $data['preread'];
            }
            $object->setPreread($value_5);
        } elseif (array_key_exists('preread', $data) && null === $data['preread']) {
            $object->setPreread(null);
        }
        if (array_key_exists('precpu_stats', $data) && null !== $data['precpu_stats']) {
            $object->setPrecpuStats($this->denormalizer->denormalize($data['precpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
        } elseif (array_key_exists('precpu_stats', $data) && null === $data['precpu_stats']) {
            $object->setPrecpuStats(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $value = $data->getId();
            if (is_string($data->getId())) {
                $value = $data->getId();
            } elseif (null === $data->getId()) {
                $value = $data->getId();
            }
            $dataArray['id'] = $value;
        }
        if ($data->isInitialized('name')) {
            $value_1 = $data->getName();
            if (is_string($data->getName())) {
                $value_1 = $data->getName();
            } elseif (null === $data->getName()) {
                $value_1 = $data->getName();
            }
            $dataArray['name'] = $value_1;
        }
        if ($data->isInitialized('osType')) {
            $value_2 = $data->getOsType();
            if (is_string($data->getOsType())) {
                $value_2 = $data->getOsType();
            } elseif (null === $data->getOsType()) {
                $value_2 = $data->getOsType();
            }
            $dataArray['os_type'] = $value_2;
        }
        if ($data->isInitialized('read')) {
            $value_3 = $data->getRead();
            if (is_string($data->getRead())) {
                $value_3 = $data->getRead();
            } elseif (null === $data->getRead()) {
                $value_3 = $data->getRead();
            }
            $dataArray['read'] = $value_3;
        }
        if ($data->isInitialized('cpuStats')) {
            $dataArray['cpu_stats'] = $this->normalizer->normalize($data->getCpuStats(), 'json', $context);
        }
        if ($data->isInitialized('memoryStats') && null !== $data->getMemoryStats()) {
            $dataArray['memory_stats'] = $this->normalizer->normalize($data->getMemoryStats(), 'json', $context);
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $dataArray['networks'] = $data->getNetworks();
        }
        if ($data->isInitialized('pidsStats')) {
            $dataArray['pids_stats'] = $this->normalizer->normalize($data->getPidsStats(), 'json', $context);
        }
        if ($data->isInitialized('blkioStats')) {
            $dataArray['blkio_stats'] = $this->normalizer->normalize($data->getBlkioStats(), 'json', $context);
        }
        if ($data->isInitialized('numProcs')) {
            $value_4 = $data->getNumProcs();
            if (is_int($data->getNumProcs())) {
                $value_4 = $data->getNumProcs();
            } elseif (null === $data->getNumProcs()) {
                $value_4 = $data->getNumProcs();
            }
            $dataArray['num_procs'] = $value_4;
        }
        if ($data->isInitialized('storageStats')) {
            $dataArray['storage_stats'] = $this->normalizer->normalize($data->getStorageStats(), 'json', $context);
        }
        if ($data->isInitialized('preread')) {
            $value_5 = $data->getPreread();
            if (is_string($data->getPreread())) {
                $value_5 = $data->getPreread();
            } elseif (null === $data->getPreread()) {
                $value_5 = $data->getPreread();
            }
            $dataArray['preread'] = $value_5;
        }
        if ($data->isInitialized('precpuStats')) {
            $dataArray['precpu_stats'] = $this->normalizer->normalize($data->getPrecpuStats(), 'json', $context);
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
