<?php
include_once("PHPMailer/src/PHPMailer.php");
include_once("PHPMailer/src/SMTP.php");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
            $pg = "contacto";
            include_once("menu.php");
            ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-sm-5 titulo">
                    <h1>Gracias por contactarte</h1>
                    <p class="mt-4 mb-5">Te estaré respondiendo a la brevedad</p>
                </div>
            </div>
        </div>

    </main>
    <div class="fixed-bottom">
    <?php
        $fo = "footer-a";
        include_once("footer.php");
        ?>
    </div>
        
</body>

</html>