<?php

namespace smsup\SmsupapiBundle\Clases;

use smsup\smsuplib;

class SmsupSender {

	protected $apiId;
	protected $apiSecret;

	public function setApiid($apiId)
	{
		$this->apiId = $apiId;
	}

	public function setApisecret($apiSecret)
	{
		$this->apiSecret = $apiSecret;
	}

	public function getNewSms()
	{
		return new Sms;
	}

	public function enviarSms(Sms $sms)
	{
		$lib = $this->getSmsapilib();
		$respuesta = $lib->NuevoSms($sms->getTexto(), $sms->getNumeros(), $sms->getFechaenvio(), $sms->getReferencia(), $sms->getRemitente());
		return $this->setResult($respuesta);
	}

	public function eliminarSms($idsms)
	{
		$lib = $this->getSmsapilib();
		$respuesta = $lib->EliminarSMS($idsms);
		return $this->setResult($respuesta);
	}

	public function estadoSms($idsms)
	{
		$lib = $this->getSmsapilib();
		$respuesta = $lib->EstadoSMS($idsms);
		return $this->setResult($respuesta);
	}

	public function creditosDisponibles()
	{
		$lib = $this->getSmsapilib();
		$respuesta = $lib->CreditosDisponibles();
		return $this->setResult($respuesta);
	}

	public function resultadoPeticion($referencia)
	{
		$lib = $this->getSmsapilib();
		$respuesta = $lib->ResultadoPeticion($referencia);
		return $this->setResult($respuesta);
	}

	private function getSmsapilib()
	{
		return new smsuplib($this->apiId, $this->apiSecret);
	}

	private function setResult($respuesta)
	{
		return new Result($respuesta['httpcode'], $respuesta['resultado']);
	}

}
