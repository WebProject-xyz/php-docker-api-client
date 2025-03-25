<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (array_key_exists('read', $data)) {
                $object->setRead(DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['read']));
                unset($data['read']);
            }
            if (array_key_exists('preread', $data)) {
                $object->setPreread(DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['preread']));
                unset($data['preread']);
            }
            if (array_key_exists('pids_stats', $data) && null !== $data['pids_stats']) {
                $object->setPidsStats($this->denormalizer->denormalize($data['pids_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerPidsStats::class, 'json', $context));
                unset($data['pids_stats']);
            } elseif (array_key_exists('pids_stats', $data) && null === $data['pids_stats']) {
                $object->setPidsStats(null);
            }
            if (array_key_exists('blkio_stats', $data) && null !== $data['blkio_stats']) {
                $object->setBlkioStats($this->denormalizer->denormalize($data['blkio_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class, 'json', $context));
                unset($data['blkio_stats']);
            } elseif (array_key_exists('blkio_stats', $data) && null === $data['blkio_stats']) {
                $object->setBlkioStats(null);
            }
            if (array_key_exists('num_procs', $data)) {
                $object->setNumProcs($data['num_procs']);
                unset($data['num_procs']);
            }
            if (array_key_exists('storage_stats', $data) && null !== $data['storage_stats']) {
                $object->setStorageStats($this->denormalizer->denormalize($data['storage_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class, 'json', $context));
                unset($data['storage_stats']);
            } elseif (array_key_exists('storage_stats', $data) && null === $data['storage_stats']) {
                $object->setStorageStats(null);
            }
            if (array_key_exists('cpu_stats', $data) && null !== $data['cpu_stats']) {
                $object->setCpuStats($this->denormalizer->denormalize($data['cpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
                unset($data['cpu_stats']);
            } elseif (array_key_exists('cpu_stats', $data) && null === $data['cpu_stats']) {
                $object->setCpuStats(null);
            }
            if (array_key_exists('precpu_stats', $data) && null !== $data['precpu_stats']) {
                $object->setPrecpuStats($this->denormalizer->denormalize($data['precpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
                unset($data['precpu_stats']);
            } elseif (array_key_exists('precpu_stats', $data) && null === $data['precpu_stats']) {
                $object->setPrecpuStats(null);
            }
            if (array_key_exists('memory_stats', $data)) {
                $object->setMemoryStats($this->denormalizer->denormalize($data['memory_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class, 'json', $context));
                unset($data['memory_stats']);
            }
            if (array_key_exists('networks', $data) && null !== $data['networks']) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['networks'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setNetworks($values);
                unset($data['networks']);
            } elseif (array_key_exists('networks', $data) && null === $data['networks']) {
                $object->setNetworks(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('read') && null !== $object->getRead()) {
                $data['read'] = $object->getRead()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('preread') && null !== $object->getPreread()) {
                $data['preread'] = $object->getPreread()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('pidsStats') && null !== $object->getPidsStats()) {
                $data['pids_stats'] = $this->normalizer->normalize($object->getPidsStats(), 'json', $context);
            }
            if ($object->isInitialized('blkioStats') && null !== $object->getBlkioStats()) {
                $data['blkio_stats'] = $this->normalizer->normalize($object->getBlkioStats(), 'json', $context);
            }
            if ($object->isInitialized('numProcs') && null !== $object->getNumProcs()) {
                $data['num_procs'] = $object->getNumProcs();
            }
            if ($object->isInitialized('storageStats') && null !== $object->getStorageStats()) {
                $data['storage_stats'] = $this->normalizer->normalize($object->getStorageStats(), 'json', $context);
            }
            if ($object->isInitialized('cpuStats') && null !== $object->getCpuStats()) {
                $data['cpu_stats'] = $this->normalizer->normalize($object->getCpuStats(), 'json', $context);
            }
            if ($object->isInitialized('precpuStats') && null !== $object->getPrecpuStats()) {
                $data['precpu_stats'] = $this->normalizer->normalize($object->getPrecpuStats(), 'json', $context);
            }
            if ($object->isInitialized('memoryStats') && null !== $object->getMemoryStats()) {
                $data['memory_stats'] = $this->normalizer->normalize($object->getMemoryStats(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values = [];
                foreach ($object->getNetworks() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['networks'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class => true];
        }
    }
} else {
    class ContainerStatsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class === get_class($data);
        }

        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (array_key_exists('read', $data)) {
                $object->setRead(DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['read']));
                unset($data['read']);
            }
            if (array_key_exists('preread', $data)) {
                $object->setPreread(DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['preread']));
                unset($data['preread']);
            }
            if (array_key_exists('pids_stats', $data) && null !== $data['pids_stats']) {
                $object->setPidsStats($this->denormalizer->denormalize($data['pids_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerPidsStats::class, 'json', $context));
                unset($data['pids_stats']);
            } elseif (array_key_exists('pids_stats', $data) && null === $data['pids_stats']) {
                $object->setPidsStats(null);
            }
            if (array_key_exists('blkio_stats', $data) && null !== $data['blkio_stats']) {
                $object->setBlkioStats($this->denormalizer->denormalize($data['blkio_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class, 'json', $context));
                unset($data['blkio_stats']);
            } elseif (array_key_exists('blkio_stats', $data) && null === $data['blkio_stats']) {
                $object->setBlkioStats(null);
            }
            if (array_key_exists('num_procs', $data)) {
                $object->setNumProcs($data['num_procs']);
                unset($data['num_procs']);
            }
            if (array_key_exists('storage_stats', $data) && null !== $data['storage_stats']) {
                $object->setStorageStats($this->denormalizer->denormalize($data['storage_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class, 'json', $context));
                unset($data['storage_stats']);
            } elseif (array_key_exists('storage_stats', $data) && null === $data['storage_stats']) {
                $object->setStorageStats(null);
            }
            if (array_key_exists('cpu_stats', $data) && null !== $data['cpu_stats']) {
                $object->setCpuStats($this->denormalizer->denormalize($data['cpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
                unset($data['cpu_stats']);
            } elseif (array_key_exists('cpu_stats', $data) && null === $data['cpu_stats']) {
                $object->setCpuStats(null);
            }
            if (array_key_exists('precpu_stats', $data) && null !== $data['precpu_stats']) {
                $object->setPrecpuStats($this->denormalizer->denormalize($data['precpu_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class, 'json', $context));
                unset($data['precpu_stats']);
            } elseif (array_key_exists('precpu_stats', $data) && null === $data['precpu_stats']) {
                $object->setPrecpuStats(null);
            }
            if (array_key_exists('memory_stats', $data)) {
                $object->setMemoryStats($this->denormalizer->denormalize($data['memory_stats'], \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class, 'json', $context));
                unset($data['memory_stats']);
            }
            if (array_key_exists('networks', $data) && null !== $data['networks']) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['networks'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setNetworks($values);
                unset($data['networks']);
            } elseif (array_key_exists('networks', $data) && null === $data['networks']) {
                $object->setNetworks(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('read') && null !== $object->getRead()) {
                $data['read'] = $object->getRead()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('preread') && null !== $object->getPreread()) {
                $data['preread'] = $object->getPreread()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('pidsStats') && null !== $object->getPidsStats()) {
                $data['pids_stats'] = $this->normalizer->normalize($object->getPidsStats(), 'json', $context);
            }
            if ($object->isInitialized('blkioStats') && null !== $object->getBlkioStats()) {
                $data['blkio_stats'] = $this->normalizer->normalize($object->getBlkioStats(), 'json', $context);
            }
            if ($object->isInitialized('numProcs') && null !== $object->getNumProcs()) {
                $data['num_procs'] = $object->getNumProcs();
            }
            if ($object->isInitialized('storageStats') && null !== $object->getStorageStats()) {
                $data['storage_stats'] = $this->normalizer->normalize($object->getStorageStats(), 'json', $context);
            }
            if ($object->isInitialized('cpuStats') && null !== $object->getCpuStats()) {
                $data['cpu_stats'] = $this->normalizer->normalize($object->getCpuStats(), 'json', $context);
            }
            if ($object->isInitialized('precpuStats') && null !== $object->getPrecpuStats()) {
                $data['precpu_stats'] = $this->normalizer->normalize($object->getPrecpuStats(), 'json', $context);
            }
            if ($object->isInitialized('memoryStats') && null !== $object->getMemoryStats()) {
                $data['memory_stats'] = $this->normalizer->normalize($object->getMemoryStats(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values = [];
                foreach ($object->getNetworks() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['networks'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
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
}
