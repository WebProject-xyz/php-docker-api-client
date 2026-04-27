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

class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Task::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Task::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Task();
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
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value_3 = $data['Name'];
            if (is_string($data['Name'])) {
                $value_3 = $data['Name'];
            } elseif (null === $data['Name']) {
                $value_3 = $data['Name'];
            }
            $object->setName($value_3);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_4 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_5) {
                    $values[$key] = $value_5;
                }
                $value_4 = $values;
            } elseif (null === $data['Labels']) {
                $value_4 = $data['Labels'];
            }
            $object->setLabels($value_4);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class, 'json', $context));
        }
        if (array_key_exists('ServiceID', $data) && null !== $data['ServiceID']) {
            $value_6 = $data['ServiceID'];
            if (is_string($data['ServiceID'])) {
                $value_6 = $data['ServiceID'];
            } elseif (null === $data['ServiceID']) {
                $value_6 = $data['ServiceID'];
            }
            $object->setServiceID($value_6);
        } elseif (array_key_exists('ServiceID', $data) && null === $data['ServiceID']) {
            $object->setServiceID(null);
        }
        if (array_key_exists('Slot', $data) && null !== $data['Slot']) {
            $value_7 = $data['Slot'];
            if (is_int($data['Slot'])) {
                $value_7 = $data['Slot'];
            } elseif (null === $data['Slot']) {
                $value_7 = $data['Slot'];
            }
            $object->setSlot($value_7);
        } elseif (array_key_exists('Slot', $data) && null === $data['Slot']) {
            $object->setSlot(null);
        }
        if (array_key_exists('NodeID', $data) && null !== $data['NodeID']) {
            $value_8 = $data['NodeID'];
            if (is_string($data['NodeID'])) {
                $value_8 = $data['NodeID'];
            } elseif (null === $data['NodeID']) {
                $value_8 = $data['NodeID'];
            }
            $object->setNodeID($value_8);
        } elseif (array_key_exists('NodeID', $data) && null === $data['NodeID']) {
            $object->setNodeID(null);
        }
        if (array_key_exists('AssignedGenericResources', $data)) {
            $values_1 = [];
            foreach ($data['AssignedGenericResources'] as $value_9) {
                $values_1[] = $this->denormalizer->denormalize($value_9, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->setAssignedGenericResources($values_1);
        }
        if (array_key_exists('Status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['Status'], \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class, 'json', $context));
        }
        if (array_key_exists('DesiredState', $data)) {
            $object->setDesiredState($data['DesiredState']);
        }
        if (array_key_exists('JobIteration', $data)) {
            $object->setJobIteration($this->denormalizer->denormalize($data['JobIteration'], \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class, 'json', $context));
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
        if ($data->isInitialized('name')) {
            $value_3 = $data->getName();
            if (is_string($data->getName())) {
                $value_3 = $data->getName();
            } elseif (null === $data->getName()) {
                $value_3 = $data->getName();
            }
            $dataArray['Name'] = $value_3;
        }
        if ($data->isInitialized('labels')) {
            $value_4 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values = [];
                foreach ($data->getLabels() as $key => $value_5) {
                    $values[$key] = $value_5;
                }
                $value_4 = $values;
            } elseif (null === $data->getLabels()) {
                $value_4 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_4;
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['Spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('serviceID')) {
            $value_6 = $data->getServiceID();
            if (is_string($data->getServiceID())) {
                $value_6 = $data->getServiceID();
            } elseif (null === $data->getServiceID()) {
                $value_6 = $data->getServiceID();
            }
            $dataArray['ServiceID'] = $value_6;
        }
        if ($data->isInitialized('slot')) {
            $value_7 = $data->getSlot();
            if (is_int($data->getSlot())) {
                $value_7 = $data->getSlot();
            } elseif (null === $data->getSlot()) {
                $value_7 = $data->getSlot();
            }
            $dataArray['Slot'] = $value_7;
        }
        if ($data->isInitialized('nodeID')) {
            $value_8 = $data->getNodeID();
            if (is_string($data->getNodeID())) {
                $value_8 = $data->getNodeID();
            } elseif (null === $data->getNodeID()) {
                $value_8 = $data->getNodeID();
            }
            $dataArray['NodeID'] = $value_8;
        }
        if ($data->isInitialized('assignedGenericResources') && null !== $data->getAssignedGenericResources()) {
            $values_1 = [];
            foreach ($data->getAssignedGenericResources() as $value_9) {
                $values_1[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $dataArray['AssignedGenericResources'] = $values_1;
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['Status'] = $this->normalizer->normalize($data->getStatus(), 'json', $context);
        }
        if ($data->isInitialized('desiredState') && null !== $data->getDesiredState()) {
            $dataArray['DesiredState'] = $data->getDesiredState();
        }
        if ($data->isInitialized('jobIteration') && null !== $data->getJobIteration()) {
            $dataArray['JobIteration'] = $this->normalizer->normalize($data->getJobIteration(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Task::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
