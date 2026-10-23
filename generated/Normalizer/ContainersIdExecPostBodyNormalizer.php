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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('AttachStdin', $data) && is_int($data['AttachStdin'])) {
            $data['AttachStdin'] = (bool) $data['AttachStdin'];
        }
        if (array_key_exists('AttachStdout', $data) && is_int($data['AttachStdout'])) {
            $data['AttachStdout'] = (bool) $data['AttachStdout'];
        }
        if (array_key_exists('AttachStderr', $data) && is_int($data['AttachStderr'])) {
            $data['AttachStderr'] = (bool) $data['AttachStderr'];
        }
        if (array_key_exists('Tty', $data) && is_int($data['Tty'])) {
            $data['Tty'] = (bool) $data['Tty'];
        }
        if (array_key_exists('Privileged', $data) && is_int($data['Privileged'])) {
            $data['Privileged'] = (bool) $data['Privileged'];
        }
        if (array_key_exists('AttachStdin', $data)) {
            $object->attachStdin = $data['AttachStdin'];
            unset($data['AttachStdin']);
        }
        if (array_key_exists('AttachStdout', $data)) {
            $object->attachStdout = $data['AttachStdout'];
            unset($data['AttachStdout']);
        }
        if (array_key_exists('AttachStderr', $data)) {
            $object->attachStderr = $data['AttachStderr'];
            unset($data['AttachStderr']);
        }
        if (array_key_exists('ConsoleSize', $data) && null !== $data['ConsoleSize']) {
            $values = [];
            foreach ($data['ConsoleSize'] as $value) {
                $values[] = $value;
            }
            $object->consoleSize = $values;
            unset($data['ConsoleSize']);
        } elseif (array_key_exists('ConsoleSize', $data)) {
            $object->consoleSize = null;
            unset($data['ConsoleSize']);
        }
        if (array_key_exists('DetachKeys', $data)) {
            $object->detachKeys = $data['DetachKeys'];
            unset($data['DetachKeys']);
        }
        if (array_key_exists('Tty', $data)) {
            $object->tty = $data['Tty'];
            unset($data['Tty']);
        }
        if (array_key_exists('Env', $data)) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->env = $values_1;
            unset($data['Env']);
        }
        if (array_key_exists('Cmd', $data)) {
            $values_2 = [];
            foreach ($data['Cmd'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->cmd = $values_2;
            unset($data['Cmd']);
        }
        if (array_key_exists('Privileged', $data)) {
            $object->privileged = $data['Privileged'];
            unset($data['Privileged']);
        }
        if (array_key_exists('User', $data)) {
            $object->user = $data['User'];
            unset($data['User']);
        }
        if (array_key_exists('WorkingDir', $data)) {
            $object->workingDir = $data['WorkingDir'];
            unset($data['WorkingDir']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('attachStdin', get_object_vars($data)) && null !== ($data->attachStdin ?? null)) {
            $dataArray['AttachStdin'] = $data->attachStdin;
        }
        if (array_key_exists('attachStdout', get_object_vars($data)) && null !== ($data->attachStdout ?? null)) {
            $dataArray['AttachStdout'] = $data->attachStdout;
        }
        if (array_key_exists('attachStderr', get_object_vars($data)) && null !== ($data->attachStderr ?? null)) {
            $dataArray['AttachStderr'] = $data->attachStderr;
        }
        if (array_key_exists('consoleSize', get_object_vars($data)) && null !== ($data->consoleSize ?? null)) {
            $values = [];
            foreach ($data->consoleSize as $value) {
                $values[] = $value;
            }
            $dataArray['ConsoleSize'] = $values;
        }
        if (array_key_exists('detachKeys', get_object_vars($data)) && null !== ($data->detachKeys ?? null)) {
            $dataArray['DetachKeys'] = $data->detachKeys;
        }
        if (array_key_exists('tty', get_object_vars($data)) && null !== ($data->tty ?? null)) {
            $dataArray['Tty'] = $data->tty;
        }
        if (array_key_exists('env', get_object_vars($data)) && null !== ($data->env ?? null)) {
            $values_1 = [];
            foreach ($data->env as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Env'] = $values_1;
        }
        if (array_key_exists('cmd', get_object_vars($data)) && null !== ($data->cmd ?? null)) {
            $values_2 = [];
            foreach ($data->cmd as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Cmd'] = $values_2;
        }
        if (array_key_exists('privileged', get_object_vars($data)) && null !== ($data->privileged ?? null)) {
            $dataArray['Privileged'] = $data->privileged;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['User'] = $data->user;
        }
        if (array_key_exists('workingDir', get_object_vars($data)) && null !== ($data->workingDir ?? null)) {
            $dataArray['WorkingDir'] = $data->workingDir;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
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
