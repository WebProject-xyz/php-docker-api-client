<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use DateTime;
use Exception;
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

class SignatureTimestampNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SignatureTimestamp::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SignatureTimestamp::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SignatureTimestamp();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Type', $data)) {
            $object->type = \WebProject\DockerApi\Library\Generated\Model\SignatureTimestampType::from($data['Type']);
            unset($data['Type']);
        }
        if (array_key_exists('URI', $data) && null !== $data['URI']) {
            $value = $data['URI'];
            if (is_string($data['URI'])) {
                $value = $data['URI'];
            } elseif (null === $data['URI']) {
                $value = $data['URI'];
            }
            $object->uRI = $value;
            unset($data['URI']);
        } elseif (array_key_exists('URI', $data)) {
            $object->uRI = null;
            unset($data['URI']);
        }
        if (array_key_exists('Timestamp', $data) && null !== $data['Timestamp']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Timestamp']);
            if (false === $date) {
                if (is_string($data['Timestamp']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['Timestamp'])) {
                    try {
                        $date = new DateTime($data['Timestamp']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Timestamp'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Timestamp'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->timestamp = $date;
            unset($data['Timestamp']);
        } elseif (array_key_exists('Timestamp', $data)) {
            $object->timestamp = null;
            unset($data['Timestamp']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type->value;
        }
        if (array_key_exists('uRI', get_object_vars($data)) && null !== ($data->uRI ?? null)) {
            $value = $data->uRI;
            if (is_string($data->uRI)) {
                $value = $data->uRI;
            } elseif (null === $data->uRI) {
                $value = $data->uRI;
            }
            $dataArray['URI'] = $value;
        }
        if (array_key_exists('timestamp', get_object_vars($data)) && null !== ($data->timestamp ?? null)) {
            $dataArray['Timestamp'] = $data->timestamp?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SignatureTimestamp::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
