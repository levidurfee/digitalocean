<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Helpers\EmptyRequest;
use wappr\digitalocean\Requests\FloatingIpActions\FloatingIpActionsRequest;

class FloatingIpActions extends Resources
{
    private $endpoint = 'floating_ips';

    /**
     * Assign a Floating IP to a Droplet.
     *
     * @param FloatingIpActionsRequest $floatingIpActionsRequest
     * @param $floatingIp
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function assign(FloatingIpActionsRequest $floatingIpActionsRequest, $floatingIp)
    {
        return $this->clientAdapter->post(
            $this->endpoint.'/'.$floatingIp.'/actions',
            $floatingIpActionsRequest
        );
    }

    /**
     * Unassign a Floating IP.
     *
     * @param FloatingIpActionsRequest $floatingIpActionsRequest
     * @param $floatingIp
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function unassign(FloatingIpActionsRequest $floatingIpActionsRequest, $floatingIp)
    {
        return $this->clientAdapter->post(
            $this->endpoint.'/'.$floatingIp.'/actions',
            $floatingIpActionsRequest
        );
    }

    /**
     * Retrieve all Floating IP Actions.
     *
     * @param $floatingIp
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function listAll($floatingIp)
    {
        return $this->clientAdapter->get(
            $this->endpoint.'/'.$floatingIp.'/actions',
            new EmptyRequest
        );
    }

    /**
     * Retrieve details about a specific action.
     *
     * @param $floatingIp
     * @param $actionId
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve($floatingIp, $actionId)
    {
        return $this->clientAdapter->get(
            $this->endpoint.'/'.$floatingIp.'/actions/'.$actionId,
            new EmptyRequest
        );
    }
}
