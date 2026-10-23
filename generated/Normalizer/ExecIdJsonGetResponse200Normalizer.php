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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (array_key_exists('CanRemove', $data)) {
            $object->canRemove = $data['CanRemove'];
            unset($data['CanRemove']);
        }
        if (array_key_exists('DetachKeys', $data)) {
            $object->detachKeys = $data['DetachKeys'];
            unset($data['DetachKeys']);
        }
        if (array_key_exists('ID', $data)) {
            $object->iD = $data['ID'];
            unset($data['ID']);
        }
        if (array_key_exists('Running', $data)) {
            $object->running = $data['Running'];
            unset($data['Running']);
        }
        if (array_key_exists('ExitCode', $data)) {
            $object->exitCode = $data['ExitCode'];
            unset($data['ExitCode']);
        }
        if (array_key_exists('ProcessConfig', $data)) {
            $object->processConfig = $this->denormalizer->denormalize($data['ProcessConfig'], \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class, 'json', $context);
            unset($data['ProcessConfig']);
        }
        if (array_key_exists('OpenStdin', $data)) {
            $object->openStdin = $data['OpenStdin'];
            unset($data['OpenStdin']);
        }
        if (array_key_exists('OpenStderr', $data)) {
            $object->openStderr = $data['OpenStderr'];
            unset($data['OpenStderr']);
        }
        if (array_key_exists('OpenStdout', $data)) {
            $object->openStdout = $data['OpenStdout'];
            unset($data['OpenStdout']);
        }
        if (array_key_exists('ContainerID', $data)) {
            $object->containerID = $data['ContainerID'];
            unset($data['ContainerID']);
        }
        if (array_key_exists('Pid', $data)) {
            $object->pid = $data['Pid'];
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
        if (array_key_exists('canRemove', get_object_vars($data)) && null !== ($data->canRemove ?? null)) {
            $dataArray['CanRemove'] = $data->canRemove;
        }
        if (array_key_exists('detachKeys', get_object_vars($data)) && null !== ($data->detachKeys ?? null)) {
            $dataArray['DetachKeys'] = $data->detachKeys;
        }
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $dataArray['ID'] = $data->iD;
        }
        if (array_key_exists('running', get_object_vars($data)) && null !== ($data->running ?? null)) {
            $dataArray['Running'] = $data->running;
        }
        if (array_key_exists('exitCode', get_object_vars($data)) && null !== ($data->exitCode ?? null)) {
            $dataArray['ExitCode'] = $data->exitCode;
        }
        if (array_key_exists('processConfig', get_object_vars($data)) && null !== ($data->processConfig ?? null)) {
            $normalized                 = $this->normalizer->normalize($data->processConfig, 'json', $context);
            $dataArray['ProcessConfig'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('openStdin', get_object_vars($data)) && null !== ($data->openStdin ?? null)) {
            $dataArray['OpenStdin'] = $data->openStdin;
        }
        if (array_key_exists('openStderr', get_object_vars($data)) && null !== ($data->openStderr ?? null)) {
            $dataArray['OpenStderr'] = $data->openStderr;
        }
        if (array_key_exists('openStdout', get_object_vars($data)) && null !== ($data->openStdout ?? null)) {
            $dataArray['OpenStdout'] = $data->openStdout;
        }
        if (array_key_exists('containerID', get_object_vars($data)) && null !== ($data->containerID ?? null)) {
            $dataArray['ContainerID'] = $data->containerID;
        }
        if (array_key_exists('pid', get_object_vars($data)) && null !== ($data->pid ?? null)) {
            $dataArray['Pid'] = $data->pid;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
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
