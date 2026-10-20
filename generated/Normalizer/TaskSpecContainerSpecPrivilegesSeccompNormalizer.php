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

class TaskSpecContainerSpecPrivilegesSeccompNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value = $data['Mode'];
            if (is_string($data['Mode'])) {
                $value = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value = $data['Mode'];
            }
            $object->mode = $value;
            unset($data['Mode']);
        } elseif (array_key_exists('Mode', $data)) {
            $object->mode = null;
            unset($data['Mode']);
        }
        if (array_key_exists('Profile', $data) && null !== $data['Profile']) {
            $value_1 = $data['Profile'];
            if (is_string($data['Profile'])) {
                $value_1 = $data['Profile'];
            } elseif (null === $data['Profile']) {
                $value_1 = $data['Profile'];
            }
            $object->profile = $value_1;
            unset($data['Profile']);
        } elseif (array_key_exists('Profile', $data)) {
            $object->profile = null;
            unset($data['Profile']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $value = $data->mode;
            if (is_string($data->mode)) {
                $value = $data->mode;
            } elseif (null === $data->mode) {
                $value = $data->mode;
            }
            $dataArray['Mode'] = $value;
        }
        if (array_key_exists('profile', get_object_vars($data)) && null !== ($data->profile ?? null)) {
            $value_1 = $data->profile;
            if (is_string($data->profile)) {
                $value_1 = $data->profile;
            } elseif (null === $data->profile) {
                $value_1 = $data->profile;
            }
            $dataArray['Profile'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
