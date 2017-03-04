<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\Certificates\CreateNewCertificateRequest;
use wappr\digitalocean\Requests\Certificates\ListAllCertificatesRequest;

class CertificatesTest extends \PHPUnit_Framework_TestCase
{
    public function testSuccessfulRequests()
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar']),
            new Response(200, ['X-Foo' => 'Bar']),
            new Response(200, ['X-Foo' => 'Bar']),
            new Response(200, ['X-Foo' => 'Bar']),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $certificates = new Certificates($client);

        $requests = [
            [
                'method' => 'create',
                'request' => new CreateNewCertificateRequest(
                    'name',
                    'private_key',
                    'leaf_cert',
                    'cert_chain'),
            ],
            [
                'method' => 'listAll',
                'request' => new ListAllCertificatesRequest()
            ]
        ];

        foreach ($requests as $request) {
            $result = $certificates->{$request['method']}($request['request']);
            $this->assertEquals($result->getStatusCode(), 200);
            $this->assertInstanceOf(Response::class, $result);
        }
    }
}
