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

class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\MountBindOptions();
        if (array_key_exists('NonRecursive', $data) && is_int($data['NonRecursive'])) {
            $data['NonRecursive'] = (bool) $data['NonRecursive'];
        }
        if (array_key_exists('CreateMountpoint', $data) && is_int($data['CreateMountpoint'])) {
            $data['CreateMountpoint'] = (bool) $data['CreateMountpoint'];
        }
        if (array_key_exists('ReadOnlyNonRecursive', $data) && is_int($data['ReadOnlyNonRecursive'])) {
            $data['ReadOnlyNonRecursive'] = (bool) $data['ReadOnlyNonRecursive'];
        }
        if (array_key_exists('ReadOnlyForceRecursive', $data) && is_int($data['ReadOnlyForceRecursive'])) {
            $data['ReadOnlyForceRecursive'] = (bool) $data['ReadOnlyForceRecursive'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\MountBindOptionsConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Propagation', $data)) {
            $object->setPropagation($data['Propagation']);
            unset($data['Propagation']);
        }
        if (array_key_exists('NonRecursive', $data)) {
            $object->setNonRecursive($data['NonRecursive']);
            unset($data['NonRecursive']);
        }
        if (array_key_exists('CreateMountpoint', $data)) {
            $object->setCreateMountpoint($data['CreateMountpoint']);
            unset($data['CreateMountpoint']);
        }
        if (array_key_exists('ReadOnlyNonRecursive', $data)) {
            $object->setReadOnlyNonRecursive($data['ReadOnlyNonRecursive']);
            unset($data['ReadOnlyNonRecursive']);
        }
        if (array_key_exists('ReadOnlyForceRecursive', $data)) {
            $object->setReadOnlyForceRecursive($data['ReadOnlyForceRecursive']);
            unset($data['ReadOnlyForceRecursive']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('propagation') && null !== $data->getPropagation()) {
            $dataArray['Propagation'] = $data->getPropagation();
        }
        if ($data->isInitialized('nonRecursive') && null !== $data->getNonRecursive()) {
            $dataArray['NonRecursive'] = $data->getNonRecursive();
        }
        if ($data->isInitialized('createMountpoint') && null !== $data->getCreateMountpoint()) {
            $dataArray['CreateMountpoint'] = $data->getCreateMountpoint();
        }
        if ($data->isInitialized('readOnlyNonRecursive') && null !== $data->getReadOnlyNonRecursive()) {
            $dataArray['ReadOnlyNonRecursive'] = $data->getReadOnlyNonRecursive();
        }
        if ($data->isInitialized('readOnlyForceRecursive') && null !== $data->getReadOnlyForceRecursive()) {
            $dataArray['ReadOnlyForceRecursive'] = $data->getReadOnlyForceRecursive();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\MountBindOptionsConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
