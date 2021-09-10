<?php

#codigo imperativo 

$automovil1 = (object)["marca"=>"toyota", "modelo"=>"corolla"];
$automovil2 = (object)["marca"=>"honda", "modelo"=>"civic"];

function mostrar($automovil){

    echo"<p> auto : $automovil->marca,modelo $automovil->modelo</p>";
}
mostrar($automovil1);
mostrar($automovil2);
?>