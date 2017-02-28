<?php

namespace wappr\digitalocean\Requests\BlockStorage\Traits;

use wappr\digitalocean\Helpers\RegionsHelper;

/**
 * Class NameRegion.
 */
trait NameRegion
{
    public $name;
    public $region;

    public function __construct($name, $region)
    {
        if (!RegionsHelper::check($region)) {
            throw new \InvalidArgumentException('Region must be a slug.', 200);
        }
        $this->name = $name;
        $this->region = $region;
    }
}
