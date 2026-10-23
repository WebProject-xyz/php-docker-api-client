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
use function is_string;

class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->labels = $value_1;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('Orchestration', $data) && null !== $data['Orchestration']) {
            $object->orchestration = $this->denormalizer->denormalize($data['Orchestration'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class, 'json', $context);
            unset($data['Orchestration']);
        } elseif (array_key_exists('Orchestration', $data)) {
            $object->orchestration = null;
            unset($data['Orchestration']);
        }
        if (array_key_exists('Raft', $data) && null !== $data['Raft']) {
            $object->raft = $this->denormalizer->denormalize($data['Raft'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class, 'json', $context);
            unset($data['Raft']);
        } elseif (array_key_exists('Raft', $data)) {
            $object->raft = null;
            unset($data['Raft']);
        }
        if (array_key_exists('Dispatcher', $data) && null !== $data['Dispatcher']) {
            $object->dispatcher = $this->denormalizer->denormalize($data['Dispatcher'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class, 'json', $context);
            unset($data['Dispatcher']);
        } elseif (array_key_exists('Dispatcher', $data)) {
            $object->dispatcher = null;
            unset($data['Dispatcher']);
        }
        if (array_key_exists('CAConfig', $data) && null !== $data['CAConfig']) {
            $object->cAConfig = $this->denormalizer->denormalize($data['CAConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class, 'json', $context);
            unset($data['CAConfig']);
        } elseif (array_key_exists('CAConfig', $data)) {
            $object->cAConfig = null;
            unset($data['CAConfig']);
        }
        if (array_key_exists('EncryptionConfig', $data) && null !== $data['EncryptionConfig']) {
            $object->encryptionConfig = $this->denormalizer->denormalize($data['EncryptionConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class, 'json', $context);
            unset($data['EncryptionConfig']);
        } elseif (array_key_exists('EncryptionConfig', $data)) {
            $object->encryptionConfig = null;
            unset($data['EncryptionConfig']);
        }
        if (array_key_exists('TaskDefaults', $data) && null !== $data['TaskDefaults']) {
            $object->taskDefaults = $this->denormalizer->denormalize($data['TaskDefaults'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class, 'json', $context);
            unset($data['TaskDefaults']);
        } elseif (array_key_exists('TaskDefaults', $data)) {
            $object->taskDefaults = null;
            unset($data['TaskDefaults']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_1 = $data->labels;
            if (is_iterable($data->labels)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->labels) {
                $value_1 = $data->labels;
            }
            $dataArray['Labels'] = $value_1;
        }
        if (array_key_exists('orchestration', get_object_vars($data)) && null !== ($data->orchestration ?? null)) {
            $normalized                 = $this->normalizer->normalize($data->orchestration, 'json', $context);
            $dataArray['Orchestration'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('raft', get_object_vars($data)) && null !== ($data->raft ?? null)) {
            $normalized_1      = $this->normalizer->normalize($data->raft, 'json', $context);
            $dataArray['Raft'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('dispatcher', get_object_vars($data)) && null !== ($data->dispatcher ?? null)) {
            $normalized_2            = $this->normalizer->normalize($data->dispatcher, 'json', $context);
            $dataArray['Dispatcher'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('cAConfig', get_object_vars($data)) && null !== ($data->cAConfig ?? null)) {
            $normalized_3          = $this->normalizer->normalize($data->cAConfig, 'json', $context);
            $dataArray['CAConfig'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('encryptionConfig', get_object_vars($data)) && null !== ($data->encryptionConfig ?? null)) {
            $normalized_4                  = $this->normalizer->normalize($data->encryptionConfig, 'json', $context);
            $dataArray['EncryptionConfig'] = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('taskDefaults', get_object_vars($data)) && null !== ($data->taskDefaults ?? null)) {
            $normalized_5              = $this->normalizer->normalize($data->taskDefaults, 'json', $context);
            $dataArray['TaskDefaults'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
