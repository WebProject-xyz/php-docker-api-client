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
    class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\TaskStatus();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Timestamp', $data)) {
                $object->setTimestamp($data['Timestamp']);
                unset($data['Timestamp']);
            }
            if (array_key_exists('State', $data)) {
                $object->setState($data['State']);
                unset($data['State']);
            }
            if (array_key_exists('Message', $data)) {
                $object->setMessage($data['Message']);
                unset($data['Message']);
            }
            if (array_key_exists('Err', $data)) {
                $object->setErr($data['Err']);
                unset($data['Err']);
            }
            if (array_key_exists('ContainerStatus', $data)) {
                $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class, 'json', $context));
                unset($data['ContainerStatus']);
            }
            if (array_key_exists('PortStatus', $data)) {
                $object->setPortStatus($this->denormalizer->denormalize($data['PortStatus'], \WebProject\DockerApi\Library\Generated\Model\PortStatus::class, 'json', $context));
                unset($data['PortStatus']);
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
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['Timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            if ($object->isInitialized('err') && null !== $object->getErr()) {
                $data['Err'] = $object->getErr();
            }
            if ($object->isInitialized('containerStatus') && null !== $object->getContainerStatus()) {
                $data['ContainerStatus'] = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
            }
            if ($object->isInitialized('portStatus') && null !== $object->getPortStatus()) {
                $data['PortStatus'] = $this->normalizer->normalize($object->getPortStatus(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\TaskStatus::class => true];
        }
    }
} else {
    class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\TaskStatus();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Timestamp', $data)) {
                $object->setTimestamp($data['Timestamp']);
                unset($data['Timestamp']);
            }
            if (array_key_exists('State', $data)) {
                $object->setState($data['State']);
                unset($data['State']);
            }
            if (array_key_exists('Message', $data)) {
                $object->setMessage($data['Message']);
                unset($data['Message']);
            }
            if (array_key_exists('Err', $data)) {
                $object->setErr($data['Err']);
                unset($data['Err']);
            }
            if (array_key_exists('ContainerStatus', $data)) {
                $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class, 'json', $context));
                unset($data['ContainerStatus']);
            }
            if (array_key_exists('PortStatus', $data)) {
                $object->setPortStatus($this->denormalizer->denormalize($data['PortStatus'], \WebProject\DockerApi\Library\Generated\Model\PortStatus::class, 'json', $context));
                unset($data['PortStatus']);
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
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['Timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            if ($object->isInitialized('err') && null !== $object->getErr()) {
                $data['Err'] = $object->getErr();
            }
            if ($object->isInitialized('containerStatus') && null !== $object->getContainerStatus()) {
                $data['ContainerStatus'] = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
            }
            if ($object->isInitialized('portStatus') && null !== $object->getPortStatus()) {
                $data['PortStatus'] = $this->normalizer->normalize($object->getPortStatus(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\TaskStatus::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
