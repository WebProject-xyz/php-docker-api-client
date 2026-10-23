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
use function is_int;
use function is_object;
use function is_string;

class EndpointPortConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig();
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
        if (array_key_exists('Protocol', $data) && null !== $data['Protocol']) {
            $value_1 = $data['Protocol'];
            if (is_string($data['Protocol'])) {
                $value_1 = $data['Protocol'];
            } elseif (null === $data['Protocol']) {
                $value_1 = $data['Protocol'];
            }
            $object->protocol = $value_1;
            unset($data['Protocol']);
        } elseif (array_key_exists('Protocol', $data)) {
            $object->protocol = null;
            unset($data['Protocol']);
        }
        if (array_key_exists('TargetPort', $data) && null !== $data['TargetPort']) {
            $value_2 = $data['TargetPort'];
            if (is_int($data['TargetPort'])) {
                $value_2 = $data['TargetPort'];
            } elseif (null === $data['TargetPort']) {
                $value_2 = $data['TargetPort'];
            }
            $object->targetPort = $value_2;
            unset($data['TargetPort']);
        } elseif (array_key_exists('TargetPort', $data)) {
            $object->targetPort = null;
            unset($data['TargetPort']);
        }
        if (array_key_exists('PublishedPort', $data) && null !== $data['PublishedPort']) {
            $value_3 = $data['PublishedPort'];
            if (is_int($data['PublishedPort'])) {
                $value_3 = $data['PublishedPort'];
            } elseif (null === $data['PublishedPort']) {
                $value_3 = $data['PublishedPort'];
            }
            $object->publishedPort = $value_3;
            unset($data['PublishedPort']);
        } elseif (array_key_exists('PublishedPort', $data)) {
            $object->publishedPort = null;
            unset($data['PublishedPort']);
        }
        if (array_key_exists('PublishMode', $data) && null !== $data['PublishMode']) {
            $value_4 = $data['PublishMode'];
            if (is_string($data['PublishMode'])) {
                $value_4 = $data['PublishMode'];
            } elseif (null === $data['PublishMode']) {
                $value_4 = $data['PublishMode'];
            }
            $object->publishMode = $value_4;
            unset($data['PublishMode']);
        } elseif (array_key_exists('PublishMode', $data)) {
            $object->publishMode = null;
            unset($data['PublishMode']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name;
            if (is_string($data->name)) {
                $value = $data->name;
            } elseif (null === $data->name) {
                $value = $data->name;
            }
            $dataArray['Name'] = $value;
        }
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $value_1 = $data->protocol;
            if (is_string($data->protocol)) {
                $value_1 = $data->protocol;
            } elseif (null === $data->protocol) {
                $value_1 = $data->protocol;
            }
            $dataArray['Protocol'] = $value_1;
        }
        if (array_key_exists('targetPort', get_object_vars($data)) && null !== ($data->targetPort ?? null)) {
            $value_2 = $data->targetPort;
            if (is_int($data->targetPort)) {
                $value_2 = $data->targetPort;
            } elseif (null === $data->targetPort) {
                $value_2 = $data->targetPort;
            }
            $dataArray['TargetPort'] = $value_2;
        }
        if (array_key_exists('publishedPort', get_object_vars($data)) && null !== ($data->publishedPort ?? null)) {
            $value_3 = $data->publishedPort;
            if (is_int($data->publishedPort)) {
                $value_3 = $data->publishedPort;
            } elseif (null === $data->publishedPort) {
                $value_3 = $data->publishedPort;
            }
            $dataArray['PublishedPort'] = $value_3;
        }
        if (array_key_exists('publishMode', get_object_vars($data)) && null !== ($data->publishMode ?? null)) {
            $value_4 = $data->publishMode;
            if (is_string($data->publishMode)) {
                $value_4 = $data->publishMode;
            } elseif (null === $data->publishMode) {
                $value_4 = $data->publishMode;
            }
            $dataArray['PublishMode'] = $value_4;
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
        return [\WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
