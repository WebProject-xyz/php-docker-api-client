<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use DateTime;
use Exception;
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
            $object->iD = $value;
            unset($data['ID']);
        } elseif (array_key_exists('ID', $data)) {
            $object->iD = null;
            unset($data['ID']);
        }
        if (array_key_exists('Parents', $data) && null !== $data['Parents']) {
            $values = [];
            foreach ($data['Parents'] as $value_1) {
                $values[] = $value_1;
            }
            $object->parents = $values;
            unset($data['Parents']);
        } elseif (array_key_exists('Parents', $data)) {
            $object->parents = null;
            unset($data['Parents']);
        }
        if (array_key_exists('Type', $data) && null !== $data['Type']) {
            $value_2 = $data['Type'];
            if (is_string($data['Type'])) {
                $value_2 = $data['Type'];
            } elseif (null === $data['Type']) {
                $value_2 = $data['Type'];
            }
            $object->type = $value_2;
            unset($data['Type']);
        } elseif (array_key_exists('Type', $data)) {
            $object->type = null;
            unset($data['Type']);
        }
        if (array_key_exists('Description', $data) && null !== $data['Description']) {
            $value_3 = $data['Description'];
            if (is_string($data['Description'])) {
                $value_3 = $data['Description'];
            } elseif (null === $data['Description']) {
                $value_3 = $data['Description'];
            }
            $object->description = $value_3;
            unset($data['Description']);
        } elseif (array_key_exists('Description', $data)) {
            $object->description = null;
            unset($data['Description']);
        }
        if (array_key_exists('InUse', $data) && null !== $data['InUse']) {
            $value_4 = $data['InUse'];
            if (is_bool($data['InUse'])) {
                $value_4 = $data['InUse'];
            } elseif (null === $data['InUse']) {
                $value_4 = $data['InUse'];
            }
            $object->inUse = $value_4;
            unset($data['InUse']);
        } elseif (array_key_exists('InUse', $data)) {
            $object->inUse = null;
            unset($data['InUse']);
        }
        if (array_key_exists('Shared', $data) && null !== $data['Shared']) {
            $value_5 = $data['Shared'];
            if (is_bool($data['Shared'])) {
                $value_5 = $data['Shared'];
            } elseif (null === $data['Shared']) {
                $value_5 = $data['Shared'];
            }
            $object->shared = $value_5;
            unset($data['Shared']);
        } elseif (array_key_exists('Shared', $data)) {
            $object->shared = null;
            unset($data['Shared']);
        }
        if (array_key_exists('Size', $data) && null !== $data['Size']) {
            $value_6 = $data['Size'];
            if (is_int($data['Size'])) {
                $value_6 = $data['Size'];
            } elseif (null === $data['Size']) {
                $value_6 = $data['Size'];
            }
            $object->size = $value_6;
            unset($data['Size']);
        } elseif (array_key_exists('Size', $data)) {
            $object->size = null;
            unset($data['Size']);
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['CreatedAt']);
            if (false === $date) {
                if (is_string($data['CreatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['CreatedAt'])) {
                    try {
                        $date = new DateTime($data['CreatedAt']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CreatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CreatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->createdAt = $date;
            unset($data['CreatedAt']);
        } elseif (array_key_exists('CreatedAt', $data)) {
            $object->createdAt = null;
            unset($data['CreatedAt']);
        }
        if (array_key_exists('LastUsedAt', $data) && null !== $data['LastUsedAt']) {
            $date_1 = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['LastUsedAt']);
            if (false === $date_1) {
                if (is_string($data['LastUsedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['LastUsedAt'])) {
                    try {
                        $date_1 = new DateTime($data['LastUsedAt']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['LastUsedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['LastUsedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->lastUsedAt = $date_1;
            unset($data['LastUsedAt']);
        } elseif (array_key_exists('LastUsedAt', $data)) {
            $object->lastUsedAt = null;
            unset($data['LastUsedAt']);
        }
        if (array_key_exists('UsageCount', $data) && null !== $data['UsageCount']) {
            $value_7 = $data['UsageCount'];
            if (is_int($data['UsageCount'])) {
                $value_7 = $data['UsageCount'];
            } elseif (null === $data['UsageCount']) {
                $value_7 = $data['UsageCount'];
            }
            $object->usageCount = $value_7;
            unset($data['UsageCount']);
        } elseif (array_key_exists('UsageCount', $data)) {
            $object->usageCount = null;
            unset($data['UsageCount']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $value = $data->iD;
            if (is_string($data->iD)) {
                $value = $data->iD;
            } elseif (null === $data->iD) {
                $value = $data->iD;
            }
            $dataArray['ID'] = $value;
        }
        if (array_key_exists('parents', get_object_vars($data)) && null !== ($data->parents ?? null)) {
            $values = [];
            foreach ($data->parents as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['Parents'] = $values;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $value_2 = $data->type;
            if (is_string($data->type)) {
                $value_2 = $data->type;
            } elseif (null === $data->type) {
                $value_2 = $data->type;
            }
            $dataArray['Type'] = $value_2;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $value_3 = $data->description;
            if (is_string($data->description)) {
                $value_3 = $data->description;
            } elseif (null === $data->description) {
                $value_3 = $data->description;
            }
            $dataArray['Description'] = $value_3;
        }
        if (array_key_exists('inUse', get_object_vars($data)) && null !== ($data->inUse ?? null)) {
            $value_4 = $data->inUse;
            if (is_bool($data->inUse)) {
                $value_4 = $data->inUse;
            } elseif (null === $data->inUse) {
                $value_4 = $data->inUse;
            }
            $dataArray['InUse'] = $value_4;
        }
        if (array_key_exists('shared', get_object_vars($data)) && null !== ($data->shared ?? null)) {
            $value_5 = $data->shared;
            if (is_bool($data->shared)) {
                $value_5 = $data->shared;
            } elseif (null === $data->shared) {
                $value_5 = $data->shared;
            }
            $dataArray['Shared'] = $value_5;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $value_6 = $data->size;
            if (is_int($data->size)) {
                $value_6 = $data->size;
            } elseif (null === $data->size) {
                $value_6 = $data->size;
            }
            $dataArray['Size'] = $value_6;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('lastUsedAt', get_object_vars($data)) && null !== ($data->lastUsedAt ?? null)) {
            $dataArray['LastUsedAt'] = $data->lastUsedAt?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('usageCount', get_object_vars($data)) && null !== ($data->usageCount ?? null)) {
            $value_7 = $data->usageCount;
            if (is_int($data->usageCount)) {
                $value_7 = $data->usageCount;
            } elseif (null === $data->usageCount) {
                $value_7 = $data->usageCount;
            }
            $dataArray['UsageCount'] = $value_7;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
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
