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
use function is_string;

class ServiceInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('VIP', $data) && null !== $data['VIP']) {
            $value = $data['VIP'];
            if (is_string($data['VIP'])) {
                $value = $data['VIP'];
            } elseif (null === $data['VIP']) {
                $value = $data['VIP'];
            }
            $object->setVIP($value);
        } elseif (array_key_exists('VIP', $data) && null === $data['VIP']) {
            $object->setVIP(null);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $value_1 = $data['Ports'];
            if (is_array($data['Ports']) && $this->isOnlyNumericKeys($data['Ports'])) {
                $values = [];
                foreach ($data['Ports'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Ports']) {
                $value_1 = $data['Ports'];
            }
            $object->setPorts($value_1);
        } elseif (array_key_exists('Ports', $data) && null === $data['Ports']) {
            $object->setPorts(null);
        }
        if (array_key_exists('LocalLBIndex', $data) && null !== $data['LocalLBIndex']) {
            $value_3 = $data['LocalLBIndex'];
            if (is_int($data['LocalLBIndex'])) {
                $value_3 = $data['LocalLBIndex'];
            } elseif (null === $data['LocalLBIndex']) {
                $value_3 = $data['LocalLBIndex'];
            }
            $object->setLocalLBIndex($value_3);
        } elseif (array_key_exists('LocalLBIndex', $data) && null === $data['LocalLBIndex']) {
            $object->setLocalLBIndex(null);
        }
        if (array_key_exists('Tasks', $data) && null !== $data['Tasks']) {
            $value_4 = $data['Tasks'];
            if (is_array($data['Tasks']) && $this->isOnlyNumericKeys($data['Tasks'])) {
                $values_1 = [];
                foreach ($data['Tasks'] as $value_5) {
                    $values_1[] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\NetworkTaskInfo::class, 'json', $context);
                }
                $value_4 = $values_1;
            } elseif (null === $data['Tasks']) {
                $value_4 = $data['Tasks'];
            }
            $object->setTasks($value_4);
        } elseif (array_key_exists('Tasks', $data) && null === $data['Tasks']) {
            $object->setTasks(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('vIP')) {
            $value = $data->getVIP();
            if (is_string($data->getVIP())) {
                $value = $data->getVIP();
            } elseif (null === $data->getVIP()) {
                $value = $data->getVIP();
            }
            $dataArray['VIP'] = $value;
        }
        if ($data->isInitialized('ports')) {
            $value_1 = $data->getPorts();
            if (is_array($data->getPorts())) {
                $values = [];
                foreach ($data->getPorts() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getPorts()) {
                $value_1 = $data->getPorts();
            }
            $dataArray['Ports'] = $value_1;
        }
        if ($data->isInitialized('localLBIndex')) {
            $value_3 = $data->getLocalLBIndex();
            if (is_int($data->getLocalLBIndex())) {
                $value_3 = $data->getLocalLBIndex();
            } elseif (null === $data->getLocalLBIndex()) {
                $value_3 = $data->getLocalLBIndex();
            }
            $dataArray['LocalLBIndex'] = $value_3;
        }
        if ($data->isInitialized('tasks')) {
            $value_4 = $data->getTasks();
            if (is_array($data->getTasks())) {
                $values_1 = [];
                foreach ($data->getTasks() as $value_5) {
                    $values_1[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $value_4 = $values_1;
            } elseif (null === $data->getTasks()) {
                $value_4 = $data->getTasks();
            }
            $dataArray['Tasks'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
