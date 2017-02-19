<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Tags\CreateTagRequest;
use wappr\digitalocean\Requests\Tags\DeleteTagRequest;
use wappr\digitalocean\Requests\Tags\ListAllTagsRequest;
use wappr\digitalocean\Requests\Tags\RetrieveTagRequest;
use wappr\digitalocean\Requests\Tags\TagResourceRequest;
use wappr\digitalocean\Requests\Tags\UntagResourceRequest;
use wappr\digitalocean\Requests\Tags\UpdateTagRequest;

class Tags extends Resources
{
    public function create(CreateTagRequest $createTagRequest)
    {
    }

    public function retrieve(RetrieveTagRequest $retrieveTagRequest)
    {
    }

    public function listAll(ListAllTagsRequest $listAllTagsRequest)
    {
    }

    public function update(UpdateTagRequest $updateTagRequest)
    {
    }

    public function tagResource(TagResourceRequest $tagResourceRequest)
    {
    }

    public function unTagResource(UntagResourceRequest $untagResourceRequest)
    {
    }

    public function delete(DeleteTagRequest $deleteTagRequest)
    {
    }
}
