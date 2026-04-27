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
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('EndpointID', $data) && null !== $data['EndpointID']) {
            $value_1 = $data['EndpointID'];
            if (is_string($data['EndpointID'])) {
                $value_1 = $data['EndpointID'];
            } elseif (null === $data['EndpointID']) {
                $value_1 = $data['EndpointID'];
            }
            $object->setEndpointID($value_1);
        } elseif (array_key_exists('EndpointID', $data) && null === $data['EndpointID']) {
            $object->setEndpointID(null);
        }
        if (array_key_exists('EndpointIP', $data) && null !== $data['EndpointIP']) {
            $value_2 = $data['EndpointIP'];
            if (is_string($data['EndpointIP'])) {
                $value_2 = $data['EndpointIP'];
            } elseif (null === $data['EndpointIP']) {
                $value_2 = $data['EndpointIP'];
            }
            $object->setEndpointIP($value_2);
        } elseif (array_key_exists('EndpointIP', $data) && null === $data['EndpointIP']) {
            $object->setEndpointIP(null);
        }
        if (array_key_exists('Info', $data) && null !== $data['Info']) {
            $value_3 = $data['Info'];
            if (is_array($data['Info']) && $this->isOnlyNumericKeys($data['Info'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Info'] as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data['Info']) {
                $value_3 = $data['Info'];
            }
            $object->setInfo($value_3);
        } elseif (array_key_exists('Info', $data) && null === $data['Info']) {
            $object->setInfo(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name')) {
            $value = $data->getName();
            if (is_string($data->getName())) {
                $value = $data->getName();
            } elseif (null === $data->getName()) {
                $value = $data->getName();
            }
            $dataArray['Name'] = $value;
        }
        if ($data->isInitialized('endpointID')) {
            $value_1 = $data->getEndpointID();
            if (is_string($data->getEndpointID())) {
                $value_1 = $data->getEndpointID();
            } elseif (null === $data->getEndpointID()) {
                $value_1 = $data->getEndpointID();
            }
            $dataArray['EndpointID'] = $value_1;
        }
        if ($data->isInitialized('endpointIP')) {
            $value_2 = $data->getEndpointIP();
            if (is_string($data->getEndpointIP())) {
                $value_2 = $data->getEndpointIP();
            } elseif (null === $data->getEndpointIP()) {
                $value_2 = $data->getEndpointIP();
            }
            $dataArray['EndpointIP'] = $value_2;
        }
        if ($data->isInitialized('info')) {
            $value_3 = $data->getInfo();
            if (is_object($data->getInfo())) {
                $values = [];
                foreach ($data->getInfo() as $key => $value_4) {
                    $values[$key] = $value_4;
                }
                $value_3 = $values;
            } elseif (null === $data->getInfo()) {
                $value_3 = $data->getInfo();
            }
            $dataArray['Info'] = $value_3;
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
