<?php
#para comentar lineas utilizamos un # numeral.
# Tipos de variables 
# metodo var_dump nos devuelve el tipo de variable y sus valores 


#variable numerica
$numero = 5;
echo "esto es una variable: $numero";
var_dump($numero);
echo "<br></br>";

# variable texto 
$palabra = "palabra";
echo "esto es una variable: $palabra";
var_dump($palabra);
#variable Boleana
$boleana = true;
echo "esto es una variable boleana: $boleana";
echo "<br></br>";

#variable Arreglo 
$colores = array("rojo","verde");
echo "esto es una variable de tipo arreglo: $colores[0]";
echo "<br></br>";

#variable Arreglo con Propiedades(clave,valor) 
$verduras = array("verd1" => "lechuga", "verd2" => "cebolla");
echo "esto es una variable arreglo con propiedades: $verduras[verd1]";
echo "<br></br>";


#variables objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es una variable objeto: $frutas->fruta1"



?>