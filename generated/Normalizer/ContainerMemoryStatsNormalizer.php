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
            $object->setUsage($value);
        } elseif (array_key_exists('usage', $data) && null === $data['usage']) {
            $object->setUsage(null);
        }
        if (array_key_exists('max_usage', $data) && null !== $data['max_usage']) {
            $value_1 = $data['max_usage'];
            if (is_int($data['max_usage'])) {
                $value_1 = $data['max_usage'];
            } elseif (null === $data['max_usage']) {
                $value_1 = $data['max_usage'];
            }
            $object->setMaxUsage($value_1);
        } elseif (array_key_exists('max_usage', $data) && null === $data['max_usage']) {
            $object->setMaxUsage(null);
        }
        if (array_key_exists('stats', $data) && null !== $data['stats']) {
            $value_2 = $data['stats'];
            if (is_array($data['stats']) && $this->isOnlyNumericKeys($data['stats'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
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
            $object->setStats($value_2);
        } elseif (array_key_exists('stats', $data) && null === $data['stats']) {
            $object->setStats(null);
        }
        if (array_key_exists('failcnt', $data) && null !== $data['failcnt']) {
            $value_5 = $data['failcnt'];
            if (is_int($data['failcnt'])) {
                $value_5 = $data['failcnt'];
            } elseif (null === $data['failcnt']) {
                $value_5 = $data['failcnt'];
            }
            $object->setFailcnt($value_5);
        } elseif (array_key_exists('failcnt', $data) && null === $data['failcnt']) {
            $object->setFailcnt(null);
        }
        if (array_key_exists('limit', $data) && null !== $data['limit']) {
            $value_6 = $data['limit'];
            if (is_int($data['limit'])) {
                $value_6 = $data['limit'];
            } elseif (null === $data['limit']) {
                $value_6 = $data['limit'];
            }
            $object->setLimit($value_6);
        } elseif (array_key_exists('limit', $data) && null === $data['limit']) {
            $object->setLimit(null);
        }
        if (array_key_exists('commitbytes', $data) && null !== $data['commitbytes']) {
            $value_7 = $data['commitbytes'];
            if (is_int($data['commitbytes'])) {
                $value_7 = $data['commitbytes'];
            } elseif (null === $data['commitbytes']) {
                $value_7 = $data['commitbytes'];
            }
            $object->setCommitbytes($value_7);
        } elseif (array_key_exists('commitbytes', $data) && null === $data['commitbytes']) {
            $object->setCommitbytes(null);
        }
        if (array_key_exists('commitpeakbytes', $data) && null !== $data['commitpeakbytes']) {
            $value_8 = $data['commitpeakbytes'];
            if (is_int($data['commitpeakbytes'])) {
                $value_8 = $data['commitpeakbytes'];
            } elseif (null === $data['commitpeakbytes']) {
                $value_8 = $data['commitpeakbytes'];
            }
            $object->setCommitpeakbytes($value_8);
        } elseif (array_key_exists('commitpeakbytes', $data) && null === $data['commitpeakbytes']) {
            $object->setCommitpeakbytes(null);
        }
        if (array_key_exists('privateworkingset', $data) && null !== $data['privateworkingset']) {
            $value_9 = $data['privateworkingset'];
            if (is_int($data['privateworkingset'])) {
                $value_9 = $data['privateworkingset'];
            } elseif (null === $data['privateworkingset']) {
                $value_9 = $data['privateworkingset'];
            }
            $object->setPrivateworkingset($value_9);
        } elseif (array_key_exists('privateworkingset', $data) && null === $data['privateworkingset']) {
            $object->setPrivateworkingset(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('usage')) {
            $value = $data->getUsage();
            if (is_int($data->getUsage())) {
                $value = $data->getUsage();
            } elseif (null === $data->getUsage()) {
                $value = $data->getUsage();
            }
            $dataArray['usage'] = $value;
        }
        if ($data->isInitialized('maxUsage')) {
            $value_1 = $data->getMaxUsage();
            if (is_int($data->getMaxUsage())) {
                $value_1 = $data->getMaxUsage();
            } elseif (null === $data->getMaxUsage()) {
                $value_1 = $data->getMaxUsage();
            }
            $dataArray['max_usage'] = $value_1;
        }
        if ($data->isInitialized('stats')) {
            $value_2 = $data->getStats();
            if (is_object($data->getStats())) {
                $values = [];
                foreach ($data->getStats() as $key => $value_3) {
                    $value_4 = $value_3;
                    if (is_int($value_3)) {
                        $value_4 = $value_3;
                    } elseif (null === $value_3) {
                        $value_4 = $value_3;
                    }
                    $values[$key] = $value_4;
                }
                $value_2 = $values;
            } elseif (null === $data->getStats()) {
                $value_2 = $data->getStats();
            }
            $dataArray['stats'] = $value_2;
        }
        if ($data->isInitialized('failcnt')) {
            $value_5 = $data->getFailcnt();
            if (is_int($data->getFailcnt())) {
                $value_5 = $data->getFailcnt();
            } elseif (null === $data->getFailcnt()) {
                $value_5 = $data->getFailcnt();
            }
            $dataArray['failcnt'] = $value_5;
        }
        if ($data->isInitialized('limit')) {
            $value_6 = $data->getLimit();
            if (is_int($data->getLimit())) {
                $value_6 = $data->getLimit();
            } elseif (null === $data->getLimit()) {
                $value_6 = $data->getLimit();
            }
            $dataArray['limit'] = $value_6;
        }
        if ($data->isInitialized('commitbytes')) {
            $value_7 = $data->getCommitbytes();
            if (is_int($data->getCommitbytes())) {
                $value_7 = $data->getCommitbytes();
            } elseif (null === $data->getCommitbytes()) {
                $value_7 = $data->getCommitbytes();
            }
            $dataArray['commitbytes'] = $value_7;
        }
        if ($data->isInitialized('commitpeakbytes')) {
            $value_8 = $data->getCommitpeakbytes();
            if (is_int($data->getCommitpeakbytes())) {
                $value_8 = $data->getCommitpeakbytes();
            } elseif (null === $data->getCommitpeakbytes()) {
                $value_8 = $data->getCommitpeakbytes();
            }
            $dataArray['commitpeakbytes'] = $value_8;
        }
        if ($data->isInitialized('privateworkingset')) {
            $value_9 = $data->getPrivateworkingset();
            if (is_int($data->getPrivateworkingset())) {
                $value_9 = $data->getPrivateworkingset();
            } elseif (null === $data->getPrivateworkingset()) {
                $value_9 = $data->getPrivateworkingset();
            }
            $dataArray['privateworkingset'] = $value_9;
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
