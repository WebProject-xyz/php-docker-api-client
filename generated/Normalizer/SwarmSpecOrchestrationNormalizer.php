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

class SwarmSpecOrchestrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('TaskHistoryRetentionLimit', $data) && null !== $data['TaskHistoryRetentionLimit']) {
            $value = $data['TaskHistoryRetentionLimit'];
            if (is_int($data['TaskHistoryRetentionLimit'])) {
                $value = $data['TaskHistoryRetentionLimit'];
            } elseif (null === $data['TaskHistoryRetentionLimit']) {
                $value = $data['TaskHistoryRetentionLimit'];
            }
            $object->taskHistoryRetentionLimit = $value;
            unset($data['TaskHistoryRetentionLimit']);
        } elseif (array_key_exists('TaskHistoryRetentionLimit', $data)) {
            $object->taskHistoryRetentionLimit = null;
            unset($data['TaskHistoryRetentionLimit']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('taskHistoryRetentionLimit', get_object_vars($data)) && null !== ($data->taskHistoryRetentionLimit ?? null)) {
            $value = $data->taskHistoryRetentionLimit;
            if (is_int($data->taskHistoryRetentionLimit)) {
                $value = $data->taskHistoryRetentionLimit;
            } elseif (null === $data->taskHistoryRetentionLimit) {
                $value = $data->taskHistoryRetentionLimit;
            }
            $dataArray['TaskHistoryRetentionLimit'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
