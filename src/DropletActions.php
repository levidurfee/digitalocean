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

    /**
     * Rebuild a Droplet using an image.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     * @param string $image
     *
     * @return $this
     */
    public function rebuild(DropletActionsRequest $dropletActionsRequest, $image)
    {
        $dropletActionsRequest->type = 'rebuild';
        $dropletActionsRequest->image = $image;
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Rename a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     * @param string $name
     *
     * @return $this
     */
    public function rename(DropletActionsRequest $dropletActionsRequest, $name)
    {
        $dropletActionsRequest->type = 'rename';
        $dropletActionsRequest->name = $name;
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Change Droplet's kernel.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     * @param int $kernel
     *
     * @return $this
     */
    public function changeKernel(DropletActionsRequest $dropletActionsRequest, $kernel)
    {
        $dropletActionsRequest->type = 'change_kernel';
        $dropletActionsRequest->kernel = $kernel;
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Enable IPv6 for a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function enableIPv6(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'enable_ipv6';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Enable private networking for a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     *
     * @return $this
     */
    public function enablePrivateNetworking(DropletActionsRequest $dropletActionsRequest)
    {
        $dropletActionsRequest->type = 'enable_private_networking';
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Take a snapshot of a Droplet.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     * @param string $name
     *
     * @return $this
     */
    public function snapshot(DropletActionsRequest $dropletActionsRequest, $name)
    {
        $dropletActionsRequest->type = 'snapshot';
        $dropletActionsRequest->name = $name;
        $this->send($dropletActionsRequest);

        return $this;
    }

    /**
     * Retrieve an action.
     *
     * @param DropletActionsRequest $dropletActionsRequest
     * @param string $actionId
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function retrieve(DropletActionsRequest $dropletActionsRequest, $actionId)
    {
        return $this->clientAdapter->get(
            $this->endpoint.'/'.$dropletActionsRequest->droplet_id.'/actions/'.$actionId,
            $dropletActionsRequest
        );
    }

    private function send(DropletActionsRequest $dropletActionsRequest)
    {
        $this->clientAdapter->post(
            $this->endpoint.'/'.$dropletActionsRequest->droplet_id.'/actions',
            $dropletActionsRequest
        );
    }
}
