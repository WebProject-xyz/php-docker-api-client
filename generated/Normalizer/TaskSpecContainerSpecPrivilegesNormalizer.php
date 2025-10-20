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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges();
        if (array_key_exists('NoNewPrivileges', $data) && is_int($data['NoNewPrivileges'])) {
            $data['NoNewPrivileges'] = (bool) $data['NoNewPrivileges'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \WebProject\DockerApi\Library\Generated\Validator\TaskSpecContainerSpecPrivilegesConstraint());
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('CredentialSpec', $data)) {
            $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context));
            unset($data['CredentialSpec']);
        }
        if (array_key_exists('SELinuxContext', $data)) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context));
            unset($data['SELinuxContext']);
        }
        if (array_key_exists('Seccomp', $data)) {
            $object->setSeccomp($this->denormalizer->denormalize($data['Seccomp'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class, 'json', $context));
            unset($data['Seccomp']);
        }
        if (array_key_exists('AppArmor', $data)) {
            $object->setAppArmor($this->denormalizer->denormalize($data['AppArmor'], \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class, 'json', $context));
            unset($data['AppArmor']);
        }
        if (array_key_exists('NoNewPrivileges', $data)) {
            $object->setNoNewPrivileges($data['NoNewPrivileges']);
            unset($data['NoNewPrivileges']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('credentialSpec') && null !== $data->getCredentialSpec()) {
            $dataArray['CredentialSpec'] = $this->normalizer->normalize($data->getCredentialSpec(), 'json', $context);
        }
        if ($data->isInitialized('sELinuxContext') && null !== $data->getSELinuxContext()) {
            $dataArray['SELinuxContext'] = $this->normalizer->normalize($data->getSELinuxContext(), 'json', $context);
        }
        if ($data->isInitialized('seccomp') && null !== $data->getSeccomp()) {
            $dataArray['Seccomp'] = $this->normalizer->normalize($data->getSeccomp(), 'json', $context);
        }
        if ($data->isInitialized('appArmor') && null !== $data->getAppArmor()) {
            $dataArray['AppArmor'] = $this->normalizer->normalize($data->getAppArmor(), 'json', $context);
        }
        if ($data->isInitialized('noNewPrivileges') && null !== $data->getNoNewPrivileges()) {
            $dataArray['NoNewPrivileges'] = $data->getNoNewPrivileges();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \WebProject\DockerApi\Library\Generated\Validator\TaskSpecContainerSpecPrivilegesConstraint());
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
