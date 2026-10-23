<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use DateTime;
use Exception;
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

class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ImageInspect();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Id', $data)) {
            $object->id = $data['Id'];
            unset($data['Id']);
        }
        if (array_key_exists('Descriptor', $data)) {
            $object->descriptor = $this->denormalizer->denormalize($data['Descriptor'], \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class, 'json', $context);
            unset($data['Descriptor']);
        }
        if (array_key_exists('Manifests', $data) && null !== $data['Manifests']) {
            $values = [];
            foreach ($data['Manifests'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
            }
            $object->manifests = $values;
            unset($data['Manifests']);
        } elseif (array_key_exists('Manifests', $data)) {
            $object->manifests = null;
            unset($data['Manifests']);
        }
        if (array_key_exists('Identity', $data)) {
            $object->identity = $this->denormalizer->denormalize($data['Identity'], \WebProject\DockerApi\Library\Generated\Model\Identity::class, 'json', $context);
            unset($data['Identity']);
        }
        if (array_key_exists('RepoTags', $data) && null !== $data['RepoTags']) {
            $values_1 = [];
            foreach ($data['RepoTags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->repoTags = $values_1;
            unset($data['RepoTags']);
        } elseif (array_key_exists('RepoTags', $data)) {
            $object->repoTags = null;
            unset($data['RepoTags']);
        }
        if (array_key_exists('RepoDigests', $data) && null !== $data['RepoDigests']) {
            $values_2 = [];
            foreach ($data['RepoDigests'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->repoDigests = $values_2;
            unset($data['RepoDigests']);
        } elseif (array_key_exists('RepoDigests', $data)) {
            $object->repoDigests = null;
            unset($data['RepoDigests']);
        }
        if (array_key_exists('Comment', $data) && null !== $data['Comment']) {
            $value_3 = $data['Comment'];
            if (is_string($data['Comment'])) {
                $value_3 = $data['Comment'];
            } elseif (null === $data['Comment']) {
                $value_3 = $data['Comment'];
            }
            $object->comment = $value_3;
            unset($data['Comment']);
        } elseif (array_key_exists('Comment', $data)) {
            $object->comment = null;
            unset($data['Comment']);
        }
        if (array_key_exists('Created', $data) && null !== $data['Created']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Created']);
            if (false === $date) {
                if (is_string($data['Created']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['Created'])) {
                    try {
                        $date = new DateTime($data['Created']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Created'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Created'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->created = $date;
            unset($data['Created']);
        } elseif (array_key_exists('Created', $data)) {
            $object->created = null;
            unset($data['Created']);
        }
        if (array_key_exists('Author', $data) && null !== $data['Author']) {
            $value_4 = $data['Author'];
            if (is_string($data['Author'])) {
                $value_4 = $data['Author'];
            } elseif (null === $data['Author']) {
                $value_4 = $data['Author'];
            }
            $object->author = $value_4;
            unset($data['Author']);
        } elseif (array_key_exists('Author', $data)) {
            $object->author = null;
            unset($data['Author']);
        }
        if (array_key_exists('Config', $data)) {
            $object->config = $this->denormalizer->denormalize($data['Config'], \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class, 'json', $context);
            unset($data['Config']);
        }
        if (array_key_exists('Architecture', $data)) {
            $object->architecture = $data['Architecture'];
            unset($data['Architecture']);
        }
        if (array_key_exists('Variant', $data) && null !== $data['Variant']) {
            $value_5 = $data['Variant'];
            if (is_string($data['Variant'])) {
                $value_5 = $data['Variant'];
            } elseif (null === $data['Variant']) {
                $value_5 = $data['Variant'];
            }
            $object->variant = $value_5;
            unset($data['Variant']);
        } elseif (array_key_exists('Variant', $data)) {
            $object->variant = null;
            unset($data['Variant']);
        }
        if (array_key_exists('Os', $data)) {
            $object->os = $data['Os'];
            unset($data['Os']);
        }
        if (array_key_exists('OsVersion', $data) && null !== $data['OsVersion']) {
            $value_6 = $data['OsVersion'];
            if (is_string($data['OsVersion'])) {
                $value_6 = $data['OsVersion'];
            } elseif (null === $data['OsVersion']) {
                $value_6 = $data['OsVersion'];
            }
            $object->osVersion = $value_6;
            unset($data['OsVersion']);
        } elseif (array_key_exists('OsVersion', $data)) {
            $object->osVersion = null;
            unset($data['OsVersion']);
        }
        if (array_key_exists('Size', $data)) {
            $object->size = $data['Size'];
            unset($data['Size']);
        }
        if (array_key_exists('GraphDriver', $data)) {
            $object->graphDriver = $this->denormalizer->denormalize($data['GraphDriver'], \WebProject\DockerApi\Library\Generated\Model\DriverData::class, 'json', $context);
            unset($data['GraphDriver']);
        }
        if (array_key_exists('RootFS', $data) && null !== $data['RootFS']) {
            $object->rootFS = $this->denormalizer->denormalize($data['RootFS'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class, 'json', $context);
            unset($data['RootFS']);
        } elseif (array_key_exists('RootFS', $data)) {
            $object->rootFS = null;
            unset($data['RootFS']);
        }
        if (array_key_exists('Metadata', $data) && null !== $data['Metadata']) {
            $object->metadata = $this->denormalizer->denormalize($data['Metadata'], \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class, 'json', $context);
            unset($data['Metadata']);
        } elseif (array_key_exists('Metadata', $data)) {
            $object->metadata = null;
            unset($data['Metadata']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['Id'] = $data->id;
        }
        if (array_key_exists('descriptor', get_object_vars($data)) && null !== ($data->descriptor ?? null)) {
            $normalized              = $this->normalizer->normalize($data->descriptor, 'json', $context);
            $dataArray['Descriptor'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('manifests', get_object_vars($data)) && null !== ($data->manifests ?? null)) {
            $values = [];
            foreach ($data->manifests as $value) {
                $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[]     = is_iterable($normalized_1) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['Manifests'] = $values;
        }
        if (array_key_exists('identity', get_object_vars($data)) && null !== ($data->identity ?? null)) {
            $normalized_2          = $this->normalizer->normalize($data->identity, 'json', $context);
            $dataArray['Identity'] = is_iterable($normalized_2) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('repoTags', get_object_vars($data)) && null !== ($data->repoTags ?? null)) {
            $values_1 = [];
            foreach ($data->repoTags as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['RepoTags'] = $values_1;
        }
        if (array_key_exists('repoDigests', get_object_vars($data)) && null !== ($data->repoDigests ?? null)) {
            $values_2 = [];
            foreach ($data->repoDigests as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['RepoDigests'] = $values_2;
        }
        if (array_key_exists('comment', get_object_vars($data)) && null !== ($data->comment ?? null)) {
            $value_3 = $data->comment;
            if (is_string($data->comment)) {
                $value_3 = $data->comment;
            } elseif (null === $data->comment) {
                $value_3 = $data->comment;
            }
            $dataArray['Comment'] = $value_3;
        }
        if (array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['Created'] = $data->created?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('author', get_object_vars($data)) && null !== ($data->author ?? null)) {
            $value_4 = $data->author;
            if (is_string($data->author)) {
                $value_4 = $data->author;
            } elseif (null === $data->author) {
                $value_4 = $data->author;
            }
            $dataArray['Author'] = $value_4;
        }
        if (array_key_exists('config', get_object_vars($data)) && null !== ($data->config ?? null)) {
            $normalized_3        = $this->normalizer->normalize($data->config, 'json', $context);
            $dataArray['Config'] = is_iterable($normalized_3) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('architecture', get_object_vars($data)) && null !== ($data->architecture ?? null)) {
            $dataArray['Architecture'] = $data->architecture;
        }
        if (array_key_exists('variant', get_object_vars($data)) && null !== ($data->variant ?? null)) {
            $value_5 = $data->variant;
            if (is_string($data->variant)) {
                $value_5 = $data->variant;
            } elseif (null === $data->variant) {
                $value_5 = $data->variant;
            }
            $dataArray['Variant'] = $value_5;
        }
        if (array_key_exists('os', get_object_vars($data)) && null !== ($data->os ?? null)) {
            $dataArray['Os'] = $data->os;
        }
        if (array_key_exists('osVersion', get_object_vars($data)) && null !== ($data->osVersion ?? null)) {
            $value_6 = $data->osVersion;
            if (is_string($data->osVersion)) {
                $value_6 = $data->osVersion;
            } elseif (null === $data->osVersion) {
                $value_6 = $data->osVersion;
            }
            $dataArray['OsVersion'] = $value_6;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['Size'] = $data->size;
        }
        if (array_key_exists('graphDriver', get_object_vars($data)) && null !== ($data->graphDriver ?? null)) {
            $normalized_4             = $this->normalizer->normalize($data->graphDriver, 'json', $context);
            $dataArray['GraphDriver'] = is_iterable($normalized_4) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('rootFS', get_object_vars($data)) && null !== ($data->rootFS ?? null)) {
            $normalized_5        = $this->normalizer->normalize($data->rootFS, 'json', $context);
            $dataArray['RootFS'] = is_iterable($normalized_5) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $normalized_6          = $this->normalizer->normalize($data->metadata, 'json', $context);
            $dataArray['Metadata'] = is_iterable($normalized_6) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ImageInspect::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
