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
use function is_int;
use function is_object;
use function is_string;

class NetworkInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworkInspect::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworkInspect::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworkInspect();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (array_key_exists('Containers', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Containers'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\EndpointResource::class, 'json', $context);
            }
            $object->setContainers($values);
        }
        if (array_key_exists('Services', $data) && null !== $data['Services']) {
            $value_1 = $data['Services'];
            if (is_array($data['Services']) && $this->isOnlyNumericKeys($data['Services'])) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Services'] as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            } elseif (null === $data['Services']) {
                $value_1 = $data['Services'];
            }
            $object->setServices($value_1);
        } elseif (array_key_exists('Services', $data) && null === $data['Services']) {
            $object->setServices(null);
        }
        if (array_key_exists('Status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['Status'], \WebProject\DockerApi\Library\Generated\Model\NetworkStatus::class, 'json', $context));
        }
        if (array_key_exists('Name', $data) && null !== $data['Name']) {
            $value_3 = $data['Name'];
            if (is_string($data['Name'])) {
                $value_3 = $data['Name'];
            } elseif (null === $data['Name']) {
                $value_3 = $data['Name'];
            }
            $object->setName($value_3);
        } elseif (array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (array_key_exists('Id', $data) && null !== $data['Id']) {
            $value_4 = $data['Id'];
            if (is_string($data['Id'])) {
                $value_4 = $data['Id'];
            } elseif (null === $data['Id']) {
                $value_4 = $data['Id'];
            }
            $object->setId($value_4);
        } elseif (array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $value_5 = $data['Created'];
            if (is_string($data['Created'])) {
                $value_5 = $data['Created'];
            } elseif (null === $data['Created']) {
                $value_5 = $data['Created'];
            }
            $object->setCreated($value_5);
        } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (array_key_exists('Scope', $data) && null !== $data['Scope']) {
            $value_6 = $data['Scope'];
            if (is_string($data['Scope'])) {
                $value_6 = $data['Scope'];
            } elseif (null === $data['Scope']) {
                $value_6 = $data['Scope'];
            }
            $object->setScope($value_6);
        } elseif (array_key_exists('Scope', $data) && null === $data['Scope']) {
            $object->setScope(null);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_7 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_7 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_7 = $data['Driver'];
            }
            $object->setDriver($value_7);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('EnableIPv4', $data) && null !== $data['EnableIPv4']) {
            $value_8 = $data['EnableIPv4'];
            if (is_bool($data['EnableIPv4'])) {
                $value_8 = $data['EnableIPv4'];
            } elseif (null === $data['EnableIPv4']) {
                $value_8 = $data['EnableIPv4'];
            }
            $object->setEnableIPv4($value_8);
        } elseif (array_key_exists('EnableIPv4', $data) && null === $data['EnableIPv4']) {
            $object->setEnableIPv4(null);
        }
        if (array_key_exists('EnableIPv6', $data) && null !== $data['EnableIPv6']) {
            $value_9 = $data['EnableIPv6'];
            if (is_bool($data['EnableIPv6'])) {
                $value_9 = $data['EnableIPv6'];
            } elseif (null === $data['EnableIPv6']) {
                $value_9 = $data['EnableIPv6'];
            }
            $object->setEnableIPv6($value_9);
        } elseif (array_key_exists('EnableIPv6', $data) && null === $data['EnableIPv6']) {
            $object->setEnableIPv6(null);
        }
        if (array_key_exists('IPAM', $data)) {
            $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \WebProject\DockerApi\Library\Generated\Model\IPAM::class, 'json', $context));
        }
        if (array_key_exists('Internal', $data)) {
            $object->setInternal($data['Internal']);
        }
        if (array_key_exists('Attachable', $data)) {
            $object->setAttachable($data['Attachable']);
        }
        if (array_key_exists('Ingress', $data)) {
            $object->setIngress($data['Ingress']);
        }
        if (array_key_exists('ConfigFrom', $data)) {
            $object->setConfigFrom($this->denormalizer->denormalize($data['ConfigFrom'], \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class, 'json', $context));
        }
        if (array_key_exists('ConfigOnly', $data)) {
            $object->setConfigOnly($data['ConfigOnly']);
        }
        if (array_key_exists('Options', $data) && null !== $data['Options']) {
            $value_10 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values_2 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key_2 => $value_11) {
                    $values_2[$key_2] = $value_11;
                }
                $value_10 = $values_2;
            } elseif (null === $data['Options']) {
                $value_10 = $data['Options'];
            }
            $object->setOptions($value_10);
        } elseif (array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_12 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_3 => $value_13) {
                    $values_3[$key_3] = $value_13;
                }
                $value_12 = $values_3;
            } elseif (null === $data['Labels']) {
                $value_12 = $data['Labels'];
            }
            $object->setLabels($value_12);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('Peers', $data) && null !== $data['Peers']) {
            $value_14 = $data['Peers'];
            if (is_array($data['Peers']) && $this->isOnlyNumericKeys($data['Peers'])) {
                $values_4 = [];
                foreach ($data['Peers'] as $value_15) {
                    $values_4[] = $this->denormalizer->denormalize($value_15, \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class, 'json', $context);
                }
                $value_14 = $values_4;
            } elseif (null === $data['Peers']) {
                $value_14 = $data['Peers'];
            }
            $object->setPeers($value_14);
        } elseif (array_key_exists('Peers', $data) && null === $data['Peers']) {
            $object->setPeers(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('containers') && null !== $data->getContainers()) {
            $values = [];
            foreach ($data->getContainers() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Containers'] = $values;
        }
        if ($data->isInitialized('services')) {
            $value_1 = $data->getServices();
            if (is_object($data->getServices())) {
                $values_1 = [];
                foreach ($data->getServices() as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            } elseif (null === $data->getServices()) {
                $value_1 = $data->getServices();
            }
            $dataArray['Services'] = $value_1;
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['Status'] = $this->normalizer->normalize($data->getStatus(), 'json', $context);
        }
        if ($data->isInitialized('name')) {
            $value_3 = $data->getName();
            if (is_string($data->getName())) {
                $value_3 = $data->getName();
            } elseif (null === $data->getName()) {
                $value_3 = $data->getName();
            }
            $dataArray['Name'] = $value_3;
        }
        if ($data->isInitialized('id')) {
            $value_4 = $data->getId();
            if (is_string($data->getId())) {
                $value_4 = $data->getId();
            } elseif (null === $data->getId()) {
                $value_4 = $data->getId();
            }
            $dataArray['Id'] = $value_4;
        }
        if ($data->isInitialized('created')) {
            $value_5 = $data->getCreated();
            if (is_string($data->getCreated())) {
                $value_5 = $data->getCreated();
            } elseif (null === $data->getCreated()) {
                $value_5 = $data->getCreated();
            }
            $dataArray['Created'] = $value_5;
        }
        if ($data->isInitialized('scope')) {
            $value_6 = $data->getScope();
            if (is_string($data->getScope())) {
                $value_6 = $data->getScope();
            } elseif (null === $data->getScope()) {
                $value_6 = $data->getScope();
            }
            $dataArray['Scope'] = $value_6;
        }
        if ($data->isInitialized('driver')) {
            $value_7 = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value_7 = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value_7 = $data->getDriver();
            }
            $dataArray['Driver'] = $value_7;
        }
        if ($data->isInitialized('enableIPv4')) {
            $value_8 = $data->getEnableIPv4();
            if (is_bool($data->getEnableIPv4())) {
                $value_8 = $data->getEnableIPv4();
            } elseif (null === $data->getEnableIPv4()) {
                $value_8 = $data->getEnableIPv4();
            }
            $dataArray['EnableIPv4'] = $value_8;
        }
        if ($data->isInitialized('enableIPv6')) {
            $value_9 = $data->getEnableIPv6();
            if (is_bool($data->getEnableIPv6())) {
                $value_9 = $data->getEnableIPv6();
            } elseif (null === $data->getEnableIPv6()) {
                $value_9 = $data->getEnableIPv6();
            }
            $dataArray['EnableIPv6'] = $value_9;
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
        if ($data->isInitialized('options')) {
            $value_10 = $data->getOptions();
            if (is_object($data->getOptions())) {
                $values_2 = [];
                foreach ($data->getOptions() as $key_2 => $value_11) {
                    $values_2[$key_2] = $value_11;
                }
                $value_10 = $values_2;
            } elseif (null === $data->getOptions()) {
                $value_10 = $data->getOptions();
            }
            $dataArray['Options'] = $value_10;
        }
        if ($data->isInitialized('labels')) {
            $value_12 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values_3 = [];
                foreach ($data->getLabels() as $key_3 => $value_13) {
                    $values_3[$key_3] = $value_13;
                }
                $value_12 = $values_3;
            } elseif (null === $data->getLabels()) {
                $value_12 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_12;
        }
        if ($data->isInitialized('peers')) {
            $value_14 = $data->getPeers();
            if (is_array($data->getPeers())) {
                $values_4 = [];
                foreach ($data->getPeers() as $value_15) {
                    $values_4[] = $this->normalizer->normalize($value_15, 'json', $context);
                }
                $value_14 = $values_4;
            } elseif (null === $data->getPeers()) {
                $value_14 = $data->getPeers();
            }
            $dataArray['Peers'] = $value_14;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworkInspect::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
