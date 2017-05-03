# Droplet Actions

** Available Methods**

* `enableBackups`
* `disableBackups`
* `reboot`
* `powerCycle`
* `shutdown`
* `powerOff`
* `powerOn`
* `restore`
* `passwordReset`
* `resize`
* `rebuild`
* `rename`
* `changeKernel`
* `enableIPv6`
* `enablePrivateNetworking`
* `snapshot`
* `retrieve`

You can chain some of the methods, but you must pass the request each time. This may end up changing, but the
API should remain the same.

## DropletActionsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `droplet_id`     | ID of the Droplet                 | string | *        |

Enable Backups
--------------

Enable backups on the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->enableBackups(new DropletActionsRequest('1234'));
```

Disable Backups
---------------

Disable backups on the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->disableBackups(new DropletActionsRequest('1234'));
```

Reboot a Droplet
----------------

Reboot the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->reboot(new DropletActionsRequest('1234'));
```

Power-cycle a Droplet
--------------------

Power-cycle the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->powerCycle(new DropletActionsRequest('1234'));
```

Shutdown a Droplet
------------------

Shutdown the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->shutdown(new DropletActionsRequest('1234'));
```

Power-Off a Droplet
-------------------

Power-Off the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->powerOff(new DropletActionsRequest('1234'));
```

Power-On a Droplet
--------------------

Power-On the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->powerOn(new DropletActionsRequest('1234'));
```
