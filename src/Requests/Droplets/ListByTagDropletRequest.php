<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;

/**
 * Class ListByTagDropletRequest.
 */
class ListByTagDropletRequest extends RequestContract
{
    /* required */
    /**
     * @var string
     */
    public $tag_name;

    /**
     * ListByTagDropletRequest constructor.
     *
     * @param string $tag_name
     */
    public function __construct($tag_name)
    {
        $this->tag_name = $tag_name;
    }
}
