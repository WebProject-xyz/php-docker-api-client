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
use function is_int;
use function is_object;
use function is_string;

class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerState::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \WebProject\DockerApi\Library\Generated\Model\ContainerState::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \WebProject\DockerApi\Library\Generated\Model\ContainerState();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('Status', $data) && null !== $data['Status']) {
            $value = $data['Status'];
            if (is_string($data['Status'])) {
                $value = $data['Status'];
            } elseif (null === $data['Status']) {
                $value = $data['Status'];
            }
            $object->status = $value;
            unset($data['Status']);
        } elseif (array_key_exists('Status', $data)) {
            $object->status = null;
            unset($data['Status']);
        }
        if (array_key_exists('Running', $data) && null !== $data['Running']) {
            $value_1 = $data['Running'];
            if (is_bool($data['Running'])) {
                $value_1 = $data['Running'];
            } elseif (null === $data['Running']) {
                $value_1 = $data['Running'];
            }
            $object->running = $value_1;
            unset($data['Running']);
        } elseif (array_key_exists('Running', $data)) {
            $object->running = null;
            unset($data['Running']);
        }
        if (array_key_exists('Paused', $data) && null !== $data['Paused']) {
            $value_2 = $data['Paused'];
            if (is_bool($data['Paused'])) {
                $value_2 = $data['Paused'];
            } elseif (null === $data['Paused']) {
                $value_2 = $data['Paused'];
            }
            $object->paused = $value_2;
            unset($data['Paused']);
        } elseif (array_key_exists('Paused', $data)) {
            $object->paused = null;
            unset($data['Paused']);
        }
        if (array_key_exists('Restarting', $data) && null !== $data['Restarting']) {
            $value_3 = $data['Restarting'];
            if (is_bool($data['Restarting'])) {
                $value_3 = $data['Restarting'];
            } elseif (null === $data['Restarting']) {
                $value_3 = $data['Restarting'];
            }
            $object->restarting = $value_3;
            unset($data['Restarting']);
        } elseif (array_key_exists('Restarting', $data)) {
            $object->restarting = null;
            unset($data['Restarting']);
        }
        if (array_key_exists('OOMKilled', $data) && null !== $data['OOMKilled']) {
            $value_4 = $data['OOMKilled'];
            if (is_bool($data['OOMKilled'])) {
                $value_4 = $data['OOMKilled'];
            } elseif (null === $data['OOMKilled']) {
                $value_4 = $data['OOMKilled'];
            }
            $object->oOMKilled = $value_4;
            unset($data['OOMKilled']);
        } elseif (array_key_exists('OOMKilled', $data)) {
            $object->oOMKilled = null;
            unset($data['OOMKilled']);
        }
        if (array_key_exists('Dead', $data) && null !== $data['Dead']) {
            $value_5 = $data['Dead'];
            if (is_bool($data['Dead'])) {
                $value_5 = $data['Dead'];
            } elseif (null === $data['Dead']) {
                $value_5 = $data['Dead'];
            }
            $object->dead = $value_5;
            unset($data['Dead']);
        } elseif (array_key_exists('Dead', $data)) {
            $object->dead = null;
            unset($data['Dead']);
        }
        if (array_key_exists('Pid', $data) && null !== $data['Pid']) {
            $value_6 = $data['Pid'];
            if (is_int($data['Pid'])) {
                $value_6 = $data['Pid'];
            } elseif (null === $data['Pid']) {
                $value_6 = $data['Pid'];
            }
            $object->pid = $value_6;
            unset($data['Pid']);
        } elseif (array_key_exists('Pid', $data)) {
            $object->pid = null;
            unset($data['Pid']);
        }
        if (array_key_exists('ExitCode', $data) && null !== $data['ExitCode']) {
            $value_7 = $data['ExitCode'];
            if (is_int($data['ExitCode'])) {
                $value_7 = $data['ExitCode'];
            } elseif (null === $data['ExitCode']) {
                $value_7 = $data['ExitCode'];
            }
            $object->exitCode = $value_7;
            unset($data['ExitCode']);
        } elseif (array_key_exists('ExitCode', $data)) {
            $object->exitCode = null;
            unset($data['ExitCode']);
        }
        if (array_key_exists('Error', $data) && null !== $data['Error']) {
            $value_8 = $data['Error'];
            if (is_string($data['Error'])) {
                $value_8 = $data['Error'];
            } elseif (null === $data['Error']) {
                $value_8 = $data['Error'];
            }
            $object->error = $value_8;
            unset($data['Error']);
        } elseif (array_key_exists('Error', $data)) {
            $object->error = null;
            unset($data['Error']);
        }
        if (array_key_exists('StartedAt', $data) && null !== $data['StartedAt']) {
            $value_9 = $data['StartedAt'];
            if (is_string($data['StartedAt'])) {
                $value_9 = $data['StartedAt'];
            } elseif (null === $data['StartedAt']) {
                $value_9 = $data['StartedAt'];
            }
            $object->startedAt = $value_9;
            unset($data['StartedAt']);
        } elseif (array_key_exists('StartedAt', $data)) {
            $object->startedAt = null;
            unset($data['StartedAt']);
        }
        if (array_key_exists('FinishedAt', $data) && null !== $data['FinishedAt']) {
            $value_10 = $data['FinishedAt'];
            if (is_string($data['FinishedAt'])) {
                $value_10 = $data['FinishedAt'];
            } elseif (null === $data['FinishedAt']) {
                $value_10 = $data['FinishedAt'];
            }
            $object->finishedAt = $value_10;
            unset($data['FinishedAt']);
        } elseif (array_key_exists('FinishedAt', $data)) {
            $object->finishedAt = null;
            unset($data['FinishedAt']);
        }
        if (array_key_exists('Health', $data) && null !== $data['Health']) {
            $object->health = $this->denormalizer->denormalize($data['Health'], \WebProject\DockerApi\Library\Generated\Model\Health::class, 'json', $context);
            unset($data['Health']);
        } elseif (array_key_exists('Health', $data)) {
            $object->health = null;
            unset($data['Health']);
        }
        foreach ($data as $key => $value_11) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_11;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $dataArray = [];
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $value = $data->status;
            if (is_string($data->status)) {
                $value = $data->status;
            } elseif (null === $data->status) {
                $value = $data->status;
            }
            $dataArray['Status'] = $value;
        }
        if (array_key_exists('running', get_object_vars($data)) && null !== ($data->running ?? null)) {
            $value_1 = $data->running;
            if (is_bool($data->running)) {
                $value_1 = $data->running;
            } elseif (null === $data->running) {
                $value_1 = $data->running;
            }
            $dataArray['Running'] = $value_1;
        }
        if (array_key_exists('paused', get_object_vars($data)) && null !== ($data->paused ?? null)) {
            $value_2 = $data->paused;
            if (is_bool($data->paused)) {
                $value_2 = $data->paused;
            } elseif (null === $data->paused) {
                $value_2 = $data->paused;
            }
            $dataArray['Paused'] = $value_2;
        }
        if (array_key_exists('restarting', get_object_vars($data)) && null !== ($data->restarting ?? null)) {
            $value_3 = $data->restarting;
            if (is_bool($data->restarting)) {
                $value_3 = $data->restarting;
            } elseif (null === $data->restarting) {
                $value_3 = $data->restarting;
            }
            $dataArray['Restarting'] = $value_3;
        }
        if (array_key_exists('oOMKilled', get_object_vars($data)) && null !== ($data->oOMKilled ?? null)) {
            $value_4 = $data->oOMKilled;
            if (is_bool($data->oOMKilled)) {
                $value_4 = $data->oOMKilled;
            } elseif (null === $data->oOMKilled) {
                $value_4 = $data->oOMKilled;
            }
            $dataArray['OOMKilled'] = $value_4;
        }
        if (array_key_exists('dead', get_object_vars($data)) && null !== ($data->dead ?? null)) {
            $value_5 = $data->dead;
            if (is_bool($data->dead)) {
                $value_5 = $data->dead;
            } elseif (null === $data->dead) {
                $value_5 = $data->dead;
            }
            $dataArray['Dead'] = $value_5;
        }
        if (array_key_exists('pid', get_object_vars($data)) && null !== ($data->pid ?? null)) {
            $value_6 = $data->pid;
            if (is_int($data->pid)) {
                $value_6 = $data->pid;
            } elseif (null === $data->pid) {
                $value_6 = $data->pid;
            }
            $dataArray['Pid'] = $value_6;
        }
        if (array_key_exists('exitCode', get_object_vars($data)) && null !== ($data->exitCode ?? null)) {
            $value_7 = $data->exitCode;
            if (is_int($data->exitCode)) {
                $value_7 = $data->exitCode;
            } elseif (null === $data->exitCode) {
                $value_7 = $data->exitCode;
            }
            $dataArray['ExitCode'] = $value_7;
        }
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $value_8 = $data->error;
            if (is_string($data->error)) {
                $value_8 = $data->error;
            } elseif (null === $data->error) {
                $value_8 = $data->error;
            }
            $dataArray['Error'] = $value_8;
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $value_9 = $data->startedAt;
            if (is_string($data->startedAt)) {
                $value_9 = $data->startedAt;
            } elseif (null === $data->startedAt) {
                $value_9 = $data->startedAt;
            }
            $dataArray['StartedAt'] = $value_9;
        }
        if (array_key_exists('finishedAt', get_object_vars($data)) && null !== ($data->finishedAt ?? null)) {
            $value_10 = $data->finishedAt;
            if (is_string($data->finishedAt)) {
                $value_10 = $data->finishedAt;
            } elseif (null === $data->finishedAt) {
                $value_10 = $data->finishedAt;
            }
            $dataArray['FinishedAt'] = $value_10;
        }
        if (array_key_exists('health', get_object_vars($data)) && null !== ($data->health ?? null)) {
            $normalized          = $this->normalizer->normalize($data->health, 'json', $context);
            $dataArray['Health'] = is_iterable($normalized) ? new \WebProject\DockerApi\Library\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_11) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_11;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\WebProject\DockerApi\Library\Generated\Model\ContainerState::class => true];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
