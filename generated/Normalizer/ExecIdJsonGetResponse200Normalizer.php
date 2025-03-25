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
    class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('CanRemove', $data)) {
                $object->setCanRemove($data['CanRemove']);
                unset($data['CanRemove']);
            }
            if (array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
                unset($data['DetachKeys']);
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
                unset($data['Running']);
            }
            if (array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
                unset($data['ExitCode']);
            }
            if (array_key_exists('ProcessConfig', $data)) {
                $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class, 'json', $context));
                unset($data['ProcessConfig']);
            }
            if (array_key_exists('OpenStdin', $data)) {
                $object->setOpenStdin($data['OpenStdin']);
                unset($data['OpenStdin']);
            }
            if (array_key_exists('OpenStderr', $data)) {
                $object->setOpenStderr($data['OpenStderr']);
                unset($data['OpenStderr']);
            }
            if (array_key_exists('OpenStdout', $data)) {
                $object->setOpenStdout($data['OpenStdout']);
                unset($data['OpenStdout']);
            }
            if (array_key_exists('ContainerID', $data)) {
                $object->setContainerID($data['ContainerID']);
                unset($data['ContainerID']);
            }
            if (array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
                unset($data['Pid']);
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
            if ($object->isInitialized('canRemove') && null !== $object->getCanRemove()) {
                $data['CanRemove'] = $object->getCanRemove();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('processConfig') && null !== $object->getProcessConfig()) {
                $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('openStderr') && null !== $object->getOpenStderr()) {
                $data['OpenStderr'] = $object->getOpenStderr();
            }
            if ($object->isInitialized('openStdout') && null !== $object->getOpenStdout()) {
                $data['OpenStdout'] = $object->getOpenStdout();
            }
            if ($object->isInitialized('containerID') && null !== $object->getContainerID()) {
                $data['ContainerID'] = $object->getContainerID();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
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
            return [\WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class => true];
        }
    }
} else {
    class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('CanRemove', $data)) {
                $object->setCanRemove($data['CanRemove']);
                unset($data['CanRemove']);
            }
            if (array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
                unset($data['DetachKeys']);
            }
            if (array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
                unset($data['ID']);
            }
            if (array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
                unset($data['Running']);
            }
            if (array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
                unset($data['ExitCode']);
            }
            if (array_key_exists('ProcessConfig', $data)) {
                $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class, 'json', $context));
                unset($data['ProcessConfig']);
            }
            if (array_key_exists('OpenStdin', $data)) {
                $object->setOpenStdin($data['OpenStdin']);
                unset($data['OpenStdin']);
            }
            if (array_key_exists('OpenStderr', $data)) {
                $object->setOpenStderr($data['OpenStderr']);
                unset($data['OpenStderr']);
            }
            if (array_key_exists('OpenStdout', $data)) {
                $object->setOpenStdout($data['OpenStdout']);
                unset($data['OpenStdout']);
            }
            if (array_key_exists('ContainerID', $data)) {
                $object->setContainerID($data['ContainerID']);
                unset($data['ContainerID']);
            }
            if (array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
                unset($data['Pid']);
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
            if ($object->isInitialized('canRemove') && null !== $object->getCanRemove()) {
                $data['CanRemove'] = $object->getCanRemove();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('processConfig') && null !== $object->getProcessConfig()) {
                $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('openStderr') && null !== $object->getOpenStderr()) {
                $data['OpenStderr'] = $object->getOpenStderr();
            }
            if ($object->isInitialized('openStdout') && null !== $object->getOpenStdout()) {
                $data['OpenStdout'] = $object->getOpenStdout();
            }
            if ($object->isInitialized('containerID') && null !== $object->getContainerID()) {
                $data['ContainerID'] = $object->getContainerID();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
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
            return [\WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
