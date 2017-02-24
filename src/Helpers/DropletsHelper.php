<?php

namespace wappr\digitalocean\Helpers;

class DropletsHelper
{
    /* sizes */
    const SIZE_512 = '512mb';
    const SIZE_1GB = '1gb';

    public static $sizes = [
        DropletsHelper::SIZE_512,
        DropletsHelper::SIZE_1GB,
    ];

    /* images */
    const IMAGE_FEDORA_LATEST = 'fedora-20-x64';

    public static function checkSizes($size)
    {
        if (in_array($size, self::$sizes)) {
            return true;
        }

        return false;
    }
}
