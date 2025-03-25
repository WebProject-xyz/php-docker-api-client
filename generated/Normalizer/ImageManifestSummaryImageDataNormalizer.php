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
    class ImageManifestSummaryImageDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Platform', $data) && null !== $data['Platform']) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class, 'json', $context));
                unset($data['Platform']);
            } elseif (array_key_exists('Platform', $data) && null === $data['Platform']) {
                $object->setPlatform(null);
            }
            if (array_key_exists('Containers', $data)) {
                $values = [];
                foreach ($data['Containers'] as $value) {
                    $values[] = $value;
                }
                $object->setContainers($values);
                unset($data['Containers']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class, 'json', $context));
                unset($data['Size']);
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
            $data             = [];
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            $values           = [];
            foreach ($object->getContainers() as $value) {
                $values[] = $value;
            }
            $data['Containers'] = $values;
            $data['Size']       = $this->normalizer->normalize($object->getSize(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class => true];
        }
    }
} else {
    class ImageManifestSummaryImageDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Platform', $data) && null !== $data['Platform']) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class, 'json', $context));
                unset($data['Platform']);
            } elseif (array_key_exists('Platform', $data) && null === $data['Platform']) {
                $object->setPlatform(null);
            }
            if (array_key_exists('Containers', $data)) {
                $values = [];
                foreach ($data['Containers'] as $value) {
                    $values[] = $value;
                }
                $object->setContainers($values);
                unset($data['Containers']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class, 'json', $context));
                unset($data['Size']);
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
            $data             = [];
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            $values           = [];
            foreach ($object->getContainers() as $value) {
                $values[] = $value;
            }
            $data['Containers'] = $values;
            $data['Size']       = $this->normalizer->normalize($object->getSize(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
