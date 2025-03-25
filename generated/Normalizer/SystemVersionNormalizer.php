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
    class SystemVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\SystemVersion();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Platform', $data)) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class, 'json', $context));
                unset($data['Platform']);
            }
            if (array_key_exists('Components', $data)) {
                $values = [];
                foreach ($data['Components'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class, 'json', $context);
                }
                $object->setComponents($values);
                unset($data['Components']);
            }
            if (array_key_exists('Version', $data)) {
                $object->setVersion($data['Version']);
                unset($data['Version']);
            }
            if (array_key_exists('ApiVersion', $data)) {
                $object->setApiVersion($data['ApiVersion']);
                unset($data['ApiVersion']);
            }
            if (array_key_exists('MinAPIVersion', $data)) {
                $object->setMinAPIVersion($data['MinAPIVersion']);
                unset($data['MinAPIVersion']);
            }
            if (array_key_exists('GitCommit', $data)) {
                $object->setGitCommit($data['GitCommit']);
                unset($data['GitCommit']);
            }
            if (array_key_exists('GoVersion', $data)) {
                $object->setGoVersion($data['GoVersion']);
                unset($data['GoVersion']);
            }
            if (array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
                unset($data['Os']);
            }
            if (array_key_exists('Arch', $data)) {
                $object->setArch($data['Arch']);
                unset($data['Arch']);
            }
            if (array_key_exists('KernelVersion', $data)) {
                $object->setKernelVersion($data['KernelVersion']);
                unset($data['KernelVersion']);
            }
            if (array_key_exists('Experimental', $data)) {
                $object->setExperimental($data['Experimental']);
                unset($data['Experimental']);
            }
            if (array_key_exists('BuildTime', $data)) {
                $object->setBuildTime($data['BuildTime']);
                unset($data['BuildTime']);
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
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('components') && null !== $object->getComponents()) {
                $values = [];
                foreach ($object->getComponents() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Components'] = $values;
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $object->getVersion();
            }
            if ($object->isInitialized('apiVersion') && null !== $object->getApiVersion()) {
                $data['ApiVersion'] = $object->getApiVersion();
            }
            if ($object->isInitialized('minAPIVersion') && null !== $object->getMinAPIVersion()) {
                $data['MinAPIVersion'] = $object->getMinAPIVersion();
            }
            if ($object->isInitialized('gitCommit') && null !== $object->getGitCommit()) {
                $data['GitCommit'] = $object->getGitCommit();
            }
            if ($object->isInitialized('goVersion') && null !== $object->getGoVersion()) {
                $data['GoVersion'] = $object->getGoVersion();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('arch') && null !== $object->getArch()) {
                $data['Arch'] = $object->getArch();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('experimental') && null !== $object->getExperimental()) {
                $data['Experimental'] = $object->getExperimental();
            }
            if ($object->isInitialized('buildTime') && null !== $object->getBuildTime()) {
                $data['BuildTime'] = $object->getBuildTime();
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
            return [\WebProject\DockerApi\Library\Generated\Model\SystemVersion::class => true];
        }
    }
} else {
    class SystemVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\SystemVersion();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Platform', $data)) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class, 'json', $context));
                unset($data['Platform']);
            }
            if (array_key_exists('Components', $data)) {
                $values = [];
                foreach ($data['Components'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class, 'json', $context);
                }
                $object->setComponents($values);
                unset($data['Components']);
            }
            if (array_key_exists('Version', $data)) {
                $object->setVersion($data['Version']);
                unset($data['Version']);
            }
            if (array_key_exists('ApiVersion', $data)) {
                $object->setApiVersion($data['ApiVersion']);
                unset($data['ApiVersion']);
            }
            if (array_key_exists('MinAPIVersion', $data)) {
                $object->setMinAPIVersion($data['MinAPIVersion']);
                unset($data['MinAPIVersion']);
            }
            if (array_key_exists('GitCommit', $data)) {
                $object->setGitCommit($data['GitCommit']);
                unset($data['GitCommit']);
            }
            if (array_key_exists('GoVersion', $data)) {
                $object->setGoVersion($data['GoVersion']);
                unset($data['GoVersion']);
            }
            if (array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
                unset($data['Os']);
            }
            if (array_key_exists('Arch', $data)) {
                $object->setArch($data['Arch']);
                unset($data['Arch']);
            }
            if (array_key_exists('KernelVersion', $data)) {
                $object->setKernelVersion($data['KernelVersion']);
                unset($data['KernelVersion']);
            }
            if (array_key_exists('Experimental', $data)) {
                $object->setExperimental($data['Experimental']);
                unset($data['Experimental']);
            }
            if (array_key_exists('BuildTime', $data)) {
                $object->setBuildTime($data['BuildTime']);
                unset($data['BuildTime']);
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
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('components') && null !== $object->getComponents()) {
                $values = [];
                foreach ($object->getComponents() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Components'] = $values;
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $object->getVersion();
            }
            if ($object->isInitialized('apiVersion') && null !== $object->getApiVersion()) {
                $data['ApiVersion'] = $object->getApiVersion();
            }
            if ($object->isInitialized('minAPIVersion') && null !== $object->getMinAPIVersion()) {
                $data['MinAPIVersion'] = $object->getMinAPIVersion();
            }
            if ($object->isInitialized('gitCommit') && null !== $object->getGitCommit()) {
                $data['GitCommit'] = $object->getGitCommit();
            }
            if ($object->isInitialized('goVersion') && null !== $object->getGoVersion()) {
                $data['GoVersion'] = $object->getGoVersion();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('arch') && null !== $object->getArch()) {
                $data['Arch'] = $object->getArch();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('experimental') && null !== $object->getExperimental()) {
                $data['Experimental'] = $object->getExperimental();
            }
            if ($object->isInitialized('buildTime') && null !== $object->getBuildTime()) {
                $data['BuildTime'] = $object->getBuildTime();
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
            return [\WebProject\DockerApi\Library\Generated\Model\SystemVersion::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
