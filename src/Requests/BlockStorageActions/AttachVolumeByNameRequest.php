<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\BlockStorageActions\Traits\SetRegion;

/**
 * Class AttachVolumeByNameRequest.
 *
 * Attach a volume to a Droplet by name.
 */
class AttachVolumeByNameRequest extends RequestContract
{
    use SetRegion;

    /**
     * @var string
     */
    public $type = 'attach';

    /**
     * @var int
     */
    public $droplet_id;

    /**
     * @var string
     */
    public $volume_name;

    /**
     * @var string
     */
    public $region;

    /**
     * AttachVolumeByNameRequest constructor.
     *
     * @param string $volume_name
     * @param int    $droplet_id
     */
    public function __construct($volume_name, $droplet_id)
    {
        $this->volume_name = $volume_name;
        $this->droplet_id = $droplet_id;
    }
}
