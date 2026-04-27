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

class PluginPrivilegeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value = $data['Name'];
            if (is_string($data['Name'])) {
                $value = $data['Name'];
            } elseif (null === $data['Name']) {
                $value = $data['Name'];
            }
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Description', $data) && null !== $data['Description']) {
            $value_1 = $data['Description'];
            if (is_string($data['Description'])) {
                $value_1 = $data['Description'];
            } elseif (null === $data['Description']) {
                $value_1 = $data['Description'];
            }
            $object->setDescription($value_1);
        } elseif (array_key_exists('Description', $data) && null === $data['Description']) {
            $object->setDescription(null);
        }
        if (array_key_exists('Value', $data) && null !== $data['Value']) {
            $value_2 = $data['Value'];
            if (is_array($data['Value']) && $this->isOnlyNumericKeys($data['Value'])) {
                $values = [];
                foreach ($data['Value'] as $value_3) {
                    $values[] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data['Value']) {
                $value_2 = $data['Value'];
            }
            $object->setValue($value_2);
        } elseif (array_key_exists('Value', $data) && null === $data['Value']) {
            $object->setValue(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name')) {
            $value = $data->getName();
            if (is_string($data->getName())) {
                $value = $data->getName();
            } elseif (null === $data->getName()) {
                $value = $data->getName();
            }
            $dataArray['Name'] = $value;
        }
        if ($data->isInitialized('description')) {
            $value_1 = $data->getDescription();
            if (is_string($data->getDescription())) {
                $value_1 = $data->getDescription();
            } elseif (null === $data->getDescription()) {
                $value_1 = $data->getDescription();
            }
            $dataArray['Description'] = $value_1;
        }
        if ($data->isInitialized('value')) {
            $value_2 = $data->getValue();
            if (is_array($data->getValue())) {
                $values = [];
                foreach ($data->getValue() as $value_3) {
                    $values[] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data->getValue()) {
                $value_2 = $data->getValue();
            }
            $dataArray['Value'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
