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

class TaskSpecContainerSpecDNSConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Nameservers', $data) && null !== $data['Nameservers']) {
            $values = [];
            foreach ($data['Nameservers'] as $value) {
                $values[] = $value;
            }
            $object->nameservers = $values;
            unset($data['Nameservers']);
        } elseif (array_key_exists('Nameservers', $data)) {
            $object->nameservers = null;
            unset($data['Nameservers']);
        }
        if (array_key_exists('Search', $data) && null !== $data['Search']) {
            $values_1 = [];
            foreach ($data['Search'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->search = $values_1;
            unset($data['Search']);
        } elseif (array_key_exists('Search', $data)) {
            $object->search = null;
            unset($data['Search']);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $values_2 = [];
            foreach ($data['Options'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->options = $values_2;
            unset($data['Options']);
        } elseif (array_key_exists('Options', $data)) {
            $object->options = null;
            unset($data['Options']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('nameservers', get_object_vars($data)) && null !== ($data->nameservers ?? null)) {
            $values = [];
            foreach ($data->nameservers as $value) {
                $values[] = $value;
            }
            $dataArray['Nameservers'] = $values;
        }
        if (array_key_exists('search', get_object_vars($data)) && null !== ($data->search ?? null)) {
            $values_1 = [];
            foreach ($data->search as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Search'] = $values_1;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $values_2 = [];
            foreach ($data->options as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Options'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
