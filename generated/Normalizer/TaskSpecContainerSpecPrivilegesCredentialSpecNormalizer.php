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
            $object->setConfig($value);
        } elseif (array_key_exists('Config', $data) && null === $data['Config']) {
            $object->setConfig(null);
        }
        if (array_key_exists('File', $data) && null !== $data['File']) {
            $value_1 = $data['File'];
            if (is_string($data['File'])) {
                $value_1 = $data['File'];
            } elseif (null === $data['File']) {
                $value_1 = $data['File'];
            }
            $object->setFile($value_1);
        } elseif (array_key_exists('File', $data) && null === $data['File']) {
            $object->setFile(null);
        }
        if (array_key_exists('Registry', $data) && null !== $data['Registry']) {
            $value_2 = $data['Registry'];
            if (is_string($data['Registry'])) {
                $value_2 = $data['Registry'];
            } elseif (null === $data['Registry']) {
                $value_2 = $data['Registry'];
            }
            $object->setRegistry($value_2);
        } elseif (array_key_exists('Registry', $data) && null === $data['Registry']) {
            $object->setRegistry(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('config')) {
            $value = $data->getConfig();
            if (is_string($data->getConfig())) {
                $value = $data->getConfig();
            } elseif (null === $data->getConfig()) {
                $value = $data->getConfig();
            }
            $dataArray['Config'] = $value;
        }
        if ($data->isInitialized('file')) {
            $value_1 = $data->getFile();
            if (is_string($data->getFile())) {
                $value_1 = $data->getFile();
            } elseif (null === $data->getFile()) {
                $value_1 = $data->getFile();
            }
            $dataArray['File'] = $value_1;
        }
        if ($data->isInitialized('registry')) {
            $value_2 = $data->getRegistry();
            if (is_string($data->getRegistry())) {
                $value_2 = $data->getRegistry();
            } elseif (null === $data->getRegistry()) {
                $value_2 = $data->getRegistry();
            }
            $dataArray['Registry'] = $value_2;
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
