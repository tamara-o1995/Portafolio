<?php include_once("menu.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="styesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body class="img-fondo-a">
    <header>
        <div class="container">
            <?php
            $pg = "inicio";
            include_once("menu.php");
            ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 text-center div-cohete">
                    <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                    <div class="presentacion">
                        <p class="p-1">Hola mi nombre es <a href="sobre-mi.php" span class="tamara">Tamara</span></a>, soy desarroladora full stack.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.php" class="conocer-proyectos shadow">Conoce mis proyectos</a>
                </div>
            </div>

        </div>
    </main>
    <?php
    $fo = "footer-a";
    include_once("footer.php");
    ?>
</body>

</html>