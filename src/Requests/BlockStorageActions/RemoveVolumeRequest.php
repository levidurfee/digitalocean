<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\BlockStorageActions\Traits\SetRegion;

/**
 * Class RemoveVolumeRequest.
 *
 * Remove a volume from a Droplet.
 *
 * @property string $region
 */
class RemoveVolumeRequest extends RequestContract
{
    use SetRegion;

    /**
     * @var string
     */
    public $type = 'detach';

    /**
     * @var string
     */
    public $volume_id;

    /**
     * @var int
     */
    public $droplet_id;

    /**
     * RemoveVolumeRequest constructor.
     *
     * @param string $volume_id
     * @param int $droplet_id
     */
    public function __construct($volume_id, $droplet_id)
    {
        $this->volume_id = $volume_id;
        $this->droplet_id = $droplet_id;
    }
}
