# Droplets

```php
<?php

use wappr\digitalocean\Droplets;

include 'vendor/autoload.php';

$droplets = new Droplets;
$result = $droplets->create(
    new \wappr\digitalocean\Requests\Droplets\CreateDropletsRequest(
        'levi',  // name
        '512mb', // size
        'nyc3',  // region
        'ubuntu-14-04-x64' // image
    )
);
```
