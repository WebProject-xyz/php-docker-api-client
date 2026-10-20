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

class TLSInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TLSInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('TrustRoot', $data) && null !== $data['TrustRoot']) {
            $value = $data['TrustRoot'];
            if (is_string($data['TrustRoot'])) {
                $value = $data['TrustRoot'];
            } elseif (null === $data['TrustRoot']) {
                $value = $data['TrustRoot'];
            }
            $object->trustRoot = $value;
            unset($data['TrustRoot']);
        } elseif (array_key_exists('TrustRoot', $data)) {
            $object->trustRoot = null;
            unset($data['TrustRoot']);
        }
        if (array_key_exists('CertIssuerSubject', $data) && null !== $data['CertIssuerSubject']) {
            $value_1 = $data['CertIssuerSubject'];
            if (is_string($data['CertIssuerSubject'])) {
                $value_1 = $data['CertIssuerSubject'];
            } elseif (null === $data['CertIssuerSubject']) {
                $value_1 = $data['CertIssuerSubject'];
            }
            $object->certIssuerSubject = $value_1;
            unset($data['CertIssuerSubject']);
        } elseif (array_key_exists('CertIssuerSubject', $data)) {
            $object->certIssuerSubject = null;
            unset($data['CertIssuerSubject']);
        }
        if (array_key_exists('CertIssuerPublicKey', $data) && null !== $data['CertIssuerPublicKey']) {
            $value_2 = $data['CertIssuerPublicKey'];
            if (is_string($data['CertIssuerPublicKey'])) {
                $value_2 = $data['CertIssuerPublicKey'];
            } elseif (null === $data['CertIssuerPublicKey']) {
                $value_2 = $data['CertIssuerPublicKey'];
            }
            $object->certIssuerPublicKey = $value_2;
            unset($data['CertIssuerPublicKey']);
        } elseif (array_key_exists('CertIssuerPublicKey', $data)) {
            $object->certIssuerPublicKey = null;
            unset($data['CertIssuerPublicKey']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('trustRoot', get_object_vars($data)) && null !== ($data->trustRoot ?? null)) {
            $value = $data->trustRoot;
            if (is_string($data->trustRoot)) {
                $value = $data->trustRoot;
            } elseif (null === $data->trustRoot) {
                $value = $data->trustRoot;
            }
            $dataArray['TrustRoot'] = $value;
        }
        if (array_key_exists('certIssuerSubject', get_object_vars($data)) && null !== ($data->certIssuerSubject ?? null)) {
            $value_1 = $data->certIssuerSubject;
            if (is_string($data->certIssuerSubject)) {
                $value_1 = $data->certIssuerSubject;
            } elseif (null === $data->certIssuerSubject) {
                $value_1 = $data->certIssuerSubject;
            }
            $dataArray['CertIssuerSubject'] = $value_1;
        }
        if (array_key_exists('certIssuerPublicKey', get_object_vars($data)) && null !== ($data->certIssuerPublicKey ?? null)) {
            $value_2 = $data->certIssuerPublicKey;
            if (is_string($data->certIssuerPublicKey)) {
                $value_2 = $data->certIssuerPublicKey;
            } elseif (null === $data->certIssuerPublicKey) {
                $value_2 = $data->certIssuerPublicKey;
            }
            $dataArray['CertIssuerPublicKey'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TLSInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
