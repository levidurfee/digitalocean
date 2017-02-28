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

## Retrieve an existing volume

Get information about an existing block storage volume.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\RetrieveBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$retrieve = new RetrieveBlockStorageRequest('1234');
$result = $blockStorage->retrieve($retrieve);
var_dump($result->getStatusCode()); // 200
```

### RetrieveBlockStorageRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | string | *        |

## Retrieve an existing volume by name

Retrieve BlockStorage by name and region.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\RetrieveByNameBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$retrieve = new RetrieveByNameBlockStorageRequest('name', 'nyc2');
$result = $blockStorage->retrieveByName($retrieve);
var_dump($result->getStatusCode()); // 200
```

### RetrieveBlockStorageRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `name`           | Name of volume              | string | *        |
| `region`         | One of the existing regions | string | *        |


### Throws

Will throw `InvalidArgumentException` is the region does not exist in the `RegionsHelper` class.

## List snapshots for volume

Retrieve information about snapshots for a specific block storage volume.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\ListSnapshotsBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$request = new ListSnapshotsBlockStorageRequest(1234);
$result = $blockStorage->listSnapshots($request);
var_dump($result->getStatusCode()); // 200
```

### ListSnapshotsBlockStorageRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | string | *        |

## Create snapshot of volume

Create a snapshot of a block storage volume.

### Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\CreateSnapshotBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$request = new CreateSnapshotBlockStorageRequest(1234, 'thesnap');
$result = $blockStorage->createSnapshot($request);
var_dump($result->getStatusCode()); // 200
```

### CreateSnapshotBlockStorageRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | string | *        |
| `name`           | Name of the snapshot        | string | *        |

## Delete a volume

## Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\DeleteBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$request = new DeleteBlockStorageRequest(1234);
$result = $blockStorage->delete($request);
var_dump($result->getStatusCode()); // 200
```

### DeleteBlockStorageRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `volume_id`      | BlockStorage volume id      | string | *        |

## Delete a volume by name

Delete a volume using the name and region.

**Region must be an actual slug or it will throw an InvalidArgumentException**

## Example Usage

```php
<?php

use wappr\digitalocean\BlockStorage;
use wappr\digitalocean\Requests\BlockStorage\DeleteByNameBlockStorageRequest;

include '../vendor/autoload.php';

$blockStorage = new BlockStorage;
$request = new DeleteByNameBlockStorageRequest('name', 'nyc1');
$result = $blockStorage->deleteByName($request);
var_dump($result->getStatusCode()); // 204
```

### DeleteBlockStorageRequest properties

| Name             | Description                 | Type   | Required |
|------------------|-----------------------------|--------|----------|
| `name`           | Name of the volume          | string | *        |
| `region`         | Region of the volume        | string | *        |

### Throws

Will throw `InvalidArgumentException` is the region does not exist in the `RegionsHelper` class.
