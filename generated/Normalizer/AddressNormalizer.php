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

class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Address::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Address::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\Address();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $value = $data['Addr'];
            if (is_string($data['Addr'])) {
                $value = $data['Addr'];
            } elseif (null === $data['Addr']) {
                $value = $data['Addr'];
            }
            $object->setAddr($value);
        } elseif (array_key_exists('Addr', $data) && null === $data['Addr']) {
            $object->setAddr(null);
        }
        if (array_key_exists('PrefixLen', $data) && null !== $data['PrefixLen']) {
            $value_1 = $data['PrefixLen'];
            if (is_int($data['PrefixLen'])) {
                $value_1 = $data['PrefixLen'];
            } elseif (null === $data['PrefixLen']) {
                $value_1 = $data['PrefixLen'];
            }
            $object->setPrefixLen($value_1);
        } elseif (array_key_exists('PrefixLen', $data) && null === $data['PrefixLen']) {
            $object->setPrefixLen(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('addr')) {
            $value = $data->getAddr();
            if (is_string($data->getAddr())) {
                $value = $data->getAddr();
            } elseif (null === $data->getAddr()) {
                $value = $data->getAddr();
            }
            $dataArray['Addr'] = $value;
        }
        if ($data->isInitialized('prefixLen')) {
            $value_1 = $data->getPrefixLen();
            if (is_int($data->getPrefixLen())) {
                $value_1 = $data->getPrefixLen();
            } elseif (null === $data->getPrefixLen()) {
                $value_1 = $data->getPrefixLen();
            }
            $dataArray['PrefixLen'] = $value_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Address::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
