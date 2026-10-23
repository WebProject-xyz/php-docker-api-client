<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
use InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WebProject\DockerApi\Library\Generated\Runtime\Normalizer\CheckArray;
use WebProject\DockerApi\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function count;
use function get_class;
use function is_object;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = [
        \WebProject\DockerApi\Library\Generated\Model\ImageHistoryResponseItem::class => ImageHistoryResponseItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PortSummary::class => PortSummaryNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\MountPoint::class => MountPointNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class => DeviceMappingNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class => DeviceRequestNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class => ThrottleDeviceNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Mount::class => MountNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class => MountBindOptionsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class => MountVolumeOptionsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptionsDriverConfig::class => MountVolumeOptionsDriverConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class => MountImageOptionsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class => MountTmpfsOptionsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class => RestartPolicyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Resources::class => ResourcesNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class => ResourcesBlkioWeightDeviceItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ResourcesUlimitsItem::class => ResourcesUlimitsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Limit::class => LimitNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class => ResourceObjectNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class => GenericResourcesItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class => GenericResourcesItemNamedResourceSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class => GenericResourcesItemDiscreteResourceSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class => HealthConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Health::class => HealthNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class => HealthcheckResultNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\HostConfig::class => HostConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\HostConfigLogConfig::class => HostConfigLogConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class => ContainerConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class => ImageConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkingConfig::class => NetworkingConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class => NetworkSettingsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Address::class => AddressNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PortBinding::class => PortBindingNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\DriverData::class => DriverDataNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Storage::class => StorageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\RootFSStorage::class => RootFSStorageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\RootFSStorageSnapshot::class => RootFSStorageSnapshotNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\FilesystemChange::class => FilesystemChangeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class => ImageInspectNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class => ImageInspectRootFSNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class => ImageInspectMetadataNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Identity::class => IdentityNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\BuildIdentity::class => BuildIdentityNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PullIdentity::class => PullIdentityNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SignatureIdentity::class => SignatureIdentityNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SignatureTimestamp::class => SignatureTimestampNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SignerIdentity::class => SignerIdentityNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class => ImageSummaryNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImagesDiskUsage::class => ImagesDiskUsageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\AuthConfig::class => AuthConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\AuthResponse::class => AuthResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class => ProcessConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Volume::class => VolumeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class => VolumeUsageDataNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\VolumesDiskUsage::class => VolumesDiskUsageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\VolumeCreateRequest::class => VolumeCreateRequestNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class => VolumeListResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Network::class => NetworkNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkSummary::class => NetworkSummaryNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkInspect::class => NetworkInspectNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkStatus::class => NetworkStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceInfo::class => ServiceInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkTaskInfo::class => NetworkTaskInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class => ConfigReferenceNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\IPAM::class => IPAMNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class => IPAMConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\IPAMStatus::class => IPAMStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SubnetStatus::class => SubnetStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EndpointResource::class => EndpointResourceNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class => PeerInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkCreateResponse::class => NetworkCreateResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class => BuildInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\BuildCache::class => BuildCacheNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\BuildCacheDiskUsage::class => BuildCacheDiskUsageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageID::class => ImageIDNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\CreateImageInfo::class => CreateImageInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class => PushImageInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\DeviceInfo::class => DeviceInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NRIInfo::class => NRIInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class => ErrorDetailNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class => ProgressDetailNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ErrorResponse::class => ErrorResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\IDResponse::class => IDResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkConnectRequest::class => NetworkConnectRequestNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkDisconnectRequest::class => NetworkDisconnectRequestNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class => EndpointSettingsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class => EndpointIPAMConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginMount::class => PluginMountNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginDevice::class => PluginDeviceNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class => PluginEnvNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class => PluginPrivilegeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Plugin::class => PluginNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class => PluginSettingsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class => PluginConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class => PluginConfigInterfaceNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class => PluginConfigUserNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginConfigNetwork::class => PluginConfigNetworkNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginConfigLinux::class => PluginConfigLinuxNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginConfigArgs::class => PluginConfigArgsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class => PluginConfigRootfsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class => ObjectVersionNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NodeSpec::class => NodeSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Node::class => NodeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NodeDescription::class => NodeDescriptionNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Platform::class => PlatformNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EngineDescription::class => EngineDescriptionNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EngineDescriptionPluginsItem::class => EngineDescriptionPluginsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class => TLSInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NodeStatus::class => NodeStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ManagerStatus::class => ManagerStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class => SwarmSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class => SwarmSpecOrchestrationNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class => SwarmSpecRaftNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class => SwarmSpecDispatcherNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class => SwarmSpecCAConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class => SwarmSpecCAConfigExternalCAsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class => SwarmSpecEncryptionConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class => SwarmSpecTaskDefaultsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class => SwarmSpecTaskDefaultsLogDriverNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class => ClusterInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\JoinTokens::class => JoinTokensNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Swarm::class => SwarmNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class => TaskSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class => TaskSpecPluginSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class => TaskSpecContainerSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class => TaskSpecContainerSpecPrivilegesNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => TaskSpecContainerSpecPrivilegesSeccompNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class => TaskSpecContainerSpecDNSConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class => TaskSpecContainerSpecSecretsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class => TaskSpecContainerSpecSecretsItemFileNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class => TaskSpecContainerSpecConfigsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class => TaskSpecContainerSpecConfigsItemFileNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class => TaskSpecContainerSpecUlimitsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class => TaskSpecNetworkAttachmentSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class => TaskSpecResourcesNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class => TaskSpecRestartPolicyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class => TaskSpecPlacementNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class => TaskSpecPlacementPreferencesItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class => TaskSpecPlacementPreferencesItemSpreadNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskSpecLogDriver::class => TaskSpecLogDriverNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class => ContainerStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PortStatus::class => PortStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class => TaskStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Task::class => TaskNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class => ServiceSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class => ServiceSpecModeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicated::class => ServiceSpecModeReplicatedNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => ServiceSpecModeReplicatedJobNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class => ServiceSpecUpdateConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class => ServiceSpecRollbackConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class => EndpointPortConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class => EndpointSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Service::class => ServiceNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class => ServiceEndpointNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class => ServiceEndpointVirtualIPsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class => ServiceUpdateStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class => ServiceServiceStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceJobStatus::class => ServiceJobStatusNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem::class => ImageDeleteResponseItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceCreateResponse::class => ServiceCreateResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateResponse::class => ServiceUpdateResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class => ContainerInspectResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class => ContainerSummaryNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class => ContainerSummaryHostConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryNetworkSettings::class => ContainerSummaryNetworkSettingsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHealth::class => ContainerSummaryHealthNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainersDiskUsage::class => ContainersDiskUsageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Driver::class => DriverNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SecretSpec::class => SecretSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Secret::class => SecretNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ConfigSpec::class => ConfigSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Config::class => ConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerState::class => ContainerStateNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerCreateResponse::class => ContainerCreateResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerUpdateResponse::class => ContainerUpdateResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class => ContainerStatsResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class => ContainerBlkioStatsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class => ContainerBlkioStatEntryNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class => ContainerCPUStatsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class => ContainerCPUUsageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerPidsStats::class => ContainerPidsStatsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class => ContainerThrottlingDataNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class => ContainerMemoryStatsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class => ContainerNetworkStatsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class => ContainerStorageStatsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse::class => ContainerTopResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerWaitResponse::class => ContainerWaitResponseNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerWaitExitError::class => ContainerWaitExitErrorNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class => SystemVersionNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class => SystemVersionPlatformNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class => SystemVersionComponentsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class => SystemInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => SystemInfoDefaultAddressPoolsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class => ContainerdInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class => ContainerdInfoNamespacesNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\FirewallInfo::class => FirewallInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class => PluginsInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class => RegistryServiceConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class => IndexInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Runtime::class => RuntimeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Commit::class => CommitNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class => SwarmInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\PeerNode::class => PeerNodeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class => NetworkAttachmentConfigNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EventActor::class => EventActorNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\EventMessage::class => EventMessageNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class => OCIDescriptorNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class => OCIPlatformNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\DistributionInspect::class => DistributionInspectNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class => ClusterVolumeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo::class => ClusterVolumeInfoNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem::class => ClusterVolumePublishStatusItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpec::class => ClusterVolumeSpecNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode::class => ClusterVolumeSpecAccessModeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\Topology::class => TopologyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\AttestationStatement::class => AttestationStatementNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class => ImageManifestSummaryNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class => ImageManifestSummarySizeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class => ImageManifestSummaryImageDataNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class => ImageManifestSummaryImageDataSizeNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class => ImageManifestSummaryAttestationDataNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class => ContainersCreatePostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class => ContainersIdUpdatePostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainersPrunePostResponse200::class => ContainersPrunePostResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\BuildPrunePostResponse200::class => BuildPrunePostResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class => ImagesSearchGetResponse200ItemNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ImagesPrunePostResponse200::class => ImagesPrunePostResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SystemDfGetJsonResponse200::class => SystemDfGetJsonResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class => SystemDfGetTextplainResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class => ContainersIdExecPostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ExecIdStartPostBody::class => ExecIdStartPostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class => ExecIdJsonGetResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\VolumesNamePutBody::class => VolumesNamePutBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\VolumesPrunePostResponse200::class => VolumesPrunePostResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class => NetworksCreatePostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\NetworksPrunePostResponse200::class => NetworksPrunePostResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class => SwarmInitPostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmJoinPostBody::class => SwarmJoinPostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockkeyGetJsonResponse200::class => SwarmUnlockkeyGetJsonResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockkeyGetTextplainResponse200::class => SwarmUnlockkeyGetTextplainResponse200Normalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockPostBody::class => SwarmUnlockPostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServicesCreatePostBody::class => ServicesCreatePostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody::class => ServicesIdUpdatePostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\SecretsCreatePostBody::class => SecretsCreatePostBodyNormalizer::class,

        \WebProject\DockerApi\Library\Generated\Model\ConfigsCreatePostBody::class => ConfigsCreatePostBodyNormalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer      = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($data, $format, $context);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer      = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $type, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = match ($normalizerClass) {
            ImageHistoryResponseItemNormalizer::class                                             => new ImageHistoryResponseItemNormalizer(),
            PortSummaryNormalizer::class                                                          => new PortSummaryNormalizer(),
            MountPointNormalizer::class                                                           => new MountPointNormalizer(),
            DeviceMappingNormalizer::class                                                        => new DeviceMappingNormalizer(),
            DeviceRequestNormalizer::class                                                        => new DeviceRequestNormalizer(),
            ThrottleDeviceNormalizer::class                                                       => new ThrottleDeviceNormalizer(),
            MountNormalizer::class                                                                => new MountNormalizer(),
            MountBindOptionsNormalizer::class                                                     => new MountBindOptionsNormalizer(),
            MountVolumeOptionsNormalizer::class                                                   => new MountVolumeOptionsNormalizer(),
            MountVolumeOptionsDriverConfigNormalizer::class                                       => new MountVolumeOptionsDriverConfigNormalizer(),
            MountImageOptionsNormalizer::class                                                    => new MountImageOptionsNormalizer(),
            MountTmpfsOptionsNormalizer::class                                                    => new MountTmpfsOptionsNormalizer(),
            RestartPolicyNormalizer::class                                                        => new RestartPolicyNormalizer(),
            ResourcesNormalizer::class                                                            => new ResourcesNormalizer(),
            ResourcesBlkioWeightDeviceItemNormalizer::class                                       => new ResourcesBlkioWeightDeviceItemNormalizer(),
            ResourcesUlimitsItemNormalizer::class                                                 => new ResourcesUlimitsItemNormalizer(),
            LimitNormalizer::class                                                                => new LimitNormalizer(),
            ResourceObjectNormalizer::class                                                       => new ResourceObjectNormalizer(),
            GenericResourcesItemNormalizer::class                                                 => new GenericResourcesItemNormalizer(),
            GenericResourcesItemNamedResourceSpecNormalizer::class                                => new GenericResourcesItemNamedResourceSpecNormalizer(),
            GenericResourcesItemDiscreteResourceSpecNormalizer::class                             => new GenericResourcesItemDiscreteResourceSpecNormalizer(),
            HealthConfigNormalizer::class                                                         => new HealthConfigNormalizer(),
            HealthNormalizer::class                                                               => new HealthNormalizer(),
            HealthcheckResultNormalizer::class                                                    => new HealthcheckResultNormalizer(),
            HostConfigNormalizer::class                                                           => new HostConfigNormalizer(),
            HostConfigLogConfigNormalizer::class                                                  => new HostConfigLogConfigNormalizer(),
            ContainerConfigNormalizer::class                                                      => new ContainerConfigNormalizer(),
            ImageConfigNormalizer::class                                                          => new ImageConfigNormalizer(),
            NetworkingConfigNormalizer::class                                                     => new NetworkingConfigNormalizer(),
            NetworkSettingsNormalizer::class                                                      => new NetworkSettingsNormalizer(),
            AddressNormalizer::class                                                              => new AddressNormalizer(),
            PortBindingNormalizer::class                                                          => new PortBindingNormalizer(),
            DriverDataNormalizer::class                                                           => new DriverDataNormalizer(),
            StorageNormalizer::class                                                              => new StorageNormalizer(),
            RootFSStorageNormalizer::class                                                        => new RootFSStorageNormalizer(),
            RootFSStorageSnapshotNormalizer::class                                                => new RootFSStorageSnapshotNormalizer(),
            FilesystemChangeNormalizer::class                                                     => new FilesystemChangeNormalizer(),
            ImageInspectNormalizer::class                                                         => new ImageInspectNormalizer(),
            ImageInspectRootFSNormalizer::class                                                   => new ImageInspectRootFSNormalizer(),
            ImageInspectMetadataNormalizer::class                                                 => new ImageInspectMetadataNormalizer(),
            IdentityNormalizer::class                                                             => new IdentityNormalizer(),
            BuildIdentityNormalizer::class                                                        => new BuildIdentityNormalizer(),
            PullIdentityNormalizer::class                                                         => new PullIdentityNormalizer(),
            SignatureIdentityNormalizer::class                                                    => new SignatureIdentityNormalizer(),
            SignatureTimestampNormalizer::class                                                   => new SignatureTimestampNormalizer(),
            SignerIdentityNormalizer::class                                                       => new SignerIdentityNormalizer(),
            ImageSummaryNormalizer::class                                                         => new ImageSummaryNormalizer(),
            ImagesDiskUsageNormalizer::class                                                      => new ImagesDiskUsageNormalizer(),
            AuthConfigNormalizer::class                                                           => new AuthConfigNormalizer(),
            AuthResponseNormalizer::class                                                         => new AuthResponseNormalizer(),
            ProcessConfigNormalizer::class                                                        => new ProcessConfigNormalizer(),
            VolumeNormalizer::class                                                               => new VolumeNormalizer(),
            VolumeUsageDataNormalizer::class                                                      => new VolumeUsageDataNormalizer(),
            VolumesDiskUsageNormalizer::class                                                     => new VolumesDiskUsageNormalizer(),
            VolumeCreateRequestNormalizer::class                                                  => new VolumeCreateRequestNormalizer(),
            VolumeListResponseNormalizer::class                                                   => new VolumeListResponseNormalizer(),
            NetworkNormalizer::class                                                              => new NetworkNormalizer(),
            NetworkSummaryNormalizer::class                                                       => new NetworkSummaryNormalizer(),
            NetworkInspectNormalizer::class                                                       => new NetworkInspectNormalizer(),
            NetworkStatusNormalizer::class                                                        => new NetworkStatusNormalizer(),
            ServiceInfoNormalizer::class                                                          => new ServiceInfoNormalizer(),
            NetworkTaskInfoNormalizer::class                                                      => new NetworkTaskInfoNormalizer(),
            ConfigReferenceNormalizer::class                                                      => new ConfigReferenceNormalizer(),
            IPAMNormalizer::class                                                                 => new IPAMNormalizer(),
            IPAMConfigNormalizer::class                                                           => new IPAMConfigNormalizer(),
            IPAMStatusNormalizer::class                                                           => new IPAMStatusNormalizer(),
            SubnetStatusNormalizer::class                                                         => new SubnetStatusNormalizer(),
            EndpointResourceNormalizer::class                                                     => new EndpointResourceNormalizer(),
            PeerInfoNormalizer::class                                                             => new PeerInfoNormalizer(),
            NetworkCreateResponseNormalizer::class                                                => new NetworkCreateResponseNormalizer(),
            BuildInfoNormalizer::class                                                            => new BuildInfoNormalizer(),
            BuildCacheNormalizer::class                                                           => new BuildCacheNormalizer(),
            BuildCacheDiskUsageNormalizer::class                                                  => new BuildCacheDiskUsageNormalizer(),
            ImageIDNormalizer::class                                                              => new ImageIDNormalizer(),
            CreateImageInfoNormalizer::class                                                      => new CreateImageInfoNormalizer(),
            PushImageInfoNormalizer::class                                                        => new PushImageInfoNormalizer(),
            DeviceInfoNormalizer::class                                                           => new DeviceInfoNormalizer(),
            NRIInfoNormalizer::class                                                              => new NRIInfoNormalizer(),
            ErrorDetailNormalizer::class                                                          => new ErrorDetailNormalizer(),
            ProgressDetailNormalizer::class                                                       => new ProgressDetailNormalizer(),
            ErrorResponseNormalizer::class                                                        => new ErrorResponseNormalizer(),
            IDResponseNormalizer::class                                                           => new IDResponseNormalizer(),
            NetworkConnectRequestNormalizer::class                                                => new NetworkConnectRequestNormalizer(),
            NetworkDisconnectRequestNormalizer::class                                             => new NetworkDisconnectRequestNormalizer(),
            EndpointSettingsNormalizer::class                                                     => new EndpointSettingsNormalizer(),
            EndpointIPAMConfigNormalizer::class                                                   => new EndpointIPAMConfigNormalizer(),
            PluginMountNormalizer::class                                                          => new PluginMountNormalizer(),
            PluginDeviceNormalizer::class                                                         => new PluginDeviceNormalizer(),
            PluginEnvNormalizer::class                                                            => new PluginEnvNormalizer(),
            PluginPrivilegeNormalizer::class                                                      => new PluginPrivilegeNormalizer(),
            PluginNormalizer::class                                                               => new PluginNormalizer(),
            PluginSettingsNormalizer::class                                                       => new PluginSettingsNormalizer(),
            PluginConfigNormalizer::class                                                         => new PluginConfigNormalizer(),
            PluginConfigInterfaceNormalizer::class                                                => new PluginConfigInterfaceNormalizer(),
            PluginConfigUserNormalizer::class                                                     => new PluginConfigUserNormalizer(),
            PluginConfigNetworkNormalizer::class                                                  => new PluginConfigNetworkNormalizer(),
            PluginConfigLinuxNormalizer::class                                                    => new PluginConfigLinuxNormalizer(),
            PluginConfigArgsNormalizer::class                                                     => new PluginConfigArgsNormalizer(),
            PluginConfigRootfsNormalizer::class                                                   => new PluginConfigRootfsNormalizer(),
            ObjectVersionNormalizer::class                                                        => new ObjectVersionNormalizer(),
            NodeSpecNormalizer::class                                                             => new NodeSpecNormalizer(),
            NodeNormalizer::class                                                                 => new NodeNormalizer(),
            NodeDescriptionNormalizer::class                                                      => new NodeDescriptionNormalizer(),
            PlatformNormalizer::class                                                             => new PlatformNormalizer(),
            EngineDescriptionNormalizer::class                                                    => new EngineDescriptionNormalizer(),
            EngineDescriptionPluginsItemNormalizer::class                                         => new EngineDescriptionPluginsItemNormalizer(),
            TLSInfoNormalizer::class                                                              => new TLSInfoNormalizer(),
            NodeStatusNormalizer::class                                                           => new NodeStatusNormalizer(),
            ManagerStatusNormalizer::class                                                        => new ManagerStatusNormalizer(),
            SwarmSpecNormalizer::class                                                            => new SwarmSpecNormalizer(),
            SwarmSpecOrchestrationNormalizer::class                                               => new SwarmSpecOrchestrationNormalizer(),
            SwarmSpecRaftNormalizer::class                                                        => new SwarmSpecRaftNormalizer(),
            SwarmSpecDispatcherNormalizer::class                                                  => new SwarmSpecDispatcherNormalizer(),
            SwarmSpecCAConfigNormalizer::class                                                    => new SwarmSpecCAConfigNormalizer(),
            SwarmSpecCAConfigExternalCAsItemNormalizer::class                                     => new SwarmSpecCAConfigExternalCAsItemNormalizer(),
            SwarmSpecEncryptionConfigNormalizer::class                                            => new SwarmSpecEncryptionConfigNormalizer(),
            SwarmSpecTaskDefaultsNormalizer::class                                                => new SwarmSpecTaskDefaultsNormalizer(),
            SwarmSpecTaskDefaultsLogDriverNormalizer::class                                       => new SwarmSpecTaskDefaultsLogDriverNormalizer(),
            ClusterInfoNormalizer::class                                                          => new ClusterInfoNormalizer(),
            JoinTokensNormalizer::class                                                           => new JoinTokensNormalizer(),
            SwarmNormalizer::class                                                                => new SwarmNormalizer(),
            TaskSpecNormalizer::class                                                             => new TaskSpecNormalizer(),
            TaskSpecPluginSpecNormalizer::class                                                   => new TaskSpecPluginSpecNormalizer(),
            TaskSpecContainerSpecNormalizer::class                                                => new TaskSpecContainerSpecNormalizer(),
            TaskSpecContainerSpecPrivilegesNormalizer::class                                      => new TaskSpecContainerSpecPrivilegesNormalizer(),
            TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class                        => new TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer(),
            TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class                        => new TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer(),
            TaskSpecContainerSpecPrivilegesSeccompNormalizer::class                               => new TaskSpecContainerSpecPrivilegesSeccompNormalizer(),
            TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class                              => new TaskSpecContainerSpecPrivilegesAppArmorNormalizer(),
            TaskSpecContainerSpecDNSConfigNormalizer::class                                       => new TaskSpecContainerSpecDNSConfigNormalizer(),
            TaskSpecContainerSpecSecretsItemNormalizer::class                                     => new TaskSpecContainerSpecSecretsItemNormalizer(),
            TaskSpecContainerSpecSecretsItemFileNormalizer::class                                 => new TaskSpecContainerSpecSecretsItemFileNormalizer(),
            TaskSpecContainerSpecConfigsItemNormalizer::class                                     => new TaskSpecContainerSpecConfigsItemNormalizer(),
            TaskSpecContainerSpecConfigsItemFileNormalizer::class                                 => new TaskSpecContainerSpecConfigsItemFileNormalizer(),
            TaskSpecContainerSpecUlimitsItemNormalizer::class                                     => new TaskSpecContainerSpecUlimitsItemNormalizer(),
            TaskSpecNetworkAttachmentSpecNormalizer::class                                        => new TaskSpecNetworkAttachmentSpecNormalizer(),
            TaskSpecResourcesNormalizer::class                                                    => new TaskSpecResourcesNormalizer(),
            TaskSpecRestartPolicyNormalizer::class                                                => new TaskSpecRestartPolicyNormalizer(),
            TaskSpecPlacementNormalizer::class                                                    => new TaskSpecPlacementNormalizer(),
            TaskSpecPlacementPreferencesItemNormalizer::class                                     => new TaskSpecPlacementPreferencesItemNormalizer(),
            TaskSpecPlacementPreferencesItemSpreadNormalizer::class                               => new TaskSpecPlacementPreferencesItemSpreadNormalizer(),
            TaskSpecLogDriverNormalizer::class                                                    => new TaskSpecLogDriverNormalizer(),
            ContainerStatusNormalizer::class                                                      => new ContainerStatusNormalizer(),
            PortStatusNormalizer::class                                                           => new PortStatusNormalizer(),
            TaskStatusNormalizer::class                                                           => new TaskStatusNormalizer(),
            TaskNormalizer::class                                                                 => new TaskNormalizer(),
            ServiceSpecNormalizer::class                                                          => new ServiceSpecNormalizer(),
            ServiceSpecModeNormalizer::class                                                      => new ServiceSpecModeNormalizer(),
            ServiceSpecModeReplicatedNormalizer::class                                            => new ServiceSpecModeReplicatedNormalizer(),
            ServiceSpecModeReplicatedJobNormalizer::class                                         => new ServiceSpecModeReplicatedJobNormalizer(),
            ServiceSpecUpdateConfigNormalizer::class                                              => new ServiceSpecUpdateConfigNormalizer(),
            ServiceSpecRollbackConfigNormalizer::class                                            => new ServiceSpecRollbackConfigNormalizer(),
            EndpointPortConfigNormalizer::class                                                   => new EndpointPortConfigNormalizer(),
            EndpointSpecNormalizer::class                                                         => new EndpointSpecNormalizer(),
            ServiceNormalizer::class                                                              => new ServiceNormalizer(),
            ServiceEndpointNormalizer::class                                                      => new ServiceEndpointNormalizer(),
            ServiceEndpointVirtualIPsItemNormalizer::class                                        => new ServiceEndpointVirtualIPsItemNormalizer(),
            ServiceUpdateStatusNormalizer::class                                                  => new ServiceUpdateStatusNormalizer(),
            ServiceServiceStatusNormalizer::class                                                 => new ServiceServiceStatusNormalizer(),
            ServiceJobStatusNormalizer::class                                                     => new ServiceJobStatusNormalizer(),
            ImageDeleteResponseItemNormalizer::class                                              => new ImageDeleteResponseItemNormalizer(),
            ServiceCreateResponseNormalizer::class                                                => new ServiceCreateResponseNormalizer(),
            ServiceUpdateResponseNormalizer::class                                                => new ServiceUpdateResponseNormalizer(),
            ContainerInspectResponseNormalizer::class                                             => new ContainerInspectResponseNormalizer(),
            ContainerSummaryNormalizer::class                                                     => new ContainerSummaryNormalizer(),
            ContainerSummaryHostConfigNormalizer::class                                           => new ContainerSummaryHostConfigNormalizer(),
            ContainerSummaryNetworkSettingsNormalizer::class                                      => new ContainerSummaryNetworkSettingsNormalizer(),
            ContainerSummaryHealthNormalizer::class                                               => new ContainerSummaryHealthNormalizer(),
            ContainersDiskUsageNormalizer::class                                                  => new ContainersDiskUsageNormalizer(),
            DriverNormalizer::class                                                               => new DriverNormalizer(),
            SecretSpecNormalizer::class                                                           => new SecretSpecNormalizer(),
            SecretNormalizer::class                                                               => new SecretNormalizer(),
            ConfigSpecNormalizer::class                                                           => new ConfigSpecNormalizer(),
            ConfigNormalizer::class                                                               => new ConfigNormalizer(),
            ContainerStateNormalizer::class                                                       => new ContainerStateNormalizer(),
            ContainerCreateResponseNormalizer::class                                              => new ContainerCreateResponseNormalizer(),
            ContainerUpdateResponseNormalizer::class                                              => new ContainerUpdateResponseNormalizer(),
            ContainerStatsResponseNormalizer::class                                               => new ContainerStatsResponseNormalizer(),
            ContainerBlkioStatsNormalizer::class                                                  => new ContainerBlkioStatsNormalizer(),
            ContainerBlkioStatEntryNormalizer::class                                              => new ContainerBlkioStatEntryNormalizer(),
            ContainerCPUStatsNormalizer::class                                                    => new ContainerCPUStatsNormalizer(),
            ContainerCPUUsageNormalizer::class                                                    => new ContainerCPUUsageNormalizer(),
            ContainerPidsStatsNormalizer::class                                                   => new ContainerPidsStatsNormalizer(),
            ContainerThrottlingDataNormalizer::class                                              => new ContainerThrottlingDataNormalizer(),
            ContainerMemoryStatsNormalizer::class                                                 => new ContainerMemoryStatsNormalizer(),
            ContainerNetworkStatsNormalizer::class                                                => new ContainerNetworkStatsNormalizer(),
            ContainerStorageStatsNormalizer::class                                                => new ContainerStorageStatsNormalizer(),
            ContainerTopResponseNormalizer::class                                                 => new ContainerTopResponseNormalizer(),
            ContainerWaitResponseNormalizer::class                                                => new ContainerWaitResponseNormalizer(),
            ContainerWaitExitErrorNormalizer::class                                               => new ContainerWaitExitErrorNormalizer(),
            SystemVersionNormalizer::class                                                        => new SystemVersionNormalizer(),
            SystemVersionPlatformNormalizer::class                                                => new SystemVersionPlatformNormalizer(),
            SystemVersionComponentsItemNormalizer::class                                          => new SystemVersionComponentsItemNormalizer(),
            SystemInfoNormalizer::class                                                           => new SystemInfoNormalizer(),
            SystemInfoDefaultAddressPoolsItemNormalizer::class                                    => new SystemInfoDefaultAddressPoolsItemNormalizer(),
            ContainerdInfoNormalizer::class                                                       => new ContainerdInfoNormalizer(),
            ContainerdInfoNamespacesNormalizer::class                                             => new ContainerdInfoNamespacesNormalizer(),
            FirewallInfoNormalizer::class                                                         => new FirewallInfoNormalizer(),
            PluginsInfoNormalizer::class                                                          => new PluginsInfoNormalizer(),
            RegistryServiceConfigNormalizer::class                                                => new RegistryServiceConfigNormalizer(),
            IndexInfoNormalizer::class                                                            => new IndexInfoNormalizer(),
            RuntimeNormalizer::class                                                              => new RuntimeNormalizer(),
            CommitNormalizer::class                                                               => new CommitNormalizer(),
            SwarmInfoNormalizer::class                                                            => new SwarmInfoNormalizer(),
            PeerNodeNormalizer::class                                                             => new PeerNodeNormalizer(),
            NetworkAttachmentConfigNormalizer::class                                              => new NetworkAttachmentConfigNormalizer(),
            EventActorNormalizer::class                                                           => new EventActorNormalizer(),
            EventMessageNormalizer::class                                                         => new EventMessageNormalizer(),
            OCIDescriptorNormalizer::class                                                        => new OCIDescriptorNormalizer(),
            OCIPlatformNormalizer::class                                                          => new OCIPlatformNormalizer(),
            DistributionInspectNormalizer::class                                                  => new DistributionInspectNormalizer(),
            ClusterVolumeNormalizer::class                                                        => new ClusterVolumeNormalizer(),
            ClusterVolumeInfoNormalizer::class                                                    => new ClusterVolumeInfoNormalizer(),
            ClusterVolumePublishStatusItemNormalizer::class                                       => new ClusterVolumePublishStatusItemNormalizer(),
            ClusterVolumeSpecNormalizer::class                                                    => new ClusterVolumeSpecNormalizer(),
            ClusterVolumeSpecAccessModeNormalizer::class                                          => new ClusterVolumeSpecAccessModeNormalizer(),
            ClusterVolumeSpecAccessModeSecretsItemNormalizer::class                               => new ClusterVolumeSpecAccessModeSecretsItemNormalizer(),
            ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class                 => new ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer(),
            ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class                             => new ClusterVolumeSpecAccessModeCapacityRangeNormalizer(),
            TopologyNormalizer::class                                                             => new TopologyNormalizer(),
            AttestationStatementNormalizer::class                                                 => new AttestationStatementNormalizer(),
            ImageManifestSummaryNormalizer::class                                                 => new ImageManifestSummaryNormalizer(),
            ImageManifestSummarySizeNormalizer::class                                             => new ImageManifestSummarySizeNormalizer(),
            ImageManifestSummaryImageDataNormalizer::class                                        => new ImageManifestSummaryImageDataNormalizer(),
            ImageManifestSummaryImageDataSizeNormalizer::class                                    => new ImageManifestSummaryImageDataSizeNormalizer(),
            ImageManifestSummaryAttestationDataNormalizer::class                                  => new ImageManifestSummaryAttestationDataNormalizer(),
            ContainersCreatePostBodyNormalizer::class                                             => new ContainersCreatePostBodyNormalizer(),
            ContainersIdUpdatePostBodyNormalizer::class                                           => new ContainersIdUpdatePostBodyNormalizer(),
            ContainersPrunePostResponse200Normalizer::class                                       => new ContainersPrunePostResponse200Normalizer(),
            BuildPrunePostResponse200Normalizer::class                                            => new BuildPrunePostResponse200Normalizer(),
            ImagesSearchGetResponse200ItemNormalizer::class                                       => new ImagesSearchGetResponse200ItemNormalizer(),
            ImagesPrunePostResponse200Normalizer::class                                           => new ImagesPrunePostResponse200Normalizer(),
            SystemDfGetJsonResponse200Normalizer::class                                           => new SystemDfGetJsonResponse200Normalizer(),
            SystemDfGetTextplainResponse200Normalizer::class                                      => new SystemDfGetTextplainResponse200Normalizer(),
            ContainersIdExecPostBodyNormalizer::class                                             => new ContainersIdExecPostBodyNormalizer(),
            ExecIdStartPostBodyNormalizer::class                                                  => new ExecIdStartPostBodyNormalizer(),
            ExecIdJsonGetResponse200Normalizer::class                                             => new ExecIdJsonGetResponse200Normalizer(),
            VolumesNamePutBodyNormalizer::class                                                   => new VolumesNamePutBodyNormalizer(),
            VolumesPrunePostResponse200Normalizer::class                                          => new VolumesPrunePostResponse200Normalizer(),
            NetworksCreatePostBodyNormalizer::class                                               => new NetworksCreatePostBodyNormalizer(),
            NetworksPrunePostResponse200Normalizer::class                                         => new NetworksPrunePostResponse200Normalizer(),
            SwarmInitPostBodyNormalizer::class                                                    => new SwarmInitPostBodyNormalizer(),
            SwarmJoinPostBodyNormalizer::class                                                    => new SwarmJoinPostBodyNormalizer(),
            SwarmUnlockkeyGetJsonResponse200Normalizer::class                                     => new SwarmUnlockkeyGetJsonResponse200Normalizer(),
            SwarmUnlockkeyGetTextplainResponse200Normalizer::class                                => new SwarmUnlockkeyGetTextplainResponse200Normalizer(),
            SwarmUnlockPostBodyNormalizer::class                                                  => new SwarmUnlockPostBodyNormalizer(),
            ServicesCreatePostBodyNormalizer::class                                               => new ServicesCreatePostBodyNormalizer(),
            ServicesIdUpdatePostBodyNormalizer::class                                             => new ServicesIdUpdatePostBodyNormalizer(),
            SecretsCreatePostBodyNormalizer::class                                                => new SecretsCreatePostBodyNormalizer(),
            ConfigsCreatePostBodyNormalizer::class                                                => new ConfigsCreatePostBodyNormalizer(),
            \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\ReferenceNormalizer::class => new \WebProject\DockerApi\Library\Generated\Runtime\Normalizer\ReferenceNormalizer(),
            default                                                                               => throw new InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
