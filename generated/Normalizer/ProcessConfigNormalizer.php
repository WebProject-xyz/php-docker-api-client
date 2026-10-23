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
use function is_object;
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ProcessConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('privileged', $data) && null !== $data['privileged']) {
            $value = $data['privileged'];
            if (is_bool($data['privileged'])) {
                $value = $data['privileged'];
            } elseif (null === $data['privileged']) {
                $value = $data['privileged'];
            }
            $object->privileged = $value;
            unset($data['privileged']);
        } elseif (array_key_exists('privileged', $data)) {
            $object->privileged = null;
            unset($data['privileged']);
        }
        if (array_key_exists('user', $data) && null !== $data['user']) {
            $value_1 = $data['user'];
            if (is_string($data['user'])) {
                $value_1 = $data['user'];
            } elseif (null === $data['user']) {
                $value_1 = $data['user'];
            }
            $object->user = $value_1;
            unset($data['user']);
        } elseif (array_key_exists('user', $data)) {
            $object->user = null;
            unset($data['user']);
        }
        if (array_key_exists('tty', $data) && null !== $data['tty']) {
            $value_2 = $data['tty'];
            if (is_bool($data['tty'])) {
                $value_2 = $data['tty'];
            } elseif (null === $data['tty']) {
                $value_2 = $data['tty'];
            }
            $object->tty = $value_2;
            unset($data['tty']);
        } elseif (array_key_exists('tty', $data)) {
            $object->tty = null;
            unset($data['tty']);
        }
        if (array_key_exists('entrypoint', $data) && null !== $data['entrypoint']) {
            $value_3 = $data['entrypoint'];
            if (is_string($data['entrypoint'])) {
                $value_3 = $data['entrypoint'];
            } elseif (null === $data['entrypoint']) {
                $value_3 = $data['entrypoint'];
            }
            $object->entrypoint = $value_3;
            unset($data['entrypoint']);
        } elseif (array_key_exists('entrypoint', $data)) {
            $object->entrypoint = null;
            unset($data['entrypoint']);
        }
        if (array_key_exists('arguments', $data) && null !== $data['arguments']) {
            $values = [];
            foreach ($data['arguments'] as $value_4) {
                $values[] = $value_4;
            }
            $object->arguments = $values;
            unset($data['arguments']);
        } elseif (array_key_exists('arguments', $data)) {
            $object->arguments = null;
            unset($data['arguments']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('privileged', get_object_vars($data)) && null !== ($data->privileged ?? null)) {
            $value = $data->privileged;
            if (is_bool($data->privileged)) {
                $value = $data->privileged;
            } elseif (null === $data->privileged) {
                $value = $data->privileged;
            }
            $dataArray['privileged'] = $value;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $value_1 = $data->user;
            if (is_string($data->user)) {
                $value_1 = $data->user;
            } elseif (null === $data->user) {
                $value_1 = $data->user;
            }
            $dataArray['user'] = $value_1;
        }
        if (array_key_exists('tty', get_object_vars($data)) && null !== ($data->tty ?? null)) {
            $value_2 = $data->tty;
            if (is_bool($data->tty)) {
                $value_2 = $data->tty;
            } elseif (null === $data->tty) {
                $value_2 = $data->tty;
            }
            $dataArray['tty'] = $value_2;
        }
        if (array_key_exists('entrypoint', get_object_vars($data)) && null !== ($data->entrypoint ?? null)) {
            $value_3 = $data->entrypoint;
            if (is_string($data->entrypoint)) {
                $value_3 = $data->entrypoint;
            } elseif (null === $data->entrypoint) {
                $value_3 = $data->entrypoint;
            }
            $dataArray['entrypoint'] = $value_3;
        }
        if (array_key_exists('arguments', get_object_vars($data)) && null !== ($data->arguments ?? null)) {
            $values = [];
            foreach ($data->arguments as $value_4) {
                $values[] = $value_4;
            }
            $dataArray['arguments'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
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
