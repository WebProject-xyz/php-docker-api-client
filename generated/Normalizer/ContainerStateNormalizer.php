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
use function is_int;
use function is_object;

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
        if (array_key_exists('Running', $data) && is_int($data['Running'])) {
            $data['Running'] = (bool) $data['Running'];
        }
        if (array_key_exists('Paused', $data) && is_int($data['Paused'])) {
            $data['Paused'] = (bool) $data['Paused'];
        }
        if (array_key_exists('Restarting', $data) && is_int($data['Restarting'])) {
            $data['Restarting'] = (bool) $data['Restarting'];
        }
        if (array_key_exists('OOMKilled', $data) && is_int($data['OOMKilled'])) {
            $data['OOMKilled'] = (bool) $data['OOMKilled'];
        }
        if (array_key_exists('Dead', $data) && is_int($data['Dead'])) {
            $data['Dead'] = (bool) $data['Dead'];
        }
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['Status'] = $data->getStatus();
        }
        if ($data->isInitialized('running') && null !== $data->getRunning()) {
            $dataArray['Running'] = $data->getRunning();
        }
        if ($data->isInitialized('paused') && null !== $data->getPaused()) {
            $dataArray['Paused'] = $data->getPaused();
        }
        if ($data->isInitialized('restarting') && null !== $data->getRestarting()) {
            $dataArray['Restarting'] = $data->getRestarting();
        }
        if ($data->isInitialized('oOMKilled') && null !== $data->getOOMKilled()) {
            $dataArray['OOMKilled'] = $data->getOOMKilled();
        }
        if ($data->isInitialized('dead') && null !== $data->getDead()) {
            $dataArray['Dead'] = $data->getDead();
        }
        if ($data->isInitialized('pid') && null !== $data->getPid()) {
            $dataArray['Pid'] = $data->getPid();
        }
        if ($data->isInitialized('exitCode') && null !== $data->getExitCode()) {
            $dataArray['ExitCode'] = $data->getExitCode();
        }
        if ($data->isInitialized('error') && null !== $data->getError()) {
            $dataArray['Error'] = $data->getError();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['StartedAt'] = $data->getStartedAt();
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['FinishedAt'] = $data->getFinishedAt();
        }
        if ($data->isInitialized('health') && null !== $data->getHealth()) {
            $dataArray['Health'] = $this->normalizer->normalize($data->getHealth(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
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
