<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
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

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Start', $data) && null !== $data['Start']) {
                $object->setStart(DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Start']) ?: new DateTime($data['Start']));
                unset($data['Start']);
            } elseif (array_key_exists('Start', $data) && null === $data['Start']) {
                $object->setStart(null);
            }
            if (array_key_exists('End', $data) && null !== $data['End']) {
                $object->setEnd($data['End']);
                unset($data['End']);
            } elseif (array_key_exists('End', $data) && null === $data['End']) {
                $object->setEnd(null);
            }
            if (array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
                $object->setExitCode($data['ExitCode']);
                unset($data['ExitCode']);
            } elseif (array_key_exists('ExitCode', $data) && null === $data['ExitCode']) {
                $object->setExitCode(null);
            }
            if (array_key_exists('Output', $data)) {
                $object->setOutput($data['Output']);
                unset($data['Output']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $data = [];
            if ($object->isInitialized('start') && null !== $object->getStart()) {
                $data['Start'] = $object->getStart()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('end') && null !== $object->getEnd()) {
                $data['End'] = $object->getEnd();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('output') && null !== $object->getOutput()) {
                $data['Output'] = $object->getOutput();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class => true];
        }
    }
} else {
    class HealthcheckResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class === get_class($data);
        }

        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult();
            if (null === $data || false === is_array($data)) {
                return $object;
            }
            if (array_key_exists('Start', $data) && null !== $data['Start']) {
                $object->setStart(DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Start']));
                unset($data['Start']);
            } elseif (array_key_exists('Start', $data) && null === $data['Start']) {
                $object->setStart(null);
            }
            if (array_key_exists('End', $data) && null !== $data['End']) {
                $object->setEnd($data['End']);
                unset($data['End']);
            } elseif (array_key_exists('End', $data) && null === $data['End']) {
                $object->setEnd(null);
            }
            if (array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
                $object->setExitCode($data['ExitCode']);
                unset($data['ExitCode']);
            } elseif (array_key_exists('ExitCode', $data) && null === $data['ExitCode']) {
                $object->setExitCode(null);
            }
            if (array_key_exists('Output', $data)) {
                $object->setOutput($data['Output']);
                unset($data['Output']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('start') && null !== $object->getStart()) {
                $data['Start'] = $object->getStart()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('end') && null !== $object->getEnd()) {
                $data['End'] = $object->getEnd();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('output') && null !== $object->getOutput()) {
                $data['Output'] = $object->getOutput();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
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
}
