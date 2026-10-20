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
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->labels = $value_1;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('TaskTemplate', $data)) {
            $object->taskTemplate = $this->denormalizer->denormalize($data['TaskTemplate'], \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class, 'json', $context);
            unset($data['TaskTemplate']);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $object->mode = $this->denormalizer->denormalize($data['Mode'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class, 'json', $context);
            unset($data['Mode']);
        } elseif (array_key_exists('Mode', $data)) {
            $object->mode = null;
            unset($data['Mode']);
        }
        if (array_key_exists('UpdateConfig', $data) && null !== $data['UpdateConfig']) {
            $object->updateConfig = $this->denormalizer->denormalize($data['UpdateConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class, 'json', $context);
            unset($data['UpdateConfig']);
        } elseif (array_key_exists('UpdateConfig', $data)) {
            $object->updateConfig = null;
            unset($data['UpdateConfig']);
        }
        if (array_key_exists('RollbackConfig', $data) && null !== $data['RollbackConfig']) {
            $object->rollbackConfig = $this->denormalizer->denormalize($data['RollbackConfig'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class, 'json', $context);
            unset($data['RollbackConfig']);
        } elseif (array_key_exists('RollbackConfig', $data)) {
            $object->rollbackConfig = null;
            unset($data['RollbackConfig']);
        }
        if (array_key_exists('Networks', $data) && null !== $data['Networks']) {
            $values_1 = [];
            foreach ($data['Networks'] as $value_3) {
                $values_1[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->networks = $values_1;
            unset($data['Networks']);
        } elseif (array_key_exists('Networks', $data)) {
            $object->networks = null;
            unset($data['Networks']);
        }
        if (array_key_exists('EndpointSpec', $data)) {
            $object->endpointSpec = $this->denormalizer->denormalize($data['EndpointSpec'], \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class, 'json', $context);
            unset($data['EndpointSpec']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_1 = $data->labels;
            if (is_iterable($data->labels)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->labels) {
                $value_1 = $data->labels;
            }
            $dataArray['Labels'] = $value_1;
        }
        if (array_key_exists('taskTemplate', get_object_vars($data)) && null !== ($data->taskTemplate ?? null)) {
            $normalized                = $this->normalizer->normalize($data->taskTemplate, 'json', $context);
            $dataArray['TaskTemplate'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $normalized_1      = $this->normalizer->normalize($data->mode, 'json', $context);
            $dataArray['Mode'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('updateConfig', get_object_vars($data)) && null !== ($data->updateConfig ?? null)) {
            $normalized_2              = $this->normalizer->normalize($data->updateConfig, 'json', $context);
            $dataArray['UpdateConfig'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('rollbackConfig', get_object_vars($data)) && null !== ($data->rollbackConfig ?? null)) {
            $normalized_3                = $this->normalizer->normalize($data->rollbackConfig, 'json', $context);
            $dataArray['RollbackConfig'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('networks', get_object_vars($data)) && null !== ($data->networks ?? null)) {
            $values_1 = [];
            foreach ($data->networks as $value_3) {
                $normalized_4 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_1[]   = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['Networks'] = $values_1;
        }
        if (array_key_exists('endpointSpec', get_object_vars($data)) && null !== ($data->endpointSpec ?? null)) {
            $normalized_5              = $this->normalizer->normalize($data->endpointSpec, 'json', $context);
            $dataArray['EndpointSpec'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
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
