<?php

function sumatoria_a($array){
    $suma = 0;
    for ($i = 0; $i < count($array); $i++) {
        $suma += $array[$i];
    }
    return $suma;
}

function sumatoria_b($array){
    $suma = 0;
    foreach ($array as $valor) {
        $suma += $valor;
    }
    return $suma;
}

function sumatoria_c($array){
    $suma = 0;
    $i = 0;
    while ($i < count($array)) {
        $suma += $array[$i];
        $i++;
    }
    return $suma;
}

?>
