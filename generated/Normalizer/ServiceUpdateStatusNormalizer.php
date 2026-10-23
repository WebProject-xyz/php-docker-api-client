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

class ServiceUpdateStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('State', $data) && null !== $data['State']) {
            $value = $data['State'];
            if (is_string($data['State'])) {
                $value = $data['State'];
            } elseif (null === $data['State']) {
                $value = $data['State'];
            }
            $object->state = $value;
            unset($data['State']);
        } elseif (array_key_exists('State', $data)) {
            $object->state = null;
            unset($data['State']);
        }
        if (array_key_exists('StartedAt', $data) && null !== $data['StartedAt']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['StartedAt']);
            if (false === $date) {
                if (is_string($data['StartedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['StartedAt'])) {
                    try {
                        $date = new DateTime($data['StartedAt']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['StartedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['StartedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->startedAt = $date;
            unset($data['StartedAt']);
        } elseif (array_key_exists('StartedAt', $data)) {
            $object->startedAt = null;
            unset($data['StartedAt']);
        }
        if (array_key_exists('CompletedAt', $data) && null !== $data['CompletedAt']) {
            $date_1 = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['CompletedAt']);
            if (false === $date_1) {
                if (is_string($data['CompletedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['CompletedAt'])) {
                    try {
                        $date_1 = new DateTime($data['CompletedAt']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CompletedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CompletedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->completedAt = $date_1;
            unset($data['CompletedAt']);
        } elseif (array_key_exists('CompletedAt', $data)) {
            $object->completedAt = null;
            unset($data['CompletedAt']);
        }
        if (array_key_exists('Message', $data) && null !== $data['Message']) {
            $value_1 = $data['Message'];
            if (is_string($data['Message'])) {
                $value_1 = $data['Message'];
            } elseif (null === $data['Message']) {
                $value_1 = $data['Message'];
            }
            $object->message = $value_1;
            unset($data['Message']);
        } elseif (array_key_exists('Message', $data)) {
            $object->message = null;
            unset($data['Message']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $value = $data->state;
            if (is_string($data->state)) {
                $value = $data->state;
            } elseif (null === $data->state) {
                $value = $data->state;
            }
            $dataArray['State'] = $value;
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['StartedAt'] = $data->startedAt?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('completedAt', get_object_vars($data)) && null !== ($data->completedAt ?? null)) {
            $dataArray['CompletedAt'] = $data->completedAt?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $value_1 = $data->message;
            if (is_string($data->message)) {
                $value_1 = $data->message;
            } elseif (null === $data->message) {
                $value_1 = $data->message;
            }
            $dataArray['Message'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
