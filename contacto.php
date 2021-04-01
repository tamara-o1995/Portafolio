<?php include_once("menu.php");?>

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
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 mt-4">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por <a href="https://api.whatsapp.com/send?phone=542494466495">whatsapp</a>.</p>
                </div>
                <div class="col-sm-6 col-12 mt-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control shadow" placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control shadow" placeholder="Correo">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow" placeholder="Comentario"></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn-enviar" type="submit">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <footer>
        <div class="container foo-a">
            <div class="row mt-3">
                <div class="col-sm-3 col-12 text-sm-left pb-sm-0 pb-3 iconos">
                    <a href="https://github.com/tamara-o1995" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/tamara-omelaniuk-4942781ba/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <a href="mailto:info@depcsuite.com">omelaniukt@gmail.com</a>
                </div>
                <div class="col-sm-3 col-12 text-right wapp">
                    <a href="https://api.whatsapp.com/send?phone=542494466495" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>