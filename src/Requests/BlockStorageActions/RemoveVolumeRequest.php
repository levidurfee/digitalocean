<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\Helpers\RegionsHelper;
use wappr\digitalocean\RequestContract;

/**
 * Class RemoveVolumeRequest.
 *
 * Remove a volume from a Droplet.
 */
class RemoveVolumeRequest extends RequestContract
{
    public $type = 'detach';

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

        return $this;
    }
}
