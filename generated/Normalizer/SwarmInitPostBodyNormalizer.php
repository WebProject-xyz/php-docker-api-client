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
    class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ListenAddr', $data)) {
                $object->setListenAddr($data['ListenAddr']);
                unset($data['ListenAddr']);
            }
            if (array_key_exists('AdvertiseAddr', $data)) {
                $object->setAdvertiseAddr($data['AdvertiseAddr']);
                unset($data['AdvertiseAddr']);
            }
            if (array_key_exists('DataPathAddr', $data)) {
                $object->setDataPathAddr($data['DataPathAddr']);
                unset($data['DataPathAddr']);
            }
            if (array_key_exists('DataPathPort', $data)) {
                $object->setDataPathPort($data['DataPathPort']);
                unset($data['DataPathPort']);
            }
            if (array_key_exists('DefaultAddrPool', $data)) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
                unset($data['DefaultAddrPool']);
            }
            if (array_key_exists('ForceNewCluster', $data)) {
                $object->setForceNewCluster($data['ForceNewCluster']);
                unset($data['ForceNewCluster']);
            }
            if (array_key_exists('SubnetSize', $data)) {
                $object->setSubnetSize($data['SubnetSize']);
                unset($data['SubnetSize']);
            }
            if (array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class, 'json', $context));
                unset($data['Spec']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['ListenAddr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
                $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
            }
            if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
                $data['DataPathAddr'] = $object->getDataPathAddr();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('forceNewCluster') && null !== $object->getForceNewCluster()) {
                $data['ForceNewCluster'] = $object->getForceNewCluster();
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class => true];
        }
    }
} else {
    class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ListenAddr', $data)) {
                $object->setListenAddr($data['ListenAddr']);
                unset($data['ListenAddr']);
            }
            if (array_key_exists('AdvertiseAddr', $data)) {
                $object->setAdvertiseAddr($data['AdvertiseAddr']);
                unset($data['AdvertiseAddr']);
            }
            if (array_key_exists('DataPathAddr', $data)) {
                $object->setDataPathAddr($data['DataPathAddr']);
                unset($data['DataPathAddr']);
            }
            if (array_key_exists('DataPathPort', $data)) {
                $object->setDataPathPort($data['DataPathPort']);
                unset($data['DataPathPort']);
            }
            if (array_key_exists('DefaultAddrPool', $data)) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
                unset($data['DefaultAddrPool']);
            }
            if (array_key_exists('ForceNewCluster', $data)) {
                $object->setForceNewCluster($data['ForceNewCluster']);
                unset($data['ForceNewCluster']);
            }
            if (array_key_exists('SubnetSize', $data)) {
                $object->setSubnetSize($data['SubnetSize']);
                unset($data['SubnetSize']);
            }
            if (array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class, 'json', $context));
                unset($data['Spec']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['ListenAddr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
                $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
            }
            if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
                $data['DataPathAddr'] = $object->getDataPathAddr();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('forceNewCluster') && null !== $object->getForceNewCluster()) {
                $data['ForceNewCluster'] = $object->getForceNewCluster();
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
