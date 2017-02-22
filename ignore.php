<?php

include 'vendor/autoload.php';
$create = new \wappr\digitalocean\Requests\BlockStorage\CreateBlockStorageRequest(100, 'name');
$create->region = 'hello';
