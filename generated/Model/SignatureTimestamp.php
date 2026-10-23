<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SignatureTimestamp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * SignatureTimestampType is the type of timestamp used in the signature.
     *
     * @var SignatureTimestampType
     */
    public SignatureTimestampType $type;
    /**
     * @var string|null
     */
    public ?string $uRI;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $timestamp;

    public function definedProperties(): array
    {
        return ['type' => 'Type', 'uRI' => 'URI', 'timestamp' => 'Timestamp'];
    }
}
