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

class ContainerMemoryStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('usage', $data) && null !== $data['usage']) {
            $value = $data['usage'];
            if (is_int($data['usage'])) {
                $value = $data['usage'];
            } elseif (null === $data['usage']) {
                $value = $data['usage'];
            }
            $object->usage = $value;
            unset($data['usage']);
        } elseif (array_key_exists('usage', $data)) {
            $object->usage = null;
            unset($data['usage']);
        }
        if (array_key_exists('max_usage', $data) && null !== $data['max_usage']) {
            $value_1 = $data['max_usage'];
            if (is_int($data['max_usage'])) {
                $value_1 = $data['max_usage'];
            } elseif (null === $data['max_usage']) {
                $value_1 = $data['max_usage'];
            }
            $object->maxUsage = $value_1;
            unset($data['max_usage']);
        } elseif (array_key_exists('max_usage', $data)) {
            $object->maxUsage = null;
            unset($data['max_usage']);
        }
        if (array_key_exists('stats', $data) && null !== $data['stats']) {
            $value_2 = $data['stats'];
            if (is_array($data['stats']) && $this->isOnlyNumericKeys($data['stats'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['stats'] as $key => $value_3) {
                    $value_4 = $value_3;
                    if (is_int($value_3)) {
                        $value_4 = $value_3;
                    } elseif (null === $value_3) {
                        $value_4 = $value_3;
                    }
                    $values[$key] = $value_4;
                }
                $value_2 = $values;
            } elseif (null === $data['stats']) {
                $value_2 = $data['stats'];
            }
            $object->stats = $value_2;
            unset($data['stats']);
        } elseif (array_key_exists('stats', $data)) {
            $object->stats = null;
            unset($data['stats']);
        }
        if (array_key_exists('failcnt', $data) && null !== $data['failcnt']) {
            $value_5 = $data['failcnt'];
            if (is_int($data['failcnt'])) {
                $value_5 = $data['failcnt'];
            } elseif (null === $data['failcnt']) {
                $value_5 = $data['failcnt'];
            }
            $object->failcnt = $value_5;
            unset($data['failcnt']);
        } elseif (array_key_exists('failcnt', $data)) {
            $object->failcnt = null;
            unset($data['failcnt']);
        }
        if (array_key_exists('limit', $data) && null !== $data['limit']) {
            $value_6 = $data['limit'];
            if (is_int($data['limit'])) {
                $value_6 = $data['limit'];
            } elseif (null === $data['limit']) {
                $value_6 = $data['limit'];
            }
            $object->limit = $value_6;
            unset($data['limit']);
        } elseif (array_key_exists('limit', $data)) {
            $object->limit = null;
            unset($data['limit']);
        }
        if (array_key_exists('commitbytes', $data) && null !== $data['commitbytes']) {
            $value_7 = $data['commitbytes'];
            if (is_int($data['commitbytes'])) {
                $value_7 = $data['commitbytes'];
            } elseif (null === $data['commitbytes']) {
                $value_7 = $data['commitbytes'];
            }
            $object->commitbytes = $value_7;
            unset($data['commitbytes']);
        } elseif (array_key_exists('commitbytes', $data)) {
            $object->commitbytes = null;
            unset($data['commitbytes']);
        }
        if (array_key_exists('commitpeakbytes', $data) && null !== $data['commitpeakbytes']) {
            $value_8 = $data['commitpeakbytes'];
            if (is_int($data['commitpeakbytes'])) {
                $value_8 = $data['commitpeakbytes'];
            } elseif (null === $data['commitpeakbytes']) {
                $value_8 = $data['commitpeakbytes'];
            }
            $object->commitpeakbytes = $value_8;
            unset($data['commitpeakbytes']);
        } elseif (array_key_exists('commitpeakbytes', $data)) {
            $object->commitpeakbytes = null;
            unset($data['commitpeakbytes']);
        }
        if (array_key_exists('privateworkingset', $data) && null !== $data['privateworkingset']) {
            $value_9 = $data['privateworkingset'];
            if (is_int($data['privateworkingset'])) {
                $value_9 = $data['privateworkingset'];
            } elseif (null === $data['privateworkingset']) {
                $value_9 = $data['privateworkingset'];
            }
            $object->privateworkingset = $value_9;
            unset($data['privateworkingset']);
        } elseif (array_key_exists('privateworkingset', $data)) {
            $object->privateworkingset = null;
            unset($data['privateworkingset']);
        }
        foreach ($data as $key_1 => $value_10) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_10;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('usage', get_object_vars($data)) && null !== ($data->usage ?? null)) {
            $value = $data->usage;
            if (is_int($data->usage)) {
                $value = $data->usage;
            } elseif (null === $data->usage) {
                $value = $data->usage;
            }
            $dataArray['usage'] = $value;
        }
        if (array_key_exists('maxUsage', get_object_vars($data)) && null !== ($data->maxUsage ?? null)) {
            $value_1 = $data->maxUsage;
            if (is_int($data->maxUsage)) {
                $value_1 = $data->maxUsage;
            } elseif (null === $data->maxUsage) {
                $value_1 = $data->maxUsage;
            }
            $dataArray['max_usage'] = $value_1;
        }
        if (array_key_exists('stats', get_object_vars($data)) && null !== ($data->stats ?? null)) {
            $value_2 = $data->stats;
            if (is_iterable($data->stats)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->stats as $key => $value_3) {
                    $value_4 = $value_3;
                    if (is_int($value_3)) {
                        $value_4 = $value_3;
                    } elseif (null === $value_3) {
                        $value_4 = $value_3;
                    }
                    $values[$key] = $value_4;
                }
                $value_2 = $values;
            } elseif (null === $data->stats) {
                $value_2 = $data->stats;
            }
            $dataArray['stats'] = $value_2;
        }
        if (array_key_exists('failcnt', get_object_vars($data)) && null !== ($data->failcnt ?? null)) {
            $value_5 = $data->failcnt;
            if (is_int($data->failcnt)) {
                $value_5 = $data->failcnt;
            } elseif (null === $data->failcnt) {
                $value_5 = $data->failcnt;
            }
            $dataArray['failcnt'] = $value_5;
        }
        if (array_key_exists('limit', get_object_vars($data)) && null !== ($data->limit ?? null)) {
            $value_6 = $data->limit;
            if (is_int($data->limit)) {
                $value_6 = $data->limit;
            } elseif (null === $data->limit) {
                $value_6 = $data->limit;
            }
            $dataArray['limit'] = $value_6;
        }
        if (array_key_exists('commitbytes', get_object_vars($data)) && null !== ($data->commitbytes ?? null)) {
            $value_7 = $data->commitbytes;
            if (is_int($data->commitbytes)) {
                $value_7 = $data->commitbytes;
            } elseif (null === $data->commitbytes) {
                $value_7 = $data->commitbytes;
            }
            $dataArray['commitbytes'] = $value_7;
        }
        if (array_key_exists('commitpeakbytes', get_object_vars($data)) && null !== ($data->commitpeakbytes ?? null)) {
            $value_8 = $data->commitpeakbytes;
            if (is_int($data->commitpeakbytes)) {
                $value_8 = $data->commitpeakbytes;
            } elseif (null === $data->commitpeakbytes) {
                $value_8 = $data->commitpeakbytes;
            }
            $dataArray['commitpeakbytes'] = $value_8;
        }
        if (array_key_exists('privateworkingset', get_object_vars($data)) && null !== ($data->privateworkingset ?? null)) {
            $value_9 = $data->privateworkingset;
            if (is_int($data->privateworkingset)) {
                $value_9 = $data->privateworkingset;
            } elseif (null === $data->privateworkingset) {
                $value_9 = $data->privateworkingset;
            }
            $dataArray['privateworkingset'] = $value_9;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_10) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_10;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
