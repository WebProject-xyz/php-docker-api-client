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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('PluginSpec', $data)) {
            $object->setPluginSpec($this->denormalizer->denormalize($data['PluginSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class, 'json', $context));
            unset($data['PluginSpec']);
        }
        if (array_key_exists('ContainerSpec', $data)) {
            $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class, 'json', $context));
            unset($data['ContainerSpec']);
        }
        if (array_key_exists('NetworkAttachmentSpec', $data) && null !== $data['NetworkAttachmentSpec']) {
            $object->setNetworkAttachmentSpec($this->denormalizer->denormalize($data['NetworkAttachmentSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class, 'json', $context));
            unset($data['NetworkAttachmentSpec']);
        } elseif (array_key_exists('NetworkAttachmentSpec', $data) && null === $data['NetworkAttachmentSpec']) {
            $object->setNetworkAttachmentSpec(null);
        }
        if (array_key_exists('Resources', $data)) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class, 'json', $context));
            unset($data['Resources']);
        }
        if (array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class, 'json', $context));
            unset($data['RestartPolicy']);
        }
        if (array_key_exists('Placement', $data)) {
            $object->setPlacement($this->denormalizer->denormalize($data['Placement'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class, 'json', $context));
            unset($data['Placement']);
        }
        if (array_key_exists('ForceUpdate', $data)) {
            $object->setForceUpdate($data['ForceUpdate']);
            unset($data['ForceUpdate']);
        }
        if (array_key_exists('Runtime', $data)) {
            $object->setRuntime($data['Runtime']);
            unset($data['Runtime']);
        }
        if (array_key_exists('Networks', $data)) {
            $values = [];
            foreach ($data['Networks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->setNetworks($values);
            unset($data['Networks']);
        }
        if (array_key_exists('LogDriver', $data)) {
            $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecLogDriver::class, 'json', $context));
            unset($data['LogDriver']);
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
        if ($data->isInitialized('pluginSpec') && null !== $data->getPluginSpec()) {
            $dataArray['PluginSpec'] = $this->normalizer->normalize($data->getPluginSpec(), 'json', $context);
        }
        if ($data->isInitialized('containerSpec') && null !== $data->getContainerSpec()) {
            $dataArray['ContainerSpec'] = $this->normalizer->normalize($data->getContainerSpec(), 'json', $context);
        }
        if ($data->isInitialized('networkAttachmentSpec') && null !== $data->getNetworkAttachmentSpec()) {
            $dataArray['NetworkAttachmentSpec'] = $this->normalizer->normalize($data->getNetworkAttachmentSpec(), 'json', $context);
        }
        if ($data->isInitialized('resources') && null !== $data->getResources()) {
            $dataArray['Resources'] = $this->normalizer->normalize($data->getResources(), 'json', $context);
        }
        if ($data->isInitialized('restartPolicy') && null !== $data->getRestartPolicy()) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }
        if ($data->isInitialized('placement') && null !== $data->getPlacement()) {
            $dataArray['Placement'] = $this->normalizer->normalize($data->getPlacement(), 'json', $context);
        }
        if ($data->isInitialized('forceUpdate') && null !== $data->getForceUpdate()) {
            $dataArray['ForceUpdate'] = $data->getForceUpdate();
        }
        if ($data->isInitialized('runtime') && null !== $data->getRuntime()) {
            $dataArray['Runtime'] = $data->getRuntime();
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $values = [];
            foreach ($data->getNetworks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Networks'] = $values;
        }
        if ($data->isInitialized('logDriver') && null !== $data->getLogDriver()) {
            $dataArray['LogDriver'] = $this->normalizer->normalize($data->getLogDriver(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
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
