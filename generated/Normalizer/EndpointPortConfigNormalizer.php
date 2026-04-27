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
            $object->setName($value);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Protocol', $data) && null !== $data['Protocol']) {
            $value_1 = $data['Protocol'];
            if (is_string($data['Protocol'])) {
                $value_1 = $data['Protocol'];
            } elseif (null === $data['Protocol']) {
                $value_1 = $data['Protocol'];
            }
            $object->setProtocol($value_1);
        } elseif (array_key_exists('Protocol', $data) && null === $data['Protocol']) {
            $object->setProtocol(null);
        }
        if (array_key_exists('TargetPort', $data) && null !== $data['TargetPort']) {
            $value_2 = $data['TargetPort'];
            if (is_int($data['TargetPort'])) {
                $value_2 = $data['TargetPort'];
            } elseif (null === $data['TargetPort']) {
                $value_2 = $data['TargetPort'];
            }
            $object->setTargetPort($value_2);
        } elseif (array_key_exists('TargetPort', $data) && null === $data['TargetPort']) {
            $object->setTargetPort(null);
        }
        if (array_key_exists('PublishedPort', $data) && null !== $data['PublishedPort']) {
            $value_3 = $data['PublishedPort'];
            if (is_int($data['PublishedPort'])) {
                $value_3 = $data['PublishedPort'];
            } elseif (null === $data['PublishedPort']) {
                $value_3 = $data['PublishedPort'];
            }
            $object->setPublishedPort($value_3);
        } elseif (array_key_exists('PublishedPort', $data) && null === $data['PublishedPort']) {
            $object->setPublishedPort(null);
        }
        if (array_key_exists('PublishMode', $data) && null !== $data['PublishMode']) {
            $value_4 = $data['PublishMode'];
            if (is_string($data['PublishMode'])) {
                $value_4 = $data['PublishMode'];
            } elseif (null === $data['PublishMode']) {
                $value_4 = $data['PublishMode'];
            }
            $object->setPublishMode($value_4);
        } elseif (array_key_exists('PublishMode', $data) && null === $data['PublishMode']) {
            $object->setPublishMode(null);
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
        if ($data->isInitialized('protocol')) {
            $value_1 = $data->getProtocol();
            if (is_string($data->getProtocol())) {
                $value_1 = $data->getProtocol();
            } elseif (null === $data->getProtocol()) {
                $value_1 = $data->getProtocol();
            }
            $dataArray['Protocol'] = $value_1;
        }
        if ($data->isInitialized('targetPort')) {
            $value_2 = $data->getTargetPort();
            if (is_int($data->getTargetPort())) {
                $value_2 = $data->getTargetPort();
            } elseif (null === $data->getTargetPort()) {
                $value_2 = $data->getTargetPort();
            }
            $dataArray['TargetPort'] = $value_2;
        }
        if ($data->isInitialized('publishedPort')) {
            $value_3 = $data->getPublishedPort();
            if (is_int($data->getPublishedPort())) {
                $value_3 = $data->getPublishedPort();
            } elseif (null === $data->getPublishedPort()) {
                $value_3 = $data->getPublishedPort();
            }
            $dataArray['PublishedPort'] = $value_3;
        }
        if ($data->isInitialized('publishMode')) {
            $value_4 = $data->getPublishMode();
            if (is_string($data->getPublishMode())) {
                $value_4 = $data->getPublishMode();
            } elseif (null === $data->getPublishMode()) {
                $value_4 = $data->getPublishMode();
            }
            $dataArray['PublishMode'] = $value_4;
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
