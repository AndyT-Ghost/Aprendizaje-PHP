<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bases_php/CSS/estilos.css">;
    <title>PHP</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <?php
    $usuario = "Estudiante";    
    ?>

    <p>Hola <?= $usuario ?>?></p>

    <script src="/bases_php/JS/script.js">
        saludo();
    </script>
</body>
</html>