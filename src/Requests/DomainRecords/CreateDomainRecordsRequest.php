<?php

namespace wappr\digitalocean\Requests\DomainRecords;

use wappr\digitalocean\RequestContract;

class CreateDomainRecordsRequest extends RequestContract
{
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


    public function __construct($type, $name = '', $data = '', $priority = '', $port = '', $weight = '')
    {
        $this->type = strtoupper($type);
        $this->type = $type;
        $this->name = $name;
        $this->data = $data;
        $this->priority = $priority;
        $this->port = $port;
        $this->weight = $weight;

        if($this->checkType()) {
            return true;
        }

        throw new \InvalidArgumentException($this->error, 500);

    }

    protected function checkType()
    {
        $required = [
            'A' => ['name', 'data'],
            'AAAA' => ['name', 'data'],
            'CNAME' => ['name', 'data'],
            'TXT' => ['name', 'data'],
            'MX' => ['data', 'priority'],
            'NS' => ['data'],
            'SRV' => ['name', 'data', 'priority', 'port', 'weight']
        ];

        // loop through this array to check if all require is there


        return true;
    }
}
