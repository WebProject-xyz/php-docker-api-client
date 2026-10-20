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

class NetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Network::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Network::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Network();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Internal', $data) && is_int($data['Internal'])) {
            $data['Internal'] = (bool) $data['Internal'];
        }
        if (array_key_exists('Attachable', $data) && is_int($data['Attachable'])) {
            $data['Attachable'] = (bool) $data['Attachable'];
        }
        if (array_key_exists('Ingress', $data) && is_int($data['Ingress'])) {
            $data['Ingress'] = (bool) $data['Ingress'];
        }
        if (array_key_exists('ConfigOnly', $data) && is_int($data['ConfigOnly'])) {
            $data['ConfigOnly'] = (bool) $data['ConfigOnly'];
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
        if (array_key_exists('Id', $data) && null !== $data['Id']) {
            $value_1 = $data['Id'];
            if (is_string($data['Id'])) {
                $value_1 = $data['Id'];
            } elseif (null === $data['Id']) {
                $value_1 = $data['Id'];
            }
            $object->id = $value_1;
            unset($data['Id']);
        } elseif (array_key_exists('Id', $data)) {
            $object->id = null;
            unset($data['Id']);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Created']);
            if (false === $date) {
                if (is_string($data['Created']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['Created'])) {
                    try {
                        $date = new DateTime($data['Created']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Created'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Created'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->created = $date;
            unset($data['Created']);
        } elseif (array_key_exists('Created', $data)) {
            $object->created = null;
            unset($data['Created']);
        }
        if (array_key_exists('Scope', $data) && null !== $data['Scope']) {
            $value_2 = $data['Scope'];
            if (is_string($data['Scope'])) {
                $value_2 = $data['Scope'];
            } elseif (null === $data['Scope']) {
                $value_2 = $data['Scope'];
            }
            $object->scope = $value_2;
            unset($data['Scope']);
        } elseif (array_key_exists('Scope', $data)) {
            $object->scope = null;
            unset($data['Scope']);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_3 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_3 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_3 = $data['Driver'];
            }
            $object->driver = $value_3;
            unset($data['Driver']);
        } elseif (array_key_exists('Driver', $data)) {
            $object->driver = null;
            unset($data['Driver']);
        }
        if (array_key_exists('EnableIPv4', $data) && null !== $data['EnableIPv4']) {
            $value_4 = $data['EnableIPv4'];
            if (is_bool($data['EnableIPv4'])) {
                $value_4 = $data['EnableIPv4'];
            } elseif (null === $data['EnableIPv4']) {
                $value_4 = $data['EnableIPv4'];
            }
            $object->enableIPv4 = $value_4;
            unset($data['EnableIPv4']);
        } elseif (array_key_exists('EnableIPv4', $data)) {
            $object->enableIPv4 = null;
            unset($data['EnableIPv4']);
        }
        if (array_key_exists('EnableIPv6', $data) && null !== $data['EnableIPv6']) {
            $value_5 = $data['EnableIPv6'];
            if (is_bool($data['EnableIPv6'])) {
                $value_5 = $data['EnableIPv6'];
            } elseif (null === $data['EnableIPv6']) {
                $value_5 = $data['EnableIPv6'];
            }
            $object->enableIPv6 = $value_5;
            unset($data['EnableIPv6']);
        } elseif (array_key_exists('EnableIPv6', $data)) {
            $object->enableIPv6 = null;
            unset($data['EnableIPv6']);
        }
        if (array_key_exists('IPAM', $data)) {
            $object->iPAM = $this->denormalizer->denormalize($data['IPAM'], \WebProject\DockerApi\Library\Generated\Model\IPAM::class, 'json', $context);
            unset($data['IPAM']);
        }
        if (array_key_exists('Internal', $data)) {
            $object->internal = $data['Internal'];
            unset($data['Internal']);
        }
        if (array_key_exists('Attachable', $data)) {
            $object->attachable = $data['Attachable'];
            unset($data['Attachable']);
        }
        if (array_key_exists('Ingress', $data)) {
            $object->ingress = $data['Ingress'];
            unset($data['Ingress']);
        }
        if (array_key_exists('ConfigFrom', $data)) {
            $object->configFrom = $this->denormalizer->denormalize($data['ConfigFrom'], \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class, 'json', $context);
            unset($data['ConfigFrom']);
        }
        if (array_key_exists('ConfigOnly', $data)) {
            $object->configOnly = $data['ConfigOnly'];
            unset($data['ConfigOnly']);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_6 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Options'] as $key => $value_7) {
                    $values[$key] = $value_7;
                }
                $value_6 = $values;
            } elseif (null === $data['Options']) {
                $value_6 = $data['Options'];
            }
            $object->options = $value_6;
            unset($data['Options']);
        } elseif (array_key_exists('Options', $data)) {
            $object->options = null;
            unset($data['Options']);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_8 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Labels'] as $key_1 => $value_9) {
                    $values_1[$key_1] = $value_9;
                }
                $value_8 = $values_1;
            } elseif (null === $data['Labels']) {
                $value_8 = $data['Labels'];
            }
            $object->labels = $value_8;
            unset($data['Labels']);
        } elseif (array_key_exists('Labels', $data)) {
            $object->labels = null;
            unset($data['Labels']);
        }
        if (array_key_exists('Peers', $data) && null !== $data['Peers']) {
            $values_2 = [];
            foreach ($data['Peers'] as $value_10) {
                $values_2[] = $this->denormalizer->denormalize($value_10, \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class, 'json', $context);
            }
            $object->peers = $values_2;
            unset($data['Peers']);
        } elseif (array_key_exists('Peers', $data)) {
            $object->peers = null;
            unset($data['Peers']);
        }
        foreach ($data as $key_2 => $value_11) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_11;
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $value_1 = $data->id;
            if (is_string($data->id)) {
                $value_1 = $data->id;
            } elseif (null === $data->id) {
                $value_1 = $data->id;
            }
            $dataArray['Id'] = $value_1;
        }
        if (array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['Created'] = $data->created?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('scope', get_object_vars($data)) && null !== ($data->scope ?? null)) {
            $value_2 = $data->scope;
            if (is_string($data->scope)) {
                $value_2 = $data->scope;
            } elseif (null === $data->scope) {
                $value_2 = $data->scope;
            }
            $dataArray['Scope'] = $value_2;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $value_3 = $data->driver;
            if (is_string($data->driver)) {
                $value_3 = $data->driver;
            } elseif (null === $data->driver) {
                $value_3 = $data->driver;
            }
            $dataArray['Driver'] = $value_3;
        }
        if (array_key_exists('enableIPv4', get_object_vars($data)) && null !== ($data->enableIPv4 ?? null)) {
            $value_4 = $data->enableIPv4;
            if (is_bool($data->enableIPv4)) {
                $value_4 = $data->enableIPv4;
            } elseif (null === $data->enableIPv4) {
                $value_4 = $data->enableIPv4;
            }
            $dataArray['EnableIPv4'] = $value_4;
        }
        if (array_key_exists('enableIPv6', get_object_vars($data)) && null !== ($data->enableIPv6 ?? null)) {
            $value_5 = $data->enableIPv6;
            if (is_bool($data->enableIPv6)) {
                $value_5 = $data->enableIPv6;
            } elseif (null === $data->enableIPv6) {
                $value_5 = $data->enableIPv6;
            }
            $dataArray['EnableIPv6'] = $value_5;
        }
        if (array_key_exists('iPAM', get_object_vars($data)) && null !== ($data->iPAM ?? null)) {
            $normalized        = $this->normalizer->normalize($data->iPAM, 'json', $context);
            $dataArray['IPAM'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('internal', get_object_vars($data)) && null !== ($data->internal ?? null)) {
            $dataArray['Internal'] = $data->internal;
        }
        if (array_key_exists('attachable', get_object_vars($data)) && null !== ($data->attachable ?? null)) {
            $dataArray['Attachable'] = $data->attachable;
        }
        if (array_key_exists('ingress', get_object_vars($data)) && null !== ($data->ingress ?? null)) {
            $dataArray['Ingress'] = $data->ingress;
        }
        if (array_key_exists('configFrom', get_object_vars($data)) && null !== ($data->configFrom ?? null)) {
            $normalized_1            = $this->normalizer->normalize($data->configFrom, 'json', $context);
            $dataArray['ConfigFrom'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('configOnly', get_object_vars($data)) && null !== ($data->configOnly ?? null)) {
            $dataArray['ConfigOnly'] = $data->configOnly;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $value_6 = $data->options;
            if (is_iterable($data->options)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->options as $key => $value_7) {
                    $values[$key] = $value_7;
                }
                $value_6 = $values;
            } elseif (null === $data->options) {
                $value_6 = $data->options;
            }
            $dataArray['Options'] = $value_6;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value_8 = $data->labels;
            if (is_iterable($data->labels)) {
                $values_1 = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->labels as $key_1 => $value_9) {
                    $values_1[$key_1] = $value_9;
                }
                $value_8 = $values_1;
            } elseif (null === $data->labels) {
                $value_8 = $data->labels;
            }
            $dataArray['Labels'] = $value_8;
        }
        if (array_key_exists('peers', get_object_vars($data)) && null !== ($data->peers ?? null)) {
            $values_2 = [];
            foreach ($data->peers as $value_10) {
                $normalized_2 = null === $value_10 ? null : $this->normalizer->normalize($value_10, 'json', $context);
                $values_2[]   = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['Peers'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_11) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_11;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Network::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
