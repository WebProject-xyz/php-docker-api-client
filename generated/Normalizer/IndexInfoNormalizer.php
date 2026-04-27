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
use function is_bool;
use function is_object;
use function is_string;

class IndexInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\IndexInfo();
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
        if (array_key_exists('Mirrors', $data) && null !== $data['Mirrors']) {
            $value_1 = $data['Mirrors'];
            if (is_array($data['Mirrors']) && $this->isOnlyNumericKeys($data['Mirrors'])) {
                $values = [];
                foreach ($data['Mirrors'] as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data['Mirrors']) {
                $value_1 = $data['Mirrors'];
            }
            $object->setMirrors($value_1);
        } elseif (array_key_exists('Mirrors', $data) && null === $data['Mirrors']) {
            $object->setMirrors(null);
        }
        if (array_key_exists('Secure', $data) && null !== $data['Secure']) {
            $value_3 = $data['Secure'];
            if (is_bool($data['Secure'])) {
                $value_3 = $data['Secure'];
            } elseif (null === $data['Secure']) {
                $value_3 = $data['Secure'];
            }
            $object->setSecure($value_3);
        } elseif (array_key_exists('Secure', $data) && null === $data['Secure']) {
            $object->setSecure(null);
        }
        if (array_key_exists('Official', $data) && null !== $data['Official']) {
            $value_4 = $data['Official'];
            if (is_bool($data['Official'])) {
                $value_4 = $data['Official'];
            } elseif (null === $data['Official']) {
                $value_4 = $data['Official'];
            }
            $object->setOfficial($value_4);
        } elseif (array_key_exists('Official', $data) && null === $data['Official']) {
            $object->setOfficial(null);
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
        if ($data->isInitialized('mirrors')) {
            $value_1 = $data->getMirrors();
            if (is_array($data->getMirrors())) {
                $values = [];
                foreach ($data->getMirrors() as $value_2) {
                    $values[] = $value_2;
                }
                $value_1 = $values;
            } elseif (null === $data->getMirrors()) {
                $value_1 = $data->getMirrors();
            }
            $dataArray['Mirrors'] = $value_1;
        }
        if ($data->isInitialized('secure')) {
            $value_3 = $data->getSecure();
            if (is_bool($data->getSecure())) {
                $value_3 = $data->getSecure();
            } elseif (null === $data->getSecure()) {
                $value_3 = $data->getSecure();
            }
            $dataArray['Secure'] = $value_3;
        }
        if ($data->isInitialized('official')) {
            $value_4 = $data->getOfficial();
            if (is_bool($data->getOfficial())) {
                $value_4 = $data->getOfficial();
            } elseif (null === $data->getOfficial()) {
                $value_4 = $data->getOfficial();
            }
            $dataArray['Official'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\IndexInfo::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
