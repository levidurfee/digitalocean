<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\BlockStorage\CreateBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\ListAllBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\ListSnapshotsBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\RetrieveBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorage\RetrieveByNameBlockStorageRequest;

class BlockStorageTest extends \PHPUnit_Framework_TestCase
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
        $listAll = new ListAllBlockStorageRequest;
        $blockStorage = new BlockStorage($this->client);
        $result = $blockStorage->listAll($listAll);
        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCreate()
    {
        $create = new CreateBlockStorageRequest(100, 'test');
        $blockStorage = new BlockStorage($this->client);
        $result = $blockStorage->create($create);
        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRetrieve()
    {
        $retrieve = new RetrieveBlockStorageRequest('1234');
        $blockStorage = new BlockStorage($this->client);
        $result = $blockStorage->retrieve($retrieve);
        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRetrieveByName()
    {
        $retrieve = new RetrieveByNameBlockStorageRequest('name', 'nyc1');
        $blockStorage = new BlockStorage($this->client);
        $result = $blockStorage->retrieveByName($retrieve);
        $this->assertEquals($result->getStatusCode(), 200);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Region must be a slug.
     * @expectedExceptionCode 200
     */
    public function testRetrieveByNameRegionException()
    {
        new RetrieveByNameBlockStorageRequest('name', 'New York');
    }

    public function testListSnapshots()
    {
        $request = new ListSnapshotsBlockStorageRequest(1234);
        $blockStorage = new BlockStorage($this->client);
        $result = $blockStorage->listSnapshots($request);
        $this->assertEquals($result->getStatusCode(), 200);
    }
}
