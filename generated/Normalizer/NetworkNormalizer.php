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
    class NetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\Network::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Network::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\Network();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            }
            if (array_key_exists('Scope', $data)) {
                $object->setScope($data['Scope']);
                unset($data['Scope']);
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('EnableIPv4', $data)) {
                $object->setEnableIPv4($data['EnableIPv4']);
                unset($data['EnableIPv4']);
            }
            if (array_key_exists('EnableIPv6', $data)) {
                $object->setEnableIPv6($data['EnableIPv6']);
                unset($data['EnableIPv6']);
            }
            if (array_key_exists('IPAM', $data)) {
                $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \WebProject\DockerApi\Library\Generated\Model\IPAM::class, 'json', $context));
                unset($data['IPAM']);
            }
            if (array_key_exists('Internal', $data)) {
                $object->setInternal($data['Internal']);
                unset($data['Internal']);
            }
            if (array_key_exists('Attachable', $data)) {
                $object->setAttachable($data['Attachable']);
                unset($data['Attachable']);
            }
            if (array_key_exists('Ingress', $data)) {
                $object->setIngress($data['Ingress']);
                unset($data['Ingress']);
            }
            if (array_key_exists('ConfigFrom', $data)) {
                $object->setConfigFrom($this->denormalizer->denormalize($data['ConfigFrom'], \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class, 'json', $context));
                unset($data['ConfigFrom']);
            }
            if (array_key_exists('ConfigOnly', $data)) {
                $object->setConfigOnly($data['ConfigOnly']);
                unset($data['ConfigOnly']);
            }
            if (array_key_exists('Containers', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Containers'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\NetworkContainer::class, 'json', $context);
                }
                $object->setContainers($values);
                unset($data['Containers']);
            }
            if (array_key_exists('Options', $data)) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setOptions($values_1);
                unset($data['Options']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $object->setLabels($values_2);
                unset($data['Labels']);
            }
            if (array_key_exists('Peers', $data) && null !== $data['Peers']) {
                $values_3 = [];
                foreach ($data['Peers'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class, 'json', $context);
                }
                $object->setPeers($values_3);
                unset($data['Peers']);
            } elseif (array_key_exists('Peers', $data) && null === $data['Peers']) {
                $object->setPeers(null);
            }
            foreach ($data as $key_3 => $value_4) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_4;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('enableIPv4') && null !== $object->getEnableIPv4()) {
                $data['EnableIPv4'] = $object->getEnableIPv4();
            }
            if ($object->isInitialized('enableIPv6') && null !== $object->getEnableIPv6()) {
                $data['EnableIPv6'] = $object->getEnableIPv6();
            }
            if ($object->isInitialized('iPAM') && null !== $object->getIPAM()) {
                $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
            }
            if ($object->isInitialized('internal') && null !== $object->getInternal()) {
                $data['Internal'] = $object->getInternal();
            }
            if ($object->isInitialized('attachable') && null !== $object->getAttachable()) {
                $data['Attachable'] = $object->getAttachable();
            }
            if ($object->isInitialized('ingress') && null !== $object->getIngress()) {
                $data['Ingress'] = $object->getIngress();
            }
            if ($object->isInitialized('configFrom') && null !== $object->getConfigFrom()) {
                $data['ConfigFrom'] = $this->normalizer->normalize($object->getConfigFrom(), 'json', $context);
            }
            if ($object->isInitialized('configOnly') && null !== $object->getConfigOnly()) {
                $data['ConfigOnly'] = $object->getConfigOnly();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values = [];
                foreach ($object->getContainers() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Containers'] = $values;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_1 = [];
                foreach ($object->getOptions() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Options'] = $values_1;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_2 = [];
                foreach ($object->getLabels() as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $data['Labels'] = $values_2;
            }
            if ($object->isInitialized('peers') && null !== $object->getPeers()) {
                $values_3 = [];
                foreach ($object->getPeers() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Peers'] = $values_3;
            }
            foreach ($object as $key_3 => $value_4) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $data[$key_3] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\Network::class => true];
        }
    }
} else {
    class NetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\Network::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Network::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\Network();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            }
            if (array_key_exists('Scope', $data)) {
                $object->setScope($data['Scope']);
                unset($data['Scope']);
            }
            if (array_key_exists('Driver', $data)) {
                $object->setDriver($data['Driver']);
                unset($data['Driver']);
            }
            if (array_key_exists('EnableIPv4', $data)) {
                $object->setEnableIPv4($data['EnableIPv4']);
                unset($data['EnableIPv4']);
            }
            if (array_key_exists('EnableIPv6', $data)) {
                $object->setEnableIPv6($data['EnableIPv6']);
                unset($data['EnableIPv6']);
            }
            if (array_key_exists('IPAM', $data)) {
                $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \WebProject\DockerApi\Library\Generated\Model\IPAM::class, 'json', $context));
                unset($data['IPAM']);
            }
            if (array_key_exists('Internal', $data)) {
                $object->setInternal($data['Internal']);
                unset($data['Internal']);
            }
            if (array_key_exists('Attachable', $data)) {
                $object->setAttachable($data['Attachable']);
                unset($data['Attachable']);
            }
            if (array_key_exists('Ingress', $data)) {
                $object->setIngress($data['Ingress']);
                unset($data['Ingress']);
            }
            if (array_key_exists('ConfigFrom', $data)) {
                $object->setConfigFrom($this->denormalizer->denormalize($data['ConfigFrom'], \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class, 'json', $context));
                unset($data['ConfigFrom']);
            }
            if (array_key_exists('ConfigOnly', $data)) {
                $object->setConfigOnly($data['ConfigOnly']);
                unset($data['ConfigOnly']);
            }
            if (array_key_exists('Containers', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Containers'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\NetworkContainer::class, 'json', $context);
                }
                $object->setContainers($values);
                unset($data['Containers']);
            }
            if (array_key_exists('Options', $data)) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setOptions($values_1);
                unset($data['Options']);
            }
            if (array_key_exists('Labels', $data)) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $object->setLabels($values_2);
                unset($data['Labels']);
            }
            if (array_key_exists('Peers', $data) && null !== $data['Peers']) {
                $values_3 = [];
                foreach ($data['Peers'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class, 'json', $context);
                }
                $object->setPeers($values_3);
                unset($data['Peers']);
            } elseif (array_key_exists('Peers', $data) && null === $data['Peers']) {
                $object->setPeers(null);
            }
            foreach ($data as $key_3 => $value_4) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_4;
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
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('enableIPv4') && null !== $object->getEnableIPv4()) {
                $data['EnableIPv4'] = $object->getEnableIPv4();
            }
            if ($object->isInitialized('enableIPv6') && null !== $object->getEnableIPv6()) {
                $data['EnableIPv6'] = $object->getEnableIPv6();
            }
            if ($object->isInitialized('iPAM') && null !== $object->getIPAM()) {
                $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
            }
            if ($object->isInitialized('internal') && null !== $object->getInternal()) {
                $data['Internal'] = $object->getInternal();
            }
            if ($object->isInitialized('attachable') && null !== $object->getAttachable()) {
                $data['Attachable'] = $object->getAttachable();
            }
            if ($object->isInitialized('ingress') && null !== $object->getIngress()) {
                $data['Ingress'] = $object->getIngress();
            }
            if ($object->isInitialized('configFrom') && null !== $object->getConfigFrom()) {
                $data['ConfigFrom'] = $this->normalizer->normalize($object->getConfigFrom(), 'json', $context);
            }
            if ($object->isInitialized('configOnly') && null !== $object->getConfigOnly()) {
                $data['ConfigOnly'] = $object->getConfigOnly();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values = [];
                foreach ($object->getContainers() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Containers'] = $values;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_1 = [];
                foreach ($object->getOptions() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Options'] = $values_1;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_2 = [];
                foreach ($object->getLabels() as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $data['Labels'] = $values_2;
            }
            if ($object->isInitialized('peers') && null !== $object->getPeers()) {
                $values_3 = [];
                foreach ($object->getPeers() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Peers'] = $values_3;
            }
            foreach ($object as $key_3 => $value_4) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $data[$key_3] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\Network::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
