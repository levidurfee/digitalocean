<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\RequestContract;

class ListSnapshotsBlockStorageRequest extends RequestContract
{
    public $volume_id;

    public function __construct($volume_id)
    {
        $this->volume_id = $volume_id;
    }
}
