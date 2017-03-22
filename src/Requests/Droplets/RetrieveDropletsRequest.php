<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\Droplets\Traits\DropletId;

/**
 * Class RetrieveDropletsRequest.
 */
class RetrieveDropletsRequest extends RequestContract
{
    use DropletId;
}
