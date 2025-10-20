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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\ContainerCPUStatsConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('cpu_usage', $data) && null !== $data['cpu_usage']) {
            $object->setCpuUsage($this->denormalizer->denormalize($data['cpu_usage'], \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class, 'json', $context));
            unset($data['cpu_usage']);
        } elseif (array_key_exists('cpu_usage', $data) && null === $data['cpu_usage']) {
            $object->setCpuUsage(null);
        }
        if (array_key_exists('system_cpu_usage', $data) && null !== $data['system_cpu_usage']) {
            $object->setSystemCpuUsage($data['system_cpu_usage']);
            unset($data['system_cpu_usage']);
        } elseif (array_key_exists('system_cpu_usage', $data) && null === $data['system_cpu_usage']) {
            $object->setSystemCpuUsage(null);
        }
        if (array_key_exists('online_cpus', $data) && null !== $data['online_cpus']) {
            $object->setOnlineCpus($data['online_cpus']);
            unset($data['online_cpus']);
        } elseif (array_key_exists('online_cpus', $data) && null === $data['online_cpus']) {
            $object->setOnlineCpus(null);
        }
        if (array_key_exists('throttling_data', $data) && null !== $data['throttling_data']) {
            $object->setThrottlingData($this->denormalizer->denormalize($data['throttling_data'], \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class, 'json', $context));
            unset($data['throttling_data']);
        } elseif (array_key_exists('throttling_data', $data) && null === $data['throttling_data']) {
            $object->setThrottlingData(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('cpuUsage') && null !== $data->getCpuUsage()) {
            $dataArray['cpu_usage'] = $this->normalizer->normalize($data->getCpuUsage(), 'json', $context);
        }
        if ($data->isInitialized('systemCpuUsage') && null !== $data->getSystemCpuUsage()) {
            $dataArray['system_cpu_usage'] = $data->getSystemCpuUsage();
        }
        if ($data->isInitialized('onlineCpus') && null !== $data->getOnlineCpus()) {
            $dataArray['online_cpus'] = $data->getOnlineCpus();
        }
        if ($data->isInitialized('throttlingData') && null !== $data->getThrottlingData()) {
            $dataArray['throttling_data'] = $this->normalizer->normalize($data->getThrottlingData(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\ContainerCPUStatsConstraint());
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
