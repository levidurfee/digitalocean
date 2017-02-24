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
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Actions
     */
    protected $actions;

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
        ]);
        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);
        $this->actions = new Actions($this->client);
    }

    public function testListAll()
    {
        $listAll = new ListAllActionsRequest;

        $result = $this->actions->listAll($listAll);
        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRetrieve()
    {
        $retrieve = new RetrieveActionRequest(1234);
        $result = $this->actions->retrieve($retrieve);
        $this->assertEquals($result->getStatusCode(), 200);
    }
}
