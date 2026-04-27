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
            $object->setNodeCertExpiry($value);
        } elseif (array_key_exists('NodeCertExpiry', $data) && null === $data['NodeCertExpiry']) {
            $object->setNodeCertExpiry(null);
        }
        if (array_key_exists('ExternalCAs', $data) && null !== $data['ExternalCAs']) {
            $value_1 = $data['ExternalCAs'];
            if (is_array($data['ExternalCAs']) && $this->isOnlyNumericKeys($data['ExternalCAs'])) {
                $values = [];
                foreach ($data['ExternalCAs'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data['ExternalCAs']) {
                $value_1 = $data['ExternalCAs'];
            }
            $object->setExternalCAs($value_1);
        } elseif (array_key_exists('ExternalCAs', $data) && null === $data['ExternalCAs']) {
            $object->setExternalCAs(null);
        }
        if (array_key_exists('SigningCACert', $data) && null !== $data['SigningCACert']) {
            $value_3 = $data['SigningCACert'];
            if (is_string($data['SigningCACert'])) {
                $value_3 = $data['SigningCACert'];
            } elseif (null === $data['SigningCACert']) {
                $value_3 = $data['SigningCACert'];
            }
            $object->setSigningCACert($value_3);
        } elseif (array_key_exists('SigningCACert', $data) && null === $data['SigningCACert']) {
            $object->setSigningCACert(null);
        }
        if (array_key_exists('SigningCAKey', $data) && null !== $data['SigningCAKey']) {
            $value_4 = $data['SigningCAKey'];
            if (is_string($data['SigningCAKey'])) {
                $value_4 = $data['SigningCAKey'];
            } elseif (null === $data['SigningCAKey']) {
                $value_4 = $data['SigningCAKey'];
            }
            $object->setSigningCAKey($value_4);
        } elseif (array_key_exists('SigningCAKey', $data) && null === $data['SigningCAKey']) {
            $object->setSigningCAKey(null);
        }
        if (array_key_exists('ForceRotate', $data) && null !== $data['ForceRotate']) {
            $value_5 = $data['ForceRotate'];
            if (is_int($data['ForceRotate'])) {
                $value_5 = $data['ForceRotate'];
            } elseif (null === $data['ForceRotate']) {
                $value_5 = $data['ForceRotate'];
            }
            $object->setForceRotate($value_5);
        } elseif (array_key_exists('ForceRotate', $data) && null === $data['ForceRotate']) {
            $object->setForceRotate(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('nodeCertExpiry')) {
            $value = $data->getNodeCertExpiry();
            if (is_int($data->getNodeCertExpiry())) {
                $value = $data->getNodeCertExpiry();
            } elseif (null === $data->getNodeCertExpiry()) {
                $value = $data->getNodeCertExpiry();
            }
            $dataArray['NodeCertExpiry'] = $value;
        }
        if ($data->isInitialized('externalCAs')) {
            $value_1 = $data->getExternalCAs();
            if (is_array($data->getExternalCAs())) {
                $values = [];
                foreach ($data->getExternalCAs() as $value_2) {
                    $values[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data->getExternalCAs()) {
                $value_1 = $data->getExternalCAs();
            }
            $dataArray['ExternalCAs'] = $value_1;
        }
        if ($data->isInitialized('signingCACert')) {
            $value_3 = $data->getSigningCACert();
            if (is_string($data->getSigningCACert())) {
                $value_3 = $data->getSigningCACert();
            } elseif (null === $data->getSigningCACert()) {
                $value_3 = $data->getSigningCACert();
            }
            $dataArray['SigningCACert'] = $value_3;
        }
        if ($data->isInitialized('signingCAKey')) {
            $value_4 = $data->getSigningCAKey();
            if (is_string($data->getSigningCAKey())) {
                $value_4 = $data->getSigningCAKey();
            } elseif (null === $data->getSigningCAKey()) {
                $value_4 = $data->getSigningCAKey();
            }
            $dataArray['SigningCAKey'] = $value_4;
        }
        if ($data->isInitialized('forceRotate')) {
            $value_5 = $data->getForceRotate();
            if (is_int($data->getForceRotate())) {
                $value_5 = $data->getForceRotate();
            } elseif (null === $data->getForceRotate()) {
                $value_5 = $data->getForceRotate();
            }
            $dataArray['ForceRotate'] = $value_5;
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
