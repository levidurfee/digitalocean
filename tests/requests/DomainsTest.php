<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\Domains\CreateDomainRequest;
use wappr\digitalocean\Requests\Domains\DeleteDomainRequest;
use wappr\digitalocean\Requests\Domains\ListAllDomainsRequest;
use wappr\digitalocean\Requests\Domains\RetrieveDomainRequest;

class DomainsTest extends \PHPUnit_Framework_TestCase
{
    public function testSuccessfulRequests()
    {
        $responseCodes = [
            200,
            200,
            200,
            200,
            204,
        ];
        $mock = new MockHandler([
            new Response($responseCodes[0]),
            new Response($responseCodes[1]),
            new Response($responseCodes[2]),
            new Response($responseCodes[3]),
            new Response($responseCodes[4]),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $certificates = new Domains($client);

        $requests = [
            [
                'method' => 'listAll',
                'request' => new ListAllDomainsRequest,
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRequest(
                    'example.com',
                    '127.0.0.1'
                ),
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRequest(
                    'example.net',
                    '::1'
                ),
            ],
            [
                'method' => 'retrieve',
                'request' => new RetrieveDomainRequest('example.com'),
            ],
            [
                'method' => 'delete',
                'request' => new DeleteDomainRequest('example.com'),
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
