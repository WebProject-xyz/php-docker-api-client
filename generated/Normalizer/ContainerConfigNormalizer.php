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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerConfig();
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ContainerConfigConstraint());
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
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $values[$key] = $values_1;
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
        if (array_key_exists('Env', $data)) {
            $values_2 = [];
            foreach ($data['Env'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setEnv($values_2);
            unset($data['Env']);
        }
        if (array_key_exists('Cmd', $data)) {
            $values_3 = [];
            foreach ($data['Cmd'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCmd($values_3);
            unset($data['Cmd']);
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
        if (array_key_exists('Volumes', $data)) {
            $values_4 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Volumes'] as $key_2 => $value_4) {
                $values_5 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_4 as $key_3 => $value_5) {
                    $values_5[$key_3] = $value_5;
                }
                $values_4[$key_2] = $values_5;
            }
            $object->setVolumes($values_4);
            unset($data['Volumes']);
        }
        if (array_key_exists('WorkingDir', $data)) {
            $object->setWorkingDir($data['WorkingDir']);
            unset($data['WorkingDir']);
        }
        if (array_key_exists('Entrypoint', $data)) {
            $values_6 = [];
            foreach ($data['Entrypoint'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setEntrypoint($values_6);
            unset($data['Entrypoint']);
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
            $values_7 = [];
            foreach ($data['OnBuild'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setOnBuild($values_7);
            unset($data['OnBuild']);
        } elseif (array_key_exists('OnBuild', $data) && null === $data['OnBuild']) {
            $object->setOnBuild(null);
        }
        if (array_key_exists('Labels', $data)) {
            $values_8 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_4 => $value_8) {
                $values_8[$key_4] = $value_8;
            }
            $object->setLabels($values_8);
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
            $values_9 = [];
            foreach ($data['Shell'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setShell($values_9);
            unset($data['Shell']);
        } elseif (array_key_exists('Shell', $data) && null === $data['Shell']) {
            $object->setShell(null);
        }
        foreach ($data as $key_5 => $value_10) {
            if (preg_match('/.*/', (string) $key_5)) {
                $object[$key_5] = $value_10;
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
                $values_1 = [];
                foreach ($value as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $values[$key] = $values_1;
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
            $values_2 = [];
            foreach ($data->getEnv() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Env'] = $values_2;
        }
        if ($data->isInitialized('cmd') && null !== $data->getCmd()) {
            $values_3 = [];
            foreach ($data->getCmd() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['Cmd'] = $values_3;
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
            $values_4 = [];
            foreach ($data->getVolumes() as $key_2 => $value_4) {
                $values_5 = [];
                foreach ($value_4 as $key_3 => $value_5) {
                    $values_5[$key_3] = $value_5;
                }
                $values_4[$key_2] = $values_5;
            }
            $dataArray['Volumes'] = $values_4;
        }
        if ($data->isInitialized('workingDir') && null !== $data->getWorkingDir()) {
            $dataArray['WorkingDir'] = $data->getWorkingDir();
        }
        if ($data->isInitialized('entrypoint') && null !== $data->getEntrypoint()) {
            $values_6 = [];
            foreach ($data->getEntrypoint() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['Entrypoint'] = $values_6;
        }
        if ($data->isInitialized('networkDisabled') && null !== $data->getNetworkDisabled()) {
            $dataArray['NetworkDisabled'] = $data->getNetworkDisabled();
        }
        if ($data->isInitialized('macAddress') && null !== $data->getMacAddress()) {
            $dataArray['MacAddress'] = $data->getMacAddress();
        }
        if ($data->isInitialized('onBuild') && null !== $data->getOnBuild()) {
            $values_7 = [];
            foreach ($data->getOnBuild() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['OnBuild'] = $values_7;
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_8 = [];
            foreach ($data->getLabels() as $key_4 => $value_8) {
                $values_8[$key_4] = $value_8;
            }
            $dataArray['Labels'] = $values_8;
        }
        if ($data->isInitialized('stopSignal') && null !== $data->getStopSignal()) {
            $dataArray['StopSignal'] = $data->getStopSignal();
        }
        if ($data->isInitialized('stopTimeout') && null !== $data->getStopTimeout()) {
            $dataArray['StopTimeout'] = $data->getStopTimeout();
        }
        if ($data->isInitialized('shell') && null !== $data->getShell()) {
            $values_9 = [];
            foreach ($data->getShell() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['Shell'] = $values_9;
        }
        foreach ($data as $key_5 => $value_10) {
            if (preg_match('/.*/', (string) $key_5)) {
                $dataArray[$key_5] = $value_10;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ContainerConfigConstraint());
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
