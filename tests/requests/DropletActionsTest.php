<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;
use wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;
use wappr\digitalocean\Requests\Droplets\CreateMultipleDropletsRequest;
use wappr\digitalocean\Requests\Droplets\DeleteByTagDropletsRequest;
use wappr\digitalocean\Requests\Droplets\DeleteDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListActionsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAllDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAllNeighborsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAvailableKernelsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListBackupsDropletRequest;
use wappr\digitalocean\Requests\Droplets\ListByTagDropletRequest;
use wappr\digitalocean\Requests\Droplets\ListNeighborsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListSnapshotsDropletRequest;
use wappr\digitalocean\Requests\Droplets\RetrieveDropletsRequest;

class DropletActionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var DropletActions
     */
    protected $dropletActions;

    public function testSuccessfulRequests()
    {
        $methods = [
            'enableBackups'
        ];

        foreach($methods as $method) {
            $mock = new MockHandler([
                new Response(200)
            ]);
            $handler = HandlerStack::create($mock);
            $client = new Client(['handler' => $handler]);
            $dropletActions = new DropletActions($client);

            $result = $dropletActions->{$method}(new DropletActionsRequest('1234'));

            $this->assertInstanceOf(DropletActions::class, $result);
        }
    }
}
