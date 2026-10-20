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
use function is_int;
use function is_object;
use function is_string;

class HealthcheckResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Start', $data) && null !== $data['Start']) {
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Start']);
            if (false === $date) {
                if (is_string($data['Start']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['Start'])) {
                    try {
                        $date = new DateTime($data['Start']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Start'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['Start'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->start = $date;
            unset($data['Start']);
        } elseif (array_key_exists('Start', $data)) {
            $object->start = null;
            unset($data['Start']);
        }
        if (array_key_exists('End', $data) && null !== $data['End']) {
            $date_1 = DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['End']);
            if (false === $date_1) {
                if (is_string($data['End']) && 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['End'])) {
                    try {
                        $date_1 = new DateTime($data['End']);
                    } catch (Exception) {
                        throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['End'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\InvalidDateException($data['End'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->end = $date_1;
            unset($data['End']);
        } elseif (array_key_exists('End', $data)) {
            $object->end = null;
            unset($data['End']);
        }
        if (array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
            $value = $data['ExitCode'];
            if (is_int($data['ExitCode'])) {
                $value = $data['ExitCode'];
            } elseif (null === $data['ExitCode']) {
                $value = $data['ExitCode'];
            }
            $object->exitCode = $value;
            unset($data['ExitCode']);
        } elseif (array_key_exists('ExitCode', $data)) {
            $object->exitCode = null;
            unset($data['ExitCode']);
        }
        if (array_key_exists('Output', $data) && null !== $data['Output']) {
            $value_1 = $data['Output'];
            if (is_string($data['Output'])) {
                $value_1 = $data['Output'];
            } elseif (null === $data['Output']) {
                $value_1 = $data['Output'];
            }
            $object->output = $value_1;
            unset($data['Output']);
        } elseif (array_key_exists('Output', $data)) {
            $object->output = null;
            unset($data['Output']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('start', get_object_vars($data)) && null !== ($data->start ?? null)) {
            $dataArray['Start'] = $data->start?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('end', get_object_vars($data)) && null !== ($data->end ?? null)) {
            $dataArray['End'] = $data->end?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('exitCode', get_object_vars($data)) && null !== ($data->exitCode ?? null)) {
            $value = $data->exitCode;
            if (is_int($data->exitCode)) {
                $value = $data->exitCode;
            } elseif (null === $data->exitCode) {
                $value = $data->exitCode;
            }
            $dataArray['ExitCode'] = $value;
        }
        if (array_key_exists('output', get_object_vars($data)) && null !== ($data->output ?? null)) {
            $value_1 = $data->output;
            if (is_string($data->output)) {
                $value_1 = $data->output;
            } elseif (null === $data->output) {
                $value_1 = $data->output;
            }
            $dataArray['Output'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
