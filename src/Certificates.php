<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Certificates\CreateNewCertificateRequest;
use wappr\digitalocean\Requests\Certificates\DeleteCertificateRequest;
use wappr\digitalocean\Requests\Certificates\ListAllCertificatesRequest;
use wappr\digitalocean\Requests\Certificates\RetrieveCertificateRequest;

class Certificates extends Resources
{
    /**
     * @var ClientAdapter
     */
    protected $clientAdapter;

    /**
     * @var string
     */
    protected $endpoint = 'certificates';

    /**
     * Upload a new SSL cert for a load balancer.
     * These are used when the load balancer is doing SSL termination.
     *
     * @param CreateNewCertificateRequest $createNewCertificateRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function create(CreateNewCertificateRequest $createNewCertificateRequest)
    {
        return $this->clientAdapter->post($this->endpoint, $createNewCertificateRequest);
    }

    public function listAll(ListAllCertificatesRequest $listAllCertificatesRequest)
    {
    }

    public function retrieve(RetrieveCertificateRequest $retrieveCertificateRequest)
    {
    }

    public function delete(DeleteCertificateRequest $deleteCertificateRequest)
    {
    }
}
