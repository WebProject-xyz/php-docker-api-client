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

class PluginConfigRootfsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('type', $data) && null !== $data['type']) {
            $value = $data['type'];
            if (is_string($data['type'])) {
                $value = $data['type'];
            } elseif (null === $data['type']) {
                $value = $data['type'];
            }
            $object->setType($value);
        } elseif (array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (array_key_exists('diff_ids', $data) && null !== $data['diff_ids']) {
            $value_1 = $data['diff_ids'];
            if (is_array($data['diff_ids']) && $this->isOnlyNumericKeys($data['diff_ids'])) {
                $values = [];
                foreach ($data['diff_ids'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['diff_ids']) {
                $value_1 = $data['diff_ids'];
            }
            $object->setDiffIds($value_1);
        } elseif (array_key_exists('diff_ids', $data) && null === $data['diff_ids']) {
            $object->setDiffIds(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('type')) {
            $value = $data->getType();
            if (is_string($data->getType())) {
                $value = $data->getType();
            } elseif (null === $data->getType()) {
                $value = $data->getType();
            }
            $dataArray['type'] = $value;
        }
        if ($data->isInitialized('diffIds')) {
            $value_1 = $data->getDiffIds();
            if (is_array($data->getDiffIds())) {
                $values = [];
                foreach ($data->getDiffIds() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getDiffIds()) {
                $value_1 = $data->getDiffIds();
            }
            $dataArray['diff_ids'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
