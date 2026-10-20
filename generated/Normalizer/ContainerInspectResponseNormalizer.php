<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use DateTime;
use Exception;
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

class ContainerInspectResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Id', $data) && null !== $data['Id']) {
            $value = $data['Id'];
            if (is_string($data['Id'])) {
                $value = $data['Id'];
            } elseif (null === $data['Id']) {
                $value = $data['Id'];
            }
            $object->id = $value;
            unset($data['Id']);
        } elseif (array_key_exists('Id', $data)) {
            $object->id = null;
            unset($data['Id']);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Created']);
            if (false === $date) {
                if (is_string($data['Created']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['Created'])) {
                    try {
                        $date = new DateTime($data['Created']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Created'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Created'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->created = $date;
            unset($data['Created']);
        } elseif (array_key_exists('Created', $data)) {
            $object->created = null;
            unset($data['Created']);
        }
        if (array_key_exists('Path', $data) && null !== $data['Path']) {
            $value_1 = $data['Path'];
            if (is_string($data['Path'])) {
                $value_1 = $data['Path'];
            } elseif (null === $data['Path']) {
                $value_1 = $data['Path'];
            }
            $object->path = $value_1;
            unset($data['Path']);
        } elseif (array_key_exists('Path', $data)) {
            $object->path = null;
            unset($data['Path']);
        }
        if (array_key_exists('Args', $data) && null !== $data['Args']) {
            $values = [];
            foreach ($data['Args'] as $value_2) {
                $values[] = $value_2;
            }
            $object->args = $values;
            unset($data['Args']);
        } elseif (array_key_exists('Args', $data)) {
            $object->args = null;
            unset($data['Args']);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $object->state = $this->denormalizer->denormalize($data['State'], \WebProject\DockerApi\Library\Generated\Model\ContainerState::class, 'json', $context);
            unset($data['State']);
        } elseif (array_key_exists('State', $data)) {
            $object->state = null;
            unset($data['State']);
        }
        if (array_key_exists('Image', $data) && null !== $data['Image']) {
            $value_3 = $data['Image'];
            if (is_string($data['Image'])) {
                $value_3 = $data['Image'];
            } elseif (null === $data['Image']) {
                $value_3 = $data['Image'];
            }
            $object->image = $value_3;
            unset($data['Image']);
        } elseif (array_key_exists('Image', $data)) {
            $object->image = null;
            unset($data['Image']);
        }
        if (array_key_exists('ResolvConfPath', $data) && null !== $data['ResolvConfPath']) {
            $value_4 = $data['ResolvConfPath'];
            if (is_string($data['ResolvConfPath'])) {
                $value_4 = $data['ResolvConfPath'];
            } elseif (null === $data['ResolvConfPath']) {
                $value_4 = $data['ResolvConfPath'];
            }
            $object->resolvConfPath = $value_4;
            unset($data['ResolvConfPath']);
        } elseif (array_key_exists('ResolvConfPath', $data)) {
            $object->resolvConfPath = null;
            unset($data['ResolvConfPath']);
        }
        if (array_key_exists('HostnamePath', $data) && null !== $data['HostnamePath']) {
            $value_5 = $data['HostnamePath'];
            if (is_string($data['HostnamePath'])) {
                $value_5 = $data['HostnamePath'];
            } elseif (null === $data['HostnamePath']) {
                $value_5 = $data['HostnamePath'];
            }
            $object->hostnamePath = $value_5;
            unset($data['HostnamePath']);
        } elseif (array_key_exists('HostnamePath', $data)) {
            $object->hostnamePath = null;
            unset($data['HostnamePath']);
        }
        if (array_key_exists('HostsPath', $data) && null !== $data['HostsPath']) {
            $value_6 = $data['HostsPath'];
            if (is_string($data['HostsPath'])) {
                $value_6 = $data['HostsPath'];
            } elseif (null === $data['HostsPath']) {
                $value_6 = $data['HostsPath'];
            }
            $object->hostsPath = $value_6;
            unset($data['HostsPath']);
        } elseif (array_key_exists('HostsPath', $data)) {
            $object->hostsPath = null;
            unset($data['HostsPath']);
        }
        if (array_key_exists('LogPath', $data) && null !== $data['LogPath']) {
            $value_7 = $data['LogPath'];
            if (is_string($data['LogPath'])) {
                $value_7 = $data['LogPath'];
            } elseif (null === $data['LogPath']) {
                $value_7 = $data['LogPath'];
            }
            $object->logPath = $value_7;
            unset($data['LogPath']);
        } elseif (array_key_exists('LogPath', $data)) {
            $object->logPath = null;
            unset($data['LogPath']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value_8 = $data['Name'];
            if (is_string($data['Name'])) {
                $value_8 = $data['Name'];
            } elseif (null === $data['Name']) {
                $value_8 = $data['Name'];
            }
            $object->name = $value_8;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('RestartCount', $data) && null !== $data['RestartCount']) {
            $value_9 = $data['RestartCount'];
            if (is_int($data['RestartCount'])) {
                $value_9 = $data['RestartCount'];
            } elseif (null === $data['RestartCount']) {
                $value_9 = $data['RestartCount'];
            }
            $object->restartCount = $value_9;
            unset($data['RestartCount']);
        } elseif (array_key_exists('RestartCount', $data)) {
            $object->restartCount = null;
            unset($data['RestartCount']);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_10 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_10 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_10 = $data['Driver'];
            }
            $object->driver = $value_10;
            unset($data['Driver']);
        } elseif (array_key_exists('Driver', $data)) {
            $object->driver = null;
            unset($data['Driver']);
        }
        if (array_key_exists('Platform', $data) && null !== $data['Platform']) {
            $value_11 = $data['Platform'];
            if (is_string($data['Platform'])) {
                $value_11 = $data['Platform'];
            } elseif (null === $data['Platform']) {
                $value_11 = $data['Platform'];
            }
            $object->platform = $value_11;
            unset($data['Platform']);
        } elseif (array_key_exists('Platform', $data)) {
            $object->platform = null;
            unset($data['Platform']);
        }
        if (array_key_exists('ImageManifestDescriptor', $data)) {
            $object->imageManifestDescriptor = $this->denormalizer->denormalize($data['ImageManifestDescriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context);
            unset($data['ImageManifestDescriptor']);
        }
        if (array_key_exists('MountLabel', $data) && null !== $data['MountLabel']) {
            $value_12 = $data['MountLabel'];
            if (is_string($data['MountLabel'])) {
                $value_12 = $data['MountLabel'];
            } elseif (null === $data['MountLabel']) {
                $value_12 = $data['MountLabel'];
            }
            $object->mountLabel = $value_12;
            unset($data['MountLabel']);
        } elseif (array_key_exists('MountLabel', $data)) {
            $object->mountLabel = null;
            unset($data['MountLabel']);
        }
        if (array_key_exists('ProcessLabel', $data) && null !== $data['ProcessLabel']) {
            $value_13 = $data['ProcessLabel'];
            if (is_string($data['ProcessLabel'])) {
                $value_13 = $data['ProcessLabel'];
            } elseif (null === $data['ProcessLabel']) {
                $value_13 = $data['ProcessLabel'];
            }
            $object->processLabel = $value_13;
            unset($data['ProcessLabel']);
        } elseif (array_key_exists('ProcessLabel', $data)) {
            $object->processLabel = null;
            unset($data['ProcessLabel']);
        }
        if (array_key_exists('AppArmorProfile', $data) && null !== $data['AppArmorProfile']) {
            $value_14 = $data['AppArmorProfile'];
            if (is_string($data['AppArmorProfile'])) {
                $value_14 = $data['AppArmorProfile'];
            } elseif (null === $data['AppArmorProfile']) {
                $value_14 = $data['AppArmorProfile'];
            }
            $object->appArmorProfile = $value_14;
            unset($data['AppArmorProfile']);
        } elseif (array_key_exists('AppArmorProfile', $data)) {
            $object->appArmorProfile = null;
            unset($data['AppArmorProfile']);
        }
        if (array_key_exists('ExecIDs', $data) && null !== $data['ExecIDs']) {
            $values_1 = [];
            foreach ($data['ExecIDs'] as $value_15) {
                $values_1[] = $value_15;
            }
            $object->execIDs = $values_1;
            unset($data['ExecIDs']);
        } elseif (array_key_exists('ExecIDs', $data)) {
            $object->execIDs = null;
            unset($data['ExecIDs']);
        }
        if (array_key_exists('HostConfig', $data)) {
            $object->hostConfig = $this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfig::class, 'json', $context);
            unset($data['HostConfig']);
        }
        if (array_key_exists('GraphDriver', $data)) {
            $object->graphDriver = $this->denormalizer->denormalize($data['GraphDriver'], \WebProject\DockerApi\Library\Generated\Model\DriverData::class, 'json', $context);
            unset($data['GraphDriver']);
        }
        if (array_key_exists('Storage', $data)) {
            $object->storage = $this->denormalizer->denormalize($data['Storage'], \WebProject\DockerApi\Library\Generated\Model\Storage::class, 'json', $context);
            unset($data['Storage']);
        }
        if (array_key_exists('SizeRw', $data) && null !== $data['SizeRw']) {
            $value_16 = $data['SizeRw'];
            if (is_int($data['SizeRw'])) {
                $value_16 = $data['SizeRw'];
            } elseif (null === $data['SizeRw']) {
                $value_16 = $data['SizeRw'];
            }
            $object->sizeRw = $value_16;
            unset($data['SizeRw']);
        } elseif (array_key_exists('SizeRw', $data)) {
            $object->sizeRw = null;
            unset($data['SizeRw']);
        }
        if (array_key_exists('SizeRootFs', $data) && null !== $data['SizeRootFs']) {
            $value_17 = $data['SizeRootFs'];
            if (is_int($data['SizeRootFs'])) {
                $value_17 = $data['SizeRootFs'];
            } elseif (null === $data['SizeRootFs']) {
                $value_17 = $data['SizeRootFs'];
            }
            $object->sizeRootFs = $value_17;
            unset($data['SizeRootFs']);
        } elseif (array_key_exists('SizeRootFs', $data)) {
            $object->sizeRootFs = null;
            unset($data['SizeRootFs']);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_2 = [];
            foreach ($data['Mounts'] as $value_18) {
                $values_2[] = $this->denormalizer->denormalize($value_18, \WebProject\DockerApi\Library\Generated\Model\MountPoint::class, 'json', $context);
            }
            $object->mounts = $values_2;
            unset($data['Mounts']);
        } elseif (array_key_exists('Mounts', $data)) {
            $object->mounts = null;
            unset($data['Mounts']);
        }
        if (array_key_exists('Config', $data)) {
            $object->config = $this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class, 'json', $context);
            unset($data['Config']);
        }
        if (array_key_exists('NetworkSettings', $data)) {
            $object->networkSettings = $this->denormalizer->denormalize($data['NetworkSettings'], \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class, 'json', $context);
            unset($data['NetworkSettings']);
        }
        foreach ($data as $key => $value_19) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_19;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $value = $data->id;
            if (is_string($data->id)) {
                $value = $data->id;
            } elseif (null === $data->id) {
                $value = $data->id;
            }
            $dataArray['Id'] = $value;
        }
        if (array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['Created'] = $data->created?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('path', get_object_vars($data)) && null !== ($data->path ?? null)) {
            $value_1 = $data->path;
            if (is_string($data->path)) {
                $value_1 = $data->path;
            } elseif (null === $data->path) {
                $value_1 = $data->path;
            }
            $dataArray['Path'] = $value_1;
        }
        if (array_key_exists('args', get_object_vars($data)) && null !== ($data->args ?? null)) {
            $values = [];
            foreach ($data->args as $value_2) {
                $values[] = $value_2;
            }
            $dataArray['Args'] = $values;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $normalized         = $this->normalizer->normalize($data->state, 'json', $context);
            $dataArray['State'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $value_3 = $data->image;
            if (is_string($data->image)) {
                $value_3 = $data->image;
            } elseif (null === $data->image) {
                $value_3 = $data->image;
            }
            $dataArray['Image'] = $value_3;
        }
        if (array_key_exists('resolvConfPath', get_object_vars($data)) && null !== ($data->resolvConfPath ?? null)) {
            $value_4 = $data->resolvConfPath;
            if (is_string($data->resolvConfPath)) {
                $value_4 = $data->resolvConfPath;
            } elseif (null === $data->resolvConfPath) {
                $value_4 = $data->resolvConfPath;
            }
            $dataArray['ResolvConfPath'] = $value_4;
        }
        if (array_key_exists('hostnamePath', get_object_vars($data)) && null !== ($data->hostnamePath ?? null)) {
            $value_5 = $data->hostnamePath;
            if (is_string($data->hostnamePath)) {
                $value_5 = $data->hostnamePath;
            } elseif (null === $data->hostnamePath) {
                $value_5 = $data->hostnamePath;
            }
            $dataArray['HostnamePath'] = $value_5;
        }
        if (array_key_exists('hostsPath', get_object_vars($data)) && null !== ($data->hostsPath ?? null)) {
            $value_6 = $data->hostsPath;
            if (is_string($data->hostsPath)) {
                $value_6 = $data->hostsPath;
            } elseif (null === $data->hostsPath) {
                $value_6 = $data->hostsPath;
            }
            $dataArray['HostsPath'] = $value_6;
        }
        if (array_key_exists('logPath', get_object_vars($data)) && null !== ($data->logPath ?? null)) {
            $value_7 = $data->logPath;
            if (is_string($data->logPath)) {
                $value_7 = $data->logPath;
            } elseif (null === $data->logPath) {
                $value_7 = $data->logPath;
            }
            $dataArray['LogPath'] = $value_7;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value_8 = $data->name;
            if (is_string($data->name)) {
                $value_8 = $data->name;
            } elseif (null === $data->name) {
                $value_8 = $data->name;
            }
            $dataArray['Name'] = $value_8;
        }
        if (array_key_exists('restartCount', get_object_vars($data)) && null !== ($data->restartCount ?? null)) {
            $value_9 = $data->restartCount;
            if (is_int($data->restartCount)) {
                $value_9 = $data->restartCount;
            } elseif (null === $data->restartCount) {
                $value_9 = $data->restartCount;
            }
            $dataArray['RestartCount'] = $value_9;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $value_10 = $data->driver;
            if (is_string($data->driver)) {
                $value_10 = $data->driver;
            } elseif (null === $data->driver) {
                $value_10 = $data->driver;
            }
            $dataArray['Driver'] = $value_10;
        }
        if (array_key_exists('platform', get_object_vars($data)) && null !== ($data->platform ?? null)) {
            $value_11 = $data->platform;
            if (is_string($data->platform)) {
                $value_11 = $data->platform;
            } elseif (null === $data->platform) {
                $value_11 = $data->platform;
            }
            $dataArray['Platform'] = $value_11;
        }
        if (array_key_exists('imageManifestDescriptor', get_object_vars($data)) && null !== ($data->imageManifestDescriptor ?? null)) {
            $normalized_1                         = $this->normalizer->normalize($data->imageManifestDescriptor, 'json', $context);
            $dataArray['ImageManifestDescriptor'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('mountLabel', get_object_vars($data)) && null !== ($data->mountLabel ?? null)) {
            $value_12 = $data->mountLabel;
            if (is_string($data->mountLabel)) {
                $value_12 = $data->mountLabel;
            } elseif (null === $data->mountLabel) {
                $value_12 = $data->mountLabel;
            }
            $dataArray['MountLabel'] = $value_12;
        }
        if (array_key_exists('processLabel', get_object_vars($data)) && null !== ($data->processLabel ?? null)) {
            $value_13 = $data->processLabel;
            if (is_string($data->processLabel)) {
                $value_13 = $data->processLabel;
            } elseif (null === $data->processLabel) {
                $value_13 = $data->processLabel;
            }
            $dataArray['ProcessLabel'] = $value_13;
        }
        if (array_key_exists('appArmorProfile', get_object_vars($data)) && null !== ($data->appArmorProfile ?? null)) {
            $value_14 = $data->appArmorProfile;
            if (is_string($data->appArmorProfile)) {
                $value_14 = $data->appArmorProfile;
            } elseif (null === $data->appArmorProfile) {
                $value_14 = $data->appArmorProfile;
            }
            $dataArray['AppArmorProfile'] = $value_14;
        }
        if (array_key_exists('execIDs', get_object_vars($data)) && null !== ($data->execIDs ?? null)) {
            $values_1 = [];
            foreach ($data->execIDs as $value_15) {
                $values_1[] = $value_15;
            }
            $dataArray['ExecIDs'] = $values_1;
        }
        if (array_key_exists('hostConfig', get_object_vars($data)) && null !== ($data->hostConfig ?? null)) {
            $normalized_2            = $this->normalizer->normalize($data->hostConfig, 'json', $context);
            $dataArray['HostConfig'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('graphDriver', get_object_vars($data)) && null !== ($data->graphDriver ?? null)) {
            $normalized_3             = $this->normalizer->normalize($data->graphDriver, 'json', $context);
            $dataArray['GraphDriver'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('storage', get_object_vars($data)) && null !== ($data->storage ?? null)) {
            $normalized_4         = $this->normalizer->normalize($data->storage, 'json', $context);
            $dataArray['Storage'] = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('sizeRw', get_object_vars($data)) && null !== ($data->sizeRw ?? null)) {
            $value_16 = $data->sizeRw;
            if (is_int($data->sizeRw)) {
                $value_16 = $data->sizeRw;
            } elseif (null === $data->sizeRw) {
                $value_16 = $data->sizeRw;
            }
            $dataArray['SizeRw'] = $value_16;
        }
        if (array_key_exists('sizeRootFs', get_object_vars($data)) && null !== ($data->sizeRootFs ?? null)) {
            $value_17 = $data->sizeRootFs;
            if (is_int($data->sizeRootFs)) {
                $value_17 = $data->sizeRootFs;
            } elseif (null === $data->sizeRootFs) {
                $value_17 = $data->sizeRootFs;
            }
            $dataArray['SizeRootFs'] = $value_17;
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_2 = [];
            foreach ($data->mounts as $value_18) {
                $normalized_5 = null === $value_18 ? null : $this->normalizer->normalize($value_18, 'json', $context);
                $values_2[]   = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['Mounts'] = $values_2;
        }
        if (array_key_exists('config', get_object_vars($data)) && null !== ($data->config ?? null)) {
            $normalized_6        = $this->normalizer->normalize($data->config, 'json', $context);
            $dataArray['Config'] = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('networkSettings', get_object_vars($data)) && null !== ($data->networkSettings ?? null)) {
            $normalized_7                 = $this->normalizer->normalize($data->networkSettings, 'json', $context);
            $dataArray['NetworkSettings'] = is_iterable($normalized_7) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_19) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_19;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
