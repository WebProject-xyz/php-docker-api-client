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

class NetworkSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\NetworkSummary::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\NetworkSummary::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\NetworkSummary();
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
        if (array_key_exists('Id', $data) && null !== $data['Id']) {
            $value_1 = $data['Id'];
            if (is_string($data['Id'])) {
                $value_1 = $data['Id'];
            } elseif (null === $data['Id']) {
                $value_1 = $data['Id'];
            }
            $object->setId($value_1);
        } elseif (array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $value_2 = $data['Created'];
            if (is_string($data['Created'])) {
                $value_2 = $data['Created'];
            } elseif (null === $data['Created']) {
                $value_2 = $data['Created'];
            }
            $object->setCreated($value_2);
        } elseif (array_key_exists('Created', $data) && null === $data['Created']) {
            $object->setCreated(null);
        }
        if (array_key_exists('Scope', $data) && null !== $data['Scope']) {
            $value_3 = $data['Scope'];
            if (is_string($data['Scope'])) {
                $value_3 = $data['Scope'];
            } elseif (null === $data['Scope']) {
                $value_3 = $data['Scope'];
            }
            $object->setScope($value_3);
        } elseif (array_key_exists('Scope', $data) && null === $data['Scope']) {
            $object->setScope(null);
        }
        if (array_key_exists('Driver', $data) && null !== $data['Driver']) {
            $value_4 = $data['Driver'];
            if (is_string($data['Driver'])) {
                $value_4 = $data['Driver'];
            } elseif (null === $data['Driver']) {
                $value_4 = $data['Driver'];
            }
            $object->setDriver($value_4);
        } elseif (array_key_exists('Driver', $data) && null === $data['Driver']) {
            $object->setDriver(null);
        }
        if (array_key_exists('EnableIPv4', $data) && null !== $data['EnableIPv4']) {
            $value_5 = $data['EnableIPv4'];
            if (is_bool($data['EnableIPv4'])) {
                $value_5 = $data['EnableIPv4'];
            } elseif (null === $data['EnableIPv4']) {
                $value_5 = $data['EnableIPv4'];
            }
            $object->setEnableIPv4($value_5);
        } elseif (array_key_exists('EnableIPv4', $data) && null === $data['EnableIPv4']) {
            $object->setEnableIPv4(null);
        }
        if (array_key_exists('EnableIPv6', $data) && null !== $data['EnableIPv6']) {
            $value_6 = $data['EnableIPv6'];
            if (is_bool($data['EnableIPv6'])) {
                $value_6 = $data['EnableIPv6'];
            } elseif (null === $data['EnableIPv6']) {
                $value_6 = $data['EnableIPv6'];
            }
            $object->setEnableIPv6($value_6);
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
            $value_7 = $data['Options'];
            if (is_array($data['Options']) && $this->isOnlyNumericKeys($data['Options'])) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value_8) {
                    $values[$key] = $value_8;
                }
                $value_7 = $values;
            } elseif (null === $data['Options']) {
                $value_7 = $data['Options'];
            }
            $object->setOptions($value_7);
        } elseif (array_key_exists('Options', $data) && null === $data['Options']) {
            $object->setOptions(null);
        }
        if (array_key_exists('Labels', $data) && null !== $data['Labels']) {
            $value_9 = $data['Labels'];
            if (is_array($data['Labels']) && $this->isOnlyNumericKeys($data['Labels'])) {
                $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_10) {
                    $values_1[$key_1] = $value_10;
                }
                $value_9 = $values_1;
            } elseif (null === $data['Labels']) {
                $value_9 = $data['Labels'];
            }
            $object->setLabels($value_9);
        } elseif (array_key_exists('Labels', $data) && null === $data['Labels']) {
            $object->setLabels(null);
        }
        if (array_key_exists('Peers', $data) && null !== $data['Peers']) {
            $value_11 = $data['Peers'];
            if (is_array($data['Peers']) && $this->isOnlyNumericKeys($data['Peers'])) {
                $values_2 = [];
                foreach ($data['Peers'] as $value_12) {
                    $values_2[] = $this->denormalizer->denormalize($value_12, \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class, 'json', $context);
                }
                $value_11 = $values_2;
            } elseif (null === $data['Peers']) {
                $value_11 = $data['Peers'];
            }
            $object->setPeers($value_11);
        } elseif (array_key_exists('Peers', $data) && null === $data['Peers']) {
            $object->setPeers(null);
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
        if ($data->isInitialized('id')) {
            $value_1 = $data->getId();
            if (is_string($data->getId())) {
                $value_1 = $data->getId();
            } elseif (null === $data->getId()) {
                $value_1 = $data->getId();
            }
            $dataArray['Id'] = $value_1;
        }
        if ($data->isInitialized('created')) {
            $value_2 = $data->getCreated();
            if (is_string($data->getCreated())) {
                $value_2 = $data->getCreated();
            } elseif (null === $data->getCreated()) {
                $value_2 = $data->getCreated();
            }
            $dataArray['Created'] = $value_2;
        }
        if ($data->isInitialized('scope')) {
            $value_3 = $data->getScope();
            if (is_string($data->getScope())) {
                $value_3 = $data->getScope();
            } elseif (null === $data->getScope()) {
                $value_3 = $data->getScope();
            }
            $dataArray['Scope'] = $value_3;
        }
        if ($data->isInitialized('driver')) {
            $value_4 = $data->getDriver();
            if (is_string($data->getDriver())) {
                $value_4 = $data->getDriver();
            } elseif (null === $data->getDriver()) {
                $value_4 = $data->getDriver();
            }
            $dataArray['Driver'] = $value_4;
        }
        if ($data->isInitialized('enableIPv4')) {
            $value_5 = $data->getEnableIPv4();
            if (is_bool($data->getEnableIPv4())) {
                $value_5 = $data->getEnableIPv4();
            } elseif (null === $data->getEnableIPv4()) {
                $value_5 = $data->getEnableIPv4();
            }
            $dataArray['EnableIPv4'] = $value_5;
        }
        if ($data->isInitialized('enableIPv6')) {
            $value_6 = $data->getEnableIPv6();
            if (is_bool($data->getEnableIPv6())) {
                $value_6 = $data->getEnableIPv6();
            } elseif (null === $data->getEnableIPv6()) {
                $value_6 = $data->getEnableIPv6();
            }
            $dataArray['EnableIPv6'] = $value_6;
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
            $value_7 = $data->getOptions();
            if (is_object($data->getOptions())) {
                $values = [];
                foreach ($data->getOptions() as $key => $value_8) {
                    $values[$key] = $value_8;
                }
                $value_7 = $values;
            } elseif (null === $data->getOptions()) {
                $value_7 = $data->getOptions();
            }
            $dataArray['Options'] = $value_7;
        }
        if ($data->isInitialized('labels')) {
            $value_9 = $data->getLabels();
            if (is_object($data->getLabels())) {
                $values_1 = [];
                foreach ($data->getLabels() as $key_1 => $value_10) {
                    $values_1[$key_1] = $value_10;
                }
                $value_9 = $values_1;
            } elseif (null === $data->getLabels()) {
                $value_9 = $data->getLabels();
            }
            $dataArray['Labels'] = $value_9;
        }
        if ($data->isInitialized('peers')) {
            $value_11 = $data->getPeers();
            if (is_array($data->getPeers())) {
                $values_2 = [];
                foreach ($data->getPeers() as $value_12) {
                    $values_2[] = $this->normalizer->normalize($value_12, 'json', $context);
                }
                $value_11 = $values_2;
            } elseif (null === $data->getPeers()) {
                $value_11 = $data->getPeers();
            }
            $dataArray['Peers'] = $value_11;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\NetworkSummary::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
