<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class HealthcheckResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Date and time at which this check started in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $start;
    /**
     * Date and time at which this check ended in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $end;
    /**
     * ExitCode meanings:
     *
     * - `0` healthy
     * - `1` unhealthy
     * - `2` reserved (considered unhealthy)
     * - other values: error running probe
     *
     * @var int|null
     */
    public ?int $exitCode;
    /**
     * Output from last check.
     *
     * @var string|null
     */
    public ?string $output;

    public function definedProperties(): array
    {
        return ['start' => 'Start', 'end' => 'End', 'exitCode' => 'ExitCode', 'output' => 'Output'];
    }
}
