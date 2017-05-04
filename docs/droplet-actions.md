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
------------------

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

Restore a Droplet
-----------------

Restore the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->restore(new DropletActionsRequest('1234'), 'image');
```

Reset the password
------------------

Reset the password for the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->passwordReset(new DropletActionsRequest('1234'));
```

Resize a Droplet
----------------

Resize the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->resize(new DropletActionsRequest('1234'), '512mb', true);
```

Rebuild a Droplet
-----------------

Rebuild the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->rebuild(new DropletActionsRequest('1234'), 'image');
```

Rename a Droplet
----------------

Rename the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->rename(new DropletActionsRequest('1234'), 'new_name');
```

Change Droplet's Kernel
-----------------------

Change Droplet's Kernel. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->changeKernel(new DropletActionsRequest('1234'), '3.13.0-37-generic');
```

Enable IPv6 on a Droplet
------------------------

Enable IPv6 networking on a Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->enableIPv6(new DropletActionsRequest('1234'));
```

Enable Private Networking
-------------------------

Enable Private Networking for the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->enablePrivateNetworking(new DropletActionsRequest('1234'));
```

Take a Snapshot
---------------

Take a Snapshot for the specified Droplet. This method is chainable.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->snapshot(new DropletActionsRequest('1234'), 'just_in_case');
```

Retrieve an Action
------------------

Retrieve an action for the specified Droplet.

### Example Usage

```php
<?php

use \wappr\digitalocean\DropletActions;
use \wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;

include 'vendor/autoload.php';
$resource = new DropletActions;
$response = $resource->retrieve(new DropletActionsRequest('1234'), '12341234');
```
