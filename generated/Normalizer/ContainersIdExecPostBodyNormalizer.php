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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody();
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('attachStdin') && null !== $data->getAttachStdin()) {
            $dataArray['AttachStdin'] = $data->getAttachStdin();
        }
        if ($data->isInitialized('attachStdout') && null !== $data->getAttachStdout()) {
            $dataArray['AttachStdout'] = $data->getAttachStdout();
        }
        if ($data->isInitialized('attachStderr') && null !== $data->getAttachStderr()) {
            $dataArray['AttachStderr'] = $data->getAttachStderr();
        }
        if ($data->isInitialized('consoleSize') && null !== $data->getConsoleSize()) {
            $values = [];
            foreach ($data->getConsoleSize() as $value) {
                $values[] = $value;
            }
            $dataArray['ConsoleSize'] = $values;
        }
        if ($data->isInitialized('detachKeys') && null !== $data->getDetachKeys()) {
            $dataArray['DetachKeys'] = $data->getDetachKeys();
        }
        if ($data->isInitialized('tty') && null !== $data->getTty()) {
            $dataArray['Tty'] = $data->getTty();
        }
        if ($data->isInitialized('env') && null !== $data->getEnv()) {
            $values_1 = [];
            foreach ($data->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Env'] = $values_1;
        }
        if ($data->isInitialized('cmd') && null !== $data->getCmd()) {
            $values_2 = [];
            foreach ($data->getCmd() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Cmd'] = $values_2;
        }
        if ($data->isInitialized('privileged') && null !== $data->getPrivileged()) {
            $dataArray['Privileged'] = $data->getPrivileged();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['User'] = $data->getUser();
        }
        if ($data->isInitialized('workingDir') && null !== $data->getWorkingDir()) {
            $dataArray['WorkingDir'] = $data->getWorkingDir();
        }
        foreach ($data as $key => $value_3) {
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
