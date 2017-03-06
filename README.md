# DigitalOcean API client

[![Build Status](https://travis-ci.org/wappr/digitalocean.svg?branch=master)](https://travis-ci.org/wappr/digitalocean)
[![v0.19.0](https://img.shields.io/badge/version-v0.19.0-orange.svg)](https://packagist.org/packages/wappr/digitalocean)

A [DigitalOcean](https://m.do.co/c/97ced4f9088d) PHP client that uses [Guzzle](https://github.com/guzzle/guzzle) by default.

## Basic usage

You MUST set the `DO_API_TOKEN` environment variable set to your DigitalOcean API TOKEN.

Next you need to instantiate one of the resources that are listed below. Each resource has a method that 
will send a request to DigitalOcean. Those methods require a instantiated request class. The request class construct 
requires the fields required by DigitalOcean. By using a request class it is impossible to send a request without 
all the required data. There are sometimes optional fields that get evaluated when using the setter method.

```php
<?php
include 'vendor/autoload.php';
use wappr\digitalocean\Droplets;
use wappr\digitalocean\Requests\Droplets\CreateDropletsRequest;
$droplets = new Droplets;
$droplets->create(new CreateDropletsRequest('name', '512mb', 'nyc1', 'ubuntu-14-04-x64'));
```

## Resources

* [Actions](https://digitalocean.wappr.co/en/latest/actions/)
* [BlockStorage](https://digitalocean.wappr.co/en/latest/block-storage/)
* [BlockStorageActions](https://digitalocean.wappr.co/en/latest/block-storage-actions/)
* [Certificates](https://digitalocean.wappr.co/en/latest/certificates/)
* [Domains](https://digitalocean.wappr.co/en/latest/domains/)

## Help and docs

* [Documentation](https://digitalocean.wappr.co/en/latest/)
* [Issues](https://github.com/wappr/digitalocean/issues)
* [Contributing](https://github.com/wappr/digitalocean/blob/master/CONTRIBUTING.md)
