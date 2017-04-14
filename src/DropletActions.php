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

    /**
     * Reboot a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function reboot(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'reboot';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Power cycle a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function powerCycle(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'power_cycle';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Shutdown a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function shutdown(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'shutdown';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Power off a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function powerOff(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'power_off';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Power on a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function powerOn(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'power_on';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Restore a Droplet using an image.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     * @param $image
     *
     * @return $this
     */
    public function restore(DropletActionsRequest $dropletActionsRequest, $image)
    {
        $dropletActionsRequest->type = 'restore';
        $dropletActionsRequest->image = $image;
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Reset a password for a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function passwordReset(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'password_reset';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Resize a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     * @param $size
     * @param bool $disk
     *
     * @return $this
     */
    public function resize(DropletActionsRequest $dropletActionsRequest, $size, $disk = false)
    {
        $dropletActionsRequest->type = 'resize';
        $dropletActionsRequest->size = $size;
        $dropletActionsRequest->disk = $disk;
        $this->send($dropletActionsRequest);

        return $this;
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
