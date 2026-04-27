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
use function is_string;

class SignerIdentityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\SignerIdentity::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\SignerIdentity::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\SignerIdentity();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('CertificateIssuer', $data) && null !== $data['CertificateIssuer']) {
            $value = $data['CertificateIssuer'];
            if (is_string($data['CertificateIssuer'])) {
                $value = $data['CertificateIssuer'];
            } elseif (null === $data['CertificateIssuer']) {
                $value = $data['CertificateIssuer'];
            }
            $object->setCertificateIssuer($value);
        } elseif (array_key_exists('CertificateIssuer', $data) && null === $data['CertificateIssuer']) {
            $object->setCertificateIssuer(null);
        }
        if (array_key_exists('SubjectAlternativeName', $data) && null !== $data['SubjectAlternativeName']) {
            $value_1 = $data['SubjectAlternativeName'];
            if (is_string($data['SubjectAlternativeName'])) {
                $value_1 = $data['SubjectAlternativeName'];
            } elseif (null === $data['SubjectAlternativeName']) {
                $value_1 = $data['SubjectAlternativeName'];
            }
            $object->setSubjectAlternativeName($value_1);
        } elseif (array_key_exists('SubjectAlternativeName', $data) && null === $data['SubjectAlternativeName']) {
            $object->setSubjectAlternativeName(null);
        }
        if (array_key_exists('Issuer', $data) && null !== $data['Issuer']) {
            $value_2 = $data['Issuer'];
            if (is_string($data['Issuer'])) {
                $value_2 = $data['Issuer'];
            } elseif (null === $data['Issuer']) {
                $value_2 = $data['Issuer'];
            }
            $object->setIssuer($value_2);
        } elseif (array_key_exists('Issuer', $data) && null === $data['Issuer']) {
            $object->setIssuer(null);
        }
        if (array_key_exists('BuildSignerURI', $data) && null !== $data['BuildSignerURI']) {
            $value_3 = $data['BuildSignerURI'];
            if (is_string($data['BuildSignerURI'])) {
                $value_3 = $data['BuildSignerURI'];
            } elseif (null === $data['BuildSignerURI']) {
                $value_3 = $data['BuildSignerURI'];
            }
            $object->setBuildSignerURI($value_3);
        } elseif (array_key_exists('BuildSignerURI', $data) && null === $data['BuildSignerURI']) {
            $object->setBuildSignerURI(null);
        }
        if (array_key_exists('BuildSignerDigest', $data) && null !== $data['BuildSignerDigest']) {
            $value_4 = $data['BuildSignerDigest'];
            if (is_string($data['BuildSignerDigest'])) {
                $value_4 = $data['BuildSignerDigest'];
            } elseif (null === $data['BuildSignerDigest']) {
                $value_4 = $data['BuildSignerDigest'];
            }
            $object->setBuildSignerDigest($value_4);
        } elseif (array_key_exists('BuildSignerDigest', $data) && null === $data['BuildSignerDigest']) {
            $object->setBuildSignerDigest(null);
        }
        if (array_key_exists('RunnerEnvironment', $data) && null !== $data['RunnerEnvironment']) {
            $value_5 = $data['RunnerEnvironment'];
            if (is_string($data['RunnerEnvironment'])) {
                $value_5 = $data['RunnerEnvironment'];
            } elseif (null === $data['RunnerEnvironment']) {
                $value_5 = $data['RunnerEnvironment'];
            }
            $object->setRunnerEnvironment($value_5);
        } elseif (array_key_exists('RunnerEnvironment', $data) && null === $data['RunnerEnvironment']) {
            $object->setRunnerEnvironment(null);
        }
        if (array_key_exists('SourceRepositoryURI', $data) && null !== $data['SourceRepositoryURI']) {
            $value_6 = $data['SourceRepositoryURI'];
            if (is_string($data['SourceRepositoryURI'])) {
                $value_6 = $data['SourceRepositoryURI'];
            } elseif (null === $data['SourceRepositoryURI']) {
                $value_6 = $data['SourceRepositoryURI'];
            }
            $object->setSourceRepositoryURI($value_6);
        } elseif (array_key_exists('SourceRepositoryURI', $data) && null === $data['SourceRepositoryURI']) {
            $object->setSourceRepositoryURI(null);
        }
        if (array_key_exists('SourceRepositoryDigest', $data) && null !== $data['SourceRepositoryDigest']) {
            $value_7 = $data['SourceRepositoryDigest'];
            if (is_string($data['SourceRepositoryDigest'])) {
                $value_7 = $data['SourceRepositoryDigest'];
            } elseif (null === $data['SourceRepositoryDigest']) {
                $value_7 = $data['SourceRepositoryDigest'];
            }
            $object->setSourceRepositoryDigest($value_7);
        } elseif (array_key_exists('SourceRepositoryDigest', $data) && null === $data['SourceRepositoryDigest']) {
            $object->setSourceRepositoryDigest(null);
        }
        if (array_key_exists('SourceRepositoryRef', $data) && null !== $data['SourceRepositoryRef']) {
            $value_8 = $data['SourceRepositoryRef'];
            if (is_string($data['SourceRepositoryRef'])) {
                $value_8 = $data['SourceRepositoryRef'];
            } elseif (null === $data['SourceRepositoryRef']) {
                $value_8 = $data['SourceRepositoryRef'];
            }
            $object->setSourceRepositoryRef($value_8);
        } elseif (array_key_exists('SourceRepositoryRef', $data) && null === $data['SourceRepositoryRef']) {
            $object->setSourceRepositoryRef(null);
        }
        if (array_key_exists('SourceRepositoryIdentifier', $data) && null !== $data['SourceRepositoryIdentifier']) {
            $value_9 = $data['SourceRepositoryIdentifier'];
            if (is_string($data['SourceRepositoryIdentifier'])) {
                $value_9 = $data['SourceRepositoryIdentifier'];
            } elseif (null === $data['SourceRepositoryIdentifier']) {
                $value_9 = $data['SourceRepositoryIdentifier'];
            }
            $object->setSourceRepositoryIdentifier($value_9);
        } elseif (array_key_exists('SourceRepositoryIdentifier', $data) && null === $data['SourceRepositoryIdentifier']) {
            $object->setSourceRepositoryIdentifier(null);
        }
        if (array_key_exists('SourceRepositoryOwnerURI', $data) && null !== $data['SourceRepositoryOwnerURI']) {
            $value_10 = $data['SourceRepositoryOwnerURI'];
            if (is_string($data['SourceRepositoryOwnerURI'])) {
                $value_10 = $data['SourceRepositoryOwnerURI'];
            } elseif (null === $data['SourceRepositoryOwnerURI']) {
                $value_10 = $data['SourceRepositoryOwnerURI'];
            }
            $object->setSourceRepositoryOwnerURI($value_10);
        } elseif (array_key_exists('SourceRepositoryOwnerURI', $data) && null === $data['SourceRepositoryOwnerURI']) {
            $object->setSourceRepositoryOwnerURI(null);
        }
        if (array_key_exists('SourceRepositoryOwnerIdentifier', $data) && null !== $data['SourceRepositoryOwnerIdentifier']) {
            $value_11 = $data['SourceRepositoryOwnerIdentifier'];
            if (is_string($data['SourceRepositoryOwnerIdentifier'])) {
                $value_11 = $data['SourceRepositoryOwnerIdentifier'];
            } elseif (null === $data['SourceRepositoryOwnerIdentifier']) {
                $value_11 = $data['SourceRepositoryOwnerIdentifier'];
            }
            $object->setSourceRepositoryOwnerIdentifier($value_11);
        } elseif (array_key_exists('SourceRepositoryOwnerIdentifier', $data) && null === $data['SourceRepositoryOwnerIdentifier']) {
            $object->setSourceRepositoryOwnerIdentifier(null);
        }
        if (array_key_exists('BuildConfigURI', $data) && null !== $data['BuildConfigURI']) {
            $value_12 = $data['BuildConfigURI'];
            if (is_string($data['BuildConfigURI'])) {
                $value_12 = $data['BuildConfigURI'];
            } elseif (null === $data['BuildConfigURI']) {
                $value_12 = $data['BuildConfigURI'];
            }
            $object->setBuildConfigURI($value_12);
        } elseif (array_key_exists('BuildConfigURI', $data) && null === $data['BuildConfigURI']) {
            $object->setBuildConfigURI(null);
        }
        if (array_key_exists('BuildConfigDigest', $data) && null !== $data['BuildConfigDigest']) {
            $value_13 = $data['BuildConfigDigest'];
            if (is_string($data['BuildConfigDigest'])) {
                $value_13 = $data['BuildConfigDigest'];
            } elseif (null === $data['BuildConfigDigest']) {
                $value_13 = $data['BuildConfigDigest'];
            }
            $object->setBuildConfigDigest($value_13);
        } elseif (array_key_exists('BuildConfigDigest', $data) && null === $data['BuildConfigDigest']) {
            $object->setBuildConfigDigest(null);
        }
        if (array_key_exists('BuildTrigger', $data) && null !== $data['BuildTrigger']) {
            $value_14 = $data['BuildTrigger'];
            if (is_string($data['BuildTrigger'])) {
                $value_14 = $data['BuildTrigger'];
            } elseif (null === $data['BuildTrigger']) {
                $value_14 = $data['BuildTrigger'];
            }
            $object->setBuildTrigger($value_14);
        } elseif (array_key_exists('BuildTrigger', $data) && null === $data['BuildTrigger']) {
            $object->setBuildTrigger(null);
        }
        if (array_key_exists('RunInvocationURI', $data) && null !== $data['RunInvocationURI']) {
            $value_15 = $data['RunInvocationURI'];
            if (is_string($data['RunInvocationURI'])) {
                $value_15 = $data['RunInvocationURI'];
            } elseif (null === $data['RunInvocationURI']) {
                $value_15 = $data['RunInvocationURI'];
            }
            $object->setRunInvocationURI($value_15);
        } elseif (array_key_exists('RunInvocationURI', $data) && null === $data['RunInvocationURI']) {
            $object->setRunInvocationURI(null);
        }
        if (array_key_exists('SourceRepositoryVisibilityAtSigning', $data) && null !== $data['SourceRepositoryVisibilityAtSigning']) {
            $value_16 = $data['SourceRepositoryVisibilityAtSigning'];
            if (is_string($data['SourceRepositoryVisibilityAtSigning'])) {
                $value_16 = $data['SourceRepositoryVisibilityAtSigning'];
            } elseif (null === $data['SourceRepositoryVisibilityAtSigning']) {
                $value_16 = $data['SourceRepositoryVisibilityAtSigning'];
            }
            $object->setSourceRepositoryVisibilityAtSigning($value_16);
        } elseif (array_key_exists('SourceRepositoryVisibilityAtSigning', $data) && null === $data['SourceRepositoryVisibilityAtSigning']) {
            $object->setSourceRepositoryVisibilityAtSigning(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('certificateIssuer')) {
            $value = $data->getCertificateIssuer();
            if (is_string($data->getCertificateIssuer())) {
                $value = $data->getCertificateIssuer();
            } elseif (null === $data->getCertificateIssuer()) {
                $value = $data->getCertificateIssuer();
            }
            $dataArray['CertificateIssuer'] = $value;
        }
        if ($data->isInitialized('subjectAlternativeName')) {
            $value_1 = $data->getSubjectAlternativeName();
            if (is_string($data->getSubjectAlternativeName())) {
                $value_1 = $data->getSubjectAlternativeName();
            } elseif (null === $data->getSubjectAlternativeName()) {
                $value_1 = $data->getSubjectAlternativeName();
            }
            $dataArray['SubjectAlternativeName'] = $value_1;
        }
        if ($data->isInitialized('issuer')) {
            $value_2 = $data->getIssuer();
            if (is_string($data->getIssuer())) {
                $value_2 = $data->getIssuer();
            } elseif (null === $data->getIssuer()) {
                $value_2 = $data->getIssuer();
            }
            $dataArray['Issuer'] = $value_2;
        }
        if ($data->isInitialized('buildSignerURI')) {
            $value_3 = $data->getBuildSignerURI();
            if (is_string($data->getBuildSignerURI())) {
                $value_3 = $data->getBuildSignerURI();
            } elseif (null === $data->getBuildSignerURI()) {
                $value_3 = $data->getBuildSignerURI();
            }
            $dataArray['BuildSignerURI'] = $value_3;
        }
        if ($data->isInitialized('buildSignerDigest')) {
            $value_4 = $data->getBuildSignerDigest();
            if (is_string($data->getBuildSignerDigest())) {
                $value_4 = $data->getBuildSignerDigest();
            } elseif (null === $data->getBuildSignerDigest()) {
                $value_4 = $data->getBuildSignerDigest();
            }
            $dataArray['BuildSignerDigest'] = $value_4;
        }
        if ($data->isInitialized('runnerEnvironment')) {
            $value_5 = $data->getRunnerEnvironment();
            if (is_string($data->getRunnerEnvironment())) {
                $value_5 = $data->getRunnerEnvironment();
            } elseif (null === $data->getRunnerEnvironment()) {
                $value_5 = $data->getRunnerEnvironment();
            }
            $dataArray['RunnerEnvironment'] = $value_5;
        }
        if ($data->isInitialized('sourceRepositoryURI')) {
            $value_6 = $data->getSourceRepositoryURI();
            if (is_string($data->getSourceRepositoryURI())) {
                $value_6 = $data->getSourceRepositoryURI();
            } elseif (null === $data->getSourceRepositoryURI()) {
                $value_6 = $data->getSourceRepositoryURI();
            }
            $dataArray['SourceRepositoryURI'] = $value_6;
        }
        if ($data->isInitialized('sourceRepositoryDigest')) {
            $value_7 = $data->getSourceRepositoryDigest();
            if (is_string($data->getSourceRepositoryDigest())) {
                $value_7 = $data->getSourceRepositoryDigest();
            } elseif (null === $data->getSourceRepositoryDigest()) {
                $value_7 = $data->getSourceRepositoryDigest();
            }
            $dataArray['SourceRepositoryDigest'] = $value_7;
        }
        if ($data->isInitialized('sourceRepositoryRef')) {
            $value_8 = $data->getSourceRepositoryRef();
            if (is_string($data->getSourceRepositoryRef())) {
                $value_8 = $data->getSourceRepositoryRef();
            } elseif (null === $data->getSourceRepositoryRef()) {
                $value_8 = $data->getSourceRepositoryRef();
            }
            $dataArray['SourceRepositoryRef'] = $value_8;
        }
        if ($data->isInitialized('sourceRepositoryIdentifier')) {
            $value_9 = $data->getSourceRepositoryIdentifier();
            if (is_string($data->getSourceRepositoryIdentifier())) {
                $value_9 = $data->getSourceRepositoryIdentifier();
            } elseif (null === $data->getSourceRepositoryIdentifier()) {
                $value_9 = $data->getSourceRepositoryIdentifier();
            }
            $dataArray['SourceRepositoryIdentifier'] = $value_9;
        }
        if ($data->isInitialized('sourceRepositoryOwnerURI')) {
            $value_10 = $data->getSourceRepositoryOwnerURI();
            if (is_string($data->getSourceRepositoryOwnerURI())) {
                $value_10 = $data->getSourceRepositoryOwnerURI();
            } elseif (null === $data->getSourceRepositoryOwnerURI()) {
                $value_10 = $data->getSourceRepositoryOwnerURI();
            }
            $dataArray['SourceRepositoryOwnerURI'] = $value_10;
        }
        if ($data->isInitialized('sourceRepositoryOwnerIdentifier')) {
            $value_11 = $data->getSourceRepositoryOwnerIdentifier();
            if (is_string($data->getSourceRepositoryOwnerIdentifier())) {
                $value_11 = $data->getSourceRepositoryOwnerIdentifier();
            } elseif (null === $data->getSourceRepositoryOwnerIdentifier()) {
                $value_11 = $data->getSourceRepositoryOwnerIdentifier();
            }
            $dataArray['SourceRepositoryOwnerIdentifier'] = $value_11;
        }
        if ($data->isInitialized('buildConfigURI')) {
            $value_12 = $data->getBuildConfigURI();
            if (is_string($data->getBuildConfigURI())) {
                $value_12 = $data->getBuildConfigURI();
            } elseif (null === $data->getBuildConfigURI()) {
                $value_12 = $data->getBuildConfigURI();
            }
            $dataArray['BuildConfigURI'] = $value_12;
        }
        if ($data->isInitialized('buildConfigDigest')) {
            $value_13 = $data->getBuildConfigDigest();
            if (is_string($data->getBuildConfigDigest())) {
                $value_13 = $data->getBuildConfigDigest();
            } elseif (null === $data->getBuildConfigDigest()) {
                $value_13 = $data->getBuildConfigDigest();
            }
            $dataArray['BuildConfigDigest'] = $value_13;
        }
        if ($data->isInitialized('buildTrigger')) {
            $value_14 = $data->getBuildTrigger();
            if (is_string($data->getBuildTrigger())) {
                $value_14 = $data->getBuildTrigger();
            } elseif (null === $data->getBuildTrigger()) {
                $value_14 = $data->getBuildTrigger();
            }
            $dataArray['BuildTrigger'] = $value_14;
        }
        if ($data->isInitialized('runInvocationURI')) {
            $value_15 = $data->getRunInvocationURI();
            if (is_string($data->getRunInvocationURI())) {
                $value_15 = $data->getRunInvocationURI();
            } elseif (null === $data->getRunInvocationURI()) {
                $value_15 = $data->getRunInvocationURI();
            }
            $dataArray['RunInvocationURI'] = $value_15;
        }
        if ($data->isInitialized('sourceRepositoryVisibilityAtSigning')) {
            $value_16 = $data->getSourceRepositoryVisibilityAtSigning();
            if (is_string($data->getSourceRepositoryVisibilityAtSigning())) {
                $value_16 = $data->getSourceRepositoryVisibilityAtSigning();
            } elseif (null === $data->getSourceRepositoryVisibilityAtSigning()) {
                $value_16 = $data->getSourceRepositoryVisibilityAtSigning();
            }
            $dataArray['SourceRepositoryVisibilityAtSigning'] = $value_16;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\SignerIdentity::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
