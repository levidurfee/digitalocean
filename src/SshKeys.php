<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\SshKeys\CreateNewKeyRequest;
use wappr\digitalocean\Requests\SshKeys\DestroyKeyRequest;
use wappr\digitalocean\Requests\SshKeys\ListAllKeysRequest;
use wappr\digitalocean\Requests\SshKeys\RetrieveKeyRequest;
use wappr\digitalocean\Requests\SshKeys\UpdateKeyRequest;

class SshKeys extends Resources
{
    public function listAll(ListAllKeysRequest $listAllKeysRequest)
    {
    }

    public function create(CreateNewKeyRequest $createNewKeyRequest)
    {
    }

    public function retrieve(RetrieveKeyRequest $retrieveKeyRequest)
    {
    }

    public function update(UpdateKeyRequest $updateKeyRequest)
    {
    }

    public function destroy(DestroyKeyRequest $destroyKeyRequest)
    {
    }
}
