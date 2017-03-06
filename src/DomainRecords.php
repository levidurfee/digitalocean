<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;
use wappr\digitalocean\Requests\DomainRecords\DeleteDomainRecordsRequest;
use wappr\digitalocean\Requests\DomainRecords\ListAllDomainRecordsRequest;
use wappr\digitalocean\Requests\DomainRecords\RetrieveDomainRecordsRequest;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

class DomainRecords extends Resources
{
    /**
     * @var ClientAdapter
     */
    private $clientAdapter;

    /**
     * @var string
     */
    private $endpoint = 'domains';

    /**
     * List all the records for a specific domain.
     *
     * @param ListAllDomainRecordsRequest $listAllDomainRecordsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listAll(ListAllDomainRecordsRequest $listAllDomainRecordsRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$listAllDomainRecordsRequest->domain_name.'/records', $listAllDomainRecordsRequest);
    }

    public function create(CreateDomainRecordsRequest $createDomainRecordsRequest)
    {
    }

    public function retrieve(RetrieveDomainRecordsRequest $retrieveDomainRecordsRequest)
    {
    }

    public function update(UpdateDomainRecordsRequest $updateDomainRecordsRequest)
    {
    }

    public function delete(DeleteDomainRecordsRequest $deleteDomainRecordsRequest)
    {
    }
}
