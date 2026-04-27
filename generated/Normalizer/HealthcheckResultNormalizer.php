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
            $value = $data['Start'];
            if (is_string($data['Start'])) {
                $value = $data['Start'];
            } elseif (null === $data['Start']) {
                $value = $data['Start'];
            }
            $object->setStart($value);
        } elseif (array_key_exists('Start', $data) && null === $data['Start']) {
            $object->setStart(null);
        }
        if (array_key_exists('End', $data) && null !== $data['End']) {
            $value_1 = $data['End'];
            if (is_string($data['End'])) {
                $value_1 = $data['End'];
            } elseif (null === $data['End']) {
                $value_1 = $data['End'];
            }
            $object->setEnd($value_1);
        } elseif (array_key_exists('End', $data) && null === $data['End']) {
            $object->setEnd(null);
        }
        if (array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
            $value_2 = $data['ExitCode'];
            if (is_int($data['ExitCode'])) {
                $value_2 = $data['ExitCode'];
            } elseif (null === $data['ExitCode']) {
                $value_2 = $data['ExitCode'];
            }
            $object->setExitCode($value_2);
        } elseif (array_key_exists('ExitCode', $data) && null === $data['ExitCode']) {
            $object->setExitCode(null);
        }
        if (array_key_exists('Output', $data) && null !== $data['Output']) {
            $value_3 = $data['Output'];
            if (is_string($data['Output'])) {
                $value_3 = $data['Output'];
            } elseif (null === $data['Output']) {
                $value_3 = $data['Output'];
            }
            $object->setOutput($value_3);
        } elseif (array_key_exists('Output', $data) && null === $data['Output']) {
            $object->setOutput(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('start')) {
            $value = $data->getStart();
            if (is_string($data->getStart())) {
                $value = $data->getStart();
            } elseif (null === $data->getStart()) {
                $value = $data->getStart();
            }
            $dataArray['Start'] = $value;
        }
        if ($data->isInitialized('end')) {
            $value_1 = $data->getEnd();
            if (is_string($data->getEnd())) {
                $value_1 = $data->getEnd();
            } elseif (null === $data->getEnd()) {
                $value_1 = $data->getEnd();
            }
            $dataArray['End'] = $value_1;
        }
        if ($data->isInitialized('exitCode')) {
            $value_2 = $data->getExitCode();
            if (is_int($data->getExitCode())) {
                $value_2 = $data->getExitCode();
            } elseif (null === $data->getExitCode()) {
                $value_2 = $data->getExitCode();
            }
            $dataArray['ExitCode'] = $value_2;
        }
        if ($data->isInitialized('output')) {
            $value_3 = $data->getOutput();
            if (is_string($data->getOutput())) {
                $value_3 = $data->getOutput();
            } elseif (null === $data->getOutput()) {
                $value_3 = $data->getOutput();
            }
            $dataArray['Output'] = $value_3;
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
