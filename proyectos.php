
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="styesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body class="img-fondo-b">
    <header>
        <div class="container">
            <?php 
                $pg = "proyectos";
                include_once("menu.php");
            ?>   
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-sm-5 titulo">
                    <h1>Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 my-4">
                    <p>Los siguientes son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row">
                <div class="pro col-sm-4 col-12">
                    <div class="pro row card m-1">
                        <img class="img-fluid" src="images/abmclientes.png" alt="ABM Clientes" title="ABM Clientes">
                        <div class="col-12 color-gradiente py-3">
                            <h2>ABM Clientes</h2>
                        </div>
                        <div class="texto col-12 py-3">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="row p-3 pb-0">
                            <div class="col-6">
                                <a href="http://localhost/php/abmclientes/index.php" class="btn text-white btn-rojo" target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com/tamara-o1995/php/tree/master/abmclientes" class="link-rojo" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="pro row card m-1">
                        <img class="img-fluid" src="images/abmventas.png" alt="Sistema de Gestión de Ventas" title="Sistema de Gestión de Ventas">
                        <div class="col-12 color-gradiente py-3">
                            <h2>Sistema de gestión de ventas</h2>
                        </div>
                        <div class="texto col-12 py-3">
                            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>
                        <div class="row p-3 pb-0">
                            <div class="col-6">
                                <a href="http://localhost/php/login/login.php" class="btn text-white btn-rojo" target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com/tamara-o1995/login" class="link-rojo" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="pro row card m-1">
                        <img class="img-fluid" src="images/sistema-admin.png" alt="Proyecto" title="Proyecto">
                        <div class="col-12 color-gradiente py-3">
                            <h2>Proyecto integrador</h2>
                        </div>
                        <div class="texto col-12 py-3">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                        </div>
                        <div class="row p-3 pb-0">
                            <div class="col-6">
                                <a href="#" class="btn text-white btn-rojo" target="_blank">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com/tamara-o1995?tab=repositories" class="link-rojo" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
    <?php
    $fo = "footer-b";
    include_once("footer.php");
    ?>
</body>

</html>