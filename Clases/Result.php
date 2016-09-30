<?php

namespace smsup\SmsupapiBundle\Clases;

class Result
{
    protected $httpcode;
    protected $result;

    public function __construct($httpcode, $result)
    {
        $this->httpcode = $httpcode;
        $this->result = $result;
    }

    public function getHttpcode()
    {
        return $this->httpcode;
    }

    public function getResult()
    {
        return $this->result;
    }
}
