<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;
use wappr\digitalocean\Requests\DomainRecords\ListAllDomainRecordsRequest;
use wappr\digitalocean\Requests\DomainRecords\RetrieveDomainRecordsRequest;

class DomainRecordsTest extends \PHPUnit_Framework_TestCase
{
    public function testListAllDomainRecordsRequest()
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
                'method' => 'listAll',
                'request' => new ListAllDomainRecordsRequest('example.com'),
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

    public function testCreateDomainRecordsRequestSuccessful()
    {
        $responseCodes = [
            200,
            200,
            200,
            200,
            200,
            200,
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
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $domainRecords = new DomainRecords($client);

        $requests = [
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'A', 'test', '127.0.0.1'),
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'AAAA', 'test', '127.0.0.1'),
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'CNAME', 'test', 'example.com'),
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'TXT', 'name', 'data'),
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'MX', null, 'data', '10'),
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'NS', null, 'data'),
            ],
            [
                'method' => 'create',
                'request' => new CreateDomainRecordsRequest('example.com', 'SRV', 'data', '100', '100', '990', 900),
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

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage That is not an allowed type.
     * @expectedExceptionCode 501
     */
    public function testCreateRecordInvalidTypeException()
    {
        new CreateDomainRecordsRequest('example.com', 'NOPE', 'test', '127.0.0.1');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage name is required for A
     * @expectedExceptionCode 500
     */
    public function testACreateRecordNameMissingParams()
    {
        new CreateDomainRecordsRequest('example.com', 'A', '');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage data is required for A
     * @expectedExceptionCode 500
     */
    public function testCAreateRecordDataMissingParams()
    {
        new CreateDomainRecordsRequest('example.com', 'A', 'name');
    }

    public function testRetrieveRecordRequest()
    {
        $mock = new MockHandler([
            new Response(200),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        $domainRecords = new DomainRecords($client);
        $response = $domainRecords->retrieve(
            new RetrieveDomainRecordsRequest('example.com', 1234)
        );

        $this->assertEquals($response->getStatusCode(), 200);
        $this->assertInstanceOf(Response::class, $response);
    }
}
