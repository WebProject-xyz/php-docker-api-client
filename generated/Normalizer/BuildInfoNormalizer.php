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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\BuildInfo();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\BuildInfoConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('stream', $data)) {
            $object->setStream($data['stream']);
            unset($data['stream']);
        }
        if (array_key_exists('error', $data) && null !== $data['error']) {
            $object->setError($data['error']);
            unset($data['error']);
        } elseif (array_key_exists('error', $data) && null === $data['error']) {
            $object->setError(null);
        }
        if (array_key_exists('errorDetail', $data)) {
            $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class, 'json', $context));
            unset($data['errorDetail']);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (array_key_exists('progress', $data) && null !== $data['progress']) {
            $object->setProgress($data['progress']);
            unset($data['progress']);
        } elseif (array_key_exists('progress', $data) && null === $data['progress']) {
            $object->setProgress(null);
        }
        if (array_key_exists('progressDetail', $data)) {
            $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class, 'json', $context));
            unset($data['progressDetail']);
        }
        if (array_key_exists('aux', $data)) {
            $object->setAux($this->denormalizer->denormalize($data['aux'], \WebProject\DockerApi\Library\Generated\Model\ImageID::class, 'json', $context));
            unset($data['aux']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('stream') && null !== $data->getStream()) {
            $dataArray['stream'] = $data->getStream();
        }
        if ($data->isInitialized('error') && null !== $data->getError()) {
            $dataArray['error'] = $data->getError();
        }
        if ($data->isInitialized('errorDetail') && null !== $data->getErrorDetail()) {
            $dataArray['errorDetail'] = $this->normalizer->normalize($data->getErrorDetail(), 'json', $context);
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('progress') && null !== $data->getProgress()) {
            $dataArray['progress'] = $data->getProgress();
        }
        if ($data->isInitialized('progressDetail') && null !== $data->getProgressDetail()) {
            $dataArray['progressDetail'] = $this->normalizer->normalize($data->getProgressDetail(), 'json', $context);
        }
        if ($data->isInitialized('aux') && null !== $data->getAux()) {
            $dataArray['aux'] = $this->normalizer->normalize($data->getAux(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\BuildInfoConstraint());
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
