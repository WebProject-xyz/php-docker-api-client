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

class IndexInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\IndexInfo();
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
            $object->name = $value;
            unset($data['Name']);
        } elseif (array_key_exists('Name', $data)) {
            $object->name = null;
            unset($data['Name']);
        }
        if (array_key_exists('Mirrors', $data) && null !== $data['Mirrors']) {
            $values = [];
            foreach ($data['Mirrors'] as $value_1) {
                $values[] = $value_1;
            }
            $object->mirrors = $values;
            unset($data['Mirrors']);
        } elseif (array_key_exists('Mirrors', $data)) {
            $object->mirrors = null;
            unset($data['Mirrors']);
        }
        if (array_key_exists('Secure', $data) && null !== $data['Secure']) {
            $value_2 = $data['Secure'];
            if (is_bool($data['Secure'])) {
                $value_2 = $data['Secure'];
            } elseif (null === $data['Secure']) {
                $value_2 = $data['Secure'];
            }
            $object->secure = $value_2;
            unset($data['Secure']);
        } elseif (array_key_exists('Secure', $data)) {
            $object->secure = null;
            unset($data['Secure']);
        }
        if (array_key_exists('Official', $data) && null !== $data['Official']) {
            $value_3 = $data['Official'];
            if (is_bool($data['Official'])) {
                $value_3 = $data['Official'];
            } elseif (null === $data['Official']) {
                $value_3 = $data['Official'];
            }
            $object->official = $value_3;
            unset($data['Official']);
        } elseif (array_key_exists('Official', $data)) {
            $object->official = null;
            unset($data['Official']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('mirrors', get_object_vars($data)) && null !== ($data->mirrors ?? null)) {
            $values = [];
            foreach ($data->mirrors as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['Mirrors'] = $values;
        }
        if (array_key_exists('secure', get_object_vars($data)) && null !== ($data->secure ?? null)) {
            $value_2 = $data->secure;
            if (is_bool($data->secure)) {
                $value_2 = $data->secure;
            } elseif (null === $data->secure) {
                $value_2 = $data->secure;
            }
            $dataArray['Secure'] = $value_2;
        }
        if (array_key_exists('official', get_object_vars($data)) && null !== ($data->official ?? null)) {
            $value_3 = $data->official;
            if (is_bool($data->official)) {
                $value_3 = $data->official;
            } elseif (null === $data->official) {
                $value_3 = $data->official;
            }
            $dataArray['Official'] = $value_3;
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
        return [\WebProject\DockerApi\Library\Generated\Model\IndexInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
