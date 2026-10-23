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
            $object->target = $value;
            unset($data['Target']);
        } elseif (array_key_exists('Target', $data)) {
            $object->target = null;
            unset($data['Target']);
        }
        if (array_key_exists('Aliases', $data) && null !== $data['Aliases']) {
            $values = [];
            foreach ($data['Aliases'] as $value_1) {
                $values[] = $value_1;
            }
            $object->aliases = $values;
            unset($data['Aliases']);
        } elseif (array_key_exists('Aliases', $data)) {
            $object->aliases = null;
            unset($data['Aliases']);
        }
        if (array_key_exists('DriverOpts', $data) && null !== $data['DriverOpts']) {
            $value_2 = $data['DriverOpts'];
            if (is_array($data['DriverOpts']) && $this->isOnlyNumericKeys($data['DriverOpts'])) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['DriverOpts'] as $key => $value_3) {
                    $values_1[$key] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data['DriverOpts']) {
                $value_2 = $data['DriverOpts'];
            }
            $object->driverOpts = $value_2;
            unset($data['DriverOpts']);
        } elseif (array_key_exists('DriverOpts', $data)) {
            $object->driverOpts = null;
            unset($data['DriverOpts']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('target', get_object_vars($data)) && null !== ($data->target ?? null)) {
            $value = $data->target;
            if (is_string($data->target)) {
                $value = $data->target;
            } elseif (null === $data->target) {
                $value = $data->target;
            }
            $dataArray['Target'] = $value;
        }
        if (array_key_exists('aliases', get_object_vars($data)) && null !== ($data->aliases ?? null)) {
            $values = [];
            foreach ($data->aliases as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['Aliases'] = $values;
        }
        if (array_key_exists('driverOpts', get_object_vars($data)) && null !== ($data->driverOpts ?? null)) {
            $value_2 = $data->driverOpts;
            if (is_iterable($data->driverOpts)) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->driverOpts as $key => $value_3) {
                    $values_1[$key] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data->driverOpts) {
                $value_2 = $data->driverOpts;
            }
            $dataArray['DriverOpts'] = $value_2;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
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
