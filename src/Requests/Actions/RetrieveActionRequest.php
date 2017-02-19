<?php

namespace wappr\digitalocean\Requests\Actions;

use wappr\digitalocean\RequestContract;

class RetrieveActionRequest extends RequestContract
{
    public $action_id;

    public function __construct($action_id)
    {
        $this->action_id = $action_id;
    }
}
