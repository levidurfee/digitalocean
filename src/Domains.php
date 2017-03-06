<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Domains\CreateDomainRequest;
use wappr\digitalocean\Requests\Domains\DeleteDomainRequest;
use wappr\digitalocean\Requests\Domains\ListAllDomainsRequest;
use wappr\digitalocean\Requests\Domains\RetrieveDomainRequest;

class Domains extends Resources
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
     * List all of the domains.
     *
     * @param ListAllDomainsRequest $listAllDomainsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listAll(ListAllDomainsRequest $listAllDomainsRequest)
    {
        return $this->clientAdapter->get($this->endpoint, $listAllDomainsRequest);
    }

    /**
     * Create a new domain.
     *
     * @param CreateDomainRequest $createDomainRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function create(CreateDomainRequest $createDomainRequest)
    {
        return $this->clientAdapter->post($this->endpoint, $createDomainRequest);
    }

    /**
     * Get details about a specific domain.
     *
     * @param RetrieveDomainRequest $retrieveDomainRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve(RetrieveDomainRequest $retrieveDomainRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$retrieveDomainRequest->domain_name, $retrieveDomainRequest);
    }

    public function delete(DeleteDomainRequest $deleteDomainRequest)
    {
    }
}
