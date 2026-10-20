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

class EventActorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EventActor::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EventActor::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EventActor();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ID', $data) && null !== $data['ID']) {
            $value = $data['ID'];
            if (is_string($data['ID'])) {
                $value = $data['ID'];
            } elseif (null === $data['ID']) {
                $value = $data['ID'];
            }
            $object->iD = $value;
            unset($data['ID']);
        } elseif (array_key_exists('ID', $data)) {
            $object->iD = null;
            unset($data['ID']);
        }
        if (array_key_exists('Attributes', $data) && null !== $data['Attributes']) {
            $value_1 = $data['Attributes'];
            if (is_array($data['Attributes']) && $this->isOnlyNumericKeys($data['Attributes'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Attributes'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Attributes']) {
                $value_1 = $data['Attributes'];
            }
            $object->attributes = $value_1;
            unset($data['Attributes']);
        } elseif (array_key_exists('Attributes', $data)) {
            $object->attributes = null;
            unset($data['Attributes']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $value = $data->iD;
            if (is_string($data->iD)) {
                $value = $data->iD;
            } elseif (null === $data->iD) {
                $value = $data->iD;
            }
            $dataArray['ID'] = $value;
        }
        if (array_key_exists('attributes', get_object_vars($data)) && null !== ($data->attributes ?? null)) {
            $value_1 = $data->attributes;
            if (is_iterable($data->attributes)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->attributes as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->attributes) {
                $value_1 = $data->attributes;
            }
            $dataArray['Attributes'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\EventActor::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
