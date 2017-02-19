<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\Actions\ListAllActionsRequest;
use wappr\digitalocean\Requests\Actions\RetrieveActionRequest;

class ActionsTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
        ]);
        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);
    }

    public function testListAll()
    {
        $listAll = new ListAllActionsRequest;
        $actions = new Actions($this->client);
        $result = $actions->listAll($listAll);
        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRetrieve()
    {
        $retrieve = new RetrieveActionRequest(1234);
        $action = new Actions($this->client);
        $result = $action->retrieve($retrieve);
        $this->assertEquals($result->getStatusCode(), 200);
    }
}
