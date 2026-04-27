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

class ContainerTopResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Titles', $data) && null !== $data['Titles']) {
            $value = $data['Titles'];
            if (is_array($data['Titles']) && $this->isOnlyNumericKeys($data['Titles'])) {
                $values = [];
                foreach ($data['Titles'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data['Titles']) {
                $value = $data['Titles'];
            }
            $object->setTitles($value);
        } elseif (array_key_exists('Titles', $data) && null === $data['Titles']) {
            $object->setTitles(null);
        }
        if (array_key_exists('Processes', $data) && null !== $data['Processes']) {
            $value_2 = $data['Processes'];
            if (is_array($data['Processes']) && $this->isOnlyNumericKeys($data['Processes'])) {
                $values_1 = [];
                foreach ($data['Processes'] as $value_3) {
                    $values_2 = [];
                    foreach ($value_3 as $value_4) {
                        $values_2[] = $value_4;
                    }
                    $values_1[] = $values_2;
                }
                $value_2 = $values_1;
            } elseif (null === $data['Processes']) {
                $value_2 = $data['Processes'];
            }
            $object->setProcesses($value_2);
        } elseif (array_key_exists('Processes', $data) && null === $data['Processes']) {
            $object->setProcesses(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if ($data->isInitialized('titles')) {
            $value = $data->getTitles();
            if (is_array($data->getTitles())) {
                $values = [];
                foreach ($data->getTitles() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (null === $data->getTitles()) {
                $value = $data->getTitles();
            }
            $dataArray['Titles'] = $value;
        }
        if ($data->isInitialized('processes')) {
            $value_2 = $data->getProcesses();
            if (is_array($data->getProcesses())) {
                $values_1 = [];
                foreach ($data->getProcesses() as $value_3) {
                    $values_2 = [];
                    foreach ($value_3 as $value_4) {
                        $values_2[] = $value_4;
                    }
                    $values_1[] = $values_2;
                }
                $value_2 = $values_1;
            } elseif (null === $data->getProcesses()) {
                $value_2 = $data->getProcesses();
            }
            $dataArray['Processes'] = $value_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
