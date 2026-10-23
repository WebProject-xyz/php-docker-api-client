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

class EventMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EventMessage::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EventMessage::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EventMessage();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Type', $data) && null !== $data['Type']) {
            $value = $data['Type'];
            if (is_string($data['Type'])) {
                $value = $data['Type'];
            } elseif (null === $data['Type']) {
                $value = $data['Type'];
            }
            $object->type = $value;
            unset($data['Type']);
        } elseif (array_key_exists('Type', $data)) {
            $object->type = null;
            unset($data['Type']);
        }
        if (array_key_exists('Action', $data) && null !== $data['Action']) {
            $value_1 = $data['Action'];
            if (is_string($data['Action'])) {
                $value_1 = $data['Action'];
            } elseif (null === $data['Action']) {
                $value_1 = $data['Action'];
            }
            $object->action = $value_1;
            unset($data['Action']);
        } elseif (array_key_exists('Action', $data)) {
            $object->action = null;
            unset($data['Action']);
        }
        if (array_key_exists('Actor', $data)) {
            $object->actor = $this->denormalizer->denormalize($data['Actor'], \WebProject\DockerApi\Library\Generated\Model\EventActor::class, 'json', $context);
            unset($data['Actor']);
        }
        if (array_key_exists('scope', $data) && null !== $data['scope']) {
            $value_2 = $data['scope'];
            if (is_string($data['scope'])) {
                $value_2 = $data['scope'];
            } elseif (null === $data['scope']) {
                $value_2 = $data['scope'];
            }
            $object->scope = $value_2;
            unset($data['scope']);
        } elseif (array_key_exists('scope', $data)) {
            $object->scope = null;
            unset($data['scope']);
        }
        if (array_key_exists('time', $data) && null !== $data['time']) {
            $value_3 = $data['time'];
            if (is_int($data['time'])) {
                $value_3 = $data['time'];
            } elseif (null === $data['time']) {
                $value_3 = $data['time'];
            }
            $object->time = $value_3;
            unset($data['time']);
        } elseif (array_key_exists('time', $data)) {
            $object->time = null;
            unset($data['time']);
        }
        if (array_key_exists('timeNano', $data) && null !== $data['timeNano']) {
            $value_4 = $data['timeNano'];
            if (is_int($data['timeNano'])) {
                $value_4 = $data['timeNano'];
            } elseif (null === $data['timeNano']) {
                $value_4 = $data['timeNano'];
            }
            $object->timeNano = $value_4;
            unset($data['timeNano']);
        } elseif (array_key_exists('timeNano', $data)) {
            $object->timeNano = null;
            unset($data['timeNano']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $value = $data->type;
            if (is_string($data->type)) {
                $value = $data->type;
            } elseif (null === $data->type) {
                $value = $data->type;
            }
            $dataArray['Type'] = $value;
        }
        if (array_key_exists('action', get_object_vars($data)) && null !== ($data->action ?? null)) {
            $value_1 = $data->action;
            if (is_string($data->action)) {
                $value_1 = $data->action;
            } elseif (null === $data->action) {
                $value_1 = $data->action;
            }
            $dataArray['Action'] = $value_1;
        }
        if (array_key_exists('actor', get_object_vars($data)) && null !== ($data->actor ?? null)) {
            $normalized         = $this->normalizer->normalize($data->actor, 'json', $context);
            $dataArray['Actor'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('scope', get_object_vars($data)) && null !== ($data->scope ?? null)) {
            $value_2 = $data->scope;
            if (is_string($data->scope)) {
                $value_2 = $data->scope;
            } elseif (null === $data->scope) {
                $value_2 = $data->scope;
            }
            $dataArray['scope'] = $value_2;
        }
        if (array_key_exists('time', get_object_vars($data)) && null !== ($data->time ?? null)) {
            $value_3 = $data->time;
            if (is_int($data->time)) {
                $value_3 = $data->time;
            } elseif (null === $data->time) {
                $value_3 = $data->time;
            }
            $dataArray['time'] = $value_3;
        }
        if (array_key_exists('timeNano', get_object_vars($data)) && null !== ($data->timeNano ?? null)) {
            $value_4 = $data->timeNano;
            if (is_int($data->timeNano)) {
                $value_4 = $data->timeNano;
            } elseif (null === $data->timeNano) {
                $value_4 = $data->timeNano;
            }
            $dataArray['timeNano'] = $value_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\EventMessage::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
