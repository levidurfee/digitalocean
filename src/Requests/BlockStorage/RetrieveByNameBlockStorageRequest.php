<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Helpers\RegionsHelper;
use wappr\digitalocean\RequestContract;

class RetrieveByNameBlockStorageRequest extends RequestContract
{
    public $name;
    public $region;

    /**
     * RetrieveByNameBlockStorageRequest constructor.
     *
     * @param $name
     * @param $region
     */
    public function __construct($name, $region)
    {
        if (!RegionsHelper::check($region)) {
            throw new \InvalidArgumentException('Region must be a slug.', 200);
        }
        $this->name = $name;
        $this->region = $region;
    }
}
