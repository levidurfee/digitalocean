# Certificates

[DigitalOcean's docs on Certificates](https://developers.digitalocean.com/documentation/v2/#certificates)

## Create new cert

Upload a new cert that can be used by a load balancer for SSL termination.

### Example Usage

```php
<?php

use wappr\digitalocean\Certificates;
use wappr\digitalocean\Requests\Certificates\CreateNewCertificateRequest;

include '../vendor/autoload.php';

$certificates = new Certificates;
$result = $certificates->create(new CreateNewCertificateRequest(
    'name',
    'private_key',
    'leaf_cert',
    'cert_chain')
 );
var_dump($result->getStatusCode()); // 200
```

### CreateNewCertificateRequest properties

| Name                | Description                 | Type   | Required |
|---------------------|-----------------------------|--------|----------|
| `name`              | Name of cert                | string | *        |
| `private_key`       | PEM formatted private key   | string | *        |
| `leaf_certificate`  | PEM formatted public cert   | string | *        |
| `certificate_chain` | Full PEM trust chain for CA | string | *        |

## List all certs

List all of the certificates available on your DigitalOcean account.

### Example Usage

```php
<?php

use wappr\digitalocean\Certificates;
use wappr\digitalocean\Requests\Certificates\ListAllCertificatesRequest;

include '../vendor/autoload.php';

$certificates = new Certificates;
$result = $certificates->listAll(new ListAllCertificatesRequest);
var_dump($result->getStatusCode()); // 200
```

## Get information about a cert

Get information about an existing certificate.

### Example Usage

```php
<?php

use wappr\digitalocean\Certificates;
use wappr\digitalocean\Requests\Certificates\RetrieveCertificateRequest;

include '../vendor/autoload.php';

$certificates = new Certificates;
$result = $certificates->retrieve(new RetrieveCertificateRequest('certid'));
var_dump($result->getStatusCode()); // 200
```

## Delete a certificate

Delete an existing certificate.

### Example Usage

```php
<?php

use wappr\digitalocean\Certificates;
use wappr\digitalocean\Requests\Certificates\DeleteCertificateRequest;

include '../vendor/autoload.php';

$certificates = new Certificates;
$result = $certificates->delete(new DeleteCertificateRequest('certid'));
var_dump($result->getStatusCode()); // 204
```
