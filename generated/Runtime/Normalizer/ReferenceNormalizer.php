<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Runtime\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $ref         = [];
        $ref['$ref'] = (string) $data->getReferenceUri();

        return $ref;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof Reference;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [Reference::class => false];
    }
}
