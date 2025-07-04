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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (array_key_exists('Labels', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
            unset($data['Labels']);
        }
        if (array_key_exists('Orchestration', $data) && null !== $data['Orchestration']) {
            $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class, 'json', $context));
            unset($data['Orchestration']);
        } elseif (array_key_exists('Orchestration', $data) && null === $data['Orchestration']) {
            $object->setOrchestration(null);
        }
        if (array_key_exists('Raft', $data)) {
            $object->setRaft($this->denormalizer->denormalize($data['Raft'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class, 'json', $context));
            unset($data['Raft']);
        }
        if (array_key_exists('Dispatcher', $data) && null !== $data['Dispatcher']) {
            $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class, 'json', $context));
            unset($data['Dispatcher']);
        } elseif (array_key_exists('Dispatcher', $data) && null === $data['Dispatcher']) {
            $object->setDispatcher(null);
        }
        if (array_key_exists('CAConfig', $data) && null !== $data['CAConfig']) {
            $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class, 'json', $context));
            unset($data['CAConfig']);
        } elseif (array_key_exists('CAConfig', $data) && null === $data['CAConfig']) {
            $object->setCAConfig(null);
        }
        if (array_key_exists('EncryptionConfig', $data)) {
            $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
            unset($data['EncryptionConfig']);
        }
        if (array_key_exists('TaskDefaults', $data)) {
            $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class, 'json', $context));
            unset($data['TaskDefaults']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values = [];
            foreach ($data->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if ($data->isInitialized('orchestration') && null !== $data->getOrchestration()) {
            $dataArray['Orchestration'] = $this->normalizer->normalize($data->getOrchestration(), 'json', $context);
        }
        if ($data->isInitialized('raft') && null !== $data->getRaft()) {
            $dataArray['Raft'] = $this->normalizer->normalize($data->getRaft(), 'json', $context);
        }
        if ($data->isInitialized('dispatcher') && null !== $data->getDispatcher()) {
            $dataArray['Dispatcher'] = $this->normalizer->normalize($data->getDispatcher(), 'json', $context);
        }
        if ($data->isInitialized('cAConfig') && null !== $data->getCAConfig()) {
            $dataArray['CAConfig'] = $this->normalizer->normalize($data->getCAConfig(), 'json', $context);
        }
        if ($data->isInitialized('encryptionConfig') && null !== $data->getEncryptionConfig()) {
            $dataArray['EncryptionConfig'] = $this->normalizer->normalize($data->getEncryptionConfig(), 'json', $context);
        }
        if ($data->isInitialized('taskDefaults') && null !== $data->getTaskDefaults()) {
            $dataArray['TaskDefaults'] = $this->normalizer->normalize($data->getTaskDefaults(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
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
