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
 * Class BlockStorageActions
 *
 * @link https://developers.digitalocean.com/documentation/v2/#block-storage-actions DigitalOcean documentation.
 *
 * @package wappr\digitalocean
 */
class BlockStorageActions extends Resources
{
    public function attach(AttachVolumeRequest $attachVolumeRequest)
    {

    }

    public function attachByName(AttachVolumeByNameRequest $attachVolumeByNameRequest)
    {

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
