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
    class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
                unset($data['DockerVersion']);
            }
            if (array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (array_key_exists('Documentation', $data)) {
                $object->setDocumentation($data['Documentation']);
                unset($data['Documentation']);
            }
            if (array_key_exists('Interface', $data)) {
                $object->setInterface($this->denormalizer->denormalize($data['Interface'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class, 'json', $context));
                unset($data['Interface']);
            }
            if (array_key_exists('Entrypoint', $data)) {
                $values = [];
                foreach ($data['Entrypoint'] as $value) {
                    $values[] = $value;
                }
                $object->setEntrypoint($values);
                unset($data['Entrypoint']);
            }
            if (array_key_exists('WorkDir', $data)) {
                $object->setWorkDir($data['WorkDir']);
                unset($data['WorkDir']);
            }
            if (array_key_exists('User', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['User'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class, 'json', $context));
                unset($data['User']);
            }
            if (array_key_exists('Network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['Network'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigNetwork::class, 'json', $context));
                unset($data['Network']);
            }
            if (array_key_exists('Linux', $data)) {
                $object->setLinux($this->denormalizer->denormalize($data['Linux'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigLinux::class, 'json', $context));
                unset($data['Linux']);
            }
            if (array_key_exists('PropagatedMount', $data)) {
                $object->setPropagatedMount($data['PropagatedMount']);
                unset($data['PropagatedMount']);
            }
            if (array_key_exists('IpcHost', $data)) {
                $object->setIpcHost($data['IpcHost']);
                unset($data['IpcHost']);
            }
            if (array_key_exists('PidHost', $data)) {
                $object->setPidHost($data['PidHost']);
                unset($data['PidHost']);
            }
            if (array_key_exists('Mounts', $data)) {
                $values_1 = [];
                foreach ($data['Mounts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\PluginMount::class, 'json', $context);
                }
                $object->setMounts($values_1);
                unset($data['Mounts']);
            }
            if (array_key_exists('Env', $data)) {
                $values_2 = [];
                foreach ($data['Env'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class, 'json', $context);
                }
                $object->setEnv($values_2);
                unset($data['Env']);
            }
            if (array_key_exists('Args', $data)) {
                $object->setArgs($this->denormalizer->denormalize($data['Args'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigArgs::class, 'json', $context));
                unset($data['Args']);
            }
            if (array_key_exists('rootfs', $data)) {
                $object->setRootfs($this->denormalizer->denormalize($data['rootfs'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class, 'json', $context));
                unset($data['rootfs']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            $data['Description']   = $object->getDescription();
            $data['Documentation'] = $object->getDocumentation();
            $data['Interface']     = $this->normalizer->normalize($object->getInterface(), 'json', $context);
            $values                = [];
            foreach ($object->getEntrypoint() as $value) {
                $values[] = $value;
            }
            $data['Entrypoint'] = $values;
            $data['WorkDir']    = $object->getWorkDir();
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }
            $data['Network']         = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            $data['Linux']           = $this->normalizer->normalize($object->getLinux(), 'json', $context);
            $data['PropagatedMount'] = $object->getPropagatedMount();
            $data['IpcHost']         = $object->getIpcHost();
            $data['PidHost']         = $object->getPidHost();
            $values_1                = [];
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Mounts'] = $values_1;
            $values_2       = [];
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Env']  = $values_2;
            $data['Args'] = $this->normalizer->normalize($object->getArgs(), 'json', $context);
            if ($object->isInitialized('rootfs') && null !== $object->getRootfs()) {
                $data['rootfs'] = $this->normalizer->normalize($object->getRootfs(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\PluginConfig::class => true];
        }
    }
} else {
    class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
                unset($data['DockerVersion']);
            }
            if (array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (array_key_exists('Documentation', $data)) {
                $object->setDocumentation($data['Documentation']);
                unset($data['Documentation']);
            }
            if (array_key_exists('Interface', $data)) {
                $object->setInterface($this->denormalizer->denormalize($data['Interface'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class, 'json', $context));
                unset($data['Interface']);
            }
            if (array_key_exists('Entrypoint', $data)) {
                $values = [];
                foreach ($data['Entrypoint'] as $value) {
                    $values[] = $value;
                }
                $object->setEntrypoint($values);
                unset($data['Entrypoint']);
            }
            if (array_key_exists('WorkDir', $data)) {
                $object->setWorkDir($data['WorkDir']);
                unset($data['WorkDir']);
            }
            if (array_key_exists('User', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['User'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class, 'json', $context));
                unset($data['User']);
            }
            if (array_key_exists('Network', $data)) {
                $object->setNetwork($this->denormalizer->denormalize($data['Network'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigNetwork::class, 'json', $context));
                unset($data['Network']);
            }
            if (array_key_exists('Linux', $data)) {
                $object->setLinux($this->denormalizer->denormalize($data['Linux'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigLinux::class, 'json', $context));
                unset($data['Linux']);
            }
            if (array_key_exists('PropagatedMount', $data)) {
                $object->setPropagatedMount($data['PropagatedMount']);
                unset($data['PropagatedMount']);
            }
            if (array_key_exists('IpcHost', $data)) {
                $object->setIpcHost($data['IpcHost']);
                unset($data['IpcHost']);
            }
            if (array_key_exists('PidHost', $data)) {
                $object->setPidHost($data['PidHost']);
                unset($data['PidHost']);
            }
            if (array_key_exists('Mounts', $data)) {
                $values_1 = [];
                foreach ($data['Mounts'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\PluginMount::class, 'json', $context);
                }
                $object->setMounts($values_1);
                unset($data['Mounts']);
            }
            if (array_key_exists('Env', $data)) {
                $values_2 = [];
                foreach ($data['Env'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class, 'json', $context);
                }
                $object->setEnv($values_2);
                unset($data['Env']);
            }
            if (array_key_exists('Args', $data)) {
                $object->setArgs($this->denormalizer->denormalize($data['Args'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigArgs::class, 'json', $context));
                unset($data['Args']);
            }
            if (array_key_exists('rootfs', $data)) {
                $object->setRootfs($this->denormalizer->denormalize($data['rootfs'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class, 'json', $context));
                unset($data['rootfs']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            $data['Description']   = $object->getDescription();
            $data['Documentation'] = $object->getDocumentation();
            $data['Interface']     = $this->normalizer->normalize($object->getInterface(), 'json', $context);
            $values                = [];
            foreach ($object->getEntrypoint() as $value) {
                $values[] = $value;
            }
            $data['Entrypoint'] = $values;
            $data['WorkDir']    = $object->getWorkDir();
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }
            $data['Network']         = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
            $data['Linux']           = $this->normalizer->normalize($object->getLinux(), 'json', $context);
            $data['PropagatedMount'] = $object->getPropagatedMount();
            $data['IpcHost']         = $object->getIpcHost();
            $data['PidHost']         = $object->getPidHost();
            $values_1                = [];
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Mounts'] = $values_1;
            $values_2       = [];
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Env']  = $values_2;
            $data['Args'] = $this->normalizer->normalize($object->getArgs(), 'json', $context);
            if ($object->isInitialized('rootfs') && null !== $object->getRootfs()) {
                $data['rootfs'] = $this->normalizer->normalize($object->getRootfs(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\PluginConfig::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
