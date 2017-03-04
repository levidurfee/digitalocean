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
