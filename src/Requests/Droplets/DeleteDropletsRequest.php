<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\Droplets\Traits\DropletId;

class DeleteDropletsRequest extends RequestContract
{
    use DropletId;
}
