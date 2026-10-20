<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Service implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     *
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     *
     * @var ObjectVersion
     */
    public ObjectVersion $version;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $updatedAt;
    /**
     * User modifiable configuration for a service.
     *
     * @var ServiceSpec
     */
    public ServiceSpec $spec;
    /**
     * @var ServiceEndpoint|null
     */
    public ?ServiceEndpoint $endpoint;
    /**
     * The status of a service update.
     *
     * @var ServiceUpdateStatus|null
     */
    public ?ServiceUpdateStatus $updateStatus;
    /**
     * The status of the service's tasks. Provided only when requested as
     * part of a ServiceList operation.
     *
     * @var ServiceServiceStatus|null
     */
    public ?ServiceServiceStatus $serviceStatus;
    /**
     * The status of the service when it is in one of ReplicatedJob or
     * GlobalJob modes. Absent on Replicated and Global mode services. The
     * JobIteration is an ObjectVersion, but unlike the Service's version,
     * does not need to be sent with an update request.
     *
     * @var ServiceJobStatus|null
     */
    public ?ServiceJobStatus $jobStatus;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'version' => 'Version', 'createdAt' => 'CreatedAt', 'updatedAt' => 'UpdatedAt', 'spec' => 'Spec', 'endpoint' => 'Endpoint', 'updateStatus' => 'UpdateStatus', 'serviceStatus' => 'ServiceStatus', 'jobStatus' => 'JobStatus'];
    }
}
