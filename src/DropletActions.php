<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\DropletActions\ChangeKernelRequest;
use wappr\digitalocean\Requests\DropletActions\DisableBackupsRequest;
use wappr\digitalocean\Requests\DropletActions\EnableBackupsRequest;
use wappr\digitalocean\Requests\DropletActions\EnableIPv6Request;
use wappr\digitalocean\Requests\DropletActions\EnablePrivateNetworkingRequest;
use wappr\digitalocean\Requests\DropletActions\PasswordResetRequest;
use wappr\digitalocean\Requests\DropletActions\PowerCycleRequest;
use wappr\digitalocean\Requests\DropletActions\PowerOffRequest;
use wappr\digitalocean\Requests\DropletActions\PowerOnRequest;
use wappr\digitalocean\Requests\DropletActions\RebootRequest;
use wappr\digitalocean\Requests\DropletActions\RebuildRequest;
use wappr\digitalocean\Requests\DropletActions\RenameRequest;
use wappr\digitalocean\Requests\DropletActions\ResizeRequest;
use wappr\digitalocean\Requests\DropletActions\RestoreRequest;
use wappr\digitalocean\Requests\DropletActions\RetrieveRequest;
use wappr\digitalocean\Requests\DropletActions\ShutdownRequest;
use wappr\digitalocean\Requests\DropletActions\SnapshotRequest;

class DropletActions extends Resources
{
    public function enableBackups(EnableBackupsRequest $enableBackupsRequest)
    {
    }

    public function disableBackups(DisableBackupsRequest $disableBackupsRequest)
    {
    }

    public function reboot(RebootRequest $rebootRequest)
    {
    }

    public function powerCycle(PowerCycleRequest $powerCycleRequest)
    {
    }

    public function shutdown(ShutdownRequest $shutdownRequest)
    {
    }

    public function powerOff(PowerOffRequest $powerOffRequest)
    {
    }

    public function powerOn(PowerOnRequest $powerOnRequest)
    {
    }

    public function restore(RestoreRequest $restoreRequest)
    {
    }

    public function passwordReset(PasswordResetRequest $passwordResetRequest)
    {
    }

    public function resize(ResizeRequest $resizeRequest)
    {
    }

    public function rebuild(RebuildRequest $rebuildRequest)
    {
    }

    public function rename(RenameRequest $renameRequest)
    {
    }

    public function changeKernel(ChangeKernelRequest $changeKernelRequest)
    {
    }

    public function enableIPv6(EnableIPv6Request $enableIPv6Request)
    {
    }

    public function enablePrivateNetworking(EnablePrivateNetworkingRequest $enablePrivateNetworkingRequest)
    {
    }

    public function snapshot(SnapshotRequest $snapshotRequest)
    {
    }

    public function retrieve(RetrieveRequest $retrieveRequest)
    {
    }
}
