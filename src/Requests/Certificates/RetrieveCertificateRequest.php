<?php

namespace wappr\digitalocean\Requests\Certificates;

use wappr\digitalocean\RequestContract;

/**
 * Class RetrieveCertificateRequest.
 */
class RetrieveCertificateRequest extends RequestContract
{
    /**
     * @var string
     */
    public $certificate_id;

    /**
     * RetrieveCertificateRequest constructor.
     *
     * @param string $certificate_id
     */
    public function __construct($certificate_id)
    {
        $this->certificate_id = $certificate_id;
    }
}
