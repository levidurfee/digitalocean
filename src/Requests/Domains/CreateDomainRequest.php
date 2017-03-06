<?php

namespace wappr\digitalocean\Requests\Domains;

use wappr\digitalocean\RequestContract;

/**
 * Class CreateDomainRequest.
 */
class CreateDomainRequest extends RequestContract
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ip_address;

    /**
     * CreateDomainRequest constructor.
     *
     * @param $name
     * @param $ip_address
     */
    public function __construct($name, $ip_address)
    {
        $this->name = $name;
        $this->ip_address = $ip_address;
    }
}
