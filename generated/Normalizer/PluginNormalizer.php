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
    class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\Plugin::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Plugin::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\Plugin();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Enabled', $data)) {
                $object->setEnabled($data['Enabled']);
                unset($data['Enabled']);
            }
            if (array_key_exists('Settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['Settings'], \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class, 'json', $context));
                unset($data['Settings']);
            }
            if (array_key_exists('PluginReference', $data)) {
                $object->setPluginReference($data['PluginReference']);
                unset($data['PluginReference']);
            }
            if (array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class, 'json', $context));
                unset($data['Config']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            $data['Name']     = $object->getName();
            $data['Enabled']  = $object->getEnabled();
            $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            if ($object->isInitialized('pluginReference') && null !== $object->getPluginReference()) {
                $data['PluginReference'] = $object->getPluginReference();
            }
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\Plugin::class => true];
        }
    }
} else {
    class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\Plugin::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Plugin::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\Plugin();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Enabled', $data)) {
                $object->setEnabled($data['Enabled']);
                unset($data['Enabled']);
            }
            if (array_key_exists('Settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['Settings'], \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class, 'json', $context));
                unset($data['Settings']);
            }
            if (array_key_exists('PluginReference', $data)) {
                $object->setPluginReference($data['PluginReference']);
                unset($data['PluginReference']);
            }
            if (array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class, 'json', $context));
                unset($data['Config']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            $data['Name']     = $object->getName();
            $data['Enabled']  = $object->getEnabled();
            $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            if ($object->isInitialized('pluginReference') && null !== $object->getPluginReference()) {
                $data['PluginReference'] = $object->getPluginReference();
            }
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\Plugin::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
