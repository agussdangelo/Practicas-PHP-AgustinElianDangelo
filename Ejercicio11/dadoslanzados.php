<?php
$suma = 0;
$resultados = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dados'])) {
    $cantidad = intval($_POST['dados']);

    for ($i = 0; $i < $cantidad; $i++) {
        $numeroDado = rand(1, 6);
        $direccion = '../Imagenes/dado' . $numeroDado . '.png';
        echo "<img src='$direccion' style='width: 200px; margin: 20px;'>";
        $suma += $numeroDado;
        $resultados[] = $numeroDado;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <title>Programación Web II</title>
</head>

<body>
<div class="hero">
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
</div>

<div class="content">
    <h1 class="text-center pt-5 text-white fw-bold">Programación Web II - UNLaM - Agustín Elián D'Angelo</h1>

    <h3 class="text-center mt-5 text-white fw-bold">Ejercicio 11 | Lanzar Dados</h3>
    <div class="btn btn-info mt-3 d-flex align-items-center justify-content-center">
        <a href="../index.php" class="text-decoration-none text-white fw-bold">VOLVER al INICIO</a>
    </div>

    <?php if (!empty($resultados)): ?>
        <h4 class="text-center mt-5 text-white fw-bold">RESULTADO OBTENIDO: <?= $suma ?></h4>

        <div class="d-flex justify-content-center align-items-center mt-3">
            <?php foreach ($resultados as $valor): ?>
                <div class="text-white mx-2 fw-bold">[<?= $valor ?>]</div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <h4 class="text-center mt-5 text-white fw-bold">No se seleccionó cantidad de dados.</h4>
        <div class="text-center">
            <a href='index.php' class="btn btn-primary mt-3"><--</a>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
