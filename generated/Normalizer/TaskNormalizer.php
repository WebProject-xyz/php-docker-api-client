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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Task();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\TaskConstraint());
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
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (array_key_exists('Labels', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
            unset($data['Labels']);
        }
        if (array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class, 'json', $context));
            unset($data['Spec']);
        }
        if (array_key_exists('ServiceID', $data)) {
            $object->setServiceID($data['ServiceID']);
            unset($data['ServiceID']);
        }
        if (array_key_exists('Slot', $data)) {
            $object->setSlot($data['Slot']);
            unset($data['Slot']);
        }
        if (array_key_exists('NodeID', $data)) {
            $object->setNodeID($data['NodeID']);
            unset($data['NodeID']);
        }
        if (array_key_exists('AssignedGenericResources', $data)) {
            $values_1 = [];
            foreach ($data['AssignedGenericResources'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->setAssignedGenericResources($values_1);
            unset($data['AssignedGenericResources']);
        }
        if (array_key_exists('Status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['Status'], \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class, 'json', $context));
            unset($data['Status']);
        }
        if (array_key_exists('DesiredState', $data)) {
            $object->setDesiredState($data['DesiredState']);
            unset($data['DesiredState']);
        }
        if (array_key_exists('JobIteration', $data)) {
            $object->setJobIteration($this->denormalizer->denormalize($data['JobIteration'], \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            unset($data['JobIteration']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values = [];
            foreach ($data->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['Spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('serviceID') && null !== $data->getServiceID()) {
            $dataArray['ServiceID'] = $data->getServiceID();
        }
        if ($data->isInitialized('slot') && null !== $data->getSlot()) {
            $dataArray['Slot'] = $data->getSlot();
        }
        if ($data->isInitialized('nodeID') && null !== $data->getNodeID()) {
            $dataArray['NodeID'] = $data->getNodeID();
        }
        if ($data->isInitialized('assignedGenericResources') && null !== $data->getAssignedGenericResources()) {
            $values_1 = [];
            foreach ($data->getAssignedGenericResources() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
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
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\TaskConstraint());
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
