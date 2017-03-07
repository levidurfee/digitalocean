<?php

namespace wappr\digitalocean\Requests\Domains;

use wappr\digitalocean\RequestContract;

/**
 * Class RetrieveDomainRequest.
 */
class RetrieveDomainRequest extends RequestContract
{
    /**
     * @var string
     */
    public $domain_name;

    /**
     * RetrieveDomainRequest constructor.
     *
     * @param $domain_name
     */
    public function __construct($domain_name)
    {
        $this->domain_name = $domain_name;
    }
}
