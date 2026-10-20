<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SystemVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var SystemVersionPlatform|null
     */
    public ?SystemVersionPlatform $platform;
    /**
     * Information about system components.
     *
     * @var list<SystemVersionComponentsItem>|null
     */
    public ?array $components;
    /**
     * The version of the daemon.
     *
     * @var string|null
     */
    public ?string $version;
    /**
     * The default (and highest) API version that is supported by the daemon.
     *
     * @var string|null
     */
    public ?string $apiVersion;
    /**
     * The minimum API version that is supported by the daemon.
     *
     * @var string|null
     */
    public ?string $minAPIVersion;
    /**
     * The Git commit of the source code that was used to build the daemon.
     *
     * @var string|null
     */
    public ?string $gitCommit;
    /**
     * The version Go used to compile the daemon, and the version of the Go
     * runtime in use.
     *
     * @var string|null
     */
    public ?string $goVersion;
    /**
     * The operating system that the daemon is running on ("linux" or "windows").
     *
     * @var string|null
     */
    public ?string $os;
    /**
     * Architecture of the daemon, as returned by the Go runtime (`GOARCH`).
     *
     * A full list of possible values can be found in the [Go documentation](https://go.dev/doc/install/source#environment).
     *
     * @var string|null
     */
    public ?string $arch;
    /**
     * The kernel version (`uname -r`) that the daemon is running on.
     *
     * This field is omitted when empty.
     *
     * @var string|null
     */
    public ?string $kernelVersion;
    /**
     * Indicates if the daemon is started with experimental features enabled.
     *
     * This field is omitted when empty / false.
     *
     * @var bool|null
     */
    public ?bool $experimental;
    /**
     * The date and time that the daemon was compiled.
     *
     * @var string|null
     */
    public ?string $buildTime;

    public function definedProperties(): array
    {
        return ['platform' => 'Platform', 'components' => 'Components', 'version' => 'Version', 'apiVersion' => 'ApiVersion', 'minAPIVersion' => 'MinAPIVersion', 'gitCommit' => 'GitCommit', 'goVersion' => 'GoVersion', 'os' => 'Os', 'arch' => 'Arch', 'kernelVersion' => 'KernelVersion', 'experimental' => 'Experimental', 'buildTime' => 'BuildTime'];
    }
}
