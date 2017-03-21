<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;

class ListSnapshotsDropletRequest extends RequestContract
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * ListAvailableKernelsDropletsRequest constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }
}
