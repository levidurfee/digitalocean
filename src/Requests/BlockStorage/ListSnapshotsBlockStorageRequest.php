<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\BlockStorage\Traits\VolumeId;

class ListSnapshotsBlockStorageRequest extends RequestContract
{
    use VolumeId;
}
