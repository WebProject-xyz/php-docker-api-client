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
use function is_object;
use function is_string;

class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec();
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
        if (array_key_exists('Remote', $data) && null !== $data['Remote']) {
            $value_1 = $data['Remote'];
            if (is_string($data['Remote'])) {
                $value_1 = $data['Remote'];
            } elseif (null === $data['Remote']) {
                $value_1 = $data['Remote'];
            }
            $object->setRemote($value_1);
        } elseif (array_key_exists('Remote', $data) && null === $data['Remote']) {
            $object->setRemote(null);
        }
        if (array_key_exists('Disabled', $data) && null !== $data['Disabled']) {
            $value_2 = $data['Disabled'];
            if (is_bool($data['Disabled'])) {
                $value_2 = $data['Disabled'];
            } elseif (null === $data['Disabled']) {
                $value_2 = $data['Disabled'];
            }
            $object->setDisabled($value_2);
        } elseif (array_key_exists('Disabled', $data) && null === $data['Disabled']) {
            $object->setDisabled(null);
        }
        if (array_key_exists('PluginPrivilege', $data) && null !== $data['PluginPrivilege']) {
            $value_3 = $data['PluginPrivilege'];
            if (is_array($data['PluginPrivilege']) && $this->isOnlyNumericKeys($data['PluginPrivilege'])) {
                $values = [];
                foreach ($data['PluginPrivilege'] as $value_4) {
                    $values[] = $this->denormalizer->denormalize($value_4, \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class, 'json', $context);
                }
                $value_3 = $values;
            } elseif (null === $data['PluginPrivilege']) {
                $value_3 = $data['PluginPrivilege'];
            }
            $object->setPluginPrivilege($value_3);
        } elseif (array_key_exists('PluginPrivilege', $data) && null === $data['PluginPrivilege']) {
            $object->setPluginPrivilege(null);
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
        if ($data->isInitialized('remote')) {
            $value_1 = $data->getRemote();
            if (is_string($data->getRemote())) {
                $value_1 = $data->getRemote();
            } elseif (null === $data->getRemote()) {
                $value_1 = $data->getRemote();
            }
            $dataArray['Remote'] = $value_1;
        }
        if ($data->isInitialized('disabled')) {
            $value_2 = $data->getDisabled();
            if (is_bool($data->getDisabled())) {
                $value_2 = $data->getDisabled();
            } elseif (null === $data->getDisabled()) {
                $value_2 = $data->getDisabled();
            }
            $dataArray['Disabled'] = $value_2;
        }
        if ($data->isInitialized('pluginPrivilege')) {
            $value_3 = $data->getPluginPrivilege();
            if (is_array($data->getPluginPrivilege())) {
                $values = [];
                foreach ($data->getPluginPrivilege() as $value_4) {
                    $values[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $value_3 = $values;
            } elseif (null === $data->getPluginPrivilege()) {
                $value_3 = $data->getPluginPrivilege();
            }
            $dataArray['PluginPrivilege'] = $value_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
