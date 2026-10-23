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
use function is_int;
use function is_object;

class ImagesSearchGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('is_official', $data) && is_int($data['is_official'])) {
            $data['is_official'] = (bool) $data['is_official'];
        }
        if (array_key_exists('is_automated', $data) && is_int($data['is_automated'])) {
            $data['is_automated'] = (bool) $data['is_automated'];
        }
        if (array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (array_key_exists('is_official', $data)) {
            $object->isOfficial = $data['is_official'];
            unset($data['is_official']);
        }
        if (array_key_exists('is_automated', $data)) {
            $object->isAutomated = $data['is_automated'];
            unset($data['is_automated']);
        }
        if (array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (array_key_exists('star_count', $data)) {
            $object->starCount = $data['star_count'];
            unset($data['star_count']);
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
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (array_key_exists('isOfficial', get_object_vars($data)) && null !== ($data->isOfficial ?? null)) {
            $dataArray['is_official'] = $data->isOfficial;
        }
        if (array_key_exists('isAutomated', get_object_vars($data)) && null !== ($data->isAutomated ?? null)) {
            $dataArray['is_automated'] = $data->isAutomated;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('starCount', get_object_vars($data)) && null !== ($data->starCount ?? null)) {
            $dataArray['star_count'] = $data->starCount;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
