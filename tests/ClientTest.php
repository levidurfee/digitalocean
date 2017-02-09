<?php

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\digitalocean\Client;
use wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;

class ClientTest extends PHPUnit_Framework_TestCase
{
    public function testInstantiate()
    {
        $mockResponse = '{"droplet": {"id": 3164494, "name": "example.com", "memory": 512, "vcpus": 1, "disk": 20, "locked": true, "status": "new", "kernel": {"id": 2233, "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic", "version": "3.13.0-37-generic"}, "created_at": "2014-11-14T16:36:31Z", "features": ["virtio"], "backup_ids": [], "snapshot_ids": [], "image": {}, "volume_ids": [], "size": {}, "size_slug": "512mb", "networks": {}, "region": {}, "tags": ["web"] }, "links": {"actions": [{"id": 36805096, "rel": "create", "href": "https://api.digitalocean.com/v2/actions/36805096"} ] } }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client();
        $client->httpClient = new GuzzleClient(['handler' => $handler]);

        $droplets = new Droplets($client);
        $droplets->create(new CreateDropletsRequest('deleteme', 'nyc1', '512mb', 'ubuntu-14-04-x64'));

        return true;
    }
}
