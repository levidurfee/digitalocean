# Block Storage

[DigitalOcean's docs on BlockStorage](https://developers.digitalocean.com/documentation/v2/#block-storage).

## List all Volumes

List all the volumes associated with the account.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\ListAllBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$result = $blockStorage->listAll(new ListAllBlockStorageRequest);
var_dump($result->getStatusCode()); // 200
```

## Create a new volume

Create a new Block Storage volume.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\CreateBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$result = $blockStorage->create(new CreateBlockStorageRequest(100, 'test'));
var_dump($result->getStatusCode()); // 200
```

### CreateBlockStorageRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `size_gigabytes` | Size in gigabytes           | int    | *        |
| `name`           | Name of BlockStorage        | string | *        |
| `description`    | Description of Volume       | string |          |
| `region`         | Region of of Volume         | string |          |
| `snapshot_id`    | Create Volume from Snapshot | string |          |
