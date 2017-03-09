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
    protected $clientAdapter;

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

    /**
     * Create a new domain record for a domain.
     *
     * @param CreateDomainRecordsRequest $createDomainRecordsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function create(CreateDomainRecordsRequest $createDomainRecordsRequest)
    {
        return $this->clientAdapter->post($this->endpoint.'/'.$createDomainRecordsRequest->domain_name.'/records', $createDomainRecordsRequest);
    }

    /**
     * Retrieve information about an existing record.
     *
     * @param RetrieveDomainRecordsRequest $retrieveDomainRecordsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve(RetrieveDomainRecordsRequest $retrieveDomainRecordsRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$retrieveDomainRecordsRequest->domain_name.'/records/'.$retrieveDomainRecordsRequest->record_id, $retrieveDomainRecordsRequest);
    }

    /**
     * Update an existing record.
     *
     * @param UpdateDomainRecordsRequest $updateDomainRecordsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function update(UpdateDomainRecordsRequest $updateDomainRecordsRequest)
    {
        return $this->clientAdapter->put($this->endpoint.'/'.$updateDomainRecordsRequest->domain_name.'/records/'.$updateDomainRecordsRequest->record_id, $updateDomainRecordsRequest);
    }

    public function delete(DeleteDomainRecordsRequest $deleteDomainRecordsRequest)
    {
        return $this->clientAdapter->delete($this->endpoint.'/'.$deleteDomainRecordsRequest->domain_name.'/records/'.$deleteDomainRecordsRequest->record_id, $deleteDomainRecordsRequest);
    }
}
