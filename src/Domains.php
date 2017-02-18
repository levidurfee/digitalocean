<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Domains\CreateDomainRequest;
use wappr\digitalocean\Requests\Domains\DeleteDomainRequest;
use wappr\digitalocean\Requests\Domains\ListAllDomainsRequest;
use wappr\digitalocean\Requests\Domains\RetrieveDomainRequest;

class Domains extends Resources
{
    public function listAll(ListAllDomainsRequest $listAllDomainsRequest)
    {
    }

    public function create(CreateDomainRequest $createDomainRequest)
    {
    }

    public function retrieve(RetrieveDomainRequest $retrieveDomainRequest)
    {
    }

    public function delete(DeleteDomainRequest $deleteDomainRequest)
    {
    }
}
