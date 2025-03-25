<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Normalizer;

use ArrayObject;
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
use function is_object;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = [
            \WebProject\DockerApi\Library\Generated\Model\Port::class => PortNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\ContainerConfigExposedPortsItem::class => ContainerConfigExposedPortsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainerConfigVolumesItem::class => ContainerConfigVolumesItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class => ImageConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageConfigExposedPortsItem::class => ImageConfigExposedPortsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageConfigVolumesItem::class => ImageConfigVolumesItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkingConfig::class => NetworkingConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class => NetworkSettingsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\Address::class => AddressNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PortBinding::class => PortBindingNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\DriverData::class => DriverDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\FilesystemChange::class => FilesystemChangeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class => ImageInspectNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class => ImageInspectRootFSNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class => ImageInspectMetadataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class => ImageSummaryNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\AuthConfig::class => AuthConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class => ProcessConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\Volume::class => VolumeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeStatusItem::class => VolumeStatusItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class => VolumeUsageDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeCreateOptions::class => VolumeCreateOptionsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class => VolumeListResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\Network::class => NetworkNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class => ConfigReferenceNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\IPAM::class => IPAMNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class => IPAMConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkContainer::class => NetworkContainerNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class => PeerInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkCreateResponse::class => NetworkCreateResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class => BuildInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\BuildCache::class => BuildCacheNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageID::class => ImageIDNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\CreateImageInfo::class => CreateImageInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class => PushImageInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class => ErrorDetailNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class => ProgressDetailNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ErrorResponse::class => ErrorResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\IDResponse::class => IDResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class => EndpointSettingsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class => EndpointIPAMConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginMount::class => PluginMountNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginDevice::class => PluginDeviceNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class => PluginEnvNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginInterfaceType::class => PluginInterfaceTypeNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemRuntime::class => TaskSpecContainerSpecConfigsItemRuntimeNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobal::class => ServiceSpecModeGlobalNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => ServiceSpecModeReplicatedJobNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobalJob::class => ServiceSpecModeGlobalJobNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItemDetails::class => SystemVersionComponentsItemDetailsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class => SystemInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => SystemInfoDefaultAddressPoolsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class => ContainerdInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class => ContainerdInfoNamespacesNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeMountVolume::class => ClusterVolumeSpecAccessModeMountVolumeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class => ImageManifestSummaryNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class => ImageManifestSummarySizeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class => ImageManifestSummaryImageDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class => ImageManifestSummaryImageDataSizeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class => ImageManifestSummaryAttestationDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class => ContainersCreatePostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class => ContainersIdUpdatePostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersPrunePostResponse200::class => ContainersPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\BuildPrunePostResponse200::class => BuildPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class => ImagesNameHistoryGetResponse200ItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class => ImagesSearchGetResponse200ItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImagesPrunePostResponse200::class => ImagesPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\AuthPostResponse200::class => AuthPostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemDfGetJsonResponse200::class => SystemDfGetJsonResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class => SystemDfGetTextplainResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class => ContainersIdExecPostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ExecIdStartPostBody::class => ExecIdStartPostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class => ExecIdJsonGetResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumesNamePutBody::class => VolumesNamePutBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumesPrunePostResponse200::class => VolumesPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class => NetworksCreatePostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworksIdConnectPostBody::class => NetworksIdConnectPostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworksIdDisconnectPostBody::class => NetworksIdDisconnectPostBodyNormalizer::class,

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

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): null|array|ArrayObject|bool|float|int|string
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer      = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
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
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \WebProject\DockerApi\Library\Generated\Model\Port::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\MountPoint::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\Mount::class                                                => false,
                \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptionsDriverConfig::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\Resources::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ResourcesUlimitsItem::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\Limit::class                                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class                => false,
                \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class             => false,
                \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\Health::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\HostConfig::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\HostConfigLogConfig::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerConfigExposedPortsItem::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerConfigVolumesItem::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageConfigExposedPortsItem::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageConfigVolumesItem::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkingConfig::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Address::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\PortBinding::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\DriverData::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\FilesystemChange::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\AuthConfig::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\Volume::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeStatusItem::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeCreateOptions::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\Network::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\IPAM::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkContainer::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkCreateResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\BuildCache::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageID::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\CreateImageInfo::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ErrorResponse::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\IDResponse::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginMount::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginDevice::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginInterfaceType::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Plugin::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigNetwork::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigLinux::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigArgs::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\NodeSpec::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\Node::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\NodeDescription::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Platform::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\EngineDescription::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\EngineDescriptionPluginsItem::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\NodeStatus::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ManagerStatus::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\JoinTokens::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Swarm::class                                                => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class        => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class        => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class              => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class                 => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class                 => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemRuntime::class              => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class                        => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecLogDriver::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\PortStatus::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Task::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicated::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobal::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobalJob::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\Service::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceJobStatus::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceCreateResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryNetworkSettings::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Driver::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SecretSpec::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Secret::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ConfigSpec::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Config::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerState::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerCreateResponse::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerUpdateResponse::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerPidsStats::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerWaitResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerWaitExitError::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItemDetails::class                   => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\Runtime::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\Commit::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\PeerNode::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\EventActor::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\EventMessage::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\DistributionInspect::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpec::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeMountVolume::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class             => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersPrunePostResponse200::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\BuildPrunePostResponse200::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ImagesPrunePostResponse200::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\AuthPostResponse200::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemDfGetJsonResponse200::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ExecIdStartPostBody::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumesNamePutBody::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumesPrunePostResponse200::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksIdConnectPostBody::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksIdDisconnectPostBody::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksPrunePostResponse200::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmJoinPostBody::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockkeyGetJsonResponse200::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockkeyGetTextplainResponse200::class                => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockPostBody::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ServicesCreatePostBody::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\SecretsCreatePostBody::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ConfigsCreatePostBody::class                                => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class                                                        => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = [
            \WebProject\DockerApi\Library\Generated\Model\Port::class => PortNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\ContainerConfigExposedPortsItem::class => ContainerConfigExposedPortsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainerConfigVolumesItem::class => ContainerConfigVolumesItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class => ImageConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageConfigExposedPortsItem::class => ImageConfigExposedPortsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageConfigVolumesItem::class => ImageConfigVolumesItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkingConfig::class => NetworkingConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class => NetworkSettingsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\Address::class => AddressNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PortBinding::class => PortBindingNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\DriverData::class => DriverDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\FilesystemChange::class => FilesystemChangeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class => ImageInspectNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class => ImageInspectRootFSNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class => ImageInspectMetadataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class => ImageSummaryNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\AuthConfig::class => AuthConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class => ProcessConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\Volume::class => VolumeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeStatusItem::class => VolumeStatusItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class => VolumeUsageDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeCreateOptions::class => VolumeCreateOptionsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class => VolumeListResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\Network::class => NetworkNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class => ConfigReferenceNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\IPAM::class => IPAMNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class => IPAMConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkContainer::class => NetworkContainerNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class => PeerInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworkCreateResponse::class => NetworkCreateResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class => BuildInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\BuildCache::class => BuildCacheNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageID::class => ImageIDNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\CreateImageInfo::class => CreateImageInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class => PushImageInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class => ErrorDetailNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class => ProgressDetailNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ErrorResponse::class => ErrorResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\IDResponse::class => IDResponseNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class => EndpointSettingsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class => EndpointIPAMConfigNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginMount::class => PluginMountNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginDevice::class => PluginDeviceNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class => PluginEnvNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\PluginInterfaceType::class => PluginInterfaceTypeNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemRuntime::class => TaskSpecContainerSpecConfigsItemRuntimeNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobal::class => ServiceSpecModeGlobalNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class => ServiceSpecModeReplicatedJobNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobalJob::class => ServiceSpecModeGlobalJobNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItemDetails::class => SystemVersionComponentsItemDetailsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class => SystemInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class => SystemInfoDefaultAddressPoolsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class => ContainerdInfoNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class => ContainerdInfoNamespacesNormalizer::class,

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

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeMountVolume::class => ClusterVolumeSpecAccessModeMountVolumeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class => ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class => ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class => ImageManifestSummaryNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class => ImageManifestSummarySizeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class => ImageManifestSummaryImageDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class => ImageManifestSummaryImageDataSizeNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class => ImageManifestSummaryAttestationDataNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class => ContainersCreatePostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class => ContainersIdUpdatePostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersPrunePostResponse200::class => ContainersPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\BuildPrunePostResponse200::class => BuildPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class => ImagesNameHistoryGetResponse200ItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class => ImagesSearchGetResponse200ItemNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ImagesPrunePostResponse200::class => ImagesPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\AuthPostResponse200::class => AuthPostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemDfGetJsonResponse200::class => SystemDfGetJsonResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class => SystemDfGetTextplainResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class => ContainersIdExecPostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ExecIdStartPostBody::class => ExecIdStartPostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class => ExecIdJsonGetResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumesNamePutBody::class => VolumesNamePutBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\VolumesPrunePostResponse200::class => VolumesPrunePostResponse200Normalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class => NetworksCreatePostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworksIdConnectPostBody::class => NetworksIdConnectPostBodyNormalizer::class,

            \WebProject\DockerApi\Library\Generated\Model\NetworksIdDisconnectPostBody::class => NetworksIdDisconnectPostBodyNormalizer::class,

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

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }

        /**
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer      = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [
                \WebProject\DockerApi\Library\Generated\Model\Port::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\MountPoint::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\DeviceMapping::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\DeviceRequest::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ThrottleDevice::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\Mount::class                                                => false,
                \WebProject\DockerApi\Library\Generated\Model\MountBindOptions::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptions::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\MountVolumeOptionsDriverConfig::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\MountImageOptions::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\MountTmpfsOptions::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\RestartPolicy::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\Resources::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\ResourcesBlkioWeightDeviceItem::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ResourcesUlimitsItem::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\Limit::class                                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ResourceObject::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItem::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemNamedResourceSpec::class                => false,
                \WebProject\DockerApi\Library\Generated\Model\GenericResourcesItemDiscreteResourceSpec::class             => false,
                \WebProject\DockerApi\Library\Generated\Model\HealthConfig::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\Health::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\HealthcheckResult::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\HostConfig::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\HostConfigLogConfig::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerConfig::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerConfigExposedPortsItem::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerConfigVolumesItem::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageConfig::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageConfigExposedPortsItem::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageConfigVolumesItem::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkingConfig::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkSettings::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Address::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\PortBinding::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\DriverData::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\FilesystemChange::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageInspect::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageInspectRootFS::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageInspectMetadata::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageSummary::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\AuthConfig::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ProcessConfig::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\Volume::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeStatusItem::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeUsageData::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeCreateOptions::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumeListResponse::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\Network::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ConfigReference::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\IPAM::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\IPAMConfig::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkContainer::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\PeerInfo::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkCreateResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\BuildInfo::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\BuildCache::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageID::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\CreateImageInfo::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\PushImageInfo::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ErrorDetail::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ProgressDetail::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ErrorResponse::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\IDResponse::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointSettings::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointIPAMConfig::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginMount::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginDevice::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginEnv::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginInterfaceType::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Plugin::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginSettings::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfig::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigInterface::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigUser::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigNetwork::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigLinux::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigArgs::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginConfigRootfs::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\ObjectVersion::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\NodeSpec::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\Node::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\NodeDescription::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Platform::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\EngineDescription::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\EngineDescriptionPluginsItem::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\TLSInfo::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\NodeStatus::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ManagerStatus::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpec::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecOrchestration::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecRaft::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecDispatcher::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfig::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecCAConfigExternalCAsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecEncryptionConfig::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaults::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmSpecTaskDefaultsLogDriver::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterInfo::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\JoinTokens::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Swarm::class                                                => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpec::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPluginSpec::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpec::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivileges::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class        => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class        => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesSeccomp::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecPrivilegesAppArmor::class              => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecDNSConfig::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecSecretsItemFile::class                 => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemFile::class                 => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecConfigsItemRuntime::class              => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecContainerSpecUlimitsItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class                        => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecResources::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecRestartPolicy::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacement::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItem::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecPlacementPreferencesItemSpread::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskSpecLogDriver::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerStatus::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\PortStatus::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\TaskStatus::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Task::class                                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpec::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecMode::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicated::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobal::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeReplicatedJob::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecModeGlobalJob::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecUpdateConfig::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceSpecRollbackConfig::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointPortConfig::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\EndpointSpec::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\Service::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceEndpoint::class                                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceEndpointVirtualIPsItem::class                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateStatus::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceServiceStatus::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceJobStatus::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceCreateResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerSummary::class                                     => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryHostConfig::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerSummaryNetworkSettings::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\Driver::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SecretSpec::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Secret::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ConfigSpec::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\Config::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerState::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerCreateResponse::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerUpdateResponse::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerStatsResponse::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStats::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerBlkioStatEntry::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerCPUStats::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerCPUUsage::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerPidsStats::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerThrottlingData::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerMemoryStats::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerNetworkStats::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerStorageStats::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerWaitResponse::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerWaitExitError::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersion::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersionPlatform::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItem::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemVersionComponentsItemDetails::class                   => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemInfo::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemInfoDefaultAddressPoolsItem::class                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerdInfo::class                                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainerdInfoNamespaces::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\PluginsInfo::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\RegistryServiceConfig::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\IndexInfo::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\Runtime::class                                              => false,
                \WebProject\DockerApi\Library\Generated\Model\Commit::class                                               => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmInfo::class                                            => false,
                \WebProject\DockerApi\Library\Generated\Model\PeerNode::class                                             => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworkAttachmentConfig::class                              => false,
                \WebProject\DockerApi\Library\Generated\Model\EventActor::class                                           => false,
                \WebProject\DockerApi\Library\Generated\Model\EventMessage::class                                         => false,
                \WebProject\DockerApi\Library\Generated\Model\OCIDescriptor::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\OCIPlatform::class                                          => false,
                \WebProject\DockerApi\Library\Generated\Model\DistributionInspect::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolume::class                                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeInfo::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumePublishStatusItem::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpec::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessMode::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeMountVolume::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeSecretsItem::class               => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \WebProject\DockerApi\Library\Generated\Model\ClusterVolumeSpecAccessModeCapacityRange::class             => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummary::class                                 => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummarySize::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageData::class                        => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryImageDataSize::class                    => false,
                \WebProject\DockerApi\Library\Generated\Model\ImageManifestSummaryAttestationData::class                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersIdUpdatePostBody::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersPrunePostResponse200::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\BuildPrunePostResponse200::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\ImagesNameHistoryGetResponse200Item::class                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ImagesSearchGetResponse200Item::class                       => false,
                \WebProject\DockerApi\Library\Generated\Model\ImagesPrunePostResponse200::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\AuthPostResponse200::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemDfGetJsonResponse200::class                           => false,
                \WebProject\DockerApi\Library\Generated\Model\SystemDfGetTextplainResponse200::class                      => false,
                \WebProject\DockerApi\Library\Generated\Model\ContainersIdExecPostBody::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\ExecIdStartPostBody::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ExecIdJsonGetResponse200::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumesNamePutBody::class                                   => false,
                \WebProject\DockerApi\Library\Generated\Model\VolumesPrunePostResponse200::class                          => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksCreatePostBody::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksIdConnectPostBody::class                            => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksIdDisconnectPostBody::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\NetworksPrunePostResponse200::class                         => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmJoinPostBody::class                                    => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockkeyGetJsonResponse200::class                     => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockkeyGetTextplainResponse200::class                => false,
                \WebProject\DockerApi\Library\Generated\Model\SwarmUnlockPostBody::class                                  => false,
                \WebProject\DockerApi\Library\Generated\Model\ServicesCreatePostBody::class                               => false,
                \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody::class                             => false,
                \WebProject\DockerApi\Library\Generated\Model\SecretsCreatePostBody::class                                => false,
                \WebProject\DockerApi\Library\Generated\Model\ConfigsCreatePostBody::class                                => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class                                                        => false,
            ];
        }

        public function hasCacheableSupportsMethod(): bool
        {
            return true;
        }
    }
}
