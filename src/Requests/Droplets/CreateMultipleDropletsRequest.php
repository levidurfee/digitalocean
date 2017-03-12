<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Helpers\DropletsHelper;
use wappr\digitalocean\Helpers\RegionsHelper;
use wappr\digitalocean\RequestContract;

class CreateMultipleDropletsRequest extends RequestContract
{
    /* required */
    public $name;
    public $region;
    public $size;
    public $images;

    /**
     * CreateMultipleDropletsRequest constructor.
     *
     * @param array $name
     * @param string $region
     * @param string $size
     * @param string $images
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($name, $region, $size, $images)
    {
        if (!RegionsHelper::check($region)) {
            throw new \InvalidArgumentException('Region must be a slug.', 200);
        }

        if (!DropletsHelper::checkSizes($size)) {
            throw new \InvalidArgumentException('Must be a proper size.', 800);
        }

        $this->name = $name;
        $this->region = $region;
        $this->size = $size;
        $this->images = $images;

        return $this;
    }
}
