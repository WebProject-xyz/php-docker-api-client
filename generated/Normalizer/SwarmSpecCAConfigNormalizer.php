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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\SwarmSpecCAConfigConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('NodeCertExpiry', $data)) {
            $object->setNodeCertExpiry($data['NodeCertExpiry']);
            unset($data['NodeCertExpiry']);
        }
        if (array_key_exists('ExternalCAs', $data)) {
            $values = [];
            foreach ($data['ExternalCAs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class, 'json', $context);
            }
            $object->setExternalCAs($values);
            unset($data['ExternalCAs']);
        }
        if (array_key_exists('SigningCACert', $data)) {
            $object->setSigningCACert($data['SigningCACert']);
            unset($data['SigningCACert']);
        }
        if (array_key_exists('SigningCAKey', $data)) {
            $object->setSigningCAKey($data['SigningCAKey']);
            unset($data['SigningCAKey']);
        }
        if (array_key_exists('ForceRotate', $data)) {
            $object->setForceRotate($data['ForceRotate']);
            unset($data['ForceRotate']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('nodeCertExpiry') && null !== $data->getNodeCertExpiry()) {
            $dataArray['NodeCertExpiry'] = $data->getNodeCertExpiry();
        }
        if ($data->isInitialized('externalCAs') && null !== $data->getExternalCAs()) {
            $values = [];
            foreach ($data->getExternalCAs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ExternalCAs'] = $values;
        }
        if ($data->isInitialized('signingCACert') && null !== $data->getSigningCACert()) {
            $dataArray['SigningCACert'] = $data->getSigningCACert();
        }
        if ($data->isInitialized('signingCAKey') && null !== $data->getSigningCAKey()) {
            $dataArray['SigningCAKey'] = $data->getSigningCAKey();
        }
        if ($data->isInitialized('forceRotate') && null !== $data->getForceRotate()) {
            $dataArray['ForceRotate'] = $data->getForceRotate();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\SwarmSpecCAConfigConstraint());
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
