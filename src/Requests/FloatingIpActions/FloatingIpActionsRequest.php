<?php

namespace wappr\digitalocean\Requests\FloatingIpActions;

use wappr\digitalocean\RequestContract;

class FloatingIpActionsRequest extends RequestContract
{
    public $type;
    public $dropletId;

    public function __construct($type, $dropletID = '')
    {
        $this->type = $type;
        if($dropletID) {
            $this->dropletId = $dropletID;
        }
    }
}
