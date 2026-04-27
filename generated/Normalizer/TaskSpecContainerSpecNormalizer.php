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
use function is_bool;
use function is_int;
use function is_object;
use function is_string;

class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Image', $data) && null !== $data['Image']) {
            $value = $data['Image'];
            if (is_string($data['Image'])) {
                $value = $data['Image'];
            } elseif (null === $data['Image']) {
                $value = $data['Image'];
            }
            $object->setImage($value);
        } elseif (array_key_exists('Image', $data) && null === $data['Image']) {
            $object->setImage(null);
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
        if (array_key_exists('Command', $data) && null !== $data['Command']) {
            $value_3 = $data['Command'];
            if (is_array($data['Command']) && $this->isOnlyNumericKeys($data['Command'])) {
                $values_1 = [];
                foreach ($data['Command'] as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data['Command']) {
                $value_3 = $data['Command'];
            }
            $object->setCommand($value_3);
        } elseif (array_key_exists('Command', $data) && null === $data['Command']) {
            $object->setCommand(null);
        }
        if (array_key_exists('Args', $data) && null !== $data['Args']) {
            $value_5 = $data['Args'];
            if (is_array($data['Args']) && $this->isOnlyNumericKeys($data['Args'])) {
                $values_2 = [];
                foreach ($data['Args'] as $value_6) {
                    $values_2[] = $value_6;
                }
                $value_5 = $values_2;
            } elseif (null === $data['Args']) {
                $value_5 = $data['Args'];
            }
            $object->setArgs($value_5);
        } elseif (array_key_exists('Args', $data) && null === $data['Args']) {
            $object->setArgs(null);
        }
        if (array_key_exists('Hostname', $data) && null !== $data['Hostname']) {
            $value_7 = $data['Hostname'];
            if (is_string($data['Hostname'])) {
                $value_7 = $data['Hostname'];
            } elseif (null === $data['Hostname']) {
                $value_7 = $data['Hostname'];
            }
            $object->setHostname($value_7);
        } elseif (array_key_exists('Hostname', $data) && null === $data['Hostname']) {
            $object->setHostname(null);
        }
        if (array_key_exists('Env', $data) && null !== $data['Env']) {
            $value_8 = $data['Env'];
            if (is_array($data['Env']) && $this->isOnlyNumericKeys($data['Env'])) {
                $values_3 = [];
                foreach ($data['Env'] as $value_9) {
                    $values_3[] = $value_9;
                }
                $value_8 = $values_3;
            } elseif (null === $data['Env']) {
                $value_8 = $data['Env'];
            }
            $object->setEnv($value_8);
        } elseif (array_key_exists('Env', $data) && null === $data['Env']) {
            $object->setEnv(null);
        }
        if (array_key_exists('Dir', $data) && null !== $data['Dir']) {
            $value_10 = $data['Dir'];
            if (is_string($data['Dir'])) {
                $value_10 = $data['Dir'];
            } elseif (null === $data['Dir']) {
                $value_10 = $data['Dir'];
            }
            $object->setDir($value_10);
        } elseif (array_key_exists('Dir', $data) && null === $data['Dir']) {
            $object->setDir(null);
        }
        if (array_key_exists('User', $data) && null !== $data['User']) {
            $value_11 = $data['User'];
            if (is_string($data['User'])) {
                $value_11 = $data['User'];
            } elseif (null === $data['User']) {
                $value_11 = $data['User'];
            }
            $object->setUser($value_11);
        } elseif (array_key_exists('User', $data) && null === $data['User']) {
            $object->setUser(null);
        }
        if (array_key_exists('Groups', $data) && null !== $data['Groups']) {
            $value_12 = $data['Groups'];
            if (is_array($data['Groups']) && $this->isOnlyNumericKeys($data['Groups'])) {
                $values_4 = [];
                foreach ($data['Groups'] as $value_13) {
                    $values_4[] = $value_13;
                }
                $value_12 = $values_4;
            } elseif (null === $data['Groups']) {
                $value_12 = $data['Groups'];
            }
            $object->setGroups($value_12);
        } elseif (array_key_exists('Groups', $data) && null === $data['Groups']) {
            $object->setGroups(null);
        }
        if (array_key_exists('Privileges', $data) && null !== $data['Privileges']) {
            $object->setPrivileges($this->denormalizer->denormalize($data['Privileges'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class, 'json', $context));
        } elseif (array_key_exists('Privileges', $data) && null === $data['Privileges']) {
            $object->setPrivileges(null);
        }
        if (array_key_exists('TTY', $data) && null !== $data['TTY']) {
            $value_14 = $data['TTY'];
            if (is_bool($data['TTY'])) {
                $value_14 = $data['TTY'];
            } elseif (null === $data['TTY']) {
                $value_14 = $data['TTY'];
            }
            $object->setTTY($value_14);
        } elseif (array_key_exists('TTY', $data) && null === $data['TTY']) {
            $object->setTTY(null);
        }
        if (array_key_exists('OpenStdin', $data) && null !== $data['OpenStdin']) {
            $value_15 = $data['OpenStdin'];
            if (is_bool($data['OpenStdin'])) {
                $value_15 = $data['OpenStdin'];
            } elseif (null === $data['OpenStdin']) {
                $value_15 = $data['OpenStdin'];
            }
            $object->setOpenStdin($value_15);
        } elseif (array_key_exists('OpenStdin', $data) && null === $data['OpenStdin']) {
            $object->setOpenStdin(null);
        }
        if (array_key_exists('ReadOnly', $data) && null !== $data['ReadOnly']) {
            $value_16 = $data['ReadOnly'];
            if (is_bool($data['ReadOnly'])) {
                $value_16 = $data['ReadOnly'];
            } elseif (null === $data['ReadOnly']) {
                $value_16 = $data['ReadOnly'];
            }
            $object->setReadOnly($value_16);
        } elseif (array_key_exists('ReadOnly', $data) && null === $data['ReadOnly']) {
            $object->setReadOnly(null);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $value_17 = $data['Mounts'];
            if (is_array($data['Mounts']) && $this->isOnlyNumericKeys($data['Mounts'])) {
                $values_5 = [];
                foreach ($data['Mounts'] as $value_18) {
                    $values_5[] = $this->denormalizer->denormalize($value_18, \WebProject\DockerApi\Library\Generated\Model\Mount::class, 'json', $context);
                }
                $value_17 = $values_5;
            } elseif (null === $data['Mounts']) {
                $value_17 = $data['Mounts'];
            }
            $object->setMounts($value_17);
        } elseif (array_key_exists('Mounts', $data) && null === $data['Mounts']) {
            $object->setMounts(null);
        }
        if (array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $value_19 = $data['StopSignal'];
            if (is_string($data['StopSignal'])) {
                $value_19 = $data['StopSignal'];
            } elseif (null === $data['StopSignal']) {
                $value_19 = $data['StopSignal'];
            }
            $object->setStopSignal($value_19);
        } elseif (array_key_exists('StopSignal', $data) && null === $data['StopSignal']) {
            $object->setStopSignal(null);
        }
        if (array_key_exists('StopGracePeriod', $data) && null !== $data['StopGracePeriod']) {
            $value_20 = $data['StopGracePeriod'];
            if (is_int($data['StopGracePeriod'])) {
                $value_20 = $data['StopGracePeriod'];
            } elseif (null === $data['StopGracePeriod']) {
                $value_20 = $data['StopGracePeriod'];
            }
            $object->setStopGracePeriod($value_20);
        } elseif (array_key_exists('StopGracePeriod', $data) && null === $data['StopGracePeriod']) {
            $object->setStopGracePeriod(null);
        }
        if (array_key_exists('HealthCheck', $data)) {
            $object->setHealthCheck($this->denormalizer->denormalize($data['HealthCheck'], \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class, 'json', $context));
        }
        if (array_key_exists('Hosts', $data) && null !== $data['Hosts']) {
            $value_21 = $data['Hosts'];
            if (is_array($data['Hosts']) && $this->isOnlyNumericKeys($data['Hosts'])) {
                $values_6 = [];
                foreach ($data['Hosts'] as $value_22) {
                    $values_6[] = $value_22;
                }
                $value_21 = $values_6;
            } elseif (null === $data['Hosts']) {
                $value_21 = $data['Hosts'];
            }
            $object->setHosts($value_21);
        } elseif (array_key_exists('Hosts', $data) && null === $data['Hosts']) {
            $object->setHosts(null);
        }
        if (array_key_exists('DNSConfig', $data) && null !== $data['DNSConfig']) {
            $object->setDNSConfig($this->denormalizer->denormalize($data['DNSConfig'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class, 'json', $context));
        } elseif (array_key_exists('DNSConfig', $data) && null === $data['DNSConfig']) {
            $object->setDNSConfig(null);
        }
        if (array_key_exists('Secrets', $data) && null !== $data['Secrets']) {
            $value_23 = $data['Secrets'];
            if (is_array($data['Secrets']) && $this->isOnlyNumericKeys($data['Secrets'])) {
                $values_7 = [];
                foreach ($data['Secrets'] as $value_24) {
                    $values_7[] = $this->denormalizer->denormalize($value_24, \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class, 'json', $context);
                }
                $value_23 = $values_7;
            } elseif (null === $data['Secrets']) {
                $value_23 = $data['Secrets'];
            }
            $object->setSecrets($value_23);
        } elseif (array_key_exists('Secrets', $data) && null === $data['Secrets']) {
            $object->setSecrets(null);
        }
        if (array_key_exists('OomScoreAdj', $data) && null !== $data['OomScoreAdj']) {
            $value_25 = $data['OomScoreAdj'];
            if (is_int($data['OomScoreAdj'])) {
                $value_25 = $data['OomScoreAdj'];
            } elseif (null === $data['OomScoreAdj']) {
                $value_25 = $data['OomScoreAdj'];
            }
            $object->setOomScoreAdj($value_25);
        } elseif (array_key_exists('OomScoreAdj', $data) && null === $data['OomScoreAdj']) {
            $object->setOomScoreAdj(null);
        }
        if (array_key_exists('Configs', $data) && null !== $data['Configs']) {
            $value_26 = $data['Configs'];
            if (is_array($data['Configs']) && $this->isOnlyNumericKeys($data['Configs'])) {
                $values_8 = [];
                foreach ($data['Configs'] as $value_27) {
                    $values_8[] = $this->denormalizer->denormalize($value_27, \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class, 'json', $context);
                }
                $value_26 = $values_8;
            } elseif (null === $data['Configs']) {
                $value_26 = $data['Configs'];
            }
            $object->setConfigs($value_26);
        } elseif (array_key_exists('Configs', $data) && null === $data['Configs']) {
            $object->setConfigs(null);
        }
        if (array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $value_28 = $data['Isolation'];
            if (is_string($data['Isolation'])) {
                $value_28 = $data['Isolation'];
            } elseif (null === $data['Isolation']) {
                $value_28 = $data['Isolation'];
            }
            $object->setIsolation($value_28);
        } elseif (array_key_exists('Isolation', $data) && null === $data['Isolation']) {
            $object->setIsolation(null);
        }
        if (array_key_exists('Init', $data) && null !== $data['Init']) {
            $value_29 = $data['Init'];
            if (is_bool($data['Init'])) {
                $value_29 = $data['Init'];
            } elseif (null === $data['Init']) {
                $value_29 = $data['Init'];
            }
            $object->setInit($value_29);
        } elseif (array_key_exists('Init', $data) && null === $data['Init']) {
            $object->setInit(null);
        }
        if (array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
            $value_30 = $data['Sysctls'];
            if (is_array($data['Sysctls']) && $this->isOnlyNumericKeys($data['Sysctls'])) {
                $values_9 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Sysctls'] as $key_1 => $value_31) {
                    $values_9[$key_1] = $value_31;
                }
                $value_30 = $values_9;
            } elseif (null === $data['Sysctls']) {
                $value_30 = $data['Sysctls'];
            }
            $object->setSysctls($value_30);
        } elseif (array_key_exists('Sysctls', $data) && null === $data['Sysctls']) {
            $object->setSysctls(null);
        }
        if (array_key_exists('CapabilityAdd', $data) && null !== $data['CapabilityAdd']) {
            $value_32 = $data['CapabilityAdd'];
            if (is_array($data['CapabilityAdd']) && $this->isOnlyNumericKeys($data['CapabilityAdd'])) {
                $values_10 = [];
                foreach ($data['CapabilityAdd'] as $value_33) {
                    $values_10[] = $value_33;
                }
                $value_32 = $values_10;
            } elseif (null === $data['CapabilityAdd']) {
                $value_32 = $data['CapabilityAdd'];
            }
            $object->setCapabilityAdd($value_32);
        } elseif (array_key_exists('CapabilityAdd', $data) && null === $data['CapabilityAdd']) {
            $object->setCapabilityAdd(null);
        }
        if (array_key_exists('CapabilityDrop', $data) && null !== $data['CapabilityDrop']) {
            $value_34 = $data['CapabilityDrop'];
            if (is_array($data['CapabilityDrop']) && $this->isOnlyNumericKeys($data['CapabilityDrop'])) {
                $values_11 = [];
                foreach ($data['CapabilityDrop'] as $value_35) {
                    $values_11[] = $value_35;
                }
                $value_34 = $values_11;
            } elseif (null === $data['CapabilityDrop']) {
                $value_34 = $data['CapabilityDrop'];
            }
            $object->setCapabilityDrop($value_34);
        } elseif (array_key_exists('CapabilityDrop', $data) && null === $data['CapabilityDrop']) {
            $object->setCapabilityDrop(null);
        }
        if (array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
            $value_36 = $data['Ulimits'];
            if (is_array($data['Ulimits']) && $this->isOnlyNumericKeys($data['Ulimits'])) {
                $values_12 = [];
                foreach ($data['Ulimits'] as $value_37) {
                    $values_12[] = $this->denormalizer->denormalize($value_37, \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class, 'json', $context);
                }
                $value_36 = $values_12;
            } elseif (null === $data['Ulimits']) {
                $value_36 = $data['Ulimits'];
            }
            $object->setUlimits($value_36);
        } elseif (array_key_exists('Ulimits', $data) && null === $data['Ulimits']) {
            $object->setUlimits(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('image')) {
            $value = $data->getImage();
            if (is_string($data->getImage())) {
                $value = $data->getImage();
            } elseif (null === $data->getImage()) {
                $value = $data->getImage();
            }
            $dataArray['Image'] = $value;
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
        if ($data->isInitialized('command')) {
            $value_3 = $data->getCommand();
            if (is_array($data->getCommand())) {
                $values_1 = [];
                foreach ($data->getCommand() as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data->getCommand()) {
                $value_3 = $data->getCommand();
            }
            $dataArray['Command'] = $value_3;
        }
        if ($data->isInitialized('args')) {
            $value_5 = $data->getArgs();
            if (is_array($data->getArgs())) {
                $values_2 = [];
                foreach ($data->getArgs() as $value_6) {
                    $values_2[] = $value_6;
                }
                $value_5 = $values_2;
            } elseif (null === $data->getArgs()) {
                $value_5 = $data->getArgs();
            }
            $dataArray['Args'] = $value_5;
        }
        if ($data->isInitialized('hostname')) {
            $value_7 = $data->getHostname();
            if (is_string($data->getHostname())) {
                $value_7 = $data->getHostname();
            } elseif (null === $data->getHostname()) {
                $value_7 = $data->getHostname();
            }
            $dataArray['Hostname'] = $value_7;
        }
        if ($data->isInitialized('env')) {
            $value_8 = $data->getEnv();
            if (is_array($data->getEnv())) {
                $values_3 = [];
                foreach ($data->getEnv() as $value_9) {
                    $values_3[] = $value_9;
                }
                $value_8 = $values_3;
            } elseif (null === $data->getEnv()) {
                $value_8 = $data->getEnv();
            }
            $dataArray['Env'] = $value_8;
        }
        if ($data->isInitialized('dir')) {
            $value_10 = $data->getDir();
            if (is_string($data->getDir())) {
                $value_10 = $data->getDir();
            } elseif (null === $data->getDir()) {
                $value_10 = $data->getDir();
            }
            $dataArray['Dir'] = $value_10;
        }
        if ($data->isInitialized('user')) {
            $value_11 = $data->getUser();
            if (is_string($data->getUser())) {
                $value_11 = $data->getUser();
            } elseif (null === $data->getUser()) {
                $value_11 = $data->getUser();
            }
            $dataArray['User'] = $value_11;
        }
        if ($data->isInitialized('groups')) {
            $value_12 = $data->getGroups();
            if (is_array($data->getGroups())) {
                $values_4 = [];
                foreach ($data->getGroups() as $value_13) {
                    $values_4[] = $value_13;
                }
                $value_12 = $values_4;
            } elseif (null === $data->getGroups()) {
                $value_12 = $data->getGroups();
            }
            $dataArray['Groups'] = $value_12;
        }
        if ($data->isInitialized('privileges')) {
            $dataArray['Privileges'] = $this->normalizer->normalize($data->getPrivileges(), 'json', $context);
        }
        if ($data->isInitialized('tTY')) {
            $value_14 = $data->getTTY();
            if (is_bool($data->getTTY())) {
                $value_14 = $data->getTTY();
            } elseif (null === $data->getTTY()) {
                $value_14 = $data->getTTY();
            }
            $dataArray['TTY'] = $value_14;
        }
        if ($data->isInitialized('openStdin')) {
            $value_15 = $data->getOpenStdin();
            if (is_bool($data->getOpenStdin())) {
                $value_15 = $data->getOpenStdin();
            } elseif (null === $data->getOpenStdin()) {
                $value_15 = $data->getOpenStdin();
            }
            $dataArray['OpenStdin'] = $value_15;
        }
        if ($data->isInitialized('readOnly')) {
            $value_16 = $data->getReadOnly();
            if (is_bool($data->getReadOnly())) {
                $value_16 = $data->getReadOnly();
            } elseif (null === $data->getReadOnly()) {
                $value_16 = $data->getReadOnly();
            }
            $dataArray['ReadOnly'] = $value_16;
        }
        if ($data->isInitialized('mounts')) {
            $value_17 = $data->getMounts();
            if (is_array($data->getMounts())) {
                $values_5 = [];
                foreach ($data->getMounts() as $value_18) {
                    $values_5[] = $this->normalizer->normalize($value_18, 'json', $context);
                }
                $value_17 = $values_5;
            } elseif (null === $data->getMounts()) {
                $value_17 = $data->getMounts();
            }
            $dataArray['Mounts'] = $value_17;
        }
        if ($data->isInitialized('stopSignal')) {
            $value_19 = $data->getStopSignal();
            if (is_string($data->getStopSignal())) {
                $value_19 = $data->getStopSignal();
            } elseif (null === $data->getStopSignal()) {
                $value_19 = $data->getStopSignal();
            }
            $dataArray['StopSignal'] = $value_19;
        }
        if ($data->isInitialized('stopGracePeriod')) {
            $value_20 = $data->getStopGracePeriod();
            if (is_int($data->getStopGracePeriod())) {
                $value_20 = $data->getStopGracePeriod();
            } elseif (null === $data->getStopGracePeriod()) {
                $value_20 = $data->getStopGracePeriod();
            }
            $dataArray['StopGracePeriod'] = $value_20;
        }
        if ($data->isInitialized('healthCheck') && null !== $data->getHealthCheck()) {
            $dataArray['HealthCheck'] = $this->normalizer->normalize($data->getHealthCheck(), 'json', $context);
        }
        if ($data->isInitialized('hosts')) {
            $value_21 = $data->getHosts();
            if (is_array($data->getHosts())) {
                $values_6 = [];
                foreach ($data->getHosts() as $value_22) {
                    $values_6[] = $value_22;
                }
                $value_21 = $values_6;
            } elseif (null === $data->getHosts()) {
                $value_21 = $data->getHosts();
            }
            $dataArray['Hosts'] = $value_21;
        }
        if ($data->isInitialized('dNSConfig')) {
            $dataArray['DNSConfig'] = $this->normalizer->normalize($data->getDNSConfig(), 'json', $context);
        }
        if ($data->isInitialized('secrets')) {
            $value_23 = $data->getSecrets();
            if (is_array($data->getSecrets())) {
                $values_7 = [];
                foreach ($data->getSecrets() as $value_24) {
                    $values_7[] = $this->normalizer->normalize($value_24, 'json', $context);
                }
                $value_23 = $values_7;
            } elseif (null === $data->getSecrets()) {
                $value_23 = $data->getSecrets();
            }
            $dataArray['Secrets'] = $value_23;
        }
        if ($data->isInitialized('oomScoreAdj')) {
            $value_25 = $data->getOomScoreAdj();
            if (is_int($data->getOomScoreAdj())) {
                $value_25 = $data->getOomScoreAdj();
            } elseif (null === $data->getOomScoreAdj()) {
                $value_25 = $data->getOomScoreAdj();
            }
            $dataArray['OomScoreAdj'] = $value_25;
        }
        if ($data->isInitialized('configs')) {
            $value_26 = $data->getConfigs();
            if (is_array($data->getConfigs())) {
                $values_8 = [];
                foreach ($data->getConfigs() as $value_27) {
                    $values_8[] = $this->normalizer->normalize($value_27, 'json', $context);
                }
                $value_26 = $values_8;
            } elseif (null === $data->getConfigs()) {
                $value_26 = $data->getConfigs();
            }
            $dataArray['Configs'] = $value_26;
        }
        if ($data->isInitialized('isolation')) {
            $value_28 = $data->getIsolation();
            if (is_string($data->getIsolation())) {
                $value_28 = $data->getIsolation();
            } elseif (null === $data->getIsolation()) {
                $value_28 = $data->getIsolation();
            }
            $dataArray['Isolation'] = $value_28;
        }
        if ($data->isInitialized('init')) {
            $value_29 = $data->getInit();
            if (is_bool($data->getInit())) {
                $value_29 = $data->getInit();
            } elseif (null === $data->getInit()) {
                $value_29 = $data->getInit();
            }
            $dataArray['Init'] = $value_29;
        }
        if ($data->isInitialized('sysctls')) {
            $value_30 = $data->getSysctls();
            if (is_object($data->getSysctls())) {
                $values_9 = [];
                foreach ($data->getSysctls() as $key_1 => $value_31) {
                    $values_9[$key_1] = $value_31;
                }
                $value_30 = $values_9;
            } elseif (null === $data->getSysctls()) {
                $value_30 = $data->getSysctls();
            }
            $dataArray['Sysctls'] = $value_30;
        }
        if ($data->isInitialized('capabilityAdd')) {
            $value_32 = $data->getCapabilityAdd();
            if (is_array($data->getCapabilityAdd())) {
                $values_10 = [];
                foreach ($data->getCapabilityAdd() as $value_33) {
                    $values_10[] = $value_33;
                }
                $value_32 = $values_10;
            } elseif (null === $data->getCapabilityAdd()) {
                $value_32 = $data->getCapabilityAdd();
            }
            $dataArray['CapabilityAdd'] = $value_32;
        }
        if ($data->isInitialized('capabilityDrop')) {
            $value_34 = $data->getCapabilityDrop();
            if (is_array($data->getCapabilityDrop())) {
                $values_11 = [];
                foreach ($data->getCapabilityDrop() as $value_35) {
                    $values_11[] = $value_35;
                }
                $value_34 = $values_11;
            } elseif (null === $data->getCapabilityDrop()) {
                $value_34 = $data->getCapabilityDrop();
            }
            $dataArray['CapabilityDrop'] = $value_34;
        }
        if ($data->isInitialized('ulimits')) {
            $value_36 = $data->getUlimits();
            if (is_array($data->getUlimits())) {
                $values_12 = [];
                foreach ($data->getUlimits() as $value_37) {
                    $values_12[] = $this->normalizer->normalize($value_37, 'json', $context);
                }
                $value_36 = $values_12;
            } elseif (null === $data->getUlimits()) {
                $value_36 = $data->getUlimits();
            }
            $dataArray['Ulimits'] = $value_36;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
