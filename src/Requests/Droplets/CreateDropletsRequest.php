<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\RequestContract;

/**
 * Class CreateDropletsRequest.
 */
class CreateDropletsRequest extends RequestContract
{
    /* required */
    public $name;
    public $region;
    public $size;
    public $images;

    /* optional */
    public $ssh_keys;
    public $backups;
    public $ipv6;
    public $private_networking;
    public $user_data;
    public $monitoring;
    public $volume;
    public $tags;

    /**
     * CreateDropletsRequest constructor.
     *
     * @param $name
     * @param $region
     * @param $size
     * @param $images
     */
    public function __construct($name, $region, $size, $images)
    {
        $this->name = $name;
        $this->region = $region;
        $this->size = $size;
        $this->images = $images;

        return $this;
    }

    /**
     * @param mixed $backups
     *
     * @return CreateDropletsRequest
     */
    public function setBackups($backups)
    {
        $this->backups = $backups;

        return $this;
    }

    /**
     * @param mixed $ipv6
     *
     * @return CreateDropletsRequest
     */
    public function setIpv6($ipv6)
    {
        $this->ipv6 = $ipv6;

        return $this;
    }

    /**
     * @param mixed $private_networking
     *
     * @return CreateDropletsRequest
     */
    public function setPrivateNetworking($private_networking)
    {
        $this->private_networking = $private_networking;

        return $this;
    }

    /**
     * @param mixed $user_data
     *
     * @return CreateDropletsRequest
     */
    public function setUserData($user_data)
    {
        $this->user_data = $user_data;

        return $this;
    }

    /**
     * @param mixed $monitoring
     *
     * @return CreateDropletsRequest
     */
    public function setMonitoring($monitoring)
    {
        $this->monitoring = $monitoring;

        return $this;
    }

    /**
     * @param mixed $volume
     *
     * @return CreateDropletsRequest
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * @param mixed $tags
     *
     * @return CreateDropletsRequest
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param mixed $ssh_keys
     *
     * @return CreateDropletsRequest
     */
    public function setSshKeys($ssh_keys)
    {
        $this->ssh_keys = $ssh_keys;

        return $this;
    }
}
