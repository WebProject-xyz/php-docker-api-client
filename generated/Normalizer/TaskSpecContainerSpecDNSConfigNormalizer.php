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
            $value = $data['Nameservers'];
            if (is_array($data['Nameservers']) && $this->isOnlyNumericKeys($data['Nameservers'])) {
                $values = [];
                foreach ($data['Nameservers'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['Nameservers']) {
                $value = $data['Nameservers'];
            }
            $object->setNameservers($value);
        } elseif (array_key_exists('Nameservers', $data) && null === $data['Nameservers']) {
            $object->setNameservers(null);
        }
        if (array_key_exists('Search', $data) && null !== $data['Search']) {
            $value_2 = $data['Search'];
            if (is_array($data['Search']) && $this->isOnlyNumericKeys($data['Search'])) {
                $values_1 = [];
                foreach ($data['Search'] as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data['Search']) {
                $value_2 = $data['Search'];
            }
            $object->setSearch($value_2);
        } elseif (array_key_exists('Search', $data) && null === $data['Search']) {
            $object->setSearch(null);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_4 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values_2 = [];
                foreach ($data['Options'] as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            } elseif (null === $data['Options']) {
                $value_4 = $data['Options'];
            }
            $object->setOptions($value_4);
        } elseif (array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('nameservers')) {
            $value = $data->getNameservers();
            if (is_array($data->getNameservers())) {
                $values = [];
                foreach ($data->getNameservers() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->getNameservers()) {
                $value = $data->getNameservers();
            }
            $dataArray['Nameservers'] = $value;
        }
        if ($data->isInitialized('search')) {
            $value_2 = $data->getSearch();
            if (is_array($data->getSearch())) {
                $values_1 = [];
                foreach ($data->getSearch() as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data->getSearch()) {
                $value_2 = $data->getSearch();
            }
            $dataArray['Search'] = $value_2;
        }
        if ($data->isInitialized('options')) {
            $value_4 = $data->getOptions();
            if (is_array($data->getOptions())) {
                $values_2 = [];
                foreach ($data->getOptions() as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            } elseif (null === $data->getOptions()) {
                $value_4 = $data->getOptions();
            }
            $dataArray['Options'] = $value_4;
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
