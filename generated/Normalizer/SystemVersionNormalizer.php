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

class SystemVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SystemVersion();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Platform', $data) && null !== $data['Platform']) {
            $object->platform = $this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class, 'json', $context);
            unset($data['Platform']);
        } elseif (array_key_exists('Platform', $data)) {
            $object->platform = null;
            unset($data['Platform']);
        }
        if (array_key_exists('Components', $data) && null !== $data['Components']) {
            $values = [];
            foreach ($data['Components'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class, 'json', $context);
            }
            $object->components = $values;
            unset($data['Components']);
        } elseif (array_key_exists('Components', $data)) {
            $object->components = null;
            unset($data['Components']);
        }
        if (array_key_exists('Version', $data) && null !== $data['Version']) {
            $value_1 = $data['Version'];
            if (is_string($data['Version'])) {
                $value_1 = $data['Version'];
            } elseif (null === $data['Version']) {
                $value_1 = $data['Version'];
            }
            $object->version = $value_1;
            unset($data['Version']);
        } elseif (array_key_exists('Version', $data)) {
            $object->version = null;
            unset($data['Version']);
        }
        if (array_key_exists('ApiVersion', $data) && null !== $data['ApiVersion']) {
            $value_2 = $data['ApiVersion'];
            if (is_string($data['ApiVersion'])) {
                $value_2 = $data['ApiVersion'];
            } elseif (null === $data['ApiVersion']) {
                $value_2 = $data['ApiVersion'];
            }
            $object->apiVersion = $value_2;
            unset($data['ApiVersion']);
        } elseif (array_key_exists('ApiVersion', $data)) {
            $object->apiVersion = null;
            unset($data['ApiVersion']);
        }
        if (array_key_exists('MinAPIVersion', $data) && null !== $data['MinAPIVersion']) {
            $value_3 = $data['MinAPIVersion'];
            if (is_string($data['MinAPIVersion'])) {
                $value_3 = $data['MinAPIVersion'];
            } elseif (null === $data['MinAPIVersion']) {
                $value_3 = $data['MinAPIVersion'];
            }
            $object->minAPIVersion = $value_3;
            unset($data['MinAPIVersion']);
        } elseif (array_key_exists('MinAPIVersion', $data)) {
            $object->minAPIVersion = null;
            unset($data['MinAPIVersion']);
        }
        if (array_key_exists('GitCommit', $data) && null !== $data['GitCommit']) {
            $value_4 = $data['GitCommit'];
            if (is_string($data['GitCommit'])) {
                $value_4 = $data['GitCommit'];
            } elseif (null === $data['GitCommit']) {
                $value_4 = $data['GitCommit'];
            }
            $object->gitCommit = $value_4;
            unset($data['GitCommit']);
        } elseif (array_key_exists('GitCommit', $data)) {
            $object->gitCommit = null;
            unset($data['GitCommit']);
        }
        if (array_key_exists('GoVersion', $data) && null !== $data['GoVersion']) {
            $value_5 = $data['GoVersion'];
            if (is_string($data['GoVersion'])) {
                $value_5 = $data['GoVersion'];
            } elseif (null === $data['GoVersion']) {
                $value_5 = $data['GoVersion'];
            }
            $object->goVersion = $value_5;
            unset($data['GoVersion']);
        } elseif (array_key_exists('GoVersion', $data)) {
            $object->goVersion = null;
            unset($data['GoVersion']);
        }
        if (array_key_exists('Os', $data) && null !== $data['Os']) {
            $value_6 = $data['Os'];
            if (is_string($data['Os'])) {
                $value_6 = $data['Os'];
            } elseif (null === $data['Os']) {
                $value_6 = $data['Os'];
            }
            $object->os = $value_6;
            unset($data['Os']);
        } elseif (array_key_exists('Os', $data)) {
            $object->os = null;
            unset($data['Os']);
        }
        if (array_key_exists('Arch', $data) && null !== $data['Arch']) {
            $value_7 = $data['Arch'];
            if (is_string($data['Arch'])) {
                $value_7 = $data['Arch'];
            } elseif (null === $data['Arch']) {
                $value_7 = $data['Arch'];
            }
            $object->arch = $value_7;
            unset($data['Arch']);
        } elseif (array_key_exists('Arch', $data)) {
            $object->arch = null;
            unset($data['Arch']);
        }
        if (array_key_exists('KernelVersion', $data) && null !== $data['KernelVersion']) {
            $value_8 = $data['KernelVersion'];
            if (is_string($data['KernelVersion'])) {
                $value_8 = $data['KernelVersion'];
            } elseif (null === $data['KernelVersion']) {
                $value_8 = $data['KernelVersion'];
            }
            $object->kernelVersion = $value_8;
            unset($data['KernelVersion']);
        } elseif (array_key_exists('KernelVersion', $data)) {
            $object->kernelVersion = null;
            unset($data['KernelVersion']);
        }
        if (array_key_exists('Experimental', $data) && null !== $data['Experimental']) {
            $value_9 = $data['Experimental'];
            if (is_bool($data['Experimental'])) {
                $value_9 = $data['Experimental'];
            } elseif (null === $data['Experimental']) {
                $value_9 = $data['Experimental'];
            }
            $object->experimental = $value_9;
            unset($data['Experimental']);
        } elseif (array_key_exists('Experimental', $data)) {
            $object->experimental = null;
            unset($data['Experimental']);
        }
        if (array_key_exists('BuildTime', $data) && null !== $data['BuildTime']) {
            $value_10 = $data['BuildTime'];
            if (is_string($data['BuildTime'])) {
                $value_10 = $data['BuildTime'];
            } elseif (null === $data['BuildTime']) {
                $value_10 = $data['BuildTime'];
            }
            $object->buildTime = $value_10;
            unset($data['BuildTime']);
        } elseif (array_key_exists('BuildTime', $data)) {
            $object->buildTime = null;
            unset($data['BuildTime']);
        }
        foreach ($data as $key => $value_11) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_11;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('platform', get_object_vars($data)) && null !== ($data->platform ?? null)) {
            $normalized            = $this->normalizer->normalize($data->platform, 'json', $context);
            $dataArray['Platform'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('components', get_object_vars($data)) && null !== ($data->components ?? null)) {
            $values = [];
            foreach ($data->components as $value) {
                $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[]     = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['Components'] = $values;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $value_1 = $data->version;
            if (is_string($data->version)) {
                $value_1 = $data->version;
            } elseif (null === $data->version) {
                $value_1 = $data->version;
            }
            $dataArray['Version'] = $value_1;
        }
        if (array_key_exists('apiVersion', get_object_vars($data)) && null !== ($data->apiVersion ?? null)) {
            $value_2 = $data->apiVersion;
            if (is_string($data->apiVersion)) {
                $value_2 = $data->apiVersion;
            } elseif (null === $data->apiVersion) {
                $value_2 = $data->apiVersion;
            }
            $dataArray['ApiVersion'] = $value_2;
        }
        if (array_key_exists('minAPIVersion', get_object_vars($data)) && null !== ($data->minAPIVersion ?? null)) {
            $value_3 = $data->minAPIVersion;
            if (is_string($data->minAPIVersion)) {
                $value_3 = $data->minAPIVersion;
            } elseif (null === $data->minAPIVersion) {
                $value_3 = $data->minAPIVersion;
            }
            $dataArray['MinAPIVersion'] = $value_3;
        }
        if (array_key_exists('gitCommit', get_object_vars($data)) && null !== ($data->gitCommit ?? null)) {
            $value_4 = $data->gitCommit;
            if (is_string($data->gitCommit)) {
                $value_4 = $data->gitCommit;
            } elseif (null === $data->gitCommit) {
                $value_4 = $data->gitCommit;
            }
            $dataArray['GitCommit'] = $value_4;
        }
        if (array_key_exists('goVersion', get_object_vars($data)) && null !== ($data->goVersion ?? null)) {
            $value_5 = $data->goVersion;
            if (is_string($data->goVersion)) {
                $value_5 = $data->goVersion;
            } elseif (null === $data->goVersion) {
                $value_5 = $data->goVersion;
            }
            $dataArray['GoVersion'] = $value_5;
        }
        if (array_key_exists('os', get_object_vars($data)) && null !== ($data->os ?? null)) {
            $value_6 = $data->os;
            if (is_string($data->os)) {
                $value_6 = $data->os;
            } elseif (null === $data->os) {
                $value_6 = $data->os;
            }
            $dataArray['Os'] = $value_6;
        }
        if (array_key_exists('arch', get_object_vars($data)) && null !== ($data->arch ?? null)) {
            $value_7 = $data->arch;
            if (is_string($data->arch)) {
                $value_7 = $data->arch;
            } elseif (null === $data->arch) {
                $value_7 = $data->arch;
            }
            $dataArray['Arch'] = $value_7;
        }
        if (array_key_exists('kernelVersion', get_object_vars($data)) && null !== ($data->kernelVersion ?? null)) {
            $value_8 = $data->kernelVersion;
            if (is_string($data->kernelVersion)) {
                $value_8 = $data->kernelVersion;
            } elseif (null === $data->kernelVersion) {
                $value_8 = $data->kernelVersion;
            }
            $dataArray['KernelVersion'] = $value_8;
        }
        if (array_key_exists('experimental', get_object_vars($data)) && null !== ($data->experimental ?? null)) {
            $value_9 = $data->experimental;
            if (is_bool($data->experimental)) {
                $value_9 = $data->experimental;
            } elseif (null === $data->experimental) {
                $value_9 = $data->experimental;
            }
            $dataArray['Experimental'] = $value_9;
        }
        if (array_key_exists('buildTime', get_object_vars($data)) && null !== ($data->buildTime ?? null)) {
            $value_10 = $data->buildTime;
            if (is_string($data->buildTime)) {
                $value_10 = $data->buildTime;
            } elseif (null === $data->buildTime) {
                $value_10 = $data->buildTime;
            }
            $dataArray['BuildTime'] = $value_10;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_11) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_11;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SystemVersion::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
