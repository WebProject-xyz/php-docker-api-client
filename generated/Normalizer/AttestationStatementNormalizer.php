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

class AttestationStatementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\AttestationStatement::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\AttestationStatement::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\AttestationStatement();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Descriptor', $data)) {
            $object->descriptor = $this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context);
            unset($data['Descriptor']);
        }
        if (array_key_exists('PredicateType', $data)) {
            $object->predicateType = $data['PredicateType'];
            unset($data['PredicateType']);
        }
        if (array_key_exists('Statement', $data) && null !== $data['Statement']) {
            $value = $data['Statement'];
            if (null === $data['Statement']) {
                $value = $data['Statement'];
            } elseif (isset($data['Statement'])) {
                $value = $data['Statement'];
            }
            $object->statement = $value;
            unset($data['Statement']);
        } elseif (array_key_exists('Statement', $data)) {
            $object->statement = null;
            unset($data['Statement']);
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
        $dataArray                  = [];
        $normalized                 = null === $data->descriptor ? null : $this->normalizer->normalize($data->descriptor, 'json', $context);
        $dataArray['Descriptor']    = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        $dataArray['PredicateType'] = $data->predicateType;
        if (array_key_exists('statement', get_object_vars($data)) && null !== ($data->statement ?? null)) {
            $value = $data->statement;
            if (null === $data->statement) {
                $value = $data->statement;
            } elseif (null !== $data->statement) {
                $value = $data->statement;
            }
            $dataArray['Statement'] = $value;
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
        return [\WebProject\DockerApi\Library\Generated\Model\AttestationStatement::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
