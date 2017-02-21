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
     * @var ClientAdapter
     */
    protected $clientAdapter;

    /**
     * API Endpoint.
     *
     * @var string
     */
    private $endpoint = 'volumes';

    /**
     * @param ListAllBlockStorageRequest $listAllBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listAll(ListAllBlockStorageRequest $listAllBlockStorageRequest)
    {
        return $this->clientAdapter->get($this->endpoint, $listAllBlockStorageRequest);
    }

    /**
     * @param CreateBlockStorageRequest $createBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function create(CreateBlockStorageRequest $createBlockStorageRequest)
    {
        return $this->clientAdapter->post($this->endpoint, $createBlockStorageRequest);
    }

    /**
     * @param RetrieveBlockStorageRequest $retrieveBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve(RetrieveBlockStorageRequest $retrieveBlockStorageRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$retrieveBlockStorageRequest->volume_id, $retrieveBlockStorageRequest);
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
