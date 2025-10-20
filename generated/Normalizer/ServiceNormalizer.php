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

class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Service::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Service::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Service();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ServiceConstraint());
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
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class, 'json', $context));
            unset($data['Spec']);
        }
        if (array_key_exists('Endpoint', $data)) {
            $object->setEndpoint($this->denormalizer->denormalize($data['Endpoint'], \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class, 'json', $context));
            unset($data['Endpoint']);
        }
        if (array_key_exists('UpdateStatus', $data)) {
            $object->setUpdateStatus($this->denormalizer->denormalize($data['UpdateStatus'], \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class, 'json', $context));
            unset($data['UpdateStatus']);
        }
        if (array_key_exists('ServiceStatus', $data)) {
            $object->setServiceStatus($this->denormalizer->denormalize($data['ServiceStatus'], \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class, 'json', $context));
            unset($data['ServiceStatus']);
        }
        if (array_key_exists('JobStatus', $data)) {
            $object->setJobStatus($this->denormalizer->denormalize($data['JobStatus'], \WebProject\DockerApi\Library\Generated\Model\ServiceJobStatus::class, 'json', $context));
            unset($data['JobStatus']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($data->isInitialized('endpoint') && null !== $data->getEndpoint()) {
            $dataArray['Endpoint'] = $this->normalizer->normalize($data->getEndpoint(), 'json', $context);
        }
        if ($data->isInitialized('updateStatus') && null !== $data->getUpdateStatus()) {
            $dataArray['UpdateStatus'] = $this->normalizer->normalize($data->getUpdateStatus(), 'json', $context);
        }
        if ($data->isInitialized('serviceStatus') && null !== $data->getServiceStatus()) {
            $dataArray['ServiceStatus'] = $this->normalizer->normalize($data->getServiceStatus(), 'json', $context);
        }
        if ($data->isInitialized('jobStatus') && null !== $data->getJobStatus()) {
            $dataArray['JobStatus'] = $this->normalizer->normalize($data->getJobStatus(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ServiceConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Service::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
