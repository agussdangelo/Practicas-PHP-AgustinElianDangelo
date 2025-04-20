<?php
$rutaImagen = isset($_GET['img']) ? $_GET['img'] : "";
$descripcion = isset($_GET['desc']) ? $_GET['desc'] : "";

// ¿Existe en la URL un valor llamado img? Si sí existe (es decir, si alguien mando ?img=algo en la URL): $rutaImagen se llena con ese valor ($_GET['img']).
// Si NO existe: $rutaImagen queda como una cadena vacía ("").

// Lo mismo con la descripcion
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

    <h4 class="text-center mt-5 text-white fw-bold">SU IMAGEN ES: </h4>

    <?php if ($rutaImagen && file_exists($rutaImagen)): ?>
        <div class="d-flex justify-content-center align-items-center"><img src="<?php echo $rutaImagen; ?>" alt="Imagen subida" class="img-fluid mt-4"></div>
        <div><?php echo $descripcion; ?></div>
    <?php else: ?>
        <p>No se encontró la imagen.</p>
    <?php endif; ?>

    <p class="text-center text-white fw-bold fs-5"><?php echo htmlspecialchars($descripcion); ?></p>
</div>

</body>
</html>