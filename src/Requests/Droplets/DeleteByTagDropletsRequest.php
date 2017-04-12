<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;

class DeleteByTagDropletsRequest extends RequestContract
{
    public $tag_name;

    public function __construct($tag_name)
    {
        $this->tag_name = $tag_name;
    }
}
