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

class NetworkAttachmentConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Target', $data) && null !== $data['Target']) {
            $value = $data['Target'];
            if (is_string($data['Target'])) {
                $value = $data['Target'];
            } elseif (null === $data['Target']) {
                $value = $data['Target'];
            }
            $object->setTarget($value);
        } elseif (array_key_exists('Target', $data) && null === $data['Target']) {
            $object->setTarget(null);
        }
        if (array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
            $value_1 = $data['Aliases'];
            if (is_array($data['Aliases']) && $this->isOnlyNumericKeys($data['Aliases'])) {
                $values = [];
                foreach ($data['Aliases'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Aliases']) {
                $value_1 = $data['Aliases'];
            }
            $object->setAliases($value_1);
        } elseif (array_key_exists('Aliases', $data) && null === $data['Aliases']) {
            $object->setAliases(null);
        }
        if (array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
            $value_3 = $data['DriverOpts'];
            if (is_array($data['DriverOpts']) && $this->isOnlyNumericKeys($data['DriverOpts'])) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_4) {
                    $values_1[$key] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data['DriverOpts']) {
                $value_3 = $data['DriverOpts'];
            }
            $object->setDriverOpts($value_3);
        } elseif (array_key_exists('DriverOpts', $data) && null === $data['DriverOpts']) {
            $object->setDriverOpts(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('target')) {
            $value = $data->getTarget();
            if (is_string($data->getTarget())) {
                $value = $data->getTarget();
            } elseif (null === $data->getTarget()) {
                $value = $data->getTarget();
            }
            $dataArray['Target'] = $value;
        }
        if ($data->isInitialized('aliases')) {
            $value_1 = $data->getAliases();
            if (is_array($data->getAliases())) {
                $values = [];
                foreach ($data->getAliases() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getAliases()) {
                $value_1 = $data->getAliases();
            }
            $dataArray['Aliases'] = $value_1;
        }
        if ($data->isInitialized('driverOpts')) {
            $value_3 = $data->getDriverOpts();
            if (is_object($data->getDriverOpts())) {
                $values_1 = [];
                foreach ($data->getDriverOpts() as $key => $value_4) {
                    $values_1[$key] = $value_4;
                }
                $value_3 = $values_1;
            } elseif (null === $data->getDriverOpts()) {
                $value_3 = $data->getDriverOpts();
            }
            $dataArray['DriverOpts'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
