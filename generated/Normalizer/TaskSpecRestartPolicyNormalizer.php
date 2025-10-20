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

class TaskSpecRestartPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\TaskSpecRestartPolicyConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Condition', $data)) {
            $object->setCondition($data['Condition']);
            unset($data['Condition']);
        }
        if (array_key_exists('Delay', $data)) {
            $object->setDelay($data['Delay']);
            unset($data['Delay']);
        }
        if (array_key_exists('MaxAttempts', $data)) {
            $object->setMaxAttempts($data['MaxAttempts']);
            unset($data['MaxAttempts']);
        }
        if (array_key_exists('Window', $data)) {
            $object->setWindow($data['Window']);
            unset($data['Window']);
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
        if ($data->isInitialized('condition') && null !== $data->getCondition()) {
            $dataArray['Condition'] = $data->getCondition();
        }
        if ($data->isInitialized('delay') && null !== $data->getDelay()) {
            $dataArray['Delay'] = $data->getDelay();
        }
        if ($data->isInitialized('maxAttempts') && null !== $data->getMaxAttempts()) {
            $dataArray['MaxAttempts'] = $data->getMaxAttempts();
        }
        if ($data->isInitialized('window') && null !== $data->getWindow()) {
            $dataArray['Window'] = $data->getWindow();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\TaskSpecRestartPolicyConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
