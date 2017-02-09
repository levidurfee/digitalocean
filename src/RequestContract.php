<?php

namespace wappr\digitalocean;

abstract class RequestContract
{
    public function fetch()
    {
        return get_object_vars($this);
    }
}
