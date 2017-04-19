<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

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

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
            new Response(204, []),
        ]);
        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);
        $this->dropletActions = new DropletActions($this->client);
    }

    public function testSuccessfulRequests()
    {
        $methods = [
            'enableBackups',
            'disableBackups',
            'reboot',
            'powerCycle',
            'shutdown',
            'powerOff',
            'powerOn',
            'passwordReset',
            //'resize', // @todo add test for this
            //'rebuild', // @todo add test for this
            //'rename', // @todo add test for this
            //'changeKernel', // @todo add test for this
            'enableIPv6',
            'enablePrivateNetworking',
            //'snapshot', // @todo add test for this
            //'retrieve', // @todo add test for this
        ];

        foreach ($methods as $method) {
            $mock = new MockHandler([
                new Response(200),
            ]);
            $handler = HandlerStack::create($mock);
            $client = new Client(['handler' => $handler]);
            $dropletActions = new DropletActions($client);

            $result = $dropletActions->{$method}(new DropletActionsRequest('1234'));

            $this->assertInstanceOf(DropletActions::class, $result);
        }
    }

    public function testRestore()
    {
        $request = new DropletActionsRequest('1123');
        $result = $this->dropletActions->restore($request, '1234'/* image id */);
        $this->assertInstanceOf(DropletActions::class, $result);
    }
}
