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
use function is_object;
use function is_string;

class TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Config', $data) && null !== $data['Config']) {
            $value = $data['Config'];
            if (is_string($data['Config'])) {
                $value = $data['Config'];
            } elseif (null === $data['Config']) {
                $value = $data['Config'];
            }
            $object->config = $value;
            unset($data['Config']);
        } elseif (array_key_exists('Config', $data)) {
            $object->config = null;
            unset($data['Config']);
        }
        if (array_key_exists('File', $data) && null !== $data['File']) {
            $value_1 = $data['File'];
            if (is_string($data['File'])) {
                $value_1 = $data['File'];
            } elseif (null === $data['File']) {
                $value_1 = $data['File'];
            }
            $object->file = $value_1;
            unset($data['File']);
        } elseif (array_key_exists('File', $data)) {
            $object->file = null;
            unset($data['File']);
        }
        if (array_key_exists('Registry', $data) && null !== $data['Registry']) {
            $value_2 = $data['Registry'];
            if (is_string($data['Registry'])) {
                $value_2 = $data['Registry'];
            } elseif (null === $data['Registry']) {
                $value_2 = $data['Registry'];
            }
            $object->registry = $value_2;
            unset($data['Registry']);
        } elseif (array_key_exists('Registry', $data)) {
            $object->registry = null;
            unset($data['Registry']);
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
        if (array_key_exists('config', get_object_vars($data)) && null !== ($data->config ?? null)) {
            $value = $data->config;
            if (is_string($data->config)) {
                $value = $data->config;
            } elseif (null === $data->config) {
                $value = $data->config;
            }
            $dataArray['Config'] = $value;
        }
        if (array_key_exists('file', get_object_vars($data)) && null !== ($data->file ?? null)) {
            $value_1 = $data->file;
            if (is_string($data->file)) {
                $value_1 = $data->file;
            } elseif (null === $data->file) {
                $value_1 = $data->file;
            }
            $dataArray['File'] = $value_1;
        }
        if (array_key_exists('registry', get_object_vars($data)) && null !== ($data->registry ?? null)) {
            $value_2 = $data->registry;
            if (is_string($data->registry)) {
                $value_2 = $data->registry;
            } elseif (null === $data->registry) {
                $value_2 = $data->registry;
            }
            $dataArray['Registry'] = $value_2;
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
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
