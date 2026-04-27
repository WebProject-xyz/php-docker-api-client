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

class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\PluginsInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Volume', $data) && null !== $data['Volume']) {
            $value = $data['Volume'];
            if (is_array($data['Volume']) && $this->isOnlyNumericKeys($data['Volume'])) {
                $values = [];
                foreach ($data['Volume'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['Volume']) {
                $value = $data['Volume'];
            }
            $object->setVolume($value);
        } elseif (array_key_exists('Volume', $data) && null === $data['Volume']) {
            $object->setVolume(null);
        }
        if (array_key_exists('Network', $data) && null !== $data['Network']) {
            $value_2 = $data['Network'];
            if (is_array($data['Network']) && $this->isOnlyNumericKeys($data['Network'])) {
                $values_1 = [];
                foreach ($data['Network'] as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data['Network']) {
                $value_2 = $data['Network'];
            }
            $object->setNetwork($value_2);
        } elseif (array_key_exists('Network', $data) && null === $data['Network']) {
            $object->setNetwork(null);
        }
        if (array_key_exists('Authorization', $data) && null !== $data['Authorization']) {
            $value_4 = $data['Authorization'];
            if (is_array($data['Authorization']) && $this->isOnlyNumericKeys($data['Authorization'])) {
                $values_2 = [];
                foreach ($data['Authorization'] as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            } elseif (null === $data['Authorization']) {
                $value_4 = $data['Authorization'];
            }
            $object->setAuthorization($value_4);
        } elseif (array_key_exists('Authorization', $data) && null === $data['Authorization']) {
            $object->setAuthorization(null);
        }
        if (array_key_exists('Log', $data) && null !== $data['Log']) {
            $value_6 = $data['Log'];
            if (is_array($data['Log']) && $this->isOnlyNumericKeys($data['Log'])) {
                $values_3 = [];
                foreach ($data['Log'] as $value_7) {
                    $values_3[] = $value_7;
                }
                $value_6 = $values_3;
            } elseif (null === $data['Log']) {
                $value_6 = $data['Log'];
            }
            $object->setLog($value_6);
        } elseif (array_key_exists('Log', $data) && null === $data['Log']) {
            $object->setLog(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('volume')) {
            $value = $data->getVolume();
            if (is_array($data->getVolume())) {
                $values = [];
                foreach ($data->getVolume() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->getVolume()) {
                $value = $data->getVolume();
            }
            $dataArray['Volume'] = $value;
        }
        if ($data->isInitialized('network')) {
            $value_2 = $data->getNetwork();
            if (is_array($data->getNetwork())) {
                $values_1 = [];
                foreach ($data->getNetwork() as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            } elseif (null === $data->getNetwork()) {
                $value_2 = $data->getNetwork();
            }
            $dataArray['Network'] = $value_2;
        }
        if ($data->isInitialized('authorization')) {
            $value_4 = $data->getAuthorization();
            if (is_array($data->getAuthorization())) {
                $values_2 = [];
                foreach ($data->getAuthorization() as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            } elseif (null === $data->getAuthorization()) {
                $value_4 = $data->getAuthorization();
            }
            $dataArray['Authorization'] = $value_4;
        }
        if ($data->isInitialized('log')) {
            $value_6 = $data->getLog();
            if (is_array($data->getLog())) {
                $values_3 = [];
                foreach ($data->getLog() as $value_7) {
                    $values_3[] = $value_7;
                }
                $value_6 = $values_3;
            } elseif (null === $data->getLog()) {
                $value_6 = $data->getLog();
            }
            $dataArray['Log'] = $value_6;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
