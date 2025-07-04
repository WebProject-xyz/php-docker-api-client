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

class NetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\Network::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\Network::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\Network();
        if (array_key_exists('EnableIPv4', $data) && is_int($data['EnableIPv4'])) {
            $data['EnableIPv4'] = (bool) $data['EnableIPv4'];
        }
        if (array_key_exists('EnableIPv6', $data) && is_int($data['EnableIPv6'])) {
            $data['EnableIPv6'] = (bool) $data['EnableIPv6'];
        }
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
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
            unset($data['Id']);
        }
        if (array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
            unset($data['Created']);
        }
        if (array_key_exists('Scope', $data)) {
            $object->setScope($data['Scope']);
            unset($data['Scope']);
        }
        if (array_key_exists('Driver', $data)) {
            $object->setDriver($data['Driver']);
            unset($data['Driver']);
        }
        if (array_key_exists('EnableIPv4', $data)) {
            $object->setEnableIPv4($data['EnableIPv4']);
            unset($data['EnableIPv4']);
        }
        if (array_key_exists('EnableIPv6', $data)) {
            $object->setEnableIPv6($data['EnableIPv6']);
            unset($data['EnableIPv6']);
        }
        if (array_key_exists('IPAM', $data)) {
            $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \WebProject\DockerApi\Library\Generated\Model\IPAM::class, 'json', $context));
            unset($data['IPAM']);
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
        if (array_key_exists('ConfigFrom', $data)) {
            $object->setConfigFrom($this->denormalizer->denormalize($data['ConfigFrom'], \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class, 'json', $context));
            unset($data['ConfigFrom']);
        }
        if (array_key_exists('ConfigOnly', $data)) {
            $object->setConfigOnly($data['ConfigOnly']);
            unset($data['ConfigOnly']);
        }
        if (array_key_exists('Containers', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Containers'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\NetworkContainer::class, 'json', $context);
            }
            $object->setContainers($values);
            unset($data['Containers']);
        }
        if (array_key_exists('Options', $data)) {
            $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setOptions($values_1);
            unset($data['Options']);
        }
        if (array_key_exists('Labels', $data)) {
            $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setLabels($values_2);
            unset($data['Labels']);
        }
        if (array_key_exists('Peers', $data) && null !== $data['Peers']) {
            $values_3 = [];
            foreach ($data['Peers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class, 'json', $context);
            }
            $object->setPeers($values_3);
            unset($data['Peers']);
        } elseif (array_key_exists('Peers', $data) && null === $data['Peers']) {
            $object->setPeers(null);
        }
        foreach ($data as $key_3 => $value_4) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_4;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['Id'] = $data->getId();
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['Created'] = $data->getCreated();
        }
        if ($data->isInitialized('scope') && null !== $data->getScope()) {
            $dataArray['Scope'] = $data->getScope();
        }
        if ($data->isInitialized('driver') && null !== $data->getDriver()) {
            $dataArray['Driver'] = $data->getDriver();
        }
        if ($data->isInitialized('enableIPv4') && null !== $data->getEnableIPv4()) {
            $dataArray['EnableIPv4'] = $data->getEnableIPv4();
        }
        if ($data->isInitialized('enableIPv6') && null !== $data->getEnableIPv6()) {
            $dataArray['EnableIPv6'] = $data->getEnableIPv6();
        }
        if ($data->isInitialized('iPAM') && null !== $data->getIPAM()) {
            $dataArray['IPAM'] = $this->normalizer->normalize($data->getIPAM(), 'json', $context);
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
        if ($data->isInitialized('configFrom') && null !== $data->getConfigFrom()) {
            $dataArray['ConfigFrom'] = $this->normalizer->normalize($data->getConfigFrom(), 'json', $context);
        }
        if ($data->isInitialized('configOnly') && null !== $data->getConfigOnly()) {
            $dataArray['ConfigOnly'] = $data->getConfigOnly();
        }
        if ($data->isInitialized('containers') && null !== $data->getContainers()) {
            $values = [];
            foreach ($data->getContainers() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Containers'] = $values;
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $values_1 = [];
            foreach ($data->getOptions() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['Options'] = $values_1;
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_2 = [];
            foreach ($data->getLabels() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $dataArray['Labels'] = $values_2;
        }
        if ($data->isInitialized('peers') && null !== $data->getPeers()) {
            $values_3 = [];
            foreach ($data->getPeers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['Peers'] = $values_3;
        }
        foreach ($data as $key_3 => $value_4) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\Network::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
