<?php

namespace wappr\digitalocean\Requests\DomainRecords;

use wappr\digitalocean\RequestContract;

class CreateDomainRecordsRequest extends RequestContract
{
    public $domain_name;
    /**
     * @var string
     */
    public $type;

    public $name;

    public $data;

    public $priority;

    public $port;

    public $weight;

    protected $error;

    protected $allowedTypes = ['A', 'AAAA', 'CNAME', 'TXT', 'MX', 'NS', 'SRV'];

    public function __construct($domain_name, $type, $name = '', $data = '', $priority = '', $port = '', $weight = '')
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
