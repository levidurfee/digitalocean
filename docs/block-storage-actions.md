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
