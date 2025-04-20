<?php
function getImagen($numero){
    switch ($numero) {
        case 1: return "thumb/2/2c/Alea_1.png/64px-Alea_1.png";
        case 2: return "thumb/b/b8/Alea_2.png/64px-Alea_2.png";
        case 3: return "thumb/2/2f/Alea_3.png/64px-Alea_3.png";
        case 4: return "thumb/8/8d/Alea_4.png/64px-Alea_4.png";
        case 5: return "thumb/5/55/Alea_5.png/64px-Alea_5.png";
        case 6: return "thumb/f/f4/Alea_6.png/64px-Alea_6.png";
    }
}

$suma = 0;
$resultados = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dados'])) {
    $cantidad = intval($_POST['dados']);

    for ($i = 0; $i < $cantidad; $i++) {
        $dado = rand(1, 6);
        $resultados[] = $dado;
        $suma += $dado;
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/<?= getImagen($valor) ?>" alt="Dado <?= $valor ?>" width="60">
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <h4 class="text-center mt-5 text-white fw-bold">No se seleccionó cantidad de dados.</h4>
        <div class="text-center">
            <a href='index.php' class="btn btn-primary mt-3">Volver</a>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
