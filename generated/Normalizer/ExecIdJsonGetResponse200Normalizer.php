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
        if (array_key_exists('CanRemove', $data) && is_int($data['CanRemove'])) {
            $data['CanRemove'] = (bool) $data['CanRemove'];
        }
        if (array_key_exists('Running', $data) && is_int($data['Running'])) {
            $data['Running'] = (bool) $data['Running'];
        }
        if (array_key_exists('OpenStdin', $data) && is_int($data['OpenStdin'])) {
            $data['OpenStdin'] = (bool) $data['OpenStdin'];
        }
        if (array_key_exists('OpenStderr', $data) && is_int($data['OpenStderr'])) {
            $data['OpenStderr'] = (bool) $data['OpenStderr'];
        }
        if (array_key_exists('OpenStdout', $data) && is_int($data['OpenStdout'])) {
            $data['OpenStdout'] = (bool) $data['OpenStdout'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ExecIdJsonGetResponse200Constraint());
        }
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('canRemove') && null !== $data->getCanRemove()) {
            $dataArray['CanRemove'] = $data->getCanRemove();
        }
        if ($data->isInitialized('detachKeys') && null !== $data->getDetachKeys()) {
            $dataArray['DetachKeys'] = $data->getDetachKeys();
        }
        if ($data->isInitialized('iD') && null !== $data->getID()) {
            $dataArray['ID'] = $data->getID();
        }
        if ($data->isInitialized('running') && null !== $data->getRunning()) {
            $dataArray['Running'] = $data->getRunning();
        }
        if ($data->isInitialized('exitCode') && null !== $data->getExitCode()) {
            $dataArray['ExitCode'] = $data->getExitCode();
        }
        if ($data->isInitialized('processConfig') && null !== $data->getProcessConfig()) {
            $dataArray['ProcessConfig'] = $this->normalizer->normalize($data->getProcessConfig(), 'json', $context);
        }
        if ($data->isInitialized('openStdin') && null !== $data->getOpenStdin()) {
            $dataArray['OpenStdin'] = $data->getOpenStdin();
        }
        if ($data->isInitialized('openStderr') && null !== $data->getOpenStderr()) {
            $dataArray['OpenStderr'] = $data->getOpenStderr();
        }
        if ($data->isInitialized('openStdout') && null !== $data->getOpenStdout()) {
            $dataArray['OpenStdout'] = $data->getOpenStdout();
        }
        if ($data->isInitialized('containerID') && null !== $data->getContainerID()) {
            $dataArray['ContainerID'] = $data->getContainerID();
        }
        if ($data->isInitialized('pid') && null !== $data->getPid()) {
            $dataArray['Pid'] = $data->getPid();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ExecIdJsonGetResponse200Constraint());
        }

        return $dataArray;
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
