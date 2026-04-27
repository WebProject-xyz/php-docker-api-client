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
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_1 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Labels']) {
                $value_1 = $data['Labels'];
            }
            $object->setLabels($value_1);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('Orchestration', $data) && null !== $data['Orchestration']) {
            $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class, 'json', $context));
        } elseif (array_key_exists('Orchestration', $data) && null === $data['Orchestration']) {
            $object->setOrchestration(null);
        }
        if (array_key_exists('Raft', $data) && null !== $data['Raft']) {
            $object->setRaft($this->denormalizer->denormalize($data['Raft'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class, 'json', $context));
        } elseif (array_key_exists('Raft', $data) && null === $data['Raft']) {
            $object->setRaft(null);
        }
        if (array_key_exists('Dispatcher', $data) && null !== $data['Dispatcher']) {
            $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class, 'json', $context));
        } elseif (array_key_exists('Dispatcher', $data) && null === $data['Dispatcher']) {
            $object->setDispatcher(null);
        }
        if (array_key_exists('CAConfig', $data) && null !== $data['CAConfig']) {
            $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class, 'json', $context));
        } elseif (array_key_exists('CAConfig', $data) && null === $data['CAConfig']) {
            $object->setCAConfig(null);
        }
        if (array_key_exists('EncryptionConfig', $data) && null !== $data['EncryptionConfig']) {
            $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
        } elseif (array_key_exists('EncryptionConfig', $data) && null === $data['EncryptionConfig']) {
            $object->setEncryptionConfig(null);
        }
        if (array_key_exists('TaskDefaults', $data) && null !== $data['TaskDefaults']) {
            $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class, 'json', $context));
        } elseif (array_key_exists('TaskDefaults', $data) && null === $data['TaskDefaults']) {
            $object->setTaskDefaults(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name')) {
            $value = $data->getName();
            if (is_string($data->getName())) {
                $value = $data->getName();
            } elseif (null === $data->getName()) {
                $value = $data->getName();
            }
            $dataArray['Name'] = $value;
        }
        if ($data->isInitialized('labels')) {
            $value_1 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values = [];
                foreach ($data->getLabels() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getLabels()) {
                $value_1 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_1;
        }
        if ($data->isInitialized('orchestration')) {
            $dataArray['Orchestration'] = $this->normalizer->normalize($data->getOrchestration(), 'json', $context);
        }
        if ($data->isInitialized('raft')) {
            $dataArray['Raft'] = $this->normalizer->normalize($data->getRaft(), 'json', $context);
        }
        if ($data->isInitialized('dispatcher')) {
            $dataArray['Dispatcher'] = $this->normalizer->normalize($data->getDispatcher(), 'json', $context);
        }
        if ($data->isInitialized('cAConfig')) {
            $dataArray['CAConfig'] = $this->normalizer->normalize($data->getCAConfig(), 'json', $context);
        }
        if ($data->isInitialized('encryptionConfig')) {
            $dataArray['EncryptionConfig'] = $this->normalizer->normalize($data->getEncryptionConfig(), 'json', $context);
        }
        if ($data->isInitialized('taskDefaults')) {
            $dataArray['TaskDefaults'] = $this->normalizer->normalize($data->getTaskDefaults(), 'json', $context);
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
