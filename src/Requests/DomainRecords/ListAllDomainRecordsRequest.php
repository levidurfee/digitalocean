<?php

namespace wappr\digitalocean\Requests\DomainRecords;

use wappr\digitalocean\RequestContract;

class ListAllDomainRecordsRequest extends RequestContract
{
    public $domain_name;

    public function __construct($domain_name)
    {
        $this->domain_name = $domain_name;
    }
}
