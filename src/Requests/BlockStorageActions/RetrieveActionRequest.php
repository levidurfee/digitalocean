<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\RequestContract;

/**
 * Class RetrieveActionRequest.
 *
 * Retrieve an existing volume action.
 */
class RetrieveActionRequest extends RequestContract
{
    public $volume_id;

    public $action_id;

    public function __construct($volume_id, $action_id)
    {
        $this->volume_id = $volume_id;
        $this->action_id = $action_id;
    }
}
