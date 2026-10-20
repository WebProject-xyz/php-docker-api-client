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
use function is_string;

class ContainerStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ContainerID', $data) && null !== $data['ContainerID']) {
            $value = $data['ContainerID'];
            if (is_string($data['ContainerID'])) {
                $value = $data['ContainerID'];
            } elseif (null === $data['ContainerID']) {
                $value = $data['ContainerID'];
            }
            $object->containerID = $value;
            unset($data['ContainerID']);
        } elseif (array_key_exists('ContainerID', $data)) {
            $object->containerID = null;
            unset($data['ContainerID']);
        }
        if (array_key_exists('PID', $data) && null !== $data['PID']) {
            $value_1 = $data['PID'];
            if (is_int($data['PID'])) {
                $value_1 = $data['PID'];
            } elseif (null === $data['PID']) {
                $value_1 = $data['PID'];
            }
            $object->pID = $value_1;
            unset($data['PID']);
        } elseif (array_key_exists('PID', $data)) {
            $object->pID = null;
            unset($data['PID']);
        }
        if (array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
            $value_2 = $data['ExitCode'];
            if (is_int($data['ExitCode'])) {
                $value_2 = $data['ExitCode'];
            } elseif (null === $data['ExitCode']) {
                $value_2 = $data['ExitCode'];
            }
            $object->exitCode = $value_2;
            unset($data['ExitCode']);
        } elseif (array_key_exists('ExitCode', $data)) {
            $object->exitCode = null;
            unset($data['ExitCode']);
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
        if (array_key_exists('containerID', get_object_vars($data)) && null !== ($data->containerID ?? null)) {
            $value = $data->containerID;
            if (is_string($data->containerID)) {
                $value = $data->containerID;
            } elseif (null === $data->containerID) {
                $value = $data->containerID;
            }
            $dataArray['ContainerID'] = $value;
        }
        if (array_key_exists('pID', get_object_vars($data)) && null !== ($data->pID ?? null)) {
            $value_1 = $data->pID;
            if (is_int($data->pID)) {
                $value_1 = $data->pID;
            } elseif (null === $data->pID) {
                $value_1 = $data->pID;
            }
            $dataArray['PID'] = $value_1;
        }
        if (array_key_exists('exitCode', get_object_vars($data)) && null !== ($data->exitCode ?? null)) {
            $value_2 = $data->exitCode;
            if (is_int($data->exitCode)) {
                $value_2 = $data->exitCode;
            } elseif (null === $data->exitCode) {
                $value_2 = $data->exitCode;
            }
            $dataArray['ExitCode'] = $value_2;
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
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
