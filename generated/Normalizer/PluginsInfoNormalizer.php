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

class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginsInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Volume', $data) && null !== $data['Volume']) {
            $values = [];
            foreach ($data['Volume'] as $value) {
                $values[] = $value;
            }
            $object->volume = $values;
            unset($data['Volume']);
        } elseif (array_key_exists('Volume', $data)) {
            $object->volume = null;
            unset($data['Volume']);
        }
        if (array_key_exists('Network', $data) && null !== $data['Network']) {
            $values_1 = [];
            foreach ($data['Network'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->network = $values_1;
            unset($data['Network']);
        } elseif (array_key_exists('Network', $data)) {
            $object->network = null;
            unset($data['Network']);
        }
        if (array_key_exists('Authorization', $data) && null !== $data['Authorization']) {
            $values_2 = [];
            foreach ($data['Authorization'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->authorization = $values_2;
            unset($data['Authorization']);
        } elseif (array_key_exists('Authorization', $data)) {
            $object->authorization = null;
            unset($data['Authorization']);
        }
        if (array_key_exists('Log', $data) && null !== $data['Log']) {
            $values_3 = [];
            foreach ($data['Log'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->log = $values_3;
            unset($data['Log']);
        } elseif (array_key_exists('Log', $data)) {
            $object->log = null;
            unset($data['Log']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('volume', get_object_vars($data)) && null !== ($data->volume ?? null)) {
            $values = [];
            foreach ($data->volume as $value) {
                $values[] = $value;
            }
            $dataArray['Volume'] = $values;
        }
        if (array_key_exists('network', get_object_vars($data)) && null !== ($data->network ?? null)) {
            $values_1 = [];
            foreach ($data->network as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Network'] = $values_1;
        }
        if (array_key_exists('authorization', get_object_vars($data)) && null !== ($data->authorization ?? null)) {
            $values_2 = [];
            foreach ($data->authorization as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Authorization'] = $values_2;
        }
        if (array_key_exists('log', get_object_vars($data)) && null !== ($data->log ?? null)) {
            $values_3 = [];
            foreach ($data->log as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['Log'] = $values_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
