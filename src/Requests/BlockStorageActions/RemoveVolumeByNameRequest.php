<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\BlockStorageActions\Traits\SetRegion;

/**
 * Class RemoveVolumeByNameRequest.
 *
 * Remove a volume from a Droplet by name.
 *
 * @property string $region
 */
class RemoveVolumeByNameRequest extends RequestContract
{
    use SetRegion;

    /**
     * @var string
     */
    public $type = 'detach';

    /**
     * @var int
     */
    public $droplet_id;

    /**
     * @var string
     */
    public $volume_name;

    /**
     * RemoveVolumeByNameRequest constructor.
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
