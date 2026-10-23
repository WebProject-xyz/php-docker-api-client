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

class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('File', $data) && null !== $data['File']) {
            $object->file = $this->denormalizer->denormalize($data['File'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class, 'json', $context);
            unset($data['File']);
        } elseif (array_key_exists('File', $data)) {
            $object->file = null;
            unset($data['File']);
        }
        if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $value = $data['Runtime'];
            if (null === $data['Runtime']) {
                $value = $data['Runtime'];
            } elseif (isset($data['Runtime'])) {
                $value = $data['Runtime'];
            }
            $object->runtime = $value;
            unset($data['Runtime']);
        } elseif (array_key_exists('Runtime', $data)) {
            $object->runtime = null;
            unset($data['Runtime']);
        }
        if (array_key_exists('ConfigID', $data) && null !== $data['ConfigID']) {
            $value_1 = $data['ConfigID'];
            if (is_string($data['ConfigID'])) {
                $value_1 = $data['ConfigID'];
            } elseif (null === $data['ConfigID']) {
                $value_1 = $data['ConfigID'];
            }
            $object->configID = $value_1;
            unset($data['ConfigID']);
        } elseif (array_key_exists('ConfigID', $data)) {
            $object->configID = null;
            unset($data['ConfigID']);
        }
        if (array_key_exists('ConfigName', $data) && null !== $data['ConfigName']) {
            $value_2 = $data['ConfigName'];
            if (is_string($data['ConfigName'])) {
                $value_2 = $data['ConfigName'];
            } elseif (null === $data['ConfigName']) {
                $value_2 = $data['ConfigName'];
            }
            $object->configName = $value_2;
            unset($data['ConfigName']);
        } elseif (array_key_exists('ConfigName', $data)) {
            $object->configName = null;
            unset($data['ConfigName']);
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
        if (array_key_exists('file', get_object_vars($data)) && null !== ($data->file ?? null)) {
            $normalized        = $this->normalizer->normalize($data->file, 'json', $context);
            $dataArray['File'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('runtime', get_object_vars($data)) && null !== ($data->runtime ?? null)) {
            $value = $data->runtime;
            if (null === $data->runtime) {
                $value = $data->runtime;
            } elseif (null !== $data->runtime) {
                $value = $data->runtime;
            }
            $dataArray['Runtime'] = $value;
        }
        if (array_key_exists('configID', get_object_vars($data)) && null !== ($data->configID ?? null)) {
            $value_1 = $data->configID;
            if (is_string($data->configID)) {
                $value_1 = $data->configID;
            } elseif (null === $data->configID) {
                $value_1 = $data->configID;
            }
            $dataArray['ConfigID'] = $value_1;
        }
        if (array_key_exists('configName', get_object_vars($data)) && null !== ($data->configName ?? null)) {
            $value_2 = $data->configName;
            if (is_string($data->configName)) {
                $value_2 = $data->configName;
            } elseif (null === $data->configName) {
                $value_2 = $data->configName;
            }
            $dataArray['ConfigName'] = $value_2;
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
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
