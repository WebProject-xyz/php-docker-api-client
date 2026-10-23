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

class SignatureIdentityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SignatureIdentity::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SignatureIdentity::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SignatureIdentity();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('Timestamps', $data) && null !== $data['Timestamps']) {
            $values = [];
            foreach ($data['Timestamps'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\SignatureTimestamp::class, 'json', $context);
            }
            $object->timestamps = $values;
            unset($data['Timestamps']);
        } elseif (array_key_exists('Timestamps', $data)) {
            $object->timestamps = null;
            unset($data['Timestamps']);
        }
        if (array_key_exists('KnownSigner', $data)) {
            $object->knownSigner = \WebProject\DockerApi\Library\Generated\Model\KnownSignerIdentity::from($data['KnownSigner']);
            unset($data['KnownSigner']);
        }
        if (array_key_exists('DockerReference', $data) && null !== $data['DockerReference']) {
            $value_2 = $data['DockerReference'];
            if (is_string($data['DockerReference'])) {
                $value_2 = $data['DockerReference'];
            } elseif (null === $data['DockerReference']) {
                $value_2 = $data['DockerReference'];
            }
            $object->dockerReference = $value_2;
            unset($data['DockerReference']);
        } elseif (array_key_exists('DockerReference', $data)) {
            $object->dockerReference = null;
            unset($data['DockerReference']);
        }
        if (array_key_exists('Signer', $data)) {
            $object->signer = $this->denormalizer->denormalize($data['Signer'], \WebProject\DockerApi\Library\Generated\Model\SignerIdentity::class, 'json', $context);
            unset($data['Signer']);
        }
        if (array_key_exists('SignatureType', $data)) {
            $object->signatureType = \WebProject\DockerApi\Library\Generated\Model\SignatureType::from($data['SignatureType']);
            unset($data['SignatureType']);
        }
        if (array_key_exists('Error', $data) && null !== $data['Error']) {
            $value_3 = $data['Error'];
            if (is_string($data['Error'])) {
                $value_3 = $data['Error'];
            } elseif (null === $data['Error']) {
                $value_3 = $data['Error'];
            }
            $object->error = $value_3;
            unset($data['Error']);
        } elseif (array_key_exists('Error', $data)) {
            $object->error = null;
            unset($data['Error']);
        }
        if (array_key_exists('Warnings', $data) && null !== $data['Warnings']) {
            $values_1 = [];
            foreach ($data['Warnings'] as $value_4) {
                $values_1[] = $value_4;
            }
            $object->warnings = $values_1;
            unset($data['Warnings']);
        } elseif (array_key_exists('Warnings', $data)) {
            $object->warnings = null;
            unset($data['Warnings']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('timestamps', get_object_vars($data)) && null !== ($data->timestamps ?? null)) {
            $values = [];
            foreach ($data->timestamps as $value_1) {
                $normalized = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values[]   = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['Timestamps'] = $values;
        }
        if (array_key_exists('knownSigner', get_object_vars($data)) && null !== ($data->knownSigner ?? null)) {
            $dataArray['KnownSigner'] = $data->knownSigner->value;
        }
        if (array_key_exists('dockerReference', get_object_vars($data)) && null !== ($data->dockerReference ?? null)) {
            $value_2 = $data->dockerReference;
            if (is_string($data->dockerReference)) {
                $value_2 = $data->dockerReference;
            } elseif (null === $data->dockerReference) {
                $value_2 = $data->dockerReference;
            }
            $dataArray['DockerReference'] = $value_2;
        }
        if (array_key_exists('signer', get_object_vars($data)) && null !== ($data->signer ?? null)) {
            $normalized_1        = $this->normalizer->normalize($data->signer, 'json', $context);
            $dataArray['Signer'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('signatureType', get_object_vars($data)) && null !== ($data->signatureType ?? null)) {
            $dataArray['SignatureType'] = $data->signatureType->value;
        }
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $value_3 = $data->error;
            if (is_string($data->error)) {
                $value_3 = $data->error;
            } elseif (null === $data->error) {
                $value_3 = $data->error;
            }
            $dataArray['Error'] = $value_3;
        }
        if (array_key_exists('warnings', get_object_vars($data)) && null !== ($data->warnings ?? null)) {
            $values_1 = [];
            foreach ($data->warnings as $value_4) {
                $values_1[] = $value_4;
            }
            $dataArray['Warnings'] = $values_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\SignatureIdentity::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
