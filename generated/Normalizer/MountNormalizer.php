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
    class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\Mount::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Mount::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\Mount();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Target', $data)) {
                $object->setTarget($data['Target']);
                unset($data['Target']);
            }
            if (array_key_exists('Source', $data)) {
                $object->setSource($data['Source']);
                unset($data['Source']);
            }
            if (array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            if (array_key_exists('ReadOnly', $data)) {
                $object->setReadOnly($data['ReadOnly']);
                unset($data['ReadOnly']);
            }
            if (array_key_exists('Consistency', $data)) {
                $object->setConsistency($data['Consistency']);
                unset($data['Consistency']);
            }
            if (array_key_exists('BindOptions', $data)) {
                $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class, 'json', $context));
                unset($data['BindOptions']);
            }
            if (array_key_exists('VolumeOptions', $data)) {
                $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class, 'json', $context));
                unset($data['VolumeOptions']);
            }
            if (array_key_exists('ImageOptions', $data)) {
                $object->setImageOptions($this->denormalizer->denormalize($data['ImageOptions'], \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class, 'json', $context));
                unset($data['ImageOptions']);
            }
            if (array_key_exists('TmpfsOptions', $data)) {
                $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class, 'json', $context));
                unset($data['TmpfsOptions']);
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
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $object->getTarget();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['Source'] = $object->getSource();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
                $data['ReadOnly'] = $object->getReadOnly();
            }
            if ($object->isInitialized('consistency') && null !== $object->getConsistency()) {
                $data['Consistency'] = $object->getConsistency();
            }
            if ($object->isInitialized('bindOptions') && null !== $object->getBindOptions()) {
                $data['BindOptions'] = $this->normalizer->normalize($object->getBindOptions(), 'json', $context);
            }
            if ($object->isInitialized('volumeOptions') && null !== $object->getVolumeOptions()) {
                $data['VolumeOptions'] = $this->normalizer->normalize($object->getVolumeOptions(), 'json', $context);
            }
            if ($object->isInitialized('imageOptions') && null !== $object->getImageOptions()) {
                $data['ImageOptions'] = $this->normalizer->normalize($object->getImageOptions(), 'json', $context);
            }
            if ($object->isInitialized('tmpfsOptions') && null !== $object->getTmpfsOptions()) {
                $data['TmpfsOptions'] = $this->normalizer->normalize($object->getTmpfsOptions(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\Mount::class => true];
        }
    }
} else {
    class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\Mount::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Mount::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\Mount();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Target', $data)) {
                $object->setTarget($data['Target']);
                unset($data['Target']);
            }
            if (array_key_exists('Source', $data)) {
                $object->setSource($data['Source']);
                unset($data['Source']);
            }
            if (array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            if (array_key_exists('ReadOnly', $data)) {
                $object->setReadOnly($data['ReadOnly']);
                unset($data['ReadOnly']);
            }
            if (array_key_exists('Consistency', $data)) {
                $object->setConsistency($data['Consistency']);
                unset($data['Consistency']);
            }
            if (array_key_exists('BindOptions', $data)) {
                $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class, 'json', $context));
                unset($data['BindOptions']);
            }
            if (array_key_exists('VolumeOptions', $data)) {
                $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class, 'json', $context));
                unset($data['VolumeOptions']);
            }
            if (array_key_exists('ImageOptions', $data)) {
                $object->setImageOptions($this->denormalizer->denormalize($data['ImageOptions'], \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class, 'json', $context));
                unset($data['ImageOptions']);
            }
            if (array_key_exists('TmpfsOptions', $data)) {
                $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class, 'json', $context));
                unset($data['TmpfsOptions']);
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
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $object->getTarget();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['Source'] = $object->getSource();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
                $data['ReadOnly'] = $object->getReadOnly();
            }
            if ($object->isInitialized('consistency') && null !== $object->getConsistency()) {
                $data['Consistency'] = $object->getConsistency();
            }
            if ($object->isInitialized('bindOptions') && null !== $object->getBindOptions()) {
                $data['BindOptions'] = $this->normalizer->normalize($object->getBindOptions(), 'json', $context);
            }
            if ($object->isInitialized('volumeOptions') && null !== $object->getVolumeOptions()) {
                $data['VolumeOptions'] = $this->normalizer->normalize($object->getVolumeOptions(), 'json', $context);
            }
            if ($object->isInitialized('imageOptions') && null !== $object->getImageOptions()) {
                $data['ImageOptions'] = $this->normalizer->normalize($object->getImageOptions(), 'json', $context);
            }
            if ($object->isInitialized('tmpfsOptions') && null !== $object->getTmpfsOptions()) {
                $data['TmpfsOptions'] = $this->normalizer->normalize($object->getTmpfsOptions(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\Mount::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
