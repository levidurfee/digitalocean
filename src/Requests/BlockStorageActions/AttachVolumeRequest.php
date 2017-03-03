<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\BlockStorageActions\Traits\SetRegion;

/**
 * Class AttachVolumeRequest.
 *
 * Attach a volume to a Droplet.
 *
 * @property string $region
 */
class AttachVolumeRequest extends RequestContract
{
    use SetRegion;

    /**
     * @var string
     */
    public $type = 'attach';

    /**
     * @var string
     */
    public $volume_id;

    /**
     * @var int
     */
    public $droplet_id;

    /**
     * AttachVolumeRequest constructor.
     *
     * @param $volume_id
     * @param $droplet_id
     */
    public function __construct($volume_id, $droplet_id)
    {
        $this->volume_id = $volume_id;
        $this->droplet_id = $droplet_id;
    }
}
