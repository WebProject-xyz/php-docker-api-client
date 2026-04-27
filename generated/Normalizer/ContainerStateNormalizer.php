<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
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
use function is_bool;
use function is_int;
use function is_object;
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerState();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Status', $data) && null !== $data['Status']) {
            $value = $data['Status'];
            if (is_string($data['Status'])) {
                $value = $data['Status'];
            } elseif (null === $data['Status']) {
                $value = $data['Status'];
            }
            $object->setStatus($value);
        } elseif (array_key_exists('Status', $data) && null === $data['Status']) {
            $object->setStatus(null);
        }
        if (array_key_exists('Running', $data) && null !== $data['Running']) {
            $value_1 = $data['Running'];
            if (is_bool($data['Running'])) {
                $value_1 = $data['Running'];
            } elseif (null === $data['Running']) {
                $value_1 = $data['Running'];
            }
            $object->setRunning($value_1);
        } elseif (array_key_exists('Running', $data) && null === $data['Running']) {
            $object->setRunning(null);
        }
        if (array_key_exists('Paused', $data) && null !== $data['Paused']) {
            $value_2 = $data['Paused'];
            if (is_bool($data['Paused'])) {
                $value_2 = $data['Paused'];
            } elseif (null === $data['Paused']) {
                $value_2 = $data['Paused'];
            }
            $object->setPaused($value_2);
        } elseif (array_key_exists('Paused', $data) && null === $data['Paused']) {
            $object->setPaused(null);
        }
        if (array_key_exists('Restarting', $data) && null !== $data['Restarting']) {
            $value_3 = $data['Restarting'];
            if (is_bool($data['Restarting'])) {
                $value_3 = $data['Restarting'];
            } elseif (null === $data['Restarting']) {
                $value_3 = $data['Restarting'];
            }
            $object->setRestarting($value_3);
        } elseif (array_key_exists('Restarting', $data) && null === $data['Restarting']) {
            $object->setRestarting(null);
        }
        if (array_key_exists('OOMKilled', $data) && null !== $data['OOMKilled']) {
            $value_4 = $data['OOMKilled'];
            if (is_bool($data['OOMKilled'])) {
                $value_4 = $data['OOMKilled'];
            } elseif (null === $data['OOMKilled']) {
                $value_4 = $data['OOMKilled'];
            }
            $object->setOOMKilled($value_4);
        } elseif (array_key_exists('OOMKilled', $data) && null === $data['OOMKilled']) {
            $object->setOOMKilled(null);
        }
        if (array_key_exists('Dead', $data) && null !== $data['Dead']) {
            $value_5 = $data['Dead'];
            if (is_bool($data['Dead'])) {
                $value_5 = $data['Dead'];
            } elseif (null === $data['Dead']) {
                $value_5 = $data['Dead'];
            }
            $object->setDead($value_5);
        } elseif (array_key_exists('Dead', $data) && null === $data['Dead']) {
            $object->setDead(null);
        }
        if (array_key_exists('Pid', $data) && null !== $data['Pid']) {
            $value_6 = $data['Pid'];
            if (is_int($data['Pid'])) {
                $value_6 = $data['Pid'];
            } elseif (null === $data['Pid']) {
                $value_6 = $data['Pid'];
            }
            $object->setPid($value_6);
        } elseif (array_key_exists('Pid', $data) && null === $data['Pid']) {
            $object->setPid(null);
        }
        if (array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
            $value_7 = $data['ExitCode'];
            if (is_int($data['ExitCode'])) {
                $value_7 = $data['ExitCode'];
            } elseif (null === $data['ExitCode']) {
                $value_7 = $data['ExitCode'];
            }
            $object->setExitCode($value_7);
        } elseif (array_key_exists('ExitCode', $data) && null === $data['ExitCode']) {
            $object->setExitCode(null);
        }
        if (array_key_exists('Error', $data) && null !== $data['Error']) {
            $value_8 = $data['Error'];
            if (is_string($data['Error'])) {
                $value_8 = $data['Error'];
            } elseif (null === $data['Error']) {
                $value_8 = $data['Error'];
            }
            $object->setError($value_8);
        } elseif (array_key_exists('Error', $data) && null === $data['Error']) {
            $object->setError(null);
        }
        if (array_key_exists('StartedAt', $data) && null !== $data['StartedAt']) {
            $value_9 = $data['StartedAt'];
            if (is_string($data['StartedAt'])) {
                $value_9 = $data['StartedAt'];
            } elseif (null === $data['StartedAt']) {
                $value_9 = $data['StartedAt'];
            }
            $object->setStartedAt($value_9);
        } elseif (array_key_exists('StartedAt', $data) && null === $data['StartedAt']) {
            $object->setStartedAt(null);
        }
        if (array_key_exists('FinishedAt', $data) && null !== $data['FinishedAt']) {
            $value_10 = $data['FinishedAt'];
            if (is_string($data['FinishedAt'])) {
                $value_10 = $data['FinishedAt'];
            } elseif (null === $data['FinishedAt']) {
                $value_10 = $data['FinishedAt'];
            }
            $object->setFinishedAt($value_10);
        } elseif (array_key_exists('FinishedAt', $data) && null === $data['FinishedAt']) {
            $object->setFinishedAt(null);
        }
        if (array_key_exists('Health', $data) && null !== $data['Health']) {
            $object->setHealth($this->denormalizer->denormalize($data['Health'], \WebProject\DockerApi\Library\Generated\Model\Health::class, 'json', $context));
        } elseif (array_key_exists('Health', $data) && null === $data['Health']) {
            $object->setHealth(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('status')) {
            $value = $data->getStatus();
            if (is_string($data->getStatus())) {
                $value = $data->getStatus();
            } elseif (null === $data->getStatus()) {
                $value = $data->getStatus();
            }
            $dataArray['Status'] = $value;
        }
        if ($data->isInitialized('running')) {
            $value_1 = $data->getRunning();
            if (is_bool($data->getRunning())) {
                $value_1 = $data->getRunning();
            } elseif (null === $data->getRunning()) {
                $value_1 = $data->getRunning();
            }
            $dataArray['Running'] = $value_1;
        }
        if ($data->isInitialized('paused')) {
            $value_2 = $data->getPaused();
            if (is_bool($data->getPaused())) {
                $value_2 = $data->getPaused();
            } elseif (null === $data->getPaused()) {
                $value_2 = $data->getPaused();
            }
            $dataArray['Paused'] = $value_2;
        }
        if ($data->isInitialized('restarting')) {
            $value_3 = $data->getRestarting();
            if (is_bool($data->getRestarting())) {
                $value_3 = $data->getRestarting();
            } elseif (null === $data->getRestarting()) {
                $value_3 = $data->getRestarting();
            }
            $dataArray['Restarting'] = $value_3;
        }
        if ($data->isInitialized('oOMKilled')) {
            $value_4 = $data->getOOMKilled();
            if (is_bool($data->getOOMKilled())) {
                $value_4 = $data->getOOMKilled();
            } elseif (null === $data->getOOMKilled()) {
                $value_4 = $data->getOOMKilled();
            }
            $dataArray['OOMKilled'] = $value_4;
        }
        if ($data->isInitialized('dead')) {
            $value_5 = $data->getDead();
            if (is_bool($data->getDead())) {
                $value_5 = $data->getDead();
            } elseif (null === $data->getDead()) {
                $value_5 = $data->getDead();
            }
            $dataArray['Dead'] = $value_5;
        }
        if ($data->isInitialized('pid')) {
            $value_6 = $data->getPid();
            if (is_int($data->getPid())) {
                $value_6 = $data->getPid();
            } elseif (null === $data->getPid()) {
                $value_6 = $data->getPid();
            }
            $dataArray['Pid'] = $value_6;
        }
        if ($data->isInitialized('exitCode')) {
            $value_7 = $data->getExitCode();
            if (is_int($data->getExitCode())) {
                $value_7 = $data->getExitCode();
            } elseif (null === $data->getExitCode()) {
                $value_7 = $data->getExitCode();
            }
            $dataArray['ExitCode'] = $value_7;
        }
        if ($data->isInitialized('error')) {
            $value_8 = $data->getError();
            if (is_string($data->getError())) {
                $value_8 = $data->getError();
            } elseif (null === $data->getError()) {
                $value_8 = $data->getError();
            }
            $dataArray['Error'] = $value_8;
        }
        if ($data->isInitialized('startedAt')) {
            $value_9 = $data->getStartedAt();
            if (is_string($data->getStartedAt())) {
                $value_9 = $data->getStartedAt();
            } elseif (null === $data->getStartedAt()) {
                $value_9 = $data->getStartedAt();
            }
            $dataArray['StartedAt'] = $value_9;
        }
        if ($data->isInitialized('finishedAt')) {
            $value_10 = $data->getFinishedAt();
            if (is_string($data->getFinishedAt())) {
                $value_10 = $data->getFinishedAt();
            } elseif (null === $data->getFinishedAt()) {
                $value_10 = $data->getFinishedAt();
            }
            $dataArray['FinishedAt'] = $value_10;
        }
        if ($data->isInitialized('health')) {
            $dataArray['Health'] = $this->normalizer->normalize($data->getHealth(), 'json', $context);
        }

        return $dataArray;
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
