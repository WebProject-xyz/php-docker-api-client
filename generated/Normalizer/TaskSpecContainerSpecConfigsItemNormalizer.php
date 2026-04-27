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
            $object->setFile($this->denormalizer->denormalize($data['File'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class, 'json', $context));
        } elseif (array_key_exists('File', $data) && null === $data['File']) {
            $object->setFile(null);
        }
        if (array_key_exists('Runtime', $data) && null !== $data['Runtime']) {
            $value = $data['Runtime'];
            if (null === $data['Runtime']) {
                $value = $data['Runtime'];
            } elseif (isset($data['Runtime'])) {
                $value = $data['Runtime'];
            }
            $object->setRuntime($value);
        } elseif (array_key_exists('Runtime', $data) && null === $data['Runtime']) {
            $object->setRuntime(null);
        }
        if (array_key_exists('ConfigID', $data) && null !== $data['ConfigID']) {
            $value_1 = $data['ConfigID'];
            if (is_string($data['ConfigID'])) {
                $value_1 = $data['ConfigID'];
            } elseif (null === $data['ConfigID']) {
                $value_1 = $data['ConfigID'];
            }
            $object->setConfigID($value_1);
        } elseif (array_key_exists('ConfigID', $data) && null === $data['ConfigID']) {
            $object->setConfigID(null);
        }
        if (array_key_exists('ConfigName', $data) && null !== $data['ConfigName']) {
            $value_2 = $data['ConfigName'];
            if (is_string($data['ConfigName'])) {
                $value_2 = $data['ConfigName'];
            } elseif (null === $data['ConfigName']) {
                $value_2 = $data['ConfigName'];
            }
            $object->setConfigName($value_2);
        } elseif (array_key_exists('ConfigName', $data) && null === $data['ConfigName']) {
            $object->setConfigName(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('file')) {
            $dataArray['File'] = $this->normalizer->normalize($data->getFile(), 'json', $context);
        }
        if ($data->isInitialized('runtime')) {
            $value = $data->getRuntime();
            if (null === $data->getRuntime()) {
                $value = $data->getRuntime();
            } elseif (null !== $data->getRuntime()) {
                $value = $data->getRuntime();
            }
            $dataArray['Runtime'] = $value;
        }
        if ($data->isInitialized('configID')) {
            $value_1 = $data->getConfigID();
            if (is_string($data->getConfigID())) {
                $value_1 = $data->getConfigID();
            } elseif (null === $data->getConfigID()) {
                $value_1 = $data->getConfigID();
            }
            $dataArray['ConfigID'] = $value_1;
        }
        if ($data->isInitialized('configName')) {
            $value_2 = $data->getConfigName();
            if (is_string($data->getConfigName())) {
                $value_2 = $data->getConfigName();
            } elseif (null === $data->getConfigName()) {
                $value_2 = $data->getConfigName();
            }
            $dataArray['ConfigName'] = $value_2;
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
