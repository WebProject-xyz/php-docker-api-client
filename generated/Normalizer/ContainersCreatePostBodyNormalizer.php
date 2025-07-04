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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody();
        if (array_key_exists('AttachStdin', $data) && is_int($data['AttachStdin'])) {
            $data['AttachStdin'] = (bool) $data['AttachStdin'];
        }
        if (array_key_exists('AttachStdout', $data) && is_int($data['AttachStdout'])) {
            $data['AttachStdout'] = (bool) $data['AttachStdout'];
        }
        if (array_key_exists('AttachStderr', $data) && is_int($data['AttachStderr'])) {
            $data['AttachStderr'] = (bool) $data['AttachStderr'];
        }
        if (array_key_exists('Tty', $data) && is_int($data['Tty'])) {
            $data['Tty'] = (bool) $data['Tty'];
        }
        if (array_key_exists('OpenStdin', $data) && is_int($data['OpenStdin'])) {
            $data['OpenStdin'] = (bool) $data['OpenStdin'];
        }
        if (array_key_exists('StdinOnce', $data) && is_int($data['StdinOnce'])) {
            $data['StdinOnce'] = (bool) $data['StdinOnce'];
        }
        if (array_key_exists('ArgsEscaped', $data) && is_int($data['ArgsEscaped'])) {
            $data['ArgsEscaped'] = (bool) $data['ArgsEscaped'];
        }
        if (array_key_exists('NetworkDisabled', $data) && is_int($data['NetworkDisabled'])) {
            $data['NetworkDisabled'] = (bool) $data['NetworkDisabled'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Hostname', $data)) {
            $object->setHostname($data['Hostname']);
            unset($data['Hostname']);
        }
        if (array_key_exists('Domainname', $data)) {
            $object->setDomainname($data['Domainname']);
            unset($data['Domainname']);
        }
        if (array_key_exists('User', $data)) {
            $object->setUser($data['User']);
            unset($data['User']);
        }
        if (array_key_exists('AttachStdin', $data)) {
            $object->setAttachStdin($data['AttachStdin']);
            unset($data['AttachStdin']);
        }
        if (array_key_exists('AttachStdout', $data)) {
            $object->setAttachStdout($data['AttachStdout']);
            unset($data['AttachStdout']);
        }
        if (array_key_exists('AttachStderr', $data)) {
            $object->setAttachStderr($data['AttachStderr']);
            unset($data['AttachStderr']);
        }
        if (array_key_exists('ExposedPorts', $data) && null !== $data['ExposedPorts']) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['ExposedPorts'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ContainerConfigExposedPortsItem::class, 'json', $context);
            }
            $object->setExposedPorts($values);
            unset($data['ExposedPorts']);
        } elseif (array_key_exists('ExposedPorts', $data) && null === $data['ExposedPorts']) {
            $object->setExposedPorts(null);
        }
        if (array_key_exists('Tty', $data)) {
            $object->setTty($data['Tty']);
            unset($data['Tty']);
        }
        if (array_key_exists('OpenStdin', $data)) {
            $object->setOpenStdin($data['OpenStdin']);
            unset($data['OpenStdin']);
        }
        if (array_key_exists('StdinOnce', $data)) {
            $object->setStdinOnce($data['StdinOnce']);
            unset($data['StdinOnce']);
        }
        if (array_key_exists('Env', $data) && null !== $data['Env']) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
            unset($data['Env']);
        } elseif (array_key_exists('Env', $data) && null === $data['Env']) {
            $object->setEnv(null);
        }
        if (array_key_exists('Cmd', $data) && null !== $data['Cmd']) {
            $values_2 = [];
            foreach ($data['Cmd'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCmd($values_2);
            unset($data['Cmd']);
        } elseif (array_key_exists('Cmd', $data) && null === $data['Cmd']) {
            $object->setCmd(null);
        }
        if (array_key_exists('Healthcheck', $data)) {
            $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class, 'json', $context));
            unset($data['Healthcheck']);
        }
        if (array_key_exists('ArgsEscaped', $data) && null !== $data['ArgsEscaped']) {
            $object->setArgsEscaped($data['ArgsEscaped']);
            unset($data['ArgsEscaped']);
        } elseif (array_key_exists('ArgsEscaped', $data) && null === $data['ArgsEscaped']) {
            $object->setArgsEscaped(null);
        }
        if (array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
            unset($data['Image']);
        }
        if (array_key_exists('Volumes', $data) && null !== $data['Volumes']) {
            $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Volumes'] as $key_1 => $value_3) {
                $values_3[$key_1] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ContainerConfigVolumesItem::class, 'json', $context);
            }
            $object->setVolumes($values_3);
            unset($data['Volumes']);
        } elseif (array_key_exists('Volumes', $data) && null === $data['Volumes']) {
            $object->setVolumes(null);
        }
        if (array_key_exists('WorkingDir', $data)) {
            $object->setWorkingDir($data['WorkingDir']);
            unset($data['WorkingDir']);
        }
        if (array_key_exists('Entrypoint', $data) && null !== $data['Entrypoint']) {
            $values_4 = [];
            foreach ($data['Entrypoint'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setEntrypoint($values_4);
            unset($data['Entrypoint']);
        } elseif (array_key_exists('Entrypoint', $data) && null === $data['Entrypoint']) {
            $object->setEntrypoint(null);
        }
        if (array_key_exists('NetworkDisabled', $data) && null !== $data['NetworkDisabled']) {
            $object->setNetworkDisabled($data['NetworkDisabled']);
            unset($data['NetworkDisabled']);
        } elseif (array_key_exists('NetworkDisabled', $data) && null === $data['NetworkDisabled']) {
            $object->setNetworkDisabled(null);
        }
        if (array_key_exists('MacAddress', $data) && null !== $data['MacAddress']) {
            $object->setMacAddress($data['MacAddress']);
            unset($data['MacAddress']);
        } elseif (array_key_exists('MacAddress', $data) && null === $data['MacAddress']) {
            $object->setMacAddress(null);
        }
        if (array_key_exists('OnBuild', $data) && null !== $data['OnBuild']) {
            $values_5 = [];
            foreach ($data['OnBuild'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setOnBuild($values_5);
            unset($data['OnBuild']);
        } elseif (array_key_exists('OnBuild', $data) && null === $data['OnBuild']) {
            $object->setOnBuild(null);
        }
        if (array_key_exists('Labels', $data)) {
            $values_6 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $object->setLabels($values_6);
            unset($data['Labels']);
        }
        if (array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $object->setStopSignal($data['StopSignal']);
            unset($data['StopSignal']);
        } elseif (array_key_exists('StopSignal', $data) && null === $data['StopSignal']) {
            $object->setStopSignal(null);
        }
        if (array_key_exists('StopTimeout', $data) && null !== $data['StopTimeout']) {
            $object->setStopTimeout($data['StopTimeout']);
            unset($data['StopTimeout']);
        } elseif (array_key_exists('StopTimeout', $data) && null === $data['StopTimeout']) {
            $object->setStopTimeout(null);
        }
        if (array_key_exists('Shell', $data) && null !== $data['Shell']) {
            $values_7 = [];
            foreach ($data['Shell'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setShell($values_7);
            unset($data['Shell']);
        } elseif (array_key_exists('Shell', $data) && null === $data['Shell']) {
            $object->setShell(null);
        }
        if (array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \WebProject\DockerApi\Library\Generated\Model\HostConfig::class, 'json', $context));
            unset($data['HostConfig']);
        }
        if (array_key_exists('NetworkingConfig', $data)) {
            $object->setNetworkingConfig($this->denormalizer->denormalize($data['NetworkingConfig'], \WebProject\DockerApi\Library\Generated\Model\NetworkingConfig::class, 'json', $context));
            unset($data['NetworkingConfig']);
        }
        foreach ($data as $key_3 => $value_8) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_8;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('hostname') && null !== $data->getHostname()) {
            $dataArray['Hostname'] = $data->getHostname();
        }
        if ($data->isInitialized('domainname') && null !== $data->getDomainname()) {
            $dataArray['Domainname'] = $data->getDomainname();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['User'] = $data->getUser();
        }
        if ($data->isInitialized('attachStdin') && null !== $data->getAttachStdin()) {
            $dataArray['AttachStdin'] = $data->getAttachStdin();
        }
        if ($data->isInitialized('attachStdout') && null !== $data->getAttachStdout()) {
            $dataArray['AttachStdout'] = $data->getAttachStdout();
        }
        if ($data->isInitialized('attachStderr') && null !== $data->getAttachStderr()) {
            $dataArray['AttachStderr'] = $data->getAttachStderr();
        }
        if ($data->isInitialized('exposedPorts') && null !== $data->getExposedPorts()) {
            $values = [];
            foreach ($data->getExposedPorts() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ExposedPorts'] = $values;
        }
        if ($data->isInitialized('tty') && null !== $data->getTty()) {
            $dataArray['Tty'] = $data->getTty();
        }
        if ($data->isInitialized('openStdin') && null !== $data->getOpenStdin()) {
            $dataArray['OpenStdin'] = $data->getOpenStdin();
        }
        if ($data->isInitialized('stdinOnce') && null !== $data->getStdinOnce()) {
            $dataArray['StdinOnce'] = $data->getStdinOnce();
        }
        if ($data->isInitialized('env') && null !== $data->getEnv()) {
            $values_1 = [];
            foreach ($data->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Env'] = $values_1;
        }
        if ($data->isInitialized('cmd') && null !== $data->getCmd()) {
            $values_2 = [];
            foreach ($data->getCmd() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Cmd'] = $values_2;
        }
        if ($data->isInitialized('healthcheck') && null !== $data->getHealthcheck()) {
            $dataArray['Healthcheck'] = $this->normalizer->normalize($data->getHealthcheck(), 'json', $context);
        }
        if ($data->isInitialized('argsEscaped') && null !== $data->getArgsEscaped()) {
            $dataArray['ArgsEscaped'] = $data->getArgsEscaped();
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $data->getImage();
        }
        if ($data->isInitialized('volumes') && null !== $data->getVolumes()) {
            $values_3 = [];
            foreach ($data->getVolumes() as $key_1 => $value_3) {
                $values_3[$key_1] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['Volumes'] = $values_3;
        }
        if ($data->isInitialized('workingDir') && null !== $data->getWorkingDir()) {
            $dataArray['WorkingDir'] = $data->getWorkingDir();
        }
        if ($data->isInitialized('entrypoint') && null !== $data->getEntrypoint()) {
            $values_4 = [];
            foreach ($data->getEntrypoint() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['Entrypoint'] = $values_4;
        }
        if ($data->isInitialized('networkDisabled') && null !== $data->getNetworkDisabled()) {
            $dataArray['NetworkDisabled'] = $data->getNetworkDisabled();
        }
        if ($data->isInitialized('macAddress') && null !== $data->getMacAddress()) {
            $dataArray['MacAddress'] = $data->getMacAddress();
        }
        if ($data->isInitialized('onBuild') && null !== $data->getOnBuild()) {
            $values_5 = [];
            foreach ($data->getOnBuild() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['OnBuild'] = $values_5;
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_6 = [];
            foreach ($data->getLabels() as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $dataArray['Labels'] = $values_6;
        }
        if ($data->isInitialized('stopSignal') && null !== $data->getStopSignal()) {
            $dataArray['StopSignal'] = $data->getStopSignal();
        }
        if ($data->isInitialized('stopTimeout') && null !== $data->getStopTimeout()) {
            $dataArray['StopTimeout'] = $data->getStopTimeout();
        }
        if ($data->isInitialized('shell') && null !== $data->getShell()) {
            $values_7 = [];
            foreach ($data->getShell() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['Shell'] = $values_7;
        }
        if ($data->isInitialized('hostConfig') && null !== $data->getHostConfig()) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkingConfig') && null !== $data->getNetworkingConfig()) {
            $dataArray['NetworkingConfig'] = $this->normalizer->normalize($data->getNetworkingConfig(), 'json', $context);
        }
        foreach ($data as $key_3 => $value_8) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_8;
            }
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
