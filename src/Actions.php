<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Actions\ListAllActionsRequest;
use wappr\digitalocean\Requests\Actions\RetrieveActionRequest;

class Actions extends Resources
{
    protected $clientAdapter;
    private $endpoint = 'actions';

    public function listAll(ListAllActionsRequest $listAllActionsRequest)
    {
        return $this->clientAdapter->get($this->endpoint, $listAllActionsRequest);
    }

    public function retrieve(RetrieveActionRequest $retrieveActionRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$retrieveActionRequest->action_id, $retrieveActionRequest);
    }
}
