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

class ServiceServiceStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('RunningTasks', $data)) {
            $object->setRunningTasks($data['RunningTasks']);
            unset($data['RunningTasks']);
        }
        if (array_key_exists('DesiredTasks', $data)) {
            $object->setDesiredTasks($data['DesiredTasks']);
            unset($data['DesiredTasks']);
        }
        if (array_key_exists('CompletedTasks', $data)) {
            $object->setCompletedTasks($data['CompletedTasks']);
            unset($data['CompletedTasks']);
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
        if ($data->isInitialized('runningTasks') && null !== $data->getRunningTasks()) {
            $dataArray['RunningTasks'] = $data->getRunningTasks();
        }
        if ($data->isInitialized('desiredTasks') && null !== $data->getDesiredTasks()) {
            $dataArray['DesiredTasks'] = $data->getDesiredTasks();
        }
        if ($data->isInitialized('completedTasks') && null !== $data->getCompletedTasks()) {
            $dataArray['CompletedTasks'] = $data->getCompletedTasks();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
