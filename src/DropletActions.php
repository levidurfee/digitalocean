<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

class DropletActions extends Resources
{
    private $endpoint = 'droplets';

    /**
     * Enable backups for a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function enableBackups(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'enable_backups';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Disable backups for a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function disableBackups(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'disable_backups';
        $this->send($dropletActionsRequest);

        return $this;
    }

    public function reboot(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function powerCycle(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function shutdown(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function powerOff(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function powerOn(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function restore(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function passwordReset(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function resize(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function rebuild(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function rename(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function changeKernel(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function enableIPv6(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function enablePrivateNetworking(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function snapshot(DropletActionsRequest $dropletActionsRequest)
    {
    }

    public function retrieve(DropletActionsRequest $dropletActionsRequest)
    {
    }

    private function send(DropletActionsRequest $dropletActionsRequest)
    {
        $this->clientAdapter->post(
            $this->endpoint.'/'.$dropletActionsRequest->droplet_id.'/actions',
            $dropletActionsRequest
        );
    }
}
