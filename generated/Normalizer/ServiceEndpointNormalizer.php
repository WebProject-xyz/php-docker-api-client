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

class ServiceEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class, 'json', $context));
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $value = $data['Ports'];
            if (is_array($data['Ports']) && $this->isOnlyNumericKeys($data['Ports'])) {
                $values = [];
                foreach ($data['Ports'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data['Ports']) {
                $value = $data['Ports'];
            }
            $object->setPorts($value);
        } elseif (array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }
        if (array_key_exists('VirtualIPs', $data) && null !== $data['VirtualIPs']) {
            $value_2 = $data['VirtualIPs'];
            if (is_array($data['VirtualIPs']) && $this->isOnlyNumericKeys($data['VirtualIPs'])) {
                $values_1 = [];
                foreach ($data['VirtualIPs'] as $value_3) {
                    $values_1[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data['VirtualIPs']) {
                $value_2 = $data['VirtualIPs'];
            }
            $object->setVirtualIPs($value_2);
        } elseif (array_key_exists('VirtualIPs', $data) && null === $data['VirtualIPs']) {
            $object->setVirtualIPs(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['Spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('ports')) {
            $value = $data->getPorts();
            if (is_array($data->getPorts())) {
                $values = [];
                foreach ($data->getPorts() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data->getPorts()) {
                $value = $data->getPorts();
            }
            $dataArray['Ports'] = $value;
        }
        if ($data->isInitialized('virtualIPs')) {
            $value_2 = $data->getVirtualIPs();
            if (is_array($data->getVirtualIPs())) {
                $values_1 = [];
                foreach ($data->getVirtualIPs() as $value_3) {
                    $values_1[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $value_2 = $values_1;
            } elseif (null === $data->getVirtualIPs()) {
                $value_2 = $data->getVirtualIPs();
            }
            $dataArray['VirtualIPs'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
