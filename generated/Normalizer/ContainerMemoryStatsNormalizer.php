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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('usage', $data) && null !== $data['usage']) {
            $object->setUsage($data['usage']);
            unset($data['usage']);
        } elseif (array_key_exists('usage', $data) && null === $data['usage']) {
            $object->setUsage(null);
        }
        if (array_key_exists('max_usage', $data) && null !== $data['max_usage']) {
            $object->setMaxUsage($data['max_usage']);
            unset($data['max_usage']);
        } elseif (array_key_exists('max_usage', $data) && null === $data['max_usage']) {
            $object->setMaxUsage(null);
        }
        if (array_key_exists('stats', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['stats'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setStats($values);
            unset($data['stats']);
        }
        if (array_key_exists('failcnt', $data) && null !== $data['failcnt']) {
            $object->setFailcnt($data['failcnt']);
            unset($data['failcnt']);
        } elseif (array_key_exists('failcnt', $data) && null === $data['failcnt']) {
            $object->setFailcnt(null);
        }
        if (array_key_exists('limit', $data) && null !== $data['limit']) {
            $object->setLimit($data['limit']);
            unset($data['limit']);
        } elseif (array_key_exists('limit', $data) && null === $data['limit']) {
            $object->setLimit(null);
        }
        if (array_key_exists('commitbytes', $data) && null !== $data['commitbytes']) {
            $object->setCommitbytes($data['commitbytes']);
            unset($data['commitbytes']);
        } elseif (array_key_exists('commitbytes', $data) && null === $data['commitbytes']) {
            $object->setCommitbytes(null);
        }
        if (array_key_exists('commitpeakbytes', $data) && null !== $data['commitpeakbytes']) {
            $object->setCommitpeakbytes($data['commitpeakbytes']);
            unset($data['commitpeakbytes']);
        } elseif (array_key_exists('commitpeakbytes', $data) && null === $data['commitpeakbytes']) {
            $object->setCommitpeakbytes(null);
        }
        if (array_key_exists('privateworkingset', $data) && null !== $data['privateworkingset']) {
            $object->setPrivateworkingset($data['privateworkingset']);
            unset($data['privateworkingset']);
        } elseif (array_key_exists('privateworkingset', $data) && null === $data['privateworkingset']) {
            $object->setPrivateworkingset(null);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('usage') && null !== $data->getUsage()) {
            $dataArray['usage'] = $data->getUsage();
        }
        if ($data->isInitialized('maxUsage') && null !== $data->getMaxUsage()) {
            $dataArray['max_usage'] = $data->getMaxUsage();
        }
        if ($data->isInitialized('stats') && null !== $data->getStats()) {
            $values = [];
            foreach ($data->getStats() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['stats'] = $values;
        }
        if ($data->isInitialized('failcnt') && null !== $data->getFailcnt()) {
            $dataArray['failcnt'] = $data->getFailcnt();
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('commitbytes') && null !== $data->getCommitbytes()) {
            $dataArray['commitbytes'] = $data->getCommitbytes();
        }
        if ($data->isInitialized('commitpeakbytes') && null !== $data->getCommitpeakbytes()) {
            $dataArray['commitpeakbytes'] = $data->getCommitpeakbytes();
        }
        if ($data->isInitialized('privateworkingset') && null !== $data->getPrivateworkingset()) {
            $dataArray['privateworkingset'] = $data->getPrivateworkingset();
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
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
