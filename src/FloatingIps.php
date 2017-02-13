<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\FloatingIps\CreateFloatingIpAttachRequest;
use wappr\digitalocean\Requests\FloatingIps\CreateFloatingIpReservedRequest;
use wappr\digitalocean\Requests\FloatingIps\DeleteFloatingIpRequest;
use wappr\digitalocean\Requests\FloatingIps\ListAllFloatingIpsRequest;
use wappr\digitalocean\Requests\FloatingIps\RetrieveFloatingIpRequest;

/**
 * Class FloatingIps
 * @package wappr\digitalocean
 */
class FloatingIps extends Resources
{
    private $endpoint = 'floating_ips';

    /**
     * @param ListAllFloatingIpsRequest $listAllFloatingIpsRequest
     */
    public function listAll(ListAllFloatingIpsRequest $listAllFloatingIpsRequest)
    {

    }

    /**
     * @param CreateFloatingIpAttachRequest $createFloatingIpAttachRequest
     */
    public function createAttached(CreateFloatingIpAttachRequest $createFloatingIpAttachRequest)
    {

    }

    /**
     * @param CreateFloatingIpReservedRequest $createFloatingIpReservedRequest
     */
    public function createReserved(CreateFloatingIpReservedRequest $createFloatingIpReservedRequest)
    {

    }

    /**
     * @param RetrieveFloatingIpRequest $retrieveFloatingIpRequest
     */
    public function retrieve(RetrieveFloatingIpRequest $retrieveFloatingIpRequest)
    {
        
    }

    /**
     * @param DeleteFloatingIpRequest $deleteFloatingIpRequest
     */
    public function delete(DeleteFloatingIpRequest $deleteFloatingIpRequest)
    {

    }
}
