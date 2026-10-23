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
            $object->user = $value;
            unset($data['User']);
        } elseif (array_key_exists('User', $data)) {
            $object->user = null;
            unset($data['User']);
        }
        if (array_key_exists('ExposedPorts', $data) && null !== $data['ExposedPorts']) {
            $value_1 = $data['ExposedPorts'];
            if (is_array($data['ExposedPorts']) && $this->isOnlyNumericKeys($data['ExposedPorts'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['ExposedPorts'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['ExposedPorts']) {
                $value_1 = $data['ExposedPorts'];
            }
            $object->exposedPorts = $value_1;
            unset($data['ExposedPorts']);
        } elseif (array_key_exists('ExposedPorts', $data)) {
            $object->exposedPorts = null;
            unset($data['ExposedPorts']);
        }
        if (array_key_exists('Env', $data) && null !== $data['Env']) {
            $values_1 = [];
            foreach ($data['Env'] as $value_3) {
                $values_1[] = $value_3;
            }
            $object->env = $values_1;
            unset($data['Env']);
        } elseif (array_key_exists('Env', $data)) {
            $object->env = null;
            unset($data['Env']);
        }
        if (array_key_exists('Cmd', $data) && null !== $data['Cmd']) {
            $values_2 = [];
            foreach ($data['Cmd'] as $value_4) {
                $values_2[] = $value_4;
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
            $value_5 = $data['ArgsEscaped'];
            if (is_bool($data['ArgsEscaped'])) {
                $value_5 = $data['ArgsEscaped'];
            } elseif (null === $data['ArgsEscaped']) {
                $value_5 = $data['ArgsEscaped'];
            }
            $object->argsEscaped = $value_5;
            unset($data['ArgsEscaped']);
        } elseif (array_key_exists('ArgsEscaped', $data)) {
            $object->argsEscaped = null;
            unset($data['ArgsEscaped']);
        }
        if (array_key_exists('Volumes', $data) && null !== $data['Volumes']) {
            $value_6 = $data['Volumes'];
            if (is_array($data['Volumes']) && $this->isOnlyNumericKeys($data['Volumes'])) {
                $values_3 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Volumes'] as $key_1 => $value_7) {
                    $values_3[$key_1] = $value_7;
                }
                $value_6 = $values_3;
            } elseif (null === $data['Volumes']) {
                $value_6 = $data['Volumes'];
            }
            $object->volumes = $value_6;
            unset($data['Volumes']);
        } elseif (array_key_exists('Volumes', $data)) {
            $object->volumes = null;
            unset($data['Volumes']);
        }
        if (array_key_exists('WorkingDir', $data) && null !== $data['WorkingDir']) {
            $value_8 = $data['WorkingDir'];
            if (is_string($data['WorkingDir'])) {
                $value_8 = $data['WorkingDir'];
            } elseif (null === $data['WorkingDir']) {
                $value_8 = $data['WorkingDir'];
            }
            $object->workingDir = $value_8;
            unset($data['WorkingDir']);
        } elseif (array_key_exists('WorkingDir', $data)) {
            $object->workingDir = null;
            unset($data['WorkingDir']);
        }
        if (array_key_exists('Entrypoint', $data) && null !== $data['Entrypoint']) {
            $values_4 = [];
            foreach ($data['Entrypoint'] as $value_9) {
                $values_4[] = $value_9;
            }
            $object->entrypoint = $values_4;
            unset($data['Entrypoint']);
        } elseif (array_key_exists('Entrypoint', $data)) {
            $object->entrypoint = null;
            unset($data['Entrypoint']);
        }
        if (array_key_exists('OnBuild', $data) && null !== $data['OnBuild']) {
            $values_5 = [];
            foreach ($data['OnBuild'] as $value_10) {
                $values_5[] = $value_10;
            }
            $object->onBuild = $values_5;
            unset($data['OnBuild']);
        } elseif (array_key_exists('OnBuild', $data)) {
            $object->onBuild = null;
            unset($data['OnBuild']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_11 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_6 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key_2 => $value_12) {
                    $values_6[$key_2] = $value_12;
                }
                $value_11 = $values_6;
            } elseif (null === $data['Labels']) {
                $value_11 = $data['Labels'];
            }
            $object->labels = $value_11;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('StopSignal', $data) && null !== $data['StopSignal']) {
            $value_13 = $data['StopSignal'];
            if (is_string($data['StopSignal'])) {
                $value_13 = $data['StopSignal'];
            } elseif (null === $data['StopSignal']) {
                $value_13 = $data['StopSignal'];
            }
            $object->stopSignal = $value_13;
            unset($data['StopSignal']);
        } elseif (array_key_exists('StopSignal', $data)) {
            $object->stopSignal = null;
            unset($data['StopSignal']);
        }
        if (array_key_exists('Shell', $data) && null !== $data['Shell']) {
            $values_7 = [];
            foreach ($data['Shell'] as $value_14) {
                $values_7[] = $value_14;
            }
            $object->shell = $values_7;
            unset($data['Shell']);
        } elseif (array_key_exists('Shell', $data)) {
            $object->shell = null;
            unset($data['Shell']);
        }
        foreach ($data as $key_3 => $value_15) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_15;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $value = $data->user;
            if (is_string($data->user)) {
                $value = $data->user;
            } elseif (null === $data->user) {
                $value = $data->user;
            }
            $dataArray['User'] = $value;
        }
        if (array_key_exists('exposedPorts', get_object_vars($data)) && null !== ($data->exposedPorts ?? null)) {
            $value_1 = $data->exposedPorts;
            if (is_iterable($data->exposedPorts)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->exposedPorts as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->exposedPorts) {
                $value_1 = $data->exposedPorts;
            }
            $dataArray['ExposedPorts'] = $value_1;
        }
        if (array_key_exists('env', get_object_vars($data)) && null !== ($data->env ?? null)) {
            $values_1 = [];
            foreach ($data->env as $value_3) {
                $values_1[] = $value_3;
            }
            $dataArray['Env'] = $values_1;
        }
        if (array_key_exists('cmd', get_object_vars($data)) && null !== ($data->cmd ?? null)) {
            $values_2 = [];
            foreach ($data->cmd as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['Cmd'] = $values_2;
        }
        if (array_key_exists('healthcheck', get_object_vars($data)) && null !== ($data->healthcheck ?? null)) {
            $normalized               = $this->normalizer->normalize($data->healthcheck, 'json', $context);
            $dataArray['Healthcheck'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('argsEscaped', get_object_vars($data)) && null !== ($data->argsEscaped ?? null)) {
            $value_5 = $data->argsEscaped;
            if (is_bool($data->argsEscaped)) {
                $value_5 = $data->argsEscaped;
            } elseif (null === $data->argsEscaped) {
                $value_5 = $data->argsEscaped;
            }
            $dataArray['ArgsEscaped'] = $value_5;
        }
        if (array_key_exists('volumes', get_object_vars($data)) && null !== ($data->volumes ?? null)) {
            $value_6 = $data->volumes;
            if (is_iterable($data->volumes)) {
                $values_3 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->volumes as $key_1 => $value_7) {
                    $values_3[$key_1] = $value_7;
                }
                $value_6 = $values_3;
            } elseif (null === $data->volumes) {
                $value_6 = $data->volumes;
            }
            $dataArray['Volumes'] = $value_6;
        }
        if (array_key_exists('workingDir', get_object_vars($data)) && null !== ($data->workingDir ?? null)) {
            $value_8 = $data->workingDir;
            if (is_string($data->workingDir)) {
                $value_8 = $data->workingDir;
            } elseif (null === $data->workingDir) {
                $value_8 = $data->workingDir;
            }
            $dataArray['WorkingDir'] = $value_8;
        }
        if (array_key_exists('entrypoint', get_object_vars($data)) && null !== ($data->entrypoint ?? null)) {
            $values_4 = [];
            foreach ($data->entrypoint as $value_9) {
                $values_4[] = $value_9;
            }
            $dataArray['Entrypoint'] = $values_4;
        }
        if (array_key_exists('onBuild', get_object_vars($data)) && null !== ($data->onBuild ?? null)) {
            $values_5 = [];
            foreach ($data->onBuild as $value_10) {
                $values_5[] = $value_10;
            }
            $dataArray['OnBuild'] = $values_5;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_11 = $data->labels;
            if (is_iterable($data->labels)) {
                $values_6 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key_2 => $value_12) {
                    $values_6[$key_2] = $value_12;
                }
                $value_11 = $values_6;
            } elseif (null === $data->labels) {
                $value_11 = $data->labels;
            }
            $dataArray['Labels'] = $value_11;
        }
        if (array_key_exists('stopSignal', get_object_vars($data)) && null !== ($data->stopSignal ?? null)) {
            $value_13 = $data->stopSignal;
            if (is_string($data->stopSignal)) {
                $value_13 = $data->stopSignal;
            } elseif (null === $data->stopSignal) {
                $value_13 = $data->stopSignal;
            }
            $dataArray['StopSignal'] = $value_13;
        }
        if (array_key_exists('shell', get_object_vars($data)) && null !== ($data->shell ?? null)) {
            $values_7 = [];
            foreach ($data->shell as $value_14) {
                $values_7[] = $value_14;
            }
            $dataArray['Shell'] = $values_7;
        }
        foreach ($data->additionalPropertyEntries() as $key_3 => $value_15) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_15;
            }
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
