<?php

$matriz = [
    [ 1,  2,  3,  4,  5],
    [ 6,  7,  8,  9, 10],
    [11, 12, 13, 14, 15],
    [16, 17, 18, 19, 20],
    [21, 22, 23, 24, 25]
];

// Imprimir matriz primera diagonal
for($i = 0; $i < count($matriz); $i++){
    echo $matriz[$i][$i] . " ";
}

echo "<br>";

// Imprimir matriz segunda diagonal
for($i = 0; $i < count($matriz); $i++){
    echo $matriz[$i][count($matriz) - $i - 1] . " ";
}

echo "<br>";

$suma = 0;

// Imprimir toda la matriz
for($i = 0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz); $j++){
        echo $matriz[$i][$j] . " ";
        $suma += $matriz[$i][$j];
    }
}

echo "<br>";

// La suma total de los valores
echo "La suma de la matriz es: " . $suma . "<br>";


