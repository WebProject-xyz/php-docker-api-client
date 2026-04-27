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
use function is_bool;
use function is_int;
use function is_object;
use function is_string;

class BuildCacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\BuildCache::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\BuildCache::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\BuildCache();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ID', $data) && null !== $data['ID']) {
            $value = $data['ID'];
            if (is_string($data['ID'])) {
                $value = $data['ID'];
            } elseif (null === $data['ID']) {
                $value = $data['ID'];
            }
            $object->setID($value);
        } elseif (array_key_exists('ID', $data) && null === $data['ID']) {
            $object->setID(null);
        }
        if (array_key_exists('Parents', $data) && null !== $data['Parents']) {
            $value_1 = $data['Parents'];
            if (is_array($data['Parents']) && $this->isOnlyNumericKeys($data['Parents'])) {
                $values = [];
                foreach ($data['Parents'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Parents']) {
                $value_1 = $data['Parents'];
            }
            $object->setParents($value_1);
        } elseif (array_key_exists('Parents', $data) && null === $data['Parents']) {
            $object->setParents(null);
        }
        if (array_key_exists('Type', $data) && null !== $data['Type']) {
            $value_3 = $data['Type'];
            if (is_string($data['Type'])) {
                $value_3 = $data['Type'];
            } elseif (null === $data['Type']) {
                $value_3 = $data['Type'];
            }
            $object->setType($value_3);
        } elseif (array_key_exists('Type', $data) && null === $data['Type']) {
            $object->setType(null);
        }
        if (array_key_exists('Description', $data) && null !== $data['Description']) {
            $value_4 = $data['Description'];
            if (is_string($data['Description'])) {
                $value_4 = $data['Description'];
            } elseif (null === $data['Description']) {
                $value_4 = $data['Description'];
            }
            $object->setDescription($value_4);
        } elseif (array_key_exists('Description', $data) && null === $data['Description']) {
            $object->setDescription(null);
        }
        if (array_key_exists('InUse', $data) && null !== $data['InUse']) {
            $value_5 = $data['InUse'];
            if (is_bool($data['InUse'])) {
                $value_5 = $data['InUse'];
            } elseif (null === $data['InUse']) {
                $value_5 = $data['InUse'];
            }
            $object->setInUse($value_5);
        } elseif (array_key_exists('InUse', $data) && null === $data['InUse']) {
            $object->setInUse(null);
        }
        if (array_key_exists('Shared', $data) && null !== $data['Shared']) {
            $value_6 = $data['Shared'];
            if (is_bool($data['Shared'])) {
                $value_6 = $data['Shared'];
            } elseif (null === $data['Shared']) {
                $value_6 = $data['Shared'];
            }
            $object->setShared($value_6);
        } elseif (array_key_exists('Shared', $data) && null === $data['Shared']) {
            $object->setShared(null);
        }
        if (array_key_exists('Size', $data) && null !== $data['Size']) {
            $value_7 = $data['Size'];
            if (is_int($data['Size'])) {
                $value_7 = $data['Size'];
            } elseif (null === $data['Size']) {
                $value_7 = $data['Size'];
            }
            $object->setSize($value_7);
        } elseif (array_key_exists('Size', $data) && null === $data['Size']) {
            $object->setSize(null);
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $value_8 = $data['CreatedAt'];
            if (is_string($data['CreatedAt'])) {
                $value_8 = $data['CreatedAt'];
            } elseif (null === $data['CreatedAt']) {
                $value_8 = $data['CreatedAt'];
            }
            $object->setCreatedAt($value_8);
        } elseif (array_key_exists('CreatedAt', $data) && null === $data['CreatedAt']) {
            $object->setCreatedAt(null);
        }
        if (array_key_exists('LastUsedAt', $data) && null !== $data['LastUsedAt']) {
            $value_9 = $data['LastUsedAt'];
            if (is_string($data['LastUsedAt'])) {
                $value_9 = $data['LastUsedAt'];
            } elseif (null === $data['LastUsedAt']) {
                $value_9 = $data['LastUsedAt'];
            }
            $object->setLastUsedAt($value_9);
        } elseif (array_key_exists('LastUsedAt', $data) && null === $data['LastUsedAt']) {
            $object->setLastUsedAt(null);
        }
        if (array_key_exists('UsageCount', $data) && null !== $data['UsageCount']) {
            $value_10 = $data['UsageCount'];
            if (is_int($data['UsageCount'])) {
                $value_10 = $data['UsageCount'];
            } elseif (null === $data['UsageCount']) {
                $value_10 = $data['UsageCount'];
            }
            $object->setUsageCount($value_10);
        } elseif (array_key_exists('UsageCount', $data) && null === $data['UsageCount']) {
            $object->setUsageCount(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('iD')) {
            $value = $data->getID();
            if (is_string($data->getID())) {
                $value = $data->getID();
            } elseif (null === $data->getID()) {
                $value = $data->getID();
            }
            $dataArray['ID'] = $value;
        }
        if ($data->isInitialized('parents')) {
            $value_1 = $data->getParents();
            if (is_array($data->getParents())) {
                $values = [];
                foreach ($data->getParents() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getParents()) {
                $value_1 = $data->getParents();
            }
            $dataArray['Parents'] = $value_1;
        }
        if ($data->isInitialized('type')) {
            $value_3 = $data->getType();
            if (is_string($data->getType())) {
                $value_3 = $data->getType();
            } elseif (null === $data->getType()) {
                $value_3 = $data->getType();
            }
            $dataArray['Type'] = $value_3;
        }
        if ($data->isInitialized('description')) {
            $value_4 = $data->getDescription();
            if (is_string($data->getDescription())) {
                $value_4 = $data->getDescription();
            } elseif (null === $data->getDescription()) {
                $value_4 = $data->getDescription();
            }
            $dataArray['Description'] = $value_4;
        }
        if ($data->isInitialized('inUse')) {
            $value_5 = $data->getInUse();
            if (is_bool($data->getInUse())) {
                $value_5 = $data->getInUse();
            } elseif (null === $data->getInUse()) {
                $value_5 = $data->getInUse();
            }
            $dataArray['InUse'] = $value_5;
        }
        if ($data->isInitialized('shared')) {
            $value_6 = $data->getShared();
            if (is_bool($data->getShared())) {
                $value_6 = $data->getShared();
            } elseif (null === $data->getShared()) {
                $value_6 = $data->getShared();
            }
            $dataArray['Shared'] = $value_6;
        }
        if ($data->isInitialized('size')) {
            $value_7 = $data->getSize();
            if (is_int($data->getSize())) {
                $value_7 = $data->getSize();
            } elseif (null === $data->getSize()) {
                $value_7 = $data->getSize();
            }
            $dataArray['Size'] = $value_7;
        }
        if ($data->isInitialized('createdAt')) {
            $value_8 = $data->getCreatedAt();
            if (is_string($data->getCreatedAt())) {
                $value_8 = $data->getCreatedAt();
            } elseif (null === $data->getCreatedAt()) {
                $value_8 = $data->getCreatedAt();
            }
            $dataArray['CreatedAt'] = $value_8;
        }
        if ($data->isInitialized('lastUsedAt')) {
            $value_9 = $data->getLastUsedAt();
            if (is_string($data->getLastUsedAt())) {
                $value_9 = $data->getLastUsedAt();
            } elseif (null === $data->getLastUsedAt()) {
                $value_9 = $data->getLastUsedAt();
            }
            $dataArray['LastUsedAt'] = $value_9;
        }
        if ($data->isInitialized('usageCount')) {
            $value_10 = $data->getUsageCount();
            if (is_int($data->getUsageCount())) {
                $value_10 = $data->getUsageCount();
            } elseif (null === $data->getUsageCount()) {
                $value_10 = $data->getUsageCount();
            }
            $dataArray['UsageCount'] = $value_10;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\BuildCache::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
