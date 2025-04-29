<?php
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

    <h3 class="text-center mt-5 text-white fw-bold">Ejercicio 12 | Contador de visitas extraterrestres</h3>
    <div class="btn btn-info mt-3 d-flex align-items-center justify-content-center">
        <a href="../index.php" class="text-decoration-none text-white fw-bold">VOLVER al INICIO</a>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-5">
        <iframe src="../Consignas/Ejercicio%2011-12.pdf" width="600" height="600"></iframe>
    </div>

    <h4 class="text-center mt-5 text-white fw-bold">INGRESE los DATOS del VISITANTE</h4>

    <form action="planeta.php" method="post" class="d-flex flex-column align-items-center" enctype="multipart/form-data">
        <div class="d-flex align-items-center mt-4">
            <label for="nombre" class="text-white fw-bold me-2">Nombre del Visitante: </label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div class="d-flex align-items-center mt-4">
            <label for="planeta" class="text-white fw-bold me-2">Planeta: </label>
            <select name="planeta" id="planeta" class="form-select">
                <option value="1">Mercurio</option>
                <option value="2">Venus</option>
                <option value="3">Tierra</option>
                <option value="4">Marte</option>
                <option value="5">Jupiter</option>
                <option value="6">Saturno</option>
                <option value="7">Urano</option>
                <option value="8">Neptuno</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3 mb-3">Enviar</button>
    </form>

</div>

</body>
</html>