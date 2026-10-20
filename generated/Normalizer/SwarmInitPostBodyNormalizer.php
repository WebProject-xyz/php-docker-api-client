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

class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ForceNewCluster', $data) && is_int($data['ForceNewCluster'])) {
            $data['ForceNewCluster'] = (bool) $data['ForceNewCluster'];
        }
        if (array_key_exists('ListenAddr', $data)) {
            $object->listenAddr = $data['ListenAddr'];
            unset($data['ListenAddr']);
        }
        if (array_key_exists('AdvertiseAddr', $data)) {
            $object->advertiseAddr = $data['AdvertiseAddr'];
            unset($data['AdvertiseAddr']);
        }
        if (array_key_exists('DataPathAddr', $data)) {
            $object->dataPathAddr = $data['DataPathAddr'];
            unset($data['DataPathAddr']);
        }
        if (array_key_exists('DataPathPort', $data)) {
            $object->dataPathPort = $data['DataPathPort'];
            unset($data['DataPathPort']);
        }
        if (array_key_exists('DefaultAddrPool', $data)) {
            $values = [];
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->defaultAddrPool = $values;
            unset($data['DefaultAddrPool']);
        }
        if (array_key_exists('ForceNewCluster', $data)) {
            $object->forceNewCluster = $data['ForceNewCluster'];
            unset($data['ForceNewCluster']);
        }
        if (array_key_exists('SubnetSize', $data)) {
            $object->subnetSize = $data['SubnetSize'];
            unset($data['SubnetSize']);
        }
        if (array_key_exists('Spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class, 'json', $context);
            unset($data['Spec']);
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
        if (array_key_exists('listenAddr', get_object_vars($data)) && null !== ($data->listenAddr ?? null)) {
            $dataArray['ListenAddr'] = $data->listenAddr;
        }
        if (array_key_exists('advertiseAddr', get_object_vars($data)) && null !== ($data->advertiseAddr ?? null)) {
            $dataArray['AdvertiseAddr'] = $data->advertiseAddr;
        }
        if (array_key_exists('dataPathAddr', get_object_vars($data)) && null !== ($data->dataPathAddr ?? null)) {
            $dataArray['DataPathAddr'] = $data->dataPathAddr;
        }
        if (array_key_exists('dataPathPort', get_object_vars($data)) && null !== ($data->dataPathPort ?? null)) {
            $dataArray['DataPathPort'] = $data->dataPathPort;
        }
        if (array_key_exists('defaultAddrPool', get_object_vars($data)) && null !== ($data->defaultAddrPool ?? null)) {
            $values = [];
            foreach ($data->defaultAddrPool as $value) {
                $values[] = $value;
            }
            $dataArray['DefaultAddrPool'] = $values;
        }
        if (array_key_exists('forceNewCluster', get_object_vars($data)) && null !== ($data->forceNewCluster ?? null)) {
            $dataArray['ForceNewCluster'] = $data->forceNewCluster;
        }
        if (array_key_exists('subnetSize', get_object_vars($data)) && null !== ($data->subnetSize ?? null)) {
            $dataArray['SubnetSize'] = $data->subnetSize;
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $normalized        = $this->normalizer->normalize($data->spec, 'json', $context);
            $dataArray['Spec'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
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
        return [\WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
