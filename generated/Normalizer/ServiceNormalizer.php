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

class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Service::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Service::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Service();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('ID', $data) && null !== $data['ID']) {
            $value = $data['ID'];
            if (is_string($data['ID'])) {
                $value = $data['ID'];
            } elseif (null === $data['ID']) {
                $value = $data['ID'];
            }
            $object->iD = $value;
            unset($data['ID']);
        } elseif (array_key_exists('ID', $data)) {
            $object->iD = null;
            unset($data['ID']);
        }
        if (array_key_exists('Version', $data)) {
            $object->version = $this->denormalizer->denormalize($data['Version'], \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class, 'json', $context);
            unset($data['Version']);
        }
        if (array_key_exists('CreatedAt', $data) && null !== $data['CreatedAt']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['CreatedAt']);
            if (false === $date) {
                if (is_string($data['CreatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['CreatedAt'])) {
                    try {
                        $date = new DateTime($data['CreatedAt']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CreatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['CreatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->createdAt = $date;
            unset($data['CreatedAt']);
        } elseif (array_key_exists('CreatedAt', $data)) {
            $object->createdAt = null;
            unset($data['CreatedAt']);
        }
        if (array_key_exists('UpdatedAt', $data) && null !== $data['UpdatedAt']) {
            $date_1 = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['UpdatedAt']);
            if (false === $date_1) {
                if (is_string($data['UpdatedAt']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['UpdatedAt'])) {
                    try {
                        $date_1 = new DateTime($data['UpdatedAt']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['UpdatedAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['UpdatedAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->updatedAt = $date_1;
            unset($data['UpdatedAt']);
        } elseif (array_key_exists('UpdatedAt', $data)) {
            $object->updatedAt = null;
            unset($data['UpdatedAt']);
        }
        if (array_key_exists('Spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class, 'json', $context);
            unset($data['Spec']);
        }
        if (array_key_exists('Endpoint', $data) && null !== $data['Endpoint']) {
            $object->endpoint = $this->denormalizer->denormalize($data['Endpoint'], \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class, 'json', $context);
            unset($data['Endpoint']);
        } elseif (array_key_exists('Endpoint', $data)) {
            $object->endpoint = null;
            unset($data['Endpoint']);
        }
        if (array_key_exists('UpdateStatus', $data) && null !== $data['UpdateStatus']) {
            $object->updateStatus = $this->denormalizer->denormalize($data['UpdateStatus'], \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class, 'json', $context);
            unset($data['UpdateStatus']);
        } elseif (array_key_exists('UpdateStatus', $data)) {
            $object->updateStatus = null;
            unset($data['UpdateStatus']);
        }
        if (array_key_exists('ServiceStatus', $data) && null !== $data['ServiceStatus']) {
            $object->serviceStatus = $this->denormalizer->denormalize($data['ServiceStatus'], \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class, 'json', $context);
            unset($data['ServiceStatus']);
        } elseif (array_key_exists('ServiceStatus', $data)) {
            $object->serviceStatus = null;
            unset($data['ServiceStatus']);
        }
        if (array_key_exists('JobStatus', $data) && null !== $data['JobStatus']) {
            $object->jobStatus = $this->denormalizer->denormalize($data['JobStatus'], \WebProject\DockerApi\Library\Generated\Model\ServiceJobStatus::class, 'json', $context);
            unset($data['JobStatus']);
        } elseif (array_key_exists('JobStatus', $data)) {
            $object->jobStatus = null;
            unset($data['JobStatus']);
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
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $value = $data->iD;
            if (is_string($data->iD)) {
                $value = $data->iD;
            } elseif (null === $data->iD) {
                $value = $data->iD;
            }
            $dataArray['ID'] = $value;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $normalized           = $this->normalizer->normalize($data->version, 'json', $context);
            $dataArray['Version'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['UpdatedAt'] = $data->updatedAt?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $normalized_1      = $this->normalizer->normalize($data->spec, 'json', $context);
            $dataArray['Spec'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('endpoint', get_object_vars($data)) && null !== ($data->endpoint ?? null)) {
            $normalized_2          = $this->normalizer->normalize($data->endpoint, 'json', $context);
            $dataArray['Endpoint'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('updateStatus', get_object_vars($data)) && null !== ($data->updateStatus ?? null)) {
            $normalized_3              = $this->normalizer->normalize($data->updateStatus, 'json', $context);
            $dataArray['UpdateStatus'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('serviceStatus', get_object_vars($data)) && null !== ($data->serviceStatus ?? null)) {
            $normalized_4               = $this->normalizer->normalize($data->serviceStatus, 'json', $context);
            $dataArray['ServiceStatus'] = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('jobStatus', get_object_vars($data)) && null !== ($data->jobStatus ?? null)) {
            $normalized_5           = $this->normalizer->normalize($data->jobStatus, 'json', $context);
            $dataArray['JobStatus'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
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
        return [\WebProject\DockerApi\Library\Generated\Model\Service::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
