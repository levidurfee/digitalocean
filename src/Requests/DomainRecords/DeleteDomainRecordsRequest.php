<?php

namespace wappr\digitalocean\Requests\DomainRecords;

use wappr\digitalocean\RequestContract;

class DeleteDomainRecordsRequest extends RequestContract
{
    /**
     * @var string
     */
    public $domain_name;
    /**
     * @var string
     */
    public $record_id;

    /**
     * DeleteDomainRecordsRequest constructor.
     *
     * @param $domain_name
     * @param $record_id
     */
    public function __construct($domain_name, $record_id)
    {
        $this->domain_name = $domain_name;
        $this->record_id = $record_id;
    }
}
