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
            $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
        }
        if (array_key_exists('PredicateType', $data)) {
            $object->setPredicateType($data['PredicateType']);
        }
        if (array_key_exists('Statement', $data) && null !== $data['Statement']) {
            $value = $data['Statement'];
            if (null === $data['Statement']) {
                $value = $data['Statement'];
            } elseif (isset($data['Statement'])) {
                $value = $data['Statement'];
            }
            $object->setStatement($value);
        } elseif (array_key_exists('Statement', $data) && null === $data['Statement']) {
            $object->setStatement(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray                  = [];
        $dataArray['Descriptor']    = $this->normalizer->normalize($data->getDescriptor(), 'json', $context);
        $dataArray['PredicateType'] = $data->getPredicateType();
        if ($data->isInitialized('statement')) {
            $value = $data->getStatement();
            if (null === $data->getStatement()) {
                $value = $data->getStatement();
            } elseif (null !== $data->getStatement()) {
                $value = $data->getStatement();
            }
            $dataArray['Statement'] = $value;
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
