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
use function is_bool;
use function is_int;
use function is_object;
use function is_string;

class ClusterInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ClusterInfo();
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
            $object->spec = $this->denormalizer->denormalize($data['Spec'], \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class, 'json', $context);
            unset($data['Spec']);
        }
        if (array_key_exists('TLSInfo', $data)) {
            $object->tLSInfo = $this->denormalizer->denormalize($data['TLSInfo'], \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class, 'json', $context);
            unset($data['TLSInfo']);
        }
        if (array_key_exists('RootRotationInProgress', $data) && null !== $data['RootRotationInProgress']) {
            $value_1 = $data['RootRotationInProgress'];
            if (is_bool($data['RootRotationInProgress'])) {
                $value_1 = $data['RootRotationInProgress'];
            } elseif (null === $data['RootRotationInProgress']) {
                $value_1 = $data['RootRotationInProgress'];
            }
            $object->rootRotationInProgress = $value_1;
            unset($data['RootRotationInProgress']);
        } elseif (array_key_exists('RootRotationInProgress', $data)) {
            $object->rootRotationInProgress = null;
            unset($data['RootRotationInProgress']);
        }
        if (array_key_exists('DataPathPort', $data) && null !== $data['DataPathPort']) {
            $value_2 = $data['DataPathPort'];
            if (is_int($data['DataPathPort'])) {
                $value_2 = $data['DataPathPort'];
            } elseif (null === $data['DataPathPort']) {
                $value_2 = $data['DataPathPort'];
            }
            $object->dataPathPort = $value_2;
            unset($data['DataPathPort']);
        } elseif (array_key_exists('DataPathPort', $data)) {
            $object->dataPathPort = null;
            unset($data['DataPathPort']);
        }
        if (array_key_exists('DefaultAddrPool', $data) && null !== $data['DefaultAddrPool']) {
            $values = [];
            foreach ($data['DefaultAddrPool'] as $value_3) {
                $values[] = $value_3;
            }
            $object->defaultAddrPool = $values;
            unset($data['DefaultAddrPool']);
        } elseif (array_key_exists('DefaultAddrPool', $data)) {
            $object->defaultAddrPool = null;
            unset($data['DefaultAddrPool']);
        }
        if (array_key_exists('SubnetSize', $data) && null !== $data['SubnetSize']) {
            $value_4 = $data['SubnetSize'];
            if (is_int($data['SubnetSize'])) {
                $value_4 = $data['SubnetSize'];
            } elseif (null === $data['SubnetSize']) {
                $value_4 = $data['SubnetSize'];
            }
            $object->subnetSize = $value_4;
            unset($data['SubnetSize']);
        } elseif (array_key_exists('SubnetSize', $data)) {
            $object->subnetSize = null;
            unset($data['SubnetSize']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        if (array_key_exists('tLSInfo', get_object_vars($data)) && null !== ($data->tLSInfo ?? null)) {
            $normalized_2         = $this->normalizer->normalize($data->tLSInfo, 'json', $context);
            $dataArray['TLSInfo'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('rootRotationInProgress', get_object_vars($data)) && null !== ($data->rootRotationInProgress ?? null)) {
            $value_1 = $data->rootRotationInProgress;
            if (is_bool($data->rootRotationInProgress)) {
                $value_1 = $data->rootRotationInProgress;
            } elseif (null === $data->rootRotationInProgress) {
                $value_1 = $data->rootRotationInProgress;
            }
            $dataArray['RootRotationInProgress'] = $value_1;
        }
        if (array_key_exists('dataPathPort', get_object_vars($data)) && null !== ($data->dataPathPort ?? null)) {
            $value_2 = $data->dataPathPort;
            if (is_int($data->dataPathPort)) {
                $value_2 = $data->dataPathPort;
            } elseif (null === $data->dataPathPort) {
                $value_2 = $data->dataPathPort;
            }
            $dataArray['DataPathPort'] = $value_2;
        }
        if (array_key_exists('defaultAddrPool', get_object_vars($data)) && null !== ($data->defaultAddrPool ?? null)) {
            $values = [];
            foreach ($data->defaultAddrPool as $value_3) {
                $values[] = $value_3;
            }
            $dataArray['DefaultAddrPool'] = $values;
        }
        if (array_key_exists('subnetSize', get_object_vars($data)) && null !== ($data->subnetSize ?? null)) {
            $value_4 = $data->subnetSize;
            if (is_int($data->subnetSize)) {
                $value_4 = $data->subnetSize;
            } elseif (null === $data->subnetSize) {
                $value_4 = $data->subnetSize;
            }
            $dataArray['SubnetSize'] = $value_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
