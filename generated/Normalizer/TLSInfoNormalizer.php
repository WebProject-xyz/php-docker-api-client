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
            $object->setTrustRoot($value);
        } elseif (array_key_exists('TrustRoot', $data) && null === $data['TrustRoot']) {
            $object->setTrustRoot(null);
        }
        if (array_key_exists('CertIssuerSubject', $data) && null !== $data['CertIssuerSubject']) {
            $value_1 = $data['CertIssuerSubject'];
            if (is_string($data['CertIssuerSubject'])) {
                $value_1 = $data['CertIssuerSubject'];
            } elseif (null === $data['CertIssuerSubject']) {
                $value_1 = $data['CertIssuerSubject'];
            }
            $object->setCertIssuerSubject($value_1);
        } elseif (array_key_exists('CertIssuerSubject', $data) && null === $data['CertIssuerSubject']) {
            $object->setCertIssuerSubject(null);
        }
        if (array_key_exists('CertIssuerPublicKey', $data) && null !== $data['CertIssuerPublicKey']) {
            $value_2 = $data['CertIssuerPublicKey'];
            if (is_string($data['CertIssuerPublicKey'])) {
                $value_2 = $data['CertIssuerPublicKey'];
            } elseif (null === $data['CertIssuerPublicKey']) {
                $value_2 = $data['CertIssuerPublicKey'];
            }
            $object->setCertIssuerPublicKey($value_2);
        } elseif (array_key_exists('CertIssuerPublicKey', $data) && null === $data['CertIssuerPublicKey']) {
            $object->setCertIssuerPublicKey(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('trustRoot')) {
            $value = $data->getTrustRoot();
            if (is_string($data->getTrustRoot())) {
                $value = $data->getTrustRoot();
            } elseif (null === $data->getTrustRoot()) {
                $value = $data->getTrustRoot();
            }
            $dataArray['TrustRoot'] = $value;
        }
        if ($data->isInitialized('certIssuerSubject')) {
            $value_1 = $data->getCertIssuerSubject();
            if (is_string($data->getCertIssuerSubject())) {
                $value_1 = $data->getCertIssuerSubject();
            } elseif (null === $data->getCertIssuerSubject()) {
                $value_1 = $data->getCertIssuerSubject();
            }
            $dataArray['CertIssuerSubject'] = $value_1;
        }
        if ($data->isInitialized('certIssuerPublicKey')) {
            $value_2 = $data->getCertIssuerPublicKey();
            if (is_string($data->getCertIssuerPublicKey())) {
                $value_2 = $data->getCertIssuerPublicKey();
            } elseif (null === $data->getCertIssuerPublicKey()) {
                $value_2 = $data->getCertIssuerPublicKey();
            }
            $dataArray['CertIssuerPublicKey'] = $value_2;
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
