# Block Storage Actions

[DigitalOcean's docs on Block Storage Actions](https://developers.digitalocean.com/documentation/v2/#block-storage-actions)

## Attach a Volume

Attach a Volume to a Droplet.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorageActions;
use wappr\digitalocean\Requests\BlockStorageActions\AttachVolumeRequest;

include '../vendor/autoload.php';

$blockStorageActions = new BlockStorageActions;
$result = $blockStorageActions->attach(new AttachVolumeRequest('1234', 1234));
var_dump($result->getStatusCode()); // 200
```

### AttachVolumeRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | int    | *        |
| `droplet_id`     | The Droplet ID              | string | *        |
| `region`         | Region of of Volume         | string |          |

### Throws

Will throw `InvalidArgumentException` is the region does not exist in the `RegionsHelper` class.

## Attach a Volume by name

Attach a volume to a droplet by using the volume's name.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorageActions;
use wappr\digitalocean\Requests\BlockStorageActions\AttachVolumeByNameRequest;

include '../vendor/autoload.php';

$blockStorageActions = new BlockStorageActions;
$result = $blockStorageActions->attachByName(new AttachVolumeByNameRequest('name', 1234));
var_dump($result->getStatusCode()); // 200
```

### AttachVolumeByNameRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_name`    | BlockStorage volume name    | string | *        |
| `droplet_id`     | The Droplet ID              | string | *        |
| `region`         | Region of of Volume         | string |          |

### Throws

Will throw `InvalidArgumentException` is the region does not exist in the `RegionsHelper` class.

## Remove a Volume

Remove (detach) a Volume to a Droplet.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorageActions;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveVolumeRequest;

include '../vendor/autoload.php';

$blockStorageActions = new BlockStorageActions;
$result = $blockStorageActions->remove(new RemoveVolumeRequest('1234', 1234));
var_dump($result->getStatusCode()); // 200
```

### RemoveVolumeRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | int    | *        |
| `droplet_id`     | The Droplet ID              | string | *        |
| `region`         | Region of of Volume         | string |          |

### Throws

Will throw `InvalidArgumentException` is the region does not exist in the `RegionsHelper` class.

### RemoveVolumeRequest methods

| Name        | Description                | Params   | Type     | Returns |
|-------------|----------------------------|----------|----------|---------|
| `setRegion` | Sets the `region` property | `region` | `string` | `$this` |

## Remove a Volume by name

Remove (detach) a Volume using it's name.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorageActions;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveVolumeByNameRequest;

include '../vendor/autoload.php';

$blockStorageActions = new BlockStorageActions;
$result = $blockStorageActions->removeByName(new RemoveVolumeByNameRequest('volume_name', 1234));
var_dump($result->getStatusCode()); // 200
```

### RemoveVolumeByNameRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | int    | *        |
| `droplet_id`     | The Droplet ID              | string | *        |
| `region`         | Region of of Volume         | string |          |

### Throws

Will throw `InvalidArgumentException` is the region does not exist in the `RegionsHelper` class.

### RemoveVolumeByNameRequest methods

| Name        | Description                | Params   | Type     | Returns |
|-------------|----------------------------|----------|----------|---------|
| `setRegion` | Sets the `region` property | `region` | `string` | `$this` |

## Resize a volume

Resize a volume. You'll need the volume ID.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorageActions;
use wappr\digitalocean\Requests\BlockStorageActions\ResizeVolumeRequest;

include '../vendor/autoload.php';

$blockStorageActions = new BlockStorageActions;
$result = $blockStorageActions->resize(new ResizeVolumeRequest('123', 1234));
var_dump($result->getStatusCode()); // 200
```

### ResizeVolumeRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | int    | *        |
| `size`           | The new volume size         | int    | *        |
| `region`         | Region of of Volume         | string |          |

### Throws

Will throw `InvalidArgumentException` is the region does not exist in the `RegionsHelper` class.

### ResizeVolumeRequest methods

| Name        | Description                | Params   | Type     | Returns |
|-------------|----------------------------|----------|----------|---------|
| `setRegion` | Sets the `region` property | `region` | `string` | `$this` |

## List all volume actions

To retrieve all actions that have been executed on a volume.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorageActions;
use wappr\digitalocean\Requests\BlockStorageActions\ListAllActionsRequest;

include '../vendor/autoload.php';

$blockStorageActions = new BlockStorageActions;
$result = $blockStorageActions->listAll(new ListAllActionsRequest('123'));
var_dump($result->getStatusCode()); // 200
```

### ResizeVolumeRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | int    | *        |

## Retrieve a volume action

Retrieve more information about a specific action.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorageActions;
use wappr\digitalocean\Requests\BlockStorageActions\RetrieveActionRequest;

include '../vendor/autoload.php';

$blockStorageActions = new BlockStorageActions;
$result = $blockStorageActions->retrieve(new RetrieveActionRequest('123', 1234));
var_dump($result->getStatusCode()); // 200
```

### RetrieveActionRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | int    | *        |
| `action_id`      | Action ID                   | int    | *        |
