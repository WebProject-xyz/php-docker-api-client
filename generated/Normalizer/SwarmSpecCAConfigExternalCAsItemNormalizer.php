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
            $object->protocol = $value;
            unset($data['Protocol']);
        } elseif (array_key_exists('Protocol', $data)) {
            $object->protocol = null;
            unset($data['Protocol']);
        }
        if (array_key_exists('URL', $data) && null !== $data['URL']) {
            $value_1 = $data['URL'];
            if (is_string($data['URL'])) {
                $value_1 = $data['URL'];
            } elseif (null === $data['URL']) {
                $value_1 = $data['URL'];
            }
            $object->uRL = $value_1;
            unset($data['URL']);
        } elseif (array_key_exists('URL', $data)) {
            $object->uRL = null;
            unset($data['URL']);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_2 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data['Options'] as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data['Options']) {
                $value_2 = $data['Options'];
            }
            $object->options = $value_2;
            unset($data['Options']);
        } elseif (array_key_exists('Options', $data)) {
            $object->options = null;
            unset($data['Options']);
        }
        if (array_key_exists('CACert', $data) && null !== $data['CACert']) {
            $value_4 = $data['CACert'];
            if (is_string($data['CACert'])) {
                $value_4 = $data['CACert'];
            } elseif (null === $data['CACert']) {
                $value_4 = $data['CACert'];
            }
            $object->cACert = $value_4;
            unset($data['CACert']);
        } elseif (array_key_exists('CACert', $data)) {
            $object->cACert = null;
            unset($data['CACert']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $value = $data->protocol;
            if (is_string($data->protocol)) {
                $value = $data->protocol;
            } elseif (null === $data->protocol) {
                $value = $data->protocol;
            }
            $dataArray['Protocol'] = $value;
        }
        if (array_key_exists('uRL', get_object_vars($data)) && null !== ($data->uRL ?? null)) {
            $value_1 = $data->uRL;
            if (is_string($data->uRL)) {
                $value_1 = $data->uRL;
            } elseif (null === $data->uRL) {
                $value_1 = $data->uRL;
            }
            $dataArray['URL'] = $value_1;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $value_2 = $data->options;
            if (is_iterable($data->options)) {
                $values = new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject();
                foreach ($data->options as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            } elseif (null === $data->options) {
                $value_2 = $data->options;
            }
            $dataArray['Options'] = $value_2;
        }
        if (array_key_exists('cACert', get_object_vars($data)) && null !== ($data->cACert ?? null)) {
            $value_4 = $data->cACert;
            if (is_string($data->cACert)) {
                $value_4 = $data->cACert;
            } elseif (null === $data->cACert) {
                $value_4 = $data->cACert;
            }
            $dataArray['CACert'] = $value_4;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
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
