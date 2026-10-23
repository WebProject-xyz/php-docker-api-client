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
use function is_string;

class NetworkTaskInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworkTaskInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworkTaskInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworkTaskInfo();
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
        if (array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $value_1 = $data['EndpointID'];
            if (is_string($data['EndpointID'])) {
                $value_1 = $data['EndpointID'];
            } elseif (null === $data['EndpointID']) {
                $value_1 = $data['EndpointID'];
            }
            $object->endpointID = $value_1;
            unset($data['EndpointID']);
        } elseif (array_key_exists('EndpointID', $data)) {
            $object->endpointID = null;
            unset($data['EndpointID']);
        }
        if (array_key_exists('EndpointIP', $data) && null !== $data['EndpointIP']) {
            $value_2 = $data['EndpointIP'];
            if (is_string($data['EndpointIP'])) {
                $value_2 = $data['EndpointIP'];
            } elseif (null === $data['EndpointIP']) {
                $value_2 = $data['EndpointIP'];
            }
            $object->endpointIP = $value_2;
            unset($data['EndpointIP']);
        } elseif (array_key_exists('EndpointIP', $data)) {
            $object->endpointIP = null;
            unset($data['EndpointIP']);
        }
        if (array_key_exists('Info', $data) && null !== $data['Info']) {
            $value_3 = $data['Info'];
            if (is_array($data['Info']) && $this->isOnlyNumericKeys($data['Info'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Info'] as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data['Info']) {
                $value_3 = $data['Info'];
            }
            $object->info = $value_3;
            unset($data['Info']);
        } elseif (array_key_exists('Info', $data)) {
            $object->info = null;
            unset($data['Info']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
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
        if (array_key_exists('endpointID', get_object_vars($data)) && null !== ($data->endpointID ?? null)) {
            $value_1 = $data->endpointID;
            if (is_string($data->endpointID)) {
                $value_1 = $data->endpointID;
            } elseif (null === $data->endpointID) {
                $value_1 = $data->endpointID;
            }
            $dataArray['EndpointID'] = $value_1;
        }
        if (array_key_exists('endpointIP', get_object_vars($data)) && null !== ($data->endpointIP ?? null)) {
            $value_2 = $data->endpointIP;
            if (is_string($data->endpointIP)) {
                $value_2 = $data->endpointIP;
            } elseif (null === $data->endpointIP) {
                $value_2 = $data->endpointIP;
            }
            $dataArray['EndpointIP'] = $value_2;
        }
        if (array_key_exists('info', get_object_vars($data)) && null !== ($data->info ?? null)) {
            $value_3 = $data->info;
            if (is_iterable($data->info)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->info as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data->info) {
                $value_3 = $data->info;
            }
            $dataArray['Info'] = $value_3;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworkTaskInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
