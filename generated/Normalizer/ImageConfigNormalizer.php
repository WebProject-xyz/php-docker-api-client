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
use function is_object;
use function is_string;

class ImageConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('User', $data) && null !== $data['User']) {
            $value = $data['User'];
            if (is_string($data['User'])) {
                $value = $data['User'];
            } elseif (null === $data['User']) {
                $value = $data['User'];
            }
            $object->setUser($value);
        } elseif (array_key_exists('User', $data) && null === $data['User']) {
            $object->setUser(null);
        }
        if (array_key_exists('ExposedPorts', $data) && null !== $data['ExposedPorts']) {
            $value_1 = $data['ExposedPorts'];
            if (is_array($data['ExposedPorts']) && $this->isOnlyNumericKeys($data['ExposedPorts'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['ExposedPorts'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['ExposedPorts']) {
                $value_1 = $data['ExposedPorts'];
            }
            $object->setExposedPorts($value_1);
        } elseif (array_key_exists('ExposedPorts', $data) && null === $data['ExposedPorts']) {
            $object->setExposedPorts(null);
        }
        if (array_key_exists('Env', $data) && null !== $data['Env']) {
            $value_3 = $data['Env'];
            if (is_array($data['Env']) && $this->isOnlyNumericKeys($data['Env'])) {
                $values_1 = [];
                foreach ($data['Env'] as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data['Env']) {
                $value_3 = $data['Env'];
            }
            $object->setEnv($value_3);
        } elseif (array_key_exists('Env', $data) && null === $data['Env']) {
            $object->setEnv(null);
        }
        if (array_key_exists('Cmd', $data) && null !== $data['Cmd']) {
            $value_5 = $data['Cmd'];
            if (is_array($data['Cmd']) && $this->isOnlyNumericKeys($data['Cmd'])) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_6) {
                    $values_2[] = $value_6;
                }
                $value_5 = $values_2;
            } elseif (null === $data['Cmd']) {
                $value_5 = $data['Cmd'];
            }
            $object->setCmd($value_5);
        } elseif (array_key_exists('Cmd', $data) && null === $data['Cmd']) {
            $object->setCmd(null);
        }
        if (array_key_exists('Healthcheck', $data)) {
            $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class, 'json', $context));
        }
        if (array_key_exists('ArgsEscaped', $data) && null !== $data['ArgsEscaped']) {
            $value_7 = $data['ArgsEscaped'];
            if (is_bool($data['ArgsEscaped'])) {
                $value_7 = $data['ArgsEscaped'];
            } elseif (null === $data['ArgsEscaped']) {
                $value_7 = $data['ArgsEscaped'];
            }
            $object->setArgsEscaped($value_7);
        } elseif (array_key_exists('ArgsEscaped', $data) && null === $data['ArgsEscaped']) {
            $object->setArgsEscaped(null);
        }
        if (array_key_exists('Volumes', $data) && null !== $data['Volumes']) {
            $value_8 = $data['Volumes'];
            if (is_array($data['Volumes']) && $this->isOnlyNumericKeys($data['Volumes'])) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Volumes'] as $key_1 => $value_9) {
                    $values_3[$key_1] = $value_9;
                }
                $value_8 = $values_3;
            } elseif (null === $data['Volumes']) {
                $value_8 = $data['Volumes'];
            }
            $object->setVolumes($value_8);
        } elseif (array_key_exists('Volumes', $data) && null === $data['Volumes']) {
            $object->setVolumes(null);
        }
        if (array_key_exists('WorkingDir', $data) && null !== $data['WorkingDir']) {
            $value_10 = $data['WorkingDir'];
            if (is_string($data['WorkingDir'])) {
                $value_10 = $data['WorkingDir'];
            } elseif (null === $data['WorkingDir']) {
                $value_10 = $data['WorkingDir'];
            }
            $object->setWorkingDir($value_10);
        } elseif (array_key_exists('WorkingDir', $data) && null === $data['WorkingDir']) {
            $object->setWorkingDir(null);
        }
        if (array_key_exists('Entrypoint', $data) && null !== $data['Entrypoint']) {
            $value_11 = $data['Entrypoint'];
            if (is_array($data['Entrypoint']) && $this->isOnlyNumericKeys($data['Entrypoint'])) {
                $values_4 = [];
                foreach ($data['Entrypoint'] as $value_12) {
                    $values_4[] = $value_12;
                }
                $value_11 = $values_4;
            } elseif (null === $data['Entrypoint']) {
                $value_11 = $data['Entrypoint'];
            }
            $object->setEntrypoint($value_11);
        } elseif (array_key_exists('Entrypoint', $data) && null === $data['Entrypoint']) {
            $object->setEntrypoint(null);
        }
        if (array_key_exists('OnBuild', $data) && null !== $data['OnBuild']) {
            $value_13 = $data['OnBuild'];
            if (is_array($data['OnBuild']) && $this->isOnlyNumericKeys($data['OnBuild'])) {
                $values_5 = [];
                foreach ($data['OnBuild'] as $value_14) {
                    $values_5[] = $value_14;
                }
                $value_13 = $values_5;
            } elseif (null === $data['OnBuild']) {
                $value_13 = $data['OnBuild'];
            }
            $object->setOnBuild($value_13);
        } elseif (array_key_exists('OnBuild', $data) && null === $data['OnBuild']) {
            $object->setOnBuild(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_15 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_6 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_16) {
                    $values_6[$key_2] = $value_16;
                }
                $value_15 = $values_6;
            } elseif (null === $data['Labels']) {
                $value_15 = $data['Labels'];
            }
            $object->setLabels($value_15);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $value_17 = $data['StopSignal'];
            if (is_string($data['StopSignal'])) {
                $value_17 = $data['StopSignal'];
            } elseif (null === $data['StopSignal']) {
                $value_17 = $data['StopSignal'];
            }
            $object->setStopSignal($value_17);
        } elseif (array_key_exists('StopSignal', $data) && null === $data['StopSignal']) {
            $object->setStopSignal(null);
        }
        if (array_key_exists('Shell', $data) && null !== $data['Shell']) {
            $value_18 = $data['Shell'];
            if (is_array($data['Shell']) && $this->isOnlyNumericKeys($data['Shell'])) {
                $values_7 = [];
                foreach ($data['Shell'] as $value_19) {
                    $values_7[] = $value_19;
                }
                $value_18 = $values_7;
            } elseif (null === $data['Shell']) {
                $value_18 = $data['Shell'];
            }
            $object->setShell($value_18);
        } elseif (array_key_exists('Shell', $data) && null === $data['Shell']) {
            $object->setShell(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('user')) {
            $value = $data->getUser();
            if (is_string($data->getUser())) {
                $value = $data->getUser();
            } elseif (null === $data->getUser()) {
                $value = $data->getUser();
            }
            $dataArray['User'] = $value;
        }
        if ($data->isInitialized('exposedPorts')) {
            $value_1 = $data->getExposedPorts();
            if (is_object($data->getExposedPorts())) {
                $values = [];
                foreach ($data->getExposedPorts() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getExposedPorts()) {
                $value_1 = $data->getExposedPorts();
            }
            $dataArray['ExposedPorts'] = $value_1;
        }
        if ($data->isInitialized('env')) {
            $value_3 = $data->getEnv();
            if (is_array($data->getEnv())) {
                $values_1 = [];
                foreach ($data->getEnv() as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data->getEnv()) {
                $value_3 = $data->getEnv();
            }
            $dataArray['Env'] = $value_3;
        }
        if ($data->isInitialized('cmd')) {
            $value_5 = $data->getCmd();
            if (is_array($data->getCmd())) {
                $values_2 = [];
                foreach ($data->getCmd() as $value_6) {
                    $values_2[] = $value_6;
                }
                $value_5 = $values_2;
            } elseif (null === $data->getCmd()) {
                $value_5 = $data->getCmd();
            }
            $dataArray['Cmd'] = $value_5;
        }
        if ($data->isInitialized('healthcheck') && null !== $data->getHealthcheck()) {
            $dataArray['Healthcheck'] = $this->normalizer->normalize($data->getHealthcheck(), 'json', $context);
        }
        if ($data->isInitialized('argsEscaped')) {
            $value_7 = $data->getArgsEscaped();
            if (is_bool($data->getArgsEscaped())) {
                $value_7 = $data->getArgsEscaped();
            } elseif (null === $data->getArgsEscaped()) {
                $value_7 = $data->getArgsEscaped();
            }
            $dataArray['ArgsEscaped'] = $value_7;
        }
        if ($data->isInitialized('volumes')) {
            $value_8 = $data->getVolumes();
            if (is_object($data->getVolumes())) {
                $values_3 = [];
                foreach ($data->getVolumes() as $key_1 => $value_9) {
                    $values_3[$key_1] = $value_9;
                }
                $value_8 = $values_3;
            } elseif (null === $data->getVolumes()) {
                $value_8 = $data->getVolumes();
            }
            $dataArray['Volumes'] = $value_8;
        }
        if ($data->isInitialized('workingDir')) {
            $value_10 = $data->getWorkingDir();
            if (is_string($data->getWorkingDir())) {
                $value_10 = $data->getWorkingDir();
            } elseif (null === $data->getWorkingDir()) {
                $value_10 = $data->getWorkingDir();
            }
            $dataArray['WorkingDir'] = $value_10;
        }
        if ($data->isInitialized('entrypoint')) {
            $value_11 = $data->getEntrypoint();
            if (is_array($data->getEntrypoint())) {
                $values_4 = [];
                foreach ($data->getEntrypoint() as $value_12) {
                    $values_4[] = $value_12;
                }
                $value_11 = $values_4;
            } elseif (null === $data->getEntrypoint()) {
                $value_11 = $data->getEntrypoint();
            }
            $dataArray['Entrypoint'] = $value_11;
        }
        if ($data->isInitialized('onBuild')) {
            $value_13 = $data->getOnBuild();
            if (is_array($data->getOnBuild())) {
                $values_5 = [];
                foreach ($data->getOnBuild() as $value_14) {
                    $values_5[] = $value_14;
                }
                $value_13 = $values_5;
            } elseif (null === $data->getOnBuild()) {
                $value_13 = $data->getOnBuild();
            }
            $dataArray['OnBuild'] = $value_13;
        }
        if ($data->isInitialized('labels')) {
            $value_15 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values_6 = [];
                foreach ($data->getLabels() as $key_2 => $value_16) {
                    $values_6[$key_2] = $value_16;
                }
                $value_15 = $values_6;
            } elseif (null === $data->getLabels()) {
                $value_15 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_15;
        }
        if ($data->isInitialized('stopSignal')) {
            $value_17 = $data->getStopSignal();
            if (is_string($data->getStopSignal())) {
                $value_17 = $data->getStopSignal();
            } elseif (null === $data->getStopSignal()) {
                $value_17 = $data->getStopSignal();
            }
            $dataArray['StopSignal'] = $value_17;
        }
        if ($data->isInitialized('shell')) {
            $value_18 = $data->getShell();
            if (is_array($data->getShell())) {
                $values_7 = [];
                foreach ($data->getShell() as $value_19) {
                    $values_7[] = $value_19;
                }
                $value_18 = $values_7;
            } elseif (null === $data->getShell()) {
                $value_18 = $data->getShell();
            }
            $dataArray['Shell'] = $value_18;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ImageConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
