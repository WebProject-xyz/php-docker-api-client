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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\SystemVersion();
        if (array_key_exists('Experimental', $data) && is_int($data['Experimental'])) {
            $data['Experimental'] = (bool) $data['Experimental'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Platform', $data)) {
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class, 'json', $context));
            unset($data['Platform']);
        }
        if (array_key_exists('Components', $data)) {
            $values = [];
            foreach ($data['Components'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class, 'json', $context);
            }
            $object->setComponents($values);
            unset($data['Components']);
        }
        if (array_key_exists('Version', $data)) {
            $object->setVersion($data['Version']);
            unset($data['Version']);
        }
        if (array_key_exists('ApiVersion', $data)) {
            $object->setApiVersion($data['ApiVersion']);
            unset($data['ApiVersion']);
        }
        if (array_key_exists('MinAPIVersion', $data)) {
            $object->setMinAPIVersion($data['MinAPIVersion']);
            unset($data['MinAPIVersion']);
        }
        if (array_key_exists('GitCommit', $data)) {
            $object->setGitCommit($data['GitCommit']);
            unset($data['GitCommit']);
        }
        if (array_key_exists('GoVersion', $data)) {
            $object->setGoVersion($data['GoVersion']);
            unset($data['GoVersion']);
        }
        if (array_key_exists('Os', $data)) {
            $object->setOs($data['Os']);
            unset($data['Os']);
        }
        if (array_key_exists('Arch', $data)) {
            $object->setArch($data['Arch']);
            unset($data['Arch']);
        }
        if (array_key_exists('KernelVersion', $data)) {
            $object->setKernelVersion($data['KernelVersion']);
            unset($data['KernelVersion']);
        }
        if (array_key_exists('Experimental', $data)) {
            $object->setExperimental($data['Experimental']);
            unset($data['Experimental']);
        }
        if (array_key_exists('BuildTime', $data)) {
            $object->setBuildTime($data['BuildTime']);
            unset($data['BuildTime']);
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
        $dataArray = [];
        if ($data->isInitialized('platform') && null !== $data->getPlatform()) {
            $dataArray['Platform'] = $this->normalizer->normalize($data->getPlatform(), 'json', $context);
        }
        if ($data->isInitialized('components') && null !== $data->getComponents()) {
            $values = [];
            foreach ($data->getComponents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Components'] = $values;
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['Version'] = $data->getVersion();
        }
        if ($data->isInitialized('apiVersion') && null !== $data->getApiVersion()) {
            $dataArray['ApiVersion'] = $data->getApiVersion();
        }
        if ($data->isInitialized('minAPIVersion') && null !== $data->getMinAPIVersion()) {
            $dataArray['MinAPIVersion'] = $data->getMinAPIVersion();
        }
        if ($data->isInitialized('gitCommit') && null !== $data->getGitCommit()) {
            $dataArray['GitCommit'] = $data->getGitCommit();
        }
        if ($data->isInitialized('goVersion') && null !== $data->getGoVersion()) {
            $dataArray['GoVersion'] = $data->getGoVersion();
        }
        if ($data->isInitialized('os') && null !== $data->getOs()) {
            $dataArray['Os'] = $data->getOs();
        }
        if ($data->isInitialized('arch') && null !== $data->getArch()) {
            $dataArray['Arch'] = $data->getArch();
        }
        if ($data->isInitialized('kernelVersion') && null !== $data->getKernelVersion()) {
            $dataArray['KernelVersion'] = $data->getKernelVersion();
        }
        if ($data->isInitialized('experimental') && null !== $data->getExperimental()) {
            $dataArray['Experimental'] = $data->getExperimental();
        }
        if ($data->isInitialized('buildTime') && null !== $data->getBuildTime()) {
            $dataArray['BuildTime'] = $data->getBuildTime();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
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
