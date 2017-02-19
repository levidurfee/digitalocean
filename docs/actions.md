# Actions

## List all Actions

List all the actions that have been executed on the current account.

### Example Usage

```php
<?php

use \wappr\digitalocean\Actions;
use \wappr\digitalocean\Requests\Actions\ListAllActionsRequest;

include '../vendor/autoload.php';

$actions = new Actions;
$result = $actions->listAll(new ListAllActionsRequest);
var_dump($result->getStatusCode()); // 200
```

[DigitalOcean List all Action docs](https://developers.digitalocean.com/documentation/v2/#list-all-actions)

## Retrieve an existing Action

Get more information about a specific action that was executed.

### Example Usage

```php
<?php

use \wappr\digitalocean\Actions;
use \wappr\digitalocean\Requests\Actions\RetrieveActionRequest;

include '../vendor/autoload.php';

$actions = new Actions;
$result = $actions->retrieve(new RetrieveActionRequest(1234));
var_dump($result->getStatusCode()); // 200
```

[DigitalOcean Retrieve existing Action docs](https://developers.digitalocean.com/documentation/v2/#retrieve-an-existing-action)
