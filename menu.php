<nav class="navbar navbar-expand-md px-0">
    <button class="navbar-toggler mb-1 btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-1"><i class="fas fa-bars"></i></span>
    </button>
    <div class="col-12 justify-content-between collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="i-s-p-c navbar-nav mr-auto text-center div-menu">
            <li class="nav-item pr-5">
                <a class="nav-link <?php echo $pg == "inicio" ? "active" : " "; ?>" href="index.php">Inicio</a>
            </li>
            <li class="nav-item pr-5">
                <a class="nav-link <?php echo $pg == "sobre-mi" ? "active" : " "; ?>" href="sobre-mi.php">Sobre mí</a>
            </li>
            <li class="nav-item pr-5">
                <a class="nav-link <?php echo $pg == "proyectos" ? "active" : " "; ?>" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item pr-5">
                <a class="nav-link <?php echo $pg == "contacto" ? "active" : " "; ?>" href="contacto.php">Contacto</a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0 div-menu">
            <a href="css/Tamara Omelaniuk C.V.pdf" class="btn text-white">Descargar mi CV <i class="fas fa-download"></i></a>
        </div>
    </div>
</nav>