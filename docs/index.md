# wappr\digitalocean documentation

There is a class for each potential request type. Since some requests have required fields, 
the construct of the request class will require you to pass those parameters. You can then
dynamically create additional properties you would like to pass.

This library uses Guzzle as the HTTP client.

## installation

```bash
$ composer require wappr\digitalocean
```

## getting started

Each of the resources have their own class. Generally each resource has a few requests.
Each request has it's own class. Since the API requires some fields for the API calls,
each request class can require those via the construct. Below is an example of this.

```php
<?php

use wappr\digitalocean\Droplets;
use \wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;

include 'vendor/autoload.php';

$droplets = new Droplets;
$request = new CreateDropletsRequest(
                   'levi',  // name
                   '512mb', // size
                   'nyc3',  // region
                   'ubuntu-14-04-x64' // image
               );
$request->private_networking = true;
$request->monitoring = true;
$result = $droplets->create($request);
```
