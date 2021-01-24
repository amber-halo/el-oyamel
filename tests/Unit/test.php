<?php
$cadena = 'hola, "muy, buenas, jeejbuenas", jejej';
$cadenas = preg_split("/,/", $cadena);
foreach ($cadenas as $dato) {
    echo $dato."\n";
}
$cadena = str_replace('"', "", $cadena);
echo $cadena;
?>
