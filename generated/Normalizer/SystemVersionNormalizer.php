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
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class, 'json', $context));
        } elseif (array_key_exists('Platform', $data) && null === $data['Platform']) {
            $object->setPlatform(null);
        }
        if (array_key_exists('Components', $data) && null !== $data['Components']) {
            $value = $data['Components'];
            if (is_array($data['Components']) && $this->isOnlyNumericKeys($data['Components'])) {
                $values = [];
                foreach ($data['Components'] as $value_1) {
                    $values[] = $this->denormalizer->denormalize($value_1, \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data['Components']) {
                $value = $data['Components'];
            }
            $object->setComponents($value);
        } elseif (array_key_exists('Components', $data) && null === $data['Components']) {
            $object->setComponents(null);
        }
        if (array_key_exists('Version', $data) && null !== $data['Version']) {
            $value_2 = $data['Version'];
            if (is_string($data['Version'])) {
                $value_2 = $data['Version'];
            } elseif (null === $data['Version']) {
                $value_2 = $data['Version'];
            }
            $object->setVersion($value_2);
        } elseif (array_key_exists('Version', $data) && null === $data['Version']) {
            $object->setVersion(null);
        }
        if (array_key_exists('ApiVersion', $data) && null !== $data['ApiVersion']) {
            $value_3 = $data['ApiVersion'];
            if (is_string($data['ApiVersion'])) {
                $value_3 = $data['ApiVersion'];
            } elseif (null === $data['ApiVersion']) {
                $value_3 = $data['ApiVersion'];
            }
            $object->setApiVersion($value_3);
        } elseif (array_key_exists('ApiVersion', $data) && null === $data['ApiVersion']) {
            $object->setApiVersion(null);
        }
        if (array_key_exists('MinAPIVersion', $data) && null !== $data['MinAPIVersion']) {
            $value_4 = $data['MinAPIVersion'];
            if (is_string($data['MinAPIVersion'])) {
                $value_4 = $data['MinAPIVersion'];
            } elseif (null === $data['MinAPIVersion']) {
                $value_4 = $data['MinAPIVersion'];
            }
            $object->setMinAPIVersion($value_4);
        } elseif (array_key_exists('MinAPIVersion', $data) && null === $data['MinAPIVersion']) {
            $object->setMinAPIVersion(null);
        }
        if (array_key_exists('GitCommit', $data) && null !== $data['GitCommit']) {
            $value_5 = $data['GitCommit'];
            if (is_string($data['GitCommit'])) {
                $value_5 = $data['GitCommit'];
            } elseif (null === $data['GitCommit']) {
                $value_5 = $data['GitCommit'];
            }
            $object->setGitCommit($value_5);
        } elseif (array_key_exists('GitCommit', $data) && null === $data['GitCommit']) {
            $object->setGitCommit(null);
        }
        if (array_key_exists('GoVersion', $data) && null !== $data['GoVersion']) {
            $value_6 = $data['GoVersion'];
            if (is_string($data['GoVersion'])) {
                $value_6 = $data['GoVersion'];
            } elseif (null === $data['GoVersion']) {
                $value_6 = $data['GoVersion'];
            }
            $object->setGoVersion($value_6);
        } elseif (array_key_exists('GoVersion', $data) && null === $data['GoVersion']) {
            $object->setGoVersion(null);
        }
        if (array_key_exists('Os', $data) && null !== $data['Os']) {
            $value_7 = $data['Os'];
            if (is_string($data['Os'])) {
                $value_7 = $data['Os'];
            } elseif (null === $data['Os']) {
                $value_7 = $data['Os'];
            }
            $object->setOs($value_7);
        } elseif (array_key_exists('Os', $data) && null === $data['Os']) {
            $object->setOs(null);
        }
        if (array_key_exists('Arch', $data) && null !== $data['Arch']) {
            $value_8 = $data['Arch'];
            if (is_string($data['Arch'])) {
                $value_8 = $data['Arch'];
            } elseif (null === $data['Arch']) {
                $value_8 = $data['Arch'];
            }
            $object->setArch($value_8);
        } elseif (array_key_exists('Arch', $data) && null === $data['Arch']) {
            $object->setArch(null);
        }
        if (array_key_exists('KernelVersion', $data) && null !== $data['KernelVersion']) {
            $value_9 = $data['KernelVersion'];
            if (is_string($data['KernelVersion'])) {
                $value_9 = $data['KernelVersion'];
            } elseif (null === $data['KernelVersion']) {
                $value_9 = $data['KernelVersion'];
            }
            $object->setKernelVersion($value_9);
        } elseif (array_key_exists('KernelVersion', $data) && null === $data['KernelVersion']) {
            $object->setKernelVersion(null);
        }
        if (array_key_exists('Experimental', $data) && null !== $data['Experimental']) {
            $value_10 = $data['Experimental'];
            if (is_bool($data['Experimental'])) {
                $value_10 = $data['Experimental'];
            } elseif (null === $data['Experimental']) {
                $value_10 = $data['Experimental'];
            }
            $object->setExperimental($value_10);
        } elseif (array_key_exists('Experimental', $data) && null === $data['Experimental']) {
            $object->setExperimental(null);
        }
        if (array_key_exists('BuildTime', $data) && null !== $data['BuildTime']) {
            $value_11 = $data['BuildTime'];
            if (is_string($data['BuildTime'])) {
                $value_11 = $data['BuildTime'];
            } elseif (null === $data['BuildTime']) {
                $value_11 = $data['BuildTime'];
            }
            $object->setBuildTime($value_11);
        } elseif (array_key_exists('BuildTime', $data) && null === $data['BuildTime']) {
            $object->setBuildTime(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('platform')) {
            $dataArray['Platform'] = $this->normalizer->normalize($data->getPlatform(), 'json', $context);
        }
        if ($data->isInitialized('components')) {
            $value = $data->getComponents();
            if (is_array($data->getComponents())) {
                $values = [];
                foreach ($data->getComponents() as $value_1) {
                    $values[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $value = $values;
            } elseif (null === $data->getComponents()) {
                $value = $data->getComponents();
            }
            $dataArray['Components'] = $value;
        }
        if ($data->isInitialized('version')) {
            $value_2 = $data->getVersion();
            if (is_string($data->getVersion())) {
                $value_2 = $data->getVersion();
            } elseif (null === $data->getVersion()) {
                $value_2 = $data->getVersion();
            }
            $dataArray['Version'] = $value_2;
        }
        if ($data->isInitialized('apiVersion')) {
            $value_3 = $data->getApiVersion();
            if (is_string($data->getApiVersion())) {
                $value_3 = $data->getApiVersion();
            } elseif (null === $data->getApiVersion()) {
                $value_3 = $data->getApiVersion();
            }
            $dataArray['ApiVersion'] = $value_3;
        }
        if ($data->isInitialized('minAPIVersion')) {
            $value_4 = $data->getMinAPIVersion();
            if (is_string($data->getMinAPIVersion())) {
                $value_4 = $data->getMinAPIVersion();
            } elseif (null === $data->getMinAPIVersion()) {
                $value_4 = $data->getMinAPIVersion();
            }
            $dataArray['MinAPIVersion'] = $value_4;
        }
        if ($data->isInitialized('gitCommit')) {
            $value_5 = $data->getGitCommit();
            if (is_string($data->getGitCommit())) {
                $value_5 = $data->getGitCommit();
            } elseif (null === $data->getGitCommit()) {
                $value_5 = $data->getGitCommit();
            }
            $dataArray['GitCommit'] = $value_5;
        }
        if ($data->isInitialized('goVersion')) {
            $value_6 = $data->getGoVersion();
            if (is_string($data->getGoVersion())) {
                $value_6 = $data->getGoVersion();
            } elseif (null === $data->getGoVersion()) {
                $value_6 = $data->getGoVersion();
            }
            $dataArray['GoVersion'] = $value_6;
        }
        if ($data->isInitialized('os')) {
            $value_7 = $data->getOs();
            if (is_string($data->getOs())) {
                $value_7 = $data->getOs();
            } elseif (null === $data->getOs()) {
                $value_7 = $data->getOs();
            }
            $dataArray['Os'] = $value_7;
        }
        if ($data->isInitialized('arch')) {
            $value_8 = $data->getArch();
            if (is_string($data->getArch())) {
                $value_8 = $data->getArch();
            } elseif (null === $data->getArch()) {
                $value_8 = $data->getArch();
            }
            $dataArray['Arch'] = $value_8;
        }
        if ($data->isInitialized('kernelVersion')) {
            $value_9 = $data->getKernelVersion();
            if (is_string($data->getKernelVersion())) {
                $value_9 = $data->getKernelVersion();
            } elseif (null === $data->getKernelVersion()) {
                $value_9 = $data->getKernelVersion();
            }
            $dataArray['KernelVersion'] = $value_9;
        }
        if ($data->isInitialized('experimental')) {
            $value_10 = $data->getExperimental();
            if (is_bool($data->getExperimental())) {
                $value_10 = $data->getExperimental();
            } elseif (null === $data->getExperimental()) {
                $value_10 = $data->getExperimental();
            }
            $dataArray['Experimental'] = $value_10;
        }
        if ($data->isInitialized('buildTime')) {
            $value_11 = $data->getBuildTime();
            if (is_string($data->getBuildTime())) {
                $value_11 = $data->getBuildTime();
            } elseif (null === $data->getBuildTime()) {
                $value_11 = $data->getBuildTime();
            }
            $dataArray['BuildTime'] = $value_11;
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
