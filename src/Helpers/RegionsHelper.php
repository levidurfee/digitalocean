<?php

namespace wappr\digitalocean\Helpers;

class RegionsHelper
{
    public static $regions = [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1",
        "lon1",
        "nyc3",
        "ams3",
    ];

    public static function check($region)
    {
        if(in_array($region, self::$regions)) {
            return true;
        }

        return false;
    }
}
