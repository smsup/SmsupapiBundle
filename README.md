SmsupapiBundle
==============

[![Latest Stable Version](https://poser.pugx.org/smsup/smsup-api-bundle/v/stable)](https://packagist.org/packages/smsup/smsup-api-bundle)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/91963bc8-78b2-4367-a5e7-7a83e213526b/mini.png)](https://insight.sensiolabs.com/projects/91963bc8-78b2-4367-a5e7-7a83e213526b)

Bundle Symfony2 para el uso de la api de smsup.es para el envio de sms

Instalacion
-----------

Installar usando composer

``` bash
composer require smsup/smsup-api-bundle
```

Añadir a AppKernel.php

``` php
new smsup\SmsupapiBundle\SmsupapiBundle(),
```

Añadir los parametros necesarios a config.yml

``` bash
smsupapi:
    api_id: ID_USUARIO_API
    api_secret: CLAVE_SECRETA_API
```

Uso
---

Enviar nuevo sms:

``` php
$sender = $this->get('smsup.smsupapi.sender');
$sms = $sender->getNewSms()
				->setTexto('Texto del sms')
				->setNumeros(['000000000']);
$resul = $sender->enviarSms($sms);
if($resul->getHttpcode()===200){
	$idenvio = $resul->getResult()[0]['id'];
}
```

Eliminar envio sms:

``` php
$sender = $this->get('smsup.smsupapi.sender');
$sender->eliminarSms($idsms);
```

Obtener el estado de un sms:

``` php
$sender = $this->get('smsup.smsupapi.sender');
$sender->estadoSms($idsms);
```

Obtener los creditos disponibles en la cuenta:

``` php
$sender = $this->get('smsup.smsupapi.sender');
$sender->creditosDisponibles();
```

Obtener el resultado de una peticion anterior:

``` php
$sender = $this->get('smsup.smsupapi.sender');
$sender->resultadoPeticion($referencia);
```

[Ver mas datos sobre su uso](https://www.smsup.es/blog/bundle-para-enviar-sms-desde-symfony2/)
