<?php
class MvcController{
#---------PLANTILLA-----------
public function plantilla(){
    include "views/template.php";
  }

#---------USUARIO/RUTAS-----------
public function enlacesPaginasController(){
    $enlacesController = $_GET["action"];
    #utilizamos 2 veces :: para heredar la clase
    $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
    include($respuesta);
     }
   }
?>
