<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\RequestContract;

/**
 * Class CreateBlockStorageRequest.
 *
 * @property int $size_gigabytes
 * @property string $name
 * @property string $description
 * @property string $region
 * @property string $snapshot_id
 */
class CreateBlockStorageRequest extends RequestContract
{
    public $size_gigabytes;
    public $name;

    public function __construct($size_gigabytes, $name)
    {
        $this->size_gigabytes = $size_gigabytes;
        $this->name = $name;
    }
}
