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

class PluginConfigInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Types', $data)) {
            $values = [];
            foreach ($data['Types'] as $value) {
                $values[] = $value;
            }
            $object->setTypes($values);
        }
        if (array_key_exists('Socket', $data)) {
            $object->setSocket($data['Socket']);
        }
        if (array_key_exists('ProtocolScheme', $data) && null !== $data['ProtocolScheme']) {
            $value_1 = $data['ProtocolScheme'];
            if (is_string($data['ProtocolScheme'])) {
                $value_1 = $data['ProtocolScheme'];
            } elseif (null === $data['ProtocolScheme']) {
                $value_1 = $data['ProtocolScheme'];
            }
            $object->setProtocolScheme($value_1);
        } elseif (array_key_exists('ProtocolScheme', $data) && null === $data['ProtocolScheme']) {
            $object->setProtocolScheme(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        $values    = [];
        foreach ($data->getTypes() as $value) {
            $values[] = $value;
        }
        $dataArray['Types']  = $values;
        $dataArray['Socket'] = $data->getSocket();
        if ($data->isInitialized('protocolScheme')) {
            $value_1 = $data->getProtocolScheme();
            if (is_string($data->getProtocolScheme())) {
                $value_1 = $data->getProtocolScheme();
            } elseif (null === $data->getProtocolScheme()) {
                $value_1 = $data->getProtocolScheme();
            }
            $dataArray['ProtocolScheme'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
