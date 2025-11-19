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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfig();
        if (array_key_exists('IpcHost', $data) && is_int($data['IpcHost'])) {
            $data['IpcHost'] = (bool) $data['IpcHost'];
        }
        if (array_key_exists('PidHost', $data) && is_int($data['PidHost'])) {
            $data['PidHost'] = (bool) $data['PidHost'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('DockerVersion', $data)) {
            $object->setDockerVersion($data['DockerVersion']);
            unset($data['DockerVersion']);
        }
        if (array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (array_key_exists('Documentation', $data)) {
            $object->setDocumentation($data['Documentation']);
            unset($data['Documentation']);
        }
        if (array_key_exists('Interface', $data)) {
            $object->setInterface($this->denormalizer->denormalize($data['Interface'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class, 'json', $context));
            unset($data['Interface']);
        }
        if (array_key_exists('Entrypoint', $data)) {
            $values = [];
            foreach ($data['Entrypoint'] as $value) {
                $values[] = $value;
            }
            $object->setEntrypoint($values);
            unset($data['Entrypoint']);
        }
        if (array_key_exists('WorkDir', $data)) {
            $object->setWorkDir($data['WorkDir']);
            unset($data['WorkDir']);
        }
        if (array_key_exists('User', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['User'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class, 'json', $context));
            unset($data['User']);
        }
        if (array_key_exists('Network', $data)) {
            $object->setNetwork($this->denormalizer->denormalize($data['Network'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigNetwork::class, 'json', $context));
            unset($data['Network']);
        }
        if (array_key_exists('Linux', $data)) {
            $object->setLinux($this->denormalizer->denormalize($data['Linux'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigLinux::class, 'json', $context));
            unset($data['Linux']);
        }
        if (array_key_exists('PropagatedMount', $data)) {
            $object->setPropagatedMount($data['PropagatedMount']);
            unset($data['PropagatedMount']);
        }
        if (array_key_exists('IpcHost', $data)) {
            $object->setIpcHost($data['IpcHost']);
            unset($data['IpcHost']);
        }
        if (array_key_exists('PidHost', $data)) {
            $object->setPidHost($data['PidHost']);
            unset($data['PidHost']);
        }
        if (array_key_exists('Mounts', $data)) {
            $values_1 = [];
            foreach ($data['Mounts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\PluginMount::class, 'json', $context);
            }
            $object->setMounts($values_1);
            unset($data['Mounts']);
        }
        if (array_key_exists('Env', $data)) {
            $values_2 = [];
            foreach ($data['Env'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class, 'json', $context);
            }
            $object->setEnv($values_2);
            unset($data['Env']);
        }
        if (array_key_exists('Args', $data)) {
            $object->setArgs($this->denormalizer->denormalize($data['Args'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigArgs::class, 'json', $context));
            unset($data['Args']);
        }
        if (array_key_exists('rootfs', $data)) {
            $object->setRootfs($this->denormalizer->denormalize($data['rootfs'], \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class, 'json', $context));
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
        $dataArray = [];
        if ($data->isInitialized('dockerVersion') && null !== $data->getDockerVersion()) {
            $dataArray['DockerVersion'] = $data->getDockerVersion();
        }
        $dataArray['Description']   = $data->getDescription();
        $dataArray['Documentation'] = $data->getDocumentation();
        $dataArray['Interface']     = $this->normalizer->normalize($data->getInterface(), 'json', $context);
        $values                     = [];
        foreach ($data->getEntrypoint() as $value) {
            $values[] = $value;
        }
        $dataArray['Entrypoint'] = $values;
        $dataArray['WorkDir']    = $data->getWorkDir();
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['User'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        }
        $dataArray['Network']         = $this->normalizer->normalize($data->getNetwork(), 'json', $context);
        $dataArray['Linux']           = $this->normalizer->normalize($data->getLinux(), 'json', $context);
        $dataArray['PropagatedMount'] = $data->getPropagatedMount();
        $dataArray['IpcHost']         = $data->getIpcHost();
        $dataArray['PidHost']         = $data->getPidHost();
        $values_1                     = [];
        foreach ($data->getMounts() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['Mounts'] = $values_1;
        $values_2            = [];
        foreach ($data->getEnv() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['Env']  = $values_2;
        $dataArray['Args'] = $this->normalizer->normalize($data->getArgs(), 'json', $context);
        if ($data->isInitialized('rootfs') && null !== $data->getRootfs()) {
            $dataArray['rootfs'] = $this->normalizer->normalize($data->getRootfs(), 'json', $context);
        }
        foreach ($data as $key => $value_3) {
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
