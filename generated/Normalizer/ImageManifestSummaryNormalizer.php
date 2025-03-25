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
    class ImageManifestSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
                unset($data['Descriptor']);
            }
            if (array_key_exists('Available', $data)) {
                $object->setAvailable($data['Available']);
                unset($data['Available']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class, 'json', $context));
                unset($data['Size']);
            }
            if (array_key_exists('Kind', $data)) {
                $object->setKind($data['Kind']);
                unset($data['Kind']);
            }
            if (array_key_exists('ImageData', $data) && null !== $data['ImageData']) {
                $object->setImageData($this->denormalizer->denormalize($data['ImageData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class, 'json', $context));
                unset($data['ImageData']);
            } elseif (array_key_exists('ImageData', $data) && null === $data['ImageData']) {
                $object->setImageData(null);
            }
            if (array_key_exists('AttestationData', $data) && null !== $data['AttestationData']) {
                $object->setAttestationData($this->denormalizer->denormalize($data['AttestationData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class, 'json', $context));
                unset($data['AttestationData']);
            } elseif (array_key_exists('AttestationData', $data) && null === $data['AttestationData']) {
                $object->setAttestationData(null);
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
            $data               = [];
            $data['ID']         = $object->getID();
            $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            $data['Available']  = $object->getAvailable();
            $data['Size']       = $this->normalizer->normalize($object->getSize(), 'json', $context);
            $data['Kind']       = $object->getKind();
            if ($object->isInitialized('imageData') && null !== $object->getImageData()) {
                $data['ImageData'] = $this->normalizer->normalize($object->getImageData(), 'json', $context);
            }
            if ($object->isInitialized('attestationData') && null !== $object->getAttestationData()) {
                $data['AttestationData'] = $this->normalizer->normalize($object->getAttestationData(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class => true];
        }
    }
} else {
    class ImageManifestSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
                unset($data['Descriptor']);
            }
            if (array_key_exists('Available', $data)) {
                $object->setAvailable($data['Available']);
                unset($data['Available']);
            }
            if (array_key_exists('Size', $data)) {
                $object->setSize($this->denormalizer->denormalize($data['Size'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class, 'json', $context));
                unset($data['Size']);
            }
            if (array_key_exists('Kind', $data)) {
                $object->setKind($data['Kind']);
                unset($data['Kind']);
            }
            if (array_key_exists('ImageData', $data) && null !== $data['ImageData']) {
                $object->setImageData($this->denormalizer->denormalize($data['ImageData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class, 'json', $context));
                unset($data['ImageData']);
            } elseif (array_key_exists('ImageData', $data) && null === $data['ImageData']) {
                $object->setImageData(null);
            }
            if (array_key_exists('AttestationData', $data) && null !== $data['AttestationData']) {
                $object->setAttestationData($this->denormalizer->denormalize($data['AttestationData'], \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class, 'json', $context));
                unset($data['AttestationData']);
            } elseif (array_key_exists('AttestationData', $data) && null === $data['AttestationData']) {
                $object->setAttestationData(null);
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
            $data               = [];
            $data['ID']         = $object->getID();
            $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            $data['Available']  = $object->getAvailable();
            $data['Size']       = $this->normalizer->normalize($object->getSize(), 'json', $context);
            $data['Kind']       = $object->getKind();
            if ($object->isInitialized('imageData') && null !== $object->getImageData()) {
                $data['ImageData'] = $this->normalizer->normalize($object->getImageData(), 'json', $context);
            }
            if ($object->isInitialized('attestationData') && null !== $object->getAttestationData()) {
                $data['AttestationData'] = $this->normalizer->normalize($object->getAttestationData(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
