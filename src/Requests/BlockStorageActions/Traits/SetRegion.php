<?php

namespace wappr\digitalocean\Requests\BlockStorageActions\Traits;

use wappr\digitalocean\Helpers\RegionsHelper;

trait SetRegion
{
    /**
     * @var string
     */
    public $region;

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