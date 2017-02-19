# Block Storage

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

[DigitalOcean List all Volumes docs](https://developers.digitalocean.com/documentation/v2/#list-all-block-storage-volumes)
