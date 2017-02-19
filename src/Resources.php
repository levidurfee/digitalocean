<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;

abstract class Resources
{
    protected $clientAdapter;

    public function __construct(Client $client = null)
    {
        $this->clientAdapter = new ClientAdapter($client);
    }
}
