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
            $object->certificateIssuer = $value;
            unset($data['CertificateIssuer']);
        } elseif (array_key_exists('CertificateIssuer', $data)) {
            $object->certificateIssuer = null;
            unset($data['CertificateIssuer']);
        }
        if (array_key_exists('SubjectAlternativeName', $data) && null !== $data['SubjectAlternativeName']) {
            $value_1 = $data['SubjectAlternativeName'];
            if (is_string($data['SubjectAlternativeName'])) {
                $value_1 = $data['SubjectAlternativeName'];
            } elseif (null === $data['SubjectAlternativeName']) {
                $value_1 = $data['SubjectAlternativeName'];
            }
            $object->subjectAlternativeName = $value_1;
            unset($data['SubjectAlternativeName']);
        } elseif (array_key_exists('SubjectAlternativeName', $data)) {
            $object->subjectAlternativeName = null;
            unset($data['SubjectAlternativeName']);
        }
        if (array_key_exists('Issuer', $data) && null !== $data['Issuer']) {
            $value_2 = $data['Issuer'];
            if (is_string($data['Issuer'])) {
                $value_2 = $data['Issuer'];
            } elseif (null === $data['Issuer']) {
                $value_2 = $data['Issuer'];
            }
            $object->issuer = $value_2;
            unset($data['Issuer']);
        } elseif (array_key_exists('Issuer', $data)) {
            $object->issuer = null;
            unset($data['Issuer']);
        }
        if (array_key_exists('BuildSignerURI', $data) && null !== $data['BuildSignerURI']) {
            $value_3 = $data['BuildSignerURI'];
            if (is_string($data['BuildSignerURI'])) {
                $value_3 = $data['BuildSignerURI'];
            } elseif (null === $data['BuildSignerURI']) {
                $value_3 = $data['BuildSignerURI'];
            }
            $object->buildSignerURI = $value_3;
            unset($data['BuildSignerURI']);
        } elseif (array_key_exists('BuildSignerURI', $data)) {
            $object->buildSignerURI = null;
            unset($data['BuildSignerURI']);
        }
        if (array_key_exists('BuildSignerDigest', $data) && null !== $data['BuildSignerDigest']) {
            $value_4 = $data['BuildSignerDigest'];
            if (is_string($data['BuildSignerDigest'])) {
                $value_4 = $data['BuildSignerDigest'];
            } elseif (null === $data['BuildSignerDigest']) {
                $value_4 = $data['BuildSignerDigest'];
            }
            $object->buildSignerDigest = $value_4;
            unset($data['BuildSignerDigest']);
        } elseif (array_key_exists('BuildSignerDigest', $data)) {
            $object->buildSignerDigest = null;
            unset($data['BuildSignerDigest']);
        }
        if (array_key_exists('RunnerEnvironment', $data) && null !== $data['RunnerEnvironment']) {
            $value_5 = $data['RunnerEnvironment'];
            if (is_string($data['RunnerEnvironment'])) {
                $value_5 = $data['RunnerEnvironment'];
            } elseif (null === $data['RunnerEnvironment']) {
                $value_5 = $data['RunnerEnvironment'];
            }
            $object->runnerEnvironment = $value_5;
            unset($data['RunnerEnvironment']);
        } elseif (array_key_exists('RunnerEnvironment', $data)) {
            $object->runnerEnvironment = null;
            unset($data['RunnerEnvironment']);
        }
        if (array_key_exists('SourceRepositoryURI', $data) && null !== $data['SourceRepositoryURI']) {
            $value_6 = $data['SourceRepositoryURI'];
            if (is_string($data['SourceRepositoryURI'])) {
                $value_6 = $data['SourceRepositoryURI'];
            } elseif (null === $data['SourceRepositoryURI']) {
                $value_6 = $data['SourceRepositoryURI'];
            }
            $object->sourceRepositoryURI = $value_6;
            unset($data['SourceRepositoryURI']);
        } elseif (array_key_exists('SourceRepositoryURI', $data)) {
            $object->sourceRepositoryURI = null;
            unset($data['SourceRepositoryURI']);
        }
        if (array_key_exists('SourceRepositoryDigest', $data) && null !== $data['SourceRepositoryDigest']) {
            $value_7 = $data['SourceRepositoryDigest'];
            if (is_string($data['SourceRepositoryDigest'])) {
                $value_7 = $data['SourceRepositoryDigest'];
            } elseif (null === $data['SourceRepositoryDigest']) {
                $value_7 = $data['SourceRepositoryDigest'];
            }
            $object->sourceRepositoryDigest = $value_7;
            unset($data['SourceRepositoryDigest']);
        } elseif (array_key_exists('SourceRepositoryDigest', $data)) {
            $object->sourceRepositoryDigest = null;
            unset($data['SourceRepositoryDigest']);
        }
        if (array_key_exists('SourceRepositoryRef', $data) && null !== $data['SourceRepositoryRef']) {
            $value_8 = $data['SourceRepositoryRef'];
            if (is_string($data['SourceRepositoryRef'])) {
                $value_8 = $data['SourceRepositoryRef'];
            } elseif (null === $data['SourceRepositoryRef']) {
                $value_8 = $data['SourceRepositoryRef'];
            }
            $object->sourceRepositoryRef = $value_8;
            unset($data['SourceRepositoryRef']);
        } elseif (array_key_exists('SourceRepositoryRef', $data)) {
            $object->sourceRepositoryRef = null;
            unset($data['SourceRepositoryRef']);
        }
        if (array_key_exists('SourceRepositoryIdentifier', $data) && null !== $data['SourceRepositoryIdentifier']) {
            $value_9 = $data['SourceRepositoryIdentifier'];
            if (is_string($data['SourceRepositoryIdentifier'])) {
                $value_9 = $data['SourceRepositoryIdentifier'];
            } elseif (null === $data['SourceRepositoryIdentifier']) {
                $value_9 = $data['SourceRepositoryIdentifier'];
            }
            $object->sourceRepositoryIdentifier = $value_9;
            unset($data['SourceRepositoryIdentifier']);
        } elseif (array_key_exists('SourceRepositoryIdentifier', $data)) {
            $object->sourceRepositoryIdentifier = null;
            unset($data['SourceRepositoryIdentifier']);
        }
        if (array_key_exists('SourceRepositoryOwnerURI', $data) && null !== $data['SourceRepositoryOwnerURI']) {
            $value_10 = $data['SourceRepositoryOwnerURI'];
            if (is_string($data['SourceRepositoryOwnerURI'])) {
                $value_10 = $data['SourceRepositoryOwnerURI'];
            } elseif (null === $data['SourceRepositoryOwnerURI']) {
                $value_10 = $data['SourceRepositoryOwnerURI'];
            }
            $object->sourceRepositoryOwnerURI = $value_10;
            unset($data['SourceRepositoryOwnerURI']);
        } elseif (array_key_exists('SourceRepositoryOwnerURI', $data)) {
            $object->sourceRepositoryOwnerURI = null;
            unset($data['SourceRepositoryOwnerURI']);
        }
        if (array_key_exists('SourceRepositoryOwnerIdentifier', $data) && null !== $data['SourceRepositoryOwnerIdentifier']) {
            $value_11 = $data['SourceRepositoryOwnerIdentifier'];
            if (is_string($data['SourceRepositoryOwnerIdentifier'])) {
                $value_11 = $data['SourceRepositoryOwnerIdentifier'];
            } elseif (null === $data['SourceRepositoryOwnerIdentifier']) {
                $value_11 = $data['SourceRepositoryOwnerIdentifier'];
            }
            $object->sourceRepositoryOwnerIdentifier = $value_11;
            unset($data['SourceRepositoryOwnerIdentifier']);
        } elseif (array_key_exists('SourceRepositoryOwnerIdentifier', $data)) {
            $object->sourceRepositoryOwnerIdentifier = null;
            unset($data['SourceRepositoryOwnerIdentifier']);
        }
        if (array_key_exists('BuildConfigURI', $data) && null !== $data['BuildConfigURI']) {
            $value_12 = $data['BuildConfigURI'];
            if (is_string($data['BuildConfigURI'])) {
                $value_12 = $data['BuildConfigURI'];
            } elseif (null === $data['BuildConfigURI']) {
                $value_12 = $data['BuildConfigURI'];
            }
            $object->buildConfigURI = $value_12;
            unset($data['BuildConfigURI']);
        } elseif (array_key_exists('BuildConfigURI', $data)) {
            $object->buildConfigURI = null;
            unset($data['BuildConfigURI']);
        }
        if (array_key_exists('BuildConfigDigest', $data) && null !== $data['BuildConfigDigest']) {
            $value_13 = $data['BuildConfigDigest'];
            if (is_string($data['BuildConfigDigest'])) {
                $value_13 = $data['BuildConfigDigest'];
            } elseif (null === $data['BuildConfigDigest']) {
                $value_13 = $data['BuildConfigDigest'];
            }
            $object->buildConfigDigest = $value_13;
            unset($data['BuildConfigDigest']);
        } elseif (array_key_exists('BuildConfigDigest', $data)) {
            $object->buildConfigDigest = null;
            unset($data['BuildConfigDigest']);
        }
        if (array_key_exists('BuildTrigger', $data) && null !== $data['BuildTrigger']) {
            $value_14 = $data['BuildTrigger'];
            if (is_string($data['BuildTrigger'])) {
                $value_14 = $data['BuildTrigger'];
            } elseif (null === $data['BuildTrigger']) {
                $value_14 = $data['BuildTrigger'];
            }
            $object->buildTrigger = $value_14;
            unset($data['BuildTrigger']);
        } elseif (array_key_exists('BuildTrigger', $data)) {
            $object->buildTrigger = null;
            unset($data['BuildTrigger']);
        }
        if (array_key_exists('RunInvocationURI', $data) && null !== $data['RunInvocationURI']) {
            $value_15 = $data['RunInvocationURI'];
            if (is_string($data['RunInvocationURI'])) {
                $value_15 = $data['RunInvocationURI'];
            } elseif (null === $data['RunInvocationURI']) {
                $value_15 = $data['RunInvocationURI'];
            }
            $object->runInvocationURI = $value_15;
            unset($data['RunInvocationURI']);
        } elseif (array_key_exists('RunInvocationURI', $data)) {
            $object->runInvocationURI = null;
            unset($data['RunInvocationURI']);
        }
        if (array_key_exists('SourceRepositoryVisibilityAtSigning', $data) && null !== $data['SourceRepositoryVisibilityAtSigning']) {
            $value_16 = $data['SourceRepositoryVisibilityAtSigning'];
            if (is_string($data['SourceRepositoryVisibilityAtSigning'])) {
                $value_16 = $data['SourceRepositoryVisibilityAtSigning'];
            } elseif (null === $data['SourceRepositoryVisibilityAtSigning']) {
                $value_16 = $data['SourceRepositoryVisibilityAtSigning'];
            }
            $object->sourceRepositoryVisibilityAtSigning = $value_16;
            unset($data['SourceRepositoryVisibilityAtSigning']);
        } elseif (array_key_exists('SourceRepositoryVisibilityAtSigning', $data)) {
            $object->sourceRepositoryVisibilityAtSigning = null;
            unset($data['SourceRepositoryVisibilityAtSigning']);
        }
        foreach ($data as $key => $value_17) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_17;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('certificateIssuer', get_object_vars($data)) && null !== ($data->certificateIssuer ?? null)) {
            $value = $data->certificateIssuer;
            if (is_string($data->certificateIssuer)) {
                $value = $data->certificateIssuer;
            } elseif (null === $data->certificateIssuer) {
                $value = $data->certificateIssuer;
            }
            $dataArray['CertificateIssuer'] = $value;
        }
        if (array_key_exists('subjectAlternativeName', get_object_vars($data)) && null !== ($data->subjectAlternativeName ?? null)) {
            $value_1 = $data->subjectAlternativeName;
            if (is_string($data->subjectAlternativeName)) {
                $value_1 = $data->subjectAlternativeName;
            } elseif (null === $data->subjectAlternativeName) {
                $value_1 = $data->subjectAlternativeName;
            }
            $dataArray['SubjectAlternativeName'] = $value_1;
        }
        if (array_key_exists('issuer', get_object_vars($data)) && null !== ($data->issuer ?? null)) {
            $value_2 = $data->issuer;
            if (is_string($data->issuer)) {
                $value_2 = $data->issuer;
            } elseif (null === $data->issuer) {
                $value_2 = $data->issuer;
            }
            $dataArray['Issuer'] = $value_2;
        }
        if (array_key_exists('buildSignerURI', get_object_vars($data)) && null !== ($data->buildSignerURI ?? null)) {
            $value_3 = $data->buildSignerURI;
            if (is_string($data->buildSignerURI)) {
                $value_3 = $data->buildSignerURI;
            } elseif (null === $data->buildSignerURI) {
                $value_3 = $data->buildSignerURI;
            }
            $dataArray['BuildSignerURI'] = $value_3;
        }
        if (array_key_exists('buildSignerDigest', get_object_vars($data)) && null !== ($data->buildSignerDigest ?? null)) {
            $value_4 = $data->buildSignerDigest;
            if (is_string($data->buildSignerDigest)) {
                $value_4 = $data->buildSignerDigest;
            } elseif (null === $data->buildSignerDigest) {
                $value_4 = $data->buildSignerDigest;
            }
            $dataArray['BuildSignerDigest'] = $value_4;
        }
        if (array_key_exists('runnerEnvironment', get_object_vars($data)) && null !== ($data->runnerEnvironment ?? null)) {
            $value_5 = $data->runnerEnvironment;
            if (is_string($data->runnerEnvironment)) {
                $value_5 = $data->runnerEnvironment;
            } elseif (null === $data->runnerEnvironment) {
                $value_5 = $data->runnerEnvironment;
            }
            $dataArray['RunnerEnvironment'] = $value_5;
        }
        if (array_key_exists('sourceRepositoryURI', get_object_vars($data)) && null !== ($data->sourceRepositoryURI ?? null)) {
            $value_6 = $data->sourceRepositoryURI;
            if (is_string($data->sourceRepositoryURI)) {
                $value_6 = $data->sourceRepositoryURI;
            } elseif (null === $data->sourceRepositoryURI) {
                $value_6 = $data->sourceRepositoryURI;
            }
            $dataArray['SourceRepositoryURI'] = $value_6;
        }
        if (array_key_exists('sourceRepositoryDigest', get_object_vars($data)) && null !== ($data->sourceRepositoryDigest ?? null)) {
            $value_7 = $data->sourceRepositoryDigest;
            if (is_string($data->sourceRepositoryDigest)) {
                $value_7 = $data->sourceRepositoryDigest;
            } elseif (null === $data->sourceRepositoryDigest) {
                $value_7 = $data->sourceRepositoryDigest;
            }
            $dataArray['SourceRepositoryDigest'] = $value_7;
        }
        if (array_key_exists('sourceRepositoryRef', get_object_vars($data)) && null !== ($data->sourceRepositoryRef ?? null)) {
            $value_8 = $data->sourceRepositoryRef;
            if (is_string($data->sourceRepositoryRef)) {
                $value_8 = $data->sourceRepositoryRef;
            } elseif (null === $data->sourceRepositoryRef) {
                $value_8 = $data->sourceRepositoryRef;
            }
            $dataArray['SourceRepositoryRef'] = $value_8;
        }
        if (array_key_exists('sourceRepositoryIdentifier', get_object_vars($data)) && null !== ($data->sourceRepositoryIdentifier ?? null)) {
            $value_9 = $data->sourceRepositoryIdentifier;
            if (is_string($data->sourceRepositoryIdentifier)) {
                $value_9 = $data->sourceRepositoryIdentifier;
            } elseif (null === $data->sourceRepositoryIdentifier) {
                $value_9 = $data->sourceRepositoryIdentifier;
            }
            $dataArray['SourceRepositoryIdentifier'] = $value_9;
        }
        if (array_key_exists('sourceRepositoryOwnerURI', get_object_vars($data)) && null !== ($data->sourceRepositoryOwnerURI ?? null)) {
            $value_10 = $data->sourceRepositoryOwnerURI;
            if (is_string($data->sourceRepositoryOwnerURI)) {
                $value_10 = $data->sourceRepositoryOwnerURI;
            } elseif (null === $data->sourceRepositoryOwnerURI) {
                $value_10 = $data->sourceRepositoryOwnerURI;
            }
            $dataArray['SourceRepositoryOwnerURI'] = $value_10;
        }
        if (array_key_exists('sourceRepositoryOwnerIdentifier', get_object_vars($data)) && null !== ($data->sourceRepositoryOwnerIdentifier ?? null)) {
            $value_11 = $data->sourceRepositoryOwnerIdentifier;
            if (is_string($data->sourceRepositoryOwnerIdentifier)) {
                $value_11 = $data->sourceRepositoryOwnerIdentifier;
            } elseif (null === $data->sourceRepositoryOwnerIdentifier) {
                $value_11 = $data->sourceRepositoryOwnerIdentifier;
            }
            $dataArray['SourceRepositoryOwnerIdentifier'] = $value_11;
        }
        if (array_key_exists('buildConfigURI', get_object_vars($data)) && null !== ($data->buildConfigURI ?? null)) {
            $value_12 = $data->buildConfigURI;
            if (is_string($data->buildConfigURI)) {
                $value_12 = $data->buildConfigURI;
            } elseif (null === $data->buildConfigURI) {
                $value_12 = $data->buildConfigURI;
            }
            $dataArray['BuildConfigURI'] = $value_12;
        }
        if (array_key_exists('buildConfigDigest', get_object_vars($data)) && null !== ($data->buildConfigDigest ?? null)) {
            $value_13 = $data->buildConfigDigest;
            if (is_string($data->buildConfigDigest)) {
                $value_13 = $data->buildConfigDigest;
            } elseif (null === $data->buildConfigDigest) {
                $value_13 = $data->buildConfigDigest;
            }
            $dataArray['BuildConfigDigest'] = $value_13;
        }
        if (array_key_exists('buildTrigger', get_object_vars($data)) && null !== ($data->buildTrigger ?? null)) {
            $value_14 = $data->buildTrigger;
            if (is_string($data->buildTrigger)) {
                $value_14 = $data->buildTrigger;
            } elseif (null === $data->buildTrigger) {
                $value_14 = $data->buildTrigger;
            }
            $dataArray['BuildTrigger'] = $value_14;
        }
        if (array_key_exists('runInvocationURI', get_object_vars($data)) && null !== ($data->runInvocationURI ?? null)) {
            $value_15 = $data->runInvocationURI;
            if (is_string($data->runInvocationURI)) {
                $value_15 = $data->runInvocationURI;
            } elseif (null === $data->runInvocationURI) {
                $value_15 = $data->runInvocationURI;
            }
            $dataArray['RunInvocationURI'] = $value_15;
        }
        if (array_key_exists('sourceRepositoryVisibilityAtSigning', get_object_vars($data)) && null !== ($data->sourceRepositoryVisibilityAtSigning ?? null)) {
            $value_16 = $data->sourceRepositoryVisibilityAtSigning;
            if (is_string($data->sourceRepositoryVisibilityAtSigning)) {
                $value_16 = $data->sourceRepositoryVisibilityAtSigning;
            } elseif (null === $data->sourceRepositoryVisibilityAtSigning) {
                $value_16 = $data->sourceRepositoryVisibilityAtSigning;
            }
            $dataArray['SourceRepositoryVisibilityAtSigning'] = $value_16;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_17) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_17;
            }
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
