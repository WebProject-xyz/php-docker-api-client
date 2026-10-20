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

class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NodeDescription::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NodeDescription::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NodeDescription();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Hostname', $data) && null !== $data['Hostname']) {
            $value = $data['Hostname'];
            if (is_string($data['Hostname'])) {
                $value = $data['Hostname'];
            } elseif (null === $data['Hostname']) {
                $value = $data['Hostname'];
            }
            $object->hostname = $value;
            unset($data['Hostname']);
        } elseif (array_key_exists('Hostname', $data)) {
            $object->hostname = null;
            unset($data['Hostname']);
        }
        if (array_key_exists('Platform', $data)) {
            $object->platform = $this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\Platform::class, 'json', $context);
            unset($data['Platform']);
        }
        if (array_key_exists('Resources', $data)) {
            $object->resources = $this->denormalizer->denormalize($data['Resources'], \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class, 'json', $context);
            unset($data['Resources']);
        }
        if (array_key_exists('Engine', $data)) {
            $object->engine = $this->denormalizer->denormalize($data['Engine'], \WebProject\DockerApi\Library\Generated\Model\EngineDescription::class, 'json', $context);
            unset($data['Engine']);
        }
        if (array_key_exists('TLSInfo', $data)) {
            $object->tLSInfo = $this->denormalizer->denormalize($data['TLSInfo'], \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class, 'json', $context);
            unset($data['TLSInfo']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $value = $data->hostname;
            if (is_string($data->hostname)) {
                $value = $data->hostname;
            } elseif (null === $data->hostname) {
                $value = $data->hostname;
            }
            $dataArray['Hostname'] = $value;
        }
        if (array_key_exists('platform', get_object_vars($data)) && null !== ($data->platform ?? null)) {
            $normalized            = $this->normalizer->normalize($data->platform, 'json', $context);
            $dataArray['Platform'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('resources', get_object_vars($data)) && null !== ($data->resources ?? null)) {
            $normalized_1           = $this->normalizer->normalize($data->resources, 'json', $context);
            $dataArray['Resources'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('engine', get_object_vars($data)) && null !== ($data->engine ?? null)) {
            $normalized_2        = $this->normalizer->normalize($data->engine, 'json', $context);
            $dataArray['Engine'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('tLSInfo', get_object_vars($data)) && null !== ($data->tLSInfo ?? null)) {
            $normalized_3         = $this->normalizer->normalize($data->tLSInfo, 'json', $context);
            $dataArray['TLSInfo'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NodeDescription::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
