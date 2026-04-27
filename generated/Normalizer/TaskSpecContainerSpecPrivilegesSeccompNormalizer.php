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
            $object->setMode($value);
        } elseif (array_key_exists('Mode', $data) && null === $data['Mode']) {
            $object->setMode(null);
        }
        if (array_key_exists('Profile', $data) && null !== $data['Profile']) {
            $value_1 = $data['Profile'];
            if (is_string($data['Profile'])) {
                $value_1 = $data['Profile'];
            } elseif (null === $data['Profile']) {
                $value_1 = $data['Profile'];
            }
            $object->setProfile($value_1);
        } elseif (array_key_exists('Profile', $data) && null === $data['Profile']) {
            $object->setProfile(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('mode')) {
            $value = $data->getMode();
            if (is_string($data->getMode())) {
                $value = $data->getMode();
            } elseif (null === $data->getMode()) {
                $value = $data->getMode();
            }
            $dataArray['Mode'] = $value;
        }
        if ($data->isInitialized('profile')) {
            $value_1 = $data->getProfile();
            if (is_string($data->getProfile())) {
                $value_1 = $data->getProfile();
            } elseif (null === $data->getProfile()) {
                $value_1 = $data->getProfile();
            }
            $dataArray['Profile'] = $value_1;
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
