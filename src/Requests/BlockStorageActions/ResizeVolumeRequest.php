<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\BlockStorageActions\Traits\SetRegion;

/**
 * Class ResizeVolumeRequest.
 *
 * Resize a volume.
 */
class ResizeVolumeRequest extends RequestContract
{
    use SetRegion;

    /**
     * @var string
     */
    public $type = 'resize';

    /**
     * @var string
     */
    public $volume_id;

    /**
     * @var int
     */
    public $size_gigabytes;

    /**
     * @var string
     */
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
}
