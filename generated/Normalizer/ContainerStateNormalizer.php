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
    class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerState::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerState::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerState();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
                unset($data['Status']);
            }
            if (array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
                unset($data['Running']);
            }
            if (array_key_exists('Paused', $data)) {
                $object->setPaused($data['Paused']);
                unset($data['Paused']);
            }
            if (array_key_exists('Restarting', $data)) {
                $object->setRestarting($data['Restarting']);
                unset($data['Restarting']);
            }
            if (array_key_exists('OOMKilled', $data)) {
                $object->setOOMKilled($data['OOMKilled']);
                unset($data['OOMKilled']);
            }
            if (array_key_exists('Dead', $data)) {
                $object->setDead($data['Dead']);
                unset($data['Dead']);
            }
            if (array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
                unset($data['Pid']);
            }
            if (array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
                unset($data['ExitCode']);
            }
            if (array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
                unset($data['Error']);
            }
            if (array_key_exists('StartedAt', $data)) {
                $object->setStartedAt($data['StartedAt']);
                unset($data['StartedAt']);
            }
            if (array_key_exists('FinishedAt', $data)) {
                $object->setFinishedAt($data['FinishedAt']);
                unset($data['FinishedAt']);
            }
            if (array_key_exists('Health', $data) && null !== $data['Health']) {
                $object->setHealth($this->denormalizer->denormalize($data['Health'], \WebProject\DockerApi\Library\Generated\Model\Health::class, 'json', $context));
                unset($data['Health']);
            } elseif (array_key_exists('Health', $data) && null === $data['Health']) {
                $object->setHealth(null);
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
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $object->getStatus();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('paused') && null !== $object->getPaused()) {
                $data['Paused'] = $object->getPaused();
            }
            if ($object->isInitialized('restarting') && null !== $object->getRestarting()) {
                $data['Restarting'] = $object->getRestarting();
            }
            if ($object->isInitialized('oOMKilled') && null !== $object->getOOMKilled()) {
                $data['OOMKilled'] = $object->getOOMKilled();
            }
            if ($object->isInitialized('dead') && null !== $object->getDead()) {
                $data['Dead'] = $object->getDead();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['StartedAt'] = $object->getStartedAt();
            }
            if ($object->isInitialized('finishedAt') && null !== $object->getFinishedAt()) {
                $data['FinishedAt'] = $object->getFinishedAt();
            }
            if ($object->isInitialized('health') && null !== $object->getHealth()) {
                $data['Health'] = $this->normalizer->normalize($object->getHealth(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerState::class => true];
        }
    }
} else {
    class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\ContainerState::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerState::class === get_class($data);
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
            $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerState();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
                unset($data['Status']);
            }
            if (array_key_exists('Running', $data)) {
                $object->setRunning($data['Running']);
                unset($data['Running']);
            }
            if (array_key_exists('Paused', $data)) {
                $object->setPaused($data['Paused']);
                unset($data['Paused']);
            }
            if (array_key_exists('Restarting', $data)) {
                $object->setRestarting($data['Restarting']);
                unset($data['Restarting']);
            }
            if (array_key_exists('OOMKilled', $data)) {
                $object->setOOMKilled($data['OOMKilled']);
                unset($data['OOMKilled']);
            }
            if (array_key_exists('Dead', $data)) {
                $object->setDead($data['Dead']);
                unset($data['Dead']);
            }
            if (array_key_exists('Pid', $data)) {
                $object->setPid($data['Pid']);
                unset($data['Pid']);
            }
            if (array_key_exists('ExitCode', $data)) {
                $object->setExitCode($data['ExitCode']);
                unset($data['ExitCode']);
            }
            if (array_key_exists('Error', $data)) {
                $object->setError($data['Error']);
                unset($data['Error']);
            }
            if (array_key_exists('StartedAt', $data)) {
                $object->setStartedAt($data['StartedAt']);
                unset($data['StartedAt']);
            }
            if (array_key_exists('FinishedAt', $data)) {
                $object->setFinishedAt($data['FinishedAt']);
                unset($data['FinishedAt']);
            }
            if (array_key_exists('Health', $data) && null !== $data['Health']) {
                $object->setHealth($this->denormalizer->denormalize($data['Health'], \WebProject\DockerApi\Library\Generated\Model\Health::class, 'json', $context));
                unset($data['Health']);
            } elseif (array_key_exists('Health', $data) && null === $data['Health']) {
                $object->setHealth(null);
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
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $object->getStatus();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('paused') && null !== $object->getPaused()) {
                $data['Paused'] = $object->getPaused();
            }
            if ($object->isInitialized('restarting') && null !== $object->getRestarting()) {
                $data['Restarting'] = $object->getRestarting();
            }
            if ($object->isInitialized('oOMKilled') && null !== $object->getOOMKilled()) {
                $data['OOMKilled'] = $object->getOOMKilled();
            }
            if ($object->isInitialized('dead') && null !== $object->getDead()) {
                $data['Dead'] = $object->getDead();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['Error'] = $object->getError();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['StartedAt'] = $object->getStartedAt();
            }
            if ($object->isInitialized('finishedAt') && null !== $object->getFinishedAt()) {
                $data['FinishedAt'] = $object->getFinishedAt();
            }
            if ($object->isInitialized('health') && null !== $object->getHealth()) {
                $data['Health'] = $this->normalizer->normalize($object->getHealth(), 'json', $context);
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
            return [\WebProject\DockerApi\Library\Generated\Model\ContainerState::class => true];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
