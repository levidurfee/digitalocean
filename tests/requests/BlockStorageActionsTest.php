<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\BlockStorageActions\AttachVolumeByNameRequest;
use wappr\digitalocean\Requests\BlockStorageActions\AttachVolumeRequest;
use wappr\digitalocean\Requests\BlockStorageActions\ListAllActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveVolumeByNameRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveVolumeRequest;
use wappr\digitalocean\Requests\BlockStorageActions\ResizeVolumeRequest;

class BlockStorageActionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var BlockStorageActions
     */
    protected $blockStorageActions;

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
            new Response(204, []),
        ]);
        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);
        $this->blockStorageActions = new BlockStorageActions($this->client);
    }

    public function testAttachVolumeRequest()
    {
        $request = new AttachVolumeRequest('1123', 1234);
        $request->setRegion('nyc1');
        $result = $this->blockStorageActions->attach($request);
        $this->assertEquals($result->getStatusCode(), 200);
        $this->assertInstanceOf(Response::class, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Region must be a slug.
     * @expectedExceptionCode 200
     */
    public function testAttachVolumeRequestRegionException()
    {
        $request = new AttachVolumeRequest('1234', 1234);
        $request->setRegion('new york');
    }

    public function testAttachVolumeByNameRequest()
    {
        $request = new AttachVolumeByNameRequest('name', 1234);
        $request->setRegion('nyc1');
        $result = $this->blockStorageActions->attachByName($request);
        $this->assertEquals($result->getStatusCode(), 200);
        $this->assertInstanceOf(Response::class, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Region must be a slug.
     * @expectedExceptionCode 200
     */
    public function testAttachVolumeByNameRequestRegionException()
    {
        (new AttachVolumeByNameRequest('1234', 1234))->setRegion('new york');
    }

    public function testRemoveVolumeRequest()
    {
        $request = new RemoveVolumeRequest('1123', 1234);
        $request->setRegion('nyc1');
        $result = $this->blockStorageActions->remove($request);
        $this->assertEquals($result->getStatusCode(), 200);
        $this->assertInstanceOf(Response::class, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Region must be a slug.
     * @expectedExceptionCode 200
     */
    public function testRemoveVolumeRequestRegionException()
    {
        (new RemoveVolumeRequest('1234', 1234))->setRegion('new york');
    }

    public function testRemoveVolumeByNameRequest()
    {
        $request = new RemoveVolumeByNameRequest('1123', 1234);
        $request->setRegion('nyc1');
        $result = $this->blockStorageActions->removeByName($request);
        $this->assertEquals($result->getStatusCode(), 200);
        $this->assertInstanceOf(Response::class, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Region must be a slug.
     * @expectedExceptionCode 200
     */
    public function testRemoveVolumeByNameRequestRegionException()
    {
        (new RemoveVolumeByNameRequest('1234', 1234))->setRegion('new york');
    }

    public function testResizeVolume()
    {
        $request = new ResizeVolumeRequest('1234', 100);
        $request->setRegion('nyc1');
        $result = $this->blockStorageActions->resize($request);
        $this->assertEquals($result->getStatusCode(), 200);
        $this->assertInstanceOf(Response::class, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Region must be a slug.
     * @expectedExceptionCode 200
     */
    public function TestResizeVolumeRegionException()
    {
        (new ResizeVolumeRequest('1234', 1234))->setRegion('new york');
    }

    public function testListAll()
    {
        $request = new ListAllActionsRequest('1234');
        $result = $this->blockStorageActions->listAll($request);
        $this->assertEquals($result->getStatusCode(), 200);
        $this->assertInstanceOf(Response::class, $result);
    }
}
