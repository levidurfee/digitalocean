<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\Helpers\RegionsHelper;
use wappr\digitalocean\RequestContract;

/**
 * Class ResizeVolumeRequest.
 *
 * Resize a volume.
 */
class ResizeVolumeRequest extends RequestContract
{
    public $type = 'resize';

    public $volume_id;

    public $size_gigabytes;

    public $region;

    /**
     * ResizeVolumeRequest constructor.
     *
     * @param $volume_id
     * @param $size_gigabytes
     */
    public function __construct($volume_id, $size_gigabytes)
    {
        $this->volume_id = $volume_id;
        $this->size_gigabytes = $size_gigabytes;
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
