<?php
class EnlacesPaginas {
    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel == "nosotros" || 
          $enlacesModel == "servicios" ||
          $enlacesModel == "inicio" ||
          $enlacesModel == "contactenos"){
            $module = "views/modules/".$enlacesModel.".php";
          }
        return $module;
    }
}
?>