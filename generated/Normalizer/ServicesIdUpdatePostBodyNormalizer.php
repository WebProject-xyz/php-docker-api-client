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
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody();
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
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->setLabels($value_1);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('TaskTemplate', $data)) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class, 'json', $context));
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $object->setMode($this->denormalizer->denormalize($data['Mode'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class, 'json', $context));
        } elseif (array_key_exists('Mode', $data) && null === $data['Mode']) {
            $object->setMode(null);
        }
        if (array_key_exists('UpdateConfig', $data) && null !== $data['UpdateConfig']) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class, 'json', $context));
        } elseif (array_key_exists('UpdateConfig', $data) && null === $data['UpdateConfig']) {
            $object->setUpdateConfig(null);
        }
        if (array_key_exists('RollbackConfig', $data) && null !== $data['RollbackConfig']) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class, 'json', $context));
        } elseif (array_key_exists('RollbackConfig', $data) && null === $data['RollbackConfig']) {
            $object->setRollbackConfig(null);
        }
        if (array_key_exists('Networks', $data) && null !== $data['Networks']) {
            $value_3 = $data['Networks'];
            if (is_array($data['Networks']) && $this->isOnlyNumericKeys($data['Networks'])) {
                $values_1 = [];
                foreach ($data['Networks'] as $value_4) {
                    $values_1[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $value_3 = $values_1;
            } elseif (null === $data['Networks']) {
                $value_3 = $data['Networks'];
            }
            $object->setNetworks($value_3);
        } elseif (array_key_exists('Networks', $data) && null === $data['Networks']) {
            $object->setNetworks(null);
        }
        if (array_key_exists('EndpointSpec', $data)) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class, 'json', $context));
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
        if ($data->isInitialized('labels')) {
            $value_1 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values = [];
                foreach ($data->getLabels() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getLabels()) {
                $value_1 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_1;
        }
        if ($data->isInitialized('taskTemplate') && null !== $data->getTaskTemplate()) {
            $dataArray['TaskTemplate'] = $this->normalizer->normalize($data->getTaskTemplate(), 'json', $context);
        }
        if ($data->isInitialized('mode')) {
            $dataArray['Mode'] = $this->normalizer->normalize($data->getMode(), 'json', $context);
        }
        if ($data->isInitialized('updateConfig')) {
            $dataArray['UpdateConfig'] = $this->normalizer->normalize($data->getUpdateConfig(), 'json', $context);
        }
        if ($data->isInitialized('rollbackConfig')) {
            $dataArray['RollbackConfig'] = $this->normalizer->normalize($data->getRollbackConfig(), 'json', $context);
        }
        if ($data->isInitialized('networks')) {
            $value_3 = $data->getNetworks();
            if (is_array($data->getNetworks())) {
                $values_1 = [];
                foreach ($data->getNetworks() as $value_4) {
                    $values_1[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $value_3 = $values_1;
            } elseif (null === $data->getNetworks()) {
                $value_3 = $data->getNetworks();
            }
            $dataArray['Networks'] = $value_3;
        }
        if ($data->isInitialized('endpointSpec') && null !== $data->getEndpointSpec()) {
            $dataArray['EndpointSpec'] = $this->normalizer->normalize($data->getEndpointSpec(), 'json', $context);
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
