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

class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('PluginSpec', $data) && null !== $data['PluginSpec']) {
            $object->pluginSpec = $this->denormalizer->denormalize($data['PluginSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class, 'json', $context);
            unset($data['PluginSpec']);
        } elseif (array_key_exists('PluginSpec', $data)) {
            $object->pluginSpec = null;
            unset($data['PluginSpec']);
        }
        if (array_key_exists('ContainerSpec', $data) && null !== $data['ContainerSpec']) {
            $object->containerSpec = $this->denormalizer->denormalize($data['ContainerSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class, 'json', $context);
            unset($data['ContainerSpec']);
        } elseif (array_key_exists('ContainerSpec', $data)) {
            $object->containerSpec = null;
            unset($data['ContainerSpec']);
        }
        if (array_key_exists('NetworkAttachmentSpec', $data) && null !== $data['NetworkAttachmentSpec']) {
            $object->networkAttachmentSpec = $this->denormalizer->denormalize($data['NetworkAttachmentSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class, 'json', $context);
            unset($data['NetworkAttachmentSpec']);
        } elseif (array_key_exists('NetworkAttachmentSpec', $data)) {
            $object->networkAttachmentSpec = null;
            unset($data['NetworkAttachmentSpec']);
        }
        if (array_key_exists('Resources', $data) && null !== $data['Resources']) {
            $object->resources = $this->denormalizer->denormalize($data['Resources'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class, 'json', $context);
            unset($data['Resources']);
        } elseif (array_key_exists('Resources', $data)) {
            $object->resources = null;
            unset($data['Resources']);
        }
        if (array_key_exists('RestartPolicy', $data) && null !== $data['RestartPolicy']) {
            $object->restartPolicy = $this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class, 'json', $context);
            unset($data['RestartPolicy']);
        } elseif (array_key_exists('RestartPolicy', $data)) {
            $object->restartPolicy = null;
            unset($data['RestartPolicy']);
        }
        if (array_key_exists('Placement', $data) && null !== $data['Placement']) {
            $object->placement = $this->denormalizer->denormalize($data['Placement'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class, 'json', $context);
            unset($data['Placement']);
        } elseif (array_key_exists('Placement', $data)) {
            $object->placement = null;
            unset($data['Placement']);
        }
        if (array_key_exists('ForceUpdate', $data) && null !== $data['ForceUpdate']) {
            $value = $data['ForceUpdate'];
            if (is_int($data['ForceUpdate'])) {
                $value = $data['ForceUpdate'];
            } elseif (null === $data['ForceUpdate']) {
                $value = $data['ForceUpdate'];
            }
            $object->forceUpdate = $value;
            unset($data['ForceUpdate']);
        } elseif (array_key_exists('ForceUpdate', $data)) {
            $object->forceUpdate = null;
            unset($data['ForceUpdate']);
        }
        if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $value_1 = $data['Runtime'];
            if (is_string($data['Runtime'])) {
                $value_1 = $data['Runtime'];
            } elseif (null === $data['Runtime']) {
                $value_1 = $data['Runtime'];
            }
            $object->runtime = $value_1;
            unset($data['Runtime']);
        } elseif (array_key_exists('Runtime', $data)) {
            $object->runtime = null;
            unset($data['Runtime']);
        }
        if (array_key_exists('Networks', $data) && null !== $data['Networks']) {
            $values = [];
            foreach ($data['Networks'] as $value_2) {
                $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->networks = $values;
            unset($data['Networks']);
        } elseif (array_key_exists('Networks', $data)) {
            $object->networks = null;
            unset($data['Networks']);
        }
        if (array_key_exists('LogDriver', $data) && null !== $data['LogDriver']) {
            $object->logDriver = $this->denormalizer->denormalize($data['LogDriver'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecLogDriver::class, 'json', $context);
            unset($data['LogDriver']);
        } elseif (array_key_exists('LogDriver', $data)) {
            $object->logDriver = null;
            unset($data['LogDriver']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('pluginSpec', get_object_vars($data)) && null !== ($data->pluginSpec ?? null)) {
            $normalized              = $this->normalizer->normalize($data->pluginSpec, 'json', $context);
            $dataArray['PluginSpec'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('containerSpec', get_object_vars($data)) && null !== ($data->containerSpec ?? null)) {
            $normalized_1               = $this->normalizer->normalize($data->containerSpec, 'json', $context);
            $dataArray['ContainerSpec'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('networkAttachmentSpec', get_object_vars($data)) && null !== ($data->networkAttachmentSpec ?? null)) {
            $normalized_2                       = $this->normalizer->normalize($data->networkAttachmentSpec, 'json', $context);
            $dataArray['NetworkAttachmentSpec'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('resources', get_object_vars($data)) && null !== ($data->resources ?? null)) {
            $normalized_3           = $this->normalizer->normalize($data->resources, 'json', $context);
            $dataArray['Resources'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('restartPolicy', get_object_vars($data)) && null !== ($data->restartPolicy ?? null)) {
            $normalized_4               = $this->normalizer->normalize($data->restartPolicy, 'json', $context);
            $dataArray['RestartPolicy'] = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('placement', get_object_vars($data)) && null !== ($data->placement ?? null)) {
            $normalized_5           = $this->normalizer->normalize($data->placement, 'json', $context);
            $dataArray['Placement'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('forceUpdate', get_object_vars($data)) && null !== ($data->forceUpdate ?? null)) {
            $value = $data->forceUpdate;
            if (is_int($data->forceUpdate)) {
                $value = $data->forceUpdate;
            } elseif (null === $data->forceUpdate) {
                $value = $data->forceUpdate;
            }
            $dataArray['ForceUpdate'] = $value;
        }
        if (array_key_exists('runtime', get_object_vars($data)) && null !== ($data->runtime ?? null)) {
            $value_1 = $data->runtime;
            if (is_string($data->runtime)) {
                $value_1 = $data->runtime;
            } elseif (null === $data->runtime) {
                $value_1 = $data->runtime;
            }
            $dataArray['Runtime'] = $value_1;
        }
        if (array_key_exists('networks', get_object_vars($data)) && null !== ($data->networks ?? null)) {
            $values = [];
            foreach ($data->networks as $value_2) {
                $normalized_6 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values[]     = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['Networks'] = $values;
        }
        if (array_key_exists('logDriver', get_object_vars($data)) && null !== ($data->logDriver ?? null)) {
            $normalized_7           = $this->normalizer->normalize($data->logDriver, 'json', $context);
            $dataArray['LogDriver'] = is_iterable($normalized_7) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
