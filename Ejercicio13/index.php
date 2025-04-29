<?php

// El true luego de la coma crea un array por cada objeto que se encuentre en config.ini
$config = parse_ini_file("../Ejercicio13/config.ini", true);

echo json_encode($config);

// Especifica el tamaño que tiene cada array
var_dump($config);
