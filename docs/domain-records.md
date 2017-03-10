# Domain Records

**Available methods**

* `listAll`
* `create`
* `retrieve`
* `update`
* `delete`

List all domain records
-----------------------

Retrieve a list of all the domain records for a domain.

### Example Usage

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\ListAllDomainRecordsRequest;

include 'vendor/autoload.php';
$resource = new DomainRecords;
$response = $resource->listAll(new ListAllDomainRecordsRequest('example.com'));
var_dump($response->getStatusCode()); // 200
```

### ListAllDomainRecordsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `domain_name`    | Domain name of the records        | string | *        |

Create a new domain record
--------------------------

Create a new record for a domain.

### Example Usage

#### Creating an "A" record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new CreateDomainRecordsRequest('example.com', 'A', 'test', '127.0.0.1');

$resource = new DomainRecords;
$response = $resource->create($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating an IPv6 record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new CreateDomainRecordsRequest('example.com', 'AAAA', 'test', '127.0.0.1');

$resource = new DomainRecords;
$response = $resource->create($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a CNAME record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new CreateDomainRecordsRequest('example.com', 'CNAME', 'test', 'example.com');

$resource = new DomainRecords;
$response = $resource->create($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a TXT record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new CreateDomainRecordsRequest('example.com', 'TXT', 'name', 'data');

$resource = new DomainRecords;
$response = $resource->create($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a MX record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new CreateDomainRecordsRequest('example.com', 'MX', null, 'data', '10');

$resource = new DomainRecords;
$response = $resource->create($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a NS record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new CreateDomainRecordsRequest('example.com', 'NS', null, 'data');

$resource = new DomainRecords;
$response = $resource->create($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a SRV record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\CreateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new CreateDomainRecordsRequest('example.com', 'SRV', 'data', '100', '100', '990', 900);

$resource = new DomainRecords;
$response = $resource->create($record);
var_dump($response->getStatusCode()); // 200
```

### CreateDomainRecordsRequest properties

| Name             | Description                         | Type   | Required |
|------------------|-------------------------------------|--------|----------|
| `domain_name`    | Domain name of the record           | string | *        |
| `type`           | Type of the record to create        | string | *        |
| `name`           | Host name, alias, or service        | string |          |
| `data`           | Data for record                     | string |          |
| `priority`       | Priority of the host                | int    |          |
| `port`           | Port for the service                | int    |          |
| `weight`         | Weight of record with same priority | int    |          | 

Different types of records require different types of properties. Please refer to 
[DigitalOcean's Create a new Domain Record](https://developers.digitalocean.com/documentation/v2/#create-a-new-domain-record)

Retrieve information about an existing record
---------------------------------------------

Retrieve information about a specific domain record.

### Example Usage

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\RetrieveDomainRecordsRequest;

include 'vendor/autoload.php';
$resource = new DomainRecords;
$response = $resource->retrieve(new RetrieveDomainRecordsRequest('example.com', 1234));
var_dump($response->getStatusCode()); // 200
```

### RetrieveDomainRecordsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `domain_name`    | Domain name of the records        | string | *        |
| `record_id`      | ID of the record                  | int    |          |

Update an existing domain record
--------------------------------

Change the data of an existing domain record.

### Example Usage

#### Updating an "A" record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new UpdateDomainRecordsRequest(1234, 'example.com', 'A', 'test', '127.0.0.1');

$resource = new DomainRecords;
$response = $resource->update($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating an IPv6 record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new UpdateDomainRecordsRequest(1234, 'example.com', 'AAAA', 'test', '127.0.0.1');

$resource = new DomainRecords;
$response = $resource->update($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a CNAME record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new UpdateDomainRecordsRequest(1234, 'example.com', 'CNAME', 'test', 'example.com');

$resource = new DomainRecords;
$response = $resource->update($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a TXT record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new UpdateDomainRecordsRequest(1234, 'example.com', 'TXT', 'name', 'data');

$resource = new DomainRecords;
$response = $resource->update($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a MX record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new UpdateDomainRecordsRequest(1234, 'example.com', 'MX', null, 'data', '10');

$resource = new DomainRecords;
$response = $resource->update($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a NS record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new UpdateDomainRecordsRequest(1234, 'example.com', 'NS', null, 'data');

$resource = new DomainRecords;
$response = $resource->update($record);
var_dump($response->getStatusCode()); // 200
```

#### Creating a SRV record

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;

include 'vendor/autoload.php';

$record = new UpdateDomainRecordsRequest(1234, 'example.com', 'SRV', 'data', '100', '100', '990', 900);

$resource = new DomainRecords;
$response = $resource->update($record);
var_dump($response->getStatusCode()); // 200
```

### UpdateDomainRecordsRequest properties

| Name             | Description                         | Type   | Required |
|------------------|-------------------------------------|--------|----------|
| `domain_name`    | Domain name of the record           | string | *        |
| `type`           | Type of the record to create        | string | *        |
| `name`           | Host name, alias, or service        | string |          |
| `data`           | Data for record                     | string |          |
| `priority`       | Priority of the host                | int    |          |
| `port`           | Port for the service                | int    |          |
| `weight`         | Weight of record with same priority | int    |          | 

Different types of records require different types of properties. Please refer to 
[DigitalOcean's Create a new Domain Record](https://developers.digitalocean.com/documentation/v2/#create-a-new-domain-record)

Delete a domain record
----------------------

Delete an existing domain record.

### Example Usage

```php
<?php

use \wappr\digitalocean\DomainRecords;
use wappr\digitalocean\Requests\DomainRecords\DeleteDomainRecordsRequest;

include 'vendor/autoload.php';
$resource = new DomainRecords;
$response = $resource->delete(new DeleteDomainRecordsRequest('example.com', 1234));
var_dump($response->getStatusCode()); // 200
```

### DeleteDomainRecordsRequest properties

| Name             | Description                       | Type   | Required |
|------------------|-----------------------------------|--------|----------|
| `domain_name`    | Domain name of the records        | string | *        |
| `record_id`      | ID of the record                  | int    |          |
