<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\ImageActions\ConvertImageToSnapshotRequest;
use wappr\digitalocean\Requests\ImageActions\RetrieveImageActionRequest;
use wappr\digitalocean\Requests\ImageActions\TransferImageRequest;

class ImageActions extends Resources
{
    public function transfer(TransferImageRequest $transferImageRequest)
    {
    }

    public function convertToSnapshot(ConvertImageToSnapshotRequest $convertImageToSnapshotRequest)
    {
    }

    public function retrieve(RetrieveImageActionRequest $retrieveImageActionRequest)
    {
    }
}
