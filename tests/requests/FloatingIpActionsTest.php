<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\FloatingIpActions\FloatingIpActionsRequest;

class FloatingIpActionsTest extends \PHPUnit_Framework_TestCase
{
    public $client;
    public $floatingIpActions;

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
            new Response(200, ['X-Foo' => 'Bar']),
        ]);
        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);
        $this->floatingIpActions = new FloatingIpActions($this->client);
    }

    public function testAssign()
    {
        $request = new FloatingIpActionsRequest('assign');
        $response = $this->floatingIpActions->assign($request, '1.1.1.1');
        $this->assertEquals($response->getStatusCode(), 200);
    }
}
