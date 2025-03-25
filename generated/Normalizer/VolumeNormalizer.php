<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
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
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\Volume();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('Mountpoint', $data)) {
                $object->setMountpoint($data['Mountpoint']);
                unset($data['Mountpoint']);
            }
            if (array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
                unset($data['CreatedAt']);
            }
            if (array_key_exists('Status', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Status'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\VolumeStatusItem::class, 'json', $context);
                }
                $object->setStatus($values);
                unset($data['Status']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
                unset($data['Labels']);
            }
            if (array_key_exists('Scope', $data)) {
                $object->setScope($data['Scope']);
                unset($data['Scope']);
            }
            if (array_key_exists('ClusterVolume', $data)) {
                $object->setClusterVolume($this->denormalizer->denormalize($data['ClusterVolume'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class, 'json', $context));
                unset($data['ClusterVolume']);
            }
            if (array_key_exists('Options', $data)) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $object->setOptions($values_2);
                unset($data['Options']);
            }
            if (array_key_exists('UsageData', $data) && null !== $data['UsageData']) {
                $object->setUsageData($this->denormalizer->denormalize($data['UsageData'], \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class, 'json', $context));
                unset($data['UsageData']);
            } elseif (array_key_exists('UsageData', $data) && null === $data['UsageData']) {
                $object->setUsageData(null);
            }
            foreach ($data as $key_3 => $value_3) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data               = [];
            $data['Name']       = $object->getName();
            $data['Driver']     = $object->getDriver();
            $data['Mountpoint'] = $object->getMountpoint();
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $values = [];
                foreach ($object->getStatus() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Status'] = $values;
            }
            $values_1 = [];
            foreach ($object->getLabels() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['Labels'] = $values_1;
            $data['Scope']  = $object->getScope();
            if ($object->isInitialized('clusterVolume') && null !== $object->getClusterVolume()) {
                $data['ClusterVolume'] = $this->normalizer->normalize($object->getClusterVolume(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getOptions() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $data['Options'] = $values_2;
            if ($object->isInitialized('usageData') && null !== $object->getUsageData()) {
                $data['UsageData'] = $this->normalizer->normalize($object->getUsageData(), 'json', $context);
            }
            foreach ($object as $key_3 => $value_3) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $data[$key_3] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\Volume::class => true];
        }
    }
} else {
    class VolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\Volume::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Volume::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\Volume();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('Mountpoint', $data)) {
                $object->setMountpoint($data['Mountpoint']);
                unset($data['Mountpoint']);
            }
            if (array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
                unset($data['CreatedAt']);
            }
            if (array_key_exists('Status', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Status'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\VolumeStatusItem::class, 'json', $context);
                }
                $object->setStatus($values);
                unset($data['Status']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
                unset($data['Labels']);
            }
            if (array_key_exists('Scope', $data)) {
                $object->setScope($data['Scope']);
                unset($data['Scope']);
            }
            if (array_key_exists('ClusterVolume', $data)) {
                $object->setClusterVolume($this->denormalizer->denormalize($data['ClusterVolume'], \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class, 'json', $context));
                unset($data['ClusterVolume']);
            }
            if (array_key_exists('Options', $data)) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $object->setOptions($values_2);
                unset($data['Options']);
            }
            if (array_key_exists('UsageData', $data) && null !== $data['UsageData']) {
                $object->setUsageData($this->denormalizer->denormalize($data['UsageData'], \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class, 'json', $context));
                unset($data['UsageData']);
            } elseif (array_key_exists('UsageData', $data) && null === $data['UsageData']) {
                $object->setUsageData(null);
            }
            foreach ($data as $key_3 => $value_3) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_3;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data               = [];
            $data['Name']       = $object->getName();
            $data['Driver']     = $object->getDriver();
            $data['Mountpoint'] = $object->getMountpoint();
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $values = [];
                foreach ($object->getStatus() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Status'] = $values;
            }
            $values_1 = [];
            foreach ($object->getLabels() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['Labels'] = $values_1;
            $data['Scope']  = $object->getScope();
            if ($object->isInitialized('clusterVolume') && null !== $object->getClusterVolume()) {
                $data['ClusterVolume'] = $this->normalizer->normalize($object->getClusterVolume(), 'json', $context);
            }
            $values_2 = [];
            foreach ($object->getOptions() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $data['Options'] = $values_2;
            if ($object->isInitialized('usageData') && null !== $object->getUsageData()) {
                $data['UsageData'] = $this->normalizer->normalize($object->getUsageData(), 'json', $context);
            }
            foreach ($object as $key_3 => $value_3) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $data[$key_3] = $value_3;
                }
            }

            return $data;
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
}
