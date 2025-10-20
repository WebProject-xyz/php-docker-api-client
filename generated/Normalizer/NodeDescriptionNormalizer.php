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

class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NodeDescription::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NodeDescription::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\NodeDescription();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\NodeDescriptionConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Hostname', $data)) {
            $object->setHostname($data['Hostname']);
            unset($data['Hostname']);
        }
        if (array_key_exists('Platform', $data)) {
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\Platform::class, 'json', $context));
            unset($data['Platform']);
        }
        if (array_key_exists('Resources', $data)) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class, 'json', $context));
            unset($data['Resources']);
        }
        if (array_key_exists('Engine', $data)) {
            $object->setEngine($this->denormalizer->denormalize($data['Engine'], \WebProject\DockerApi\Library\Generated\Model\EngineDescription::class, 'json', $context));
            unset($data['Engine']);
        }
        if (array_key_exists('TLSInfo', $data)) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class, 'json', $context));
            unset($data['TLSInfo']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('hostname') && null !== $data->getHostname()) {
            $dataArray['Hostname'] = $data->getHostname();
        }
        if ($data->isInitialized('platform') && null !== $data->getPlatform()) {
            $dataArray['Platform'] = $this->normalizer->normalize($data->getPlatform(), 'json', $context);
        }
        if ($data->isInitialized('resources') && null !== $data->getResources()) {
            $dataArray['Resources'] = $this->normalizer->normalize($data->getResources(), 'json', $context);
        }
        if ($data->isInitialized('engine') && null !== $data->getEngine()) {
            $dataArray['Engine'] = $this->normalizer->normalize($data->getEngine(), 'json', $context);
        }
        if ($data->isInitialized('tLSInfo') && null !== $data->getTLSInfo()) {
            $dataArray['TLSInfo'] = $this->normalizer->normalize($data->getTLSInfo(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\NodeDescriptionConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NodeDescription::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
