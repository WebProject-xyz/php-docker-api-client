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

class SwarmSpecCAConfigExternalCAsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Protocol', $data) && null !== $data['Protocol']) {
            $value = $data['Protocol'];
            if (is_string($data['Protocol'])) {
                $value = $data['Protocol'];
            } elseif (null === $data['Protocol']) {
                $value = $data['Protocol'];
            }
            $object->setProtocol($value);
        } elseif (array_key_exists('Protocol', $data) && null === $data['Protocol']) {
            $object->setProtocol(null);
        }
        if (array_key_exists('URL', $data) && null !== $data['URL']) {
            $value_1 = $data['URL'];
            if (is_string($data['URL'])) {
                $value_1 = $data['URL'];
            } elseif (null === $data['URL']) {
                $value_1 = $data['URL'];
            }
            $object->setURL($value_1);
        } elseif (array_key_exists('URL', $data) && null === $data['URL']) {
            $object->setURL(null);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_2 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data['Options']) {
                $value_2 = $data['Options'];
            }
            $object->setOptions($value_2);
        } elseif (array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }
        if (array_key_exists('CACert', $data) && null !== $data['CACert']) {
            $value_4 = $data['CACert'];
            if (is_string($data['CACert'])) {
                $value_4 = $data['CACert'];
            } elseif (null === $data['CACert']) {
                $value_4 = $data['CACert'];
            }
            $object->setCACert($value_4);
        } elseif (array_key_exists('CACert', $data) && null === $data['CACert']) {
            $object->setCACert(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('protocol')) {
            $value = $data->getProtocol();
            if (is_string($data->getProtocol())) {
                $value = $data->getProtocol();
            } elseif (null === $data->getProtocol()) {
                $value = $data->getProtocol();
            }
            $dataArray['Protocol'] = $value;
        }
        if ($data->isInitialized('uRL')) {
            $value_1 = $data->getURL();
            if (is_string($data->getURL())) {
                $value_1 = $data->getURL();
            } elseif (null === $data->getURL()) {
                $value_1 = $data->getURL();
            }
            $dataArray['URL'] = $value_1;
        }
        if ($data->isInitialized('options')) {
            $value_2 = $data->getOptions();
            if (is_object($data->getOptions())) {
                $values = [];
                foreach ($data->getOptions() as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data->getOptions()) {
                $value_2 = $data->getOptions();
            }
            $dataArray['Options'] = $value_2;
        }
        if ($data->isInitialized('cACert')) {
            $value_4 = $data->getCACert();
            if (is_string($data->getCACert())) {
                $value_4 = $data->getCACert();
            } elseif (null === $data->getCACert()) {
                $value_4 = $data->getCACert();
            }
            $dataArray['CACert'] = $value_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
