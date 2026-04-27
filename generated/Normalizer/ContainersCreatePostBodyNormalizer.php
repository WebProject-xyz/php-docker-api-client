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

class ContainersCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody();
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
            $object->setHostname($value);
        } elseif (array_key_exists('Hostname', $data) && null === $data['Hostname']) {
            $object->setHostname(null);
        }
        if (array_key_exists('Domainname', $data) && null !== $data['Domainname']) {
            $value_1 = $data['Domainname'];
            if (is_string($data['Domainname'])) {
                $value_1 = $data['Domainname'];
            } elseif (null === $data['Domainname']) {
                $value_1 = $data['Domainname'];
            }
            $object->setDomainname($value_1);
        } elseif (array_key_exists('Domainname', $data) && null === $data['Domainname']) {
            $object->setDomainname(null);
        }
        if (array_key_exists('User', $data) && null !== $data['User']) {
            $value_2 = $data['User'];
            if (is_string($data['User'])) {
                $value_2 = $data['User'];
            } elseif (null === $data['User']) {
                $value_2 = $data['User'];
            }
            $object->setUser($value_2);
        } elseif (array_key_exists('User', $data) && null === $data['User']) {
            $object->setUser(null);
        }
        if (array_key_exists('AttachStdin', $data) && null !== $data['AttachStdin']) {
            $value_3 = $data['AttachStdin'];
            if (is_bool($data['AttachStdin'])) {
                $value_3 = $data['AttachStdin'];
            } elseif (null === $data['AttachStdin']) {
                $value_3 = $data['AttachStdin'];
            }
            $object->setAttachStdin($value_3);
        } elseif (array_key_exists('AttachStdin', $data) && null === $data['AttachStdin']) {
            $object->setAttachStdin(null);
        }
        if (array_key_exists('AttachStdout', $data) && null !== $data['AttachStdout']) {
            $value_4 = $data['AttachStdout'];
            if (is_bool($data['AttachStdout'])) {
                $value_4 = $data['AttachStdout'];
            } elseif (null === $data['AttachStdout']) {
                $value_4 = $data['AttachStdout'];
            }
            $object->setAttachStdout($value_4);
        } elseif (array_key_exists('AttachStdout', $data) && null === $data['AttachStdout']) {
            $object->setAttachStdout(null);
        }
        if (array_key_exists('AttachStderr', $data) && null !== $data['AttachStderr']) {
            $value_5 = $data['AttachStderr'];
            if (is_bool($data['AttachStderr'])) {
                $value_5 = $data['AttachStderr'];
            } elseif (null === $data['AttachStderr']) {
                $value_5 = $data['AttachStderr'];
            }
            $object->setAttachStderr($value_5);
        } elseif (array_key_exists('AttachStderr', $data) && null === $data['AttachStderr']) {
            $object->setAttachStderr(null);
        }
        if (array_key_exists('ExposedPorts', $data) && null !== $data['ExposedPorts']) {
            $value_6 = $data['ExposedPorts'];
            if (is_array($data['ExposedPorts']) && $this->isOnlyNumericKeys($data['ExposedPorts'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['ExposedPorts'] as $key => $value_7) {
                    $values[$key] = $value_7;
                }
                $value_6 = $values;
            } elseif (null === $data['ExposedPorts']) {
                $value_6 = $data['ExposedPorts'];
            }
            $object->setExposedPorts($value_6);
        } elseif (array_key_exists('ExposedPorts', $data) && null === $data['ExposedPorts']) {
            $object->setExposedPorts(null);
        }
        if (array_key_exists('Tty', $data) && null !== $data['Tty']) {
            $value_8 = $data['Tty'];
            if (is_bool($data['Tty'])) {
                $value_8 = $data['Tty'];
            } elseif (null === $data['Tty']) {
                $value_8 = $data['Tty'];
            }
            $object->setTty($value_8);
        } elseif (array_key_exists('Tty', $data) && null === $data['Tty']) {
            $object->setTty(null);
        }
        if (array_key_exists('OpenStdin', $data) && null !== $data['OpenStdin']) {
            $value_9 = $data['OpenStdin'];
            if (is_bool($data['OpenStdin'])) {
                $value_9 = $data['OpenStdin'];
            } elseif (null === $data['OpenStdin']) {
                $value_9 = $data['OpenStdin'];
            }
            $object->setOpenStdin($value_9);
        } elseif (array_key_exists('OpenStdin', $data) && null === $data['OpenStdin']) {
            $object->setOpenStdin(null);
        }
        if (array_key_exists('StdinOnce', $data) && null !== $data['StdinOnce']) {
            $value_10 = $data['StdinOnce'];
            if (is_bool($data['StdinOnce'])) {
                $value_10 = $data['StdinOnce'];
            } elseif (null === $data['StdinOnce']) {
                $value_10 = $data['StdinOnce'];
            }
            $object->setStdinOnce($value_10);
        } elseif (array_key_exists('StdinOnce', $data) && null === $data['StdinOnce']) {
            $object->setStdinOnce(null);
        }
        if (array_key_exists('Env', $data) && null !== $data['Env']) {
            $value_11 = $data['Env'];
            if (is_array($data['Env']) && $this->isOnlyNumericKeys($data['Env'])) {
                $values_1 = [];
                foreach ($data['Env'] as $value_12) {
                    $values_1[] = $value_12;
                }
                $value_11 = $values_1;
            } elseif (null === $data['Env']) {
                $value_11 = $data['Env'];
            }
            $object->setEnv($value_11);
        } elseif (array_key_exists('Env', $data) && null === $data['Env']) {
            $object->setEnv(null);
        }
        if (array_key_exists('Cmd', $data) && null !== $data['Cmd']) {
            $value_13 = $data['Cmd'];
            if (is_array($data['Cmd']) && $this->isOnlyNumericKeys($data['Cmd'])) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_14) {
                    $values_2[] = $value_14;
                }
                $value_13 = $values_2;
            } elseif (null === $data['Cmd']) {
                $value_13 = $data['Cmd'];
            }
            $object->setCmd($value_13);
        } elseif (array_key_exists('Cmd', $data) && null === $data['Cmd']) {
            $object->setCmd(null);
        }
        if (array_key_exists('Healthcheck', $data)) {
            $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class, 'json', $context));
        }
        if (array_key_exists('ArgsEscaped', $data) && null !== $data['ArgsEscaped']) {
            $value_15 = $data['ArgsEscaped'];
            if (is_bool($data['ArgsEscaped'])) {
                $value_15 = $data['ArgsEscaped'];
            } elseif (null === $data['ArgsEscaped']) {
                $value_15 = $data['ArgsEscaped'];
            }
            $object->setArgsEscaped($value_15);
        } elseif (array_key_exists('ArgsEscaped', $data) && null === $data['ArgsEscaped']) {
            $object->setArgsEscaped(null);
        }
        if (array_key_exists('Image', $data) && null !== $data['Image']) {
            $value_16 = $data['Image'];
            if (is_string($data['Image'])) {
                $value_16 = $data['Image'];
            } elseif (null === $data['Image']) {
                $value_16 = $data['Image'];
            }
            $object->setImage($value_16);
        } elseif (array_key_exists('Image', $data) && null === $data['Image']) {
            $object->setImage(null);
        }
        if (array_key_exists('Volumes', $data) && null !== $data['Volumes']) {
            $value_17 = $data['Volumes'];
            if (is_array($data['Volumes']) && $this->isOnlyNumericKeys($data['Volumes'])) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Volumes'] as $key_1 => $value_18) {
                    $values_3[$key_1] = $value_18;
                }
                $value_17 = $values_3;
            } elseif (null === $data['Volumes']) {
                $value_17 = $data['Volumes'];
            }
            $object->setVolumes($value_17);
        } elseif (array_key_exists('Volumes', $data) && null === $data['Volumes']) {
            $object->setVolumes(null);
        }
        if (array_key_exists('WorkingDir', $data) && null !== $data['WorkingDir']) {
            $value_19 = $data['WorkingDir'];
            if (is_string($data['WorkingDir'])) {
                $value_19 = $data['WorkingDir'];
            } elseif (null === $data['WorkingDir']) {
                $value_19 = $data['WorkingDir'];
            }
            $object->setWorkingDir($value_19);
        } elseif (array_key_exists('WorkingDir', $data) && null === $data['WorkingDir']) {
            $object->setWorkingDir(null);
        }
        if (array_key_exists('Entrypoint', $data) && null !== $data['Entrypoint']) {
            $value_20 = $data['Entrypoint'];
            if (is_array($data['Entrypoint']) && $this->isOnlyNumericKeys($data['Entrypoint'])) {
                $values_4 = [];
                foreach ($data['Entrypoint'] as $value_21) {
                    $values_4[] = $value_21;
                }
                $value_20 = $values_4;
            } elseif (null === $data['Entrypoint']) {
                $value_20 = $data['Entrypoint'];
            }
            $object->setEntrypoint($value_20);
        } elseif (array_key_exists('Entrypoint', $data) && null === $data['Entrypoint']) {
            $object->setEntrypoint(null);
        }
        if (array_key_exists('NetworkDisabled', $data) && null !== $data['NetworkDisabled']) {
            $value_22 = $data['NetworkDisabled'];
            if (is_bool($data['NetworkDisabled'])) {
                $value_22 = $data['NetworkDisabled'];
            } elseif (null === $data['NetworkDisabled']) {
                $value_22 = $data['NetworkDisabled'];
            }
            $object->setNetworkDisabled($value_22);
        } elseif (array_key_exists('NetworkDisabled', $data) && null === $data['NetworkDisabled']) {
            $object->setNetworkDisabled(null);
        }
        if (array_key_exists('OnBuild', $data) && null !== $data['OnBuild']) {
            $value_23 = $data['OnBuild'];
            if (is_array($data['OnBuild']) && $this->isOnlyNumericKeys($data['OnBuild'])) {
                $values_5 = [];
                foreach ($data['OnBuild'] as $value_24) {
                    $values_5[] = $value_24;
                }
                $value_23 = $values_5;
            } elseif (null === $data['OnBuild']) {
                $value_23 = $data['OnBuild'];
            }
            $object->setOnBuild($value_23);
        } elseif (array_key_exists('OnBuild', $data) && null === $data['OnBuild']) {
            $object->setOnBuild(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_25 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_6 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_26) {
                    $values_6[$key_2] = $value_26;
                }
                $value_25 = $values_6;
            } elseif (null === $data['Labels']) {
                $value_25 = $data['Labels'];
            }
            $object->setLabels($value_25);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $value_27 = $data['StopSignal'];
            if (is_string($data['StopSignal'])) {
                $value_27 = $data['StopSignal'];
            } elseif (null === $data['StopSignal']) {
                $value_27 = $data['StopSignal'];
            }
            $object->setStopSignal($value_27);
        } elseif (array_key_exists('StopSignal', $data) && null === $data['StopSignal']) {
            $object->setStopSignal(null);
        }
        if (array_key_exists('StopTimeout', $data) && null !== $data['StopTimeout']) {
            $value_28 = $data['StopTimeout'];
            if (is_int($data['StopTimeout'])) {
                $value_28 = $data['StopTimeout'];
            } elseif (null === $data['StopTimeout']) {
                $value_28 = $data['StopTimeout'];
            }
            $object->setStopTimeout($value_28);
        } elseif (array_key_exists('StopTimeout', $data) && null === $data['StopTimeout']) {
            $object->setStopTimeout(null);
        }
        if (array_key_exists('Shell', $data) && null !== $data['Shell']) {
            $value_29 = $data['Shell'];
            if (is_array($data['Shell']) && $this->isOnlyNumericKeys($data['Shell'])) {
                $values_7 = [];
                foreach ($data['Shell'] as $value_30) {
                    $values_7[] = $value_30;
                }
                $value_29 = $values_7;
            } elseif (null === $data['Shell']) {
                $value_29 = $data['Shell'];
            }
            $object->setShell($value_29);
        } elseif (array_key_exists('Shell', $data) && null === $data['Shell']) {
            $object->setShell(null);
        }
        if (array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfig::class, 'json', $context));
        }
        if (array_key_exists('NetworkingConfig', $data)) {
            $object->setNetworkingConfig($this->denormalizer->denormalize($data['NetworkingConfig'], \WebProject\DockerApi\Library\Generated\Model\NetworkingConfig::class, 'json', $context));
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('hostname')) {
            $value = $data->getHostname();
            if (is_string($data->getHostname())) {
                $value = $data->getHostname();
            } elseif (null === $data->getHostname()) {
                $value = $data->getHostname();
            }
            $dataArray['Hostname'] = $value;
        }
        if ($data->isInitialized('domainname')) {
            $value_1 = $data->getDomainname();
            if (is_string($data->getDomainname())) {
                $value_1 = $data->getDomainname();
            } elseif (null === $data->getDomainname()) {
                $value_1 = $data->getDomainname();
            }
            $dataArray['Domainname'] = $value_1;
        }
        if ($data->isInitialized('user')) {
            $value_2 = $data->getUser();
            if (is_string($data->getUser())) {
                $value_2 = $data->getUser();
            } elseif (null === $data->getUser()) {
                $value_2 = $data->getUser();
            }
            $dataArray['User'] = $value_2;
        }
        if ($data->isInitialized('attachStdin')) {
            $value_3 = $data->getAttachStdin();
            if (is_bool($data->getAttachStdin())) {
                $value_3 = $data->getAttachStdin();
            } elseif (null === $data->getAttachStdin()) {
                $value_3 = $data->getAttachStdin();
            }
            $dataArray['AttachStdin'] = $value_3;
        }
        if ($data->isInitialized('attachStdout')) {
            $value_4 = $data->getAttachStdout();
            if (is_bool($data->getAttachStdout())) {
                $value_4 = $data->getAttachStdout();
            } elseif (null === $data->getAttachStdout()) {
                $value_4 = $data->getAttachStdout();
            }
            $dataArray['AttachStdout'] = $value_4;
        }
        if ($data->isInitialized('attachStderr')) {
            $value_5 = $data->getAttachStderr();
            if (is_bool($data->getAttachStderr())) {
                $value_5 = $data->getAttachStderr();
            } elseif (null === $data->getAttachStderr()) {
                $value_5 = $data->getAttachStderr();
            }
            $dataArray['AttachStderr'] = $value_5;
        }
        if ($data->isInitialized('exposedPorts')) {
            $value_6 = $data->getExposedPorts();
            if (is_object($data->getExposedPorts())) {
                $values = [];
                foreach ($data->getExposedPorts() as $key => $value_7) {
                    $values[$key] = $value_7;
                }
                $value_6 = $values;
            } elseif (null === $data->getExposedPorts()) {
                $value_6 = $data->getExposedPorts();
            }
            $dataArray['ExposedPorts'] = $value_6;
        }
        if ($data->isInitialized('tty')) {
            $value_8 = $data->getTty();
            if (is_bool($data->getTty())) {
                $value_8 = $data->getTty();
            } elseif (null === $data->getTty()) {
                $value_8 = $data->getTty();
            }
            $dataArray['Tty'] = $value_8;
        }
        if ($data->isInitialized('openStdin')) {
            $value_9 = $data->getOpenStdin();
            if (is_bool($data->getOpenStdin())) {
                $value_9 = $data->getOpenStdin();
            } elseif (null === $data->getOpenStdin()) {
                $value_9 = $data->getOpenStdin();
            }
            $dataArray['OpenStdin'] = $value_9;
        }
        if ($data->isInitialized('stdinOnce')) {
            $value_10 = $data->getStdinOnce();
            if (is_bool($data->getStdinOnce())) {
                $value_10 = $data->getStdinOnce();
            } elseif (null === $data->getStdinOnce()) {
                $value_10 = $data->getStdinOnce();
            }
            $dataArray['StdinOnce'] = $value_10;
        }
        if ($data->isInitialized('env')) {
            $value_11 = $data->getEnv();
            if (is_array($data->getEnv())) {
                $values_1 = [];
                foreach ($data->getEnv() as $value_12) {
                    $values_1[] = $value_12;
                }
                $value_11 = $values_1;
            } elseif (null === $data->getEnv()) {
                $value_11 = $data->getEnv();
            }
            $dataArray['Env'] = $value_11;
        }
        if ($data->isInitialized('cmd')) {
            $value_13 = $data->getCmd();
            if (is_array($data->getCmd())) {
                $values_2 = [];
                foreach ($data->getCmd() as $value_14) {
                    $values_2[] = $value_14;
                }
                $value_13 = $values_2;
            } elseif (null === $data->getCmd()) {
                $value_13 = $data->getCmd();
            }
            $dataArray['Cmd'] = $value_13;
        }
        if ($data->isInitialized('healthcheck') && null !== $data->getHealthcheck()) {
            $dataArray['Healthcheck'] = $this->normalizer->normalize($data->getHealthcheck(), 'json', $context);
        }
        if ($data->isInitialized('argsEscaped')) {
            $value_15 = $data->getArgsEscaped();
            if (is_bool($data->getArgsEscaped())) {
                $value_15 = $data->getArgsEscaped();
            } elseif (null === $data->getArgsEscaped()) {
                $value_15 = $data->getArgsEscaped();
            }
            $dataArray['ArgsEscaped'] = $value_15;
        }
        if ($data->isInitialized('image')) {
            $value_16 = $data->getImage();
            if (is_string($data->getImage())) {
                $value_16 = $data->getImage();
            } elseif (null === $data->getImage()) {
                $value_16 = $data->getImage();
            }
            $dataArray['Image'] = $value_16;
        }
        if ($data->isInitialized('volumes')) {
            $value_17 = $data->getVolumes();
            if (is_object($data->getVolumes())) {
                $values_3 = [];
                foreach ($data->getVolumes() as $key_1 => $value_18) {
                    $values_3[$key_1] = $value_18;
                }
                $value_17 = $values_3;
            } elseif (null === $data->getVolumes()) {
                $value_17 = $data->getVolumes();
            }
            $dataArray['Volumes'] = $value_17;
        }
        if ($data->isInitialized('workingDir')) {
            $value_19 = $data->getWorkingDir();
            if (is_string($data->getWorkingDir())) {
                $value_19 = $data->getWorkingDir();
            } elseif (null === $data->getWorkingDir()) {
                $value_19 = $data->getWorkingDir();
            }
            $dataArray['WorkingDir'] = $value_19;
        }
        if ($data->isInitialized('entrypoint')) {
            $value_20 = $data->getEntrypoint();
            if (is_array($data->getEntrypoint())) {
                $values_4 = [];
                foreach ($data->getEntrypoint() as $value_21) {
                    $values_4[] = $value_21;
                }
                $value_20 = $values_4;
            } elseif (null === $data->getEntrypoint()) {
                $value_20 = $data->getEntrypoint();
            }
            $dataArray['Entrypoint'] = $value_20;
        }
        if ($data->isInitialized('networkDisabled')) {
            $value_22 = $data->getNetworkDisabled();
            if (is_bool($data->getNetworkDisabled())) {
                $value_22 = $data->getNetworkDisabled();
            } elseif (null === $data->getNetworkDisabled()) {
                $value_22 = $data->getNetworkDisabled();
            }
            $dataArray['NetworkDisabled'] = $value_22;
        }
        if ($data->isInitialized('onBuild')) {
            $value_23 = $data->getOnBuild();
            if (is_array($data->getOnBuild())) {
                $values_5 = [];
                foreach ($data->getOnBuild() as $value_24) {
                    $values_5[] = $value_24;
                }
                $value_23 = $values_5;
            } elseif (null === $data->getOnBuild()) {
                $value_23 = $data->getOnBuild();
            }
            $dataArray['OnBuild'] = $value_23;
        }
        if ($data->isInitialized('labels')) {
            $value_25 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values_6 = [];
                foreach ($data->getLabels() as $key_2 => $value_26) {
                    $values_6[$key_2] = $value_26;
                }
                $value_25 = $values_6;
            } elseif (null === $data->getLabels()) {
                $value_25 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_25;
        }
        if ($data->isInitialized('stopSignal')) {
            $value_27 = $data->getStopSignal();
            if (is_string($data->getStopSignal())) {
                $value_27 = $data->getStopSignal();
            } elseif (null === $data->getStopSignal()) {
                $value_27 = $data->getStopSignal();
            }
            $dataArray['StopSignal'] = $value_27;
        }
        if ($data->isInitialized('stopTimeout')) {
            $value_28 = $data->getStopTimeout();
            if (is_int($data->getStopTimeout())) {
                $value_28 = $data->getStopTimeout();
            } elseif (null === $data->getStopTimeout()) {
                $value_28 = $data->getStopTimeout();
            }
            $dataArray['StopTimeout'] = $value_28;
        }
        if ($data->isInitialized('shell')) {
            $value_29 = $data->getShell();
            if (is_array($data->getShell())) {
                $values_7 = [];
                foreach ($data->getShell() as $value_30) {
                    $values_7[] = $value_30;
                }
                $value_29 = $values_7;
            } elseif (null === $data->getShell()) {
                $value_29 = $data->getShell();
            }
            $dataArray['Shell'] = $value_29;
        }
        if ($data->isInitialized('hostConfig') && null !== $data->getHostConfig()) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkingConfig') && null !== $data->getNetworkingConfig()) {
            $dataArray['NetworkingConfig'] = $this->normalizer->normalize($data->getNetworkingConfig(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
