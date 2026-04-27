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

class PluginMountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginMount::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginMount::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginMount();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
        }
        if (array_key_exists('Settable', $data)) {
            $values = [];
            foreach ($data['Settable'] as $value) {
                $values[] = $value;
            }
            $object->setSettable($values);
        }
        if (array_key_exists('Source', $data)) {
            $object->setSource($data['Source']);
        }
        if (array_key_exists('Destination', $data)) {
            $object->setDestination($data['Destination']);
        }
        if (array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (array_key_exists('Options', $data)) {
            $values_1 = [];
            foreach ($data['Options'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOptions($values_1);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray                = [];
        $dataArray['Name']        = $data->getName();
        $dataArray['Description'] = $data->getDescription();
        $values                   = [];
        foreach ($data->getSettable() as $value) {
            $values[] = $value;
        }
        $dataArray['Settable']    = $values;
        $dataArray['Source']      = $data->getSource();
        $dataArray['Destination'] = $data->getDestination();
        $dataArray['Type']        = $data->getType();
        $values_1                 = [];
        foreach ($data->getOptions() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['Options'] = $values_1;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PluginMount::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
