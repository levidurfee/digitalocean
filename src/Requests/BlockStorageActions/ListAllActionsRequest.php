<?php

namespace wappr\digitalocean\Requests\BlockStorageActions;

use wappr\digitalocean\RequestContract;

/**
 * Class ListAllActionsRequest.
 *
 * List all actions for a volume.
 */
class ListAllActionsRequest extends RequestContract
{
    public $volume_id;

    public function __construct($volume_id)
    {
        $this->volume_id = $volume_id;
    }
}
