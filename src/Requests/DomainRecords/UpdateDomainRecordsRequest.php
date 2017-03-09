<?php

namespace wappr\digitalocean\Requests\DomainRecords;

use wappr\digitalocean\RequestContract;
use wappr\digitalocean\Requests\DomainRecords\Traits\CheckMissingParams;

class UpdateDomainRecordsRequest extends RequestContract
{
    use CheckMissingParams;

    public function __construct($record_id, $domain_name, $type, $name = '', $data = '', $priority = '', $port = '', $weight = '')
    {
        if (!in_array(strtoupper($type), $this->allowedTypes)) {
            throw new \InvalidArgumentException('That is not an allowed type.', 501);
        }

        $this->domain_name = $domain_name;
        $this->type = strtoupper($type);
        $this->name = $name;
        $this->data = $data;
        $this->priority = $priority;
        $this->port = $port;
        $this->weight = $weight;

        if ($this->checkParameters()) {
            return true;
        }

        throw new \InvalidArgumentException($this->error, 500);
    }
}
