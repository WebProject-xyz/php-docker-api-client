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
            $object->setPluginSpec($this->denormalizer->denormalize($data['PluginSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class, 'json', $context));
        } elseif (array_key_exists('PluginSpec', $data) && null === $data['PluginSpec']) {
            $object->setPluginSpec(null);
        }
        if (array_key_exists('ContainerSpec', $data) && null !== $data['ContainerSpec']) {
            $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class, 'json', $context));
        } elseif (array_key_exists('ContainerSpec', $data) && null === $data['ContainerSpec']) {
            $object->setContainerSpec(null);
        }
        if (array_key_exists('NetworkAttachmentSpec', $data) && null !== $data['NetworkAttachmentSpec']) {
            $object->setNetworkAttachmentSpec($this->denormalizer->denormalize($data['NetworkAttachmentSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class, 'json', $context));
        } elseif (array_key_exists('NetworkAttachmentSpec', $data) && null === $data['NetworkAttachmentSpec']) {
            $object->setNetworkAttachmentSpec(null);
        }
        if (array_key_exists('Resources', $data) && null !== $data['Resources']) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class, 'json', $context));
        } elseif (array_key_exists('Resources', $data) && null === $data['Resources']) {
            $object->setResources(null);
        }
        if (array_key_exists('RestartPolicy', $data) && null !== $data['RestartPolicy']) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class, 'json', $context));
        } elseif (array_key_exists('RestartPolicy', $data) && null === $data['RestartPolicy']) {
            $object->setRestartPolicy(null);
        }
        if (array_key_exists('Placement', $data) && null !== $data['Placement']) {
            $object->setPlacement($this->denormalizer->denormalize($data['Placement'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class, 'json', $context));
        } elseif (array_key_exists('Placement', $data) && null === $data['Placement']) {
            $object->setPlacement(null);
        }
        if (array_key_exists('ForceUpdate', $data) && null !== $data['ForceUpdate']) {
            $value = $data['ForceUpdate'];
            if (is_int($data['ForceUpdate'])) {
                $value = $data['ForceUpdate'];
            } elseif (null === $data['ForceUpdate']) {
                $value = $data['ForceUpdate'];
            }
            $object->setForceUpdate($value);
        } elseif (array_key_exists('ForceUpdate', $data) && null === $data['ForceUpdate']) {
            $object->setForceUpdate(null);
        }
        if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $value_1 = $data['Runtime'];
            if (is_string($data['Runtime'])) {
                $value_1 = $data['Runtime'];
            } elseif (null === $data['Runtime']) {
                $value_1 = $data['Runtime'];
            }
            $object->setRuntime($value_1);
        } elseif (array_key_exists('Runtime', $data) && null === $data['Runtime']) {
            $object->setRuntime(null);
        }
        if (array_key_exists('Networks', $data) && null !== $data['Networks']) {
            $value_2 = $data['Networks'];
            if (is_array($data['Networks']) && $this->isOnlyNumericKeys($data['Networks'])) {
                $values = [];
                foreach ($data['Networks'] as $value_3) {
                    $values[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $value_2 = $values;
            } elseif (null === $data['Networks']) {
                $value_2 = $data['Networks'];
            }
            $object->setNetworks($value_2);
        } elseif (array_key_exists('Networks', $data) && null === $data['Networks']) {
            $object->setNetworks(null);
        }
        if (array_key_exists('LogDriver', $data) && null !== $data['LogDriver']) {
            $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecLogDriver::class, 'json', $context));
        } elseif (array_key_exists('LogDriver', $data) && null === $data['LogDriver']) {
            $object->setLogDriver(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('pluginSpec')) {
            $dataArray['PluginSpec'] = $this->normalizer->normalize($data->getPluginSpec(), 'json', $context);
        }
        if ($data->isInitialized('containerSpec')) {
            $dataArray['ContainerSpec'] = $this->normalizer->normalize($data->getContainerSpec(), 'json', $context);
        }
        if ($data->isInitialized('networkAttachmentSpec')) {
            $dataArray['NetworkAttachmentSpec'] = $this->normalizer->normalize($data->getNetworkAttachmentSpec(), 'json', $context);
        }
        if ($data->isInitialized('resources')) {
            $dataArray['Resources'] = $this->normalizer->normalize($data->getResources(), 'json', $context);
        }
        if ($data->isInitialized('restartPolicy')) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }
        if ($data->isInitialized('placement')) {
            $dataArray['Placement'] = $this->normalizer->normalize($data->getPlacement(), 'json', $context);
        }
        if ($data->isInitialized('forceUpdate')) {
            $value = $data->getForceUpdate();
            if (is_int($data->getForceUpdate())) {
                $value = $data->getForceUpdate();
            } elseif (null === $data->getForceUpdate()) {
                $value = $data->getForceUpdate();
            }
            $dataArray['ForceUpdate'] = $value;
        }
        if ($data->isInitialized('runtime')) {
            $value_1 = $data->getRuntime();
            if (is_string($data->getRuntime())) {
                $value_1 = $data->getRuntime();
            } elseif (null === $data->getRuntime()) {
                $value_1 = $data->getRuntime();
            }
            $dataArray['Runtime'] = $value_1;
        }
        if ($data->isInitialized('networks')) {
            $value_2 = $data->getNetworks();
            if (is_array($data->getNetworks())) {
                $values = [];
                foreach ($data->getNetworks() as $value_3) {
                    $values[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $value_2 = $values;
            } elseif (null === $data->getNetworks()) {
                $value_2 = $data->getNetworks();
            }
            $dataArray['Networks'] = $value_2;
        }
        if ($data->isInitialized('logDriver')) {
            $dataArray['LogDriver'] = $this->normalizer->normalize($data->getLogDriver(), 'json', $context);
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
