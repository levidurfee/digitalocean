# Domains

**Available methods**

* `listAll`
* `create`
* `retrieve`
* `delete`

List all domains
----------------

Retrieve a list of all the domains in the account.

### Example Usage

```php
<?php

use \wappr\digitalocean\Domains;
use wappr\digitalocean\Requests\Domains\ListAllDomainsRequest;

include 'vendor/autoload.php';
$resource = new Domains;
$response = $resource->listAll(new ListAllDomainsRequest);
var_dump($response->getStatusCode()); // 200
```

### ListAllDomainsRequest properties

**None**.

Create a new domain
-------------------

Add a new domain to the account.

### Example Usage

```php
<?php

use \wappr\digitalocean\Domains;
use wappr\digitalocean\Requests\Domains\CreateDomainRequest;

include 'vendor/autoload.php';
$resource = new Domains;
$response = $resource->create(new CreateDomainRequest('example.com', '127.0.0.1'));
var_dump($response->getStatusCode()); // 200
```

### CreateDomainRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `name`           | Name of the domain                | string | *        |
| `ip_address`     | IP address associated with domain | string | *        |

Retrieve an existing domain
---------------------------

Get details about a certain domain in the account.

### Example Usage

```php
<?php

use \wappr\digitalocean\Domains;
use wappr\digitalocean\Requests\Domains\RetrieveDomainRequest;

include 'vendor/autoload.php';
$resource = new Domains;
$response = $resource->retrieve(new RetrieveDomainRequest('example.com'));
var_dump($response->getStatusCode()); // 200
```

### RetrieveDomainRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `name`           | Name of the domain                | string | *        |

Delete a domain
---------------

Remove a domain from the account.

### Example Usage

```php
<?php

use \wappr\digitalocean\Domains;
use wappr\digitalocean\Requests\Domains\DeleteDomainRequest;

include 'vendor/autoload.php';
$resource = new Domains;
$response = $resource->delete(new DeleteDomainRequest('example.com'));
var_dump($response->getStatusCode()); // 204
```

### DeleteDomainRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `name`           | Name of the domain                | string | *        |
