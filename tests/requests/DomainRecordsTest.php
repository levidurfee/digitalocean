<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;
use wappr\digitalocean\Requests\Domains\CreateDomainRequest;

class DomainRecordsTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateDomainSuccessfulRecords()
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
        $domainRecords = new DomainRecords($client);

        $requests = [
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'A', 'test')
            ],
        ];

        $i = 0; // iterator
        foreach ($requests as $request) {
            $result = $domainRecords->{$request['method']}($request['request']);
            $this->assertEquals($result->getStatusCode(), $responseCodes[$i]);
            $this->assertInstanceOf(Response::class, $result);
            ++$i;
        }
    }
}
