<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\BlockStorage\Traits\NameRegion;

class RetrieveByNameBlockStorageRequest extends RequestContract
{
    use NameRegion;
}
