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

    public function testSuccessfulRequests()
    {
        $methods = [
            'enableBackups',
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
}
