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

class ContainerSummaryHostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('NetworkMode', $data) && null !== $data['NetworkMode']) {
            $value = $data['NetworkMode'];
            if (is_string($data['NetworkMode'])) {
                $value = $data['NetworkMode'];
            } elseif (null === $data['NetworkMode']) {
                $value = $data['NetworkMode'];
            }
            $object->setNetworkMode($value);
        } elseif (array_key_exists('NetworkMode', $data) && null === $data['NetworkMode']) {
            $object->setNetworkMode(null);
        }
        if (array_key_exists('Annotations', $data) && null !== $data['Annotations']) {
            $value_1 = $data['Annotations'];
            if (is_array($data['Annotations']) && $this->isOnlyNumericKeys($data['Annotations'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Annotations'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Annotations']) {
                $value_1 = $data['Annotations'];
            }
            $object->setAnnotations($value_1);
        } elseif (array_key_exists('Annotations', $data) && null === $data['Annotations']) {
            $object->setAnnotations(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('networkMode')) {
            $value = $data->getNetworkMode();
            if (is_string($data->getNetworkMode())) {
                $value = $data->getNetworkMode();
            } elseif (null === $data->getNetworkMode()) {
                $value = $data->getNetworkMode();
            }
            $dataArray['NetworkMode'] = $value;
        }
        if ($data->isInitialized('annotations')) {
            $value_1 = $data->getAnnotations();
            if (is_object($data->getAnnotations())) {
                $values = [];
                foreach ($data->getAnnotations() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getAnnotations()) {
                $value_1 = $data->getAnnotations();
            }
            $dataArray['Annotations'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
