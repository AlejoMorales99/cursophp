<?php

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];

echo "<table border=1 >";
echo    "<tr>";
echo        "<td> " . $nombre . "</td>";
echo        "<td> " . $edad . "</td>";
echo        "<td> " . $sexo . "</td>";
echo    "</tr>";
echo "</table>";  

if ($edad>=18 && $sexo==1 ) {
    echo "su nombre es ".$nombre."su edad es ".$edad."y su sexo es maculino";
}else{
    echo "error";
}

?>