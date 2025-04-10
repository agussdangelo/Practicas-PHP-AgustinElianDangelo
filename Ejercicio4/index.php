<?php
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
    include 'ejercicio4.php';
    $numero = $_POST['numero'];
    $resultado = "<p>El NÚMERO INCREMENTADO es: " . incrementar($numero) . "</p>";
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

        <h3 class="text-center mt-5 text-white fw-bold">Ejercicio 4 | Incrementar</h3>
        <div class="btn btn-info mt-3 d-flex align-items-center justify-content-center">
            <a href="../index.php" class="text-decoration-none text-white fw-bold">VOLVER al INICIO</a>
        </div>

        <h4 class="text-center mt-5 text-white fw-bold">INGRESE el NUMERO a INCREMENTAR</h4>

        <form action="" method="post" class="d-flex flex-column align-items-center">
            <div class="d-flex align-items-center mt-4">
                <label for="numero" class="text-white fw-bold me-2">Número: </label>
                <input type="text" name="numero" id="numero">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>

        <div class="text-center mt-4 text-white fw-bold fs-5">
            <?php echo $resultado; ?>
        </div>
    </div>

</body>
</html>