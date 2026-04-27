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
            $object->setType($value);
        } elseif (array_key_exists('Type', $data) && null === $data['Type']) {
            $object->setType(null);
        }
        if (array_key_exists('Action', $data) && null !== $data['Action']) {
            $value_1 = $data['Action'];
            if (is_string($data['Action'])) {
                $value_1 = $data['Action'];
            } elseif (null === $data['Action']) {
                $value_1 = $data['Action'];
            }
            $object->setAction($value_1);
        } elseif (array_key_exists('Action', $data) && null === $data['Action']) {
            $object->setAction(null);
        }
        if (array_key_exists('Actor', $data)) {
            $object->setActor($this->denormalizer->denormalize($data['Actor'], \WebProject\DockerApi\Library\Generated\Model\EventActor::class, 'json', $context));
        }
        if (array_key_exists('scope', $data) && null !== $data['scope']) {
            $value_2 = $data['scope'];
            if (is_string($data['scope'])) {
                $value_2 = $data['scope'];
            } elseif (null === $data['scope']) {
                $value_2 = $data['scope'];
            }
            $object->setScope($value_2);
        } elseif (array_key_exists('scope', $data) && null === $data['scope']) {
            $object->setScope(null);
        }
        if (array_key_exists('time', $data) && null !== $data['time']) {
            $value_3 = $data['time'];
            if (is_int($data['time'])) {
                $value_3 = $data['time'];
            } elseif (null === $data['time']) {
                $value_3 = $data['time'];
            }
            $object->setTime($value_3);
        } elseif (array_key_exists('time', $data) && null === $data['time']) {
            $object->setTime(null);
        }
        if (array_key_exists('timeNano', $data) && null !== $data['timeNano']) {
            $value_4 = $data['timeNano'];
            if (is_int($data['timeNano'])) {
                $value_4 = $data['timeNano'];
            } elseif (null === $data['timeNano']) {
                $value_4 = $data['timeNano'];
            }
            $object->setTimeNano($value_4);
        } elseif (array_key_exists('timeNano', $data) && null === $data['timeNano']) {
            $object->setTimeNano(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('type')) {
            $value = $data->getType();
            if (is_string($data->getType())) {
                $value = $data->getType();
            } elseif (null === $data->getType()) {
                $value = $data->getType();
            }
            $dataArray['Type'] = $value;
        }
        if ($data->isInitialized('action')) {
            $value_1 = $data->getAction();
            if (is_string($data->getAction())) {
                $value_1 = $data->getAction();
            } elseif (null === $data->getAction()) {
                $value_1 = $data->getAction();
            }
            $dataArray['Action'] = $value_1;
        }
        if ($data->isInitialized('actor') && null !== $data->getActor()) {
            $dataArray['Actor'] = $this->normalizer->normalize($data->getActor(), 'json', $context);
        }
        if ($data->isInitialized('scope')) {
            $value_2 = $data->getScope();
            if (is_string($data->getScope())) {
                $value_2 = $data->getScope();
            } elseif (null === $data->getScope()) {
                $value_2 = $data->getScope();
            }
            $dataArray['scope'] = $value_2;
        }
        if ($data->isInitialized('time')) {
            $value_3 = $data->getTime();
            if (is_int($data->getTime())) {
                $value_3 = $data->getTime();
            } elseif (null === $data->getTime()) {
                $value_3 = $data->getTime();
            }
            $dataArray['time'] = $value_3;
        }
        if ($data->isInitialized('timeNano')) {
            $value_4 = $data->getTimeNano();
            if (is_int($data->getTimeNano())) {
                $value_4 = $data->getTimeNano();
            } elseif (null === $data->getTimeNano()) {
                $value_4 = $data->getTimeNano();
            }
            $dataArray['timeNano'] = $value_4;
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
