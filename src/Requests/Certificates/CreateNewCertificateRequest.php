<?php

namespace wappr\digitalocean\Requests\Certificates;

use wappr\digitalocean\RequestContract;

class CreateNewCertificateRequest extends RequestContract
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $private_key;

    /**
     * @var string
     */
    public $leaf_certificate;

    /**
     * @var string
     */
    public $certificate_chain;

    /**
     * CreateNewCertificateRequest constructor.
     *
     * @param string $name
     * @param string $private_key
     * @param string $leaf_certificate
     * @param string $certificate_chain
     */
    public function __construct($name, $private_key, $leaf_certificate, $certificate_chain)
    {
        $this->name = $name;
        $this->private_key = $private_key;
        $this->leaf_certificate = $leaf_certificate;
        $this->certificate_chain = $certificate_chain;
    }
}
