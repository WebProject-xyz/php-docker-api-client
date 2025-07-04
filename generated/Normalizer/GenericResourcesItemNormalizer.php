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

class GenericResourcesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('NamedResourceSpec', $data)) {
            $object->setNamedResourceSpec($this->denormalizer->denormalize($data['NamedResourceSpec'], \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class, 'json', $context));
            unset($data['NamedResourceSpec']);
        }
        if (array_key_exists('DiscreteResourceSpec', $data)) {
            $object->setDiscreteResourceSpec($this->denormalizer->denormalize($data['DiscreteResourceSpec'], \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class, 'json', $context));
            unset($data['DiscreteResourceSpec']);
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
        if ($data->isInitialized('namedResourceSpec') && null !== $data->getNamedResourceSpec()) {
            $dataArray['NamedResourceSpec'] = $this->normalizer->normalize($data->getNamedResourceSpec(), 'json', $context);
        }
        if ($data->isInitialized('discreteResourceSpec') && null !== $data->getDiscreteResourceSpec()) {
            $dataArray['DiscreteResourceSpec'] = $this->normalizer->normalize($data->getDiscreteResourceSpec(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
