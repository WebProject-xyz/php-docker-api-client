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
            $object->setPrivileged($value);
        } elseif (array_key_exists('privileged', $data) && null === $data['privileged']) {
            $object->setPrivileged(null);
        }
        if (array_key_exists('user', $data) && null !== $data['user']) {
            $value_1 = $data['user'];
            if (is_string($data['user'])) {
                $value_1 = $data['user'];
            } elseif (null === $data['user']) {
                $value_1 = $data['user'];
            }
            $object->setUser($value_1);
        } elseif (array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (array_key_exists('tty', $data) && null !== $data['tty']) {
            $value_2 = $data['tty'];
            if (is_bool($data['tty'])) {
                $value_2 = $data['tty'];
            } elseif (null === $data['tty']) {
                $value_2 = $data['tty'];
            }
            $object->setTty($value_2);
        } elseif (array_key_exists('tty', $data) && null === $data['tty']) {
            $object->setTty(null);
        }
        if (array_key_exists('entrypoint', $data) && null !== $data['entrypoint']) {
            $value_3 = $data['entrypoint'];
            if (is_string($data['entrypoint'])) {
                $value_3 = $data['entrypoint'];
            } elseif (null === $data['entrypoint']) {
                $value_3 = $data['entrypoint'];
            }
            $object->setEntrypoint($value_3);
        } elseif (array_key_exists('entrypoint', $data) && null === $data['entrypoint']) {
            $object->setEntrypoint(null);
        }
        if (array_key_exists('arguments', $data) && null !== $data['arguments']) {
            $value_4 = $data['arguments'];
            if (is_array($data['arguments']) && $this->isOnlyNumericKeys($data['arguments'])) {
                $values = [];
                foreach ($data['arguments'] as $value_5) {
                    $values[] = $value_5;
                }
                $value_4 = $values;
            } elseif (null === $data['arguments']) {
                $value_4 = $data['arguments'];
            }
            $object->setArguments($value_4);
        } elseif (array_key_exists('arguments', $data) && null === $data['arguments']) {
            $object->setArguments(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('privileged')) {
            $value = $data->getPrivileged();
            if (is_bool($data->getPrivileged())) {
                $value = $data->getPrivileged();
            } elseif (null === $data->getPrivileged()) {
                $value = $data->getPrivileged();
            }
            $dataArray['privileged'] = $value;
        }
        if ($data->isInitialized('user')) {
            $value_1 = $data->getUser();
            if (is_string($data->getUser())) {
                $value_1 = $data->getUser();
            } elseif (null === $data->getUser()) {
                $value_1 = $data->getUser();
            }
            $dataArray['user'] = $value_1;
        }
        if ($data->isInitialized('tty')) {
            $value_2 = $data->getTty();
            if (is_bool($data->getTty())) {
                $value_2 = $data->getTty();
            } elseif (null === $data->getTty()) {
                $value_2 = $data->getTty();
            }
            $dataArray['tty'] = $value_2;
        }
        if ($data->isInitialized('entrypoint')) {
            $value_3 = $data->getEntrypoint();
            if (is_string($data->getEntrypoint())) {
                $value_3 = $data->getEntrypoint();
            } elseif (null === $data->getEntrypoint()) {
                $value_3 = $data->getEntrypoint();
            }
            $dataArray['entrypoint'] = $value_3;
        }
        if ($data->isInitialized('arguments')) {
            $value_4 = $data->getArguments();
            if (is_array($data->getArguments())) {
                $values = [];
                foreach ($data->getArguments() as $value_5) {
                    $values[] = $value_5;
                }
                $value_4 = $values;
            } elseif (null === $data->getArguments()) {
                $value_4 = $data->getArguments();
            }
            $dataArray['arguments'] = $value_4;
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
