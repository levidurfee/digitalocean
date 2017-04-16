# Droplets

**Available methods**

* `create`
* `createMultiple`
* `retrieve`
* `listAll`
* `listByTag`
* `listAvailableKernels`
* `listSnapshots`
* `listBackups`
* `listActions`
* `delete`
* `deleteByTag`
* `listNeighbors`
* `listAllNeighbors`

Create a Droplet
----------------

Create a single Droplet.

### Example Usage

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->create(
    new CreateDropletsRequest(
        'web_server_1',     // name 
        'nyc2',             // region
        '512mb',            // size
        'ubuntu-14-04-x64'  // image
        )
);
var_dump($response->getStatusCode()); // 200
```

### CreateDropletsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `name`           | Name of the Droplet               | string | *        |
| `region`         | The region you want the Droplet   | string | *        |
| `size`           | The size of the Droplet           | string | *        |
| `image`          | The Operating System and version  | string | *        |
| `ssh_keys`       | SSH Keys you want installed       | array  |          |
| `backups`        | If you want backups enabled       | bool   |          |
| `ipv6`           | If you want IPv6 enabled          | bool   |          |
| `private_networking` | If you want private networking enabled | bool |   |
| `user_data`      | [Cloud Config](https://www.digitalocean.com/community/tutorials/an-introduction-to-cloud-config-scripting) or Bash script | string |  |
| `monitoring`     | If you want monitoring enabled    | bool   |          |
| `volume`         | Flat array of volumes to attach   | string |          |
| `tags`           | Tags associated with the Droplet  | array  |          |

Create multiple Droplets
------------------------

Create more than one Droplet using the same options. The `name` parameter
must be an array.

### Example Usage

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\CreateMultipleDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->createMultiple(
    new CreateMultipleDropletsRequest(
        ['ws1', 'ws2'],     // name 
        'nyc2',             // region
        '512mb',            // size
        'ubuntu-14-04-x64'  // image
        )
);
var_dump($response->getStatusCode()); // 200
```

### CreateDropletsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `name`           | Name of the Droplet               | array  | *        |
| `region`         | The region you want the Droplet   | string | *        |
| `size`           | The size of the Droplet           | string | *        |
| `image`          | The Operating System and version  | string | *        |
| `ssh_keys`       | SSH Keys you want installed       | array  |          |
| `backups`        | If you want backups enabled       | bool   |          |
| `ipv6`           | If you want IPv6 enabled          | bool   |          |
| `private_networking` | If you want private networking enabled | bool |   |
| `user_data`      | [Cloud Config](https://www.digitalocean.com/community/tutorials/an-introduction-to-cloud-config-scripting) or Bash script | string |  |
| `monitoring`     | If you want monitoring enabled    | bool   |          |
| `volume`         | Flat array of volumes to attach   | string |          |
| `tags`           | Tags associated with the Droplet  | array  |          |

Retrieve a Droplet
------------------

Get information on a Droplet using the Droplet ID.

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\RetrieveDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->retrieve(
    new RetrieveDropletsRequest('1234'/* droplet id */));
var_dump($response->getStatusCode()); // 200
```

### RetrieveDropletsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | The Droplet's ID                  | string | *        |
