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

class Droplets
{
    public function create(CreateDropletsRequest $createDropletRequest)
    {
    }

    public function createMultiple(CreateMultipleDropletsRequest $createMultipleDropletsRequest)
    {
    }

    public function retrieve(RetrieveDropletsRequest $retrieveDropletsRequest)
    {
    }

    public function listAll(ListAllDropletsRequest $listAllDropletsRequest)
    {
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
