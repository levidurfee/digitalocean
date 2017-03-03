<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\Helpers\RegionsHelper;
use wappr\digitalocean\RequestContract;

/**
 * Class RemoveVolumeByNameRequest.
 *
 * Remove a volume from a Droplet by name.
 */
class RemoveVolumeByNameRequest extends RequestContract
{
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
     * @var string
     */
    public $region;

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

    /**
     * Must be a valid region slug.
     *
     * @param string $region
     *
     * @throws \InvalidArgumentException
     */
    public function setRegion($region)
    {
        if (!RegionsHelper::check($region)) {
            throw new \InvalidArgumentException('Region must be a slug.', 200);
        }

        $this->region = $region;
    }
}
