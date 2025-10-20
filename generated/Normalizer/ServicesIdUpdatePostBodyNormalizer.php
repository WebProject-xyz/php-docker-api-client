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

class ServicesIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ServicesIdUpdatePostBodyConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
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
        if (array_key_exists('TaskTemplate', $data)) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class, 'json', $context));
            unset($data['TaskTemplate']);
        }
        if (array_key_exists('Mode', $data)) {
            $object->setMode($this->denormalizer->denormalize($data['Mode'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class, 'json', $context));
            unset($data['Mode']);
        }
        if (array_key_exists('UpdateConfig', $data)) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class, 'json', $context));
            unset($data['UpdateConfig']);
        }
        if (array_key_exists('RollbackConfig', $data)) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class, 'json', $context));
            unset($data['RollbackConfig']);
        }
        if (array_key_exists('Networks', $data)) {
            $values_1 = [];
            foreach ($data['Networks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->setNetworks($values_1);
            unset($data['Networks']);
        }
        if (array_key_exists('EndpointSpec', $data)) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class, 'json', $context));
            unset($data['EndpointSpec']);
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
        if ($data->isInitialized('taskTemplate') && null !== $data->getTaskTemplate()) {
            $dataArray['TaskTemplate'] = $this->normalizer->normalize($data->getTaskTemplate(), 'json', $context);
        }
        if ($data->isInitialized('mode') && null !== $data->getMode()) {
            $dataArray['Mode'] = $this->normalizer->normalize($data->getMode(), 'json', $context);
        }
        if ($data->isInitialized('updateConfig') && null !== $data->getUpdateConfig()) {
            $dataArray['UpdateConfig'] = $this->normalizer->normalize($data->getUpdateConfig(), 'json', $context);
        }
        if ($data->isInitialized('rollbackConfig') && null !== $data->getRollbackConfig()) {
            $dataArray['RollbackConfig'] = $this->normalizer->normalize($data->getRollbackConfig(), 'json', $context);
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $values_1 = [];
            foreach ($data->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Networks'] = $values_1;
        }
        if ($data->isInitialized('endpointSpec') && null !== $data->getEndpointSpec()) {
            $dataArray['EndpointSpec'] = $this->normalizer->normalize($data->getEndpointSpec(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ServicesIdUpdatePostBodyConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
