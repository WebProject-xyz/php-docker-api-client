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

class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('NodeCertExpiry', $data) && null !== $data['NodeCertExpiry']) {
            $value = $data['NodeCertExpiry'];
            if (is_int($data['NodeCertExpiry'])) {
                $value = $data['NodeCertExpiry'];
            } elseif (null === $data['NodeCertExpiry']) {
                $value = $data['NodeCertExpiry'];
            }
            $object->nodeCertExpiry = $value;
            unset($data['NodeCertExpiry']);
        } elseif (array_key_exists('NodeCertExpiry', $data)) {
            $object->nodeCertExpiry = null;
            unset($data['NodeCertExpiry']);
        }
        if (array_key_exists('ExternalCAs', $data) && null !== $data['ExternalCAs']) {
            $values = [];
            foreach ($data['ExternalCAs'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class, 'json', $context);
            }
            $object->externalCAs = $values;
            unset($data['ExternalCAs']);
        } elseif (array_key_exists('ExternalCAs', $data)) {
            $object->externalCAs = null;
            unset($data['ExternalCAs']);
        }
        if (array_key_exists('SigningCACert', $data) && null !== $data['SigningCACert']) {
            $value_2 = $data['SigningCACert'];
            if (is_string($data['SigningCACert'])) {
                $value_2 = $data['SigningCACert'];
            } elseif (null === $data['SigningCACert']) {
                $value_2 = $data['SigningCACert'];
            }
            $object->signingCACert = $value_2;
            unset($data['SigningCACert']);
        } elseif (array_key_exists('SigningCACert', $data)) {
            $object->signingCACert = null;
            unset($data['SigningCACert']);
        }
        if (array_key_exists('SigningCAKey', $data) && null !== $data['SigningCAKey']) {
            $value_3 = $data['SigningCAKey'];
            if (is_string($data['SigningCAKey'])) {
                $value_3 = $data['SigningCAKey'];
            } elseif (null === $data['SigningCAKey']) {
                $value_3 = $data['SigningCAKey'];
            }
            $object->signingCAKey = $value_3;
            unset($data['SigningCAKey']);
        } elseif (array_key_exists('SigningCAKey', $data)) {
            $object->signingCAKey = null;
            unset($data['SigningCAKey']);
        }
        if (array_key_exists('ForceRotate', $data) && null !== $data['ForceRotate']) {
            $value_4 = $data['ForceRotate'];
            if (is_int($data['ForceRotate'])) {
                $value_4 = $data['ForceRotate'];
            } elseif (null === $data['ForceRotate']) {
                $value_4 = $data['ForceRotate'];
            }
            $object->forceRotate = $value_4;
            unset($data['ForceRotate']);
        } elseif (array_key_exists('ForceRotate', $data)) {
            $object->forceRotate = null;
            unset($data['ForceRotate']);
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
        if (array_key_exists('nodeCertExpiry', get_object_vars($data)) && null !== ($data->nodeCertExpiry ?? null)) {
            $value = $data->nodeCertExpiry;
            if (is_int($data->nodeCertExpiry)) {
                $value = $data->nodeCertExpiry;
            } elseif (null === $data->nodeCertExpiry) {
                $value = $data->nodeCertExpiry;
            }
            $dataArray['NodeCertExpiry'] = $value;
        }
        if (array_key_exists('externalCAs', get_object_vars($data)) && null !== ($data->externalCAs ?? null)) {
            $values = [];
            foreach ($data->externalCAs as $value_1) {
                $normalized = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['ExternalCAs'] = $values;
        }
        if (array_key_exists('signingCACert', get_object_vars($data)) && null !== ($data->signingCACert ?? null)) {
            $value_2 = $data->signingCACert;
            if (is_string($data->signingCACert)) {
                $value_2 = $data->signingCACert;
            } elseif (null === $data->signingCACert) {
                $value_2 = $data->signingCACert;
            }
            $dataArray['SigningCACert'] = $value_2;
        }
        if (array_key_exists('signingCAKey', get_object_vars($data)) && null !== ($data->signingCAKey ?? null)) {
            $value_3 = $data->signingCAKey;
            if (is_string($data->signingCAKey)) {
                $value_3 = $data->signingCAKey;
            } elseif (null === $data->signingCAKey) {
                $value_3 = $data->signingCAKey;
            }
            $dataArray['SigningCAKey'] = $value_3;
        }
        if (array_key_exists('forceRotate', get_object_vars($data)) && null !== ($data->forceRotate ?? null)) {
            $value_4 = $data->forceRotate;
            if (is_int($data->forceRotate)) {
                $value_4 = $data->forceRotate;
            } elseif (null === $data->forceRotate) {
                $value_4 = $data->forceRotate;
            }
            $dataArray['ForceRotate'] = $value_4;
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
        return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
