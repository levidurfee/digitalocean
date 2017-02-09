<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Snapshots\DeleteSnapshotsRequest;
use wappr\digitalocean\Requests\Snapshots\ListAllDropletSnapshotsRequest;
use wappr\digitalocean\Requests\Snapshots\ListAllSnapshotsRequest;
use wappr\digitalocean\Requests\Snapshots\ListAllVolumeSnapshotsRequest;
use wappr\digitalocean\Requests\Snapshots\RetrieveSnapshotsRequest;

class Snapshots extends Resources
{
    protected $sender;

    public function listAll(ListAllSnapshotsRequest $listAllSnapshotsRequest)
    {
    }

    public function listAllDropletSnapshots(ListAllDropletSnapshotsRequest $listAllDropletSnapshotsRequest)
    {
    }

    public function listAllVolumeSnapshots(ListAllVolumeSnapshotsRequest $listAllVolumeSnapshotsRequest)
    {
    }

    public function retrieve(RetrieveSnapshotsRequest $retrieveSnapshotsRequest)
    {
    }

    public function delete(DeleteSnapshotsRequest $deleteSnapshotsRequest)
    {
    }
}
