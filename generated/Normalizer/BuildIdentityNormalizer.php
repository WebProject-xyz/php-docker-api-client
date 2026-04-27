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

class BuildIdentityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\BuildIdentity::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\BuildIdentity::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\BuildIdentity();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Ref', $data) && null !== $data['Ref']) {
            $value = $data['Ref'];
            if (is_string($data['Ref'])) {
                $value = $data['Ref'];
            } elseif (null === $data['Ref']) {
                $value = $data['Ref'];
            }
            $object->setRef($value);
        } elseif (array_key_exists('Ref', $data) && null === $data['Ref']) {
            $object->setRef(null);
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $value_1 = $data['CreatedAt'];
            if (is_string($data['CreatedAt'])) {
                $value_1 = $data['CreatedAt'];
            } elseif (null === $data['CreatedAt']) {
                $value_1 = $data['CreatedAt'];
            }
            $object->setCreatedAt($value_1);
        } elseif (array_key_exists('CreatedAt', $data) && null === $data['CreatedAt']) {
            $object->setCreatedAt(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('ref')) {
            $value = $data->getRef();
            if (is_string($data->getRef())) {
                $value = $data->getRef();
            } elseif (null === $data->getRef()) {
                $value = $data->getRef();
            }
            $dataArray['Ref'] = $value;
        }
        if ($data->isInitialized('createdAt')) {
            $value_1 = $data->getCreatedAt();
            if (is_string($data->getCreatedAt())) {
                $value_1 = $data->getCreatedAt();
            } elseif (null === $data->getCreatedAt()) {
                $value_1 = $data->getCreatedAt();
            }
            $dataArray['CreatedAt'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\BuildIdentity::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
