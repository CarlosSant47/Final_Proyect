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
                        <a href="" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div> <!--.collapse-->
        </div><!--.container-->
    </nav>
</div>


<div class="container">
    <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
            <li data-target="#slider-principal" data-slide-to="1"></li>
            <li data-target="#slider-principal" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="<?= base_url() ?>assets/img/slide_01.jpg" alt="Nuestras Instalaciones">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevas Instalaciones</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() ?>assets/img/slide_02.jpg" alt="Conoce nuestros servicios">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Conoce nuestros servicios</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() ?>assets/img/slide_03.jpg" alt="Promoción">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevo sitio web, 2x1 en todos los servicios</h3>
                </div>
            </div> <!--.carousel-item-->

        </div> <!--.carousel-inner-->

        <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#slider-principal" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
    </div>
</div>

<section class="nuevo-sitio py-5">
    <h1 class="text-center text-uppercase mt-4 encabezado">
        <span class="text-lowercase d-block">bienvenido a nuestro </span> sitio Web
    </h1>
    <p class="text-center mt-4">Te sentirás como nuevo(a) con nuestros <br>
        masajistas profesionales.</p>
</section>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="<?= base_url() ?>assets/img/servicio_01.jpg" class="img-fluid">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                        </h2>
                        <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div> <!--.row-->
            </div> <!--.imagen-destacada-->
        </div> <!--.col-md-4-->
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="<?= base_url() ?>assets/img/servicio_02.jpg" class="img-fluid">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase d-block">Nuestros</span> servicios
                        </h2>
                        <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div> <!--.row-->
            </div> <!--.imagen-destacada-->
        </div> <!--.col-md-4-->
        <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
                <img src="<?= base_url() ?>assets/img/servicio_03.jpg" class="img-fluid">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 pt-4 servicio-info">
                        <h2 class="text-center text-uppercase encabezado">
                            <span class="text-lowercase d-block">Visita nuestra</span> tienda
                        </h2>
                        <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                    </div>
                </div> <!--.row-->
            </div> <!--.imagen-destacada-->
        </div> <!--.col-md-4-->
    </div>
</div>



<section class="productos container py-5">
    <h2 class="encabezado text-center text-uppercase mt-4">
        <span class="text-lowercase d-block">nuestros</span> productos
    </h2>
    <div class="row py-5">
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="#">
                    <img class="card-img-top" src="<?= base_url() ?>assets/img/producto_mini_01.jpg">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase">Producto 1</h3>
                        <p class="card-text text-uppercase">
                            Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                        </p>
                        <p class="precio mb-0 lead text-center">$25</p>
                    </div>
                </a>
            </div> <!--.card-->
        </div><!--.col-md-3-->
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="#">
                    <img class="card-img-top" src="<?= base_url() ?>assets/img/producto_mini_02.jpg">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase">Producto 2</h3>
                        <p class="card-text text-uppercase">
                            Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                        </p>
                        <p class="precio mb-0 lead text-center">$25</p>
                    </div>
                </a>
            </div> <!--.card-->
        </div><!--.col-md-3-->
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="#">
                    <img class="card-img-top" src="<?= base_url() ?>assets/img/producto_mini_03.jpg">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase">Producto 3</h3>
                        <p class="card-text text-uppercase">
                            Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                        </p>
                        <p class="precio mb-0 lead text-center">$25</p>
                    </div>
                </a>
            </div> <!--.card-->
        </div><!--.col-md-3-->
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="#">
                    <img class="card-img-top" src="<?= base_url() ?>assets/img/producto_mini_04.jpg">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase">Producto 4</h3>
                        <p class="card-text text-uppercase">
                            Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                        </p>
                        <p class="precio mb-0 lead text-center">$25</p>
                    </div>
                </a>
            </div> <!--.card-->
        </div><!--.col-md-3-->
    </div><!--.row-->
</section>


<div class="citas container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center">
            <h3 class="text-uppercase">Realiza una cita</h3>
            <p class="mt-5">
                Maecenas rhoncus, augue sed volutpat suscipit, augue felis laoreet lectus, vel convallis diam est eu lectus. Mauris metus orci, tempus nec bibendum eget, pulvinar at metus. Etiam egestas sodales auctor.
            </p>
            <a href="#" class="btn btn-primary mt-3 text-uppercase">Leer más</a>
        </div>
    </div>
</div>

<footer class="footer-sitio pt-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                <p class="text-justify">Praesent pulvinar dolor eu metus mollis egestas. Vestibulum efficitur, magna quis laoreet rutrum, eros ipsum rutrum erat, a facilisis neque dui ullamcorper metus.</p>
            </div>

            <div class="col-md-6 text-center">
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
            <p class="text-center copyright w-100">Videojuegos 2019. Todos los derechos reservados</p>
        </div><!--.row-->
    </div> <!--.container-->

</footer>
</body>
</html>