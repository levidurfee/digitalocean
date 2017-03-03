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
     * Attach a volume to a droplet using the volume's ID.
     *
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

    /**
     * Detach a volume from a droplet using the volume id.
     *
     * @param RemoveVolumeRequest $removeVolumeRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function remove(RemoveVolumeRequest $removeVolumeRequest)
    {
        return $this->clientAdapter->post($this->endpoint.'/'.$removeVolumeRequest->volume_id.'/actions', $removeVolumeRequest);
    }

    /**
     * Detach a volume from a droplet using the volume name.
     *
     * @param RemoveVolumeByNameRequest $removeVolumeByNameRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function removeByName(RemoveVolumeByNameRequest $removeVolumeByNameRequest)
    {
        return $this->clientAdapter->post($this->endpoint.'/actions', $removeVolumeByNameRequest);
    }

    /**
     * Resize a volume.
     *
     * @param ResizeVolumeRequest $resizeVolumeRequest
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function resize(ResizeVolumeRequest $resizeVolumeRequest)
    {
        return $this->clientAdapter->post($this->endpoint.'/'.$resizeVolumeRequest->volume_id.'/actions', $resizeVolumeRequest);
    }

    public function listAll(ListAllActionsRequest $listAllActionsRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$listAllActionsRequest->volume_id.'/actions', $listAllActionsRequest);
    }

    public function retrieve(RetrieveActionRequest $retrieveActionRequest)
    {
    }
}
