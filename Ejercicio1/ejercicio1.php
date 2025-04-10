<?php
function semaforo_a($color){
    $color = strtolower(trim($color));
    if ($color == "rojo") {
        return "Debe detener el vehículo";
    } elseif ($color == "amarillo") {
        return "Debe tener precaución";
    } elseif ($color == "verde") {
        return "Debe avanzar";
    } else {
        return "El estado es desconocido";
    }
}

function semaforo_b($color){
    return $color === "rojo" || $color === "ROJO" ? "Debe detener el vehiculo" : ($color === "amarillo" || $color === "AMARILLO" ? "Debe ser precavido" : ($color === "verde" || $color === "VERDE" ? "Debe avanzar" : "Estado desconocido"));
}

function semaforo_c($color){
    $color = strtolower($color);
    switch($color){
        case "rojo":
            return "Debe detener el vehículo";
        case "amarillo":
            return "Debe tener precaución";
        case "verde":
            return "Debe avanzar";
        default:
            return "El estado es desconocido";
    }
}

?>
