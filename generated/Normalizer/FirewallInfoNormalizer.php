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

class FirewallInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\FirewallInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\FirewallInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\FirewallInfo();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value = $data['Driver'];
            }
            $object->setDriver($value);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('Info', $data) && null !== $data['Info']) {
            $value_1 = $data['Info'];
            if (is_array($data['Info']) && $this->isOnlyNumericKeys($data['Info'])) {
                $values = [];
                foreach ($data['Info'] as $value_2) {
                    $values_1 = [];
                    foreach ($value_2 as $value_3) {
                        $values_1[] = $value_3;
                    }
                    $values[] = $values_1;
                }
                $value_1 = $values;
            } elseif (null === $data['Info']) {
                $value_1 = $data['Info'];
            }
            $object->setInfo($value_1);
        } elseif (array_key_exists('Info', $data) && null === $data['Info']) {
            $object->setInfo(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('driver')) {
            $value = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value = $data->getDriver();
            }
            $dataArray['Driver'] = $value;
        }
        if ($data->isInitialized('info')) {
            $value_1 = $data->getInfo();
            if (is_array($data->getInfo())) {
                $values = [];
                foreach ($data->getInfo() as $value_2) {
                    $values_1 = [];
                    foreach ($value_2 as $value_3) {
                        $values_1[] = $value_3;
                    }
                    $values[] = $values_1;
                }
                $value_1 = $values;
            } elseif (null === $data->getInfo()) {
                $value_1 = $data->getInfo();
            }
            $dataArray['Info'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\FirewallInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
