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

class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('CredentialSpec', $data) && null !== $data['CredentialSpec']) {
            $object->credentialSpec = $this->denormalizer->denormalize($data['CredentialSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context);
            unset($data['CredentialSpec']);
        } elseif (array_key_exists('CredentialSpec', $data)) {
            $object->credentialSpec = null;
            unset($data['CredentialSpec']);
        }
        if (array_key_exists('SELinuxContext', $data) && null !== $data['SELinuxContext']) {
            $object->sELinuxContext = $this->denormalizer->denormalize($data['SELinuxContext'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context);
            unset($data['SELinuxContext']);
        } elseif (array_key_exists('SELinuxContext', $data)) {
            $object->sELinuxContext = null;
            unset($data['SELinuxContext']);
        }
        if (array_key_exists('Seccomp', $data) && null !== $data['Seccomp']) {
            $object->seccomp = $this->denormalizer->denormalize($data['Seccomp'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class, 'json', $context);
            unset($data['Seccomp']);
        } elseif (array_key_exists('Seccomp', $data)) {
            $object->seccomp = null;
            unset($data['Seccomp']);
        }
        if (array_key_exists('AppArmor', $data) && null !== $data['AppArmor']) {
            $object->appArmor = $this->denormalizer->denormalize($data['AppArmor'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class, 'json', $context);
            unset($data['AppArmor']);
        } elseif (array_key_exists('AppArmor', $data)) {
            $object->appArmor = null;
            unset($data['AppArmor']);
        }
        if (array_key_exists('NoNewPrivileges', $data) && null !== $data['NoNewPrivileges']) {
            $value = $data['NoNewPrivileges'];
            if (is_bool($data['NoNewPrivileges'])) {
                $value = $data['NoNewPrivileges'];
            } elseif (null === $data['NoNewPrivileges']) {
                $value = $data['NoNewPrivileges'];
            }
            $object->noNewPrivileges = $value;
            unset($data['NoNewPrivileges']);
        } elseif (array_key_exists('NoNewPrivileges', $data)) {
            $object->noNewPrivileges = null;
            unset($data['NoNewPrivileges']);
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
        if (array_key_exists('credentialSpec', get_object_vars($data)) && null !== ($data->credentialSpec ?? null)) {
            $normalized                  = $this->normalizer->normalize($data->credentialSpec, 'json', $context);
            $dataArray['CredentialSpec'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('sELinuxContext', get_object_vars($data)) && null !== ($data->sELinuxContext ?? null)) {
            $normalized_1                = $this->normalizer->normalize($data->sELinuxContext, 'json', $context);
            $dataArray['SELinuxContext'] = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('seccomp', get_object_vars($data)) && null !== ($data->seccomp ?? null)) {
            $normalized_2         = $this->normalizer->normalize($data->seccomp, 'json', $context);
            $dataArray['Seccomp'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('appArmor', get_object_vars($data)) && null !== ($data->appArmor ?? null)) {
            $normalized_3          = $this->normalizer->normalize($data->appArmor, 'json', $context);
            $dataArray['AppArmor'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('noNewPrivileges', get_object_vars($data)) && null !== ($data->noNewPrivileges ?? null)) {
            $value = $data->noNewPrivileges;
            if (is_bool($data->noNewPrivileges)) {
                $value = $data->noNewPrivileges;
            } elseif (null === $data->noNewPrivileges) {
                $value = $data->noNewPrivileges;
            }
            $dataArray['NoNewPrivileges'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
