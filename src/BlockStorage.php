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
        return $this->clientAdapter->get($this->endpoint.'/'.
            $retrieveBlockStorageRequest->volume_id,
            $retrieveBlockStorageRequest);
    }

    /**
     * Retrieve Block Storage volume by name and region.
     *
     * @param RetrieveByNameBlockStorageRequest $retrieveByNameBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveByName(
        RetrieveByNameBlockStorageRequest $retrieveByNameBlockStorageRequest)
    {
        return $this->clientAdapter->get($this->endpoint, $retrieveByNameBlockStorageRequest);
    }

    /**
     * Retrieve the snapshots that have been created from a block storage volume.
     *
     * @param ListSnapshotsBlockStorageRequest $listSnapshotsBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listSnapshots(
        ListSnapshotsBlockStorageRequest $listSnapshotsBlockStorageRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.
            $listSnapshotsBlockStorageRequest->volume_id.'/snapshots',
            $listSnapshotsBlockStorageRequest);
    }

    /**
     * Create a new snapshot of a volume and give it a name.
     *
     * @param CreateSnapshotBlockStorageRequest $createSnapshotBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function createSnapshot(
        CreateSnapshotBlockStorageRequest $createSnapshotBlockStorageRequest)
    {
        return $this->clientAdapter->post($this->endpoint.'/'.
            $createSnapshotBlockStorageRequest->volume_id.'/snapshots',
            $createSnapshotBlockStorageRequest);
    }

    /**
     * Delete a volume by the ID.
     *
     * @param DeleteBlockStorageRequest $deleteBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function delete(DeleteBlockStorageRequest $deleteBlockStorageRequest)
    {
        return $this->clientAdapter->delete($this->endpoint.'/'.
            $deleteBlockStorageRequest->volume_id,
            $deleteBlockStorageRequest);
    }

    /**
     * Delete a volume by the name and region.
     *
     * @param DeleteByNameBlockStorageRequest $deleteByNameBlockStorageRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteByName(DeleteByNameBlockStorageRequest $deleteByNameBlockStorageRequest)
    {
        return $this->clientAdapter->delete($this->endpoint, $deleteByNameBlockStorageRequest);
    }
}
