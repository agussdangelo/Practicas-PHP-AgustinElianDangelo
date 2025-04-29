<?php

// Escribir un archivo

$archivo = fopen("archivo.txt", "w");
fwrite($archivo, "Facu;Tierra\n");
fclose($archivo);

// Leer ese archivo

$archivo = fopen("archivo.txt", "r");
echo fread($archivo, filesize("archivo.txt"));
fclose($archivo);
