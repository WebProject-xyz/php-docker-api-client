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

class ContainerCPUStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('cpu_usage', $data) && null !== $data['cpu_usage']) {
            $object->cpuUsage = $this->denormalizer->denormalize($data['cpu_usage'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class, 'json', $context);
            unset($data['cpu_usage']);
        } elseif (array_key_exists('cpu_usage', $data)) {
            $object->cpuUsage = null;
            unset($data['cpu_usage']);
        }
        if (array_key_exists('system_cpu_usage', $data) && null !== $data['system_cpu_usage']) {
            $value = $data['system_cpu_usage'];
            if (is_int($data['system_cpu_usage'])) {
                $value = $data['system_cpu_usage'];
            } elseif (null === $data['system_cpu_usage']) {
                $value = $data['system_cpu_usage'];
            }
            $object->systemCpuUsage = $value;
            unset($data['system_cpu_usage']);
        } elseif (array_key_exists('system_cpu_usage', $data)) {
            $object->systemCpuUsage = null;
            unset($data['system_cpu_usage']);
        }
        if (array_key_exists('online_cpus', $data) && null !== $data['online_cpus']) {
            $value_1 = $data['online_cpus'];
            if (is_int($data['online_cpus'])) {
                $value_1 = $data['online_cpus'];
            } elseif (null === $data['online_cpus']) {
                $value_1 = $data['online_cpus'];
            }
            $object->onlineCpus = $value_1;
            unset($data['online_cpus']);
        } elseif (array_key_exists('online_cpus', $data)) {
            $object->onlineCpus = null;
            unset($data['online_cpus']);
        }
        if (array_key_exists('throttling_data', $data) && null !== $data['throttling_data']) {
            $object->throttlingData = $this->denormalizer->denormalize($data['throttling_data'], \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class, 'json', $context);
            unset($data['throttling_data']);
        } elseif (array_key_exists('throttling_data', $data)) {
            $object->throttlingData = null;
            unset($data['throttling_data']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('cpuUsage', get_object_vars($data)) && null !== ($data->cpuUsage ?? null)) {
            $normalized             = $this->normalizer->normalize($data->cpuUsage, 'json', $context);
            $dataArray['cpu_usage'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('systemCpuUsage', get_object_vars($data)) && null !== ($data->systemCpuUsage ?? null)) {
            $value = $data->systemCpuUsage;
            if (is_int($data->systemCpuUsage)) {
                $value = $data->systemCpuUsage;
            } elseif (null === $data->systemCpuUsage) {
                $value = $data->systemCpuUsage;
            }
            $dataArray['system_cpu_usage'] = $value;
        }
        if (array_key_exists('onlineCpus', get_object_vars($data)) && null !== ($data->onlineCpus ?? null)) {
            $value_1 = $data->onlineCpus;
            if (is_int($data->onlineCpus)) {
                $value_1 = $data->onlineCpus;
            } elseif (null === $data->onlineCpus) {
                $value_1 = $data->onlineCpus;
            }
            $dataArray['online_cpus'] = $value_1;
        }
        if (array_key_exists('throttlingData', get_object_vars($data)) && null !== ($data->throttlingData ?? null)) {
            $normalized_1                 = $this->normalizer->normalize($data->throttlingData, 'json', $context);
            $dataArray['throttling_data'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
