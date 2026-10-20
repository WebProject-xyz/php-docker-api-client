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

class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskStatus();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (array_key_exists('State', $data)) {
            $object->state = \WebProject\DockerApi\Library\Generated\Model\TaskState::from($data['State']);
            unset($data['State']);
        }
        if (array_key_exists('Message', $data) && null !== $data['Message']) {
            $value = $data['Message'];
            if (is_string($data['Message'])) {
                $value = $data['Message'];
            } elseif (null === $data['Message']) {
                $value = $data['Message'];
            }
            $object->message = $value;
            unset($data['Message']);
        } elseif (array_key_exists('Message', $data)) {
            $object->message = null;
            unset($data['Message']);
        }
        if (array_key_exists('Err', $data) && null !== $data['Err']) {
            $value_1 = $data['Err'];
            if (is_string($data['Err'])) {
                $value_1 = $data['Err'];
            } elseif (null === $data['Err']) {
                $value_1 = $data['Err'];
            }
            $object->err = $value_1;
            unset($data['Err']);
        } elseif (array_key_exists('Err', $data)) {
            $object->err = null;
            unset($data['Err']);
        }
        if (array_key_exists('ContainerStatus', $data)) {
            $object->containerStatus = $this->denormalizer->denormalize($data['ContainerStatus'], \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class, 'json', $context);
            unset($data['ContainerStatus']);
        }
        if (array_key_exists('PortStatus', $data)) {
            $object->portStatus = $this->denormalizer->denormalize($data['PortStatus'], \WebProject\DockerApi\Library\Generated\Model\PortStatus::class, 'json', $context);
            unset($data['PortStatus']);
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
        if (array_key_exists('timestamp', get_object_vars($data)) && null !== ($data->timestamp ?? null)) {
            $dataArray['Timestamp'] = $data->timestamp?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['State'] = $data->state->value;
        }
        if (array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $value = $data->message;
            if (is_string($data->message)) {
                $value = $data->message;
            } elseif (null === $data->message) {
                $value = $data->message;
            }
            $dataArray['Message'] = $value;
        }
        if (array_key_exists('err', get_object_vars($data)) && null !== ($data->err ?? null)) {
            $value_1 = $data->err;
            if (is_string($data->err)) {
                $value_1 = $data->err;
            } elseif (null === $data->err) {
                $value_1 = $data->err;
            }
            $dataArray['Err'] = $value_1;
        }
        if (array_key_exists('containerStatus', get_object_vars($data)) && null !== ($data->containerStatus ?? null)) {
            $normalized                   = $this->normalizer->normalize($data->containerStatus, 'json', $context);
            $dataArray['ContainerStatus'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('portStatus', get_object_vars($data)) && null !== ($data->portStatus ?? null)) {
            $normalized_1            = $this->normalizer->normalize($data->portStatus, 'json', $context);
            $dataArray['PortStatus'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
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
        return [\WebProject\DockerApi\Library\Generated\Model\TaskStatus::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
