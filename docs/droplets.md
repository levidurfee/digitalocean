# Droplets

## Creating a Droplet

### Example 1

We are only passing the required parameters to the API.

```php
<?php

use wappr\digitalocean\Droplets;
use \wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;

include 'vendor/autoload.php';

$droplets = new Droplets;
$result = $droplets->create(
    new CreateDropletsRequest(
        'levi',  // name
        '512mb', // size
        'nyc3',  // region
        'ubuntu-14-04-x64' // image
    )
);
```

### Example 2

In this example we are adding a couple extra properties to pass to the API. This will create a Droplet
with `private_networking` and `monitoring` enabled.

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
