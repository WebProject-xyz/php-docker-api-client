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

class PlatformNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Platform::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Platform::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Platform();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Architecture', $data) && null !== $data['Architecture']) {
            $value = $data['Architecture'];
            if (is_string($data['Architecture'])) {
                $value = $data['Architecture'];
            } elseif (null === $data['Architecture']) {
                $value = $data['Architecture'];
            }
            $object->setArchitecture($value);
        } elseif (array_key_exists('Architecture', $data) && null === $data['Architecture']) {
            $object->setArchitecture(null);
        }
        if (array_key_exists('OS', $data) && null !== $data['OS']) {
            $value_1 = $data['OS'];
            if (is_string($data['OS'])) {
                $value_1 = $data['OS'];
            } elseif (null === $data['OS']) {
                $value_1 = $data['OS'];
            }
            $object->setOS($value_1);
        } elseif (array_key_exists('OS', $data) && null === $data['OS']) {
            $object->setOS(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('architecture')) {
            $value = $data->getArchitecture();
            if (is_string($data->getArchitecture())) {
                $value = $data->getArchitecture();
            } elseif (null === $data->getArchitecture()) {
                $value = $data->getArchitecture();
            }
            $dataArray['Architecture'] = $value;
        }
        if ($data->isInitialized('oS')) {
            $value_1 = $data->getOS();
            if (is_string($data->getOS())) {
                $value_1 = $data->getOS();
            } elseif (null === $data->getOS()) {
                $value_1 = $data->getOS();
            }
            $dataArray['OS'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Platform::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
