<?php

namespace wappr\digitalocean\Requests\Certificates;

use wappr\digitalocean\RequestContract;

class DeleteCertificateRequest extends RequestContract
{
    /**
     * @var string
     */
    public $certificate_id;

    /**
     * DeleteCertificateRequest constructor.
     *
     * @param $certificate_id
     */
    public function __construct($certificate_id)
    {
        $this->certificate_id = $certificate_id;
    }
}
