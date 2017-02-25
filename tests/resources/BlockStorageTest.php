<?php

namespace wappr\digitalocean\tests\resources;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\CreateBlockStorageRequest;

class BlockStorageTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    /**
     * @var BlockStorage
     */
    protected $blockStorage;

    protected $statusCodes;

    public function setUp()
    {
        $this->statusCodes = [
            404,
            200,
            304,
        ];
        $mock = new MockHandler([
            new Response($this->statusCodes[0], []),
            new Response($this->statusCodes[1], []),
            new Response($this->statusCodes[2], []),
        ]);
        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);
        $this->blockStorage = new BlockStorage($this->client);
    }

    public function testBlockStorage()
    {
        foreach ($this->statusCodes as $code) {
            $request = new CreateBlockStorageRequest(100, 'test');
            $result = $this->blockStorage->create($request);
            $this->assertEquals($result->getStatusCode(), $code);
        }
    }
}
