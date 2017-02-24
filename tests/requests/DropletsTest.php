<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;

class DropletsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Droplets
     */
    protected $droplets;

    public function setUp()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
            new Response(200, ['X-Foo' => 'Bar']),
        ]);
        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);
        $this->droplets = new Droplets($this->client);
    }

    public function testCreateDroplet()
    {
        $requests = [
            ['name', 'nyc1', '1gb', 'images'],
            ['name2', 'nyc2', '512mb', 'ubuntu']
        ];

        foreach($requests as $request) {
            $createDroplet = new CreateDropletsRequest($request[0], $request[1], $request[2], $request[3]);
            $this->droplets->create($createDroplet);
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Region must be a slug.
     * @expectedExceptionCode 200
     */
    public function testCreateDropletRegionException()
    {
        new CreateDropletsRequest('name', 'fail', '512mb', 'ubuntu');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Must be a proper size.
     * @expectedExceptionCode 900
     */
    public function testCreateDropletSizeException()
    {
        new CreateDropletsRequest('name', 'nyc2', '1', 'ubuntu');
    }
}
