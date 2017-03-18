<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Actions\ListAllActionsRequest;
use wappr\digitalocean\Requests\Actions\RetrieveActionRequest;

class Actions extends Resources
{
    /**
     * @var ClientAdapter
     */
    protected $clientAdapter;

    /**
     * @var string
     */
    private $endpoint = 'actions';

    /**
     * @param ListAllActionsRequest $listAllActionsRequest
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAll(ListAllActionsRequest $listAllActionsRequest)
    {
        return $this->clientAdapter->get($this->endpoint, $listAllActionsRequest);
    }

    /**
     * @param RetrieveActionRequest $retrieveActionRequest
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function retrieve(RetrieveActionRequest $retrieveActionRequest)
    {
        return $this->clientAdapter->get($this->endpoint.'/'.$retrieveActionRequest->action_id,
            $retrieveActionRequest);
    }
}
