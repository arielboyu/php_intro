<?php
#CLase
#Una clase es un modelo que se utiliza para crear objetos que comparten
# un mismo comportamiento, estado e identidad
class Automovil {
    #PROPIEDADES(props que puede tener un obj)
    #si es private solo se puede usar en esta clase 
    public $marca;
    public $modelo;
    #METODO(algoritmo asociado a un obj que indica la capacidad de lo que este puede hacer)
    public function mostrar(){
        echo "<p> Auto $this->marca,modelo $this->modelo";
    }
}
#OBJETO entidad provista de metodos o mensajes a los cuales responen
# con propiedades con valores concretos
$a = new Automovil();
$a -> marca = "toyota";
$a -> modelo ="corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "honda";
$b -> modelo ="civic";
$b -> mostrar();

?>