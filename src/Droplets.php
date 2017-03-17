<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;
use wappr\digitalocean\Requests\Droplets\CreateMultipleDropletsRequest;
use wappr\digitalocean\Requests\Droplets\DeleteByTagDropletsRequest;
use wappr\digitalocean\Requests\Droplets\DeleteDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListActionsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAllDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAllNeighborsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAvailableKernelsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListBackupsDropletRequest;
use wappr\digitalocean\Requests\Droplets\ListByTagDropletRequest;
use wappr\digitalocean\Requests\Droplets\ListNeighborsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListSnapshotsDropletRequest;
use wappr\digitalocean\Requests\Droplets\RetrieveDropletsRequest;

/**
 * Class Droplets.
 */
class Droplets extends Resources
{
    /**
     * @var ClientAdapter
     */
    protected $clientAdapter;

    private $endpoint = 'droplets';

    /**
     * Create a new Droplet.
     *
     * @param CreateDropletsRequest $createDropletRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function create(CreateDropletsRequest $createDropletRequest)
    {
        return $this->clientAdapter->post($this->endpoint, $createDropletRequest);
    }

    /**
     * Create multiple Droplets.
     *
     * @param CreateMultipleDropletsRequest $createMultipleDropletsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function createMultiple(CreateMultipleDropletsRequest $createMultipleDropletsRequest)
    {
        return $this->clientAdapter->post($this->endpoint, $createMultipleDropletsRequest);
    }

    /**
     * Retrieve information about a Droplet.
     *
     * @param RetrieveDropletsRequest $retrieveDropletsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve(RetrieveDropletsRequest $retrieveDropletsRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$retrieveDropletsRequest->droplet_id, $retrieveDropletsRequest);
    }

    /**
     * Return a list of all Droplets.
     *
     * @param ListAllDropletsRequest $listAllDropletsRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listAll(ListAllDropletsRequest $listAllDropletsRequest)
    {
        return $this->clientAdapter->get($this->endpoint, $listAllDropletsRequest);
    }

    public function listByTag(ListByTagDropletRequest $listByTagDropletRequest)
    {
    }

    public function listAvailableKernels(ListAvailableKernelsDropletsRequest $listAvailableKernelsDropletsRequest)
    {
    }

    public function listSnapshots(ListSnapshotsDropletRequest $listSnapshotsDropletRequest)
    {
    }

    public function listBackups(ListBackupsDropletRequest $listBackupsDropletRequest)
    {
    }

    public function listActions(ListActionsDropletsRequest $listActionsDropletsRequest)
    {
    }

    public function delete(DeleteDropletsRequest $deleteDropletsRequest)
    {
    }

    public function deleteByTag(DeleteByTagDropletsRequest $deleteByTagDropletsRequest)
    {
    }

    public function listNeighbors(ListNeighborsDropletsRequest $listNeighborsDropletsRequest)
    {
    }

    public function listAllNeighbors(ListAllNeighborsDropletsRequest $listAllNeighborsDropletsRequest)
    {
    }
}
