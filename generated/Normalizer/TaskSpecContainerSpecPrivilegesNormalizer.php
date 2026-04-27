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
            $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context));
        } elseif (array_key_exists('CredentialSpec', $data) && null === $data['CredentialSpec']) {
            $object->setCredentialSpec(null);
        }
        if (array_key_exists('SELinuxContext', $data) && null !== $data['SELinuxContext']) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context));
        } elseif (array_key_exists('SELinuxContext', $data) && null === $data['SELinuxContext']) {
            $object->setSELinuxContext(null);
        }
        if (array_key_exists('Seccomp', $data) && null !== $data['Seccomp']) {
            $object->setSeccomp($this->denormalizer->denormalize($data['Seccomp'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class, 'json', $context));
        } elseif (array_key_exists('Seccomp', $data) && null === $data['Seccomp']) {
            $object->setSeccomp(null);
        }
        if (array_key_exists('AppArmor', $data) && null !== $data['AppArmor']) {
            $object->setAppArmor($this->denormalizer->denormalize($data['AppArmor'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class, 'json', $context));
        } elseif (array_key_exists('AppArmor', $data) && null === $data['AppArmor']) {
            $object->setAppArmor(null);
        }
        if (array_key_exists('NoNewPrivileges', $data) && null !== $data['NoNewPrivileges']) {
            $value = $data['NoNewPrivileges'];
            if (is_bool($data['NoNewPrivileges'])) {
                $value = $data['NoNewPrivileges'];
            } elseif (null === $data['NoNewPrivileges']) {
                $value = $data['NoNewPrivileges'];
            }
            $object->setNoNewPrivileges($value);
        } elseif (array_key_exists('NoNewPrivileges', $data) && null === $data['NoNewPrivileges']) {
            $object->setNoNewPrivileges(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('credentialSpec')) {
            $dataArray['CredentialSpec'] = $this->normalizer->normalize($data->getCredentialSpec(), 'json', $context);
        }
        if ($data->isInitialized('sELinuxContext')) {
            $dataArray['SELinuxContext'] = $this->normalizer->normalize($data->getSELinuxContext(), 'json', $context);
        }
        if ($data->isInitialized('seccomp')) {
            $dataArray['Seccomp'] = $this->normalizer->normalize($data->getSeccomp(), 'json', $context);
        }
        if ($data->isInitialized('appArmor')) {
            $dataArray['AppArmor'] = $this->normalizer->normalize($data->getAppArmor(), 'json', $context);
        }
        if ($data->isInitialized('noNewPrivileges')) {
            $value = $data->getNoNewPrivileges();
            if (is_bool($data->getNoNewPrivileges())) {
                $value = $data->getNoNewPrivileges();
            } elseif (null === $data->getNoNewPrivileges()) {
                $value = $data->getNoNewPrivileges();
            }
            $dataArray['NoNewPrivileges'] = $value;
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
