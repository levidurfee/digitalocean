<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\Certificates\CreateNewCertificateRequest;
use wappr\digitalocean\Requests\Certificates\DeleteCertificateRequest;
use wappr\digitalocean\Requests\Certificates\ListAllCertificatesRequest;
use wappr\digitalocean\Requests\Certificates\RetrieveCertificateRequest;

class CertificatesTest extends \PHPUnit_Framework_TestCase
{
    public function testSuccessfulRequests()
    {
        $responseCodes = [
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
                'request' => new ListAllCertificatesRequest,
            ],
            [
                'method' => 'retrieve',
                'request' => new RetrieveCertificateRequest(
                    '1234CertId'
                ),
            ],
            [
                'method' => 'delete',
                'request' => new DeleteCertificateRequest('123'),
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
