<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;

/**
 * Class RetrieveDropletsRequest.
 */
class RetrieveDropletsRequest extends RequestContract
{
    /* required */
    public $droplet_id;

    /**
     * RetrieveDropletsRequest constructor.
     *
     * @param string $droplet_id
     */
    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }
}
