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

class ContainerConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Hostname', $data) && null !== $data['Hostname']) {
            $value = $data['Hostname'];
            if (is_string($data['Hostname'])) {
                $value = $data['Hostname'];
            } elseif (null === $data['Hostname']) {
                $value = $data['Hostname'];
            }
            $object->hostname = $value;
            unset($data['Hostname']);
        } elseif (array_key_exists('Hostname', $data)) {
            $object->hostname = null;
            unset($data['Hostname']);
        }
        if (array_key_exists('Domainname', $data) && null !== $data['Domainname']) {
            $value_1 = $data['Domainname'];
            if (is_string($data['Domainname'])) {
                $value_1 = $data['Domainname'];
            } elseif (null === $data['Domainname']) {
                $value_1 = $data['Domainname'];
            }
            $object->domainname = $value_1;
            unset($data['Domainname']);
        } elseif (array_key_exists('Domainname', $data)) {
            $object->domainname = null;
            unset($data['Domainname']);
        }
        if (array_key_exists('User', $data) && null !== $data['User']) {
            $value_2 = $data['User'];
            if (is_string($data['User'])) {
                $value_2 = $data['User'];
            } elseif (null === $data['User']) {
                $value_2 = $data['User'];
            }
            $object->user = $value_2;
            unset($data['User']);
        } elseif (array_key_exists('User', $data)) {
            $object->user = null;
            unset($data['User']);
        }
        if (array_key_exists('AttachStdin', $data) && null !== $data['AttachStdin']) {
            $value_3 = $data['AttachStdin'];
            if (is_bool($data['AttachStdin'])) {
                $value_3 = $data['AttachStdin'];
            } elseif (null === $data['AttachStdin']) {
                $value_3 = $data['AttachStdin'];
            }
            $object->attachStdin = $value_3;
            unset($data['AttachStdin']);
        } elseif (array_key_exists('AttachStdin', $data)) {
            $object->attachStdin = null;
            unset($data['AttachStdin']);
        }
        if (array_key_exists('AttachStdout', $data) && null !== $data['AttachStdout']) {
            $value_4 = $data['AttachStdout'];
            if (is_bool($data['AttachStdout'])) {
                $value_4 = $data['AttachStdout'];
            } elseif (null === $data['AttachStdout']) {
                $value_4 = $data['AttachStdout'];
            }
            $object->attachStdout = $value_4;
            unset($data['AttachStdout']);
        } elseif (array_key_exists('AttachStdout', $data)) {
            $object->attachStdout = null;
            unset($data['AttachStdout']);
        }
        if (array_key_exists('AttachStderr', $data) && null !== $data['AttachStderr']) {
            $value_5 = $data['AttachStderr'];
            if (is_bool($data['AttachStderr'])) {
                $value_5 = $data['AttachStderr'];
            } elseif (null === $data['AttachStderr']) {
                $value_5 = $data['AttachStderr'];
            }
            $object->attachStderr = $value_5;
            unset($data['AttachStderr']);
        } elseif (array_key_exists('AttachStderr', $data)) {
            $object->attachStderr = null;
            unset($data['AttachStderr']);
        }
        if (array_key_exists('ExposedPorts', $data) && null !== $data['ExposedPorts']) {
            $value_6 = $data['ExposedPorts'];
            if (is_array($data['ExposedPorts']) && $this->isOnlyNumericKeys($data['ExposedPorts'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['ExposedPorts'] as $key => $value_7) {
                    $values[$key] = $value_7;
                }
                $value_6 = $values;
            } elseif (null === $data['ExposedPorts']) {
                $value_6 = $data['ExposedPorts'];
            }
            $object->exposedPorts = $value_6;
            unset($data['ExposedPorts']);
        } elseif (array_key_exists('ExposedPorts', $data)) {
            $object->exposedPorts = null;
            unset($data['ExposedPorts']);
        }
        if (array_key_exists('Tty', $data) && null !== $data['Tty']) {
            $value_8 = $data['Tty'];
            if (is_bool($data['Tty'])) {
                $value_8 = $data['Tty'];
            } elseif (null === $data['Tty']) {
                $value_8 = $data['Tty'];
            }
            $object->tty = $value_8;
            unset($data['Tty']);
        } elseif (array_key_exists('Tty', $data)) {
            $object->tty = null;
            unset($data['Tty']);
        }
        if (array_key_exists('OpenStdin', $data) && null !== $data['OpenStdin']) {
            $value_9 = $data['OpenStdin'];
            if (is_bool($data['OpenStdin'])) {
                $value_9 = $data['OpenStdin'];
            } elseif (null === $data['OpenStdin']) {
                $value_9 = $data['OpenStdin'];
            }
            $object->openStdin = $value_9;
            unset($data['OpenStdin']);
        } elseif (array_key_exists('OpenStdin', $data)) {
            $object->openStdin = null;
            unset($data['OpenStdin']);
        }
        if (array_key_exists('StdinOnce', $data) && null !== $data['StdinOnce']) {
            $value_10 = $data['StdinOnce'];
            if (is_bool($data['StdinOnce'])) {
                $value_10 = $data['StdinOnce'];
            } elseif (null === $data['StdinOnce']) {
                $value_10 = $data['StdinOnce'];
            }
            $object->stdinOnce = $value_10;
            unset($data['StdinOnce']);
        } elseif (array_key_exists('StdinOnce', $data)) {
            $object->stdinOnce = null;
            unset($data['StdinOnce']);
        }
        if (array_key_exists('Env', $data) && null !== $data['Env']) {
            $values_1 = [];
            foreach ($data['Env'] as $value_11) {
                $values_1[] = $value_11;
            }
            $object->env = $values_1;
            unset($data['Env']);
        } elseif (array_key_exists('Env', $data)) {
            $object->env = null;
            unset($data['Env']);
        }
        if (array_key_exists('Cmd', $data) && null !== $data['Cmd']) {
            $values_2 = [];
            foreach ($data['Cmd'] as $value_12) {
                $values_2[] = $value_12;
            }
            $object->cmd = $values_2;
            unset($data['Cmd']);
        } elseif (array_key_exists('Cmd', $data)) {
            $object->cmd = null;
            unset($data['Cmd']);
        }
        if (array_key_exists('Healthcheck', $data)) {
            $object->healthcheck = $this->denormalizer->denormalize($data['Healthcheck'], \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class, 'json', $context);
            unset($data['Healthcheck']);
        }
        if (array_key_exists('ArgsEscaped', $data) && null !== $data['ArgsEscaped']) {
            $value_13 = $data['ArgsEscaped'];
            if (is_bool($data['ArgsEscaped'])) {
                $value_13 = $data['ArgsEscaped'];
            } elseif (null === $data['ArgsEscaped']) {
                $value_13 = $data['ArgsEscaped'];
            }
            $object->argsEscaped = $value_13;
            unset($data['ArgsEscaped']);
        } elseif (array_key_exists('ArgsEscaped', $data)) {
            $object->argsEscaped = null;
            unset($data['ArgsEscaped']);
        }
        if (array_key_exists('Image', $data) && null !== $data['Image']) {
            $value_14 = $data['Image'];
            if (is_string($data['Image'])) {
                $value_14 = $data['Image'];
            } elseif (null === $data['Image']) {
                $value_14 = $data['Image'];
            }
            $object->image = $value_14;
            unset($data['Image']);
        } elseif (array_key_exists('Image', $data)) {
            $object->image = null;
            unset($data['Image']);
        }
        if (array_key_exists('Volumes', $data) && null !== $data['Volumes']) {
            $value_15 = $data['Volumes'];
            if (is_array($data['Volumes']) && $this->isOnlyNumericKeys($data['Volumes'])) {
                $values_3 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Volumes'] as $key_1 => $value_16) {
                    $values_3[$key_1] = $value_16;
                }
                $value_15 = $values_3;
            } elseif (null === $data['Volumes']) {
                $value_15 = $data['Volumes'];
            }
            $object->volumes = $value_15;
            unset($data['Volumes']);
        } elseif (array_key_exists('Volumes', $data)) {
            $object->volumes = null;
            unset($data['Volumes']);
        }
        if (array_key_exists('WorkingDir', $data) && null !== $data['WorkingDir']) {
            $value_17 = $data['WorkingDir'];
            if (is_string($data['WorkingDir'])) {
                $value_17 = $data['WorkingDir'];
            } elseif (null === $data['WorkingDir']) {
                $value_17 = $data['WorkingDir'];
            }
            $object->workingDir = $value_17;
            unset($data['WorkingDir']);
        } elseif (array_key_exists('WorkingDir', $data)) {
            $object->workingDir = null;
            unset($data['WorkingDir']);
        }
        if (array_key_exists('Entrypoint', $data) && null !== $data['Entrypoint']) {
            $values_4 = [];
            foreach ($data['Entrypoint'] as $value_18) {
                $values_4[] = $value_18;
            }
            $object->entrypoint = $values_4;
            unset($data['Entrypoint']);
        } elseif (array_key_exists('Entrypoint', $data)) {
            $object->entrypoint = null;
            unset($data['Entrypoint']);
        }
        if (array_key_exists('NetworkDisabled', $data) && null !== $data['NetworkDisabled']) {
            $value_19 = $data['NetworkDisabled'];
            if (is_bool($data['NetworkDisabled'])) {
                $value_19 = $data['NetworkDisabled'];
            } elseif (null === $data['NetworkDisabled']) {
                $value_19 = $data['NetworkDisabled'];
            }
            $object->networkDisabled = $value_19;
            unset($data['NetworkDisabled']);
        } elseif (array_key_exists('NetworkDisabled', $data)) {
            $object->networkDisabled = null;
            unset($data['NetworkDisabled']);
        }
        if (array_key_exists('OnBuild', $data) && null !== $data['OnBuild']) {
            $values_5 = [];
            foreach ($data['OnBuild'] as $value_20) {
                $values_5[] = $value_20;
            }
            $object->onBuild = $values_5;
            unset($data['OnBuild']);
        } elseif (array_key_exists('OnBuild', $data)) {
            $object->onBuild = null;
            unset($data['OnBuild']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_21 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_6 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key_2 => $value_22) {
                    $values_6[$key_2] = $value_22;
                }
                $value_21 = $values_6;
            } elseif (null === $data['Labels']) {
                $value_21 = $data['Labels'];
            }
            $object->labels = $value_21;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $value_23 = $data['StopSignal'];
            if (is_string($data['StopSignal'])) {
                $value_23 = $data['StopSignal'];
            } elseif (null === $data['StopSignal']) {
                $value_23 = $data['StopSignal'];
            }
            $object->stopSignal = $value_23;
            unset($data['StopSignal']);
        } elseif (array_key_exists('StopSignal', $data)) {
            $object->stopSignal = null;
            unset($data['StopSignal']);
        }
        if (array_key_exists('StopTimeout', $data) && null !== $data['StopTimeout']) {
            $value_24 = $data['StopTimeout'];
            if (is_int($data['StopTimeout'])) {
                $value_24 = $data['StopTimeout'];
            } elseif (null === $data['StopTimeout']) {
                $value_24 = $data['StopTimeout'];
            }
            $object->stopTimeout = $value_24;
            unset($data['StopTimeout']);
        } elseif (array_key_exists('StopTimeout', $data)) {
            $object->stopTimeout = null;
            unset($data['StopTimeout']);
        }
        if (array_key_exists('Shell', $data) && null !== $data['Shell']) {
            $values_7 = [];
            foreach ($data['Shell'] as $value_25) {
                $values_7[] = $value_25;
            }
            $object->shell = $values_7;
            unset($data['Shell']);
        } elseif (array_key_exists('Shell', $data)) {
            $object->shell = null;
            unset($data['Shell']);
        }
        foreach ($data as $key_3 => $value_26) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_26;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $value = $data->hostname;
            if (is_string($data->hostname)) {
                $value = $data->hostname;
            } elseif (null === $data->hostname) {
                $value = $data->hostname;
            }
            $dataArray['Hostname'] = $value;
        }
        if (array_key_exists('domainname', get_object_vars($data)) && null !== ($data->domainname ?? null)) {
            $value_1 = $data->domainname;
            if (is_string($data->domainname)) {
                $value_1 = $data->domainname;
            } elseif (null === $data->domainname) {
                $value_1 = $data->domainname;
            }
            $dataArray['Domainname'] = $value_1;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $value_2 = $data->user;
            if (is_string($data->user)) {
                $value_2 = $data->user;
            } elseif (null === $data->user) {
                $value_2 = $data->user;
            }
            $dataArray['User'] = $value_2;
        }
        if (array_key_exists('attachStdin', get_object_vars($data)) && null !== ($data->attachStdin ?? null)) {
            $value_3 = $data->attachStdin;
            if (is_bool($data->attachStdin)) {
                $value_3 = $data->attachStdin;
            } elseif (null === $data->attachStdin) {
                $value_3 = $data->attachStdin;
            }
            $dataArray['AttachStdin'] = $value_3;
        }
        if (array_key_exists('attachStdout', get_object_vars($data)) && null !== ($data->attachStdout ?? null)) {
            $value_4 = $data->attachStdout;
            if (is_bool($data->attachStdout)) {
                $value_4 = $data->attachStdout;
            } elseif (null === $data->attachStdout) {
                $value_4 = $data->attachStdout;
            }
            $dataArray['AttachStdout'] = $value_4;
        }
        if (array_key_exists('attachStderr', get_object_vars($data)) && null !== ($data->attachStderr ?? null)) {
            $value_5 = $data->attachStderr;
            if (is_bool($data->attachStderr)) {
                $value_5 = $data->attachStderr;
            } elseif (null === $data->attachStderr) {
                $value_5 = $data->attachStderr;
            }
            $dataArray['AttachStderr'] = $value_5;
        }
        if (array_key_exists('exposedPorts', get_object_vars($data)) && null !== ($data->exposedPorts ?? null)) {
            $value_6 = $data->exposedPorts;
            if (is_iterable($data->exposedPorts)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->exposedPorts as $key => $value_7) {
                    $values[$key] = $value_7;
                }
                $value_6 = $values;
            } elseif (null === $data->exposedPorts) {
                $value_6 = $data->exposedPorts;
            }
            $dataArray['ExposedPorts'] = $value_6;
        }
        if (array_key_exists('tty', get_object_vars($data)) && null !== ($data->tty ?? null)) {
            $value_8 = $data->tty;
            if (is_bool($data->tty)) {
                $value_8 = $data->tty;
            } elseif (null === $data->tty) {
                $value_8 = $data->tty;
            }
            $dataArray['Tty'] = $value_8;
        }
        if (array_key_exists('openStdin', get_object_vars($data)) && null !== ($data->openStdin ?? null)) {
            $value_9 = $data->openStdin;
            if (is_bool($data->openStdin)) {
                $value_9 = $data->openStdin;
            } elseif (null === $data->openStdin) {
                $value_9 = $data->openStdin;
            }
            $dataArray['OpenStdin'] = $value_9;
        }
        if (array_key_exists('stdinOnce', get_object_vars($data)) && null !== ($data->stdinOnce ?? null)) {
            $value_10 = $data->stdinOnce;
            if (is_bool($data->stdinOnce)) {
                $value_10 = $data->stdinOnce;
            } elseif (null === $data->stdinOnce) {
                $value_10 = $data->stdinOnce;
            }
            $dataArray['StdinOnce'] = $value_10;
        }
        if (array_key_exists('env', get_object_vars($data)) && null !== ($data->env ?? null)) {
            $values_1 = [];
            foreach ($data->env as $value_11) {
                $values_1[] = $value_11;
            }
            $dataArray['Env'] = $values_1;
        }
        if (array_key_exists('cmd', get_object_vars($data)) && null !== ($data->cmd ?? null)) {
            $values_2 = [];
            foreach ($data->cmd as $value_12) {
                $values_2[] = $value_12;
            }
            $dataArray['Cmd'] = $values_2;
        }
        if (array_key_exists('healthcheck', get_object_vars($data)) && null !== ($data->healthcheck ?? null)) {
            $normalized               = $this->normalizer->normalize($data->healthcheck, 'json', $context);
            $dataArray['Healthcheck'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('argsEscaped', get_object_vars($data)) && null !== ($data->argsEscaped ?? null)) {
            $value_13 = $data->argsEscaped;
            if (is_bool($data->argsEscaped)) {
                $value_13 = $data->argsEscaped;
            } elseif (null === $data->argsEscaped) {
                $value_13 = $data->argsEscaped;
            }
            $dataArray['ArgsEscaped'] = $value_13;
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $value_14 = $data->image;
            if (is_string($data->image)) {
                $value_14 = $data->image;
            } elseif (null === $data->image) {
                $value_14 = $data->image;
            }
            $dataArray['Image'] = $value_14;
        }
        if (array_key_exists('volumes', get_object_vars($data)) && null !== ($data->volumes ?? null)) {
            $value_15 = $data->volumes;
            if (is_iterable($data->volumes)) {
                $values_3 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->volumes as $key_1 => $value_16) {
                    $values_3[$key_1] = $value_16;
                }
                $value_15 = $values_3;
            } elseif (null === $data->volumes) {
                $value_15 = $data->volumes;
            }
            $dataArray['Volumes'] = $value_15;
        }
        if (array_key_exists('workingDir', get_object_vars($data)) && null !== ($data->workingDir ?? null)) {
            $value_17 = $data->workingDir;
            if (is_string($data->workingDir)) {
                $value_17 = $data->workingDir;
            } elseif (null === $data->workingDir) {
                $value_17 = $data->workingDir;
            }
            $dataArray['WorkingDir'] = $value_17;
        }
        if (array_key_exists('entrypoint', get_object_vars($data)) && null !== ($data->entrypoint ?? null)) {
            $values_4 = [];
            foreach ($data->entrypoint as $value_18) {
                $values_4[] = $value_18;
            }
            $dataArray['Entrypoint'] = $values_4;
        }
        if (array_key_exists('networkDisabled', get_object_vars($data)) && null !== ($data->networkDisabled ?? null)) {
            $value_19 = $data->networkDisabled;
            if (is_bool($data->networkDisabled)) {
                $value_19 = $data->networkDisabled;
            } elseif (null === $data->networkDisabled) {
                $value_19 = $data->networkDisabled;
            }
            $dataArray['NetworkDisabled'] = $value_19;
        }
        if (array_key_exists('onBuild', get_object_vars($data)) && null !== ($data->onBuild ?? null)) {
            $values_5 = [];
            foreach ($data->onBuild as $value_20) {
                $values_5[] = $value_20;
            }
            $dataArray['OnBuild'] = $values_5;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_21 = $data->labels;
            if (is_iterable($data->labels)) {
                $values_6 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key_2 => $value_22) {
                    $values_6[$key_2] = $value_22;
                }
                $value_21 = $values_6;
            } elseif (null === $data->labels) {
                $value_21 = $data->labels;
            }
            $dataArray['Labels'] = $value_21;
        }
        if (array_key_exists('stopSignal', get_object_vars($data)) && null !== ($data->stopSignal ?? null)) {
            $value_23 = $data->stopSignal;
            if (is_string($data->stopSignal)) {
                $value_23 = $data->stopSignal;
            } elseif (null === $data->stopSignal) {
                $value_23 = $data->stopSignal;
            }
            $dataArray['StopSignal'] = $value_23;
        }
        if (array_key_exists('stopTimeout', get_object_vars($data)) && null !== ($data->stopTimeout ?? null)) {
            $value_24 = $data->stopTimeout;
            if (is_int($data->stopTimeout)) {
                $value_24 = $data->stopTimeout;
            } elseif (null === $data->stopTimeout) {
                $value_24 = $data->stopTimeout;
            }
            $dataArray['StopTimeout'] = $value_24;
        }
        if (array_key_exists('shell', get_object_vars($data)) && null !== ($data->shell ?? null)) {
            $values_7 = [];
            foreach ($data->shell as $value_25) {
                $values_7[] = $value_25;
            }
            $dataArray['Shell'] = $values_7;
        }
        foreach ($data->additionalPropertyEntries() as $key_3 => $value_26) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_26;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
