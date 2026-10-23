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
            $object->image = $value;
            unset($data['Image']);
        } elseif (array_key_exists('Image', $data)) {
            $object->image = null;
            unset($data['Image']);
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
        if (array_key_exists('Command', $data) && null !== $data['Command']) {
            $values_1 = [];
            foreach ($data['Command'] as $value_3) {
                $values_1[] = $value_3;
            }
            $object->command = $values_1;
            unset($data['Command']);
        } elseif (array_key_exists('Command', $data)) {
            $object->command = null;
            unset($data['Command']);
        }
        if (array_key_exists('Args', $data) && null !== $data['Args']) {
            $values_2 = [];
            foreach ($data['Args'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->args = $values_2;
            unset($data['Args']);
        } elseif (array_key_exists('Args', $data)) {
            $object->args = null;
            unset($data['Args']);
        }
        if (array_key_exists('Hostname', $data) && null !== $data['Hostname']) {
            $value_5 = $data['Hostname'];
            if (is_string($data['Hostname'])) {
                $value_5 = $data['Hostname'];
            } elseif (null === $data['Hostname']) {
                $value_5 = $data['Hostname'];
            }
            $object->hostname = $value_5;
            unset($data['Hostname']);
        } elseif (array_key_exists('Hostname', $data)) {
            $object->hostname = null;
            unset($data['Hostname']);
        }
        if (array_key_exists('Env', $data) && null !== $data['Env']) {
            $values_3 = [];
            foreach ($data['Env'] as $value_6) {
                $values_3[] = $value_6;
            }
            $object->env = $values_3;
            unset($data['Env']);
        } elseif (array_key_exists('Env', $data)) {
            $object->env = null;
            unset($data['Env']);
        }
        if (array_key_exists('Dir', $data) && null !== $data['Dir']) {
            $value_7 = $data['Dir'];
            if (is_string($data['Dir'])) {
                $value_7 = $data['Dir'];
            } elseif (null === $data['Dir']) {
                $value_7 = $data['Dir'];
            }
            $object->dir = $value_7;
            unset($data['Dir']);
        } elseif (array_key_exists('Dir', $data)) {
            $object->dir = null;
            unset($data['Dir']);
        }
        if (array_key_exists('User', $data) && null !== $data['User']) {
            $value_8 = $data['User'];
            if (is_string($data['User'])) {
                $value_8 = $data['User'];
            } elseif (null === $data['User']) {
                $value_8 = $data['User'];
            }
            $object->user = $value_8;
            unset($data['User']);
        } elseif (array_key_exists('User', $data)) {
            $object->user = null;
            unset($data['User']);
        }
        if (array_key_exists('Groups', $data) && null !== $data['Groups']) {
            $values_4 = [];
            foreach ($data['Groups'] as $value_9) {
                $values_4[] = $value_9;
            }
            $object->groups = $values_4;
            unset($data['Groups']);
        } elseif (array_key_exists('Groups', $data)) {
            $object->groups = null;
            unset($data['Groups']);
        }
        if (array_key_exists('Privileges', $data) && null !== $data['Privileges']) {
            $object->privileges = $this->denormalizer->denormalize($data['Privileges'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class, 'json', $context);
            unset($data['Privileges']);
        } elseif (array_key_exists('Privileges', $data)) {
            $object->privileges = null;
            unset($data['Privileges']);
        }
        if (array_key_exists('TTY', $data) && null !== $data['TTY']) {
            $value_10 = $data['TTY'];
            if (is_bool($data['TTY'])) {
                $value_10 = $data['TTY'];
            } elseif (null === $data['TTY']) {
                $value_10 = $data['TTY'];
            }
            $object->tTY = $value_10;
            unset($data['TTY']);
        } elseif (array_key_exists('TTY', $data)) {
            $object->tTY = null;
            unset($data['TTY']);
        }
        if (array_key_exists('OpenStdin', $data) && null !== $data['OpenStdin']) {
            $value_11 = $data['OpenStdin'];
            if (is_bool($data['OpenStdin'])) {
                $value_11 = $data['OpenStdin'];
            } elseif (null === $data['OpenStdin']) {
                $value_11 = $data['OpenStdin'];
            }
            $object->openStdin = $value_11;
            unset($data['OpenStdin']);
        } elseif (array_key_exists('OpenStdin', $data)) {
            $object->openStdin = null;
            unset($data['OpenStdin']);
        }
        if (array_key_exists('ReadOnly', $data) && null !== $data['ReadOnly']) {
            $value_12 = $data['ReadOnly'];
            if (is_bool($data['ReadOnly'])) {
                $value_12 = $data['ReadOnly'];
            } elseif (null === $data['ReadOnly']) {
                $value_12 = $data['ReadOnly'];
            }
            $object->readOnly = $value_12;
            unset($data['ReadOnly']);
        } elseif (array_key_exists('ReadOnly', $data)) {
            $object->readOnly = null;
            unset($data['ReadOnly']);
        }
        if (array_key_exists('Mounts', $data) && null !== $data['Mounts']) {
            $values_5 = [];
            foreach ($data['Mounts'] as $value_13) {
                $values_5[] = $this->denormalizer->denormalize($value_13, \WebProject\DockerApi\Library\Generated\Model\Mount::class, 'json', $context);
            }
            $object->mounts = $values_5;
            unset($data['Mounts']);
        } elseif (array_key_exists('Mounts', $data)) {
            $object->mounts = null;
            unset($data['Mounts']);
        }
        if (array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $value_14 = $data['StopSignal'];
            if (is_string($data['StopSignal'])) {
                $value_14 = $data['StopSignal'];
            } elseif (null === $data['StopSignal']) {
                $value_14 = $data['StopSignal'];
            }
            $object->stopSignal = $value_14;
            unset($data['StopSignal']);
        } elseif (array_key_exists('StopSignal', $data)) {
            $object->stopSignal = null;
            unset($data['StopSignal']);
        }
        if (array_key_exists('StopGracePeriod', $data) && null !== $data['StopGracePeriod']) {
            $value_15 = $data['StopGracePeriod'];
            if (is_int($data['StopGracePeriod'])) {
                $value_15 = $data['StopGracePeriod'];
            } elseif (null === $data['StopGracePeriod']) {
                $value_15 = $data['StopGracePeriod'];
            }
            $object->stopGracePeriod = $value_15;
            unset($data['StopGracePeriod']);
        } elseif (array_key_exists('StopGracePeriod', $data)) {
            $object->stopGracePeriod = null;
            unset($data['StopGracePeriod']);
        }
        if (array_key_exists('HealthCheck', $data)) {
            $object->healthCheck = $this->denormalizer->denormalize($data['HealthCheck'], \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class, 'json', $context);
            unset($data['HealthCheck']);
        }
        if (array_key_exists('Hosts', $data) && null !== $data['Hosts']) {
            $values_6 = [];
            foreach ($data['Hosts'] as $value_16) {
                $values_6[] = $value_16;
            }
            $object->hosts = $values_6;
            unset($data['Hosts']);
        } elseif (array_key_exists('Hosts', $data)) {
            $object->hosts = null;
            unset($data['Hosts']);
        }
        if (array_key_exists('DNSConfig', $data) && null !== $data['DNSConfig']) {
            $object->dNSConfig = $this->denormalizer->denormalize($data['DNSConfig'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class, 'json', $context);
            unset($data['DNSConfig']);
        } elseif (array_key_exists('DNSConfig', $data)) {
            $object->dNSConfig = null;
            unset($data['DNSConfig']);
        }
        if (array_key_exists('Secrets', $data) && null !== $data['Secrets']) {
            $values_7 = [];
            foreach ($data['Secrets'] as $value_17) {
                $values_7[] = $this->denormalizer->denormalize($value_17, \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class, 'json', $context);
            }
            $object->secrets = $values_7;
            unset($data['Secrets']);
        } elseif (array_key_exists('Secrets', $data)) {
            $object->secrets = null;
            unset($data['Secrets']);
        }
        if (array_key_exists('OomScoreAdj', $data) && null !== $data['OomScoreAdj']) {
            $value_18 = $data['OomScoreAdj'];
            if (is_int($data['OomScoreAdj'])) {
                $value_18 = $data['OomScoreAdj'];
            } elseif (null === $data['OomScoreAdj']) {
                $value_18 = $data['OomScoreAdj'];
            }
            $object->oomScoreAdj = $value_18;
            unset($data['OomScoreAdj']);
        } elseif (array_key_exists('OomScoreAdj', $data)) {
            $object->oomScoreAdj = null;
            unset($data['OomScoreAdj']);
        }
        if (array_key_exists('Configs', $data) && null !== $data['Configs']) {
            $values_8 = [];
            foreach ($data['Configs'] as $value_19) {
                $values_8[] = $this->denormalizer->denormalize($value_19, \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class, 'json', $context);
            }
            $object->configs = $values_8;
            unset($data['Configs']);
        } elseif (array_key_exists('Configs', $data)) {
            $object->configs = null;
            unset($data['Configs']);
        }
        if (array_key_exists('Isolation', $data) && null !== $data['Isolation']) {
            $value_20 = $data['Isolation'];
            if (is_string($data['Isolation'])) {
                $value_20 = $data['Isolation'];
            } elseif (null === $data['Isolation']) {
                $value_20 = $data['Isolation'];
            }
            $object->isolation = $value_20;
            unset($data['Isolation']);
        } elseif (array_key_exists('Isolation', $data)) {
            $object->isolation = null;
            unset($data['Isolation']);
        }
        if (array_key_exists('Init', $data) && null !== $data['Init']) {
            $value_21 = $data['Init'];
            if (is_bool($data['Init'])) {
                $value_21 = $data['Init'];
            } elseif (null === $data['Init']) {
                $value_21 = $data['Init'];
            }
            $object->init = $value_21;
            unset($data['Init']);
        } elseif (array_key_exists('Init', $data)) {
            $object->init = null;
            unset($data['Init']);
        }
        if (array_key_exists('Sysctls', $data) && null !== $data['Sysctls']) {
            $value_22 = $data['Sysctls'];
            if (is_array($data['Sysctls']) && $this->isOnlyNumericKeys($data['Sysctls'])) {
                $values_9 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Sysctls'] as $key_1 => $value_23) {
                    $values_9[$key_1] = $value_23;
                }
                $value_22 = $values_9;
            } elseif (null === $data['Sysctls']) {
                $value_22 = $data['Sysctls'];
            }
            $object->sysctls = $value_22;
            unset($data['Sysctls']);
        } elseif (array_key_exists('Sysctls', $data)) {
            $object->sysctls = null;
            unset($data['Sysctls']);
        }
        if (array_key_exists('CapabilityAdd', $data) && null !== $data['CapabilityAdd']) {
            $values_10 = [];
            foreach ($data['CapabilityAdd'] as $value_24) {
                $values_10[] = $value_24;
            }
            $object->capabilityAdd = $values_10;
            unset($data['CapabilityAdd']);
        } elseif (array_key_exists('CapabilityAdd', $data)) {
            $object->capabilityAdd = null;
            unset($data['CapabilityAdd']);
        }
        if (array_key_exists('CapabilityDrop', $data) && null !== $data['CapabilityDrop']) {
            $values_11 = [];
            foreach ($data['CapabilityDrop'] as $value_25) {
                $values_11[] = $value_25;
            }
            $object->capabilityDrop = $values_11;
            unset($data['CapabilityDrop']);
        } elseif (array_key_exists('CapabilityDrop', $data)) {
            $object->capabilityDrop = null;
            unset($data['CapabilityDrop']);
        }
        if (array_key_exists('Ulimits', $data) && null !== $data['Ulimits']) {
            $values_12 = [];
            foreach ($data['Ulimits'] as $value_26) {
                $values_12[] = $this->denormalizer->denormalize($value_26, \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class, 'json', $context);
            }
            $object->ulimits = $values_12;
            unset($data['Ulimits']);
        } elseif (array_key_exists('Ulimits', $data)) {
            $object->ulimits = null;
            unset($data['Ulimits']);
        }
        foreach ($data as $key_2 => $value_27) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_27;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $value = $data->image;
            if (is_string($data->image)) {
                $value = $data->image;
            } elseif (null === $data->image) {
                $value = $data->image;
            }
            $dataArray['Image'] = $value;
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
        if (array_key_exists('command', get_object_vars($data)) && null !== ($data->command ?? null)) {
            $values_1 = [];
            foreach ($data->command as $value_3) {
                $values_1[] = $value_3;
            }
            $dataArray['Command'] = $values_1;
        }
        if (array_key_exists('args', get_object_vars($data)) && null !== ($data->args ?? null)) {
            $values_2 = [];
            foreach ($data->args as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['Args'] = $values_2;
        }
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $value_5 = $data->hostname;
            if (is_string($data->hostname)) {
                $value_5 = $data->hostname;
            } elseif (null === $data->hostname) {
                $value_5 = $data->hostname;
            }
            $dataArray['Hostname'] = $value_5;
        }
        if (array_key_exists('env', get_object_vars($data)) && null !== ($data->env ?? null)) {
            $values_3 = [];
            foreach ($data->env as $value_6) {
                $values_3[] = $value_6;
            }
            $dataArray['Env'] = $values_3;
        }
        if (array_key_exists('dir', get_object_vars($data)) && null !== ($data->dir ?? null)) {
            $value_7 = $data->dir;
            if (is_string($data->dir)) {
                $value_7 = $data->dir;
            } elseif (null === $data->dir) {
                $value_7 = $data->dir;
            }
            $dataArray['Dir'] = $value_7;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $value_8 = $data->user;
            if (is_string($data->user)) {
                $value_8 = $data->user;
            } elseif (null === $data->user) {
                $value_8 = $data->user;
            }
            $dataArray['User'] = $value_8;
        }
        if (array_key_exists('groups', get_object_vars($data)) && null !== ($data->groups ?? null)) {
            $values_4 = [];
            foreach ($data->groups as $value_9) {
                $values_4[] = $value_9;
            }
            $dataArray['Groups'] = $values_4;
        }
        if (array_key_exists('privileges', get_object_vars($data)) && null !== ($data->privileges ?? null)) {
            $normalized              = $this->normalizer->normalize($data->privileges, 'json', $context);
            $dataArray['Privileges'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('tTY', get_object_vars($data)) && null !== ($data->tTY ?? null)) {
            $value_10 = $data->tTY;
            if (is_bool($data->tTY)) {
                $value_10 = $data->tTY;
            } elseif (null === $data->tTY) {
                $value_10 = $data->tTY;
            }
            $dataArray['TTY'] = $value_10;
        }
        if (array_key_exists('openStdin', get_object_vars($data)) && null !== ($data->openStdin ?? null)) {
            $value_11 = $data->openStdin;
            if (is_bool($data->openStdin)) {
                $value_11 = $data->openStdin;
            } elseif (null === $data->openStdin) {
                $value_11 = $data->openStdin;
            }
            $dataArray['OpenStdin'] = $value_11;
        }
        if (array_key_exists('readOnly', get_object_vars($data)) && null !== ($data->readOnly ?? null)) {
            $value_12 = $data->readOnly;
            if (is_bool($data->readOnly)) {
                $value_12 = $data->readOnly;
            } elseif (null === $data->readOnly) {
                $value_12 = $data->readOnly;
            }
            $dataArray['ReadOnly'] = $value_12;
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_5 = [];
            foreach ($data->mounts as $value_13) {
                $normalized_1 = null === $value_13 ? null : $this->normalizer->normalize($value_13, 'json', $context);
                $values_5[]   = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['Mounts'] = $values_5;
        }
        if (array_key_exists('stopSignal', get_object_vars($data)) && null !== ($data->stopSignal ?? null)) {
            $value_14 = $data->stopSignal;
            if (is_string($data->stopSignal)) {
                $value_14 = $data->stopSignal;
            } elseif (null === $data->stopSignal) {
                $value_14 = $data->stopSignal;
            }
            $dataArray['StopSignal'] = $value_14;
        }
        if (array_key_exists('stopGracePeriod', get_object_vars($data)) && null !== ($data->stopGracePeriod ?? null)) {
            $value_15 = $data->stopGracePeriod;
            if (is_int($data->stopGracePeriod)) {
                $value_15 = $data->stopGracePeriod;
            } elseif (null === $data->stopGracePeriod) {
                $value_15 = $data->stopGracePeriod;
            }
            $dataArray['StopGracePeriod'] = $value_15;
        }
        if (array_key_exists('healthCheck', get_object_vars($data)) && null !== ($data->healthCheck ?? null)) {
            $normalized_2             = $this->normalizer->normalize($data->healthCheck, 'json', $context);
            $dataArray['HealthCheck'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('hosts', get_object_vars($data)) && null !== ($data->hosts ?? null)) {
            $values_6 = [];
            foreach ($data->hosts as $value_16) {
                $values_6[] = $value_16;
            }
            $dataArray['Hosts'] = $values_6;
        }
        if (array_key_exists('dNSConfig', get_object_vars($data)) && null !== ($data->dNSConfig ?? null)) {
            $normalized_3           = $this->normalizer->normalize($data->dNSConfig, 'json', $context);
            $dataArray['DNSConfig'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('secrets', get_object_vars($data)) && null !== ($data->secrets ?? null)) {
            $values_7 = [];
            foreach ($data->secrets as $value_17) {
                $normalized_4 = null === $value_17 ? null : $this->normalizer->normalize($value_17, 'json', $context);
                $values_7[]   = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['Secrets'] = $values_7;
        }
        if (array_key_exists('oomScoreAdj', get_object_vars($data)) && null !== ($data->oomScoreAdj ?? null)) {
            $value_18 = $data->oomScoreAdj;
            if (is_int($data->oomScoreAdj)) {
                $value_18 = $data->oomScoreAdj;
            } elseif (null === $data->oomScoreAdj) {
                $value_18 = $data->oomScoreAdj;
            }
            $dataArray['OomScoreAdj'] = $value_18;
        }
        if (array_key_exists('configs', get_object_vars($data)) && null !== ($data->configs ?? null)) {
            $values_8 = [];
            foreach ($data->configs as $value_19) {
                $normalized_5 = null === $value_19 ? null : $this->normalizer->normalize($value_19, 'json', $context);
                $values_8[]   = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['Configs'] = $values_8;
        }
        if (array_key_exists('isolation', get_object_vars($data)) && null !== ($data->isolation ?? null)) {
            $value_20 = $data->isolation;
            if (is_string($data->isolation)) {
                $value_20 = $data->isolation;
            } elseif (null === $data->isolation) {
                $value_20 = $data->isolation;
            }
            $dataArray['Isolation'] = $value_20;
        }
        if (array_key_exists('init', get_object_vars($data)) && null !== ($data->init ?? null)) {
            $value_21 = $data->init;
            if (is_bool($data->init)) {
                $value_21 = $data->init;
            } elseif (null === $data->init) {
                $value_21 = $data->init;
            }
            $dataArray['Init'] = $value_21;
        }
        if (array_key_exists('sysctls', get_object_vars($data)) && null !== ($data->sysctls ?? null)) {
            $value_22 = $data->sysctls;
            if (is_iterable($data->sysctls)) {
                $values_9 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->sysctls as $key_1 => $value_23) {
                    $values_9[$key_1] = $value_23;
                }
                $value_22 = $values_9;
            } elseif (null === $data->sysctls) {
                $value_22 = $data->sysctls;
            }
            $dataArray['Sysctls'] = $value_22;
        }
        if (array_key_exists('capabilityAdd', get_object_vars($data)) && null !== ($data->capabilityAdd ?? null)) {
            $values_10 = [];
            foreach ($data->capabilityAdd as $value_24) {
                $values_10[] = $value_24;
            }
            $dataArray['CapabilityAdd'] = $values_10;
        }
        if (array_key_exists('capabilityDrop', get_object_vars($data)) && null !== ($data->capabilityDrop ?? null)) {
            $values_11 = [];
            foreach ($data->capabilityDrop as $value_25) {
                $values_11[] = $value_25;
            }
            $dataArray['CapabilityDrop'] = $values_11;
        }
        if (array_key_exists('ulimits', get_object_vars($data)) && null !== ($data->ulimits ?? null)) {
            $values_12 = [];
            foreach ($data->ulimits as $value_26) {
                $normalized_6 = null === $value_26 ? null : $this->normalizer->normalize($value_26, 'json', $context);
                $values_12[]  = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['Ulimits'] = $values_12;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_27) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_27;
            }
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
