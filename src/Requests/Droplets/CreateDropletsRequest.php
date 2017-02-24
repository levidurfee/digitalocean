<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;

/**
 * Class CreateDropletsRequest.
 *
 * @property array $ssh_keys
 * @property bool $backups
 * @property bool $ipv6
 * @property bool $private_networking
 * @property string $user_data
 * @property bool $monitoring
 * @property string $volume
 * @property array $tags
 */
class CreateDropletsRequest extends RequestContract
{
    /* required */
    public $name;
    public $region;
    public $size;
    public $images;

    /**
     * CreateDropletsRequest constructor.
     *
     * @param string $name
     * @param string $region
     * @param string $size
     * @param string $images
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
