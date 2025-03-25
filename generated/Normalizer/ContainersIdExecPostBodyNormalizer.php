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
    class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('AttachStdin', $data)) {
                $object->setAttachStdin($data['AttachStdin']);
                unset($data['AttachStdin']);
            }
            if (array_key_exists('AttachStdout', $data)) {
                $object->setAttachStdout($data['AttachStdout']);
                unset($data['AttachStdout']);
            }
            if (array_key_exists('AttachStderr', $data)) {
                $object->setAttachStderr($data['AttachStderr']);
                unset($data['AttachStderr']);
            }
            if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
                $values = [];
                foreach ($data['ConsoleSize'] as $value) {
                    $values[] = $value;
                }
                $object->setConsoleSize($values);
                unset($data['ConsoleSize']);
            } elseif (array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
                $object->setConsoleSize(null);
            }
            if (array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
                unset($data['DetachKeys']);
            }
            if (array_key_exists('Tty', $data)) {
                $object->setTty($data['Tty']);
                unset($data['Tty']);
            }
            if (array_key_exists('Env', $data)) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
                unset($data['Env']);
            }
            if (array_key_exists('Cmd', $data)) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCmd($values_2);
                unset($data['Cmd']);
            }
            if (array_key_exists('Privileged', $data)) {
                $object->setPrivileged($data['Privileged']);
                unset($data['Privileged']);
            }
            if (array_key_exists('User', $data)) {
                $object->setUser($data['User']);
                unset($data['User']);
            }
            if (array_key_exists('WorkingDir', $data)) {
                $object->setWorkingDir($data['WorkingDir']);
                unset($data['WorkingDir']);
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
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values = [];
                foreach ($object->getConsoleSize() as $value) {
                    $values[] = $value;
                }
                $data['ConsoleSize'] = $values;
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_1 = [];
                foreach ($object->getEnv() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Env'] = $values_1;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_2 = [];
                foreach ($object->getCmd() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Cmd'] = $values_2;
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
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
            return [\WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class => true];
        }
    }
} else {
    class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('AttachStdin', $data)) {
                $object->setAttachStdin($data['AttachStdin']);
                unset($data['AttachStdin']);
            }
            if (array_key_exists('AttachStdout', $data)) {
                $object->setAttachStdout($data['AttachStdout']);
                unset($data['AttachStdout']);
            }
            if (array_key_exists('AttachStderr', $data)) {
                $object->setAttachStderr($data['AttachStderr']);
                unset($data['AttachStderr']);
            }
            if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
                $values = [];
                foreach ($data['ConsoleSize'] as $value) {
                    $values[] = $value;
                }
                $object->setConsoleSize($values);
                unset($data['ConsoleSize']);
            } elseif (array_key_exists('ConsoleSize', $data) && null === $data['ConsoleSize']) {
                $object->setConsoleSize(null);
            }
            if (array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
                unset($data['DetachKeys']);
            }
            if (array_key_exists('Tty', $data)) {
                $object->setTty($data['Tty']);
                unset($data['Tty']);
            }
            if (array_key_exists('Env', $data)) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
                unset($data['Env']);
            }
            if (array_key_exists('Cmd', $data)) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCmd($values_2);
                unset($data['Cmd']);
            }
            if (array_key_exists('Privileged', $data)) {
                $object->setPrivileged($data['Privileged']);
                unset($data['Privileged']);
            }
            if (array_key_exists('User', $data)) {
                $object->setUser($data['User']);
                unset($data['User']);
            }
            if (array_key_exists('WorkingDir', $data)) {
                $object->setWorkingDir($data['WorkingDir']);
                unset($data['WorkingDir']);
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
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values = [];
                foreach ($object->getConsoleSize() as $value) {
                    $values[] = $value;
                }
                $data['ConsoleSize'] = $values;
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_1 = [];
                foreach ($object->getEnv() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Env'] = $values_1;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_2 = [];
                foreach ($object->getCmd() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Cmd'] = $values_2;
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
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
            return [\WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
