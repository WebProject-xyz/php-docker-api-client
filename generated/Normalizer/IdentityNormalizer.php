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

class IdentityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Identity::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Identity::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Identity();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Signature', $data) && null !== $data['Signature']) {
            $value = $data['Signature'];
            if (is_array($data['Signature']) && $this->isOnlyNumericKeys($data['Signature'])) {
                $values = [];
                foreach ($data['Signature'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\SignatureIdentity::class, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data['Signature']) {
                $value = $data['Signature'];
            }
            $object->setSignature($value);
        } elseif (array_key_exists('Signature', $data) && null === $data['Signature']) {
            $object->setSignature(null);
        }
        if (array_key_exists('Pull', $data) && null !== $data['Pull']) {
            $value_2 = $data['Pull'];
            if (is_array($data['Pull']) && $this->isOnlyNumericKeys($data['Pull'])) {
                $values_1 = [];
                foreach ($data['Pull'] as $value_3) {
                    $values_1[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\PullIdentity::class, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data['Pull']) {
                $value_2 = $data['Pull'];
            }
            $object->setPull($value_2);
        } elseif (array_key_exists('Pull', $data) && null === $data['Pull']) {
            $object->setPull(null);
        }
        if (array_key_exists('Build', $data) && null !== $data['Build']) {
            $value_4 = $data['Build'];
            if (is_array($data['Build']) && $this->isOnlyNumericKeys($data['Build'])) {
                $values_2 = [];
                foreach ($data['Build'] as $value_5) {
                    $values_2[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\BuildIdentity::class, 'json', $context);
                }
                $value_4 = $values_2;
            } elseif (null === $data['Build']) {
                $value_4 = $data['Build'];
            }
            $object->setBuild($value_4);
        } elseif (array_key_exists('Build', $data) && null === $data['Build']) {
            $object->setBuild(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('signature')) {
            $value = $data->getSignature();
            if (is_array($data->getSignature())) {
                $values = [];
                foreach ($data->getSignature() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data->getSignature()) {
                $value = $data->getSignature();
            }
            $dataArray['Signature'] = $value;
        }
        if ($data->isInitialized('pull')) {
            $value_2 = $data->getPull();
            if (is_array($data->getPull())) {
                $values_1 = [];
                foreach ($data->getPull() as $value_3) {
                    $values_1[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data->getPull()) {
                $value_2 = $data->getPull();
            }
            $dataArray['Pull'] = $value_2;
        }
        if ($data->isInitialized('build')) {
            $value_4 = $data->getBuild();
            if (is_array($data->getBuild())) {
                $values_2 = [];
                foreach ($data->getBuild() as $value_5) {
                    $values_2[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $value_4 = $values_2;
            } elseif (null === $data->getBuild()) {
                $value_4 = $data->getBuild();
            }
            $dataArray['Build'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Identity::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
