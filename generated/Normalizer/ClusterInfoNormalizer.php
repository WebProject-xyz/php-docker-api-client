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
use function is_bool;
use function is_int;
use function is_object;
use function is_string;

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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ID', $data) && null !== $data['ID']) {
            $value = $data['ID'];
            if (is_string($data['ID'])) {
                $value = $data['ID'];
            } elseif (null === $data['ID']) {
                $value = $data['ID'];
            }
            $object->setID($value);
        } elseif (array_key_exists('ID', $data) && null === $data['ID']) {
            $object->setID(null);
        }
        if (array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class, 'json', $context));
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $value_1 = $data['CreatedAt'];
            if (is_string($data['CreatedAt'])) {
                $value_1 = $data['CreatedAt'];
            } elseif (null === $data['CreatedAt']) {
                $value_1 = $data['CreatedAt'];
            }
            $object->setCreatedAt($value_1);
        } elseif (array_key_exists('CreatedAt', $data) && null === $data['CreatedAt']) {
            $object->setCreatedAt(null);
        }
        if (array_key_exists('UpdatedAt', $data) && null !== $data['UpdatedAt']) {
            $value_2 = $data['UpdatedAt'];
            if (is_string($data['UpdatedAt'])) {
                $value_2 = $data['UpdatedAt'];
            } elseif (null === $data['UpdatedAt']) {
                $value_2 = $data['UpdatedAt'];
            }
            $object->setUpdatedAt($value_2);
        } elseif (array_key_exists('UpdatedAt', $data) && null === $data['UpdatedAt']) {
            $object->setUpdatedAt(null);
        }
        if (array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class, 'json', $context));
        }
        if (array_key_exists('TLSInfo', $data)) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class, 'json', $context));
        }
        if (array_key_exists('RootRotationInProgress', $data) && null !== $data['RootRotationInProgress']) {
            $value_3 = $data['RootRotationInProgress'];
            if (is_bool($data['RootRotationInProgress'])) {
                $value_3 = $data['RootRotationInProgress'];
            } elseif (null === $data['RootRotationInProgress']) {
                $value_3 = $data['RootRotationInProgress'];
            }
            $object->setRootRotationInProgress($value_3);
        } elseif (array_key_exists('RootRotationInProgress', $data) && null === $data['RootRotationInProgress']) {
            $object->setRootRotationInProgress(null);
        }
        if (array_key_exists('DataPathPort', $data) && null !== $data['DataPathPort']) {
            $value_4 = $data['DataPathPort'];
            if (is_int($data['DataPathPort'])) {
                $value_4 = $data['DataPathPort'];
            } elseif (null === $data['DataPathPort']) {
                $value_4 = $data['DataPathPort'];
            }
            $object->setDataPathPort($value_4);
        } elseif (array_key_exists('DataPathPort', $data) && null === $data['DataPathPort']) {
            $object->setDataPathPort(null);
        }
        if (array_key_exists('DefaultAddrPool', $data) && null !== $data['DefaultAddrPool']) {
            $value_5 = $data['DefaultAddrPool'];
            if (is_array($data['DefaultAddrPool']) && $this->isOnlyNumericKeys($data['DefaultAddrPool'])) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value_6) {
                    $values[] = $value_6;
                }
                $value_5 = $values;
            } elseif (null === $data['DefaultAddrPool']) {
                $value_5 = $data['DefaultAddrPool'];
            }
            $object->setDefaultAddrPool($value_5);
        } elseif (array_key_exists('DefaultAddrPool', $data) && null === $data['DefaultAddrPool']) {
            $object->setDefaultAddrPool(null);
        }
        if (array_key_exists('SubnetSize', $data) && null !== $data['SubnetSize']) {
            $value_7 = $data['SubnetSize'];
            if (is_int($data['SubnetSize'])) {
                $value_7 = $data['SubnetSize'];
            } elseif (null === $data['SubnetSize']) {
                $value_7 = $data['SubnetSize'];
            }
            $object->setSubnetSize($value_7);
        } elseif (array_key_exists('SubnetSize', $data) && null === $data['SubnetSize']) {
            $object->setSubnetSize(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iD')) {
            $value = $data->getID();
            if (is_string($data->getID())) {
                $value = $data->getID();
            } elseif (null === $data->getID()) {
                $value = $data->getID();
            }
            $dataArray['ID'] = $value;
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['Version'] = $this->normalizer->normalize($data->getVersion(), 'json', $context);
        }
        if ($data->isInitialized('createdAt')) {
            $value_1 = $data->getCreatedAt();
            if (is_string($data->getCreatedAt())) {
                $value_1 = $data->getCreatedAt();
            } elseif (null === $data->getCreatedAt()) {
                $value_1 = $data->getCreatedAt();
            }
            $dataArray['CreatedAt'] = $value_1;
        }
        if ($data->isInitialized('updatedAt')) {
            $value_2 = $data->getUpdatedAt();
            if (is_string($data->getUpdatedAt())) {
                $value_2 = $data->getUpdatedAt();
            } elseif (null === $data->getUpdatedAt()) {
                $value_2 = $data->getUpdatedAt();
            }
            $dataArray['UpdatedAt'] = $value_2;
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['Spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('tLSInfo') && null !== $data->getTLSInfo()) {
            $dataArray['TLSInfo'] = $this->normalizer->normalize($data->getTLSInfo(), 'json', $context);
        }
        if ($data->isInitialized('rootRotationInProgress')) {
            $value_3 = $data->getRootRotationInProgress();
            if (is_bool($data->getRootRotationInProgress())) {
                $value_3 = $data->getRootRotationInProgress();
            } elseif (null === $data->getRootRotationInProgress()) {
                $value_3 = $data->getRootRotationInProgress();
            }
            $dataArray['RootRotationInProgress'] = $value_3;
        }
        if ($data->isInitialized('dataPathPort')) {
            $value_4 = $data->getDataPathPort();
            if (is_int($data->getDataPathPort())) {
                $value_4 = $data->getDataPathPort();
            } elseif (null === $data->getDataPathPort()) {
                $value_4 = $data->getDataPathPort();
            }
            $dataArray['DataPathPort'] = $value_4;
        }
        if ($data->isInitialized('defaultAddrPool')) {
            $value_5 = $data->getDefaultAddrPool();
            if (is_array($data->getDefaultAddrPool())) {
                $values = [];
                foreach ($data->getDefaultAddrPool() as $value_6) {
                    $values[] = $value_6;
                }
                $value_5 = $values;
            } elseif (null === $data->getDefaultAddrPool()) {
                $value_5 = $data->getDefaultAddrPool();
            }
            $dataArray['DefaultAddrPool'] = $value_5;
        }
        if ($data->isInitialized('subnetSize')) {
            $value_7 = $data->getSubnetSize();
            if (is_int($data->getSubnetSize())) {
                $value_7 = $data->getSubnetSize();
            } elseif (null === $data->getSubnetSize()) {
                $value_7 = $data->getSubnetSize();
            }
            $dataArray['SubnetSize'] = $value_7;
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
