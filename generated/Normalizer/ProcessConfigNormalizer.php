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

class ProcessConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ProcessConfig();
        if (array_key_exists('privileged', $data) && is_int($data['privileged'])) {
            $data['privileged'] = (bool) $data['privileged'];
        }
        if (array_key_exists('tty', $data) && is_int($data['tty'])) {
            $data['tty'] = (bool) $data['tty'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('privileged', $data)) {
            $object->setPrivileged($data['privileged']);
            unset($data['privileged']);
        }
        if (array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        if (array_key_exists('tty', $data)) {
            $object->setTty($data['tty']);
            unset($data['tty']);
        }
        if (array_key_exists('entrypoint', $data)) {
            $object->setEntrypoint($data['entrypoint']);
            unset($data['entrypoint']);
        }
        if (array_key_exists('arguments', $data)) {
            $values = [];
            foreach ($data['arguments'] as $value) {
                $values[] = $value;
            }
            $object->setArguments($values);
            unset($data['arguments']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('privileged') && null !== $data->getPrivileged()) {
            $dataArray['privileged'] = $data->getPrivileged();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('tty') && null !== $data->getTty()) {
            $dataArray['tty'] = $data->getTty();
        }
        if ($data->isInitialized('entrypoint') && null !== $data->getEntrypoint()) {
            $dataArray['entrypoint'] = $data->getEntrypoint();
        }
        if ($data->isInitialized('arguments') && null !== $data->getArguments()) {
            $values = [];
            foreach ($data->getArguments() as $value) {
                $values[] = $value;
            }
            $dataArray['arguments'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
