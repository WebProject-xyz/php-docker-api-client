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

class NetworkSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('SandboxID', $data) && null !== $data['SandboxID']) {
            $value = $data['SandboxID'];
            if (is_string($data['SandboxID'])) {
                $value = $data['SandboxID'];
            } elseif (null === $data['SandboxID']) {
                $value = $data['SandboxID'];
            }
            $object->sandboxID = $value;
            unset($data['SandboxID']);
        } elseif (array_key_exists('SandboxID', $data)) {
            $object->sandboxID = null;
            unset($data['SandboxID']);
        }
        if (array_key_exists('SandboxKey', $data) && null !== $data['SandboxKey']) {
            $value_1 = $data['SandboxKey'];
            if (is_string($data['SandboxKey'])) {
                $value_1 = $data['SandboxKey'];
            } elseif (null === $data['SandboxKey']) {
                $value_1 = $data['SandboxKey'];
            }
            $object->sandboxKey = $value_1;
            unset($data['SandboxKey']);
        } elseif (array_key_exists('SandboxKey', $data)) {
            $object->sandboxKey = null;
            unset($data['SandboxKey']);
        }
        if (array_key_exists('Ports', $data) && null !== $data['Ports']) {
            $value_2 = $data['Ports'];
            if (is_array($data['Ports']) && $this->isOnlyNumericKeys($data['Ports'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Ports'] as $key => $value_3) {
                    $values_1 = [];
                    foreach ($value_3 as $value_4) {
                        $values_1[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\PortBinding::class, 'json', $context);
                    }
                    $values[$key] = $values_1;
                }
                $value_2 = $values;
            } elseif (null === $data['Ports']) {
                $value_2 = $data['Ports'];
            }
            $object->ports = $value_2;
            unset($data['Ports']);
        } elseif (array_key_exists('Ports', $data)) {
            $object->ports = null;
            unset($data['Ports']);
        }
        if (array_key_exists('Networks', $data)) {
            $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data['Networks'] as $key_1 => $value_5) {
                $values_2[$key_1] = $this->denormalizer->denormalize($value_5, \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class, 'json', $context);
            }
            $object->networks = $values_2;
            unset($data['Networks']);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_6;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('sandboxID', get_object_vars($data)) && null !== ($data->sandboxID ?? null)) {
            $value = $data->sandboxID;
            if (is_string($data->sandboxID)) {
                $value = $data->sandboxID;
            } elseif (null === $data->sandboxID) {
                $value = $data->sandboxID;
            }
            $dataArray['SandboxID'] = $value;
        }
        if (array_key_exists('sandboxKey', get_object_vars($data)) && null !== ($data->sandboxKey ?? null)) {
            $value_1 = $data->sandboxKey;
            if (is_string($data->sandboxKey)) {
                $value_1 = $data->sandboxKey;
            } elseif (null === $data->sandboxKey) {
                $value_1 = $data->sandboxKey;
            }
            $dataArray['SandboxKey'] = $value_1;
        }
        if (array_key_exists('ports', get_object_vars($data)) && null !== ($data->ports ?? null)) {
            $value_2 = $data->ports;
            if (is_iterable($data->ports)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->ports as $key => $value_3) {
                    $values_1 = [];
                    foreach ($value_3 as $value_4) {
                        $normalized = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                        $values_1[] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
                    }
                    $values[$key] = $values_1;
                }
                $value_2 = $values;
            } elseif (null === $data->ports) {
                $value_2 = $data->ports;
            }
            $dataArray['Ports'] = $value_2;
        }
        if (array_key_exists('networks', get_object_vars($data)) && null !== ($data->networks ?? null)) {
            $values_2 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
            foreach ($data->networks as $key_1 => $value_5) {
                $normalized_1     = null === $value_5 ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_2[$key_1] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['Networks'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
