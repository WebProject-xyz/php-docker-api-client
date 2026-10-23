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

class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('IpcHost', $data) && is_int($data['IpcHost'])) {
            $data['IpcHost'] = (bool) $data['IpcHost'];
        }
        if (array_key_exists('PidHost', $data) && is_int($data['PidHost'])) {
            $data['PidHost'] = (bool) $data['PidHost'];
        }
        if (array_key_exists('Description', $data)) {
            $object->description = $data['Description'];
            unset($data['Description']);
        }
        if (array_key_exists('Documentation', $data)) {
            $object->documentation = $data['Documentation'];
            unset($data['Documentation']);
        }
        if (array_key_exists('Interface', $data)) {
            $object->interface = $this->denormalizer->denormalize($data['Interface'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class, 'json', $context);
            unset($data['Interface']);
        }
        if (array_key_exists('Entrypoint', $data)) {
            $values = [];
            foreach ($data['Entrypoint'] as $value) {
                $values[] = $value;
            }
            $object->entrypoint = $values;
            unset($data['Entrypoint']);
        }
        if (array_key_exists('WorkDir', $data)) {
            $object->workDir = $data['WorkDir'];
            unset($data['WorkDir']);
        }
        if (array_key_exists('User', $data)) {
            $object->user = $this->denormalizer->denormalize($data['User'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class, 'json', $context);
            unset($data['User']);
        }
        if (array_key_exists('Network', $data)) {
            $object->network = $this->denormalizer->denormalize($data['Network'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigNetwork::class, 'json', $context);
            unset($data['Network']);
        }
        if (array_key_exists('Linux', $data)) {
            $object->linux = $this->denormalizer->denormalize($data['Linux'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigLinux::class, 'json', $context);
            unset($data['Linux']);
        }
        if (array_key_exists('PropagatedMount', $data)) {
            $object->propagatedMount = $data['PropagatedMount'];
            unset($data['PropagatedMount']);
        }
        if (array_key_exists('IpcHost', $data)) {
            $object->ipcHost = $data['IpcHost'];
            unset($data['IpcHost']);
        }
        if (array_key_exists('PidHost', $data)) {
            $object->pidHost = $data['PidHost'];
            unset($data['PidHost']);
        }
        if (array_key_exists('Mounts', $data)) {
            $values_1 = [];
            foreach ($data['Mounts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\PluginMount::class, 'json', $context);
            }
            $object->mounts = $values_1;
            unset($data['Mounts']);
        }
        if (array_key_exists('Env', $data)) {
            $values_2 = [];
            foreach ($data['Env'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class, 'json', $context);
            }
            $object->env = $values_2;
            unset($data['Env']);
        }
        if (array_key_exists('Args', $data)) {
            $object->args = $this->denormalizer->denormalize($data['Args'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigArgs::class, 'json', $context);
            unset($data['Args']);
        }
        if (array_key_exists('rootfs', $data) && null !== $data['rootfs']) {
            $object->rootfs = $this->denormalizer->denormalize($data['rootfs'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class, 'json', $context);
            unset($data['rootfs']);
        } elseif (array_key_exists('rootfs', $data)) {
            $object->rootfs = null;
            unset($data['rootfs']);
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
        $dataArray                  = [];
        $dataArray['Description']   = $data->description;
        $dataArray['Documentation'] = $data->documentation;
        $normalized                 = null === $data->interface ? null : $this->normalizer->normalize($data->interface, 'json', $context);
        $dataArray['Interface']     = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        $values                     = [];
        foreach ($data->entrypoint as $value) {
            $values[] = $value;
        }
        $dataArray['Entrypoint'] = $values;
        $dataArray['WorkDir']    = $data->workDir;
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $normalized_1      = $this->normalizer->normalize($data->user, 'json', $context);
            $dataArray['User'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $normalized_2                 = null === $data->network ? null : $this->normalizer->normalize($data->network, 'json', $context);
        $dataArray['Network']         = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        $normalized_3                 = null === $data->linux ? null : $this->normalizer->normalize($data->linux, 'json', $context);
        $dataArray['Linux']           = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        $dataArray['PropagatedMount'] = $data->propagatedMount;
        $dataArray['IpcHost']         = $data->ipcHost;
        $dataArray['PidHost']         = $data->pidHost;
        $values_1                     = [];
        foreach ($data->mounts as $value_1) {
            $normalized_4 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
            $values_1[]   = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        $dataArray['Mounts'] = $values_1;
        $values_2            = [];
        foreach ($data->env as $value_2) {
            $normalized_5 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
            $values_2[]   = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        $dataArray['Env']  = $values_2;
        $normalized_6      = null === $data->args ? null : $this->normalizer->normalize($data->args, 'json', $context);
        $dataArray['Args'] = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
        if (array_key_exists('rootfs', get_object_vars($data)) && null !== ($data->rootfs ?? null)) {
            $normalized_7        = $this->normalizer->normalize($data->rootfs, 'json', $context);
            $dataArray['rootfs'] = is_iterable($normalized_7) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_7) : $normalized_7;
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
        return [\WebProject\DockerApi\Library\Generated\Model\PluginConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
