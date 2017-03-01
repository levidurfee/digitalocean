<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\Helpers\RegionsHelper;
use wappr\digitalocean\RequestContract;

/**
 * Class AttachVolumeRequest.
 *
 * Attach a volume to a Droplet.
 */
class AttachVolumeRequest extends RequestContract
{
    public $volume_id;

    public $droplet_id;

    public $region;

    public function __construct($volume_id, $droplet_id)
    {
        $this->volume_id = $volume_id;
        $this->droplet_id = $droplet_id;
    }

    public function setRegion($region)
    {
        if (!RegionsHelper::check($region)) {
            throw new \InvalidArgumentException('Region must be a slug.', 200);
        }

        $this->region = $region;
    }
}
