<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\BlockStorageActions\AttachVolumeByNameRequest;
use wappr\digitalocean\Requests\BlockStorageActions\AttachVolumeRequest;
use wappr\digitalocean\Requests\BlockStorageActions\ListAllActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveVolumeByNameRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveVolumeRequest;
use wappr\digitalocean\Requests\BlockStorageActions\ResizeVolumeRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RetrieveActionRequest;

/**
 * Class BlockStorageActions.
 *
 * @link https://developers.digitalocean.com/documentation/v2/#block-storage-actions DigitalOcean documentation
 */
class BlockStorageActions extends Resources
{
    /**
     * @var ClientAdapter
     */
    protected $clientAdapter;

    protected $endpoint = 'volumes';

    /**
     * @param AttachVolumeRequest $attachVolumeRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function attach(AttachVolumeRequest $attachVolumeRequest)
    {
        return $this->clientAdapter->post($this->endpoint.'/'.$attachVolumeRequest->volume_id.'/actions', $attachVolumeRequest);
    }

    /**
     * Attach a volume to a droplet using the volume's name.
     *
     * @param AttachVolumeByNameRequest $attachVolumeByNameRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function attachByName(AttachVolumeByNameRequest $attachVolumeByNameRequest)
    {
        return $this->clientAdapter->post($this->endpoint.'/actions', $attachVolumeByNameRequest);
    }

    public function remove(RemoveVolumeRequest $removeVolumeRequest)
    {
    }

    public function removeByName(RemoveVolumeByNameRequest $removeVolumeByNameRequest)
    {
    }

    public function resize(ResizeVolumeRequest $resizeVolumeRequest)
    {
    }

    public function listAll(ListAllActionsRequest $listAllActionsRequest)
    {
    }

    public function retrieve(RetrieveActionRequest $retrieveActionRequest)
    {
    }
}
