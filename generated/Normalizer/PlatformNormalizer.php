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
            $object->architecture = $value;
            unset($data['Architecture']);
        } elseif (array_key_exists('Architecture', $data)) {
            $object->architecture = null;
            unset($data['Architecture']);
        }
        if (array_key_exists('OS', $data) && null !== $data['OS']) {
            $value_1 = $data['OS'];
            if (is_string($data['OS'])) {
                $value_1 = $data['OS'];
            } elseif (null === $data['OS']) {
                $value_1 = $data['OS'];
            }
            $object->oS = $value_1;
            unset($data['OS']);
        } elseif (array_key_exists('OS', $data)) {
            $object->oS = null;
            unset($data['OS']);
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
        if (array_key_exists('architecture', get_object_vars($data)) && null !== ($data->architecture ?? null)) {
            $value = $data->architecture;
            if (is_string($data->architecture)) {
                $value = $data->architecture;
            } elseif (null === $data->architecture) {
                $value = $data->architecture;
            }
            $dataArray['Architecture'] = $value;
        }
        if (array_key_exists('oS', get_object_vars($data)) && null !== ($data->oS ?? null)) {
            $value_1 = $data->oS;
            if (is_string($data->oS)) {
                $value_1 = $data->oS;
            } elseif (null === $data->oS) {
                $value_1 = $data->oS;
            }
            $dataArray['OS'] = $value_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\Platform::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
