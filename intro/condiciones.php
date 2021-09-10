<?php
#condiciones 
$a = 5 ;
$b = 10;
if($a > $b) {
    echo "a es mayor que b";
}
else if ($a === $b){
    echo "a es = a b";
}
else {
    echo "a es menor que b";
}

echo "<br></br>";
#switch
$dia = "lunes";
switch($dia){
     case "sabado" : 
     echo "estudiar php";
     break;
     case "viernes":
     echo "estudiar js";
     case "domingo":
     echo "estudiar react";
     break;
     default: echo "voy a la universidad";
}

echo "<br></br>";
# ciclo while 
$n = 1;

while($n <= 5) {
    echo $n;
     $n++;
}
#ciclo do while 
$p = 1;
do{
    echo $p;
    $p++;
}
while($p <= 5);

echo "<br></br>";
#ciclo for 
for($i = 1; $i <= 5; $i++){
    echo $i;
}
?>