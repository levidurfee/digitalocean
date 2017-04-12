<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;
use wappr\digitalocean\Requests\Droplets\CreateMultipleDropletsRequest;
use wappr\digitalocean\Requests\Droplets\DeleteByTagDropletsRequest;
use wappr\digitalocean\Requests\Droplets\DeleteDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListActionsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAllDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListAvailableKernelsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListBackupsDropletRequest;
use wappr\digitalocean\Requests\Droplets\ListByTagDropletRequest;
use wappr\digitalocean\Requests\Droplets\ListNeighborsDropletsRequest;
use wappr\digitalocean\Requests\Droplets\ListSnapshotsDropletRequest;
use wappr\digitalocean\Requests\Droplets\RetrieveDropletsRequest;

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
            ['name2', 'nyc2', '512mb', 'ubuntu'],
        ];

        foreach ($requests as $request) {
            $createDroplet = new CreateDropletsRequest($request[0], $request[1], $request[2], $request[3]);
            $response = $this->droplets->create($createDroplet);
            $this->assertEquals($response->getStatusCode(), 200);
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
     * @expectedExceptionCode 800
     */
    public function testCreateDropletSizeException()
    {
        new CreateDropletsRequest('name', 'nyc2', '1', 'ubuntu');
    }

    public function testSuccessfulRequests()
    {
        $responseCodes = [
            200,
            200,
            200,
            200,
            204,
            200,
            200,
            200,
            200,
            204,
            204,
            200,
        ];
        $mock = new MockHandler([
            new Response($responseCodes[0]),
            new Response($responseCodes[1]),
            new Response($responseCodes[2]),
            new Response($responseCodes[3]),
            new Response($responseCodes[4]),
            new Response($responseCodes[5]),
            new Response($responseCodes[6]),
            new Response($responseCodes[7]),
            new Response($responseCodes[8]),
            new Response($responseCodes[9]),
            new Response($responseCodes[10]),
            new Response($responseCodes[11]),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $certificates = new Droplets($client);

        $requests = [
            [
                'method' => 'create',
                'request' => new CreateDropletsRequest(
                    'name', 'nyc1', '512mb', 'ubuntu'
                ),
            ],
            [
                'method' => 'createMultiple',
                'request' => new CreateMultipleDropletsRequest(
                    ['name1', 'name2'], 'nyc2', '512mb', 'ubuntu'
                ),
            ],
            [
                'method' => 'retrieve',
                'request' => new RetrieveDropletsRequest('1234'),
            ],
            [
                'method' => 'listAll',
                'request' => new ListAllDropletsRequest,
            ],
            [
                'method' => 'listByTag',
                'request' => new ListByTagDropletRequest('webserver'),
            ],
            [
                'method' => 'listAvailableKernels',
                'request' => new ListAvailableKernelsDropletsRequest('1234'),
            ],
            [
                'method' => 'listSnapshots',
                'request' => new ListSnapshotsDropletRequest('1234'),
            ],
            [
                'method' => 'listBackups',
                'request' => new ListBackupsDropletRequest('1234'),
            ],
            [
                'method' => 'listActions',
                'request' => new ListActionsDropletsRequest('1234'),
            ],
            [
                'method' => 'delete',
                'request' => new DeleteDropletsRequest('1234'),
            ],
            [
                'method' => 'deleteByTag',
                'request' => new DeleteByTagDropletsRequest('tag'),
            ],
            [
                'method' => 'listNeighbors',
                'request' => new ListNeighborsDropletsRequest('1234'),
            ],
        ];

        $i = 0; // iterator
        foreach ($requests as $request) {
            $result = $certificates->{$request['method']}($request['request']);
            $this->assertEquals($result->getStatusCode(), $responseCodes[$i]);
            $this->assertInstanceOf(Response::class, $result);
            ++$i;
        }
    }
}
