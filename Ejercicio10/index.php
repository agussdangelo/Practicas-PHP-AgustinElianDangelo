<?php
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['imagen']) && isset($_POST['texto'])) {

    $descripcionImagen = $_POST['texto'];
    $carpetaDestino = '../Imagenes/';
    if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino, 0777, true);
    }

    for ($i = 0; $i < count($_FILES['imagen']['name']); $i++) {
        if ($_FILES['imagen']['error'][$i] === 0) {
            $nombreImagen = basename($_FILES['imagen']['name'][$i]);
            $rutaFinal = $carpetaDestino . $nombreImagen;

            if (move_uploaded_file($_FILES['imagen']['tmp_name'][$i], $rutaFinal)) {
                $resultado .= "<div><a href='vistaimagen.php?img=$rutaFinal&desc=" . urlencode($descripcionImagen) . "' target='_blank'>$descripcionImagen</a></div>";
            } else {
                $resultado .= "<div>Error al subir: $nombreImagen</div>";
            }
        }
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

    <h3 class="text-center mt-5 text-white fw-bold">Ejercicio 10 | Insta-Reciclado</h3>
    <div class="btn btn-info mt-3 d-flex align-items-center justify-content-center">
        <a href="../index.php" class="text-decoration-none text-white fw-bold">VOLVER al INICIO</a>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-5">
        <iframe src="../Consignas/Ejercicio%2010.pdf" width="600" height="600"></iframe>
    </div>

    <h4 class="text-center mt-5 text-white fw-bold">INGRESE el LINK de la IMAGEN a VISUALIZAR</h4>

    <form action="" method="post" class="d-flex flex-column align-items-center" enctype="multipart/form-data">
        <div class="d-flex align-items-center mt-4">
            <label for="imagen" class="text-white fw-bold me-2">Archivo: </label>
            <input type="file" name="imagen[]" id="imagen" multiple required>
        </div>

        <div class="d-flex align-items-center mt-4">
            <label for="texto" class="text-white fw-bold me-2">Nombre: </label>
            <input type="text" name="texto" id="texto" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>

    <div class="text-center mt-4 text-white fw-bold fs-5">
        <?php echo $resultado; ?>
    </div>
</div>

</body>
</html>