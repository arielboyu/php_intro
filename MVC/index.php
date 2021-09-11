<?php
#en este archivos mostraremos la salida de las vistas al usuario 
#y tambien atraves de el enviaremos las acciones que el usuario envie 
#require() establece que el codigo del archivo invocado es requerido obligatoriamente
#require_once funciona igual salvo que impide la carga del archivo mas de una vez 
 #si corremos el codigo mas de una vez corremos el riesgo de redeclaraciones de variables 
require_once "controllers/controller.php";
require_once "models/model.php";
$mvc = new MvcController();
$mvc -> plantilla();
?>
