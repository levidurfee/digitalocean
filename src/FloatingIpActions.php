<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\FloatingIpActions\AssignFloatingIpToDropletRequest;
use wappr\digitalocean\Requests\FloatingIpActions\ListAllFloatingIpActionsRequest;
use wappr\digitalocean\Requests\FloatingIpActions\RetrieveFloatingIpActionRequest;
use wappr\digitalocean\Requests\FloatingIpActions\UnassignFloatingIpRequest;

class FloatingIpActions extends Resources
{
    public function assign(AssignFloatingIpToDropletRequest $assignFloatingIpToDropletRequest)
    {
    }

    public function unassign(UnassignFloatingIpRequest $unassignFloatingIpRequest)
    {
    }

    public function listAll(ListAllFloatingIpActionsRequest $listAllFloatingIpActionsRequest)
    {
    }

    public function retrieve(RetrieveFloatingIpActionRequest $retrieveFloatingIpActionRequest)
    {
    }
}
