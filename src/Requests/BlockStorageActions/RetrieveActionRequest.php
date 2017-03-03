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
    /**
     * @var string
     */
    public $volume_id;

    /**
     * @var string
     */
    public $action_id;

    /**
     * RetrieveActionRequest constructor.
     *
     * @param string $volume_id
     * @param string $action_id
     */
    public function __construct($volume_id, $action_id)
    {
        $this->volume_id = $volume_id;
        $this->action_id = $action_id;
    }
}
