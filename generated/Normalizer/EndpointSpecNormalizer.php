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

class EndpointSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointSpec();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Mode', $data) && null !== $data['Mode']) {
            $value = $data['Mode'];
            if (is_string($data['Mode'])) {
                $value = $data['Mode'];
            } elseif (null === $data['Mode']) {
                $value = $data['Mode'];
            }
            $object->setMode($value);
        } elseif (array_key_exists('Mode', $data) && null === $data['Mode']) {
            $object->setMode(null);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $value_1 = $data['Ports'];
            if (is_array($data['Ports']) && $this->isOnlyNumericKeys($data['Ports'])) {
                $values = [];
                foreach ($data['Ports'] as $value_2) {
                    $values[] = $this->denormalizer->denormalize($value_2, \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data['Ports']) {
                $value_1 = $data['Ports'];
            }
            $object->setPorts($value_1);
        } elseif (array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('mode')) {
            $value = $data->getMode();
            if (is_string($data->getMode())) {
                $value = $data->getMode();
            } elseif (null === $data->getMode()) {
                $value = $data->getMode();
            }
            $dataArray['Mode'] = $value;
        }
        if ($data->isInitialized('ports')) {
            $value_1 = $data->getPorts();
            if (is_array($data->getPorts())) {
                $values = [];
                foreach ($data->getPorts() as $value_2) {
                    $values[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $value_1 = $values;
            } elseif (null === $data->getPorts()) {
                $value_1 = $data->getPorts();
            }
            $dataArray['Ports'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
