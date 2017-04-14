<?php

namespace wappr\digitalocean\Requests\DropletActions;

use wappr\digitalocean\RequestContract;

class DropletActionsRequest extends RequestContract
{
    public $droplet_id;
    public $type;

    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }
}
