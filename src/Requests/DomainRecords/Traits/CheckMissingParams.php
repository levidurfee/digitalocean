<?php

namespace wappr\digitalocean\Requests\DomainRecords\Traits;

trait CheckMissingParams
{
    public $domain_name;

    public $record_id;

    public $type;

    public $name;

    public $data;

    public $priority;

    public $port;

    public $weight;

    protected $error;

    protected $allowedTypes = ['A', 'AAAA', 'CNAME', 'TXT', 'MX', 'NS', 'SRV'];

    protected function checkParameters()
    {
        $required = [
            'A' => ['name', 'data'],
            'AAAA' => ['name', 'data'],
            'CNAME' => ['name', 'data'],
            'TXT' => ['name', 'data'],
            'MX' => ['data', 'priority'],
            'NS' => ['data'],
            'SRV' => ['name', 'data', 'priority', 'port', 'weight'],
        ];

        foreach ($required[$this->type] as $reqs) {
            if (strlen($this->{$reqs}) == 0) {
                $this->error = $reqs.' is required for '.$this->type;

                return false;
            }
        }

        return true;
    }
}
