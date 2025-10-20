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

class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody();
        if (array_key_exists('Internal', $data) && is_int($data['Internal'])) {
            $data['Internal'] = (bool) $data['Internal'];
        }
        if (array_key_exists('Attachable', $data) && is_int($data['Attachable'])) {
            $data['Attachable'] = (bool) $data['Attachable'];
        }
        if (array_key_exists('Ingress', $data) && is_int($data['Ingress'])) {
            $data['Ingress'] = (bool) $data['Ingress'];
        }
        if (array_key_exists('ConfigOnly', $data) && is_int($data['ConfigOnly'])) {
            $data['ConfigOnly'] = (bool) $data['ConfigOnly'];
        }
        if (array_key_exists('EnableIPv4', $data) && is_int($data['EnableIPv4'])) {
            $data['EnableIPv4'] = (bool) $data['EnableIPv4'];
        }
        if (array_key_exists('EnableIPv6', $data) && is_int($data['EnableIPv6'])) {
            $data['EnableIPv6'] = (bool) $data['EnableIPv6'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\NetworksCreatePostBodyConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->setDriver($data['Driver']);
            unset($data['Driver']);
        }
        if (array_key_exists('Scope', $data)) {
            $object->setScope($data['Scope']);
            unset($data['Scope']);
        }
        if (array_key_exists('Internal', $data)) {
            $object->setInternal($data['Internal']);
            unset($data['Internal']);
        }
        if (array_key_exists('Attachable', $data)) {
            $object->setAttachable($data['Attachable']);
            unset($data['Attachable']);
        }
        if (array_key_exists('Ingress', $data)) {
            $object->setIngress($data['Ingress']);
            unset($data['Ingress']);
        }
        if (array_key_exists('ConfigOnly', $data)) {
            $object->setConfigOnly($data['ConfigOnly']);
            unset($data['ConfigOnly']);
        }
        if (array_key_exists('ConfigFrom', $data)) {
            $object->setConfigFrom($this->denormalizer->denormalize($data['ConfigFrom'], \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class, 'json', $context));
            unset($data['ConfigFrom']);
        }
        if (array_key_exists('IPAM', $data)) {
            $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \WebProject\DockerApi\Library\Generated\Model\IPAM::class, 'json', $context));
            unset($data['IPAM']);
        }
        if (array_key_exists('EnableIPv4', $data)) {
            $object->setEnableIPv4($data['EnableIPv4']);
            unset($data['EnableIPv4']);
        }
        if (array_key_exists('EnableIPv6', $data)) {
            $object->setEnableIPv6($data['EnableIPv6']);
            unset($data['EnableIPv6']);
        }
        if (array_key_exists('Options', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOptions($values);
            unset($data['Options']);
        }
        if (array_key_exists('Labels', $data)) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setLabels($values_1);
            unset($data['Labels']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray         = [];
        $dataArray['Name'] = $data->getName();
        if ($data->isInitialized('driver') && null !== $data->getDriver()) {
            $dataArray['Driver'] = $data->getDriver();
        }
        if ($data->isInitialized('scope') && null !== $data->getScope()) {
            $dataArray['Scope'] = $data->getScope();
        }
        if ($data->isInitialized('internal') && null !== $data->getInternal()) {
            $dataArray['Internal'] = $data->getInternal();
        }
        if ($data->isInitialized('attachable') && null !== $data->getAttachable()) {
            $dataArray['Attachable'] = $data->getAttachable();
        }
        if ($data->isInitialized('ingress') && null !== $data->getIngress()) {
            $dataArray['Ingress'] = $data->getIngress();
        }
        if ($data->isInitialized('configOnly') && null !== $data->getConfigOnly()) {
            $dataArray['ConfigOnly'] = $data->getConfigOnly();
        }
        if ($data->isInitialized('configFrom') && null !== $data->getConfigFrom()) {
            $dataArray['ConfigFrom'] = $this->normalizer->normalize($data->getConfigFrom(), 'json', $context);
        }
        if ($data->isInitialized('iPAM') && null !== $data->getIPAM()) {
            $dataArray['IPAM'] = $this->normalizer->normalize($data->getIPAM(), 'json', $context);
        }
        if ($data->isInitialized('enableIPv4') && null !== $data->getEnableIPv4()) {
            $dataArray['EnableIPv4'] = $data->getEnableIPv4();
        }
        if ($data->isInitialized('enableIPv6') && null !== $data->getEnableIPv6()) {
            $dataArray['EnableIPv6'] = $data->getEnableIPv6();
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $values = [];
            foreach ($data->getOptions() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Options'] = $values;
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_1 = [];
            foreach ($data->getLabels() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['Labels'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\NetworksCreatePostBodyConstraint());
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
