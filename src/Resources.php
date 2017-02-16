<?php

namespace wappr\digitalocean;

abstract class Resources
{
    protected $clientAdapter;
    public function __construct()
    {
        $this->clientAdapter = new ClientAdapter();
    }
}
