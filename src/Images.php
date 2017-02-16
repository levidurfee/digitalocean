<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Images\DeleteImagesRequest;
use wappr\digitalocean\Requests\Images\ListAllActionsImagesRequest;
use wappr\digitalocean\Requests\Images\ListAllApplicationImagesRequest;
use wappr\digitalocean\Requests\Images\ListAllImagesRequest;
use wappr\digitalocean\Requests\Images\ListDistributionsImagesRequest;
use wappr\digitalocean\Requests\Images\ListUsersImagesRequest;
use wappr\digitalocean\Requests\Images\RetrieveBySlugImagesRequest;
use wappr\digitalocean\Requests\Images\RetrieveImagesRequest;
use wappr\digitalocean\Requests\Images\UpdateImagesRequest;

class Images extends Resources
{
    /**
     * @var ClientAdapter
     */
    protected $clientAdapter;

    private $endpoint = 'images';

    public function listAll(ListAllImagesRequest $listAllImagesRequest)
    {
    }

    public function listDistributions(ListDistributionsImagesRequest $listDistributionsImagesRequest)
    {
    }

    public function listApplicationImages(ListAllApplicationImagesRequest $listAllApplicationImagesRequest)
    {
    }

    public function listUsersImages(ListUsersImagesRequest $listUsersImagesRequest)
    {
    }

    public function listAllActions(ListAllActionsImagesRequest $listAllActionsImagesRequest)
    {
    }

    public function retrieve(RetrieveImagesRequest $retrieveImagesRequest)
    {
    }

    public function retrieveBySlug(RetrieveBySlugImagesRequest $retrieveBySlugImagesRequest)
    {
    }

    public function update(UpdateImagesRequest $updateImagesRequest)
    {
    }

    public function delete(DeleteImagesRequest $deleteImagesRequest)
    {
    }
}
