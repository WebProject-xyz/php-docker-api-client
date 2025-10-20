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

class ClusterInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterInfo();
        if (array_key_exists('RootRotationInProgress', $data) && is_int($data['RootRotationInProgress'])) {
            $data['RootRotationInProgress'] = (bool) $data['RootRotationInProgress'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ClusterInfoConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
            unset($data['ID']);
        }
        if (array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            unset($data['Version']);
        }
        if (array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
            unset($data['CreatedAt']);
        }
        if (array_key_exists('UpdatedAt', $data)) {
            $object->setUpdatedAt($data['UpdatedAt']);
            unset($data['UpdatedAt']);
        }
        if (array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class, 'json', $context));
            unset($data['Spec']);
        }
        if (array_key_exists('TLSInfo', $data)) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class, 'json', $context));
            unset($data['TLSInfo']);
        }
        if (array_key_exists('RootRotationInProgress', $data)) {
            $object->setRootRotationInProgress($data['RootRotationInProgress']);
            unset($data['RootRotationInProgress']);
        }
        if (array_key_exists('DataPathPort', $data)) {
            $object->setDataPathPort($data['DataPathPort']);
            unset($data['DataPathPort']);
        }
        if (array_key_exists('DefaultAddrPool', $data)) {
            $values = [];
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
            unset($data['DefaultAddrPool']);
        }
        if (array_key_exists('SubnetSize', $data)) {
            $object->setSubnetSize($data['SubnetSize']);
            unset($data['SubnetSize']);
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
        if ($data->isInitialized('iD') && null !== $data->getID()) {
            $dataArray['ID'] = $data->getID();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['Version'] = $this->normalizer->normalize($data->getVersion(), 'json', $context);
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['CreatedAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['UpdatedAt'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['Spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('tLSInfo') && null !== $data->getTLSInfo()) {
            $dataArray['TLSInfo'] = $this->normalizer->normalize($data->getTLSInfo(), 'json', $context);
        }
        if ($data->isInitialized('rootRotationInProgress') && null !== $data->getRootRotationInProgress()) {
            $dataArray['RootRotationInProgress'] = $data->getRootRotationInProgress();
        }
        if ($data->isInitialized('dataPathPort') && null !== $data->getDataPathPort()) {
            $dataArray['DataPathPort'] = $data->getDataPathPort();
        }
        if ($data->isInitialized('defaultAddrPool') && null !== $data->getDefaultAddrPool()) {
            $values = [];
            foreach ($data->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $dataArray['DefaultAddrPool'] = $values;
        }
        if ($data->isInitialized('subnetSize') && null !== $data->getSubnetSize()) {
            $dataArray['SubnetSize'] = $data->getSubnetSize();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ClusterInfoConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
