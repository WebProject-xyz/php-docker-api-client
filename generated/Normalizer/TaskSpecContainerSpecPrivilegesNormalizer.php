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
    class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('CredentialSpec', $data)) {
                $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context));
                unset($data['CredentialSpec']);
            }
            if (array_key_exists('SELinuxContext', $data)) {
                $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context));
                unset($data['SELinuxContext']);
            }
            if (array_key_exists('Seccomp', $data)) {
                $object->setSeccomp($this->denormalizer->denormalize($data['Seccomp'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class, 'json', $context));
                unset($data['Seccomp']);
            }
            if (array_key_exists('AppArmor', $data)) {
                $object->setAppArmor($this->denormalizer->denormalize($data['AppArmor'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class, 'json', $context));
                unset($data['AppArmor']);
            }
            if (array_key_exists('NoNewPrivileges', $data)) {
                $object->setNoNewPrivileges($data['NoNewPrivileges']);
                unset($data['NoNewPrivileges']);
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
            if ($object->isInitialized('credentialSpec') && null !== $object->getCredentialSpec()) {
                $data['CredentialSpec'] = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
            }
            if ($object->isInitialized('sELinuxContext') && null !== $object->getSELinuxContext()) {
                $data['SELinuxContext'] = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
            }
            if ($object->isInitialized('seccomp') && null !== $object->getSeccomp()) {
                $data['Seccomp'] = $this->normalizer->normalize($object->getSeccomp(), 'json', $context);
            }
            if ($object->isInitialized('appArmor') && null !== $object->getAppArmor()) {
                $data['AppArmor'] = $this->normalizer->normalize($object->getAppArmor(), 'json', $context);
            }
            if ($object->isInitialized('noNewPrivileges') && null !== $object->getNoNewPrivileges()) {
                $data['NoNewPrivileges'] = $object->getNoNewPrivileges();
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
            return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => true];
        }
    }
} else {
    class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('CredentialSpec', $data)) {
                $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context));
                unset($data['CredentialSpec']);
            }
            if (array_key_exists('SELinuxContext', $data)) {
                $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context));
                unset($data['SELinuxContext']);
            }
            if (array_key_exists('Seccomp', $data)) {
                $object->setSeccomp($this->denormalizer->denormalize($data['Seccomp'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class, 'json', $context));
                unset($data['Seccomp']);
            }
            if (array_key_exists('AppArmor', $data)) {
                $object->setAppArmor($this->denormalizer->denormalize($data['AppArmor'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class, 'json', $context));
                unset($data['AppArmor']);
            }
            if (array_key_exists('NoNewPrivileges', $data)) {
                $object->setNoNewPrivileges($data['NoNewPrivileges']);
                unset($data['NoNewPrivileges']);
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
            if ($object->isInitialized('credentialSpec') && null !== $object->getCredentialSpec()) {
                $data['CredentialSpec'] = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
            }
            if ($object->isInitialized('sELinuxContext') && null !== $object->getSELinuxContext()) {
                $data['SELinuxContext'] = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
            }
            if ($object->isInitialized('seccomp') && null !== $object->getSeccomp()) {
                $data['Seccomp'] = $this->normalizer->normalize($object->getSeccomp(), 'json', $context);
            }
            if ($object->isInitialized('appArmor') && null !== $object->getAppArmor()) {
                $data['AppArmor'] = $this->normalizer->normalize($object->getAppArmor(), 'json', $context);
            }
            if ($object->isInitialized('noNewPrivileges') && null !== $object->getNoNewPrivileges()) {
                $data['NoNewPrivileges'] = $object->getNoNewPrivileges();
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
            return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
