<?php

namespace wappr\digitalocean\Requests\Droplets\Traits;

trait DropletId
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * ListBackupsDropletRequest constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }
}
