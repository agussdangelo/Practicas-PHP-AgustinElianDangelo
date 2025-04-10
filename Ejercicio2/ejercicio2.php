<?php
function binomioCuadradoPerfecto_a($a, $b) {
    return pow($a + $b, 2);
}

function binomioCuadradoPerfecto_b($a, $b) {
    return ($a * $a) + (2 * $a * $b) + ($b * $b);
}

?>
