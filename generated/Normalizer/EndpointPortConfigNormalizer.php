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
    class EndpointPortConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Protocol', $data)) {
                $object->setProtocol($data['Protocol']);
                unset($data['Protocol']);
            }
            if (array_key_exists('TargetPort', $data)) {
                $object->setTargetPort($data['TargetPort']);
                unset($data['TargetPort']);
            }
            if (array_key_exists('PublishedPort', $data)) {
                $object->setPublishedPort($data['PublishedPort']);
                unset($data['PublishedPort']);
            }
            if (array_key_exists('PublishMode', $data)) {
                $object->setPublishMode($data['PublishMode']);
                unset($data['PublishMode']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['Protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('targetPort') && null !== $object->getTargetPort()) {
                $data['TargetPort'] = $object->getTargetPort();
            }
            if ($object->isInitialized('publishedPort') && null !== $object->getPublishedPort()) {
                $data['PublishedPort'] = $object->getPublishedPort();
            }
            if ($object->isInitialized('publishMode') && null !== $object->getPublishMode()) {
                $data['PublishMode'] = $object->getPublishMode();
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
            return [\WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class => true];
        }
    }
} else {
    class EndpointPortConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (array_key_exists('Protocol', $data)) {
                $object->setProtocol($data['Protocol']);
                unset($data['Protocol']);
            }
            if (array_key_exists('TargetPort', $data)) {
                $object->setTargetPort($data['TargetPort']);
                unset($data['TargetPort']);
            }
            if (array_key_exists('PublishedPort', $data)) {
                $object->setPublishedPort($data['PublishedPort']);
                unset($data['PublishedPort']);
            }
            if (array_key_exists('PublishMode', $data)) {
                $object->setPublishMode($data['PublishMode']);
                unset($data['PublishMode']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['Protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('targetPort') && null !== $object->getTargetPort()) {
                $data['TargetPort'] = $object->getTargetPort();
            }
            if ($object->isInitialized('publishedPort') && null !== $object->getPublishedPort()) {
                $data['PublishedPort'] = $object->getPublishedPort();
            }
            if ($object->isInitialized('publishMode') && null !== $object->getPublishMode()) {
                $data['PublishMode'] = $object->getPublishMode();
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
            return [\WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
