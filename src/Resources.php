<?php

namespace wappr\digitalocean;

abstract class Resources
{
    protected $sender;
    public function __construct()
    {
        $this->sender = new Sender();
    }
}
