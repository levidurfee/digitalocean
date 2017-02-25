<?php

namespace wappr\digitalocean\Requests\BlockStorage\Traits;

trait VolumeId
{
    public $volume_id;

    public function __construct($volume_id)
    {
        $this->volume_id = $volume_id;
    }
}
