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
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Timestamps', $data) && null !== $data['Timestamps']) {
            $value_1 = $data['Timestamps'];
            if (is_array($data['Timestamps']) && $this->isOnlyNumericKeys($data['Timestamps'])) {
                $values = [];
                foreach ($data['Timestamps'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\SignatureTimestamp::class, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data['Timestamps']) {
                $value_1 = $data['Timestamps'];
            }
            $object->setTimestamps($value_1);
        } elseif (array_key_exists('Timestamps', $data) && null === $data['Timestamps']) {
            $object->setTimestamps(null);
        }
        if (array_key_exists('KnownSigner', $data)) {
            $object->setKnownSigner($data['KnownSigner']);
        }
        if (array_key_exists('DockerReference', $data) && null !== $data['DockerReference']) {
            $value_3 = $data['DockerReference'];
            if (is_string($data['DockerReference'])) {
                $value_3 = $data['DockerReference'];
            } elseif (null === $data['DockerReference']) {
                $value_3 = $data['DockerReference'];
            }
            $object->setDockerReference($value_3);
        } elseif (array_key_exists('DockerReference', $data) && null === $data['DockerReference']) {
            $object->setDockerReference(null);
        }
        if (array_key_exists('Signer', $data)) {
            $object->setSigner($this->denormalizer->denormalize($data['Signer'], \WebProject\DockerApi\Library\Generated\Model\SignerIdentity::class, 'json', $context));
        }
        if (array_key_exists('SignatureType', $data)) {
            $object->setSignatureType($data['SignatureType']);
        }
        if (array_key_exists('Error', $data) && null !== $data['Error']) {
            $value_4 = $data['Error'];
            if (is_string($data['Error'])) {
                $value_4 = $data['Error'];
            } elseif (null === $data['Error']) {
                $value_4 = $data['Error'];
            }
            $object->setError($value_4);
        } elseif (array_key_exists('Error', $data) && null === $data['Error']) {
            $object->setError(null);
        }
        if (array_key_exists('Warnings', $data) && null !== $data['Warnings']) {
            $value_5 = $data['Warnings'];
            if (is_array($data['Warnings']) && $this->isOnlyNumericKeys($data['Warnings'])) {
                $values_1 = [];
                foreach ($data['Warnings'] as $value_6) {
                    $values_1[] = $value_6;
                }
                $value_5 = $values_1;
            } elseif (null === $data['Warnings']) {
                $value_5 = $data['Warnings'];
            }
            $object->setWarnings($value_5);
        } elseif (array_key_exists('Warnings', $data) && null === $data['Warnings']) {
            $object->setWarnings(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name')) {
            $value = $data->getName();
            if (is_string($data->getName())) {
                $value = $data->getName();
            } elseif (null === $data->getName()) {
                $value = $data->getName();
            }
            $dataArray['Name'] = $value;
        }
        if ($data->isInitialized('timestamps')) {
            $value_1 = $data->getTimestamps();
            if (is_array($data->getTimestamps())) {
                $values = [];
                foreach ($data->getTimestamps() as $value_2) {
                    $values[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data->getTimestamps()) {
                $value_1 = $data->getTimestamps();
            }
            $dataArray['Timestamps'] = $value_1;
        }
        if ($data->isInitialized('knownSigner') && null !== $data->getKnownSigner()) {
            $dataArray['KnownSigner'] = $data->getKnownSigner();
        }
        if ($data->isInitialized('dockerReference')) {
            $value_3 = $data->getDockerReference();
            if (is_string($data->getDockerReference())) {
                $value_3 = $data->getDockerReference();
            } elseif (null === $data->getDockerReference()) {
                $value_3 = $data->getDockerReference();
            }
            $dataArray['DockerReference'] = $value_3;
        }
        if ($data->isInitialized('signer') && null !== $data->getSigner()) {
            $dataArray['Signer'] = $this->normalizer->normalize($data->getSigner(), 'json', $context);
        }
        if ($data->isInitialized('signatureType') && null !== $data->getSignatureType()) {
            $dataArray['SignatureType'] = $data->getSignatureType();
        }
        if ($data->isInitialized('error')) {
            $value_4 = $data->getError();
            if (is_string($data->getError())) {
                $value_4 = $data->getError();
            } elseif (null === $data->getError()) {
                $value_4 = $data->getError();
            }
            $dataArray['Error'] = $value_4;
        }
        if ($data->isInitialized('warnings')) {
            $value_5 = $data->getWarnings();
            if (is_array($data->getWarnings())) {
                $values_1 = [];
                foreach ($data->getWarnings() as $value_6) {
                    $values_1[] = $value_6;
                }
                $value_5 = $values_1;
            } elseif (null === $data->getWarnings()) {
                $value_5 = $data->getWarnings();
            }
            $dataArray['Warnings'] = $value_5;
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
