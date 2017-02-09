<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\BlockStorage\CreateBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\CreateSnapshotBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\DeleteBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\DeleteByNameBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\ListAllBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\ListSnapshotsBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\RetrieveBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\RetrieveByNameBlockStorageRequest;

/**
 * Class BlockStorage.
 */
class BlockStorage extends Resources
{
    /**
     * @var Sender
     */
    protected $sender;

    private $endpoint = 'volumes';

    public function listAll(ListAllBlockStorageRequest $listAllBlockStorageRequest)
    {
    }

    public function create(CreateBlockStorageRequest $createBlockStorageRequest)
    {
    }

    public function retrieve(RetrieveBlockStorageRequest $retrieveBlockStorageRequest)
    {
    }

    public function retrieveByName(RetrieveByNameBlockStorageRequest $retrieveByNameBlockStorageRequest)
    {
    }

    public function listSnapshots(ListSnapshotsBlockStorageRequest $listSnapshotsBlockStorageRequest)
    {
    }

    public function createSnapshot(CreateSnapshotBlockStorageRequest $createSnapshotBlockStorageRequest)
    {
    }

    public function delete(DeleteBlockStorageRequest $deleteBlockStorageRequest)
    {
    }

    public function deleteByName(DeleteByNameBlockStorageRequest $deleteByNameBlockStorageRequest)
    {
    }
}
