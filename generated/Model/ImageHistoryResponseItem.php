<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageHistoryResponseItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var int
     */
    public int $created;
    /**
     * @var string
     */
    public string $createdBy;
    /**
     * @var list<string>
     */
    public array $tags;
    /**
     * @var int
     */
    public int $size;
    /**
     * @var string
     */
    public string $comment;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'created' => 'Created', 'createdBy' => 'CreatedBy', 'tags' => 'Tags', 'size' => 'Size', 'comment' => 'Comment'];
    }
}
