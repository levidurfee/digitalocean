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

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\RetrieveDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->retrieve(new RetrieveDropletsRequest('1234'/* droplet id */));
var_dump($response->getStatusCode()); // 200
```

### RetrieveDropletsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | The Droplet's ID                  | string | *        |

List all Droplets
-----------------

This will list all the Droplets in your account.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\ListAllDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->listAll(new ListAllDropletsRequest);
var_dump($response->getStatusCode()); // 200
```

### ListAllDropletsRequest properties

None are required or accepted for this request.

List Droplets by Tag
--------------------

Find all the Droplets that have the tag you specify.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\ListByTagDropletRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->listByTag(new ListByTagDropletRequest('web_servers'/* tag */));
var_dump($response->getStatusCode()); // 200
```

### ListByTagDropletRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `tag`            | The tag you want to search        | string | *        |

List Available Kernels for a Droplet
------------------------------------

Get a list of the Linux kernels available for a Droplet.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\ListAvailableKernelsDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->listAvailableKernels(
    new ListAvailableKernelsDropletsRequest('1234'/* droplet id */)
);
var_dump($response->getStatusCode()); // 200
```

### ListAvailableKernelsDropletsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | The Droplet's ID                  | string | *        |

List Backups for a Snapshots
----------------------------

Retrieve backups associated with a Droplet.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\ListSnapshotsDropletRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->listSnapshots(
    new ListSnapshotsDropletRequest('1234'/* droplet id */)
);
var_dump($response->getStatusCode()); // 200
```

### ListSnapshotsDropletRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | The Droplet's ID                  | string | *        |

List Backups for a Droplet
--------------------------

Retrieve backups associated with a Droplet.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\ListBackupsDropletRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->listBackups(
    new ListBackupsDropletRequest('1234'/* droplet id */)
);
var_dump($response->getStatusCode()); // 200
```

### ListBackupsDropletRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | The Droplet's ID                  | string | *        |

List Actions performed on a Droplet
-----------------------------------

Retrieve a list of actions performed on a Droplet.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\ListActionsDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->listActions(
    new ListActionsDropletsRequest('1234'/* droplet id */)
);
var_dump($response->getStatusCode()); // 200
```

### ListActionsDropletsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | The Droplet's ID                  | string | *        |

Delete a Droplet
----------------

Permanently delete a Droplet. You can't undo this.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\DeleteDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->delete(
    new DeleteDropletsRequest('1234'/* droplet id */)
);
var_dump($response->getStatusCode()); // 200
```

### DeleteDropletsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | The Droplet's ID                  | string | *        |

Delete Droplets by Tag
----------------------

Permanently delete Droplets by their tag. You can't undo this.

### Example

```php
<?php

use \wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\DeleteByTagDropletsRequest;

include 'vendor/autoload.php';
$resource = new Droplets;
$response = $resource->deleteByTag(
    new DeleteByTagDropletsRequest('test_servers'/* tag name */)
);
var_dump($response->getStatusCode()); // 200
```

### DeleteByTagDropletsRequest properties

| Name             | Description                          | Type   | Required |
|------------------|--------------------------------------|--------|----------|
| `tag_name`       | The tag associated with the Droplets | string | *        |
