<?php
# funciones

#sin parametros 
function saludo(){
 echo "hola <br>";
}
saludo();

#sin parametros 
#usamos el . para concatenar una var con una string
function despedida($adios){
  echo $adios."<br>";
 }
  
 despedida("chau!");

#funciones con retorno 
function retorno($retornar){

    return $retornar;
}


echo retorno("retornar")


?>