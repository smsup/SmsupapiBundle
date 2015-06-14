<?php

namespace smsup\SmsupapiBundle\Clases;

class Sms {

	protected $texto;
	protected $numeros = array();
	protected $fechaenvio;
	protected $referencia = '';
	protected $remitente = '';

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

}
