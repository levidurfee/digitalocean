<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\RequestContract;

class CreateSnapshotBlockStorageRequest extends RequestContract
{
    public $volume_id;
    public $name;

    public function __construct($volume_id, $name)
    {
        $this->volume_id = $volume_id;
        $this->name = $name;
    }
}
