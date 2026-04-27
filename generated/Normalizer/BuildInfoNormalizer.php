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

class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\BuildInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('id', $data) && null !== $data['id']) {
            $value = $data['id'];
            if (is_string($data['id'])) {
                $value = $data['id'];
            } elseif (null === $data['id']) {
                $value = $data['id'];
            }
            $object->setId($value);
        } elseif (array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (array_key_exists('stream', $data) && null !== $data['stream']) {
            $value_1 = $data['stream'];
            if (is_string($data['stream'])) {
                $value_1 = $data['stream'];
            } elseif (null === $data['stream']) {
                $value_1 = $data['stream'];
            }
            $object->setStream($value_1);
        } elseif (array_key_exists('stream', $data) && null === $data['stream']) {
            $object->setStream(null);
        }
        if (array_key_exists('errorDetail', $data)) {
            $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class, 'json', $context));
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $value_2 = $data['status'];
            if (is_string($data['status'])) {
                $value_2 = $data['status'];
            } elseif (null === $data['status']) {
                $value_2 = $data['status'];
            }
            $object->setStatus($value_2);
        } elseif (array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (array_key_exists('progressDetail', $data)) {
            $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class, 'json', $context));
        }
        if (array_key_exists('aux', $data)) {
            $object->setAux($this->denormalizer->denormalize($data['aux'], \WebProject\DockerApi\Library\Generated\Model\ImageID::class, 'json', $context));
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $value = $data->getId();
            if (is_string($data->getId())) {
                $value = $data->getId();
            } elseif (null === $data->getId()) {
                $value = $data->getId();
            }
            $dataArray['id'] = $value;
        }
        if ($data->isInitialized('stream')) {
            $value_1 = $data->getStream();
            if (is_string($data->getStream())) {
                $value_1 = $data->getStream();
            } elseif (null === $data->getStream()) {
                $value_1 = $data->getStream();
            }
            $dataArray['stream'] = $value_1;
        }
        if ($data->isInitialized('errorDetail') && null !== $data->getErrorDetail()) {
            $dataArray['errorDetail'] = $this->normalizer->normalize($data->getErrorDetail(), 'json', $context);
        }
        if ($data->isInitialized('status')) {
            $value_2 = $data->getStatus();
            if (is_string($data->getStatus())) {
                $value_2 = $data->getStatus();
            } elseif (null === $data->getStatus()) {
                $value_2 = $data->getStatus();
            }
            $dataArray['status'] = $value_2;
        }
        if ($data->isInitialized('progressDetail') && null !== $data->getProgressDetail()) {
            $dataArray['progressDetail'] = $this->normalizer->normalize($data->getProgressDetail(), 'json', $context);
        }
        if ($data->isInitialized('aux') && null !== $data->getAux()) {
            $dataArray['aux'] = $this->normalizer->normalize($data->getAux(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\BuildInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
