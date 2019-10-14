<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consolas</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->load->view('include/headerPrincipal.php'); ?>
</head>
<body>

<div class="navegacion mt-3 py-1">
    <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" aria-label="Mostrar Navegacion">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand d-lg-none">Carolina Spa</a>
        <div class="container">
            <div class="collapse navbar-collapse w-100" id="nav_principal">
                <ul class="nav nav-justified w-100 flex-column flex-sm-row">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="nosotros.html" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="servicios.html" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="productos.html" class="nav-link">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.html" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div> <!--.collapse-->
        </div><!--.container-->
    </nav>
</div>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/producto_01.jpg" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block py-3 px-5">Producto 1</h2>
        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row no-gutters">
        <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Producto 1
            </h2>

            <p>Nulla in orci at est porta egestas id accumsan nisl. Sed cursus ante elit, non dapibus lectus ullamcorper ac. Donec finibus est vitae semper ultrices. Maecenas ante leo, ornare eget feugiat et, dignissim eget erat. Quisque semper felis in ante ornare, in tristique diam scelerisque. Nullam imperdiet luctus porttitor. Curabitur dictum lorem lorem, at facilisis sapien fermentum vel. In commodo arcu felis, id luctus ex bibendum at. Etiam tempus vehicula est eget pellentesque. Morbi quis lorem varius, tincidunt arcu ut, lacinia dolor. Suspendisse ac lacinia metus, et pellentesque justo. Ut nec arcu eu nulla finibus dapibus.</p>

            <p>Quisque arcu odio, consequat a leo eu, lobortis feugiat purus. Phasellus lectus nulla, convallis sit amet sollicitudin ac, placerat vulputate augue. Morbi lorem lectus, tincidunt et quam quis, rhoncus vulputate purus. Etiam ultrices ut justo ut blandit. Suspendisse at nisi eget quam porta tempor sed eu nibh. Suspendisse vehicula bibendum blandit. Curabitur laoreet malesuada commodo. </p>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar pt-5 descripcion_producto">
                <h2 class="text-center text-uppercase mt-4">Descripción</h2>
                <p class="text-center">Suspendisse vehicula bibendum blandit. Curabitur laoreet malesuada commodo. </p>

                <h3 class="text-uppercase text-center mt-5">Precio</h3>
                <p class="display-4 text-center ">$25.00</p>
            </div>
        </aside>
    </div>
</div>


<footer class="footer-sitio pt-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                <p class="text-justify">Praesent pulvinar dolor eu metus mollis egestas. Vestibulum efficitur, magna quis laoreet rutrum, eros ipsum rutrum erat, a facilisis neque dui ullamcorper metus.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="text-uppercase  pb-4">Horario</h3>
                <p>Lun-Vie: 9 AM - 7PM</p>
                <p>Sábado: 10 AM - 2PM</p>
                <p>Domingo: Cerrado</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="text-uppercase pb-4">Contacto</h3>
                <p>66 East Sunnyslope Avenue </p>
                <p>Lansdowne, PA 19050</p>
                <nav class="sociales text-center">
                    <ul>
                        <li>
                            <a href="http://facebook.com">
                                <span class="sr-only"> Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com">
                                <span class="sr-only"> Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com">
                                <span class="sr-only"> Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://pinterest.com">
                                <span class="sr-only"> Pinterest</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://youtube.com">
                                <span class="sr-only"> YouTube</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> <!--col-md-4-->
            <hr class="w-100">
            <p class="text-center copyright w-100">Carolina Spa & Salon 2018. Todos los derechos reservados</p>
        </div><!--.row-->
    </div> <!--.container-->

</footer>
</body>
</html>