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

class SwarmJoinPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SwarmJoinPostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SwarmJoinPostBody::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\SwarmJoinPostBody();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('ListenAddr', $data)) {
            $object->setListenAddr($data['ListenAddr']);
            unset($data['ListenAddr']);
        }
        if (array_key_exists('AdvertiseAddr', $data)) {
            $object->setAdvertiseAddr($data['AdvertiseAddr']);
            unset($data['AdvertiseAddr']);
        }
        if (array_key_exists('DataPathAddr', $data)) {
            $object->setDataPathAddr($data['DataPathAddr']);
            unset($data['DataPathAddr']);
        }
        if (array_key_exists('RemoteAddrs', $data)) {
            $values = [];
            foreach ($data['RemoteAddrs'] as $value) {
                $values[] = $value;
            }
            $object->setRemoteAddrs($values);
            unset($data['RemoteAddrs']);
        }
        if (array_key_exists('JoinToken', $data)) {
            $object->setJoinToken($data['JoinToken']);
            unset($data['JoinToken']);
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
        if ($data->isInitialized('listenAddr') && null !== $data->getListenAddr()) {
            $dataArray['ListenAddr'] = $data->getListenAddr();
        }
        if ($data->isInitialized('advertiseAddr') && null !== $data->getAdvertiseAddr()) {
            $dataArray['AdvertiseAddr'] = $data->getAdvertiseAddr();
        }
        if ($data->isInitialized('dataPathAddr') && null !== $data->getDataPathAddr()) {
            $dataArray['DataPathAddr'] = $data->getDataPathAddr();
        }
        if ($data->isInitialized('remoteAddrs') && null !== $data->getRemoteAddrs()) {
            $values = [];
            foreach ($data->getRemoteAddrs() as $value) {
                $values[] = $value;
            }
            $dataArray['RemoteAddrs'] = $values;
        }
        if ($data->isInitialized('joinToken') && null !== $data->getJoinToken()) {
            $dataArray['JoinToken'] = $data->getJoinToken();
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
        return [\WebProject\DockerApi\Library\Generated\Model\SwarmJoinPostBody::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
