<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ClientAdapter
{
    /**
     * @var client
     */
    public $client;

    /**
     * @var bool
     */
    public $debug = false;

    /**
     * @var string
     */
    protected $version = '0.15.0';

    /**
     * @var string
     */
    protected $apiUrl = 'https://api.digitalocean.com';

    /**
     * @var string
     */
    protected $apiVersion = '2';

    /**
     * @var array|false|string
     */
    protected $apiToken;

    /**
     * ClientAdapter constructor.
     *
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        if (is_null($client)) {
            $this->client = new Client(['base_uri' => $this->apiUrl.'/v'.$this->apiVersion.'/']);
        } else {
            $this->client = $client;
        }

        $this->apiToken = getenv('DO_API_TOKEN');
    }

    /**
     * @param $endpoint
     * @param RequestContract $requestContract
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function post($endpoint, RequestContract $requestContract)
    {
        $request = [
            'auth' => [$this->apiToken, ':'],
            'json' => $requestContract->fetch(),
            'debug' => $this->debug,
            'headers' => [
                'User-Agent' => 'wappr\digitalocean:'.$this->version,
            ],
        ];

        try {
            $response = $this->client->request('POST', $endpoint, $request);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * @param $endpoint
     * @param RequestContract $requestContract
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function get($endpoint, RequestContract $requestContract)
    {
        $request = [
            'auth' => [$this->apiToken, ':'],
            'query' => [
                'page' => 1,
                'per_page' => 500,
                $requestContract->fetch(),
            ],
            'headers' => [
                'Content-Type' => 'application/json',
                'User-Agent' => 'wappr\digitalocean:'.$this->version,
            ],
            'debug' => $this->debug,
        ];

        try {
            $response = $this->client->request('GET', $endpoint, $request);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * @param $endpoint
     * @param RequestContract $requestContract
     *
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function delete($endpoint, RequestContract $requestContract)
    {
        $request = [
            'auth' => [$this->apiToken, ':'],
            'query' => [
                $requestContract->fetch(),
            ],
            'headers' => [
                'Content-Type' => 'application/json',
                'User-Agent' => 'wappr\digitalocean:'.$this->version,
            ],
            'debug' => $this->debug,
        ];

        try {
            $response = $this->client->request('DELETE', $endpoint, $request);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }
}
