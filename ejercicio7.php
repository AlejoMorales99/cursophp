<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if ($numero1>0 || $numero2>0) {
    echo "los numeros ingresados son ".$numero1." y ".$numero2;
}else{
    echo "ninguno de los numeros es positivo";
}

?>