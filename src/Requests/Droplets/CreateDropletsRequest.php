<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;

/**
 * Class CreateDropletsRequest.
 */
class CreateDropletsRequest extends RequestContract
{
    /* required */
    public $name;
    public $region;
    public $size;
    public $images;

    /* optional */
    public $ssh_keys;
    public $backups;
    public $ipv6;
    public $private_networking;
    public $user_data;
    public $monitoring;
    public $volume;
    public $tags;

    /**
     * CreateDropletsRequest constructor.
     *
     * @param $name
     * @param $region
     * @param $size
     * @param $images
     */
    public function __construct($name, $region, $size, $images)
    {
        $this->name = $name;
        $this->region = $region;
        $this->size = $size;
        $this->images = $images;

        return $this;
    }
}
