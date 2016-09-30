<?php

namespace smsup\SmsupapiBundle\Clases;

use smsup\smsuplib;

class Sms
{
    protected $texto;
    protected $numeros = array();
    protected $fechaenvio;
    protected $referencia = '';
    protected $remitente = '';
    protected $codificacion = null;

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
        return $this;
    }

    public function getNumeros()
    {
        return $this->numeros;
    }

    public function setNumeros($numeros)
    {
        $this->numeros = $numeros;
        return $this;
    }

    public function getFechaenvio()
    {
        return $this->fechaenvio;
    }

    public function setFechaenvio(\Datetime $fechaenvio)
    {
        $this->fechaenvio = $fechaenvio;
        return $this;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
        return $this;
    }

    public function getRemitente()
    {
        return $this->remitente;
    }

    public function setRemitente($remitente)
    {
        $this->remitente = $remitente;
        return $this;
    }

    public function getCodificacion()
    {
        return $this->codificacion;
    }

    public function setCodificacion($codificacion)
    {
        if (in_array($codificacion, [smsuplib::GSM, smsuplib::UNICODE, smsuplib::AUTO])) {
            $this->codificacion = $codificacion;
        }
        return $this;
    }
}
