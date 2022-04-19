<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

if ($numero1!=0 && $numero2!=0) {
    echo "los numeros son distintos de 0";
}else{
    echo "alguno de los 2 numeros es igual a 0";
}

?>